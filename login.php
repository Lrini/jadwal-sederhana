<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon">

    <title>Login</title>

    <!-- Bootstrap CSS -->    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

  <body class="login-img3-body">
    <div class="container">

      <form class="login-form" method="post" action="">        
<center>
    <h3>
    LOGIN 
    </h3>
</center>
        <div class="login-wrap">
            <p class="login-img"><i class="icon_lock_alt"></i></p>
            <div class="input-group">
              <span class="input-group-addon"><i class="icon_profile"></i></span>
              <input type="text" name="username" class="form-control" placeholder="Username" autofocus>
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                <input type="password" name="password" class="form-control" placeholder="Password">
            </div>
            
            <button class="btn btn-primary btn-lg btn-block" type="submit" name="login">Login</button>
        </div>
      </form>
      <center>
      <div style="color: white">
          HAKCIPTA &copy; 2021 Restika Lazula
      </div>
      </center>
 <?php
        include("koneksi.php");
        $koneksi = mysqli_connect("localhost","root","","jadwal");
        if(isset($_POST['login'])){
            $username=$_POST['username'];
            $pass=$_POST['password'];

            $data = mysqli_query($koneksi,"select * from login where user = '$username' and pass='$pass'");
            $cek = mysqli_num_rows($data);
            $data2 = mysqli_fetch_array($data);

            if($cek > 0){
                session_start();
                $_SESSION['nip'] = $data2['nip'];
                header("location:../jadwal/redirect.php");
            }else{
                header("location:login.php?pesan=gagal");
            }
        }
        ?>
    </div>


  </body>
</html>