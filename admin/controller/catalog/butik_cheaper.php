<?php
class ControllerCatalogButikCheaper extends Controller {
    private $error = array();

    public function index() {
        $this->load->language('catalog/butik_cheaper');

        $this->document->setTitle($this->language->get('heading_title'));

        $this->load->model('catalog/butik_cheaper');

        $this->getList();
    }

    public function delete() {
        $this->load->language('catalog/butik_cheaper');

        $this->document->setTitle($this->language->get('heading_title'));

        $this->load->model('catalog/butik_cheaper');

        if (isset($this->request->post['selected']) && $this->validateDelete()) {
            foreach ($this->request->post['selected'] as $cheaper_id) {
                $this->model_catalog_butik_cheaper->deleteCheaper($cheaper_id);
            }

            $this->session->data['success'] = $this->language->get('text_success');

            $url = '';

            if (isset($this->request->get['sort'])) {
                $url .= '&sort=' . $this->request->get['sort'];
            }

            if (isset($this->request->get['order'])) {
                $url .= '&order=' . $this->request->get['order'];
            }

            if (isset($this->request->get['page'])) {
                $url .= '&page=' . $this->request->get['page'];
            }

            $this->response->redirect($this->url->link('catalog/butik_cheaper', 'user_token=' . $this->session->data['user_token'] . $url, true));
        }

        $this->getList();
    }

    protected function getList() {
        if (isset($this->request->get['sort'])) {
            $sort = $this->request->get['sort'];
        } else {
            $sort = 'date_added';
        }

        if (isset($this->request->get['order'])) {
            $order = $this->request->get['order'];
        } else {
            $order = 'DESC';
        }

        if (isset($this->request->get['page'])) {
            $page = $this->request->get['page'];
        } else {
            $page = 1;
        }

        $url = '';

        if (isset($this->request->get['sort'])) {
            $url .= '&sort=' . $this->request->get['sort'];
        }

        if (isset($this->request->get['order'])) {
            $url .= '&order=' . $this->request->get['order'];
        }

        if (isset($this->request->get['page'])) {
            $url .= '&page=' . $this->request->get['page'];
        }

        $data['breadcrumbs'] = array();

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
        );

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('heading_title'),
            'href' => $this->url->link('catalog/butik_cheaper', 'user_token=' . $this->session->data['user_token'] . $url, true)
        );

        $data['delete'] = $this->url->link('catalog/butik_cheaper/delete', 'user_token=' . $this->session->data['user_token'] . $url, true);

        $data['cheapers'] = array();

        $filter_data = array(
            'sort'  => $sort,
            'order' => $order,
            'start' => ($page - 1) * $this->config->get('config_limit_admin'),
            'limit' => $this->config->get('config_limit_admin')
        );

        $cheaper_total = $this->model_catalog_butik_cheaper->getTotalCheapers();

        $results = $this->model_catalog_butik_cheaper->getCheapers($filter_data);

        foreach ($results as $result) {
            $data['cheapers'][] = array(
                'cheaper_id'      => $result['cheaper_id'],
                'product_name'      => $result['product_name'],
                'product_price'     => $result['product_price'],
                'firstname'         => $result['firstname'],
                'telephone'         => $result['telephone'],
                'url_cheaper'       => $result['url_cheaper'],
                'comment'           => $result['comment'],
                'language_id'       => $result['language_id'],
                'date_added'        => date($this->language->get('datetime_format'), strtotime($result['date_added'])),
            );
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

        if (isset($this->request->post['selected'])) {
            $data['selected'] = (array)$this->request->post['selected'];
        } else {
            $data['selected'] = array();
        }

        $url = '';

        if ($order == 'ASC') {
            $url .= '&order=DESC';
        } else {
            $url .= '&order=ASC';
        }

        if (isset($this->request->get['page'])) {
            $url .= '&page=' . $this->request->get['page'];
        }

        $data['sort_date_added'] = $this->url->link('catalog/butik_cheaper', 'user_token=' . $this->session->data['user_token'] . '&sort=date_added' . $url, true);

        $url = '';

        if (isset($this->request->get['sort'])) {
            $url .= '&sort=' . $this->request->get['sort'];
        }

        if (isset($this->request->get['order'])) {
            $url .= '&order=' . $this->request->get['order'];
        }

        $pagination = new Pagination();
        $pagination->total = $cheaper_total;
        $pagination->page = $page;
        $pagination->limit = $this->config->get('config_limit_admin');
        $pagination->url = $this->url->link('catalog/butik_cheaper', 'user_token=' . $this->session->data['user_token'] . $url . '&page={page}', true);

        $data['pagination'] = $pagination->render();

        $data['results'] = sprintf($this->language->get('text_pagination'), ($cheaper_total) ? (($page - 1) * $this->config->get('config_limit_admin')) + 1 : 0, ((($page - 1) * $this->config->get('config_limit_admin')) > ($cheaper_total - $this->config->get('config_limit_admin'))) ? $cheaper_total : ((($page - 1) * $this->config->get('config_limit_admin')) + $this->config->get('config_limit_admin')), $cheaper_total, ceil($cheaper_total / $this->config->get('config_limit_admin')));

        $data['sort'] = $sort;
        $data['order'] = $order;

        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('catalog/butik_cheaper', $data));
    }

    protected function validateDelete() {
        if (!$this->user->hasPermission('modify', 'catalog/butik_cheaper')) {
            $this->error['warning'] = $this->language->get('error_permission');
        }

        return !$this->error;
    }
}