<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<title>丁盯智能门磁 - 云丁网络技术（北京）有限公司</title>
<link rel="icon" href="favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="<?php echo base_url() ?>favicon.ico"
	type="image/x-icon" />
<link href="<?php echo base_url().'static/' ?>style/style.css"
	rel="stylesheet" charset="utf-8" />
</head>
<body>
	<div class="header">
		<div class="container">
			<div class="logo">
				<img src="<?php echo base_url().'static/' ?>images/logo.png" />
			</div>

			<a href="<?php echo base_url() ?>opinion/personal" <?php if(!isset($info['id'])) echo "style='display:none'";?> class="btn"> 
			   <img src="<?php echo base_url() ?><?php if(isset($info['photo'])) echo $info['photo']."?time=".mt_rand();?>" />
			</a>

			<ul class="loginbar">
              <?php if(!isset($info['id'])) { ?>
             <li>
                <a style="cursor: pointer;" href="<?php echo base_url() ?>user/login">登录</a>
             </li>
			 <li>
			    <a style="cursor: pointer;" href="<?php echo base_url() ?>user/sign">注册</a>
			 </li>
             <?php } else { ?>
             <li>
                <a style="cursor: pointer;" href="<?php echo base_url() ?>user/logout">退出</a>
             </li>
             <?php } ?>
           </ul>

			<ul class="navbar">
				<li><a href="<?php echo base_url() ?>">首 页</a></li>
				<li><a href="<?php echo base_url() ?>guide/index">咨询中心</a></li>
				<li class="active"><a href="<?php echo base_url() ?>opinion/index">观
						点</a></li>
				<li><a href="<?php echo base_url() ?>about/index">关于我们</a></li>
				<li><a href="<?php echo base_url() ?>download/index">APP下载</a></li>
				<li><a href="<?php echo base_url() ?>news/index">口碑</a></li>
			</ul>
		</div>
	</div>
	<div class="container">
		<div class="location">
			<span> <a href="<?php echo base_url() ?>opinion/index">观点</a> <i></i>丁盯门磁
			</span>
		</div>
		<div class="points content ">
			<div class="title">
				<h4>丁盯门磁</h4>
			</div>
			<ul class="photoWall">
      <?php for($i=0;$i<12;$i++){?>
        <li><img
					src="<?php echo base_url() ?><?php if(isset($allopinion[$i]) && isset($allopinion[$i]['photo'])) echo $allopinion[$i]['photo'];?>">
					<div class="photo_info">
						<h1><?php if(isset($allopinion[$i]) && isset($allopinion[$i]['user_name']) && $allopinion[$i]['user_name']) {echo $allopinion[$i]['user_name'];} else if(isset($allopinion[$i])) {echo $allopinion[$i]['mobile'];}?></h1>
						<p>积分：<?php if(isset($allopinion[$i]) && isset($allopinion[$i]['integral'])) {echo $allopinion[$i]['integral'];} else echo '0';?>丁币</p>
						<p><?php if(isset($allopinion[$i]) && isset($allopinion[$i]['brief'])) {echo $allopinion[$i]['brief'];}?></p>
					</div></li>
        <?php }?>
      </ul>
			<div class="title">
				<h4>产品观点</h4>
			</div>
			<ul class="listview">
      <?php foreach($allopinion as $opinion){?>
        <li class="li-thumb"><img
					src="<?php echo base_url() ?><?php if(isset($opinion['photo'])) echo $opinion['photo'];?>" />
					<div class="div_coin pb10 ml112">
						<span class="name"><?php if(isset($opinion['user_name']) && $opinion['user_name']) {echo $opinion['user_name'];} else {echo $opinion['mobile'];}?></span>
						<span class="tcoin"> <img
							src="<?php echo base_url()?>static/images/jz.png" class="jz_img">
							<img src="<?php echo base_url()?>static/images/coin_bg.png"
							class="line_img">
              <?php if(isset($opinion['integral'])) {echo $opinion['integral'];} else echo '0';?>丁币
              <img src="<?php echo base_url()?>static/images/coin.png"
							style="height: 11px;">
						</span>
					</div>
					<div class="pro-point">
						<div class="info">
							<a
								href="<?php echo base_url() ?>opinion/op?id=<?php if(isset($opinion['id'])) echo $opinion['id'];?>"
								target="_blank">
								<div class='ctldiv' style="color: black; overflow: hidden;">
			  
		      <?php
        if (isset($opinion['view'])) {
            static $charset = 'utf-8'; // 编码，根据自己的修改，不过一般都是utf-8吧
            $tail = '...';
            // 先strip_tags()去除html标签，再html_entity_decode()把html实体转成字符，ltrim是去除左边所有空格
            $opinion['view'] = ltrim(html_entity_decode(strip_tags($opinion['view']), ENT_QUOTES, 'utf-8'));
            if (mb_strlen($opinion['view'], $charset) <= 128) {
                echo $opinion['view'];
            } else {
                echo mb_substr($opinion['view'], 0, 128, $charset) . $tail;
            }
        }
        ?>
			   
			  </div>
							</a>
						</div>
						<a
							href="<?php echo base_url() ?>opinion/op?id=<?php if(isset($opinion['id'])) echo $opinion['id'];?>#comment"
							target="_blank">
							<div class="aq">追问（共<?php if(isset($opinion['count'])) echo $opinion['count'];?>条）</div>
						</a>
					</div></li>
        <?php }?>
      </ul>
	<?php if($count > 10)include('page_op.php');?>
    </div>
		<div class="side content">
			<div class="box">
				<h3>关注丁盯智能</h3>
				<p>扫描二维码关注丁盯智能微信公众账号</p>
				<img class="td-code"
					src="<?php echo base_url().'static/' ?>images/td_code.png" />
			</div>
			<div class="title">
				<a href="">
					<h3>丁盯动态</h3>
				</a>
			</div>
			<div class="box">
				<ul class="news">
					<li><a href="">智能硬件如何寻找自己的生存空间</a></li>
					<li><a href="">智能硬件如何寻找自己的生存空间</a></li>
					<li><a href="">智能硬件如何寻找自己的生存空间</a></li>
					<li><a href="">智能硬件如何寻找自己的生存空间</a></li>
				</ul>
			</div>
			<div class="title">
				<a href="">
					<h3>常见问题</h3>
				</a>
			</div>
			<div class="box">
				<input type="text" placeholder="查找问题">
				<ul class="qst">
					<li><a href="">1.产品支持哪些移动客户端？</a></li>
					<li><a href="">2.充电一次能用多久？</a></li>
					<li><a href="">3.如何安装？</a></li>
					<li><a href="">4.丁盯的电话提醒真的是免费的吗？能保证多久？</a></li>
					<li><a href="">5.产品支持哪些移动客户端？</a></li>
					<li><a href="">6.充电一次能用多久？</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="footer">
		<div class="container">
			<p>
				<a href="" class="btn"> <img
					src="<?php echo base_url().'static/' ?>images/f_down.png" />
				</a> <a href="" class="btn"> <img
					src="<?php echo base_url().'static/' ?>images/f_qq.png" />
				</a> <a href="" class="btn"> <img
					src="<?php echo base_url().'static/' ?>images/f_wx.png" />
				</a> <a href="" class="btn"> <img
					src="<?php echo base_url().'static/' ?>images/f_wb.png" />
				</a>
			</p>
			<p class="link">
				<a href="javascript:;">咨询中心</a> | <a href="javascript:;">售后服务</a> |
				<a href="javascript:;">联系我们</a> | <a href="javascript:;"> 服务邮箱： <span>service@dding.net</span>
				</a>
			</p>
			<p class="right">Copyright © 2014 丁盯智能 京ICP备14039007号-1</p>
		</div>
	</div>
	<script type="text/javascript"
		src="<?php echo base_url().'static/' ?>script/jquery-1.7.min.js"></script>
	<script type="text/javascript"
		src="<?php echo base_url().'static/' ?>script/script.js"></script>
</body>
</html>
