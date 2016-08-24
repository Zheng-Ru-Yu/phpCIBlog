<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	class Blog extends CI_Controller{
		public function __construct(){
			parent::__construct();
			//$this->load->database();如果不配全局数据库这样加载
			$this->load->model('blog_model');
	}
		
	public function index(){
		$rs=$this->blog_model->get_article();
		$arr['blog']=$rs;
		$this->load->view('index.php',$arr);
		
	}
	
	
	public function del(){
		$id=$this->input->get('id');//普通的get提交
		//$id=$this->uri->segment(3);
		$rs=$this->blog_model->del_attr($id);
		if($rs){
			redirect('blog/index');
			//$this->index; 
		}else{
			echo "删除失败";
		}
		
		
	}
	
	
	public function update(){
		$id=$this->uri->segment(3);//restful提交
		$rs=$this->blog_model->update_attr($id);
		$arr['up']=$rs;
		if($rs){
			$this->load->view('update.php',$arr);
			//$this->index; 
		}else{
			echo "更新失败";
		}
		
		
	}
	public function do_update(){
		$id=$this->input->post('hid');
		$title=$this->input->post('title');
		$content=$this->input->post('content');
		$result=$this->blog_model->update_id($id,$title,$content);
	if($result){
		redirect('blog/index');
	}else{
		echo "更新失败";
	}
	}
	
	public function view(){
		$id=$this->uri->segment(3);
		$rs=$this->blog_model->up_sel($id);
		if($rs){
			$result=$this->blog_model->update_attr($id);
		}
		else {
			echo "更新失败";
		}
		$arr['blog']=$result;
		$this->load->view('view.php',$arr);
		
	}
		
		
		
	}
?>	