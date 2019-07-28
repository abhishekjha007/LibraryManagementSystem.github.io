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
                                <h2 style="margin-left: 10px; color: black;"> Issue Books </h2>

                                <div class="clearfix" style="background-color: aqua; border: 2px solid black;"></div>
                            </div>
                            <div class="x_content">
                               
                               <form name = "form1" action = "" method = "post">
                                   
                                   <table>
                                   	
                                       <tr>
                                        	
                                        	<td>
                                        		
                                        		<select name="enr" class="form-control selectpicker">
                                        			
                                                <?php   

                                                $result = mysqli_query($con,"select enrollment from student_registration");
                                                while($row = mysqli_fetch_array($result))
                                                {
                                                    echo "<option>";
                                                    echo $row["enrollment"];
                                                    echo "</option>";
                                                }

                                                ?>

                                        		</select>
                                        	</td>
                                            <td><input type="submit" value="Search" name="submit1"
                                             class="form-control btn btn-default" style="margin-top: 5px;"></td>

                                       </tr>
                               </form>

                               <?php 

                               if(isset($_POST["submit1"]))
                                   
                                   {
                                       $result5 = mysqli_query($con,"select * from student_registration where enrollment = '$_POST[enr]'");
                                       while($row5=mysqli_fetch_array($result5))
                                       {
                                           $firstname = $row5["firstname"];
                                           $lastname = $row5["lastname"];
                                           $username = $row5["username"];
                                           $email = $row5["email"];
                                           $contact = $row5["contact"];
                                           $sem = $row5["sem"];
                                           $enrollment = $row5["enrollment"];
                                       }
                               
                                   ?>

                <form name="form1" action="" method="post" class="col-lg-6" enctype="multipart/form-data">                   

                <table class="table table-bordered">
                    
                 <tr>
                    <td><input type="text" class="form-control" placeholder="Enrollment Number"
                    value="<?php echo $enrollment; ?>" name="enrollment"></td>
                 </tr>
                 
                 <tr>
                    <td><input type="text" class="form-control" placeholder="Name of the Student"
                    value="<?php echo $firstname.' '.$lastname; ?>" name="studentname" required></td>
                 </tr>

                 <tr>
                    <td><input type="text" class="form-control" placeholder="Student Semester"
                    value="<?php echo $sem; ?>" name="studentsem" required></td>
                 </tr>

                 <tr>
                    <td><input type="text" class="form-control" placeholder="Student Contact Number"
                    value="<?php echo $contact; ?>" name="studentcontact" required></td>
                 </tr>

                 <tr>
                    <td><input type="text" class="form-control" placeholder="Student Email"
                     value="<?php echo $email; ?>" name="studentemail" required></td>
                 </tr>

                 <tr>
                    <td>
                    	<select name="booksname" class="form-control selectpicker">
                    		 
                    		 <?php

                    		 $result = mysqli_query($con,"select books_name from add_books");
                    		 while($row=mysqli_fetch_array($result))

                    		 {
                                  echo "<option>";
                    			  echo $row["books_name"];
                    		      echo "</option>";
                    		 }

                    		 ?>

                    	</select>
                    </td>
                 </tr>

                 <tr>
                    <td>
                    	<input type="text" class="form-control" placeholder="Books Issue Date"
                    	value="<?php echo date("d-m-y"); ?>" name="booksissuedate" required>
                    </td>
                 </tr>

                 <tr>
                    <td><input type="text" class="form-control" placeholder="Student Username"
                    value="<?php echo $username; ?>" name="studentusername"></td>
                 </tr>

                 <tr>
                    <td><input type="submit" class="form-control" name="submit2" 
                    	class="form-control btn btn-default" value="Issue Books" style="background-color: aqua; color: black;"></td>
                 </tr>

             </table>

                                   <?php
                               }

                                ?>

                                </table>

                                <?php

                                if(isset($_POST["submit2"]))

                                {
                                    $qty = 0;
                                	  $res = mysqli_query($con,"select * from add_books where books_name = '$_POST[booksname]'");
                                    while($row=mysqli_fetch_array($res))
                                    {
                                       $qty = $row["available_qty"];
                                    }
                                    if($qty==0)
                                    {
                                             ?>

        <div class="alert alert-danger col-lg-6 col-lg-push-3">
          <strong style="color:white"> This Books are not Available in Stock
          </strong>
        </div>

        <?php
                                    }
                                    else
                                    {

                                    $enum = $_POST["enrollment"];
                                    $sname = $_POST["studentname"];
                                    $ssem = $_POST["studentsem"];
                                    $scontact = $_POST["studentcontact"];
                                    $semail = $_POST["studentemail"];
                                    $bname = $_POST["booksname"];
                                    $bissuedate = $_POST["booksissuedate"];  
                                    $_SESSION["susername"] = $username;

                                    mysqli_query($con,"insert into issue_books(student_enrollment,student_name,student_sem,student_contact,student_email,books_name,books_issue_date,books_return_date,student_username) values('".$enum."','".$sname."','".$ssem."','".$scontact."','".$semail."','".$bname."','".$bissuedate."','','$_POST[studentusername]')");

                                    mysqli_query($con,"update add_books set available_qty = available_qty - 1 where 
                                      books_name = '".$bname."'");

                                   /*mysqli_query($con,"insert into issue_books values('','$_POST[enrollment]','$_POST[studentname]','$_POST[studentsem]','$_POST[studentcontact]','$_POST[studentemail]','$_POST[booksname]','$_POST[booksissuedate]','','$_POST[studentusername]')");*/
                                   
                                   ?>

                                   <script type="text/javascript">
                                   	
                                       alert("Books Issued Sucessfully!!!");
                                       window.location.href = window.location.href;

                                   </script>

                                   <?php
                                 }
                                } 

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
