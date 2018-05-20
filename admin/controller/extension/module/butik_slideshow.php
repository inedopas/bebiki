<?php
class ControllerExtensionModuleButikSlideshow extends Controller {
    private $error = array();

    public function index() {
        $this->load->language('extension/module/butik_slideshow');

        $this->document->setTitle($this->language->get('heading_title'));

        $this->load->model('setting/module');

        $this->load->model('localisation/language');
        $data['languages'] = $this->model_localisation_language->getLanguages();

        $this->document->addScript('view/javascript/jscolor.js');

        if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
            if (!isset($this->request->get['module_id'])) {
                $this->model_setting_module->addModule('butik_slideshow', $this->request->post);
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

        if (isset($this->error['width'])) {
            $data['error_width'] = $this->error['width'];
        } else {
            $data['error_width'] = '';
        }

        if (isset($this->error['height'])) {
            $data['error_height'] = $this->error['height'];
        } else {
            $data['error_height'] = '';
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
                'href' => $this->url->link('extension/module/butik_slideshow', 'user_token=' . $this->session->data['user_token'], true)
            );
        } else {
            $data['breadcrumbs'][] = array(
                'text' => $this->language->get('heading_title'),
                'href' => $this->url->link('extension/module/butik_slideshow', 'user_token=' . $this->session->data['user_token'] . '&module_id=' . $this->request->get['module_id'], true)
            );
        }

        if (!isset($this->request->get['module_id'])) {
            $data['action'] = $this->url->link('extension/module/butik_slideshow', 'user_token=' . $this->session->data['user_token'], true);
        } else {
            $data['action'] = $this->url->link('extension/module/butik_slideshow', 'user_token=' . $this->session->data['user_token'] . '&module_id=' . $this->request->get['module_id'], true);
        }

        $data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true);

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

        if (isset($this->request->post['width'])) {
            $data['width'] = $this->request->post['width'];
        } elseif (!empty($module_info)) {
            $data['width'] = $module_info['width'];
        } else {
            $data['width'] = '';
        }

        if (isset($this->request->post['height'])) {
            $data['height'] = $this->request->post['height'];
        } elseif (!empty($module_info)) {
            $data['height'] = $module_info['height'];
        } else {
            $data['height'] = '';
        }

        if (isset($this->request->post['status'])) {
            $data['status'] = $this->request->post['status'];
        } elseif (!empty($module_info)) {
            $data['status'] = $module_info['status'];
        } else {
            $data['status'] = '';
        }

        if (isset($this->request->post['transition_style'])) {
            $data['transition_style'] = $this->request->post['transition_style'];
        } elseif (!empty($module_info)) {
            $data['transition_style'] = $module_info['transition_style'];
        } else {
            $data['transition_style'] = '';
        }

        if (isset($this->request->post['banners_auto_play'])) {
            $data['banners_auto_play'] = $this->request->post['banners_auto_play'];
        } elseif (!empty($module_info)) {
            $data['banners_auto_play'] = $module_info['banners_auto_play'];
        } else {
            $data['banners_auto_play'] = '3000';
        }

        if (isset($this->request->post['banners_navigation'])) {
            $data['banners_navigation'] = $this->request->post['banners_navigation'];
        } elseif (!empty($module_info)) {
            $data['banners_navigation'] = $module_info['banners_navigation'];
        } else {
            $data['banners_navigation'] = '';
        }

        if (isset($this->request->post['banners_pagination'])) {
            $data['banners_pagination'] = $this->request->post['banners_pagination'];
        } elseif (!empty($module_info)) {
            $data['banners_pagination'] = $module_info['banners_pagination'];
        } else {
            $data['banners_pagination'] = '';
        }

        if (isset($this->request->post['banners_hover'])) {
            $data['banners_hover'] = $this->request->post['banners_hover'];
        } elseif (!empty($module_info)) {
            $data['banners_hover'] = $module_info['banners_hover'];
        } else {
            $data['banners_hover'] = '';
        }

        if (isset($this->request->post['banners_color_text'])) {
            $data['banners_color_text'] = $this->request->post['banners_color_text'];
        } elseif (!empty($module_info)) {
            $data['banners_color_text'] = $module_info['banners_color_text'];
        } else {
            $data['banners_color_text'] = '';
        }

        $this->load->model('tool/image');

        if (isset($this->request->post['banners_added'])) {
            $results = $this->request->post['banners_added'];
        } elseif (!empty($module_info)) {
            $results = $module_info['banners_added'];
        } else {
            $results = array();
        }

        $data['banners_added'] = array();

        foreach ($results as $result) {
            if (is_file(DIR_IMAGE . $result['image'])) {
                $image = $result['image'];
                $thumb = $result['image'];
            } else {
                $image = '';
                $thumb = 'no_image.png';
            }

            $data['banners_added'][] = array(
                'image'        => $image,
                'thumb'        => $this->model_tool_image->resize($thumb, 100, 100),
                'link'         => $result['link'],
                'text_position'=> $result['text_position'],
                'title'        => $result['title'],
                'description'  => $result['description'],
                'button'       => $result['button'],
            );
        }

        $data['placeholder'] = $this->model_tool_image->resize('no_image.png', 100, 100);

        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('extension/module/butik_slideshow', $data));
    }

    protected function validate() {
        if (!$this->user->hasPermission('modify', 'extension/module/butik_slideshow')) {
            $this->error['warning'] = $this->language->get('error_permission');
        }

        if ((utf8_strlen($this->request->post['name']) < 3) || (utf8_strlen($this->request->post['name']) > 64)) {
            $this->error['name'] = $this->language->get('error_name');
        }

        if (!$this->request->post['width']) {
            $this->error['width'] = $this->language->get('error_width');
        }

        if (!$this->request->post['height']) {
            $this->error['height'] = $this->language->get('error_height');
        }

        return !$this->error;
    }

}
