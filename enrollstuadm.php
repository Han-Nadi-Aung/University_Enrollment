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
    background-color: #eeeeee;
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
    margin-left: -60%;
}

.colu {
    margin-left: -520px;
}

.donut {
    width: 320px;
    margin-bottom: 120px;
    margin-top: -220px;
    margin-left: 30%;
}

.figure {
    margin-bottom: 10%;
    margin-left: 40%;
    margin-top: 10%;
}

.coursesstudent {
    font-size: 30px;
    font-weight: bold;
    border-bottom: 2px solid #194569;

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
    padding: 20px;
    border-right: 1px solid black;
}

.figure td {
    border-right: 1px solid black;
    font-weight: bold;
    padding: 15px;
}

.figure tr:nth-child(even) {
    background-color: #f2f2f2;
}

.drop {
    margin-top: -80px;
    margin-left: -50%;
    margin-bottom: 5%;
}

.generate {
    font-size: 14px;
    margin-left: 10px;
    background-color: #194569;
    padding: 5px 10px;
    border-radius: 5px;
    color: #cadbe7;
}

.drop select {
    width: 130px;
    height: 50px;
    padding: 10px;
    font-size: 23px;
}

.drop label {
    font-size: 30px;
    font-weight: bold;
}

.title {
    font-size: 40px;
    font-weight: bold;
    margin-left: 580px;
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

    <p class="title">Student Enrollment Report by Year</p>
    <div class="figure">

        <?php
        // Database connection
        include './connection.php';

        // Get the distinct years from enroll_date
        $yearQuery = "SELECT DISTINCT YEAR(enroll_date) AS year FROM enroll ORDER BY year DESC";
        $yearResult = $a->query($yearQuery);
        $years = $yearResult->fetchAll(PDO::FETCH_ASSOC);

        // Function to calculate the total income for the selected year
        function getTotalIncome($year) {
            global $a;

            $totalIncomeQuery = "SELECT SUM(c.course_fee) AS total_income
                                 FROM enroll e
                                 JOIN course c ON e.course_id = c.course_id
                                 WHERE YEAR(e.enroll_date) = :year";
            $totalIncomeStmt = $a->prepare($totalIncomeQuery);
            $totalIncomeStmt->bindValue(':year', $year);
            $totalIncomeStmt->execute();
            $totalIncome = $totalIncomeStmt->fetch(PDO::FETCH_ASSOC);

            return $totalIncome['total_income'];
        }

        // Function to calculate the remaining income for the selected year
        function getRemainingIncome($year) {
            $totalIncome = getTotalIncome($year);
            $remainingIncome = 10500000 - $totalIncome;

            return $remainingIncome;
        }

        // Handle form submission
        if (isset($_POST['year'])) {
            $selectedYear = $_POST['year'];

            // Count the total enrolled students for the selected year
            $enrolledStudentsQuery = "SELECT COUNT(*) AS total_students
                                      FROM enroll
                                      WHERE YEAR(enroll_date) = :year";
            $enrolledStudentsStmt = $a->prepare($enrolledStudentsQuery);
            $enrolledStudentsStmt->bindValue(':year', $selectedYear);
            $enrolledStudentsStmt->execute();
            $enrolledStudents = $enrolledStudentsStmt->fetch(PDO::FETCH_ASSOC);
            $totalEnrolledStudents = $enrolledStudents['total_students'];

            // Calculate the total income and remaining income for the selected year
            $totalIncome = getTotalIncome($selectedYear);
            $remainingIncome = getRemainingIncome($selectedYear);

            echo '<table>';
            echo '<tr>';
            echo '<th>Total Enrolled Students</th>';
            echo '<th>Total Income (pound)</th>';
            echo '<th>Total Remaining Income to 10,500,000 (pound)=2 intakes</th>';
            echo '</tr>';
            echo '<tr>';
            echo '<td>' . $totalEnrolledStudents . '</td>';
            echo '<td>' . $totalIncome . '</td>';
            echo '<td>' . $remainingIncome . '</td>';
            echo '</tr>';
            echo '</table>';
        }
        ?>

        <form method="POST" class="drop">
            <label for="year">Choose Year:</label>
            <select name="year" id="year">
                <?php foreach ($years as $year) { ?>
                <option value="<?php echo $year['year']; ?>"><?php echo $year['year']; ?></option>
                <?php } ?>
            </select>

            <input type="submit" name="generate" value="Generate" class="generate">
        </form>

        <div class="column">
            <p class="coursesstudent">Students by courses</p>
            <div class="colu">
                <?php
            if (isset($_POST['year'])) {
                $selectedYear = $_POST['year'];

                // Get the count of students for each course for the selected year
                $studentsByCourseQuery = "SELECT e.course_id, COUNT(*) AS student_count, c.course_name
                                          FROM enroll e
                                          JOIN course c ON e.course_id = c.course_id
                                          WHERE YEAR(e.enroll_date) = :year
                                          GROUP BY e.course_id";

                $studentsByCourseStmt = $a->prepare($studentsByCourseQuery);
                $studentsByCourseStmt->bindValue(':year', $selectedYear);
                $studentsByCourseStmt->execute();
                $studentsByCourse = $studentsByCourseStmt->fetchAll(PDO::FETCH_ASSOC);

                $courseLabels = array();
                $studentCounts = array();

                foreach ($studentsByCourse as $row) {
                    $courseLabels[] = $row['course_name'];
                    $studentCounts[] = $row['student_count'];
                }
                ?>

                <div class="figure">
                    <canvas id="columnChart" width="400" height="400"></canvas>
                </div>

                <script>
                var ctx = document.getElementById('columnChart').getContext('2d');
                var chart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: <?php echo json_encode($courseLabels); ?>,
                        datasets: [{
                            label: 'Student Count',
                            data: <?php echo json_encode($studentCounts); ?>,
                            backgroundColor: '#194569',
                            borderColor: '#194569',
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true,
                                ticks: {
                                    stepSize: 1, // Set the step size to 1
                                    precision: 0 // Display whole numbers
                                }
                            }
                        }
                    }
                });
                </script>
                <?php } ?>
            </div>
        </div>

    </div>





</html>


</div>







<script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
</script>
</body>


</html>