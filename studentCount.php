<?php
include './connection.php';

  session_start();
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
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
    background-color: white;
    overflow-x: hidden;
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




.nav {
    background-color: #194569;
    width: 216vh;

}

.navbar-nav {
    margin-left: 10%;
}

.admin {
    margin-left: 20px;
    color: #ccc;
    font-size: 20px;
}

.column {
    width: 100vh;
}

.donut {
    width: 320px;
    margin-bottom: 120px;
    margin-top: -220px;
    margin-left: 30%;
}

.figure {

    margin-left: 60%;
    margin-top: 10%;
}

.coursesstudent {
    font-size: 30px;
    font-weight: bold;
    border-bottom: 2px solid #194569;
    margin-left: 40px;
    margin-right: 40px;
    color: #194569;
}

.descriptionn {
    margin-left: 30px;
    padding: 20px;
    font-size: 20px;
}

.smallnav {
    background-color: black;
    font-size: 20px;
    width: 222vh;
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

.figure th {
    background-color: #194569;
    color: #cadbe7;
    font-weight: bolder;
    font-size: 20px;
    border-right: 1px solid black;
}

.figure td {
    border-right: 1px solid black;
    font-weight: bold;
}

.figure tr:nth-child(even) {
    background-color: #f2f2f2;
}

.drop {
    margin-left: -340px;
    margin-top: 30px;
}

.drop label {
    font-size: 18px;
    margin-right: 10px;
}

table {
    border: 1px solid black;
    margin-left: 10px;
    margin-bottom: 50px;
}

.drop #year,
.drop #month {
    font-size: 16px;
    padding: 5px;
}

.month {
    margin-left: 10px;
}

.generate {
    font-size: 14px;
    margin-left: 10px;
    background-color: #194569;
    padding: 5px 10px;
    border-radius: 5px;
    color: #cadbe7;
}

.result {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    margin-left: -450px;
}

.image {
    width: 270px;
    height: 270px;
    margin-bottom: 30px;
}

table {
    border-collapse: collapse;
    width: 100%;

}

select {
    width: 130px;
    border-radius: 10px;
    padding: 10px;
}

th,
td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: left;
}

.generate {
    font-size: 18px;
    margin-left: 30px;
    background-color: #194569;
    padding: 10px;
    border-radius: 10px;
    color: #cadbe7;
}

th {
    background-color: #194569;
    color: #cadbe7;
}

tr:nth-child(even) {
    background-color: #f2f2f2;
}

tr:hover {
    background-color: #ddd;
}

.title {
    font-size: 40px;
    font-weight: bold;
    margin-left: 450px;
    color: #194569;
    margin-top: 20px;
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


    <!DOCTYPE html>
    <html>

    <head>
        <title>Admin Chart</title>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    </head>


    <body>
        <p class="title">Student Enrollment Report by Month with Year</p>

        <div class="figure">
            <?php
            try {
                include './connection.php';

                // Query to get the distinct years from enroll_date
                $yearQuery = "SELECT DISTINCT YEAR(enroll_date) AS year FROM enroll ORDER BY year DESC";
                $yearResult = $a->query($yearQuery);
                $years = $yearResult->fetchAll(PDO::FETCH_ASSOC);

                // Array of all 12 months
                $months = array(
                    array('month' => 1, 'month_name' => 'January'),
                    array('month' => 2, 'month_name' => 'February'),
                    array('month' => 3, 'month_name' => 'March'),
                    array('month' => 4, 'month_name' => 'April'),
                    array('month' => 5, 'month_name' => 'May'),
                    array('month' => 6, 'month_name' => 'June'),
                    array('month' => 7, 'month_name' => 'July'),
                    array('month' => 8, 'month_name' => 'August'),
                    array('month' => 9, 'month_name' => 'September'),
                    array('month' => 10, 'month_name' => 'October'),
                    array('month' => 11, 'month_name' => 'November'),
                    array('month' => 12, 'month_name' => 'December')
                );

                // Handle form submission
                if (isset($_POST['generate'])) {
                    $selectedYear = $_POST['year'];
                    $selectedMonth = $_POST['month'];

                    $tableQuery = "SELECT e.enroll_id, e.student_id, si.Sname, e.enroll_date, c.course_name, c.course_fee
                                  FROM enroll e
                                  JOIN student_information si ON e.SID = si.SID
                                  JOIN course c ON e.course_id = c.course_id
                                  WHERE YEAR(e.enroll_date) = :year
                                  AND MONTH(e.enroll_date) = :month";

                    $tableStmt = $a->prepare($tableQuery);
                    $tableStmt->bindValue(':year', $selectedYear);
                    $tableStmt->bindValue(':month', $selectedMonth);
                    $tableStmt->execute();
                    $students = $tableStmt->fetchAll(PDO::FETCH_ASSOC);

                    // Print debug information
                 
                    ?>
            <div class="result">
                <?php
                        // Generate the table
                        if (count($students) > 0) {
                            echo "<table>
                                <tr>
                                    <th>Enroll ID</th>
                                    <th>Student ID</th>
                                    <th>Student Name</th>
                                    <th>Enroll Date</th>
                                    <th>Course Name</th>
                                    <th>Course Fee</th>
                                </tr>";
                            $totalCost = 0;
                            foreach ($students as $student) {
                                echo "<tr>";
                                echo "<td>".$student['enroll_id']."</td>";
                                echo "<td>".$student['student_id']."</td>";
                                echo "<td>".$student['Sname']."</td>";
                                echo "<td>".$student['enroll_date']."</td>";
                                echo "<td>".$student['course_name']."</td>";
                                echo "<td>".$student['course_fee']."</td>";
                                echo "</tr>";
                                $totalCost += $student['course_fee'];
                            }
                            echo "<tr>";
                            echo "<td colspan='5' style='text-align: right;'>Total Cost:</td>";
                            echo "<td>".$totalCost."</td>";
                            echo "</tr>";
                            echo "</table>";
                        } else {
                            ?>
                <img src="./uniimagge/undraw_Page_not_found_re_e9o6.png" alt="Image" class="image">
                <?php
                        }
                        ?>
            </div>
            <?php
                }
            } catch(PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
            ?>

            <form method="POST" class="drop">
                <label for="year">Year:</label>
                <select name="year" id="year">
                    <?php foreach ($years as $year) { ?>
                    <option value="<?php echo $year['year']; ?>"><?php echo $year['year']; ?></option>
                    <?php } ?>
                </select>

                <label for="month" class="month">Month:</label>
                <select name="month" id="month">
                    <?php foreach ($months as $month) { ?>
                    <option value="<?php echo $month['month']; ?>"><?php echo $month['month_name']; ?></option>
                    <?php } ?>
                </select>

                <input type="submit" name="generate" value="Generate" class="generate">
            </form>
        </div>



        <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
        </script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    </body>


    </html>