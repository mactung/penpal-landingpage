<footer id="site-footer" class="site-footer footer">
    <?php include 'inc/top-footer.php' ?>
    <div id="main-footer" class="footer-row footer-main full-width-contained footer-preset-default">
        <div class="container">
            <div class="wrap-builder-items">
                <div class="row">
                    <div class="col-md-4 col-12 builder-item builder-block-footer-widget-2">
                        <div class="builder-widget-element widget-area">
                            <section id="custom_html-2" class="widget_text widget widget_custom_html">
                                <h4 class="widget-title">Thông tin liên lạc</h4>
                                <div class="textwidget custom-html-widget">
                                    <p>
                                        
                                    </p><br>
                                    <span style="line-height: 35px;"><i class="cs-font  clever-icon-web-home" style="color:#7fbf00"></i>&#160;&#160;&#160;169 Nguyen Ngoc Vũ Str, Cau Giay, Ha Noi.</span><br>
                                    <span style="line-height: 35px;"><i class="cs-font  clever-icon-phone-1" style="color:#7fbf00"></i>&#160;&#160;&#160;(0044) 8657 666 999</span><br>
                                    <span style="line-height: 35px;"><i class="cs-font  clever-icon-mail-5" style="color:#7fbf00"></i>&#160;&#160;&#160;hello@yourdomain.com</span>
                                </div>
                            </section>
                        </div>
                    </div>
                    <div class="col-md-4 col-12 builder-item builder-block-footer-widget-4">
                        <div class="builder-widget-element widget-area">
                            <section id="nav_menu-3" class="widget widget_nav_menu">
                                <h4 class="widget-title">Chương trình học</h4>
                                <div class="menu-our-courses-container">
                                    <ul id="menu-our-courses" class="menu">
                                        <li id="menu-item-1773" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1773"><a href="#">Penpal 1</a></li>
                                        <li id="menu-item-1774" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1774"><a href="#">Penpal 2</a></li>
                                        <li id="menu-item-1775" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1775"><a href="#">Penpal 3</a></li>
                                        
                                    </ul>
                                </div>
                            </section>
                        </div>
                    </div>
                    <div class="col-md-3 col-12 offset-md-1 builder-item builder-block-footer-widget-5">
                        <div class="builder-widget-element widget-area">
                            <section id="null-instagram-feed-4" class="widget null-instagram-feed">
                                <h4 class="widget-title">Facebook</h4>

                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="bottom-footer" class="footer-row footer-bottom full-width-contained footer-preset-default">
        <div class="container">
            <div class="wrap-builder-items">
                <div class="row">
                    <div class="col-md-6 col-12 builder-item builder-block-footer_copyright">
                        <div class="builder-footer-copyright-item footer-copyright">Copyright &#169; 2021 Penpal by <a href="/">M.A.C Studio<a></div>
                    </div>
                    <div class="col-md-6 col-12 builder-item builder-block-footer-widget-6">
                        <!-- <div class="builder-widget-element widget-area">
                            <section id="zoosocialwidget-2" class="widget ZooSocialWidget">
                                <ul class="zoo-widget-social-icon icon clearfix">
                                    <li><a href="#" target="_blank" title="Facebook" class="icon-social-facebook social-icon"><i class="zoo-icon-facebook"></i> </a></li>
                                    <li><a href="#" target="_blank" title="Twitter" class="icon-social-twitter social-icon"><i class="zoo-icon-twitter"></i> </a></li>
                                    <li><a href="#" target="_blank" title="Instagram" class="icon-social-instagram social-icon"><i class="zoo-icon-instagram"></i> </a></li>
                                    <li><a href="#" target="_blank" title="Pinterest" class="icon-social-pinterest social-icon"><i class="zoo-icon-pinterest"></i> </a></li>
                                    <li><a href="#" target="_blank" title="Skype" class="icon-social-skype social-icon"><i class="zoo-icon-skype"></i> </a></li>
                                </ul>
                            </section>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="zoo-mask-close"></div>
