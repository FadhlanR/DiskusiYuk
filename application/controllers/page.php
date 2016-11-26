<?php
	class Page extends CI_Controller{
		public function index()
		{
			$this->load->library('table');

			$this->table->set_heading('Name', 'Color', 'Size');
			$this->table->add_row('Fred', 'Blue', 'Small');
			$this->table->add_row('Mary', 'Red', 'Large');
			$this->table->add_row('John', 'Green', 'Medium');	

			$data['page_content'] = 'Hello World!';
			$data['full_name'] = array('123123','123123','123123123');
			$this->load->view('header');
			$this->load->view('content',$data);
			$this->load->view('footer');

		}
		public function comment(){
			$data['chat'] = '';
		}
	}
?>