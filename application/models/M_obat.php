<?php

class M_obat extends   CI_Model
{
    function tampil_data()
    {
        return $this->db->get('obat');
    }
    function insert_data($data)
    {
        return $this->db->insert('obat', $data);
    }
    function edit_data($where)
    {
        return $this->db->get_where('obat', $where);
    }
    function update_data($data, $where)
    {
        $this->db->where($where);
        $this->db->update('obat', $data);
    }
    function hapus_data($where)
    {
        $this->db->where($where);
        $this->db->delete('obat');
    }

    function jumlah_obat()
    {
        $query  = $this->db->query("SELECT * FROM obat");

        return $query->num_rows();
    }

    function update_obat($data)
    {
        $jumlah = $data['jumlah'];
        $id     = $data['id_obat'];

        $sql    = "UPDATE obat SET stok = stok - '$jumlah' WHERE id_obat='$id'";
        $this->db->query($sql);
    }

    function update_obat_hapus($data)
    {
        $jumlah = $data['jumlah'];
        $id     = $data['id_obat'];
        $sql    = "UPDATE obat SET stok = stok + '$jumlah' WHERE id_obat='$id'";
        $this->db->query($sql);
    }
}
