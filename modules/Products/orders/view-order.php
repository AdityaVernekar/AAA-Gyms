<?php
    ob_start();
    include("../../../path.php");
    include(ROOT_PATH . "/components/database/db.php");
    $uid = $_SESSION['id'];
    global $conn;

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
    <title>View Orders</title>
</head>

<body>
    <?php include(ROOT_PATH . "/components/header.php"); ?>

    <!-- SHOP CONTENT -->
    <section id="content">
        <div class="content-blog content-account">
            <div class="container">
                <div class="row">
                    <div class="page_header text-center">
                        <h2>My Account</h2>
                    </div>
                    <div class="col-md-12">

                        <h3>Recent Orders</h3>
                        <br>
                        <table class="cart-table account-table table table-bordered">
                            <thead>
                                <tr>
                                    <th>Product Name</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                    <th>Discount</th>
                                    <th>Total Price</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php

					if(isset($_GET['id']) & !empty($_GET['id'])){
						$oid = $_GET['id'];


						 


					}else{
                        header("location:".BASE_URL."/modules/Products/orders/myaccount.php");
					}
					$ordsql = "SELECT * FROM orders WHERE `user_id`=".$uid." AND `order_id`=".$oid."";
					$ordres = mysqli_query($conn, $ordsql);
					$ordr = mysqli_fetch_assoc($ordres);

					$orditmsql = "SELECT * FROM orderitems o JOIN products p WHERE o.order_id=".$oid." AND o.pid=p.id";
					$orditmres = mysqli_query($conn, $orditmsql);
					while($orditmr = mysqli_fetch_assoc($orditmres)){
				?>
                                <tr>
                                    <td>
                                        <a
                                            href="../product.php?id=<?php echo $orditmr['pid']; ?>"><?php echo substr($orditmr['name'], 0, 25); ?></a>
                                    </td>
                                    <td>
                                        <?php echo $orditmr['pquantity']; ?>
                                    </td>
                                    <td>
                                        INR <?php echo $orditmr['productprice']; ?>/-
                                    </td>
                                    <td>
                                        INR <?php echo $orditmr['discount']; ?>/-
                                    </td>
                                    <td>
                                        INR
                                        <?php echo $orditmr['productprice']*$orditmr['pquantity']-$orditmr['discount']; ?>/-
                                    </td>
                                </tr>
                                <?php } ?>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        Delivery Charges
                                    </td>
                                    <td>
                                        <?php echo "40/-"; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        Order Total
                                    </td>
                                    <td>
                                        <?php echo $ordr['totalprice']."/-"; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        Order Status
                                    </td>
                                    <td>
                                        <?php echo $ordr['order_status']; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        Order Placed On
                                    </td>
                                    <td>
                                        <?php echo $ordr['timestamp']; ?>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
        </div>
    </section>
    <?php include(ROOT_PATH . "/components/footer.php"); ?>
</body>

</html>