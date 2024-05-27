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
else{
	
// Initialiser une variable pour stocker les messages
$message = "";

// Traitement des données du formulaire lorsqu'il est soumis
if (isset($_POST['Postuler'])) {
    $nom = $_POST['name'];
    $email = $_POST['Email'];
    $specialite = $_POST['specialite'];
    $experience = $_POST['experience'];
    $cv = $_FILES['cv']['name'];

    // Préparation de la requête SQL pour insérer les données dans la table former
    $sql = "INSERT INTO former (username, email, specialite, experience, cv) VALUES (?, ?, ?, ?, ?)";

    // Préparation de la déclaration SQL
    $stmt = $conn->prepare($sql);

    // Liaison des paramètres à la requête
    $stmt->bind_param("sssss", $nom, $email, $specialite, $experience, $cv);
echo 'before iff';
    // Exécution de la requête
    if ($stmt->execute()) {
        echo 'iffff';
        $message = "Les données ont été enregistrées avec succès dans la base de données.";
    } else {
        $message = "Erreur lors de l'enregistrement des données dans la base de données: " . $stmt->error;
    }

    // Fermeture de la déclaration
    $stmt->close();
}
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
    <link rel="stylesheet" type="text/css" href="css/style-former.css">
    

</head>
<body>

<?php include "includes/nav-former.php"; ?>


    <div class="head-container">
        <div class="quote">
            <br><br><br>
            <p>Make a global impact</p>
            <p style="font-size:20px">Build your online course and monetize your expertise by sharing your knowledge worldwide.</p>
            <a href="#" id="button" class="button">Become a trainer </a>
        </div>
        
    </div>
      <br><br><br><br><br><br>

<div class="service-swipe" id="reason">
    <div class="diffSection">
        <div >
            <div >
                <center>
                    <p style="font-size: 45px;color: #2e2e2e;">There are so many reasons to get started </p>
                </center>
            </div>
        </div>
        <div>
            <div class="totalcard">
                <div class="card">
                    <center>
                        <img src="img/tab.png" alt="" width="60px" class="mb-4">
                        <h5  class="card-title">Create courses that reflect you</h5>
                        <p style="padding-bottom: 30px;">Publish the course you want, how you want, and always maintain control over your own content.</p>
                    </center>
                </div>
                <div class="card">
                    <center>
                        <img src="img/think.jpg" alt="" width="60px" class="mb-4">
                        <h5 class="card-title">Inspire the participants</h5>
                        <p style="padding-bottom: 30px;">Teach what you know and help participants explore their interests, acquire new skills, and advance their careers.</p>
                    </center>
                </div>
                <div class="card">
                    <center>
                        <img src="img/coupe.jpg" alt="" width="60px" class="mb-4">
                        <h5 class="card-title">Be rewarded</h5>
                        <p style="padding-bottom: 30px;">Expand your professional network and expertise, and earn money for each paid enrollment.</p>
                    </center>
                </div>
            </div>
        </div>
    </div>
</div>
</ > 
<br><br>



<div class="ud-container teach-page__container how-it-works--container--SBlfF" id="start">
    <center><h1 style="font-size: 45px;color: #2e2e2e;" class="ud-heading-serif-xl teach-page__heading teach-page__margin-center how-it-works--title--H--hd">How to get started</h1></center>
    <div class="tabs-module--tabs-container---clC6 tabs-module--full-width--63jhA">
        <div class="container">
            <br>
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li style="padding-right: 200px;" class="nav-item">
                    <a class="nav-link active" id="tab-0" data-toggle="tab" href="#content-0" role="tab" aria-controls="content-0" aria-selected="true">Plan your program</a>
                </li>
                <li style="padding-right: 200px;" class="nav-item">
                    <a class="nav-link" id="tab-1" data-toggle="tab" href="#content-1" role="tab" aria-controls="content-1" aria-selected="false">Record your video</a>
                </li>
                <li style="padding-right: 80px;" class="nav-item">
                    <a class="nav-link" id="tab-2" data-toggle="tab" href="#content-2" role="tab" aria-controls="content-2" aria-selected="false">Launch your course</a>
                </li>
            </ul>
            <br>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="content-0" role="tabpanel" aria-labelledby="tab-0">
                    <div class="how-it-works--tab-content--Iorv1 d-flex justify-content-between">
                        <div class="how-it-works--text--4ET-k text-center">
                            <p class="ud-text-md teach-page__margin-center">Start with your passion and knowledge. Then choose a promising topic using our Marketplace Insights tool.
<br> <br> How you teach, what you bring to it, is entirely up to you.</p>
                        </div>
                        <img src="https://s.udemycdn.com/teaching/plan-your-curriculum-v3.jpg" srcset="https://s.udemycdn.com/teaching/plan-your-curriculum-v3.jpg 1x, https://s.udemycdn.com/teaching/plan-your-curriculum-2x-v3.jpg 2x" alt="" width="480" height="480" loading="lazy">
                    </div>
                </div>
                <div class="tab-pane fade" id="content-1" role="tabpanel" aria-labelledby="tab-1">
                    <div class="how-it-works--tab-content--Iorv1 d-flex justify-content-between">
                        <div class="how-it-works--text--4ET-k text-center">
                            <p class="ud-text-md teach-page__margin-center">Use basic tools like a smartphone or a digital SLR camera. Add a good microphone and you're ready to go.
<br> <br>
If you don't like being filmed, simply capture your screen.</p>
                        </div>
                        <img src="https://s.udemycdn.com/teaching/record-your-video-v3.jpg" srcset="https://s.udemycdn.com/teaching/record-your-video-v3.jpg 1x, https://s.udemycdn.com/teaching/record-your-video-2x-v3.jpg 2x" alt="" width="480" height="480" loading="lazy">
                    </div>
                </div>
                <div class="tab-pane fade" id="content-2" role="tabpanel" aria-labelledby="tab-2">
                    <div class="how-it-works--tab-content--Iorv1 d-flex justify-content-between">
                        <div class="how-it-works--text--4ET-k text-center">
                            <p class="ud-text-md teach-page__margin-center">Gather your first reviews and ratings by promoting your course on social media and in your professional networks.
<br><br>
Your course will be available on our platform, where you'll earn revenue for each paid enrollment.</p>
                        </div>
                        <img src="https://s.udemycdn.com/teaching/launch-your-course-v3.jpg" srcset="https://s.udemycdn.com/teaching/launch-your-course-v3.jpg 1x, https://s.udemycdn.com/teaching/launch-your-course-2x-v3.jpg 2x" alt="" width="480" height="480" loading="lazy">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


 











<div class="bg-modal">
	<div class="modal-contents">
    <center>
        <br>
        <h1 style="margin-top: 100px;">Devenir Formateur</h1>
    </center>
		<div class="close">x</div>
   
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
                        <!-- Champ nom -->
                        <div class="form-group">
                            <label for="name">Nom complet:</label>
                            <input type="text" id="name" name="name" class="form-control" required>
                        </div>
                        <!-- Champ email -->
                        <div class="form-group">
                            <label for="Email">Email:</label>
                            <input type="text" id="Email" name="Email" class="form-control" required>
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
                            <input type="submit" name="Postuler" class="btn btn-primary" value="Postuler">
                        </div>
                    </form>



</div>
</div>
<br><br><br><br><br>

<?php include "includes/footer.php"; ?>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


<script>
document.getElementById('button').addEventListener("click", function() {
	document.querySelector('.bg-modal').style.display = "flex";
});

document.querySelector('.close').addEventListener("click", function() {
	document.querySelector('.bg-modal').style.display = "none";
});
</script>


<?php echo $message; ?>

</body>
</html>
