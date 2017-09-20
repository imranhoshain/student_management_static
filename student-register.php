<?php
$db = new PDO('mysql:host=localhost;dbname=bitm_student;charset=utf8mb4', 'root', '');
$_POST['dob'] = $_POST['day'].' - '.$_POST['month'].' - '.$_POST['year'];
$_POST['image'] = $_FILES['image']['name'];
$tmp_name = $_FILES['image']['tmp_name'];
$img_name = $_FILES['image']['name'];
move_uploaded_file($tmp_name, 'img/'.$img_name);

$query = "INSERT INTO `student_info` (`id`, `roll`, `name`, `email`, `phone`, `gender`, `dob`, `image`) VALUES (NULL, '".$_POST['roll']."', '".$_POST['name']."', '".$_POST['email']."', '".$_POST['phone']."', '".$_POST['gender']."', '".$_POST['dob']."', '".$_POST['image']."');";
$result = $db->exec($query);


header('location:all_student_list.php');

if($result){
    echo "Data Successfully Inserted..";
}
else{
    echo "Data NOt inserted!!!";
}

$db = null;

?>	
	
