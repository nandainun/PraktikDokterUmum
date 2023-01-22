<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{

    function __construct()
    {
        parent::__construct();

        if (empty($this->session->userdata('login'))) {
            redirect('auth');
        }

        $this->load->model('m_laporan');
    }

    // LAPORAN PASIEN
    public function index()
    {
        $data['pasien'] = $this->m_laporan->get_all()->result_array();

        $this->load->view('v_header');
        $this->load->view('laporan/v_data_pasien', $data);
        $this->load->view('v_footer');
    }
    public function search()
    {
        $keywordawal     = $this->input->post('keywordawal');
        $keywordakhir    = $this->input->post('keywordakhir');
        $data['pasien']  = $this->m_laporan->getdate($keywordawal, $keywordakhir);

        $this->load->view('laporan/v_cetak_pasien', $data);
    }

    // LAPORAN OBAT
    public function get_obat()
    {
        $data['pasien'] = $this->m_laporan->get_all_obat()->result_array();

        $this->load->view('v_header');
        $this->load->view('laporan/v_data_obat', $data);
        $this->load->view('v_footer');
    }
    public function search_obat()
    {
        $keywordawal     = $this->input->post('keywordawal');
        $keywordakhir    = $this->input->post('keywordakhir');
        $data['obat']  = $this->m_laporan->getdate_obat($keywordawal, $keywordakhir);

        $this->load->view('laporan/v_cetak_obat', $data);
    }

    //LAPORAN KUNJUNGAN
    public function get_kunjungan()
    {
        $data['pasien'] = $this->m_laporan->get_all_kunjungan()->result_array();

        $this->load->view('v_header');
        $this->load->view('laporan/v_data_kunjungan', $data);
        $this->load->view('v_footer');
    }
    public function search_kunjungan()
    {
        $keywordawal     = $this->input->post('keywordawal');
        $keywordakhir    = $this->input->post('keywordakhir');
        $data['rekam_medis']  = $this->m_laporan->getdate_kunjungan($keywordawal, $keywordakhir);

        $this->load->view('laporan/v_cetak_kunjungan', $data);
    }
}
