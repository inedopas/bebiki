<?php
class ControllerCommonMenu extends Controller {
	public function index() {
		$this->load->language('common/menu');

            $this->load->model('tool/image');
            $this->load->model('catalog/manufacturer');
            $this->load->language('extension/module/butik');
            $data['language_id'] = $this->config->get('config_language_id');
            $language_id = $this->config->get('config_language_id');

            $data['butik_home_link'] = $this->config->get('theme_butik_home_link');
            $data['butik_category_thumb'] = $this->config->get('theme_butik_category_thumb');
            $data['butik_brands_status'] = $this->config->get('theme_butik_brands_status');
            $data['butik_html_block_status1'] = $this->config->get('theme_butik_html_block_status1');
            $data['butik_html_block_status2'] = $this->config->get('theme_butik_html_block_status2');
            $data['butik_html_block_status3'] = $this->config->get('theme_butik_html_block_status3');
            $data['butik_information_status'] = $this->config->get('theme_butik_information_status');
            $data['butik_contact_status'] = $this->config->get('theme_butik_contact_status');
            $data['butik_fixed_menu'] = $this->config->get('theme_butik_fixed_menu');

            $data['home'] = $this->url->link('common/home');
            $data['manufacturer'] = $this->url->link('product/manufacturer');
            $data['contact'] = $this->url->link('information/contact');

            $title_brands = $this->config->get('theme_butik_title_brands');
            if(empty($title_brands[$this->config->get('config_language_id')])) {
                $data['title_brands'] = false;
            } elseif (isset($title_brands[$this->config->get('config_language_id')])) {
                $data['title_brands'] = html_entity_decode($title_brands[$this->config->get('config_language_id')], ENT_QUOTES, 'UTF-8');
            }

            $data['theme_butik_menu_link'] = array();
            $menu_link_add = $this->config->get('theme_butik_menu_link');
            if (!empty($menu_link_add)){
                foreach ($menu_link_add as $key => $value) {
                    $data['menu_link_add'][] = array(
                        'title'  => $value['title'][$this->config->get('config_language_id')],
                        'link'   => $value['link'][$this->config->get('config_language_id')]
                    );
                    $menu_link_add_sort[$key] = $value['sort'];
                }
                array_multisort($menu_link_add_sort, SORT_ASC, $data['menu_link_add']);
            }

            $brand_info = $this->model_catalog_manufacturer->getManufacturers();
            foreach ($brand_info as $result) {
                if ($result['image']) {
                    $image = $result['image'];
                } else {
                    $image = 'no_image.jpg';
                }
                $data['manufacturers'][] = array(
                    'name' => $result['name'],
                    'image' => $this->model_tool_image->resize($image, 80, 60),
                    'href' => $this->url->link('product/manufacturer/info', 'manufacturer_id=' . $result['manufacturer_id'])
                );
            }

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

            $html_title1 = $this->config->get('theme_butik_tab1_title');
            if(empty($html_title1[$this->config->get('config_language_id')])) {
                $data['html_title1'] = false;
            } elseif (isset($html_title1[$this->config->get('config_language_id')])) {
                $data['html_title1'] = html_entity_decode($html_title1[$this->config->get('config_language_id')], ENT_QUOTES, 'UTF-8');
            }

            $html_title2 = $this->config->get('theme_butik_tab2_title');
            if(empty($html_title2[$this->config->get('config_language_id')])) {
                $data['html_title2'] = false;
            } elseif (isset($html_title2[$this->config->get('config_language_id')])) {
                $data['html_title2'] = html_entity_decode($html_title2[$this->config->get('config_language_id')], ENT_QUOTES, 'UTF-8');
            }

            $html_title3 = $this->config->get('theme_butik_tab3_title');
            if(empty($html_title3[$this->config->get('config_language_id')])) {
                $data['html_title3'] = false;
            } elseif (isset($html_title3[$this->config->get('config_language_id')])) {
                $data['html_title3'] = html_entity_decode($html_title3[$this->config->get('config_language_id')], ENT_QUOTES, 'UTF-8');
            }

            $html_content1 = $this->config->get('theme_butik_tab1_content');
            if(empty($html_content1[$this->config->get('config_language_id')])) {
                $data['html_content1'] = false;
            } elseif (isset($html_content1[$this->config->get('config_language_id')])) {
                $data['html_content1'] = html_entity_decode($html_content1[$this->config->get('config_language_id')], ENT_QUOTES, 'UTF-8');
            }

            $html_content2 = $this->config->get('theme_butik_tab2_content');
            if(empty($html_content2[$this->config->get('config_language_id')])) {
                $data['html_content2'] = false;
            } elseif (isset($html_content2[$this->config->get('config_language_id')])) {
                $data['html_content2'] = html_entity_decode($html_content2[$this->config->get('config_language_id')], ENT_QUOTES, 'UTF-8');
            }

            $html_content3 = $this->config->get('theme_butik_tab3_content');
            if(empty($html_content3[$this->config->get('config_language_id')])) {
                $data['html_content3'] = false;
            } elseif (isset($html_content3[$this->config->get('config_language_id')])) {
                $data['html_content3'] = html_entity_decode($html_content3[$this->config->get('config_language_id')], ENT_QUOTES, 'UTF-8');
            }

            

		// Menu
		$this->load->model('catalog/category');

		$this->load->model('catalog/product');

		$data['categories'] = array();

		$categories = $this->model_catalog_category->getCategories(0);

		foreach ($categories as $category) {
			if ($category['top']) {
				// Level 2
				$children_data = array();

				$children = $this->model_catalog_category->getCategories($category['category_id']);

				foreach ($children as $child) {
					$filter_data = array(
						'filter_category_id'  => $child['category_id'],
						'filter_sub_category' => true
					);


                $sub_children_data = array();
                    $sub_children = $this->model_catalog_category->getCategories($child['category_id']);

                    foreach($sub_children as $sub_child) {
                        $child_filter_data = array(
                            'filter_category_id' => $sub_child['category_id'],
                            'filter_sub_category' => true
                        );

                        $sub_children_data[] = array(
                            'name' => $sub_child['name'] . ($this->config->get('config_product_count') ? ' (' . $this->model_catalog_product->getTotalProducts($child_filter_data) . ')' : ''),
                            'href' => $this->url->link('product/category', 'path=' . $category['category_id'] . '_' . $child['category_id'] . '_' . $sub_child['category_id'])
                        );
                    }

                    if ($child['image']) {
                        $category_2_image = $this->model_tool_image->resize($child['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_category_thumb_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_category_thumb_height'));
                    } else {
                        $category_2_image = '';
                    }
            
					$children_data[] = array(

                        'thumb'        => $category_2_image,
                        'sub_children' => $sub_children_data,
						'name'  => $child['name'] . ($this->config->get('config_product_count') ? ' (' . $this->model_catalog_product->getTotalProducts($filter_data) . ')' : ''),
						'href'  => $this->url->link('product/category', 'path=' . $category['category_id'] . '_' . $child['category_id'])
					);
				}

				// Level 1
				$data['categories'][] = array(
					'name'     => $category['name'],
					'children' => $children_data,
					'column'   => $category['column'] ? $category['column'] : 1,
					'href'     => $this->url->link('product/category', 'path=' . $category['category_id'])
				);
			}
		}

		return $this->load->view('common/menu', $data);
	}
}
