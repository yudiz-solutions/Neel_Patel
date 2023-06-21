<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @since wp-wrapp-project 1.0
 */

get_header();
?>
<center>
    <div class="err_404">
        <header class="page-header alignwide">
            <h1 class="page-title">
                <h2 class="err_code">404</h2>
                <h2>
                    <?php esc_html_e('Nothing here', 'mypersonaltheme'); ?>
                </h2>
            </h1>
        </header>

        <div class="error-404 not-found default-max-width">
            <div class="page-content">
                <h3 class="h3_text">
                    <?php esc_html_e('It looks like nothing was found at this location.', 'mypersonaltheme'); ?>
                </h3>
            </div>
        </div>
    </div>
</center>
<?php
get_footer();