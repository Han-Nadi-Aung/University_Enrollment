<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--GOOGLE FONTS-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Play&display=swap" rel="stylesheet">
    <title>Document</title>
    <style>
    body {
        margin: 0;
        padding: 0;
        overflow-x: hidden;
        scroll-behavior: smooth;
    }

    a {
        text-decoration: none;
    }

    navigation {
        display: flex;
        width: 600vh;
        color: antiquewhite;
        height: 80px;
        position: fixed;
        font-size: 25px;
        background-color: #00004d;
        z-index: 100;
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
        margin-top: 10vh;
        font-size: 20px;
        margin-left: 20%;


    }

    .wave1 {
        margin-top: -10px;
    }

    .wave2 {
        margin-bottom: -10px;
    }

    .title {
        color: #A22334;
        font-weight: 300;
        font-size: 40px;
        margin-top: -30vh;
        margin-bottom: -20px;
        text-align: center;
        border-bottom: 2px solid #A22334;
        margin-left: 250px;
        margin-right: 250px;
    }

    .card {
        display: flex;

        display: grid;
        grid-template-columns: auto auto;

    }

    .card div {
        border: 1px solid #00004d;
        background-color: #00004d;
        border-radius: 5px;
        padding: 10px;
        text-align: center;
        color: antiquewhite;
        box-shadow: 5px 5px 5px grey;
        margin-bottom: 10px;
        margin-left: 30px;
        margin-right: -192vh;
        font-size: 25px;
        grid-column-gap: 10px;
        width: 300px;
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
        margin-right: 10px;
    }

    .titletwo,
    .fields {
        color: #A22334;
        font-weight: 500;
        font-size: 35px;
        margin-bottom: -20px;
        text-align: center;
        margin-top: 50px;
        border-bottom: 2px solid #A22334;
        margin-left: 250px;
        margin-right: 250px;
    }

    .global img {
        width: 60px;
        height: 60px;
        margin-top: 10vh;
        margin-left: 120px;
    }

    .global {
        display: grid;
        grid-template-columns: auto auto auto auto;
        font-size: 25px;
    }

    .global p {
        margin-left: -100px;
    }

    .wave2 {
        margin-top: -100px;
    }

    .principle {
        background-color: #65000b;
        width: 214vh;
        height: 260vh;
    }

    .principle img {
        width: 280px;
        height: 220px;
        border-radius: 5px;
        margin-top: 20px;
        margin-left: 100px;
        box-shadow: 5px 10px 15px black;
    }

    .principle {
        margin-top: -50px;
    }

    .principle h1 {
        color: antiquewhite;
        margin-left: 25%;
    }

    .prin {
        display: flex;
    }

    .tec {
        margin-left: 50%;
        color: antiquewhite;
        margin-top: 40px;
    }

    .and {
        border: 2px solid antiquewhite;
        background-color: antiquewhite;
        width: 50px;
        padding: 30px;
        border-radius: 4px;
        color: #65000b;
    }

    .wave3 {
        margin-top: -20px;
    }

    .ddiv {
        background-color: #00004d;
        height: 180px;
        margin-top: -320px;
    }

    .acti {
        background-color: #00004d;
        height: 190vh;
    }

    .acc {
        text-align: center;
        margin-top: -20px;
        color: antiquewhite;
        font-size: 40px;
        margin-bottom: 80px;
    }

    .actides {
        display: flex;
        margin-bottom: 30px;
        margin-left: 25px;
    }

    .actides img {
        border-radius: 10px;
    }

    .actides p {
        color: azure;
        margin-left: 20px;
        margin-right: 20px;
        font-size: 20px;
    }

    .phoact {
        display: grid;
        grid-template-columns: auto auto auto auto;
    }

    .phocc {
        border-radius: 10px;
        box-shadow: 2px 5px 5px 5px grey;
        width: 340px;
        margin-left: 20px;
        background-color: antiquewhite;
    }

    .phocc img {
        margin-left: 23px;
        margin-top: 15px;
        border-radius: 10px;
    }

    .phocc p {
        text-align: center;
        color: #194569;
        font-size: 23px;
    }

    .teach h2 {
        color: #194569;
        font-size: 40px;
        text-align: center;
        margin-top: -90px;
        margin-bottom: 90px;
    }

    .tech {
        display: grid;
        grid-template-columns: auto auto auto auto;
        margin-left: 36px;
    }

    .tech img {
        width: 300px;
        height: 300px;
        margin-left: 30px;
        border-radius: 8px;
        margin-bottom: 50px;
    }

    .ssvg {
        margin-top: -10px;
        height: 140px;
        background-color: #00004d;
        display: flex;
        column-gap: 10%;
    }

    .ssvg img {
        margin-left: 720%;
    }

    .container {
        position: relative;
        width: 79.59%;
    }

    .container img {
        box-shadow: 20px 15px 15px grey;
    }

    .image {
        display: block;
        width: 100%;
        height: auto;
    }

    .overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background-color: #194569;
        overflow: hidden;
        width: 100%;
        height: 0;
        transition: .5s ease;
        margin-left: 25px;
        margin-bottom: 50px;
    }

    .container:hover .overlay {
        height: 86%;
        border-radius: 10px;
        margin-left: 30px;
        width: 104%;
    }

    .text {
        color: white;
        font-size: 20px;
        position: absolute;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        text-align: center;
    }

    .link {
        background-color: #65000b;
        color: antiquewhite;
        text-align: center;
        font-size: 25px;
    }

    footer {
        background-color: #194569;
        padding: 20px;
        color: #fff;
        text-align: center;
    }

    .link {
        background-color: #65000b;
        color: antiquewhite;
        text-align: center;
        font-size: 25px;
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
    <img src="./uniimagge/vadim-sherbakov-d6ebY-faOO0-unsplash (1).jpg" style="width:217vh;height:100vh;">
    <div class="wave1">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#65000b" fill-opacity="1"
                d="M0,64L48,58.7C96,53,192,43,288,48C384,53,480,75,576,74.7C672,75,768,53,864,42.7C960,32,1056,32,1152,58.7C1248,85,1344,139,1392,165.3L1440,192L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z">
            </path>
        </svg>
    </div>
    <p class="title">Academic Programs</p>


    <div>
        <div class="card">
            <?php
            include'./connection.php';
            $sql = $a->prepare("SELECT * FROM category");
            $sql->execute();
             while ($row = $sql->fetch(PDO::FETCH_ASSOC)) {
            extract($row)?>

            <div>

                <a href="courses.php">
                    <img src="./uniimagge/<?php echo $cat_iconn; ?>">
                    <?php echo $cat_name; ?> Study
                </a>


            </div>
            <?php
        }
            ?>

        </div>
    </div>
    <p class="titletwo"> Global Engagement and Impact</p>
    <div class="global">
        <div class="totwo">
            <img src="./uniimagge/success.png">
            <p style="margin-left:80px;   color: #194569;">
                Best Value School
            </p>
        </div>
        <div class="tothree">
            <img src="./uniimagge/team.png">
            <p style="margin-left:70px;   color: #194569;">
                40 International partnerships
            </p>
        </div>
        <div class="tothree">
            <img src="./uniimagge/students.png">
            <p style="margin-left:90px;   color: #194569;">
                over 16500 students
            </p>
        </div>
        <div class="tothree">
            <img src="./uniimagge/teacher.png">
            <p style="margin-left:70px;   color: #194569;">
                Proudly Educating for 30 Years
            </p>
        </div>
    </div>


    <div class="fields">Our Students Thrive in the World's Leading Industries</div>
    <div class="global">

        <div class="tothree">
            <img src="./uniimagge/732221.png">
            <p style="margin-left:90px;   color: #194569;">
                Microsoft Company
            </p>
        </div>
        <div class="tothree">
            <img src="./uniimagge/apple-logo-transparent.png">
            <p style="margin-left:90px;   color: #194569;">
                Apple Company
            </p>
        </div>
        <div class="tothree">
            <img src="./uniimagge/GOOG-0ed88f7c.png">
            <p style="margin-left:90px;   color: #194569;">
                Google Company
            </p>
        </div>
        <div class="tothree">
            <img src="./uniimagge/unitedhealthcare-emblem.png">
            <p style="margin-left:90px;   color: #194569;">
                UnitedHealth Group
            </p>
        </div>
        <div class="tothree">
            <img src="./uniimagge/amazon-logo-transparent.png">
            <p style="margin-left:120px;   color: #194569;">
                Amazon
            </p>
        </div>
        <div class="tothree">
            <img src="./uniimagge/58429073a6515b1e0ad75abc.png"
                style="width:80px;height:80px;margin-top:30px;margin-left:110px;">
            <p style="margin-left:119px;   color: #194569;">
                Walmart
            </p>
        </div>
    </div>
    <div class="wave2">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#65000b" fill-opacity="1"
                d="M0,96L26.7,96C53.3,96,107,96,160,117.3C213.3,139,267,181,320,170.7C373.3,160,427,96,480,96C533.3,96,587,160,640,154.7C693.3,149,747,75,800,58.7C853.3,43,907,85,960,122.7C1013.3,160,1067,192,1120,208C1173.3,224,1227,224,1280,213.3C1333.3,203,1387,181,1413,170.7L1440,160L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z">
            </path>
        </svg>
    </div>
    <div class="principle">
        <h1 style="margin-left:35%;">Meet our University Leadership Team</h1>
        <div class="prin">
            <img src="./uniimagge/headmaster-compressed-punt.jpg" style="width:300px;margin-left:120px;">
            <div style="margin-left:30px;margin-right:20px;margin-top:40px;">
                <h2 style="margin-left:40px;color:antiquewhite; font-size:28px;">Principle</h2>
                <p style="color:azure; font-size:22px;margin-left:23px;"> I am Mr. William and I am honored to serve as
                    the Principal of this prestigious university. With a PhD in Education and over 25 years of
                    experience in academia, I am committed to providing our students with an exceptional educational
                    experience.
                    My focus is on creating a supportive and inclusive learning environment that fosters academic
                    excellence, personal growth, and professional development. There are 98 teachers.I look forward to
                    working with you and welcome you to our
                    university community.</p>
            </div>
        </div>
        <div>
            <div class="prin">
                <img src="./uniimagge/HeadmastersWelcome_CeriJones.jpg">
                <div style="margin-left:30px;margin-right:20px;margin-top:40px;">
                    <h2 style="margin-left:40px;color:antiquewhite; font-size:28px;">Director </h2>
                    <p style="color:azure;font-size:22px;margin-left:23px;"> Hello! I am Dr. Philip and I am honored to
                        serve as the Director of the IT Department at this esteemed university. With a Doctoral degree
                        in Computer Science and over 25 years of experience leading high-performing IT teams, I am
                        dedicated
                        to ensuring that our university stays at the forefront of technology innovation. I am passionate
                        about leveraging technology to enhance the student experience and drive operational efficiency,
                        and I am committed to delivering world-class
                        IT services and support to our university community. I look forward to collaborating with you to
                        help achieve our shared goals.</p>
                </div>
            </div>
        </div>
        <div class="prin">
            <img src="./uniimagge/d59b478c663a9a9ecfaac4cedb6a4939.jpg" style="width:300px;margin-left:120px;">
            <div style="margin-left:30px;margin-right:20px;margin-top:40px;">
                <h2 style="margin-left:40px;color:antiquewhite;font-size:28px;">The Head of Teaching Department </h2>
                <p style="color:azure;font-size:22px;margin-left:23px;">Hello, my name is Ms. George and I am the Head
                    of Teaching Department at Noble University. With a doctoral level of expertise in teaching, I am
                    passionate about providing students with the highest quality education in information technology.
                    At Noble University, we believe in accessible education for all, and offer a range of programs and
                    resources to meet the unique needs of each student. I am honored to be a part of the faculty here
                    and look forward to helping our students
                    achieve their academic goals. Thank you for considering Noble University for your education.</p>
            </div>
        </div>
        <div class="prin">
            <img src="./uniimagge/d8094cb800a9c258830c54d49e67ca58.jpg" style="width:300px;margin-left:120px;">
            <div style="margin-left:30px;margin-right:20px;margin-top:40px;">
                <h2 style="margin-left:40px;color:antiquewhite;font-size:28px;">The Head of International Student
                    Department </h2>
                <p style="color:azure;font-size:22px;margin-left:23px;">Greetings! I am Ms. Emma, the Head of
                    International Student Department at Noble University, a leading institution for IT education. As an
                    expert in international education, I am dedicated to helping our international students succeed in
                    their academic pursuits. My team and I are committed to providing a diverse and inclusive learning
                    environment for all students at Noble University.</p>
            </div>
        </div>
        <div class="prin">
            <img src="./uniimagge/6659447cf3bc92428f506f97ee21f4be.jpg" style="width:300px;margin-left:110px;">
            <div style="margin-left:30px;margin-right:20px;margin-top:40px;">
                <h2 style="margin-left:40px;color:antiquewhite;font-size:28px;">The Head of Local Student Department
                </h2>
                <p style="color:azure;font-size:22px;margin-left:23px;"> Hello, I am Ms. Lucy, the Head of Local Student
                    Department at Noble University- a premier institution for IT education. With years of experience in
                    student affairs, I am committed to providing our local students with the support and resources
                    they need to succeed in their studies. At Noble University, we believe in fostering a sense of
                    community and collaboration among our students. I look forward to working with our local students to
                    help them achieve their academic and
                    career goals</p>
            </div>
        </div>
        <div class="prin">
            <img src="./uniimagge/385553261f720f6e9bbd81cd1c9ed046.jpg" style="width:300px;margin-left:120px;">
            <div style="margin-left:30px;margin-right:20px;margin-top:40px;">
                <h2 style="margin-left:40px;color:antiquewhite;font-size:28px;">The Head of Finance Department </h2>
                <p style="color:azure;font-size:22px;margin-left:23px;">Hello, I am Ms. Gianna, the Head of Finance
                    Department at Noble University a leading institution for IT education. With my expertise in finance
                    and accounting, I am committed to ensuring the financial health and stability of our university.
                    At Noble University, we believe in making education accessible and affordable for all students. I
                    look forward to working with our team to manage the university's finances and support our students'
                    academic pursuits. </p>
            </div>
        </div>
        <div class="prin">
            <img src="./uniimagge/6ea9d3a86db7a28dce962115aaf815db.jpg" style="width:500px;margin-left:113px;">
            <div style="margin-left:30px;margin-right:20px;margin-top:40px;">
                <h2 style="margin-left:40px;color:antiquewhite;font-size:28px;">The Head of Technical Repairing
                    Department </h2>
                <p style="color:azure;font-size:22px;margin-left:23px;">Hello, I am Mr. Lucas, the Head of Technical
                    Repairing Department at Noble University a leading institution for IT education. With my expertise
                    in technical repair and maintenance, I am committed to ensuring that our university's IT
                    infrastructure
                    runs smoothly and efficiently. At Noble University, we believe in providing state-of-the-art
                    technology and equipment for our students' academic success. I look forward to working with our team
                    to provide reliable technical support
                    and ensure that our students have access to the latest technology.</p>
            </div>
        </div>

    </div>
    <div class="wave3">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#65000b" fill-opacity="1"
                d="M0,160L26.7,170.7C53.3,181,107,203,160,192C213.3,181,267,139,320,122.7C373.3,107,427,117,480,138.7C533.3,160,587,192,640,176C693.3,160,747,96,800,69.3C853.3,43,907,53,960,96C1013.3,139,1067,213,1120,240C1173.3,267,1227,245,1280,208C1333.3,171,1387,117,1413,90.7L1440,64L1440,0L1413.3,0C1386.7,0,1333,0,1280,0C1226.7,0,1173,0,1120,0C1066.7,0,1013,0,960,0C906.7,0,853,0,800,0C746.7,0,693,0,640,0C586.7,0,533,0,480,0C426.7,0,373,0,320,0C266.7,0,213,0,160,0C106.7,0,53,0,27,0L0,0Z">
            </path>
        </svg>
    </div>
    <div class="ddiv"></div>
    <div class="acti">



        <h1 class="acc">Our Activities</h1>
        <div>
            <div class="actides">
                <img src="./uniimagge/meeting-developers.jpg" style="width:250px;height:190px;">
                <p>At our university, we believe in providing our students with cutting-edge technology and innovative
                    learning experiences. That's why we offer a range of activities related to Artificial Intelligence
                    (AI) to our students. Our AI activities
                    include hands-on workshops, hackathons, and projects that give students the opportunity to apply AI
                    concepts and techniques to real-world problems. Through our AI activities, students have the chance
                    to work with our faculty and industry
                    experts who are actively involved in AI research and development.Our commitment to providing AI
                    education and opportunities for our students ensures that they are well-equipped to enter the
                    ever-growing field of AI and make an impact
                    in the world.</p>
            </div>
        </div>
        <div>
            <div class="actides">
                <img src="./uniimagge/382611ac85453302fe9d94dfa3193b01.jpg" style="width:250px;height:190px;">
                <p>As part of our commitment to providing our students with holistic and memorable experiences, we offer
                    a camp trip to the countryside. This activity is designed to give our students a break from the
                    rigors of academic life and provide an
                    opportunity to connect with nature and each other.During the camp trip, students are grouped
                    together and assigned camping gear for their stay. They will engage in a range of outdoor
                    activities, including hiking, bird watching, stargazing,
                    and bonfires.Overall, the camp trip in the countryside is an enriching and rewarding experience for
                    our students, one that they will remember for years to come.</p>
            </div>
        </div>
        <div>
            <div class="actides">
                <img src="./uniimagge/a486b9ad791a66c4cdf7345514c989cc.jpg" style="width:290px;height:190px;">
                <p>As part of our commitment to promoting physical fitness and a healthy lifestyle, we offer volleyball
                    as one of the activities for our university students. Volleyball is a fun and engaging team sport
                    that is enjoyed by people of all ages
                    and skill levels.Our university's volleyball program provides students with the opportunity to learn
                    and improve their skills through regular practices and games.We encourage participation from all
                    students, regardless of their previous
                    experience in volleyball.Overall, our university's volleyball program is a fantastic way for
                    students to engage in physical activity and build lasting friendships, all while having fun and
                    improving their skills.</p>
            </div>
        </div>
        <div>
            <div class="actides">
                <img src="./uniimagge/1496c7994e2c75ac329549f0a4d8ed3b.jpg" style="width:250px;height:190px;">
                <p>Our university's IT lab room is a state-of-the-art facility designed to provide our students with
                    hands-on experience in the field of information technology. Equipped with the latest technical
                    devices, such as high-performance computers
                    and specialized software, the lab is the perfect environment for students to learn and develop their
                    IT skills.Our university's IT lab room is available to students throughout the academic year,
                    providing a flexible and convenient
                    environment for students to complete coursework and engage in self-directed learning. Overall, the
                    IT lab room is an essential resource for our students pursuing a career in the field of information
                    technology.</p>
            </div>
        </div>
        <div class="phoact">
            <div class="phocc">
                <img src="./uniimagge/025d97501088d4669a732a21ddbfb08b.jpg" style="width:300px; height:300px;">
                <p>Study Room</p>
            </div>
            <div class="phocc">
                <img src="./uniimagge/f764efd25380be250833c429b07165b3.jpg" style="width:300px; height:300px;">
                <p>AI Lab Room</p>
            </div>
            <div class="phocc">
                <img src="./uniimagge/88643c5ea4b9ec8035fff53b0efc3d7d.jpg" style="width:300px; height:300px;">
                <p>Conference Hall</p>
            </div>
            <div class="phocc">


                <img src="./uniimagge/ccdbdb2157056b7c75603a0305b859f0.jpg" style="width:300px; height:300px;">
                <p>Canteen</p>
            </div>



        </div>
    </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#00004d" fill-opacity="1"
            d="M0,128L30,112C60,96,120,64,180,58.7C240,53,300,75,360,106.7C420,139,480,181,540,170.7C600,160,660,96,720,96C780,96,840,160,900,160C960,160,1020,96,1080,90.7C1140,85,1200,139,1260,149.3C1320,160,1380,128,1410,112L1440,96L1440,0L1410,0C1380,0,1320,0,1260,0C1200,0,1140,0,1080,0C1020,0,960,0,900,0C840,0,780,0,720,0C660,0,600,0,540,0C480,0,420,0,360,0C300,0,240,0,180,0C120,0,60,0,30,0L0,0Z">
        </path>
    </svg>
    <div class="teach">
        <h2>What do we teach?</h2>
        <div class="tech">
            <div class="container">
                <img src="./uniimagge/8c0ba1b65dfa5e2880e7cf279952283c.jpg" alt="Avatar" class="image">
                <div class="overlay">
                    <div class="text">Attending a university program in AI can equip you with the knowledge and skills
                        needed to succeed in a highly competitive and rapidly growing field.</div>
                </div>
            </div>

            <div class="container">
                <img src="./uniimagge/48991f90e9a0eed6f972f7c310bdd3e0.jpg" alt="Avatar" class="image">
                <div class="overlay">
                    <div class="text">A game development program provides practical skills, hands-on experience, and a
                        dynamic creative environment to learn from experienced faculty and peers.</div>
                </div>
            </div>
            <div class="container">
                <img src="./uniimagge/5070f9e7af565d1d16a3edfd7f53cd1e.jpg" alt="Avatar" class="image">
                <div class="overlay">
                    <div class="text" Hello World>Coding provides practical skills, theoretical knowledge, and
                        real-world project experience needed to succeed in the tech industry and gain a competitive edge
                        in the job market.</div>
                </div>
            </div>
            <div class="container">
                <img src="./uniimagge/aaf35943769319700680eb574f32670f.jpg" alt="Avatar" class="image">
                <div class="overlay">
                    <div class="text">A data analytics in university program offers practical skills, theoretical
                        knowledge, and real-world project experience needed to make informed business decisions and gain
                        a competitive edge in the job market.</div>
                </div>
            </div>
            <div class="container">
                <img src="./uniimagge/e635c1e8d80999c3ad87576d4bfc0032 (1).jpg" alt="Avatar" class="image">
                <div class="overlay">
                    <div class="text">Big data provides practical skills, theoretical knowledge, and real-world project
                        experience needed to analyze large data sets and gain a competitive edge in data-driven
                        industries.</div>
                </div>
            </div>
            <div class="container">
                <img src="./uniimagge/3f2ee171d7b29ffc6c21124bc4bbdc68.jpg" alt="Avatar" class="image">
                <div class="overlay">
                    <div class="text">Cyber security program offers practical skills, theoretical knowledge, and
                        real-world project experience needed to secure computer systems.</div>
                </div>
            </div>

            <div class="container">
                <img src="./uniimagge/30efc36f5fb7b128b7d9acadec411f18.jpg" alt="Avatar" class="image">
                <div class="overlay">
                    <div class="text">A university program in UI/UX offers practical skills, theoretical knowledge, and
                        real-world project experience needed to design user-friendly interfaces.</div>
                </div>
            </div>
            <div class="container">

                <img src="./uniimagge/31c8f893dd1e4cdedc365d4339a25b02.jpg" alt="Avatar" class="image">
                <div class="overlay">
                    <div class="text">Our university's Bitcoin learning offer cutting-edge education in blockchain and
                        cryptocurrency, providing students with the skills and knowledge needed to succeed in this
                        rapidly evolving industry. </div>
                </div>
            </div>

        </div>
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