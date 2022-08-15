<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Room_model');
		$this->load->model('Member_model');
		$this->load->model('Rent_model');
		$this->load->helper(array('url'));
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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('Member/Index');
	}

	public function info()
	{
		$data['room'] = $this->Room_model->ambil_data();
		$this->load->view('Member/Info', $data);
	}

	public function info_member()
	{
		$data['room'] = $this->Room_model->ambil_data();
		$this->load->view('Member/Info_member', $data);
	}

	public function login_member()
	{
		redirect('LoginMember');
	}

	public function regis()
	{
		$this->load->view('Member/Regis');
	}

	public function index_member()
	{
		$this->load->view('Member/Index_member');
	}

	public function booking()
	{
		$this->load->view('Member/Booking');
	}

	public function rent_status()
	{
		$data['rent'] = $this->Rent_model->ambil_data();
		$this->load->view('Member/Rent_status', $data);
	}

	public function rent()
	{
		$this->load->view('Member/Rent');
	}

	public function report()
	{
		$this->load->view('Member/Report_form');
	}
}
