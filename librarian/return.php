<?php

include "connection.php";
$id = $_GET["id"];
$a = date("d-m-y");
$res = mysqli_query($con,"update issue_books set books_return_date='$a' where id = $id;");

$res = mysqli_query($con,"select * from issue_books where id = $id");

$books_name="";
while($row = mysqli_fetch_array($res))
{
   $books_name = $row["books_name"];
}
mysqli_query($con,"update add_books set available_qty = available_qty + 1 where 
                                      books_name = '$books_name'");

?>

<script type="text/javascript">
	
window.location="return_book.php";

</script>