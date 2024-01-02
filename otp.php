<?php
    require_once "config.php";
	session_start();
	if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
		header("location: home.php");
		exit;
	}
	$userOtp = "";
	$err = $success = "";
    $email = $_SESSION['email'];
	if($_SERVER['REQUEST_METHOD'] == "POST"){
		if(isset($_POST['submit'])){
            $userotp = trim($_POST['otp']);
			if(empty($userotp)){
				$err = "OTP cannot be blank";
			}
            elseif(strlen($userotp) != 6){
				$err ="OTP is invalid";
			}
			else{
				$sql = "SELECT otp FROM users WHERE email = ? AND otp = ?";
				//$stmt = $mysqli -> prepare($sql);
				$stmt = mysqli_prepare($conn, $sql);
				if($stmt){
					$stmt->bind_param("ss", $param_email, $param_otp);
					//mysqli_stmt_bind_param($stmt, "ss", $param_email, $param_otp);
					$param_otp = $userotp;
					$param_email = $email;
					if(mysqli_stmt_execute($stmt)){
						mysqli_stmt_store_result($stmt);
						if(mysqli_stmt_num_rows($stmt) != 1){
							$err = "OTP is invalid";
						}
					}
					else {
						
					}
					mysqli_stmt_close($stmt);
				}
			}
            // if there were no errors, insert to database
			if(empty($err)){
				$sql = "UPDATE `users` SET `name` = ?, `phone` = ?, `password` = ?, `gender` = ?, `job` = ?, `otp` = ?  WHERE `email` = ? AND `otp` = ? ";
				// "INSERT INTO users (name, username, phone, email, password) VALUES (?, ?, ?, ?, ?) WHERE email = ? AND otp = ?";
				$stmt = mysqli_prepare($conn, $sql);
				if($stmt){
					mysqli_stmt_bind_param($stmt, "ssssssss", $param_name, $param_phone, $param_password, $param_gender, $param_job, $param_newotp, $param_email, $param_otp);
                    $param_name = $_SESSION['name'];
					$param_phone = $_SESSION['phone'];
					$param_gender = $_SESSION['gender'];
					$param_password = $_SESSION['password'];
					$param_email = $email;
                    $param_job = $_SESSION['job'];
					$param_otp = $userotp;
                    $param_newotp = "0";
					// $param_password = password_hash($password, PASSWORD_DEFAULT);
					if(mysqli_stmt_execute($stmt)){
						$success = "Proceed to Login";
						header("location: login.php");
					}
					else{
						$err = "Something went wrong... can't redirect!";
					}
					mysqli_stmt_close($stmt);
				}
			}
			mysqli_close($conn);
		}
	}
?>
<!DOCTYPE html>
<body>
    <?php
    include 'navbar.php';
    ?>
    <div class="otpContainer">
        <div class="alternateOtpContainer">
        </div>
        <div class="otpFormContainer">
            <form action="" id="otpForm" method="post">
                <p>Please Enter the OTP received on your email</p>
                <div class="error_container">
					<span id="error">
						<?php
						if ($err) {
							echo $err;
						}
						?>
					</span>
				</div>
                <div class="inputContainer">
                    <img src="assets/dashicons_otp.png" alt="e">
                    <input type="text" name="otp" placeholder="OTP"></input>
                </div>
                <div class="otpFormButtonContainer">
                    <input type="submit" id="submit" class="btn1" name="submit" value="Submit">
                </div>
            </form>
        </div>
    </div>
	<?php
    include 'footer.php';
    ?>
</body>