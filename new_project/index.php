<?php
require_once"dbcon.php";
 

$link="SELECT * FROM `student`";


$result = $data->query($link);



if($result){ 
   $hasan = mysqli_fetch_array($result);

}

echo $hasan["student_name"]

?>

<hr>
<table border>
    <tr>
        <th>student_name</th>
        <th>student_id</th>
        <th>father_name</th>
        <th>mother_name</th>
        <th>phone_number</th>
    </tr>
    <?php while($hasan = mysqli_fetch_array($result));?>
        <tr>
            <td><?php echo $hasan["student_name"];?></td>
            <td><?php echo $hasan["student_id"];?></td>
            <td><?php echo $hasan["father_name"];?></td>
            <td><?php echo $hasan["Mother_Name"];?></td>
            <td><?php echo $hasan["phone_numbre"];?></td>
            
        </tr>
    <?php endwhile;?>
</table>