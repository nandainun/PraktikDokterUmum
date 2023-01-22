<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    function __construct()
    {
        parent::__construct();

        if (empty($this->session->userdata('login'))) {
            redirect('auth');
        }

        $this->load->model('m_pasien');
        $this->load->model('m_obat');
        $this->load->model('m_kunjungan');
    }

    public function index()
    {
        $data['pasien']      = $this->m_pasien->jumlah_pasien();
        $data['obat']        = $this->m_obat->jumlah_obat();
        $data['d'] = $this->m_kunjungan->jumlah_kunjungan();

        $this->load->view('v_header');
        $this->load->view('v_dashboard', $data);
        $this->load->view('v_footer');
    }
}
