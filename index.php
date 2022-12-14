<?php
if(!empty ($_COOKIE ['Admin'])){
	header("Location: ./home.php");
};
?>
<!DOCTYPE html>
<html lang="zh-tw">
<head>
	<title>南臺科技大學 - 學生管理系統</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/STUST.png" alt="IMG">
				</div>

				<form class="login100-form validate-form">
					<span class="login100-form-title">
						請先登入
					</span>
					

					<div class="wrap-input100 validate-input" data-validate = "帳號必填">
						<input class="input100" type="text" name="user" id = "user" placeholder="Username">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "密碼必填">
						<input class="input100" type="password" name="pass" id = "pass" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" id = "btn">
							登入
						</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							預設帳密 admin
						</span>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2">
							
							
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		
		$("button").click(function(){

		
		if($("#pass").val()!= "" && $("#user").val() != ""){
			$.ajax({
		    	url: 'php/login.php',
		    	method: 'POST',
		    	dataType: 'json',
		    	data: {User: $("#user").val(),
					   Pass: $("#pass").val(),
					  },
		    	success: function(res){
					if(res.success == true){
						setTimeout(1000)
						window.location = "./home.php"
						location.reload()
						
					}
					if(res.success == false){
						alert("登入失敗")
					}
					//if(res.success == null){
					//}
				},
				error: function(res){
					alert("程式出錯啦!")
				},
			});
		}
		
		
		});
		
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>