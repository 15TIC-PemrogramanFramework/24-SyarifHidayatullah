<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Login extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('mahasiswa_model');
    }

    public function index()
    {
		if(!$this->input->post())
		{
			$this->load->view('login');
		}
		else
		{
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			if ($username == 'admin' && $password == 'admin') {
				$this->session->set_userdata('logined', true);
				$this->session->set_userdata('username', 'admin');
				$this->session->set_userdata('status', 'admin');
				redirect("Home");
			} else if ($username == 'owner' && $password = 'owner') {
				$this->session->set_userdata('logined', true);
				$this->session->set_userdata('username', 'owner');
				$this->session->set_userdata('status', 'owner');
				redirect("Home");
			} else {
				$this->session->set_flashdata('gagal','<div class="alert alert-danger text-center"><strong>Gagal Login</strong></div>');
				redirect("Login");
			}
		}
        
    } 
	
	public function logout()
    {
		$this->session->unset_userdata('logined');
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('password');
		redirect("/");
		session_destroy();
    } 
}

/* End of file Workflows.php */
/* Location: ./application/controllers/Workflows.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2017-04-15 00:43:10 */
/* http://harviacode.com */