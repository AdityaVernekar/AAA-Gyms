<?php

include("../../../path.php");
include(ROOT_PATH . "/components/database/db.php");
$id = $_SESSION['id'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../assets/css/navigation.css">
    <link rel="stylesheet" href="../../../assets/css/product.css">
    <link href="https://fonts.googleapis.com/css2?family=Ceviche+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Audiowide&family=Bungee&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/f8756ec070.js" crossorigin="anonymous"></script>
    <title>My Account</title>

</head>

<body>
    <?php include(ROOT_PATH . "/components/header.php"); ?>
    <?php include(ROOT_PATH ."/components/messages.php");?>

    <section id="content" style="height:90vh;">
        <div class="content-blog content-account">
            <div class="container">
                <div class="row">

                    <div class="col-md-12">

                        <h3>Recent Orders</h3>
                        <br>
                        <table class="cart-table account-table table table-bordered">
                            <thead>
                                <tr>
                                    <th>Order</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th>Payment Mode</th>
                                    <th>Total</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
					            $ordsql = "SELECT * FROM orders WHERE `user_id` = '$id'";
					             $ordres = mysqli_query($conn, $ordsql);
					            while($ordr = mysqli_fetch_assoc($ordres)){
				                ?>
                                <tr>
                                    <td>
                                        <?php echo $ordr['order_id']; ?>
                                    </td>
                                    <td>
                                        <?php echo $ordr['timestamp']; ?>
                                    </td>
                                    <td>
                                        <?php echo $ordr['order_status']; ?>
                                    </td>
                                    <td>
                                        <?php echo $ordr['payment']; ?>
                                    </td>
                                    <td>
                                        INR <?php echo $ordr['totalprice']; ?>/-
                                    </td>
                                    <td>
                                        <?php if($ordr['order_status'] == "Delivered" || $ordr['order_status']=="Cancelled"):?>
                                        <a href="view-order.php?id=<?php echo $ordr['order_id']; ?>">View</a>
                                        <?php else: ?>
                                        <a href="view-order.php?id=<?php echo $ordr['order_id']; ?>">View</a>
                                        | <a href="cancel-order.php?id=<?php echo $ordr['order_id']; ?>">Cancel</a>
                                        <?php endif;?>

                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>

                        <br>
                        <br>
                        <br>







                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include(ROOT_PATH . "/components/footer.php"); ?>
</body>

</html>