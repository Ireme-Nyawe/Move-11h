<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="">
        <form action="form_register.php" method="POST">
            <h3>Register For Intesnship </h3>
            <p>
                <label for="">Student Names</label>
                <input type="text" name="names">
            </p>
            <p>
                <label for="">Student Email</label>
                <input type="text" name="email">
            </p>
            <p>
                <label for="">Student School</label>
                <input type="text" name="school">
            </p>
            <p>
                 <input type="submit" value="Register" name="register">
            </p>
        </form>
    </div>
    <?php
    include "connection.php";
    if(isset($_POST['register'])){
        $student_name=$_POST['names'];
        $student_email=$_POST['email'];
        $student_school=$_POST['school'];

        $insert=mysqli_query($connect,"INSERT into trainee values(null,'$student_name','$student_email','$student_school')");
        if($insert){
            echo "Values recorded SuccessFully";
        }
        else{
            echo "failed";
        }
    }
    ?>
</body>
</html>