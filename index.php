<?php
session_start();
include './admin/dbconfig.php';

?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Shoponcliq - login</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="./assets/css/bootstrap.min.css">

  <!-- External Css -->
  <link rel="stylesheet" href="./assets/css/line-awesome.min.css">

  <!-- Custom Css -->
  <link rel="stylesheet" type="text/css" href="./css/main.css">
  <link rel="stylesheet" type="text/css" href="css/theme-10.css">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet">

  <!-- Favicon -->
  <link rel="icon" href="../images/favicon.png">
  <link rel="apple-touch-icon" href="./images/apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="72x72" href="./images/icon-72x72.png">
  <link rel="apple-touch-icon" sizes="114x114" href="./images/icon-114x114.png">


</head>
<?php

function error_alert($data_error)
{ ?>

  <div class="alert alert-<?php echo $data_error[1]; ?>" role="alert">
    <?php echo $data_error[0]; ?>
  </div>



<?php  }

?>


<body>
  <div class="main">


    <div class="container">

      <div class="row">
        <div class="col-lg-10 offset-lg-1">
          <div class="ugf-container-wrap">
            <div class="ugf-container">
              <div class="ugf-content">
                <div class="logo">
                  <a><img width="200px" src="./images/logo-dark.webp" alt=""></a>
                </div>

                <?php


                if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                  if (isset($_POST['login_user'])) {

                    $username = $_POST['email'];
                    $password = $_POST['password'];

                    if ($username != "") {

                      if ($password != "") {

                        $select_user = "SELECT * FROM `admin_users` WHERE `admin_email`= '$username' AND `admin_password`= '$password'";

                        $select_user_run = $conn->query($select_user);
                        if ($select_user_run) {

                          if (mysqli_num_rows($select_user_run) == 1) {

                            $selected_user_data = mysqli_fetch_assoc($select_user_run);
                            if ($username == $selected_user_data['admin_email'] and $password == $selected_user_data['admin_password']) {

                              $_SESSION['active_user_id'] = $selected_user_data['sno'];

                              echo "<script>window.location.href='./admin/index';</script>";
                            }
                          } else {

                            $data_error = ['Invalid Details', 'danger'];
                            error_alert($data_error);
                          }
                        }
                      } else {
                        $data_error = ['Enter password', 'warning'];
                        error_alert($data_error);
                      }
                    } else {
                      $data_error = ['Please Enter Email', 'warning'];
                      error_alert($data_error);
                    }
                  }
                }


                ?>

                <h3>Welcome back! Staff</h3>
                <p>Let’s login to your account</p>
                <form action="#" method="post">
                  <div class="form-group">
                    <input name="email" type="text" class="form-control" placeholder="example@domain.com" id="input-mail">
                    <label for="input-mail">Email Addresss</label>
                  </div>
                  <div class="form-group pass-block">
                    <input name="password" type="password" class="form-control" placeholder="********" id="inputPass">
                    <label for="inputPass">Pass Code</label>

                  </div>
                  <button type="submit" name="login_user" class="btn">Login Account</button>
                </form>
              </div>
              <div class="ugf-bg bg-1">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="../assets/js/jquery.min.js"></script>
  <script src="../assets/js/popper.min.js"></script>
  <script src="../assets/js/bootstrap.min.js"></script>

  <script src="js/custom.js"></script>
</body>



</html>