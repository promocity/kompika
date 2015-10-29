$(document).ready(function() {

    $('.r-image').mouseenter(function() {
        if($(this).attr('id') == 'b1')
            $(this).attr('src', 'images/rb1-active.png');
        if($(this).attr('id') == 'b2')
            $(this).attr('src', 'images/rb2-active.png');
        if($(this).attr('id') == 'b3')
            $(this).attr('src', 'images/rb3-active.png');
        if($(this).attr('id') == 'b4')
            $(this).attr('src', 'images/rb4-active.png');
        if($(this).attr('id') == 'b5')
            $(this).attr('src', 'images/rb5-active.png');
        if($(this).attr('id') == 'b6')
            $(this).attr('src', 'images/rb6-active.png');
    });
    $('.r-image').mouseleave(function(){
        if($(this).attr('id') == 'b1')
            $(this).attr('src', 'images/rb1.png');
        if($(this).attr('id') == 'b2')
            $(this).attr('src', 'images/rb2.png');
        if($(this).attr('id') == 'b3')
            $(this).attr('src', 'images/rb3.png');
        if($(this).attr('id') == 'b4')
            $(this).attr('src', 'images/rb4.png');
        if($(this).attr('id') == 'b5')
            $(this).attr('src', 'images/rb5.png');
        if($(this).attr('id') == 'b6')
            $(this).attr('src', 'images/rb6.png');
    });

    //round-buttons animations
    var rButtons = ['#rb1','#rb2','#rb3','#rb4','#rb5','#rb6'];
    setTimeout(function() {
            $(rButtons[0]).animate({opacity: '1'});
        }, 500);
    setTimeout(function() {
        $(rButtons[1]).animate({opacity: '1'});
    }, 700);
    setTimeout(function() {
        $(rButtons[2]).animate({opacity: '1'});
    }, 900);
    setTimeout(function() {
        $(rButtons[3]).animate({opacity: '1'});
    }, 1100);
    setTimeout(function() {
        $(rButtons[4]).animate({opacity: '1'});
    }, 1300);
    setTimeout(function() {
        $(rButtons[5]).animate({opacity: '1'});
    }, 1500);

    //collage
    $('.trans').mouseenter(function() {
        $(this).prev().toggleClass("gray-filter");
        $(this).css('opacity', 0);
    });
    $('.trans').mouseleave(function() {
        $(this).prev().toggleClass("gray-filter");
        $(this).css('opacity', 0.2);
    });
    //появление collage
    setTimeout(function() {
        $('collage').animate({opacity: '1'});
    }, 1500);

    //callback
    var callhunter = $('.call-hunter');
    var coords = document.documentElement.clientHeight;
    var atcalhunter = false;
    callhunter.css('top', coords - 70);
    setTimeout(function() {
        callhunter.animate({right: '10px'});
    }, 2000);
    $(document).scroll(function() {
        var coords = document.documentElement.clientHeight;
        callhunter.css('top', coords - 70);
    });
    $('.info-icon').mouseenter(function() {
        $('.info-plane').animate({left: '0'});
    });
    $('.info-icon').mouseleave(function() {
        setTimeout(function() {
            $('.info-plane').animate({left: '232px'});
        }, 700);
    });

    $(window).scroll(function() {
        console.log('scroll top = ' + $(document).scrollTop());
        console.log('scroll height = ' + document.documentElement.clientHeight);
    });

    //анимация отзывов, когда они видны
    //и сброс анимации, когда отзывы не видны
    $(window).scroll(function() {
        var topOfWindow = $(window).scrollTop();
        var heightOfWindow = document.documentElement.clientHeight;

        //появление youtube видео
        $('inmedia').each(function(){
                var videoPos = $(this).offset().top;

                if (videoPos < topOfWindow + heightOfWindow/3) {
                    if ($(this).css('opacity') <= '0')
                        $(this).animate({opacity: '1'});
                }
        });

        //движение фотографий отзывов
        $('.feedback-img').each(function(){
            if($(this).parent().attr('class') == 'feedback-container-left') {
                var imagePos = $(this).offset().top;

                if (imagePos < topOfWindow + heightOfWindow/2) {
                    if ($(this).css('left') > '-202px')
                        $(this).animate({left: '-202px'});
                }
                if (topOfWindow + heightOfWindow < imagePos) {
                    if ($(this).css('left') != 0)
                        $(this).css('left', 0);
                }
            }
            if($(this).parent().attr('class') == 'feedback-container-right') {
                var imagePos = $(this).offset().top;

                if (imagePos < topOfWindow + heightOfWindow/2) {
                    if ($(this).css('left') < '202px')
                        $(this).animate({left: '202px'});
                }
                if (topOfWindow + heightOfWindow < imagePos) {
                    if ($(this).css('left') != 0)
                        $(this).css('left', 0);
                }
            }
        });
    });

});