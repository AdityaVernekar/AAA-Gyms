<?php
    ob_start();
    include("../../../path.php");
    include(ROOT_PATH . "/components/database/db.php");
    $uid = $_SESSION['id'];
    // $cart = $_SESSION['cart'];
    global $conn;
    if(isset($_POST) & !empty($_POST)){
		$cancel = filter_var($_POST['cancel'], FILTER_SANITIZE_STRING);
		$id = filter_var($_POST['order_id'], FILTER_SANITIZE_NUMBER_INT);

			$cansql = "INSERT INTO ordertracking (`order_id`, `status`, `message`) VALUES ('$id', 'Cancelled', '$cancel')";
			$canres = mysqli_query($conn, $cansql) or die(mysqli_error($conn));
			if($canres){
				$ordupd = "UPDATE orders SET order_status='Cancelled' WHERE order_id=$id";
				if(mysqli_query($conn, $ordupd)){
                    header("location:".BASE_URL."/modules/Products/orders/myaccount.php");
				}
			}
}

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
    <title>Cancel Orders</title>
</head>

<body>
    <?php include(ROOT_PATH . "/components/header.php"); ?>
    <section id="content">
        <div class="content-blog">

            <form method="post">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <div class="billing-details">
                                <h3 class="uppercase">Cancel Order</h3>

                                <table class="cart-table account-table table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Order</th>
                                            <th>Date</th>
                                            <th>Status</th>
                                            <th>Payment Mode</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
					if(isset($_GET['id']) & !empty($_GET['id'])){
						$oid = $_GET['id'];
					}else{
                        header("location:".BASE_URL."/modules/Products/orders/myaccount.php");
					}
					$ordsql = "SELECT * FROM orders WHERE order_id=".$oid."";
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
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>

                                <div class="space30"></div>


                                <div class="clearfix space20"></div>
                                <label>Reason :</label>
                                <textarea class="form-control" name="cancel" cols="10"> </textarea>

                                <input type="hidden" name="order_id" value="<?php echo $_GET['id']; ?>">
                                <div class="space30"></div>
                                <input type="submit" class="btn" value="Cancel Order">
                            </div>
                        </div>

                    </div>

                </div>
            </form>
        </div>
    </section>
    <?php include(ROOT_PATH . "/components/footer.php"); ?>

</body>

</html>