var currPage = 2;

jQuery(document).ready(function () {
    jQuery(function ($) {
        $("#news-loadmore-btn").click(function () {
            // alert('Working');
            var button = jQuery(this);
            var maxPage = $('#max-page').val();
            var data_obj = {
                'action': 'load_more_news',
                'page': currPage,
            };

            currPage++;
            button.text('Loading..');

            jQuery.ajax({
                type: 'POST',
                url: news.ajaxurl,
                data: data_obj,
                dataType: 'html',
                success: function (data) {
                    jQuery("#news-list").append(data);
                    button.text('LOAD MORE');
                    if (currPage == maxPage) {
                        button.hide();
                    }
                }
            });

        });
    });
});