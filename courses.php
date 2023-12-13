<!DOCTYPE html>
<html lang="en">
<?php 
session_start();
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <title>Document</title>
    <style>
    body {
        margin: 0;
        padding: 0;
        overflow-x: hidden;
        scroll-behavior: smooth;
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
        margin-top: 20px;
    }

    li .exit {
        margin-left: 1950%;
    }

    .card {
        margin-top: -30vh;
    }

    .card {
        display: flex;
        margin-left: 20px;
        display: grid;
        grid-template-columns: auto auto;
    }

    .card div {
        border: 1px solid #00004d;
        background-color: #00004d;
        border-radius: 5px;
        padding: 30px;
        text-align: center;
        color: antiquewhite;
        box-shadow: 5px 5px 5px grey;
        margin-bottom: 10px;
        margin-left: 30vh;
        font-size: 1.4rem;
        margin-top: 100px;
        width: 30%;
    }

    .card div:hover {
        box-shadow: 5px 10px 10px black;
        scale: 1.1;
    }

    .card a {
        color: antiquewhite;
    }

    .card img {
        width: 40px;
    }

    a {
        text-decoration: none;
    }

    .title {
        color: antiquewhite;
        font-weight: 300;
        font-size: 35px;
        margin-top: -27vh;
        margin-bottom: -20px;
        text-align: center;
    }

    .students {
        display: flex;
        margin-left: 18%;
    }

    .undergraduate {
        /* background-color: #00004d;*/

        display: grid;
        grid-column: auto auto auto;
    }

    .undergraduate h1 {
        text-align: center;
        color: antiquewhite;
    }

    table th {
        color: #00004d;
        font-size: 30px;

        margin-bottom: 70px;
    }



    table td {
        color: black;
        font-size: 25px;
        margin-left: 70%;
        margin-bottom: 30px;
    }

    .post th {
        margin-left: 90px;
    }

    .search {
        width: 1290px;
        height: 38px;
        margin-left: 5%;
        color: black;
        font-size: 20px;
        font-weight: bolder;
    }

    @keyframes bounce {
        0% {
            transform: translateY(-40px);
        }

        50% {
            transform: translateY(0);
        }

        100% {
            transform: translateY(-40px);
        }
    }

    .w3-animate-bounce {
        animation: bounce 1.5s infinite;
    }

    .link {
        background-color: #65000b;
        color: antiquewhite;
        text-align: center;
        font-size: 25px;
    }

    .under {
        display: flex;
        margin: 23px;
        border: 1px solid #808080;
        box-shadow: 5px 10px 10px #808080;
        background-color: #00004d;
        color: white;
    }

    .under img {
        width: 100vh;
        height: 50vh;
        margin-bottom: 30px;
        margin: 10px;


    }

    .under div {
        margin-left: 20px;
    }

    .under h3 {
        font-size: 23px;
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

    .description {
        font-size: 27px;
        display: block;
        line-break: break-all;
        padding: 30px;

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
    <img src="./uniimagge/pexels-charlotte-may-5965686.jpg" style="width:213vh;height:100vh;">;

    <div>

        <div class="card">


            <?php
                include'./connection.php';
                $sql = $a->prepare("SELECT * FROM category");
                $sql->execute();
                 while ($row = $sql->fetch(PDO::FETCH_ASSOC)) {
                extract($row)
               
                ?>
            <div class="container w3-container w3-center w3-animate-bounce">
                <a href="#<?php echo $cat_id?>"><img src="./uniimagge/<?php echo $cat_image; ?>"
                        style="width:230px;height:200px;margin-bottom:20px;border-radius:5px;"><br><?php echo $cat_name?><br>Program</a>
            </div>
            <?php }?>







        </div>
        <div class="students">
            <div>
                <a href="" style="margin-left:150px;margin-top:80px;"><img src="./uniimagge/studying (1).png"
                        style="width:90px;height:90px;margin-top:60px;color: #00004d;">
                    <div style="margin-left:150px;margin-top:1px;color: #00004d;font-size:20px;"><br>Undergraduate
                        Study<br>8000 IT
                        Students</div>


                </a>
            </div>
            <div>
                <a href="" style="margin-left:200px;margin-top:80px;"><img src="./uniimagge/graduation-hat.png"
                        style="width:90px;height:90px;margin-top:60px;color: #00004d;">
                    <div style="margin-left:190px;margin-top:1px;color: #00004d;font-size:20px;"><br>Graduate
                        Study<br>4000 IT Students
                    </div>


                </a>
            </div>
            <div>
                <a href="" style="margin-left:190px;margin-top:80px;"><img src="./uniimagge/work-in-progress (1).png"
                        style="width:90px;height:90px;margin-top:60px;color: #00004d;">
                    <div style="margin-left:190px;margin-top:1px;color: #00004d;font-size:20px;"><br>In IT
                        Progress<br>4500 IT Students
                    </div>


                </a>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <form action="./courses.php" method="post">
        <input type="text" placeholder="Enter course name to search" name="search" class="search">
        <button type="submit"><a href="#ssearch" style="text-decoration:none;"><i class="fa fa-search"
                    style="font-size:24px;color:black;padding:5px;border-radius:10px;"></i></a></button>
    </form>
    <br>
    <br>
    <div class="undergraduate">
        <?php
        include'./connection.php';
        $sql = $a->prepare("SELECT * FROM category");
        $sql->execute();
         while ($row = $sql->fetch(PDO::FETCH_ASSOC)) {
        extract($row)
      
        ?>
        <h1 style="color:#194569;border-bottom:2px solid #194569;margin-left:190px;margin-right:100px;">
            <?php echo $cat_name?> Program</h1><br><br>
        <div class="under">
            <img src="./uniimagge/<?php echo $cat_imagetwo; ?>">
            <div class="description">
                <?php echo $cat_description;?>
            </div>
        </div>
        <br><br>
        <div
            style="color:#65000b; text-align:left;border-bottom:1px dashed #65000b;margin-left:3%;font-size:30px;font-weight:bold;">
            Course Name</div>

        <br><br>

        <?php 

            
        include 'connection.php';
           if(isset($_POST['search'])){            
        $username = $_POST['search']; 
            $sql2 = $a->prepare("SELECT * FROM course WHERE cat_id='$cat_id' AND course_name LIKE '%$username%'" );
 
            $sql2->execute();
        }
        else{
              $sql2 = $a->prepare("SELECT * FROM course WHERE cat_id='$cat_id'");
            $sql2->execute();
        }

        while ($result = $sql2->fetch(PDO::FETCH_ASSOC)) {
        extract($result);
     
        ?>

        <input type="hidden" name="ID" value=" <?php echo $course_id;?>">
        <form method="post" action="coursedetail.php">
            <table>
                <tr>
                    <td style="margin-bottom:30px;">

                        <a href="./coursedetail.php?deid=<?php echo $course_id;?>"
                            style="margin-left:100px;color:black;text-decoration:underline; "><?php echo $course_name?>
                    </td>
                </tr>
            </table>
            <br><br>


            </a>
            <input type="hidden" name="name" value="<?php echo $course_name;?>">
        </form>
        <?php }?>

        <?php } ?>
    </div>
    <!-- Remove the container if you want to extend the Footer to full width. -->
    <div>

    </div>
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
</div>
<!------>