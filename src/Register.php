
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<style>
    .custom {
    width: 100px !important;
}
    .bg{ background-color: #98FF98; text-color: #3A3B3C}
</style> 
<body>
    </div>
    <div class="justify-content-center ">
        <form action="Register.php"  method = "post" enctype="multipart/form-data">
            <div class="container">
                <h2 class="row justify-content-center">Registration</h2>
                <div class="row justify-content-center">
                    <div class="col-sm-3">
                        <hr class="mb-3">

                        <label for="username">Username</label>
                        <input class="form-control mb-3" type="text" name="username" required>

                        <label for="email">Email</label>
                        <input class="form-control mb-3" type="email" name="email" required>

                        <label for="gender">Gender</label>
                        <input class="form-control mb-3" type="text" name="gender" required>

                        <label for="class">Class</label>
                        <input class="form-control mb-3" type="text" name="class" required>

                        <label for="password">Password</label>
                        <input class="form-control mb-3" type="password" name="password" required>

                        <label for="cpassword">Comfirmed Password</label>
                        <input class="form-control mb-3" type="password" name="cpassword" required>
                    
                        <label for="image">Select your imgage profile File: </label>
                        <input class="form-control mb-3" type="file" name="image" required>
                       
                    </div>
                    <div class="row justify-content-center"><input class="btn bg p-3 custom center-block" type="submit" name="register" value="Register"></div>
                    
                </div>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>
</html>
<?php 
   include 'conf.php' ;
   if(isset($_POST['register'])){
            $image      = $_FILES['image'];
            $username   = $_POST['username'];
            $email      = $_POST['email'];
            $gender     = $_POST['gender'];
            $class      = $_POST['class'];
            $password   = $_POST['password'];
            $cpassword   = $_POST['cpassword'];
            
            

            $img_name = $_FILES['image']['name'];
            $img_size = $_FILES['image']['size'];
            $tmp_name = $_FILES['image']['tmp_name'];
            $error = $_FILES['image']['error'];

            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
            $img_ex_lc = strtolower($img_ex);
            $allowed_ex = array("jpg","jpeg","png");

                if($password == $cpassword){
                    if(in_array($img_ex_lc,$allowed_ex)){
                        $new_img= uniqid("IMG-",true).".".$img_ex_lc;
                        $img_path = 'uploads/'.$new_img;
                        move_uploaded_file($tmp_name,$img_path);
                            $sql = "INSERT INTO users(image,username,gender,email,class,password) VALUES('$new_img','$username','$gender','$email','$class','$password')";
                            $result = mysqli_query($conn,$sql);
                            if(!$result){
                                include 'error_popup.php';
                            }
                            else{
                            
                            header("location: index.php");
                            
                            }
                
                    } 
                  
                }
                else { ?>
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
                    <script type="text/javascript">
                    $(function(){
                        alert('Failed. Password is not matched. Please fill in  again!!');
                    });
                    </script> 
                    
              <?php  }
    }
       
?>

<?php ?>