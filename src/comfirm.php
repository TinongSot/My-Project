<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Comfirm</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

  <style>
    .size {
      border-radius: 50%;
      width: auto;
      height: 100px;
      ;
    }

    .middle {
      vertical-align: middle;
    }

    .center {
      text-align: center;
    }
  </style>



  <?php
  session_start();
  if (isset($_POST['login'])) {
    $_username   = $_POST['_username'];
    $_email      = $_POST['_email'];
    $_password   = $_POST['_password'];
    include('conf.php');
    $query = "SELECT id,image,username, email, gender, class, password FROM users";
    $result = $conn->query($query);
    if ($result->num_rows > 0) {
      while ($data = $result->fetch_assoc()) {
        if (($_username == $data['username']) && ($_email == $data['email']) && ($_password == $data['password'])) {
          $_SESSION['id'] = $data['id'];
          header("location: crud_page.php"); ?>

  <?php exit();
        }
      }
      header("location: error_popup.php");
    }
  }
  ?>
</body>

</html>