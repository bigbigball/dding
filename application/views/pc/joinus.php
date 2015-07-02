<?php $this->load->view('pc/header.php');?>
<style>
body {
	background-color: #F6F6F6;
}
</style>
<div class="inpages">
	<div class="container">
		<div class="location">
			<span>加入我们</span>
		</div>
	</div>
	<div class="container">
		<div class="content">
			<div class="joinus">
				<ul class="listitem">
				<?php foreach ($alljobs as $v): ?>
					<li>
						<p>
							<?php echo $v['position']?> ｜ <span><?php echo $v['type']?>  / <?php echo $v['salary']?>  / 
							<?php echo $v['age']?>  / <?php echo $v['education']?> </span> <a
								href="<?php echo base_url()?>index.php/pc/joinus/joinusDetail?id=<?php if(isset($v['id'])) echo $v['id'];?>">了解详情 >>></a>
						</p>
					</li>
                <?php endforeach; ?>
				</ul>
			</div>
			<?php if($count > 5)include('page_jobs.php');?>
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
				<li><a href="<?php echo base_url()?>index.php/pc/joinus"
					href="joinus.html">加入我们</a></li>
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