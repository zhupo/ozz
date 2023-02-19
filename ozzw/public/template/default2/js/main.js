$(function(){
    nav('.nav_bar','.nav_bar .n_item');
    /*
    $(".ft_item ul .item_title").click( function () {
        if ($(this).parent().children('.item_content').css('display')=='block') {
            $(this).parent().children('.item_content').css('display','none');
        } else {
            $(this).parent().children('.item_content').css('display','block');
        }
    });
    */

    $('#footer .footer_box .list_item .ft_item .item_title .ft_icon').click(function(){
        $(this).parents('ul').toggleClass('on');
    });
    $(".cur-65").addClass('cur');
    $("#cate65").addClass('show'); 


    $(".pn_item").click(function(){
        $(".pn_item").removeClass('cur');
        if(!$(this).hasClass('cur')){
            $(this).addClass('cur');
        }
        $(".pro_list").removeClass('show');
        if(!$("#cate"+$(this).attr('cate')).hasClass('show')){
            $("#cate"+$(this).attr('cate')).addClass('show');
        }
    });
    if (typeof $('.news_main .main_box').bxSlider == 'function'){
        $('.news_main .main_box').bxSlider({
            slideWidth: 1200,
            minSlides: 1,
            maxSlides: 1,
            slideMargin: 0,
            auto: false,
        });
    }

    $(window).resize(function(){
        if($(window).width()>768){
            $('#footer .footer_box .list_item .ft_item .item_content').css('display','block');
        }else{
            $('#footer .footer_box .list_item .ft_item .item_content').css('display','none');
        }
    })

    if (typeof ($('.slider').bxSlider) == 'function') {
        $('.slider').bxSlider({
            slideWidth: 288,
            minSlides: 2,
            maxSlides: 4,
            slideMargin: 16,
            controls: false
        });
    };
    index_show_video($(".video_btn"));
});