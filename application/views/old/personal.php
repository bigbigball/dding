<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <title>丁盯智能门磁 - 云丁网络技术（北京）有限公司</title>
  <link rel="icon" href="favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="<?php echo base_url() ?>favicon.ico" type="image/x-icon" />
  <link href="<?php echo base_url().'static/' ?>style/style.css" rel="stylesheet" charset="utf-8" />
</head>
<body>
  <div class="header">
    <div class="container clearfix">
      <div class="logo">
        <img src="<?php echo base_url().'static/' ?>images/logo.png" />
      </div>
      <a href="<?php echo base_url() ?>opinion/personal" <?php if(!isset($info['id'])) echo "style='display:none'";?> class="btn">
        <img src="<?php echo base_url() ?><?php if(isset($info['photo'])) echo $info['photo']."?time=".mt_rand();?>" />
      </a>

      <ul class="loginbar">
      <?php if(!isset($info['id'])) { ?>
        <li>
          <a style="cursor:pointer;" href="<?php echo base_url() ?>user/login" >登录</a>
        </li>
        <li>
          <a style="cursor:pointer;" href="<?php echo base_url() ?>user/sign" >注册</a>
        </li>
      <?php } else { ?>
        <li>
          <a style="cursor:pointer;" href="<?php echo base_url() ?>user/logout" >退出</a>
        </li>
      <?php } ?>
      </ul>

       <ul class="navbar">
        <li>
          <a href="<?php echo base_url() ?>" >首 页</a>
        </li>
        <li>
          <a href="<?php echo base_url() ?>guide/index" >咨询中心</a>
        </li>
        <li class="active">
          <a href="<?php echo base_url() ?>opinion/index">观 点</a>
        </li>
        <li>
          <a href="<?php echo base_url() ?>about/index" >关于我们</a>
        </li>
        <li>
          <a href="<?php echo base_url() ?>download/index" >APP下载</a>
        </li>
        <li>
          <a href="<?php echo base_url() ?>news/index" >口碑</a>
        </li>
      </ul>
    </div>
  </div>
  <div class="container">
    <div class="location">
      <span>当前位置<i></i>个人中心</span>
    </div>
    <div class="content">
      <div class="pcintro">
        <p class="avatar">
          <img src="<?php echo base_url() ?><?php if(isset($info['photo'])) echo $info['photo']."?time=".mt_rand();?>" />
        </p>
        <h2><?php if(isset($info['user_name']) && !empty($info['user_name'])) {echo $info['user_name'];} else if (isset($info['mobile'])) {echo $info['mobile'];}?></h2>
        <p style="word-wrap: break-word;word-break: normal; margin-left: 20px;margin-right: 20px;"><?php if(isset($info['brief']) && !empty($info['brief'])) {echo $info['brief'];} else {echo '暂无';}?></p>
        <p>积分<?php if(isset($info['integral']) && !empty($info['integral'])) {echo $info['brief'];} else {echo '0';}?>丁币</p>
        <a href="<?php echo base_url() ?>opinion/edit" class="edit"></a>
      </div>
      <div class="show">
        <p>发表你对产品的观点吧，下一位意见领袖就是你！</p>
        <ul class="prolist">
          <li>
            <div class="p1">
              <a href=""></a>
                <p class="ab">
                  <a>了解产品></a>
                  <span>此设备尚未购买或未被绑定</span>
                </p>
              
            </div>
            <h3>丁盯指纹锁</h3>
          </li>
          <li>
            <div class="p2">
              <?php if(isset($published) && $published){?>
              <a href="<?php echo base_url() ?>opinion/myop"></a>
              <p class="ab">
                <span>您已发表观点</span>
                <span class="chat">追问（<?php if(isset($count)) echo $count;?>条）</span>
              </p>
              <?php } else {?>
              <a href="/opinion/myopmf"></a>
              <p class="ab">
                <a>写写看></a>
                <span>您尚未发表观点</span>
              </p>
              <?php }?>
              <!-- <p class="ab">
               <?php if(isset($published) && $published){?>
                <a href="<?php echo base_url() ?>opinion/myop"><span>您已发表观点</span></a>
                <span class="chat">追问（<?php if(isset($count)) echo $count;?>条）</span>
                <?php } else {?>
                <a href="/opinion/myopmf">写写看></a>
                <span>您尚未发表观点</span>
                <?php }?>
              </p> -->
            </div>
            <h3>丁盯门磁</h3>
          </li>
          <li>
            <div class="p3">
              <a href=""></a>
              <p class="ab">
                <a>了解产品></a>
                <span>此设备尚未购买或未被绑定</span>
              </p>
            </div>
            <h3>丁盯密码锁</h3>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="footer">
    <div class="container">
      <p>
        <a href="" class="btn">
          <img src="<?php echo base_url().'static/' ?>images/f_down.png" />
        </a>
        <a href="" class="btn">
          <img src="<?php echo base_url().'static/' ?>images/f_qq.png" />
        </a>
        <a href="" class="btn">
          <img src="<?php echo base_url().'static/' ?>images/f_wx.png" />
        </a>
        <a href="" class="btn">
          <img src="<?php echo base_url().'static/' ?>images/f_wb.png" />
        </a>
      </p>
      <p class="link">
        <a href="javascript:;">咨询中心</a>
        |
        <a href="javascript:;">售后服务</a>
        |
        <a href="javascript:;">联系我们</a>
        |
        <a href="javascript:;">
          服务邮箱：
          <span>service@dding.net</span>
        </a>
      </p>
      <p class="right">Copyright © 2014  丁盯智能  京ICP备14039007号-1</p>
    </div>
  </div>
  <script type="text/javascript" src="<?php echo base_url().'static/' ?>script/jquery-1.7.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url().'static/' ?>script/script.js"></script>
</body>
</html>
