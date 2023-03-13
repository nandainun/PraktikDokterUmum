<?php

class M_kunjungan extends   CI_Model
{
    function tampil_data()
    {
        $query  = $this->db->query("SELECT rekam_medis.*, pasien.nama_pasien, pasien.umur, pasien.jenis_kelamin, pasien.tanggal
                                    FROM rekam_medis
                                    INNER JOIN pasien ON rekam_medis.id_pasien=pasien.id_pasien
                                     ");

        return $query;
    }

    function insert_data($data)
    {
        return $this->db->insert('rekam_medis', $data);
    }

    function edit_data($where)
    {
        return $this->db->get_where('rekam_medis', $where);
    }

    function update_data($data, $where)
    {
        $this->db->where($where);
        $this->db->update('rekam_medis', $data);
    }

    function hapus_data($where)
    {
        $this->db->where($where);
        $this->db->delete('rekam_medis');
    }

    // fungsi RM
    function tampil_rm($id)
    {
        $query  = $this->db->query("SELECT rekam_medis.*, pasien.nama_pasien, pasien.umur, pasien.jenis_kelamin, pasien.alamat, pasien.tanggal
                                    FROM rekam_medis
                                    INNER JOIN pasien ON rekam_medis.id_pasien=pasien.id_pasien
                                    WHERE rekam_medis.id_rm='$id' 
                                     ");

        return $query;
    }

    function tampil_riwayat($pasien)
    {
        $query  = $this->db->query("SELECT rekam_medis.*, pasien.nama_pasien, pasien.umur, pasien.jenis_kelamin, pasien.alamat, pasien.tanggal
                                    FROM rekam_medis
                                    INNER JOIN pasien ON rekam_medis.id_pasien=pasien.id_pasien
                                    WHERE rekam_medis.id_pasien='$pasien' 
                                     ");

        return $query;
    }

    function tampil_resep($id)
    {
        $query  = $this->db->query("SELECT resep_obat.*, obat.nama_obat, obat.sediaan
                                    FROM resep_obat
                                    INNER JOIN obat ON resep_obat.id_obat=obat.id_obat
                                    WHERE resep_obat.id_rm='$id'
                                    ");

        return $query;
    }

    function insert_resep($post)
    {
        $params = [
            'id_rm'     => $post['id_rm'],
            'id_obat'     => $post['id_obat'],
            'jumlah'     => $post['jumlah'],
        ];
        $this->db->insert('resep_obat', $params);
    }

    // public function insert_resep_obat($data)
    // {
    //     $this->db->insert('resep_obat', $data);
    // }

    public function get_obat_by_id($id)
    {
        $this->db->where('id_obat', $id);
        $query = $this->db->get('obat');
        return $query->row();
    }


    function hapus_resep($where)
    {
        $this->db->where($where);
        $this->db->delete('resep_obat');
    }

    function get($id = null)
    {
        $this->db->from('resep_obat');
        if ($id != null) {
            $this->db->where('id_resep', $id);
        }
        $query = $this->db->get();
        return $query;
    }


    function jumlah_kunjungan()
    {
        $query  = $this->db->query("SELECT * FROM rekam_medis");

        return $query->num_rows();
    }
}
