<?php
session_start();
include 'db_connect.php';
include 'script.php';

$query = $fluent->from('products'); 

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <title>DataTable</title>
    <title>View</title>
</head>

<body class="bg-gray-200">
    <div class=" container mt-5 ">
        
        <div class="flex justify-between">
            <div>
                <h1 class="text-pink-600 text-4xl font-bold">Product</h1>
            </div>
            <div><a href="create_page.php" class="font-medium  text-white px-3 py-1 bg-green-600 rounded-xl mr-3  hover:opacity-75">ADD</a></div>
        </div>

           <div class="container mt-5">
        <div class="row">
            <table id="example" class="table table-striped" style="width:100%">
                    <thead class="bg-slate-400">
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
                            <tr class="bg-white ">
                                <td class="px-6 py-4"><?php echo $i ?></td>
                                <td class="px-6 py-4"><?php echo htmlspecialchars($row['name']) ?></td>
                                <td class="px-6 py-4"><?php echo htmlspecialchars($row['user_id']); ?></td>
                                <td class="px-6 py-4"><?php echo htmlspecialchars($row['amount']); ?></td>
                                <td class="px-6 py-4"><?php echo htmlspecialchars($row['price']); ?></td>
                                <td class="px-6 py-4">
                                    <a href="update.php?id=<?= $row['id'] ?>" class="font-medium  text-white  px-3 py-1 bg-green-600 rounded-xl mr-3 hover:opacity-75">Edit</a>
                                    <a href="delete.php?id=<?= $row['id'] ?>" class="deleteBtn font-medium  text-white  px-3 py-1 bg-red-600 rounded-xl hover:opacity-75">Delete</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
<script>$(document).ready(function () {
    $('#example').DataTable();
});</script>
</body>

</html>

<script>
    $('.deleteBtn').on('click', function(e) {
        e.preventDefault();
        var self = $(this);
        console.log(self.data('title'));
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            iconColor: "#FDDA0D",
            showCancelButton: true,
            confirmButtonColor: '#14BD25',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes'
        }).then((result) => {
            if (result.isConfirmed) {
                location.href = self.attr('href');
            }
        })

    })
</script>

<?php
if (isset($_SESSION['success'])) {
?>
    <script>
        Swal.fire({
            icon: 'success',
            iconColor: "#4DD817 ",
            title: "<?php echo $_SESSION['success'] ?>",
            showConfirmButton: false,
            timer: 1800
        });
    </script>

<?php

    unset($_SESSION['success']);
}