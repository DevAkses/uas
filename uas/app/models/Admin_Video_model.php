<?php

class Admin_Video_model {
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllVideosProduct()
    {
        $this->db->query('SELECT * FROM video where course_id = 3');
        return $this->db->resultSet();
    }

    public function getAllVideosWeb()
    {
        $this->db->query('SELECT * FROM video where course_id = 4');
        return $this->db->resultSet();
    }

    public function getAllVideosFigma()
    {
        $this->db->query('SELECT * FROM video where course_id = 1');
        return $this->db->resultSet();
    }

    public function getAllVideosAdobe()
    {
        $this->db->query('SELECT * FROM video where course_id = 2');
        return $this->db->resultSet();
    }

    public function getVideoById($id)
    {
        $this->db->query('SELECT * FROM video WHERE video_id = :id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

}