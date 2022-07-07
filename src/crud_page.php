<?php
include 'db_connect.php';

$sql = "SELECT id, name, user_id, amount, price FROM products";

$q = $conn->query($sql);
$q->setFetchMode(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>View</title>
</head>

<body>
<div class=" bg-gray-100 flex flex-col justify-center py-12 px-6 lg:px-8">
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
            <input id="amount" name="amount" type="amount" autocomplete="amount" required class="w-full border border-gray-300 px-3 py-2 rounded-lg shadow-sm focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500" />
          </div>
        </div>

<div>
  <label for="price" class="block text-sm font-medium text-gray-700">Price</label>
  <div class="mt-1">
    <input id="price" name="price" type="price" autocomplete="price" required class="w-full border border-gray-300 px-3 py-2 rounded-lg shadow-sm focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500" />
  </div>
</div>

        <div>
          <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">CREATE</button>
        </div>
      </form>
    </div>
  </div>
</div>
    <div class="container bg-gray-100">
        <div class="flex flex-col justify-center items-center">
            <h1 class="text-pink-600 text-4xl">Product</h1>

            <div class=" overflow-x-auto shadow-md sm:rounded-lg mt-12 w-3/4 border border-slate-400">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                #
                            </th>
                            <th scope="col" class="px-6 py-3">
                                name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                user_id
                            </th>
                            <th scope="col" class="px-6 py-3">
                                amount
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Price
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $i = 0;
                            while ($row = $q->fetch()){
                                $i++;
                        ?>
                            <tr class="bg-white dark:bg-gray-800">
                                <td class="px-6 py-4"><?php echo $i ?></td>
                                <td class="px-6 py-4"><?php echo htmlspecialchars($row['name']) ?></td>
                                <td class="px-6 py-4"><?php echo htmlspecialchars($row['user_id']); ?></td>
                                <td class="px-6 py-4"><?php echo htmlspecialchars($row['amount']); ?></td>
                                <td class="px-6 py-4"><?php echo htmlspecialchars($row['price']); ?></td>
                                <td class="px-6 py-4">
                                    <a href="#" class="font-medium border border-transparent text-white hover:text-green-600 hover:border-green-600 hover:bg-white px-3 py-1 bg-green-600 rounded-xl mr-3">Edit</a>
                                    <a href="<?='delete.php?'.$row['id']?>" class="font-medium border border-transparent text-white hover:text-red-600 hover:border-red-600 hover:bg-white px-3 py-1 bg-red-600 rounded-xl">Delete</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</body>

</html>