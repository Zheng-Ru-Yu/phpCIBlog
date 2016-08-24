<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	class User extends CI_Controller{
		public function __construct(){
			parent::__construct();
			//$this->load->database();如果不配全局数据库这样加载
			$this->load->model('user_model');
		}
		public function index(){//默认调用函数
		}
		
		public function reg(){//加载注册页面
		$this->load->view('reg.php');
		}
		public function do_reg(){//加载注册页面
			$name=$this->input->post('username');
			$pass=$this->input->post('pass');
			$result=$this->user_model->insert($name,$pass);
				if($result){
					redirect('user/login');
				}else{
					redirect('user/reg');
					
				}
			}
	
		public function login(){
			$this->load->view('login.php');
		}
		public function do_login(){
			$name=$this->input->post('username');
			$pass=$this->input->post('pass');
			$result=$this->user_model->get_name_by_pass($name,$pass);
			
			if($result){
					//文件session
					$arr=array(
					'id'=>$result->userid,
					'name'=>$result->name,
					);
					$this->session->set_userdata($arr);
						redirect('blog/index');//调到blog控制器
					}else{
						echo "false";
						
					}
					
		}
	
	}



?>