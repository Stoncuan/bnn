<?php

class Admin_model extends CI_Model
{
    public function getSession()
    {
        return $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
    }

    public function getAllAdmin()
    {
        return $this->db->get('user')->result_array();
    }

    public function getAdminById($id)
    {
        return $this->db->get_where('user', ['id' => $id])->row_array();
    }

    public function tambahUser()
    {
        $username = $this->input->post('username', true);
        $password = $this->input->post('password', true);
        $role_id = $this->input->post('role_id', true);

        $data = array(
            'username' => $username,
            'password' => password_hash($password, PASSWORD_DEFAULT),
            'role_id' => $role_id
        );

        $this->db->insert('user', $data);
    }

    public function hapusUser($id)
    {
        $this->db->delete('user', ['id' => $id]);
    }

    public function editUser()
    {
        $data = [
            "username" => $this->input->post('username', true),
            "password" => password_hash($this->input->post('password', true), PASSWORD_DEFAULT),
            "role_id" => $this->input->post('role_id', true)
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('user', $data);
    }

    public function countUser()
    {
        return $this->db->get('user')->num_rows();
    }

    public function countP4gn()
    {
        return $this->db->get('tb_sosilisas_p4gn')->num_rows();
    }

    public function countUrin()
    {
        return $this->db->get('tb_tes_urine')->num_rows();
    }
}