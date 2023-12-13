<?php
include './connection.php';
$course_id = $_GET['did'];

try {
    $a->beginTransaction();

    // Delete associated rows in the "enroll" table
    $sqlDeleteEnroll = $a->prepare("DELETE FROM enroll WHERE student_id IN (SELECT student_id FROM enroll WHERE course_id = :course_id)");
    $sqlDeleteEnroll->bindValue(':course_id', $course_id);
    $sqlDeleteEnroll->execute();

    // Get the list of student_ids associated with the deleted course_id
    $sqlGetStudentIds = $a->prepare("SELECT student_id FROM enroll WHERE course_id = :course_id");
    $sqlGetStudentIds->bindValue(':course_id', $course_id);
    $sqlGetStudentIds->execute();
    $studentIds = $sqlGetStudentIds->fetchAll(PDO::FETCH_COLUMN);

    if (!empty($studentIds)) {
        // Delete associated rows in the "student" table
        $sqlDeleteStudents = $a->prepare("DELETE FROM student WHERE student_id IN (" . implode(',', $studentIds) . ")");
        $sqlDeleteStudents->execute();
    }

    // Delete the course
    $sqlDeleteCourse = $a->prepare("DELETE FROM course WHERE course_id = :course_id");
    $sqlDeleteCourse->bindValue(':course_id', $course_id);
    $sqlDeleteCourse->execute();

    $a->commit();

    header('location:viewcourseadm.php');
} catch (PDOException $e) {
    $a->rollback();
    echo "Error: " . $e->getMessage();
}
?>