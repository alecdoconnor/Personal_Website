<?php
  function showStars($rating) {
  	//print stars for skills rating
  	$empty = "";
  	print "<div style=\"display:inline;float:right;\">";
  	for($i=0; $i<5; $i++) {
  		if ($i >= $rating) {
  			$empty = "-empty";
  		}
  		print "<span class=\"glyphicon glyphicon-star" . $empty . "\" style=\"margin:1px;\"></span>";
  	}
  	print "</div>";
  }
  function listItem($title,$rating) {
  	echo "<li class=\"list-group-item\" style=\"text-align:left;\">";
  	echo $title;
	echo showStars($rating);
	echo "</li>";
  }
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Alec O&#039;Connor</title>
		<!-- Latest compiled and minified CSS -->
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<!-- jQuery library -->
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<!-- Latest compiled JavaScript -->
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="style/style.css">
		<link href="https://fonts.googleapis.com/css?family=Quicksand|Lato" rel="stylesheet">
		
		<script>
		window.fadeIns = function(obj) {
			$(obj).animate({opacity:1})
		}
		</script>
		<script>
			
		</script>
		
	</head>
	<body>	
		<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-78245580-1', 'auto');
  ga('send', 'pageview');

</script>	
		<nav class="navbar navbar-default" style="position:fixed; top:0; right:0; left:0;" id="myNav">
			<div class="container-fluid">
				<div class="navbar-header">
	  		    	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						<span class="icon-bar"></span>
    				    <span class="icon-bar"></span>
    				    <span class="icon-bar"></span>
    				</button>
					<a class="navbar-brand" href="index.php">ADO Systems</a>
				</div>
				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav navbar-right">
						<li class="active">
							<a href="index.php">Home</a>
						</li>
						<li>
							<a href="about.php">About</a>
						</li>
						<li>
							<a href="services.php">Services</a>
						</li>
						<li>
							<a href="contact.php">Contact</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
        
		<header class="section sec1">
			<section class="container">
            	<div style="height:100px;" ><!--Used as filler for menu bar location--></div>
				<h1 class="emphasis section-content">REINVENTING MOBILE<br />ELEGANCE</h1>
				<div class="hline"></div>
				<h4 class="section-content">Building mobile software with one main goal: to define and create solutions to the not-so-obvious issues.</h4>
				<div class="flatButtonContainer">
                	<form action="mailto:alec@alecoconnor.com">
                	<button type="submit" class="flatButton">Contact Me</button>
                	</form>
                	<div class="social">
                		<a href="https://www.linkedin.com/in/alecdoconnor"><img src="images/iconmonstr/linkedin.PNG" onload="fadeIns(this)" style="opacity:0;" /></a>
                		<a href="https://instagram.com/alecdoconnor"><img src="images/iconmonstr/instagram.PNG" onload="fadeIns(this)" style="opacity:0;" /></a>
                		<a href="https://github.com/alecdoconnor"><img src="images/iconmonstr/github.PNG" onload="fadeIns(this)" style="opacity:0;" /></a>
                	</div>
                </div>
			</section>
		</header>
		<div class="section sec2">
			<section class="container section-content">
				<h2>About Me</h2>
				<div class="hline light"></div>
				<h4 class="section-content">
				I am an industrial engineer turned computer scientist. While I studied industrial engineering at the University of Central Florida, programming is what I am passionate about. I have been writing code since 2009 and don&#039;t plan on stopping any time soon!
				</h4>
			</section>
		</div>
		
		<div class="section sec3">
			<section class="container section-content">
				<h2>Skills</h2>
				<div class="hline light"></div>
				<div class="cs">
				<h3>Computer Science</h3>
				<p style="max-width:500px;margin-top: 30px; margin-left: auto; margin-right: auto;">With <?php echo date("Y")-2009; ?> years of self-taught experience under my belt, I feel quite comfortable programming in a large array of environments. I am a full-stack developer with a primary focus on mobile and web development.</p>
				<br />
				<div class="col-sm-4">
					<ul>
						<li class="list-group-item active">
							Mobile
						</li>
						<?php
						listItem("Mobile Development",5);
						listItem("Xcode / Interface Builder",5);
						listItem("Swift",5);
						listItem("Mobile App Design",5);
						listItem("Distribution",5);
						?>
					</ul>
				</div>
				
				<div class="col-sm-4">
					<ul>
						<li class="list-group-item active">
							Web
						</li>
						<?php
						listItem("Website Development",5);
						listItem("HTML/CSS",5);
						listItem("PHP/MySQL",5);
						listItem("Javascript",5);
						listItem("Custom API Creation",4);
						?>
					</ul>
				</div>
				
				<div class="col-sm-4">
					<ul>
						<li class="list-group-item active">
							Server
						</li>
						<?php
						listItem("Server Management",5);
						listItem("Git",5);
						listItem("UNIX/Mac/Windows<br />Environments",5);
						listItem("Command-line Control",5);
						listItem("Networks",5);
						?>
					</ul>
				</div>
				<div class="col-sm-12">
					<ul>
						<li class="list-group-item active">
							Extras
						</li>
						<?php
						listItem("Project Management",5);
						listItem("Excel Macros",5);
						listItem("Entrepreneurship",5);
						listItem("Branding and Consulting",5);
						listItem("Photoshop",5);
						listItem("Experience with C/C++",3);
						?>
					</ul>
				</div>

				<!--fixes formatting error for desktop computer background-->
				<div>&nbsp;</div>
				</div>
				
				
				<div class="ie">
				<h3>Industrial Engineering</h3>
				<p style="max-width:500px;margin-top: 30px; margin-left: auto; margin-right: auto;">An Industrial Engineer's job is process improvement. We aim to clarify and optimize processes while reducing overhead costs. Our focus always remains on the quality of our products, although our skills enable us to work swiftly.</p>
				<br />
				
				<div class="col-sm-6">
					<ul>
						<?php
						listItem("Quality Engineering",5);
						listItem("Manufacturing Engineering",5);
						listItem("Production and Distribution",4);
						listItem("Facilities Planning",4);
						listItem("Human Engineering",4);							?>
					</ul>
				</div>
				
				<div class="col-sm-6">
					<ul>
						<?php
						listItem("Systems Engineering",5);
						listItem("Enineering Management<br />and Leadership",5);
						listItem("Work Analysis and Design",5);
						listItem("System Simulation",4);
						listItem("Operations Research",3);							?>
					</ul>
				</div>
				<!--fixes formatting error for desktop computer background-->
				<div>&nbsp;</div>
				</div>
			</section>
		</div>
		
		<div class="section sec4">
			<section class="container section-content">
				<h2>Fun Facts</h2>
				<div class="hline light"></div>
				<div id="funfact">
					<div class="funfact">
						<div class="ffimage"></div>
						<div class="ffdetail"><div>FunFact</div></div>
					</div>
					<div class="funfact">
						<div class="ffimage"></div>
						<div class="ffdetail"><div>FunFact</div></div>
					</div>
					<div class="funfact">
						<div class="ffimage"></div>
						<div class="ffdetail"><div>FunFact</div></div>
					</div>
					<div class="funfact">
						<div class="ffimage"></div>
						<div class="ffdetail"><div>FunFact</div></div>
					</div>
					<div class="funfact">
						<div class="ffimage"></div>
						<div class="ffdetail"><div>FunFact</div></div>
					</div>
					<div class="funfact">
						<div class="ffimage"></div>
						<div class="ffdetail"><div>FunFact</div></div>
					</div>
					<div class="funfact">
						<div class="ffimage"></div>
						<div class="ffdetail"><div>FunFact</div></div>
					</div>
					<div class="funfact">
						<div class="ffimage"></div>
						<div class="ffdetail"><div>FunFact</div></div>
					</div>
				</div>
				<h4>rubik&#039;s cube, 90wpm, 3d printer and laser cutter, engineer who can speak and write</h4>
			</section>
		</div>
		
		<div class="section sec5">
			<section class="container section-content">
				<h1>Recent Work</h1>
				<div class="hline light"></div>
				<p>and content for real reading</p>
			</section>
		</div>
		
		<div class="section sec6">
			<section class="container section-content">
				<h1>HEADINGS</h1>
				<p>and content for real reading</p>
			</section>
		</div>
		
		
		<footer class="section">
			<section class="container">
			<p>Copyright &copy; <?php echo Date("Y"); ?> Alec O&#039;Connor</p>
			<p><a href="mailto:alec@alecoconnor.com?subject=Website%20Contact%20Form">Alec@Alecoconnor.com</a></p>
               <div class="social" style="margin:10px;">
                <a href="https://www.linkedin.com/in/alecdoconnor"><img src="images/iconmonstr/linkedin.PNG" onload="fadeIns(this)" style="opacity:0;" /></a>
                <a href="https://instagram.com/alecdoconnor"><img src="images/iconmonstr/instagram.PNG" onload="fadeIns(this)" style="opacity:0;" /></a>
                <a href="https://github.com/alecdoconnor"><img src="images/iconmonstr/github.PNG" onload="fadeIns(this)" style="opacity:0;" /></a>
               </div>
			</section>
		</footer>
	</body>
</html>