<?php
class ModelCatalogButikBlog extends Model {
    public function getBlog($blog_id) {
        $query = $this->db->query("SELECT DISTINCT * FROM " . DB_PREFIX . "blog b LEFT JOIN " . DB_PREFIX . "blog_description bd ON (b.blog_id = bd.blog_id) LEFT JOIN " . DB_PREFIX . "blog_to_store b2s ON (b.blog_id = b2s.blog_id) WHERE b.blog_id = '" . (int)$blog_id . "' AND bd.language_id = '" . (int)$this->config->get('config_language_id') . "' AND b2s.store_id = '" . (int)$this->config->get('config_store_id') . "' AND b.status = '1'");

        return $query->row;
    }

    public function getBlogs($data = array()) {
        $sql = "SELECT * FROM " . DB_PREFIX . "blog b LEFT JOIN " . DB_PREFIX . "blog_description bd ON (b.blog_id = bd.blog_id) LEFT JOIN " . DB_PREFIX . "blog_to_store b2s ON (b.blog_id = b2s.blog_id) WHERE bd.language_id = '" . (int)$this->config->get('config_language_id') . "' AND b2s.store_id = '" . (int)$this->config->get('config_store_id') . "' AND b.status = '1'";

        $sort_data = array(
            'bd.title',
            'b.sort_order',
            'b.date_added'
        );

        if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
            if ($data['sort'] == 'bd.title' || $data['sort'] == 'b.date_added') {
                $sql .= " ORDER BY LCASE(" . $data['sort'] . ")";
            } else {
                $sql .= " ORDER BY " . $data['sort'];
            }
        } else {
            $sql .= " ORDER BY b.date_added";
        }

        if (isset($data['order']) && ($data['order'] == 'DESC')) {
            $sql .= " DESC, LCASE(bd.title) DESC";
        } else {
            $sql .= " ASC, LCASE(bd.title) ASC";
        }

        if (isset($data['start']) || isset($data['limit'])) {
            if ($data['start'] < 0) {
                $data['start'] = 0;
            }

            if ($data['limit'] < 1) {
                $data['limit'] = 20;
            }

            $sql .= " LIMIT " . (int)$data['start'] . "," . (int)$data['limit'];
        }

        $query = $this->db->query($sql);

        return $query->rows;
    }

    public function getBlogLayoutId($blog_id) {
        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "blog_to_layout WHERE blog_id = '" . (int)$blog_id . "' AND store_id = '" . (int)$this->config->get('config_store_id') . "'");

        if ($query->num_rows) {
            return $query->row['layout_id'];
        } else {
            return 0;
        }
    }

    public function getTotalBlogs() {
        $query = $this->db->query("SELECT COUNT(*) AS total FROM " . DB_PREFIX . "blog");

        return $query->row['total'];
    }
}