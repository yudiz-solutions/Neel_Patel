var page = 2;

jQuery(document).ready(function () {
    jQuery(function ($) {
        $('#load-more-btn').click(function () {
            var button = jQuery(this);
            var data_obj = {
                'action': 'load_more_ajax',
                'page': page
            };
            button.text('Loading...');

            jQuery.ajax({
                type: 'POST',
                url: blog.ajaxurl,
                data: data_obj,
                dataType: 'html',
                beforeSend: function (xhr) {
                },
                success: function (data) {
                    jQuery('.blog-list').append(data);
                }
            });
        });
    });
});