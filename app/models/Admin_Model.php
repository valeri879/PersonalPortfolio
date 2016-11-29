<?php 
class Admin_Model extends CI_Model {

        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
        }

        public function InsertData($data)
        {
                $this->db->insert('user', $data);                //insert data 
        }

        public function GetUserInfo()
        {
                $data   = array();
                $result  = $this->db->get('user')->result_array();
                return $result;
        }

        public function UpdateUser($data)
        {
                $this->db->where('id', $data['UserId']);

                unset($data['UserId']);

                if($this->db->update('user', $data)){
                        return true;
                }
                return false;
        }


        //////////////////////////////////////////////////
        // education
        //////////////////////////////////////////////////
        public function InsertEducation($data)
        {
               $this->db->insert('education', $data);
        }
        public function GetEdication()
        {
                $data   = array();
                $result  = $this->db->get('education')->result_array();
                return $result;
        }

        public function UpdateEducation($data)
        {
                $this->db->where('id', $data['UserId']);

                unset($data['UserId']);

                if($this->db->update('education', $data)){
                        return true;
                }
                return false;
        }
} 