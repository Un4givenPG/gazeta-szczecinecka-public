<?php
include 'Mobile_Detect.php';
$detect = new Mobile_Detect();

if ($detect->isMobile()) {
    header('Location: mobile/memberpage-mobile');  
}
?>
<html>
<head>
<title>Adam's Website</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="/images/favicon.ico" />
<link href='https://fonts.googleapis.com/css?family=Ubuntu:300' rel='stylesheet' type='text/css'>
<link rel="prerender" href="http://gazeta-szczecinecka.pl/projekty">
<link rel="prefetch" href="/images/projects/spoleczna1.png">
<link rel="prefetch" href="/images/projects/spoleczna2.png">
<link rel="prefetch" href="/images/projects/Kronodrzewko_3.png">
<link rel="prefetch" href="/images/projects/Kronodrzewko_5.png">
<link rel="prefetch" href="/images/projects/Dali.png">
<link rel="prefetch" href="/images/wigilijny/poster/wigilijny.jpg">
<link rel="prefetch" href="/images/projects/finis.png">
<link rel="prefetch" href="/images/projects/etc.png">

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-131291178-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-131291178-1');
</script>
<style>
body {
  margin: 0;
  font-family: "Segoe UI Light", "Ubuntu", "Helvetica Neue Ultralight", "Calibri Light";
  overflow:hidden;
}

.adam-img {
  background-image: url("images/adam-background.png");
  background-color: #000000;
  height: 100%;
  width: 100%;
  -webkit-background-size: cover;
         -moz-background-size: cover;
          -o-background-size: cover;
          background-size: cover;
		  position: absolute;
		  -webkit-filter: blur(0.5px);
			-moz-filter: blur(0.5px);
			-o-filter: blur(0.5px);
			-ms-filter: blur(0.5px);
			filter: blur(1.5px);
  
  
}

.adam-text {
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
}
		h1 {
			font-weight: normal;
			margin-top: -4%;
		}
		h3 {
			font-weight: normal;
			margin-bottom: -25 px;
		}
		h4 {
			font-weight: normal;
		}
		a {
			text-decoration: none;
		}
		#mmeennuu {
  display: none;
}
#mmeennuu:checked ~ .menu {
  width: 500px;
  border-radius: 5px;
  background-color: transparent;
  height: 85px;
}
#mmeennuu:checked ~ .menu > ul {
  display: block;
  opacity: 1;
}
#mmeennuu:checked ~ .menu > .barry {
  display: none;
}
.menu {
  display: block;
  margin: 30px auto;
  width: 80px;
  height: 80px;
  background-color: #f44336;
  border: 3px solid transparent;
  border-radius: 50%;
  overflow: hidden;
  cursor: pointer;
  transition: all 0.5s ease-in-out;
  -webkit-transition: all 0.5s ease-in-out;
  -moz-transition: all 0.5s ease-in-out;
  -o-transition: all 0.5s ease-in-out;
  -ms-transition: all 0.5s ease-in-out;
}
.menu div.barry {
  font-size: 25px;
  margin: 20px auto;
}
.menu div.barry .bar {
  display: block;
  width: 100%;
  height: 5px;
  margin-top: 3px;
  border-radius: 2px;
  background-color: #fff;
}
.menu ul {
  opacity: 0;
  display: none;
  transition: all 0.5s ease-in-out;
  -webkit-transition: all 0.5s ease-in-out;
  -moz-transition: all 0.5s ease-in-out;
  -o-transition: all 0.5s ease-in-out;
  -ms-transition: all 0.5s ease-in-out;
  list-style-type: none;
  padding: 0;
  width: 500px;
  text-align: center;
  margin-bottom: 0;
}
.menu ul li {
  display: inline-block;
}
.menu ul li a {
  text-decoration: none;
  display: inline-block;
  padding: 15px 25px;
  color: #f44336;
  font-size: 20px;
  transition: all 0.3s ease-in-out;
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  -ms-transition: all 0.3s ease-in-out;
  border: 3px solid transparent;
  border-radius: 5px;
}
.menu ul li a:hover {
  border-color: #f44336;
}
.menu ul li a:target {
  border-bottom-color: #f44336;
}
.off {
  pointer-events: none;
  cursor: default;
  text-decoration: none;
  color: yellow !important;
}
</style>
<link rel='shortcut icon' type='image/x-icon' href='/favicon.ico' />
</head>
<body scroll="no" oncontextmenu="return false;">
<div class="adam-img"></div>
  <div class="adam-text">
  <img id="logo" src="/images/logo-adam.png" width="1000" />
    <h1>Adam Adamczyk</h1>
    <h3>Projekt na zajęcia informatyczne</h3>
   <input type='checkbox' id='mmeennuu'>
<label class='menu' for='mmeennuu'>

<div class='barry'>
    Start
</div>
    
<ul>
    <li><a id='home' class="off">Home</a></li>
    <li><a id='about' href="/projekty">Projekty</a></li>
    <li><a id='contact' href="https://panel.home.pl/">Panel</a></li>
    <li><a id='link' href='logout'>Wyloguj</a></li>
</ul>

</label>



</body>
</html>
