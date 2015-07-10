<?php $this->load->view('pc/header.php');?>
<style>
a{
    text-decoration:none;
    color:#000000;
}
</style>
  <div class="viewpoints">
    <div class="container">
      <div class="mpinfo">
        <p>观点
          <span class="tarrow"></span>
          <span>丁盯门磁</span>
        </p>
      </div>
      <div class="main points">
        <div class="content">
          <div class="title">
            <span>丁盯门磁</span>
          </div>
          <ul class="photoWall">
          <?php for($i=0;$i<12;$i++){?>
            <li>
             <a href="<?php echo base_url()?>index.php/pc/opinion<?php if(isset($allopinion[$i]['id'])) echo '/op?id='.$allopinion[$i]['id'];?>" target="_blank">
              <img src="<?php echo base_url() ?><?php if(isset($allopinion[$i]) && isset($allopinion[$i]['photo'])) echo $allopinion[$i]['photo'];?>">
              </a>
              <div class="photo_info">
                <p class="pname"><?php if(isset($allopinion[$i]) && isset($allopinion[$i]['user_name']) && $allopinion[$i]['user_name']) {echo $allopinion[$i]['user_name'];} else if(isset($allopinion[$i])) {echo $allopinion[$i]['mobile'];}?></p>
                <p><?php if(isset($allopinion[$i]) && isset($allopinion[$i]['integral'])) {echo $allopinion[$i]['integral'];} else echo '0';?>丁币</p>
                <p><?php if(isset($allopinion[$i]) && isset($allopinion[$i]['brief'])) {$br_str=mb_substr(trim(strip_tags($allopinion[$i]['brief'])),0,35);  if(mb_strlen($br_str)>35) $br_str .= "..."; echo $br_str;}?></p>
              </div>
            </li>
            <?php }?>
          </ul>
          <div class="title">
            <span>产品观点</span>
          </div>
          <ul class="listview">
          <?php foreach($allopinion as $opinion){?>
            <li class="li-thumb">
			 
              <a href="<?php echo base_url()?>index.php/pc/opinion/op?id=<?php if(isset($opinion['id'])) echo $opinion['id'];?>">
			    <img src="<?php echo base_url() ?><?php if(isset($opinion['photo'])) echo $opinion['photo'];?>" />
			  </a>
			  
              <div class="div_coin ml17">
			  <a href="<?php echo base_url()?>index.php/pc/opinion/op?id=<?php if(isset($opinion['id'])) echo $opinion['id'];?>" target="_blank">
                <span class="name"><?php if(isset($opinion['user_name']) && $opinion['user_name']) {echo $opinion['user_name'];} else {echo $opinion['mobile'];}?></span>
				</a>
                <span class="tcoin">
                  <img src="<?php echo base_url().'style/pc/' ?>images/jz.png" class="jz_img">
                  <img src="<?php echo base_url().'style/pc/' ?>images/coin_bg.png" class="line_img">
                  <?php if(isset($opinion['integral'])) {echo $opinion['integral'];} else echo '0';?>丁币
                  <img src="<?php echo base_url().'style/pc/' ?>images/coin.png" style="height: 11px;">
                </span>
              </div>
              <div class="pro-point">
                <div class="info">
                <a href="<?php echo base_url()?>index.php/pc/opinion/op?id=<?php if(isset($opinion['id'])) echo $opinion['id'];?>"
								target="_blank">
				<div class='ctldiv' style="color: black; overflow: hidden;">
                  <?php if (isset($opinion['view'])) {
            		static $charset = 'utf-8'; // 编码，根据自己的修改，不过一般都是utf-8吧
            		$tail = '...';
            		// 先strip_tags()去除html标签，再html_entity_decode()把html实体转成字符，ltrim是去除左边所有空格
            		$opinion['view'] = ltrim(html_entity_decode(strip_tags($opinion['view']), ENT_QUOTES, 'utf-8'));
            		if (mb_strlen($opinion['view'], $charset) <= 128) {
                		echo $opinion['view'];
            		} else {
                		echo mb_substr($opinion['view'], 0, 128, $charset) . $tail;
            		}
                  }?>
			  </div>
                 </a>
                </div>
                <a href="<?php echo base_url() ?>index.php/pc/opinion/op?id=<?php if(isset($opinion['id'])) echo $opinion['id'];?>#comment"
							target="_blank">
					<div class="aq">追问（共<?php if(isset($opinion['count'])) echo $opinion['count'];?>条）</div>
				</a>
              </div>
            </li>
			<?php }?>
          </ul>
          <?php if($count > 10)include('page_op.php');?>
        </div>
      </div>
      <div class="side">
        <div class="content">
          <div class="box">
            <h3>关注丁盯智能</h3>
            <p>扫描二维码关注丁盯智能微信公众账号</p>
            <img class="td-code" src="<?php echo base_url().'style/pc/' ?>images/weixincode.png" />
          </div>
          <div class="title">
            <a href="<?php echo base_url()?>index.php/pc/media">
              <h3>丁盯动态</h3>
            </a>
          </div>
          <div class="box">
            <ul class="news">
              <?php foreach ($news as $v): ?>
              <li>
                <a href="<?php echo $v['links']?>" target="_blank"><?php $new_str=mb_substr(trim(strip_tags($v['title'])),0,15);  if(mb_strlen($new_str)>13) $new_str .= "..."; echo $new_str;?></a>
              </li>
              <?php endforeach; ?> 
            </ul>
          </div>
          <div class="title">
            <a href="<?php echo base_url()?>index.php/pc/questions">
              <h3>常见问题</h3>
            </a>
          </div>
          <div class="box">
            <input type="search" placeholder="查找问题">
            <ul class="qst">
            <?php foreach ($ques as $v): ?>
              <li>
                <a href="<?php echo base_url()?>index.php/pc/questions"><?php echo $v['question']?></a>
              </li>
             <?php endforeach; ?> 
            </ul>
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