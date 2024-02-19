
{{-- @extends('layout.master') --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
  * {
  margin: 0;
  padding: 10px;
}

p {
  color: green;
  font-size: 25px;
}

#heading {
  text-transform: uppercase;
  color: #673ab7;
  font-weight: normal;
}

#msform {
  text-align: center;
  position: relative;
  margin-top: 20px;
}

#msform fieldset {
  background: white;
  border: 0 none;
  border-radius: 100 rem;
  box-sizing: border-box;
  width: 100%;
  margin: 0;
  padding-bottom: 20px;
  position: relative;
}

.form-card {
  text-align: left;
}

#msform fieldset:not(:first-of-type) {
  display: none;
}

#msform input,
#msform textarea {
  padding: 8px 15px 8px 15px;
  border: 1px solid cyan;
  border-radius: 30%;
  margin-bottom: 25px;
  margin-top: 2px;
  width: 100%;
  box-sizing: border-box;
  font-family: montserrat;
  color: #2c3e50;
  background-color: #eceff1;
  font-size: 16px;
  letter-spacing: 1px;
}

#msform input:focus,
#msform textarea:focus {
  -moz-box-shadow: none !important;
  -webkit-box-shadow: none !important;
  box-shadow: none !important;
  border: 1px solid #673ab7;
  outline-width: 0;
}

#msform .action-button {
  width: 100px;
  background: #673ab7;
  font-weight: bold;
  color: white;
  border: 0 none;
  border-radius: 0px;
  cursor: pointer;
  padding: 10px 5px;
  margin: 10px 0px 10px 5px;
  float: right;
}

#msform .action-button:hover,
#msform .action-button:focus {
  background-color: #311b92;
}

#msform .action-button-previous {
  width: 100px;
  background: #616161;
  font-weight: bold;
  color: white;
  border: 0 none;
  border-radius: 0px;
  cursor: pointer;
  padding: 10px 5px;
  margin: 10px 5px 10px 0px;
  float: right;
}

#msform .action-button-previous:hover,
#msform .action-button-previous:focus {
  background-color: #000000;
}

.card {
  z-index: 0;
  border: none;
  position: relative;
}

.fs-title {
  font-size: 25px;
  color: #673ab7;
  margin-bottom: 15px;
  font-weight: normal;
  text-align: left;
}

.purple-text {
  color: #673ab7;
  font-weight: normal;
}

.steps {
  font-size: 25px;
  color: gray;
  margin-bottom: 10px;
  font-weight: normal;
  text-align: right;
}

.fieldlabels {
  color: gray;
  text-align: left;
}

#progressbar {
  margin-bottom: 30px;
  overflow: hidden;
  color: lightgrey;
}

#progressbar .active {
  color: #673ab7;
}

#progressbar li {
  list-style-type: none;
  font-size: 15px;
  width: 25%;
  float: left;
  position: relative;
  font-weight: 400;
}

#progressbar #account:before {
  font-family: FontAwesome;
  content: "\f13e";
}

#progressbar #personal:before {
  font-family: FontAwesome;
  content: "\f007";
}

#progressbar #payment:before {
  font-family: FontAwesome;
  content: "\f030";
}

#progressbar #confirm:before {
  font-family: FontAwesome;
  content: "\f00c";
}

#progressbar li:before {
  width: 50px;
  height: 50px;
  line-height: 45px;
  display: block;
  font-size: 20px;
  color: #ffffff;
  background: lightgray;
  border-radius: 50%;
  margin: 0 auto 10px auto;
  padding: 2px;
}

#progressbar li:after {
  content: "";
  width: 100%;
  height: 2px;
  background: lightgray;
  position: absolute;
  left: 0;
  top: 25px;
  z-index: -1;
}

#progressbar li.active:before,
#progressbar li.active:after {
  background: #673ab7;
}

.progress {
  height: 20px;
}

.progress-bar {
  background-color: #673ab7;
}

.fit-image {
  width: 100%;
  object-fit: cover;
}

    </style>
