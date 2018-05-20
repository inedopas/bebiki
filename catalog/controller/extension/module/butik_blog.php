<?php
class ControllerExtensionModuleButikBlog extends Controller {
    public function index($setting) {

        static $module = 0;

        $this->load->language('extension/module/butik_blog');

        $data['heading_title'] = $this->language->get('heading_title');
        $this->document->addScript('catalog/view/theme/butik/js/owl-carousel/owl.carousel.min.js');
        $this->document->addStyle('catalog/view/theme/butik/js/owl-carousel/owl.carousel.css');

        $this->load->model('catalog/butik_blog');

        $this->load->model('tool/image');

        $data['position'] = $setting['position'];
        $data['text_readmore'] = $this->language->get('text_readmore');
        $data['text_all_href'] = $this->language->get('text_all_href');
        $data['all_href'] = $this->url->link('information/butik_blog');

        $sort = 'b.date_available';
        $order = 'DESC';

        $data['blogs'] = array();

        $filter_data = array(
            'sort'  => $sort,
            'order' => $order,
            'start' => 0,
            'limit' => $setting['limit']
        );

        $results = $this->model_catalog_butik_blog->getBlogs($filter_data);

        foreach ($results as $result) {
            if ($result['image']) {
                $image = $this->model_tool_image->resize($result['image'], $setting['width'], $setting['height']);
            } else {
                $image = false;
            }
            $data['blogs'][] = array(
                'title'         => $result['title'],
                'data_added'    => date($this->language->get('date_format_short'), strtotime($result['date_added'])),
                'description'   => utf8_substr(strip_tags(html_entity_decode($result['description'], ENT_QUOTES, 'UTF-8')), 0, $setting['description']) . '..',
                'thumb'         => $image,
                'href'          => $this->url->link('information/butik_blog/info', 'blog_id=' . $result['blog_id'])
            );
        }

        $data['module'] = $module++;

        return $this->load->view('extension/module/butik_blog', $data);
    }
}