<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Courses</title>
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
                        <h2>Courses</h2>
                        <form action="courses-register.php" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="course_id" class="control-label">Course Id</label>
                                <div class="cols-sm-10">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-id-card" aria-hidden="true"></i></span>
                                        <input type="number" class="form-control" name="course_id" required id="course_id" placeholder="Course Id" />
                                    </div>
                                </div>
                            </div>                            
                            <div class="form-group">
                                <label for="course_title" class="cols-sm-2 control-label">Course Title</label>
                                <div class="cols-sm-10">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-book fa" aria-hidden="true"></i></span>
                                        <input type="text" class="form-control" name="course_title" required id="course_title" placeholder="Course Title" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="course_duration" class="control-label">Course Duration</label>
                                <div class="cols-sm-10">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-clock-o" aria-hidden="true"></i></span>
                                        <input type="text" class="form-control" name="course_duration" required id="course_duration" placeholder="Course Duration" />
                                    </div>
                                </div>
                            </div>                           
                            <div class="form-group">
                                <label for="course_credit" class="cols-md-4 control-label">Course Credit</label>
                                <div class="cols-sm-10">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                        <input type="number" class="form-control" name="course_credit" id="course_credit" required placeholder="Course Credit" />
                                    </div>
                                </div>
                            </div>                            
                            <div class="form-group">
                                <input type="submit" name="submit" value="Register" class="btn btn-success">
                                <input type="reset" name="submit" value="Reset" class="btn btn-info">
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