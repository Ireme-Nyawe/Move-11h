<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="">
        <table width="80%" border="2">
            <tr>
                <th>Id </th>
                <th>Name</th>
                <th>Email</th>
                <th>School</th>
                <th>Operation</th>
            </tr>
           <?php
           include "connection.php";
           $select=mysqli_query($connect,"SELECT * from trainee");
           if(mysqli_num_rows($select)==0){
            ?>
            <tr>
                <th colspan="100">No Data!</th>
            </tr>
            <?php
           }
           while($trainees=mysqli_fetch_array($select)){
           ?>
           <tr>
            <td><?php echo $trainees['id']?></td>
            <td><?php echo $trainees['name']?></td>
            <td><?php echo $trainees['email']?></td>
            <td><?php echo $trainees['school']?></td>
            <td>
                <a href="delete_trainee.php?trainee_id=<?php echo $trainees['id']?>">delete</a> update 
            </td>
           </tr>
           <?php 
           }
           ?>
        </table>
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
            header("location:form_register.php");
        }
        else{
            echo "failed";
        }
    }
    ?>
</body>
</html>