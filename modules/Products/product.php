<?php 
include("../../path.php");
include(ROOT_PATH."/controllers/products.php");

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/navigation.css">
    <link rel="stylesheet" href="../../assets/css/product.css">
    <title><?php echo $product['name'];?></title>
</head>

<body>
    <!-- // indivisual display product page -->
    <?php include(ROOT_PATH ."/components/header.php")?>
    <div class="parent">
        <div class="left-container">
            <img src="<?php echo BASE_URL . '/assets/products/' . $product['image']; ?>" alt="" class="proimage">

            <a href="" class="cart btn">Add to Cart</a>
            <a href="" class="buy btn">Buy Now</a>


        </div>
        <div class="right-container">
            <h2><?php echo $product['name'];?></h2>
            <div class="price-container proprice">
                <span class="price">₹<?php echo $product['price']-$product['discount'];?></span>
                <p class="discount"><strike>₹<?php echo $product['price'];?></strike></p>

            </div>

            <div class="offers">
                <h4 class="heading">Available offers</h4>
                <ul>

                    <li>Bank Offer5% Unlimited Cashback on Flipkart Axis Bank Credit CardT&C</li>

                    <li>Bank Offer20% off on 1st txn with Amex Network Cards issued by ICICI Bank,IndusInd Bank,SBI
                        Cards and MobikwikT&C</li>

                    <li>Bank Offer15% Instant discount on first Pay Later order of ₹500 and aboveT&C</li>

                    <li>Special PriceGet extra 5% offT&C</li>
                </ul>
            </div>
            <div class="desc">
                <p class="heading">Description:</p>
                <p> <?php echo html_entity_decode($product['body']); ?></p>
            </div>
            <div class="table" style="margin:10px;">
                <span style="display:inline;">Delivery:</span> &nbsp; &nbsp;
                <span style="">02 Dec 2021</span>

                <p style="">Seller:</p> &nbsp; &nbsp;
                <span style="    left: 62px;
    display: inline;
    position: relative;
    top: -17px;">AAA-Gyms Pvt Limited</span>

            </div>

        </div>
    </div>

    <?php include(ROOT_PATH."/components/footer.php");?>

    <script src="../../assets/js/script.js"></script>
</body>

</html>