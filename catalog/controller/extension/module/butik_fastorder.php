<?php
class ControllerExtensionModuleButikFastorder extends Controller {
    public function index() {
        $this->load->language('extension/module/butik');
        $data['language_id'] = $this->config->get('config_language_id');
        $this->load->model('catalog/product');

        $data['module_butik_fastorder_address'] = $this->config->get('module_butik_fastorder_address');
        $data['module_butik_fastorder_comment'] = $this->config->get('module_butik_fastorder_comment');

        $fastorder_alert = $this->config->get('module_butik_fastorder_alert');
        if (isset($fastorder_alert[$this->config->get('config_language_id')])) {
            $data['fastorder_alert'] = html_entity_decode($fastorder_alert[$this->config->get('config_language_id')], ENT_QUOTES, 'UTF-8');
        }

        if (isset($this->request->get['product_id'])) {
            $product_id = (int)$this->request->get['product_id'];
        } else {
            $product_id = (int)$this->request->post['product_id'];
        }

        $product_info = $this->model_catalog_product->getProduct($product_id);

        if (isset($this->request->post['product_id'])) {
            $data['product_id'] = (int)$this->request->post['product_id'];
        } elseif (isset($this->request->get['product_id'])) {
            $data['product_id'] = (int)$this->request->get['product_id'];
        } else {
            $data['product_id'] = 0;
        }

        $data['product_name'] = $product_info['name'];

        $this->load->model('tool/image');

        if ($product_info['image']) {
            $data['thumb'] = $this->model_tool_image->resize($product_info['image'], $this->config->get('module_' . $this->config->get('config_theme') . '_fastorder_image_width'), $this->config->get('module_' . $this->config->get('config_theme') . '_fastorder_image_height'));
        } else {
            $data['thumb'] = '';
        }

        if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
            $data['price'] = $this->currency->format($this->tax->calculate($product_info['price'], $product_info['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
        } else {
            $data['price'] = false;
        }

        if ((float)$product_info['special']) {
            $data['special'] = $this->currency->format($this->tax->calculate($product_info['special'], $product_info['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
        } else {
            $data['special'] = false;
        }

        if ($this->customer->isLogged()) {
            $data['firstname'] = $this->customer->getFirstName();
        } else {
            $data['firstname'] = '';
        }

        if ($this->customer->isLogged()) {
            $data['telephone'] = $this->customer->getTelephone();
        } else {
            $data['telephone'] = '';
        }

        if ($this->config->get('theme_butik_agree')) {
            $this->load->model('catalog/information');

            $information_info = $this->model_catalog_information->getInformation($this->config->get('theme_butik_agree'));

            if ($information_info) {
                $data['text_butik_agree'] = sprintf($this->language->get('text_butik_agree'), $this->url->link('information/information/agree', 'information_id=' . $this->config->get('theme_butik_agree'), true), $information_info['title'], $information_info['title']);
            } else {
                $data['text_butik_agree'] = '';
            }
        } else {
            $data['text_butik_agree'] = '';
        }

        if (isset($this->request->post['agree'])) {
            $data['agree'] = $this->request->post['agree'];
        } else {
            $data['agree'] = false;
        }

        $this->response->setOutput($this->load->view('extension/module/butik_fastorder', $data));
    }

    public function send(){
        $this->load->language('extension/module/butik');
        $this->load->model('catalog/butik_fastorder');

        $json = array();

        $fastorder_email = ($this->config->get('module_butik_fastorder_email')) ? $this->config->get('module_butik_fastorder_email') : $this->config->get('config_email');

        if (isset($this->request->post['firstname'])) {
            if ((utf8_strlen(trim($this->request->post['firstname'])) < 3) || (utf8_strlen(trim($this->request->post['firstname'])) > 32)) {
                $json['error']['firstname'] = $this->language->get('error_name');
            }
        }

        if (isset($this->request->post['telephone'])) {
            if ((utf8_strlen(trim($this->request->post['telephone'])) < 3) || (utf8_strlen(trim($this->request->post['telephone'])) > 32)) {
                $json['error']['telephone'] = $this->language->get('error_phone');
            }
        }

        if ($this->config->get('theme_butik_agree')) {
            $this->load->model('catalog/information');

            $information_info = $this->model_catalog_information->getInformation($this->config->get('theme_butik_agree'));

            if ($information_info && !isset($this->request->post['agree'])) {
                $json['error']['warning_butik_agree'] = sprintf($this->language->get('error_butik_agree'), $information_info['title']);
            }
        }

        if(empty($json['error'])){

            $product_name = $this->request->post['product_name'];
            $product_price = $this->request->post['product_price'];
            $firstname = $this->request->post['firstname'];
            $telephone = $this->request->post['telephone'];
            $address = (isset($this->request->post['address'])) ? $this->request->post['address'] : '';
            $comment = (isset($this->request->post['comment'])) ? $this->request->post['comment'] : '';

            $fastorder_data = array(
                'product_name'  => $product_name,
                'product_price' => $product_price,
                'firstname'     => $firstname,
                'telephone'     => $telephone,
                'address'       => $address,
                'comment'       => $comment
            );

            $this->model_catalog_butik_fastorder->addFastorder($fastorder_data);

            $body['date_add'] = date('m/d/Y h:i:s a', time());
            $subject = sprintf($this->language->get('entry_fastorder_title'), html_entity_decode($this->config->get('config_name'), ENT_QUOTES, 'UTF-8'));
            $message  = $this->language->get('entry_fastorder_title') . " -- " . $body['date_add'] . "\n";
            $message .= $this->language->get('entry_product') . ": " . $this->request->post['product_name'] . "\n";
            $message .= $this->language->get('entry_product_price') . ": " . $this->request->post['product_price'] . "\n";
            $message .= $this->language->get('entry_name') . ": " . $this->request->post['firstname'] . "\n";
            $message .= $this->language->get('entry_phone') . ": " . $this->request->post['telephone'] . "\n";
            if($this->config->get('module_butik_fastorder_comment')) {
                if ($this->request->post['comment'] != '') {
                    $message .= $this->language->get('entry_comment') . ": " . $this->request->post['comment'] . "\n";
                }
            }
            if($this->config->get('module_butik_fastorder_address')) {
                if ($this->request->post['address'] != '') {
                    $message .= $this->language->get('entry_address') . ": " . $this->request->post['address'];
                }
            }
            $mail = new Mail();
            $mail->protocol = $this->config->get('config_mail_protocol');
            $mail->parameter = $this->config->get('config_mail_parameter');
            $mail->smtp_hostname = $this->config->get('config_mail_smtp_hostname');
            $mail->smtp_username = $this->config->get('config_mail_smtp_username');
            $mail->smtp_password = html_entity_decode($this->config->get('config_mail_smtp_password'), ENT_QUOTES, 'UTF-8');
            $mail->smtp_port = $this->config->get('config_mail_smtp_port');
            $mail->smtp_timeout = $this->config->get('config_mail_smtp_timeout');

            $mail->setTo($fastorder_email);
            $mail->setFrom($this->config->get('config_email'));
            $mail->setSender(html_entity_decode($this->config->get('config_name'), ENT_QUOTES, 'UTF-8'));
            $mail->setSubject($subject);
            $mail->setText(html_entity_decode($message, ENT_QUOTES, 'UTF-8'));
            $mail->send();

            $json['success'] = true;
        }

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }
}