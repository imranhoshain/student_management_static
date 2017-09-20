<?php
$db = new PDO('mysql:host=localhost;dbname=bitm_student;charset=utf8mb4', 'root', '');
$_POST['dob'] = $_POST['day'].' - '.$_POST['month'].' - '.$_POST['year'];
$_POST['image'] = $_FILES['image']['name'];
$tmp_name = $_FILES['image']['tmp_name'];
$img_name = $_FILES['image']['name'];
move_uploaded_file($tmp_name, 'img/'.$img_name);

$query = "UPDATE `student_info` SET `roll` = '".$_POST['roll']."', `name` = '".$_POST['name']."', `email` = '".$_POST['email']."', `phone` = '".$_POST['phone']."', `gender` = '".$_POST['gender']."', `dob` = '".$_POST['dob']."', `image` = '".$_POST['image']."' WHERE `student_info`.`id` = ".$_POST['id'];
$result = $db->exec($query);

header('location:user_profile.php?id='.$_POST['id']);

if($result){
    echo "Data Update Successfully";
}else{
    echo "Dur mia kaj hoi ni";
}


