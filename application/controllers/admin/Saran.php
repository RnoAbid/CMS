<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Saran extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('level') == NULL) {
            redirect('auth');
        }
    }
    public function index()
    {
        $this->db->from('saran');
        $saran = $this->db->get()->result_array();
        $data = array(
            'judul_halaman' => 'Saran',
            'saran'          => $saran
        );
        $this->template->load('template_admin', 'admin/saran', $data);
    }

   
    public function hapus($id)
    {
        $where = array(
            'id_saran'   => $id
        );
        $this->db->delete('saran', $where);
        $this->session->set_flashdata('alert', '
            <div class="alert alert-success" role="alert">
            Berhasil menghapus Saran
            </div>
			');
        redirect('admin/saran');
    }
    public function hapussemua($id)
    {
        $this->db->empty_table('saran');
        $this->session->set_flashdata('alert', '
            <div class="alert alert-success" role="alert">
            Berhasil menghapus Semua Saran
            </div>
			');
        redirect('admin/saran');
    }

    
}
