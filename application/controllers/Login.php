<?php

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->view('admin/_partials/head');
    }
    
    public function index()
	{
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if($this->form_validation->run() == false){
            
            $this->load->view('admin/login_page');
        }else{
            $this->_login();
        }
    }
    
    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        if($user)
        {
            if(password_verify($password, $user['password'])){
                $data = ['email'=> $user['email']];
                $this->session->set_userdata($data);
                redirect('admin/overview');

            }else{
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password salah</div>');
                redirect('login');
            }
        }
        else
        {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email tidak terdaftar</div>');
            redirect('login');
        }
    }

    public function logout(){
        $this->session->unset_userdata('email');
        //redirect('');
    }
}
