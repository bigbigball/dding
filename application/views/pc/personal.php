<?php $this->load->view('pc/header.php');?>
	<div class="viewpoints">
		<div class="container">
			<div class="mpinfo">
				<p class="c3">个人中心</p>
			</div>
			<div class="content">
				<div class="pcintro">
					<ul>
						<li class="avatar"><img
							src="<?php echo base_url() ?><?php if(isset($info['photo'])) echo $info['photo']."?time=".mt_rand();?>" />
						</li>
						<li>
							<p class="name"><?php if(isset($info['user_name']) && !empty($info['user_name'])) {echo $info['user_name'];} else if (isset($info['mobile'])) {echo $info['mobile'];}?></p>
						</li>
						<li>
							<p class="describe"><?php if(isset($info['brief']) && !empty($info['brief'])) {echo $info['brief'];} else {echo '暂无';}?></p>
						</li>
						<li>
							<p>
								<?php if(isset($info['integral']) && !empty($info['integral'])) {echo $info['brief'];} else {echo '0';}?>丁币 <img
									src="<?php echo base_url().'style/pc/' ?>images/coin.png"
									style="height: 11px;">
							</p>
						</li>
					</ul>
					<a href="<?php echo base_url()?>index.php/pc/opinion/edit" class="edit"></a>
				</div>
				<div class="show">
					<p>发表你对产品的观点吧，下一位意见领袖就是你！</p>
					<ul class="prolist">
						<li>
						<?php if(isset($passwordLock) && $passwordLock){?>
							<div class="bgimg p1">
								<div class="ab">
									<a class="bgclick" href=""></a>
									<p>
										<a href="">写写看></a>
									</p>
									<p>
										<span>您尚未发表观点</span>
									</p>
								</div>
							</div>
							<?php } else {?>
							<div class="bgimg p3">
								<div class="ab">
									<a class="bgclick" href="http://yundinghometest.dding.net/index.php/pc/lock"></a>
									<p>
										<a href="http://yundinghometest.dding.net/index.php/pc/lock">了解产品></a>
									</p>
									<p>
										<span>此设备尚未购买或未被绑定</span>
									</p>
								</div>
							</div>
							<?php }?>
							<p class="title">丁盯指纹锁</p>
						</li>
						<li>
							<div class="bgimg p2">
							<div class="ab">
							<?php if (isset($menci) && $menci) {?>
							 <?php if(isset($published) && $published){?>
									<a class="bgclick" href="<?php echo base_url()?>index.php/pc/opinion/myop"></a>
									<p>
										<span>您已发表观点</span>
									</p>
									<p>
										<span class="chat">追问（<?php if(isset($count)) echo $count;?>条）</span>
									</p>
							<?php } else {?>
									 <a class='bgclick' href="<?php echo base_url()?>index.php/pc/opinion/myopmf"></a>
              						<p class="ab">
                						<a>写写看></a>
                						<span>您尚未发表观点</span>
              						</p>
							<?php }?>
							<?php } else {?>
							<div class="bgimg p3">
								<div class="ab">
									<a class="bgclick" href="http://yundinghometest.dding.net/index.php/pc/magnetic"></a>
									<p>
										<a href="http://yundinghometest.dding.net/index.php/pc/magnetic">了解产品></a>
									</p>
									<p>
										<span>此设备尚未购买或未被绑定</span>
									</p>
								</div>
							</div>
							<?php }?>
							</div>
							</div>
							<p class="title">丁盯门磁</p>
						</li>
						<li>
						<?php if(isset($fingerprintLock) && $fingerprintLock) {?>
							<div class="bgimg p1">
								<div class="ab">
									<a class="bgclick" href=""></a>
									<p>
										<a href="">写写看></a>
									</p>
									<p>
										<span>您尚未发表观点</span>
									</p>
								</div>
							</div>
							<?php }else {?>
							<div class="bgimg p3">
								<div class="ab">
									<a class="bgclick" href="http://yundinghometest.dding.net/index.php/pc/lock"></a>
									<p>
										<a href="http://yundinghometest.dding.net/index.php/pc/lock">了解产品></a>
									</p>
									<p>
										<span>此设备尚未购买或未被绑定</span>
									</p>
								</div>
							</div>
							<?php }?>
							<p class="title">丁盯密码锁</p>
						</li>
					</ul>
				</div>
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
					<li><a href="<?php echo base_url()?>index.php/pc/joinus">加入我们</a></li>
				</ul>
			</div>

			<div class="list">
				<span>售后服务</span>
				<ul>
					<li><a href="<?php echo base_url()?>index.php/pc/customerservice">售后流程</a></li>
					<li><a href="<?php echo base_url()?>index.php/pc/questions">常见问题</a></li>
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
