<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>管理页面</title>

<script src="<?php echo base_url().'style/' ?>js/prototype.lite.js" type="text/javascript"></script>
<script src="<?php echo base_url().'style/' ?>js/moo.fx.js" type="text/javascript"></script>
<script src="<?php echo base_url().'style/' ?>js/moo.fx.pack.js" type="text/javascript"></script>
<link href="<?php echo base_url().'style/' ?>css/left.css" rel="stylesheet" type="text/css">
<style>
body {
	font: 12px Arial, Helvetica, sans-serif;
	color: #000;
	background-color: #EEF2FB;
	margin: 0px;
}

</style>
</head>

<body>
<table width="100%" height="280" border="0" cellpadding="0" cellspacing="0" bgcolor="#EEF2FB">
  <tr>
    <td width="182" valign="top"><div id="container">
      <h1 class="type"><a href="javascript:void(0)">观点评论管理</a></h1>
      <div class="content">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><img src="<?php echo base_url().'style/' ?>images/menu_topline.gif" width="182" height="5" /></td>
          </tr>
        </table>
        <ul class="MM">
          
          <li><a href="<?php echo site_url().'/view/opinion/opinionList'; ?>" target="main">观点管理</a></li>
          <li><a href="<?php echo site_url().'/view/comment/commentList'; ?>" target="main">评论管理</a></li>
          <li></li>
          <li></li>
        </ul>
      </div>
      <h1 class="type"><a href="javascript:void(0)">招聘中心管理</a></h1>
      <div class="content">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><img src="<?php echo base_url().'style/' ?>images/menu_topline.gif" width="182" height="5" /></td>
          </tr>
        </table>
        <ul class="MM">    
          <li><a href="<?php echo site_url().'/jobs/jobs/jobsList'; ?>" target="main">招聘管理</a></li>
          <!--  --li><a href="" target="main">积分管理</a></li-->
          <li></li>
          <li></li>
        </ul>
      </div>
      <h1 class="type"><a href="javascript:void(0)">新闻中心管理</a></h1>
      <div class="content">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><img src="<?php echo base_url().'style/' ?>images/menu_topline.gif" width="182" height="5" /></td>
          </tr>
        </table>
        <ul class="MM">    
          <li><a href="<?php echo site_url().'/news/news/newsList'; ?>" target="main">新闻管理</a></li>
          <li><a href="<?php echo site_url().'/dynamic/dynamic/dynamicList'; ?>" target="main">动态管理</a></li>
          <!--  --li><a href="" target="main">积分管理</a></li-->
          <li></li>
          <li></li>
        </ul>
      </div>
      <h1 class="type"><a href="javascript:void(0)">用户中心管理</a></h1>
      <div class="content">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><img src="<?php echo base_url().'style/' ?>images/menu_topline.gif" width="182" height="5" /></td>
          </tr>
        </table>
        <ul class="MM">    
          <li><a href="<?php echo site_url().'/user/user/userList'; ?>" target="main">用户管理</a></li>
          <li><a href="<?php echo site_url().'/questions/questions/questionsList'; ?>" target="main">问题管理</a></li>
          <!--  --li><a href="" target="main">积分管理</a></li-->
          <li></li>
          <li></li>
        </ul>
      </div>
   
        <h1 class="type"><a href="javascript:void(0)">系统参数管理</a></h1>
      <div class="content">
          <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td><img src="<?php echo base_url().'style/' ?>images/menu_topline.gif" width="182" height="5" /></td>
            </tr>
          </table>
        <ul class="MM">
          <!--li><a href="http://www.mycodes.net" target="main">系统参数</a></li-->
          <li><a href="<?php echo site_url().'/sysconfig/sysconfig/modifyPass'; ?>" target="main">修改密码</a></li>
          <li></li>
          <li></li>
        </ul>
      </div>
      </div>
        <script type="text/javascript">
		var contents = document.getElementsByClassName('content');
		var toggles = document.getElementsByClassName('type');
	
		var myAccordion = new fx.Accordion(
			toggles, contents, {opacity: true, duration: 400}
		);
		myAccordion.showThisHideOpen(contents[0]);
	</script>
        </td>
  </tr>
</table>
</body>
</html>
