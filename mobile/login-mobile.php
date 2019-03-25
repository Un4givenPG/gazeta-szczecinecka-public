<?php
require_once('includes/config.php');

//sprawdzamy zalogowanie, jak tak to memberpage
if( $user->is_logged_in() ){ header('Location: https://gazeta-szczecinecka.pl/mobile/memberpage-mobile'); exit(); }

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
			$_SESSION['userId'] = x;
			header('Location: memberpage-mobile');
			exit;

		} else {
			$error[] = 'Zła nazwa użytkownika lub hasło.';
		}
	}else{
		$error[] = 'Nazwa użytkownika powina być alfanumeryczna i składać się z 3 - 16 znaków';
	}



}

//tytuł
$title = 'Adam Website Login';

require('layout/header.php'); 
?>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Ubuntu:300" rel="stylesheet">
<style>
body {
	background-image: url("/images/Adam-logo-vertical-blur.png");
  background-color: #000000;
  background-repeat: no-repeat;
  background-position: center;
  background-size: 95%;
  margin: 0;
  font-family: "Segoe UI Light", "Ubuntu", "Helvetica Neue Ultralight", "Calibri Light";
  overflow:hidden;
}
.adam-img {
   
  
}
</style>
</head>
<body scroll="no">
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

					//check the action
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
						 <a href='reset-mobile'><font color="white">Zapomniałeś hasła?</font></a>
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
//include header template
require('layout/footer.php'); 
?>
