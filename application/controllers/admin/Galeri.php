<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Galeri extends CI_Controller
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
        $this->db->from('user')->order_by('id_user', 'ASC');
        $user = $this->db->get()->result_array();
        $this->db->from('galeri a');
        $this->db->join('user b', 'a.username=b.username', 'left')->order_by('tanggal', 'DESC');
        $galeri = $this->db->get()->result_array();
        $data = array(
            'judul_halaman' => 'galeri',
            'galeri'      => $galeri,
            'user'      => $user,
        
        );
        $this->template->load('template_admin', 'admin/galeri', $data);
    }




    public function simpan()
    {
        $namafoto = date('YmdHis') . '.jpg';
        $config['upload_path']          = 'assets/upload/galeri/';
        $config['max_size'] = 500 * 1024; //3 * 1024 * 1024; //3Mb; 0=unlimited
        $config['file_name']            = $namafoto;
        $config['allowed_types']        = '*';
        $this->load->library('upload', $config);

        $judul = $this->input->post('post');
        $this->db->from('caraousel')->where('judul',$judul);
        $cek = $this->db->get()->result_array();
        if ($_FILES['foto']['size'] >= 500 * 1024) {
            $this->session->set_flashdata('alert', '
                <div class="alert alert-danger alert-dismissible" role="alert">
                Ukuran foto terlalu besar, upload ulang foto dengan ukuran yang kurang dari 500 KB.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                    ');
            redirect('admin/galeri');
        } elseif (!$this->upload->do_upload('foto')) {
            $error = array('error' => $this->upload->display_errors());
        }
        elseif($cek <> null){
            $this->session->set_flashdata('alert', '
                <div class="alert alert-danger alert-dismissible" role="alert">
                Judul Galeri sudah ada
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                    ');
            redirect('admin/galeri');
        } else {
            $data = array('upload_data' => $this->upload->data());
            $data = [
                'judul'  => $this->input->post('judul'),
                'username'  => $this->session->userdata('username'),
                'foto'   => $namafoto,
                'tanggal'  => date('Y-m-d')
            ];
            $this->db->insert('galeri', $data);
            $this->session->set_flashdata('alert', '
                <div class="alert alert-success alert-dismissible" role="alert">
                Berhasil ditambahkan 
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                    ');
            redirect('admin/galeri');
        }
    }




    public function hapus($id)
    {
        $filename = FCPATH . '/assets/upload/galeri/' . $id;
        if (file_exists($filename)) {
            unlink("FCPATH./assets/upload/konten/" . $id);
        }
        $data = array(
            'foto' => $id,
            
        
        );
        $this->db->delete('galeri', $data);
        $this->session->set_flashdata('alert', '
            <div class="alert alert-success" role="alert">
            Berhasil menghapus gambar galeri!
            </div>
			');
        redirect('admin/galeri');
    }



   
}
