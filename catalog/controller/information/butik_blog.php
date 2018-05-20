<?php
class ControllerInformationButikBlog extends Controller {
    public function index() {
        $this->load->language('extension/module/butik_blog');
        $this->load->model('catalog/butik_blog');
        $this->load->model('tool/image');

        $this->document->setTitle($this->language->get('heading_title'));

        $data['heading_title'] = $this->language->get('heading_title');
        $data['text_readmore'] = $this->language->get('text_readmore');
        $data['text_sort'] = $this->language->get('text_sort');
        $data['text_limit'] = $this->language->get('text_limit');

        if (isset($this->request->get['sort'])) {
            $sort = $this->request->get['sort'];
        } else {
            $sort = 'b.date_added';
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

        if (isset($this->request->get['limit'])) {
            $limit = (int)$this->request->get['limit'];
        } else {
            $limit = $this->config->get('blog_limit');
        }

        $data['breadcrumbs'] = array();

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/home')
        );

        $data['breadcrumbs'][] = array(
            'text'  => $this->language->get('heading_title'),
            'href'  => $this->url->link('information/butik_blog')
        );

        $data['blogs'] = array();

        $filter_data = array(
            'sort'  => $sort,
            'order' => $order,
            'start' => ($page - 1) * $limit,
            'limit' => $limit
        );

        $blog_total = $this->model_catalog_butik_blog->getTotalBlogs();

        $results = $this->model_catalog_butik_blog->getBlogs($filter_data);

        foreach ($results as $result) {
            if ($result['image']) {
                $image = $this->model_tool_image->resize($result['image'], $this->config->get('blog_image_list_width'), $this->config->get('blog_image_list_height'));
            } else {
                $image = false;
            }
            $data['blogs'][] = array(
                'title'         => $result['title'],
                'data_added'    => date($this->language->get('date_format_short'), strtotime($result['date_added'])),
                'description'   => utf8_substr(strip_tags(html_entity_decode($result['description'], ENT_QUOTES, 'UTF-8')), 0, $this->config->get('blog_description_limit')) . '..',
                'thumb'         => $image,
                'href'          => $this->url->link('information/butik_blog/info', 'blog_id=' . $result['blog_id'])
            );
        }

        $url = '';

        if (isset($this->request->get['limit'])) {
            $url .= '&limit=' . $this->request->get['limit'];
        }

        $data['sorts'] = array();

        $data['sorts'][] = array(
            'text'  => $this->language->get('text_date_desc'),
            'value' => 'b.date_added-DESC',
            'href'  => $this->url->link('information/butik_blog', '&sort=b.date_added&order=DESC' . $url)
        );

        $data['sorts'][] = array(
            'text'  => $this->language->get('text_date_asc'),
            'value' => 'b.date_added-ASC',
            'href'  => $this->url->link('information/butik_blog', '&sort=b.date_added&order=ASC' . $url)
        );

        $data['sorts'][] = array(
            'text'  => $this->language->get('text_name_asc'),
            'value' => 'bd.name-ASC',
            'href'  => $this->url->link('information/butik_blog', '&sort=bd.name&order=ASC' . $url)
        );

        $data['sorts'][] = array(
            'text'  => $this->language->get('text_name_desc'),
            'value' => 'bd.name-DESC',
            'href'  => $this->url->link('information/butik_blog', '&sort=bd.name&order=DESC' . $url)
        );

        $url = '';

        if (isset($this->request->get['sort'])) {
            $url .= '&sort=' . $this->request->get['sort'];
        }

        if (isset($this->request->get['order'])) {
            $url .= '&order=' . $this->request->get['order'];
        }

        $data['limits'] = array();

        $limits = array_unique(array($this->config->get('blog_limit'), 25, 50, 75, 100));

        sort($limits);

        foreach($limits as $value) {
            $data['limits'][] = array(
                'text'  => $value,
                'value' => $value,
                'href'  => $this->url->link('information/butik_blog', $url . '&limit=' . $value)
            );
        }

        $url = '';

        if (isset($this->request->get['sort'])) {
            $url .= '&sort=' . $this->request->get['sort'];
        }

        if (isset($this->request->get['order'])) {
            $url .= '&order=' . $this->request->get['order'];
        }

        if (isset($this->request->get['limit'])) {
            $url .= '&limit=' . $this->request->get['limit'];
        }

        $pagination = new Pagination();
        $pagination->total = $blog_total;
        $pagination->page = $page;
        $pagination->limit = $limit;
        $pagination->url = $this->url->link('information/butik_blog', $url . '&page={page}');

        $data['pagination'] = $pagination->render();

        $data['results'] = sprintf($this->language->get('text_pagination'), ($blog_total) ? (($page - 1) * $limit) + 1 : 0, ((($page - 1) * $limit) > ($blog_total - $limit)) ? $blog_total : ((($page - 1) * $limit) + $limit), $blog_total, ceil($blog_total / $limit));

        // http://googlewebmastercentral.blogspot.com/2011/09/pagination-with-relnext-and-relprev.html
        if ($page == 1) {
            $this->document->addLink($this->url->link('information/butik_blog', '', true), 'canonical');
        } elseif ($page == 2) {
            $this->document->addLink($this->url->link('information/butik_blog', '', true), 'prev');
        } else {
            $this->document->addLink($this->url->link('information/butik_blog', 'page='. ($page - 1), true), 'prev');
        }

        if ($limit && ceil($blog_total / $limit) > $page) {
            $this->document->addLink($this->url->link('information/butik_blog', 'page='. ($page + 1), true), 'next');
        }

        $data['sort'] = $sort;
        $data['order'] = $order;
        $data['limit'] = $limit;

        $data['continue'] = $this->url->link('common/home');

        $data['column_left'] = $this->load->controller('common/column_left');
        $data['column_right'] = $this->load->controller('common/column_right');
        $data['content_top'] = $this->load->controller('common/content_top');
        $data['content_bottom'] = $this->load->controller('common/content_bottom');
        $data['footer'] = $this->load->controller('common/footer');
        $data['header'] = $this->load->controller('common/header');

        $this->response->setOutput($this->load->view('information/butik_blog_list', $data));
    }