<a id="zoo-back-to-top" href="#site-header" title="Back to Top"><i class="cs-font clever-icon-up"></i></a>
<script>
    (function(body) {
        'use strict';
        body.className = body.className.replace(/\btribe-no-js\b/, 'tribe-js');
    })(document.body);
</script>
<script>
    jQuery(function($) {
        function countVisitors(el) {
            if (el.data('fake') <= 0) {
                var data = {
                    'action': 'cop_count_visitors',
                    'cop_count_req': el.data('refer').replace(/http(s)?:/, '')
                };

                $.post(woocommerce_params.ajax_url, data, function(r) {
                    el.text(JSON.stringify(r.html))
                });
            } else {
                let min = parseInt(el.text()) - 10;
                let max = parseInt(el.text()) + 10;
                let count = zoogetRandomArbitrary(min, max);
                if (count < el.data('fake')) {
                    count = el.data('fake');
                }
                if (count > el.data('fake_max')) {
                    count = el.data('fake_max');
                }
                el.text(count);
            }
        }

        function zoogetRandomArbitrary(min, max) {
            let count = parseInt(Math.random() * (max - min) + min);
            return count < 1 ? 1 : count;
        }
        var copCount = $('#cop-visitors-count');
        if (copCount.length) {
            setInterval(function() {
                countVisitors(copCount);
            }, 10000);
        }
    });
</script>
<script>
    /* <![CDATA[ */
    var tribe_l10n_datatables = {
        "aria": {
            "sort_ascending": ": activate to sort column ascending",
            "sort_descending": ": activate to sort column descending"
        },
        "length_menu": "Show _MENU_ entries",
        "empty_table": "No data available in table",
        "info": "Showing _START_ to _END_ of _TOTAL_ entries",
        "info_empty": "Showing 0 to 0 of 0 entries",
        "info_filtered": "(filtered from _MAX_ total entries)",
        "zero_records": "No matching records found",
        "search": "Search:",
        "all_selected_text": "All items on this page were selected. ",
        "select_all_link": "Select all pages",
        "clear_selection": "Clear Selection.",
        "pagination": {
            "all": "All",
            "next": "Next",
            "previous": "Previous"
        },
        "select": {
            "rows": {
                "0": "",
                "_": ": Selected %d rows",
                "1": ": Selected 1 row"
            }
        },
        "datepicker": {
            "dayNames": ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
            "dayNamesShort": ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
            "dayNamesMin": ["S", "M", "T", "W", "T", "F", "S"],
            "monthNames": ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
            "monthNamesShort": ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
            "monthNamesMin": ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            "nextText": "Next",
            "prevText": "Prev",
            "currentText": "Today",
            "closeText": "Done",
            "today": "Today",
            "clear": "Clear"
        }
    }; /* ]]> */
</script>
<link href="https://fonts.googleapis.com/css?family=Open+Sans:800%2C700%2C300%2C400" rel="stylesheet" property="stylesheet" type="text/css" media="all">

<script type="text/javascript">
    if (typeof revslider_showDoubleJqueryError === "undefined") {
        function revslider_showDoubleJqueryError(sliderID) {
            var err = "<div class='rs_error_message_box'>";
            err += "<div class='rs_error_message_oops'>Oops...</div>";
            err += "<div class='rs_error_message_content'>";
            err += "You have some jquery.js library include that comes after the Slider Revolution files js inclusion.<br>";
            err += "To fix this, you can:<br>&nbsp;&nbsp;&nbsp; 1. Set 'Module General Options' ->  'jQuery & OutPut Filters' -> 'Put JS to Body' to on";
            err += "<br>&nbsp;&nbsp;&nbsp; 2. Find the double jQuery.js inclusion and remove it";
            err += "</div>";
            err += "</div>";
            jQuery(sliderID).show().html(err);
        }
    }
</script>
<script type="text/javascript">
    var c = document.body.className;
    c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
    document.body.className = c;
