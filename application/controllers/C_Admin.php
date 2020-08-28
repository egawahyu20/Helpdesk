<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Admin extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('M_DB');
	}

	public function index()
	{
		
		//$this->load->view('admin/login_page');
	}

	public function add()
	{
		$data['dd_level'] = $this->M_DB->dropdown_level();
		$data['id_level'] = $this->input->post('id_level') ? $this->input->post('id_level') : '';

		$this->load->view('admin/register',$data);
	}

	public function simpan()
	{
		
	}

	public function hapus()
	{
		
	}
}
