/**
 * Created by 79848_000 on 2015/7/22.
 */
$(function() {
    var $page1 = $('#page1'),
        page1_start = $page1.offset().top,
        page1_end = page1_start + $page1.height();
    var $page2 = $('#page2'),
        page2_start = $page2.offset().top,
        page2_end = page2_start + $page2.height();
    var $page3 = $('#page3'),
        page3_start = $page3.offset().top- $page3.height(),
        page3_end = page3_start + 2 * $page3.height();
    var $page4 = $('#page4'),
        page4_start = $page4.offset().top- $page4.height(),
        page4_end = page4_start + 2 * $page3.height();
    var $page5 = $('#page5'),
        page5_start = $page5.offset().top,
        page5_end = page5_start + $page5.height();

    $('#area2').on('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function() {
        $('#house').addClass('move');
    });

    $('#house').on('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function() {
        $('#path').addClass('move');
    });

    $('#path').on('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function() {
        $('#pathTip').addClass('move');
    });

    $('#pathTip').on('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function() {
        $('.wave').addClass('move');
        $('#hand').addClass('move');
    });

    $('#hand').on('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function() {
        $('#handTip').addClass('move');
    });


    $(window).on('scroll', function() {
        var scroll_top = $(this).scrollTop();

        if(scroll_top < page1_start || scroll_top > page1_end) {
            $page1.removeClass('animate');
        } else {
            $page1.addClass('animate');
        }

        //第二屏背景
        if(scroll_top >= page2_start && scroll_top <= page2_end) {
            $page2.addClass('bg-fix');
        } else {
            $page2.removeClass('bg-fix');
        }

        //第三屏动画
        if(scroll_top < page3_start || scroll_top > page3_end) {
            $page3.removeClass('animate');
            $('#house').removeClass('move');
            $('#path').removeClass('move');
            $('#pathTip').removeClass('move');
            $('.wave').removeClass('move');
            $('#hand').removeClass('move');
            $('#handTip').removeClass('move');
        } else {
            $page3.addClass('animate');
        }

        //第四屏动画
        if(scroll_top >= page4_start && scroll_top <= page4_end) {
            $page4.addClass('animate');
        } else {
            $page4.removeClass('animate');
        }

        //第五屏背景
        if(scroll_top >= page5_start && scroll_top <= page5_end) {
            $page5.addClass('bg-fix');
        } else {
            $page5.removeClass('bg-fix');
        }

    }).trigger('scroll');




});