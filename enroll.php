<!DOCTYPE html>
<html lang="en">
<?php
include "./connection.php";
session_start();
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<style>
body {
    margin: 0;
    padding: 0;
    overflow-x: hidden;
    scroll-behavior: smooth;

    font-family: Arial, sans-serif;
    margin: 0;


}

navigation {
    display: flex;
    color: antiquewhite;
    height: 80px;
    position: relative;
    font-size: 25px;
    background-color: #00004d;
}

navigation h3 {
    margin-left: 20px;
}

ul {
    display: flex;
}

li {
    margin-right: 10px;
    text-decoration: none;
    list-style-type: none;
}

li a {
    text-decoration: none;
    color: antiquewhite;
    margin-left: 20px;
    padding-top: 20px;
}

li .exit {
    margin-left: 1950%;
}


.link {
    background-color: #65000b;
    color: antiquewhite;
    text-align: center;
    font-size: 25px;
}

@keyframes typewriter {
    from {
        width: 0;
    }

    to {
        width: 100%;
    }
}

.typewriter {
    overflow: hidden;
    white-space: nowrap;
    animation: typewriter 4s steps(30) 1.3s infinite;
}

h2 {
    text-align: center;
}

.form-container {
    max-width: 400px;
    margin: 0 auto;
}

.form-group {
    margin-bottom: 20px;
}

.form-group label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
}

.form-group input[type="text"],
.form-group input[type="file"] {
    width: 100%;
    padding: 10px;
    border-radius: 4px;
    border: 1px solid #ccc;
}

.form-group .fa {
    margin-right: 5px;
}

.submit-btn {
    text-align: center;
}

