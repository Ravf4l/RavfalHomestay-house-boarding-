<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class LoginMember extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Member_model');
	}

	public function index()
	{
		if ($this->session->userdata('logined') && $this->session->userdata('logined') == true) 
		{
			redirect('Welcome/Index_member');
		}

		if (!$this->input->post()) 
		{
			$this->load->view('Member/Login_member');
		} else {
			$cek_login = $this->Member_model->cek_login(
				$this->input->post('email_member'),
				$this->input->post('pass_member')
			);
			if (!empty($cek_login)) {
				$this->session->set_userdata('logined', true);
				$this->session->set_userdata('email_member', $cek_login->email_member);
				redirect("Welcome/Index_member");
			} else {
				$this->session->set_flashdata('failed', 'Wrong Email or Password!!');
				redirect("/LoginMember");
			}
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('logined'); 
		redirect("/LoginMember");
	}
}