</script>
<link rel='stylesheet' id='cvca-style-css' href='wp-content/plugins/clever-vc-addon/assets/css/cvca-style.min.css?ver=1.0.4' type='text/css' media='all' />
<link rel='stylesheet' id='slick-css' href='wp-content/plugins/clever-vc-addon/assets/vendor/slick/slick.css?ver=1.6.0' type='text/css' media='all' />
<script type='text/javascript' src='wp-content/plugins/the-events-calendar/common/src/resources/js/tribe-common.min.js?ver=4.9.20'></script>
<script type='text/javascript' src='wp-content/plugins/the-events-calendar/common/src/resources/js/tooltip.min.js?ver=4.9.20'></script>
<script type='text/javascript' src='wp-content/plugins/bbpress/templates/default/js/editor.js?ver=2.5.14-6684'></script>
<script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js?ver=2.1.4'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var woocommerce_params = {
        "ajax_url": "\/wp-admin\/admin-ajax.php",
        "wc_ajax_url": "\/?wc-ajax=%%endpoint%%"
    };
    /* ]]> */
</script>
<script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js?ver=3.8.2'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var wc_cart_fragments_params = {
        "ajax_url": "\/wp-admin\/admin-ajax.php",
        "wc_ajax_url": "\/?wc-ajax=%%endpoint%%",
        "cart_hash_key": "wc_cart_hash_6cb096f15cce09742cd4f8e3d624fbbf",
        "fragment_name": "wc_fragments_6cb096f15cce09742cd4f8e3d624fbbf",
        "request_timeout": "5000"
    };
    /* ]]> */
</script>
<script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min.js?ver=3.8.2'></script>
<script type='text/javascript' src='wp-includes/js/jquery/ui/core.min.js?ver=1.11.4'></script>
<script type='text/javascript' src='wp-includes/js/jquery/ui/widget.min.js?ver=1.11.4'></script>
<script type='text/javascript' src='wp-includes/js/jquery/ui/tabs.min.js?ver=1.11.4'></script>
<script type='text/javascript' src='wp-content/plugins/woothemes-sensei/assets/js/user-dashboard.min.js?ver=1.12.1'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var zooWishlistCDATA = {
        "addToWishlist": "Add Wishlist",
        "addToWishlistIcon": "<i class=\"zoo-icon-heart-o\"><\/i> ",
        "browseWishlist": "Browse Wishlist",
        "browseWishlistIcon": "<i class=\"zoo-icon-heart\"><\/i> ",
        "addToWishlistErr": "Failed to add the item to Wishlist.",
        "wishlistIsEmpty": "Wishlist is empty."
    };
    /* ]]> */
</script>
<script type='text/javascript' src='wp-content/themes/zoo-eduhub/core/assets/js/wishlist.min.js?ver=2.0'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var zooProductsCompareCDATA = {
        "addToCompare": "Add Compare",
        "addToCompareIcon": "<i class=\"zoo-icon-refresh\"><\/i> ",
        "browseCompare": "Browse Compare",
        "browseCompareIcon": "<i class=\"zoo-icon-refresh\"><\/i> ",
        "addToCompareErr": "Failed to add the item to compare list.",
        "compareIsEmpty": "No products to compare."
    };
    /* ]]> */
</script>
<script type='text/javascript' src='wp-content/themes/zoo-eduhub/core/assets/js/products-compare.min.js?ver=2.0'></script>
<script type='text/javascript' src='wp-content/themes/zoo-eduhub/core/assets/js/elements.min.js?ver=2.0'></script>
<script type='text/javascript' src='wp-content/themes/zoo-eduhub/assets/vendor/defer/defer.min.js?ver=1.1.8'></script>
<script type='text/javascript' src='wp-content/themes/zoo-eduhub/assets/vendor/sticky-kit/jquery.sticky-kit.min.js?ver=5.2.11'></script>
<script type='text/javascript' src='wp-content/themes/zoo-eduhub/assets/js/theme.js?ver=5.2.11'></script>
<script src='wp-content/plugins/the-events-calendar/common/src/resources/js/underscore-before.js'></script>
<script type='text/javascript' src='wp-includes/js/underscore.min.js?ver=1.8.3'></script>
<script src='wp-content/plugins/the-events-calendar/common/src/resources/js/underscore-after.js'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var _wpUtilSettings = {
        "ajax": {
            "url": "\/wp-admin\/admin-ajax.php"
        }
    };
    /* ]]> */
