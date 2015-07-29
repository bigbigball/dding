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
	    	window.UEDITOR_CONFIG.initialFrameHeight = 320;
	    	UE.getEditor('content');  
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
					<b>您当前位置：</b>观点评论管理>>评论修改
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
								<form action="<?php echo site_url('view/comment/editArticle') ?>" class="jqtransform" method="POST"  enctype="multipart/form-data" >
									<table class="form_table pt15 pb15" width="100%" border="0"
										cellpadding="0" cellspacing="0">
										<tr>
											<td class="td_right fs">评论人：</td>
											<td class="">
											<input type="hidden" name="id" value="<?php echo $comment[0]['id'] ?>"/>
											<input type="text" name="target" class="input-text lh30" readonly
											       size="40" value="<?php echo $comment[0]['user_name']?>" />
												
												<?php echo form_error('target','<span>','</span>')?>
												
											</td>
											<td></td>
											
										</tr>
										
										<tr>
											<td class="td_right fs">评论时间：</td>
											<td class="">
											<input type="text" name="create_time" class="input-text lh30" readonly
											       size="40" value="<?php echo date('m-d-y H:i:s', $comment[0]['create_time'])?>" />
												<?php echo form_error('create_time','<span>','</span>')?>	
											</td>
											<td></td>
										</tr>
												       
										<tr>
											<td class="td_right fs">评论观点：</td>
											<td class="">											
											<div style="overflow: auto; width: 800px; height: 150px;
											            border: 1px solid #bac7d2;
	                                                    background: #f7fcfe;/* #f7fcfe #f3fafd*/
	                                                    border-radius: 2px;
                                                        scrollbar-face-color: #CBDDF1;scrollbar-highlight-color: #547CBB;
                                                        scrollbar-shadow-color: #547CBB;scrollbar-3dlight-color: #ffffff;
                                                        scrollbar-arrow-color:  #547CBB;scrollbar-track-color: #FFFFFF;
                                                        scrollbar-darkshadow-color: #FFFFFF;"> 
											<?php echo $comment[0]['view'] ?>
											</div>
											<?php echo form_error('view','<span>','</span>')?>
											</td>											
										</tr>
										
								<tr>
									<td class="td_right fs">评论内容：</td>
									<td class=""><textarea name="content" id="content" cols="30" rows="20"
											class="textarea"><?php echo $comment[0]['content'] ?></textarea>
											<?php echo form_error('content','<span>','</span>')?>
											</td>
								</tr>
								
								<tr>
									<td class="td_right">&nbsp;</td>
									<td class="">
									
									<input type="submit" name="button" class="btn btn82 btn_save2 fs" value="修改"> 
									
									&nbsp;&nbsp;&nbsp;
									<a href="<?php echo site_url().'/view/comment/commentList'; ?>">
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
