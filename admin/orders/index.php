<?php include("../../path.php");
include(ROOT_PATH . "/controllers/orders.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Ceviche+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Audiowide&family=Bungee&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/f8756ec070.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../assets/css/admin.css">
    <link rel="stylesheet" href="../../assets/css/navigation.css">
    <!-- <link rel="stylesheet" href="../../assets/css/registeration.css"> -->
    <title>AAAGyms: Manage Orders</title>
</head>

<body>
    <?php include(ROOT_PATH . "/components/adminHeader.php");?>
    <!-- Admin Page Wrapper -->
    <div class="admin-wrapper">

        <?php include(ROOT_PATH . "/components/adminSidebar.php"); ?>


        <!-- Admin Content -->
        <div class="admin-content">



            <div class="content">

                <h2 class="page-title">Manage orders</h2>

                <?php include(ROOT_PATH . "/components/messages.php"); ?>

                <table>
                    <thead>
                        <th>SN</th>
                        <th>Order_id</th>
                        <th>UserName</th>
                        <th>Order Status</th>
                        <th colspan="3">Action</th>
                    </thead>
                    <tbody>
                        <?php foreach ($orders as $key => $order): ?>
                        <tr>
                            <td><?php echo $key + 1;  ?></td>
                            <td><?php echo $order['order_id']; ?></td>
                            <td><?php echo $order['fname']." ". $order['lname']; ?></td>
                            <td><?php echo $order['order_status'];?></td>
                            <?php if ($order['order_status'] == 'Cancelled'): ?>
                            <td><a href="index.php?del_id=<?php echo $order['order_id'] ?>" class="delete">Remove</a>
                            </td>
                            <?php else: ?>
                            <td><a href="view.php?orderid=<?php echo $order['order_id']; ?>" class="edit">View</a></td>
                            <?php endif; ?>

                        </tr>
                        <?php endforeach; ?>

                    </tbody>
                </table>

            </div>

        </div>
        <!-- // Admin Content -->


    </div>
    <!-- // Page Wrapper -->
</body>
<!-- JQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Ckeditor -->
<script src="https://cdn.ckeditor.com/ckeditor5/12.2.0/classic/ckeditor.js"></script>
<!-- Custom Script -->
<script src="../../assets/js/blog.js"></script>

</html>