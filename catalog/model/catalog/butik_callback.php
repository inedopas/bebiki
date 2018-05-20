<?php
class ModelCatalogButikCallback extends Model {
    public function addCallback($data) {
        $this->db->query("INSERT INTO " . DB_PREFIX . "callback SET telephone = '" . $this->db->escape($data['telephone']) . "', firstname = '" . $this->db->escape($data['firstname']) . "', comment = '" . $this->db->escape($data['comment']) . "', time = '" . $this->db->escape($data['time']) . "', language_id = '" . (int)$this->config->get('config_language') . "', date_added = NOW()");

        $callback_id = $this->db->getLastId();

        return $callback_id;
    }
}