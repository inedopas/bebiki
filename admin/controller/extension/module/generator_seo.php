<?php

class ControllerExtensionModuleGeneratorSEO extends Controller
{
    private $error = array();

    public function install()
    {
        // enable the module and set default settings
        $this->load->model('setting/setting');
        $this->model_setting_setting->editSetting('generator_seo', array(
            'generator_seo_transliteration' => 1,
            'generator_seo_categories_template' => '[category_name]',
            'generator_seo_categories_suffix' => '',
            'generator_seo_products_template' => '[product_name]',
            'generator_seo_products_suffix' => '.html',
            'generator_seo_manufacturers_template' => '[manufacturer_name]',
            'generator_seo_manufacturers_suffix' => '.html',
            'generator_seo_description_template' => '[product_name], [model_name], [manufacturer_name], [categories_names]',
            'generator_seo_meta_template' => '[product_name], [model_name], [manufacturer_name], [categories_names]',
            'generator_seo_tags_template' => '[product_name], [model_name], [manufacturer_name], [categories_names]',
        ));
        $this->model_setting_setting->editSetting('module_generator_seo', array(
            'module_generator_seo_status' => 1,
            'status' => 1,
        ));
    }

    public function index()
    {
        $this->load->language('extension/module/generator_seo');
        $this->document->setTitle($this->language->get('page_title'));
        $this->load->model('setting/setting');
        $this->load->model('module/generator_seo');
        if (($this->request->server['REQUEST_METHOD'] == 'POST') && ($this->validate())) {
            if (isset($this->request->post['categories'])) {
                $this->model_module_generator_seo->generateCategories($this->request->post['categories_template'], $this->request->post['categories_suffix'], $this->request->post['overwrite_categories'] == 'overwrite', $this->request->post['do_transliteration']);
            }
            if (isset($this->request->post['products'])) {
                $this->model_module_generator_seo->generateProducts($this->request->post['products_template'], $this->request->post['products_suffix'], $this->request->post['overwrite_products'] == 'overwrite', $this->request->post['do_transliteration']);
            }
            if (isset($this->request->post['manufacturers'])) {
                $this->model_module_generator_seo->generateManufacturers($this->request->post['manufacturers_template'], $this->request->post['manufacturers_suffix'], $this->request->post['overwrite_manufacturers'] == 'overwrite', $this->request->post['do_transliteration']);
            }
           if (isset($this->request->post['meta_description'])) {
                $this->model_module_generator_seo->generateProductsMetaDescription($this->request->post['description_template'], $this->request->post['do_transliteration']);
            }
            if (isset($this->request->post['meta_keywords'])) {
                $this->model_module_generator_seo->generateProductsMetaKeywords($this->request->post['meta_template'], $this->request->post['do_transliteration']);
            }
            if (isset($this->request->post['categories_meta_keywords'])) {
                $this->model_module_generator_seo->generateCategoriesMetaKeywords($this->request->post['categories_meta_template']);
            }
            if (isset($this->request->post['tags'])) {
                $this->model_module_generator_seo->generateTags($this->request->post['tags_template'], $this->request->post['do_transliteration']);
            }
            $this->model_setting_setting->editSetting('generator_seo', array(
                'generator_seo_transliteration' => $this->request->post['do_transliteration'],
                'generator_seo_categories_template' => $this->request->post['categories_template'],
                'generator_seo_categories_suffix' => $this->request->post['categories_suffix'],
                'generator_seo_products_template' => $this->request->post['products_template'],
                'generator_seo_products_suffix' => $this->request->post['products_suffix'],
                'generator_seo_manufacturers_template' => $this->request->post['manufacturers_template'],
                'generator_seo_manufacturers_suffix' => $this->request->post['manufacturers_suffix'],
                'generator_seo_description_template' => $this->request->post['description_template'],
                'generator_seo_meta_template' => $this->request->post['meta_template'],
                'generator_seo_tags_template' => $this->request->post['tags_template'],
            ));
            if (isset($this->error['warning'])) {
                $data['error_warning'] = $this->error['warning'];
            } else {
                $data['success'] = $this->language->get('text_success');
            }
        }

        if (isset($this->request->post['do_transliteration'])) {
            $data['do_transliteration'] = $this->request->post['do_transliteration'];
        } else {
            $data['do_transliteration'] = $this->config->get('generator_seo_transliteration');
        }
        if (isset($this->request->post['categories_template'])) {
            $data['categories_template'] = $this->request->post['categories_template'];
        } else {
            $data['categories_template'] = $this->config->get('generator_seo_categories_template');
        }
        if (isset($this->request->post['categories_suffix'])) {
            $data['categories_suffix'] = $this->request->post['categories_suffix'];
        } else {
            $data['categories_suffix'] = $this->config->get('generator_seo_categories_suffix');
        }
        if (isset($this->request->post['products_template'])) {
            $data['products_template'] = $this->request->post['products_template'];
        } else {
            $data['products_template'] = $this->config->get('generator_seo_products_template');
        }
        if (isset($this->request->post['products_suffix'])) {
            $data['products_suffix'] = $this->request->post['products_suffix'];
        } else {
            $data['products_suffix'] = $this->config->get('generator_seo_products_suffix');
        }
        if (isset($this->request->post['manufacturers_template'])) {
            $data['manufacturers_template'] = $this->request->post['manufacturers_template'];
        } else {
            $data['manufacturers_template'] = $this->config->get('generator_seo_manufacturers_template');
        }
        if (isset($this->request->post['manufacturers_suffix'])) {
            $data['manufacturers_suffix'] = $this->request->post['manufacturers_suffix'];
        } else {
            $data['manufacturers_suffix'] = $this->config->get('generator_seo_manufacturers_suffix');
        }
        if (isset($this->request->post['description_template'])) {
            $data['description_template'] = $this->request->post['description_template'];
        } else {
            $data['description_template'] = $this->config->get('generator_seo_description_template');
        }
        if (isset($this->request->post['meta_template'])) {
            $data['meta_template'] = $this->request->post['meta_template'];
        } else {
            $data['meta_template'] = $this->config->get('generator_seo_meta_template');
        }
        if (isset($this->request->post['tags_template'])) {
            $data['tags_template'] = $this->request->post['tags_template'];
        } else {
            $data['tags_template'] = $this->config->get('generator_seo_tags_template');
        }

        $data['languages'] = $this->model_module_generator_seo->getLanguages();
        $data['breadcrumbs'] = array();
        $data['breadcrumbs'][] = array('href' => HTTPS_SERVER . 'index.php?route=common/home&user_token=' . $this->session->data['user_token'], 'text' => $this->language->get('text_home'), 'separator' => FALSE);
        $data['breadcrumbs'][] = array('href' => HTTPS_SERVER . 'index.php?route=extension/module&user_token=' . $this->session->data['user_token'], 'text' => $this->language->get('text_module'), 'separator' => ' :: ');
        $data['breadcrumbs'][] = array('href' => HTTPS_SERVER . 'index.php?route=module/generator_seo&user_token=' . $this->session->data['user_token'], 'text' => $this->language->get('page_title'), 'separator' => ' :: ');
        $data['action'] = HTTPS_SERVER . 'index.php?route=extension/module/generator_seo&user_token=' . $this->session->data['user_token'];
        $data['cancel'] = HTTPS_SERVER . 'index.php?route=marketplace/extension&user_token=' . $this->session->data['user_token'];

        $data['button_cancel'] = $this->language->get('button_cancel');

        $data['heading_title'] = $this->language->get('heading_title');

        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('extension/module/generator_seo', $data));
    }

    private function validate()
    {
        if (!$this->user->hasPermission('modify', 'extension/module/generator_seo')) {
            $this->error['warning'] = $this->language->get('error_permission');
        }
        if (!$this->error) {
            return true;
        } else {
            return false;
        }
    }
}
