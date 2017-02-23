<?php
    class User_model extends CI_Model{
        public function __construct(){
            parent::__construct();
            //手动调用数据库
            $this->load->database();
        }
        const TBL = "user";
        public function add ($data){
            return $this->db->insert(self::TBL,$data);
        }
        public function fetch ($username,$password){
            $query =  $this->db->get_where(self::TBL, array('username' => $username,'password'=>$password));
            return $query->num_rows();
        }
    }