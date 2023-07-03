<?php
?>
<style>
    .container {
        display: flex;
        flex-direction: row;
    }

    #reg-form,
    #updt-form {
        padding: 50px;
        border-radius: 5px;
    }
</style>

<div class="container">
    <div id="reg-form">
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
    </div>

    <div id="updt-form">
        <form method="POST">
            <h1>UDPATE HERE</h1>
            ID: <input type="number" name="id">
            <br>
            <br>
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
            <input type="submit" name="updtbtn" value="Update">
        </form>
    </div>