<?php
class Member extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Member_model');
		$this->load->helper('url');
	}

	/* MEMBER-REGISTRASI*/

	function index()
	{
		$data['member'] = $this->Member_model->ambil_data();
		$this->load->view('Member/Login_member', $data);
	}

	function daftar()
	{
		$data = array(
			'aksi' 				=> site_url('Member/daftar_aksi'),
			'name'		 		=> set_value('name', $member->name_member),
			'password' 			=> set_value('password', $member->pass_member),
			'email' 			=> set_value('email', $member->email_member),
			'gender' 			=> set_value('gender', $member->gender),
			'nohp' 				=> set_value('nohp', $member->nohp),
			'address' 			=> set_value('address', $member->address_member),
			'id_member' 		=> set_value('id_member', $member->id_member),
			'button' 			=> 'Sign up'
		);
		$this->load->view('Member/Regis', $data);
	}

	function daftar_aksi()
	{
		$data = array(
			'name_member' 	=> $this->input->post('name'),
			'pass_member'	=> $this->input->post('password'),
			'email_member' 	=> $this->input->post('email'),
			'gender' 		=> $this->input->post('gender'),
			'nohp' 			=> $this->input->post('nohp'),
			'address_member' => $this->input->post('address')
		);
		$this->Member_model->tambah_data($data);
		$this->session->set_flashdata("message", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Sign up Success!!</div></div>");
		redirect('LoginMember');
	}

	/* ADMIN - KELOLA DATA MEMBER*/

	function data_member()
	{
		//print_r($this->member_model->ambil_data());
		$data['member'] = $this->Member_model->ambil_data();
		$this->load->view('Admin/Member_list', $data);
	}


	function delete($id)
	{
		$this->Member_model->hapus_data($id);
		$this->session->set_flashdata("message", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Delete Success!!</div></div>");
		redirect(site_url('Member/data_member'));
	}

	function update($id)
	{
		$member = $this->Member_model->ambil_data_id($id);
		$data = array(
			'aksi' 				=> site_url('Member/update_aksi'),
			'name'		 		=> set_value('name', $member->name_member),
			'password' 			=> set_value('password', $member->pass_member),
			'email' 			=> set_value('email', $member->email_member),
			'gender' 			=> set_value('gender', $member->gender),
			'nohp' 				=> set_value('nohp', $member->nohp),
			'address' 			=> set_value('address', $member->address_member),
			'id_member' 		=> set_value('id_member', $member->id_member),
			'button' 			=> 'Update'
		);
		$this->load->view('Admin/Member_form', $data);
	}

	function update_aksi()
	{
		$data = array(
			'name_member' 		=> $this->input->post('name'),
			'pass_member'		=> $this->input->post('password'),
			'email_member' 		=> $this->input->post('email'),
			'gender' 			=> $this->input->post('gender'),
			'nohp' 				=> $this->input->post('nohp'),
			'address_member' 	=> $this->input->post('address')
		);
		$id_member = $this->input->post('id_member');
		$this->Member_model->edit_data($id_member, $data);
		$this->session->set_flashdata("message", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Update Data Success!!</div></div>");
		redirect('member/data_member');
	}
}
