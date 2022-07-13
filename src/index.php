<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOG IN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
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

                    </div>
                    <div class="row justify-content-center"><input class="btn bg p-3 custom center-block" type="submit" name="login" value="LOG IN"></div>
                </div>
            </div>
        </form>
        <div class="sm:mx-auto sm:w-full sm:max-w-md mt-5">
            <p class="mt-2 text-center text-sm text-gray-600 max-w">
                Don't have an account?
                <a href="Register.php" class="font-medium text-indigo-600 hover:underline focus:outline-none focus:ring-2 focus:ring-indigo-500">Create Account</a>
            </p>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>
</html>
