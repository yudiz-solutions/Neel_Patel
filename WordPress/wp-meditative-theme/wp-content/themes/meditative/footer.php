<!-- footer -->
<footer>
    <div class="container">
        <div class="footer">
            <div class="footer-content footer-meditative">
                <?php dynamic_sidebar("footer-meditative"); ?>
            </div>

            <div class="footer-content popular-links">
                <?php dynamic_sidebar("footer-popularlinks"); ?>
            </div>

            <div class="footer-content quick-links">
                <?php dynamic_sidebar("footer-quicklinks"); ?>
            </div>

            <div class="footer-content have-questions">
                <?php dynamic_sidebar("footer-havequestion"); ?>
            </div>
        </div>
    </div>
</footer>

<?php
wp_footer();
?>
</body>

</html>