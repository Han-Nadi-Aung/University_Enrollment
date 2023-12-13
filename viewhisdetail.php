<!DOCTYPE html>
<html lang="en">
<?php session_start();?>


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <title>Document</title>
</head>
<style>
@import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap');

body {
    background-color: #d1d1d1;
    font-family: 'Open Sans', sans-serif;
}

.inf {
    display: flex;
    margin: 100px 120px 150px 240px;

}

.image {
    border-radius: 20px;
    margin-right: 30px;
    box-shadow: 10px 10px 10px #555555;
}

.data {
    margin-left: 40px;

}

.data .nam {
    font-size: 39px;
    font-weight: 900;
    margin-top: 10px;
}

.price {
    font-size: 20px;

}

.previous {
    margin-left: 90%;
    border: 1px solid #194569;
    background-color: #194569;
    padding: 20px;
    text-decoration: none;
    color: aliceblue;
    border-radius: 15px;
    box-shadow: 3px 4px 14px black;
}

.previous:hover {
    background-color: green;

}

.inf {
    border: 1px solid #ecebeb;
    padding: 22px;
    margin-top: 5%;
    margin-left: 10%;
    background-color: #ecebeb;
    border-radius: 10px;
    box-shadow: 10px 14px 10px grey;
}

.head {
    font-size: 30px;
    color: #194569;
    text-align: center;
    margin-top: 30px;
    border-bottom: 2px dashed #194569;
    margin-left: 30%;
    margin-right: 30%;
    font-weight: bold;
}

table {
    border-collapse: separate;
    border-spacing: 55px 5px;
}

td {
    padding: 10px 2px;
}

th {
    font-size: 18px;
    font-weight: 600;
}
</style>

<body>
    <div class="inf">

        <div class="pic">
            <?php
            include "./connection.php";
            $vhis = $_GET['vhis'];

            $sql = $a->prepare("SELECT student.*, course.course_name FROM student 
                                JOIN enroll ON student.student_id = enroll.student_id
                                JOIN course ON enroll.course_id = course.course_id
                                WHERE student.SID = :vhis");
            $sql->bindValue(':vhis', $vhis);
            $sql->execute();
?>
        </div>
        <table>
            <tr>
                <th>
                    Course Name
                </th>
                <th>
                    Student Address
                </th>
                <th>
                    Student Phone Number
                </th>
                <th>
                    Bank Account Number
                </th>
                <th>
                    Bank Name
                </th>
                <th>
                    Documentation
                </th>
            </tr>
            <?php while ($row = $sql->fetch(PDO::FETCH_ASSOC)) {
            extract($row);
                 
            ?>
            <tr>
                <td> <?php echo $course_name?></td>
                <td> <?php echo $student_address?></td>
                <td> <?php echo $studnet_phonenumber?></td>
                <td> <?php echo $bank_account?></td>
                <td> <?php echo $bank_name?></td>
                <td>
                    <?php
                    $downloadLink = '<a href="./studentzip/' . $documentation . '">Download Student Zip File</a>';
                    echo $downloadLink;
                    ?>
                </td>
            </tr>
            <?php }?>
        </table>


    </div>

    <a href="./viewenroll.php" class="previous">Previous</a>
</body>

</html>