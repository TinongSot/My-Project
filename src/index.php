<?php
include 'db_connect.php';
include "crud_page.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body>
<div class="min-h-screen bg-gray-100 flex flex-col justify-center py-12 px-6 lg:px-8">
<?php
  // $email = $POST['email'];
  // $password = $POST['password'];

  // $email = stripslashes($email);
  // $password = stripslashes($password);
  // $email = mysqli_real_escape_string($email);
  // $password = mysqli_real_escape_string($password);

  // mysql_connect("localhost", "root", "");
  // mysql_select_db("listname");

  // $result = mysql_query("SELECT * FROM users WHERE email = '$email' AND password = '$password'");
  // $row = mysql_fetch_array($result);
  // if ($row['email'] == $email && $row['password'] == $password) {
  //   echo "Login successful";
  // } else {
  //   echo "Login failed";
  // }
?>
  <div class="sm:mx-auto sm:w-full sm:max-w-md">
    <h2 class="mt-6 text-center text-3xl font-bold text-gray-900">Login</h2>
  </div>

  <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
    <div class="bg-white py-8 px-6 shadow-md rounded-lg sm:px-10">
      <form class="mb-0 space-y-6" action="crud_page.php" method="POST">
        <div>
          <label for="email" class="block text-sm font-medium text-gray-700">Email address</label>
          <div class="mt-1">
            <input id="email" name="email" type="email" autocomplete="email" required class="w-full border border-gray-300 px-3 py-2 rounded-lg shadow-sm focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500" />
          </div>
          <?="<p class='text-danger'>$emailErr</p>";?>
        </div>

        <div>
          <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
          <div class="mt-1">
            <input id="password" name="password" type="password" autocomplete="current-password" required class="w-full border border-gray-300 px-3 py-2 rounded-lg shadow-sm focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500" />
          </div>
          <?="<p class='text-danger'>$pwdErr</p>";?>
        </div>

        <div>
          <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">LOGIN</button>
        </div>
      </form>
    </div>
  </div>
  <div class="sm:mx-auto sm:w-full sm:max-w-md mt-5">
            <p class="mt-2 text-center text-sm text-gray-600 max-w">
                Don't have an account?
                <a href="#" class="font-medium text-indigo-600 hover:underline focus:outline-none focus:ring-2 focus:ring-indigo-500">Create Account</a>
            </p>
        </div>
</div>

</body>
</html>