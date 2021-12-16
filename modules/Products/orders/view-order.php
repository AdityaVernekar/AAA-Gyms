<?php
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    ob_start();
    include("../../../path.php");
    include(ROOT_PATH . "/components/database/db.php");

    $uid = $_SESSION['id'];
    
    global $conn;
    $delivered=false;
    $delsql = "select order_status from orders where order_id =".$_GET['id']." ";
    $delresult = mysqli_query($conn, $delsql);
    $delrow = mysqli_fetch_assoc($delresult);
    if($delrow['order_status']=="Delivered"){
        $delivered=true;
    }

    if(isset($_POST['reviewbtn'])){

        unset($_POST['reviewbtn']);
       
        $review = create('reviews', $_POST);
        if($review){
            $_SESSION['message'] = "Review Submitted";
            $_SESSION['type'] = "success";
            header("location:".BASE_URL."/modules/Products/orders/myaccount.php");
            exit();
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
    <link href="https://fonts.googleapis.com/css2?family=Ceviche+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Audiowide&family=Bungee&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/f8756ec070.js" crossorigin="anonymous"></script>
    <title>View Orders</title>
</head>

<body>
    <?php include(ROOT_PATH . "/components/header.php"); ?>

    <!-- SHOP CONTENT -->
    <section id="content" style="height:70vh;">
        <div class="content-blog content-account">
            <div class="container">
                <div class="row">
                    <div class="page_header text-center">

                    </div>
                    <div class="col-md-12">

                        <h3 style="font-size: 30px;
    text-align: center;
    font-weight: 700;
    margin: 20px 0px;"> Orders Details</h3>

                        <?php
                            if($delivered==true){
                                echo "<div class='msg success'>Your Order has been deliverd to your gym 
                                <br>
                                Please pay at the gym counter to claim your order </div>";
                            }
                            ?>

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
                                        <?php echo $ordr['order_status'];
                                        
                                        ?>
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

    <?php if ($delivered):?>
    <div class="review-section-container">
        <?php

     

            $orditmsql = "SELECT * FROM orderitems o JOIN products p WHERE o.order_id=".$oid." AND o.pid=p.id";
            $orditmres = mysqli_query($conn, $orditmsql);
            while($orditmr = mysqli_fetch_assoc($orditmres)){


                        $sql = "SELECT * FROM reviews WHERE product_id=".$orditmr['pid']." and user_id =".$_SESSION['id']."";
                        $res = mysqli_query($conn, $sql);
                        if(mysqli_num_rows($res)!=0){
                            echo "
                            
                            <div class='container my-4'>
                            <h2 class='text-center review-thanks'>Thanks for the review<h2>
                            </div>";
                        }
                        else{
                            echo "<h1>If you liked this product we would like you to rate it</h1>";
                        echo '<form action="view-order.php?id='.$oid.'" method="post" name="rev-form">
                        <input type="hidden" name="product_id" value='.$orditmr['pid'].'>
                        <input type="hidden" name="user_id" value=' .$_SESSION['id']. '>
                        <input type = "number" name="rating" min="1" max="5" placeholder="1-5" required>
                        <input type="hidden" name="username" value='.$_SESSION['name'].'>
                        <input type="text" name="body" placeholder="Comment here" class="text-input">
                        <input type="submit" name="reviewbtn" class="btn" value="Comment">
                        </form>';
                        }




                
                        

                        }
                   
                        
                        
                        
                        
                            ?>
    </div>
    <?php endif; ?>

    <?php include(ROOT_PATH . "/components/footer.php"); ?>
</body>

</html>