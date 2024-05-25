<?php 
include "DB_connection.php";
if ($conn) {

?>
<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" type="jpG" href="img/icon/iteam.jpg" >
	<meta charset="utf-8">
	<title>ELIteam</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style.css">	
</head>
<body>
<!-- Navigation Bar -->
	<header id="header">
		<nav>
			<img src="img/icon/iteam.jpg" alt="logo" class="logo">
			<ul>
				<li><a class="active" href="">Home</a></li>
				<li><a href="#about">about us</a></li>
				<li><a href="#cours">courses</a></li>
				<li><a href="#services_section">Services</a></li>
				<li><a href="#calendar_section">formation</a></li>
				<li><a href="#contactus_section">Contact</a></li>
			</ul>
			<div class="srch"><input type="text" class="search" placeholder="Search here..."><img src="img/icon/search.png" alt="search" ></div>
			<a class="get-started" href="login.php">Get Started</a>
			<a class="get-started" href="login.php">Login</a>
			<a class="get-started" href="signup.php">Sign Up</a>
			<img src="img/icon/menu.png" class="menu" alt="menu">
		</nav>
		
		<div class="head-container">
			<div class="quote">
				<br><br><br>
				<br>
				<!--<div class="slideshow-container">
					<img src="img/banner-1.jpg" alt="Image 1">
					<img src="img/im3.jpg" alt="Image 2">
					<img src="img/im4.jpg" alt="Image 3">
					<img src="img/im1.jpg" alt="Image 4">
					<img src="img/im2.jpg" alt="Image 5">
					
				</div>-->
				<center>
					<br>
				<p style="color: rgb(255, 255, 255);">The beautiful thing about learning is that nobody can take it away from you.</p> <br>	
			</center>
		
			<div class="hefot">
			<h4 style="color: #d8d5d5;">Plan your Success!
				STUDY AT ITEAM UNIVERSITY</h4> <br>
			<h5 style="color: red; text-decoration: underline;">Read more</h5>
		</div>
		</div>
		</div>
				
	<section class="feature" id="prof">
		
		<div class="boxes" id="prof">
			<img src="img/book.jpg" alt="">
			<br>
			<h2>+72 Total Courses</h2>
			
		</div>
		<div class="boxes">
			<img src="img/etud.png" alt="">
			<h2>+600 Students </h2>
			
		</div>
		<div class="boxes">
			<img src="img/test.png" alt="">
			<h2>+1k tests  </h2>
		</div>
	
		<div class="boxes">
		<img src="img/tike.png" alt="">
		<h2>+30 total Projects</h2>
		</div>
	</div>
	   </section> 

	   <!--invest in your goals-->
	   <div class="service-swipe">
        <div class="diffSection">
            <div >
                <div >
					<center>
                    <p style="font-size: 45px; padding-top: 30px; padding-bottom: 20px;color: #2e2e2e;">Invest in your professional goals </p>
                    </center>
					
                </div>
            </div>
            <div>
                    <div class="totalcard">

                        <div class="card">
							<center>
                            <img src="img/icon1.png" alt="" width="60px" class="mb-4">
                            <h5  class="card-title">Learn anything</h5>
							
                            <p style="padding-bottom: 30px;">Explore any interest or trending topic, take prerequisites, and advance your skills</p>
						</center>
                        </div>
                   
                
                
                    
                        <div class="card">
							<center>
                            <img src="img/icon2.png" alt="" width="60px" class="mb-4">
                            <h5 class="card-title">Save money</h5>
                            <p style="padding-bottom: 30px;">Spend less money on your learning if you plan to take multiple courses this year</p>
						</center>
                        </div>
                    
                
                
                    
                        <div class="card">
						<center>
                            <img src="img/icon3.png" alt="" width="60px" class="mb-4">
                            <h5 class="card-title">Flexible learning</h5>
                            <p style="padding-bottom: 30px;">Learn at your own pace, move between multiple courses, or switch to a different course
                            </p>
						</center>
                        </div>
                   

                        <div class="card">
						<center>
                            <img src="img/icon4.png" alt="" width="60px" class="mb-4">
                            <h5 class="card-title">Unlimited certificates</h5>
                            <p style="padding-bottom: 30px;">Earn a certificate for every learning program that you complete at no additional cost</p>
						</center>
                        </div>
                    </div>
                
            </div>
        </div>
    </div>

	
	<!--about us-->
	<center>
		<p style="font-size: 45px; padding-top: 30px; padding-bottom: 20px;color: #2e2e2e;">About Us</p>
	</center>
	<div class="about" id="about">
		
		<div class=abim>
			<img style="width: 500px;" src="img/about.jpg" alt="">
		</div>
		<div class="cont">
		<div class="quote">
			<br><br><br>
			<h4>Education is the process of facilitating learning, or the acquisition of knowledge, skills, values, <br> beliefs, and habits. 
				 Educational methods include teaching, training, storytelling, discussion <br> and directed research!</h4> <br>
			<h3>Iteam university offers an opportunity to learn and have fun </h3> <br>
				<h5 >We offer you a new ELEARNING experience and unique academic and practical content aimed at transforming <br> knowledge  
				into skills and to move towards an international career in both IT and Business.</h5>
					<div class="play">
					<img src="img/icon/play.png" alt="play"><span><a href="https://www.youtube.com/watch?v=4s9L-Gjt_UI" target="_blank" >Watch Now</a></span>
				</div>
			</div>
		
			
				<ul>
					<div class="cont-ul">
					<li>Online Classes</li>
					<li>International Certificate</li>
				</div>
				<div class="cont-ul">
					<li>Skilled Instructors</li>
					<li>projects</li>
				</div>
				<div class="cont-ul">
					<li>course record</li>
					<li>tests and quiz</li>
				</div>
				</ul>
			</div>
		
		
	</div>

<!-- Some Popular Subjects -->
	<div class="title" id="cours">
		<br> <br>
		<span>Courses on ELIteam</span>
	</div>
	<br><br>
	<div class="course">
		<center><div class="cbox">
		<div class="det"><a href="#"><img src="img/courses/book.png">JEE Preparation</a></div>
		<div class="det"><a href="#"><img src="img/courses/d1.png">HTML CSS</a></div>
		<div class="det"><a href="#"><img src="img/courses/paper.png">Proba</a></div>
		<div class="det"><a href="#"><img src="img/courses/d1.png">Daily Quiz</a></div>
		</div></center>
		<div class="cbox">
		<div class="det"><a href="#"><img src="img/courses/computer.png">Computer Courses</a></div>
		<div class="det"><a href="#"><img src="img/courses/data.png">Data Structures</a></div>
		<div class="det"><a href="#"><img src="img/courses/algo.png">Algorithm</a></div>
		<div class="det det-last"><a href="#"><img src="img/courses/projects.png">Projects</a></div>
		</div>
	</div>
	<br>
     


<!-- SERVICES -->
	<div class="service-swipe" id="services_section">
		<div class="diffSection" id="services_section">
		<center><p style="font-size: 50px; padding: 100px; padding-bottom: 40px; color:#2e2e2e;">Services</p></center>
		</div>
		<a href="#"><div class="s-card"><img src="img/icon/computer-courses.png"><p>Free Online Computer Courses</p></div></a>
		<a href="#"><div class="s-card"><img src="img/icon/brainbooster.png"><p>Building Concepts for Competitive Exams</p></div></a>
		<a href="#"><div class="s-card"><img src="img/icon/online-tutorials.png"><p>Online Video Lectures</p></div></a>
		<a href="#"><div class="s-card"><img src="img/icon/papers.jpg"><p>Sample Papers of Various Competitive Exams</p></div></a>
		<a href="#"><div class="s-card"><img src="img/icon/p3.png"><p>Performance and Ranking Report</p></div></a>
		<a href="#"><div class="s-card"><img src="img/icon/discussion.png"><p>discussion with our teams</p></div></a>
		<a href="#"><div class="s-card"><img src="img/icon/q1.png"><p>training courses</p></div></a>
		<a href="#"><div class="s-card"><img src="img/icon/help.png"><p>24x7 Online Support</p></div></a>
	</div>
	<!--
	<div class="diffSection1" id="calendar_section">
		<center>
			<p style="font-size: 50px; padding-top: 30px; padding-bottom: 20px;color: #2e2e2e;">Next training</p>
		</center>
		<div class="calendar-container">
			<table class="calendar">
				<thead>
					<tr>
						<th>saturday</th>
						<th>monday</th>
						<th>tuesday</th>
						<th>wendesday</th>
						<th>thursday</th>
						<th>friday</th>
						<th>Sunday</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						
						<td><a href="#" title="2023-01-01">Data Science</a></td>
						<td></td>
						<td></td>
						<td><a href="#" title="2023-01-04">JEE</a></td>
						<td></td>
						<td><a href="#" title="2023-01-06">Html Css</a></td>
						<td></td>
						<td class="time-cell">09:00 - 10:30</td>
					</tr>
					<tr>
						<td><a href="jour7.html" title="2023-01-07">Algo</a></td>
						
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td class="time-cell">11:00 - 12:30</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
-->
<br>
<section class="component-margin non-student-cta--non-student-cta-wrapper--0lX2-">
    <div class="container">
        <div class="row">
			<center><h3 style="font-size: 40px; padding-bottom:130px; color:#2e2e2e;"  data-purpose="non-student-cta-title" >Devenir formateur</h3></center> 
            <div class="col-md-6 d-flex align-items-center">
                <img class="img-fluid" src="https://s.udemycdn.com/home/non-student-cta/instructor-1x-v3.jpg" srcset="https://s.udemycdn.com/home/non-student-cta/instructor-1x-v3.jpg 1x, https://s.udemycdn.com/home/non-student-cta/instructor-2x-v3.jpg 2x" alt="Devenir formateur">
            </div>
            <div class="col-md-6 d-flex align-items-center">
                <div class="non-student-cta--non-student-cta--sG5QP" data-purpose="non-student-cta-body">
                    
                    <div class="ud-text-md non-student-cta--non-student-cta__content--CBhbQ" style="font-size: 18px;">Nos formateurs du monde entier donnent des cours à des millions de participants sur Udemy. <br>Nous vous offrons les outils et les compétences nécessaires pour enseigner ce que vous aimez.</div>
                    <div class="non-student-cta--ctas-container--BkUjg">
                        <div class="non-student-cta--non-student-cta__link--yuha9">
							<br><br>
                            <a href="former.php" class="btn btn-primary btn-lg"><span>Commencez à enseigner dès aujourd'hui</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




	
	<div class="diffSection" >
		<center><p style="font-size: 40px; padding-top: 100px; padding-bottom: 60px; color: #2e2e2e;">Our upcoming training courses</p></center>
		<div class="totalcard">
			<div class="card">
				<center><img src="img/icon/ds.png"></center>
				<center><div class="card-title">Data Structures</div>
				<div id="detail">
					<p>Learn the fundamentals of data structures and algorithms to excel in programming interviews and coding challenges. </p>
					<div class="duty"></div>
					<center> <button class="btn-roshan">Enroll Now</button></center>
				</div>
				</center>
			</div>
				<div class="card">
					<center><img src="img/icon/jee.jpg"></center>
					<center><div class="card-title">JEE Preparation</div>
					<div id="detail">
						<p>Prepare for the Joint Entrance Examination (JEE) with our comprehensive study materials and expert guidance. </p>
						<div class="duty"></div>
						 <button class="btn-roshan">Enroll Now</button> 
					</div>
					</center>
				</div>
			<div class="card">
				<center><img src="img/icon/htmlcss.png"></center>
				<center><div class="card-title">HTML CSS</div>
				<div id="detail">
					<p> This accelerated course introduces beginners.You will learn to create appealing web pages, apply styles, and design responsive layouts.</p>
					<div class="duty"></div>
					<button class="btn-roshan">Enroll Now</button> 
				</div>
				</center>
			</div>
		</div>
	</div>
	<!--
	<div class="diffSection1" id="add_training_section">
		<center>
			<p style="font-size: 50px; padding-top: 30px; padding-bottom: 20px;color: #000000;;">Add a Training</p>
		</center>
		<div class="form-container">
			<form action="#" method="post">
				<label style="color: #000000;font-size: 25px;" for="training_date">Training Date:</label>
				<input type="date" id="training_date" name="training_date" required>
	
				<label style="color: #000000;font-size: 25px;" for="training_topic">Training Topic:</label>
				<input type="text" id="training_topic" name="training_topic" required>
	
				<label style="color: #000000;font-size: 25px;" for="training_time">Training Time:</label>
				<input type="time" id="training_time" name="training_time" required>
	
				<button type="submit">Add Training</button>
			</form>
		</div>
	</div>
-->
<!-- CONTACT US -->

	<div class="diffSection" id="contactus_section">
		<center><p style="font-size: 50px; padding-bottom:130px; ">Contact Us</p></center>
		<div class="csec"></div>
		<div class="back-contact">
			<div class="cc">
			<form action="mailto:roshank9419@gmail.com" method="post" enctype="text/plain">
				<div class="name-container">
					<div class="form-group">
						<label for="first-name">First Name:</label>
						<input type="text" id="first-name" name="first-name" required>
					</div>
	
					<div class="form-group">
						<label for="last-name">Last Name:</label>
						<input type="text" id="last-name" name="last-name" required>
					</div>
				</div>
	
				<label style="margin-right: 306px" class="labelInput">Email *</label><br>
				<input type="email" name="mail" style="width: 100%" required="required"><br>
				<label style="margin-right: 306px">Message * </label><br>
				<input type="text" name="message" style="width: 100%" required="required"><br>
				<label style="margin-right: 270px">Additional Details</label><br>
				<textarea name="addtional"></textarea><br>
				<button type="submit" id="csubmit">Send Message</button>
			</form>
			</div>
			  <div class="contact-map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3194.036316294466!2d10.177157974867063!3d36.81764966671721!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12fd35c6c6c907e7%3A0xa33a11411d2aff3d!2siTeam%20University!5e0!3m2!1sfr!2stn!4v1705337105684!5m2!1sfr!2stn"
				 width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				
			  </div>
		</div>
	</div>


<!-- FEEDBACK -->
	<div class="title2" id="feedBACK">
		<span>Give Feedback</span>
		<div class="shortdesc2">
			<p>Please share your valuable feedback to us</p>
		</div>
	</div>

	<div class="feedbox">
		<div class="feed">
			<form action="mailto:roshank9419@gmail.com" method="post" enctype="text/plain">
				<label>Your Name</label><br>
				<input type="text" name="" class="fname" required="required"><br>
				<label>Email</label><br>
				<input type="email" name="mail" required="required"><br>
				<label>Additional Details</label><br>
				<textarea name="addtional"></textarea><br>
				<button type="submit" id="csubmit">Send Message</button>
			</form>
		</div>
	</div>

<!-- Sliding Information -->
	<marquee style="background: linear-gradient(to right, #630229,#110552 ); margin-top: 50px;" direction="left" onmouseover="this.stop()" onmouseout="this.start()" scrollamount="20">
		<div class="marqu">“Education is the passport to the future, for tomorrow belongs to those who prepare for it today.” “Your attitude, not your aptitude, will determine your altitude.” “If you think education is expensive,
			 try ignorance.” “The only person who is educated is the one who has learned how to learn …and change.”</div></marquee>

<!-- FOOTER -->
	<footer>
		<div class="footer-container">
			<div class="left-col">
				<img src="img/icon/iteam.jpg" style="width: 100px;">
				<div class="logo"></div>
				<div class="social-media">
					<a href="#"><img src="img/icon\fb.png"></a>
					<a href="#"><img src="img/icon\insta.png"></a>
					<a href="#"><img src="img/icon\tt.png"></a>
					<a href="#"><img src="img/icon\ytube.png"></a>
					<a href="#"><img src="img/icon\linkedin.png"></a>
				</div><br><br>
				<p class="rights-text">web devoloped by Zahaf Donia and Drira Habib</p>
				<br><p><img src="img/icon/location.png"> Lovely Professional University<br>85-87 Rue Palestine 1002 Tunis</p><br>
				<p><img src="img/icon/phone.png"> +216 22 022 444<br><img src="img/icon/mail.png">&nbsp; info@iteam-univ.tn</p>
			</div>
			<div class="right-col">
				<h1 style="color: #fff">Our Newsletter</h1>
				<div class="border"></div><br>
				<p>Enter Your Email to get our News and updates.</p>
				<form class="newsletter-form">
					<input class="txtb" type="email" placeholder="Enter Your Email">
					<input class="btn" type="submit" value="Submit">
				</form>
			</div>
		</div>
	</footer>
	


	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
	<script src="https://apis.google.com/js/api.js" async defer></script>
	<script>// Liste des chemins d'accès des images
		var images = ["url(img/banner-1.jpg)","url(img/im.jpg)", "url(../img/im2.jpg)", "url(../img/im3.jpg)","url(../img/im3.jpg)"];		var index = 0;
		
		// Fonction pour changer l'image du diaporama
		function changeSlide() {
		  if (index === images.length) {
			index = 0; // Réinitialiser l'index si toutes les images ont été affichées
		  }
		  var slideshowContainer = document.querySelector('.slideshow-container');
		  slideshowContainer.style.backgroundImage = images[index];
		  index++;
		}
		
		// Changer l'image toutes les 3 secondes
		setInterval(changeSlide, 3000);
		</script>

</body>
</html>



<?php }else {
	header("Location: login.php");
	exit;
} ?>