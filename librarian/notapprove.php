<?php

include "connection.php";

$id = $_GET["id"];
mysqli_query($con,"update student_registration set status='no' where id=$id");

?>

<script type="text/javascript">
	
    window.location="display_student_info.php";

</script>