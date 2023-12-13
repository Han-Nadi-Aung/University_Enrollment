<!DOCTYPE html>
<html lang="en">
<?php
session_start();

?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
@import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Roboto+Slab:wght@100;400&display=swap');

.table {

    width: 107%;
    text-align: center;
    border-collapse: collapse;
    border: 1px solid black;
    margin-left: 10px;
    border-top: 2px solid #194569;

    margin-top: 80px;


}

table {
    font-family: 'Open Sans', sans-serif;
    font-family: 'Roboto Condensed', sans-serif;
    font-family: 'Roboto Slab', serif;

    width: 100%;
    text-align: center;
    border-collapse: collapse;
    border: 1px solid black;
    font-size: 10px;
    column-width: 10px;
    margin: 15px 60px;


}

* {
    font-size: 20px;
    font-family: 'Open Sans', sans-serif;
    font-family: 'Roboto Slab', serif;
}

body {
    margin: 0;
    padding: 0;
    background-color: #dadedf;
    overflow-x: hidden;
}

thead {
    background-color: #194569;
    color: white;


}

td {
    height: 10px;
    color: #194569;
    border-right: 2px solid #194569;
}

th {
    height: 50px;
    font-size: 20px;
    border-bottom: 3px solid #194569;
    border-right: 3px solid #194569;
    border-left: 3px solid #194569;
    border-top: 3px solid #194569;
}


input {
    width: 100%;
    height: 50px;
    text-align: center;
    color: #194569;

}

.btnn {
    color: antiquewhite;
    background-color: #194569;
    width: 20%;
    margin-left: 70%;
    margin-top: 1%;
    border-radius: 2px;
}

p {
    font-size: 50px;
    text-align: center;
    border-bottom: 2px solid #194569;
    color: #194569;
    margin-left: 80px;
    margin-right: 60px;
    margin-top: 30px;


}

.insert {

    color: green;
    font-size: 25px;
    margin-top: 5px;
    margin-bottom: 5px;

}

.insertt {
    margin-left: 40%;
}

.i {
    margin-left: 30px;

}


.submit:link,
.submit:visited {
    background-color: #adabae;
    color: chocolate;
    padding: 14px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    border-radius: 10px;
    font-size: 100%;




}

.submit:hover,
.submit:active {
    background-color: #a3c585;
    color: #F2E6DA;
}

.submit {
    margin-left: 50%;
    margin-top: 4%;
    padding: 14px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    width: 110px;
    border-radius: 10px;
    background-color: #dadedf;
    color: #282828;
    box-shadow: 4px 4px 5px grey;
    border: 0px transparent;
    font-weight: 10px;
    font-size: 100%;
    padding: 10px;



}

.submit:hover {
    background-color: #a3c585;
    color: #F2E6DA;
}

.view {
    margin-left: 8%;

}

.logout {
    margin-left: 10%;

}

.sp {
    font-size: 20px;
    font-family: 'Open Sans', sans-serif;
    font-family: 'Roboto Slab', serif;
}


input {
    background-color: #dadedf;
    border: transparent;
}

.i {
    width: 90%;
}

.price {
    margin-left: 70px;
}

.data {

    font-size: 30px;
    border-bottom: 2px solid #194569;

    margin-left: 80px;
    text-align: center;
    margin-top: 50px;
}

.admin {
    font-size: 30px;
    margin-left: 20px;
    margin-right: 18%;
    color: #194569;
}

.navtit {
    color: #194569;
    font-size: 20px;
    margin-right: 20px;
}

.admin:hover,
.navtit:hover {
    color: beige;
}

.card {
    background-color: #dadedf;

}

.container {
    color: #282828;
}

.texarea {
    background-color: #dadedf;
    color: #194569;
}

#cars {
    width: 100%;
    border: none;
    background-color: #dadedf;
}









.insert,
.logout {
    background-color: #194569;

    color: #eeeeee;
    padding: 14px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    border-radius: 10px;
    margin-left: 40%;
    margin-bottom: 30px;
}

.insert:hover {
    background-color: #688F4E;
}

.logout {
    margin-left: 200px;
}



body {
    margin: 0;
    padding: 0;
    width: 92%;

}



.admin {
    font-family: 'Open Sans', sans-serif;
    font-family: 'Roboto Condensed', sans-serif;
    font-family: 'Roboto Slab', serif;
    font-size: 30px;
    margin-left: 20px;
    margin-right: 20%;
    color: #194569;
}

.navtit {
    font-family: 'Open Sans', sans-serif;
    font-family: 'Roboto Condensed', sans-serif;
    font-family: 'Roboto Slab', serif;
    color: #eeeeee;
    background-color: #194569;
    font-size: 20px;
    margin-right: 30px;
}


nav {
    background-color: #194569;
    width: 202vh;
    height: 60px;
}

.navbar-nav {
    margin-left: 10%;
}

.admin:hover,
.navtit:hover {
    color: #194569;
    text-shadow: 2px 2px 2px black;
    scale: 1.2;
}

.admin {
    margin-left: 20px;
    color: #ccc;
    font-size: 20px;
}

.smallnav {
    background-color: black;
    font-size: 20px;
    width: 202vh;
}

.smallnav ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    display: flex;
    margin-left: 40%;
}

.smallnav li {
    display: inline;
}

.smallnav li a {
    color: white;
    text-decoration: none;
    padding: 10px 15px;
}

