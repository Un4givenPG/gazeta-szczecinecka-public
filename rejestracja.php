<?php require('includes/config.php');

//if logged in redirect to members page
if( $user->is_logged_in() ){ header('Location: memberpage'); exit(); }

//if form has been submitted process it
if(isset($_POST['submit'])){

    if (!isset($_POST['username'])) $error[] = "Proszę wypełnić wszystkie pola";
    if (!isset($_POST['email'])) $error[] = "Proszę wypełnić wszystkie pola";
    if (!isset($_POST['password'])) $error[] = "Proszę wypełnić wszystkie pola";

	$username = $_POST['username'];

	//very basic validation
	if(!$user->isValidUsername($username)){
		$error[] = 'Nazwa użytkownika musi składać się z conajmniej 3 znaków';
	} else {
		$stmt = $db->prepare('SELECT username FROM members WHERE username = :username');
		$stmt->execute(array(':username' => $username));
		$row = $stmt->fetch(PDO::FETCH_ASSOC);

		if(!empty($row['username'])){
			$error[] = 'Nazwa użytkownika jest już w użyciu.';
		}

	}

	if(strlen($_POST['password']) < 3){
		$error[] = 'Hasło jest za krótkie.';
	}

	if(strlen($_POST['passwordConfirm']) < 3){
		$error[] = 'Potwierdzone hasło jest za krótkie.';
	}

	if($_POST['password'] != $_POST['passwordConfirm']){
		$error[] = 'Hasła się nie zgadzają.';
	}

	//email validation
	$email = htmlspecialchars_decode($_POST['email'], ENT_QUOTES);
	if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
	    $error[] = 'Proszę wpisać dobry adres email';
	} else {
		$stmt = $db->prepare('SELECT email FROM members WHERE email = :email');
		$stmt->execute(array(':email' => $email));
		$row = $stmt->fetch(PDO::FETCH_ASSOC);

		if(!empty($row['email'])){
			$error[] = 'Podany email jest już w użyciu.';
		}

	}


	//if no errors have been created carry on
	if(!isset($error)){

		//hash the password
		$hashedpassword = $user->password_hash($_POST['password'], PASSWORD_BCRYPT);

		//create the activasion code
		$activasion = md5(uniqid(rand(),true));

		try {

			//insert into database with a prepared statement
			$stmt = $db->prepare('INSERT INTO members (username,password,email,active) VALUES (:username, :password, :email, :active)');
			$stmt->execute(array(
				':username' => $username,
				':password' => $hashedpassword,
				':email' => $email,
				':active' => $activasion
			));
			$id = $db->lastInsertId('memberID');

			//send email
			$to = $_POST['email'];
			$subject = "Potwierdzenie rejstracji";
			$body = "<p>Dziękujemy za rejstrację na stronie Adama.</p>
			<p>By aktywować konto naciśnij link: <a href='".DIR."activate.php?x=$id&y=$activasion'>".DIR."activate.php?x=$id&y=$activasion</a></p>
			<p>Pzdr. AA</p>";

			$mail = new Mail();
			$mail->setFrom(SITEEMAIL);
			$mail->addAddress($to);
			$mail->subject($subject);
			$mail->body($body);
			$mail->send();

			//redirect to index page
			header('Location: index.php?action=joined');
			exit;

		//else catch the exception and show the error.
		} catch(PDOException $e) {
		    $error[] = $e->getMessage();
		}

	}

}

//define page title
$title = 'Adam Website Rejestracja';

//include header template
require('layout/header.php');
?>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="/images/favicon.ico" />
<link href='https://fonts.googleapis.com/css?family=Ubuntu:300' rel='stylesheet' type='text/css'>
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
</head>
<body scroll="no" oncontextmenu="return false;">
<div class="adam-img"></div>
<div class="container">

	<div class="row">

	    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
			<form role="form" method="post" action="" autocomplete="off">
				<h2><font color="white">Rejestracja</h2>
				<p>Jesteś już użytkownikiem ?<a href='login.php'> Zaloguj</a></p>
				</font>
				<hr>
			

				<?php
				//check for any errors
				if(isset($error)){
					foreach($error as $error){
						echo '<p class="bg-danger">'.$error.'</p>';
					}
				}

				//if action is joined show sucess
				if(isset($_GET['action']) && $_GET['action'] == 'joined'){
					echo "<h2 class='bg-success'>Rejestracja powiodła się, na podany adres email został wysłany link aktywacyjny (Uwaga czasem nie działa i aktywuję ręcznie).</h2>";
				}
				?>

				<div class="form-group">
					<input type="text" name="username" id="username" class="form-control input-lg" placeholder="Nazwa użytkownika" value="<?php if(isset($error)){ echo htmlspecialchars($_POST['username'], ENT_QUOTES); } ?>" tabindex="1">
				</div>
				<div class="form-group">
					<input type="email" name="email" id="email" class="form-control input-lg" placeholder="Adres Email" value="<?php if(isset($error)){ echo htmlspecialchars($_POST['email'], ENT_QUOTES); } ?>" tabindex="2">
				</div>
				<div class="row">
					<div class="col-xs-6 col-sm-6 col-md-6">
						<div class="form-group">
							<input type="password" name="password" id="password" class="form-control input-lg" placeholder="Hasło" tabindex="3">
						</div>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6">
						<div class="form-group">
							<input type="password" name="passwordConfirm" id="passwordConfirm" class="form-control input-lg" placeholder="Potwierdź Hasło" tabindex="4">
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-xs-6 col-md-6"><input type="submit" name="submit" value="Zarejestruj" class="btn btn-primary btn-block btn-lg" tabindex="5"></div>
				</div>
			</form>
		</div>
	</div>

</div>

<?php
//include header template
require('layout/footer.php');
?>
