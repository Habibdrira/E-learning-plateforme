<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
                <div class="profile-image">
                    <img class="img-xs rounded-circle" src="images/faces/face8.jpg" alt="profile image">
                    <div class="dot-indicator bg-success"></div>
                </div>
                <div class="text-wrapper">
                    <?php
                    $userId = $_SESSION['admin_id'];
                    $sql = "SELECT * FROM admin WHERE id_user = :userId";

                    $query = $dbh->prepare($sql);
                    $query->bindParam(':userId', $userId, PDO::PARAM_INT);
                    $query->execute();
                    $results = $query->fetchAll(PDO::FETCH_OBJ);

                    $cnt = 1;
                    if ($query->rowCount() > 0) {
                        foreach ($results as $row) { ?>
                            <p class="profile-name"><?php echo htmlentities($row->username); ?></p>
                            <p class="designation"><?php echo htmlentities($row->email); ?></p>
                    <?php $cnt = $cnt + 1;
                        }
                    } ?>
                </div>
            </a>
        </li>
        <li class="nav-item nav-category">
            <span class="nav-link">Dashboard</span>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="dashboard.php">
                <span class="menu-title">Dashboard</span>
                <i class="icon-screen-desktop menu-icon"></i>
            </a>
        </li>

        <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Class</span>
                <i class="icon-layers menu-icon"></i>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="add-class.php">Add Class</a></li>
                  <li class="nav-item"> <a class="nav-link" href="manage-class.php">Manage Class</a></li>
                </ul>
              </div>
            </li>

   
        <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <span class="menu-title">techear</span>
                <i class="icon-people menu-icon"></i>
              </a>
              <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="add_teacher.php"> Add  </a></li>
                  <li class="nav-item"> <a class="nav-link" href="manage-teacher.php"> Manage  </a></li>
                </ul>
              </div>
            </li>





        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic1" aria-expanded="false" aria-controls="ui-basic1">
                <span class="menu-title">Students</span>
                <i class="icon-people menu-icon"></i>
            </a>
            <div class="collapse" id="ui-basic1">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="add-students.php">Add Students</a></li>
                    <li class="nav-item"> <a class="nav-link" href="manage-students.php">Manage Students</a></li>
                </ul>
            </div>
        </li>

        <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#auth2" aria-expanded="false" aria-controls="auth">
                <span class="menu-title">former</span>
                <i class="icon-people menu-icon"></i>
              </a>
              <div class="collapse" id="auth2">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="add-former.php"> add</a></li>
                  <li class="nav-item"> <a class="nav-link" href="manage-former.php"> manage </a></li>
                </ul>
              </div>
            </li>

        <li class="nav-item">
            <a class="nav-link" href="between-dates-reports.php">
                <span class="menu-title">Reports</span>
                <i class="icon-notebook menu-icon"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="search.php">
                <span class="menu-title">Search</span>
                <i class="icon-magnifier menu-icon"></i>
            </a>
        </li>
    </ul>
</nav>
