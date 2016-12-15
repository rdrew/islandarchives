(function($) {

    Drupal.behaviors.stickyHeader = {
        attach: function(context, settings) {
            $(window).scroll(function() {
                if ($(this).scrollTop() > 1) {
                    $('header').addClass("sticky");
                } else {
                    $('header').removeClass("sticky");
                }

            });
        }
    }

    Drupal.behaviors.collection_view_buttons = {
        attach: function(context, settings) {
            $('.islandora-basic-collection-display-switch .islandora-view-list', context).once('foo', function() {
                // Now, we are invoking the previously declared theme function using two
                $(this).empty().append('<i class="fa fa-list" aria-hidden="true"></i>');
            });
            $('.islandora-basic-collection-display-switch .islandora-view-grid', context).once('foo', function() {
                // Now, we are invoking the previously declared theme function using two
                $(this).empty().append('<i class="fa fa-th" aria-hidden="true"></i>');
            });
            $('.pager__item--first', context).once('collection_view_buttons', function() {
                // Now, we are invoking the previously declared theme function using two
                $(this).prepend('<i class="fa fa-angle-double-left" aria-hidden="true"></i>');
            });
            $('.pager__item--previous', context).once('collection_view_buttons', function() {
                // Now, we are invoking the previously declared theme function using two
                $(this).prepend('<i class="fa fa-angle-left" aria-hidden="true"></i>');
            });
            $('.pager__item--next', context).once('collection_view_buttons', function() {
                // Now, we are invoking the previously declared theme function using two
                $(this).append('<i class="fa fa-angle-right" aria-hidden="true"></i>');
            });
            $('.pager__item--last', context).once('collection_view_buttons', function() {
                // Now, we are invoking the previously declared theme function using two
                $(this).append('<i class="fa fa-angle-double-right" aria-hidden="true"></i>');
            });
        }
    }


})(jQuery);
