<?php
class ControllerExtensionThemeButik extends Controller {
    private $error = array();

    public function index() {
        $this->load->language('extension/theme/butik');
        $this->document->setTitle($this->language->get('heading_title'));

        $this->load->model('setting/setting');
        $this->load->model('tool/image');

        $this->load->model('localisation/language');
        $data['languages'] = $this->model_localisation_language->getLanguages();

        if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
            $this->model_setting_setting->editSetting('theme_butik', $this->request->post, $this->request->get['store_id']);
            if (isset($this->request->post['save']) && $this->request->post['save'] == 'stay') {
                $this->session->data['success'] = $this->language->get('text_success');
                $this->response->redirect($this->url->link('extension/theme/butik', 'user_token=' . $this->session->data['user_token'] . '&store_id=' . $this->request->get['store_id'], true));
            }
            $this->session->data['success'] = $this->language->get('text_success');

            $this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=theme', true));
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

        if (isset($this->error['product_limit'])) {
            $data['error_product_limit'] = $this->error['product_limit'];
        } else {
            $data['error_product_limit'] = '';
        }

        if (isset($this->error['product_description_length'])) {
            $data['error_product_description_length'] = $this->error['product_description_length'];
        } else {
            $data['error_product_description_length'] = '';
        }

        if (isset($this->error['image_category'])) {
            $data['error_image_category'] = $this->error['image_category'];
        } else {
            $data['error_image_category'] = '';
        }

        if (isset($this->error['image_thumb'])) {
            $data['error_image_thumb'] = $this->error['image_thumb'];
        } else {
            $data['error_image_thumb'] = '';
        }

        if (isset($this->error['image_popup'])) {
            $data['error_image_popup'] = $this->error['image_popup'];
        } else {
            $data['error_image_popup'] = '';
        }

        if (isset($this->error['image_product'])) {
            $data['error_image_product'] = $this->error['image_product'];
        } else {
            $data['error_image_product'] = '';
        }

        if (isset($this->error['image_additional'])) {
            $data['error_image_additional'] = $this->error['image_additional'];
        } else {
            $data['error_image_additional'] = '';
        }

        if (isset($this->error['image_related'])) {
            $data['error_image_related'] = $this->error['image_related'];
        } else {
            $data['error_image_related'] = '';
        }

        if (isset($this->error['image_compare'])) {
            $data['error_image_compare'] = $this->error['image_compare'];
        } else {
            $data['error_image_compare'] = '';
        }

        if (isset($this->error['image_wishlist'])) {
            $data['error_image_wishlist'] = $this->error['image_wishlist'];
        } else {
            $data['error_image_wishlist'] = '';
        }

        if (isset($this->error['image_cart'])) {
            $data['error_image_cart'] = $this->error['image_cart'];
        } else {
            $data['error_image_cart'] = '';
        }

        if (isset($this->error['image_location'])) {
            $data['error_image_location'] = $this->error['image_location'];
        } else {
            $data['error_image_location'] = '';
        }

        $data['breadcrumbs'] = array();

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
        );

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_extension'),
            'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=theme', true)
        );

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('heading_title'),
            'href' => $this->url->link('extension/theme/butik', 'user_token=' . $this->session->data['user_token'] . '&store_id=' . $this->request->get['store_id'], true)
        );

        $data['action'] = $this->url->link('extension/theme/butik', 'user_token=' . $this->session->data['user_token'] . '&store_id=' . $this->request->get['store_id'], true);

        $data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=theme', true);

        if (isset($this->request->get['store_id']) && ($this->request->server['REQUEST_METHOD'] != 'POST')) {
            $setting_info = $this->model_setting_setting->getSetting('theme_butik', $this->request->get['store_id']);
        }

        if (isset($this->request->post['theme_butik_directory'])) {
            $data['theme_butik_directory'] = $this->request->post['theme_butik_directory'];
        } elseif (isset($setting_info['theme_butik_directory'])) {
            $data['theme_butik_directory'] = $setting_info['theme_butik_directory'];
        } else {
            $data['theme_butik_directory'] = 'butik';
        }

        $data['directories'] = array();

        $directories = glob(DIR_CATALOG . 'view/theme/*', GLOB_ONLYDIR);

        foreach ($directories as $directory) {
            $data['directories'][] = basename($directory);
        }

        if (isset($this->request->post['theme_butik_product_limit'])) {
            $data['theme_butik_product_limit'] = $this->request->post['theme_butik_product_limit'];
        } elseif (isset($setting_info['theme_butik_product_limit'])) {
            $data['theme_butik_product_limit'] = $setting_info['theme_butik_product_limit'];
        } else {
            $data['theme_butik_product_limit'] = 15;
        }

        if (isset($this->request->post['theme_butik_status'])) {
            $data['theme_butik_status'] = $this->request->post['theme_butik_status'];
        } elseif (isset($setting_info['theme_butik_status'])) {
            $data['theme_butik_status'] = $setting_info['theme_butik_status'];
        } else {
            $data['theme_butik_status'] = '';
        }

        if (isset($this->request->post['theme_butik_product_description_length'])) {
            $data['theme_butik_product_description_length'] = $this->request->post['theme_butik_product_description_length'];
        } elseif (isset($setting_info['theme_butik_product_description_length'])) {
            $data['theme_butik_product_description_length'] = $setting_info['theme_butik_product_description_length'];
        } else {
            $data['theme_butik_product_description_length'] = 100;
        }

        if (isset($this->request->post['theme_butik_image_category_width'])) {
            $data['theme_butik_image_category_width'] = $this->request->post['theme_butik_image_category_width'];
        } elseif (isset($setting_info['theme_butik_image_category_width'])) {
            $data['theme_butik_image_category_width'] = $setting_info['theme_butik_image_category_width'];
        } else {
            $data['theme_butik_image_category_width'] = 80;
        }

        if (isset($this->request->post['theme_butik_image_category_height'])) {
            $data['theme_butik_image_category_height'] = $this->request->post['theme_butik_image_category_height'];
        } elseif (isset($setting_info['theme_butik_image_category_height'])) {
            $data['theme_butik_image_category_height'] = $setting_info['theme_butik_image_category_height'];
        } else {
            $data['theme_butik_image_category_height'] = 80;
        }

        if (isset($this->request->post['theme_butik_image_thumb_width'])) {
            $data['theme_butik_image_thumb_width'] = $this->request->post['theme_butik_image_thumb_width'];
        } elseif (isset($setting_info['theme_butik_image_thumb_width'])) {
            $data['theme_butik_image_thumb_width'] = $setting_info['theme_butik_image_thumb_width'];
        } else {
            $data['theme_butik_image_thumb_width'] = 228;
        }

        if (isset($this->request->post['theme_butik_image_thumb_height'])) {
            $data['theme_butik_image_thumb_height'] = $this->request->post['theme_butik_image_thumb_height'];
        } elseif (isset($setting_info['theme_butik_image_thumb_height'])) {
            $data['theme_butik_image_thumb_height'] = $setting_info['theme_butik_image_thumb_height'];
        } else {
            $data['theme_butik_image_thumb_height'] = 228;
        }

        if (isset($this->request->post['theme_butik_image_popup_width'])) {
            $data['theme_butik_image_popup_width'] = $this->request->post['theme_butik_image_popup_width'];
        } elseif (isset($setting_info['theme_butik_image_popup_width'])) {
            $data['theme_butik_image_popup_width'] = $setting_info['theme_butik_image_popup_width'];
        } else {
            $data['theme_butik_image_popup_width'] = 500;
        }

        if (isset($this->request->post['theme_butik_image_popup_height'])) {
            $data['theme_butik_image_popup_height'] = $this->request->post['theme_butik_image_popup_height'];
        } elseif (isset($setting_info['theme_butik_image_popup_height'])) {
            $data['theme_butik_image_popup_height'] = $setting_info['theme_butik_image_popup_height'];
        } else {
            $data['theme_butik_image_popup_height'] = 500;
        }

        if (isset($this->request->post['theme_butik_image_product_width'])) {
            $data['theme_butik_image_product_width'] = $this->request->post['theme_butik_image_product_width'];
        } elseif (isset($setting_info['theme_butik_image_product_width'])) {
            $data['theme_butik_image_product_width'] = $setting_info['theme_butik_image_product_width'];
        } else {
            $data['theme_butik_image_product_width'] = 228;
        }

        if (isset($this->request->post['theme_butik_image_product_height'])) {
            $data['theme_butik_image_product_height'] = $this->request->post['theme_butik_image_product_height'];
        } elseif (isset($setting_info['theme_butik_image_product_height'])) {
            $data['theme_butik_image_product_height'] = $setting_info['theme_butik_image_product_height'];
        } else {
            $data['theme_butik_image_product_height'] = 228;
        }

        if (isset($this->request->post['theme_butik_image_additional_width'])) {
            $data['theme_butik_image_additional_width'] = $this->request->post['theme_butik_image_additional_width'];
        } elseif (isset($setting_info['theme_butik_image_additional_width'])) {
            $data['theme_butik_image_additional_width'] = $setting_info['theme_butik_image_additional_width'];
        } else {
            $data['theme_butik_image_additional_width'] = 74;
        }

        if (isset($this->request->post['theme_butik_image_additional_height'])) {
            $data['theme_butik_image_additional_height'] = $this->request->post['theme_butik_image_additional_height'];
        } elseif (isset($setting_info['theme_butik_image_additional_height'])) {
            $data['theme_butik_image_additional_height'] = $setting_info['theme_butik_image_additional_height'];
        } else {
            $data['theme_butik_image_additional_height'] = 74;
        }

        if (isset($this->request->post['theme_butik_image_related_width'])) {
            $data['theme_butik_image_related_width'] = $this->request->post['theme_butik_image_related_width'];
        } elseif (isset($setting_info['theme_butik_image_related_width'])) {
            $data['theme_butik_image_related_width'] = $setting_info['theme_butik_image_related_width'];
        } else {
            $data['theme_butik_image_related_width'] = 80;
        }

        if (isset($this->request->post['theme_butik_image_related_height'])) {
            $data['theme_butik_image_related_height'] = $this->request->post['theme_butik_image_related_height'];
        } elseif (isset($setting_info['theme_butik_image_related_height'])) {
            $data['theme_butik_image_related_height'] = $setting_info['theme_butik_image_related_height'];
        } else {
            $data['theme_butik_image_related_height'] = 80;
        }

        if (isset($this->request->post['theme_butik_image_compare_width'])) {
            $data['theme_butik_image_compare_width'] = $this->request->post['theme_butik_image_compare_width'];
        } elseif (isset($setting_info['theme_butik_image_compare_width'])) {
            $data['theme_butik_image_compare_width'] = $setting_info['theme_butik_image_compare_width'];
        } else {
            $data['theme_butik_image_compare_width'] = 90;
        }

        if (isset($this->request->post['theme_butik_image_compare_height'])) {
            $data['theme_butik_image_compare_height'] = $this->request->post['theme_butik_image_compare_height'];
        } elseif (isset($setting_info['theme_butik_image_compare_height'])) {
            $data['theme_butik_image_compare_height'] = $setting_info['theme_butik_image_compare_height'];
        } else {
            $data['theme_butik_image_compare_height'] = 90;
        }

        if (isset($this->request->post['theme_butik_image_wishlist_width'])) {
            $data['theme_butik_image_wishlist_width'] = $this->request->post['theme_butik_image_wishlist_width'];
        } elseif (isset($setting_info['theme_butik_image_wishlist_width'])) {
            $data['theme_butik_image_wishlist_width'] = $setting_info['theme_butik_image_wishlist_width'];
        } else {
            $data['theme_butik_image_wishlist_width'] = 47;
        }

        if (isset($this->request->post['theme_butik_image_wishlist_height'])) {
            $data['theme_butik_image_wishlist_height'] = $this->request->post['theme_butik_image_wishlist_height'];
        } elseif (isset($setting_info['theme_butik_image_wishlist_height'])) {
            $data['theme_butik_image_wishlist_height'] = $setting_info['theme_butik_image_wishlist_height'];
        } else {
            $data['theme_butik_image_wishlist_height'] = 47;
        }

        if (isset($this->request->post['theme_butik_image_cart_width'])) {
            $data['theme_butik_image_cart_width'] = $this->request->post['theme_butik_image_cart_width'];
        } elseif (isset($setting_info['theme_butik_image_cart_width'])) {
            $data['theme_butik_image_cart_width'] = $setting_info['theme_butik_image_cart_width'];
        } else {
            $data['theme_butik_image_cart_width'] = 47;
        }

        if (isset($this->request->post['theme_butik_image_cart_height'])) {
            $data['theme_butik_image_cart_height'] = $this->request->post['theme_butik_image_cart_height'];
        } elseif (isset($setting_info['theme_butik_image_cart_height'])) {
            $data['theme_butik_image_cart_height'] = $setting_info['theme_butik_image_cart_height'];
        } else {
            $data['theme_butik_image_cart_height'] = 47;
        }

        if (isset($this->request->post['theme_butik_image_location_width'])) {
            $data['theme_butik_image_location_width'] = $this->request->post['theme_butik_image_location_width'];
        } elseif (isset($setting_info['theme_butik_image_location_width'])) {
            $data['theme_butik_image_location_width'] = $setting_info['theme_butik_image_location_width'];
        } else {
            $data['theme_butik_image_location_width'] = 268;
        }

        if (isset($this->request->post['theme_butik_image_location_height'])) {
            $data['theme_butik_image_location_height'] = $this->request->post['theme_butik_image_location_height'];
        } elseif (isset($setting_info['theme_butik_image_location_height'])) {
            $data['theme_butik_image_location_height'] = $setting_info['theme_butik_image_location_height'];
        } else {
            $data['theme_butik_image_location_height'] = 50;
        }

        // Option

        if (isset($this->request->post['theme_butik_quickview_status'])) {
            $data['theme_butik_quickview_status'] = $this->request->post['theme_butik_quickview_status'];
        } elseif (isset($setting_info['theme_butik_quickview_status'])) {
            $data['theme_butik_quickview_status'] = $setting_info['theme_butik_quickview_status'];
        } else {
            $data['theme_butik_quickview_status'] = false;
        }

        if (isset($this->request->post['theme_butik_compare_status'])) {
            $data['theme_butik_compare_status'] = $this->request->post['theme_butik_compare_status'];
        } elseif (isset($setting_info['theme_butik_compare_status'])) {
            $data['theme_butik_compare_status'] = $setting_info['theme_butik_compare_status'];
        } else {
            $data['theme_butik_compare_status'] = false;
        }

        if (isset($this->request->post['theme_butik_wishlist_status'])) {
            $data['theme_butik_wishlist_status'] = $this->request->post['theme_butik_wishlist_status'];
        } elseif (isset($setting_info['theme_butik_wishlist_status'])) {
            $data['theme_butik_wishlist_status'] = $setting_info['theme_butik_wishlist_status'];
        } else {
            $data['theme_butik_wishlist_status'] = false;
        }

        if (isset($this->request->post['theme_butik_short_description_status'])) {
            $data['theme_butik_short_description_status'] = $this->request->post['theme_butik_short_description_status'];
        } elseif (isset($setting_info['theme_butik_short_description_status'])) {
            $data['theme_butik_short_description_status'] = $setting_info['theme_butik_short_description_status'];
        } else {
            $data['theme_butik_short_description_status'] = false;
        }

        if (isset($this->request->post['theme_butik_backtotop_status'])) {
            $data['theme_butik_backtotop_status'] = $this->request->post['theme_butik_backtotop_status'];
        } elseif (isset($setting_info['theme_butik_backtotop_status'])) {
            $data['theme_butik_backtotop_status'] = $setting_info['theme_butik_backtotop_status'];
        } else {
            $data['theme_butik_backtotop_status'] = false;
        }

        if (isset($this->request->post['theme_butik_percentage_status'])) {
            $data['theme_butik_percentage_status'] = $this->request->post['theme_butik_percentage_status'];
        } elseif (isset($setting_info['theme_butik_percentage_status'])) {
            $data['theme_butik_percentage_status'] = $setting_info['theme_butik_percentage_status'];
        } else {
            $data['theme_butik_percentage_status'] = false;
        }

        if (isset($this->request->post['theme_butik_hover_img_status'])) {
            $data['theme_butik_hover_img_status'] = $this->request->post['theme_butik_hover_img_status'];
        } elseif (isset($setting_info['theme_butik_hover_img_status'])) {
            $data['theme_butik_hover_img_status'] = $setting_info['theme_butik_hover_img_status'];
        } else {
            $data['theme_butik_hover_img_status'] = false;
        }

        if (isset($this->request->post['theme_butik_ctegory_description_status'])) {
            $data['theme_butik_ctegory_description_status'] = $this->request->post['theme_butik_ctegory_description_status'];
        } elseif (isset($setting_info['theme_butik_ctegory_description_status'])) {
            $data['theme_butik_ctegory_description_status'] = $setting_info['theme_butik_ctegory_description_status'];
        } else {
            $data['theme_butik_ctegory_description_status'] = false;
        }

        if (isset($this->request->post['theme_butik_no_product'])) {
            $data['theme_butik_no_product'] = $this->request->post['theme_butik_no_product'];
        } elseif (isset($setting_info['theme_butik_no_product'])) {
            $data['theme_butik_no_product'] = $setting_info['theme_butik_no_product'];
        } else {
            $data['theme_butik_no_product'] = false;
        }

        if (isset($this->request->post['theme_butik_agree'])) {
            $data['theme_butik_agree'] = $this->request->post['theme_butik_agree'];
        } elseif (isset($setting_info['theme_butik_agree'])) {
            $data['theme_butik_agree'] = $setting_info['theme_butik_agree'];
        } else {
            $data['theme_butik_agree'] = false;
        }

        if (isset($this->request->post['theme_butik_agree'])) {
            $data['theme_butik_agree'] = $this->request->post['theme_butik_agree'];
        } else {
            $data['theme_butik_agree'] = $this->config->get('theme_butik_agree');
        }

        $this->load->model('catalog/information');

        $data['informations'] = $this->model_catalog_information->getInformations();

        if (isset($this->request->post['theme_butik_module_scroll'])) {
            $data['theme_butik_module_scroll'] = $this->request->post['theme_butik_module_scroll'];
        } elseif (isset($setting_info['theme_butik_module_scroll'])) {
            $data['theme_butik_module_scroll'] = $setting_info['theme_butik_module_scroll'];
        } else {
            $data['theme_butik_module_scroll'] = false;
        }

        if (isset($this->request->post['theme_butik_category_list_thumb'])) {
            $data['theme_butik_category_list_thumb'] = $this->request->post['theme_butik_category_list_thumb'];
        } elseif (isset($setting_info['theme_butik_category_list_thumb'])) {
            $data['theme_butik_category_list_thumb'] = $setting_info['theme_butik_category_list_thumb'];
        } else {
            $data['theme_butik_category_list_thumb'] = false;
        }

        if (isset($this->request->post['theme_butik_category_list_thumb_width'])) {
            $data['theme_butik_category_list_thumb_width'] = $this->request->post['theme_butik_category_list_thumb_width'];
        } elseif (isset($setting_info['theme_butik_category_list_thumb_width'])) {
            $data['theme_butik_category_list_thumb_width'] = $setting_info['theme_butik_category_list_thumb_width'];
        } else {
            $data['theme_butik_category_list_thumb_width'] = 189;
        }

        if (isset($this->request->post['theme_butik_category_list_thumb_height'])) {
            $data['theme_butik_category_list_thumb_height'] = $this->request->post['theme_butik_category_list_thumb_height'];
        } elseif (isset($setting_info['theme_butik_category_list_thumb_height'])) {
            $data['theme_butik_category_list_thumb_height'] = $setting_info['theme_butik_category_list_thumb_height'];
        } else {
            $data['theme_butik_category_list_thumb_height'] = 149;
        }

        // Header

        if (isset($this->request->post['theme_butik_topmenu_status'])) {
            $data['theme_butik_topmenu_status'] = $this->request->post['theme_butik_topmenu_status'];
        } elseif (isset($setting_info['theme_butik_topmenu_status'])) {
            $data['theme_butik_topmenu_status'] = $setting_info['theme_butik_topmenu_status'];
        } else {
            $data['theme_butik_topmenu_status'] = false;
        }

        if (isset($this->request->post['theme_butik_top_link'])) {
            $results = $this->request->post['theme_butik_top_link'];
        } elseif (isset($setting_info['theme_butik_top_link'])) {
            $results = $setting_info['theme_butik_top_link'];
        } else {
            $results = array();
        }

        $data['theme_butik_top_links'] = array();

        foreach ($results as $result) {
            $data['theme_butik_top_links'][] = array(
                'title' => $result['title'],
                'link'  => $result['link'],
                'sort'  => $result['sort']
            );
        }

        if (isset($this->request->post['theme_butik_header_phone'])) {
            $results = $this->request->post['theme_butik_header_phone'];
        } elseif (isset($setting_info['theme_butik_header_phone'])) {
            $results = $setting_info['theme_butik_header_phone'];
        } else {
            $results = array();
        }

        $data['theme_butik_header_phones'] = array();

        foreach ($results as $result) {
            $data['theme_butik_header_phones'][] = array(
                'phone' => $result['phone'],
                'sort'  => $result['sort']
            );
        }

        if (isset($this->request->post['theme_butik_header_schedule'])) {
            $data['theme_butik_header_schedule'] = $this->request->post['theme_butik_header_schedule'];
        } elseif (isset($setting_info['theme_butik_header_schedule'])) {
            $data['theme_butik_header_schedule'] = $setting_info['theme_butik_header_schedule'];
        } else {
            $data['theme_butik_header_schedule'] = false;
        }

        // Mine Menu

        if (isset($this->request->post['theme_butik_fixed_menu'])) {
            $data['theme_butik_fixed_menu'] = $this->request->post['theme_butik_fixed_menu'];
        } elseif (isset($setting_info['theme_butik_fixed_menu'])) {
            $data['theme_butik_fixed_menu'] = $setting_info['theme_butik_fixed_menu'];
        } else {
            $data['theme_butik_fixed_menu'] = false;
        }

        if (isset($this->request->post['theme_butik_home_link'])) {
            $data['theme_butik_home_link'] = $this->request->post['theme_butik_home_link'];
        } elseif (isset($setting_info['theme_butik_home_link'])) {
            $data['theme_butik_home_link'] = $setting_info['theme_butik_home_link'];
        } else {
            $data['theme_butik_home_link'] = false;
        }

        if (isset($this->request->post['theme_butik_menu_align'])) {
            $data['theme_butik_menu_align'] = $this->request->post['theme_butik_menu_align'];
        } elseif (isset($setting_info['theme_butik_menu_align'])) {
            $data['theme_butik_menu_align'] = $setting_info['theme_butik_menu_align'];
        } else {
            $data['theme_butik_menu_align'] = false;
        }

        if (isset($this->request->post['theme_butik_category_thumb'])) {
            $data['theme_butik_category_thumb'] = $this->request->post['theme_butik_category_thumb'];
        } elseif (isset($setting_info['theme_butik_category_thumb'])) {
            $data['theme_butik_category_thumb'] = $setting_info['theme_butik_category_thumb'];
        } else {
            $data['theme_butik_category_thumb'] = false;
        }

        if (isset($this->request->post['theme_butik_category_thumb_width'])) {
            $data['theme_butik_category_thumb_width'] = $this->request->post['theme_butik_category_thumb_width'];
        } elseif (isset($setting_info['theme_butik_category_thumb_width'])) {
            $data['theme_butik_category_thumb_width'] = $setting_info['theme_butik_category_thumb_width'];
        } else {
            $data['theme_butik_category_thumb_width'] = 189;
        }

        if (isset($this->request->post['theme_butik_category_thumb_height'])) {
            $data['theme_butik_category_thumb_height'] = $this->request->post['theme_butik_category_thumb_height'];
        } elseif (isset($setting_info['theme_butik_category_thumb_height'])) {
            $data['theme_butik_category_thumb_height'] = $setting_info['theme_butik_category_thumb_height'];
        } else {
            $data['theme_butik_category_thumb_height'] = 149;
        }

        if (isset($this->request->post['theme_butik_menu_link'])) {
            $results = $this->request->post['theme_butik_menu_link'];
        } elseif (isset($setting_info['theme_butik_menu_link'])) {
            $results = $setting_info['theme_butik_menu_link'];
        } else {
            $results = array();
        }

        $data['theme_butik_menu_links'] = array();

        foreach ($results as $result) {
            $data['theme_butik_menu_links'][] = array(
                'title' => $result['title'],
                'link'  => $result['link'],
                'sort'  => $result['sort']
            );
        }

        if (isset($this->request->post['theme_butik_category_link_left'])) {
            $data['theme_butik_category_link_left'] = $this->request->post['theme_butik_category_link_left'];
        } elseif (isset($setting_info['theme_butik_category_link_left'])) {
            $data['theme_butik_category_link_left'] = $setting_info['theme_butik_category_link_left'];
        } else {
            $data['theme_butik_category_link_left'] = false;
        }

        if (isset($this->request->post['theme_butik_brands_status'])) {
            $data['theme_butik_brands_status'] = $this->request->post['theme_butik_brands_status'];
        } elseif (isset($setting_info['theme_butik_brands_status'])) {
            $data['theme_butik_brands_status'] = $setting_info['theme_butik_brands_status'];
        } else {
            $data['theme_butik_brands_status'] = false;
        }

        if (isset($this->request->post['theme_butik_title_brands'])) {
            $data['theme_butik_title_brands'] = $this->request->post['theme_butik_title_brands'];
        } elseif (isset($setting_info['theme_butik_title_brands'])) {
            $data['theme_butik_title_brands'] = $setting_info['theme_butik_title_brands'];
        } else {
            $data['theme_butik_title_brands'] = false;
        }

        if (isset($this->request->post['theme_butik_html_block_status1'])) {
            $data['theme_butik_html_block_status1'] = $this->request->post['theme_butik_html_block_status1'];
        } elseif (isset($setting_info['theme_butik_html_block_status1'])) {
            $data['theme_butik_html_block_status1'] = $setting_info['theme_butik_html_block_status1'];
        } else {
            $data['theme_butik_html_block_status1'] = false;
        }

        if (isset($this->request->post['theme_butik_html_block_status2'])) {
            $data['theme_butik_html_block_status2'] = $this->request->post['theme_butik_html_block_status2'];
        } elseif (isset($setting_info['theme_butik_html_block_status2'])) {
            $data['theme_butik_html_block_status2'] = $setting_info['theme_butik_html_block_status2'];
        } else {
            $data['theme_butik_html_block_status2'] = false;
        }

        if (isset($this->request->post['theme_butik_html_block_status3'])) {
            $data['theme_butik_html_block_status3'] = $this->request->post['theme_butik_html_block_status3'];
        } elseif (isset($setting_info['theme_butik_html_block_status3'])) {
            $data['theme_butik_html_block_status3'] = $setting_info['theme_butik_html_block_status3'];
        } else {
            $data['theme_butik_html_block_status3'] = false;
        }

        if (isset($this->request->post['theme_butik_tab1_title'])) {
            $data['theme_butik_tab1_title'] = $this->request->post['theme_butik_tab1_title'];
        } elseif (isset($setting_info['theme_butik_tab1_title'])) {
            $data['theme_butik_tab1_title'] = $setting_info['theme_butik_tab1_title'];
        } else {
            $data['theme_butik_tab1_title'] = false;
        }

        if (isset($this->request->post['theme_butik_tab2_title'])) {
            $data['theme_butik_tab2_title'] = $this->request->post['theme_butik_tab2_title'];
        } elseif (isset($setting_info['theme_butik_tab2_title'])) {
            $data['theme_butik_tab2_title'] = $setting_info['theme_butik_tab2_title'];
        } else {
            $data['theme_butik_tab2_title'] = false;
        }

        if (isset($this->request->post['theme_butik_tab3_title'])) {
            $data['theme_butik_tab3_title'] = $this->request->post['theme_butik_tab3_title'];
        } elseif (isset($setting_info['theme_butik_tab3_title'])) {
            $data['theme_butik_tab3_title'] = $setting_info['theme_butik_tab3_title'];
        } else {
            $data['theme_butik_tab3_title'] = false;
        }

        if (isset($this->request->post['theme_butik_tab1_content'])) {
            $data['theme_butik_tab1_content'] = $this->request->post['theme_butik_tab1_content'];
        } elseif (isset($setting_info['theme_butik_tab1_content'])) {
            $data['theme_butik_tab1_content'] = $setting_info['theme_butik_tab1_content'];
        } else {
            $data['theme_butik_tab1_content'] = false;
        }

        if (isset($this->request->post['theme_butik_tab2_content'])) {
            $data['theme_butik_tab2_content'] = $this->request->post['theme_butik_tab2_content'];
        } elseif (isset($setting_info['theme_butik_tab2_content'])) {
            $data['theme_butik_tab2_content'] = $setting_info['theme_butik_tab2_content'];
        } else {
            $data['theme_butik_tab2_content'] = false;
        }

        if (isset($this->request->post['theme_butik_tab3_content'])) {
            $data['theme_butik_tab3_content'] = $this->request->post['theme_butik_tab3_content'];
        } elseif (isset($setting_info['theme_butik_tab3_content'])) {
            $data['theme_butik_tab3_content'] = $setting_info['theme_butik_tab3_content'];
        } else {
            $data['theme_butik_tab3_content'] = false;
        }

        if (isset($this->request->post['theme_butik_information_status'])) {
            $data['theme_butik_information_status'] = $this->request->post['theme_butik_information_status'];
        } elseif (isset($setting_info['theme_butik_information_status'])) {
            $data['theme_butik_information_status'] = $setting_info['theme_butik_information_status'];
        } else {
            $data['theme_butik_information_status'] = false;
        }

        if (isset($this->request->post['theme_butik_information_left'])) {
            $data['theme_butik_information_left'] = $this->request->post['theme_butik_information_left'];
        } elseif (isset($setting_info['theme_butik_information_left'])) {
            $data['theme_butik_information_left'] = $setting_info['theme_butik_information_left'];
        } else {
            $data['theme_butik_information_left'] = false;
        }

        if (isset($this->request->post['theme_butik_contact_status'])) {
            $data['theme_butik_contact_status'] = $this->request->post['theme_butik_contact_status'];
        } elseif (isset($setting_info['theme_butik_contact_status'])) {
            $data['theme_butik_contact_status'] = $setting_info['theme_butik_contact_status'];
        } else {
            $data['theme_butik_contact_status'] = false;
        }

        if (isset($this->request->post['theme_butik_contact_left'])) {
            $data['theme_butik_contact_left'] = $this->request->post['theme_butik_contact_left'];
        } elseif (isset($setting_info['theme_butik_contact_left'])) {
            $data['theme_butik_contact_left'] = $setting_info['theme_butik_contact_left'];
        } else {
            $data['theme_butik_contact_left'] = false;
        }

        // Product List

        if (isset($this->request->post['theme_butik_microdata_status'])) {
            $data['theme_butik_microdata_status'] = $this->request->post['theme_butik_microdata_status'];
        } elseif (isset($setting_info['theme_butik_microdata_status'])) {
            $data['theme_butik_microdata_status'] = $setting_info['theme_butik_microdata_status'];
        } else {
            $data['theme_butik_microdata_status'] = false;
        }

        if (isset($this->request->post['theme_butik_zoom_img'])) {
            $data['theme_butik_zoom_img'] = $this->request->post['theme_butik_zoom_img'];
        } elseif (isset($setting_info['theme_butik_zoom_img'])) {
            $data['theme_butik_zoom_img'] = $setting_info['theme_butik_zoom_img'];
        } else {
            $data['theme_butik_zoom_img'] = false;
        }

        if (isset($this->request->post['theme_butik_scroll_img'])) {
            $data['theme_butik_scroll_img'] = $this->request->post['theme_butik_scroll_img'];
        } elseif (isset($setting_info['theme_butik_scroll_img'])) {
            $data['theme_butik_scroll_img'] = $setting_info['theme_butik_scroll_img'];
        } else {
            $data['theme_butik_scroll_img'] = false;
        }

        if (isset($this->request->post['theme_butik_manufacturer_img'])) {
            $data['theme_butik_manufacturer_img'] = $this->request->post['theme_butik_manufacturer_img'];
        } elseif (isset($setting_info['theme_butik_manufacturer_img'])) {
            $data['theme_butik_manufacturer_img'] = $setting_info['theme_butik_manufacturer_img'];
        } else {
            $data['theme_butik_manufacturer_img'] = false;
        }

        if (isset($this->request->post['theme_butik_manufacturer_thumb_width'])) {
            $data['theme_butik_manufacturer_thumb_width'] = $this->request->post['theme_butik_manufacturer_thumb_width'];
        } elseif (isset($setting_info['theme_butik_manufacturer_thumb_width'])) {
            $data['theme_butik_manufacturer_thumb_width'] = $setting_info['theme_butik_manufacturer_thumb_width'];
        } else {
            $data['theme_butik_manufacturer_thumb_width'] = 120;
        }

        if (isset($this->request->post['theme_butik_manufacturer_thumb_height'])) {
            $data['theme_butik_manufacturer_thumb_height'] = $this->request->post['theme_butik_manufacturer_thumb_height'];
        } elseif (isset($setting_info['theme_butik_manufacturer_thumb_height'])) {
            $data['theme_butik_manufacturer_thumb_height'] = $setting_info['theme_butik_manufacturer_thumb_height'];
        } else {
            $data['theme_butik_manufacturer_thumb_height'] = 80;
        }

        if (isset($this->request->post['theme_butik_soc_code'])) {
            $data['theme_butik_soc_code'] = $this->request->post['theme_butik_soc_code'];
        } elseif (isset($setting_info['theme_butik_soc_code'])) {
            $data['theme_butik_soc_code'] = $setting_info['theme_butik_soc_code'];
        } else {
            $data['theme_butik_soc_code'] = false;
        }

        // Footer

        if (isset($this->request->post['theme_butik_footer_column1'])) {
            $data['theme_butik_footer_column1'] = $this->request->post['theme_butik_footer_column1'];
        } elseif (isset($setting_info['theme_butik_footer_column1'])) {
            $data['theme_butik_footer_column1'] = $setting_info['theme_butik_footer_column1'];
        } else {
            $data['theme_butik_footer_column1'] = false;
        }

        if (isset($this->request->post['theme_butik_footer_column2'])) {
            $data['theme_butik_footer_column2'] = $this->request->post['theme_butik_footer_column2'];
        } elseif (isset($setting_info['theme_butik_footer_column2'])) {
            $data['theme_butik_footer_column2'] = $setting_info['theme_butik_footer_column2'];
        } else {
            $data['theme_butik_footer_column2'] = false;
        }

        if (isset($this->request->post['theme_butik_footer_column3'])) {
            $data['theme_butik_footer_column3'] = $this->request->post['theme_butik_footer_column3'];
        } elseif (isset($setting_info['theme_butik_footer_column3'])) {
            $data['theme_butik_footer_column3'] = $setting_info['theme_butik_footer_column3'];
        } else {
            $data['theme_butik_footer_column3'] = false;
        }

        if (isset($this->request->post['theme_butik_footer_contact_status'])) {
            $data['theme_butik_footer_contact_status'] = $this->request->post['theme_butik_footer_contact_status'];
        } elseif (isset($setting_info['theme_butik_footer_contact_status'])) {
            $data['theme_butik_footer_contact_status'] = $setting_info['theme_butik_footer_contact_status'];
        } else {
            $data['theme_butik_footer_contact_status'] = false;
        }

        if (isset($this->request->post['theme_butik_footer_sitemap_status'])) {
            $data['theme_butik_footer_sitemap_status'] = $this->request->post['theme_butik_footer_sitemap_status'];
        } elseif (isset($setting_info['theme_butik_footer_sitemap_status'])) {
            $data['theme_butik_footer_sitemap_status'] = $setting_info['theme_butik_footer_sitemap_status'];
        } else {
            $data['theme_butik_footer_sitemap_status'] = false;
        }

        if (isset($this->request->post['theme_butik_footer_links_col1_add'])) {
            $results = $this->request->post['theme_butik_footer_links_col1_add'];
        } elseif (isset($setting_info['theme_butik_footer_links_col1_add'])) {
            $results = $setting_info['theme_butik_footer_links_col1_add'];
        } else {
            $results = array();
        }

        $data['theme_butik_footer_links_col1_added'] = array();

        foreach ($results as $result) {
            $data['theme_butik_footer_links_col1_added'][] = array(
                'title' => $result['title'],
                'link'  => $result['link'],
                'sort'  => $result['sort']
            );
        }

        if (isset($this->request->post['theme_butik_footer_account_status'])) {
            $data['theme_butik_footer_account_status'] = $this->request->post['theme_butik_footer_account_status'];
        } elseif (isset($setting_info['theme_butik_footer_account_status'])) {
            $data['theme_butik_footer_account_status'] = $setting_info['theme_butik_footer_account_status'];
        } else {
            $data['theme_butik_footer_account_status'] = false;
        }

        if (isset($this->request->post['theme_butik_footer_order_status'])) {
            $data['theme_butik_footer_order_status'] = $this->request->post['theme_butik_footer_order_status'];
        } elseif (isset($setting_info['theme_butik_footer_order_status'])) {
            $data['theme_butik_footer_order_status'] = $setting_info['theme_butik_footer_order_status'];
        } else {
            $data['theme_butik_footer_order_status'] = false;
        }

        if (isset($this->request->post['theme_butik_footer_wishlist_status'])) {
            $data['theme_butik_footer_wishlist_status'] = $this->request->post['theme_butik_footer_wishlist_status'];
        } elseif (isset($setting_info['theme_butik_footer_wishlist_status'])) {
            $data['theme_butik_footer_wishlist_status'] = $setting_info['theme_butik_footer_wishlist_status'];
        } else {
            $data['theme_butik_footer_wishlist_status'] = false;
        }

        if (isset($this->request->post['theme_butik_footer_newsletter_status'])) {
            $data['theme_butik_footer_newsletter_status'] = $this->request->post['theme_butik_footer_newsletter_status'];
        } elseif (isset($setting_info['theme_butik_footer_newsletter_status'])) {
            $data['theme_butik_footer_newsletter_status'] = $setting_info['theme_butik_footer_newsletter_status'];
        } else {
            $data['theme_butik_footer_newsletter_status'] = false;
        }

        if (isset($this->request->post['theme_butik_footer_return_status'])) {
            $data['theme_butik_footer_return_status'] = $this->request->post['theme_butik_footer_return_status'];
        } elseif (isset($setting_info['theme_butik_footer_return_status'])) {
            $data['theme_butik_footer_return_status'] = $setting_info['theme_butik_footer_return_status'];
        } else {
            $data['theme_butik_footer_return_status'] = false;
        }

        if (isset($this->request->post['theme_butik_footer_manufacturer_status'])) {
            $data['theme_butik_footer_manufacturer_status'] = $this->request->post['theme_butik_footer_manufacturer_status'];
        } elseif (isset($setting_info['theme_butik_footer_manufacturer_status'])) {
            $data['theme_butik_footer_manufacturer_status'] = $setting_info['theme_butik_footer_manufacturer_status'];
        } else {
            $data['theme_butik_footer_manufacturer_status'] = false;
        }

        if (isset($this->request->post['theme_butik_footer_voucher_status'])) {
            $data['theme_butik_footer_voucher_status'] = $this->request->post['theme_butik_footer_voucher_status'];
        } elseif (isset($setting_info['theme_butik_footer_voucher_status'])) {
            $data['theme_butik_footer_voucher_status'] = $setting_info['theme_butik_footer_voucher_status'];
        } else {
            $data['theme_butik_footer_voucher_status'] = false;
        }

        if (isset($this->request->post['theme_butik_footer_affiliate_status'])) {
            $data['theme_butik_footer_affiliate_status'] = $this->request->post['theme_butik_footer_affiliate_status'];
        } elseif (isset($setting_info['theme_butik_footer_affiliate_status'])) {
            $data['theme_butik_footer_affiliate_status'] = $setting_info['theme_butik_footer_affiliate_status'];
        } else {
            $data['theme_butik_footer_affiliate_status'] = false;
        }

        if (isset($this->request->post['theme_butik_footer_special_status'])) {
            $data['theme_butik_footer_special_status'] = $this->request->post['theme_butik_footer_special_status'];
        } elseif (isset($setting_info['theme_butik_footer_special_status'])) {
            $data['theme_butik_footer_special_status'] = $setting_info['theme_butik_footer_special_status'];
        } else {
            $data['theme_butik_footer_special_status'] = false;
        }

        if (isset($this->request->post['theme_butik_footer_links_col2_add'])) {
            $results = $this->request->post['theme_butik_footer_links_col2_add'];
        } elseif (isset($setting_info['theme_butik_footer_links_col2_add'])) {
            $results = $setting_info['theme_butik_footer_links_col2_add'];
        } else {
            $results = array();
        }

        $data['theme_butik_footer_links_col2_added'] = array();

        foreach ($results as $result) {
            $data['theme_butik_footer_links_col2_added'][] = array(
                'title' => $result['title'],
                'link'  => $result['link'],
                'sort'  => $result['sort']
            );
        }

        if (isset($this->request->post['theme_butik_footer_phone1'])) {
            $data['theme_butik_footer_phone1'] = $this->request->post['theme_butik_footer_phone1'];
        } elseif (isset($setting_info['theme_butik_footer_phone1'])) {
            $data['theme_butik_footer_phone1'] = $setting_info['theme_butik_footer_phone1'];
        } else {
            $data['theme_butik_footer_phone1'] = false;
        }

        if (isset($this->request->post['theme_butik_footer_phone2'])) {
            $data['theme_butik_footer_phone2'] = $this->request->post['theme_butik_footer_phone2'];
        } elseif (isset($setting_info['theme_butik_footer_phone2'])) {
            $data['theme_butik_footer_phone2'] = $setting_info['theme_butik_footer_phone2'];
        } else {
            $data['theme_butik_footer_phone2'] = false;
        }

        if (isset($this->request->post['theme_butik_footer_phone3'])) {
            $data['theme_butik_footer_phone3'] = $this->request->post['theme_butik_footer_phone3'];
        } elseif (isset($setting_info['theme_butik_footer_phone3'])) {
            $data['theme_butik_footer_phone3'] = $setting_info['theme_butik_footer_phone3'];
        } else {
            $data['theme_butik_footer_phone3'] = false;
        }

        if (isset($this->request->post['theme_butik_footer_phone4'])) {
            $data['theme_butik_footer_phone4'] = $this->request->post['theme_butik_footer_phone4'];
        } elseif (isset($setting_info['theme_butik_footer_phone4'])) {
            $data['theme_butik_footer_phone4'] = $setting_info['theme_butik_footer_phone4'];
        } else {
            $data['theme_butik_footer_phone4'] = false;
        }

        if (isset($this->request->post['theme_butik_footer_email'])) {
            $data['theme_butik_footer_email'] = $this->request->post['theme_butik_footer_email'];
        } elseif (isset($setting_info['theme_butik_footer_email'])) {
            $data['theme_butik_footer_email'] = $setting_info['theme_butik_footer_email'];
        } else {
            $data['theme_butik_footer_email'] = false;
        }

        if (isset($this->request->post['theme_butik_footer_skype'])) {
            $data['theme_butik_footer_skype'] = $this->request->post['theme_butik_footer_skype'];
        } elseif (isset($setting_info['theme_butik_footer_skype'])) {
            $data['theme_butik_footer_skype'] = $setting_info['theme_butik_footer_skype'];
        } else {
            $data['theme_butik_footer_skype'] = false;
        }

        if (isset($this->request->post['theme_butik_footer_schedule'])) {
            $data['theme_butik_footer_schedule'] = $this->request->post['theme_butik_footer_schedule'];
        } elseif (isset($setting_info['theme_butik_footer_schedule'])) {
            $data['theme_butik_footer_schedule'] = $setting_info['theme_butik_footer_schedule'];
        } else {
            $data['theme_butik_footer_schedule'] = false;
        }

        if (isset($this->request->post['theme_butik_footer_location'])) {
            $data['theme_butik_footer_location'] = $this->request->post['theme_butik_footer_location'];
        } elseif (isset($setting_info['theme_butik_footer_location'])) {
            $data['theme_butik_footer_location'] = $setting_info['theme_butik_footer_location'];
        } else {
            $data['theme_butik_footer_location'] = false;
        }

        if (isset($this->request->post['theme_butik_footer_about_us'])) {
            $data['theme_butik_footer_about_us'] = $this->request->post['theme_butik_footer_about_us'];
        } elseif (isset($setting_info['theme_butik_footer_about_us'])) {
            $data['theme_butik_footer_about_us'] = $setting_info['theme_butik_footer_about_us'];
        } else {
            $data['theme_butik_footer_about_us'] = false;
        }

        if (isset($this->request->post['theme_butik_image_footer_logo'])) {
            $data['theme_butik_image_footer_logo'] = $this->request->post['theme_butik_image_footer_logo'];
        } else {
            $data['theme_butik_image_footer_logo'] = $this->config->get('theme_butik_image_footer_logo');
        }

        if (isset($this->request->post['theme_butik_image_footer_logo']) && is_file(DIR_IMAGE . $this->request->post['theme_butik_image_footer_logo'])) {
            $data['theme_butik_footer_logo'] = $this->model_tool_image->resize($this->request->post['theme_butik_image_footer_logo'], 100, 100);
        } elseif ($this->config->get('theme_butik_image_footer_logo') && is_file(DIR_IMAGE . $this->config->get('theme_butik_image_footer_logo'))) {
            $data['theme_butik_footer_logo'] = $this->model_tool_image->resize($this->config->get('theme_butik_image_footer_logo'), 100, 100);
        } else {
            $data['theme_butik_footer_logo'] = $this->model_tool_image->resize('no_image.png', 100, 100);
        }

        // SOC-IMG

        if (isset($this->request->post['theme_butik_soc_image'])) {
            $results = $this->request->post['theme_butik_soc_image'];
        } elseif ($this->config->get('theme_butik_soc_image')) {
            $results = $this->config->get('theme_butik_soc_image');
        } else {
            $results = array();
        }

        $data['theme_butik_soc_images'] = array();

        foreach ($results as $result) {

            if (is_file(DIR_IMAGE . $result['image'])) {
                $image = $result['image'];
                $thumb = $result['image'];
            } else {
                $image = '';
                $thumb = 'no_image.png';
            }

            $data['theme_butik_soc_images'][] = array(
                'image' => $image,
                'thumb' => $this->model_tool_image->resize($thumb, 60, 60),
                'link' => $result['link'],
            );
        }

        // Payments

        if (isset($this->request->post['theme_butik_payment_image'])) {
            $results = $this->request->post['theme_butik_payment_image'];
        } elseif ($this->config->get('theme_butik_payment_image')) {
            $results = $this->config->get('theme_butik_payment_image');
        } else {
            $results = array();
        }

        $data['theme_butik_payment_images'] = array();

        foreach ($results as $result) {

            if (is_file(DIR_IMAGE . $result['image'])) {
                $image = $result['image'];
                $thumb = $result['image'];
            } else {
                $image = '';
                $thumb = 'no_image.png';
            }

            $data['theme_butik_payment_images'][] = array(
                'image' => $image,
                'thumb' => $this->model_tool_image->resize($thumb, 60, 60),
                'link' => $result['link'],
            );
        }

        $data['placeholder'] = $this->model_tool_image->resize('no_image.png', 60, 60);

        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('extension/theme/butik', $data));
    }

    protected function validate() {
        if (!$this->user->hasPermission('modify', 'extension/theme/butik')) {
            $this->error['warning'] = $this->language->get('error_permission');
        }

        if (!$this->request->post['theme_butik_product_limit']) {
            $this->error['product_limit'] = $this->language->get('error_limit');
        }

        if (!$this->request->post['theme_butik_product_description_length']) {
            $this->error['product_description_length'] = $this->language->get('error_limit');
        }

        if (!$this->request->post['theme_butik_image_category_width'] || !$this->request->post['theme_butik_image_category_height']) {
            $this->error['image_category'] = $this->language->get('error_image_category');
        }

        if (!$this->request->post['theme_butik_image_thumb_width'] || !$this->request->post['theme_butik_image_thumb_height']) {
            $this->error['image_thumb'] = $this->language->get('error_image_thumb');
        }

        if (!$this->request->post['theme_butik_image_popup_width'] || !$this->request->post['theme_butik_image_popup_height']) {
            $this->error['image_popup'] = $this->language->get('error_image_popup');
        }

        if (!$this->request->post['theme_butik_image_product_width'] || !$this->request->post['theme_butik_image_product_height']) {
            $this->error['image_product'] = $this->language->get('error_image_product');
        }

        if (!$this->request->post['theme_butik_image_additional_width'] || !$this->request->post['theme_butik_image_additional_height']) {
            $this->error['image_additional'] = $this->language->get('error_image_additional');
        }

        if (!$this->request->post['theme_butik_image_related_width'] || !$this->request->post['theme_butik_image_related_height']) {
            $this->error['image_related'] = $this->language->get('error_image_related');
        }

        if (!$this->request->post['theme_butik_image_compare_width'] || !$this->request->post['theme_butik_image_compare_height']) {
            $this->error['image_compare'] = $this->language->get('error_image_compare');
        }

        if (!$this->request->post['theme_butik_image_wishlist_width'] || !$this->request->post['theme_butik_image_wishlist_height']) {
            $this->error['image_wishlist'] = $this->language->get('error_image_wishlist');
        }

        if (!$this->request->post['theme_butik_image_cart_width'] || !$this->request->post['theme_butik_image_cart_height']) {
            $this->error['image_cart'] = $this->language->get('error_image_cart');
        }

        if (!$this->request->post['theme_butik_image_location_width'] || !$this->request->post['theme_butik_image_location_height']) {
            $this->error['image_location'] = $this->language->get('error_image_location');
        }

        return !$this->error;
    }
}
