<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
	}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->data['pages'] = 'form';
		$this->load->view('layouts/main', $this->data);
		// $this->load->view('welcome_message');
	}

	public function create()
	{
		$this->form_validation->set_rules('nrp', 'NRP', 'required', array('required' => 'NRP harus diisi!'));
		$this->form_validation->set_rules('nama', 'nama', 'required', array('required' => 'Nama harus diisi!'));
		$this->form_validation->set_rules('jenis_kelamin', 'jeniskelamin', 'required', array('required' => 'Jenis kelamin harus diisi!'));

		if ($this->form_validation->run() == true) {
			$nrp = $this->input->post('nrp');
			$nama = $this->input->post('nama');
			$jenis_kelamin = $this->input->post('jenis_kelamin');
			$this->data['pages'] = 'success';
			$this->data['mahasiswa'] = array(
				'nrp' => $nrp,
				'nama' => $nama,
				'jenis_kelamin' => $jenis_kelamin,
			);
			$this->load->view('layouts/main', $this->data);
		} else {
			$this->data['pages'] = 'form';
			$this->load->view('layouts/main', $this->data);
		}
	}
}
