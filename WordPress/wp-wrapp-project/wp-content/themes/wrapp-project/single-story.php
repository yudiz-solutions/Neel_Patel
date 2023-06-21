<?php
get_header();
?>

<center>
    <?php
    echo '<h3>';
    the_title();
    echo '</h3>';
    the_content();
    ?>
</center>

<?php
get_footer();
?>