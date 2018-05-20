<?php
class ModelCatalogButikCheaper extends Model {
    public function addCheaper($data) {
        $this->db->query("INSERT INTO " . DB_PREFIX . "cheaper SET product_name = '" . $this->db->escape($data['product_name']) . "', product_price = '" . $this->db->escape($data['product_price']) . "', telephone = '" . $this->db->escape($data['telephone']) . "', firstname = '" . $this->db->escape($data['firstname']) . "', comment = '" . $this->db->escape($data['comment']) . "', url_cheaper = '" . $this->db->escape($data['url_cheaper']) . "', language_id = '" . (int)$this->config->get('config_language') . "', date_added = NOW()");

        $cheaper_id = $this->db->getLastId();

        return $cheaper_id;
    }
}