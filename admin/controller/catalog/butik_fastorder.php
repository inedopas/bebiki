<?php
class ControllerCatalogButikFastorder extends Controller {
    private $error = array();

    public function index() {
        $this->load->language('catalog/butik_fastorder');

        $this->document->setTitle($this->language->get('heading_title'));

        $this->load->model('catalog/butik_fastorder');

        $this->getList();
    }

    public function delete() {
        $this->load->language('catalog/butik_fastorder');

        $this->document->setTitle($this->language->get('heading_title'));

        $this->load->model('catalog/butik_fastorder');

        if (isset($this->request->post['selected']) && $this->validateDelete()) {
            foreach ($this->request->post['selected'] as $fastorder_id) {
                $this->model_catalog_butik_fastorder->deleteFastorder($fastorder_id);
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

            $this->response->redirect($this->url->link('catalog/butik_fastorder', 'user_token=' . $this->session->data['user_token'] . $url, true));
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
            'href' => $this->url->link('catalog/butik_fastorder', 'user_token=' . $this->session->data['user_token'] . $url, true)
        );

        $data['delete'] = $this->url->link('catalog/butik_fastorder/delete', 'user_token=' . $this->session->data['user_token'] . $url, true);

        $data['fastorders'] = array();

        $filter_data = array(
            'sort'  => $sort,
            'order' => $order,
            'start' => ($page - 1) * $this->config->get('config_limit_admin'),
            'limit' => $this->config->get('config_limit_admin')
        );

        $fastorder_total = $this->model_catalog_butik_fastorder->getTotalFastorders();

        $results = $this->model_catalog_butik_fastorder->getFastorders($filter_data);

        foreach ($results as $result) {
            $data['fastorders'][] = array(
                'fastorder_id'      => $result['fastorder_id'],
                'product_name'      => $result['product_name'],
                'product_price'     => $result['product_price'],
                'firstname'         => $result['firstname'],
                'telephone'         => $result['telephone'],
                'address'           => $result['address'],
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

        $data['sort_date_added'] = $this->url->link('catalog/butik_fastorder', 'user_token=' . $this->session->data['user_token'] . '&sort=date_added' . $url, true);

        $url = '';

        if (isset($this->request->get['sort'])) {
            $url .= '&sort=' . $this->request->get['sort'];
        }

        if (isset($this->request->get['order'])) {
            $url .= '&order=' . $this->request->get['order'];
        }

        $pagination = new Pagination();
        $pagination->total = $fastorder_total;
        $pagination->page = $page;
        $pagination->limit = $this->config->get('config_limit_admin');
        $pagination->url = $this->url->link('catalog/butik_fastorder', 'user_token=' . $this->session->data['user_token'] . $url . '&page={page}', true);

        $data['pagination'] = $pagination->render();

        $data['results'] = sprintf($this->language->get('text_pagination'), ($fastorder_total) ? (($page - 1) * $this->config->get('config_limit_admin')) + 1 : 0, ((($page - 1) * $this->config->get('config_limit_admin')) > ($fastorder_total - $this->config->get('config_limit_admin'))) ? $fastorder_total : ((($page - 1) * $this->config->get('config_limit_admin')) + $this->config->get('config_limit_admin')), $fastorder_total, ceil($fastorder_total / $this->config->get('config_limit_admin')));

        $data['sort'] = $sort;
        $data['order'] = $order;

        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('catalog/butik_fastorder', $data));
    }

    protected function validateDelete() {
        if (!$this->user->hasPermission('modify', 'catalog/butik_fastorder')) {
            $this->error['warning'] = $this->language->get('error_permission');
        }

        return !$this->error;
    }
}