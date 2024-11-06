<!DOCTYPE html>
<html>
<head>
	<title>Meni Slider Portfolio</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>


	<div class="header">
		<img src="img/logo.png">

		<button onclick="mobileMenu()">MENU</button>

		<ul>
			<li><a href="#">Početna</a></li>
			<li><a href="#">O nama</a></li>
			<li><a href="#">Usluge</a></li>
			<li><a href="#">Galerija</a></li>
			<li><a href="#">Kontakt</a></li>
		</ul>
	</div>

	<h2>Galerija</h2>

	<div class="slider-wrapper">
        <button id="left-btn"><i class="arrow"></i></button>
        <div class="slider-images">
        	<img src="img/slide1.jpg">
        	<img src="img/slide2.jpg">
        	<img src="img/slide3.jpg">
        </div>
        <button id="right-btn"><i class="arrow"></i></button>
    </div>

    <h2>Portfolio</h2>

    <div class="portfolio-wrapper">
	    <div class="portfolio-categories">
	    	<button data-category='sve' onclick="portfolioSort(this)">Sve</button>
	    	<button data-category='restorani' onclick="portfolioSort(this)" class="brown">Restorani</button>
	    	<button data-category='hoteli' onclick="portfolioSort(this)" class="blue">Hoteli</button>
	    	<button data-category='korporacije' onclick="portfolioSort(this)" class="green">Korporacije</button>
	    	<button data-category='ostalo' onclick="portfolioSort(this)" class="rose">Ostalo</button>
	    </div>

	    <div class="portfolio-items">
	    	<div class="portfolio-single-item blue" data-category='hoteli'>
	    		<h3>Hotel 1</h3>
	    	</div>

	    	<div class="portfolio-single-item rose" data-category='ostalo'>
	    		<h3>Startup</h3>
	    	</div>

	    	<div class="portfolio-single-item blue" data-category='hoteli, restorani'>
	    		<h3>Hotel & Restoran</h3>
	    	</div>

	    	<div class="portfolio-single-item green" data-category='korporacije'>
	    		<h3>Korporacija 1</h3>
	    	</div>

	    	<div class="portfolio-single-item brown" data-category='restorani'>
	    		<h3>Restoran 1</h3>
	    	</div>

	    	<div class="portfolio-single-item rose" data-category='ostalo'>
	    		<h3>XYZ Orgranizacija</h3>
	    	</div>

	    	<div class="portfolio-single-item blue" data-category='hoteli'>
	    		<h3>Hotel 2</h3>
	    	</div>

	    	<div class="portfolio-single-item green" data-category='korporacije'>
	    		<h3>Korporacija 2</h3>
	    	</div>

	    	<div class="portfolio-single-item brown" data-category='restorani'>
	    		<h3>Restoran 2</h3>
	    	</div>
	    </div>
    </div>

    <div class="modal-section">
    	<button onclick="openModal()">Modal Button</button>
    </div>


    <div class="popup-modal">
    	<button id="closeModal" onclick="closeModal()">X</button>

    	<h4>Modal Title</h4>
    	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </div>

    <div class="overlay"></div>

	<script type="text/javascript" src="script.js"></script>
</body>
</html>
