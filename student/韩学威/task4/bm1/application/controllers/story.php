<?php
        class Story extends CI_Controller {
            public function __construct(){
                parent::__construct();
                $this->load->model('story_model');
            }
            public function publish(){
                $this->load->view('new.php');
            }
            public function add(){
                $data['title'] = $_POST['title'];
                $data['content'] = $_POST['content'];
                $data['author'] = $_SESSION['username'];
                $data['time'] =  date("Y-m-d h:i:sa");
                $this->story_model->add_story($data);
                redirect('index/home');
            }
            public function show($id){
                $data['story'] = $this->story_model->show_story($id);
                $this->load->model('comm_model');
                $data['comment'] = $this->comm_model->list_comment($id);
                $this->load->view('story.php',$data);
            }
            public function edit(){
                $id = $_GET['id'];
                $data['story'] = $this->story_model->show_story($id);
                $this->load->view('edit.php',$data);
            }
        }