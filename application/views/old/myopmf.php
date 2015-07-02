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
    <div class="location">
      <span> 
      <a href="<?php echo base_url() ?>opinion/personal">个人中心 </a>
      <i></i><a href="<?php echo base_url() ?>opinion/myop">丁盯门磁</a> <i></i> 编辑
      </span>
    </div>
    <div class="content">
      <div class="pcintro">
        <p class="avatar">
          <img src="<?php echo base_url() ?><?php if(isset($info['photo'])) echo $info['photo'];?>" />
        </p>
		<h2><?php if(isset($info['user_name']) && !empty($info['user_name'])) {echo $info['user_name'];} else {echo $info['mobile'];}?></h2>
        <p style="word-wrap: break-word;word-break: normal;margin-left: 20px;margin-right: 20px;"><?php if(isset($info['brief']) && !empty($info['brief'])) {echo $info['brief'];} else {echo '暂无';}?></p>
        <p>积分<?php if(isset($info['integral']) && !empty($info['integral'])) {echo $info['brief'];} else {echo '0';}?>分</p>
      </div>
      <div class="pro-eval">
        <div class="pic">
          <div class="upload">
            <h3>
              上传图片
            </h3>
            <div class="cur">
              <img src="<?php echo base_url().'static/' ?>images/temp/img_1.png" />
            </div>
            <div class="hint">
              <p>图片尺寸：500X500像素</p>
			  <input type="file" name="uploadImg" id="uploadImg" size="20" style="display: none;"/>
			  <input type="button" name="uploadBtn" id="uploadBtn" value="点击上传图片" 
			         style="width: 100%;display: block;padding: 12px 0;font-size: 20px;color: #333;background-color: #38c8a4;"
			  >
            </div>
          </div>
          <ul class="imglist">
            <li>
              <img id="img0" src="<?php echo base_url() ?><?php if(isset($pictures[0])) echo $pictures[0];?>" style="width: 60px;height: 60px;"/>
              <span class="del" id="del0"></span>
            </li>
            <li>
              <img id="img1" src="<?php echo base_url() ?><?php if(isset($pictures[1])) echo $pictures[1];?>" style="width: 60px;height: 60px;"/>
              <span class="del" id="del1"></span>
            </li>
            <li>
              <img id="img2" src="<?php echo base_url() ?><?php if(isset($pictures[2])) echo $pictures[2];?>" style="width: 60px;height: 60px;"/>
              <span class="del" id="del2"></span>
            </li>
            <li>
              <img id="img3" src="<?php echo base_url() ?><?php if(isset($pictures[3])) echo $pictures[3];?>" style="width: 60px;height: 60px;"/>
              <span class="del" id="del3"></span>
            </li>
            <li>
              <img id="img4" src="<?php echo base_url() ?><?php if(isset($pictures[4])) echo $pictures[4];?>" style="width: 60px;height: 60px;"/>
              <span class="del" id="del4"></span>
            </li>
          </ul>
        </div>
        <form action="<?php echo site_url('opinion/do_modify') ?>" enctype="multipart/form-data" method="post" accept-charset="utf-8" onsubmit="return checkOptionsInput();">
        <div class="pro-grade">
          <div class="stars">
            <h3> <em>*</em>
              产品打分
            </h3>
            <div class="row">
              <div class="col_l">外观</div>
              <div class="col_r">
                <div id="starBg" class="star_bg">
                  <label  class="star star_1 <?php if(isset($stars[0]) && $stars[0] == '1') echo 'checked';?>"></label>
                  <label  class="star star_2 <?php if(isset($stars[0]) && $stars[0] == '2') echo 'checked';?>"></label>
                  <label  class="star star_3 <?php if(isset($stars[0]) && $stars[0] == '3') echo 'checked';?>"></label>
                  <label  class="star star_4 <?php if(isset($stars[0]) && $stars[0] == '4') echo 'checked';?>"></label>
                  <label  class="star star_5 <?php if(isset($stars[0]) && $stars[0] == '5') echo 'checked';?>"></label>
                  <input  id="star" type="hidden" name="star1" value=""/>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col_l">稳定性</div>
              <div class="col_r">
                <div id="starBg" class="star_bg">
                  <label  class="star star_1 <?php if(isset($stars[1]) && $stars[1] == '1') echo 'checked';?>"></label>
                  <label  class="star star_2 <?php if(isset($stars[1]) && $stars[1] == '2') echo 'checked';?>"></label>
                  <label  class="star star_3 <?php if(isset($stars[1]) && $stars[1] == '3') echo 'checked';?>"></label>
                  <label  class="star star_4 <?php if(isset($stars[1]) && $stars[1] == '4') echo 'checked';?>"></label>
                  <label  class="star star_5 <?php if(isset($stars[1]) && $stars[1] == '5') echo 'checked';?>"></label>
                  <input  id="star" type="hidden" name="star2" value=""/>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col_l">智能</div>
              <div class="col_r">
                <div id="starBg" class="star_bg">
                  <label  class="star star_1 <?php if(isset($stars[2]) && $stars[2] == '1') echo 'checked';?>"></label>
                  <label  class="star star_2 <?php if(isset($stars[2]) && $stars[2] == '2') echo 'checked';?>"></label>
                  <label  class="star star_3 <?php if(isset($stars[2]) && $stars[2] == '3') echo 'checked';?>"></label>
                  <label  class="star star_4 <?php if(isset($stars[2]) && $stars[2] == '4') echo 'checked';?>"></label>
                  <label  class="star star_5 <?php if(isset($stars[2]) && $stars[2] == '5') echo 'checked';?>"></label>
                  <input  id="star" type="hidden" name="star3" value=""/>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col_l">功耗</div>
              <div class="col_r">
                <div id="starBg" class="star_bg">
                  <label  class="star star_1 <?php if(isset($stars[3]) && $stars[3] == '1') echo 'checked';?>"></label>
                  <label  class="star star_2 <?php if(isset($stars[3]) && $stars[3] == '2') echo 'checked';?>"></label>
                  <label  class="star star_3 <?php if(isset($stars[3]) && $stars[3] == '3') echo 'checked';?>"></label>
                  <label  class="star star_4 <?php if(isset($stars[3]) && $stars[3] == '4') echo 'checked';?>"></label>
                  <label  class="star star_5 <?php if(isset($stars[3]) && $stars[3] == '5') echo 'checked';?>"></label>
                  <input  id="star" type="hidden" name="star4" value=""/>
                </div>
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
              <input  id="score" type="hidden" name="score" value=""/>
          </div>
        </div>
      </div>
      <div class="pro-view">
        <h3> <em>*</em>
          产品观点
        </h3>
        <div class="inputbox">
        <textarea name="web_description" id="web_description" style="height:250px;">
        <?php if(isset($opinion['view'])) echo $opinion['view'];?>
        </textarea>
        </div>
      </div>
      <div class="finish">
        <input type="submit" class="btn btn-a" value="完&nbsp;&nbsp;成">
      </div>
      </form>
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
  <script type="text/javascript" src="<?php echo base_url().'static/' ?>script/ajaxfileupload.js"></script>
    <script src="<?php echo base_url().'static/' ?>script/keditor/kindeditor-min.js"></script>
    <script src="<?php echo base_url().'static/' ?>script/keditor/lang/zh_CN.js"></script>
	<script>
	$(document).ready(function(){
		var editor;
		KindEditor.ready(function(K) {
			editor = K.create('#web_description', {
				resizeType : 1,
				allowPreviewEmoticons : false,
				allowImageUpload : true,
				width : '100%',
				afterBlur: function(){this.sync('#web_description');},
			});
		});

		$("#uploadBtn").click(function(){
			$("#uploadImg").click();
		});

		//$("#uploadImg").change(function(){
		//	$("#upImgForm").submit();
		//});
		
		function showImglist(img_str){
			var imgs= new Array();
            imgs=img_str.split(",");
			$("#img0").attr('src','<?php echo base_url() ?>' + imgs[0]);
			$("#img1").attr('src','<?php echo base_url() ?>' + imgs[1]);
			$("#img2").attr('src','<?php echo base_url() ?>' + imgs[2]);
			$("#img3").attr('src','<?php echo base_url() ?>' + imgs[3]);
			$("#img4").attr('src','<?php echo base_url() ?>' + imgs[4]);
		}

		$("#uploadImg").live('change', function(){
			 $.ajaxFileUpload({
				 url: '<?php echo base_url() ?>opinion/upload_prodpic',
	             secureuri: false,
	             fileElementId: 'uploadImg',
	             dataType: 'text',
	             success: function (data, status)
	                      {
                            alert('上传成功！');
		                    showImglist(data);
		                   },
	             error: function (data, status, e)
	                    {
	                        alert('上传失败，请重新上传！');
	                    }
	          });
		});

		$("#del0").click(function(){
			$.ajax({
	        	url: '<?php echo base_url() ?>opinion/del_prodpic?index=0',
	        	type: 'post',
	        	datatype: 'text',
	        	success: function(data){
	            		  alert('删除成功!');
	            		  showImglist(data);
            	    },
	        	error: function(data, status, e){
	            	    alert('删除失败，请稍候重试!');
	            	}
	        	});
		});

		$("#del1").click(function(){
			$.ajax({
	        	url: '<?php echo base_url() ?>opinion/del_prodpic?index=1',
	        	type: 'post',
	        	datatype: 'text',
	        	success: function(data){
	            		  alert('删除成功!');
	            		  showImglist(data);
	            	    },
	        	error: function(data, status, e){
	            	    alert('删除失败，请稍候重试!');
	            	}
	        	});
		});

		$("#del2").click(function(){
			$.ajax({
	        	url: '<?php echo base_url() ?>opinion/del_prodpic?index=2',
	        	type: 'post',
	        	datatype: 'text',
	        	success: function(data){
	            		  alert('删除成功!');
	            		  showImglist(data)
	            	    },
	        	error: function(data, status, e){
	            	    alert('删除失败，请稍候重试!');
	            	}
	        	});
		});

		$("#del3").click(function(){
			$.ajax({
	        	url: '<?php echo base_url() ?>opinion/del_prodpic?index=3',
	        	type: 'post',
	        	datatype: 'text',
	        	success: function(data){
	            		  alert('删除成功!');
	            		  showImglist(data);	            		  
	            	    },
	        	error: function(data, status, e){
	            	    alert('删除失败，请稍候重试!');
	            	}
	        	});
		});

		$("#del4").click(function(){
			$.ajax({
	        	url: '<?php echo base_url() ?>opinion/del_prodpic?index=4',
	        	type: 'post',
	        	datatype: 'text',
	        	success: function(data){
	            		  alert('删除成功!');
	            		  showImglist(data);
	            	    },
	        	error: function(data, status, e){
	            	    alert('删除失败，请稍候重试!');
	            	}
	        	});
		});
	});
	function from_submit(){
		$("#local_form").submit();
	}
	</script>
</body>
</html>
