<?php
session_start();

include('includes/dbconnection.php');

// Vérifier si l'utilisateur est connecté
function checkLoggedIn() {
  if (isset($_SESSION['role']) && isset($_SESSION['student_id']) && isset($_SESSION['student_username'])) {
      $_SESSION['error'] = "Vous devez être connecté en tant qu'étudiant pour accéder à cette page.";
      header('Location: ../login.php');
      exit;
  }
}

checkLoggedIn();
?>



<!DOCTYPE html>
<html>
	<head>
		<link rel="shortcut icon" type="jpG" href="../img/icon/iteam.jpg" >
		<title>Quiz on ELIteam</title>
	<link rel="stylesheet" type="text/css" href="quizStyle.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<script type="text/javascript" src="../script.js"></script>	
	</head>
<body>
<?php include "sub-nav.php"; ?>
<!-- NAVIGATION -->

	

<!-- MAIN Heading of Page -->
	<div class="title" id="title">
		<span>Daily Quiz on LearnEd</span>
		<div class="shortdesc"><br>
			<p>If you think education is expensive, try ignorance</p>
		</div>
		<button onclick="startquiz()">Start Now</button>
	</div>


<div class="panel" id="panel">
	
	<div class="left-side" id="left">
		<ul>
			<li onclick="quizt(1)">HOME</li>
			<li onclick="quizt(2)">JEE Mains</li>
			<li onclick="quizt(3)">JEE Advanced</li>
			<li onclick="quizt(4)">GATE</li>
			<li onclick="quizt(5)">C/C++</li>
			<li onclick="quizt(6)">Java</li>
			<li onclick="quizt(7)">Python</li>
			<li onclick="quizt(8)">JavaScript</li>
			<li onclick="quizt(9)">Data Structures</li>
			<li onclick="quizt(10)">Algorithm</li>
			<li onclick="quizt(11)">Interview Questions</li>
		</ul>
	</div>

	<div class="right-side" id="right">
		<div id="quiz-container">
			
			<div id="f1"><div class="quiz-frame main-frame"></div></div>

			<div id="f2"><iframe class="quiz-frame" src="https://docs.google.com/forms/d/e/1FAIpQLSe3hXLPuiQGqj1n3IeeAzM8YLNpgJIIk_zfteoEdWka4X3wxQ/viewform?embedded=true" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe></div>
			
			<div id="f3"><iframe class="quiz-frame" src="https://docs.google.com/forms/d/e/1FAIpQLSeVTLsd_AqZGpbIMnZRm20OKrjjiYSirWBjfCHpWtAsMQU--g/viewform?embedded=true" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe></div>
			
			<div id="f4"><iframe class="quiz-frame" src="https://docs.google.com/forms/d/e/1FAIpQLSdjSKZhQp5jqqR34zD_uWMtgXr18F9pdK6YqcafLSP6J7VZjw/viewform?embedded=true" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe></div>

			<div id="f5"><iframe class="quiz-frame" src="https://docs.google.com/forms/d/e/1FAIpQLSe1xs1-41MAbLN7KkXrJwtGdbl5ydxe_vX_nmFRjf6c0wtYkA/viewform?embedded=true"  frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe></iframe></div>
			
			<div id="f6"><iframe class="quiz-frame" src="https://docs.google.com/forms/d/e/1FAIpQLSdHFDm_BakVxro_zJI78OF2OLJpXgDzzaAVMHD9hptWlXBSpA/viewform?embedded=true" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe></div>
			
			<div id="f7"><iframe class="quiz-frame" src="https://docs.google.com/forms/d/e/1FAIpQLSdgD7yFEJtqpkImDiLAaQ7w9VcsO688gr1V3Gl7FqwM5yXtWQ/viewform?embedded=true" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe></div>

			<div id="f8"><iframe class="quiz-frame" src="https://docs.google.com/forms/d/e/1FAIpQLSchDBnai_Aup7YFJQegg4z-qoB338p010VgZRxBYDT17xoRew/viewform?embedded=true" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe></div>

			<div id="f9"><iframe class="quiz-frame" src="https://docs.google.com/forms/d/e/1FAIpQLSfY5oIAz4R9Ty-LBpx7h4th6OJ0-RkrxIlLslRV4NjwwW8_uw/viewform?embedded=true" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe></div>
			
			<div id="f10"><iframe class="quiz-frame" src="https://docs.google.com/forms/d/e/1FAIpQLSflwS89sG7H98J9vFgFqJgsKaZ5gpq3yUlOiW3up7RQQ-qRnw/viewform?embedded=true" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe></div>

			<div id="f11"><iframe class="quiz-frame" src="https://docs.google.com/forms/d/e/1FAIpQLSe_aS8-CMNFdUzI1UE73zahC2bmMwJkmB6FJXPIeKbLIBqB4Q/viewform?embedded=true" frameborder="0" marginheiclass="quiz-frame" ght="0" marginwidth="0">Loading…</iframe></div>

		</div>
	</div>

</div>

	<script type="text/javascript" src="../script.js"></script>
</body>
</html>