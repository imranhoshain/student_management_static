<?php
$db = new PDO('mysql:host=localhost;dbname=bitm_student;charset=utf8mb4', 'root', '');
$query = "DELETE FROM `student_info` WHERE `student_info`.`id` =".$_GET['id'];
$stmt = $db->exec($query);
if($stmt){
    header('location: all_student_list.php');
}
else{
    echo "Data Not Deleted!!!!";
}
?>

  
//Courses Delet// 
<?php
            $db = new PDO('mysql:host=localhost;dbname=bitm_student;charset=utf8mb4', 'root', '');
            $query = "DELETE FROM `courses` WHERE `courses`.`id` =".$_GET['id'];
            $stmt = $db->exec($query);
            if($stmt){
                header('location: all_course_list.php');
            }
            else{
                echo "Data Not Deleted!!!!";
            }
        ?>    