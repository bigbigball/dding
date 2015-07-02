{%extends file="pc/layout.tpl"%}

{%block name="page_style"%}
<link rel="stylesheet" href=/static/pc/css/home/home-09d8d8bfd6cb228441a0f830e52028c4.css>

{%/block%}

{%block name="page_content"%}

{%include file="pc/header.tpl" tab="index"%}

<div class="view view1">
	<img data-src="/static/pc/images/home/b1.jpg" src="/static/pc/images/home/b1.jpg" width="100%" class="bg">
	<div class="product"><img data-src="/static/pc/images/home/p1.png" width="100%" class="t2s"></div>
	<div class="text">
		<img data-src="/static/pc/images/home/t1.png" width="100%" class="t t1s">
		<a href="http://dding.net/sale?refer=yunding" target="_blank"><img src="/static/pc/images/home/pbtn.png"  width="100%" alt="现在购买" class="pbtn t2s"></a>
		<a href="http://www.iqiyi.com/w_19rskfxj1p.html#vfrm=2-3-0-1" class="video t2s" target="_blank"><img src="/static/pc/images/home/video.jpg"  width="100%" alt="观看视频"></a>
	</div>
</div>

<div class="view view2">
	<img data-src="/static/pc/images/home/b2.jpg" width="100%" class="hide bg">
	<div class="product"><img data-src="/static/pc/images/home/p2.png" width="100%" class=""></div>
	<div class="text"><img data-src="/static/pc/images/home/t2.png" width="100%" class="t"></div>
</div>

<div class="view view3">
	<img data-src="/static/pc/images/home/b3.jpg" width="100%" class="hide bg">
	<div class="product"><img data-src="/static/pc/images/home/p3.png" width="100%" class="transition"></div>
	<div class="text"><img data-src="/static/pc/images/home/t3.png" width="100%" class="t"></div>
</div>

<div class="view view4">
	<img data-src="/static/pc/images/home/b4.jpg" width="100%" class="hide bg">
	<div class="product"><img data-src="/static/pc/images/home/p4.png" width="100%" class="transition"></div>
	<div class="text"><img data-src="/static/pc/images/home/t4.png" width="100%" class="t"></div>
</div>

<div class="view5">
	<div class="black">
		<img data-src="/static/pc/images/home/b5-black.png" width="100%" class="bg bg-black">
	</div>
	<div class="white">
		<img data-src="/static/pc/images/home/b5-white.png" width="100%" class="bg">
	</div>
	<div class="size">
		<div class="wrap">
			<img data-src="/static/pc/images/home/b5-size.jpg" width="100%" class="bg bg-size">
		</div>
		<div class="handler"></div>
		<div class="switcher">
			<div class="hei"><span class="active"></span>&nbsp;&nbsp;亚光黑</div>
			<div class="bai"><span></span>&nbsp;&nbsp;典雅白</div>
			<div class="desc">丁盯的完美，<br>源自细节的严谨！</div>
		</div>
	</div>
</div>


<ul class="view6">
	<li class="part part1 t2s"><img data-src="/static/pc/images/home/detail-1.jpg" width="100%"></li>
	<li class="part part2 t2s"><img data-src="/static/pc/images/home/detail-2.jpg" width="100%"></li>
	<li class="part part3 t2s"><img data-src="/static/pc/images/home/detail-3.jpg" width="100%"></li>
	<li class="part part4 t2s"><img data-src="/static/pc/images/home/detail-4.jpg" width="100%"></li>
	<li class="part part5 t2s"><img data-src="/static/pc/images/home/detail-5.jpg" width="100%"></li>
</ul>

<div class="spec-view">
	<div class="spec-view-box clearfix">
		<div class="spec-title">产品参数</div>
		<div class="bg clearfix">
			<div class="col col1">
				<strong>尺寸</strong>
				<div class="spec-des">主机: 3.80cm x 0.64cm x 9.84cm<br />
				磁柱: 1.02cm x 0.70cm x 9.32cm
				<br />
				</div>
				<strong>工作原理</strong>
				<div class="spec-des">低功耗WiFi</div>
			</div>
			<div class="col col2">
				<strong>电源参数</strong>
				<div class="spec-des">400mAH锂电池 续航3个月<br />
				(每日开关10次左右)
				<br /></div>
				<strong class="noborder">设计机构</strong>
				<div class="spec-des">YANG DESIGN</div>
			</div>
			<div class="col col3">
				<strong>产品特点</strong>
				<div class="spec-des">超薄机身<br />
				极简外观   <br />
				一键配置    <br />
				即贴即用    <br />
				持久续航<br />
				亦左亦右
				</div>
			</div>
			<div class="col col4">
				<strong>包装说明</strong>
				<div class="spec-des">主机＋磁柱<br />
				说明书一份  <br />
				保修卡一份   <br />
				充电线一条
				</div>
			</div>
			<div class="col col5">
				<strong>颜色</strong>
				<div class="spec-des">典雅白<br />
				亚光黑
				</div>
			</div>
			<div class="col col6">
				<strong>重量</strong>
				<div class="spec-des">50g</div>
			</div>
		</div>
		
		<div class="entry"><a href="/news#pingce" target="_blank">评&nbsp;测</a><a href="/news#baodao" target="_blank">媒体报道</a></div>
	</div>
</div>

<div class="scroll-tip"><span id="scrollTip"></span></div>

<ul class="viewer" id="viewer">
	<li class="active"></li>
	<li></li>
	<li></li>
	<li></li>
	<li></li>
	<li></li>
</ul>
<div class="backtop hide" id="backtop"></div>

{%include file="pc/footer.tpl"%}
{%/block%}

{%block name="page_script"%}
<script type="text/javascript" src=/static/pc/js/home-9b1a0c939597bb4b3cbbbc3051d11072.js></script>
{%/block%}
