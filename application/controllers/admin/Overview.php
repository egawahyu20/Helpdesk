<?php

class Overview extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
		$this->load->model("user_model");
		if($this->user_model->IsNotLogin()) redirect(site_url('Login'));
	}

	public function index()
	{
        // load view admin/overview.php
        $this->load->view("admin/overview");
	}
}