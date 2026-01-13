<?php
class Home_models extends CI_Model {

    public function addRegisterBnn() {
        //tangkap input dari form
        $nama_pemohon = $this->input->post('nama_pemohon');
        $instansi = $this->input->post('instansi');
        $hp = $this->input->post('no');
        $alamat = $this->input->post('alamat');
        $tanggal = $this->input->post('tanggal');

        $config['upload_path'] = './assets/file_urine';
        $config['allowed_types'] = 'pdf|doc|docx';
        $config['max_size'] = 8048;

        // load library upload
        $this->load->library('upload', $config);

        $nama_file = null;
        if($this->upload->do_upload('surat')){
            $data = $this->upload->data();
            $nama_file = $data['file_name'];
        }

        $data = array(
            'nama_pemohon' => $nama_pemohon,
            'instansi' => $instansi,
            'no' => $hp,
            'alamat' => $alamat,
            'tanggal_waktu' => $tanggal,
            'surat' => $nama_file
        );

        $this->db->insert('tb_sosilisas_p4gn', $data);
    }

    public function addformBnn() {
        //tangkap input dari form
        $nama_pemohon = $this->input->post('nama_pemohon');
        $instansi = $this->input->post('instansi');
        $hp = $this->input->post('no');
        $alamat = $this->input->post('alamat');
        $tanggal = $this->input->post('tanggal');

        $config['upload_path'] = './assets/file_urine';
        $config['allowed_types'] = 'pdf|doc|docx';
        $config['max_size'] = 8048;

        // load library upload
        $this->load->library('upload', $config);

        $nama_file = null;
        if($this->upload->do_upload('surat')){
            $data = $this->upload->data();
            $nama_file = $data['file_name'];
        }

        $data = array(
            'nama_pemohon' => $nama_pemohon,
            'instansi' => $instansi,
            'no' => $hp,
            'alamat' => $alamat,
            'tanggal_waktu' => $tanggal,
            'surat' => $nama_file
        );

        $this->db->insert('tb_tes_urine', $data);
    }
    public function hapusP4gn($id)
    {
        $this->db->delete('tb_sosilisas_p4gn', ['id' => $id]);
    }

    public function hapusUrin($id)
    {
        $this->db->delete('tb_tes_urine', ['id' => $id]);
    }

    public function getDataP4gnById($id){
        return $this->db->get_where('tb_sosilisas_p4gn', ['id' => $id])->row_array();
    }

    public function getDataUrinById($id){
        return $this->db->get_where('tb_tes_urine', ['id' => $id])->row_array();
    }

    public function getAllDataP4gn(){
        return $this->db->get('tb_sosilisas_p4gn')->result_array();
    }

    public function getAllDataUrin(){
        return $this->db->get('tb_tes_urine')->result_array();
    }
}
