    <!DOCTYPE html>
    <html lang="en">
    <?php session_start();?>
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.css">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
        body {
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }

        navigation {
            display: flex;
            color: antiquewhite;
            height: 80px;
            position: fixed;
            font-size: 25px;
            width: 600vh;
            z-index: 100;
            background-color: #00004d;
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
            margin-top: 20px;
        }

        svg {
            margin-top: -10px;
        }

        .Title {
            text-align: center;
            color: antiquewhite;
            margin-top: -15%;
            font-size: 35px;
            font-weight: bolder;
        }

        .destit {
            text-align: center;
            color: #A22334;
            margin-bottom: 30px;
            font-size: 30px;
            font-weight: bold;
        }

        .anser {
            margin-bottom: 30px;
            font-size: 28px;
            color: #00004d;
            margin-left: 120px;
            margin-right: 40px;
        }

        .time {
            display: flex;
            margin-left: 27%;
        }







        /* CSS */
        .btn,
        .btnn {
            align-items: center;
            appearance: none;
            background-color: #FCFCFD;
            border-radius: 4px;
            border-width: 0;
            box-shadow: rgba(45, 35, 66, 0.4) 0 2px 4px, rgba(45, 35, 66, 0.3) 0 7px 13px -3px, #D6D6E7 0 -3px 0 inset;
            box-sizing: border-box;
            color: #36395A;
            cursor: pointer;
            display: inline-flex;
            font-family: "JetBrains Mono", monospace;
            height: 48px;
            justify-content: center;
            line-height: 1;
            list-style: none;
            overflow: hidden;
            padding-left: 16px;
            padding-right: 16px;
            position: relative;
            text-align: left;
            text-decoration: none;
            transition: box-shadow .15s, transform .15s;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
            white-space: nowrap;
            will-change: box-shadow, transform;
            font-size: 18px;
        }

        .btn:focus,
        .btnn:focus {
            box-shadow: #D6D6E7 0 0 0 1.5px inset, rgba(45, 35, 66, 0.4) 0 2px 4px, rgba(45, 35, 66, 0.3) 0 7px 13px -3px, #D6D6E7 0 -3px 0 inset;
        }

        .btn:hover,
        .btnn:hover {
            box-shadow: rgba(45, 35, 66, 0.4) 0 4px 8px, rgba(45, 35, 66, 0.3) 0 7px 13px -3px, #D6D6E7 0 -3px 0 inset;
            transform: translateY(-2px);
        }

        .btn:active,
        .btnn:active {
            box-shadow: #D6D6E7 0 3px 7px inset;
            transform: translateY(2px);
        }

        .btn a,
        .btnn a {

            text-decoration: none;

        }

        .btn {
            margin-left: 12%;
            width: 130px;
        }

        .btnn {
            margin-left: 38%;
            width: 130px;
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



        .buttonn {
            display: flex;
            margin-top: 60px;
            margin-bottom: 30px;
        }

        li .exit {
            margin-left: 1950%;
        }
        </style>
    </head>

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
        <img src="./uniimagge/screen-with-white-color-put-your-text-there-group-young-people-casual-clothes-working-modern-office.jpg"
            style="width:250vh;height:100vh;margin-top:80px;">
        <?php
        include "connection.php";
           $cat_id= $_SESSION['catid'];
        $deid = $_GET['deid'];
        $sql = $a->prepare("SELECT * FROM course WHERE course_id=$deid "); #provide data which is same with id
        $sql->execute();
        $row = $sql->fetch(PDO::FETCH_ASSOC);
        extract($row);

   
        ?>


        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" style="width:105%;">
            <path fill="#00004d" fill-opacity="1" d="M0,192L720,256L1440,160L1440,0L720,0L0,0Z"></path>
        </svg>
        <form method="post" action="enroll.php">
            <div class="Title"> Find more details about "<?php echo $course_name?>" course
            </div>


            <div>

                <div>
                    <div class="destit" style="margin-top:150px;">Explore <?php echo $course_name?> and Take Your
                        Expertise to the Next
                        Level<br></div>
                </div>
                <div class="anser"> <?php echo $course_description?><br></div>
                <div>
                    <div class="destit">Explore Our Course Outline: A Step-by-Step Guide to <?php echo $course_name?>
                        <br>
                    </div>
                </div>
                <div class="anser"> <?php echo $course_outline?><br></div>

                <div>
                    <div class="destit"> Enroll Now: <?php echo $course_name?> course Intake Open for Registration <br>
                    </div>
                </div>
                <div class="anser"> <?php echo $course_intakes?><br></div>
                <div class="time">
                    <div class="destit">Transform Your Skills: Learn <?php echo $course_name?> courses ~</div>
                    <div class="anser"><?php echo $course_duration?></div>
                </div>
                <div>
                    <div class="destit">Exploring Career Paths in working fields: Opportunities and Growth<br>
                    </div>
                </div>
                <div class="anser"> <?php echo $jobs?><br></div>
                <div class="time">
                    <div class="destit">Value for Money: Invest in Your Future with <?php echo $course_name?></div>
                    <div class="anser"><?php echo $course_fee?></div>
                </div>
                <div>
                    <div class="time">
                        <div class="destit">Course Credit Enrollment:
                        </div>
                        <div class="anser"><?php echo $course_credit?>
                        </div>
                    </div>
                </div>
                <img src="./uniimagge/<?php echo $course_image?>" style="width:230vh; height:90vh;margin-top:20px;">
            </div>
            </div>
            <div class="buttonn">
                <div class="btnn">
                    <a href="./stulogin.php?eid=<?php echo $course_id;?>">Enroll</a>

                    <?php
               
      
               # $_SESSION['course']=$deid;
               ?>

                </div>
                <div class="btn">
                    <a href="./courses.php" class="viewitemm">BACK</a>
                </div>
            </div>
        </form>

        <section class="otherpeople">
            <div class="container">
                <div class="row">
                    <p><b class="fs-4"> Related with this program:</b></p>
                    <section class="holiday col-12">

                        <section class="cards">
                            <div class="container">

                                <div class="container">
                                    <div class="row d-flex justify-content-center">

                                        <span class="row flex-nowrap overflow-auto">
                                            <?php 
                                                              $sql = $a->prepare("SELECT cat_id FROM course WHERE course_id=$deid"); #provide data which is same with id
                                                            $sql->execute();
                                                            $row = $sql->fetch(PDO::FETCH_ASSOC);
                                                            extract($row);
                                                            $cat = $cat_id;
                                                              $sql = $a->prepare("SELECT * FROM course WHERE cat_id=$cat AND course_id!=$deid ORDER BY RAND() LIMIT 5 "); #provide data which is same with id
                                                                $sql->execute();
                                                             while( $row = $sql->fetch(PDO::FETCH_ASSOC))  {
                                                                  extract($row);
                                                            ?>
                                            <div class="card ms-3 col-3 mt-4" style="width: 18rem;">
                                                <a href="./coursedetail.php?deid=<?php echo $course_id?>"
                                                    class="text-decoration-none text-dark">


                                                    <img src="./uniimagge/<?php echo $course_image?>"
                                                        class="card-img-top p-3">
                                                    <div class="card-body">
                                                        <h5 class="card-title"><?php echo $course_name?></h5>
                                                        <p class="card-text">Price-<?php echo $course_fee?></p>
                                                    </div>
                                                </a>
                                            </div>
                                            <?php   
                                                             }
                ?>
                                        </span>
                                    </div>
                                </div>


                            </div>
                        </section>
                    </section>
                </div>
            </div>
        </section>
        <br>
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
    <script src="./node_modules/bootstrap/dist/js/bootstrap.js"></script>

    </html>