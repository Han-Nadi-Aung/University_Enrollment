<?php
include './connection.php';
$cat_id = $_GET['did'];

try {
    $a->beginTransaction();

    // Delete associated enrollments
    $sqlDeleteEnrollments = $a->prepare("DELETE FROM enroll WHERE course_id IN (SELECT course_id FROM course WHERE cat_id = :cat_id)");
    $sqlDeleteEnrollments->bindValue(':cat_id', $cat_id);
    $sqlDeleteEnrollments->execute();

    // Delete associated students
    $sqlDeleteStudents = $a->prepare("DELETE FROM student WHERE student_id IN (SELECT student_id FROM enroll WHERE course_id IN (SELECT course_id FROM course WHERE cat_id = :cat_id))");
    $sqlDeleteStudents->bindValue(':cat_id', $cat_id);
    $sqlDeleteStudents->execute();

    // Delete associated courses
    $sqlDeleteCourses = $a->prepare("DELETE FROM course WHERE cat_id = :cat_id");
    $sqlDeleteCourses->bindValue(':cat_id', $cat_id);
    $sqlDeleteCourses->execute();

    // Delete the category
    $sqlDeleteCategory = $a->prepare("DELETE FROM category WHERE cat_id = :cat_id");
    $sqlDeleteCategory->bindValue(':cat_id', $cat_id);
    $sqlDeleteCategory->execute();

    $a->commit();

    header('location:viewcategory.php');
} catch(PDOException $e) {
    $a->rollback();
    echo "Error: " . $e->getMessage();
}
?>