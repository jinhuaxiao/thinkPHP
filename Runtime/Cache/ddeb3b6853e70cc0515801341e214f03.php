<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title><?php echo ($title); ?></title>
	<link href="../Public/css/bootstrap.css" rel="stylesheet" media="screen">
	<style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }
    </style>
</head>
<body>

<div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="__URL__">ERP用户管理</a>
          <div class="nav-collapse collapse">
            <p class="navbar-text pull-right">
              Logged in as <a href="#" class="navbar-link">Username</a>
            </p>
            <ul class="nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#contact">Contact</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>	
    <div class="container-fluid">

    	<div class="span6">
			<form  action="__URL__/update" class="form-horizontal"  method="post" onsubmit="return check()">
				<legend>修改用户信息</legend>
				<div class="control-group" >
					<label class="control-label" for="username">用户名</label>
					<div class="controls"><input type='text' name="username" id="username" value="<?php echo ($list["username"]); ?>"/></div>
				</div>
				<div class="control-group" >
					<label class="control-label" for="password">密码</label>
				    <div class="controls"><input type='password' name="password" id="password1" value="<?php echo ($list["password"]); ?>"/></div>
				</div>
				<div class="control-group" >
					<label class="control-label" for="repassword">确认密码</label>
				    <div class="controls"><input type='password' name="repassword" id="password2" value="<?php echo ($list["password"]); ?>"/></div>
				</div>
				<input type="hidden" value="<?php echo ($list["id"]); ?>" name="id" />
				<div class="control-group">
					<div class="controls">
						<button type='submit' class='btn'>更新</button>
					</div>
				</div>
			</form>
    	</div>
</body>
<script>
String.prototype.Trim = function() { 
	return this.replace(/(^\s*)|(\s*$)/g, ""); 
} 
function check () {
	var username = document.getElementById('username').value;
	var password1 = document.getElementById('password1').value;
	var password2 = document.getElementById('password2').value;
	if(username.Trim() == ''){
		alert('用户名不能为空');
		return false;
	}
}
</script>
</html>