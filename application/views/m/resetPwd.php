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
        <h2>找回密码</h2>
      </div>
    </div>
  </div>
  <div class="container">
  	<form action="" class="register">
      <p class="tip">系统已发送一条短信到188XXXX0001,<br/>请输入短信验证码</p>

  		<input type="text" name="mobile" placeholder="请输入验证码"/>
      <p class="resend"><a href="#">重发短信验证码</a></p>
  		
  		<input type="submit" value="下一步" class="btn btn-a">
  
  	</form>
  </div>
  
  <?php require_once('topHeader.php') ?>

</body>
</html>