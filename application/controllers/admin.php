<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Admin_model');
		$this->load->model('home_models');
		$this->load->library('form_validation');
		is_logged_in();
	}


	public function index()
	{
		$data['admin_session'] = $this->Admin_model->getSession();
		$data['totalUser'] = $this->Admin_model->countUser();
		$data['totalP4gn'] = $this->Admin_model->countP4gn();
		$data['totalUrin'] = $this->Admin_model->countUrin();

		$this->load->view('template/header');
		$this->load->view('admin/dashboard', $data);
		$this->load->view('template/footer');
	}

	public function dataUser()
	{
		$data['admin_session'] = $this->Admin_model->getSession();
		$data['user'] = $this->Admin_model->getAllAdmin();

		$this->load->view('template/header');
		$this->load->view('admin/data_user', $data);
		$this->load->view('template/footer');
	}

	public function dataP4gn()
	{
		$data['admin_session'] = $this->Admin_model->getSession();
		$data['p4gn'] = $this->home_models->getAllDataP4gn();

		$this->load->view('template/header');
		$this->load->view('admin/data_p4gn', $data);
		$this->load->view('template/footer');
	}

	public function dataUrin()
	{
		$data['admin_session'] = $this->Admin_model->getSession();
		$data['urin'] = $this->home_models->getAllDataUrin();

		$this->load->view('template/header');
		$this->load->view('admin/data_urin', $data);
		$this->load->view('template/footer');
	}

	public function tambahUser()
	{
		$data['admin_session'] = $this->Admin_model->getSession();

		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('template/header', $data);
			$this->load->view('admin/tambah_user', $data);
			$this->load->view('template/footer');
		} else {
			$this->Admin_model->tambahUser();
			$this->session->set_flashdata('flash', '<div class="row mt-2">
                            <div class="col-md-6 m-auto" >
                                <div class="alert alert-success text-center  alert-dismissible fade show" role="alert">
                                    Data admin <strong>berhasil!</strong> ditambahkan
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>
                        </div>');
			redirect('admin/dataUser');
		}
	}

	public function editUser($id)
	{
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		$data['admin'] = $this->Admin_model->getAdminById($id);
		$data['title'] = "Edit Admin";

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('template/header', $data);
			$this->load->view('admin/edit_user', $data);
			$this->load->view('template/footer');
		} else {
			$this->Admin_model->editUser();
			$this->session->set_flashdata('flash', '<div class="col-6 text-center m-auto alert alert-success alert-dismissible fade show" role="alert">
                Data admin berhasil <strong>dirubah</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                </div>');
			redirect('admin/dataUser');
		}
	}

	public function editProfilUser()
	{
		$data['judul'] = 'Edit Profil Admin';
		$data['admin_session'] = $this->Admin_model->getSession();
		$data['admin'] = $this->Admin_model->getSession();

		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('template/header', $data);
			$this->load->view('admin/update_profile', $data);
			$this->load->view('template/footer');
		} else {
			$this->Admin_model->editUser();
			$this->session->set_flashdata('flash', '<div class="row mt-2">
                            <div class="col-6 m-auto">
                                <div class="alert text-center  alert-success alert-dismissible fade show" role="alert">
                                    Data admin <strong>berhasil!</strong> dirubah
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>
                        </div>');
			redirect('admin/editProfilUser');
		}
	}

	public function hapusUser($id)
	{
		$this->Admin_model->hapusUser($id);
		$this->session->set_flashdata('flash', '<div class="col-6 text-center m-auto alert alert-danger alert-dismissible fade show" role="alert">
                Data admin berhasil <strong>dihapus</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                </div>');
		redirect('admin/dataUser');
	}

}
