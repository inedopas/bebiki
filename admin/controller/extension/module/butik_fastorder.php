<?php
class ControllerExtensionModuleButikFastorder extends Controller {
    private $error = array();

    public function index() {
        $this->load->language('extension/module/butik_fastorder');
        $this->document->setTitle($this->language->get('heading_title'));

        $this->load->model('setting/setting');

        $this->load->model('localisation/language');
        $data['languages'] = $this->model_localisation_language->getLanguages();

        if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
            $this->model_setting_setting->editSetting('module_butik_fastorder', $this->request->post);

            $this->session->data['success'] = $this->language->get('text_success');

            $this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true));
        }

        if (isset($this->error['warning'])) {
            $data['error_warning'] = $this->error['warning'];
        } else {
            $data['error_warning'] = '';
        }

        if (isset($this->error['image_fastorder'])) {
            $data['error_image_fastorder'] = $this->error['image_fastorder'];
        } else {
            $data['error_image_fastorder'] = '';
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

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('heading_title'),
            'href' => $this->url->link('extension/module/butik_fastorder', 'user_token=' . $this->session->data['user_token'], true)
        );

        $data['action'] = $this->url->link('extension/module/butik_fastorder', 'user_token=' . $this->session->data['user_token'], true);

        $data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true);

        if (isset($this->request->post['module_butik_fastorder_status'])) {
            $data['module_butik_fastorder_status'] = $this->request->post['module_butik_fastorder_status'];
        } else {
            $data['module_butik_fastorder_status'] = $this->config->get('module_butik_fastorder_status');
        }

        if (isset($this->request->post['module_butik_fastorder_email'])) {
            $data['butik_fastorder_email'] = $this->request->post['module_butik_fastorder_email'];
        } else {
            $data['butik_fastorder_email'] = $this->config->get('module_butik_fastorder_email');
        }

        if (isset($this->request->post['module_butik_fastorder_image_width'])) {
            $data['module_butik_fastorder_image_width'] = $this->request->post['module_butik_fastorder_image_width'];
        } else {
            $data['module_butik_fastorder_image_width'] = $this->config->get('module_butik_fastorder_image_width');
        }

        if (isset($this->request->post['module_butik_fastorder_image_height'])) {
            $data['module_butik_fastorder_image_height'] = $this->request->post['module_butik_fastorder_image_height'];
        } else {
            $data['module_butik_fastorder_image_height'] = $this->config->get('module_butik_fastorder_image_height');
        }

        if (isset($this->request->post['module_butik_fastorder_category'])) {
            $data['module_butik_fastorder_category'] = $this->request->post['module_butik_fastorder_category'];
        } else {
            $data['module_butik_fastorder_category'] = $this->config->get('module_butik_fastorder_category');
        }

        if (isset($this->request->post['module_butik_fastorder_module'])) {
            $data['butik_fastorder_module'] = $this->request->post['module_butik_fastorder_module'];
        } else {
            $data['butik_fastorder_module'] = $this->config->get('module_butik_fastorder_module');
        }

        if (isset($this->request->post['module_butik_fastorder_address'])) {
            $data['butik_fastorder_address'] = $this->request->post['module_butik_fastorder_address'];
        } else {
            $data['butik_fastorder_address'] = $this->config->get('module_butik_fastorder_address');
        }

        if (isset($this->request->post['module_butik_fastorder_comment'])) {
            $data['butik_fastorder_comment'] = $this->request->post['module_butik_fastorder_comment'];
        } else {
            $data['butik_fastorder_comment'] = $this->config->get('module_butik_fastorder_comment');
        }

        if (isset($this->request->post['module_butik_fastorder_alert'])) {
            $data['butik_fastorder_alert'] = $this->request->post['module_butik_fastorder_alert'];
        } else {
            $data['butik_fastorder_alert'] = $this->config->get('module_butik_fastorder_alert');
        }

        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('extension/module/butik_fastorder', $data));
    }

    protected function validate() {
        if (!$this->user->hasPermission('modify', 'extension/module/butik_fastorder')) {
            $this->error['warning'] = $this->language->get('error_permission');
        }

        if (!$this->request->post['module_butik_fastorder_image_width'] || !$this->request->post['module_butik_fastorder_image_height']) {
            $this->error['image_fastorder'] = $this->language->get('error_image_fastorder');
        }

        return !$this->error;
    }

    public function install(){
        $this->db->query("CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "fastorder`
         (`fastorder_id` INT(11) NOT NULL AUTO_INCREMENT,
         `product_name` varchar(255) NOT NULL,
         `product_price` decimal(15,4) NOT NULL,
         `telephone` varchar(32) NOT NULL,
         `firstname` varchar(100) NOT NULL,
         `comment` text NOT NULL,
         `address` varchar(255) NOT NULL,
         `date_added` datetime NOT NULL,
         `language_id` int(11) NOT NULL,
        PRIMARY KEY (`fastorder_id`,`language_id`)
        ) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;");
    }

    public function uninstall()	{
        $this->db->query("DROP TABLE IF EXISTS `" . DB_PREFIX . "fastorder`");
    }
}