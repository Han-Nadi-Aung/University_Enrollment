<?php
include './connection.php';

  session_start();
 $sql = $a->prepare("SELECT * FROM category");
$sql->execute();

?>
<html>

<head>
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
@import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Roboto+Condensed:wght@300&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Roboto+Condensed:wght@300&family=Roboto+Slab:wght@100&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Roboto+Condensed:wght@300&family=Roboto+Slab:wght@100;400&display=swap');

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

body {
    margin: 0;
    padding: 0;
    background-color: #eeeeee;

}




td {
    font-size: 20px;
    font-family: 'Open Sans', sans-serif;
    font-family: 'Roboto Condensed', sans-serif;
    font-family: 'Roboto Slab', serif;
    font-weight: 100;
    padding-left: 40px;
    padding-right: 40px;
    color: black;



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

.card {
    background-color: #194569;

}

.container {
    color: #eeeeee;
}

.admin:hover,
.navtit:hover {
    color: #194569;
    text-shadow: 2px 2px 2px black;
    scale: 1.2;
}



.image {
    margin-bottom: 10px;
    margin-left: 100px;
}

tr {
    margin-bottom: 10px;
    border-bottom: 1px solid #194569;
}

tr:nth-child(even) {
    background-color: #d3d3d3;
}

tr:nth-child(odd) {
    background-color: white;
}

.des {
    width: 10px;
}

#navbarNav:hover {
    color: #194569;
}

.viewitemm span {
    background-color: #cadbe7;
    border-radius: 100%;
}

nav {
    background-color: #194569;
    width: 272vh;

}

.navbar-nav {
    margin-left: 10%;

}

.admin {
    margin-left: 20px;
    color: #ccc;
    font-size: 20px;
}

.image {
    margin-bottom: 10px;
    margin-left: 100px;
}

tr {
    margin-bottom: 10px;
    border-bottom: 1px solid #194569;
}

th {
    font-size: 30px;
    background-color: #194569;
    padding: 10px;
    color: white;
    border-bottom: 2px solid #E6D6BE;

}

table a:link,
table a:visited,
.foot a:link,
.foot a:visited {
    background-color: grey;
    color: #282828;
    padding: 14px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    border-radius: 10px;
    font-size: 20px;
    font-weight: bold;

}

table a:hover,
table a:active,
.foot a:hover,
.foot a:active {
    background-color: #a3c585;
    color: white;
}

.ila:hover,
.ila:active {
    background-color: #f01e2c;
}

.data {
    color: #194569;
    font-family: 'Open Sans', sans-serif;
    font-family: 'Roboto Condensed', sans-serif;
    font-family: 'Roboto Slab', serif;
    font-size: 45px;
    text-align: center;
    padding-top: 10px;
    margin-top: -10px;
}

td {
    font-weight: bold;



}

.data {
    font-size: 30px;
    border-bottom: 2px solid #194569;
    margin-left: 80px;
    margin-top: 40px;
}

.dataa {
    font-size: 10px;
    border-bottom: 2px solid #194569;
    margin-top: 40px;
    color: #194569;
    font-family: 'Open Sans', sans-serif;
    font-family: 'Roboto Condensed', sans-serif;
    font-family: 'Roboto Slab', serif;
    font-size: 45px;
    text-align: center;
    padding-top: 10px;
    margin-top: -10px;
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

.nav {
    background-color: #194569;
    width: 329vh;
    height: 60px;
}

.smallnav {
    background-color: black;
    font-size: 20px;
    width: 329vh;
}
</style>

<body>
    <nav class="navbar navbar-expand-lg nav">

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
        <div class="collapse navbar-collapse " id="navbarNav">
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
    <?php
    while ($row = $sql->fetch(PDO::FETCH_ASSOC)) {
    extract($row)
    ?>


    <table border="1">
        <div class="data">View <?php echo $cat_name?> Courses</div>
        <br>,<br>
        <tr>
            <!--<th>No.</th>-->
            <th>Course Name</th>
            <th> Intake</th>
            <th>Fee</th>
            <th>Duration</th>
            <th>Description</th>
            <th>Jobs</th>
            <th>Image</th>
            <th>Course Outline </th>
            <th>Update</th>
            <th>Delete </th>
        </tr>
        <?php
           $sql2 = $a->prepare("SELECT * FROM course WHERE cat_id='$cat_id'");
        $sql2->execute();
           while ($row2 = $sql2->fetch(PDO::FETCH_ASSOC)) {
        extract($row2);
        
      #  $CCID=$cat_id;
          #  $sql_one = $a->prepare("SELECT * FROM category WHERE $cat_id=$CCID ");
        #    $sql_one->execute();
        #    $row_one = $sql_one->fetch(PDO::FETCH_ASSOC);
          #  extract($row_one);
        ?>
        <tr>


            <td> <?php echo $course_name; ?></td>
            <td> <?php echo $course_intakes; ?></td>
            <td> <?php echo $course_fee; ?></td>
            <td> <?php echo $course_duration; ?></td>
            <td
                style="height:160px;width:190px;overflow:scroll; overflow-x:hidden;  margin-right:-70px; margin-left:-20px;">
                <textarea style="height: 160px; width: 200px; resize: none;border:none;"
                    readonly><?php echo $course_description; ?></textarea>
            </td>
            <td
                style="height:160px;width:190px;overflow:scroll; overflow-x:hidden;  margin-right:-70px; margin-left:-20px;">
                <textarea style="height: 160px; width: 200px; resize: none;border:none;"
                    readonly> <?php echo $jobs; ?></textarea>
            </td>

            <td> <img src="./uniimagge/<?php echo $course_image; ?>" height="100" width="170"></td>
            <td
                style="height:160px;width:190px;overflow:scroll; overflow-x:hidden;  margin-right:-70px; margin-left:-20px;">
                <textarea style="height: 160px; width: 200px; resize: none;border:none;"
                    readonly><?php echo $course_outline; ?></textarea>
            </td>


            <td><a href="Update.php?uid=<?php echo $course_id;?>">Update</a></td>
            <td><a href="./delete.php?did=<?php echo  $course_id;?>" class="ila">Delete</a></td>


        </tr>
        <?php
    }
}
    ?>
    </table>
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>


</html>