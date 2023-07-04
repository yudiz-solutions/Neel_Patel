<!--******************* Footer Section Start ******************-->
<footer>
    <div class="footer-inner">
        <div class="container">
            <a href="index.html" class="footer-logo">
                <?php dynamic_sidebar('footer-logo'); ?>
            </a>
            <?php
            dynamic_sidebar('footer-menu');
            ?>
            <a href="contact.html" class="theme-btn white-btn">Contact Us</a>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-sm-7">
                    <p>© 2018 Expatriate Assistance Services Inc. All Rights Reserved.</p>
                </div>
                <div class="col-sm-5 footer-links">
                    <ul>
                        <li><a href="terms-condition.html">TERMS AND CONDITIONS</a></li>
                        <li><a href="privacy-policy.html">PRIVACY POLICY</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--******************* Footer Section End ******************-->


<?php wp_footer(); ?>
<!--*********************** All End ************************-->
</body>

</html>