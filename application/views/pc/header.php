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
	<link rel="stylesheet" href="<?php echo base_url().'style/pc/' ?>css/common.css" charset="utf-8" />
	<?php if($haction == 'apartment'){?>
	<link rel="stylesheet" href="<?php echo base_url().'style/pc/' ?>css/apartment.css" charset="utf-8" />
	<?php }?>
  <script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?9d8d43d99ad1e48c0faa87b90acfc184";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
  
  
</head>
<body>
	<div class="header-box"></div>
	<div class="header">
		<div class="header-bg"></div>
		<div class="container">
			<a class="logo" href="<?php echo base_url()?>">
				<img src="<?php echo base_url().'style/pc/' ?>images/logo.png">
			</a>
			<p class="login-bar">
				<?php if(!isset($info['id']) || ($info['id']==17)) { ?>
					<a href="<?php echo base_url() ?>pc/user/login">登 录</a>
					<span>|</span>
					<a href="<?php echo base_url() ?>pc/user/sign">注 册</a>
				<?php } else { ?>
					<a href="<?php echo base_url() ?>pc/user/logout">退 出</a>
				<?php } ?>
			</p>
			<ul class="nav-bar">
				<li>
					<a <?php if($haction == 'magnetic'){?>class="active"<?php }?> href="<?php echo base_url()?>index.php/pc/magnetic">智能门磁</a>
				</li>
				<li>
					<a <?php if($haction == 'lock'){?>class="active"<?php }?> href="<?php echo base_url()?>index.php/pc/lock">安全门锁</a>
				</li>
				<li>
					<a <?php if(isset($solution)){?>class="active"<?php }?> href="javascript:;">解决方案</a>
					<ul class="sub-nav">
						<li>
							<a href="<?php echo base_url()?>index.php/pc/apartment" <?php if($haction == 'apartment'){?>class="active"<?php }?>>公寓门锁</a>
						</li>
						<li>
							<a href="<?php echo base_url()?>index.php/pc/inside" <?php if($haction == 'inside'){?>class="active"<?php }?>>智能芯</a>
						</li>
					</ul>
				</li>
				<li>
					<a <?php if($haction == 'opinion'){?>class="active"<?php }?> href="<?php echo base_url()?>index.php/pc/opinion">观 点</a>
				</li>
				<li>
					<a href="javascript:;" id="downloadBtn">APP下载</a>
				</li>
			</ul>
		</div>
	</div>
	<!-- <div id="shadeLayer"></div> -->
	<!-- <div id="qq_dialog" style="display:none;">
		<iframe frameborder="0" scrolling="no" id="Iframe1" style="position:absolute;z-index:1049;overflow: auto;width:100%;height:100%;" src="test.html">
  		</iframe>	
	</div> -->
	<div class="download-area" id="downloadArea">
		<div class="container">
			<h3>APP下载</h3>
			<p class="notice">丁盯全部产品一个APP搞定</p>
			<p class="notice">Android2.3/iOS6.0及以上系统试用</p>
			<p class="more">注：Android4.3及以上系统支持蓝牙开锁／iOS7.0及以上系统支持摇动开锁</p>
			<img src="<?php echo base_url().'style/pc/' ?>images/code.png" class="code">
			<a class="close-btn" href="javascript:;" id="closeDlBtn"></a>
		</div>
	</div>