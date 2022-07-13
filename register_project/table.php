<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Table</title>
</head>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript">
            $(function(){
                alert('You have successfully register!! Click "OK" for an other registration');
            });
        </script>


<link rel="stylesheet" href="css/bootstrap.min.css">
<style>
  .bg {background-color: #98FF98;}
  .alignText{
    text-align:center;
  }
</style>


<?php
include('conf.php');
$query = "SELECT image,username, email, gender, class, password FROM withimage";
$result = $conn->query($query);
?>
<div class="row justify-content-center mt-5">
  <table cellspacing="0" cellpadding="10"  class="table table-bordered w-75" style="border-color:green;">
      <div>   
        <tr class="bg">
          <th class="alignText">ID</th>
          <th class="alignText">Profile</th>
          <th class="alignText">Username</th>
          <th class="alignText">Email</th>
          <th class="alignText">Gender</th>
          <th class="alignText">Class</th>
          <th class="alignText">Password</th>
        </tr>
      </div>
    <?php
    if ($result->num_rows > 0) {
      $sn=1;
      while($data = $result->fetch_assoc()) {
    ?>
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
    <tr>
      <td class="middle"><?php echo $sn; ?> </td>
      <td class="middle"><div class="center" ><img src="uploads/<?=$data['image']?>" class="size" ></div></td>
      <td class="middle"><?php echo $data['username']; ?> </td>
      <td class="middle"><?php echo $data['email']; ?> </td>
      <td class="middle"><?php echo $data['gender']; ?> </td>
      <td class="middle"><?php echo $data['class']; ?> </td>
      <td class="middle"><?php echo $data['password']; ?> </td>
    <tr>
    
    <?php
      $sn++;}} else { ?>
        <tr>
        <td colspan="6">No data found</td>
        </tr>
    <?php } ?>
  </table>
  <div class="center"><a href="Register.php" ><button type="button" class="mt-3 bg">Submit one more time</button></a></div>
</div>
 
</body>
</html>