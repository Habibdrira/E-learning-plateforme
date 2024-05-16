<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

// Vérifier la connexion et les variables de session
if (isset($_SESSION['role']) && isset($_SESSION['admin_id']) && isset($_SESSION['admin_username'])) {
  header('Location: ../login.php');
  exit;
} else {
    // Supprimer la classe
    if(isset($_GET['delid'])) {
        $class_id = intval($_GET['delid']);
        deleteClass($class_id, $dbh);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>iteaam-eleraning ||| Manage Class</title>
    <link rel="stylesheet" href="vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="./vendors/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="./vendors/chartist/chartist.min.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<div class="container-scroller">
    <?php include_once('includes/header.php');?>
    <div class="container-fluid page-body-wrapper">
        <?php include_once('includes/sidebar.php');?>
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="page-header">
                    <h3 class="page-title"> Manage Class </h3>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page"> Manage Class</li>
                        </ol>
                    </nav>
                </div>
                <div class="row">
                    <div class="col-md-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-sm-flex align-items-center mb-4">
                                    <h4 class="card-title mb-sm-0">Manage Class</h4>
                                    <a href="#" class="text-dark ml-auto mb-3 mb-sm-0"> View all Classes</a>
                                </div>
                                <div class="table-responsive border rounded p-1">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="font-weight-bold">Class Name</th>
                                                <th class="font-weight-bold">Section</th>
                                                <th class="font-weight-bold">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            // Pagination
                                            $no_of_records_per_page = 15;
                                            $pageno = isset($_GET['pageno']) ? $_GET['pageno'] : 1;
                                            $offset = ($pageno - 1) * $no_of_records_per_page;
                                            
                                            // Récupérer les données de la classe
                                            $sql = "SELECT * FROM class LIMIT $offset, $no_of_records_per_page";
                                            $query = $dbh->prepare($sql);
                                            $query->execute();
                                            $results = $query->fetchAll(PDO::FETCH_OBJ);
                                            
                                            // Afficher les données de la classe
                                            $cnt = 1;
                                            if($query->rowCount() > 0) {
                                                foreach($results as $row) {
                                                    echo "<tr>";
                                                    echo "<td>" . htmlentities($row->classname) . "</td>";
                                                    echo "<td>" . htmlentities($row->section) . "</td>";
                                                    echo "<td>";
                                                    echo "<div><a href='edit-class-detail.php?editid=" . htmlentities($row->id) . "'><i class='icon-eye'></i></a> || ";
                                                    echo "<a href='manage-class.php?delid=" . htmlentities($row->id) . "' onclick='return confirm(\"Do you really want to Delete ?\");'><i class='icon-trash'></i></a></div>";
                                                    echo "</td>";
                                                    echo "</tr>";
                                                    $cnt++;
                                                }
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- Pagination -->
                                <?php include_once('pagination.php'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php include_once('includes/footer.php');?>
        </div>
    </div>
</div>

<script src="vendors/js/vendor.bundle.base.js"></script>
<script src="./js/off-canvas.js"></script>
<script src="js/misc.js"></script>
<script src="./js/dashboard.js"></script>
</body>
</html>

<?php
// Fonction pour supprimer une classe
function deleteClass($class_id, $dbh) {
    $sql = "DELETE FROM class WHERE id=:class_id";
    $query = $dbh->prepare($sql);
    $query->bindParam(':class_id', $class_id, PDO::PARAM_INT);
    $query->execute();
    echo "<script>alert('Data deleted');</script>";
    echo "<script>window.location.href = 'manage-class.php'</script>";
}
?>
