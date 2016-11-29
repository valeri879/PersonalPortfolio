<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_Model');                // load Admin_Model
    }


    public function index()                                    //main page function
    {
        // insert new values into data base
        if (isset($_POST['submit'])) {
            $data = array(
                'user'           => $this->input->post('name'),
                'profession'     => $this->input->post('profession'),
                'birth'          => $this->input->post('birth'),
                'address'        => $this->input->post('address'),
                'phone'          => $this->input->post('phone'),
                'nationality'    => $this->input->post('nationality'),
                'email'          => $this->input->post('email'),
                'info'           => $this->input->post('info')
            );
            $this->Admin_Model->InsertData($data);
        }else if(isset($_POST['update'])){
            $data = array(
                'UserId'         => $this->input->post('UserId'),
                'user'           => $this->input->post('name'),
                'profession'     => $this->input->post('profession'),
                'birth'          => $this->input->post('birth'),
                'address'        => $this->input->post('address'),
                'phone'          => $this->input->post('phone'),
                'nationality'    => $this->input->post('nationality'),
                'email'          => $this->input->post('email'),
                'info'           => $this->input->post('info')
            );
            if($this->Admin_Model->UpdateUser($data)){
                echo "success";
            }else{
                echo "error";
            }
            
        }

        $data['result'] = '';
        
        // get user data from data base
        if($result = $this->Admin_Model->GetUserInfo()){
            $data['result'] = $result[0];
        }

        $this->load->view('admin/includes/content', $data);

        // update user data into data base
    }

    public function education()                                //education function
    {
        // insert new values into data base
        if (isset($_POST['submit'])) {
            $data = array(
                'from_year'      => $this->input->post('from_year'),
                'to_year'        => $this->input->post('to_year'),
                'title'          => $this->input->post('title'),
                'description'    => $this->input->post('description'),
                'school'         => $this->input->post('school')
            );
            $this->Admin_Model->InsertEducation($data);
        }else if(isset($_POST['update'])){
            $data = array(
                'from_year'      => $this->input->post('from_year'),
                'to_year'        => $this->input->post('to_year'),
                'title'          => $this->input->post('title'),
                'description'    => $this->input->post('description'),
                'school'         => $this->input->post('school')
            );
            if($this->Admin_Model->UpdateEducation($data)){
                echo "success";
            }else{
                echo "error";
            }
            
        }

        $data['result'] = '';
        
        // get user data from data base
        if($result = $this->Admin_Model->GetEdication()){
            $data['result'] = $result[0];
        }

        $this->load->view('admin/includes/education', $data);

        // update user data into data base
    }
}
