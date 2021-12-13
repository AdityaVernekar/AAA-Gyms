<?php
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    ob_start();
    include(ROOT_PATH . "/components/database/db.php");
    include(ROOT_PATH . "/helpers/validateOrders.php");
    

    $uid = $_SESSION['id'];
    $cart = $_SESSION['cart'];
    $errors = array();
    $fname="";
    $lname="";
    $address="";
    $city="";
    $phone="";


    




    if(isset($_POST)& !empty($_POST)){

        $errors = validateOrders($_POST);

        global $conn;
        if(count($errors)===0){
            $user_id = $_SESSION['id'];

            $_POST['user_id'] = $user_id;
            $_POST['order_status']="Order Placed";
            $_POST['order_id']= rand(100,999);
            $_SESSION['order_id'] = $_POST['order_id'];
            unset($_POST['agree'],$_POST['phone']);
            // dd($_POST);
            $iosql = create("orders",$_POST);
            
            $orderid = $_SESSION['order_id'];
                
                foreach($cart as $key => $value){
                    $ordsql = "SELECT * FROM products WHERE id = $key";
                    $ordres = mysqli_query($conn, $ordsql);
                    $ordr = mysqli_fetch_assoc($ordres);
                    
                    $pid = $ordr['id'];
                    $productprice = $ordr['price'];
                    $quantity = $value['quantity'];
                    
                    
                    $orditmsql = "INSERT INTO orderitems VALUES ('$pid', '$orderid', '$productprice', '$quantity')";
                    $orditmres = mysqli_query($conn, $orditmsql) or die(mysqli_error($conn));
                    // decrementing stocks of products
                   $stockquery = "update products set stocks = stocks - $quantity where id = $pid";
                     $stockres = mysqli_query($conn, $stockquery) or die(mysqli_error($conn));
                     
                    
                
                
            }
            unset($_SESSION['cart']);
            $_SESSION['message'] = "Order Placed Successfully";
            $_SESSION['type'] = "success";
            header("location:".BASE_URL."/index.php");
            exit();
    
        }
        else{
                // array_push($errors, "Please agree to the terms and conditions");
                $user = selectOne("users",["id"=>$_SESSION['id']]);
                $fname = $_POST['fname'];
                $lname = $_POST['lname'];
                $address=$_POST['address'];
                $city=$_POST['city'];
                $phone=$user['phone'];



        }
        }
       


?>