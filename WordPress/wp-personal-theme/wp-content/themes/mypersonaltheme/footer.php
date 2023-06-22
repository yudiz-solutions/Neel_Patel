<footer class="ftco-footer ftco-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">About</h2>
                    <?php
                    dynamic_sidebar('footer-about');
                    ?>
                </div>
            </div>

            <div class="col-md">
                <div class="ftco-footer-widget mb-4 ml-md-4">
                    <h2 class="ftco-heading-2">Links</h2>
                    <?php
                    dynamic_sidebar('footer-links');
                    ?>
                </div>
            </div>

            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Interests</h2>
                    <?php dynamic_sidebar('footer-interests'); ?>
                </div>
            </div>

            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Have a Questions?</h2>
                    <?php
                    dynamic_sidebar('footer-have-question');
                    ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 text-center">
                <?php
                dynamic_sidebar('footer-copyright');
                ?>
            </div>
        </div>
    </div>
</footer>

<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
            stroke="#F96D00" />
    </svg></div>

<?php wp_footer() ?>
<!--=====================-->
<!--=====BODY ENDS=======-->
<!--=====================-->
</body>

</html>