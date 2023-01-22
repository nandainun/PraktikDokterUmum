<?php

class M_laporan extends   CI_Model
{
    // LAPORAN PASIEN
    function get_all()
    {
        return $this->db->get('pasien');
    }
    function getdate($keywordawal, $keywordakhir)
    {

        $query  = $this->db->query("SELECT * FROM pasien WHERE tglmasuk BETWEEN '$keywordawal' AND '$keywordakhir'");
        return $query->result_array();
    }

    // LAPORAN OBAT
    function get_all_obat()
    {
        return $this->db->get('obat');
    }
    function getdate_obat($keywordawal, $keywordakhir)
    {

        $query  = $this->db->query("SELECT * FROM obat WHERE tglmasuk_obat BETWEEN '$keywordawal' AND '$keywordakhir'");
        return $query->result_array();
    }

    // LAPORAN KUNJUNGAN
    function get_all_kunjungan()
    {
        return $this->db->get('rekam_medis');
    }
    function getdate_kunjungan($keywordawal, $keywordakhir)
    {

        $query  = $this->db->query("SELECT rekam_medis.*, pasien.nama_pasien, pasien.umur, pasien.jenis_kelamin, pasien.alamat
                                    FROM rekam_medis
                                    INNER JOIN pasien ON rekam_medis.id_pasien=pasien.id_pasien
                                     WHERE tgl BETWEEN '$keywordawal' AND '$keywordakhir'");
        return $query->result_array();
    }
}
