<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

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

	private function render($tpl=false)							// $tpl -> Mean Templates
	{
		if(empty($tpl)){										//if tpl is empty go default page
			$tpl='main'; 	
		}
		
		$data['data']=array(
			'tpl'=>$tpl,
			'data'=>array()
		);

		$this->load->view('admin/includes/content',$data); 		// page head
	}

	public function index() 									//main page function
	{
		$this->render('');
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
