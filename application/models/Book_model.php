<?php

/**
 * 
 */
class Book_model extends CI_Model
{
	public $book		= 'book';
	public $id			= 'book_id';
	public $order		= 'ASC';

	function __construct()
	{
		parent::__construct();
	}

	function ambil_data()
	{
		$this->db->select('book.book_id, member.name_member, member.nohp, room.room_name, book.start_date, book.duration');
		$this->db->from('book');
		$this->db->join('member', 'book.id_member = member.id_member');
		$this->db->join('room', 'book.id_room = room.id_room');
		$query = $this->db->get();
		return $query->result();
	}

	function edit_data($id, $data)
	{
		$this->db->where($this->id, $id);
		return $this->db->update($this->book, $data);
	}

	function ambil_data_id($id)
	{
		$this->db->where($this->id, $id);
		return $this->db->get($this->book)->row(); //1 data
	}

	function tambah_data($data) //array
	{
		return $this->db->insert($this->book, $data);
	}


	function hapus_data($id)
	{
		$this->db->where($this->id, $id);
		return $this->db->delete($this->book);
	}
}
