<?php
class ControllerCommonHeader extends Controller {
	public function index() {
$data['d_ajax_search'] = $this->load->controller('extension/module/d_ajax_search');
		// Analytics
		$this->load->model('setting/extension');

		$data['analytics'] = array();

		$analytics = $this->model_setting_extension->getExtensions('analytics');

		foreach ($analytics as $analytic) {
			if ($this->config->get('analytics_' . $analytic['code'] . '_status')) {
				$data['analytics'][] = $this->load->controller('extension/analytics/' . $analytic['code'], $this->config->get('analytics_' . $analytic['code'] . '_status'));
			}
		}

		if ($this->request->server['HTTPS']) {
			$server = $this->config->get('config_ssl');
		} else {
			$server = $this->config->get('config_url');
		}

		if (is_file(DIR_IMAGE . $this->config->get('config_icon'))) {
			$this->document->addLink($server . 'image/' . $this->config->get('config_icon'), 'icon');
		}

		$data['title'] = $this->document->getTitle();

		$data['base'] = $server;
		$data['description'] = $this->document->getDescription();
		$data['keywords'] = $this->document->getKeywords();
		$data['links'] = $this->document->getLinks();
		$data['styles'] = $this->document->getStyles();
		$data['scripts'] = $this->document->getScripts('header');
		$data['lang'] = $this->language->get('code');
		$data['direction'] = $this->language->get('direction');

		$data['name'] = $this->config->get('config_name');

		if (is_file(DIR_IMAGE . $this->config->get('config_logo'))) {
			$data['logo'] = $server . 'image/' . $this->config->get('config_logo');
		} else {
			$data['logo'] = '';
		}

		$this->load->language('common/header');

            $this->load->language('extension/module/butik');
            $data['language_id'] = $this->config->get('config_language_id');
            $language_id = $this->config->get('config_language_id');

            $data['butik_menu_align'] = $this->config->get('theme_butik_menu_align');
            $data['butik_topmenu_status'] = $this->config->get('theme_butik_topmenu_status');
            $data['butik_compare_status'] = $this->config->get('theme_butik_compare_status');
            $data['butik_wishlist_status'] = $this->config->get('theme_butik_wishlist_status');

            $data['theme_butik_top_link'] = array();
            $top_link_add = $this->config->get('theme_butik_top_link');
            if (!empty($top_link_add)){
                foreach ($top_link_add as $key => $value) {
                    $data['top_link_add'][] = array(
                        'title'  => $value['title'][$this->config->get('config_language_id')],
                        'link'   => $value['link'][$this->config->get('config_language_id')]
                    );
                    $top_link_add_sort[$key] = $value['sort'];
                }
                array_multisort($top_link_add_sort, SORT_ASC, $data['top_link_add']);
            }

            $data['theme_butik_header_phone'] = array();
            $header_phones = $this->config->get('theme_butik_header_phone');
            if (!empty($header_phones)){
                foreach ($header_phones as $key => $value) {
                    $data['header_phones'][] = array(
                        'phone'  => $value['phone'],
                        'link'   => preg_replace('![^0-9]+!', '', $value['phone'])
                    );
                    $header_phones_sort[$key] = $value['sort'];
                }
                array_multisort($header_phones_sort, SORT_ASC, $data['header_phones']);
            }

            $contact_schedule = $this->config->get('theme_butik_header_schedule');
            if(empty($contact_schedule[$this->config->get('config_language_id')])) {
                $data['contact_schedule'] = false;
            } elseif (isset($contact_schedule[$this->config->get('config_language_id')])) {
                $data['contact_schedule'] = html_entity_decode($contact_schedule[$this->config->get('config_language_id')], ENT_QUOTES, 'UTF-8');
            }

            $data['butik_compare'] = sprintf($this->language->get('butik_compare'), (isset($this->session->data['compare']) ? count($this->session->data['compare']) : 0));
            $data['compare'] = $this->url->link('product/compare', '', true);
            

		// Wishlist
		if ($this->customer->isLogged()) {
			$this->load->model('account/wishlist');

			$data['text_wishlist'] = sprintf($this->language->get('text_wishlist'), $this->model_account_wishlist->getTotalWishlist());
		} else {
			$data['text_wishlist'] = sprintf($this->language->get('text_wishlist'), (isset($this->session->data['wishlist']) ? count($this->session->data['wishlist']) : 0));
		}

		$data['text_logged'] = sprintf($this->language->get('text_logged'), $this->url->link('account/account', '', true), $this->customer->getFirstName(), $this->url->link('account/logout', '', true));
		
		$data['home'] = $this->url->link('common/home');
		$data['wishlist'] = $this->url->link('account/wishlist', '', true);
		$data['logged'] = $this->customer->isLogged();
		$data['account'] = $this->url->link('account/account', '', true);
		$data['register'] = $this->url->link('account/register', '', true);
		$data['login'] = $this->url->link('account/login', '', true);
		$data['order'] = $this->url->link('account/order', '', true);
		$data['transaction'] = $this->url->link('account/transaction', '', true);
		$data['download'] = $this->url->link('account/download', '', true);
		$data['logout'] = $this->url->link('account/logout', '', true);
		$data['shopping_cart'] = $this->url->link('checkout/cart');
		$data['checkout'] = $this->url->link('checkout/checkout', '', true);
		$data['contact'] = $this->url->link('information/contact');
		$data['telephone'] = $this->config->get('config_telephone');
		
		$data['language'] = $this->load->controller('common/language');
		$data['currency'] = $this->load->controller('common/currency');
		$data['search'] = $this->load->controller('common/search');
		$data['cart'] = $this->load->controller('common/cart');
		$data['menu'] = $this->load->controller('common/menu');

		return $this->load->view('common/header', $data);
	}
}
