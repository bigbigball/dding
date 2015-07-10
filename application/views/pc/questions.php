<?php $this->load->view('pc/header.php');?>
<div class="inpages">
	<div class="container">
		<div class="location">
			<span>常见问题</span>
			<div class="search">
				<input type="search" placeholder="查找问题" class="inputS" />
			</div>
		</div>
	</div>
	<div class="container">
		<div class="content">
			<div class="que_bar">
				<ul class="probar">
					<li class="active" id="magnetic"><a>智能门磁</a></li>
					<li class="mid_bar" id="pwdClock"><a>智能密码锁</a></li>
					<li id="fingerprint"><a>智能指纹锁</a></li>
				</ul>
			</div>
			<div class="ques_ans">
				<ul class="listitem" id="magnetic_content">
				  <?php foreach ($allques as $v): ?>
					<li>
						<p class="question"><?php echo $v['question']?></p>
						<p><?php echo $v['answer']?></p>
					</li>
				  <?php endforeach; ?>
				  
				</ul>
				
				<ul class="listitem" id="pwdClock_content" style="display: none;">
					<li>
						<p class="question">产品支持那些移动客户端？</p>
						<p>答：APP支持Android、IOS，电话通知所有手机。</p>
					</li>
					<li>
						<p class="question">产品支持那些移动客户端？</p>
						<p>答：APP支持Android、IOS，电话通知所有手机。</p>
					</li>
					<li>
						<p class="question">产品支持那些移动客户端？</p>
						<p>答：APP支持Android、IOS，电话通知所有手机。</p>
					</li>
					<li>
						<p class="question">产品支持那些移动客户端？</p>
						<p>答：APP支持Android、IOS，电话通知所有手机。</p>
					</li>
					<li>
						<p class="question">产品支持那些移动客户端？</p>
						<p>答：APP支持Android、IOS，电话通知所有手机。</p>
					</li>
					<li>
						<p class="question">产品支持那些移动客户端？</p>
						<p>答：APP支持Android、IOS，电话通知所有手机。</p>
					</li>
					<li>
						<p class="question">产品支持那些移动客户端？</p>
						<p>答：APP支持Android、IOS，电话通知所有手机。</p>
					</li>
				</ul>
				<ul class="listitem" id="fingerprint_content" style="display: none;">
					<li>
						<p class="question">产品支持那些移动客户端？</p>
						<p>答：APP支持Android、IOS，电话通知所有手机。</p>
					</li>
					<li>
						<p class="question">产品支持那些移动客户端？</p>
						<p>答：APP支持Android、IOS，电话通知所有手机。</p>
					</li>
					<li>
						<p class="question">产品支持那些移动客户端？</p>
						<p>答：APP支持Android、IOS，电话通知所有手机。</p>
					</li>
					<li>
						<p class="question">产品支持那些移动客户端？</p>
						<p>答：APP支持Android、IOS，电话通知所有手机。</p>
					</li>
					<li>
						<p class="question">产品支持那些移动客户端？</p>
						<p>答：APP支持Android、IOS，电话通知所有手机。</p>
					</li>
					<li>
						<p class="question">产品支持那些移动客户端？</p>
						<p>答：APP支持Android、IOS，电话通知所有手机。</p>
					</li>
					<li>
						<p class="question">产品支持那些移动客户端？</p>
						<p>答：APP支持Android、IOS，电话通知所有手机。</p>
					</li>
				</ul>
			</div>
			<?php if($count > 5)include('page_questions.php');?>
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
				<li><a href="<?php echo base_url()?>index.php/pc/team">丁盯团队</a></li>
				<li><a href="<?php echo base_url()?>index.php/pc/media">媒体报道</a></li>
				<li><a href="<?php echo base_url()?>index.php/pc/joinus">加入我们</a></li>
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