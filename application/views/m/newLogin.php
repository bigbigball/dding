<!DOCTYPE html>
<html lang="zh-cn">
<head>
  <meta charset="UTF-8" />
  <title>丁盯智能门磁 - 云丁网络技术（北京）有限公司</title>
  <?php require_once('topHeader.php') ?>

</head>
<body class="mobile">
  <div class="userTop">
      <div class="closeBtn">
      </div>
    <ul class="menuNav">
        <li class="active">
          <a href="<?php echo base_url() ?>index.php/opinion/personal?id=<?php if(isset($opinion['user_id'])) echo $opinion['user_id'];?>" >个人中心</a>
        </li>
        <li>
          <a href="<?php echo base_url() ?>index.php/user/logout" >退出账户</a>
        </li>
    </ul>
  </div>
  <div class="header">
    <div class="container">
      <div class="backBtn">
        <span class="line"></span>
        <span class="line"></span>
      </div>
      <div class="logo">
        <h2>登 录</h2>
      </div>
    </div>
  </div>
  <div class="container">
  	<form action="<?php echo base_url() ?>index.php/user/login" class="register">
  		<h2>如您已注册丁盯账号，可直接登录！</h2>
  		<input type="text" name="mobile" placeholder="请输入您的手机号"/>
  		<input type="password" name="repassword" placeholder="请再次输入新密码"/>
  		<p><input type="checkbox">记住我 <span class='right'>忘记密码</span></p>
  		<input type="submit" value="登 录" class="btn btn-a">
  		<input type="button" value="注 册" class="btn btn-b">
  
  	</form>
  </div>
  
  <?php require_once('topHeader.php') ?>

</body>
</html>