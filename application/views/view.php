	<meta charset='UTF-8'>
	<base href="<?php echo site_url();?>" target=""/>
	<h2>标题：<?php echo $blog->title?></h2>
	<li><?php echo $blog->time?></li>
	<p><?php echo $blog->content?></p>
	<span>访问量：<?php echo $blog->hit?></span>