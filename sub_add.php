<?php
$db = new PDO('mysql:host=localhost;dbname=bitm_student;charset=utf8mb4', 'root', '');
$id=$_POST['id'];
var_dump($id);
die();
$query = "UPDATE `student_info` SET `subject` = 'PHP' WHERE `student_info`.`id` = 3 AND `student_info`.`roll` = 630437;";
var_dump($query);
$result = $db->exec($query);



if($result){
    echo "Data Update Successfully";
}else{
    echo "Dur mia kaj hoi ni";
}


