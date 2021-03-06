<?php
session_start();
include 'db_connect.php';

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $amount = $_POST['amount'];
  $price = $_POST['price'];
  $id = $_SESSION['id'];

  // $sql = "INSERT INTO products (name, amount, price) VALUES ('$name', '$amount', '$price')";
  $value = array('name' => $name, 'user_id' => $id, 'amount' => $amount, 'price' => $price);
  $query = $fluent->insertInto('products')->values($value)->execute();

  if ($query) {
    $_SESSION['success'] = "Create successfully";
    header("Location: crud_page.php");
  } else {
    $_SESSION['error'] = "Unknown error occurred";
    header("Location: create_page.php");
  }
}
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
  <div class="sm:mx-auto sm:w-full sm:max-w-md">
    <h2 class=" text-center text-3xl font-bold text-gray-900">Create</h2>
  </div>

  <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
    <div class="bg-white py-8 px-6 shadow-md rounded-lg sm:px-10">
      <form class="mb-0 space-y-6" action="#" method="POST">
        <div>
          <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
          <div class="mt-1">
            <input id="name" name="name" type="name" autocomplete="name" required class="w-full border border-gray-300 px-3 py-2 rounded-lg shadow-sm focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500" />
          </div>
        </div>

        <div>
          <label for="amount" class="block text-sm font-medium text-gray-700">Amount</label>
          <div class="mt-1">
            <input id="amount" name="amount" type="number" min="1" autocomplete="amount" required class="w-full border border-gray-300 px-3 py-2 rounded-lg shadow-sm focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500" />
          </div>
        </div>

<div>
  <label for="price" class="block text-sm font-medium text-gray-700">Price</label>
  <div class="mt-1">
    <input id="price" name="price" type="number" min="0.00" step="0.01" autocomplete="price" required class="w-full border border-gray-300 px-3 py-2 rounded-lg shadow-sm focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500" />
  </div>
</div>

        <div>
          <button name="submit" type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">CREATE</button>
        </div>
      </form>
    </div>
  </div>
</div>
</body>
</html>