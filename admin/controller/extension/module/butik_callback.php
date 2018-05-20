<?php
class ControllerExtensionModuleButikCallback extends Controller {
    private $error = array();

    public function index() {
        $this->load->language('extension/module/butik_callback');
        $this->document->setTitle($this->language->get('heading_title'));

        $this->load->model('setting/setting');

        $this->load->model('localisation/language');
        $data['languages'] = $this->model_localisation_language->getLanguages();

        if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
            $this->model_setting_setting->editSetting('module_butik_callback', $this->request->post);

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
            'href' => $this->url->link('extension/module/butik_callback', 'user_token=' . $this->session->data['user_token'], true)
        );

        $data['action'] = $this->url->link('extension/module/butik_callback', 'user_token=' . $this->session->data['user_token'], true);

        $data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true);

        if (isset($this->request->post['module_butik_callback_status'])) {
            $data['module_butik_callback_status'] = $this->request->post['module_butik_callback_status'];
        } else {
            $data['module_butik_callback_status'] = $this->config->get('module_butik_callback_status');
        }

        if (isset($this->request->post['module_butik_callback_email'])) {
            $data['module_butik_callback_email'] = $this->request->post['module_butik_callback_email'];
        } else {
            $data['module_butik_callback_email'] = $this->config->get('module_butik_callback_email');
        }

        if (isset($this->request->post['module_butik_callback_time'])) {
            $data['module_butik_callback_time'] = $this->request->post['module_butik_callback_time'];
        } else {
            $data['module_butik_callback_time'] = $this->config->get('module_butik_callback_time');
        }

        if (isset($this->request->post['module_butik_callback_comment'])) {
            $data['module_butik_callback_comment'] = $this->request->post['module_butik_callback_comment'];
        } else {
            $data['module_butik_callback_comment'] = $this->config->get('module_butik_callback_comment');
        }

        if (isset($this->request->post['module_butik_callback_alert'])) {
            $data['module_butik_callback_alert'] = $this->request->post['module_butik_callback_alert'];
        } else {
            $data['module_butik_callback_alert'] = $this->config->get('module_butik_callback_alert');
        }

        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('extension/module/butik_callback', $data));
    }

    protected function validate() {
        if (!$this->user->hasPermission('modify', 'extension/module/butik_callback')) {
            $this->error['warning'] = $this->language->get('error_permission');
        }

        return !$this->error;
    }

    public function install(){
        $this->db->query("CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "callback`
         (`callback_id` INT(11) NOT NULL AUTO_INCREMENT,
         `telephone` varchar(32) NOT NULL,
         `firstname` varchar(100) NOT NULL,
         `comment` text NOT NULL,
         `time` varchar(100) NOT NULL,
         `date_added` datetime NOT NULL,
         `language_id` int(11) NOT NULL,
        PRIMARY KEY (`callback_id`,`language_id`)
        ) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;");
    }

    public function uninstall()	{
        $this->db->query("DROP TABLE IF EXISTS `" . DB_PREFIX . "callback`");
    }
}