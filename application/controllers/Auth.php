<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$this->load->view('login');
	}

	public function login()
	{
		$username =  $this->input->post('username');
		$password =  md5($this->input->post('password'));
		$this->db->from('user');
		$this->db->where('username', $username);
		$cekk = $this->db->get()->row();
		if ($cekk == NULL) {
			$this->session->set_flashdata('alert', '
            <div class="alert alert-danger" role="alert">
            Username tidak ada!!
            </div>
			');
			redirect('auth');
		} elseif ($cekk->password == $password) {
			$data = array(
				'id_user'    => $cekk->id_user,
				'nama'    => $cekk->nama,
				'username'    => $cekk->username,
				'level'    => $cekk->level
			);
			$this->session->set_userdata($data);
			$data2 = [
				'username' => $this->input->post('username'),
				'keterangan' => $this->input->post('username'). ' Melakukan Login'
			];
			$this->db->insert('recent_log', $data2);

			redirect('admin/home');
		} else {
			$this->session->set_flashdata('alert', '
            <div class="alert alert-danger" role="alert">
            Password Salah!!
            </div>
			');
			redirect('auth');
		}
	}

	public function logout()
    {
		$username = $this->session->userdata('username');
        $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">Log Out Berhasil</div>');
        session_destroy();
		$data2 = [
			'username' => $username,
			'keterangan' => $username. ' Melakukan Logout'
		];
		$this->db->insert('recent_log', $data2);
        redirect('home');
    }
}
