<?php
class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('home_models');
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('form_validation');
    }
    public function index()
    {

        $this->load->view('Home');
    }

    public function RegisterBnn()
    {
        // Validasi input
        $nama = $this->form_validation->set_rules('nama_pemohon', 'Nama Pemohon', 'required');
        $this->form_validation->set_rules('instansi', 'Instansi', 'required');
        $this->form_validation->set_rules('no', 'No Handphone', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('tanggal', 'Tanggal dan waktu', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('formkegiatanurinetest');
        } else {
            // Jika validasi berhasil, panggil model untuk menyimpan data
            $this->home_models->addRegisterBnn();
            $this->session->set_flashdata('success', 'Data berhasil disimpan');
            redirect('home/index');
        }
    }

    public function form()
    {
        // Validasi input
        $this->form_validation->set_rules('nama_pemohon', 'Nama Pemohon', 'required');
        $this->form_validation->set_rules('instansi', 'Instansi', 'required');
        $this->form_validation->set_rules('no', 'No Handphone', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('tanggal', 'Tanggal dan waktu', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('formkegiatanp4gn');
        } else {
            //jika validasi berhasil, panggil model untuk menyimpan data 
            $this->home_models->addformBnn();
            $this->session->set_flashdata('success', 'Data berhasil disimpan');
            redirect('home/index');
        }
    }

    public function hapusP4gn($id)
    {
        $data = $this->home_models->getDataP4gnById($id);

        $dokumen = FCPATH . 'assets/file_/' . $data['surat'];


        if (file_exists($dokumen)) {
            unlink($dokumen);
        }

        $this->home_models->hapusP4gn($id);
        $this->session->set_flashdata('flash', '<div class="row mt-3">
                        <div class="col-xl-4 col-md-5 m-auto text-center">
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Data P4GN berhasil dihapus</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                    </div>');
        redirect('admin/dataP4gn');
    }

    public function hapusUrin($id)
    {
        $data = $this->home_models->getAllDataUrin($id);

        $dokumen = FCPATH . 'assets/file_/' . $data['surat'];


        if (file_exists($dokumen)) {
            unlink($dokumen);
        }

        $this->home_models->hapusUrin($id);
        $this->session->set_flashdata('flash', '<div class="row mt-3">
                        <div class="col-xl-4 col-md-5 m-auto text-center">
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Data Urin berhasil dihapus</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                    </div>');
        redirect('admin/dataUrin');
    }

}







