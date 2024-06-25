<?php
require_once "dbcon.php";

if(isset ($_POST["student_name"]) && isset ($_POST["student_id"]) && isset ($_POST["father_name"]) && isset ($_POST["Mother_Name"]) && isset ($_POST["phone_numbre"])){


    $student_name= $_POST["student_name"];
    $student_id= $_POST["student_id"];
    $father_name= $_POST["father_name"];
    $Mother_Name =$_POST["Mother_Name"];
    $phone_numbre= $_POST["phone_numbre"];



    $sql="INSERT INTO `student`(`student_name`, `student_id`, `father_name`, `Mother_Name`, `phone_numbre`) VALUES ('$student_name','$student_id','$father_name','$Mother_Name','$phone_numbre')";



    if(mysqli_query($data,$sql)){
        echo "Data insert success";
    }
    else{
        echo"Data insert Unsuccess";
    }
}
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
        student_name : <input type="text" name="student_name"> <br> <br>
        student_id : <input type="text" name="student_id"> <br> <br>
        father_name : <input type="text" name="father_name"><br> <br>
        Mother_Name : <input type="text" name="Mother_Name"><br><br>
        phone_numbre : <input type="number" name="phone_numbre"><br><br>
        <input type="submit" value="submit"> <br><br>
    </form>
</body>
</html>