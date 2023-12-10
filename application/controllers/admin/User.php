<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        if($this->session->userdata('level')<>'Admin'){
			redirect('auth');
		}
    }
    public function index()
    {
        $this->db->from('user');
        $this->db->order_by('nama', 'ASC');
        $user = $this->db->get()->result_array();
        $data = array(
            'judul_halaman' => 'Data Pengguna',
            'user'          => $user
        );
        $this->template->load('template_admin', 'admin/user_index', $data);
    }

    public function simpan()
    {
        $this->db->from('user');
        $this->db->where('username', $this->input->post('username'));
        $cekk = $this->db->get()->result_array();
        if ($cekk <> NULL) {
            $this->session->set_flashdata('alert', '
            <div class="alert alert-danger" role="alert">
            Username sudah ada!!
            </div>
			');
            redirect('admin/user');
        }
        $this->User_model->simpan();
        $this->session->set_flashdata('alert', '
            <div class="alert alert-success" role="alert">
            Data berhasil Ditambahkan!!
            </div>
			');
        redirect('admin/user');
    }

    public function hapus($id)
    {
        $where = array(
            'id_user'   => $id
        );
        $this->db->delete('user', $where);
        $this->session->set_flashdata('alert', '
            <div class="alert alert-success" role="alert">
            Berhasil menghapus user!!
            </div>
			');
        redirect('admin/user');
    }

    public function edit(){
        $this->User_model->update();
        $this->session->set_flashdata('alert', '
            <div class="alert alert-success" role="alert">
            Berhasil memperbarui nama user!!
            </div>
			');
        redirect('admin/user');
    }
}
