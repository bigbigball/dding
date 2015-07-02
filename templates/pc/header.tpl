<div class="header clearfix" id="headerDiv">
	<div class="logo" id = "headerLogo"><a href = "/"><img src="/static/pc/images/common/logo.png" alt="logo" width="100%"></a></div>
	<ul class="nav clearfix" id="headerNav">
		<li {%if $tab=="index"%}class="curr"{%/if%}><a href="/" id = "headertextwidth">首页</a></li>
		<li class="split">&nbsp;</li>
		<li {%if $tab=="guide"%}class="curr"{%/if%}><a href="/guide/index" id = "headertextwidth">咨询中心</a></li>
		<li class="split">&nbsp;</li>
		<li {%if $tab=="opinion"%}class="curr"{%/if%}><a href="/opinion/index" id = "headertextwidth">观点</a></li>
		<li class="split">&nbsp;</li>
		<li {%if $tab=="about"%}class="curr"{%/if%}><a href="/about/index" id = "headertextwidth">关于我们</a></li>
		<li class="split">&nbsp;</li>
		<li {%if $tab=="download"%}class="curr"{%/if%}><a href="/download/index" id = "headertextwidth">APP下载</a></li>
		<li class="split">&nbsp;</li>
		<li {%if $tab=="news"%}class="curr"{%/if%}><a href="/news/index" id = "headertextwidth">口碑</a></li>
	</ul>
</div>
<script  type="text/javascript">
function adjustHeader() {
	var clientWidth = document.body.clientWidth;
	var zoomRatio = clientWidth / 1920;
	var navHeight = zoomRatio * 98;
	var logoMarginTop = zoomRatio * 31;
	var navItemWidth = zoomRatio * 114;
	document.getElementById('headerNav').style.cssText = 'height:' + navHeight + 'px;line-height:' + navHeight + 'px';
	document.getElementById('headerLogo').style.marginTop = logoMarginTop + 'px';
}
adjustHeader();
window.onresize = adjustHeader;
</script >
