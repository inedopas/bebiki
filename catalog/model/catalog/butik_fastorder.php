<?php
class ModelCatalogButikFastorder extends Model {
    public function addFastorder($data) {
        $this->db->query("INSERT INTO " . DB_PREFIX . "fastorder SET product_name = '" . $this->db->escape($data['product_name']) . "', product_price = '" . $this->db->escape($data['product_price']) . "', telephone = '" . $this->db->escape($data['telephone']) . "', firstname = '" . $this->db->escape($data['firstname']) . "', comment = '" . $this->db->escape($data['comment']) . "', address = '" . $this->db->escape($data['address']) . "', language_id = '" . (int)$this->config->get('config_language') . "', date_added = NOW()");

        $fastorder_id = $this->db->getLastId();

        return $fastorder_id;
    }
}