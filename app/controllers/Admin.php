<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('Admin_Model','admin');				// load Admin_Model
	}

	private function render($tpl=false, $GetData=false)			// $tpl -> Mean Templates
	{
		if(empty($tpl)){										//if tpl is empty go default page
			$tpl='main'; 	
		}
		
		$data['data']=array(
			'tpl'	=>$tpl,
			'data'	=>$GetData
		);

		$this->load->view('admin/includes/content',$data); 		// page head
	}

	public function index() 									//main page function
	{
		$UserPost = array(
			'user' 			=> $this->input->post('name'),
			'profession' 	=> $this->input->post('profession'),
			'birth' 		=> $this->input->post('birth'),
			'address' 		=> $this->input->post('address'),
			'phone' 		=> $this->input->post('phone'),
			'nationality' 	=> $this->input->post('nationality'),
			'email' 		=> $this->input->post('email'),
			'info' 			=> $this->input->post('info')
		);

		$post = $this->input->post();
		
		if(isset($post))
		{
			echo 'Post exist';
			$data['user_data'] =  $this->admin->InsertData($UserPost);
			$data["jii"] = "sdfsdfdsf";
			$this->render(false, $data);										//loading view
		}
		else
		{
			echo 'Post does not exist';

			$this->render('main');
		}
	}

	public function experience() 								//experience function
	{
		$this->render('experience');
	}

	public function education() 								//education function
	{
		$this->render('education');
	}
}
