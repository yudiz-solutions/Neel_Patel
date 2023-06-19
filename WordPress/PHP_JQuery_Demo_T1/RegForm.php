<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!-- Bootstrap 5.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <style>
        .error {
            color: #FF0000;
        }

        .error-notation {
            color: #FF0000;
            display: inline;
        }

        .form-control {
            width: initial;
        }

        h1 {
            text-align: center;
        }

        #form-head {
            background-color: #212529;
            color: white;
            text-align: left;
        }

        .container {
            width: max-content;
        }
    </style>
</head>

<body>
    <div class="container" style="background-color: aliceblue">
        <p><span class="error">* required field</span></p>
        <h1 class="form-outline mb-4" id="form-head">INSERT NEW USER DATA</h1>
        <form action="" method="post" id="regForm" enctype="multipart/form-data">

            <!-- Firstname -->
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Firstname<label class="error-notation">*</label></label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="fname" id="fname">
                    <span class="error fname"></span>
                </div>
            </div>

            <!-- Lastname -->
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Lastname<label class="error-notation">*</label></label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="lname">
                    <span class="error lname"></span>
                </div>
            </div>

            <!-- Username -->
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Username<label class="error-notation">*</label></label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="uname">
                    <span class="error uname"></span>
                </div>
            </div>

            <!-- Email -->
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Email<label class="error-notation">*</label></label>
                <div class="col-sm-8">
                    <input type="email" class="form-control" name="email">
                    <span class="error email"></span>
                </div>
            </div>

            <!-- Password -->
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Password<label class="error-notation">*</label></label>
                <div class="col-sm-8">
                    <input type="password" class="form-control" name="pswd">
                    <span class="error pswd"></span>
                </div>
            </div>

            <!-- Confirm Password -->
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Confirm Password<label class="error-notation">*</label></label>
                <div class="col-sm-8">
                    <input type="password" class="form-control" name="c_pswd">
                    <span class="error c_pswd"></span>
                </div>
            </div>

            <!-- DOB -->
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Birthdate</label>
                <div class="col-sm-8">
                    <input type="date" class="form-control" name="dob">
                    <span class="error dob"></span>
                </div>
            </div>

            <!-- Gender -->
            <fieldset class="row mb-3">
                <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
                <div class="col-sm-8" id="selectors">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" value="male" checked>
                        <label class="form-check-label" for="gender8">
                            Male
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" value="female">
                        <label class="form-check-label" for="gender">
                            Female
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" value="other">
                        <label class="form-check-label" for="gender">
                            Other
                        </label>
                    </div>
                    <span class="error gender"></span>
                </div>
            </fieldset>

            <!-- Hobby -->
            <div class="row mb-3">
                <legend class="col-form-label col-sm-2 pt-0">Hobby</legend>
                <div class="col-sm-8">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="hobby[]" value="h1">
                        <label class="form-check-label" for="gridCheck1">
                            h1
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="hobby[]" value="h2">
                        <label class=" form-check-label" for="gridCheck1">
                            h2
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="hobby[]" value="h3">
                        <label class=" form-check-label" for="gridCheck1">
                            h3
                        </label>
                    </div>
                </div>
                <span class="error hobby"></span>
            </div>

            <!-- Country input -->
            <div class="row mb-3">
                <div class="form-outline ">
                    <label class="col-sm-2 col-form-label">Country</label>
                    <select name="country" id="country-dropdown">
                        <option value="">Select Country</option>
                        <option value="India">India</option>
                        <option value="USA">USA</option>
                        <option value="Australia">Australia</option>
                        <option value="Canada">Canada</option>
                    </select>
                </div>
                <span class="error country"></span>
            </div>

            <!-- Message -->
            <div class="row mb-3">
                <div class="form-outline">
                    <label class="col-sm-2 col-form-label">Message</label>
                    <textarea name="message" rows="4" cols="50"></textarea>
                </div>
                <span class="error message"></span>
            </div>

            <!-- Profile Image -->
            <div class="row mb-3">
                <div class="form-outline ">
                    <label class="col-sm-2 col-form-label">Profile Image</label>
                    <input type="file" name="img">
                </div>
                <span class="error profile"></span>
            </div>

            <!-- Submit -->
            <div class="row mb-3">
                <button type="submit" class="btn btn-dark btn-block mb-4x" id="form_submit"
                    name="form_submit">Submit</button>
            </div>

            <!-- Error Msg -->
            <div id="err-msg">
            </div>
        </form>
    </div>

    <script>
        $(document).on('submit', '#regForm', function (e) {
            e.preventDefault();

            var formData = new FormData(this);
            formData.append("form_submit", true);

            $.ajax({
                type: "POST",
                url: "SubmitForm.php",
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {

                    var res = jQuery.parseJSON(response);
                    // console.log(res);
                    $.each(res, function (index, value) {
                        jQuery('span.' + index).html(value);
                    });

                    // If no validation errors
                    if (res.status) {
                        alert("Registered Successfully");
                        $('#regForm')[0].reset();
                        window.location.href = "index.php";
                    }
                }
            });
        });
    </script>
</body>

</html>