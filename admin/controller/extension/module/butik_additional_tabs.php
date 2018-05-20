<?php
class ControllerExtensionModuleButikAdditionalTabs extends Controller {
    private $error = array();

    public function index() {
        $this->load->language('extension/module/butik_additional_tabs');

        $this->document->setTitle($this->language->get('heading_title'));

        $this->load->model('setting/setting');

        if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
            $this->model_setting_setting->editSetting('module_butik_additional_tabs', $this->request->post);

            $this->session->data['success'] = $this->language->get('text_success');

            $this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true));
        }

        if (isset($this->error['warning'])) {
            $data['error_warning'] = $this->error['warning'];
        } else {
            $data['error_warning'] = '';
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
            'href' => $this->url->link('extension/module/butik_additional_tabs', 'user_token=' . $this->session->data['user_token'], true)
        );

        $data['action'] = $this->url->link('extension/module/butik_additional_tabs', 'user_token=' . $this->session->data['user_token'], true);

        $data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true);

        if (isset($this->request->post['module_butik_additional_tabs_status'])) {
            $data['module_butik_additional_tabs_status'] = $this->request->post['module_butik_additional_tabs_status'];
        } else {
            $data['module_butik_additional_tabs_status'] = $this->config->get('module_butik_additional_tabs_status');
        }

        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('extension/module/butik_additional_tabs', $data));
    }

    protected function validate() {
        if (!$this->user->hasPermission('modify', 'extension/module/butik_additional_tabs')) {
            $this->error['warning'] = $this->language->get('error_permission');
        }

        return !$this->error;
    }

    public function install() {

        $this->db->query("CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "product_addtab` (
        `product_addtab_id` int(11) NOT NULL AUTO_INCREMENT,
        `product_id` int(11) NOT NULL,
        `sort_order` int(11) NOT NULL,
        `status` tinyint(1) NOT NULL,
        PRIMARY KEY (`product_addtab_id`)
        ) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;");

        $this->db->query("CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "product_addtab_description` (
        `product_addtab_id` int(11) NOT NULL AUTO_INCREMENT,
        `language_id` int(11) NOT NULL,
        `product_id` int(11) NOT NULL,
        `title` varchar(64) NOT NULL,
        `description` text NOT NULL,
        PRIMARY KEY (`product_addtab_id`,`language_id`)
        ) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;");

    }

    public function uninstall() {
        $this->db->query("DROP TABLE IF EXISTS `" . DB_PREFIX . "product_addtab`");
        $this->db->query("DROP TABLE IF EXISTS `" . DB_PREFIX . "product_addtab_description`");
    }
}