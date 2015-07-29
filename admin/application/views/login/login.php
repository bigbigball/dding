<title>丁盯后台管理系统</title>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-color: #1D3647;
}
-->
</style>
<script language="JavaScript">
function correctPNG()
{
    var arVersion = navigator.appVersion.split("MSIE")
    var version = parseFloat(arVersion[1])
    if ((version >= 5.5) && (document.body.filters)) 
    {
       for(var j=0; j<document.images.length; j++)
       {
          var img = document.images[j]
          var imgName = img.src.toUpperCase()
          if (imgName.substring(imgName.length-3, imgName.length) == "PNG")
          {
             var imgID = (img.id) ? "id='" + img.id + "' " : ""
             var imgClass = (img.className) ? "class='" + img.className + "' " : ""
             var imgTitle = (img.title) ? "title='" + img.title + "' " : "title='" + img.alt + "' "
             var imgStyle = "display:inline-block;" + img.style.cssText 
             if (img.align == "left") imgStyle = "float:left;" + imgStyle
             if (img.align == "right") imgStyle = "float:right;" + imgStyle
             if (img.parentElement.href) imgStyle = "cursor:hand;" + imgStyle
             var strNewHTML = "<span " + imgID + imgClass + imgTitle
             + " style=\"" + "width:" + img.width + "px; height:" + img.height + "px;" + imgStyle + ";"
             + "filter:progid:DXImageTransform.Microsoft.AlphaImageLoader"
             + "(src=\'" + img.src + "\', sizingMethod='scale');\"></span>" 
             img.outerHTML = strNewHTML
             j = j-1
          }
       }
    }    
}
window.attachEvent("onload", correctPNG);
</script>


<link href="<?php echo base_url().'style/' ?>images/skin.css"
	rel="stylesheet" type="text/css">
<body>
	<table width="100%" height="166" border="0" cellpadding="0"
		cellspacing="0">
		<tr>
			<td height="42" valign="top"><table width="100%" height="42"
					border="0" cellpadding="0" cellspacing="0" class="login_top_bg">
					<tr>
						<td width="1%" height="21">&nbsp;</td>
						<td height="42">&nbsp;</td>
						<td width="17%">&nbsp;</td>
					</tr>
				</table></td>
		</tr>
		<tr>
			<td valign="top"><table width="100%" height="532" border="0"
					cellpadding="0" cellspacing="0" class="login_bg">
					<tr>
						<td width="49%" align="right"><table width="91%" height="532"
								border="0" cellpadding="0" cellspacing="0" class="login_bg2">
								<tr>
									<td height="138" valign="top"><table width="89%" height="427"
											border="0" cellpadding="0" cellspacing="0">
											<tr>
												<td height="149">&nbsp;</td>
											</tr>
											<tr>
												<td height="80" align="center" valign="top"><img
													src="<?php echo base_url().'style/' ?>images/logo.png"
													width="279" height="68"></td>
											</tr>
											<tr>
												<td height="198" align="right" valign="top"><table
														width="100%" border="0" cellpadding="0" cellspacing="0">
														<tr>
															<td width="35%">&nbsp;</td>
															<td height="25" colspan="2" class="left_txt"><p>1-
																	门锁是智能家居的第一“入口”...</p></td>
														</tr>
														<tr>
															<td>&nbsp;</td>
															<td height="25" colspan="2" class="left_txt"><p>2-
																	用做手表的态度做门锁...</p></td>
														</tr>
														<tr>
															<td>&nbsp;</td>
															<td height="25" colspan="2" class="left_txt"><p>3-
																	支持密码指纹开锁及管理...</p></td>
														</tr>
														<tr>
															<td>&nbsp;</td>
															<td width="30%" height="40"><img
																src="<?php echo base_url().'style/' ?>images/icon-demo.gif"
																width="16" height="16"><!--a href="http://www.mycodes.net"
																target="_blank" class="left_txt3"> 使用说明</a-->
																<a href="#" class="left_txt3"> 使用说明</a>
																</td>
															<td width="35%"><img
																src="<?php echo base_url().'style/' ?>images/icon-login-seaver.gif"
																width="16" height="16"><!--a href="http://www.mycodes.net"
																class="left_txt3"> 在线客服</a-->
																<a href="#" class="left_txt3"> 在线客服</a>
																</td>
														</tr>
													</table></td>
											</tr>
										</table></td>
								</tr>

							</table></td>
						<td width="1%">&nbsp;</td>
						<td width="50%" valign="bottom"><table width="100%" height="59"
								border="0" align="center" cellpadding="0" cellspacing="0">
								<tr>
									<td width="4%">&nbsp;</td>
									<td width="96%" height="38"><span class="login_txt_bt">丁盯后台管理系统</span></td>
								</tr>
								<tr>
									<td>&nbsp;</td>
									<td height="21"><table cellSpacing="0" cellPadding="0"
											width="100%" border="0" id="table211" height="328">
											<tr>
												<td height="164" colspan="2" align="middle">
												<form name="myform" action="<?php echo site_url('login/login/login_in') ?>" method="post">
														<table cellSpacing="0" cellPadding="0" width="100%"
															border="0" height="143" id="table212">
															<tr>
																<td width="13%" height="38" class="top_hui_text"><span
																	class="login_txt">管理员：&nbsp;&nbsp; </span></td>
																<td height="38" colspan="2" class="top_hui_text"><input
																	name="username" class="editbox4" value="" size="20"></td>
															</tr>
															<tr>
																<td width="13%" height="35" class="top_hui_text"><span
																	class="login_txt"> 密 码： &nbsp;&nbsp; </span></td>
																<td height="35" colspan="2" class="top_hui_text"><input
																	class="editbox4" type="password" size="20"
																	name="password"> <img
																	src="<?php echo base_url().'style/' ?>images/luck.gif"
																	width="19" height="18"></td>
															</tr>
															<tr>
																<td width="13%" height="35"><span class="login_txt">验证码：</span></td>
																<td height="35" colspan="2" class="top_hui_text">
																<input class=wenbenkuang name="captcha" type=text value="" maxLength=4 size=10>
																<img src="<?php echo site_url('login/login/code') ?>"
																	width="60" height="20">
																</td>
															</tr>
															<tr>
																<td height="35">&nbsp;</td>
																<td width="20%" height="35">
																<input name="Submit" type="submit" class="button" id="Submit" value="登 陆">
																</td>
																<td width="67%" class="top_hui_text"><input name="cs"
																	type="reset" class="button" id="cs" value="取 消"
																	onClick="showConfirmMsg1()"></td>
															</tr>
														</table>
														
													</form></td>
											</tr>
											<tr>
												<td width="433" height="164" align="right" valign="bottom"><img
													src="<?php echo base_url().'style/' ?>images/login-wel.gif"
													width="242" height="138"></td>
												<td width="57" align="right" valign="bottom">&nbsp;</td>
											</tr>
										</table></td>
								</tr>
							</table></td>
					</tr>
				</table></td>
		</tr>
		<tr>
			<td height="20"><table width="100%" border="0" cellspacing="0"
					cellpadding="0" class="login-buttom-bg">
					<tr>
						<td align="center"><span class="login-buttom-txt">Copyright &copy;
								丁盯智能 www.dding.net</span></td>
					</tr>
				</table></td>
		</tr>
	</table>
