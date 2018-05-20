<?php
class ControllerExtensionModuleButikFourProductTab extends Controller {
    public function index($setting)
    {
        $this->load->language('extension/module/butik');

        if ($this->config->get('theme_butik_module_scroll') || $this->config->get('theme_butik_quickview_status')) {
            $this->document->addStyle('catalog/view/theme/butik/js/owl-carousel/owl.carousel.css');
            $this->document->addScript('catalog/view/theme/butik/js/owl-carousel/owl.carousel.min.js');
        }

        $data['button_cart'] = $this->language->get('button_cart');
        $data['button_wishlist'] = $this->language->get('button_wishlist');
        $data['button_compare'] = $this->language->get('button_compare');

        $data['status_bestseller'] = $setting['status_bestseller'];
        $data['status_special'] = $setting['status_special'];
        $data['status_latest'] = $setting['status_latest'];
        $data['status_featured'] = $setting['status_featured'];

        $data['butik_module_scroll'] = $this->config->get('theme_butik_module_scroll');
        $data['butik_short_description_status'] = $this->config->get('theme_butik_short_description_status');
        $data['butik_compare_status'] = $this->config->get('theme_butik_compare_status');
        $data['butik_wishlist_status'] = $this->config->get('theme_butik_wishlist_status');
        $data['butik_fastorder_module'] = $this->config->get('module_butik_fastorder_module');
        $data['butik_percentage_status'] = $this->config->get('theme_butik_percentage_status');
        $data['butik_hover_img_status'] = $this->config->get('theme_butik_hover_img_status');
        $data['butik_no_product'] = $this->config->get('theme_butik_no_product');
        $data['butik_quickview_status'] = $this->config->get('theme_butik_quickview_status');
        $data['button_quickview'] = $this->config->get('button_quickview');

        $this->load->model('catalog/product');

        $this->load->model('tool/image');

        // Bestseller
        $data['bestseller_products'] = array();

        if ($setting['status_bestseller']) {

            $results = $this->model_catalog_product->getBestSellerProducts($setting['limit']);

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

                    $data['bestseller_products'][] = array(
                        'product_id' => $result['product_id'],
                        'thumb' => $image,
                        'additional_img' => $additional_img,
                        'name' => $result['name'],
                        'description' => utf8_substr(strip_tags(html_entity_decode($result['description'], ENT_QUOTES, 'UTF-8')), 0, $this->config->get($this->config->get('config_theme') . '_product_description_length')) . '..',
                        'price' => $price,
                        'special' => $special,
                        'tax' => $tax,
                        'rating' => $rating,
                        'product_quantity' => $result['quantity'],
                        'entry_stock' => $result['stock_status'],
                        'href' => $this->url->link('product/product', 'product_id=' . $result['product_id']),
                        'percentage' => $result['price'] == 0 ? 100 : round((($result['price'] - $result['special'])/$result['price'])*100, 0)
                    );
                }

            }

        }

        // Special
        $data['special_products'] = array();

        if ($setting['status_special']) {

            $filter_data = array(
                'sort' => 'pd.name',
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

                    $data['special_products'][] = array(
                        'product_id' => $result['product_id'],
                        'thumb' => $image,
                        'additional_img' => $additional_img,
                        'name' => $result['name'],
                        'description' => utf8_substr(strip_tags(html_entity_decode($result['description'], ENT_QUOTES, 'UTF-8')), 0, $this->config->get($this->config->get('config_theme') . '_product_description_length')) . '..',
                        'price' => $price,
                        'special' => $special,
                        'tax' => $tax,
                        'rating' => $rating,
                        'product_quantity' => $result['quantity'],
                        'entry_stock' => $result['stock_status'],
                        'href' => $this->url->link('product/product', 'product_id=' . $result['product_id']),
                        'percentage' => $result['price'] == 0 ? 100 : round((($result['price'] - $result['special'])/$result['price'])*100, 0)
                    );
                }

            }

        }

        // Latest
        $data['latest_products'] = array();

        if ($setting['status_latest']) {

            $filter_data = array(
                'sort' => 'p.date_added',
                'order' => 'DESC',
                'start' => 0,
                'limit' => $setting['limit']
            );

            $results = $this->model_catalog_product->getProducts($filter_data);

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

                    $data['latest_products'][] = array(
                        'product_id' => $result['product_id'],
                        'thumb' => $image,
                        'additional_img' => $additional_img,
                        'name' => $result['name'],
                        'description' => utf8_substr(strip_tags(html_entity_decode($result['description'], ENT_QUOTES, 'UTF-8')), 0, $this->config->get($this->config->get('config_theme') . '_product_description_length')) . '..',
                        'price' => $price,
                        'special' => $special,
                        'tax' => $tax,
                        'rating' => $rating,
                        'product_quantity' => $result['quantity'],
                        'entry_stock' => $result['stock_status'],
                        'href' => $this->url->link('product/product', 'product_id=' . $result['product_id']),
                        'percentage' => $result['price'] == 0 ? 100 : round((($result['price'] - $result['special'])/$result['price'])*100, 0)
                    );
                }

            }

        }

        // Featured
        $data['featured_products'] = array();

        if ($setting['status_featured'] && $setting['product']) {

            if (!$setting['limit']) {
                $setting['limit'] = 4;
            }

            if (!empty($setting['product'])) {
                $products = array_slice($setting['product'], 0, (int)$setting['limit']);

                foreach ($products as $product_id) {
                    $product_info = $this->model_catalog_product->getProduct($product_id);

                    if ($product_info) {
                        if ($product_info['image']) {
                            $image = $this->model_tool_image->resize($product_info['image'], $setting['width'], $setting['height']);
                        } else {
                            $image = $this->model_tool_image->resize('placeholder.png', $setting['width'], $setting['height']);
                        }

                        if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
                            $price = $this->currency->format($this->tax->calculate($product_info['price'], $product_info['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
                        } else {
                            $price = false;
                        }

                        if ((float)$product_info['special']) {
                            $special = $this->currency->format($this->tax->calculate($product_info['special'], $product_info['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
                        } else {
                            $special = false;
                        }

                        if ($this->config->get('config_tax')) {
                            $tax = $this->currency->format((float)$product_info['special'] ? $product_info['special'] : $product_info['price'], $this->session->data['currency']);
                        } else {
                            $tax = false;
                        }

                        if ($this->config->get('config_review_status')) {
                            $rating = $product_info['rating'];
                        } else {
                            $rating = false;
                        }

                        $additional_img = $this->model_catalog_product->getProductImages($product_info['product_id']);

                        if (isset($additional_img[0]['image']) && !empty($additional_img[0]['image'])) {
                            $additional_img = $this->model_tool_image->resize($additional_img[0]['image'], $setting['width'], $setting['height']);
                        } else {
                            $additional_img = false;
                        }

                        $data['featured_products'][] = array(
                            'product_id' => $product_info['product_id'],
                            'thumb' => $image,
                            'additional_img' => $additional_img,
                            'name' => $product_info['name'],
                            'description' => utf8_substr(strip_tags(html_entity_decode($product_info['description'], ENT_QUOTES, 'UTF-8')), 0, $this->config->get($this->config->get('config_theme') . '_product_description_length')) . '..',
                            'price' => $price,
                            'special' => $special,
                            'tax' => $tax,
                            'rating' => $rating,
                            'product_quantity' => $product_info['quantity'],
                            'entry_stock' => $product_info['stock_status'],
                            'href' => $this->url->link('product/product', 'product_id=' . $product_info['product_id']),
                            'percentage' => $product_info['price'] == 0 ? 100 : round((($product_info['price'] - $product_info['special'])/$product_info['price'])*100, 0)
                        );
                    }
                }
            }

        }

        return $this->load->view('extension/module/butik_four_product_tab', $data);
    }
}