<?php 
class Book extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Book_model');
		$this->load->model('Member_model');
		$this->load->model('Room_model');
	}

	/* MEMBER-BOOKING*/
 
	function booking($id_room){
		$room = $this->Room_model->ambil_data1($id_room);
		$email = $this->session->userdata('email_member');
		$member = $this->Member_model->ambil_data1($email);

		$data = array(
			'aksi' 				=> site_url('Book/booking_aksi'),
			'book_id' 			=> set_value('book_id'),
			'id_room' 			=> set_value('id_room',$room->id_room),
			'id_member' 		=> set_value('id_member',$member->id_member),
			'start_date' 		=> set_value('start_date'),
			'duration'			=> set_value('duration'),
			'button' 			=> 'Book'
			);
		$this->load->view('Member/Booking',$data);
	}
 	
 	function booking_aksi(){
	$data = array(	
			'book_id' 				=> $this->input->post('book_id'),
			'id_room'	 			=> $this->input->post('id_room'),
			'id_member' 			=> $this->input->post('id_member'),
			'start_date' 			=> $this->input->post('start_date'),
			'duration' 				=> $this->input->post('duration')
			);	
		$this->Book_model->tambah_data($data);
		$this->session->set_flashdata("message", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Booking Success!!</div></div>");
		redirect('Welcome/Info_member');
	}
	



	/*ADMIN*/

	function index()
	{
		$data['book'] = $this->Book_model->ambil_data();
		$this->load->view('Admin/Book_list',$data);
	}

	function delete($id)
	{
		$this->Book_model->hapus_data($id);
		$this->session->set_flashdata("message", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Delete Success!!</div></div>");
        redirect('book');
	}

	function update($id)
	{
		$book = $this->Book_model->ambil_data_id($id);
		$data = array(
			'aksi' 				=> site_url('book/update_aksi'),
			'start_date' 		=> set_value('start_date',$book->start_date),
			'duration'			=> set_value('duration',$book->duration),
			'book_id' 			=> set_value('book_id',$book->book_id),
			'button' 			=> 'Update'
			);
		$this->load->view('Admin/Book_form',$data);		
	}

	function update_aksi()
	{
		$data = array(
			'start_date' 		=> $this->input->post('start_date'),
			'duration' 			=> $this->input->post('duration')
			);	
		$book_id = $this->input->post('book_id');
		$this->Book_model->edit_data($book_id,$data);
		$this->session->set_flashdata("message", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Update Success!!</div></div>");
        redirect('book');
	}

}
