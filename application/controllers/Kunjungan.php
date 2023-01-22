<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kunjungan extends CI_Controller
{

    function __construct()
    {
        parent::__construct();

        if (empty($this->session->userdata('login'))) {
            redirect('auth');
        }

        $this->load->model('m_kunjungan');
        $this->load->model('m_pasien');
        $this->load->model('m_obat');
    }

    public function index()
    {
        $data['kunjungan'] = $this->m_kunjungan->tampil_data()->result_array();

        $this->load->view('v_header');
        $this->load->view('kunjungan/v_data', $data);
        $this->load->view('v_footer');
    }
    public function tambah()
    {
        $data['pasien'] = $this->m_pasien->tampil_data()->result_array();

        $this->load->view('v_header');
        $this->load->view('kunjungan/v_data_tambah', $data);
        $this->load->view('v_footer');
    }
    public function insert()
    {
        $tgl        = $this->input->post('tgl');
        $pasien     = $this->input->post('pasien');

        $data   = array(
            'tgl'       => $tgl,
            'id_pasien' => $pasien,
        );
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible" role="alert">
                        Data baru berhasil ditambahkan!
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>');
        $this->m_kunjungan->insert_data($data);

        redirect('kunjungan');
    }
    public function edit($id)
    {
        $where      = array('id_rm' => $id);
        $data['edit']  = $this->m_kunjungan->edit_data($where)->row_array();
        $data['pasien'] = $this->m_pasien->tampil_data()->result_array();

        $this->load->view('v_header');
        $this->load->view('kunjungan/v_data_edit', $data);
        $this->load->view('v_footer');
    }
    public function update()
    {
        $id         = $this->input->post('id');
        $tgl        = $this->input->post('tgl');
        $pasien     = $this->input->post('pasien');

        $data   = array(
            'tgl'       => $tgl,
            'id_pasien' => $pasien,
        );
        $this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible" role="alert">
                        Data berhasil diubah!
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>');
        $where  = array('id_rm' => $id);
        $this->m_kunjungan->update_data($data, $where);

        redirect('kunjungan');
    }

    public function hapus($id)
    {
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible" role="alert">
                        Data berhasil dihapus!
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>');
        $where      = array('id_rm' => $id);
        $this->m_kunjungan->hapus_data($where);
        redirect('kunjungan');
    }

    // rekam medis detail

    public function rekam($id)
    {
        // tampil detail RM
        $data['d']          = $this->m_kunjungan->tampil_rm($id)->row_array();
        // tampil riwayat kunjungan
        $q                  = $this->db->query("SELECT id_pasien FROM rekam_medis WHERE id_rm='$id'")->row_array();
        $id_pasien          = $q['id_pasien'];
        $data['riwayat']    = $this->m_kunjungan->tampil_riwayat($id_pasien)->result_array();
        // tampil data obat
        $data['obat']       = $this->m_obat->tampil_data()->result_array();
        // tampil resep obat
        $data['resep']      = $this->m_kunjungan->tampil_resep($id)->result_array();

        $this->load->view('v_header');
        $this->load->view('kunjungan/v_rekam', $data);
        $this->load->view('v_footer');
    }

    // cetak rekam medis
    public function print($id)
    {
        // tampil detail RM
        $data['d']          = $this->m_kunjungan->tampil_rm($id)->row_array();
        // tampil riwayat kunjungan
        $q                  = $this->db->query("SELECT id_pasien FROM rekam_medis WHERE id_rm='$id'")->row_array();
        $id_pasien          = $q['id_pasien'];
        $data['riwayat']    = $this->m_kunjungan->tampil_riwayat($id_pasien)->result_array();
        // tampil data obat
        $data['obat']       = $this->m_obat->tampil_data()->result_array();
        // tampil resep obat

        $data['resep']      = $this->m_kunjungan->tampil_resep($id)->result_array();


        $this->load->view('kunjungan/v_rekam_cetak', $data);
    }

    function insert_rm()
    {
        $id_rm     = $this->input->post('id');
        $keluhan   = $this->input->post('keluhan');
        $anamnesa  = $this->input->post('anamnesa');
        $diagnosa  = $this->input->post('diagnosa');

        $data = array(
            'keluhan'   => $keluhan,
            'anamnesa'  => $anamnesa,
            'diagnosa'  => $diagnosa
        );
        $where = array('id_rm' => $id_rm);
        $this->m_kunjungan->update_data($data, $where);

        redirect('kunjungan/rekam/' . $id_rm);
    }

    function insert_resep()
    {
        $id_rm     = $this->input->post('id');
        $obat   = $this->input->post('obat');
        $jumlah   = $this->input->post('jumlah');

        $data = array(
            'id_rm'   => $id_rm,
            'id_obat'  => $obat,
            'jumlah'  => $jumlah
        );

        $this->m_kunjungan->insert_resep($data);
        redirect('kunjungan/rekam/' . $id_rm);
    }

    function hapus_resep($id, $id_rm)
    {

        $where = array('id_resep' => $id);
        $this->m_kunjungan->hapus_resep($where);
        redirect('kunjungan/rekam/' . $id_rm);
    }
}
