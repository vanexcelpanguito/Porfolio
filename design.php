<!DOCTYPE html>
<html>
<head>
  <title>Van Excel Panguito Portfolio</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-with, inital-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i|Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Slabo+27px" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">

  <style type="text/css" rel="stylesheet">
    *{
      font-family: Poppins;
    }
	.portfolio-wrapper{
		width: 100%;
		height: auto;
		float: left;
		margin-bottom: 20px;
	}
	.portfolio-container{
		width: 200px;
		height: auto;
		margin: 0 auto;

	}
	.portfolio-container div{
		width: 200px;
		height: 150px;
		float: left;
		background-color: #ebe8e3;
		margin-top: 10px;
	}
	.portfolio-container div:hover{
		background-color: #acac;
		color: #fff;
	}

	.portfolio-container div p{
		text-align: center;
		font-size: 24px;
		padding-top: 60px;
	}
	@media only screen and (min-width: 765px){ /*start of media query for design link in portfolio page. this section is for ipad*/

	.portfolio-container{
		width: 500px;
		height: auto;
		margin: 0 auto;
	}
	.portfolio-container div{
		width: 200px;
		height: 150px;
		float: left;

		margin: 50px 20px 0 20px;
	}
	#gallery{
		margin-bottom: 50px;
	}
	.portfolio-container div p{
		text-align: center;
		font-size: 24px;
		padding-top: 60px;
	}
	}
	@media only screen and (min-width: 1000px){ /*start of media query for Portfolio. this section is for desktop*/
	.portfolio-container{
		width: 500px;
		height: auto;
		margin: 0 auto;
	}
	.portfolio-container div{
		width: 200px;
		height: 150px;
		float: left;
		margin: 50px 20px 0 20px;
	}
	#gallery{
		margin-bottom: 50px;
	}
	.portfolio-container div p{
		text-align: center;
		font-size: 24px;
		padding-top: 60px;
	}
	}
  </style>
</head>
<body>
  <header class="main-header"> <!--section for header-->
  <div class="header-container">
      <a class="header-logo" href="index.php">VAN EXCEL</a> <!--LOGO-->
      <nav class="navigation">  <!--Navigation links-->
        <ul>
          <li><a href="about.php">About me</a></li>
          <li><a href="portfolio.php">Portfolio</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
      </nav>
      <a class="header-email" href="#">Email me</a>
  </div>
  </header>
    <main class="portfolio-wrapper" >
      <section class="portfolio-container">
		<a class="port-link" href="company.php">
			<div class="gallery">
			  <p>COMPANY</p>
			</div>
		</a>
		<a class="port-link" href="vet.php">
			<div class="gallery">
			  <p>VET</p>
			</div>
		</a>
		<a class="port-link" href="catering.php">
			<div id="gallery" class="gallery">
			  <p>CATERING</p>
			</div>
		</a>
		<a  class="port-link" href="salon.php">
			<div  id="gallery" class="gallery">
			  <p>SALON</p>
			</div>
		</a>
      </section>
    </main>
    <footer>
      <div class="footer-container">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="portfolio.php">Portfolio</a></li>
          <li><a href="about.php">About me</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
        <div class="socialmedia-links">
          <a href="https://mail.google.com/mail/u/0/#inbox" target="_blank"><img src="img/gmail.png" ></a>
          <a href="https://www.facebook.com/vanexcel.panguito" target="_blank"><img src="img/fb.png"></a>
          <a href="https://www.instagram.com/vanexcelpanguito/?hl=en" target="_blank"><img src="img/instagram.png"></a>
        </div>
      </div>
    </footer>
  </div>


</body>
</html>
