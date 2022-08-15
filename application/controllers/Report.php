<?php
class Report extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Report_model');
		$this->load->model('Member_model');
		$this->load->model('Room_model');
	}


	/* PAYMENT CONFIRMATION*/

	function tambah($id_room)
	{
		$room = $this->Room_model->ambil_data1($id_room);
		$email = $this->session->userdata('email_member');
		$member = $this->Member_model->ambil_data1($email);

		$data = array(
			'aksi' 				=> site_url('Report/tambah_aksi'),
			'report_id' 		=> set_value('report_id'),
			'id_room' 		=> set_value('id_room', $room->id_room),
			'id_member' 		=> set_value('id_member', $member->id_member),
			'about' 			=> set_value('about'),
			'content'			=> set_value('content'),
			'button' 			=> 'OK'
		);
		$this->load->view('Member/Report_form', $data);
	}

	function tambah_aksi()
	{

		$data = array(
			'report_id' 			=> $this->input->post('report_id'),
			'id_room'	 			=> $this->input->post('id_room'),
			'id_member' 			=> $this->input->post('id_member'),
			'about' 				=> $this->input->post('about'),
			'content'	 				=> $this->input->post('content')
		);
		$this->Report_model->tambah_data($data);
		$this->session->set_flashdata("message", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Booking Success!!</div></div>");
		redirect('Welcome/Info_member');
	}



	function index()
	{
		$data['report'] = $this->Report_model->ambil_data();
		$this->load->view('Admin/Report_list', $data);
	}

	public function download($id)
	{
		if (!empty($id)) {
			//load download helper
			$this->load->helper('download');

			//get file info from database
			$fileInfo = $this->Sewa_model->ambil_data_id($id);

			$gambar = $fileInfo->gambar;
			//file path
			$file = 'assets/admin/uploads/' . $gambar;
			//download file from directory
			force_download($file, NULL);
		}
	}

	function delete($id)
	{
		$this->Report_model->hapus_data($id);
		$this->session->set_flashdata("message", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Delete Success!!</div></div>");
		redirect('report');
	}
}
