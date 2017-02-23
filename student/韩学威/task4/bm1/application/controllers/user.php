<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
    }
	public function reg()
    {
		$this->load->view('register.php');
	}
    public function register(){
        $data['username'] = $_POST['username'];
        $data['password'] = $_POST['password'];
        if($this->user_model->add($data)){
            $this->session->set_userdata($data);
        }
        echo "<script>history.go(-2)</script>";
    }
    public function log(){
        $this->load->view('login.php');
    }
    public function login(){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $row = $this->user_model->fetch($username,$password);
        $user = array(
            'username'=>$username,
            'password'=>$password
        );
        if($row>0){
            $this->session->set_userdata($user);
        }else{
            echo "登录失败";
        }
    }
    public function admin(){
        $username = $_SESSION['username'];
        $this->load->model('story_model');
        $data['story'] = $this->story_model->show_list($username);
        $this->load->view('admin.php',$data);
    }
    public function logout($username){
        session_unset($username);
        $this->log();
    }
}