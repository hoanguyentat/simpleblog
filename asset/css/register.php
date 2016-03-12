<!DOCTYPE html>
<html>
<head>
  	<title>Form đăng kí</title>
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
  			$username = $_POST["username"];
  			$password = $_POST["password"];
 			$name = $_POST["name"];
  			$email = $_POST["email"];
  			// $password = md5($password);
			if ($username == "" || $password == "" || $name == "" || $email == "") {
				echo "<script>";
				echo "alert('Bạn vui lòng nhập đầy đủ thông tin')";
				echo "</script>";
  			}else{
    				$sql = "INSERT INTO users(Id,
    					username,
    					password,
    					name,
					    email
    					) VALUES (NULL,
    					'$username',
    					'$password',
					    '$name',
    					'$email'
    					)";
				    // thực thi câu $sql với biến conn lấy từ file connection.php
   					mysqli_query($conn,$sql);
   					echo "<script>";
				   	echo "alert('Chúc mừng bạn đã đăng ký thành công')";
				   	echo "</script>";
				}
		}
	?>
  <div id="wrapper">
    <nav class="navbar navbar-default" role="navigation">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar">Đăng nhập</span>
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
      </div><!-- /.navbar-collapse -->
    </nav>
    <div class="jumbotron">
      <div class="container">
        <h1>HOLA HẤP</h1>
        <p><i>Thỏa sức đam mê, thỏa sức sáng tạo :)) :))</i></p>
      </div>
    </div>
    <div class="form-group">
  		<form action="register.php" method="post">
  			<table class="col-md-4 col-md-offset-3">
  					<tr>
  						<td colspan="2"><h2>Đăng kí thành viên</h2></td>
  					</tr>
  					<tr>
  						<td class="col-sm-2">User name:</td>
  						<td class="col-ssm-4"><input class="form-control" type="text" name="username"></input></td>
  					</tr>
  					<tr>
  						<td>Password:</td>
  						<td><input type="password" class="form-control" name="password"></input></td>
  					</tr>
  					<tr>
  						<td>Ho ten:</td>
  						<td><input type="text" class="form-control" name="name"></input></td>
  					</tr>
  					<tr>
  						<td>Email:</td>
  						<td><input type="email" class="form-control" name="email"></input></td>
  					</tr>
  					<tr>
  						<td colspan="2" style="text-align: center;"><button type="submit" class="btn btn-primary btn-sm" name="btn_submit">Đăng kí</button></td>
  					</tr>
  					<tr>
  						<td colspan="2">Nếu đã có tài khoản bạn có thể <a href="login.php">Đăng nhập</a></td>
  					</tr>
  			</table>
  		</form>
    </div>
    <footer class="form-control col-md-12">
        <center>Copyright by @kevinhoa95.cuccfree.com</center>
    </footer>
  </div>
</body>
</html>