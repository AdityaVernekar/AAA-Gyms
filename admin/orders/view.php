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
    <link href="https://fonts.googleapis.com/css2?family=Ceviche+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Audiowide&family=Bungee&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/f8756ec070.js" crossorigin="anonymous"></script>
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

                <h2 class="page-title">View Orders</h2>

                <?php include(ROOT_PATH . "/components/messages.php"); ?>

                <table>
                    <thead>

                        <th>Order_id</th>
                        <th>Product</th>
                        <th>Delivery Address</th>
                        <th>Payment</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th colspan="3">Action</th>
                    </thead>
                    <tbody>
                        <?php foreach ($orderitems as $key => $item): ?>
                        <tr>

                            <td><?php echo $item['order_id']; ?></td>
                            <td><?php echo $item['name'] ?></td>
                            <td><?php echo $item['city'];?></td>
                            <td><?php echo $item['payment'];?></td>
                            <td><?php echo $item['totalprice'];?></td>
                            <td><?php echo $item['pquantity'];?></td>

                            <?php if ($item['order_status'] == 'Order Placed'): ?>

                            <td><a href="<?php echo BASE_URL . '/admin/orders/index.php?deliver_id=' . $item['order_id']; ?>"
                                    class="edit">Deliver</a></td>

                            <?php else: ?>
                            <td>Delivered</td>
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