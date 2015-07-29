<style type="text/css">
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-color: #F8F9FA;
	font-size: 12px;
}

.fs {
	font-size: 12px;
}

span {
	color: red;
	font-size: 12px;
}
</style>


<link rel="stylesheet"
	href="<?php echo base_url().'style/' ?>css/common.css">
<link rel="stylesheet"
	href="<?php echo base_url().'style/' ?>css/main1.css">


<script type="text/javascript"
	src="<?php echo base_url().'style/' ?>js/jquery.min.js"></script>
<script type="text/javascript"
	src="<?php echo base_url().'style/' ?>js/colResizable-1.3.min.js"></script>
<script type="text/javascript"
	src="<?php echo base_url().'style/' ?>js/common.js"></script>

<script type="text/javascript" src="<?php echo base_url().'style/' ?>ueditor/ueditor.config.js"></script>
   <script type="text/javascript" src="<?php echo base_url().'style/' ?>ueditor/ueditor.all.js"></script>
	
	

<script type="text/javascript">
	    window.UEDITOR_CONFIG.UEDITOR_HOME_URL = '<?php echo base_url().'style/' ?>ueditor/'; 
	    window.onload = function(){
	    	window.UEDITOR_CONFIG.initialFrameWidth = 800;
	    	window.UEDITOR_CONFIG.initialFrameHeight = 320;
	    	UE.getEditor('content');  
	    }
	</script>

<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">

<body>
	<link href="<?php echo base_url().'style/' ?>css/main.css"
		rel="stylesheet" type="text/css">
	<table width="100%" border="0" cellpadding="0" cellspacing="0">
		<tbody>
			<tr>
				<td width="17" valign="top"
					background="<?php echo base_url().'style/' ?>images/main_leftbg.gif">
					<img src="<?php echo base_url().'style/' ?>images/left-top.gif"
					width="17" height="26">
				</td>
				<td style="font-size: 12px" valign="middle"
					background="<?php echo base_url().'style/' ?>images/content-bg.gif">
					<b>您当前位置：</b>留学申请>>添加留学资讯
				</td>
				<td width="17" valign="top"
					background="<?php echo base_url().'style/' ?>images/main_rightbg.gif">
					<img src="<?php echo base_url().'style/' ?>images/right-top.gif"
					width="17" height="26">
				</td>
			</tr>
			<tr>
				<td valign="middle"
					background="<?php echo base_url().'style/' ?>images/main_leftbg.gif">&nbsp;</td>
				<td></td>
				<td
					background="<?php echo base_url().'style/' ?>images/main_rightbg.gif">&nbsp;</td>
			</tr>
			<tr>
				<td valign="middle"
					background="<?php echo base_url().'style/' ?>images/main_leftbg.gif">&nbsp;</td>
				<td valign="top" bgcolor="#F7F8F9">
					<table width="100%" border="0" cellspacing="0" cellpadding="0">

						
							<tr>
								<td colspan="4">
								<form action="<?php echo site_url('apply/appTip/addArticle') ?>" method="POST" enctype="multipart/form-data">
									<table class="form_table pt15 pb15" width="100%" border="0"
										cellpadding="0" cellspacing="0">
										<tr>
											<td class="td_right fs">文章标题：</td>
											<td class=""><input type="text" name="title"
												class="input-text lh30" size="40"
												value="<?php echo set_value('title')?>" />
												
												<?php echo form_error('title','<span>','</span>')?>
												
											</td>
											<td></td>

										</tr>
										<tr>
											<td class="td_right fs">发布人：</td>
											<td class=""><input type="text" name="author"
												class="input-text lh30" size="40"
												value="<?php echo set_value('author')?>" />
											<?php echo form_error('author','<span>','</span>')?>
											</td>

										</tr>
										<tr>
											<td class="td_right fs">发表时间：</td>
											<td class=""><input type="text" name="ctime"
												class="input-text lh30" size="40"
												value="<?php echo set_value('ctime')?>" />
											<?php echo form_error('ctime','<span>','</span>')?>
											</td>

										</tr>
										<tr>
											<td class="td_right fs">文章类型：</td>
											<td class="fs"><input type="radio" name="type" value="0"
												<?php echo set_radio('type','0',TRUE)?> /> 留学 &nbsp;&nbsp; <input
												type="radio" name="type" value="1"
												<?php echo set_radio('type','1')?> /> 面试&nbsp;&nbsp; <input
												type="radio" name="type" value="2"
												<?php echo set_radio('type','2')?> /> 签证</td>
										</tr>
										<tr>
											<td class="td_right fs">文章来源：</td>
											<td class=""><input type="text" name="source"
												class="input-text lh30" size="40"
												value="<?php echo set_value('source')?>" /></td>
										</tr>
										<tr>
											<td class="td_right fs">显示位置：</td>
											<td class=""><input type="text" name="position"
												placeholder="比如1,2,3..." class="input-text lh30" size="40"
												value="<?php echo set_value('position')?>"></td>

										</tr>
										<tr>
											<td class="td_right fs">发表状态：</td>
											<td class="fs"><input type="radio" name="status" value="0"
												<?php echo set_radio('status','0',TRUE)?> /> 发布&nbsp;&nbsp;
												<input type="radio" name="status" value="1"
												<?php echo set_radio('status','1')?>> 未发布
										
										</tr>

										<tr>
											<td class="td_right fs">摘要：</td>
											<td class=""><textarea name="desc" id="" cols="30" rows="6"
													class="textarea"><?php echo set_value('desc')?></textarea>
											<?php echo form_error('desc','<span>','</span>')?>
											</td>
										</tr>
										<tr>
											<td class="td_right fs">正文：</td>
											<td><textarea name="content" id="content"
													style="width: 550px; height: 500px;"><?php echo set_value('content') ?></textarea>
				                                  <?php echo form_error('content', '<span>', '</span>')?>
			                                </td>
										</tr>

										<tr>
											<td class="td_right">&nbsp;</td>
											<td class=""><input type="submit"
												class="btn btn82 btn_save2 fs" value="保存"> <input
												type="reset" name="button" class="btn btn82 btn_res fs"
												value="重置"> <a
												href="<?php echo site_url().'/apply/appTip/appTipList'; ?>">
													<input type="button" name="button"
													class="btn btn82 btn_config fs" value="返回">
											</a></td>
										</tr>


									</table>
									</form>
								</td>
							</tr>


						
					</table>
				</td>
				<td
					background="<?php echo base_url().'style/' ?>images/main_rightbg.gif">&nbsp;</td>
			</tr>
			<tr>
				<td valign="middle"
					background="<?php echo base_url().'style/' ?>images/main_leftbg.gif">&nbsp;</td>
				<td valign="top" bgcolor="#F7F8F9"></td>
				<td
					background="<?php echo base_url().'style/' ?>images/main_rightbg.gif">&nbsp;</td>
			</tr>
			<tr>
				<td valign="bottom"
					background="<?php echo base_url().'style/' ?>images/main_leftbg.gif"><img
					src="<?php echo base_url().'style/' ?>images/left_buttom.gif"
					width="17" height="17"></td>
				<td
					background="<?php echo base_url().'style/' ?>images/buttom_bgs.gif">
				</td>
				<td valign="bottom"
					background="<?php echo base_url().'style/' ?>images/main_rightbg.gif"><img
					src="<?php echo base_url().'style/' ?>images/right_buttom.gif"
					width="16" height="17"></td>
			</tr>
		</tbody>
	</table>

</body>
