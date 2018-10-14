<!DOCTYPE html>
<html lang="en">

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
	<!--===============================================================================================-->

	<script type="text/javascript">
		function myFunction() {
			if (document.getElementById('username').value != null) {
				window.location.href = "verificationE.html";
			}
		}

		function myFunction2() {
			if (document.getElementById('username').value != null) {
				window.location.href = "verificationS.html";
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
					<input id="username" class="input100" type="text" name="username" disabled value="">
					<span class="focus-input100" data-placeholder="&#xf207;"></span>
				</div>
				<div class="wrap-input100 validate-input" data-validate="Input password">
					<input id="newPassword" class="input100" type="text" name="username" placeholder="Input new password">
					<span class="focus-input100" data-placeholder="&#xf207;"></span>
				</div>
				<div class="wrap-input100 validate-input" data-validate="Input password">
					<input id="newPasswordAgain" class="input100" type="text" name="username" placeholder="Input new password again">
					<span class="focus-input100" data-placeholder="&#xf207;"></span>
				</div>

				<div class="container-login100-form-btn" >
					<center><font color="white">As you are login with default password, it is highly recommended to change password.
					</font></center>
				</div>

				<br>

				<div class="container-login100-form-btn">
					<button class="login100-form-btn" onclick="myFunction()">
						Change Password
					</button>
					&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<button class="login100-form-btn" onclick="myFunction2()">
						Change it Later
					</button>
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