<meta charset="UTF-8"/>
<base href="<?php echo site_url()?>">
<form action="blog/do_update" method="post" accept-charset="utf-8">
  	<input type="hidden" name="hid" value="<?php echo $up->blogid?>"/>
  	标题：<input type="text" name="title" value="<?php echo $up->title?>" id="some_name"/><br />	
  	内容：<textarea name="content" rows="10" cols="30"><?php echo $up->content?></textarea>
	 <input type="submit" value="提交" name="sub"/>
</form>
<?php
?>