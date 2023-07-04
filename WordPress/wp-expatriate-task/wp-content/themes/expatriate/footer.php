<!--******************* Footer Section Start ******************-->
<?php
$contact_us_btn = get_field('contact_us_btn', 'option');
?>

<footer>
    <div class="footer-inner">
        <div class="container">
            <a href="index.html" class="footer-logo">
                <?php dynamic_sidebar('footer-logo'); ?>
            </a>

            <?php
            dynamic_sidebar('footer-menu');
            ?>

            <a href="<?php echo $contact_us_btn['url']; ?>" target="<?php echo $contact_us_btn['target']; ?>"
                class="theme-btn white-btn"><?php echo $contact_us_btn['title']; ?>
            </a>
            <div class="clearfix"></div>
        </div>
    </div>
    <?php dynamic_sidebar('footer-copyright'); ?>
</footer>
<!--******************* Footer Section End ******************-->


<?php wp_footer(); ?>
<!--*********************** All End ************************-->
</body>

</html>