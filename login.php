<!DOCTYPE html>
<html>
<head>
  <title>Form đăng nhập</title>
  <link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">
  <script type="text/javascript" crs="asset/js/bootstrap.min.js"></script>
  <script type="text/javascript" crs="asset/js/jquery/jquery.js"></script>
  <link rel="stylesheet" type="text/css" href="asset/css/style.css">
</head>
<body>
  <?php
    require_once("lib/connection.php");
    if (isset($_POST["btn_submit"])) {
      $username = $_POST["username"];
      $password = $_POST["password"];
      $username = strip_tags($username);
      $username = addslashes($username);
      $password = strip_tags($password);
      $password = addslashes($password);
      // $password = md5($password);
      if ($username == "" || $password == ""){
        echo "<script>";
        echo "alert('Bạn vui lòng nhập đầy đủ thông tin')";
        echo "</script>";
      }
      else{
        $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
        $query = mysqli_query($conn,$sql);
        $num_rows = mysqli_num_rows($query);
        if ($num_rows==0){
          echo "<script>";
          echo "alert('Sai tên tài khoản hoặc mật khẩu!')";
          echo "</script>";
        }else header('location: information/information.html');
      }
    }
  ?>
  <div id="wrapper">
    <nav class="navbar navbar-default" role="navigation">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="../index.php"  style="color: #7FA0FC;">Trang chủ</a>
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
        <p>
          <!-- <a class="btn btn-primary btn-lg">Learn more</a> -->
        </p>
      </div>
    </div>
    <div class = "form-group">
      <form action="login.php" method="post">
        <table class="col-md-4 col-md-offset-3">
            <tr>
              <td colspan="2"><h2>Đăng nhập</h2></td>
            </tr>
            <tr>
              <td>User name:</td>
              <td><input type="text" class="form-control" name="username"></input></td>
            </tr>
            <tr>
              <td>Password:</td>
              <td style="padding-bottom: 15px;"><input type="password" class="form-control" name="password"></input></td>
            </tr>
            <tr>
              <td colspan="2" style="text-align: center;"><button type="submit" class="btn btn-primary btn-sm form-control-sm" name="btn_submit">Đăng nhập</button></td>
            </tr>
            <tr></tr>
            <tr></tr>
            <tr>
             <!-- /*<td colspan="2">Nếu chưa có tài khoản bạn có thể <a href="register.php">Đăng kí</a></td>*/ -->
            </tr>
        </table>
      </form>
    </div>
    <footer style="margin-top: 170px;" class="form-control col-md-12">
      <center>Copyright by Holanguyen</center>
    </footer>
  </div>
</body>
</html>