define(["jquery","home/getRatioForView","home/listenResizeWin","home/parserUrl"],function(e,t,n,r){var i=function(){var i={},s={},o={},u=function(){s.checkHash();var e=setInterval(function(){try{s.checkHash()}catch(t){clearInterval(e)}},300);n.add(function(e){s.resizeView(e)}),n.checkResize(),s.bindUiEvent()};s.checkHash=function(){s.oUrl=r(location.href);if(s.sTmpHash!==s.oUrl.hash){s.sTmpHash=s.oUrl.hash,e("._header ._link").removeClass("on");switch(s.oUrl.hash){case"shouhou":e("._header ._serveLink").addClass("on"),s.showBox("shouhou");break;case"lianxi":e("._header ._lianxiLink").addClass("on"),s.showBox("lianxi");break;case"kefu":default:e("._header ._serveLink").addClass("on"),s.showBox("kefu")}}},s.bindUiEvent=function(){e("._pageBox").on("click","._link",function(){var t=e(this).attr("data-box");location.hash=t,s.showBox(t)})},s.showBox=function(t){e("._pageBox").removeClass("kefu-box shouhou-box lianxi-box").addClass(t+"-box")},s.resizeView=function(n){n.width<780?e("._pageContent").addClass("page-content-small"):e("._pageContent").removeClass("page-content-small");var r=2e3,i=e("._shouhouContent").width()-20,s=996,o=268,u=t({width:s,height:o},{width:i,height:r}).byOverallJust(),a=s*u,f=o*u;e(".shouhou-content ._p2 img").css({height:f+"px",width:a+"px"});var s=996,o=143,u=t({width:s,height:o},{width:i,height:r}).byOverallJust(),a=s*u,f=o*u;e(".shouhou-content ._p1 img").css({height:f+"px",width:a+"px"})};switch(this+""){case"test":i._pri=s;case"extend":i._pro=o,i._init=u;break;default:delete i._init,delete i._pro,u.apply(i,arguments)}return i};return i});