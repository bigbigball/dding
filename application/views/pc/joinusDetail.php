<?php $this->load->view('pc/header.php');?>
<style>
body{
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
				<div class="joinus mg_b10">
					<p class="title">
            <?php echo $jobs['position']?> ｜
            <span ><?php echo $jobs['type']?> / <?php echo $jobs['salary']?> / <?php echo $jobs['age']?> / <?php echo $jobs['education']?></span>
        	</p>
        	<div class="details">
        		<ul>
        			<?php echo $jobs['description']?>
        		</ul>
        		<div class="emailus">
        			<img src="<?php echo base_url().'style/pc/' ?>images/email.png" />
        			<p>请将简历发送至：HR@dding.net</p>
        			<p class="emailtitle">邮件标题格式为：应聘＋职位名称＋姓名</p>
        		</div>
        	</div>
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