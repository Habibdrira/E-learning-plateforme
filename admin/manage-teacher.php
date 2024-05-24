<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

// Vérification de la connexion à la base de données
if (!$dbh) {
    die("Erreur de connexion : " . mysqli_connect_error());
}

if (isset($_SESSION['role']) && isset($_SESSION['admin_id']) && isset($_SESSION['admin_username'])) {
    header('Location: ../login.php');
    exit;
} else {
    if (isset($_GET['delid'])) {
        $rid = intval($_GET['delid']);
        $sql = "DELETE FROM teacher WHERE id_user=:rid"; // Utilisation de id_user comme clé primaire
        $query = $dbh->prepare($sql);
        $query->bindParam(':rid', $rid, PDO::PARAM_INT);
        $query->execute();
        echo "<script>alert('Data deleted');</script>";
        echo "<script>window.location.href = 'manage-teachers.php'</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>iteam-elearning || Manage Teachers</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="./vendors/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="./vendors/chartist/chartist.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- End layout styles -->
</head>
<body>
<div class="container-scroller">
    <!-- Navbar -->
    <?php include_once('includes/header.php');?>
    
    <div class="container-fluid page-body-wrapper">
        <!-- Sidebar -->
        <?php include_once('includes/sidebar.php');?>
        
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="page-header">
                    <h3 class="page-title">Manage Teachers</h3>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Manage Teachers</li>
                        </ol>
                    </nav>
                </div>
                
                <div class="row">
                    <div class="col-md-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-sm-flex align-items-center mb-4">
                                    <h4 class="card-title mb-sm-0">Manage Teachers</h4>
                                    <a href="#" class="text-dark ml-auto mb-3 mb-sm-0">View all Teachers</a>
                                </div>
                                <div class="table-responsive border rounded p-1">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="font-weight-bold">Teacher ID</th>
                                                <th class="font-weight-bold">Teacher Name</th>
                                                <th class="font-weight-bold">Teacher Email</th>
                                                <th class="font-weight-bold">Subject Taught</th>
                                                <th class="font-weight-bold">Class</th>
                                                <th class="font-weight-bold">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            if (isset($_GET['pageno'])) {
                                                $pageno = $_GET['pageno'];
                                            } else {
                                                $pageno = 1;
                                            }
                                            
                                            // Pagination
                                            $no_of_records_per_page = 15;
                                            $offset = ($pageno-1) * $no_of_records_per_page;
                                            
                                            // Nombre total d'enregistrements
                                            $total_pages_sql = "SELECT COUNT(*) FROM teacher";
                                            $stmt = $dbh->prepare($total_pages_sql);
                                            $stmt->execute();
                                            $total_rows = $stmt->fetchColumn();
                                            $total_pages = ceil($total_rows / $no_of_records_per_page);
                                            
                                            // Récupération des données des enseignants
                                            $sql = "SELECT teacher.id_user, teacher.username, teacher.email, teacher.matiere, teacher.classe 
                                                    FROM teacher 
                                                    LIMIT $offset, $no_of_records_per_page";
                                            $query = $dbh->prepare($sql);
                                            $query->execute();
                                            $results = $query->fetchAll(PDO::FETCH_OBJ);

                                            $cnt = 1;
                                            if ($query->rowCount() > 0) {
                                                foreach ($results as $row) {
                                            ?>   
                                                    <tr>
                                                        <td><?php echo htmlentities($row->id_user);?></td>
                                                        <td><?php echo htmlentities($row->username);?></td>
                                                        <td><?php echo htmlentities($row->email);?></td>
                                                        <td><?php echo htmlentities($row->matiere);?></td>
                                                        <td><?php echo htmlentities($row->classe);?></td>
                                                        <td>
                                                            <div>
                                                                <a href="edit-teacher-detail.php?editid=<?php echo htmlentities($row->id_user); ?>"><i class="icon-eye"></i></a>
                                                                || 
                                                                <a href="manage-teachers.php?delid=<?php echo ($row->id_user); ?>" onclick="return confirm('Do you really want to Delete ?');">
                                                                    <i class="icon-trash"></i>
                                                                </a>
                                                            </div>
                                                        </td> 
                                                    </tr>
                                            <?php 
                                                    $cnt = $cnt + 1;
                                                }
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                                
                                <!-- Pagination -->
                                <div align="left">
                                    <ul class="pagination">
                                        <li><a href="?pageno=1">First</a></li>
                                        <li class="<?php if($pageno <= 1) { echo 'disabled'; } ?>">
                                            <a href="<?php if($pageno <= 1) { echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>">Prev</a>
                                        </li>
                                        <li class="<?php if($pageno >= $total_pages) { echo 'disabled'; } ?>">
                                            <a href="<?php if($pageno >= $total_pages) { echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>">Next</a>
                                        </li>
                                        <li><a href="?pageno=<?php echo $total_pages; ?>">Last</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Footer -->
            <?php include_once('includes/footer.php');?>
        </div>
    </div>
</div>

<!-- Scripts JS -->
<script src="vendors/js/vendor.bundle.base.js"></script>
<script src="./vendors/chart.js/Chart.min.js"></script>
<script src="./vendors/moment/moment.min.js"></script>
<script src="./vendors/daterangepicker/daterangepicker.js"></script>
<script src="./vendors/chartist/chartist.min.js"></script>
<script src="js/off-canvas.js"></script>
<script src="js/misc.js"></script>
<script src="./js/dashboard.js"></script>
</body>
</html>
