<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Kos_model');
    }
    function index()
    {
        $data['kos'] = $this->Kos_model->get();
        $this->load->view("layout/header", $data);
        $this->load->view("dashboard/dashboard", $data);
    }

    public function search()
    {

        $nama = $this->input->post('nama');
        if ($this->Kos_model->getById($nama)) {
            $detil['tb_kos'] = $this->Kos_model->getById($nama);
            $data['nama'] = $this->Kos_model->get();
            $data['id_kos'] = $this->Kos_model->count_kos();
            $this->load->view("layout/header", $data);
            $this->load->view("dashboard/detail_kos", $detil);
        } else {
            redirect('dashboard');
        }
    }
}
