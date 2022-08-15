<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Login extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Room_model');
	}

	public function index()
	{
		if ($this->session->userdata('logined') && $this->session->userdata('logined') == true) 
		{
			redirect('Home');
		}

		if (!$this->input->post()) 
		{
			$this->load->view('Login');
		} else {
			$cek_login = $this->Room_model->cek_login(
				$this->input->post('username'),
				$this->input->post('password')
			);
			if (!empty($cek_login)) {
				$this->session->set_userdata('username', $cek_login->username);
				$this->session->set_userdata('logined', true);
				redirect("Home");
			} else {
				redirect("/");
			}
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('logined');
		redirect("/");
	}
}