<?php

include "connection.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Student Registration Form //  LMS </title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/custom.min.css" rel="stylesheet">
</head>

<br>

<div class="col-lg-12 text-center ">
    <h1 style="font-family: itallic; text-decoration: underline; color: black;"> Library Management System </h1>
</div>


<body class="login" style="margin-top: -20px; background-color: lightblue;">



    <div class="login_wrapper">

            <section class="login_content" style="margin-top: -40px;">
                <form name="form1" action="" method="post">
                    <h2 style="font-family:itallic; text-decoration: underline; color: blue;"> User or Student Registration Form </h2><br>

                    <div>
                        <input type="text" class="form-control" placeholder="FirstName" name="firstname" required=""/>
                    </div>
                    <div>
                        <input type="text" class="form-control" placeholder="LastName" name="lastname" required=""/>
                    </div>

                    <div>
                        <input type="text" class="form-control" placeholder="Username" name="username" required=""/>
                    </div>
                    <div>
                        <input type="password" class="form-control" placeholder="Password" name="password" required=""/>
                    </div>
                    <div>
                        <input type="text" class="form-control" placeholder="email" name="email" required=""/>
                    </div>
                    <div>
                        <input type="text" class="form-control" placeholder="contact" name="contact" required=""/>
                    </div>
                    <div>
                        <input type="text" class="form-control" placeholder="SEM" name="sem" required=""/>
                    </div>
                    <div>
                        <input type="text" class="form-control" placeholder="Enrollment No" name="enrollmentno" required=""/>
                    </div>
                    <div class="col-lg-12  col-lg-push-3">
                        <input class="btn btn-default submit " type="submit" name="submit1" value="Register">
                    </div>

                </form>
            </section>

<?php

 if(isset($_POST["submit1"]))
 {
    $fname = $_POST["firstname"];
    $lname = $_POST["lastname"];
    $uname = $_POST["username"];
    $pass = $_POST["password"];
    $email = $_POST["email"];
    $cont = $_POST["contact"];
    $sem = $_POST["sem"];
    $eno = $_POST["enrollmentno"];
    $ece = "no";
    
    //mysqli_select_db($con,"lms");

    
    $n=mysqli_query($con,"insert into student_registration(firstname,lastname,username,password,email,contact,sem,enrollment,status) values('".$fname."','".$lname."','".$uname."','".$pass."','".$email."','".$cont."','".$sem."','".$eno."','".$ece."')");



if($n==1){

?>

    <div class="alert alert-success col-lg-12 col-lg-push-0">
        Registration successfully, You will get email when your account is approved.
    </div>

<?php

 }
}

?>
    </div>

</body>
</html>

