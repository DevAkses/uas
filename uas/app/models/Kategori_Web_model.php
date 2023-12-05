<?php

class Kategori_Web_model {
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllVideosWeb()
    {
        $this->db->query('SELECT * FROM video where course_id = 4');
        return $this->db->resultSet();
    }

    public function getVideoById($id)
    {
        $this->db->query('SELECT * FROM video WHERE video_id = :id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

}