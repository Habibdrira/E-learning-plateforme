<?php
session_start();

// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

include('inc/dbconnection.php');

if (isset($_SESSION['student_id']) && isset($_SESSION['role'])) {
    if ($_SESSION['role'] == 'Student') {
        include "../DB_connection.php";
        include "data/student.php";
        include "data/subject.php";
        include "data/grade.php";
        include "data/section.php";

        $student_id = $_SESSION['student_id'];
        $student = getStudentById($student_id, $conn);

        // Debugging: Check if student data is retrieved
        if (!$student) {
            die("Error: Student data not found.");
        } else {
            ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student - Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="../logo.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <?php include "inc/navbar.php"; ?>
    <div class="container mt-5">
        <div class="card" style="width: 22rem;">
            <img src="../img/student-<?=$student['Gender']?>.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title text-center">@<?=$student['username']?></h5>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Student Name: <?=$student['Student Name']?></li>
                <li class="list-group-item">Username: <?=$student['username']?></li>
                <li class="list-group-item">Email: <?=$student['email']?></li>
                <li class="list-group-item">Class: <?=$student['classe']?></li>
                <li class="list-group-item">Date of Birth: <?=$student['Date of Birth']?></li>
                <li class="list-group-item">Gender: <?=$student['Gender']?></li>
                <li class="list-group-item">Grade: 
                    <?php 
                        $grade = $student['classe'];
                        $g = getGradeById($grade, $conn);
                        echo $g ? $g['grade_code'].'-'.$g['grade'] : 'Grade not found';
                    ?>
                </li>
                <li class="list-group-item">Section: 
                    <?php 
                        $section = $student['classe'];  // Assuming `classe` represents section here
                        $s = getSectionById($section, $conn);
                        echo $s ? $s['section'] : 'Section not found';
                    ?>
                </li>
            </ul>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>    
    <script>
        $(document).ready(function(){
            $("#navLinks li:nth-child(1) a").addClass('active');
        });
    </script>
</body>
</html>

<?php
        }
    }
} else {
    header("Location: login.php");
    exit();
}
?>

<?php
// data/student.php

function getStudentById($id, $conn) {
    $sql = "SELECT * FROM student WHERE id_user = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result->fetch_assoc();
}

// Assuming the existence of similar functions for grade and section retrieval
function getGradeById($id, $conn) {
    $sql = "SELECT * FROM grade WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result->fetch_assoc();
}

function getSectionById($id, $conn) {
    $sql = "SELECT * FROM section WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result->fetch_assoc();
}
?>
