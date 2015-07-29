$(document).ready(function () {
	//首页产品展示hover
	// 用CSS3实现hover时的放大效果
	
	//下载
	$("#download").on("click",function(e){
		$(this).addClass("active");
		var topOffset = $(e.currentTarget).css("height");
		$(".downloadContent").css({
			top:topOffset
		});
		$(".downloadContent").show();
	});
	$(".downloadContent .delpos").on("click",function() {
		$(".downloadContent").hide();
		$("#download").removeClass("active");
	});
/*
	//产品链接
	$("#product3").on("click",function() {
    // window.location="newproduct.html";
		window.location="passwordlock.html";
	});

	$("#product2").on("click",function() {
		window.location="magnetic.html";
	});

  $("#h_doorClock").on("click",function(e){
    window.location="passwordlock.html";
    e.preventDefault();
  });
*/

	$('.probar').on("click",function(e){
		var $target = $(e.target);
		$(".probar li").removeClass("active");
		$target.parent().addClass("active");
		$(".listitem").hide();
		var contentID = "#" + $target.parent().attr("id") + "_content";
		$(contentID).show();
	});
	//分页
	$('.pgbar').on("click",function(e){
		var $target = $(e.target);

		if($target.parent().hasClass("js-prevPage"))//点击的上一页
		{
			if($('.pgbar .active').prev().hasClass("js-prevPage"))//已经是首页
			{
				return;
			}
			else
			{
				var $prev = $('.pgbar .active').prev();
				$('.pgbar li').removeClass("active");
				$prev.addClass("active");
			}
		}
		else if($target.parent().hasClass("js-nextPage"))
		{
			if($('.pgbar .active').next().hasClass("js-nextPage"))//已经是最后一页
			{
				return;
			}
			else
			{
				var $next = $('.pgbar .active').next();
				$('.pgbar li').removeClass("active");
				$next.addClass("active");
			}
		}
		else
		{
			$('.pgbar li').removeClass("active");
			$target.parent().addClass("active");
		}
	});

	//隐藏观点
	// $("#viewpoint").hide();
	//隐藏登陆／注册
	// $(".loginbar").hide();
	//首页先定位到门磁
	/*
	$(".logo img").on("click",function (e) {
		window.location = "magnetic.html";
		e.preventDefault();
	});
	$("#h_magnetic").on("click",function() {
		window.location = "magnetic.html"
	});
  $("#viewpoint").on("click",function() {
    window.location = "vp.html"
  });
*/
	//about qq weixin
	$("#cd_qq").on("click",function(e){
		var topP = (parseInt(e.pageY) - 290)+"px";
		$(".qq_dialog").css({
  			top:topP
  		});
  		$(".weixin_dialog").hide();
  		$(".qq_dialog").show();
  		
  	});
  	$("#kf_qq").on("click",function(e){
  		var topP = (parseInt(e.pageY) - 290)+"px";
		$(".qq_dialog").css({
  			top:topP
  		});
  		$(".weixin_dialog").hide();
  		$(".qq_dialog").show();
  		
  	});

  	$("#weixin").on("click",function(e){
  		var topP = (parseInt(e.pageY) - 300)+"px";
		$(".weixin_dialog").css({
  			top:topP
  		});
  		$(".qq_dialog").hide();
  		$(".weixin_dialog").show();
  	});

  	$(".about >div a.del").click(function(e){
  		$(e.target).parent().hide();
  	});

  	//打电话
  	$(".callBtn").on("click",function(e) {
  		// var target = $(e.currentTarget);
  		if(! $(this).hasClass("active"))
  		{
  			var $child_i = $(this).children();
  			if($child_i.hasClass("finger_pos")) //显示提醒图片
  			{
  				$(".call_remind").show();
  				$child_i.removeClass("fourfinger_icon2").addClass("fourfinger_icon1");
  				//处理兄弟节点
  				var $other_a = $(this).prev();
  				$other_a.removeClass("active");
  				$other_a.children().removeClass("alarm_icon2").addClass("alarm_icon1");
  			}
  			else //显示免费电话报警
  			{
  				$(".call_remind").hide();
  				$child_i.removeClass("alarm_icon1").addClass("alarm_icon2");
  				//处理兄弟节点
  				var $other_a  = $(this).next();
  				$other_a.removeClass("active");
  				$other_a.children().removeClass("fourfinger_icon1").addClass("fourfinger_icon2");
  			}
  			$(this).addClass("active");
  		}
  	});
/*
    //追问链接
    $('.aq').on("click",function(){
      window.location = "pc.html";
    });

    //照片墙点击,个人观点页
    $(".photoWall li img").on("click",function(e){
        window.location = "mypc.html";
    });

    //点击用户观点进入观点详情页面
    $(".pro-point .info").on("click",function(){
       window.location = "pc.html";
    });

    //点击用户头像或名字，进入个人观点页面
    $(".listview img").on("click",function(){
       window.location = "mypc.html";
    });
    
    //点击用户头像或名字，进入个人观点页面
    $(".div_coin .name").on("click",function(){
       window.location = "mypc.html";
    });
*/
  	// $('.bg2 section').each(function(index,item){
  	// 	var w_width = window.innerWidth;
  	// 	var new_height = Math.ceil(w_width * 622 / 1280);
  	// 	// var newbgsize = Math.ceil((w_width / 1280)*100)+ "%";
   //      $(this).css("height",new_height+"px");
   //      // $(this).css("background-size",newbgsize);
  	// });
  	// $('.bg5 section').each(function(index,item){
  	// 	var w_width = window.innerWidth;
  	// 	var new_height = Math.floor(w_width * 649 / 1280);
  	// 	// var newbgsize = Math.ceil((w_width / 1280)*100)+ "%";
  	// 	if(index == 2)
  	// 	{
  	// 		new_height = new_height -5;
  	// 	}
   //      $(this).css("height",new_height+"px");
   //      // $(this).css("background-size",newbgsize);
  	// });

    function resetloc() {
      $(".banner > .item:eq(" + $(".banner .switch .hover").attr("data") + ")").css("left", "0").show();
      $(".banner .temp").css("left", "12em");
    }

    function tooglebanner(o) {
      var obj;
      if (o == null) {
        var n = ($(".banner .switch .hover").attr("data") * 1) < ($(".banner .switch li").size() * 1 - 1) ? $(".banner .switch .hover").attr("data") : -1;
        obj = $(".banner .switch li:eq(" + (n * 1 + 1) + ")");
      } else {
        obj = o;
      }
      $(".banner .switch li").removeClass("hover");
      obj.addClass("hover");
      obj.parent(".switch").parent(".banner").children(".item").animate({
        left: "-12em"
      }, 3000);
      $(".banner .temp").html(obj.parent(".switch").parent(".banner").children(".item:eq(" + obj.attr("data") + ")").html()).animate({
        left: "0"
      }, 3000, resetloc);
    }
    $(".banner .switch li").click(function() {
      tooglebanner($(this));
    });

    var changebanner = setInterval(tooglebanner, 5000);
    $(".banner").mouseover(function() {
      clearInterval(changebanner);
    });
    $(".banner").mouseout(function() {
      changebanner = setInterval(tooglebanner, 5000);
    });

    var circle = $(".circle-percent");
    var left = circle.find('.left');
    var right = circle.find('.right');
    //综合分数
    function circlePercent(circle, percent) {
      var circle = circle || $(".circle-percent");
      var percent = percent || 0;
      
      if (circle !== null) {
        if (percent <= 50 && percent >= 0) {
          right.css("display", "block");
          right.rotate({
            angle: percent * 3.6
          });
        } else if (percent > 50) {
          percent = percent > 100 ? 100 : percent;
          right.css("display", "block");
          left.css("display", "block");
          left.rotate({
            angle: (percent - 50) * 3.6
          });
          right.rotate({
            angle: 180
          });
        }
      }
    }
    //星星显示并计算综合分数
    var t = null;
    function calScores(){
      var stararea=$(".stars .star_bg");
      var num = 0;
      var comscore = 0;
      var percent = 0;
      clearInterval(t);
      stararea.each(function(index) {
        num = $(this).find('.checked').index()+1;
        $(this).find('#star').val(num);
        comscore += num * 0.5;
      });
      circle.attr("data", comscore);
      $(".circle-percent .score").text(comscore + "分");
      $(".circle #score").val(comscore);
      
      if (circle !== null) {
        t = setInterval(function() {
          if (percent > comscore*10) {
            clearInterval(t);
          } else {
            circlePercent(circle, percent);
            percent++;
          }
        }, 15);
      }
    }
    if($(".stars .star_bg").length){calScores();}
    //星星评价
    $(".star").click(function() {
      $(this).addClass('checked').siblings().removeClass('checked');
      calScores();
    });


    //个人中心页面--根据星星的data数值(data数值代表四个评价的对应得分)计算综合分数并显示
    function calScores2(){
      clearInterval(t);
      var grade=$(".stars .grade");
      var singlescore= 0;
      var comscore = 0;
      var percent = 0;
      /*获取各个评价的数值，并显示*/
      grade.each(function() {
        singlescore= $(this).attr("data");
        $(this).find('.num').width(singlescore*40+"%");
        comscore += parseFloat(singlescore);
      });
      circle.attr("data", comscore);
      $(".circle-percent .score").text(comscore + "分");
      
      if (circle !== null) {
        t = setInterval(function() {
          if (percent > comscore*10) {
            clearInterval(t);
          } else {
            circlePercent(circle, percent);
            percent++;
          }
        }, 15);
      }
    }
    if($(".stars .grade").length){ calScores2();}

    //照片墙
    $(".photoWall li").each(function(index) {
      if (index == 4 || index == 5 || index == 10 || index == 11) {
        $(this).addClass('right');
      }
    });
    $(".photoWall li img").hover(function() {
      $(this).next('.photo_info').show().animate({
        "opacity": "0.8"
      }, 1000);
    }, function() {
      $(this).next('.photo_info').hide().animate({
        "opacity": "0"
      }, 1000);
    });
});

  function replyOther(self){
    var $area_p = $($(self).parent().parent().find('.area_p'));
    if($area_p.css('display') == 'none')
    {
      $area_p.css('display','block');
    }
    else
    {
      $area_p.css('display','none');
    }
  }
  function sendReply (self,url,opid,target) {
    var text = $(self).parent().find('textarea').val();
    if(text=="")
    {
       alert("请输入评论后再发表");
       return false;
    }
    $.ajax({
      type: 'POST',
      url: url,
      data: {opid:opid,target:target,content:text},
      dataType: 'json',
      success: function(data){
        if(data.errno == 0) {
          location.reload();
        } else {
          alert('删除失败');
        }
      }
    });
    $(self).parent().css('display','none');
    return true;
  }

