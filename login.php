<!DOCTYPE html>
<?php
require_once "config.php";
clearstatcache();
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
	header("location: home.php");
	exit;
}
$email = $password = "";
$err = "";
if ($_SERVER['REQUEST_METHOD'] == "POST") {
	if (empty(trim($_POST["email"])) || empty(trim($_POST["password"]))) {
		$err = "Email or Password can't be blank";
	} else {
		$email = trim($_POST['email']);
		$password = trim($_POST['password']);
	}
	if (empty($err)) {
		$sql = "SELECT email, password, balance FROM users WHERE email = ?";
		$stmt = mysqli_prepare($conn, $sql);
		mysqli_stmt_bind_param($stmt, "s", $param_email);
		$param_email = $email;
		if (mysqli_stmt_execute($stmt)) {
			mysqli_stmt_store_result($stmt);
			if (mysqli_stmt_num_rows($stmt) == 1) {
				mysqli_stmt_bind_result($stmt, $email, $fetch_password, $balance);
				if (mysqli_stmt_fetch($stmt)) {
					if ($password == $fetch_password) {
						//if(password_verify($password, $hashed_password)){
						session_start();
						$_SESSION["email"] = $email;
						$_SESSION["loggedin"] = true;
						header("location: home.php");
					} else {
						$err = "The Password entered is invalid";
					}
				}
			} else {
				$err = "The email entered is invalid";
			}
		}
	}
}
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Blackbucks Login</title>
</head>

<body>
	<link rel="stylesheet" href="css/login.css">
	<?php include 'navbar.php';	?>
	<script>
		var body = document.getElementsByTagName('body')[0]
		dom(body, '<div id="loginContainer"><div></div></div><div id="altLoginContainer"></div>')
		var loginContainer = document.getElementById('loginContainer')
		dom(loginContainer.children[0], '<form></form>')
		var loginForm = loginContainer.children[0].children[0]
		loginForm.action = ""
		loginForm.method = "post"
		dom(loginForm, '<p>Log in</p><div><p></p></div>')
		var errorContainer = loginForm.children[1]
		errorContainer.classList.add('errorContainer')
		var loginerror = "<?php if ($err) {
							echo $err;
						} ?>";
		if (loginerror) {
			errorContainer.children[0].innerHtml = loginerror
		}
		dom(loginForm, ('<div><input/><div></div></div>').repeat(2))
		var emailContainer = loginForm.children[2]
		var passwordContainer = loginForm.children[3]
		emailContainer.children[0].name = 'email'
		emailContainer.children[0].type = 'email'
		emailContainer.children[0].placeholder = 'Email address'
		emailContainer.children[1].innerHTML = 'Email address'
		emailContainer.classList.add('loginInputContainer')
		passwordContainer.children[0].name = 'password'
		passwordContainer.children[0].type = 'password'
		passwordContainer.children[0].placeholder = 'Password'
		passwordContainer.children[1].innerHTML = 'Password'
		passwordContainer.classList.add('loginInputContainer')
		dom(loginForm, '<div><input/><p>Or</p><a>Sign Up</a></div>')
		var submitBtn = loginForm.children[4].children[0]
		submitBtn.type = "submit"
		submitBtn.name = "submit"
		submitBtn.value = "Log in"
		// submitBtn.classList.add('btn1')
		submitBtn.classList.add('btn1')
		submitBtn.classList.add('divBtn')
		var signup1Btn = loginForm.children[4].children[2]
		signup1Btn.classList.add('btn1')
		signup1Btn.classList.add('divBtn')
		dom(loginForm, '<a>Forgot Password ?</a>')
		var forgotPassword = loginForm.children[5]
		var altLoginContainer = document.getElementById('altLoginContainer')
		dom(altLoginContainer, '<p>Or Sign Up with</p><div></div>')
		dom(altLoginContainer.children[1], ('<img>').repeat(3))
		altLoginContainer.children[1].children[0].src = 'assets/dashicons/insta.png'
		altLoginContainer.children[1].children[1].src = 'assets/dashicons/fb.png'
		altLoginContainer.children[1].children[2].src = 'assets/dashicons/linked.png'
		loginContainer.classList.add('loginContainer')
		altLoginContainer.classList.add('altLoginContainer')
		signup1Btn.onclick = function () { 
			window.location.href = 'signup.php'
		};
	</script>
</body>
</html>