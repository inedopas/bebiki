<?php
class ControllerCommonFooter extends Controller {
	public function index() {
		$this->load->language('common/footer');

        $this->load->language('extension/module/butik');
        $data['language_id'] = $this->config->get('config_language_id');
        $language_id = $this->config->get('config_language_id');
        $this->load->model('tool/image');

        $data['butik_callback_status'] = $this->config->get('module_butik_callback_status');
        $data['butik_backtotop_status'] = $this->config->get('theme_butik_backtotop_status');
        $data['butik_footer_contact_status'] = $this->config->get('theme_butik_footer_contact_status');
        $data['butik_footer_sitemap_status'] = $this->config->get('theme_butik_footer_sitemap_status');
        $data['butik_footer_account_status'] = $this->config->get('theme_butik_footer_account_status');
        $data['butik_footer_order_status'] = $this->config->get('theme_butik_footer_order_status');
        $data['butik_footer_wishlist_status'] = $this->config->get('theme_butik_footer_wishlist_status');
        $data['butik_footer_newsletter_status'] = $this->config->get('theme_butik_footer_newsletter_status');
        $data['butik_footer_return_status'] = $this->config->get('theme_butik_footer_return_status');
        $data['butik_footer_manufacturer_status'] = $this->config->get('theme_butik_footer_manufacturer_status');
        $data['butik_footer_voucher_status'] = $this->config->get('theme_butik_footer_voucher_status');
        $data['butik_footer_affiliate_status'] = $this->config->get('theme_butik_footer_affiliate_status');
        $data['butik_footer_special_status'] = $this->config->get('theme_butik_footer_special_status');
        $data['butik_footer_phone1'] = $this->config->get('theme_butik_footer_phone1');
        $data['butik_footer_phone2'] = $this->config->get('theme_butik_footer_phone2');
        $data['butik_footer_phone3'] = $this->config->get('theme_butik_footer_phone3');
        $data['butik_footer_phone4'] = $this->config->get('theme_butik_footer_phone4');
        $data['w_footer_phone1'] = preg_replace("/[^0-9]/", "", $this->config->get('theme_butik_footer_phone1'));
        $data['w_footer_phone2'] = preg_replace("/[^0-9]/", "", $this->config->get('theme_butik_footer_phone2'));
        $data['w_footer_phone3'] = preg_replace("/[^0-9]/", "", $this->config->get('theme_butik_footer_phone3'));
        $data['w_footer_phone4'] = preg_replace("/[^0-9]/", "", $this->config->get('theme_butik_footer_phone4'));
        $data['butik_footer_email'] = $this->config->get('theme_butik_footer_email');
        $data['butik_footer_skype'] = $this->config->get('theme_butik_footer_skype');

        if ($this->request->server['HTTPS']) {
            $server = $this->config->get('config_ssl');
        } else {
            $server = $this->config->get('config_url');
        }

        if (is_file(DIR_IMAGE . $this->config->get('theme_butik_image_footer_logo'))) {
            $data['butik_footer_logo'] = $server . 'image/' . $this->config->get('theme_butik_image_footer_logo');
        } else {
            $data['butik_footer_logo'] = '';
        }

        $footer_column1 = $this->config->get('theme_butik_footer_column1');
        if(empty($footer_column1[$this->config->get('config_language_id')])) {
            $data['footer_column1'] = false;
        } elseif (isset($footer_column1[$this->config->get('config_language_id')])) {
            $data['footer_column1'] = html_entity_decode($footer_column1[$this->config->get('config_language_id')], ENT_QUOTES, 'UTF-8');
        }

        $footer_column2 = $this->config->get('theme_butik_footer_column2');
        if(empty($footer_column2[$this->config->get('config_language_id')])) {
            $data['footer_column2'] = false;
        } elseif (isset($footer_column2[$this->config->get('config_language_id')])) {
            $data['footer_column2'] = html_entity_decode($footer_column2[$this->config->get('config_language_id')], ENT_QUOTES, 'UTF-8');
        }

        $footer_column3 = $this->config->get('theme_butik_footer_column3');
        if(empty($footer_column3[$this->config->get('config_language_id')])) {
            $data['footer_column3'] = false;
        } elseif (isset($footer_column3[$this->config->get('config_language_id')])) {
            $data['footer_column3'] = html_entity_decode($footer_column3[$this->config->get('config_language_id')], ENT_QUOTES, 'UTF-8');
        }

        $footer_schedule = $this->config->get('theme_butik_footer_schedule');
        if(empty($footer_schedule[$this->config->get('config_language_id')])) {
            $data['footer_schedule'] = false;
        } elseif (isset($footer_schedule[$this->config->get('config_language_id')])) {
            $data['footer_schedule'] = html_entity_decode($footer_schedule[$this->config->get('config_language_id')], ENT_QUOTES, 'UTF-8');
        }

        $footer_location = $this->config->get('theme_butik_footer_location');
        if(empty($footer_location[$this->config->get('config_language_id')])) {
            $data['footer_location'] = false;
        } elseif (isset($footer_location[$this->config->get('config_language_id')])) {
            $data['footer_location'] = html_entity_decode($footer_location[$this->config->get('config_language_id')], ENT_QUOTES, 'UTF-8');
        }

        $footer_about_us = $this->config->get('theme_butik_footer_about_us');
        if(empty($footer_about_us[$this->config->get('config_language_id')])) {
            $data['footer_about_us'] = false;
        } elseif (isset($footer_about_us[$this->config->get('config_language_id')])) {
            $data['footer_about_us'] = html_entity_decode($footer_about_us[$this->config->get('config_language_id')], ENT_QUOTES, 'UTF-8');
        }

        $data['theme_butik_footer_links_col1_add'] = array();
        $footer1_link_add = $this->config->get('theme_butik_footer_links_col1_add');
        if (!empty($footer1_link_add)){
            foreach ($footer1_link_add as $key => $value) {
                $data['footer1_link_add'][] = array(
                    'title'  => $value['title'][$this->config->get('config_language_id')],
                    'link'   => $value['link'][$this->config->get('config_language_id')]
                );
                $footer1_link_add_sort[$key] = $value['sort'];
            }
            array_multisort($footer1_link_add_sort, SORT_ASC, $data['footer1_link_add']);
        }

        $data['theme_butik_footer_links_col2_add'] = array();
        $footer2_link_add = $this->config->get('theme_butik_footer_links_col2_add');
        if (!empty($footer2_link_add)){
            foreach ($footer2_link_add as $key => $value) {
                $data['footer2_link_add'][] = array(
                    'title'  => $value['title'][$this->config->get('config_language_id')],
                    'link'   => $value['link'][$this->config->get('config_language_id')]
                );
                $footer2_link_add_sort[$key] = $value['sort'];
            }
            array_multisort($footer2_link_add_sort, SORT_ASC, $data['footer2_link_add']);
        }

        $data['theme_butik_soc_image'] = array();
        $soc_footer = $this->config->get('theme_butik_soc_image');
        if (!empty($soc_footer)){
            foreach ($soc_footer as $key => $value) {
                $data['soc_footer'][] = array(
                    'image' => is_file(DIR_IMAGE . $value['image']) ? $this->model_tool_image->resize($value['image'], 50, 30) : '',
                    'link'  => $value['link'],
                );
            }
        }

        $data['theme_butik_payment_image'] = array();
        $payments_metods = $this->config->get('theme_butik_payment_image');
        if (!empty($payments_metods)){
            foreach ($payments_metods as $key => $value) {
                $data['payments_metods'][] = array(
                    'image' => is_file(DIR_IMAGE . $value['image']) ? $this->model_tool_image->resize($value['image'], 50, 30) : '',
                    'link'  => $value['link'],
                );
            }
        }

        


				$data['text_testimonial'] = $this->language->get('text_testimonial');
			
		$this->load->model('catalog/information');

		$data['informations'] = array();

		foreach ($this->model_catalog_information->getInformations() as $result) {
			if ($result['bottom']) {
				$data['informations'][] = array(
					'title' => $result['title'],
					'href'  => $this->url->link('information/information', 'information_id=' . $result['information_id'])
				);
			}
		}


				$data['testimonial'] = $this->url->link('product/testimonial');
			
		$data['contact'] = $this->url->link('information/contact');
		$data['return'] = $this->url->link('account/return/add', '', true);
		$data['sitemap'] = $this->url->link('information/sitemap');
		$data['tracking'] = $this->url->link('information/tracking');
		$data['manufacturer'] = $this->url->link('product/manufacturer');
		$data['voucher'] = $this->url->link('account/voucher', '', true);
		$data['affiliate'] = $this->url->link('affiliate/login', '', true);
		$data['special'] = $this->url->link('product/special');
		$data['account'] = $this->url->link('account/account', '', true);
		$data['order'] = $this->url->link('account/order', '', true);
		$data['wishlist'] = $this->url->link('account/wishlist', '', true);
		$data['newsletter'] = $this->url->link('account/newsletter', '', true);

		$data['powered'] = sprintf($this->language->get('text_powered'), $this->config->get('config_name'), date('Y', time()));

		// Whos Online
		if ($this->config->get('config_customer_online')) {
			$this->load->model('tool/online');

			if (isset($this->request->server['REMOTE_ADDR'])) {
				$ip = $this->request->server['REMOTE_ADDR'];
			} else {
				$ip = '';
			}

			if (isset($this->request->server['HTTP_HOST']) && isset($this->request->server['REQUEST_URI'])) {
				$url = ($this->request->server['HTTPS'] ? 'https://' : 'http://') . $this->request->server['HTTP_HOST'] . $this->request->server['REQUEST_URI'];
			} else {
				$url = '';
			}

			if (isset($this->request->server['HTTP_REFERER'])) {
				$referer = $this->request->server['HTTP_REFERER'];
			} else {
				$referer = '';
			}

			$this->model_tool_online->addOnline($ip, $this->customer->getId(), $url, $referer);
		}

		$data['scripts'] = $this->document->getScripts('footer');
		
		return $this->load->view('common/footer', $data);
	}
}
