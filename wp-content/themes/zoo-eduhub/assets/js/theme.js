//**All config js of theme
(function ($) {
    'use strict';
    jQuery(document).ready(function () {
        
        /* Fix rtl row full-width in visual composer */
        function zoo_fix_vc_full_width_row(){
            var $elements = $('[data-vc-full-width="true"]');
            $.each($elements, function () {
                var $el = $(this);
                $el.css('right', $el.css('left')).css('left', '');
            });
        }

        if($('body.rtl')[0]) {
            // Fixes rows in RTL
            $(document).on('vc-full-width-row', function () {
                zoo_fix_vc_full_width_row();
            });

            // Run one time because it was not firing in Mac/Firefox and Windows/Edge some times
            zoo_fix_vc_full_width_row();
        }

        jQuery(".post-slider").each(function () {
            
            $('.post-slider').slick({
                slidesToShow: 1,
                arrows: true,
                dots: false,
                autoplay: false,
                prevArrow: '<span class="cvca-carousel-btn prev-item"><i class="cs-font clever-icon-arrow-left-1"></i></span>',
                nextArrow: '<span class="cvca-carousel-btn next-item "><i class="cs-font clever-icon-arrow-right-1"></i></span>',
                autoplaySpeed: 5000,
                rtl: $('body.rtl')[0] ? true : false,
            });
        });

        jQuery(".cvca-testimonial-carousel").each(function () {
            var data = JSON.parse(jQuery(this).attr('data-config'));
            var item = data['item'];
            var pag = false;
            if (data['pagination'] != undefined && data['pagination'] == 'true') {
                pag = true;
            }
            var nav = false;
            if (data['navigation'] != undefined && data['navigation'] == 'true') {
                nav = true;
            }
            var wrap = data['wrap'] != undefined ? data['wrap'] : '';
            var wrapcaroul = wrap != '' ? jQuery(this).find(wrap) : jQuery(this);
            wrapcaroul.slick({
                slidesToShow: item,
                slidesToScroll: item > 5 ? Math.round(item / 2) : 1,
                arrows: nav,
                dots: pag,
                autoplay: true,
                prevArrow: '<span class="cvca-carousel-btn prev-item"><i class="cs-font clever-icon-arrow-left-1"></i></span>',
                nextArrow: '<span class="cvca-carousel-btn next-item "><i class="cs-font clever-icon-arrow-right-1"></i></span>',
                autoplaySpeed: 5000,
                rtl: $('body.rtl')[0] ? true : false,
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: item > 4 ? 4 : item,
                            slidesToScroll: item > 4 ? 2 : 1
                        }
                    }, {
                        breakpoint: 769,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                        }
                    }, {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                        }
                    }
                ]
            });
        });

        jQuery(".cvca-blog-slider-carousel").each(function () {
            var data = JSON.parse(jQuery(this).attr('data-config'));
            var item = data['item'];
            var pag = false;
            if (data['pagination'] != undefined && data['pagination'] == 'true') {
                pag = true;
            }
            var nav = false;
            if (data['navigation'] != undefined && data['navigation'] == 'true') {
                nav = true;
            }
            var wrap = data['wrap'] != undefined ? data['wrap'] : '';
            var wrapcaroul = wrap != '' ? jQuery(this).find(wrap) : jQuery(this);
            wrapcaroul.slick({
                slidesToShow: item,
                slidesToScroll: item > 5 ? Math.round(item / 2) : 1,
                arrows: nav,
                dots: pag,
                autoplay: false,
                prevArrow: '<span class="cvca-carousel-btn prev-item"><i class="cs-font clever-icon-arrow-left-1"></i></span>',
                nextArrow: '<span class="cvca-carousel-btn next-item "><i class="cs-font clever-icon-arrow-right-1"></i></span>',
                autoplaySpeed: 5000,
                rtl: $('body.rtl')[0] ? true : false,
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: item > 4 ? 4 : item,
                            slidesToScroll: item > 4 ? 2 : 1
                        }
                    }, {
                        breakpoint: 769,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                        }
                    }, {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                        }
                    }
                ]
            });
        });

        if ($('.project-wrap-thumbs')[0]) {
            $('.project-wrap-thumbs').slick({
                slidesToShow: 6,
                slidesToScroll: 1,
                focusOnSelect: true,
                prevArrow: '<span class="prev-slide zoo-p-slider-arrow"><i class="fa fa-angle-left"></i></span>',
                nextArrow: '<span class="next-slide zoo-p-slider-arrow"><i class="fa fa-angle-right"></i></span>',
                rtl: $('body.rtl')[0] ? true : false,
                asNavFor: '.project-slider',
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 6,
                            slidesToScroll: 1,
                            infinite: true,
                            dots: true
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 4,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1
                        }
                    }
                ]
            });
        }
        if ($('.project-slider')[0]) {
            $('.project-slider').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                fade: true,
                prevArrow: '<span class="prev-slide zoo-p-slider-arrow"><i class="cs-font clever-icon-arrow-left-3"></i></span>',
                nextArrow: '<span class="next-slide zoo-p-slider-arrow"><i class="cs-font clever-icon-arrow-right-3"></i></span>',
                rtl: $('body.rtl')[0] ? true : false,
                asNavFor: $('.project-wrap-thumbs')[0] ? '.project-wrap-thumbs' : ''
            });
        }
        jQuery(".zoo-carousel").each(function () {
            var data = JSON.parse(jQuery(this).attr('data-config'));
            var item = data['item'];
            var pag = false;
            if (data['pagination'] != undefined && data['pagination'] == 'true') {
                pag = true;
            }
            var nav = false;
            if (data['navigation'] != undefined && data['navigation'] == 'true') {
                nav = true;
            }
            var wrap = data['wrap'] != undefined ? data['wrap'] : '';
            var wrapcaroul = wrap != '' ? jQuery(this).find(wrap) : jQuery(this);
            wrapcaroul.slick({
                slidesToShow: item,
                slidesToScroll: item > 5 ? Math.round(item / 2) : 1,
                arrows: nav,
                dots: pag,
                autoplay: true,
                prevArrow: '<span class="zoo-carousel-btn prev-item"><i class="cs-font clever-icon-arrow-left-1"></i></span>',
                nextArrow: '<span class="zoo-carousel-btn next-item "><i class="cs-font clever-icon-arrow-right-1"></i></span>',
                autoplaySpeed: 5000,
                rtl: $('body.rtl')[0] ? true : false,
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: item > 4 ? 4 : item,
                            slidesToScroll: item > 4 ? 2 : 1
                        }
                    }, {
                        breakpoint: 769,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 1,
                        }
                    }, {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1,
                        }
                    }
                ]
            });
        });

    });
})(jQuery);
