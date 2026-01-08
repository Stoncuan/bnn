<?php
Class Home extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('home_models');
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('form_validation');
    }
    public function index(){
        
        $this->load->view('Home');
    }

    public function RegisterBnn(){
        // Validasi input
        $nama = $this->form_validation->set_rules('nama_pemohon', 'Nama Pemohon', 'required');
        $this->form_validation->set_rules('instansi', 'Instansi', 'required');        
        $this->form_validation->set_rules('no', 'No Handphone', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('tanggal','Tanggal dan waktu','required');
        
        if($this->form_validation->run() == FALSE){
            $this->load->view('formkegiatanurinetest');
        }else {
            // Jika validasi berhasil, panggil model untuk menyimpan data
            $this->home_models->addRegisterBnn();
            $this->session->set_flashdata('success', 'Data berhasil disimpan');
            redirect('home/index');
        }
    }

    public function form() {
        // Validasi input
        $this->form_validation->set_rules('nama_pemohon', 'Nama Pemohon', 'required');
        $this->form_validation->set_rules('instansi', 'Instansi', 'required');
        $this->form_validation->set_rules('no', 'No Handphone', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('tanggal', 'Tanggal dan waktu', 'required');
        
        if($this->form_validation->run() == FALSE) {             
            $this->load->view('formkegiatanp4gn');
        } else {
            //jika validasi berhasil, panggil model untuk menyimpan data 
            $this->home_models->addformBnn();
            $this->session->set_flashdata('success', 'Data berhasil disimpan');
            redirect('home/index');
        }
    }

}


        
    

   

