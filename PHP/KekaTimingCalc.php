<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KEKA</title>
    <!-- Bootstrap 5.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <style>
        .note {
            color: red;
        }
    </style>
</head>

<body>

    <section class="vh-100" style="background-color: #508bfc;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card shadow-2-strong" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">


    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        Enter your Effective hours:
        <input type="number" name="hrs"><br><br>
        Enter your Effective minutes:
        <input type="number" name="min"><br><br>


                            <h3 class="mb-5">KEKA TIME CALCULATOR</h3>
                            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                                <div class="form-outline mb-4">
                                    <input type="number" class="form-control form-control-lg" name="hrs" id="l_uname"
                                        placeholder="Enter your Effective hours">
                                </div>

                                <div class="form-outline mb-4">
                                    <input type="number" class="form-control form-control-lg" name="min" id="l_uname"
                                        placeholder="Enter your Effective minutes">
                                </div>

                                <br>

                                <div class="form-outline mb-4">
                                    <input type="number" class="form-control form-control-lg" name="c_hrs" id="l_uname"
                                        placeholder="Enter your Last Clock-in hours">
                                </div>

                                <div class="form-outline mb-4">
                                    <input type="number" class="form-control form-control-lg" name="c_min" id="l_uname"
                                        placeholder="Enter your Last Clock-in minutes">
                                </div>

                                <button class="btn btn-primary btn-lg btn-block" type="submit"
                                    name="submit">CALCULATE</button>
                            </form>
                        </div>

                        <?php
                        date_default_timezone_set("Asia/Calcutta"); //India time (GMT+5:30)
                        
                        if (isset($_POST["submit"])) {
                            $hours = isset($_POST["hrs"]) ? $_POST["hrs"] : "";
                            $minutes = isset($_POST["min"]) ? $_POST["min"] : "";
                            $c_hours = isset($_POST["c_hrs"]) ? $_POST["c_hrs"] : "";
                            $c_minutes = isset($_POST["c_min"]) ? $_POST["c_min"] : "";

                            //Total hr 8
                            $remainHrs = 7 - $hours;
                            $remainMin = 60 - $minutes;

                            $xHr = $remainHrs + $c_hours;
                            $xMin = $remainMin + $c_minutes;


                            if ($xMin >= 60) {
                                $leavingHr = $xHr + 1;
                                $leavingMin = $xMin - 60;
                            } else {
                                $leavingHr = $xHr;
                                $leavingMin = $xMin;
                            }
                            ?>

        echo "<h3><br><br><b> You can go after: </b><br><h3>";
        echo "<b>" . $leavingHr . ": </b> ";
        echo "<b>" . $leavingMin  . "</b>";
        echo "<h1><br> The min might be differ, please go after 2-3 min </h1>";

    <form action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method = "POST">
        Enter your Effective hours:
        <input type=" number" name="hrs" required><br><br>
        Enter your Effective minutes:
        <input type=" number" name="min" required><br><br>
        <input type="submit" name = "submit" value="Calculate">
</body>

<?php

if (isset($_POST["submit"])) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $hours = $_POST["hrs"];
    $minutes = $_POST['min'];
    
    $remainHrs = 7 - $hours;
    $remainMin = 60 -$minutes;
    
    echo "<br><br><b> You can go after: </b><br>";
    echo "<b>" . $remainHrs ." </b> Hrs. ";
    echo "<b>" . $remainMin . " </b> Min.";
    
    }
}


                            <!-- <div class="form-outline mb-4"> -->
                            <div class="card">
                                <div class="card-body">
                                    <?php
                                    echo "<h4>   You can go after: </b><br><h4>";
                                    echo "<b>" . $leavingHr . ": </b> ";
                                    echo "<b>" . $leavingMin . "</b>";
                        }
                        ?>
                                <p class="note">
                                    Note: The calculated time might be differ, please go after 2-3 minutes.
                                </p>
                            </div>
                        </div>
                        <!-- </div> -->
                    </div>
                    <br>
                </div>
            </div>
        </div>
    </section>
</body>

</html>