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
	    	UE.getEditor('description');  
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
					<b>您当前位置：</b>招聘管理中心>>添加新职位
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
								<form action="<?php echo site_url('jobs/jobs/addArticle') ?>" method="POST" enctype="multipart/form-data">
									<table class="form_table pt15 pb15" width="100%" border="0"
										cellpadding="0" cellspacing="0">
										<tr>
											<td class="td_right fs">招聘职位：</td>
											<td class=""><input type="text" name="position"
												class="input-text lh30" size="40"
												value="<?php echo set_value('position')?>" />
												
												<?php echo form_error('position','<span>','</span>')?>
												
											</td>
											<td></td>

										</tr>
										
										<tr>
											<td class="td_right fs">类型：</td>
											<td class="fs"><input type="radio" name="type" value="0"
												<?php echo set_radio('type','0',TRUE)?> /> 全职 &nbsp;&nbsp; <input
												type="radio" name="type" value="1"
												<?php echo set_radio('type','1')?> /> 实习&nbsp;&nbsp; <input
												type="radio" name="type" value="2"
												<?php echo set_radio('type','2')?> /> 全职/实习</td>
										</tr>
										
										<tr>
											<td class="td_right fs">薪资范围：</td>
											<td class=""><input type="text" name="salary"
												class="input-text lh30" size="40"
												value="<?php echo set_value('salary')?>" />
											<?php echo form_error('salary','<span>','</span>')?>
											</td>

										</tr>
										<tr>
											<td class="td_right fs">工作年限：</td>
											<td class=""><input type="text" name="age"
												class="input-text lh30" size="40"
												value="<?php echo set_value('age')?>" />
											<?php echo form_error('age','<span>','</span>')?>
											</td>

										</tr>
										<tr>
											<td class="td_right fs">学历程度：</td>
											<td class=""><input type="text" name="education"
												class="input-text lh30" size="40"
												value="<?php echo set_value('education')?>" />
											<?php echo form_error('education','<span>','</span>')?>
											</td>

										</tr>
										
										<tr>
											<td class="td_right fs">显示顺序：</td>
											<td class=""><input type="text" name="rank"
												placeholder="比如1,2,3..." class="input-text lh30" size="40"
												value="<?php echo set_value('rank')?>"></td>

										</tr>
										
										
										<tr>
											<td class="td_right fs">职位描述：</td>
											<td><textarea name="description" id="description"
													style="width: 550px; height: 500px;"><?php echo set_value('description') ?></textarea>
				                                  <?php echo form_error('description', '<span>', '</span>')?>
			                                </td>
										</tr>

										<tr>
											<td class="td_right">&nbsp;</td>
											<td class=""><input type="submit"
												class="btn btn82 btn_save2 fs" value="保存"> <input
												type="reset" name="button" class="btn btn82 btn_res fs"
												value="重置"> <a
												href="<?php echo site_url().'/jobs/jobs/jobsList'; ?>">
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
