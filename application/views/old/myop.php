<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <title>丁盯智能门磁 - 云丁网络技术（北京）有限公司</title>
  <link rel="icon" href="favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="<?php echo base_url() ?>favicon.ico" type="image/x-icon" />
  <link href="<?php echo base_url().'static/' ?>style/style.css" rel="stylesheet" charset="utf-8" />
</head>
<body>
  <div class="header">
    <div class="container">
      <div class="logo">
        <img src="<?php echo base_url().'static/' ?>images/logo.png" />
      </div>
      <a href="<?php echo base_url() ?>opinion/personal" <?php if(!isset($info['id'])) echo "style='display:none'";?> class="btn">
        <img src="<?php echo base_url() ?><?php if(isset($info['photo'])) echo $info['photo'];?>" />
      </a>

      <ul class="loginbar">
      <?php if(!isset($info['id'])) { ?>
        <li>
          <a style="cursor:pointer;" href="<?php echo base_url() ?>user/login" >登录</a>
        </li>
        <li>
          <a style="cursor:pointer;" href="<?php echo base_url() ?>user/sign" >注册</a>
        </li>
      <?php } else { ?>
        <li>
          <a style="cursor:pointer;" href="<?php echo base_url() ?>user/logout" >退出</a>
        </li>
      <?php } ?>
      </ul>

      <ul class="navbar">
        <li>
          <a href="<?php echo base_url() ?>" >首 页</a>
        </li>
        <li>
          <a href="<?php echo base_url() ?>guide/index" >咨询中心</a>
        </li>
        <li class="active">
          <a href="<?php echo base_url() ?>opinion/index">观 点</a>
        </li>
        <li>
          <a href="<?php echo base_url() ?>about/index" >关于我们</a>
        </li>
        <li>
          <a href="<?php echo base_url() ?>download/index" >APP下载</a>
        </li>
        <li>
          <a href="<?php echo base_url() ?>news/index" >口碑</a>
        </li>
      </ul>
    </div>
  </div>
  <div class="container">
    <div class="main">
      <div class="location">
        <span>
        <a href="<?php echo base_url() ?>opinion/personal">个人中心 </a>
        <i></i>丁盯门磁 
        </span>
      </div>
      <div class="content">
        <div class="title">
          <h4>丁盯门磁</h4>
          <a href="<?php echo base_url() ?>opinion/myopmf" class="btn btn-b">编 辑</a>
        </div>
        <div class="comment">
          <div class="bannerbar">
            <div class="banner">
              <div class="item" >
                <img src="<?php echo base_url() ?><?php if(isset($pictures[0]) && $pictures[0]) echo $pictures[0]; else echo "static/images/temp/p_1.png";?>" />
              </div>
              <div class="item">
                <img src="<?php echo base_url() ?><?php if(isset($pictures[1]) && $pictures[1]) echo $pictures[1]; else echo "static/images/temp/p_1.png";?>" />
              </div>
              <div class="item">
                <img src="<?php echo base_url() ?><?php if(isset($pictures[2]) && $pictures[2]) echo $pictures[2]; else echo "static/images/temp/p_1.png";?>" />
              </div>
              <div class="item">
                <img src="<?php echo base_url() ?><?php if(isset($pictures[3]) && $pictures[3]) echo $pictures[3]; else echo "static/images/temp/p_1.png";?>" />
              </div>
              <div class="item">
                <img src="<?php echo base_url() ?><?php if(isset($pictures[4]) && $pictures[4]) echo $pictures[4]; else echo "static/images/temp/p_1.png";?>" />
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
          <div class="pro-grade">
            <div class="stars">
              <h3>产品打分</h3>
              <div class="row">
                <div class="col_l">外观</div>
                <div class="col_r">
                  <span class="grade" data="<?php if(isset($stars[0])) echo $stars[0]*0.5; else echo '0';?>">
                    <i class="num"></i>
                  </span>
                </div>
              </div>
              <div class="row">
                <div class="col_l">稳定性</div>
                <div class="col_r">
                  <span class="grade" data="<?php if(isset($stars[1])) echo $stars[1]*0.5; else echo '0';?>">
                    <i class="num"></i>
                  </span>
                </div>
              </div>
              <div class="row">
                <div class="col_l">智能</div>
                <div class="col_r">
                  <span class="grade" data="<?php if(isset($stars[2])) echo $stars[2]*0.5; else echo '0';?>">
                    <i class="num"></i>
                  </span>
                </div>
              </div>
              <div class="row">
                <div class="col_l">功耗</div>
                <div class="col_r">
                  <span class="grade" data="<?php if(isset($stars[3])) echo $stars[3]*0.5; else echo '0';?>">
                    <i class="num"></i>
                  </span>
                </div>
              </div>
            </div>
            <div class="circle">
              <p>综合评分</p>
              <div class="circle-percent" data="<?php if(isset($opinion['score'])) echo $opinion['score']; else echo '0';?>">
                <div class="left"><img src="<?php echo base_url().'static/' ?>images/circle_r.png" /></div>
                <div class="cover"></div>
                <div class="right"><img src="<?php echo base_url().'static/' ?>images/circle_l.png" /></div>
              </div>
            </div>
          </div>
        </div>
        <div class="title">
          <h4>产品观点</h4>
        </div>
        <div class="pro-point">
          <div class="info">
			<?php if(isset($opinion['view'])) echo $opinion['view'];?>
          </div>
          <div class="aq">追问（共<?php if(isset($count)) echo $count;?>条）</div>
        </div>
        <div class="talk">
          <h5>谈谈你的观点呢</h5>
          <form action="<?php echo site_url('opinion/comment') ?>" enctype="multipart/form-data" method="post" accept-charset="utf-8">
          <input type="hidden" name="opid" value="<?php if(isset($opinion['id'])) echo $opinion['id'];?>"/>
          <textarea cols="40" rows="8" name="content" id="fb_textarea" ></textarea>
          <input type="submit" value="发布" class="btn btn-a">
          </form>
          <ul class="listview">
          <?php foreach($comments as $comment){?>
            <li class="li-icon">
              <img src="<?php echo base_url() ?><?php if(isset($comment['photo'])) echo $comment['photo'];?>" />
              <div class="div_coin pb10">
                <span class="name"><?php if(isset($comment['user_name']) && $comment['user_name']) echo $comment['user_name']; else echo $comment['mobile']?>
                <?php if(isset($comment['target']) && $comment['target']){?>
                <span style="color:#aaa;padding:5px;">回复</span><?php echo $comment['target']?></span>
                <?php }else{?>
                </span>
                <span class="tcoin">
                  <img src="<?php echo base_url()?>static/images/jz.png" class="jz_img">
                  <img src="<?php echo base_url()?>static/images/coin_bg.png" class="line_img">
                  <?php if(isset($comment['integral'])) echo $comment['integral']; else echo '0'?>丁币
                  <img src="<?php echo base_url()?>static/images/coin.png" style="height: 11px;">
                </span>
                <?php }?>
              </div>
              <p>
              <?php if(isset($comment['content'])) echo $comment['content'];?>
              </p>
              <p class="btn_p">
                <a class="btn btn-c" style="right:10%;<?php if(isset($info['id']) && isset($user_id) && $info['id'] == $user_id){} 
                else if(isset($comment['owner_id']) && $comment['owner_id'] != $user_id) echo "display: none;";?>" 
                onclick="delcommet('<?php echo base_url()?>opinion/delcom', <?php if(isset($comment['id'])) echo $comment['id'];?>)">删除</a>
                <a class="btn btn-c" id="reply" onclick="replyOther(this)">回复</a>
              </p>
              <p class="area_p" style="display:;">
                <textarea cols="40" rows="8" name="textarea" id="fb_textarea" ></textarea>
                <span class="answer"><img src="<?php echo base_url().'static/' ?>images/talk_up.png" /></span>
                                <a class="btn btn-a" onClick="sendReply(this,'<?php echo base_url()?>opinion/reply',<?php if(isset($opinion['id'])) echo $opinion['id'];?>,
                '<?php if(isset($comment['user_name']) && $comment['user_name']) echo $comment['user_name']; else echo $comment['mobile']?>')">发布</a>
              </p>
            </li>
            <?php }?>
		</ul>
        </div>
        <?php if($count > 10)include('page.php');?>
      </div>
    </div>
    <div class="side">
      <div class="content">
        <div class="pcintro">
          <p class="avatar">
            <img src="<?php echo base_url() ?><?php if(isset($info['photo'])) echo $info['photo'];?>" />
          </p>
          <h2><?php if(isset($info['user_name']) && !empty($info['user_name'])) {echo $info['user_name'];} else {echo $info['mobile'];}?></h2>
          <p style="word-wrap: break-word;word-break: normal;margin-right: 30px; margin-left: 10px;"><?php if(isset($info['brief']) && !empty($info['brief'])) {echo $info['brief'];} else {echo '暂无';}?></p>
          <p>积分<?php if(isset($info['integral']) && !empty($info['integral'])) {echo $info['brief'];} else {echo '0';}?>分</p>
        </div>
      </div>
    </div>
  </div>
  <div class="footer">
    <div class="container">
      <p>
        <a href="" class="btn">
          <img src="<?php echo base_url().'static/' ?>images/f_down.png" />
        </a>
        <a href="" class="btn">
          <img src="<?php echo base_url().'static/' ?>images/f_qq.png" />
        </a>
        <a href="" class="btn">
          <img src="<?php echo base_url().'static/' ?>images/f_wx.png" />
        </a>
        <a href="" class="btn">
          <img src="<?php echo base_url().'static/' ?>images/f_wb.png" />
        </a>
      </p>
      <p class="link">
        <a href="javascript:;">咨询中心</a>
        |
        <a href="javascript:;">售后服务</a>
        |
        <a href="javascript:;">联系我们</a>
        |
        <a href="javascript:;">
          服务邮箱：
          <span>service@dding.net</span>
        </a>
      </p>
      <p class="right">Copyright © 2014  丁盯智能  京ICP备14039007号-1</p>
    </div>
  </div>
  <script type="text/javascript" src="<?php echo base_url().'static/' ?>script/jquery-1.7.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url().'static/' ?>script/jquery.rotate.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url().'static/' ?>script/script.js"></script>
</body>
</html>
