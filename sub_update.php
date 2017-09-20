<?php
$_POST['check']=implode(',',$_POST['check']);
$db = new PDO('mysql:host=localhost;dbname=bitm_student;charset=utf8mb4', 'root', '');
$query="UPDATE `student_info` SET `subject` = '".$_POST['check']."' WHERE `student_info`.`id` = ".$_POST['id']; 
var_dump($query);
$result=$db->exec($query);

header('location:user_profile.php?id='.$_POST['id']);

if ($result){
    echo "Courses Update for This Student";
}
else{
    echo "Courses Not update";
}


?>
