<!DOCTYPE html>
<html lang="de">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Protzen-IT</title>
	<!-- Stylesheets -->
	<link rel="stylesheet" href="/res/css/main.css" />
	<link rel="stylesheet" href="/res/css/home.css" />
	<link rel="stylesheet" href="/res/css/footer.css" />
	<link rel="stylesheet" href="/res/css/animations.css" />
	<link rel="stylesheet" href="style.css" />
	<!-- Icons -->
	<link rel="icon" type="image/png" href="/res/img/icons/favicon-96x96.png" sizes="96x96" />
	<link rel="icon" type="image/svg+xml" href="/res/img/icons/favicon.svg" />
	<link rel="shortcut icon" href="/res/img/icons/favicon.ico" />
	<link rel="apple-touch-icon" sizes="180x180" href="/res/img/icons/apple-touch-icon.png" />
	<!-- Other Stuff -->
	<meta name="apple-mobile-web-app-title" content="Protzen-IT" />
	<link rel="manifest" href="/res/img/icons/site.webmanifest" />
	<meta name="theme-color" content="#f5f5f7" />
	<meta name="format-detection" content="telephone=no" />
</head>

<body>
	<main>
		<div class="page halfheight" id="home">
			<nav>
				<img src="/res/img/logo/Arrow-Black.svg" alt="" />
			</nav>
			<main>
				<h1>Protzen-IT</h1>
				<h3>IT aus Baden-Baden</h3>
			</main>
			<div class="downArrow">
				<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
					<path stroke-linecap="round" stroke-linejoin="round" d="m4.5 5.25 7.5 7.5 7.5-7.5m-15 6 7.5 7.5 7.5-7.5" />
				</svg>
			</div>
		</div>
		<svg class="transition" viewBox="0 0 1920 300" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1">
			<path d="M0 109L53.3 101C106.7 93 213.3 77 320 69C426.7 61 533.3 61 640 68.5C746.7 76 853.3 91 960 91.5C1066.7 92 1173.3 78 1280 74C1386.7 70 1493.3 76 1600 84.5C1706.7 93 1813.3 104 1866.7 109.5L1920 115L1920 0L1866.7 0C1813.3 0 1706.7 0 1600 0C1493.3 0 1386.7 0 1280 0C1173.3 0 1066.7 0 960 0C853.3 0 746.7 0 640 0C533.3 0 426.7 0 320 0C213.3 0 106.7 0 53.3 0L0 0Z" fill="#f5f5f7"></path>
			<path d="M0 196L53.3 200.5C106.7 205 213.3 214 320 210.5C426.7 207 533.3 191 640 183.5C746.7 176 853.3 177 960 180.5C1066.7 184 1173.3 190 1280 198.5C1386.7 207 1493.3 218 1600 217.5C1706.7 217 1813.3 205 1866.7 199L1920 193L1920 113L1866.7 107.5C1813.3 102 1706.7 91 1600 82.5C1493.3 74 1386.7 68 1280 72C1173.3 76 1066.7 90 960 89.5C853.3 89 746.7 74 640 66.5C533.3 59 426.7 59 320 67C213.3 75 106.7 91 53.3 99L0 107Z" fill="#e6e6f3"></path>
			<path d="M0 262L53.3 262C106.7 262 213.3 262 320 252C426.7 242 533.3 222 640 214C746.7 206 853.3 210 960 218C1066.7 226 1173.3 238 1280 247.5C1386.7 257 1493.3 264 1600 265.5C1706.7 267 1813.3 263 1866.7 261L1920 259L1920 191L1866.7 197C1813.3 203 1706.7 215 1600 215.5C1493.3 216 1386.7 205 1280 196.5C1173.3 188 1066.7 182 960 178.5C853.3 175 746.7 174 640 181.5C533.3 189 426.7 205 320 208.5C213.3 212 106.7 203 53.3 198.5L0 194Z" fill="#d8d8ef"></path>
			<path d="M0 301L53.3 301C106.7 301 213.3 301 320 301C426.7 301 533.3 301 640 301C746.7 301 853.3 301 960 301C1066.7 301 1173.3 301 1280 301C1386.7 301 1493.3 301 1600 301C1706.7 301 1813.3 301 1866.7 301L1920 301L1920 257L1866.7 259C1813.3 261 1706.7 265 1600 263.5C1493.3 262 1386.7 255 1280 245.5C1173.3 236 1066.7 224 960 216C853.3 208 746.7 204 640 212C533.3 220 426.7 240 320 250C213.3 260 106.7 260 53.3 260L0 260Z" fill="#cacaea"></path>
		</svg>
		<div class="page minheight" id="impressum">
			<h1>Impressum nach TMG §5</h1>
			Für den Inhalt dieser Website verantwortlich:
			<?php
			include_once $_SERVER["DOCUMENT_ROOT"] . "/secrets.php";
			echo ($SECRETS["Adresse"]);
			?>
			<h2>Kontakt</h2>
			Kontaktionformationen sind in der Fußzeile zu finden.
			<h2>Haftung</h2>
			Ich übernehme keine Haftung für die Inhalte externer Links. Für den Inhalt der verlinkten Seiten sind ausschließlich deren Betreiber verantwortlich.
		</div>
		<svg class="transition" id="footerTransition" viewBox="0 0 1920 300" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1">
			<path d="M0 207L53.3 205.5C106.7 204 213.3 201 320 194.8C426.7 188.7 533.3 179.3 640 179.3C746.7 179.3 853.3 188.7 960 195.7C1066.7 202.7 1173.3 207.3 1280 216.8C1386.7 226.3 1493.3 240.7 1600 249.5C1706.7 258.3 1813.3 261.7 1866.7 263.3L1920 265L1920 0L1866.7 0C1813.3 0 1706.7 0 1600 0C1493.3 0 1386.7 0 1280 0C1173.3 0 1066.7 0 960 0C853.3 0 746.7 0 640 0C533.3 0 426.7 0 320 0C213.3 0 106.7 0 53.3 0L0 0Z" fill="#f5f5f7"></path>
			<path d="M0 206L53.3 202.2C106.7 198.3 213.3 190.7 320 190.5C426.7 190.3 533.3 197.7 640 189.3C746.7 181 853.3 157 960 156.3C1066.7 155.7 1173.3 178.3 1280 190.7C1386.7 203 1493.3 205 1600 194.7C1706.7 184.3 1813.3 161.7 1866.7 150.3L1920 139L1920 0L1866.7 0C1813.3 0 1706.7 0 1600 0C1493.3 0 1386.7 0 1280 0C1173.3 0 1066.7 0 960 0C853.3 0 746.7 0 640 0C533.3 0 426.7 0 320 0C213.3 0 106.7 0 53.3 0L0 0Z" fill="#e6e6f3"></path>
			<path d="M0 80L53.3 84.8C106.7 89.7 213.3 99.3 320 108C426.7 116.7 533.3 124.3 640 125.2C746.7 126 853.3 120 960 114.7C1066.7 109.3 1173.3 104.7 1280 108.7C1386.7 112.7 1493.3 125.3 1600 132.5C1706.7 139.7 1813.3 141.3 1866.7 142.2L1920 143L1920 0L1866.7 0C1813.3 0 1706.7 0 1600 0C1493.3 0 1386.7 0 1280 0C1173.3 0 1066.7 0 960 0C853.3 0 746.7 0 640 0C533.3 0 426.7 0 320 0C213.3 0 106.7 0 53.3 0L0 0Z" fill="#d8d8ef"></path>
			<path d="M0 63L53.3 61.7C106.7 60.3 213.3 57.7 320 57.7C426.7 57.7 533.3 60.3 640 65.2C746.7 70 853.3 77 960 82C1066.7 87 1173.3 90 1280 90.7C1386.7 91.3 1493.3 89.7 1600 79C1706.7 68.3 1813.3 48.7 1866.7 38.8L1920 29L1920 0L1866.7 0C1813.3 0 1706.7 0 1600 0C1493.3 0 1386.7 0 1280 0C1173.3 0 1066.7 0 960 0C853.3 0 746.7 0 640 0C533.3 0 426.7 0 320 0C213.3 0 106.7 0 53.3 0L0 0Z" fill="#cacaea"></path>
		</svg>
	</main>
	<footer>
		<div class="container">
			<div class="l">
				<img src="/res/img/logo/Arrow-Black.svg" alt="" srcset="" />
				<br />
				Protzen-IT
			</div>
			<div class="m">
				<h2>Kontakt</h2>
				<p class="sensitive">ed.ti-neztorp@tkatnok</p>
				<p class="sensitive">8391<span class="sensitive-no">1</span>8187<span class="sensitive-no">0</span>651<span class="sensitive-no">1</span>94+</p>
			</div>
			<div class="r">
				<h2>Weitere Links</h2>
				<p><a href="/impressum/">Impressum</a></p>
				<p><a href="/datenschutz/">Datenschutzerkl&auml;rung</a></p>
			</div>
		</div>
	</footer>
</body>

</html>