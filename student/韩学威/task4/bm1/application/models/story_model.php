<?php
        class Story_model extends CI_Model{
                public function __construct(){
                    parent::__construct();
                    //手动调用数据库
//                    $this->load->database();
                }
                const TBL = "story";
                public function add_story($data){
                    return $this->db->insert(self::TBL,$data);
                }
                public function list_story(){
                    $this->db->order_by('id', 'DESC');
                    $query  = $this->db->get(self::TBL );
                    return $query->result_array();
                }
                public function show_story($id){
//                    $query = $this->db->get(self::TBL,$id);
                    $query = $this->db->get_where(self::TBL, array('id' => $id));
                    return $query->result_array();
                }
                public function show_list($username){
                    $query = $this->db->get_where(self::TBL, array('author' => $username));
                    return $query->result_array();
                }
        }
?>