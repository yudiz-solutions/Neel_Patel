jQuery(function (jQuery) { // use jQuery code inside this to avoid "$ is not defined" error
    jQuery('.load_more').click(function () {

        var button = jQuery(this),
            data = {
                'action': 'loadmore',
                'query': loadmore_params.posts,
                'page': loadmore_params.current_page
            };
        console.log(data);

        jQuery.ajax({
            url: loadmore_params.ajaxurl,
            data: data,
            type: 'POST',
            beforeSend: function (xhr) {
                button.text('Loading...');
            },
            success: function (data) {
                console.log("success");
                if (data) {

                    button.text('More posts').prev().before(data);
                    console.log("adding more posts");
                    loadmore_params.current_page++;

                    if (loadmore_params.current_page == loadmore_params.max_page)
                        button.remove(); // if last page, remove the button

                    // you can also fire the "post-load" event here if you use a plugin that requires it
                    // $( document.body ).trigger( 'post-load' );
                } else {
                    button.remove(); // if no data, remove the button as well
                }
            }
        });
    });
});

