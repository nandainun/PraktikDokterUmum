<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Obat extends CI_Controller
{

    function __construct()
    {
        parent::__construct();

        if (empty($this->session->userdata('login'))) {
            redirect('auth');
        }

        $this->load->model('m_obat');
    }

    public function index()
    {
        $data['obat'] = $this->m_obat->tampil_data()->result_array();

        $this->load->view('v_header');
        $this->load->view('obat/v_data', $data);
        $this->load->view('v_footer');
    }
    public function tambah()
    {
        $this->load->view('v_header');
        $this->load->view('obat/v_data_tambah');
        $this->load->view('v_footer');
    }
    public function insert()
    {
        $nama   = $this->input->post('nama_obat');
        $s     = $this->input->post('sediaan');
        $d   = $this->input->post('dosis');
        $ket = $this->input->post('keterangan');
        $stok = $this->input->post('stok');
        $tglmasuk_obat = $this->input->post('tglmasuk_obat');

        $data   = array(
            'nama_obat'     => $nama,
            'sediaan'       => $s,
            'dosis'         => $d,
            'keterangan'    => $ket,
            'tglmasuk_obat'    => $tglmasuk_obat,
            'stok'          => $stok
        );
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible" role="alert">
                        Data baru berhasil ditambahkan!
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>');
        $this->m_obat->insert_data($data);

        redirect('obat');
    }
    public function edit($id)
    {
        $where      = array('id_obat' => $id);
        $data['r']  = $this->m_obat->edit_data($where)->row_array();

        $this->load->view('v_header');
        $this->load->view('obat/v_data_edit', $data);
        $this->load->view('v_footer');
    }
    public function update()
    {
        $id     = $this->input->post('id');
        $nama   = $this->input->post('nama_obat');
        $s     = $this->input->post('sediaan');
        $d   = $this->input->post('dosis');
        $ket = $this->input->post('keterangan');
        $stok = $this->input->post('stok');

        $data   = array(
            'nama_obat'     => $nama,
            'sediaan'       => $s,
            'dosis'         => $d,
            'keterangan'    => $ket,
            'stok'          => $stok
        );
        $this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible" role="alert">
                        Data berhasil diubah!
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>');
        $where  = array('id_obat' => $id);
        $this->m_obat->update_data($data, $where);

        redirect('obat');
    }

    public function hapus($id)
    {
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible" role="alert">
                        Data berhasil dihapus!
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>');
        $where      = array('id_obat' => $id);
        $this->m_obat->hapus_data($where);
        redirect('obat');
    }
}
