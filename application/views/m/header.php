  <div class="menuTop">
    <div class="closeBtn">
    </div>
    <?php require_once('menu.php') ?>
    <div class="follow">
      <a href="http://m.weibo.cn/u/5206002138"><img src="<?php echo base_url() ?>/static/mobile/images/wblogo.png" alt=""></a>
      <img src="<?php echo base_url() ?>/static/mobile/images/wxlogo.png" alt="">
    </div>
  </div>
  <div class="userTop">
    <div class="closeBtn">
    </div>
    <ul class="menuNav">
      <li class="active">
        <a href="<?php echo base_url() ?>pc/opinion/personal?id=<?php if(isset($opinion['user_id'])) echo $opinion['user_id'];?>" >个人中心</a>
      </li>
      <li>
        <a href="<?php echo base_url() ?>pc/user/logout" >退出账户</a>
      </li>
    </ul>
  </div>
  <div class="header">
    <div class="container">
      <div class="menuBtn">
        <span class="line"></span>
        <span class="line"></span>
        <span class="line"></span>
      </div>
      <div class="logo">
        <a href="/"><img src="<?php echo base_url()?>static/mobile/images/logoTop.png" /></a>
      </div>
      <div class="avatar">
        <a href="<?php echo base_url() ?>pc/opinion/personal" <?php  if(!isset($info['id'])) echo "style='display:none'";?> class="user btn">
          <img src="<?php echo base_url() ?><?php if(isset($info['photo'])) echo $info['photo'];?>" />
        </a>
        <?php if(!isset($info['id'])) { ?>
        <a href="<?php echo base_url() ?>pc/user/login" class="btn">
          <img src="/static/mobile/images/avatar.png" />
        </a>
        <?php } ?>
      </div>
<!--       <ul class="loginbar">
        <?php if(!isset($info['id'])) { ?>
        <li>
          <a style="cursor:pointer;" href="<?php echo base_url() ?>index.php/user/login" >登录</a>
        </li>
        <li>
          <a style="cursor:pointer;" href="<?php echo base_url() ?>index.php/user/sign" >注册</a>
        </li>
        <?php } ?>
      </ul> -->
    </div>
  </div>