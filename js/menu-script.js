$(document).ready(function(){
    var buttons = ['b1','b2','b3','b4','b5','b6','b7'];

    var text = ["<div class='block-elements' id='bl1'> <ul class='link-block'><li><a href='#' class='submenu-item'><img class='link-img iphone4' src='images/iphone4-4s.png'> <div id='lb1'><p class='label'>iPhone 4</p></div></a></li> <li><a href='#' class='submenu-item'><img class='link-img iphone4' src='images/iphone4-4s.png'><div><p class='label'>iPhone 4s</p></div></a></li> <li><a href='#' class='submenu-item'><img class='link-img iphone5' src='images/iphone5-5s-5c.png'><div><p class='label'>iPhone 5</p></div></a></li> <li><a href='#' class='submenu-item'><img class='link-img iphone5' src='images/iphone5-5s-5c.png'><div><p class='label'>iPhone 5c</p></div></a></li> <li><a href='#' class='submenu-item'><img class='link-img iphone6' src='images/iphone6.png'><div><p class='label'>iPhone 6</p></div></a></li> <li><a href='#' class='submenu-item'><img class='link-img iphone6' src='images/iphone6.png'><div><p class='label'>iPhone 6 Plus</p></div></a></li> </ul> </div>",
        "<div class='block-elements' id='bl2'> <ul class='link-block'> <li><a href='#' class='submenu-item'><img class='link-img ipad-air' src='images/ipadAir.png'> <div><p class='label'>iPad Air 2</p></div></a></li> <li><a href='#' class='submenu-item'><img class='link-img ipad-air' src='images/ipadAir.png'><div><p class='label'>iPad Air</p></div></a></li> <li><a href='#' class='submenu-item'><img class='link-img ipad-air' src='images/ipadAir.png'><div><p class='label'>iPad mini 3</p></div></a></li> <li><a href='#' class='submenu-item'><img class='link-img ipad-air' src='images/ipadAir.png'><div><p class='label'>iPad mini 2</p></div></a></li> </ul> </div>",
        "<div class='block-elements' id='bl3'> <ul class='link-block'> <li><a href='#' class='submenu-item'><img class='link-img imac' src='images/imac.png'> <div><p class='label'>iMac</p></div></a></li> <li><a href='#' class='submenu-item'><img class='link-img imac-retina' src='images/imac2.png'><div><p class='label'>iMac с дисплеем Retina 5k</p></div></a></li> </ul> </div>",
        "<div class='block-elements' id='bl4'> <ul class='link-block'> <li><a href='#' class='submenu-item'><img class='link-img macbook-air' src='images/macbook-air.png'><div><p class='label'>MacBook air</p></div></a></li> <li><a href='#' class='submenu-item'><img class='link-img macbook-pro' src='images/macbook-pro.png'> <div><p class='label'>MacBook Pro</p></div></a></li> </ul> </div>",
        "<div class='block-elements' id='bl5'> <ul class='link-block'> <li><a href='#' class='submenu-item'><img class='link-img smartphones' src='images/iphone6.png'> <div><p class='label'>SONY</p></div></a></li> <li><a href='#' class='submenu-item'><img class='link-img smartphones' src='images/iphone6.png'> <div><p class='label'>Samsung</p></div></a></li> <li><a href='#' class='submenu-item'><img class='link-img smartphones' src='images/iphone6.png'> <div><p class='label'>HTC</p></div></a></li> <li><a href='#' class='submenu-item'><img class='link-img smartphones' src='images/iphone6.png'> <div><p class='label'>Lenovo</p></div></a></li> <li><a href='#' class='submenu-item'><img class='link-img smartphones' src='images/iphone6.png'> <div><p class='label' href='#'>Nokia</p></div></a></li> <li><a href='#' class='submenu-item'><img class='link-img smartphones' src='images/iphone6.png'> <div><p class='label'>LG</p></div></a></li> </ul> </div>",
        "<div class='block-elements' id='bl6'> <ul class='link-block'> <li><a href='#' class='submenu-item'><img class='link-img notebook' src='images/notebook.png'> <div><p class='label'>Toshiba</p></div></a></li> <li><a href='#' class='submenu-item'><img class='link-img notebook' src='images/notebook.png'> <div><p class='label'>Lenovo</p></div></a></li> <li><a href='#' class='submenu-item'><img class='link-img notebook' src='images/notebook.png'> <div><p class='label'>Acer</p></div></a></li> <li><a href='#' class='submenu-item'><img class='link-img notebook' src='images/notebook.png'> <div><p class='label'>Samsung</p></div></a></li> <li><a href='#' class='submenu-item'><img class='link-img notebook' src='images/notebook.png'> <div><p class='label'>SONY</p></div></a></li> </ul> </div>",
        "<div class='block-elements' id='bl7'> <ul class='link-block'> <li><a href='#' class='submenu-item'><img class='link-img ipad-air' src='images/ipadAir.png'> <div><p class='label'>Acer</p></div></a></li> <li><a href='#' class='submenu-item'><img class='link-img ipad-air' src='images/ipadAir.png'> <div><p class='label'>Lenovo</p></div></a></li> <li><a href='#' class='submenu-item'><img class='link-img ipad-air' src='images/ipadAir.png'> <div><p class='label'>SONY</p></div></a></li> <li><a href='#' class='submenu-item'><img class='link-img ipad-air' src='images/ipadAir.png'> <div><p class='label'>Samsung</p></div></a></li> </ul> </div>"];
    var widthBtn = ['57%','43%','29%','27%','58%','73%','43%'];
    var colorstay = 'white';
    var colorhover = '#B8D9CB';
    var pressedbutton;

    //вычисление ширины элементов .menu-block
    var widthlist = 0;
    $('.menu-block li').each(function() {
        widthlist = widthlist + $(this).width();
    });
    $('.menu-block ul').css('width', widthlist + 'px');

    //вычисление ширины элементов .drop-block
    $('.btn').mouseenter(function(){
        var widthelements = 0;
        $('.link-block li').each(function() {
            widthelements = widthelements + $(this).width();
            console.log(widthelements);
        });
        $('.link-block').css('width', widthelements + 'px');
    });

    //наведение на кнопку меню и появление блока подменю
    $('.btn').mouseenter( function(e) {
        for (var i=0; i < text.length; i++) {
            if ($(this).attr("id") == buttons[i]) {
                if (pressedbutton != undefined) {
                    pressedbutton.removeClass('btn-hover');
                    pressedbutton.addClass('btn');
                }
                else {
                    console.log('pressedbutton is null')
                }
                pressedbutton = $(this);
                pressedbutton.addClass('btn-hover');
                pressedbutton.removeClass('btn');
                $('.link-block').remove();
                $('.drop-block').fadeIn();
                $('div.drop-block').append(text[i]);
                $('.link-block').css('width', widthBtn[i]);
            }
        }
    });

    //исчезновение всплывающего блока и
    //возвращение кнопки меню в стандартное состояние
    $('.drop-block').mouseleave(function() {
        $('.drop-block').fadeOut(100);
        for (var i=0; i < text.length; i++) {
            pressedbutton.addClass('btn');
            pressedbutton.removeClass('btn-hover');
        }
    });

    var pressed = false;
    $('.btn').click( function(e) {
        var thisbutton = $(this);
            if ($(this).attr("id") == 'b8') {
                if(pressed == false) {
                    thisbutton.addClass('btn-hover');
                    thisbutton.removeClass('btn');
                    $('.region-block').fadeIn();
                    $('.triangle-down').css('transform', 'rotate(180deg)');
                }
                else {
                    thisbutton.addClass('btn');
                    thisbutton.removeClass('btn-hover');
                    $('.region-block').fadeOut();
                    $('.triangle-down').css('transform', 'rotate(0deg)');
                }
                pressed=!pressed;
            }
    });
});




