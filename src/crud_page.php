<?php
include 'db_connect.php';

$query = $fluent->from('products'); 

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
                        foreach ($query as $row) {
                            $i++;
                        ?>
                            <tr class="bg-white dark:bg-gray-800">
                                <td class="px-6 py-4"><?php echo $i ?></td>
                                <td class="px-6 py-4"><?php echo htmlspecialchars($row['name']) ?></td>
                                <td class="px-6 py-4"><?php echo htmlspecialchars($row['user_id']); ?></td>
                                <td class="px-6 py-4"><?php echo htmlspecialchars($row['amount']); ?></td>
                                <td class="px-6 py-4"><?php echo htmlspecialchars($row['price']); ?></td>
                                <td class="px-6 py-4">
                                    <a href="update.php?id=<?= $row['id'] ?>" class="font-medium border border-transparent text-white hover:text-green-600 hover:border-green-600 hover:bg-white px-3 py-1 bg-green-600 rounded-xl mr-3">Edit</a>
                                    <a href="delete.php?id=<?= $row['id'] ?>" class="font-medium border border-transparent text-white hover:text-red-600 hover:border-red-600 hover:bg-white px-3 py-1 bg-red-600 rounded-xl">Delete</a>
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