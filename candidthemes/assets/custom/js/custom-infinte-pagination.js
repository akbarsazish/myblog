/* Custom JS File */

(function ($) {

    "use strict";

    jQuery(document).ready(function () {
        if ($('.ajax-pagination').length > 0) {


            //infinite pagination
            /*new pagination style*/
            var paged = parseInt(fairy_ajax.paged) + 1;
            var max_num_pages = parseInt(fairy_ajax.max_num_pages);
            var next_posts = fairy_ajax.next_posts;

            $(document).on('click', '.show-more', function (event) {
                event.preventDefault();
                var show_more = $(this);
                var click = show_more.attr('data-click');
                if ((paged - 1) >= max_num_pages) {
                    show_more.html(fairy_ajax.no_more_posts)
                }
                if (click == 0 || (paged - 1) >= max_num_pages) {
                    return false;
                }
                show_more.html('<i class="fa fa-spinner fa-spin fa-fw"></i>');
                show_more.attr("data-click", 0);
                var page = parseInt(show_more.attr('data-number'));

                $('#free-temp-post').load(next_posts + ' .fairy-content-area article.post ', function () {
                    /*http://stackoverflow.com/questions/17780515/append-ajax-items-to-masonry-with-infinite-scroll*/
                    paged++;/*next page number*/
                    next_posts = next_posts.replace(/(\/?)page(\/|d=)[0-9]+/, '$1page$2' + paged);
                    var html = $('#free-temp-post').html();
                    $('#free-temp-post').html('');

                    // Make jQuery object from HTML string
                    var $moreBlocks = $(html).filter('article.post');
                    console.log($moreBlocks)
                    // Append new blocks to container
                    if ($('.fairy-masonry').length > 0) {
                        $('.fairy-content-area').append($moreBlocks).imagesLoaded(function () {
                            // Have Masonry position new blocks
                            $('.fairy-content-area').masonry('appended', $moreBlocks);
                        });
                    } else {
                        $('.fairy-content-area').append($moreBlocks);
                    }

                    show_more.attr("data-number", page + 1);
                    show_more.attr("data-click", 1);
                    show_more.html("<i class='fa fa-refresh'></i>" + fairy_ajax.show_more)
                });
                return false;
            });
            //end pagination

            /*auto ajax*/
            if (fairy_ajax.pagination_option == 'infinite') {
                var $window = $(window);
                var $content = $('body .fairy-content-area');
                $window.scroll(function () {
                    var content_offset = $content.offset();
                    console.log(content_offset.top);
                    if (($window.scrollTop() +
                        $window.height()) > ($content.scrollTop() +
                            $content.height() + content_offset.top)) {
                        $(".show-more").trigger("click");
                    }
                });
            }
        }
    });
})(jQuery);

