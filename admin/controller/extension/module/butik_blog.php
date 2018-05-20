<?php
class ControllerExtensionModuleButikBlog extends Controller {
    private $error = array();

    public function index() {
        $this->load->language('extension/module/butik_blog');

        $this->document->setTitle($this->language->get('heading_title'));
        $this->load->model('setting/module');

        if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
            if (!isset($this->request->get['module_id'])) {
                $this->model_setting_module->addModule('butik_blog', $this->request->post);
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
                'href' => $this->url->link('extension/module/butik_blog', 'user_token=' . $this->session->data['user_token'], true)
            );
        } else {
            $data['breadcrumbs'][] = array(
                'text' => $this->language->get('heading_title'),
                'href' => $this->url->link('extension/module/butik_blog', 'user_token=' . $this->session->data['user_token'] . '&module_id=' . $this->request->get['module_id'], true)
            );
        }

        if (!isset($this->request->get['module_id'])) {
            $data['action'] = $this->url->link('extension/module/butik_blog', 'user_token=' . $this->session->data['user_token'], true);
        } else {
            $data['action'] = $this->url->link('extension/module/butik_blog', 'user_token=' . $this->session->data['user_token'] . '&module_id=' . $this->request->get['module_id'], true);
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

        if (isset($this->request->post['limit'])) {
            $data['limit'] = $this->request->post['limit'];
        } elseif (!empty($module_info)) {
            $data['limit'] = $module_info['limit'];
        } else {
            $data['limit'] = 5;
        }

        if (isset($this->request->post['description'])) {
            $data['description'] = $this->request->post['description'];
        } elseif (!empty($module_info)) {
            $data['description'] = $module_info['description'];
        } else {
            $data['description'] = 300;
        }

        if (isset($this->request->post['width'])) {
            $data['width'] = $this->request->post['width'];
        } elseif (!empty($module_info)) {
            $data['width'] = $module_info['width'];
        } else {
            $data['width'] = 360;
        }

        if (isset($this->request->post['height'])) {
            $data['height'] = $this->request->post['height'];
        } elseif (!empty($module_info)) {
            $data['height'] = $module_info['height'];
        } else {
            $data['height'] = 200;
        }

        if (isset($this->request->post['status'])) {
            $data['status'] = $this->request->post['status'];
        } elseif (!empty($module_info)) {
            $data['status'] = $module_info['status'];
        } else {
            $data['status'] = '';
        }

        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('extension/module/butik_blog', $data));
    }

    protected function validate() {
        if (!$this->user->hasPermission('modify', 'extension/module/butik_blog')) {
            $this->error['warning'] = $this->language->get('error_permission');
        }

        if ((utf8_strlen($this->request->post['name']) < 3) || (utf8_strlen($this->request->post['name']) > 64)) {
            $this->error['name'] = $this->language->get('error_name');
        }

        return !$this->error;
    }

    public function install(){
        $this->db->query("CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "blog` (
        `blog_id` int(11) NOT NULL AUTO_INCREMENT,
        `image` varchar(255) DEFAULT NULL,
        `date_added` datetime NOT NULL,
        `bottom` int(1) NOT NULL DEFAULT '0',
        `sort_order` int(3) NOT NULL DEFAULT '0',
        `status` tinyint(1) NOT NULL DEFAULT '1',
        PRIMARY KEY (`blog_id`)
        ) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;");

        $this->db->query("CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "blog_description` (
        `blog_id` int(11) NOT NULL,
        `language_id` int(11) NOT NULL,
        `title` varchar(64) NOT NULL,
        `description` text NOT NULL,
        `meta_title` varchar(255) NOT NULL,
        `meta_h1` varchar(255) NOT NULL,
        `meta_description` varchar(255) NOT NULL,
        `meta_keyword` varchar(255) NOT NULL,
        PRIMARY KEY (`blog_id`,`language_id`)
        ) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;");

        $this->db->query("CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "blog_to_layout` (
        `blog_id` int(11) NOT NULL,
        `store_id` int(11) NOT NULL,
        `layout_id` int(11) NOT NULL,
        PRIMARY KEY (`blog_id`,`store_id`)
        ) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;");

        $this->db->query("CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "blog_to_store` (
        `blog_id` int(11) NOT NULL,
        `store_id` int(11) NOT NULL,
        PRIMARY KEY (`blog_id`,`store_id`)
        ) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;");

        $this->db->query("INSERT INTO ". DB_PREFIX ."seo_url (query, keyword) VALUES ('information/butik_blog', 'news')");
    }

    public function uninstall() {
        $this->db->query("DROP TABLE IF EXISTS `" . DB_PREFIX . "blog`");
        $this->db->query("DROP TABLE IF EXISTS `" . DB_PREFIX . "blog_description`");
        $this->db->query("DROP TABLE IF EXISTS `" . DB_PREFIX . "blog_to_layout`");
        $this->db->query("DROP TABLE IF EXISTS `" . DB_PREFIX . "blog_to_store`");
        $this->db->query('DELETE FROM '. DB_PREFIX . 'seo_url WHERE `query` = "information/butik_blog"');
    }
}