<?php $this->load->view('pc/header.php');?>
	<div class="indexbody">
		<div class="container">
			<div>
				<img src="<?php echo base_url().'style/pc/' ?>images/body_bg.png"/>
				<img src="<?php echo base_url().'style/pc/' ?>images/ad_text.png" class="ad_img ad_pos" />
				<!--<marquee direction="left" scrollmount="2" class="marquee_sty">
					<img src="images/ad_text.png" />
				</marquee>-->
			</div>
		</div>
	</div>
	<div class="product">
		<div class="container">
			<div class="pro_ad">
				<!-- <div class="name">
					<p class="title">密码锁 <span>
						PASSWORD<span></p>
					<p class="use">房东必备</p>
				</div> -->
				<img src="<?php echo base_url().'style/pc/' ?>images/password_bg.png" />
				<div class="img img1 t2s" id="product1"></div>
				<!-- <a class="img1 t2s" id="product1"> -->
				</a>
			</div>
			<div class="pro_ad">
				<!-- <div class="name">
					<p class="title">门磁 <span>
						MAGNETIC<span></p>
					<p class="use">贴心卫士</p>
				</div> -->
				<img src="<?php echo base_url().'style/pc/' ?>images/magnetic_bg.png" />
				<div class="img img2 t2s" id="product2"></div>
			</div>
			<div class="pro_ad">
				<!-- <div class="name">
					<p class="title">指纹锁 <span>
						FINGERPRINT<span></p>
					<p class="use">智能管家</p>
				</div> -->
				<img src="<?php echo base_url().'style/pc/' ?>images/fingerprint_bg.png" />
				<div class="img img3 t2s" id="product3"></div>
			</div>
		</div>
	</div>
	<div class="about">
		<div class="qq_dialog" style="display:none;">
			<img src="<?php echo base_url().'style/pc/' ?>images/qq.png" class="qq">
			<a class="del"></a>
		</div>
  		<div class="weixin_dialog" style="display:none;">
		  <img src="<?php echo base_url().'style/pc/' ?>images/weixin.png" class="weixin">
		  <a class="del"></a>
		</div>
		<div class="container">
			<div class="list">
				<span>关于丁盯</span>
				<ul>
					<li>
						<a href="<?php echo base_url()?>index.php/pc/team">丁盯团队</a>
					</li>
					<li>
						<a href="<?php echo base_url()?>index.php/pc/media">媒体报道</a>
					</li>
					<li>
						<a href="<?php echo base_url()?>index.php/pc/joinus">加入我们</a>
					</li>
				</ul>	
			</div>
				
			<div class="list">
				<span>售后服务</span>
				<ul>
					<li>
						<a href="<?php echo base_url()?>index.php/pc/customerservice">售后流程</a>
					</li>
					<li>
						<a href="<?php echo base_url()?>index.php/pc/questions">常见问题</a>
					</li>
				</ul>
			</div>
			<div class="list">	
				<span>咨询中心</span>
				<ul>
					<li>
						<a id="cd_qq">渠道咨询</a>
					</li>
					<li>
						<a id="kf_qq">客服咨询</a>
					</li>
				</ul>
			</div>
			
			<div class="list">
				<span>关注我们</span>
				<ul>
					<li>
						<a href="http://weibo.com/u/5206002138" target="_blank">新浪微博</a>
					</li>
					<li>
						<a id="weixin">官方微信</a>
					</li>
				</ul>
			</div>
			<div class="contact">
				<p class="service">客服电话</p>
				<p class="tel">4006-414-123</p>
				<p class="time">周一至周六 9:00-20:00</p>
			</div>
		</div>
	</div>
	
<?php $this->load->view('pc/footer.php');?>