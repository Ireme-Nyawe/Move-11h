<?php
include "connection.php";
$id=$_GET['trainee_id'];
$delete=mysqli_query($connect,
"DELETE from trainee where id='$id'
");
if($delete){
    header("location:form_register.php");
}

?>