</script>
<script type='text/javascript' src='wp-includes/js/wp-util.min.js?ver=5.2.11'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var wc_add_to_cart_variation_params = {
        "wc_ajax_url": "\/?wc-ajax=%%endpoint%%",
        "i18n_no_matching_variations_text": "Sorry, no products matched your selection. Please choose a different combination.",
        "i18n_make_a_selection_text": "Please select some product options before adding this product to your cart.",
        "i18n_unavailable_text": "Sorry, this product is unavailable. Please choose a different combination."
    };
    /* ]]> */
</script>
<script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart-variation.min.js?ver=3.8.2'></script>
<script type='text/javascript' src='wp-content/themes/zoo-eduhub/assets/js/zoo-woo-ajax.js?ver=5.2.11'></script>
<script type='text/javascript' src='wp-content/themes/zoo-eduhub/assets/js/zoo-woocommerce.js?ver=5.2.11'></script>
<script type='text/javascript' src='wp-content/themes/zoo-eduhub/assets/js/sensei.js?ver=5.2.11'></script>
<script type='text/javascript' src='wp-content/themes/zoo-eduhub/assets/js/zoo-scripts.js?ver=5.2.11'></script>
<script type='text/javascript'>
    var ajaxurl = "wp-admin/admin-ajax.php";
</script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var newsletter = {
        "messages": {
            "email_error": "The email is not correct",
            "name_error": "The name is not correct",
            "surname_error": "The last name is not correct",
            "privacy_error": "You must accept the privacy statement"
        },
        "profile_max": "20"
    };
    /* ]]> */
</script>
<script type='text/javascript' src='wp-content/plugins/newsletter/subscription/validate.js?ver=6.3.8'></script>
<script type='text/javascript' src='wp-content/plugins/clever-mega-menu/assets/frontend/js/clever-mega-menu.min.js?ver=1.0.9'></script>
<script type='text/javascript' src='wp-content/themes/zoo-eduhub/inc/zoo-comment-rating/js/zoo-rating.js?ver=0.1'></script>
<script type='text/javascript' src='wp-includes/js/wp-embed.min.js?ver=5.2.11'></script>
<script type='text/javascript' src='wp-content/plugins/js_composer/assets/js/dist/js_composer_front.min.js?ver=6.0.5'></script>
<script type='text/javascript' src='wp-content/plugins/clever-vc-addon/assets/vendor/slick/slick.min.js?ver=1.6.0'></script>
<script type='text/javascript' src='wp-content/plugins/clever-vc-addon/assets/js/cvca-script.min.js?ver=1.0.4'></script>
<script>
    jQuery(function($) {
        // :: 15.0 CONTACT FORM ACTIVE CODE
        // Get the form.
        var form = $('#contact-form');
        // Get the messages div.
        var formMessages = $('.form-message');
        // Set up an event listener for the contact form.
        $(form).submit(function(e) {
            // Stop the browser from submitting the form.
            e.preventDefault();
            // Serialize the form data.
            var formData = $(form).serialize();
            // Submit the form using AJAX.
            $.ajax({
                    type: 'POST',
                    url: $(form).attr('action'),
                    data: formData
                })
                .done(function(response) {
                    // Make sure that the formMessages div has the 'success' class.
                    $(formMessages).removeClass('error');
                    $(formMessages).addClass('success');
                    $(formMessages).addClass('text-success');

                    // Set the message text.
                    $(formMessages).text(response);

                    // Clear the form.
                    $('#contact-form input').val('');
                })
                .fail(function(data) {
                    // Make sure that the formMessages div has the 'error' class.
                    $(formMessages).removeClass('success');
                    $(formMessages).addClass('error');

                    // Set the message text.
                    if (data.responseText !== '') {
                        $(formMessages).text(data.responseText);
                    } else {
                        $(formMessages).text('Oops! An error occured and your message could not be sent.');
                    }
                });
        });
    })
</script>
</body>

</html>