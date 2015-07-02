<?php $this->load->view('pc/header.php');?>

<div class="media_report">
	<div class="container">
		<div class="location">
			<span style="font-weight: bold;">媒体报道</span>
		</div>
	</div>
	<div class="container">
		<div>
			<div class="media_content">
				<ul class="listitem">
				  <?php foreach ($allmedia as $v): ?>
					<li>
						<div class="left_img">
							<img
								src="<?php echo 'http://yundinghomebackendtest.dding.net/uploads/news/'.$v['thumb'] ?>">
								
						</div>
						<div class="right_content">
							<p class="title">
								<a href="<?php echo $v['links']?>" target="_blank"><?php echo $v['title']?></a>
							</p>
							<p clas="short_report">
								<?php echo $v['abstract']?>
							</p>
							<p class="newspaper">
								<span><?php echo $v['source']?>&nbsp;&nbsp;<?php echo date('Y-m-d', $v['ctime'])?></span> <a href="<?php echo $v['links']?>" target="_blank">了解更多&gt; &gt;</a>
							</p>
						</div>
					</li>
				  <?php endforeach; ?>
				</ul>
			</div>
			<?php if($count > 3)include('page_media.php');?>
		</div>
	</div>
</div>

<div class="about">
	<div class="qq_dialog" style="display: none;">
		<img src="<?php echo base_url().'style/pc/' ?>images/qq.png"
			class="qq"> <a class="del"></a>
	</div>
	<div class="weixin_dialog" style="display: none;">
		<img src="<?php echo base_url().'style/pc/' ?>images/weixin.png"
			class="weixin"> <a class="del"></a>
	</div>
	<div class="container">
		<div class="list">
			<span>关于丁盯</span>
			<ul>
				<li><a style="cursor: default;">丁盯团队</a></li>
				<li><a href="<?php echo base_url()?>index.php/pc/media">媒体报道</a></li>
				<li><a href="<?php echo base_url()?>index.php/pc/joinus"">加入我们</a></li>
			</ul>
		</div>

		<div class="list">
			<span>售后服务</span>
			<ul>
				<li><a href="<?php echo base_url()?>index.php/pc/customerservice">售后流程</a>
				</li>
				<li><a href="<?php echo base_url()?>index.php/pc/questions">常见问题</a>
				</li>
			</ul>
		</div>
		<div class="list">
			<span>咨询中心</span>
			<ul>
				<li><a id="cd_qq">渠道咨询</a></li>
				<li><a id="kf_qq">客服咨询</a></li>
			</ul>
		</div>

		<div class="list">
			<span>关注我们</span>
			<ul>
				<li><a href="http://weibo.com/u/5206002138" target="_blank">新浪微博</a>
				</li>
				<li><a id="weixin">官方微信</a></li>
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