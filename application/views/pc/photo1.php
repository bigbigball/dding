<!--  -DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <title>丁盯智能门磁 - 云丁网络技术（北京）有限公司</title>
  <link rel="icon" href="favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="<?php echo base_url() ?>favicon.ico" type="image/x-icon" />
  <link href="<?php echo base_url().'static/' ?>style/style.css" rel="stylesheet" charset="utf-8" />
  <script type="text/javascript">
    function updateavatar() {
        //window.location.reload();
    	//window.location.href='edit';
    	$.ajax({
        	url: '<?php echo base_url() ?>pc/opinion/getavatar',
        	success: function(data){
            	      data = '<?php echo base_url() ?>' + data + "?time=" + <?php echo mt_rand(1, 100)?>;	  
		      $("#ps_avatar").attr('src',data);
            	      $("#nf_avatar").attr('src',data);
            	    },
        	error: function(result){
            	    alert('数据获取有误!');
            	}
        	});
    }
  </script>
</head>
<body>
  <div class="header">
    <div class="container clearfix">
      <div class="logo">
        <img src="<?php echo base_url().'static/' ?>images/logo.png" />
      </div>
      <a href="<?php echo base_url() ?>opinion/personal?id=<?php if(isset($opinion['user_id'])) echo $opinion['user_id'];?>" class="btn">
        <img id="ps_avatar" src="<?php echo base_url() ?><?php if(isset($info['photo'])) echo $info['photo']."?time=".mt_rand();?>" />
      </a>
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
  </div-->
  
<?php $this->load->view('pc/header.php');?>
  <div class="viewpoints">
    <div class="container">
    <!--  --div class="location"-->
      <!--  --div class="mpinfo">
        <span><a href="<?php echo base_url() ?>opinion/personal">个人中心 </a>
        <i></i>修改</span>
      </div-->
      <div class="mpinfo">
		<p>
		  <a href="<?php echo base_url() ?>pc/opinion/personal">个人中心 </a> <span class="tarrow"></span> <span>修改个人头像</span>
		</p>
	  </div>
      <div class="content pcedit">
        <h4>修改个人头像</h4>
        <div class="left">
          <p class="avatar">
            <img id="nf_avatar" src="<?php echo base_url() ?><?php if(isset($info['photo'])) echo $info['photo']."?time=".mt_rand();?>" />        
          </p>
			<?php echo form_open_multipart('opinion/upload_photo');?>
			<br> 
			<p>姓名：<?php if(isset($info['user_name']) && !empty($info['user_name'])) {echo $info['user_name'];} else {echo $info['mobile'];}?></p>
			<small style="font-size: 0.55em;"><?php if(isset($error)) echo $error;?></small>
			</form>
        </div>
        <div class="right">
        <form action="<?php echo site_url('pc/opinion/edit') ?>" enctype="multipart/form-data" method="post" accept-charset="utf-8">
          <div class="base">
             <?php echo $info['avatarflash']; ?>
          </div>
          <input type="submit" class="btn btn-a" value="返回">
        </form>
        </div>
      </div>
    </div>
  </div>

  <?php $this->load->view('pc/footer.php');?>
  <!--  --div class="footer">
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
        <a href="javascript:;">服务邮箱：<span>service@dding.net</span></a>
      </p>
      <p class="right">Copyright © 2014  丁盯智能  京ICP备14039007号-1</p>
    </div>
  </div-->
  <script type="text/javascript" src="<?php echo base_url().'static/' ?>script/jquery-1.7.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url().'static/' ?>script/script.js"></script>
  <script type="text/javascript">
    function updateavatar() {
        //window.location.reload();
    	//window.location.href='edit';
    	$.ajax({
        	url: '<?php echo base_url() ?>pc/opinion/getavatar',
        	success: function(data){
            	      data = '<?php echo base_url() ?>' + data + "?time=" + <?php echo mt_rand(1, 100)?>;	  
		      $("#ps_avatar").attr('src',data);
            	      $("#nf_avatar").attr('src',data);
            	    },
        	error: function(result){
            	    alert('数据获取有误!');
            	}
        	});
    }
  </script>
</body>
</html>
