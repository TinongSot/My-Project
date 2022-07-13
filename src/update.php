<?php
session_start();
include "db_connect.php";
include 'script.php';

function validate($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if (isset($_GET['id'])) {

  $id = validate($_GET['id']);

  $query = $fluent->from('products')->where('id', $id)->fetch();
} else {
  header("Location: crud_page.php");
}

if (isset($_POST['update'])) {
  $p_name = validate($_POST['name']);
  $p_amount = validate($_POST['amount']);
  $p_price = validate($_POST['price']);
  $p_id = validate($_POST['p_id']);

    $set = array('name' => $p_name,  'amount' => $p_amount, 'price' => $p_price);
    $row = $fluent->update('products')->set($set)->where('id', $p_id)->execute();

    if ($row) {
      $_SESSION['success'] = "Update successfully";
      header("Location: crud_page.php");
    } else {
      $_SESSION['error'] = "Unknown error occurred";
      header("Location: update.php");
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
  <script src="https://cdn.tailwindcss.com?plugins=forms"></script>
  <title>Update</title>
</head>

<body>
  <div class="min-h-screen bg-gray-100 flex flex-col justify-center py-12 px-6 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-md flex justify-between items-baseline">
      <div>
        <h2 class="mt-6 text-center text-3xl font-bold text-gray-900">Edit</h2>
      </div>
      <div><a href="crud_page.php" class="font-medium border border-transparent text-white hover:text-green-600 hover:border-green-600 hover:bg-white px-3 py-1 bg-green-600 rounded-xl mr-3">Back</a></div>
    </div>

    <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
      <div class="bg-white py-8 px-6 shadow-md rounded-lg sm:px-10">
        <form class="mb-0 space-y-6" action="#" method="POST">
          <div>
            <label for="name" class="block text-sm font-medium text-gray-700">Product Name</label>
            <div class="mt-1">
              <input required id="name" name="name" type="text" class="w-full border border-gray-300 px-3 py-2 rounded-lg shadow-sm focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500" value="<?= $query['name'] ?>" />
            </div>
          </div>

          <div>
            <label for="amount" class="block text-sm font-medium text-gray-700">Amount</label>
            <div class="mt-1">
              <input required id="amount" name="amount" type="number" min="1" class="w-full border border-gray-300 px-3 py-2 rounded-lg shadow-sm focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500" value="<?= $query['amount'] ?>" />
            </div>
          </div>

          <div>
            <label for="price" class="block text-sm font-medium text-gray-700">Price</label>
            <div class="mt-1">
              <input required id="price" name="price" type="number" min="0.00" step="0.01" class="w-full border border-gray-300 px-3 py-2 rounded-lg shadow-sm focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500" value="<?= $query['price'] ?>" />
            </div>
          </div>

          <div>
            <button type="submit" name="update" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">UPDATE</button>
          </div>
          <input type="text" name="p_id" value="<?= $query['id'] ?>" hidden>
        </form>
      </div>
    </div>

  </div>
</body>

</html>