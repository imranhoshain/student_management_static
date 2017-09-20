<?php 
$db = new PDO('mysql:host=localhost;dbname=bitm_student;charset=utf8mb4', 'root', '');
$query = "SELECT * FROM `courses` WHERE id =" .$_GET['id'];
$stmt = $db->query($query);
$data = $stmt->fetch(PDO::FETCH_ASSOC);
?>
<?php 
$db = new PDO('mysql:host=localhost;dbname=bitm_student;charset=utf8mb4', 'root', '');
$query = "SELECT * FROM `student_info` WHERE id =" .$_GET['id'];
$stmt = $db->query($query);
$st_data = $stmt->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Your Profile Info</title>
    <link type="text/css" href="css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" href="css/font-awesome.min.css" rel="stylesheet">
    <link type="text/css" href="style.css" rel="stylesheet">
    <link type="text/css" href="css/responsive.css" rel="stylesheet">
</head>

<body>
    <header>
        <?php include 'header.php';?>
    </header>
    <br>
    <div class="my-work">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <table class="table table-bordered">
                        <thead>
                            <th>Subject Name</th>                            
                            <th>Student Name List</th>                            
                            <tr>
                                <td>
                                    <?php echo $data['course_title']; ?>
                                    <?php echo $st_data['roll']; ?>
                                </td>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <?php include 'footer.php';?>
    </footer>

    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery-birthday-picker.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
</body>

</html>