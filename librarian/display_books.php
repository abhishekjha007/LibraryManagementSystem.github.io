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
include "connection.php";
include "header.php";

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
                            <!--<div class="input-group">
                                <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>-->
                            </div>
                        </div>
                    </div>
                </div>

                <div class="clearfix" style="background-color: burlywood; border: 2px solid black;s></div>
                <div class="row" style="min-height:500px">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel" style="background-color: black;">
                            <div class="x_title">
                                <h2 style="margin-left: 10px; color: black;"> Display & Search Books </h2>

                                <div class="clearfix" style="background-color: aqua; border: 2px solid black;"></div>
                            </div>
                            <div class="x_content">

                                <form name = "form1" action = "" method = "post">
                                    
                                     <input type="text" name="t1" class="form-control" placeholder = " Enter Books Name ">
                                     <input type="submit" name="submit1" value = "Search Books" class = "btn btn-default">
                                </form>
                                
                                <?php
                                     
                                       if(isset($_POST["submit1"]))
                                       {
                                         $res = mysqli_query($con,"select * from add_books where books_name like('$_POST[t1]%')");
                                         echo "<table class = 'table table-bordered'>"; 
                                         echo "<tr>";
                                         echo "<th>"; echo " Books Image ";  echo "</th>";
                                         echo "<th>"; echo " Books Name ";  echo "</th>";                                       
                                         echo "<th>"; echo " Books Author Name ";  echo "</th>";
                                         echo "<th>"; echo " Books Publication Name ";  echo "</th>";
                                         echo "<th>"; echo " Purchase Date ";  echo "</th>";
                                         echo "<th>"; echo " Books Price ";  echo "</th>";
                                         echo "<th>"; echo " Books Quantity ";  echo "</th>";
                                         echo "<th>"; echo " Available Books Quantity ";  echo "</th>";
                                         echo "<th>"; echo " Delete Books ";  echo "</th>";
                                         echo "</tr>";
                                         while($row = mysqli_fetch_array($res))
                                         {
                                         echo "<tr>";
                                         echo "<td>"; ?> <img src="<?php echo $row["books_image"];  ?>" height="100" width="100"> <?php echo "</td>"; 
                                         echo "<td>"; echo $row["books_name"]; echo "</td>";                             
                                         echo "<td>"; echo $row["books_author_name"]; echo "</td>";
                                         echo "<td>"; echo $row["books_publication_name"]; echo "</td>";
                                         echo "<td>"; echo $row["books_purchase_date"]; echo "</td>";
                                         echo "<td>"; echo $row["books_price"]; echo "</td>";
                                         echo "<td>"; echo $row["books_qty"]; echo "</td>";
                                         echo "<td>"; echo $row["available_qty"]; echo "</td>";
                                         echo "<td>"; ?> <a href="delete_books.php?id=<?php echo $row["id"]; ?>">Delete Book</a>  <?php  echo "</td>";
                                         echo "</tr>";
                                         }
                                         echo "</table>";
                                       }
                                       else
                                       {

                                     $res = mysqli_query($con,"select * from add_books");
                                         echo "<table class = 'table table-bordered'>"; 
                                         echo "<tr>";
                                         echo "<th>"; echo " Books Image ";  echo "</th>";
                                         echo "<th>"; echo " Books Name ";  echo "</th>";                                       
                                         echo "<th>"; echo " Books Author Name ";  echo "</th>";
                                         echo "<th>"; echo " Books Publication Name ";  echo "</th>";
                                         echo "<th>"; echo " Purchase Date ";  echo "</th>";
                                         echo "<th>"; echo " Books Price ";  echo "</th>";
                                         echo "<th>"; echo " Books Quantity ";  echo "</th>";
                                         echo "<th>"; echo " Available Books Quantity ";  echo "</th>";
                                         echo "<th>"; echo " Delete Books ";  echo "</th>";
                                         echo "</tr>";
                                         while($row = mysqli_fetch_array($res))
                                         {
                                         echo "<tr>";
                                         echo "<td>"; ?> <img src="<?php echo $row["books_image"];  ?>" height="100" width="100"> <?php echo "</td>"; 
                                         echo "<td>"; echo $row["books_name"]; echo "</td>";                             
                                         echo "<td>"; echo $row["books_author_name"]; echo "</td>";
                                         echo "<td>"; echo $row["books_publication_name"]; echo "</td>";
                                         echo "<td>"; echo $row["books_purchase_date"]; echo "</td>";
                                         echo "<td>"; echo $row["books_price"]; echo "</td>";
                                         echo "<td>"; echo $row["books_qty"]; echo "</td>";
                                         echo "<td>"; echo $row["available_qty"]; echo "</td>";
                                         echo "<td>"; ?> <a href="delete_books.php?id=<?php echo $row["id"]; ?>">Delete Book</a>  <?php  echo "</td>";
                                         echo "</tr>";
                                         }
                                         echo "</table>";

                                     }    // Ending of Else Part.
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
