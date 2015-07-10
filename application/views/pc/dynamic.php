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
					<span style="font-weight: bold;">丁盯动态</span>
				</div>
				<div>
					<ul class="listitem dynamic_content">
					  <?php foreach ($alldynamic as $v): ?>
						<li>
							<div>
								<p class="title">
								  <a href="<?php echo base_url()?>index.php/pc/dynamic/dynamicDetail?id=<?php if(isset($v['id'])) echo $v['id'];?>">
								    <?php echo $v['title']?>
								  </a>
								</p>
								<a><img src="<?php echo 'http://yundinghomebackendtest.dding.net/uploads/dynamic/'.$v['thumb'] ?>"></a>
							</div>
						</li>
					  <?php endforeach; ?>	
					</ul>
				</div>
				<?php if($count > 3)include('page_dynamic.php');?>
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