<?php
        class Comm extends CI_Controller {
            public function __construct(){
            parent::__construct();
            $this->load->model('comm_model');
                }
            public function add(){
                $data['key'] = $_POST['id'];
                $data['content'] = $_POST['content'];
                $data['username'] = $_POST['username'];
                $data['time'] =  date("Y-m-d H:i:s",time());
                $this->comm_model->add_comment($data);
            }
        }