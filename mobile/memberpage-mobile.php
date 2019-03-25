<html>

<head>
<title>Adam's Website</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="/images/favicon.ico" />
<link href='https://fonts.googleapis.com/css?family=Ubuntu:300' rel='stylesheet' type='text/css'>
<style>
body {
  margin: 0;
  font-family: "Segoe UI Light", "Ubuntu", "Helvetica Neue Ultralight", "Calibri Light";
  overflow:hidden;
}

.adam-img {
  background-image: url("/images/Adam_logo_vertical_new.png");
  background-color: #000000;
  height: 100%;
  width: 100%;
  top:0px;
  left:0px;
  background-position: absolute;
  background-repeat: repeat;
  background-size: contain;
  background-position: center;
  
}

.adam-text {
  text-align: center;
  position: absolute;
  top: 65%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
}
		h1 {
			font-weight: normal;
		}
		h3 {
			font-weight: normal;
		}
		h4 {
			font-weight: normal;
		}
		a {
			text-decoration: none;
		}
.link1 {
				
}
.link2 {
				
}
.link3 {
				
}
.link4 {
	margin-top: 15%;			
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
  padding: 1px 8px;
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
</head>
<body scroll="no">
<script>
var fixed = document.getElementById('fixed');

fixed.addEventListener('touchmove', function(e) {

        e.preventDefault();

}, false);
</script>

<div class="adam-img"></div>
  <div class="adam-text">
  
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
