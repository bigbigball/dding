{%extends file="mobile/layout.tpl"%}
{%block name="page_title" append%}首页{%/block%}

{%block name="page_style"%}
<link rel="stylesheet" href=/static/mobile/css/index-82aabcf0d57dae9e87164422fd7af63c.css> 
{%/block%}

{%block name="page_content"%}
{%include file="mobile/header.tpl"%}
<div class="p1">
	<img class="secbg" src="/static/mobile/images/inside.jpg" width="100%" data-height="352">
	<div class="ititle">
	智能门锁解决方案
	</div>
	<div class="scroll">
		<img src="/static/mobile/images/scrolltip.png">
	</div>
	<div class="coperation"></div>
</div>
<div class="p9">
	<ul class="tabs">
		<li>方案构成<i class="arrow"></i>
		<div class="tab">
			<img class="secbg" src="/static/mobile/images/tab1.png" width="100%" >
			<img class="secbg" src="/static/mobile/images/tab2.png" width="100%" >
			<img class="secbg" src="/static/mobile/images/tab3.png" width="100%" >
			<img class="secbg" src="/static/mobile/images/tab4.png" width="100%" >
		</div>
		</li>
		<li>产品功能<i class="arrow"></i>
		<div class="tab">
			<img class="secbg" src="/static/mobile/images/tab6.png" width="100%" >
			<img class="secbg" src="/static/mobile/images/tab7.png" width="100%" >
			<img class="secbg" src="/static/mobile/images/tab8.png" width="100%" >
			<img class="secbg" src="/static/mobile/images/tab9.png" width="100%" >
			<img class="secbg" src="/static/mobile/images/tab10.png" width="100%" >
			<img class="secbg" src="/static/mobile/images/tab11.png" width="100%" >
			<img class="secbg" src="/static/mobile/images/tab12.png" width="100%" >
		</div>
		</li>
		<li>产品优势<i class="arrow"></i>
		<div class="tab">
			<img class="secbg" src="/static/mobile/images/tab13.png" width="100%" >
			<img class="secbg" src="/static/mobile/images/tab14.png" width="100%" >
			<img class="secbg" src="/static/mobile/images/tab15.png" width="100%" >
			<img class="secbg" src="/static/mobile/images/tab16.png" width="100%" >
		</div>
		</li>
	</ul>
</div>
<div>
	<img class="secbg" src="/static/mobile/images/footer.png" width="100%" >
</div>
<!-- {%include file="mobile/footer.tpl"%} -->
{%/block%}

{%block name="page_script"%}
<script>
$.inside();
</script>
{%/block%}
