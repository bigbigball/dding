
<!DOCTYPE html>
<html lang="zh-cn">
<head>
  <meta charset="UTF-8" />
  <title>APP下载-丁盯官网</title>
  <?php require_once('topHeader.php') ?>
</head>
<body class="mobile" data-menu="5">
  <?php require_once('header.php') ?>
  <div class="container download">
  <h2>APP下载</h2>
  <h3>丁盯全部产品一个APP搞定</h3>
  <p>Android2.3/iOS6.0及以上系统适用</p>
  <input type="button" value="下载APP" class="btn btn-a">
  <p class="comment">注：Android4.3及以上系统支持蓝牙开锁, <br/>
 iOS7.0及以上系统支持摇动开锁。</p>
  </div>
  <?php require_once('footer.php') ?>
  
  <?php require_once('topHeader.php') ?>

  <script>
  jQuery('input').click(function(){
  	if(navigator.userAgent.indexOf('Mac')>1) location.href = "https://itunes.apple.com/cn/app/ding-ding-zhi-neng/id918361877?mt=8&uo=4";
  	else location.href = "http://dd-release.bj.bcebos.com/android/dingding_yunding.apk";
  });
  </script>
</body>
</html>