/**
 * Created by zd on 2015/7/25.
 */
$(function() {
    $('#slider').slider({
        loop:true
    });

    $('.menuBtn').tap(function() {
        $('.menuTop').addClass('show');
    });

    $('.closeBtn').tap(function() {
        $('.menuTop').removeClass('show');
    });

    $('#accordion').find('.accordion-header').tap(function() {
        var $item = $(this).parent();
        $item.siblings().removeClass('show');
        if($item.hasClass('show')) {
            $(this).addClass('bottom-border');
            $item.removeClass('show');
        } else {
            $item.addClass('show');
        }

    });

    $('#accordion').find('.accordion-body').on('transitionEnd webkitTransitionEnd mozTransitionEnd oTransitionEnd', function() {
        var $item = $(this).parent();
        if(!$item.hasClass('show')) {
            $(this).prev().removeClass('bottom-border');
        }
    });
});