var currPage = 1;

jQuery(document).ready(function () {
    jQuery(function ($) {
        $('#load-more-btn').click(function () {
            var button = jQuery(this);
            var maxPage = $('#max-page').val();
            var data_obj = {
                'action': 'load_more_ajax',
                'page': currPage
            };
            currPage++;
            button.text('Loading...');

            jQuery.ajax({
                type: 'POST',
                url: blog.ajaxurl,
                data: data_obj,
                dataType: 'html',
                success: function (data) {
                    jQuery('.blog-list').append(data);

                    if (currPage == maxPage) {
                        button.hide();
                    }
                }
            });
        });
    });
});