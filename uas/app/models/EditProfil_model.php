<?php

class EditProfil_model {
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getProfilById()
    {   
        $query = "SELECT nama_user, email_user FROM users WHERE user_id = :user_id;";
        $this->db->query($query);
        $this->db->bind('user_id', $_SESSION['user_id']);
        $this->db->execute();
        return $this->db->resultSet();
    }

    public function updateProfil($data)
    {
        $query = "UPDATE users
        SET nama_user = :nama_user,
        email_user = :email_user
        WHERE user_id = :user_id;";
        $this->db->query($query);
        $this->db->bind('user_id', $_SESSION['user_id']);
        $this->db->bind('nama_user', $data['nama_user']);
        $this->db->bind('email_user', $data['email_user']);
        $this->db->execute();
        return $this->db->rowCount();

    }

    public function hapusAkun()
    {
        $query = "DELETE FROM users WHERE user_id = :user_id";
        $this->db->query($query);
        $this->db->bind('user_id', $_SESSION['user_id']);
        $this->db->execute();
        return $this->db->rowCount();
    }
}