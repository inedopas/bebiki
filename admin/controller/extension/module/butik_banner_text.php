<?php
class ControllerExtensionModuleButikBannerText extends Controller {
    private $error = array();

    public function index() {
        $this->load->language('extension/module/butik_banner_text');
        $this->load->model('localisation/language');

        $this->document->setTitle($this->language->get('heading_title'));

        $this->load->model('setting/module');
        $this->load->model('tool/image');

        if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
            if (!isset($this->request->get['module_id'])) {
                $this->model_setting_module->addModule('butik_banner_text', $this->request->post);
            } else {
                $this->model_setting_module->editModule($this->request->get['module_id'], $this->request->post);
            }
            $this->session->data['success'] = $this->language->get('text_success');
            $this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true));
        }

        if (isset($this->error['warning'])) {
            $data['error_warning'] = $this->error['warning'];
        } else {
            $data['error_warning'] = '';
        }

        if (isset($this->error['name'])) {
            $data['error_name'] = $this->error['name'];
        } else {
            $data['error_name'] = '';
        }

        $data['breadcrumbs'] = array();

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
        );

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_extension'),
            'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true)
        );

        if (!isset($this->request->get['module_id'])) {
            $data['breadcrumbs'][] = array(
                'text' => $this->language->get('heading_title'),
                'href' => $this->url->link('extension/module/butik_banner_text', 'user_token=' . $this->session->data['user_token'], true)
            );
        } else {
            $data['breadcrumbs'][] = array(
                'text' => $this->language->get('heading_title'),
                'href' => $this->url->link('extension/module/butik_banner_text', 'user_token=' . $this->session->data['user_token'] . '&module_id=' . $this->request->get['module_id'], true)
            );
        }

        if (!isset($this->request->get['module_id'])) {
            $data['action'] = $this->url->link('extension/module/butik_banner_text', 'user_token=' . $this->session->data['user_token'], true);
        } else {
            $data['action'] = $this->url->link('extension/module/butik_banner_text', 'user_token=' . $this->session->data['user_token'] . '&module_id=' . $this->request->get['module_id'], true);
        }

        $data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'], true);

        if (isset($this->request->get['module_id']) && ($this->request->server['REQUEST_METHOD'] != 'POST')) {
            $module_info = $this->model_setting_module->getModule($this->request->get['module_id']);
        }

        if (isset($this->request->post['name'])) {
            $data['name'] = $this->request->post['name'];
        } elseif (!empty($module_info)) {
            $data['name'] = $module_info['name'];
        } else {
            $data['name'] = '';
        }

        if (isset($this->request->post['banner_text_columns'])) {
            $data['banner_text_columns'] = $this->request->post['banner_text_columns'];
        } elseif (!empty($module_info)) {
            $data['banner_text_columns'] = $module_info['banner_text_columns'];
        } else {
            $data['banner_text_columns'] = '';
        }

        if (isset($this->request->post['status'])) {
            $data['status'] = $this->request->post['status'];
        } elseif (!empty($module_info)) {
            $data['status'] = $module_info['status'];
        } else {
            $data['status'] = '';
        }

        if (isset($this->request->post['butik_text_banner1_status'])) {
            $data['butik_text_banner1_status'] = $this->request->post['butik_text_banner1_status'];
        } elseif (!empty($module_info)) {
            $data['butik_text_banner1_status'] = $module_info['butik_text_banner1_status'];
        } else {
            $data['butik_text_banner1_status'] = false;
        }

        if (isset($this->request->post['butik_text_banner2_status'])) {
            $data['butik_text_banner2_status'] = $this->request->post['butik_text_banner2_status'];
        } elseif (!empty($module_info)) {
            $data['butik_text_banner2_status'] = $module_info['butik_text_banner2_status'];
        } else {
            $data['butik_text_banner2_status'] = false;
        }

        if (isset($this->request->post['butik_text_banner3_status'])) {
            $data['butik_text_banner3_status'] = $this->request->post['butik_text_banner3_status'];
        } elseif (!empty($module_info)) {
            $data['butik_text_banner3_status'] = $module_info['butik_text_banner3_status'];
        } else {
            $data['butik_text_banner3_status'] = false;
        }

        if (isset($this->request->post['butik_text_banner4_status'])) {
            $data['butik_text_banner4_status'] = $this->request->post['butik_text_banner4_status'];
        } elseif (!empty($module_info)) {
            $data['butik_text_banner4_status'] = $module_info['butik_text_banner4_status'];
        } else {
            $data['butik_text_banner4_status'] = false;
        }

        // Icon 1
        if (isset($this->request->post['butik_banner_img_icon1'])) {
            $data['butik_banner_img_icon1'] = $this->request->post['butik_banner_img_icon1'];
        } elseif (!empty($module_info)) {
            $data['butik_banner_img_icon1'] = $module_info['butik_banner_img_icon1'];
        } else {
            $data['butik_banner_img_icon1'] = '';
        }

        if (isset($this->request->post['butik_banner_img_icon1']) && is_file(DIR_IMAGE . $this->request->post['butik_banner_img_icon1'])) {
            $data['butik_banner_img1'] = $this->model_tool_image->resize($this->request->post['butik_banner_img_icon1'], 100, 100);
        } elseif (!empty($module_info) && is_file(DIR_IMAGE . $module_info['butik_banner_img_icon1'])) {
            $data['butik_banner_img1'] = $this->model_tool_image->resize($module_info['butik_banner_img_icon1'], 100, 100);
        } else {
            $data['butik_banner_img1'] = $this->model_tool_image->resize('no_image.png', 100, 100);
        }

        // Icon 2
        if (isset($this->request->post['butik_banner_img_icon2'])) {
            $data['butik_banner_img_icon2'] = $this->request->post['butik_banner_img_icon2'];
        } elseif (!empty($module_info)) {
            $data['butik_banner_img_icon2'] = $module_info['butik_banner_img_icon2'];
        } else {
            $data['butik_banner_img_icon2'] = '';
        }

        if (isset($this->request->post['butik_banner_img_icon2']) && is_file(DIR_IMAGE . $this->request->post['butik_banner_img_icon2'])) {
            $data['butik_banner_img2'] = $this->model_tool_image->resize($this->request->post['butik_banner_img_icon2'], 100, 100);
        } elseif (!empty($module_info) && is_file(DIR_IMAGE . $module_info['butik_banner_img_icon2'])) {
            $data['butik_banner_img2'] = $this->model_tool_image->resize($module_info['butik_banner_img_icon2'], 100, 100);
        } else {
            $data['butik_banner_img2'] = $this->model_tool_image->resize('no_image.png', 100, 100);
        }

        // Icon 3
        if (isset($this->request->post['butik_banner_img_icon3'])) {
            $data['butik_banner_img_icon3'] = $this->request->post['butik_banner_img_icon3'];
        } elseif (!empty($module_info)) {
            $data['butik_banner_img_icon3'] = $module_info['butik_banner_img_icon3'];
        } else {
            $data['butik_banner_img_icon3'] = '';
        }

        if (isset($this->request->post['butik_banner_img_icon3']) && is_file(DIR_IMAGE . $this->request->post['butik_banner_img_icon3'])) {
            $data['butik_banner_img3'] = $this->model_tool_image->resize($this->request->post['butik_banner_img_icon3'], 100, 100);
        } elseif (!empty($module_info) && is_file(DIR_IMAGE . $module_info['butik_banner_img_icon3'])) {
            $data['butik_banner_img3'] = $this->model_tool_image->resize($module_info['butik_banner_img_icon3'], 100, 100);
        } else {
            $data['butik_banner_img3'] = $this->model_tool_image->resize('no_image.png', 100, 100);
        }

        // Icon 4
        if (isset($this->request->post['butik_banner_img_icon4'])) {
            $data['butik_banner_img_icon4'] = $this->request->post['butik_banner_img_icon4'];
        } elseif (!empty($module_info)) {
            $data['butik_banner_img_icon4'] = $module_info['butik_banner_img_icon4'];
        } else {
            $data['butik_banner_img_icon4'] = '';
        }

        if (isset($this->request->post['butik_banner_img_icon4']) && is_file(DIR_IMAGE . $this->request->post['butik_banner_img_icon4'])) {
            $data['butik_banner_img4'] = $this->model_tool_image->resize($this->request->post['butik_banner_img_icon4'], 100, 100);
        } elseif (!empty($module_info) && is_file(DIR_IMAGE . $module_info['butik_banner_img_icon4'])) {
            $data['butik_banner_img4'] = $this->model_tool_image->resize($module_info['butik_banner_img_icon4'], 100, 100);
        } else {
            $data['butik_banner_img4'] = $this->model_tool_image->resize('no_image.png', 100, 100);
        }

        if (isset($this->request->post['banner_description1'])) {
            $data['banner_description1'] = $this->request->post['banner_description1'];
        } elseif (!empty($module_info)) {
            $data['banner_description1'] = $module_info['banner_description1'];
        } else {
            $data['banner_description1'] = array();
        }

        if (isset($this->request->post['banner_description2'])) {
            $data['banner_description2'] = $this->request->post['banner_description2'];
        } elseif (!empty($module_info)) {
            $data['banner_description2'] = $module_info['banner_description2'];
        } else {
            $data['banner_description2'] = array();
        }

        if (isset($this->request->post['banner_description3'])) {
            $data['banner_description3'] = $this->request->post['banner_description3'];
        } elseif (!empty($module_info)) {
            $data['banner_description3'] = $module_info['banner_description3'];
        } else {
            $data['banner_description3'] = array();
        }

        if (isset($this->request->post['banner_description4'])) {
            $data['banner_description4'] = $this->request->post['banner_description4'];
        } elseif (!empty($module_info)) {
            $data['banner_description4'] = $module_info['banner_description4'];
        } else {
            $data['banner_description4'] = array();
        }

        $data['placeholder'] = $this->model_tool_image->resize('no_image.png', 100, 100);

        $this->load->model('localisation/language');
        $data['languages'] = $this->model_localisation_language->getLanguages();
        $data['lang'] = $this->language->get('lang');

        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('extension/module/butik_banner_text', $data));
    }

    protected function validate() {
        if (!$this->user->hasPermission('modify', 'extension/module/butik_banner_text')) {
            $this->error['warning'] = $this->language->get('error_permission');
        }

        if ((utf8_strlen($this->request->post['name']) < 3) || (utf8_strlen($this->request->post['name']) > 64)) {
            $this->error['name'] = $this->language->get('error_name');
        }

        return !$this->error;
    }
}