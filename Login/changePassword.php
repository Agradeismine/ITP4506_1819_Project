<!DOCTYPE html>
<html lang="en">
<?php
	if(isset($_SERVER["QUERY_STRING"])){
		extract($_GET);
	}
?>

<head>
	<title>Change the default password</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/mainpage.css">
	<!--===============================================================================================-->

	<script type="text/javascript">
		function comfirmChgPw() {

			var txt;
			var r = confirm("Are you really want to change the password?");
			if (r == true) {
				alert("Password changed!");
				<?php
					setcookie("$username", "pwChged", time() + (60 * 30), "/"); // 86400 = 1 day
				?>
				window.location.href = "<?php echo $username; ?>.php";
			}

		}

		function myFunction2() {
			var r = confirm("Change the password later?");
			if (r == true) {
				window.location.href = "<?php echo $username; ?>.php";
			}
		}

	</script>

</head>

<body>

	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100">

				<span class="login100-form-logo">
					<i class="zmdi zmdi-account-circle zmdi-hc-2x"></i>
				</span>

				<span class="login100-form-title p-b-34 p-t-27">
					Change Password
				</span>

				<div class="wrap-input100 validate-input" data-validate="Enter username">
					<input id="username" class="input100" type="text" name="username" disabled value="<?php echo " $username"; ?>">
					<span class="focus-input100" data-placeholder="&#xf207;"></span>
				</div>
				<div class="wrap-input100 validate-input" data-validate="Input password">
					<input id="newPassword" class="input100" type="password" name="username" placeholder="Input new password">
					<span class="focus-input100" data-placeholder="&#xf191;"></span>
				</div>
				<div class="wrap-input100 validate-input" data-validate="Input password">
					<input id="newPasswordAgain" class="input100" type="password" name="username" placeholder="Input new password again">
					<span class="focus-input100" data-placeholder="&#xf191;"></span>
				</div>

				<!-- <div class="container-login100-form-btn">
					<center>
						<font color="white">As you are login with default password, you are required to reset the password.
						</font>
					</center>
				</div> -->

				<div class="container-login100-form-btn">
					<div id="message">
						<font color="white">
							Password must contain the following:
							<p id="number" class="invalid"><b>A number</b></p>
							<p id="letter" class="invalid"><b>A lowercase</b> letter</p>
							<p id="capital" class="invalid"><b>A capital (uppercase) letter</b></p>
							<p id="length" class="invalid"><b>Minimum 8 characters</b></p>
						</font>
					</div>
				</div>
<script>
		var myInput = document.getElementById("newPassword");
		var pwInput2 = document.getElementById("newPasswordAgain");
		
		var letter = document.getElementById("letter");
		var capital = document.getElementById("capital");
		var number = document.getElementById("number");
		var length = document.getElementById("length");

		// When the user clicks on the password field, show the message box
		myInput.onfocus = function () {
			document.getElementById("message").style.display = "block";
		}
		pwInput2.onfocus = function () {
			document.getElementById("message").style.display = "block";
		}

		// When the user clicks outside of the password field, hide the message box
		myInput.onblur = function () {
			document.getElementById("message").style.display = "none";
		}
		pwInput2.onblur = function () {
			document.getElementById("message").style.display = "none";
		}

		// When the user starts to type something inside the password field
		myInput.onkeyup = function () {
			// Validate lowercase letters
			var lowerCaseLetters = /[a-z]/g;
			if (myInput.value.match(lowerCaseLetters)) {
				letter.classList.remove("invalid");
				letter.classList.add("valid");
			} else {
				letter.classList.remove("valid");
				letter.classList.add("invalid");
			}

			// Validate capital letters
			var upperCaseLetters = /[A-Z]/g;
			if (myInput.value.match(upperCaseLetters)) {
				capital.classList.remove("invalid");
				capital.classList.add("valid");
			} else {
				capital.classList.remove("valid");
				capital.classList.add("invalid");
			}

			// Validate numbers
			var numbers = /[0-9]/g;
			if (myInput.value.match(numbers)) {
				number.classList.remove("invalid");
				number.classList.add("valid");
			} else {
				number.classList.remove("valid");
				number.classList.add("invalid");
			}

			// Validate length
			if (myInput.value.length >= 8) {
				length.classList.remove("invalid");
				length.classList.add("valid");
			} else {
				length.classList.remove("valid");
				length.classList.add("invalid");
			}
		}
		</script>
				<br>

				<div class="container-login100-form-btn">
					<button class="login100-form-btn" onclick="comfirmChgPw()">
						Change Password
					</button>
					&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<!-- <button class="login100-form-btn" onclick="myFunction2()">
						Change it Later
					</button> -->
				</div>

			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>

	<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>

</html>