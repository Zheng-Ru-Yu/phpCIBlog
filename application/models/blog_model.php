<?php defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Blog_model extends CI_Model{
		// public function insert($name,$pass){
// 			
			// $data=array(
				// 'name'=>$name,
				// 'pass'=>$pass,
			// );
// 			
			// $query=$this->db->insert('user',$data);
			// return $query;
		// }
// 		 
		public function get_article(){
			$query=$this->db->get('blog');
			return $query->result();
		}
		
		public function del_attr($id){
			$query=$this->db->delete('blog',array('blogid'=>$id));
			return $query;
			
		}
		
		public function update_attr($id){	
			$query=$this->db->get_where('blog',array('blogid'=>$id));
			return $query->row();
			//$query=$this->db->delete('blog',array('blogid'=>$id));
			//return $query;
			
		}
		
			public function update_id($id,$title,$content){
				$d=date('Y').'-'.date('m').'-'.date('d');
				$data=array(
					'title'=>$title,
					'content'=>$content,
					'time'=>$d,
					'blogid'=>$hid
					
				);
			$this->db->where('blogid',$id);
			$query=$this->db->update('blog',$data);
			return $query;
			//$query=$this->db->delete('blog',array('blogid'=>$id));
			//return $query;
			
		}
		public function up_sel($id){
			$this->db->set('hit','hit+1',false);
			$this->db->where('blogid',$id);
			$query=$this->db->update('blog',$data);
			return $query;
			
		}
		
		
		
		
		
		
		
		}
		
	
?>