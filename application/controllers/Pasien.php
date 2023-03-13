<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pasien extends CI_Controller
{

    function __construct()
    {
        parent::__construct();

        if (empty($this->session->userdata('login'))) {
            redirect('auth');
        }

        $this->load->model('m_pasien');
        $this->load->helper('Usia_helper');
    }

    public function index()
    {
        $data['pasien'] = $this->m_pasien->tampil_data()->result_array();

        $this->load->view('v_header');
        $this->load->view('pasien/v_data', $data);
        $this->load->view('v_footer');
    }
    public function tambah()
    {
        $this->load->view('v_header');
        $this->load->view('pasien/v_data_tambah');
        $this->load->view('v_footer');
    }
    public function insert()
    {
        $nama   = $this->input->post('nama_pasien');
        $jk     = $this->input->post('jenis_kelamin');
        $tanggal   = $this->input->post('tanggal');
        $alergi = $this->input->post('alergi');
        $alamat = $this->input->post('alamat');
        $tglmasuk = $this->input->post('tglmasuk');

        $data   = array(
            'nama_pasien'   => $nama,
            'jenis_kelamin' => $jk,
            'tanggal'          => $tanggal,
            'alergi'        => $alergi,
            'alamat'        => $alamat,
            'tglmasuk'        => $tglmasuk
        );
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible" role="alert">
                        Data baru berhasil ditambahkan!
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>');
        $this->m_pasien->insert_data($data);

        redirect('pasien');
    }
    public function edit($id)
    {
        $where      = array('id_pasien' => $id);
        $data['r']  = $this->m_pasien->edit_data($where)->row_array();

        $this->load->view('v_header');
        $this->load->view('pasien/v_data_edit', $data);
        $this->load->view('v_footer');
    }
    public function update()
    {
        $id     = $this->input->post('id');
        $nama   = $this->input->post('nama_pasien');
        $jk     = $this->input->post('jenis_kelamin');
        $tanggal   = $this->input->post('tanggal');
        $alergi = $this->input->post('alergi');
        $alamat = $this->input->post('alamat');

        $data   = array(
            'nama_pasien'   => $nama,
            'jenis_kelamin' => $jk,
            'tanggal'          => $tanggal,
            'alergi'        => $alergi,
            'alamat'        => $alamat
        );
        $this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible" role="alert">
                        Data berhasil diubah!
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>');
        $where  = array('id_pasien' => $id);
        $this->m_pasien->update_data($data, $where);

        redirect('pasien');
    }

    public function hapus($id)
    {
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible" role="alert">
                        Data berhasil dihapus!
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>');
        $where      = array('id_pasien' => $id);
        $this->m_pasien->hapus_data($where);
        redirect('pasien');
    }
}
