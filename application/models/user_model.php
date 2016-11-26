<?php
	class User_model extends CI_Model {
		var $page_content = '';
		function __construct()
		{
			parent::__construct();
		}
		function get_last_ten_entries()
		{
			$query = $this->db->get('entries', 10);
			return $query->result();
		}
		function insert_entry()
		{
			$this->page_content = $_POST['page_content']; // please read the below note
			$this->date = time();
			$this->db->insert('entries',$this);
		}
	}
?>