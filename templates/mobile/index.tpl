{%extends file="mobile/layout.tpl"%}
{%block name="page_title" append%}首页{%/block%}

{%block name="page_style"%}
<link rel="stylesheet" href=/static/mobile/css/index-82aabcf0d57dae9e87164422fd7af63c.css> 
{%/block%}

{%block name="page_content"%}
{%include file="mobile/header.tpl"%}
<div class="p1">
	<img class="secbg" src="/static/mobile/images/p1.jpg" width="100%" data-height="352"> 
	<div class="m">
		<h1 class="title">丁盯智能门磁</h1>
		<p class="desc">全球首款低功耗WiFi智能门磁</p>
		<p class="desc">用于监测门窗开关状态</p>
		<p class="price" style="visibility:hidden;">￥249</p>
		<a class="btn" href="http://dding.net/sale?refer=yunding">现在购买</a>
	</div>
</div>
<div class="p2"> 
	<img class="secbg" src="/static/mobile/images/p2.jpg" width="100%" data-height="349">
	<div class="m">
		<h2 class="kw">THOUGHTFUL</h2>
		<h2 class="kwcn">在家时，免打扰！</h2>
		<p class="desc">当您白天在家时可设为勿扰模式，</p>
		<p class="desc">即使有人往来也不会触发警报！</p>
	</div>
</div>
<div class="p3">
	<img class="secbg" src="/static/mobile/images/p3.jpg" width="100%" data-height="350">
	<div class="m">
		<h2 class="kw">SMART</h2>
		<h2 class="kwcn">离家时，贴心提醒！</h2>
		<p class="desc">当您忘关门窗时，</p>
		<p class="desc">丁盯会及时通知您！</p>
	</div>
</div>
<div class="p4">
	<img class="secbg" src="/static/mobile/images/p4.jpg" width="100%" data-height="350">
	<div class="m">
		<h2 class="kw">RELIABLE</h2>
		<h2 class="kwcn">在外时，远程守护！</h2>
		<p class="desc">通过手机客户端</p>
		<p class="desc">可远程时时查看开关状态。</p>
		<p class="desc">您也可以根据自身情况自由设定</p>
		<p class="desc">提示方式及主动提醒时间段。</p>
	</div>
</div>
<div class="p5">
	<div class="v-mark">
		<img src="/static/mobile/images/p5-mark.jpg" width="100%">
		<div class="s-panel" data-is-mark="1">
			<div class="s-black s-active"></div>
			<p class="s-desc">亚光黑</p>
			<div class="s-white"></div>
			<p class="s-desc">典雅白</p>
		</div>
		<div class="arrow" id="arrowLeft"></div>
	</div>
	<div class="v-kind">
		<div class="v-white">
			<img src="/static/mobile/images/p5-white.png" width="100%">
			<div class="s-panel">
				<div class="s-black"></div>
				<p class="s-desc">亚光黑</p>
				<div class="s-white s-active"></div>
				<p class="s-desc">典雅白</p>
			</div>
		</div>
		<div class="v-black">
			<img src="/static/mobile/images/p5-black.png" width="100%">
			<div class="s-panel">
				<div class="s-black s-active"></div>
				<p class="s-desc">亚光黑</p>
				<div class="s-white"></div>
				<p class="s-desc">典雅白</p>
			</div>
		</div>
		<div class="arrow"></div>
	</div>
</div>
<div class="p6"><img class="secbg" src="/static/mobile/images/p6.jpg" width="100%" data-height="324"></div>
<div class="p7">
	<div class="sec-title flex-box"><div>产品参数</div><div></div></div>
	<div class="detail">
		<div>
			<p class="param">尺寸</p>
			<p class="val">主机： 3.80cm x 0.67cm x 9.84cm<br>磁柱：1.02cm x 0.70cm x 9.32cm</p>
			<br>
			<p class="param">电源参数</p>
			<p class="val">400mAH锂电池 续航3个月<br>(每日开关10次左右)</p>
			<br>
			<div class="col-sub">
				<div>
					<p class="param">包装说明</p>
					<p class="val">主机+磁柱<br>说明书一份<br>保修卡一份<br>充电线一条</p>
				</div>
				<div>
					<p class="param">工作原理</p>
					<p class="val">低功耗Wi-Fi</p>
					<p class="param">设计机构</p>
					<p class="val">YANG DESIGN</p>
				</div>
			</div>
		</div>

		<div class="border-box">
			<p class="param">重量</p>
			<p class="val">50g</p>
			<br>
			<p class="param">颜色</p>
			<p class="val">典雅白<br>亚光黑</p>
			<br>
			<p class="param">产品特点</p>
			<p class="val">超薄机身<br>极简外观<br>一键配置<br>即贴即用<br>持久续航<br>亦左亦右</p>
		</div>
	</div>
</div>
{%include file="mobile/footer.tpl"%}
{%/block%}

{%block name="page_script"%}
<script>
$('.secbg').on('load', function() {
	$(this).fadeIn('slow');

}).each(function(idx) {
	if (this.width && this.height) {
		$(this).fadeIn('slow');
	}
});

$('.s-panel>div').tap(function() {
	var $panel = $(this).parent();
	if ( $panel[0].dataset.isMark ) {
		$panel.find('.s-active').removeClass('s-active');
		$(this).addClass('s-active');
	}
	if ( $(this).hasClass('s-white') ) {
		$('.v-white').show();
		$('.v-black').hide();
	} else {
		$('.v-white').hide();
		$('.v-black').show();
	}
});

$('.arrow').tap(function() {
	if ( $(this)[0].id == 'arrowLeft' ) {
		$('.v-mark').addClass('mark-hide');
	} else {
		$('.v-mark').removeClass('mark-hide');
	}
});
</script>
{%/block%}
