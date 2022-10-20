<?php
if(!$_COOKIE['Admin'])
	header("Location: ./index.html"); 
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
    
    <link rel="stylesheet" href="./03/fonts/icomoon/style.css">

    <link rel="stylesheet" href="./03/css/owl.carousel.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="./03/css/style.css">
</head>
<body>
	<header class="site-navbar" role="banner">

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
                <li class="active"><a href="index.html"><span style="color: #000000">Home</span></a></li>
                <li class="has-children">
                  <a href="about.html"><span style="color: #000000">Dropdown</span></a>
                  <ul class="dropdown arrow-top">
                    <li><a href="#" style="color: #000000">Menu One</a></li>
                    <li><a href="#" style="color: #000000">Menu Two</a></li>
                    <li><a href="#" style="color: #000000">Menu Three</a></li>
                    <li class="has-children">
                      <a href="#" style="color: #000000">Dropdown</a>
                      <ul class="dropdown">
                        <li><a href="#" style="color: #000000">Menu One</a></li>
                        <li><a href="#" style="color: #000000">Menu Two</a></li>
                        <li><a href="#" style="color: #000000">Menu Three</a></li>
                        <li><a href="#" style="color: #000000">Menu Four</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li><a href="listings.html" style="color: #000000"><span>Listings</span></a></li>
                <li><a href="about.html" style="color: #000000"><span>About</span></a></li>
                <li><a href="blog.html" style="color: #000000"><span>Blog</span></a></li>
                <li><a href="contact.html" style="color: #000000"><span>Contact</span></a></li>
              </ul>
            </nav>
          </div>


          <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

          </div>

        </div>
      </div>
      
    </header>
	<div class="limiter">
		<div class="container-login100">
		  <div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/STUST.png" alt="IMG">
				</div>

				<form class="login100-form validate-form">
					<span class="login100-form-title">
						新增學生資料
					</span>
					

					<div class="wrap-input100 validate-input" data-validate = "請輸入證號">
						<input class="input100" type="text" name="sn" id = "sn" placeholder="證件號碼">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-id-card" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "請輸入姓名">
						<input class="input100" type="text" name="name" id = "name" placeholder="姓名">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user-circle-o" aria-hidden="true"></i>
						</span>
					</div>
					
				  <div class="wrap-input100 validate-input" data-validate = "請輸入數學分數">
						<input class="input100" type="number" name="sc1" id = "sc1" placeholder="數學">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-star" aria-hidden="true"></i>
						</span>
				  </div>
				  <div class="wrap-input100 validate-input" data-validate = "請輸入國文分數">
						<input class="input100" type="number" name="sc2" id = "sc2" placeholder="國文">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-star" aria-hidden="true"></i>
						</span>
				  </div>
				  <div class="wrap-input100 validate-input" data-validate = "請輸入自然分數">
						<input class="input100" type="number" name="sc3" id = "sc3" placeholder="自然">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-star" aria-hidden="true"></i>
						</span>
				  </div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" id = "btn">
							新增資料
					  </button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							點擊將資料添加至資料庫中
				  </span></div>

					<div class="text-center p-t-136"></div>
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

		
		$('.js-tilt').tilt({
			scale: 1.1
		})
		
		if($("#sn").val()!="" && $("#name").val()!="" && $("#sc1").val()!="" && $("#sc2").val()!="" && $("#sc3").val()!=""){
			$.ajax({
		    	url: 'php/insert.php',
		    	method: 'POST',
		    	dataType: 'json',
		    	data: {SN: $("#sn").val(),
					   Name: $("#name").val(),
					   SC1: $("#sc1").val(),
					   SC2: $("#sc2").val(),
					   SC3: $("#sc3").val(),
					  },
		    	success: function(res){
					if(res.success == true){
						alert("資料新增成功")
					}
					if(res.success == false){
						alert("資料新增失敗，可能證號已存在")
					}
					if(res.success == null){
						alert("資料沒有任何變動")
					}
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