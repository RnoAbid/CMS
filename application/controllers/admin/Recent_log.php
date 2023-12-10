<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Recent_log extends CI_Controller
{

    public function __construct()
    {
        parent::__construct(); 
        if($this->session->userdata('level')<>'Admin'){
			redirect('auth');
		}
    }
    public function index()
    {
        $this->db->from('recent_log');
        $this->db->order_by('tanggal', 'DESC');
        $user = $this->db->get()->result_array();
        $data = array(
            'judul_halaman' => 'Data Pengguna',
            'recent_log'          => $user
        );
        $this->template->load('template_admin', 'admin/recent_log', $data);
    }

   

    public function hapus($id)
    {
        $where = array(
            'id_recent_log'   => $id
        );
        $this->db->delete('recent_log', $where);
        $this->session->set_flashdata('alert', '
            <div class="alert alert-success" role="alert">
            Berhasil menghapus data login!!
            </div>
			');
        redirect('admin/recent_log');
    }

   
}
