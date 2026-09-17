<?php
class FaqModel {
    private $db;
    private $table = "qna";

    public function __construct() {
        $this->db = new Database();
    }

    public function getQnaByIdProduct($id_product) {
        $this->db->query("SELECT id_product, question, answer FROM " . $this->table . " WHERE id_product = ? AND deleted_at IS NULL");
        $this->db->bind($id_product, "i");
        return $this->db->resultSet();
    }
}