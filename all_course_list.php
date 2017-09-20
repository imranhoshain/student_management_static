<?php
$db = new PDO('mysql:host=localhost;dbname=bitm_student;charset=utf8mb4', 'root', '');
$query = "SELECT * FROM `courses`";
$stmt = $db->query($query);
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>All Register User Info</title>
        <link type="text/css" href="css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="css/font-awesome.min.css" rel="stylesheet">
        <link type="text/css" href="style.css" rel="stylesheet">
        <link type="text/css" href="css/responsive.css" rel="stylesheet">
    </head>

    <body>
      <header>
        <?php include 'header.php';?>
    </header>
       <section>
           <div class="container">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Serial</th>
                            <th>Course Id</th>
                            <th>Course Title</th>
                            <th>Course Duration</th>                           
                            <th>Course Credit</th>                                               
                            <th>Action</th>                    
                        </tr>
                    </thead>
                    <tbody>
                       <?php 
                            $sl=0;
                        foreach($data as $all_user){
                            $sl++
                        ?>
                        <tr>
                            <td><?php echo $sl; ?></td>
                            <td><?php echo $all_user['course_id']; ?></td>
                            <td><?php echo $all_user['course_title']; ?></td>
                            <td><?php echo $all_user['course_duration']; ?></td>                            
                            <td><?php echo $all_user['course_credit']; ?></td>                            
                            <td><a href="sub_profile.php?id=<?php echo $all_user['id'];?>">View</a> / <a href="sub_edit.php?id=<?php echo $all_user['id'];?>">Edit</a> / <a href="delete.php?id=<?php echo $all_user['id'];?>">Delete</a></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
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