<?php
if(!$_COOKIE['Admin'])
	header("Location: ./index.php"); 
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
	
	<style>
		html,
		body {
			height: 100%;
		}

		body {
			margin: 0;
			background: linear-gradient(45deg, #49a09d, #5f2c82);
			font-family: sans-serif;
			font-weight: 100;
		}

		.container {
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
		}

		table {
			width: 800px;
			border-collapse: collapse;
			overflow: hidden;
			box-shadow: 0 0 20px rgba(0,0,0,0.1);
		}

		th,
		td {
			padding: 15px;
			background-color: rgba(255,255,255,0.2);
			color: #fff;
		}

		th {
			text-align: left;
		}

		thead {
			th {
				background-color: #55608f;
			}
		}

		tbody {
			tr {
				&:hover {
					background-color: rgba(255,255,255,0.3);
				}
			}
			td {
				position: relative;
				&:hover {
					&:before {
						content: "";
						position: absolute;
						left: 0;
						right: 0;
						top: -9999px;
						bottom: -9999px;
						background-color: rgba(255,255,255,0.2);
						z-index: -1;
					}
				}
			}
		}	
	</style>
	
</head>
<body>
	<header class="site-navbar" role="banner">

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="home.php"><span style="color: #000000">Home</span></a></li>
                <li class="active"><a href="list.php" style="color: #000000"><span>顯示資料</span></a></li>
                <li><a href="delete.php" style="color: #000000"><span>刪除資料</span></a></li>
                <li><a href="update.php" style="color: #000000"><span>修改資料</span></a></li>
                <li><a href="php/logout.php" style="color: #000000"><span>登出</span></a></li>
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

			  

	<table>
		<thead>
			<tr>
				<th>Column 1</th>
				<th>Column 2</th>
				<th>Column 3</th>
				<th>Column 4</th>
				<th>Column 5</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Cell 1</td>
				<td>Cell 2</td>
				<td>Cell 3</td>
				<td>Cell 4</td>
				<td>Cell 5</td>
			</tr>
			<tr>
				<td>Cell 1</td>
				<td>Cell 2</td>
				<td>Cell 3</td>
				<td>Cell 4</td>
				<td>Cell 5</td>
			</tr>
			<tr>
				<td>Cell 1</td>
				<td>Cell 2</td>
				<td>Cell 3</td>
				<td>Cell 4</td>
				<td>Cell 5</td>
			</tr>
			<tr>
				<td>Cell 1</td>
				<td>Cell 2</td>
				<td>Cell 3</td>
				<td>Cell 4</td>
				<td>Cell 5</td>
			</tr>
			<tr>
				<td>Cell 1</td>
				<td>Cell 2</td>
				<td>Cell 3</td>
				<td>Cell 4</td>
				<td>Cell 5</td>
			</tr>
		</tbody>
	</table>


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