// JavaScript Document
$(document).ready(function() {

    function resetloc() {
      $(".banner > .item:eq(" + $(".banner .switch .hover").attr("data") + ")").css("left", "0px").show();
      $(".banner .temp").css("left", "260px");
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
        left: "-260px"
      }, 3000);
      $(".banner .temp").html(obj.parent(".switch").parent(".banner").children(".item:eq(" + obj.attr("data") + ")").html()).animate({
        left: "0px"
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


  function delcommet(url, id) {
	if (confirm("确认删除")) {
		$.ajax({
			  type: 'POST',
			  url: url,
			  data: {id:id},
			  dataType: 'json',
			  success: function(data){
				  if(data.errno == 0) {
					  location.reload();
				  } else {
					  alert('删除失败');
				  }
			  }
			});
	} else {
		return false;
	}
  };

  //added by dpfl at 2015-04-10
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

  function checkInputBeforeSubmit(self){
    var text = $(self).find('textarea').val();
    if(text=="")
    {
       alert("请输入评论后再发表");
       return false;
    }
    return true;
  }

  //产品打分
  function checkOptionsInput(){

    var star1 = Number($(document.getElementsByName('star1')).val());
    var star2 = Number($(document.getElementsByName('star2')).val());
    var star3 = Number($(document.getElementsByName('star3')).val());
    var star4 = Number($(document.getElementsByName('star4')).val());
    var score = Number($(document.getElementsByName('score')).val());
    var optionText = $('#web_description').val().replace(/\s/g,"");

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
  // JavaScript Document