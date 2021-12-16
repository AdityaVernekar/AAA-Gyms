<?php

include("../../../path.php");
include(ROOT_PATH . "/controllers/orders.php");

$price = $_GET['price'];
$totalprice = $price + 40;

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
    <script src="https://kit.fontawesome.com/f8756ec070.js" crossorigin="anonymous"></script>
    <title>Checkout</title>
</head>

<body>
    <?php include(ROOT_PATH."/components/header.php");?>
    <section id="content" style="height:130vh;">
        <div class="content-blog">

            <form method="post">
                <div class="container my-4">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <div class="billing-details">
                                <h3 class="uppercase">Billing Details</h3>
                                <div class="clearfix space20">
                                    <?php if(count($errors)>0):?>
                                    <div class="msg error">
                                        <?php foreach($errors as $error):?>
                                        <li><?php echo $error;?></li>
                                        <?php endforeach; ?>
                                    </div>
                                    <?php endif;?>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>First Name </label>
                                        <input name="fname" class="form-control" placeholder=""
                                            value="<?php echo $fname;?>" type="text">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Last Name </label>
                                        <input name="lname" class="form-control" placeholder=""
                                            value="<?php echo $lname;?>" type="text">
                                    </div>
                                </div>
                                <label>Address </label>
                                <input name="address" class="form-control" placeholder="Street address"
                                    value="<?php echo $address;?>" type="text">

                                <div class="row">
                                    <div class="col-md-4">
                                        <label>City </label>
                                        <input name="city" class="form-control" placeholder="City"
                                            value="<?php echo $city;?>" type="text">
                                    </div>
                                </div>
                                <div class="clearfix space20"></div>
                                <label>Phone </label>
                                <input name="phone" class="form-control" id="billing_phone" placeholder=""
                                    value="<?php echo $phone;?>" type="text">

                            </div>
                            <input type="hidden" name="totalprice" value="<?php echo $totalprice?>">
                        </div>

                    </div>

                    <div class="space30"></div>
                    <h4 class="heading">Your order</h4>

                    <table class="table table-bordered extra-padding">
                        <tbody>
                            <tr>
                                <th>Cart Subtotal</th>
                                <td><span class="amount"><?php
                                echo $price ?></span></td>
                            </tr>
                            <tr>
                                <th>Shipping and Handling</th>
                                <td>
                                    40.00/-
                                </td>
                            </tr>
                            <tr>
                                <th>Order Total</th>
                                <td><strong><span class="amount"><?php echo $totalprice .".00/-" ?></span></strong>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="clearfix space30"></div>
                    <h4 class="heading">Payment Method</h4>
                    <div class="clearfix space20"></div>

                    <div class="payment-method">
                        <div class="row">

                            <div class="col-md-4">
                                <input name="payment" id="radio1" class="css-checkbox" type="radio"
                                    value="cod"><span>Cash On Delivery</span>
                                <div class="space20"></div>
                                <p>Make your payment directly into our bank account. Please use your Order ID as the
                                    payment reference. Your order won't be shipped until the funds have cleared in our
                                    account.</p>
                            </div>
                            <div class="col-md-4">
                                <input name="payment" id="radio3" class="css-checkbox" type="radio"><span
                                    value="paypal">UPI</span>
                                <div class="space20"></div>
                                <p>Pay via UPI; you can pay with your mobile money or net banking.</p>
                                </p>
                            </div>

                        </div>


                        <input name="agree" id="checkboxG2" class="css-checkbox" type="checkbox" value="true"><span>I've
                            read and accept the terms &amp; conditions</span>
                        <input type="submit" class="btn" value="Pay Now">
                    </div>
                </div>
            </form>
        </div>
    </section>
    <?php include(ROOT_PATH."/components/footer.php");?>
</body>

</html>