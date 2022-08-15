<?php
class Room extends CI_Controller
{
	var $limit = 10;
	var $offset = 10;

	function __construct()
	{
		parent::__construct();
		$this->load->model('Room_model');
		$this->load->helper(array('url'));
	}

	function index($page = NULL, $offset = '', $key = NULL)
	{
		//print_r($this->prodi_model->ambil_data());
		$data['room'] = $this->Room_model->ambil_data();
		$this->load->view('Admin/Room_list', $data);
	}

	function tambah()
	{
		$data = array(
			'aksi' 				=> site_url('Room/tambah_aksi'),
			'name' 				=> set_value('name'),
			'floor' 			=> set_value('floor'),
			'facility' 		  	=> set_value('facility'),
			'stats'		 	  	=> set_value('stats'),
			'cost' 			   	=> set_value('cost'),
			'id_room'	 		=> set_value('id_room'),
			'button' 			=> 'Add'
		);
		$this->load->view('Admin/Room_form', $data);
	}

	function tambah_aksi()
	{

		$this->load->library('upload');
		$nmfile = "" . time(); //nama file saya beri nama langsung dan diikuti fungsi time
		$config['upload_path'] = './assets/admin/uploads/'; //path folder
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
		$config['max_size'] = '3072'; //maksimum besar file 3M
		$config['max_width']  = '5000'; //lebar maksimum 5000 px
		$config['max_height']  = '5000'; //tinggi maksimu 5000 px
		$config['file_name'] = $nmfile; //nama yang terupload nantinya

		$this->upload->initialize($config);

		if ($_FILES['filefoto']['name']) {
			if ($this->upload->do_upload('filefoto')) {
				$gbr = $this->upload->data();
				$data = array(
					'gambar' 		=> $gbr['file_name'],
					'room_name' 	=> $this->input->post('name'),
					'floor' 		=> $this->input->post('floor'),
					'facility' 		=> $this->input->post('facility'),
					'stats' 		=> $this->input->post('stats'),
					'cost' 			=> $this->input->post('cost')

				);
				$this->Room_model->tambah_data($data); //akses model untuk menyimpan ke database

				//pesan yang muncul jika berhasil diupload pada session flashdata
				$this->session->set_flashdata("message", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Insert data berhasil !!</div></div>");
				redirect('room'); //jika berhasil maka akan ditampilkan view upload
			} else {
				//pesan yang muncul jika terdapat error dimasukkan pada session flashdata
				$this->session->set_flashdata("message", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Insert data gagal !!</div></div>");
				redirect('room'); //jika gagal maka akan ditampilkan form upload
			}
		}


		$data = array(
			'room_name' 	=> $this->input->post('name'),
			'floor' 		=> $this->input->post('floor'),
			'facility' 		=> $this->input->post('facility'),
			'stats' 		=> $this->input->post('stats'),
			'cost' 			=> $this->input->post('cost')
		);
		$this->Room_model->tambah_data($data);
		redirect(site_url('room'));
	}

	function delete($id)
	{
		$this->Room_model->hapus_data($id);
		$this->session->set_flashdata("message", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Delete Data Success!!</div></div>");
		redirect('room');
	}

	function update($id)
	{
		$room = $this->Room_model->ambil_data_id($id);
		$data = array(
			'aksi' 				=> site_url('room/update_aksi'),
			'name' 				=> set_value('name', $room->room_name),
			'floor' 			=> set_value('floor', $room->floor),
			'facility'	 		=> set_value('facility', $room->facility),
			'stats'			 	=> set_value('stats', $room->stats),
			'cost'	 			=> set_value('cost', $room->cost),
			'id_room'	 		=> set_value('id_room', $room->id_room),
			'button' 			=> 'Update'
		);
		$this->load->view('Admin/Room_form', $data);
	}

	function update_aksi()
	{

		$this->load->library('upload');
		$nmfile = "" . time(); //nama file saya beri nama langsung dan diikuti fungsi time
		$config['upload_path'] = './assets/admin/uploads/'; //path folder
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
		$config['max_size'] = '3072'; //maksimum besar file 3M
		$config['max_width']  = '5000'; //lebar maksimum 5000 px
		$config['max_height']  = '5000'; //tinggi maksimu 5000 px
		$config['file_name'] = $nmfile; //nama yang terupload nantinya

		$this->upload->initialize($config);

		if ($_FILES['filefoto']['name']) {
			if ($this->upload->do_upload('filefoto')) {
				$gbr = $this->upload->data();
				$data = array(
					'gambar' 		=> $gbr['file_name'],
					'room_name' 	=> $this->input->post('name'),
					'floor' 		=> $this->input->post('floor'),
					'facility' 		=> $this->input->post('facility'),
					'stats' 		=> $this->input->post('stats'),
					'cost' 			=> $this->input->post('cost')

				);

				$id_room = $this->input->post('id_room');
				$this->Room_model->edit_data($id_room, $data);

				$this->session->set_flashdata("message", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Update Data Success!!</div></div>");
				redirect('room');
			} else {
				$this->session->set_flashdata("message", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Update Failed!!</div></div>");
				redirect('room_form', 'refresh');
			}
		}
		$data = array(
			'room_name'    => $this->input->post('name'),
			'floor'        => $this->input->post('floor'),
			'facility'     => $this->input->post('facility'),
			'stats'        => $this->input->post('stats'),
			'cost'         => $this->input->post('cost')
		);
		$id_room = $this->input->post('id_room');
		$this->Room_model->edit_data($id_room, $data);
		redirect('room');
	}
}
