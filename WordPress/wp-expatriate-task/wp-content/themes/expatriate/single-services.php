<?php
get_header();
?>

<?php
echo "This is Services.php";
echo "<br>";
the_post_thumbnail('medium');
echo "<br>";
the_title();
echo "<br>";
the_content();

?>

<?php
get_footer();
?>