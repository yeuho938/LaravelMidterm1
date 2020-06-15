

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" >
	<style type="text/css">
		#menu{
			float: right;
			margin-right: 20%;

		}
		.icon{
			height: 30px;
			margin-top: 15px;
			color: black;
		}
		.chu{
			font-size: 15px;
		}
		#tkicon{
			height: 44px
		}
		#menu a{
			color: black;
			font-family: bold;
			font-size: 17px;
		}
		#menu #tc:hover {
			color: red
		}
		#menu #sp:hover {
			color: red
		}
		#menu #lh:hover {
			color: red
		}
		#menu #ht:hover {
			color: red
		}
		
		#lis button:hover{
			background-color: crimson;
			color: white;
			border: 0px;
		}
	</style>
</head>
<body>
	<div class="container-fluid" >
		<div class="row" >
			<center>
				<nav class="navbar" style="background-color: #CDC9C9">
					<ul class="nav navbar-nav" id="menu">
						
						<li class="dropdown"><a href="/home" id="tc"> DU LỊCH </a>
						</li>
						<li class="dropdown"><a href="Home/gioithieu.php"> BOOK VÉ MÁY BAY</a>
						</li>
						<li class="dropdown"><a href="#" id="sp"> BOOK KHÁCH SẠN</a>
						</li>
						<li class="dropdown"><a href="Home/lienhe.php" id="lh">DỊCH VỤ VISA</a>								
						</li>
						<li class="dropdown"><a href="#" id="ht"> THUÊ XE</a>
						</li>						
						<li class="dropdown"><a href="/admin/dashboard" id="ht"> TIN TỨC</a>
						</li>	
					    <li class="dropdown"><a href="/admin/dashboard" id="ht"> GIỚI THIỆU</a>
						</li>				
					</ul>
				</nav>
			</center>
		</div>	
	</div>
</body>
</html>