<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

if (isset($_SESSION['role']) && isset($_SESSION['admin_id']) && isset($_SESSION['admin_username'])) {
    header('Location: ../login.php');
    exit;
} else {
    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $matiere = $_POST['matiere'];
        $classe = $_POST['classe'];

        $ret = "SELECT username FROM teacher WHERE username=:username";
        $query = $dbh->prepare($ret);
        $query->bindParam(':username', $username, PDO::PARAM_STR);
        $query->execute();
        $results = $query->fetchAll(PDO::FETCH_OBJ);

        if ($query->rowCount() == 0) {
            $sql = "INSERT INTO teacher (username, password, email, matiere, classe) VALUES (:username, :password, :email, :matiere, :classe)";
            $query = $dbh->prepare($sql);
            $query->bindParam(':username', $username, PDO::PARAM_STR);
            $query->bindParam(':password', $password, PDO::PARAM_STR);
            $query->bindParam(':email', $email, PDO::PARAM_STR);
            $query->bindParam(':matiere', $matiere, PDO::PARAM_STR);
            $query->bindParam(':classe', $classe, PDO::PARAM_STR);
            $query->execute();

            $LastInsertId = $dbh->lastInsertId();
            if ($LastInsertId > 0) {
                echo '<script>alert("Teacher has been added.")</script>';
                echo "<script>window.location.href ='add_teacher.php'</script>";
            } else {
                echo '<script>alert("Something Went Wrong. Please try again")</script>';
            }
        } else {
            echo "<script>alert('Username already exists. Please try again');</script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <title>Teacher Management System || Add Teachers</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="vendors/select2/select2.min.css">
    <link rel="stylesheet" href="vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="css/style.css" />

</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <?php include_once('includes/header.php'); ?>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_sidebar.html -->
            <?php include_once('includes/sidebar.php'); ?>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="page-header">
                        <h3 class="page-title"> Add Teachers </h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page"> Add Teachers</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="row">

                        <div class="col-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title" style="text-align: center;">Add Teachers</h4>

                                    <form class="forms-sample" method="post">

                                        <div class="form-group">
                                            <label for="exampleInputName1">Teacher Name</label>
                                            <input type="text" name="username" value="" class="form-control" required='true'>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail3">Teacher Email</label>
                                            <input type="text" name="email" value="" class="form-control" required='true'>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputName1">Subject Taught</label>
                                            <input type="text" name="matiere" value="" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputName1">Class</label>
                                            
                                            <select name="classe" class="form-control" required='true'>
                                                <option value="">Select Class</option>
                                                <?php

                                                $sql2 = "SELECT * FROM class";
                                                $query2 = $dbh->prepare($sql2);
                                                $query2->execute();
                                                $result2 = $query2->fetchAll(PDO::FETCH_OBJ);

                                                foreach ($result2 as $row1) {
                                                ?>
                                                    <option value="<?php echo htmlentities($row1->id); ?>"><?php echo htmlentities($row1->classname); ?> </option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputName1">Password</label>
                                            <input type="password" name="password" value="" class="form-control" required='true'>
                                        </div>
                                        <button type="submit" class="btn btn-primary mr-2" name="submit">Add</button>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php include_once('includes/footer.php'); ?>
            </div>
        </div>
    </div>
    <script src="vendors/js/vendor.bundle.base.js"></script>
    <script src="vendors/select2/select2.min.js"></script>
    <script src="vendors/typeahead.js/typeahead.bundle.min.js"></script>
    <script src="js/off-canvas.js"></script>
    <script src="js/misc.js"></script>
    <script src="js/typeahead.js"></script>
    <script src="js/select2.js"></script>
</body>

</html>
