<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
	<title><?php echo ($title); ?></title>
</head>
<body>
<form action="__URL__/update" method="post" onsubmit="return check()">
	<legend><?php echo ($title); ?></legend>
	用户名：<input type='text' name="username" id="username" value="<?php echo ($list["username"]); ?>"/>
	密码:<input type='password' name="password" id="password1" value="<?php echo ($list["password"]); ?>"/>
	确认密码：<input type='password' name="repassword" id="password2" value="<?php echo ($list["password"]); ?>"/>
	<input type="hidden" value="<?php echo ($list["id"]); ?>" name="id" />
	<button type='submit'>提交</button>
</form>
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