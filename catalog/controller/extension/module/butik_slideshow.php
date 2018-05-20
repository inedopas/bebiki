<?php
class ControllerExtensionModuleButikSlideshow extends Controller {
    public function index($setting) {
        static $module = 0;

        $this->load->model('design/banner');
        $this->load->model('tool/image');

        $this->document->addStyle('catalog/view/theme/butik/js/owl-carousel/owl.carousel.css');
        $this->document->addStyle('catalog/view/theme/butik/js/owl-carousel/owl.transitions.css');
        $this->document->addScript('catalog/view/theme/butik/js/owl-carousel/owl.carousel.min.js');

        $data['transition_style'] = $setting['transition_style'];
        $data['banners_auto_play'] = $setting['banners_auto_play'];
        $data['banners_navigation'] = $setting['banners_navigation'];
        $data['banners_pagination'] = $setting['banners_pagination'];
        $data['banners_hover'] = $setting['banners_hover'];
        $data['banners_color_text'] = $setting['banners_color_text'];

        $data['banners_added'] = array();

        $banners_added = $setting['banners_added'];

        foreach ($banners_added as $result) {
            if (is_file(DIR_IMAGE . $result['image'])) {
                $data['banners_added'][] = array(
                    'text_position'  => $result['text_position'],
                    'title'          => $result['title'][$this->config->get('config_language_id')],
                    'description'    => html_entity_decode($result['description'][$this->config->get('config_language_id')], ENT_QUOTES, 'UTF-8'),
                    'button'         => $result['button'][$this->config->get('config_language_id')],
                    'link'           => $result['link'][$this->config->get('config_language_id')],
                    'image'          => $this->model_tool_image->resize($result['image'], $setting['width'], $setting['height'])
                );
            }
        }

        $data['module'] = $module++;

        return $this->load->view('extension/module/butik_slideshow', $data);
    }
}
