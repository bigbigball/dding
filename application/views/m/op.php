<!DOCTYPE html>
<html lang="zh-cn">
<head>
  <meta charset="UTF-8" />
  <title><?php if(isset($ownerinfo['user_name']) && !empty($ownerinfo['user_name'])) {echo $ownerinfo['user_name'];} else {echo $ownerinfo['mobile'];}?>的门磁观点-丁盯官网</title>
  <?php require_once('topHeader.php') ?>
</head>
<body class="mobile">
  <?php require_once('backHeader.php') ?>
  <div class="container">
    <div class="main">
      <div class="content">
        <div class="title">
          <h4>丁盯门磁</h4>
          <!-- <a href="<?php echo base_url() ?>pc/opinion/myopmf" class="btn btn-b" 
          <?php if(isset($info['id']) && isset($user_id) && $info['id'] == $user_id){} else echo "style='display: none;'";?>>编 辑</a> -->
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
          <div class="info" style="word-break: break-all;">
			<?php if(isset($opinion['view'])) echo $opinion['view'];?>
          </div>
          <div class="aq">追问（共<?php if(isset($count)) echo $count;?>条）</div>
        </div>
        <div class="talk">
          <span>谈谈你的观点呢</span>
          <form action="<?php echo site_url('pc/opinion/comment') ?>" enctype="multipart/form-data" method="post" accept-charset="utf-8">
          <input type="hidden" name="opid" value="<?php if(isset($opinion['id'])) echo $opinion['id'];?>"/>
          <textarea cols="40" rows="8" name="content" id="fb_textarea" ></textarea>
          <input type="submit" value="发布" class="btn btn-a">
          </form>
          <ul class="listview">
          <?php foreach($comments as $comment){?>
            <li class="li-icon">
              <img src="<?php echo base_url() ?><?php if(isset($comment['photo'])) echo $comment['photo'];?>" />
              <h3><?php if(isset($comment['user_name']) && $comment['user_name']) echo $comment['user_name']; else echo $comment['mobile']?>
              <?php if(isset($comment['target']) && $comment['target']){?>
              <span style="color:#aaa;padding:5px;">回复</span><?php echo $comment['target']?></h3>
              <?php }else{?>
              </h3>
              <p class="pcoin">
                <img src="<?php echo base_url()?>static/images/jz.png" class="jz_img">
                <img src="<?php echo base_url()?>static/images/coin_bg.png" style="margin:0 3%;">
                <span class="tcoin"><span><?php if(isset($comment['integral'])) echo $comment['integral']; else echo '0'?></span>丁币
                  <img src="<?php echo base_url()?>static/images/coin.png" style="height: 11px;">
                </span>
              </p>
              <?php }?>
              <p>
              <?php if(isset($comment['content'])) echo $comment['content'];?>
              </p>
              <p class="btn_p">
                <a class="btn btn-c" style="right:30%;<?php if(isset($ownerinfo['id']) && isset($user_id) && $ownerinfo['id'] == $user_id){} 
                          else if(isset($comment['owner_id']) && $comment['owner_id'] != $user_id) echo "display: none;";?>" 
                          onclick="delcommet('<?php echo base_url()?>pc/opinion/delcom', <?php if(isset($comment['id'])) echo $comment['id'];?>)">删除</a>
                <a class="btn btn-c" id="reply" onclick="replyOther(this)">回复</a>
              </p>
              <p class="area_p" style="display:;">
                <textarea cols="40" rows="8" name="textarea" id="fb_textarea" ></textarea>
                <span class="answer"><img src="<?php echo base_url().'static/' ?>images/talk_up.png" /></span>
                <a class="btn btn-a" onClick="sendReply(this,'<?php echo base_url()?>pc/opinion/reply',<?php if(isset($opinion['id'])) echo $opinion['id'];?>,
                '<?php if(isset($comment['user_name']) && $comment['user_name']) echo $comment['user_name']; else echo $comment['mobile']?>')">发布</a>
              </p>
            </li>
            <?php }?>
		</ul>
        </div>
        <?php include('page.php');?>
      </div>
    </div>

  </div>
 
  <script type="text/javascript" src="<?php echo base_url().'static/' ?>script/jquery-1.7.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url().'static/' ?>script/jquery.rotate.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url().'static/' ?>script/m/script.js"></script>
  <script>  
 function delcommet(url, id) {
  if (confirm("确认删除")) {
    jQuery.ajax({
        type: 'POST',
        url: url,
        data: {id:id},
        dataType: 'json',
        success: function(data){
          if(data.errno == 0) {
            location.reload();
          } else {
            alert('删除失败');
          }
        }
      });
  } else {
    return false;
  }
  };

  //added by dpfl at 2015-04-10
  function replyOther(self){
    var jQueryarea_p = jQuery(jQuery(self).parent().parent().find('.area_p'));
    if(jQueryarea_p.css('display') == 'none')
    {
      jQueryarea_p.css('display','block');
    }
    else
    {
      jQueryarea_p.css('display','none');
    }
  }
  function sendReply (self,url,opid,target) {
    var text = jQuery(self).parent().find('textarea').val();
    if(text=="")
    {
       alert("请输入评论后再发表");
       return false;
    }
    jQuery.ajax({
      type: 'POST',
      url: url,
      data: {opid:opid,target:target,content:text},
      dataType: 'json',
      success: function(data){
        if(data.errno == 0) {
          location.reload();
        } else {
          alert('删除失败');
        }
      }
    });
    jQuery(self).parent().css('display','none');
    return true;
  }

  
  // JavaScript Document
  </script>
</body>
</html>
