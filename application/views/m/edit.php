<!DOCTYPE html>
<html lang="zh-cn">
<head>
  <meta charset="UTF-8" />
  <title>丁盯智能门磁 - 云丁网络技术（北京）有限公司</title>
  <?php require_once('topHeader.php') ?>
</head>
<body class="mobile">
  <?php require_once('backHeader.php') ?>
  <div class="container">
    <div class="content pcedit">
        <h4>修改个人信息</h4>
        <div>
          <p class="avatar">
            <img src="<?php echo base_url() ?><?php if(isset($info['photo'])) echo $info['photo'];?>" />   
            <a href="#">上传头像</a>  
            <input type="file" name="uploadPhoto" form="user_form"/>
          </p>
        </div>
        <div class="right">
        <form id='user_form' action="<?php echo site_url('pc/opinion/do_edit') ?>" enctype="multipart/form-data" method="post" accept-charset="utf-8">
          <div class="base">
            <p>姓名</p>
            <input name="name" type="text" value="<?php if(isset($info['user_name']) && !empty($info['user_name'])) {echo $info['user_name'];} else {echo $info['mobile'];}?>"/>
            <p for="">个人描述</p>
            <textarea name="brief" cols="30" rows="10"><?php if(isset($info['brief']) && !empty($info['brief'])) {echo $info['brief'];} else {echo '暂无';}?></textarea>
          </div>
          <input type="submit" class="btn btn-a" value="确认">
        </form>
        </div>
        </div>
  </div>
  
  <?php require_once('topHeader.php') ?>

</body>
</html>