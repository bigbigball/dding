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
span{
	color:red;
	font-size:12px;
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
	    	window.UEDITOR_CONFIG.initialFrameHeight = 250;
	    	UE.getEditor('view');  
	    }
	</script>


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
					<b>您当前位置：</b>观点评论管理>>观点审核
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
								<form action="<?php echo site_url('view/opinion/editArticle') ?>" class="jqtransform" method="POST"  enctype="multipart/form-data" >
									<table class="form_table pt15 pb15" width="100%" border="0"
										cellpadding="0" cellspacing="0">
										<tr>
											<td class="td_right fs">用户名：</td>
											<td class="">
											<input type="hidden" name="id" value="<?php echo $opinion[0]['id'] ?>"/>
											<input type="hidden" name="pictures" value="<?php echo $opinion[0]['pictures'] ?>"/>
											<input type="hidden" name="create_time" value="<?php echo $opinion[0]['create_time'] ?>"/>
											<input type="hidden" name="update_time" value="<?php echo $opinion[0]['update_time'] ?>"/>
											
											<input type="text" name="user_name" class="input-text lh30" readonly
											       size="40" value="<?php echo $opinion[0]['user_name']?>" />
												
												<?php echo form_error('user_name','<span>','</span>')?>	
											
											</td>
											<td></td>
											
										</tr>
										<tr>
											<td class="td_right fs">联系电话：</td>
											<td class="">
											<input type="text" name="mobile" readonly
												class="input-text lh30" size="40" value="<?php echo $opinion[0]['mobile'] ?>" >
											<?php echo form_error('mobile','<span>','</span>')?>
											</td>
											
										</tr>
										<tr>
											<td class="td_right fs">点评设备：</td>
											<td class="">
											<input type="text" name="device" readonly
												class="input-text lh30" size="40" value="<?php echo $opinion[0]['device'] ?>" >
											<?php echo form_error('device','<span>','</span>')?>
											</td>
											
										</tr>
										
										<tr>
											<td class="td_right fs">各项评分：</td>
											<td class="">
											<input type="text" name="stars" readonly
												class="input-text lh30" size="40" value="<?php echo $opinion[0]['stars']."（外观，稳定性，智能，功耗）" ?>" />
											<?php echo form_error('stars','<span>','</span>')?>
											</td>											
										</tr>
										
										<tr>
											<td class="td_right fs">综合评分：</td>
											<td class="">
											<input type="text" name="score" readonly
												class="input-text lh30" size="40" value="<?php echo $opinion[0]['score'] ?>" />
											<?php echo form_error('score','<span>','</span>')?>
											</td>											
										</tr>								
										
										<tr>
									       <td class="td_right fs">审核状态：</td>
									       <td class="fs">
									       <input type="radio" name="status" value="0" <?php if(0==$opinion[0]['status']) echo set_radio('status','0', TRUE); else echo set_radio('status','0')?>/> 未审核&nbsp;&nbsp;&nbsp;&nbsp;
									       <input type="radio" name="status" value="1" <?php if(1==$opinion[0]['status']) echo set_radio('status','1', TRUE); else echo set_radio('status','1')?>/> 已审核
									       </td>
								       </tr>															
										
								<tr>
									<td class="td_right fs">观点：</td>
									<td class=""><textarea name="view" id="view" cols="30" rows="30"
											class="textarea"><?php echo $opinion[0]['view'] ?></textarea>
											<?php echo form_error('view','<span>','</span>')?>
											</td>
								</tr>						
								       
								<tr>
									<td class="td_right">&nbsp;</td>
									<td class="">
									
									<input type="submit" name="button" class="btn btn82 btn_save2 fs" value="修改"> 
										
									&nbsp;&nbsp;&nbsp;
									<a href="<?php echo site_url().'/view/opinion/opinionList'; ?>">
									<input type="button" name="button" class="btn btn82 btn_config fs" value="返回">
									</a>
									</td>
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
