
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
        .size{
          border-radius: 50%;
          width:auto;
          height: 100px;;
        }
        .middle {
          vertical-align: middle;
        }
        .center{
          text-align: center; 
        }
      </style>



<?php
    if(isset($_POST['login'])){
        $_username   = $_POST['_username'];
        $_email      = $_POST['_email'];
        $_password   = $_POST['_password'];
        include('conf.php');
        $query = "SELECT image,username, email, gender, class, password FROM users";
        $result = $conn->query($query);
        if ($result->num_rows > 0) {
          while($data = $result->fetch_assoc()) { 
              if(($_username==$data['username'])&&($_email==$data['email'])&&($_password==$data['password'])){
                header("location: crud_page.php");?>
                <!-- <div class="row justify-content-center mt-5">
                <table  cellspacing="0" cellpadding="10" class="table table-bordered w-75" style="border-color:green;">
                <div>
                <tr style="background-color:#98FF98;">
                    <th style="text-align:center">Profile</th>
                    <th style="text-align:center">Username</th>
                    <th style="text-align:center">Email</th>
                    <th style="text-align:center">Gender</th>
                    <th style="text-align:center">Class</th>
                    <th style="text-align:center">Password</th>
                </tr>
                </div>
                  <tr>
                  <td class="middle"><div class="center"><img src="uploads/<?=$data['image']?>" class="size" ></div></td>
                    <td class="middle"><?php echo $data['username']; ?> </td>
                    <td class="middle"><?php echo $data['email']; ?> </td>
                    <td class="middle"><?php echo $data['gender']; ?> </td>
                    <td class="middle"><?php echo $data['class']; ?> </td>
                    <td class="middle"><?php echo $data['password']; ?> </td>
                  <tr> 
                  </table>
                  </div> 
                YOU CAN PUT THE PAGE HERE SO THAT IT WILL DISPLAY HOME PAGE AFTER LOGIN
                --> 
               <?php exit();
              }
          }
           header("location: error_popup.php");
       }
     }
?>
</body>
</html>