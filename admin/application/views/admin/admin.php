<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>丁盯后台管理系统</title>
</head>

<frameset rows="64,*"  frameborder="NO" border="0" framespacing="0">
	<frame src="<?php echo site_url().'/admin/home/header'; ?>" noresize="noresize" frameborder="no" name="topFrame" scrolling="no" marginwidth="0" marginheight="0" target="main" />
  <frameset cols="200,*"  id="frame">
	<frame src="<?php echo site_url().'/admin/home/meau'; ?>" name="leftFrame" noresize="noresize" marginwidth="0" marginheight="0" frameborder="0" scrolling="no" target="main" />
	<frame src="<?php echo site_url().'/admin/home/right'; ?>" name="main" marginwidth="0" marginheight="0" frameborder="0" scrolling="auto" target="_self" />
  </frameset>
  </frameset>
<noframes>
  <body></body>
    </noframes>
</html>