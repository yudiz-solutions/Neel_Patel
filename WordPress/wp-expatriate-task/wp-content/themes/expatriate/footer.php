<?php
$contact_us_btn = get_field('contact_us_btn', 'option');
?>

<!--========= FOOTER SECTION STARTS =========-->
<footer>
    <div class="footer-inner">
        <div class="container">
            <a href="index.html" class="footer-logo">
                <?php dynamic_sidebar('footer-logo'); ?>
            </a>

            <?php
            dynamic_sidebar('footer-menu');
            ?>

            <a href="<?= $contact_us_btn['url']; ?>" target="<?= $contact_us_btn['target']; ?>"
                class="theme-btn white-btn"><?= $contact_us_btn['title']; ?>
            </a>
            <div class="clearfix"></div>
        </div>
    </div>
    <?php dynamic_sidebar('footer-copyright'); ?>
</footer>
<!--========= FOOTER SECTION ENDS =========-->

<?php wp_footer(); ?>
</body>

</html>