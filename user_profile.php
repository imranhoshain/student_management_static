<?php 
$db = new PDO('mysql:host=localhost;dbname=bitm_student;charset=utf8mb4', 'root', '');
$query = "SELECT * FROM `student_info` WHERE id =" .$_GET['id'];
$stmt = $db->query($query);
$data = $stmt->fetch(PDO::FETCH_ASSOC);

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
                            <tr>
                                <td>Roll</td>
                                <td>
                                    <?php echo $data['roll']; ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Name</td>
                                <td>
                                    <?php echo $data['name']; ?>
                                </td>
                            </tr>

                            <tr>
                                <td>Email</td>
                                <td>
                                    <?php echo $data['email']; ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Phone </td>
                                <td>
                                    <?php echo $data['phone']; ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Gender </td>
                                <td>
                                    <?php echo $data['gender']; ?>
                                </td>
                            </tr>                            
                            <tr>
                                <td>Date Of Birth</td>
                                <td>
                                    <?php echo $data['dob']; ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Course</td>
                                <td>
                                    <?php echo $data['subject']; ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Image</td>
                                <td><img src="img/<?php echo $data['image'] ?>" alt="" width="300"></td>
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