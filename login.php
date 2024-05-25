<!DOCTYPE html>
<html lang="en">
<head>
<<<<<<< HEAD
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login-ELIteam</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/loginStyle.css">
	<link rel="icon" href="logo_iteam.png">
</head>
<body class="body-login">
    <div class="black-fill"><br /> <br />
    	<div class="d-flex justify-content-center align-items-center flex-column">
    	<form class="login" 
    	      method="post"
    	      action="req/log.php">

    		<div class="text-center">
    			<img src="logo_iteam.png"
    			     width="300">
    		</div>
    		<h3>LOGIN</h3>

    		<?php if (isset($_GET['error'])) { ?>

    		<div class="alert alert-danger" role="alert">
			  <?=$_GET['error']?>
			</div>
			<?php } ?>
			
		  <div class="mb-3">
		    <label class="form-label">Username</label>
		    <input type="text" 
		           class="form-control"
		           name="uname">
		  </div>
		  
		  <div class="mb-3">
		    <label class="form-label">Password</label>
		    <input type="password" 
		           class="form-control"
		           name="pass">
		  </div>

		  <div class="mb-3">
		    <label class="form-label">Login As</label>
		    <select class="form-control"
		            name="role">
		    	<option value="1">Admin</option>
		    	<option value="2">Teacher</option>
		    	<option value="3">Student</option>
		    	<option value="4">former</option>
		    </select>
		  </div>

		  <button type="submit" class="btn btn-primary">Login</button>
          <button type="button" onclick="window.location.href='index.php'" class="btn btn-primary">Home</button>
          <button type="button" onclick="window.location.href='signup.php'" class="btn btn-primary">Sign Up</button>

		</form>
        
        <br /><br />
        <div class="text-center text-light">
        	Copyright &copy; 2024 ELIteam . All rights reserved.
        </div>

    	</div>
=======
    <link rel="shortcut icon" type="png" href="images/icon/iteam.jpg">
    <title>Login SignUp</title>
    <link rel="stylesheet" type="text/css" href="css/loginStyle.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
    <div class="form-box">
    <div class="button-box">    
    <select name="role" id="role" class="toggle-btn1">
      <option value="student">Student</option>
        <option value="former">Former</option>
        <option value="teacher">Teacher</option>
        <option value="admin">Admin</option>
        
    </select>
</div>
        
        <div class="social-icons">
            <img src="img/icon/fb2.png" >
            <img src="img/icon/insta2.png">
            <img src="img/icon/tt2.png">
        </div>

        <!-- Login Form -->
        <form id="login" class="input-group" action="login.php" method="POST">
            <div class="inp">
                <img src="img/icon/user.png"><input type="text" name="username" id="username" class="input-field" placeholder="Nom d'utilisateur ou email" style="width: 88%; border:none;" required="required">
            </div>
            <div class="inp">
                <img src="img/icon/password.png"><input type="password" name="password" id="password" class="input-field" placeholder="Mot de passe" style="width: 88%; border: none;" required="required">
            </div>

            <!-- Affichage du message d'erreur -->
            <div class="erreur">
                <?php include_once "script_login.php"; ?>
                <?php echo $erreur; ?>
            </div>

            <input type="checkbox" class="check-box">Se souvenir du mot de passe
            <button type="submit" name="submit" class="submit-btn" id="log">Connexion</button>
        </form>

        <div class="other" id="other">
            <div class="instead">
                <h3>ou</h3>
            </div>
            <button class="connect"  onclick="onGoogleSignIn()">
                <img src="img/icon/google.png"><span>Se connecter avec Google</span>
            </button>
        </div>
>>>>>>> main
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>	
</body>
</html>