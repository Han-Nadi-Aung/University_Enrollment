<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Design by foolishdeveloper.com -->
    <title>Glassmorphism login Form Tutorial in html css</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <!--Stylesheet-->
    <style media="screen">
    *,
    *:before,
    *:after {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    body {
        background-color: #080710;
        background-image: url("./uniimagge/vadim-sherbakov-d6ebY-faOO0-unspaalash.jpg");
        background-repeat: no-repeat;
        background-size: 200vh 100vh;
        width: 100vh;
        height: 100vh;
    }

    .background {
        width: 430px;
        height: 520px;
        position: absolute;
        transform: translate(-50%, -50%);
        left: 50%;
        top: 50%;
    }

    .background .shape {
        height: 200px;
        width: 200px;
        position: absolute;
        border-radius: 50%;
    }

    .shape:first-child {

        left: -80px;
        top: -80px;
    }

    .shape:last-child {

        right: -30px;
        bottom: -80px;
    }

    form {
        height: 550px;
        width: 400px;
        background-color: rgba(255, 255, 255, 0.13);
        position: absolute;
        transform: translate(-50%, -50%);
        top: 50%;
        left: 50%;
        border-radius: 10px;
        backdrop-filter: blur(10px);
        border: 2px solid rgba(255, 255, 255, 0.1);
        box-shadow: 0 0 40px rgba(8, 7, 16, 0.6);
        padding: 50px 35px;
    }

    form * {
        font-family: 'Poppins', sans-serif;
        color: #194569;
        letter-spacing: 0.5px;
        outline: none;
        border: none;
    }

    form h3 {
        font-size: 32px;
        font-weight: 500;
        line-height: 42px;
        text-align: center;
    }

    label {
        display: block;
        margin-top: 30px;
        font-size: 16px;
        font-weight: 500;
    }

    input {
        display: block;
        height: 50px;
        width: 100%;
        background-color: rgba(255, 255, 255, 0.07);
        color: black;
        border-radius: 3px;
        padding: 0 10px;
        margin-top: 8px;
        font-size: 14px;
        font-weight: bolder;
        border: 3px solid black;
    }

    ::placeholder {
        color: #e5e5e5;
    }

    button {
        margin-top: 50px;
        width: 100%;
        background-color: #ffffff;
        color: #080710;
        padding: 15px 0;
        font-size: 18px;
        font-weight: 600;
        border-radius: 5px;
        cursor: pointer;
    }

    .submit:hover {
        background-color: white;
        color: #194569;
        border-radius: 15px;
        width: 300px;
        margin-left: 15px;
    }
    </style>
</head>

<body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form action="" method="POST">
        <h3>Login Here</h3>

        <label for="username">Username</label>
        <input type="text" name="cidd" placeholder="Name" required="">

        <label for="password">Password</label>
        <input type="password" name="cpwdd" placeholder="Password" required="">
        <label for="password">Email</label>
        <input type="email" name="cemaill" placeholder="Email" required="">
        <input type="submit" name="submitt" class="submit">

    </form>
    <?php
    session_start();
    include './connection.php';
      if (isset($_POST['submitt'])) {
    $name = $_POST['cidd'];
    $password = $_POST['cpwdd'];
    $email = $_POST['cemaill'];

    $sql = $a->prepare("SELECT * FROM admin WHERE admin_name=:name AND admin_pwd=:password AND admin_gmail=:email");
    $sql->bindParam(':name', $name);
    $sql->bindParam(':password', $password);
    $sql->bindParam(':email', $email);
    $sql->execute();

    if ($row = $sql->fetch(PDO::FETCH_ASSOC)) {
        $_SESSION['u'] = $row['admin_name'];
      
           header("Location:insertcategory.php");
    } else {
           header("Location:loginadmin.php");
    }
}
    ?>
</body>

</html>