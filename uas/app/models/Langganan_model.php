<?php

class Langganan_model {
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function insertValue()
    {
        // $query = $this->db->query("SELECT
        //     t.transaksi_Id,
        //     t.tgl_transaksi,
        //     t.jml_transaksi,
        //     t.metode_pmbyrn,
        //     s.subcription_id
        //     FROM transaksi t
        //     INNER JOIN subscription s ON t.subcription_id = s.id
        //     WHERE t.user_id = :user_id;");

        //     $this->db->bind('user_id', $_SESSION['user_id']);
        //     $this->db->execute();

        //     if ($query->db->rowCount() > 0) {
        //     // Data transaksi sudah ada
        //     } else {
        //     // Data transaksi belum ada, insert baru
        //     $datetime_sekarang = now();

        //     $query = $this->db->query("INSERT INTO transaksi (transaksi_Id, tgl_transaksi, jml_transaksi, metode_pmbyrn, subcription_id)
        //     VALUES (NULL, :tgl_transaksi, :jml_transaksi, :metode, (
        //         SELECT subcription_id FROM subscription
        //         WHERE user_id = :user_id
        //     ));");

        //     $this->db->bind('tgl_transaksi', $datetime_sekarang);
        //     $this->db->bind('jml_transaksi', 1500000);
        //     $this->db->bind('metode', "BRImo");
        //     $this->db->bind('user_id', $_SESSION['user_id']);
        //     $this->db->execute();
            // }

    }
}