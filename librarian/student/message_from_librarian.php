<?php
 session_start();
 if(!isset($_SESSION["username"]))
 {
    ?>
        <script type="text/javascript">
            
          window.location = "login.php";

        </script>

    <?php
 }
include "header.php";
include "connection.php";
mysqli_query($con,"update messages set dusername = '$_SESSION[username]'");

?>

        <!-- page content area main -->
        <div class="right_col" role="main" style="background-color: lightblue;>
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
                                <h2 style="margin-left: 10px; color: black;">Messages From Librarian</h2>

                                <div class="clearfix" style="background-color: aqua; border: 2px solid black;"></div>
                            </div>
                            <div class="x_content">
                                
                                <table class="table table-bordered">
                                <tr><th>Name of Librarian</th>
                                    <th>Title</th>
                                    <th>Message</th></tr>

                                    <?php

                                      $res = mysqli_query($con,"select * from messages where dusername = '$_SESSION[username]' order by id desc");
                                      while($row = mysqli_fetch_array($res))
                                      {

                                        $res1 = mysqli_query($con,"select * from librarian_registration where username = '$row[susername]'");
                                      while($row1 = mysqli_fetch_array($res1))
                                      {

                                         $fullname = $row1["firstname"]." ".$row1["lastname"];

                                      }

                                        echo "<tr>";
                                        echo "<td>";  echo $fullname;  echo "</td>";
                                        echo "<td>";  echo $row["title"];  echo "</td>";
                                        echo "<td>";  echo $row["msg"];  echo "</td>";
                                        echo "</tr>";
                                      }

                                    ?>
                                </table>

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
