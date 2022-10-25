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
			color:#000000;
			border-collapse: collapse;
			overflow: hidden;
			box-shadow: 0 0 20px rgba(0,0,0,0.1);
		}

		th,
		td {
			padding: 15px;
			text-align: center;
			background-color: rgba(255,255,255,0.2);
			color: #000;
		}

		th {
			text-align: center;
			color: #4E174E
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
						text-align: center;
						right: 0;
						top: -9999px;
						bottom: -9999px;
						background-color: rgba(255,255,255,0.2);
						z-index: -1;
					}
				}
			}
		}
		.num {
			width: 4.5em;
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
                <li><a href="list.php" style="color: #000000"><span>顯示資料</span></a></li>
                <li><a href="delete.php" style="color: #000000"><span>刪除資料</span></a></li>
                <li class="active"><a href="update.php" style="color: #000000"><span>修改資料</span></a></li>
                <li><a href="php/logout.php" style="color: #000000"><span>登出</span></a></li>
              </ul>
            </nav>
          </div>


          <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

          </div>

        </div>

      
    </header>
	<div class="limiter">
		<div class="container-login100">
		  <div class="wrap-login100"> 
    
			  

	        <table>
		<thead>
			<tr>
				<th>學號</th>
				<th>姓名</th>
				<th>國文</th>
				<th>數學</th>
				<th>自然</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
<?php
	require_once("php/dbtools.inc.php");

	
	$link=create_connection();
	
	
	$sql="SELECT * FROM grade";
	$result=execute_sql("students", $sql, $link);
	
	
	//取得欄位數
      $total_fields = mysql_num_fields($result);
      while ($row = mysql_fetch_row($result))
      {
        echo "<tr>";      
        for($i = 0; $i < $total_fields; $i++){
			switch ($i){
				case 0:
					echo "
					<td><input size = '7.5' type='text' id = 'id_$row[0]' placeholder='$row[$i]' value = '$row[$i]'></td>"; 
					break;
				case 1:
					echo "
					<td><input size = '7.5' type='text' id = 'name_$row[0]' placeholder='$row[$i]' value = '$row[$i]'></td>"; 
					break;
				case 2:
					echo "
					<td><input class = 'num' type='number' id = 'sc1_$row[0]' placeholder='$row[$i]' value = '$row[$i]'></td>"; 
					break;
				case 3:
					echo "
					<td><input class = 'num' type='number' id = 'sc2_$row[0]' placeholder='$row[$i]' value = '$row[$i]'></td>"; 
					break;
				case 4:
					echo "
					<td><input class = 'num' type='number' id = 'sc3_$row[0]' placeholder='$row[$i]' value = '$row[$i]'></td>"; 
					break;
			}
		}
		                    
		echo "<td> <button class='login100-form-btn' id = '$row[0]'>
							修改
							</button></td>";
        echo "</tr>";     
      }
	
	//釋放記憶體空間
	mysql_free_result($result);
	mysql_close($link);
	
?>
			
			
		</tbody>
	</table>

			<div class="text-center p-t-12">
				<span class="txt1">所有資料皆可修改 - 包含學號
			</span>
			</div>
			<div class="text-center p-t-136"></div>
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
		$("button").click(function(e){		
		$('.js-tilt').tilt({
			scale: 1.1
		})
		
		$(e.target).attr('sc1')
		$(e.target).attr('sc2')
		$(e.target).attr('sc3')
		if($(e.target).attr('id') != ""){
			$.ajax({
		    	url: 'php/update.php',
		    	method: 'POST',
		    	dataType: 'json',
		    	data: {SN: $(e.target).attr('id'),
					   SN2: $("#id_"+$(e.target).attr('id')).val(),
					   Name: $("#name_"+$(e.target).attr('id')).val(),
					   SC1: $("#sc1_"+$(e.target).attr('id')).val(),
					   SC2: $("#sc2_"+$(e.target).attr('id')).val(),
					   SC3: $("#sc3_"+$(e.target).attr('id')).val(),
					  },
		    	success: function(res){
					if(res.success == true){
						alert("修改成功")
						location.reload()
					}
					if(res.success == false){
						alert("修改失敗，發生未知的錯誤請刷新")
						location.reload()
					}
					if(res.success == null){
						alert("此資料已不存在")
						location.reload()
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