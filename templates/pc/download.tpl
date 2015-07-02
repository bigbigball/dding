{%extends file="pc/layout.tpl"%}

{%block name="page_style"%}
<link rel="stylesheet" href=/static/pc/css/download-3dd3586324ce79d26d3c3e9a85f80c9d.css>
{%/block%}

{%block name="page_content"%}
{%include file="pc/header.tpl" tab="download"%}

	<div>
		<img src="/static/pc/images/download/qrcode.png" class="down-qrcode" align ="left">
	</div>
<div class="main">

	<div class="btn-list">
		<a class="down-btn-ios" target="_blank" href="https://itunes.apple.com/cn/app/ding-ding-zhi-neng/id918361877?mt=8&uo=4"><span>下载 iOS 版</span></a>
	</div>
	<div class="btn-list">
		<a class="down-btn-android" target="_blank" href="http://bcs.duapp.com/android-release/yunding/dingding_yunding.apk"><span>下载 Android 版</span></a>
	</div>


</div>

{%include file="pc/footer.tpl"%}
{%/block%}
