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

                <div class="clearfix" style="background-color: burlywood; border: 2px solid black;></div>
                <div class="row" style="min-height:500px">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel" style="background-color: black;">
                            <div class="x_title">
                                <h2 style="margin-left: 10px; color: black;">Send Message to the Student</h2>
                                 
                                <div class="clearfix" style="background-color: aqua; border: 2px solid black;"></div>
                            </div>
                            <div class="x_content">
                                
                        <form name="form1" action="" method="post" class="col-lg-6">                   

                <table class="table table-bordered">
                    
                 <tr>
                    <td><select class="form-control" name="dusername">
                        <?php    
                              $res = mysqli_query($con,"select * from student_registration");
                              while($row=mysqli_fetch_array($res))
                              {
                                ?><option value="<?php echo $row["username"]?>">
                                    <?php echo $row["username"]."(". $row["enrollment"].")";  ?>
                                </option><?php
                              }
                        ?></select></td>
                 </tr>
                 <tr>
                     <td>
                         <input type="text" class="form-control" name="title" placeholder="Enter Title">
                     </td>
                 </tr>

                <tr>
                     <td>
                        Message
                        <textarea name="msg" class="form-control">
                            
                        </textarea>

                     </td>
                 </tr>

                       <tr>
                           <td>
                               <input type="submit" name="submit1" value="Send Message">
                           </td>
                       </tr>

             </table></form>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->

        <?php


           if(isset($_POST["submit1"]))
           {

             $dname = $_POST["dusername"];
             $title = $_POST["title"];
             $msg = $_POST["msg"];
             $lib = $_SESSION["librarian"];
             echo $dname;
             echo $title;
             echo $msg;
   $r= mysqli_query($con,"insert into messages(susername,dusername,title,msg) values('".$lib."','".$dname."','".$title."','".$msg."')") or die(mysqli_error($con));
                if($r==1)
                {

             ?>
                    <script type="text/javascript">
                        
                           alert("Message Send Sucessfully !!!");

                    </script>

                <?php
           }
       }

        ?>


        <?php

            include "footer.php";

        ?>
 