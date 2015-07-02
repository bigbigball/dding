<?php $this->load->view('pc/header.php');?>
	<div class="viewpoints">
		<div class="container">
			<div class="mpinfo">
				<p>
					<a href="<?php echo base_url() ?>pc/opinion/personal">个人中心 </a> <span class="tarrow"></span> <span>修改个人头像</span>
				</p>
			</div>
			<div class="content pcedit">
				<p class="contentTitle">修改个人头像</p>
				<div class="left">
					<p class="avatar">
						<img
							id="nf_avatar" src="<?php echo base_url() ?><?php if(isset($info['photo'])) echo $info['photo']."?time=".mt_rand();?>" />
					</p>
					<?php echo form_open_multipart('pc/opinion/upload_photo');?>
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

<script type="text/javascript">
    function updateavatar() {
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