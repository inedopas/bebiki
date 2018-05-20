<?php
class ControllerExtensionModuleSpecial extends Controller {
	public function index($setting) {
		$this->load->language('extension/module/special');

		$this->load->model('catalog/product');

		$this->load->model('tool/image');

            $this->load->language('extension/module/butik');

            if ($this->config->get('theme_butik_module_scroll') || $this->config->get('theme_butik_quickview_status')) {
                $this->document->addStyle('catalog/view/theme/butik/js/owl-carousel/owl.carousel.css');
                $this->document->addScript('catalog/view/theme/butik/js/owl-carousel/owl.carousel.min.js');
            }

            $data['position'] = $setting['position'];
            $data['butik_module_scroll'] = $this->config->get('theme_butik_module_scroll');
            $data['butik_hover_img_status'] = $this->config->get('theme_butik_hover_img_status');
            $data['butik_compare_status'] = $this->config->get('theme_butik_compare_status');
            $data['butik_wishlist_status'] = $this->config->get('theme_butik_wishlist_status');
            $data['butik_short_description_status'] = $this->config->get('theme_butik_short_description_status');
            $data['butik_percentage_status'] = $this->config->get('theme_butik_percentage_status');
            $data['butik_no_product'] = $this->config->get('theme_butik_no_product');
            $data['butik_fastorder_module'] = $this->config->get('module_butik_fastorder_module');
            $data['butik_quickview_status'] = $this->config->get('theme_butik_quickview_status');
            

		$data['products'] = array();

		$filter_data = array(
			'sort'  => 'pd.name',
			'order' => 'ASC',
			'start' => 0,
			'limit' => $setting['limit']
		);

		$results = $this->model_catalog_product->getProductSpecials($filter_data);

		if ($results) {
			foreach ($results as $result) {
				if ($result['image']) {
					$image = $this->model_tool_image->resize($result['image'], $setting['width'], $setting['height']);
				} else {
					$image = $this->model_tool_image->resize('placeholder.png', $setting['width'], $setting['height']);
				}

				if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
					$price = $this->currency->format($this->tax->calculate($result['price'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
				} else {
					$price = false;
				}

				if ((float)$result['special']) {
					$special = $this->currency->format($this->tax->calculate($result['special'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
				} else {
					$special = false;
				}

				if ($this->config->get('config_tax')) {
					$tax = $this->currency->format((float)$result['special'] ? $result['special'] : $result['price'], $this->session->data['currency']);
				} else {
					$tax = false;
				}

				if ($this->config->get('config_review_status')) {
					$rating = $result['rating'];
				} else {
					$rating = false;
				}


                $additional_img = $this->model_catalog_product->getProductImages($result['product_id']);

                if (isset($additional_img[0]['image']) && !empty($additional_img[0]['image'])) {
                  $additional_img = $this->model_tool_image->resize($additional_img[0]['image'], $setting['width'], $setting['height']);
                } else {
                  $additional_img = false;
                }
            
				$data['products'][] = array(
'additional_img' => $additional_img,
                'product_quantity' => $result['quantity'],
                'entry_stock' => $result['stock_status'],
					'product_id'  => $result['product_id'],
					'thumb'       => $image,
					'name'        => $result['name'],
					'description' => utf8_substr(trim(strip_tags(html_entity_decode($result['description'], ENT_QUOTES, 'UTF-8'))), 0, $this->config->get('theme_' . $this->config->get('config_theme') . '_product_description_length')) . '..',
					'price'       => $price,
					'special'     => $special,
					'tax'         => $tax,
					'rating'      => $rating,
					'href'    	 => $this->url->link('product/product', 'product_id=' . $result['product_id']),
          'percentage' => $result['price'] == 0 ? 100 : round((($result['price'] - $result['special'])/$result['price'])*100, 0)
				);
			}

			return $this->load->view('extension/module/special', $data);
		}
	}
}