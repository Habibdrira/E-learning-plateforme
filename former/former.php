<?php
session_start();
include('..DB_connection.php');

// Vérifier la connexion à la base de données
if ($conn) {
    // Initialiser une variable pour stocker les messages
    $message = "";

    // Traitement des données du formulaire lorsqu'il est soumis
    if (isset($_POST['Postuler'])) {
        $nom = $_POST['name'];
        $email = $_POST['Email'];
        $specialite = $_POST['specialite'];
        $experience = $_POST['experience'];
        $cv = $_FILES['cv']['name'];

        // Vérifier si un fichier CV a été téléchargé
        $cv_temp = $_FILES['cv']['tmp_name'];
        $cv_path = "chemin/vers/dossier/uploads/" . $cv;

        // Déplacer le fichier téléchargé vers son emplacement final
        if (move_uploaded_file($cv_temp, $cv_path)) {
            // Préparation de la requête SQL pour insérer les données dans la table former
            $sql = "INSERT INTO former (username, email, specialite, experience, cv) VALUES (:nom, :email, :specialite, :experience, :cv)";

            // Préparation de la déclaration SQL
            $stmt = $conn->prepare($sql);

            // Liaison des paramètres à la requête
            $stmt->bindParam(':nom', $nom);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':specialite', $specialite);
            $stmt->bindParam(':experience', $experience);
            $stmt->bindParam(':cv', $cv);

            // Exécution de la requête
            if ($stmt->execute()) {
                $message = "Les données ont été enregistrées avec succès dans la base de données.";
            } else {
                $message = "Erreur lors de l'enregistrement des données dans la base de données: " . $stmt->errorInfo()[2];
            }
        } else {
            $message = "Erreur lors de l'upload du fichier CV.";
        }
    }
} else {
    header("Location: login.php"); // Rediriger vers la page de connexion si la connexion à la base de données échoue
    exit;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Devinez un formateur</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <style>
    /* Vos styles CSS ici */
    </style>
</head>
<body>
    <?php include "../nav.php"; ?>

    <!-- Votre contenu HTML ici -->

    <div class="bg-modal">
        <div class="modal-contents">
            <!-- Formulaire d'inscription des formateurs -->
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name">Nom complet:</label>
                    <input type="text" id="name" name="name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="Email">Email:</label>
                    <input type="text" id="Email" name="Email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="specialite">Spécialité :</label>
                    <input type="text" id="specialite" name="specialite" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="experience">Expérience :</label>
                    <input type="text" id="experience" name="experience" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="cv">CV :</label>
                    <input type="file" id="cv" name="cv" class="form-control-file" accept=".pdf, .doc, .docx" required>
                </div>
                <div class="form-group">
                    <input type="submit" name="Postuler" class="btn btn-primary" value="Postuler">
                </div>
            </form>
            <!-- Fin du formulaire -->
        </div>
    </div>

    <!-- Inclure d'autres éléments HTML comme votre pied de page, etc. -->

    <!-- Affichage du message de succès ou d'erreur -->
    <?php echo $message; ?>

    <!-- Inclure les scripts JavaScript nécessaires -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
    // Votre script JavaScript ici
    </script>
</body>
</html>
