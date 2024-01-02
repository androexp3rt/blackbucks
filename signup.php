<!DOCTYPE html>
<?php
require_once "config.php";
clearstatcache();
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
	// header("location: home.php");
	// exit;
}
$otp = rand(100000, 999999);
$fname = $lname = $name = $email = $password = $confirm_password = $phone = $gender = $job = $otp =  "";
$err = $success = "";
if ($_SERVER['REQUEST_METHOD'] == "POST") {
	if (isset($_POST["submit"])) {
		// check for First name
		$fname = trim($_POST['fname']);
		if (empty($fname)) {
			$err = "Name can't be blank";
		} elseif (!preg_match("/^[a-zA-Z-' ]*$/", $fname)) {
			$err = "Only letters and white space allowed in first name";
		}
		// check for Last name
		$lname = trim($_POST['lname']);
		if (empty($lname)) {
			$err = "Last name can't be blank";
		} elseif (!preg_match("/^[a-zA-Z-' ]*$/", $lname)) {
			$err = "Only letters and white space allowed in Last name";
		}
		$name = $fname . ' ' . $lname;

		// check for email 
		$email = trim($_POST['email']);
		if (empty($email)) {
			$err = "Email can't be blank";
		} else {
			$sql = "SELECT * FROM users WHERE email = ?";
			$stmt = mysqli_prepare($conn, $sql);
			if ($stmt) {
				mysqli_stmt_bind_param($stmt, "s", $param_phone);
				$param_phone = $email;
				if (mysqli_stmt_execute($stmt)) {
					mysqli_stmt_store_result($stmt);
					if (mysqli_stmt_num_rows($stmt) == 1) {
						$err = "This email is allready Registered";
					}
				} else {
					$err = "Something went wrong";
				}
				mysqli_stmt_close($stmt);
			}
		}
		// // check for username
		// $username = trim($_POST["username"]);
		// if (empty($username)) {
		// 	$err = "Username can't be blank";
		// } else {
		// 	$sql = "SELECT * FROM users WHERE username = ?";
		// 	$stmt = mysqli_prepare($conn, $sql);
		// 	if ($stmt) {
		// 		mysqli_stmt_bind_param($stmt, "s", $param_username);
		// 		$param_username = $username;
		// 		if (mysqli_stmt_execute($stmt)) {
		// 			mysqli_stmt_store_result($stmt);
		// 			if (mysqli_stmt_num_rows($stmt) == 1) {
		// 				$err = "This Username is allready taken";
		// 			}
		// 		} else {
		// 			$err = "Something went wrong";
		// 		}
		// 		mysqli_stmt_close($stmt);
		// 	}
		// }

		// check for phone
		$phone = "+91" . trim($_POST['phone']);
		if (empty($phone)) {
			$err = "Phone Number can't be blank";
		} elseif (strlen($phone) != 13) {
			$err = "Phone Number is invalid";
		} else {
			$sql = "SELECT * FROM users WHERE phone = ?";
			$stmt = mysqli_prepare($conn, $sql);
			if ($stmt) {
				mysqli_stmt_bind_param($stmt, "s", $param_phone);
				$param_phone = $phone;
				if (mysqli_stmt_execute($stmt)) {
					mysqli_stmt_store_result($stmt);
					if (mysqli_stmt_num_rows($stmt) == 1) {
						$err = "This Phone Number is allready Registered";
					}
				} else {
					$err = "Something went wrong";
				}
				mysqli_stmt_close($stmt);
			}
		}
		//check for password
		$password = trim($_POST['password']);
		if (empty($password)) {
			$err = "Password cannot be blank";
		} elseif (strlen($password) < 5) {
			$err = "Password cannot be less than 5 characters";
		}
		// check for confirm password
		if (empty(trim($_POST['confirmPassword']))) {
			$err = "Confirm Password cannot be blank";
		} elseif (trim($_POST['confirmPassword']) != $password) {
			$err = "Passwords do not match";
		}
		//check for gender
		$gender = trim($_POST['gender']);
		if (empty($gender)) {
			$err = "Gender can't be blank";
		} elseif (!preg_match("/^[a-zA-Z-' ]*$/", $gender)) {
			$err = "Only letters and white space allowed in gender";
		} elseif (strtolower($gender) != 'male' && strtolower($gender) != 'female' && strtolower($gender) != 'transgender') {
			$err = "Gender is not valid";
		}
		//check for job 
		$job = trim($_POST['job']);
		if (empty($job)) {
			$err = "Job description can't be blank";
		} elseif (!preg_match("/^[a-zA-Z-' ]*$/", $job)) {
			$err = "Only letters and white space allowed in job description";
		}
		// if there were no errors, generate otp and ask for user otp
		if (empty($err)) {
			$otp = rand(99999,999999);
			echo $otp;
			$sql = "INSERT INTO users (email, otp) VALUES (?, ?)";
			$stmt = mysqli_prepare($conn, $sql);
			if ($stmt) {
				mysqli_stmt_bind_param($stmt, "ss", $param_email, $param_otp);
				$param_email = $email;
				$param_otp = $otp;
				if (mysqli_stmt_execute($stmt)) {
					$success = "Proceed to verify your OTP";
					$_SESSION['name'] = $name;
					$_SESSION['email'] = $email;
					$_SESSION['phone'] = $phone;
					$_SESSION['password'] = $password;
					$_SESSION['gender'] = $gender;
                    $_SESSION['job'] = $job;
					header("location: otp.php");
				} else {
					$err = "Something went wrong... can't redirect!";
				}
				mysqli_stmt_close($stmt);
			}
		}
	}
	mysqli_close($conn);
}
?>
<body>
	<?php include 'navbar.php'; ?>
	<link rel="stylesheet" href="css/signup.css">
	<script>
		var body = document.getElementsByTagName('body')[0]
		dom(body, '<div id="signupContainer"><div></div><div></div></div>')
		var signupContainer = document.getElementById('signupContainer')
		var altSignupContainer = signupContainer.children[0]
		dom(altSignupContainer, '<div><img></div><div>Upload your Photo</div>')
		altSignupContainer.children[1].classList.add('btn2')
		altSignupContainer.children[1].classList.add('divbtn')
		altSignupContainer.children[0].children[0].src = 'assets/dashicons/profile.png'
		dom(signupContainer.children[1], '<form></form>')
		var signupForm = signupContainer.children[1].children[0]
		signupForm.action = ""
		signupForm.method = "post"
		dom(signupForm, '<div><p></p></div>')
		var errorContainer = signupForm.children[0]
		errorContainer.classList.add('errorContainer')
		var signUperror = "<?php if ($err) {
								echo $err;
							} ?>";
		if (signUperror) {
			errorContainer.children[0].innerHtml = signUperror
		}
		dom(signupForm, '<div></div>')
		dom(signupForm.children[1], ('<div><img><input/></div>').repeat(2))
		signupForm.children[1].children[0].children[0].src = 'assets/dashicons/name.png'
		signupForm.children[1].children[0].children[1].type = 'text'
		signupForm.children[1].children[0].children[1].name = 'fname'
		signupForm.children[1].children[0].children[1].placeholder = 'First Name'
		signupForm.children[1].children[1].children[0].src = 'assets/dashicons/name.png'
		signupForm.children[1].children[1].children[1].type = 'text'
		signupForm.children[1].children[1].children[1].name = 'lname'
		signupForm.children[1].children[1].children[1].placeholder = 'Last Name'
		signupForm.children[1].classList.add('doubleInputContainer')
		dom(signupForm, '<div><img><input/></div>')
		signupForm.children[2].children[0].src = 'assets/dashicons/email.png'
		signupForm.children[2].children[1].type = 'email'
		signupForm.children[2].children[1].name = 'email'
		signupForm.children[2].children[1].placeholder = 'Email'
		signupForm.children[2].classList.add('inputContainer')
		dom(signupForm, ('<div></div>').repeat(2))
		dom(signupForm.children[3], ('<div><img><input/></div>').repeat(2))
		signupForm.children[3].children[0].children[0].src = 'assets/dashicons/password.png'
		signupForm.children[3].children[0].children[1].type = 'password'
		signupForm.children[3].children[0].children[1].name = 'password'
		signupForm.children[3].children[0].children[1].placeholder = 'Password'
		signupForm.children[3].children[1].children[0].src = 'assets/dashicons/password.png'
		signupForm.children[3].children[1].children[1].type = 'password'
		signupForm.children[3].children[1].children[1].name = 'confirmPassword'
		signupForm.children[3].children[1].children[1].placeholder = 'Confirm Password'
		signupForm.children[3].classList.add('doubleInputContainer')
		dom(signupForm.children[4], ('<div><img><input/></div>').repeat(2))
		signupForm.children[4].children[0].children[0].src = 'assets/dashicons/phone.png'
		signupForm.children[4].children[0].children[1].type = 'phone'
		signupForm.children[4].children[0].children[1].name = 'phone'
		signupForm.children[4].children[0].children[1].placeholder = 'Phone Number'
		signupForm.children[4].children[1].children[0].src = 'assets/dashicons/gender.png'
		signupForm.children[4].children[1].children[1].type = 'text'
		signupForm.children[4].children[1].children[1].name = 'gender'
		signupForm.children[4].children[1].children[1].placeholder = 'Gender'
		signupForm.children[4].classList.add('doubleInputContainer')
		dom(signupForm, '<div><img><input/></div>')
		signupForm.children[5].children[0].src = 'assets/dashicons/job.png'
		signupForm.children[5].children[1].type = 'type'
		signupForm.children[5].children[1].name = 'job'
		signupForm.children[5].children[1].placeholder = 'Job Descibtion'
		signupForm.children[5].classList.add('inputContainer')
		dom(signupForm, '<div><input/></div>')
		var submitBtn = signupForm.children[6].children[0]
		submitBtn.type = "submit"
		submitBtn.name = "submit"
		submitBtn.value = "Sign Up"
		submitBtn.classList.add('btn1')
		submitBtn.classList.add('divbtn')
		submitBtn.onclick = function() {
			window.location.href = 'otp.php'
		};
		if (vw <=900) {
			signupContainer.classList.add('signupContainerPhone')
		} else {
			signupContainer.classList.add('signupContainer')
		}
	</script>
	<?php include 'footer.php'; ?>
</body>