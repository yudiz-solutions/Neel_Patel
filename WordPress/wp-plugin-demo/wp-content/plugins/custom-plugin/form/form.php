<?php
?>
<form method="POST">
    <h1>REGISTER HERE</h1>
    Name: <input type="text" name="name">
    <br>
    <br>
    EmpID: <input type="number" name="empid">
    <br>
    <br>
    Email: <input type="emails" name="email">
    <br>
    <br>
    <?php
    do_action('before_insert_form_data');
    ?>
    <input type="submit" name="submitbtn" value="Register">
</form>