<?php 
include("../../path.php");
include(ROOT_PATH."/controllers/products.php");

$reviews = selectAll('reviews',['product_id'=>$_GET['id']]);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/navigation.css">
    <link rel="stylesheet" href="../../assets/css/product.css">
    <script src="https://kit.fontawesome.com/f8756ec070.js" crossorigin="anonymous"></script>
    <title><?php echo $product['name'];?></title>
</head>

<body>
    <!-- // indivisual display product page -->
    <?php include(ROOT_PATH ."/components/header.php")?>
    <div class="parent">
        <div class="left-container">
            <img src="<?php echo BASE_URL . '/assets/products/' . $product['image']; ?>" alt="" class="proimage"
                height="400px" width="320px">


            <!-- <button type="submit" name="add_to_cart" class="cart btn">Add to cart</button> -->
            <?php if ($product['stocks']!=0):?>
            <a href="cart/addtocart.php?id=<?php echo $product['id'];?>" class="cart btn">Buy
                Now</a>
            <?php else:?>
            <a href="#" class="cart btn " style="color:red;">Out of
                Stock</a>
            <?php endif;?>




        </div>
        <div class="right-container">
            <h2><?php echo $product['name'];?></h2>
            <div class="price-container proprice">
                <span class="price">₹<?php echo $product['price']-$product['discount'];?></span>
                <p class="discount"><strike>₹<?php echo $product['price'];?></strike></p>
                <span class="category_display"><?php echo $product['category'];?></span>

            </div>

            <?php
               
                 if($product['stocks']==0){
                    echo "<div class='msg error'>Sorry we are out of stock</div>";
                }
                else  if($product['stocks']<=3 && $product['stocks']>0){
                    echo "<div class='msg error'><b>Hurry!!!</b> Only ".$product['stocks']." left in stock</div>";
                }
                
                ?>


            <div class="offers">
                <h4 class="heading">Available offers</h4>
                <ul>

                    <li><i class="fas fa-check-circle"></i>Bank Offer5% Unlimited
                        Cashback on Flipkart Axis Bank Credit CardT&C</li>

                    <li><i class="fas fa-check-circle"></i>Bank Offer20% off on 1st txn with Amex Network Cards issued
                        by ICICI Bank,IndusInd Bank,SBI
                        Cards and MobikwikT&C</li>

                    <li><i class="fas fa-check-circle"></i>Bank Offer15% Instant discount on first Pay Later order of
                        ₹500 and aboveT&C</li>

                    <li><i class="fas fa-check-circle"></i>Special PriceGet extra 5% offT&C</li>
                </ul>
            </div>
            <div class="desc">
                <p class="heading">Description:</p>
                <p class="body"> <?php echo html_entity_decode($product['body']); ?></p>
            </div>
            <div class="table" style="margin:10px;">
                <span style="display:inline;margin-top:10px;font-weight:600;">Delivery:</span> &nbsp; &nbsp;
                <span style="" id="date"></span>

                <p style="margin-top:10px;font-weight:600;">Seller:</p> &nbsp; &nbsp;
                <span style="     left: 91px;
    display: inline;
    position: relative;
    top: -27px;">AAA-Gyms Pvt Limited</span>

            </div>

        </div>
    </div>
    <div class="comment-section-container" style="margin-left: 90px;">
        <h1 class="text-left">Reviews</h1>
        <div class="display-comments">

            <?php if(count($reviews) == 0): ?>
            <h3>No reviews</h3>

            <?php else: ?>
            <?php foreach($reviews as $comment) : ?>
            <div class="comment-container">
                <div class="comment-header">
                    <img src="../../assets/images/user.png" alt="user">
                    <h4><?php echo $comment['username']; ?></h4>

                    <p><?php echo date('F j, Y', strtotime($comment['created_at'])); ?></p>

                    <?php if($_SESSION['name']==$comment['username']):?>

                    <a href="single.php?id=<?php echo $_GET['id']; ?>&delid=<?php echo $comment['id']; ?>"><i
                            class='far fa-trash-alt delbtn'></i></a>
                    <?php endif;?>

                </div>

                <div class="comment-body">

                    <p><?php echo $comment['body']; ?></p>
                    <p></p>
                </div>
            </div>

            <?php endforeach; ?>
            <?php endif; ?>
        </div>


    </div>

    <?php include(ROOT_PATH."/components/footer.php");?>
    <script>
    const date = document.querySelector("#date");
    const date1 = new Date(new Date().getTime() + 5 * 24 * 60 * 60 * 1000).toDateString();

    date.textContent = date1;
    </script>
    <script src="../../assets/js/script.js"></script>
</body>

</html>