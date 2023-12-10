<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Konten_model');
	}
	public function index()
	{

		// $this->db->from('konten a');
		// $this->db->join('kategori b', 'a.id_kategori=b.id_kategori', 'left');
		// $this->db->join('user c', 'a.username=c.username', 'left');
		// $this->db->order_by('tanggal', 'DESC');
		// $konten = $this->db->get()->result_array();

		$this->load->library('pagination');

		if ($this->input->post('submit')) {
			$data['keyword'] = $this->input->post('keyword');
			$this->session->set_userdata('keyword', $data['keyword']);
		} else {
			$data['keyword'] = $this->session->userdata('keyword');
		}

		$config['base_url'] = site_url('home/index/');
		$this->db->like('judul', $data['keyword']);
		$this->db->or_like('keterangan', $data['keyword']);
		$this->db->from('konten');
		$config['total_rows'] = $this->db->count_all_results();
		$config['per_page'] = 2;
		


		// $config['total_rows'] = $this->Konten_model->count_data();
		// $data['total_rows'] = $config['total_rows'];
		// $config['uri_segment'] = 3; // Segment URL yang digunakan untuk menentukan nomor halaman


		$this->pagination->initialize($config);

		$page['page'] = $this->uri->segment(3);

		$data = array(
			'judul' => "Beranda | PonBid",
			'konfig' =>  $this->db->get('konfigurasi')->row(),
			'kategori' =>  $this->db->get('kategori')->result_array(),
			'caraousel' => $this->db->get('caraousel')->result_array(),
			'results' => $this->Konten_model->search($config['per_page'], $page['page'], $data['keyword']),
			'konten2' => $this->Konten_model->konten_limit(),
		);

		$this->load->view('beranda', $data);
	}

	public function kategori($id)
	{
		$this->db->from('konfigurasi');
		$konfig = $this->db->get()->row();

		$this->db->from('kategori');
		$kategori = $this->db->get()->result_array();

		$this->db->from('caraousel');
		$caraousel = $this->db->get()->result_array();

		$this->db->from('konten a');
		$this->db->join('kategori b', 'a.id_kategori=b.id_kategori', 'left');
		$this->db->join('user c', 'a.username=c.username', 'left');
		$this->db->where('a.id_kategori', $id);
		$konten = $this->db->get()->result_array();

		$this->db->from('kategori');
		$this->db->where('id_kategori', $id);
		$nama_kategori = $this->db->get()->row()->nama_kategori;

		$data = array(
			'judul' => $nama_kategori . "| PonBid",
			'nama_kategori' => $nama_kategori,
			'konfig' => $konfig,
			'kategori' => $kategori,
			'konten' => $konten,
			'konten2' => $this->Konten_model->konten_limit(),

		);
		$this->load->view('kategori', $data);
	}

	public function artikel($id)
	{
		$this->db->from('konfigurasi');
		$konfig = $this->db->get()->row();

		$this->db->from('kategori');
		$kategori = $this->db->get()->result_array();

		$this->db->from('konten a');
		$this->db->join('kategori b', 'a.id_kategori=b.id_kategori', 'left');
		$this->db->join('user c', 'a.username=c.username', 'left');
		$this->db->where('slug', $id);
		$konten = $this->db->get()->row();

		$data = array(
			'judul' => $konten->judul . " | PonBid",
			'konfig' => $konfig,
			'kategori' => $kategori,
			'konten' => $konten,
			'konten2' => $this->Konten_model->konten_limit(),

		);
		$this->load->view('detail', $data);
	}


	public function contact()
	{
		$this->db->from('konfigurasi');
		$konfig = $this->db->get()->row();

		$this->db->from('kategori');
		$kategori = $this->db->get()->result_array();

		$this->db->from('caraousel');
		$caraousel = $this->db->get()->result_array();

		$this->db->from('konten a');
		$this->db->join('kategori b', 'a.id_kategori=b.id_kategori', 'left');
		$this->db->join('user c', 'a.username=c.username', 'left');
		$this->db->order_by('tanggal', 'DESC');
		$konten = $this->db->get()->result_array();


		$data = array(
			'judul' => "Beranda | PonBid",
			'konfig' => $konfig,
			'kategori' => $kategori,
			'caraousel' => $caraousel,
			'konten' => $konten,
		);
		$this->load->view('contact', $data);
	}

	public function tambah()
	{

		$data = array(
			'nama' => $this->input->post('nama'),
			'email' => $this->input->post('email'),
			'isi' => $this->input->post('isi_saran'),
			'tanggal' => date('Y-m-d'),
		);
		$this->db->insert('saran', $data);
		$this->session->set_flashdata('alert', '
            <div class="alert alert-success" role="alert">
            Saran Berhasil Dikirim
            </div>
			');
		redirect('home/contact');
	}

	public function galeri()
	{
		$this->db->from('konfigurasi');
		$konfig = $this->db->get()->row();

		$this->db->from('kategori');
		$kategori = $this->db->get()->result_array();


		$this->db->from('konten a');
		$this->db->join('kategori b', 'a.id_kategori=b.id_kategori', 'left');
		$this->db->join('user c', 'a.username=c.username', 'left');
		$this->db->where('slug');
		$konten = $this->db->get()->row();

		$this->db->from('user')->order_by('id_user', 'ASC');
		$user = $this->db->get()->result_array();
		$this->db->from('galeri a');
		$this->db->join('user b', 'a.username=b.username', 'left')->order_by('tanggal', 'DESC');
		$galeri = $this->db->get()->result_array();

		$data = array(
			'judul' => "Beranda | PonBid",
			'konfig' => $konfig,
			'kategori' => $kategori,
			'konten' => $konten,
			'galeri' => $galeri,
			'user' => $user,
			'konten2' => $this->Konten_model->konten_limit(),

		);
		$this->load->view('galeri', $data);
	}



	// public function search()
	// {

	// 	// Retrieve configuration, categories, and carousel data
	// 	$this->db->from('konfigurasi');
	// 	$konfig = $this->db->get()->row();

	// 	$this->db->from('kategori');
	// 	$kategori = $this->db->get()->result_array();

	// 	$this->db->from('caraousel');
	// 	$caraousel = $this->db->get()->result_array();

	// 	// Retrieve content data
	// 	$this->db->from('konten a');
	// 	$this->db->join('kategori b', 'a.id_kategori=b.id_kategori', 'left');
	// 	$this->db->join('user c', 'a.username=c.username', 'left');
	// 	$this->db->order_by('tanggal', 'DESC');
	// 	$konten = $this->db->get()->result_array();

	// 	// Set up data array
	// 	$data = array(
	// 		'judul' => "Beranda | PonBid",
	// 		'konfig' => $konfig,
	// 		'kategori' => $kategori,
	// 		'caraousel' => $caraousel,
	// 		'konten' => $konten,
	// 		'konten2' => $this->Konten_model->konten_limit(),
	// 	);

	// 	// Load the pagination library
	// 	$this->load->library('pagination');

	// 	// Set up pagination configuration
	// 	$config['base_url'] = site_url('Home/index/');
	// 	$config['total_rows'] = $this->Konten_model->count_data();
	// 	$config['per_page'] = 4;
	// 	$config['uri_segment'] = 3;

	// 	$this->pagination->initialize($config);

	// 	// Retrieve page number from URI segment
	// 	$page['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

	// 	// Retrieve content data with pagination
	// 	$data['results'] = $this->Konten_model->get_data($config['per_page'], $page['page']);

	// 	// Retrieve search keyword from the form
	// 	$keyword = $this->input->post('keyword');

	// 	// Call the search method with the required arguments
	// 	$data['results'] = $this->Konten_model->search($keyword, $config['per_page'], $page['page']);

	// 	// Load the view with the updated data
	// 	$this->load->view('beranda', $data);
	// }
}
