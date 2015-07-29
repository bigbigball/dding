<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<script language=JavaScript>
function logout(){
	if (confirm("您确定要退出控制面板吗？"));
	return false;
}
</script>

<link href="<?php echo base_url().'style/' ?>css/top.css" rel="stylesheet" type="text/css">
<title>丁盯后台管理系统</title>
</head>
<body leftmargin="0" topmargin="0">

<table width="100%" height="64" border="0" cellpadding="0" cellspacing="0" class="admin_topbg">
  <tr>
    <td width="61%" height="64"><img src="<?php echo base_url().'style/' ?>images/logo.gif" width="262" height="64"></td>
    <td width="39%" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="74%" height="38" class="admin_txt">
        管理员： <?php echo $this->session->userdata('username'); ?></td>
        
        <td width="22%">
        <a href="javascript:parent.location.href='<?php echo site_url().'/login/login/login_out'; ?>';alert('退出成功！');" onClick="return confirm('确定要退出吗？');"><img src="<?php echo base_url().'style/' ?>images/out.gif" alt="安全退出" width="46" height="20" border="0"></a></td>
        <td width="4%">&nbsp;</td>
      </tr>
      <tr>
        <td height="19" colspan="3">&nbsp;</td>
        </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
