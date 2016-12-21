(function($){
    /**
     * Object ScrollSlide
     */
    var self, console, alert;
    var ScrollSlide = {
        init: function() {

            self = this;
            console = window.console;
            alert = window.alert;
            console.log( 'ScrollSlide init' );

            // default value - first item in page
            // things get glitchy if this is missing
            self.toggleItem = '#one';

            // hide the content areas
           $('.collection-slide').hide();

            // bind opening action to tile
            $('[data-toggle=slide]').on('click', this._tile_clicked);

            // bind closing action to close button per item
            $('.close-btn').on('click', this._close_detail);

            return this;
        },

        _tile_clicked: function() {

            // which tile was clicked
            var body = $('BODY')[0];
            var tile = $(this);

            // href is the hash-tag id of the content item
            var target = tile.attr('href');

            // store position of display for returning to it later
            self.savedPosition =  $(body).scrollTop();

            self._toggle(target);
        },

        _toggle: function(target) {

            var open = $('.slide-pane').filter(':visible');
            if( open.length ) {
                // something is open, close it first
                open.slideUp("slow", "swing", function () {
                    // now open the target
                    self._open(target);
                });
            }
            else {
                // nothing was open, so just open the target
                self._open(target);
            }
        },

        _open: function(target) {
            $(target).slideDown("fast","swing", function(){
                self._slideIntoView(target);
            });
        },

        _close_detail: function() {
            var open = $('.slide-pane').filter(':visible');
            open.slideUp("slow", "swing");
            $('html,body').animate({
                scrollTop: self.savedPosition,
            }, 1000 );
        },

        _slideIntoView: function(target) {
                target = $(target);

            // current position of the selected tile
            var top = target.offset().top;

            // navbar plus amount of reveal for row above
            //var navHeight = $('#navbar').height() + 30;
          var navHeight = 100;

            // scroll into position over 1 second
            $('html,body').animate({
                scrollTop: (top - navHeight),
            }, 1000 );

            // or use this - to snap directly to position
            // window.scrollTo( 0, top - navHeight );


            // just developer eye candy - remove from production
            $('[name=target-top]').val(top);
            $('[name=navHeight]').val(navHeight);

        },


    };

    // patch older browsers with no Object.create fn
    if (typeof Object.create !== 'function') {
        Object.create = function (o) {
            function F() {}
            F.prototype = o;
            return new F();
        };
    }

    // Start up the plugin
    $.fn.scrollSlide = function() {
       return $.data(this, 'scrollSlide', Object.create(ScrollSlide).init());
    };
})(jQuery);


jQuery().ready(function($){
    if( undefined === window.rs ) {
        window.rs = {};
    }
    window.rs.scrollSlide = $().scrollSlide();
});
