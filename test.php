<?php
include 'connection.php';
$phone="078545678";
$test_query=mysqli_query($connect,
"UPDATE school set 
phone='$phone' where 
email='cobang@gmail.com'"
);
if($test_query){
echo "query Passed!";
}
?>