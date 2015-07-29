<?php $this->load->view('pc/header.php');?>
<style>
body{
	background-color: #F6F6F6;
}
</style>
	<div class="inpages">
		<div class="container">
			<div class="location">
				<span>门磁售后流程</span>
			</div>
		</div>
		<div class="container">
			<div class="content">
				<div class="cus_serv">
					<ul class="block">
						<li class="promise">
							<div class="">
								<ul>
									<li>
										<img src="<?php echo base_url().'style/pc/' ?>images/seven.png" />
										<p class="prop">7天退货保障</p>
									</li>
									<li>
										<img src="<?php echo base_url().'style/pc/' ?>images/exchange.png" />
										<p class="prop">15天换货承诺</p>
									</li>
									<li>
										<img src="<?php echo base_url().'style/pc/' ?>images/maintain.png" />
										<p class="prop">1年免费维修</p>
									</li>
								</ul>
							<div>
            	<!-- <img src="<?php echo base_url().'style/pc/' ?>images/promise.png" /> -->
            </li>
          	<li>
          		<p> 退货流程</p>
            	<img src="<?php echo base_url().'style/pc/' ?>images/cus_serv.png" />
            </li>
            <li>
            	<p>邮寄资料</p>
            	<ul class="con_info">
            		<li>收件人：云丁网络</li>
            		<li>联系电话：18628200427</li>
            		<li>邮寄地址：北京市海淀区西二旗西路领袖新硅谷D区42-104</li>
            	</ul>
            </li>
          </ul>
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