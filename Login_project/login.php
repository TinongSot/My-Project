<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOG IN</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <style>
    .custom {
    width: 100px !important;
}
    .bg{ background-color: #98FF98; text-color: #3A3B3C}
</style>
</head>
<body>
</div>
    <div class="justify-content-center mt-5 ">
        <form action="comfirm.php"  method = "POST" >
            <div class="container">
                <h2 class="row justify-content-center">Log In</h2>
                <div class="row justify-content-center">
                    <div class="col-sm-3">
                        <hr class="mb-3">
                        <label for="_username">Username</label>
                        <input class="form-control mb-3" type="text" name="_username" required>

                        <label for="_email">Email</label>
                        <input class="form-control mb-3" type="email" name="_email" required>

                        <label for="_password">Password</label>
                        <input class="form-control mb-3" type="password" name="_password" required>

                        <label for="_try">Major    </label>
                        <select name="M" id="M" class="form-control mb-3">
                            <option value="CS">Computer Science</option>
                            <option value="TN">Telecom and Network</option>
                            <option value="EC">E-Comerce</option>
                        </select>

                    </div>
                    <div class="row justify-content-center"><input class="btn bg p-3 custom center-block" type="submit" name="login" value="LOG IN"></div>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
