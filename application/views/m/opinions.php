<!DOCTYPE html>
<html lang="zh-cn">
<head>
  <meta charset="UTF-8" />
  <title>丁盯智能门磁 - 云丁网络技术（北京）有限公司</title>
  <?php require_once('topHeader.php') ?>
</head>
<body class="mobile" data-menu="2">
  <?php require_once('header.php') ?>
  <div class="container">
    <ul class="otab">
      <li>密码锁</li>
      <li>指纹码锁</li>
      <li class="active">门磁</li>
    </ul>
    <div class="points content ">
      <div class="title">
        <h4>产品观点</h4>
      </div>
      <ul class="listview">
        <?php foreach($allopinion as $opinion){?>
        <li class="li-thumb">
          <img src="<?php echo base_url() ?><?php if(isset($opinion['photo'])) echo $opinion['photo'];?>" />
          <h3>
            <?php if(isset($opinion['user_name']) && $opinion['user_name']) {echo $opinion['user_name'];} else {echo $opinion['mobile'];}?>
            
          </h3>
          <p class="pcoin">
           
            <img src="<?php echo base_url()?>static/images/jz.png" class="jz_img">
            <img src="<?php echo base_url()?>static/images/coin_bg.png" style="margin:0 3%;">
            <span class="tcoin"  style="top: 10%"><span><?php if(isset($opinion['integral'])) {echo $opinion['integral'];} else echo '0';?></span>丁币
            <img src="<?php echo base_url()?>static/images/coin.png" style="height: 11px;">
          </span>
        </p>
        <div class="pro-point">
          <div class="info">
            <a href="<?php echo base_url() ?>index.php/pc/opinion/op?id=<?php if(isset($opinion['id'])) echo $opinion['id'];?>" >
              <div class='ctldiv' style="color: black; overflow: hidden;">
                  <?php if (isset($opinion['view'])) {
                    $opinion['view'] = ltrim(html_entity_decode(strip_tags($opinion['view']), ENT_QUOTES, 'utf-8'));
                    if (mb_strlen($opinion['view'], 'utf-8') <= 66) {
                        echo $opinion['view'];
                    } else {
                        echo mb_substr($opinion['view'], 0, 66, 'utf-8') . '...';
                    }
                  }?>
              </div>
            </a>
          </div>
          <a href="<?php echo base_url() ?>index.php/pc/opinion/op?id=<?php if(isset($opinion['id'])) echo $opinion['id'];?>#comment" >
            <div class="aq">追问（共<?php if(isset($opinion['count'])) echo $opinion['count'];?>条）</div>
          </a>
        </div>
      </li>
      <?php }?>
    </ul>
    <?php if($count > 10)include('page_op.php');?>
  </div>
  </div>
  <?php require_once('footer.php') ?>
  
  <?php require_once('topHeader.php') ?>

</body>
</html>
