<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Koncert „Finis Coronat Opus”</title>
<link href='https://fonts.googleapis.com/css?family=Ubuntu:300' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="/resources/UberGallery.css" />
<link rel="stylesheet" type="text/css" href="/resources/colorbox/3/colorbox.css" />
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript" src="/resources/colorbox/jquery.colorbox.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $("a[rel='colorbox']").colorbox({maxWidth: "90%", maxHeight: "90%", opacity: ".5"});
});
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-131291178-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-131291178-1');
</script>
<style type="text/css">
		body {
			
			font-family: "Segoe UI Light", "Ubuntu", "Helvetica Neue Ultralight", "Calibri Light";
			/*text-shadow: 1px 1px rgba(0,0,0,0.5);*/
			color: white;
		}
		h1 {
			font-weight: normal;
			font-size: 55px;
			margin-top: -10px;
			margin-bottom:-20px;
			-webkit-text-stroke-width: 0.8px;
			-webkit-text-stroke-color: black;
			text-shadow:
			-1px -1px 0 #000,  
			1px -1px 0 #000,
			-1px 1px 0 #000,
			1px 1px 0 #000;
		}
		h3 {
			font-weight: normal;
		}
		h4 {
			font-weight: normal;
		}
		a {
			text-decoration: none;
			color: rgb(64, 255, 64);
		}
		.bg-img {
			position: fixed;
			width: 100%;
			height: 100%;
			top:0px;
			left:0px;
			background-size: cover;
			background-repeat: no-repeat;
			background-position: 50% 50%;
			background-image: url("/images/adam-background.png");
			-webkit-filter: blur(1.5px);
			-moz-filter: blur(1.5px);
			-o-filter: blur(1.5px);
			-ms-filter: blur(1.5px);
			filter: blur(1.5px);
		}
		.blur {
			-webkit-filter: blur(5px);
			-moz-filter: blur(5px);
			-o-filter: blur(5px);
			-ms-filter: blur(5px);
			filter: blur(5px);
		}
		.overlay {
			background-color: rgba(0, 0, 0, 0.4);
		}
		.row {
			position: relative;
			width: 880px;
			height: 500px;
			margin: 0 auto;
			padding: 10px;
		}
		.project {
			position: absolute;
			background-color: rgba(255,255,255,0.25);
			backdrop-filter: blur(10px);
			-webkit-backdrop-filter: blur(10px);
			display: table;
			padding: 10px;
			border-radius: 5px;
			margin: 5px auto;
			width: 410px;
		}
		.button {
			padding: 5px;
			background-color: rgba(255,255,255,0.5);
			backdrop-filter: blur(5px);
			-webkit-backdrop-filter: blur(5px);
			color: black;
			border-radius: 5px;
			margin: 5px;
		}
		.button:hover {
			background-color: rgba(255,255,255,0.8);
		}
		.button a {
			color: black;
		}
		.project img {
			border-radius: 5px;
		}
		.gallery {
			margin-left: 450px;
    margin-right: auto;
		}
		.gallery-text {
			font-weight: normal;
			font-size: 45px;
			-webkit-text-stroke-width: 0.8px;
			-webkit-text-stroke-color: black;
			text-shadow:
			-1px -1px 0 #000,  
			1px -1px 0 #000,
			-1px 1px 0 #000,
			1px 1px 0 #000;
		}
.fullscreen-bg {
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  overflow: hidden;
  z-index: -100;
  -webkit-filter: blur(10px);
			-moz-filter: blur(4px);
			-o-filter: blur(4px);
			-ms-filter: blur(4px);
			filter: blur(4px);
}

.fullscreen-bg__video {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}

@media (min-aspect-ratio: 16/9) {
  .fullscreen-bg__video {
    height: 300%;
    top: -100%;
  }
}

@media (max-aspect-ratio: 16/9) {
  .fullscreen-bg__video {
    width: 300%;
    left: -100%;
  }
}

@media (max-width: 767px) {
  .fullscreen-bg {
    background: url('../img/videoframe.jpg') center center / cover no-repeat;
  }

  .fullscreen-bg__video {
    display: none;
  }

		</style>
</head>
<body cz-shortcut-listen="true" oncontextmenu="return false;">
<div class="fullscreen-bg">
        <video loop muted autoplay poster="/images/finis/tlo/still-fco.png" class="fullscreen-bg__video">
            <source src="/images/finis/tlo/FCE-tlo.webm" type="video/webm">
        </video>
    </div>
<div style="width: 100%; height: 100%;text-align: center;">
<div style="position:relative;width:100%;height:500px;vertical-align: middle;">
<img src="/images/logo-adam-small.png" width="600">
<h1>Koncert</h1>
<h1>„Finis Coronat Opus”</h1>

<br><br>
<div class="gallery-text">Galeria z eventu</div>
<div class="galeria" style="margin-left: 6%;>
<?php include_once('/resources/UberGallery.php'); $gallery = UberGallery::init()->createGallery('/images/finis'); ?>
</div>