//产品打分
  function checkOptionsInput(){

    var star1 = Number($(document.getElementsByName('star1')).val());
    var star2 = Number($(document.getElementsByName('star2')).val());
    var star3 = Number($(document.getElementsByName('star3')).val());
    var star4 = Number($(document.getElementsByName('star4')).val());
    var score = Number($(document.getElementsByName('score')).val());
    var optionText = $('.ke-edit-iframe').contents().find('.ke-content').text().replace(/\s/g,"");

    if(!star1 || !star2 || !star3 || !star4 || !score)
    {
      alert("请先给产品打分");
      return false;
    }
    else if(!optionText)
    {
      alert("请输入产品观点");
      return false;
    }
    return true;
  }

  function toolbar(el) {
      el = typeof el == 'string' ? document.getElementById(el) : el;
      var elTop = el.offsetTop;
      var sTop = 0;
      window.onscroll = function () {
          sTop = document.body.scrollTop || document.documentElement.scrollTop;
          if (sTop > elTop){
              el.style.top = "100px";
              el.style.position = "fixed"
          } else {
              el.style.top = elTop + 'px';
              el.style.position = "absolute"
          }
      }
  }
  toolbar('sidebarFollow');

// window.onload = function() {
// 	font();
// }

  $(".arrr_btn").click(function(e){
	    var imglist = $(".js-img");
	    var num = imglist.length;
	    if($(imglist[num-1]).next().hasClass("dy_arr")){//最后一张图片
	      return;
	    }
	    var $first = $(imglist[0]);
	    var $last = $(imglist[num-1]).next();
	    // $first.removeClass("js-img").fadeOut("slow",function(){
	    //   $last.addClass("js-img").fadeIn("slow");
	    // });
	    $first.removeClass("js-img").hide();
	    $last.addClass("js-img").show();
	    
	  });

	  $(".arrl_btn").click(function(e){
	    var imglist = $(".js-img");
	    var num = imglist.length;
	    if($(imglist[0]).prev().hasClass("dy_arr")){//第一张图片
	      return;
	    }
	    var $first = $(imglist[0]).prev();
	    var $last = $(imglist[num-1]);
	    $last.removeClass("js-img").hide();
	    $first.addClass("js-img").show();
	  });
  
  function font(){ 
   if (screen.width <1280) 
       document.styleSheets[0].addRule("body","font-size:0.75em;"); 
   else if (screen.width ==1280) 
         document.styleSheets[0].addRule("body","font-size:1em;"); 
      else if (screen.width >1280) 
           document.styleSheets[0].addRule("body","font-size:1.25em;"); 
         else 
             document.styleSheets[0].addRule("body","font-size:1em;"); 
  }