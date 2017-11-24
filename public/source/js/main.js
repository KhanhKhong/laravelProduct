// JavaScript Document
//----Sroll to top
$(function () {
    $(window).scroll(function () {
        if ($(this).scrollTop() != 0) {
            $('.bttop').fadeIn();
        } else {
            $('.bttop').fadeOut();
        }
    });
    $('.bttop').click(function () {
        $('body,html').animate({
            scrollTop: 0
        }, 800);
    });
}); //----Sroll to top
//Slide search
$(document).ready(function () {
    $(".menu-right-1").click(function () {
        $(".search").slideToggle("100");
    });
});
// Menu
(function ($) {

    // init ondomready
    $(function () {

        // init all menus
        $('ul.navbar-nav').each(function () {
            var $this = $(this);
            $this.addClass('sm').smartmenus({
                // these are some good default options that should work for all
                // you can, of course, tweak these as you like
                subMenusSubOffsetX: 2,
                subMenusSubOffsetY: -6,
                subIndicatorsPos: 'append',
                subIndicatorsText: '...',
                collapsibleShowFunction: null,
                collapsibleHideFunction: null,
                rightToLeftSubMenus: $this.hasClass('navbar-right'),
                bottomToTopSubMenus: $this.closest('.navbar').hasClass('navbar-fixed-bottom')
            })
                    // set Bootstrap's "active" class to SmartMenus "current" items (should someone decide to enable markCurrentItem: true)
                    .find('a.current').parent().addClass('active');
        })
                .bind({
                    // set/unset proper Bootstrap classes for some menu elements
                    'show.smapi': function (e, menu) {
                        var $menu = $(menu),
                                $scrollArrows = $menu.dataSM('scroll-arrows'),
                                obj = $(this).data('smartmenus');
                        if ($scrollArrows) {
                            // they inherit border-color from body, so we can use its background-color too
                            $scrollArrows.css('background-color', $(document.body).css('background-color'));
                        }
                        $menu.parent().addClass('open' + (obj.isCollapsible() ? ' collapsible' : ''));
                    },
                    'hide.smapi': function (e, menu) {
                        $(menu).parent().removeClass('open collapsible');
                    },
                    // click the parent item to toggle the sub menus (and reset deeper levels and other branches on click)
                    'click.smapi': function (e, item) {
                        var obj = $(this).data('smartmenus');
                        if (obj.isCollapsible()) {
                            var $item = $(item),
                                    $sub = $item.parent().dataSM('sub');
                            if ($sub && $sub.dataSM('shown-before') && $sub.is(':visible')) {
                                obj.itemActivate($item);
                                obj.menuHide($sub);
                                return false;
                            }
                        }
                    }
                });

    });

    // fix collapsible menu detection for Bootstrap 3
    $.SmartMenus.prototype.isCollapsible = function () {
        return this.$firstLink.parent().css('float') != 'left';
    };

})(jQuery);

//main-slider
$(function () {
    $('#main-slider.carousel').carousel({
        interval: 8000
    });
});
//carousel muiti
$('.carousel[data-type="multi"] .item').each(function () {
    var next = $(this).next();
    if (!next.length) {
        next = $(this).siblings(':first');
    }
    next.children(':first-child').clone().appendTo($(this));

    for (var i = 0; i < 1; i++) {
        next = next.next();
        if (!next.length) {
            next = $(this).siblings(':first');
        }

        next.children(':first-child').clone().appendTo($(this));
    }
});
//carousel muiti2
$('.carousel[data-type="multi2"] .item').each(function () {
    var next = $(this).next();
    if (!next.length) {
        next = $(this).siblings(':first');
    }
    next.children(':first-child').clone().appendTo($(this));

    for (var i = 0; i < 2; i++) {
        next = next.next();
        if (!next.length) {
            next = $(this).siblings(':first');
        }

        next.children(':first-child').clone().appendTo($(this));
    }
});
//carousel muiti3
$('.carousel[data-type="multi3"] .item').each(function () {
    var next = $(this).next();
    if (!next.length) {
        next = $(this).siblings(':first');
    }
    next.children(':first-child').clone().appendTo($(this));

    for (var i = 0; i < 1; i++) {
        next = next.next();
        if (!next.length) {
            next = $(this).siblings(':first');
        }

        next.children(':first-child').clone().appendTo($(this));
    }
});



//--- Amination
var uyphatTrigger = function () {
    jQuery(window).scroll(function () {
        jQuery(".animated-area").each(function () {
            if (jQuery(window).height() + jQuery(window).scrollTop() - jQuery(this).offset().top > 0) {
                jQuery(this).trigger("animate-it");
            }
        });
    });
    jQuery(document).ready(function () {
        jQuery(".animated-area").each(function () {
            if (jQuery(window).height() + jQuery(window).scrollTop() - jQuery(this).offset().top > 0) {
                jQuery(this).trigger("animate-it");
            }
        });
    });
}
var uyphatAnimation = function () {
    uyphatTrigger();
    jQuery(".animated-area").on("animate-it", function () {
        var cf = jQuery(this);
        cf.find(".animated").each(function () {
            var duration = (jQuery(this).attr('data-animation-duration') == null) ? "0.3s" : jQuery(this).attr('data-animation-duration');
            jQuery(this).css("-webkit-animation-duration", duration);
            jQuery(this).css("-moz-animation-duration", duration);
            jQuery(this).css("-ms-animation-duration", duration);
            jQuery(this).css("-o-animation-duration", duration);
            jQuery(this).css("animation-duration", duration);
            jQuery(this).css("-webkit-animation-delay", jQuery(this).attr("data-animation-delay"));
            jQuery(this).css("-moz-animation-delay", jQuery(this).attr("data-animation-delay"));
            jQuery(this).css("-ms-animation-delay", jQuery(this).attr("data-animation-delay"));
            jQuery(this).css("-o-animation-delay", jQuery(this).attr("data-animation-delay"));
            jQuery(this).css("animation-delay", jQuery(this).attr("data-animation-delay"));
            jQuery(this).addClass(jQuery(this).attr("data-animation"));
        });
    });
}
jQuery(document).ready(function ($) {
    uyphatAnimation();
}); //--- //Amination

// Sidebar
(function ($) {
    $(document).ready(function () {

        $('#side-menu li.active').addClass('open').children('ul').show();
        $('#side-menu li.has-sub>a').on('click', function () {
            $(this).removeAttr('href');
            var element = $(this).parent('li');
            if (element.hasClass('open')) {
                element.removeClass('open');
                element.find('li').removeClass('open');
                element.find('ul').slideUp(200);
            } else {
                element.addClass('open');
                element.children('ul').slideDown(200);
                element.siblings('li').children('ul').slideUp(200);
                element.siblings('li').removeClass('open');
                element.siblings('li').find('li').removeClass('open');
                element.siblings('li').find('ul').slideUp(200);
            }
        });

    });
})(jQuery);
//Footer
$("#footer h3").click(function () {
    $screensize = $(window).width();
    if ($screensize < 768) {
        $(this).toggleClass("active");
        $(this).parent().find("ul").slideToggle('medium');
    }
});

/// ======= Zoom product
jQuery(document).ready(function () {
    jQuery('#mycarousel').jcarousel({
        start: 3
    });
});
$("#zoom_03").elevateZoom({constrainType: "height", constrainSize: 370, zoomType: "inner", containLensZoom: true, gallery: 'gallery_01', cursor: 'pointer', galleryActiveClass: "active"});
$("#zoom_03").bind("click", function (e) {
    var ez = $('#zoom_03').data('elevateZoom');
    $.fancybox(ez.getGalleryList());
    return false;
});




