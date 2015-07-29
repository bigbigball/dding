<?php $this->load->view('pc/header.php');?>
<div class="media_report">
		<div class="container">
			<div class="sidebar" id="sidebarFollow">
				<ul class="mainbarname">
					<li><a href="<?php echo base_url()?>index.php/pc/dynamic">丁盯进行时</a></li>
				</ul>
				<ul class="subbarname">
					<li><a href="<?php echo base_url()?>index.php/pc/dynamic" >丁盯动态</a></li>
					<li><a href="<?php echo base_url()?>index.php/pc/media">媒体报道</a></li>
					<li><a href="<?php echo base_url()?>index.php/pc/team">丁盯团队</a></li>
					<li class="active"><a href="<?php echo base_url()?>index.php/pc/joinus">加入我们</a></li>
				</ul>
			</div>
			<div class="media_content">
				<div class="location">
					<span>加入我们</span>
				</div>
				<div class="dding_life">
					<p class="title">丁盯生活</p>
					<ul>
						<li class="dy_arr">
							<a class="arrl_btn"></a>
						</li>
						<li class="js-img" data-index="1">
							<div>
								<a href=""><img src="<?php echo base_url().'style/pc/' ?>images/01.jpg"/></a>
							</div>
						</li>
						<li class="js-img" data-index="2">
							<div>
								<a href=""><img src="<?php echo base_url().'style/pc/' ?>images/02.jpg"/></a>
							</div>
						</li>
						<li class="js-img" data-index="3">
							<div>
								<a href=""><img src="<?php echo base_url().'style/pc/' ?>images/03.jpg"/></a>
							</div>
						</li>
						<li class="" data-index="4" style="display:none;">
							<div>
								<a href=""><img src="<?php echo base_url().'style/pc/' ?>images/04.jpg"/></a>
							</div>
						</li>
						<li class="" data-index="5" style="display:none;">
							<div>
								<a href=""><img src="<?php echo base_url().'style/pc/' ?>images/05.jpg"/></a>
							</div>
						</li>
						<li class="" data-index="6" style="display:none;">
							<div>
								<a href=""><img src="<?php echo base_url().'style/pc/' ?>images/06.jpg"/></a>
							</div>
						</li>
						<li class="" data-index="7" style="display:none;">
							<div>
								<a href=""><img src="<?php echo base_url().'style/pc/' ?>images/07.jpg"/></a>
							</div>
						</li>
						<li class="" data-index="8" style="display:none;">
							<div>
								<a href=""><img src="<?php echo base_url().'style/pc/' ?>images/08.jpg"/></a>
							</div>
						</li>
						<li class="dy_arr">
							<a class="arrr_btn"></a>
						</li>
					</ul>
					<div style="clear:both;"></div>
				</div>
				<div class="dynamic_content">
					<p class="title">站在巨人的肩膀上 , 你会看得更远</p>
					<p class="list_detail">
						1.你一定要足够的牛逼，才能和满屋子清华、北大、海龟派；BAT、Sony、500强，愉快的玩耍。<br/>
						2.你一定要足够的逗比，才能轻松的融入到这个逗比的世界。我们相信，下一个改变世界的逗比，就是你。<br/>
						3.足以逆袭的股票期权，让你时刻走在人生的巅峰。<br/>
						4.A轮融资已完成，此时不来，更待何时。<br/>
						5.平均年代80、90，这里有可爱呆萌小萝莉、霸气侧漏御姐风、帅气多金小鲜肉，猥琐话唠帅大叔。如果这都不是你的菜，没关系，我们还有资深热心美红娘。没有找不到，只有想不到，错过这个平台，你将错过整个世界。
					</p>
				</div>
				<div class="dynamic_content">
					<p class="title" style="padding: 2% 0 0%;">日常福利</p>
					<p class="list_detail">
						1.丰富自助午餐晚餐+零食水果下午茶<br/>
						2.各类健身器材+每天high翻全场的桌上足球大战<br/>
						3.无PM2.5的纯净呼吸环境<br/>
						4.各种新奇酷智能产品随便玩<br/>
						5.功夫熊按摩每周上门服务<br/>
						6.城铁附近，距西二旗地铁站步行10~15分钟<br/>
						7.打卡的公司都不是好公司<br/>
					</p>
				</div>
				<div class="dynamic_content job_position">
					<p class="title" style="padding: 2% 0 1%;">热招职位</p>
					<?php foreach ($alljobs as $v): ?>
					<p>
							<?php echo $v['position']?> ｜ <span><?php echo $v['type']?>  / <?php echo $v['salary']?>  / 
							<?php echo $v['age']?>  / <?php echo $v['education']?> </span> <a
								href="<?php echo base_url()?>index.php/pc/joinus/joinusDetail?id=<?php if(isset($v['id'])) echo $v['id'];?>">了解详情 >>></a>
						</p>
	              	<?php endforeach; ?>
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