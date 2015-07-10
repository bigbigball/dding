<?php $this->load->view('pc/header.php');?>

<div class="media_report">
		<div class="container">
			<div class="sidebar" id="sidebarFollow">
				<ul class="mainbarname">
					<li><a href="<?php echo base_url()?>index.php/pc/dynamic">丁盯进行时</a></li>
				</ul>
				<ul class="subbarname">
					<li class="active"><a href="<?php echo base_url()?>index.php/pc/dynamic" >丁盯动态</a></li>
					<li><a href="<?php echo base_url()?>index.php/pc/media">媒体报道</a></li>
					<li><a href="<?php echo base_url()?>index.php/pc/team">丁盯团队</a></li>
					<li><a href="<?php echo base_url()?>index.php/pc/joinus">加入我们</a></li>
				</ul>
			</div>
			<div class="media_content">
				<div class="location">
					<span style="font-weight: bold;"><?php echo $dynamic['title']?></span>
					<span class="dy_date"><?php echo date('Y-m-d', $dynamic['ctime'])?></span>
				</div>
				<div class="dynamic_content">
					<div class="dy_vedio">
						<embed src="http://player.youku.com/player.php/sid/XMzI2NTc4NTMy/v.swf" width="480" height="400" 
						type="application/x-shockwave-flash"></embed>
						<!-- <video width="480" height="400" controls="controls">
						  <source src="movie.mp4" type="video/mp4" />
						  <source src="movie.ogg" type="video/ogg" />
						  <source src="movie.webm" type="video/webm" />
						  <object data="movie.mp4" width="480" height="400">
						    <embed src="movie.swf" width="480" height="400" />
						  </object>
						</video> -->
					</div>
				</div>
				<div class="dynamic_content">
					<p class="dy_vedio_describe">
					   <?php echo $dynamic['description']?>
				    </p>
				</div>
				<div class="more_recommend">
					<p class="title">更多推荐</p>
					<ul>
						<li class="dy_arr">
							<a class="arrl_btn"></a>
						</li>
						<li>
							<div>
								<a href=""><img src="<?php echo base_url().'style/pc/' ?>images/detail_list1.jpg"/></a>
								<p><a>拯救美女房东</a></p>
							</div>
						</li>
						<li>
							<div>
								<a href=""><img src="<?php echo base_url().'style/pc/' ?>images/detail_list4.jpg"/></a>
								<p><a>拯救美女房东</a></p>
							</div>
						</li>
						<li>
							<div>
								<a href=""><img src="<?php echo base_url().'style/pc/' ?>images/detail_list1.jpg"/></a>
								<p><a>拯救美女房东</a></p>
							</div>
						</li>
						<li>
							<div>
								<a href=""><img src="<?php echo base_url().'style/pc/' ?>images/detail_list4.jpg"/></a>
								<p><a>拯救美女房东</a></p>
							</div>
						</li>
						<li>
							<div>
								<a href=""><img src="<?php echo base_url().'style/pc/' ?>images/detail_list5.jpg"/></a>
								<p><a>拯救美女房东</a></p>
							</div>
						</li>
						<li class="dy_arr">
							<a class="arrr_btn"></a>
						</li>
					</ul>
					<div style="clear:both;"></div>
				</div>
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