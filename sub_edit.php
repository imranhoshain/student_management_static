<?php
$db = new PDO('mysql:host=localhost;dbname=bitm_student;charset=utf8mb4', 'root', '');
$query = "SELECT * FROM `courses` WHERE id = ".$_GET['id'];
$stmt = $db->query($query);
$result = $stmt->fetch(PDO::FETCH_ASSOC);

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Update Subject</title>
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
                    <div class="col-lg-6">

                    </div>
                    <div class="col-lg-6">
                        <div class="form-area">
                            <h2>Update Subject Information</h2>
                            <form action="sub_update.php" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="course_id" class="control-label">Course Id</label>
                                    <div class="cols-sm-10">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-id-card" aria-hidden="true"></i></span>
                                            <input type="number" class="form-control" name="course_id" value="<?php echo $result['course_id']; ?>" id="course_id" required placeholder="Enter Your Roll" />
                                            <input type="hidden" class="form-control" name="id" value="<?php echo $result['id']; ?>" id="name" placeholder="Course Id" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="course_title" class="cols-sm-2 control-label">Course Title</label>
                                    <div class="cols-sm-10">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-book fa" aria-hidden="true"></i></span>
                                            <input type="text" class="form-control" name="course_title" value="<?php echo $result['course_title']; ?>"  id="course_title" placeholder="Course Title" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="course_duration" class="control-label">Course Duration</label>
                                    <div class="cols-sm-10">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-clock-o" aria-hidden="true"></i></span>
                                            <input type="text" class="form-control" name="course_duration" value="<?php echo $result['course_duration']; ?>"  id="course_duration" placeholder="Course Duration" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="course_credit" class="cols-md-4 control-label">Course Credit</label>
                                    <div class="cols-sm-10">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                            <input type="number" class="form-control" name="course_credit" value="<?php echo $result['course_credit']; ?>" id="course_credit"  placeholder="Course Credit" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="submit" name="submit" value="Update" class="btn btn-success">
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