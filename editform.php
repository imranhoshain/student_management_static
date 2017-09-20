<?php
$db = new PDO('mysql:host=localhost;dbname=bitm_student;charset=utf8mb4', 'root', '');
$query = "SELECT * FROM `student_info` WHERE id = ".$_GET['id'];
$stmt = $db->query($query);
$result = $stmt->fetch(PDO::FETCH_ASSOC);

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
                    <div class="col-lg-6">

                    </div>
                    <div class="col-lg-6">
                        <div class="form-area">
                            <h2>Update Your Information</h2>
                            <form action="update.php" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="roll" class="control-label">Student Id</label>
                                    <div class="cols-sm-10">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-id-card" aria-hidden="true"></i></span>
                                            <input type="text" class="form-control" name="roll" value="<?php echo $result['roll']; ?>" id="roll" required placeholder="Enter Your Roll" />
                                            <input type="hidden" class="form-control" name="id" value="<?php echo $result['id']; ?>" id="name" placeholder="Enter your Name" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="name" class="cols-sm-2 control-label">Enter Your Name</label>
                                    <div class="cols-sm-10">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                            <input type="text" class="form-control" name="name" value="<?php echo $result['name']; ?>" id="name" required placeholder="Enter Your Name" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="control-label">Your Email</label>
                                    <div class="cols-sm-10">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                                            <input type="email" class="form-control" name="email" value="<?php echo $result['email']; ?>" id="email" required placeholder="Enter Your Email" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="phone" class="cols-md-4 control-label">Phone Number</label>
                                    <div class="cols-sm-10">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-phone" aria-hidden="true"></i></span>
                                            <input type="phone" class="form-control" name="phone" value="<?php echo $result['phone']; ?>" id="phone" required placeholder="Enter your Phone Number" />
                                        </div>
                                    </div>
                                </div>

                                <div class="gender">
                                    <p>Select Your Gender</p>
                                    <div class="radio-inline">
                                        <label class="custom-control custom-radio">
                                      <input id="radio1" value="male" name="gender" type="radio" <?php echo ($result['gender']=='male')? 'checked':''?> required class="custom-control-input">
                                      <span class="custom-control-indicator"></span>
                                      <span class="custom-control-description"></span>Male
                                    </label>
                                        <label class="custom-control custom-radio">
                                      <input id="radio2" value="female" name="gender" type="radio" <?php echo ($result['gender']=='female')? 'checked':''?> required class="custom-control-input">
                                      <span class="custom-control-indicator"></span>
                                      <span class="custom-control-description"></span>Female
                                    </label>
                                    </div>
                                </div>
                                <?php
                                    $date = explode('-', $result['dob']);                    
                                ?>
                                <div class="form-group birth">
                                    <label><p>Select your DOB :</p></label>
                                    <select name="day" class="dob">
                                <?php
                                        for($i=1; $i<=31; $i++){
                                            if($i==$date[0]){
                                                $select = 'selected';
                                            }else{
                                                $select = '';
                                            }                    
                                        echo "<option $select value='$i'>$i</option>";
                                    }
                                    ?>
                                </select>
                                    <select name="month" class="dob">             
                                <?php
                                    for ($i = 1; $i <= 12; $i++)
                                    {
                                    $month_name = date('F', mktime(0, 0, 0, $i, 1, 2011));                                       
                                    echo "<option value='$month_name'>$month_name</option>";
                                    }

                                ?>               
                                </select>
                                    <select name="year" class="dob">
                                     <?php
                                        for($i=1990;$i<=2017;$i++)
                                        {
                                            if($i==$date[2]){
                                                $select = 'selected';                        
                                            }else{
                                                $select = '';
                                            }
                                            echo "<option $select value='$i'>$i</option>";
                                        }

                                        ?>
                                </select>
                                </div>
                                <div class="form-group">
                                   <img src="img/<?php echo $result['image'] ?>" alt="" width="100"><br>
                                    <label class="custom-file" for="image"><h4>Chosose profile pic</h4>                      
                                  <input type="file" id="image" name="image" required class="custom-file-input">
                                  <span class="custom-file-control"></span>
                                </label>
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