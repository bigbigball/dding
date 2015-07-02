<?php $this->load->view('pc/header.php');?>
	<div class="viewpoints">
		<div class="container">
			<div class="mpinfo">
				<p>
					<a href="<?php echo base_url() ?>pc/opinion">观点 </a> 
					<span class="tarrow"></span> 丁盯门磁 <span class="tarrow"></span> 
					<span><?php if(isset($ownerinfo['user_name']) && !empty($ownerinfo['user_name'])) {echo $ownerinfo['user_name'];} else {echo $ownerinfo['mobile'];}?>的门磁观点</span>
				</p>
			</div>
			<div class="main">
				<div class="content">
					<div class="title">
						<span>丁盯门磁</span> <a href="<?php echo base_url()?>index.php/pc/opinion/myopmf" class="btn btn-b" 
						<?php if(isset($ownerinfo['id']) && isset($user_id) && $ownerinfo['id'] == $user_id){} else echo "style='display: none;'";?>>编 辑</a>
					</div>
					<div class="comment">
						<div class="bannerbar">
							<div class="banner">
								<div class="item">
									<img
										src="<?php echo base_url() ?><?php if(isset($pictures[0]) && $pictures[0]) echo $pictures[0]; else echo "static/images/temp/p_1.png";?>" />
								</div>
								<div class="item">
									<img
										src="<?php echo base_url() ?><?php if(isset($pictures[1]) && $pictures[1]) echo $pictures[1]; else echo "static/images/temp/p_1.png";?>" />
								</div>
								<div class="item">
									<img
										src="<?php echo base_url() ?><?php if(isset($pictures[2]) && $pictures[2]) echo $pictures[2]; else echo "static/images/temp/p_1.png";?>" />
								</div>
								<div class="item">
									<img
										src="<?php echo base_url() ?><?php if(isset($pictures[3]) && $pictures[3]) echo $pictures[3]; else echo "static/images/temp/p_1.png";?>" />
								</div>
								<div class="item">
									<img
										src="<?php echo base_url() ?><?php if(isset($pictures[4]) && $pictures[4]) echo $pictures[4]; else echo "static/images/temp/p_1.png";?>" />
								</div>
								<div class="temp"></div>
								<ul class="switch">
									<li data="0" class="hover"></li>
									<li data="1"></li>
									<li data="2"></li>
									<li data="3"></li>
									<li data="4"></li>
								</ul>
							</div>
						</div>
						<div class="pro-grade" style="width:66%;padding-left:1.2em;">
							<div class="stars">
								<p>产品打分</p>
								<div class="row">
									<div class="col_l">外观</div>
									<div class="col_r">
										<span class="grade" data="<?php if(isset($stars[0])) echo $stars[0]*0.5; else echo '0';?>"> <i class="num"></i>
										</span>
									</div>
								</div>
								<div class="row">
									<div class="col_l">稳定性</div>
									<div class="col_r">
										<span class="grade" data="<?php if(isset($stars[1])) echo $stars[1]*0.5; else echo '0';?>"> <i class="num"></i>
										</span>
									</div>
								</div>
								<div class="row">
									<div class="col_l">智能</div>
									<div class="col_r">
										<span class="grade" data="<?php if(isset($stars[2])) echo $stars[2]*0.5; else echo '0';?>"> <i class="num"></i>
										</span>
									</div>
								</div>
								<div class="row">
									<div class="col_l">功耗</div>
									<div class="col_r">
										<span class="grade" data="<?php if(isset($stars[3])) echo $stars[3]*0.5; else echo '0';?>"> <i class="num"></i>
										</span>
									</div>
								</div>
							</div>
							<div class="circle">
								<p>综合评分</p>
								<div class="circle-percent">
                					<span class="score"><?php if(isset($opinion['score'])) echo $opinion['score']; else echo '0';?>分</span>
									<div class="left">
										<img
											src="<?php echo base_url().'style/pc/' ?>images/circle_r.png" />
									</div>
									<div class="cover"></div>
									<div class="right">
										<img
											src="<?php echo base_url().'style/pc/' ?>images/circle_l.png" />
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="title">
						<span>产品观点</span>
					</div>
					<div class="pro-point">
						<div class="info">
							<?php if(isset($opinion['view'])) echo $opinion['view'];?>
						</div>
						<div class="aq">追问（共<?php if(isset($count)) echo $count;?>条）</div>
					</div>
					<div class="talk">
						<h5>谈谈你的观点呢</h5>
						<form action="<?php echo site_url('pc/opinion/comment') ?>" enctype="multipart/form-data" method="post" accept-charset="utf-8" onsubmit="return checkInputBeforeSubmit(this);">
          				<input type="hidden" name="opid" value="<?php if(isset($opinion['id'])) echo $opinion['id'];?>"/>
          				<textarea cols="40" rows="8" name="content" id="fb_textarea" ></textarea>
          				<input type="submit" value="发布" class="btn btn-a">
          				</form>
						<ul class="listview">
						<?php foreach($comments as $comment){?>
							<li class="li-icon">
							
								<a href=""><img src="<?php echo base_url() ?><?php if(isset($comment['photo'])) echo $comment['photo'];?>"/></a>
							
								<div class="div_coin pb10">
								<a href="">
									<span class="name"><?php if(isset($comment['user_name']) && $comment['user_name']) echo $comment['user_name']; else echo $comment['mobile']?>:
									</a>
									<?php if(isset($comment['target']) && $comment['target']){?>
									<span class="rp">回复</span><?php echo $comment['target']?>
									<?php }?>
								</div>
								<p>
									<?php if(isset($comment['content'])) echo $comment['content'];?>
								</p>
								<p class="btn_p">
									<a class="btn btn-c" style="right: 13%;
									<?php if(isset($ownerinfo['id']) && isset($user_id) && $ownerinfo['id'] == $user_id){} 
                					else if(isset($comment['owner_id']) && $comment['owner_id'] != $user_id) echo "display: none;";?>" 
                					onclick="delcommet('<?php echo base_url()?>pc/opinion/delcom', <?php if(isset($comment['id'])) echo $comment['id'];?>)">删除</a> 
                					<a class="btn btn-c" id="reply" onclick="replyOther(this)">回复</a>
								</p>
								<p class="area_p" style="display:;">
									<textarea cols="40" rows="8" name="textarea" id="fb_textarea"></textarea>
									<span class="answer"><img
										src="<?php echo base_url().'style/pc/' ?>images/talk_up.png" /></span>
									<a class="btn btn-a" onClick="sendReply(this,'<?php echo base_url()?>pc/opinion/reply',<?php if(isset($opinion['id'])) echo $opinion['id'];?>,
						                '<?php if(isset($comment['user_name']) && $comment['user_name']) echo $comment['user_name']; else echo $comment['mobile']?>')">发布</a>
								</p></li>
								<?php }?>
						</ul>
					</div>
					<?php if($count > 10)include('page.php');?>
				</div>
			</div>
			<div class="side">
				<div class="content">
					<div class="pcintro">
						<p class="avatar" style="top: -3em;">
							<img
								src="<?php echo base_url() ?><?php if(isset($ownerinfo['photo'])) echo $ownerinfo['photo'];?>" />
						</p>
						<p class="name"><?php if(isset($ownerinfo['user_name']) && !empty($ownerinfo['user_name'])) {echo $ownerinfo['user_name'];} else {echo $ownerinfo['mobile'];}?></p>
						<p><?php if(isset($ownerinfo['brief']) && !empty($ownerinfo['brief'])) {echo $ownerinfo['brief'];} else {echo '暂无';}?></p>
						<p class="intgral">
							<?php if(isset($ownerinfo['integral']) && !empty($ownerinfo['integral'])) {echo $ownerinfo['brief'];} else {echo '0';}?>丁币 <img
								src="<?php echo base_url().'style/pc/' ?>images/coin.png"
								style="height: 11px;">
						</p>
					</div>
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
