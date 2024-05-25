<?php
session_start();

require "server.php"; 
$conn = new mysqli($host, $admin, $pass, $dbname);

// Vérifier si la connexion à la base de données a échoué
if ($conn->connect_error) {
    die("Erreur de connexion à la base de données: " . $conn->connect_error);
}

// Vérifier si l'identifiant du formateur est présent dans l'URL
if (isset($_GET['id_user'])) {
    // Récupérer l'identifiant du formateur depuis l'URL
    $formateur_id = $_GET['id_user'];

    // Mettre à jour l'attribut is_Active du formateur dans la base de données
    $sql = "UPDATE former SET is_Active = true WHERE id_user = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $formateur_id);
    $stmt->execute();
    $stmt->close();

    // Rediriger vers la page de gestion des formateurs
    header("Location: gerer_formateurs.php"); // Remplacez gerer_formateurs.php par la page appropriée
    exit;
} else {
    // Si l'identifiant du formateur n'est pas présent dans l'URL, rediriger vers une page d'erreur ou afficher un message d'erreur
    echo "Erreur: Identifiant du formateur non spécifié.";
}

// Fermer la connexion à la base de données
$conn->close();
?>