</head>
<body>
    





    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    <script>
        $(document).ready(function() {

            var current_fs, next_fs, previous_fs; // Fieldsets
            var current = 1;
            var steps = $("fieldset").length;

            // Set progress bar
            setProgressBar(current);

            // Function to set progress bar width
            function setProgressBar(curStep) {
                var percent = parseFloat(100 / steps) * curStep;
                percent = percent.toFixed();
                $(".progress-bar").css("width", percent + "%");
            }

            // Function to validate current step
            function validateStep(step) {
                var isValid = true;
                var currentStepFieldset = $("#msform fieldset").eq(step - 1);
                // Remove any existing error messages
                currentStepFieldset.find(".error").remove();
                // Add your validation logic here for each step
                if (step === 1) {
                    if (!$("input[name='email']").val()) {
                        isValid = false;
                        $("<span class='error text-danger'>Email is required.</span><br>").insertAfter($("input[name='email']"));
                    }
                    if (!$("input[name='uname']").val()) {
                        isValid = false;
                        $("<span class='error text-danger'>Username is required.</span><br>").insertAfter($("input[name='uname']"));
                    }
                    if (!$("input[name='pwd']").val()) {
                        isValid = false;
                        $("<span class='error text-danger'>Password is required.</span><br>").insertAfter($("input[name='pwd']"));
                    }
                    if (!$("input[name='cpwd']").val()) {
                        isValid = false;
                        $("<span class='error text-danger'>Confirm Password is required.</span><br>").insertAfter($(
                            "input[name='cpwd']"));
                    }
                    if ($("input[name='pwd']").val() !== $("input[name='cpwd']").val()) {
                        isValid = false;
                        $("<span class='error text-danger'>Password and Confirm Password must match.</span><br>").insertAfter($(
                            "input[name='cpwd']"));
                    }
                } else if (step === 2) {
                    if (!$("input[name='fname']").val()) {
                        isValid = false;
                        $("<span class='error text-danger'>First name is required.</span><br>").insertAfter($("input[name='fname']"));
                    }
                    if (!$("input[name='lname']").val()) {
                        isValid = false;
                        $("<span class='error text-danger'>lname is required.</span><br>").insertAfter($("input[name='lname']"));
                    }
                    if (!$("input[name='phno']").val()) {
                        isValid = false;
                        $("<span class='error text-danger'>phno is required.</span><br>").insertAfter($("input[name='phno']"));
                    }
                    if (!$("input[name='phno_2']").val()) {
                        isValid = false;
                        $("<span class='error text-danger'>phno_2 is required.</span><br>").insertAfter($("input[name='phno_2']"));
                    }
                } else if (step === 3) {
                    if (!$("input[name='pic']").val()) {
                        isValid = false;
                        $("<span class='error'>pic is required.</span><br>").insertAfter($("input[name='pic']"));
                    }
                    if (!$("input[name='pics']").val()) {
                        isValid = false;
                        $("<span class='error  text-danger'>pics is required.</span><br>").insertAfter($("input[name='pics']"));
                    }
                   
                }
                return isValid;
            }

            // Next button click event
            $(".next").click(function() {
                // Validate current step before proceeding
                if (!validateStep(current)) {
                    return false;
                }
                current_fs = $(this).parent();
                next_fs = $(this).parent().next();

                // Add Class Active
                $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

                // Show the next fieldset
                next_fs.show();
                // Hide the current fieldset with style
                current_fs.animate({
                    opacity: 0
                }, {
                    step: function(now) {
                        // For making fieldset appear animation
                        var opacity = 1 - now;
                        current_fs.css({
                            'display': 'none',
                            'position': 'relative'
                        });
                        next_fs.css({
                            'opacity': opacity
                        });
                    },
                    duration: 500
                });
                setProgressBar(++current);
            });

            // Previous button click event
            $(".previous").click(function() {
                current_fs = $(this).parent();
                previous_fs = $(this).parent().prev();

                // Remove class active
                $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

                // Show the previous fieldset
                previous_fs.show();

                // Hide the current fieldset with style
                current_fs.animate({
                    opacity: 0
                }, {
                    step: function(now) {
                        // For making fieldset appear animation
                        var opacity = 1 - now;
                        current_fs.css({
                            'display': 'none',
                            'position': 'relative'
                        });
                        previous_fs.css({
                            'opacity': opacity
                        });
                    },
                    duration: 500
                });
                setProgressBar(--current);
            });

            // Submit button click event
            $(".submit").click(function() {
                // Validate the last step before submission
                if (!validateStep(steps)) {
                    return false;
                }
            });

        });
    </script>



    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-11 col-sm-10 col-md-10 col-lg-6 col-xl-5 text-center p-0 mt-3 mb-2">
                <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                    <h2 id="heading">Sign Up Your User Account</h2>
                    <p>Fill all form field to go to next step</p>
                    <form id="msform" class="form-controls">
                        <!-- progressbar -->
                        <ul id="progressbar">
                            <li class="active" id="account"><strong>Account</strong></li>
                            <li id="personal"><strong>Personal</strong></li>
                            <li id="payment"><strong>Image</strong></li>
                            <li id="confirm"><strong>Finish</strong></li>
                        </ul>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div> <br> <!-- fieldsets -->
                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">Account Information:</h2>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps">Step 1 - 4</h2>
                                    </div>
                                </div> <label class="fieldlabels form-controls">Email: *</label> <input type="email" name="email"
                                    placeholder="Email Id" /> <label class="fieldlabels form-controls">Username: *</label> <input
                                    type="text" name="uname" placeholder="UserName" /> <label
                                    class="fieldlabels form-controls">Password: *</label> <input type="password" name="pwd"
                                    placeholder="Password" /> <label class="fieldlabels form-controls">Confirm Password: *</label> <input
                                    type="password" name="cpwd" placeholder="Confirm Password" />
                            </div> <input type="button" name="next" class="next action-button" value="Next" />
                        </fieldset>
                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">Personal Information:</h2>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps">Step 2 - 4</h2>
                                    </div>
                                </div> <label class="fieldlabels form-controls">First Name: *</label> <input type="text" name="fname"
                                    placeholder="First Name" /> <label class="fieldlabels form-controls">Last Name: *</label> <input
                                    type="text" name="lname" placeholder="Last Name" /> <label
                                    class="fieldlabels form-controls">Contact No.: *</label> <input type="text" name="phno"
                                    placeholder="Contact No." /> <label class="fieldlabels form-controls">Alternate Contact No.: *</label>
                                <input type="text" name="phno_2" placeholder="Alternate Contact No." />
                            </div> <input type="button" name="next" class="next action-button" value="Next" /> <input
                                type="button" name="previous" class="previous action-button-previous" value="Previous" />
                        </fieldset>
                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">Image Upload:</h2>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps">Step 3 - 4</h2>
                                    </div>
                                </div> <label class="fieldlabels form-controls">Upload Your Photo:</label> <input type="file"
                                    name="pic" accept="image/*"> <label class="fieldlabels form-controls">Upload Signature
                                    Photo:</label> <input type="file" name="pics" accept="image/*">
                            </div> <input type="button" name="next" class="next action-button" value="Submit" /> <input
                                type="button" name="previous" class="previous action-button-previous" value="Previous" />
                        </fieldset>
                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">Finish:</h2>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps">Step 4 - 4</h2>
                                    </div>
                                </div> <br><br>
                                <h2 class="purple-text text-center"><strong>SUCCESS !</strong></h2> <br>
                                <div class="row justify-content-center">
                                    <div class="col-3"> <img src="https://i.imgur.com/GwStPmg.png" class="fit-image">
                                    </div>
                                </div> <br><br>
                                <div class="row justify-content-center">
                                    <div class="col-7 text-center">
                                        <h5 class="purple-text text-center">You Have Successfully Signed Up</h5>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>