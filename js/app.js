var wow = new WOW(
  {
    boxClass:     'wow',      // animated element css class (default is wow)
    animateClass: 'animated', // animation css class (default is animated)
    offset:       0,          // distance to the element when triggering the animation (default is 0)
    mobile:       true,       // trigger animations on mobile devices (default is true)
    live:         true,       // act on asynchronously loaded content (default is true)
    callback:     function(box) {
      // the callback is fired every time an animation is started
      // the argument that is passed in is the DOM node being animated
    },
    scrollContainer: null // optional scroll container selector, otherwise use window
  }
);

wow.init();

$(window).on('load', function() {
    $('body').addClass('animateOnLoad');
});

$('.scroll-link a').on('click',function (e) {
    // e.preventDefault();

    var target = this.hash;
    var $target = $(target);

    $('html, body').stop().animate({
     'scrollTop': $target.offset().top
    }, 900, 'swing', function () {
     window.location.hash = target;
    });
});

$('.overlay_menu__nav .scroll-link a').on('click',function (e) {
     //e.preventDefault();
    var target = this.hash;
    var $target = $(target);

    $('.overlay_menu').css('display','none');
    $('button.burger-btn').removeClass('burger-btn--active');
    $('body').removeClass('overlay_menu--open');

    $('html, body').animate({
        'scrollTop': $target.offset().top
    }, 900, 'swing', function () {
        window.location.href = document.location.origin + '/' + target;
    });

 });


$(document).ready(function() {
    $('.burger-btn').on('click', function(){
        $(this).toggleClass('burger-btn--active').promise().done(function(){
            $('.overlay_menu').fadeToggle(300, function(){
                $('body').toggleClass('overlay_menu--open');
            });
        });     
    });

    $('.overlay_menu__nav ul li').on('click', function(){
        $('.burger-btn').removeClass('burger-btn--active');

        $('.overlay_menu').fadeOut(300);

        $('body').removeClass('overlay_menu--open');
    });


    $('body').on('click', function(e){
        $('.case__open').removeClass('case__open--active');
        $('body').removeClass('cases__item--opened');

        setTimeout(function(){
            $('.case__open').hide(0);
        }, 100);
    });

    $('.case__open').on('click', function(e){
        e.stopPropagation();
    });

    $('.cases__item-1').on('click', function(){
        $('.case__open-1').show(0);

        setTimeout(function(){
            $('.case__open-1').addClass('case__open--active');
        }, 100);

        return false;
    })

    $('.cases__item-2').on('click', function(){
        $('.case__open-2').show(0);

        setTimeout(function(){
            $('.case__open-2').addClass('case__open--active');
        }, 100);

        return false;
    })

    $('.cases__item-3').on('click', function(){
        $('.case__open-3').show(0);

        setTimeout(function(){
            $('.case__open-3').addClass('case__open--active');
        }, 100);

        return false;
    })

    $('.cases__item-4').on('click', function(){
        $('.case__open-4').show(0);

        setTimeout(function(){
            $('.case__open-4').addClass('case__open--active');
        }, 100);

        return false;
    })

    $('.cases__item').on('click', function(){
        $('body').addClass('cases__item--opened');
    })

    $('.case__open-close').on('click', function(){
        $(this).closest('.case__open').removeClass('case__open--active');
        $('body').removeClass('cases__item--opened');

        setTimeout(function(){
            $('.case__open').hide(0);
        }, 100);
    })
	
	$('.testimonial-popover').popover({
        trigger: 'hover',
        placement: 'top',
		//container: 'body',
		html: 'true'
    });
});