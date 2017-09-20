<?php
$db = new PDO('mysql:host=localhost;dbname=bitm_student;charset=utf8mb4', 'root', '');

$query = "INSERT INTO `courses` (`id`, `course_id`, `course_title`, `course_duration`, `course_credit`) VALUES (NULL, '".$_POST['course_id']."', '".$_POST['course_title']."', '".$_POST['course_duration']."', '".$_POST['course_credit']."');";
$result = $db->exec($query);

header('location:all_course_list.php');

if($result){
    echo "Data Successfully Inserted..";
}
else{
    echo "Data NOt inserted!!!";
}

$db = null;

?>	
	
