<?php
class ModelCatalogButikCheaper extends Model {

    public function deleteCheaper($cheaper_id) {
        $this->db->query("DELETE FROM " . DB_PREFIX . "cheaper WHERE cheaper_id = '" . (int)$cheaper_id . "'");
    }

    public function getCheaper($cheaper_id) {
        $query = $this->db->query("SELECT DISTINCT * FROM " . DB_PREFIX . "cheaper" . (int)$cheaper_id . "' AND language_id = '" . (int)$this->config->get('config_language_id') . "'");

        return $query->row;
    }

    public function getCheapers($data = array()) {
        $sql = "SELECT * FROM " . DB_PREFIX . "cheaper";

        $sort_data = array(
            'date_added'
        );

        if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
            $sql .= " ORDER BY " . $data['sort'];
        } else {
            $sql .= " ORDER BY date_added";
        }

        if (isset($data['order']) && ($data['order'] == 'DESC')) {
            $sql .= " DESC";
        } else {
            $sql .= " ASC";
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

    public function getTotalCheapers() {
        $query = $this->db->query("SELECT COUNT(*) AS total FROM " . DB_PREFIX . "cheaper");

        return $query->row['total'];
    }
}