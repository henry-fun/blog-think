<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>博客后台</title>
	<link rel="stylesheet" type="text/css" href="/blog/Public/Css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="/blog/Public/Css/style.css" />
	<script type="text/javascript" src="/blog/Public/Js/js.js"></script>
</head>
<body>
<div class="login">
	<div>
		<a href="/" title="博客首页" class="logo"></a>
	</div>
	<div class="form-wrap">
		<form action="<?php echo U(GROUP_NAME.'/Login/loginCheck');?>" method="post"  class="form">
			<div class="form-group">
				<label for="exampleInputEmail1">用户名：</label>
			    <input type="text" name='username' class="form-control" placeholder="用户名或邮箱">
			</div>
			<div class="form-group">
			    <label for="exampleInputPassword1">密码：</label>
			    <input type="password" name='password' class="form-control"  placeholder="用户密码">
			</div>
			<div class="form-group">
				<label for="exampleInputEmail1">验证码：</label>
			    <input type="text" name='verify' class="form-control" placeholder="验证码" style="width: 81%">
			    <img src= '__GROUP__/Login/verify/'  onclick="fleshVerify()" id="verifyImg" style="cursor: pointer" />
			</div>
			<div class="checkbox">
			    <label>
			      <input type="checkbox"> 记住自己
			    </label>
			</div>
			
			<button type="submit" class="btn btn-lg btn-success">点击登陆</button>
		</form>
		

	</div>
</div>
<script type="text/javascript">
	function fleshVerify() {
		// 重载验证码
		var time = new Date().getTime();
		document.getElementById('verifyImg')
			.src = '__GROUP__/Login/verify/'+time;
	}
</script>
</body>
</html>