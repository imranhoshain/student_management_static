<?php
$db = new PDO('mysql:host=localhost;dbname=bitm_student;charset=utf8mb4', 'root', '');
$query="SELECT * FROM `student_info` ORDER BY id ASC ";
$stmt=$db->query($query);
$studentName=$stmt->fetchAll(PDO::FETCH_ASSOC);

$query="SELECT * FROM `courses` ORDER by course_title";
$stmt=$db->query($query);
$courseTitle=$stmt->fetchAll(PDO::FETCH_ASSOC);
//var_dump($studentName);
?>
        

        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <title>Update User Information</title>
            <link type="text/css" href="css/bootstrap.min.css" rel="stylesheet">
            <link type="text/css" href="css/font-awesome.min.css" rel="stylesheet">
            <link type="text/css" href="style.css" rel="stylesheet">
            <link type="text/css" href="css/responsive.css" rel="stylesheet">
        </head>

        <body>
            <header>
                <?php include 'header.php';?>
            </header>
            <section class="register">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 ">
                            <div class="form-area sub-select">
                                <h2>Subject Choice</h2>
                                <form action="sub_update.php" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="course_code">Select Student :</label>
                                        <select name="id"  class="form-control">
                                            <option value="" >Choose Student</option>
                                            <?php
                                            foreach ($studentName as $student){?>
                                                <option value="<?php echo $student['id']?>"> <?php echo $student['roll']?> </option>
                                                <?php
                                            }
                                            ?>

                                        </select>
                                    </div>
                                    <div class="course-select">

                                        <h4>Chose Your Subject</h4>
                                        <div class="checkbox">
                                            <div class="form-check form-check-inline">
                                                <div class="form-group">
                                                    <label for="course_title">Select Course</label>
                                                    <?php
                                                    foreach ($courseTitle as $check){
                                                        ?>
                                                        <input type="checkbox" name="check[]" value="<?php echo $check['course_title']?>"><?php echo $check['course_title'];?>
                                                        <?php
                                                    }
                                                    ?>
                                                </div>
                                                                                     
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <br><input type="submit" name="submit" value="Submit" class="btn btn-success">
                                    </div>
                                </form>
                            </div>   
                        </div>
                    </div>
                </div>
            </section>                
                <footer>
                    <?php include 'footer.php';?>
                </footer>

                <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
                <script type="text/javascript" src="js/bootstrap.min.js"></script>
                <script type="text/javascript" src="js/jquery-birthday-picker.min.js"></script>
                <script type="text/javascript" src="js/main.js"></script>
        </body>

        </html>