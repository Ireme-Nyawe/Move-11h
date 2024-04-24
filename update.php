<?php
include "connection.php";
$id=$_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        Update Trainee Here
        <p>
            <label for="">Name</label>
            <input type="text" name="names">
            <input type="hidden" name="tid" value="<?php echo $id;?>">
        </p>
        <p>
            <input type="submit" name="update">
        </p>
    </form>
    <?php
    
    if(isset($_POST['update'])){
        $names=$_POST['names'];
        $id=$_POST['tid'];
        $update=mysqli_query($connect,"UPDATE trainee set name='$names' where id='$id'");
        if($update){
            header("location:form_register.php");
        }
    }
    ?>
</body>
</html>