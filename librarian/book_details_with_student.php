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
                        <h3 style="color: brown; margin-left: 20px;"> Library Management System </h3>
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

                <div class="clearfix" style="background-color: burlywood; border: 2px solid black;></div>
                <div class="row" style="min-height:500px;">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel" style="background-color: brown;">
                            <div class="x_title">
                                <h2 style="margin-left: 10px; color: black;"> Books with Details </h2>

                                <div class="clearfix" style="background-color: aqua; border: 2px solid black;"></div>
                            </div>
                            <div class="x_content">
                                
               <?php

                                $i = 0;
                                    $res = mysqli_query($con,"select * from add_books");
                                    echo "<table class='table table-bordered'>";
                                    echo "<tr>";
                                    while($row=mysqli_fetch_array($res))
                                    {
                                        $i = $i+1;
                                        echo "<td>"; ?> <img src="../librarian/<?php echo $row["books_image"]; ?>" height="100" width="100"> <?php
                                        echo "<br>";
                                        echo "<b>".$row["books_name"]."</b>";
                                        echo "<br>";
                                        //echo "<b>".$row["books_name"]."</b>";
                                        //echo "<br>";
                                        echo "<b>". "Total Books :- "."Available :- ".$row["books_qty"]."</b>";
                                        echo "<br>";
                                        ?> <a href="all_student_of_this_book.php?books_name = <?php echo $row["books_name"]; ?>" style="color: black;"> Student Records For this Books </a> <?php
                                        echo "</td>";
                                           
                                        if($i==2)
                                        {
                                            echo "</tr>";
                                            echo "<tr>";
                                            $i=0;
                                        }
                                    }
                                    echo "</tr>";
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
