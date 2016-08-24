
<meta charset="UTF-8">
<base href="<?php echo site_url();?>" target=""/><!-- 基础路径 -->
<link rel="stylesheet" href="css/1.css" type="text/css" media="screen" title="no title" charset="utf-8"/>
<form action="user/do_reg" method="post">
	用户名:<input type="text" name="username" value="" id="username"/><br />
	密&nbsp;码:<input type="password" name="pass" value="" id="some_name"/><br />
	确认密码:<input type="password" name="pass1" value="" id="some_name"/><br />
	<input type="submit" name="sub" value="注册" id="sub"/>
	<input type="reset" name="rst" value="重置" id="rst"/>
</form>