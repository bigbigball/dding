<?php $this->load->view('pc/header.php');?>
<style>
body{
	background-color: #F6F6F6;
}
</style>
	<div class="solutions">
		<div class="solu_ad cloud_bg" >
			<div class="container vf-x">
				<p class="title">智能门锁解决方案</p>
				<div class="desc">
					<p>丁盯智能锁解决方案是帮助传统的制造研发企业实现锁具智能化的turn-key方案。</p>
					<p>锁制造商可以购买智能锁模组+智能网关硬件用于生产自有品牌的智能锁，</p>
					<p>智能云＋APP服务基础服务免费使用。</p>
				</div>
				<div class="circle_bg">
					<span class="cloud_circle circle1" style="display:none;"></span>
			        <span class="cloud_circle circle2" style="display:none;"></span>
			        <span class="cloud_circle circle3" style="display:none;"></span>
			        <span class="cloud_circle circle4" style="display:none;"></span>
				</div>
				<div class="co-icon">
					<!-- <input type="button" class="co_btn" value="合 作" id="cooperation"> -->
					<a class="solu_co_icon" href="http://www.mikecrm.com/f.php?t=q2ngCL">
						合&nbsp;作
						<i class="tri_icon tri_pos"></i>
					</a>
				</div>
				<!-- <img src="<?php echo base_url().'style/pc/' ?>images/cloud_bg3.png" class="cloud_bg" /> -->
				<!-- <img src="<?php echo base_url().'style/pc/' ?>images/cloud_bg.png" class="cloud_bg" />
				<img src="<?php echo base_url().'style/pc/' ?>images/cloud.png" class="cloud"/> -->
			</div>
		</div>
		<div class="container">
			<div class="">
				<img src="<?php echo base_url().'style/pc/' ?>images/solution.png" style="width:100%;"/>
			</div>
		</div>
	</div>

	<div class="about" id="about">
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

	<div class="footer">
		<div class="container">
			<p>Copyright © 2014 －2015 丁盯智能  京ICP备14039007号-1</p>
		</div>
	</div>
	<script type="text/javascript" src="<?php echo base_url().'style/pc/' ?>js/jquery-1.7.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url().'style/pc/' ?>js/jquery.rotate.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url().'style/pc/' ?>js/script.js"></script>
	<script type="text/javascript">
		function circle_animate() {
			$(".circle4").fadeIn(500,function(){
				$(".circle4").fadeOut(500);
				$(".circle3").fadeIn(1000,function(){
					$(".circle3").fadeOut(500);
					$(".circle2").fadeIn(1000,function(){
						$(".circle2").fadeOut(500);
						$(".circle1").fadeIn(1000).fadeOut(500);
					});
				});
			});
		}

	$(document).ready(function () {
			circle_animate();
	});
	setInterval("circle_animate()",4000);
		
	</script>
</body>

</html>