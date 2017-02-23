<?php
    class Index extends CI_Controller {
        public function __construct(){
            parent::__construct();
        }
        public function home(){
            $this->load->model('story_model');
            $data['story']= $this->story_model->list_story();
            $this->load->view('index.php',$data);
        }
    }
?>