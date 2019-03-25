<?php
require_once('includes/config.php');

//sprawdzamy zalogowanie, jak tak to memberpage
if( $user->is_logged_in() ){ header('Location: memberpage'); exit(); }

//formularz 
if(isset($_POST['submit'])){

	if (!isset($_POST['username'])) $error[] = "Proszę wypełnić wszyskie pola";
	if (!isset($_POST['password'])) $error[] = "Proszę wypełnić wszyskie pola";

	$username = $_POST['username'];
	if ( $user->isValidUsername($username)){
		if (!isset($_POST['password'])){
			$error[] = 'Proszę wprowadzić hasło';
		}
		$password = $_POST['password'];

		if($user->login($username,$password)){
			$_SESSION['username'] = $username;
			$_SESSION['memberID'] = x;
			header('Location: memberpage');
			exit;

		} else {
			$error[] = 'Zła nazwa użytkownika lub hasło.';
		}
	}else{
		$error[] = 'Nazwa użytkownika nie powinna zawierać znaków specjalnych i składać się z 3 - 16 znaków';
	}



}

//tytuł
$title = 'Adam Website Login';

//header
require('layout/header.php'); 
?>
<head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-131291178-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-131291178-1');
</script>
<script>
document.addEventListener('contextmenu', event => event.preventDefault());
</script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Ubuntu:300" rel="stylesheet">
<link rel="prerender" href="/memberpage">
<link rel="prefetch" href="/images/adam-background.png">
<link rel="prefetch" href="/images/logo-adam.png">
<style>
body {
  margin: 0;
  font-family: "Segoe UI Light", "Ubuntu", "Helvetica Neue Ultralight", "Calibri Light";
  overflow:hidden;
}
.adam-img {
  background-image: url("/images/adam-login-background-blurred.png");
  background-color: #000000;
  height: 100%;
  width: 100%;
  -webkit-background-size: cover;
         -moz-background-size: cover;
          -o-background-size: cover;
          background-size: cover;
		  position: absolute;
  
}
</style>
<link rel='shortcut icon' type='image/x-icon' href='/favicon.ico' />
</head>
<body scroll="no" oncontextmenu="return false;">
<div class="adam-img"></div>
<div class="container">

	<div class="row">

	    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
			<form role="form" method="post" action="" autocomplete="off">
				<h2><font color="white">Proszę się zalogować</font></h2>
				<hr>

				<?php
				//check for any errors
				if(isset($error)){
					foreach($error as $error){
						echo '<p class="bg-danger">'.$error.'</p>';
					}
				}

				if(isset($_GET['action'])){

					
					switch ($_GET['action']) {
						case 'active':
							echo "<h2 class='bg-success'>Twoje konto zostało aktywowane możesz się zalogować.</h2>";
							break;
						case 'reset':
							echo "<h2 class='bg-success'>Sprawdź maila z linkiem do zresetowania hasła.</h2>";
							break;
						case 'resetAccount':
							echo "<h2 class='bg-success'>Chasło zostało zmienione, możesz się teraz zalogować.</h2>";
							break;
					}

				}

				
				?>

				<div class="form-group">
					<input type="text" name="username" id="username" class="form-control input-lg" placeholder="Nazwa Użytkownika" value="<?php if(isset($error)){ echo htmlspecialchars($_POST['username'], ENT_QUOTES); } ?>" tabindex="1">
				</div>

				<div class="form-group">
					<input type="password" name="password" id="password" class="form-control input-lg" placeholder="Hasło" tabindex="3">
				</div>
				
				<div class="row">
					<div class="col-xs-9 col-sm-9 col-md-9">
						 <a href='reset'><font color="white">Zapomniałeś hasła?</font></a>
					</div>
				</div>
				
				<hr>
				<div class="row">
					<div class="col-xs-6 col-md-6"><input type="submit" name="submit" value="Zaloguj" class="btn btn-primary btn-block btn-lg" tabindex="5"></div>
				</div>
			</form>
		</div>
	</div>



</div>
</body>

<?php 
require('layout/footer.php'); 
?>
