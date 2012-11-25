<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
	<title><?php echo ($title); ?></title>
</head>
<body>
<form action="__URL__/add" method="post" onsubmit="return check()">
	<legend>用户注册</legend>
	用户名：<input type='text' name="username" id="username"/>
	密码:<input type='password' name="password" id="password1"/>
	确认密码：<input type='password' name="repassword" id="password2"/>
	<button type='submit'>提交</button>
</form>
	<hr/>
	<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>Id:<?php echo ($vo["id"]); ?>---用户名：<?php echo ($vo["username"]); ?><span><a href="__URL__/edit?id=<?php echo ($vo["id"]); ?>">编辑</a></span><span><a href="__URL__/delete?id=<?php echo ($vo["id"]); ?>"> 删除</a></span></li><?php endforeach; endif; else: echo "" ;endif; ?>
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