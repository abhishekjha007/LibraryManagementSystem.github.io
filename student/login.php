<?php

session_start();
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

    <title>Student Login Form | LMS </title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/custom.min.css" rel="stylesheet">
</head>

<br>

<div class="col-lg-12 text-center ">
    <h1 style="font-family: itallic; text-decoration: underline; color: blue; font-family: itallic;"> Welcome to Library Management System </h1>
</div>

<br>

<body class="login" style="background-color: black;">


<div class="login_wrapper">

    <section class="login_content">
        <form name="form1" action="" method="post">
            <h1 style="color: aqua; font-family: itallic; text-decoration: underline;"> User Login Form </h1>

            <div>
        <input type="text" name="username" class="form-control" placeholder="Username" required="" style="background-color: brown; color: white;"/>
            </div>
            <div>
        <input type="password" name="password" class="form-control" placeholder="Password" required=""style="background-color: brown; color: white;"/>
            </div>
            <div>

                <input class="btn btn-default submit" type="submit" name="submit1" value="Login" style="background-color: brown; color: white;">
                <!--<a class="reset_pass" href="#" style="color: white;">Lost your password?</a>-->
            </div>

            <div class="clearfix"></div>

            <div class="separator">
                <p class="change_link" style="color: aqua;"> If you don't have Account :- ?
                    <a href="registration.php" style="color: white;"> Create Account </a>
                </p>

                <div class="clearfix"></div>
                <br/>


            </div>
        </form>
    </section>


</div>
<?php
if(isset($_POST["submit1"]))
{
    $username = $_POST["username"];
    $password = $_POST["password"];
    $akj = "yes";

    $count = 0;
    $q = "select * from student_registration where username = '". $username ."' && password = '". $password ."' && status='".$akj."'";
    $result = mysqli_query($con,$q);

    $count = mysqli_num_rows($result);
    

    if($count == 0)
    {
        ?>

        <div class="alert alert-danger col-lg-6 col-lg-push-3">
          <strong style="color:white">Invalid</strong> Username Or Password.
        </div>

        <?php
    }
    else
    {

        $_SESSION["username"] = $_POST["username"];
        
        ?>
        <script type="text/javascript">
            
           window.location = "my_issued_books.php";

        </script>

        <?php

    }
}
?>


</body>
</html>
