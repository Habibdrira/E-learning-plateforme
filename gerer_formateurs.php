<?php
session_start();
require "server.php"; 
$conn = new mysqli($host, $admin, $pass, $dbname);

// Vérifier si la connexion à la base de données a échoué
if ($conn->connect_error) {
    die("Erreur de connexion à la base de données: " . $conn->connect_error);
}

// Sélectionner les données de la table former
$sql = "SELECT * FROM former";
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gérer les formateurs</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>

<h2>Liste des formateurs</h2>

<table>
    <tr>
        <th>Nom</th>
        <th>Email</th>
        <th>Spécialité</th>
        <th>Expérience</th>
        <th>CV</th>
    </tr>
    <?php
    // Afficher les données dans le tableau
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["username"] . "</td>";
            echo "<td>" . $row["email"] . "</td>";
            echo "<td>" . $row["specialite"] . "</td>";
            echo "<td>" . $row["experience"] . "</td>";
            echo "<td>" . $row["cv"] . "</td>";
            echo "<td> <a href='accept_former.php?id_user=" . $row["id_user"] . "'> Accepter </a> </td>";
            echo "<td> <a href='refuse_former.php?id_user=" . $row["id_user"] . "'> Refuser </a> </td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='5'>Aucun formateur trouvé.</td></tr>";
    }
    ?>
</table>

</body>
</html>

<?php
// Fermer la connexion à la base de données
$conn->close();
?>
