<!DOCTYPE html>
<html lang="zh-cn">
<head>
  <meta charset="UTF-8" />
  <title>丁盯智能门磁 - 云丁网络技术（北京）有限公司</title>
  <?php require_once('topHeader.php') ?>
</head>
<body class="mobile">
  <?php require_once('header.php') ?>
  <div class="container">
    <div class="content">
      <div class="pcintro">
        <p class="avatar">
          <img src="<?php echo base_url() ?><?php if(isset($info['photo'])) echo $info['photo'];?>" />
        </p>
        <h2><?php if(isset($info['user_name']) && !empty($info['user_name'])) {echo $info['user_name'];} else {echo $info['mobile'];}?></h2>
        <p><?php if(isset($info['brief']) && !empty($info['brief'])) {echo $info['brief'];} else {echo '暂无';}?></p>
        <p>积分<?php if(isset($info['integral']) && !empty($info['integral'])) {echo $info['brief'];} else {echo '0';}?>丁币</p>
        <a href="<?php echo base_url() ?>index.php/pc/opinion/edit" class="edit"></a>
      </div>
      <div class="show">
        <p>发表你对产品的观点吧，下一位意见领袖就是你！</p>
        <ul class="prolist">
          <li>
            <div class="p1">
              <p class="ab">
                <a href="">了解产品></a>
                <span>此设备尚未购买或未被绑定</span>
              </p>
            </div>
            <h3>丁盯指纹锁</h3>
          </li>
          <li>
            <div class="p2">
              <p class="ab">
               <?php if(isset($published) && $published){?>
                <a href="<?php echo base_url() ?>pc/opinion/myop"><span>您已发表观点</span></a>
                <span class="chat">追问（<?php if(isset($count)) echo $count;?>条）</span>
                <?php } else {?>
                <a href="/pc/opinion/myopmf">写写看></a>
                <span>您尚未发表观点</span>
                <?php }?>
              </p>
            </div>
            <h3>丁盯门磁</h3>
          </li>
          <li>
            <div class="p3">
              <p class="ab">
                <a href="<?php echo base_url() ?>pc/lock">了解产品></a>
                <span>此设备尚未购买或未被绑定</span>
              </p>
            </div>
            <h3>丁盯密码锁</h3>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <?php require_once('footer.php') ?>
  
  <?php require_once('topHeader.php') ?>

</body>
</html>