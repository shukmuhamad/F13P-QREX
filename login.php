<!DOCTYPE html>
<html lang="en">
<?php
  // require_once "database_connection.php";
?>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>QREX | F13P</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">

 
</head>
<body class="hold-transition login-page">

<div class="login-box">
  <div class="login-logo">
    <a href=""><b>Welcome</b> F13P QREX</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form action="" method="post">
        <div class="input-group mb-3">
          <input type="text" name="badge_id" class="form-control" placeholder="Badge Number">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" name="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <?php
        session_start();
        $error = '';
        require_once 'database_connection.php';
          if (isset($_POST['submit'])) {
            if (empty($_POST['badge_id']) || empty($_POST['password'])) {
              echo $error = '<script>
              toastr.options = {
                  "newestOnTop": true,
                  "progressBar": true,
                  "positionClass": "toast-top-center",
                  "preventDuplicates": true,
                }
              toastr.options.onHidden = function() {
                }
              toastr["error"]("Please Insert Badge ID or Password.");
              </script>';
            } else {

              $BadgeID = $_POST['badge_id'];
              $Password = $_POST['password'];

              $query = "{CALL SP_LOGIN(?,?)}";
              $stmt = $connect->prepare($query);

              $stmt->bindParam(1, $BadgeID);
              $stmt->bindParam(2, $Password);
              $stmt->execute();
              //  echo "dah execute";
              $result = $stmt->fetchAll();
              foreach ($result as $user){ $RoleKey = $user['RoleKey'];}
              
              $row = $stmt->rowCount();

              if ($row == 1) {
                if($RoleKey == 1){

                    foreach ($result as $user){ $BadgeID = $user['BadgeID'];}
                    foreach ($result as $user){ $Name = $user['Name'];}
                    foreach ($result as $user){ $Position = $user['Position'];}
                    foreach ($result as $user){ $RoleKey = $user['RoleKey'];}
                    foreach ($result as $user){ $Password = $user['Password'];}
                    $_SESSION['BadgeID'] = $BadgeID;
                    $_SESSION['Name'] = $Name;
                    $_SESSION['Position'] = $Position;
                    $_SESSION['RoleKey'] = $RoleKey;
                    $_SESSION['Password'] = $Password;

                    header("location: pages/home.php");

                }else{
                  echo '<script>
                  toastr.options = {
                      "newestOnTop": true,
                      "progressBar": true,
                      "positionClass": "toast-top-center",
                      "preventDuplicates": true,
                    }
                  toastr.options.onHidden = function() {
                    }
                  toastr["error"]("Only QA PIC can access this website.", "Unauthorized position!");
                  </script>';
                }
              } else{
                echo '<script>
                toastr.options = {
                    "newestOnTop": true,
                    "progressBar": true,
                    "positionClass": "toast-top-center",
                    "preventDuplicates": true,
                  }
                toastr.options.onHidden = function() {
                  }
                toastr["error"]("Wrong badge ID or Password.", "Incorrect login credentials!");
                </script>';
              }
              $connect = null;
            }
          }
      ?>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

</body>
</html>
