<meta charset='UTF-8'>
<?php
echo $this->session->userdata('name').'已登陆';
?>
<base href="<?php echo site_url();?>" target=""/>
<?php foreach($blog as $v){	?>
	<h2><a href="blog/view/<?php echo $v->blogid?>">标题：<?php echo $v->title?></a>|<a href="blog/update/<?php echo $v->blogid?>">修改</a>|<a href="blog/del/?id=<?php echo $v->blogid?>">删除</a></h2>
	<li><?php echo $v->time?></li>
	<p><?php echo $v->content?></p>
	<hr />
	
<?php } ?>