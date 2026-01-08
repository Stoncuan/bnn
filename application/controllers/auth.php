<?php

class auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        if ($this->session->userdata('username')) {
            redirect('admin');
        }

        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run() == FALSE) {
            $data['judulHalaman'] = "Login Admin";

            $this->load->view('template/auth_header');
            $this->load->view('auth/login', $data);
            $this->load->view('template/auth_footer');
        } else {
            $this->_login();
        }

    }

    public function _login()
    {
        $username = $this->input->post('username', true);
        $password = $this->input->post('password', true);

        $admin = $this->db->get_where('user', ['username' => $username])->row_array();
        var_dump($admin);

        if ($admin) {
            if (password_verify($password, $admin['password']) && $username == $admin['username']) {
                $data = [
                    'username' => $admin['username'],
                    'password' => $admin['password']
                ];
                $this->session->set_userdata($data);

                if ($admin['role_id'] == 1) {
                    redirect('admin');
                }
            } else {
                $this->session->set_flashdata('massage', '<div style="text-aligin: center;" class="alert text-center alert-danger" role="alert">
            Password atau username anda salah!
            </div>');

                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('massage', '<div style="text-aligin: center;" class="alert text-center alert-danger" role="alert">
            Username anda belum terdaftar!
            </div>');
            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('massage', '<div style="text-aligin: center;" class="alert text-center alert-success" role="alert">
                    Anda sudah logout
                    </div>');
        redirect('auth');
    }

    // public function blocked(){
    //     $data['judulHalaman'] = "Akses Anda Di Tolak";

    //     $this->load->view('templates/header', $data);
    //     $this->load->view('auth/blocked');
    //     $this->load->view('templates/footer');

    // }

}