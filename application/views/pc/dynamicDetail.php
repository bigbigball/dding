<?php $this->load->view('pc/header.php');?>
 <?php date_default_timezone_set("PRC"); ?>
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
					<img src="<?php echo '/admin/uploads/dynamic/'.$dynamic['thumb'] ?>" class="detail" width="790px" height="170px">
				</div>
				<div class="dynamic_content">
					<?php echo $dynamic['description']?>
				</div>
				<div class="dynamic_content dy_join">
				  <?php if(!empty($dynamic['in'])){?>
					<p class="join-icon">
						<a class="join_btn" href="<?php echo $dynamic['in']?>" target="_blank">
							<span class="buy_btn_text">我要参加</span>
						</a>
					</p>
					<?php } else {?>
					<p class="join-icon" style="display:none"> <!--不可点击状态-->
						<a class="join_btn btn_dis">
							<span class="buy_btn_text">我要参加</span>
						</a>
					</p>
					<?php }?>
				</div>
				<!-- 
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
				 -->
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