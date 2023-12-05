<?php

class Kategori_Figma_model {
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function cariDataVideosFigma()
    {
        $keyword = $_GET("keyword");
        $this->db->query('SELECT video_title FROM video where video_title LIKE :keyword');
        $this->db->bind('keyword', "%$keyword%");
        $this->db->execute();
        return $this->db->resultSet();

    }

    public function getAllVideosFigma()
    {
        
        $this->db->query('SELECT * FROM video where course_id = 1');
        return $this->db->resultSet();
    }

    public function getVideoById($id)
    {
        $this->db->query('SELECT * FROM video WHERE video_id = :id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

}