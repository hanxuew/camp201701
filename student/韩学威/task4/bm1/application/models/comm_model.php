<?php
        class Comm_model extends CI_Model{
            public function __construct(){
                parent::__construct();
            }
            const TBL = "comment";
            public function add_comment($data){
                return $this->db->insert(self::TBL,$data);
            }
            public function list_comment($id){
                $this->db->order_by('id');
                $query = $this->db->get_where('comment ', array('key' => $id));
                return $query->result_array();
            }
        }
?>