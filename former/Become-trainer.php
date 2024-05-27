<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

// Vérification de la connexion à la base de données
if (!$dbh) {
    die("Erreur de connexion : " . mysqli_connect_error());
    header("Location: login.php");
    exit;
}

$message = "";

if (isset($_POST['Postuler'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $specialite = $_POST['specialite'];
    $experience = $_POST['experience'];
    $cv = $_FILES["cv"]["name"];

    $check_query = "SELECT username FROM former WHERE username = ?";
    $stmt = $dbh->prepare($check_query);
    $stmt->bind_param('s', $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $message = "Ce nom d'utilisateur existe déjà. Veuillez en choisir un autre.";
    } else {
        $extension = strtolower(pathinfo($cv, PATHINFO_EXTENSION));
        $allowed_extensions = array("pdf", "doc", "docx");

        if (!in_array($extension, $allowed_extensions)) {
            $message = "Format de CV invalide. Seuls les formats pdf, doc et docx sont autorisés.";
        } else {
            $cv = md5($cv . time()) . "." . $extension;
            move_uploaded_file($_FILES["cv"]["tmp_name"], "cvs/" . $cv);

            $is_Active = 0; // Par défaut, l'utilisateur n'est pas encore actif

            $sql = "INSERT INTO former (username, password, email, specialite, experience, cv, is_Active) VALUES (?, ?, ?, ?, ?, ?, ?)";
            $query = $dbh->prepare($sql);
            $query->bind_param('ssssssi', $username, $password, $email, $specialite, $experience, $cv, $is_Active);
            if ($query->execute()) {
                $message = "Les données ont été enregistrées avec succès. Attendez l'approbation de l'administrateur.";
                header("refresh:2;url=Become-trainer.php");
            } else {
                $message = "Erreur lors de l'enregistrement des données. Veuillez réessayer.";
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Devenir Formateur</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }
        .container-formateur {
            max-width: 600px;
            margin: auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            margin-top: 50px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-control {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .form-control-file {
            padding-top: 8px;
        }
        .btn-primary {
            padding: 10px 20px;
            font-size: 18px;
            border: none;
            background-color: #007bff;
            cursor: pointer;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
        .alert {
            margin-top: 20px;
            padding: 10px;
            border-radius: 4px;
        }
        .alert-info {
            background-color: #cce5ff;
            border-color: #b8daff;
            color: #004085;
        }
    </style>
</head>
<body>

<?php include "includes/nav-former.php"; ?>

<div class="container-formateur">
    <center>
        <br>
        <h1>Devenir Formateur</h1>
    </center>
    <form action="Become-trainer.php" method="post" enctype="multipart/form-data">
        <!-- Champ nom d'utilisateur -->
        <div class="form-group">
            <label for="username">Nom d'utilisateur :</label>
            <input type="text" id="username" name="username" class="form-control" required>
        </div>
        <!-- Champ mot de passe -->
        <div class="form-group">
            <label for="password">Mot de passe :</label>
            <input type="password" id="password" name="password" class="form-control" required>
        </div>
        <!-- Champ email -->
        <div class="form-group">
            <label for="email">Email :</label>
            <input type="email" id="email" name="email" class="form-control" required>
        </div>
        <!-- Champ spécialité -->
        <div class="form-group">
            <label for="specialite">Spécialité :</label>
            <input type="text" id="specialite" name="specialite" class="form-control" required>
        </div>
        <!-- Champ expérience -->
        <div class="form-group">
            <label for="experience">Expérience :</label>
            <input type="text" id="experience" name="experience" class="form-control" required>
        </div>
        <!-- Champ CV -->
        <div class="form-group">
            <label for="cv">CV :</label>
            <input type="file" id="cv" name="cv" class="form-control-file" accept=".pdf, .doc, .docx" required>
        </div>
        <!-- Bouton de soumission -->
        <div class="form-group">
            <input type="submit" name="Postuler" class="btn-primary" value="Postuler">
        </div>
    </form>

    <!-- Affichage du message -->
    <?php if (!empty($message)): ?>
        <div class="alert alert-info"><?php echo $message; ?></div>
    <?php endif; ?>
</div>

<?php include "includes/footer.php"; ?>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
