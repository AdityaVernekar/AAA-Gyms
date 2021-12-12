<?php include("../../../path.php");
include(ROOT_PATH."/controllers/products.php");
$cart = $_SESSION['cart'];
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
    <!-- JavaScript Bundle with Popper -->
    <style>
    .cart-table thead {
        background: #000;
        color: #fff;
    }

    a:hover {
        text-decoration: none;
        color: "black";
    }



    .cart-btn a {
        background: #ef7c00;
        padding: 10px 16px;
        color: "black";
        text-transform: uppercase;
        border: medium none;
        font-size: 14px;
        letter-spacing: 2px;
        border-radius: 0px;
        display: inline-block;
        transition: all 0.4s ease 0s;
        font-weight: 700;
        position: relative;
        left: 179%;
    }

    .ex {
        display: flex;
        align-items: center;
        justify-content: center;
    }
    </style>

    <title>Select Workout</title>
</head>

<body>
    <?php include(ROOT_PATH."/components/header.php");?>
    <?php include(ROOT_PATH ."/components/messages.php");?>

    <!-- <?php if(!($cart)): ?>
    <div class="container">
        <h1>Cart-Empty</h1>
    </div>
    <?php else: ?> -->

    <section id="content">
        <div class="content-blog">
            <div class="container my-4">
                <div class="row">

                    <div class="col-md-12">

                        <table class="cart-table table table-borderless" style="background: azure;
    font-size: 18px;">
                            <thead>
                                <tr class="border-bottom">
                                    <th>&nbsp;</th>
                                    <th>&nbsp;</th>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
					//print_r($cart);
				$total = 0;
					foreach ($cart as $key => $value) {
						//echo $key . " : " . $value['quantity'] ."<br>";
						$cartsql = "SELECT * FROM products WHERE id=$key";
						$cartres = mysqli_query($conn, $cartsql);
						$cartr = mysqli_fetch_assoc($cartres);

					
				 ?>
                                <tr class="border-bottom">
                                    <td>
                                        <a class="remove" href="delcart.php?id=<?php echo $key; ?>"><i
                                                class="fa fa-times" style="position:relative;top: 43px;"></i></a>
                                    </td>
                                    <td class="ex">
                                        <a href="#"><img
                                                src="<?php echo BASE_URL . '/assets/products/' . $cartr['image']; ?>"
                                                alt="" height="115" width="90"></a>
                                    </td>
                                    <td>
                                        <a
                                            href="../product.php?id=<?php echo $cartr['id']; ?>"><?php echo ($cartr['name'])."....."; ?></a>
                                    </td>
                                    <td>
                                        <span class="amount">INR &nbsp; <?php echo $cartr['price']; ?>.00/-</span>
                                    </td>
                                    <td>
                                        <div class="quantity"><?php echo $value['quantity']; ?></div>
                                    </td>
                                    <td>
                                        <span class="amount">INR &nbsp;
                                            <?php echo ($cartr['price']*$value['quantity']); ?>.00/-</span>
                                    </td>
                                </tr>
                                <?php 
					$total = $total + ($cartr['price']*$value['quantity']);
				} ?>
                                <tr class="border-bottom">
                                    <td colspan="6" class="actions">

                                        <div class="col-md-6">
                                            <div class="cart-btn">
                                                <!-- <button class="button btn-md" type="submit">Update Cart</button> -->
                                                <a href="checkout.php" class="button btn-md ">Checkout</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="cart_totals">
                            <div class="col-md-6 push-md-6 no-padding">
                                <h4 class="heading">Cart Totals</h4>
                                <table class="table table-borderless  col-md-6" style="background: azure;
    font-size: 18px;">
                                    <tbody>
                                        <tr class="border-bottom">
                                            <th>Cart Subtotal</th>
                                            <td><span class="amount ">INR <?php echo $total; ?>.00/-</span>
                                            </td>
                                        </tr>
                                        <tr class="border-bottom">
                                            <th>Shipping and Handling</th>
                                            <td>
                                                <span class="amount">INR 40.00/-</span>
                                            </td>
                                        </tr>
                                        <?php $totalamt = $total + 40; ?>
                                        <tr class="border-bottom">
                                            <th>Order Total</th>
                                            <td><strong><span class="amount">INR
                                                        <?php echo $totalamt; ?>.00/-</span></strong> </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- <?php endif; ?> -->


    <?php include(ROOT_PATH."/components/footer.php");?>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>
<script src="https://kit.fontawesome.com/f8756ec070.js" crossorigin="anonymous"></script>

</html>