.submit-btn input[type="submit"] {
    padding: 10px 20px;
    font-size: 16px;
    background-color: #4CAF50;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

.submit-btn input[type="submit"]:hover {
    background-color: #45a049;
}

.container {
    border: 1px solid #00004d;
    padding: 50px;
    border-radius: 10px;
}

.btun {
    margin-left: 90%;
    margin-top: 20px;
    border: 2px solid #00004d;
    width: 100px;
    height: 40px;
    padding: 2px;
    border-radius: 12px;
    color: antiquewhite;
    background-color: #00004d;
    margin-bottom: 20px;
}

select {
    width: 190px;
    height: 40px;
    margin: 10px;
    border: 1px solid #ccc;
    border-radius: 2px;
    margin-left: -1px;
}

.confirm {
    margin-left: 25%;
    font-size: 40px;
    margin-top: 20px;
    color: #194569;
}

.confirmm {
    font-size: 40px;
    margin-top: 20px;
    color: #194569;
    margin-left: 12%;
}

footer {
    background-color: #194569;
    padding: 20px;
    color: #fff;
    text-align: center;
}

.social-icons {
    margin-top: 20px;
    text-align: center;
}

.social-icons a {
    display: inline-block;
    margin: 0 10px;
    color: #fff;
    font-size: 24px;
}

.social-icons img {
    width: 30px;
    height: 30px;
}

.link {
    background-color: #65000b;
    color: antiquewhite;
    text-align: center;
    font-size: 25px;
}

li .exit {
    margin-left: 1450%;
}
</style>

<body>
    <navigation>

        <h3>Noble University</h3>
        <ul>
            <li><a href="./Home.php">Home</a></li>
            <li><a href="./courses.php">Course</a></li>
            <li><a href="./repu.html">University News</a></li>
            <li><a href="./about.html">Contact Us</a></li>
            <li><a href="./exit.php" class="exit">Exit</a></li>
        </ul>

    </navigation>
    <?php

 
    $aa = $_SESSION['encourse'];

    $sql = $a->prepare("SELECT * FROM course WHERE course_id=$aa"); #provide data which is same with id
    $sql->execute();//196
     $row = $sql->fetch(PDO::FETCH_ASSOC);
    extract($row);
  


    ?>
    <img src="./uniimagge/three-grad-students-froma-behind.jpg" style="width:220vh;height:100vh;">
    <div style="font-size:40px;margin-top:-720px;color:#00004d;margin-left:310px;">
        <p class="typewriter">Enroll at Noble University and Build Your Future with Excellence!</p>
    </div>
    <div style="margin-top:80vh">
        <!--   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="black" fill-opacity="1" d="M0,32L720,192L1440,32L1440,0L720,0L0,0Z"></path>
        </svg>-->
        <br>
        <br>
        <br>

    </div>
    <p class=" confirm">Confirm to enroll "<?php echo $course_name?>"?</p><br>
    <p class="typewriter confirmm">"Please complete the form below once the course has been confirmed."</p><br>
    <p class="conirm"></p>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="container">

            <div class="form-group">
                <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
                <input type="text" id="adr" name="address" placeholder="3 A. Rose Road, Tulip Town, United Kingdom"
                    required>
            </div>
            <div class="form-group">
                <label for="phnum"><i class="fa fa-phone"></i> Phone Number</label>
                <input type="text" id="phnum" name="phonenumber" placeholder="Enter your phone number" required>
            </div>
            <div class="form-group">
                <label for="bankacc"><i class="fa fa-credit-card"></i> Bank Account</label>
                <input type="text" id="bankacc" name="bkaccount" placeholder="Enter your bank account number" required>
            </div>
            <div class="labels">
                <label for="bankacc"><i class="fa fa-credit-card"></i> Bank Name</label><br>
                <select id="bankacc" name="bank_name">
                    <option value="visa">Visa</option>
                    <option value="mastercard">Mastercard</option>
                    <option value="americanexpress">American Express</option>
                    <!-- Add more options as needed -->
                </select>
            </div>

            <div class="form-group">
                <label for="doc"><i class="fa fa-file"></i> Document <p style="color: red;">("Please compress all your
                        documentation and active
                        gmail account into a zip
                        file as it is the only acceptable file format.") </p></label>
                <input type="file" name="docu" id="docu">
            </div>


            <?php 
             $student_id = $a->lastInsertId();
                $_SESSION['studentid'] = $student_id;
           #     $stuid=$_SESSION['studentid'];
             #  $_SESSION['ID'];
            $_SESSION['SID'];
        
           
            ?>
            <!--     <input type="hidden" name="memeber" value=" <?php echo $member;?>">
            <input type="hidden" name="courseid" value=" <?php echo $aa;?>">-->

        </div><button type="button" class="btun" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"
            name="finish">
            Finish
        </button>
        <?php
                date_default_timezone_set('Europe/London');
                $currentDateTime = date('Y-m-d H:i:s');

        ?>
        <input type="hidden" name="date" value=" <?php echo  $currentDateTime;?>">

        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content" style="background-color:#00004d;color:antiquewhite;">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Thank you</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Congratulations! You have successfully enrolled in the "<?php echo $course_name?>" </p>course
                        with a
                        total fee of "<?php echo $course_fee?>"</p. <?php
                            echo "<br><span class='oututt'>The current date and time in London Time Zone is: " .
                                $currentDateTime."</span>";?>.<br>Click "Submit" when you are completed.
                    </div>
                    <input type="submit" name="submit" class="btnn"
                        style="background-color:#65000b;color:antiquewhite;">
                    <input type="hidden" name="name" value="<?php echo $stuid;?>">

                </div>

            </div>
        </div>
        </div>
    </form>
    <?php 
       

$studentt = $_SESSION['SID'];
include './connection.php';

if (isset($_POST['submit'])) {
    $name = $_POST['address'];
    $intake = $_POST['phonenumber'];
    $fee = $_POST['bkaccount'];
    $duration = $_POST['bank_name'];

    // ZIP file handling
    if (isset($_FILES['docu'])) {
        // File details
        $file = $_FILES['docu'];
        $fileName = $file['name'];
        $fileTmpName = $file['tmp_name'];
        $fileSize = $file['size'];
        $fileError = $file['error'];

        // Extract file extension
        $fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

        // Define allowed file extensions
        $allowedExtensions = ['zip'];

        if (in_array($fileExt, $allowedExtensions)) {
            if ($fileError === 0) {
                if ($fileSize < 5000000) { // Adjust the maximum file size limit as needed
                    $destination = 'uploads/' . $fileName;
                    move_uploaded_file($fileTmpName, "./studentzip/" . $fileName);

                    // Insert data into the database
                    $zip_file = $fileName;
                    $sql = "INSERT INTO student(SID, student_address, studnet_phonenumber, bank_account, bank_name, documentation)
                            VALUES (?, ?, ?, ?, ?, ?)";
                    $sqone = $a->prepare($sql);
                    if ($sqone->execute([$studentt, $name, $intake, $fee, $duration, $zip_file])) {
                        // Get the last inserted student ID
                        $student_id = $a->lastInsertId();

                        // Store the student ID in the session
                        $_SESSION['studentid'] = $student_id;

                        // Insert enrollment details
                        $course_id = $_SESSION['encourse'];
                        $currentDateTime = date('Y-m-d H:i:s');
                        $sqlenroll = "INSERT INTO enroll(student_id, SID, course_id, enroll_date)
                                      VALUES (?, ?, ?, ?)";
                        $a->prepare($sqlenroll)->execute([$student_id, $studentt, $course_id, $currentDateTime]);

                        // Redirect to success page or perform any other desired actions
                       
                        exit();
                    } else {
                        echo 'Error occurred while inserting data into the database.';
                    }
                } else {
                    echo 'File size exceeds the limit.';
                }
            } else {
                echo 'Error occurred during file upload.';
            }
        } else {
            echo 'Invalid file type. Upload again with ZIP file only!';
        }
    } else {
        echo 'No file uploaded.';
    }
}


?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <footer>
        <div class="social-icons">
            <a href="#"><img src="./uniimagge/instagram (1).png"></a>
            <a href="#"><img src="./uniimagge/facebook (4).png"></a>
            <a href="#"><img src="./uniimagge/google.png"></a>
            <a href="#"><img src="./uniimagge/youtube.png"></a>
        </div>

    </footer>
    <div class="link">
        nobleuniversity.edu
    </div>
</body>

</html>