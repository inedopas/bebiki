<?php
class ControllerExtensionModuleButikLogin extends Controller {
    public function index() {
        $this->load->model('account/customer');

        $this->load->language('extension/module/butik');

        $data['text_login'] = $this->language->get('text_login');
        $data['text_account'] = $this->language->get('text_account');
        $data['text_signin'] = $this->language->get('text_signin');
        $data['text_forgotten'] = $this->language->get('text_forgotten');
        $data['text_register'] = $this->language->get('text_register');
        $data['text_new_customer'] = $this->language->get('text_new_customer');
        $data['text_logout'] = $this->language->get('text_logout');
        $data['text_order'] = $this->language->get('text_order');
        $data['text_transaction'] = $this->language->get('text_transaction');
        $data['text_download'] = $this->language->get('text_download');

        $data['entry_email'] = $this->language->get('entry_email');
        $data['entry_password'] = $this->language->get('entry_password');

        $data['button_login'] = $this->language->get('button_login');

        $data['logged'] = $this->customer->isLogged();

        $data['register'] = $this->url->link('account/register', '', true);
        $data['forgotten'] = $this->url->link('account/forgotten', '', true);
        $data['login'] = $this->url->link('account/login', '', true);
        $data['logout'] = $this->url->link('account/logout', '', true);
        $data['account'] = $this->url->link('account/account', '', true);
        $data['order'] = $this->url->link('account/order', '', true);
        $data['transaction'] = $this->url->link('account/transaction', '', true);
        $data['download'] = $this->url->link('account/download', '', true);

        if (isset($this->request->post['email'])) {
            $data['email'] = $this->request->post['email'];
        } else {
            $data['email'] = '';
        }

        if (isset($this->request->post['password'])) {
            $data['password'] = $this->request->post['password'];
        } else {
            $data['password'] = '';
        }

        $this->response->setOutput($this->load->view('extension/module/butik_login', $data));
    }

    public function login() {
        $this->load->model('account/customer');

        $this->load->language('extension/module/butik');

        $json = array();

        $login_info = $this->model_account_customer->getLoginAttempts($this->request->post['email']);

        if ($login_info && ($login_info['total'] >= $this->config->get('config_login_attempts')) && strtotime('-1 hour') < strtotime($login_info['date_modified'])) {
            $json['warning'] = $this->language->get('error_attempts');
        }

        // Check if customer has been approved.
        $customer_info = $this->model_account_customer->getCustomerByEmail($this->request->post['email']);

        if ($customer_info && !$customer_info['status']) {
            $json['warning'] = $this->language->get('error_approved');
        }

        if (empty($json['warning'])) {
            if (!$this->customer->login($this->request->post['email'], $this->request->post['password'])) {
                $json['warning'] = $this->language->get('error_login');

                $this->model_account_customer->addLoginAttempt($this->request->post['email']);
            } else {
                $this->model_account_customer->deleteLoginAttempts($this->request->post['email']);
            }
        }

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }
}