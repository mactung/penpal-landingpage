//**All js for sensei of theme

//Smart layout of sensei
(function ($) {
    'use strict';

    jQuery(document).ready(function () {
        
        // Quickview js
        $('.sensei-quick-view').on('click', function (e) {
            e.preventDefault();

            var $this = $(this);
            var course_id = $this.data('course-id');

            $this.parent().addClass('loading');
            $this.css('opacity', '0');
            $.ajax({
                url: ajaxurl,
                data: {
                    action: 'zoo_course_quickview',
                    course_id: course_id
                },
                type: "POST",
                success: function (response) {
                    $('body').append(response);

                    $this.parent().removeClass('loading');
                    $this.css('opacity', '1');

                    setTimeout(function () {
                        $('#zoo-course-quickview,.zoo-course-quickview-mask').css('opacity', '1');
                    }, 10);

                    $('#zoo-course-quickview').find('form.cart').submit(function(e){
                        e.preventDefault();

                        if ($('#zoo-quickview-lb')[0]) {
                            $('.zoo-mask-close').removeClass('mask-quick-view active loading');
                            $('#zoo-quickview-lb').css({'top': 'calc(50% + 150px)', 'opacity': '0'});
                            setTimeout(function () {
                                $('#zoo-quickview-lb').remove();
                            }, 700);
                        } 
                        $('.wrap-mini-cart').addClass('loading');
                        $('.wrap-element-cart-off-canvas').toggleClass('off-canvas-cart-active');

                        $('.wrap-element-cart-off-canvas').addClass('loading');
                        zoo_course_remove_quickview();
                        
                        var $this = $(this);
                        var $form = $this.closest('form');
                        
                        var data = {
                            product_id: $form.find("input[name*='product_id']").val(),
                            product_variation_data: $form.serialize()
                        };
                        if (!data.product_id) {
                            console.log('(Error): No product id found');
                            return;
                        }

                        $.ajax({
                            type: 'POST',
                            dataType: 'html',
                            url: '?add-to-cart=' + data.product_id + '& ajax-add-to-cart=1',
                            data: data.product_variation_data,
                            cache: false,
                            headers: {'cache-control': 'no-cache'},
                            error: function (XMLHttpRequest, textStatus, errorThrown) {
                                console.log('AJAX error - SubmitForm() - ' + errorThrown);
                            },
                            success:function(response){
                                var $response = $(response),
                                    $shopNotices = $response.find('.woocommerce-message') // Shop notices
                                
                                $('.widget_shopping_cart').html($response.find('.widget_shopping_cart').html());
                                $('.icon-element-cart').html($response.find('.icon-element-cart').html());
                                $('.wrap-element-cart-off-canvas').removeClass('loading');
                            }
                        });
                    });
                }
            });
        });

        $('.zoo-course-quickview-mask, .close-course-quickview').live('click', function () {
            zoo_course_remove_quickview();
        });

        function zoo_course_remove_quickview() {
            $('.zoo-course-quickview-mask').css('opacity', '0');
            $('#zoo-course-quickview').css({'top': 'calc(50% + 150px)', 'opacity': '0'});
            setTimeout(function () {
                $('#zoo-course-quickview').remove();
                $('.zoo-course-quickview-mask').remove();
            }, 500)
        }

        /* Login and Register */
        $('#customer_login .col-1').hide();
        $('.btn-show-register').on('click', function (e) {
            e.preventDefault();
            $('#customer_login .col-1').slideUp();
            $('#customer_login .col-2').slideDown();
        });
        $('.btn-show-login').on('click', function (e) {
            e.preventDefault();
            $('#customer_login .col-1').slideDown();
            $('#customer_login .col-2').slideUp();
        });
        
    });

})(jQuery);