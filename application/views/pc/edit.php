<?php $this->load->view('pc/header.php');?>
	<div class="viewpoints">
		<div class="container">
			<div class="mpinfo">
				<p>
					<a href="<?php echo base_url() ?>pc/opinion/personal">个人中心 </a> <span class="tarrow"></span> <span>修改个人信息</span>
				</p>
			</div>
			<div class="content pcedit">
				<p class="contentTitle">修改个人信息</p>
				<div class="left">
					<p class="avatar">
						<img
							src="<?php echo base_url() ?><?php if(isset($info['photo'])) echo $info['photo']."?time=".mt_rand();?>" />
					</p>
					<?php echo form_open_multipart('pc/opinion/upload_photo');?>
						<input type="submit" class="btnp btn-p" value="上传头像" />
						<small style="font-size: 0.55em;"><?php if(isset($error)) echo $error;?></small>
					</form>
				</div>
				<div class="right">
				<form enctype="multipart/form-data" method="post" accept-charset="utf-8">
					<div class="base">
						<p>姓名</p>
						<input type="text" name='name' id='name' value="<?php if(isset($info['user_name']) && !empty($info['user_name'])) {echo $info['user_name'];} else {echo $info['mobile'];}?>" />
						<p>个人描述</p>
						<textarea name="brief" id='brief' cols="30" rows="10"
							placeholder="一个热爱生活的电子狂人！"><?php if(isset($info['brief']) && !empty($info['brief'])) {echo $info['brief'];} else {echo '暂无';}?></textarea>
					</div>
					<input type="submit" id="submit" class="btn btn-a" value="确认">
        		</form>
				</div>
			</div>
		</div>
	</div>
<?php $this->load->view('pc/footer.php');?>
<script>
$(document).ready(function() {
	$('#submit').click(function(){
		var name = $('#name').val();
		var brief = $('#brief').val();
		if(''==name || !name){
			alert('姓名不能为空，请重新输入！');
			return false;
		}
		data = 'name=' +name + '&brief='+ brief;
		$.ajax({
			type: 'POST',
			url: '<?php echo base_url()?>pc/opinion/do_edit',
			data: data,
			dataType: 'text',
			success: function(res) {
				if(0 == res){
					alert('该姓名已被使用，请重新输入！');
				} else if(1 == res){
					window.location.href = '<?php echo base_url()?>pc/opinion/personal';
				}
			}
		});
		return false;
	});
});
</script>