<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" >
	<!-- viewport meta to reset iPhone inital scale -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $titles ?></title>
  <!-- css3-mediaqueries.js for IE8 or older -->
	<!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->
  <link rel="stylesheet" href="<?php echo base_url().'style/pc/' ?>css/style.css" charset="utf-8" />
</head>
<body>
	<div class="header">
    	<div class="container">
      		<div class="logo">
      			<a href="<?php echo base_url()?>">
        			<img src="<?php echo base_url().'style/pc/' ?>images/logo.png" />
        		</a>
      		</div>
      		<a href="<?php echo base_url() ?>pc/opinion/personal" <?php if(!isset($info['id'])  || ($info['id']==17)) echo "style='display:none'";?> class="btn"> 
			   <img id="ps_avatar" src="<?php echo base_url() ?><?php if(isset($info['photo'])) echo $info['photo']."?time=".mt_rand();?>" />
			</a>
      		<div class="loginbar">
	          <p>
	           <?php if(!isset($info['id']) || ($info['id']==17)) { ?>
	            <a href="<?php echo base_url() ?>pc/user/login">登录</a>
	            |
	            <a href="<?php echo base_url() ?>pc/user/sign">注册</a> 
	            <?php } else { ?>
	            <a href="<?php echo base_url() ?>pc/user/logout">退出</a>
	            <?php } ?>
	          </p>
	        </div>
	        
			<ul class="navbar">
			    <li style="display: none" <?php if($haction == 'home'){?>class="active"<?php }?> >
					<a href="<?php echo base_url()?>">首页</a>
				</li>
				<li id="h_magnetic" <?php if($haction == 'magnetic'){?>class="active"<?php }?> >
					<a href="<?php echo base_url()?>index.php/pc/magnetic">门 磁</a>
				</li>
				<li id="h_doorClock" <?php if($haction == 'lock'){?>class="active"<?php }?> >
					<a href="<?php echo base_url()?>index.php/pc/lock">门 锁</a>
				</li>
				<li id="viewpoint" <?php if($haction == 'opinion'){?>class="active"<?php }?> >
					<a href="<?php echo base_url()?>index.php/pc/opinion">观 点</a>
				</li>
				<li id="h_solutions" <?php if($haction == 'inside'){?>class="active"<?php }?> >
					<a href="<?php echo base_url()?>index.php/pc/inside">智能芯</a>
				</li>
				<li id="h_dding" <?php if($haction == 'dynamic'){?>class="active"<?php }?> >
					<a href="<?php echo base_url()?>index.php/pc/dynamic">丁盯进行时</a>
				</li>
				<li id="download">
					<a>APP下载</a>
				</li>
			</ul>
		</div>
	</div>
	<!-- <div id="shadeLayer"></div> -->
	<!-- <div id="qq_dialog" style="display:none;">
		<iframe frameborder="0" scrolling="no" id="Iframe1" style="position:absolute;z-index:1049;overflow: auto;width:100%;height:100%;" src="test.html">
  		</iframe>	
	</div> -->
	<div class="downloadContent">
    <div class="container pos">
      <p class="title">APP下载</p>
      <p class="notice">丁盯全部产品一个APP搞定</p>
      <p class="notice">Android2.3/iOS6.0及以上系统试用</p>
      <p class="more">注：Android4.3及以上系统支持蓝牙开锁／iOS7.0及以上系统支持摇动开锁</p>
      <img src="<?php echo base_url().'style/pc/' ?>images/code.png" class="code"/>
      <a class="delpos">
          <i class="icon_del"></i>
      </a>
    </div>
  </div>