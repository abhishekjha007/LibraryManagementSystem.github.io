<?php

session_start();
if(!isset($_SESSION["librarian"]))
{
    ?>

        <script type="text/javascript">
            
            window.location = "loginlib.php";

        </script>

    <?php
}

include "header.php";
include "connection.php"; 

?>

        <!-- page content area main -->
        <div class="right_col" role="main" style="background-color: lightblue;">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3 style="color: brown; margin-left: 20px;">Library Management System</h3>
                    </div>

                    <div class="title_right">
                        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                            <div class="input-group">
                                <!--<input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>-->
                            </div>
                        </div>
                    </div>
                </div>

                <div class="clearfix" style="background-color: burlywood; border: 2px solid black;"></div>
                <div class="row" style="min-height:500px" style="background-color: black;">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel" style="background-color: black; border: 2px solid black;">
                            <div class="x_title">
                                <h2 style="margin-left: 10px; color: black;">All Student Information</h2>

                                <div class="clearfix" style="background-color: aqua; border: 2px solid black;"></div>
                            </div>
                            <div class="x_content">
                                <?php

                                $res = mysqli_query($con,"select * from student_registration");

                                echo "<table class='table table-bordered'>";
                                echo "<tr>";
                                echo "<th>"; echo "FirstName"; echo "</th>";
                                echo "<th>"; echo "LastName"; echo "</th>";
                                echo "<th>"; echo "UserName"; echo "</th>";
                                echo "<th>"; echo "Email"; echo "</th>";
                                echo "<th>"; echo "Contact No"; echo "</th>";
                                echo "<th>"; echo "Semester"; echo "</th>";
                                echo "<th>"; echo "Enrollment No"; echo "</th>";
                                echo "<th>"; echo "Status"; echo "</th>";
                                echo "<th>"; echo "Eligible"; echo "</th>";
                                echo "<th>"; echo "Not Eligible"; echo "</th>";
                                echo "</tr>";

                                while ($row = mysqli_fetch_array($res))
                                {
                                echo "<tr>";
                                echo "<td>"; echo $row["firstname"]; echo "</td>";
                                echo "<td>"; echo $row["lastname"]; echo "</td>";
                                echo "<td>"; echo $row["username"]; echo "</td>";
                                echo "<td>"; echo $row["email"]; echo "</td>";
                                echo "<td>"; echo $row["contact"]; echo "</td>";
                                echo "<td>"; echo $row["sem"]; echo "</td>";
                                echo "<td>"; echo $row["enrollment"]; echo "</td>";
                                echo "<td>"; echo $row["status"]; echo "</td>";
                                echo "<td>"; ?> <a href="approve.php?id=<?php echo $row["id"]; ?>"> Eligible </a><?php echo "</td>";
                                echo "<td>"; ?> <a href="notapprove.php?id=<?php echo $row["id"]; ?>"> Not Eligible </a><?php echo "</td>";
                                echo "</tr>";
                                }
                                echo "</table>";
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->


        <?php

            include "footer.php";

        ?>
