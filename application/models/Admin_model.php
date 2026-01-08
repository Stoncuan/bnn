<?php

class Admin_model extends CI_Model
{
    public function getSession()
    {
        return $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->row_array();
    }

    public function getAllAdmin()
    {
        return $this->db->get('admin')->result_array();
    }

    public function getAdminById($id)
    {
        return $this->db->get_where('admin', ['id' => $id])->row_array();
    }

    public function tambah()
    {
        $username = $this->input->post('username', true);
        $password = $this->input->post('password', true);
        $role_id = $this->input->post('role_id', true);

        $data = array(
            'username' => $username,
            'password' => password_hash($password, PASSWORD_DEFAULT),
            'role_id' => $role_id
        );

        $this->db->insert('admin', $data);
    }

    public function hapusAdmin($id)
    {
        $this->db->delete('admin', ['id' => $id]);
    }

    public function editAdmin()
    {
        $data = [
            "username" => $this->input->post('username', true),
            "password" => password_hash($this->input->post('password', true), PASSWORD_DEFAULT),
            "role_id" => $this->input->post('role_id', true)
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('admin', $data);
    }


    // Register BNN
}