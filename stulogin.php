<!DOCTYPE html>
<html>
<?php 
session_start();
include "./connection.php";

if (isset($_GET['eid'])) {
    $oo = $_GET['eid'];
    $_SESSION['encourse'] = $oo;
}

?>


<head>
    <title>Slide Navbar</title>
    <link rel="stylesheet" type="text/css" href="slide navbar style.css">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">

</head>
<style>
body {
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    font-family: 'Jost', sans-serif;
    background: linear-gradient(to bottom, #004499, #1f3879, #00004d);
    background-image: url("./uniimagge/vadim-sherbakov-d6ebY-faOO0-unspaalash.jpg");
    background-repeat: no-repeat;
    background-size: 300vh 100vh;
    width: 100vh;
    height: 100vh;
}

.main {
    width: 350px;
    height: 500px;
    background: red;
    overflow: hidden;
    background: url("https://doc-08-2c-docs.googleusercontent.com/docs/securesc/68c90smiglihng9534mvqmq1946dmis5/fo0picsp1nhiucmc0l25s29respgpr4j/1631524275000/03522360960922298374/03522360960922298374/1Sx0jhdpEpnNIydS4rnN4kHSJtU1EyWka?e=view&authuser=0&nonce=gcrocepgbb17m&user=03522360960922298374&hash=tfhgbs86ka6divo3llbvp93mg4csvb38") no-repeat center/ cover;
    border-radius: 10px;
    box-shadow: 5px 20px 50px #000;
    background-color: rgba(255, 255, 255, 0.13);
    border: 2px solid rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(8px);
}

#chk {
    display: none;
}

.signup {
    position: relative;
    width: 100%;
    height: 100%;
    color: #194569;
}

label {
    color: #194569;
    font-size: 2.3em;
    justify-content: center;
    display: flex;
    margin: 60px;
    font-weight: bold;
    cursor: pointer;
    transition: .5s ease-in-out;
}

input {
    width: 60%;
    height: 20px;
    background: #e0dede;
    justify-content: center;
    display: flex;
    margin: 20px auto;
    padding: 10px;
    border: none;
    outline: none;
    border-radius: 5px;
}

button {
    width: 60%;
    height: 40px;
    margin: 10px auto;
    justify-content: center;
    display: block;
    color: #fff;
    background: #00004d;
    font-size: 1em;
    font-weight: bold;
    margin-top: 20px;
    outline: none;
    border: none;
    border-radius: 5px;
    transition: .2s ease-in;
    cursor: pointer;
}

button:hover {
    background: #00004d;
}

.login {
    height: 460px;
    background: #eee;
    border-radius: 60% / 10%;
    transform: translateY(-180px);
    transition: .8s ease-in-out;
}

.login label {
    color: #194569;
    transform: scale(.6);
}

#chk:checked~.login {
    transform: translateY(-500px);
}

#chk:checked~.login label {
    transform: scale(1);
}

#chk:checked~.signup label {
    transform: scale(.6);
}

.submit {
    height: 40px;
}

.old {
    margin-left: 100px;
}
</style>

<body>
    <div class="main">
        <input type="checkbox" id="chk" aria-hidden="true">

        <div class="signup">
            <form action="./stulogin.php" method="POST">
                <label for="chk" aria-hidden="true">Sign up</label>

                <input type="text" name="cname" placeholder="User name" required="">
                <input type="email" name="cemail" placeholder="Email" required="">
                <input type="password" name="cpwd" placeholder="Password" required="">

                <input type="submit" name="submitt" class="submit">
            </form>
        </div>

        <div class="login" id="login-section">
            <form action="./chkstulogin.php" method="POST">

                <label for="chk" aria-hidden="true">Login</label>
                <input type="text" name="cidd" placeholder="Name" required="">
                <input type="password" name="cpwdd" placeholder="Password" required="">
                <input type="submit" name="Login" class="submit">
            </form>
        </div>

    </div>
    <?php

      include './connection.php';
      $sql = "INSERT INTO student_information(Sname, Spwd,Semail)
            VALUES(?, ?,?)";
    $sq = $a->prepare($sql);
    if (isset($_POST['submitt'])) {
        $name = $_POST['cname'];
        $pwdd = $_POST['cpwd'];
        $pwd = password_hash($pwdd, PASSWORD_BCRYPT);
        $email = $_POST['cemail'];
       
         if ($sq->execute(array($name,$pwd,$email))) {
             echo '<script>window.location.href = "#login-section";</script>';

        }
     
    }
    ?>
</body>

</html>