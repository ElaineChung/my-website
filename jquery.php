<!DOCTYPE html>
<html>
<head>
	<title>Page Title</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
	<script src="anime.min.js"></script>
	<script type="text/javascript" src="/js/moving-letters.js"></script>
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script src="jquery.slides.min.js"></script>
	<style type="text/css">
	@import "style.css";
	
	</style>
</head>
<body>
	<!-- Note -->
	<div style="background:#e1d0c3;padding:15px">
	  <h4 style="text-align:center"></h4>
	</div>

	<!-- Header -->
	<div class="header">
	  <h1 class="ml3">My Website</h1>
	  <p><b>Learning</b> is Life.</p>
	</div>

	<!-- Navigation Bar -->
	<div class="navbar">
	  <a href="https://127.0.0.1/elaine.php">Home</a>
	  <a href="https://127.0.0.1/business.php">Business card</a>
	  <a href="https://127.0.0.1/portfolio.php">Portfolio</a>
	  <a href="https://127.0.0.1/autobiography.php">Autobiography</a>
	</div>

	<!-- The flexible grid (content) -->
	<div class="row">
		<div class="side">  
		<h2>List</h2>
			<ul>
			  <li><a href="https://127.0.0.1/jquery.html">JQuery</a></li>
			  <li><a href="#">CSS</a></li>
			  <li><a href="#">HTML</a></li>
			</ul>
	  </div>
		<div class="main">
		  <h2>JQuery Load</h2>
		  <h5>Title description, Dec 7, 2017</h5>
			<div class="fakeimg" style="height:200px;">Image</div>
			<p>Some text..</p>
			<p><p><br>&lt;script&gt;<br />
					<br>$(document).ready(function(){ <br />
					<br>&nbsp; &nbsp;&nbsp; &nbsp;$('#content').load("new.html")<br /> 
					<br>;&nbsp;})
					<br />
					<br>;&lt;/script&gt;<br /></p>
				<p>
				<br>&lt;body&gt;<br>
					<br>&lt;div id="content"&gt;&lt;/div&gt;<br>
				</p></p>
			<br>
			
		</div>
	</div>

	<!-- Footer -->
	<div class="footer">
	  <h2>Footer</h2>
	</div>

<script type="text/javascript" src="moving.js"></script>

</body>
</html>