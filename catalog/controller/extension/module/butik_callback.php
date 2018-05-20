<?php
class ControllerExtensionModuleButikCallback extends Controller {
    public function index() {
        $this->load->language('extension/module/butik');
        $data['language_id'] = $this->config->get('config_language_id');
        $this->load->model('catalog/butik_callback');

        $data['module_butik_callback_time'] = $this->config->get('module_butik_callback_time');
        $data['module_butik_callback_comment'] = $this->config->get('module_butik_callback_comment');

        $callback_alert = $this->config->get('module_butik_callback_alert');
        if (isset($callback_alert[$this->config->get('config_language_id')])) {
            $data['callback_alert'] = html_entity_decode($callback_alert[$this->config->get('config_language_id')], ENT_QUOTES, 'UTF-8');
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

        $this->response->setOutput($this->load->view('extension/module/butik_callback', $data));

    }

    public function send(){
        $this->load->language('extension/module/butik');
        $this->load->model('catalog/butik_callback');

        $json = array();

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

            $callback_email = ($this->config->get('module_butik_callback_email')) ? $this->config->get('module_butik_callback_email') : $this->config->get('config_email');

            $firstname = $this->request->post['firstname'];
            $telephone = $this->request->post['telephone'];
            $time = (isset($this->request->post['time'])) ? $this->request->post['time'] : '';
            $comment = (isset($this->request->post['comment'])) ? $this->request->post['comment'] : '';

            $callback_data = array(
                'firstname'    => $firstname,
                'telephone'    => $telephone,
                'time'         => $time,
                'comment'      => $comment
            );

            $this->model_catalog_butik_callback->addCallback($callback_data);

            $body['date_add'] = date('m/d/Y h:i:s a', time());
            $subject = sprintf($this->language->get('entry_callback_title'), html_entity_decode($this->config->get('config_name'), ENT_QUOTES, 'UTF-8'));
            $message  = $this->language->get('entry_callback_title') . " -- " . $body['date_add'] . "\n";
            $message .= $this->language->get('entry_name') . ": " . $this->request->post['firstname'] . "\n";
            $message .= $this->language->get('entry_phone') . ": " . $this->request->post['telephone'] . "\n";
            if ($this->config->get('module_butik_callback_comment')) {
                if($this->request->post['comment'] != '') {
                    $message .= $this->language->get('entry_comment') . ": " . $this->request->post['comment'] . "\n";
                }
            }
            if ($this->config->get('module_butik_callback_time')) {
                if ($this->request->post['time'] != '') {
                    $message .= $this->language->get('entry_time') . ": " . $this->request->post['time'];
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

            $mail->setTo($callback_email);
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