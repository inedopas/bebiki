<?php
class ControllerCatalogBlogSetting extends Controller {
    private $error = array();

    public function index() {
        $this->language->load('catalog/blog_setting');

        $this->document->setTitle($this->language->get('heading_title'));

        $this->load->model('setting/setting');

        $this->load->model('catalog/butik_blog');

        if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
            $this->model_setting_setting->editSetting('blog', $this->request->post);

            $this->session->data['success'] = $this->language->get('text_success');

            $this->response->redirect($this->url->link('catalog/blog_setting', 'user_token=' . $this->session->data['user_token'], true));
        }

        if (isset($this->error['warning'])) {
            $data['error_warning'] = $this->error['warning'];
        } else {
            $data['error_warning'] = '';
        }

        if (isset($this->session->data['success'])) {
            $data['success'] = $this->session->data['success'];
            unset($this->session->data['success']);
        } else {
            $data['success'] = '';
        }

        if (isset($this->error['blog_description_limit'])) {
            $data['error_blog_description_limit'] = $this->error['blog_description_limit'];
        } else {
            $data['error_blog_description_limit'] = '';
        }

        if (isset($this->error['blog_limit'])) {
            $data['error_blog_limit'] = $this->error['blog_limit'];
        } else {
            $data['error_blog_limit'] = '';
        }

        if (isset($this->error['blog_image_list_width'])) {
            $data['error_blog_image_list_width'] = $this->error['blog_image_list_width'];
        } else {
            $data['error_blog_image_list_width'] = '';
        }

        if (isset($this->error['blog_image_list_height'])) {
            $data['error_blog_image_list_height'] = $this->error['blog_image_list_height'];
        } else {
            $data['error_blog_image_list_height'] = '';
        }

        if (isset($this->error['blog_image_form_width'])) {
            $data['error_blog_image_form_width'] = $this->error['blog_image_form_width'];
        } else {
            $data['error_blog_image_form_width'] = '';
        }

        if (isset($this->error['blog_image_form_height'])) {
            $data['error_blog_image_form_height'] = $this->error['blog_image_form_height'];
        } else {
            $data['error_blog_image_form_height'] = '';
        }

        $data['breadcrumbs'] = array();

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
        );

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('heading_title'),
            'href' => $this->url->link('catalog/blog_setting', 'user_token=' . $this->session->data['user_token'], true)
        );

        $data['action'] = $this->url->link('catalog/blog_setting', 'user_token=' . $this->session->data['user_token'], true);

        $data['cancel'] = $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true);

        $data['user_token'] = $this->session->data['user_token'];

        if (isset($this->request->post['blog_description_limit'])) {
            $data['blog_description_limit'] = $this->request->post['blog_description_limit'];
        } else {
            $data['blog_description_limit'] = $this->config->get('blog_description_limit');
        }

        if (isset($this->request->post['blog_limit'])) {
            $data['blog_limit'] = $this->request->post['blog_limit'];
        } else {
            $data['blog_limit'] = $this->config->get('blog_limit');
        }

        if (isset($this->request->post['blog_image_list_width'])) {
            $data['blog_image_list_width'] = $this->request->post['blog_image_list_width'];
        } else {
            $data['blog_image_list_width'] = $this->config->get('blog_image_list_width');
        }

        if (isset($this->request->post['blog_image_list_height'])) {
            $data['blog_image_list_height'] = $this->request->post['blog_image_list_height'];
        } else {
            $data['blog_image_list_height'] = $this->config->get('blog_image_list_height');
        }

        if (isset($this->request->post['blog_image_form_width'])) {
            $data['blog_image_form_width'] = $this->config->get('blog_image_form_width');
        } else {
            $data['blog_image_form_width'] = $this->config->get('blog_image_form_width');
        }

        if (isset($this->request->post['blog_image_form_height'])) {
            $data['blog_image_form_height'] = $this->request->post['blog_image_form_height'];
        } else {
            $data['blog_image_form_height'] = $this->config->get('blog_image_form_height');
        }

        if (isset($this->request->post['blog_soc_code'])) {
            $data['blog_soc_code'] = $this->request->post['blog_soc_code'];
        } else {
            $data['blog_soc_code'] = $this->config->get('blog_soc_code');
        }

        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('catalog/blog_setting', $data));

    }

    protected function validate() {
        if (!$this->user->hasPermission('modify', 'catalog/blog_setting')) {
            $this->error['warning'] = $this->language->get('error_permission');
        }

        if (!$this->request->post['blog_description_limit']) {
            $this->error['blog_description_limit'] = $this->language->get('error_blog_description_limit');
        }

        if (!$this->request->post['blog_limit']) {
            $this->error['blog_limit'] = $this->language->get('error_blog_limit');
        }

        if (!$this->request->post['blog_image_list_width']) {
            $this->error['blog_image_list_width'] = $this->language->get('error_blog_image_list_width');
        }

        if (!$this->request->post['blog_image_list_height']) {
            $this->error['blog_image_list_height'] = $this->language->get('error_blog_image_list_height');
        }

        if (!$this->request->post['blog_image_form_width']) {
            $this->error['blog_image_form_width'] = $this->language->get('error_blog_image_form_width');
        }

        if (!$this->request->post['blog_image_form_height']) {
            $this->error['blog_image_form_height'] = $this->language->get('error_blog_image_form_height');
        }

        return !$this->error;
    }

}