    public function info() {
        $this->load->language('extension/module/butik_blog');
        $this->load->model('catalog/butik_blog');

        $data['breadcrumbs'] = array();

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/home')
        );

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('heading_title'),
            'href' => $this->url->link('information/butik_blog')
        );

        if (isset($this->request->get['blog_id'])) {
            $blog_id = (int)$this->request->get['blog_id'];
        } else {
            $blog_id = 0;
        }

        $blog_info = $this->model_catalog_butik_blog->getBlog($blog_id);

        if ($blog_info) {

            if ($blog_info['meta_title']) {
                $this->document->setTitle($blog_info['meta_title']);
            } else {
                $this->document->setTitle($blog_info['title']);
            }

            if ($blog_info['meta_h1']) {
                $data['heading_title'] = $blog_info['meta_h1'];
            } else {
                $data['heading_title'] = $blog_info['title'];
            }

            $this->document->setDescription($blog_info['meta_description']);
            $this->document->setKeywords($blog_info['meta_keyword']);

            $data['breadcrumbs'][] = array(
                'text' => $blog_info['title'],
                'href' => $this->url->link('information/butik_blog/info', 'blog_id=' . $blog_id)
            );

            $this->load->model('tool/image');
            $data['image'] = $this->model_tool_image->resize($blog_info['image'], $this->config->get('blog_image_form_width'), $this->config->get('blog_image_form_height'));
            $data['date_added'] = date($this->language->get('date_format_short'), strtotime($blog_info['date_added']));

            $data['button_continue'] = $this->language->get('button_continue');
            $data['description'] = html_entity_decode($blog_info['description'], ENT_QUOTES, 'UTF-8');
            $data['continue'] = $this->url->link('common/home');
            $data['column_left'] = $this->load->controller('common/column_left');
            $data['column_right'] = $this->load->controller('common/column_right');
            $data['content_top'] = $this->load->controller('common/content_top');
            $data['content_bottom'] = $this->load->controller('common/content_bottom');
            $data['footer'] = $this->load->controller('common/footer');
            $data['header'] = $this->load->controller('common/header');

            $blog_soc_code = $this->config->get('blog_soc_code');
            if(empty($blog_soc_code)) {
                $data['blog_soc_code'] = false;
            } elseif (isset($blog_soc_code)) {
                $data['blog_soc_code'] = html_entity_decode($blog_soc_code, ENT_QUOTES, 'UTF-8');
            }

            $this->response->setOutput($this->load->view('information/butik_blog', $data));
        } else {
            $data['breadcrumbs'][] = array(
                'text' => $this->language->get('text_error'),
                'href' => $this->url->link('information/butik_blog', 'blog_id=' . $blog_id)
            );

            $this->document->setTitle($this->language->get('text_error'));

            $data['heading_title'] = $this->language->get('text_error');

            $data['text_error'] = $this->language->get('text_error');

            $data['button_continue'] = $this->language->get('button_continue');

            $data['continue'] = $this->url->link('common/home');

            $this->response->addHeader($this->request->server['SERVER_PROTOCOL'] . ' 404 Not Found');

            $data['column_left'] = $this->load->controller('common/column_left');
            $data['column_right'] = $this->load->controller('common/column_right');
            $data['content_top'] = $this->load->controller('common/content_top');
            $data['content_bottom'] = $this->load->controller('common/content_bottom');
            $data['footer'] = $this->load->controller('common/footer');
            $data['header'] = $this->load->controller('common/header');

            $this->response->setOutput($this->load->view('error/not_found', $data));
        }
    }
}