.smallnav li a:hover {
    background-color: #ccc;
}
</style>


<body>
    <div class="navigation">
        <nav class="navbar navbar-expand-lg ">

            <div class="admin">


                <div class="navv"> <a><i class="fa fa-user" aria-hidden="true"></i></a></div>
                <div class="namelogo">
                    <?php 
                if(isset($_SESSION['u'])){
                    $username=$_SESSION['u'];
                    echo $username;
                }
                     
        
                ?>
                </div>
            </div>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">

                    <li class="nav-item">
                        <a class="nav-link navtit" href="./insertcategory.php"> Insert Category </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link navtit" href="./viewcategory.php"> Category</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link navtit" href="./insert.php">Insert Courses<span class="sr-only"></span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link navtit" href="./viewcourseadm.php">Courses</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link navtit" href="./admlogout.php" style="color:red; "> Logout</a>
                    </li>
                </ul>

            </div>
        </nav>

    </div>
    <div class="smallnav" style="background-color: black;">
        <ul class="">
            <li class="">
                <a class="nav-link " href="./enrollstuadm.php">University Community</a>
            </li>
            <li class="">
                <a class="nav-link " href="./studentCount.php"> Reports</a>
            </li>
            <li class="">
                <a class="nav-link " href="./viewenroll.php"> Student History</a>
            </li>
        </ul>
    </div>
    <form action="./insert.php" method="post" enctype="multipart/form-data">
        <table class="table">
            <p style="color:#194569;">Inserting New Course</p>
            <thead>
                <tr>

                    <th>Course Role</th>
                    <th>Course credit</th>
                    <th>Course Name</th>
                    <th>Course intakes</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include'./connection.php';
                $sql = $a->prepare("SELECT DISTINCT c.cat_id, cat_name FROM category c, course s ");//joining f.k and p.k
                $sql->execute();
               
                ?>
                <tr>

                    <td>

                        <select id="cars" name="role">
                            <?php 
                         while ($row = $sql->fetch(PDO::FETCH_ASSOC)) {
                    extract($row); ?>


                            <option value="<?php echo $cat_id?>"><?php echo $cat_name?></option>


                            <?php  }?>
                        </select>
                    </td>
                    <td> <input type="text" name="credit"></td>
                    <td> <textarea name="name" class="texarea"></textarea></td>

                    <td> <input type="text" name="intake"></td>


                </tr>

            </tbody>
            <thead>
                <tr>


                    <th>Course Fee(Pounds)</th>
                    <th>Course Duration</th>
                    <th>Course Description</th>
                    <th>Jobs</th>
                </tr>
            </thead>
            <tbody>
                <tr>

                    <td> <input type="text" name="fee"></td>
                    <td> <input type="text" name="duration"></td>
                    <td> <textarea name="description" class="texarea"></textarea></td>
                    <td> <textarea name="jobs" class="texarea"></textarea></td>


                </tr>

            </tbody>
            <thead>
                <tr>


                    <th>Course Image</th>
                    <th>Course Outline</th>

                </tr>
            </thead>
            <tbody>
                <tr>

                    <td><input type="file" name="img"></td>
                    <td> <textarea name="outline" class="texarea"></textarea></td>

                </tr>

            </tbody>
        </table>

        <div class="bestt">

            <!---->
            <button type="button" class="btnn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter" name="finish"
                class="btnn">
                Insert
            </button>



            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Insert New Data</h5>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            New Course is successfully inserted.<i class='fa-solid fa-check'></i>
                            <input type="submit" name="submit" class="btnn">
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <?php 

            include './connection.php';
            $sql = "INSERT INTO course(cat_id,course_credit,course_name,course_intakes,course_fee,course_duration,course_description,jobs,course_image,course_outline)
                    VALUES(?, ?, ?,?,?,?,?,?,?,?)";
            $sq = $a->prepare($sql);
            if (isset($_POST['submit'])) {
                       if (isset($_FILES['img'])) {
                        $error = array();
                        $filename = $_FILES['img']['name']; //filename.jpg
                        $filesize = $_FILES['img']['size']; //2979879
                        $filetype = $_FILES['img']['type']; //filename/jpg
                        $filetmp = $_FILES['img']['tmp_name'];
    
                        $file_ex = explode("/", $filetype);
                        $filex = strtolower(end($file_ex));
    
                        $extension = array("jpg", "png", "jpeg","gif","webp","jfif");
    
                        if (in_array($filex, $extension)==FALSE) {
                            $error[] = "File type is wrong";
                        }
                        elseif ($filesize>2097152) {
                            $error[] = "File size is too big";
                        }
                        elseif (empty($error)==TRUE) {
                            move_uploaded_file($filetmp, "./uniimagge/".$filename);
                        }
                    }
              
     
                      $role = $_POST['role'];
                       $credit = $_POST['credit'];
                    $name = $_POST['name'];
            $intake = $_POST['intake'];
            $fee = $_POST['fee'];
            $duration = $_POST['duration'];
            $description = $_POST['description'];
            $jobs = $_POST['jobs'];
                $img = $filename;
            $outline = $_POST['outline'];
                  
              

                if ($sq->execute(array($role,$credit,$name,$intake,$fee,$duration,$description,$jobs,$img,$outline))) {
                   
                }
            }
    
        ?>

    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>