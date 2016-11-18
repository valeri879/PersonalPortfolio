<?php 
class Admin_Model extends CI_Model {

        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
        }

        public function InsertData($data=false)
        {
                if($this->db->insert('user', $data)){
                        return $this->GetUserData($this->db->insert_id());
                }
                return FALSE;
        }

        public function GetUserData($userID=false)
        {
                $this->db->where('id',$userID);
                return $this->db->get('user')->result_array();
        }
} 