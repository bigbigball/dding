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
        <h2>注册</h2>
      </div>
    </div>
  </div>
  <div class="container">
  	<form action="" class="register">
  		<input type="text" name="mobile" placeholder="请输入11位手机号码"/>
  		<input type="password" name="password" placeholder="请输入密码"/>
  		<input type="text" name="vcode" placeholder="请输入验证码" class="vcode" />
  		<input  type="button" value="获取验证码" class="btn vcodeBtn">
  		<input type="submit" value="注 册" class="btn btn-a">
  		<p>注册账号即表示您同意丁盯的 <a href="#">服务协议</a></p>
  	</form>
  </div>
  
  <?php require_once('topHeader.php') ?>

</body>
</html>