<!DOCTYPE html>
<html>
<head>
	<title>Trang chủ</title>
		<link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">
		<script type="text/javascript" crs="asset/js/bootstrap.min.js"></script>
		<script type="text/javascript" crs="asset/js/jquery/jquery.js"></script>
		<link rel="stylesheet" type="text/css" href="asset/css/style.css">
</head>
<body>

	<?php
		require_once("lib/connection.php");
		if (isset($_POST["btn_submit"])) {
			//lấy thông tin từ các form bằng phương thức POST
			$title = $_POST["title"];
			$content = $_POST["content"];
			if ($title == "" || $content == "") {
				echo "<script>";
				echo "alert('Bạn vui lòng nhập đầy đủ thông tin')";
				echo "</script>";
			}else{
				$sql = "INSERT INTO articles(Id,
				title,
				content
				) VALUES (NULL,
				'$title',
				'$content'
				)";
		    // thực thi câu $sql với biến conn lấy từ file connection.php
				mysqli_query($conn,$sql);
				echo "<script>";
			   	echo "alert('Chúc mừng bạn đã thêm bài thành công')";
			   	echo "</script>";
			   	header('location: ../index.php');
			}
		}
	?>

	<nav class="navbar navbar-default" role="navigation">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="../index.html"  style="color: #7FA0FC;">Trang chủ</a>
		</div>
	
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse navbar-ex1-collapse">
			<form class="navbar-form navbar-left" role="search">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Search">
				</div>
				<button type="submit" class="btn btn-default">Tìm kiếm</button>
			</form>
			<form class="navbar-form navbar-right">
				<BUTTON class="btn btn-default"><a href="login.php">Đăng nhập</a></BUTTON>
				<!-- <BUTTON class="btn btn-default"><a href="register.php">Đăng kí</b></a></BUTTON> -->
			</form>
		</div><!-- /.navbar-collapse -->
	</nav>
	<div class="jumbotron">
		<div class="container">
			<h1>HOLA HẤP</h1>
			<p><i>Thỏa sức đam mê, thỏa sức sáng tạo :)) :))</i></p>
			<p>
				<!-- <a class="btn btn-primary btn-lg">Learn more</a> -->
			</p>
		</div>
	</div>
	<div class="container">
		<!-- <div class="form-control" style="background-color: #DAFFCF; color: #000000;"><strong>About</strong></div> -->

		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<h3 style="color: #0ff0f0">Thêm bài viết</h3>	
				<div class="panel-body">
					<form action="add_articles.php" method="post" class="form-group">		
						<p>Title:</p>
						<input type="text" name="title" class="form-control"></input></br>
						<p>Content:</p>
						<textarea style="height: 150px;" type="text" name="content" class="form-control"></textarea><br>	
						<button type="submit" class="btn btn-primary btn-sm" name="btn_submit">Xác nhận</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<footer class="form-control" style="background-color: #" >
		<center>Copyright by Holanguyen</center>
	</footer>
</body>
</html>