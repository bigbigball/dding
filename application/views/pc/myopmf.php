<?php $this->load->view('pc/header.php');?>
  <div class="viewpoints">
    <div class="container">
      <div class="mpinfo">
	<p>
          <a href="<?php echo base_url() ?>pc/opinion/personal">个人中心 </a>
          <span class="tarrow"></span>
          <span>修改观点</span>
        </p>
      </div>
      <div class="content">
        <div class="pcintro">
          <ul>
            <li class="avatar">
              <img src="<?php echo base_url() ?><?php if(isset($info['photo'])) echo $info['photo'];?>" />
            </li>
            <li>
              <p class="name"><?php if(isset($info['user_name']) && !empty($info['user_name'])) {echo $info['user_name'];} else {echo $info['mobile'];}?></p>
            </li>
            <li>
              <p class="describe"><?php if(isset($info['brief']) && !empty($info['brief'])) {echo $info['brief'];} else {echo '暂无';}?></p>
            </li>
            <li>
              <p>
                <?php if(isset($info['integral']) && !empty($info['integral'])) {echo $info['brief'];} else {echo '0';}?>
                <img src="<?php echo base_url().'style/pc/' ?>images/coin.png" style="height: 11px;">
              </p>
            </li>
          </ul>
        </div>
        <div class="pro-eval">
        <div class="pic">
          <div class="upload">
            <p> <em>*</em>
              上传图片
            </p>
            <div class="cur">
              <img src="<?php echo base_url().'style/pc/' ?>images/temp/img_1.png" />
            </div>
            <div class="hint">
              <p>图片尺寸：500X500像素</p>
              <a href="">点击上传图片</a>
              <input type="file" class="chfile" id="uploadImg" name="uploadImg"/>
            </div>
          </div>
          <ul class="imglist">
            <li>
              <img id="img0" src="<?php echo base_url() ?><?php if(isset($pictures[0])) echo $pictures[0];else echo "style/pc/images/temp/img_1.png";?>" height="100%" width="100%" />
              <a id="del0" class="del"></a>
            </li>
            <li>
              <img id="img1" src="<?php echo base_url() ?><?php if(isset($pictures[1])) echo $pictures[1];else echo "style/pc/images/temp/img_1.png";?>" height="100%" width="100%" />
              <a id="del1" class="del"></a>
            </li>
            <li>
              <img id="img2" src="<?php echo base_url() ?><?php if(isset($pictures[2])) echo $pictures[2];else echo "style/pc/images/temp/img_1.png";?>" height="100%" width="100%" />
              <a id="del2" class="del"></a>
            </li>
            <li>
              <img id="img3" src="<?php echo base_url() ?><?php if(isset($pictures[3])) echo $pictures[3];else echo "style/pc/images/temp/img_1.png";?>" height="100%" width="100%" />
              <a id="del3" class="del"></a>
            </li>
            <li>
              <img id="img4" src="<?php echo base_url() ?><?php if(isset($pictures[4])) echo $pictures[4];else echo "style/pc/images/temp/img_1.png";?>" height="100%" width="100%" />
              <a id="del4" class="del"></a>
            </li>            
          </ul>
        </div>
         <form action="<?php echo site_url('pc/opinion/do_modify') ?>" enctype="multipart/form-data" method="post" accept-charset="utf-8" onsubmit="return checkOptionsInput();">
        <div class="pro-grade" style="width:47%;">
          <div class="stars">
            <p> <em>*</em>
              产品打分
            </p>
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
            <div class="circle-percent">
                <span class="score"><?php if(isset($opinion['score'])) echo $opinion['score']; else echo '0';?>分</span>
                <div class="left"><img src="<?php echo base_url().'style/pc/' ?>images/circle_r.png" /></div>
                <div class="cover"></div>
                <div class="right"><img src="<?php echo base_url().'style/pc/' ?>images/circle_l.png" /></div>
              </div>
              <input  id="score" type="hidden" name="score" value=""/>
          </div>
        </div>
      </div>
      <div class="pro-view">
        <p> <em>*</em>
          产品观点
        </p>
        <div class="inputbox">
          <textarea name="web_description" id="web_description" cols="30" rows="15">
          <?php if(isset($opinion['view'])) echo $opinion['view'];?>
          </textarea>    
        </div>
      </div>
      <div class="finish">
        <input type="submit" class="btn btn-a" value="完&nbsp;&nbsp;成">
      </div>
    </div>
  </div>

<?php $this->load->view('pc/footer.php');?>
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

		//$("#uploadBtn").click(function(){
		//	$("#uploadImg").click();
		//});

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
				 url: '<?php echo base_url() ?>pc/opinion/upload_prodpic',
	             secureuri: false,
	             fileElementId: 'uploadImg',
	             dataType: 'json',
	             success: function (data)
	                      {
                            if(1 == data.status){
                            	alert('上传成功！');
                            	showImglist(data.text);
                            }else{
                                alert(data.text);
                            }
		                   },
	             error: function (data, status, e)
	                    {
	                        alert('上传失败，请重新上传！');
	                    }
	          });
		});

		$("#del0").click(function(){
			$.ajax({
	        	url: '<?php echo base_url() ?>pc/opinion/del_prodpic?index=0',
	        	type: 'post',
	        	dataType: 'json',
	        	success: function(data){
		        	     if(1 == data.status){
	            		     alert('删除成功!');
	            		     showImglist(data.text);
	            		 }else{
	            		     alert(data.text);
		                 }
            	    },
	        	error: function(data, status, e){
	            	    alert('删除失败，请稍候重试!');
	            	}
	        	});
		});

		$("#del1").click(function(){
			$.ajax({
	        	url: '<?php echo base_url() ?>pc/opinion/del_prodpic?index=1',
	        	type: 'post',
	        	dataType: 'json',
	        	success: function(data){
	        		     if(1 == data.status){
           		             alert('删除成功!');
           		             showImglist(data.text);
           		         }else{
           		             alert(data.text);
	                     }
	                },
	        	error: function(data, status, e){
	            	    alert('删除失败，请稍候重试!');
	            	}
	        	});
		});

		$("#del2").click(function(){
			$.ajax({
	        	url: '<?php echo base_url() ?>pc/opinion/del_prodpic?index=2',
	        	type: 'post',
	        	dataType: 'json',
	        	success: function(data){
	        		     if(1 == data.status){
           		             alert('删除成功!');
           		             showImglist(data.text);
           		         }else{
           		             alert(data.text);
	                     }
	            	},
	        	error: function(data, status, e){
	            	    alert('删除失败，请稍候重试!');
	            	}
	        	});
		});

		$("#del3").click(function(){
			$.ajax({
	        	url: '<?php echo base_url() ?>pc/opinion/del_prodpic?index=3',
	        	type: 'post',
	        	dataType: 'json',
	        	success: function(data){
	        		     if(1 == data.status){
           		             alert('删除成功!');
           		             showImglist(data.text);
           		         }else{
           		             alert(data.text);
	                     }            		  
	            	},
	        	error: function(data, status, e){
	            	    alert('删除失败，请稍候重试!');
	            	}
	        	});
		});

		$("#del4").click(function(){
			$.ajax({
	        	url: '<?php echo base_url() ?>pc/opinion/del_prodpic?index=4',
	        	type: 'post',
	        	dataType: 'json',
	        	success: function(data){
	        		     if(1 == data.status){
           		             alert('删除成功!');
           		             showImglist(data.text);
           		         }else{
           		             alert(data.text);
	                     }
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
