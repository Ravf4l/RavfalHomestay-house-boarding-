<?php
class Rent extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Rent_model');
		$this->load->model('Member_model');
		$this->load->model('Room_model');
	}

	/* MEMBER-KONFIRMASI PEMBAYARAN*/

	function tambah($id_room)
	{
		$room = $this->Room_model->ambil_data1($id_room);
		$email = $this->session->userdata('email_member');
		$member = $this->Member_model->ambil_data1($email);

		$data = array(
			'aksi' 				=> site_url('rent/tambah_aksi'),
			'rent_id' 			=> set_value('rent_id'),
			'id_room' 		=> set_value('id_room', $room->id_room),
			'id_member' 		=> set_value('id_member', $member->id_member),
			'date' 				=> set_value('date'),
			'nominal'			=> set_value('nominal'),
			'button' 			=> 'OK'
		);
		$this->load->view('Member/rent', $data);
	}

	function tambah_aksi()
	{

		$this->load->library('upload');
		$nmfile = "" . time();
		$config['upload_path'] = './assets/admin/uploads/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
		$config['max_size'] = '3072';
		$config['max_width']  = '5000';
		$config['max_height']  = '5000';
		$config['file_name'] = $nmfile;

		$this->upload->initialize($config);

		if ($_FILES['filefoto']['name']) {
			if ($this->upload->do_upload('filefoto')) {
				$gbr = $this->upload->data();
				$data = array(
					'picture' 				=> $gbr['file_name'],
					'rent_id' 				=> $this->input->post('rent_id'),
					'id_room'	 			=> $this->input->post('id_room'),
					'id_member' 			=> $this->input->post('id_member'),
					'date' 					=> $this->input->post('date'),
					'nominal' 				=> $this->input->post('nominal')
				);
				$this->Rent_model->tambah_data($data);

				redirect('Welcome/Info_member');
			} else {

				redirect('Welcome/rent'); //back to upload form
			}
		}


		$data = array(
			'rent_id' 				=> $this->input->post('rent_id'),
			'id_room'	 			=> $this->input->post('id_room'),
			'id_member' 			=> $this->input->post('id_member'),
			'date' 					=> $this->input->post('date'),
			'nominal' 				=> $this->input->post('nominal')
		);
		$this->Rent_model->tambah_data($data);
	}

	function delete($id)
	{
		$this->Rent_model->hapus_data($id);
		$this->session->set_flashdata("message", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Delete Success!!</div></div>");
		redirect('rent');
	}

	function index()
	{
		$data['rent'] = $this->Rent_model->ambil_data();
		$data['sum_total'] = $this->Rent_model->get_sum();
		$this->load->view('Admin/rent_list', $data);
	}

	public function download($id)
	{
		if (!empty($id)) {
			//load download helper
			$this->load->helper('download');

			//get file info from database
			$fileInfo = $this->Rent_model->ambil_data_id($id);

			$picture = $fileInfo->picture;
			//file path
			$file = 'assets/admin/uploads/' . $picture;
			//download file from directory
			force_download($file, NULL);
		}
	}


	function update($id)
	{
		$rent = $this->Rent_model->ambil_data_id($id);
		$data = array(
			'aksi' 				=> site_url('rent/update_aksi'),
			'status'			=> set_value('status', $rent->status),
			'month'				=> set_value('month', $rent->month),
			'rent_id' 			=> set_value('rent_id', $rent->rent_id),
			'button' 			=> 'Update'
		);
		$this->load->view('Admin/rent_form', $data);
	}

	function update_aksi()
	{

		$data = array(
			'month' 				=> $this->input->post('month'),
			'status' 				=> $this->input->post('status')
		);
		$rent_id = $this->input->post('rent_id');
		$this->Rent_model->edit_data($rent_id, $data);
		$this->session->set_flashdata("message", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Update Success!!</div></div>");
		redirect('rent');
	}
}

function delete($id)
{
	$this->Rent_model->hapus_data($id);
	$this->session->set_flashdata("message", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Delete Success!!</div></div>");
	redirect('rent');
}
