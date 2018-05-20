<?php
class ControllerExtensionModuleButikBannerText extends Controller {
    public function index($setting) {
        static $module = 0;

        $this->load->model('design/banner');
        $this->load->model('tool/image');

        $data['banner_text_columns'] = $setting['banner_text_columns'];
        $data['butik_text_banner1_status'] = $setting['butik_text_banner1_status'];
        $data['butik_text_banner2_status'] = $setting['butik_text_banner2_status'];
        $data['butik_text_banner3_status'] = $setting['butik_text_banner3_status'];
        $data['butik_text_banner4_status'] = $setting['butik_text_banner4_status'];
        $data['position'] = $setting['position'];

        // Banner 1
        if ($setting['butik_banner_img_icon1']) {
            $data['butik_banner_img1'] = $this->model_tool_image->resize($setting['butik_banner_img_icon1'], 50, 50);
        } else {
            $data['butik_banner_img1'] = '';
        }
        if (isset($setting['banner_description1'][$this->config->get('config_language_id')])) {
            $data['banner1_title'] = html_entity_decode($setting['banner_description1'][$this->config->get('config_language_id')]['title'], ENT_QUOTES, 'UTF-8');
            $data['banner1_text'] = html_entity_decode($setting['banner_description1'][$this->config->get('config_language_id')]['text'], ENT_QUOTES, 'UTF-8');
            $data['banner1_link'] = html_entity_decode($setting['banner_description1'][$this->config->get('config_language_id')]['link'], ENT_QUOTES, 'UTF-8');
        }

        // Banner 2
        if ($setting['butik_banner_img_icon2']) {
            $data['butik_banner_img2'] = $this->model_tool_image->resize($setting['butik_banner_img_icon2'], 50, 50);
        } else {
            $data['butik_banner_img2'] = '';
        }
        if (isset($setting['banner_description2'][$this->config->get('config_language_id')])) {
            $data['banner2_title'] = html_entity_decode($setting['banner_description2'][$this->config->get('config_language_id')]['title'], ENT_QUOTES, 'UTF-8');
            $data['banner2_text'] = html_entity_decode($setting['banner_description2'][$this->config->get('config_language_id')]['text'], ENT_QUOTES, 'UTF-8');
            $data['banner2_link'] = html_entity_decode($setting['banner_description2'][$this->config->get('config_language_id')]['link'], ENT_QUOTES, 'UTF-8');
        }

        // Banner 3
        if ($setting['butik_banner_img_icon3']) {
            $data['butik_banner_img3'] = $this->model_tool_image->resize($setting['butik_banner_img_icon3'], 50, 50);
        } else {
            $data['butik_banner_img3'] = '';
        }
        if (isset($setting['banner_description3'][$this->config->get('config_language_id')])) {
            $data['banner3_title'] = html_entity_decode($setting['banner_description3'][$this->config->get('config_language_id')]['title'], ENT_QUOTES, 'UTF-8');
            $data['banner3_text'] = html_entity_decode($setting['banner_description3'][$this->config->get('config_language_id')]['text'], ENT_QUOTES, 'UTF-8');
            $data['banner3_link'] = html_entity_decode($setting['banner_description3'][$this->config->get('config_language_id')]['link'], ENT_QUOTES, 'UTF-8');
        }

        // Banner 4
        if ($setting['butik_banner_img_icon4']) {
            $data['butik_banner_img4'] = $this->model_tool_image->resize($setting['butik_banner_img_icon4'], 50, 50);
        } else {
            $data['butik_banner_img4'] = '';
        }
        if (isset($setting['banner_description4'][$this->config->get('config_language_id')])) {
            $data['banner4_title'] = html_entity_decode($setting['banner_description4'][$this->config->get('config_language_id')]['title'], ENT_QUOTES, 'UTF-8');
            $data['banner4_text'] = html_entity_decode($setting['banner_description4'][$this->config->get('config_language_id')]['text'], ENT_QUOTES, 'UTF-8');
            $data['banner4_link'] = html_entity_decode($setting['banner_description4'][$this->config->get('config_language_id')]['link'], ENT_QUOTES, 'UTF-8');
        }

        $data['module'] = $module++;

        return $this->load->view('extension/module/butik_banner_text', $data);

    }
}