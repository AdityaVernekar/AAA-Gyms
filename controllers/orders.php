<?php
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    ob_start();
    include(ROOT_PATH . "/components/database/db.php");
    include(ROOT_PATH . "/helpers/validateOrders.php");
    

    $uid = $_SESSION['id'];
    
    $table1= "orders";
    $errors = array();
    $delivered=false;
    $fname="";
    $lname="";
    $address="";
    $city="";
    $phone="";
    $ordersqry = "select * from orders o join users u on u.id=o.user_id";
    $result = mysqli_query($conn, $ordersqry);
    $orders = mysqli_fetch_all($result, MYSQLI_ASSOC);
    
    if(isset($_GET['orderid'])){
        $orderitemsqry = "select o.order_id,p.name,o.city,o.payment,o.totalprice,oi.pquantity,o.order_status from orderitems oi join products p on p.id=oi.pid join orders o on o.order_id = oi.order_id where o.order_id=".$_GET['orderid']."";
    $result = mysqli_query($conn, $orderitemsqry);
    $orderitems = mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
    if(isset($_GET['deliver_id'])){
        $deliverqry = "update orders set order_status = 'Delivered' where order_id=".$_GET['deliver_id']."";
        $result = mysqli_query($conn, $deliverqry);
        $delivered=true;
        header("location:".BASE_URL."/admin/orders/index.php");
        exit();
    }




    if(isset($_POST)& !empty($_POST)){
        $cart = $_SESSION['cart'];

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
                    $orditmres = mysqli_query($conn, $orditmsql) ;
                    if(!$orditmres){
                        $_SESSION['message'] = "Order was not  Successfully";
                        $_SESSION['type'] = "error";
                         header("location:".BASE_URL."/modules/Products/orders/myaccount.php");
                    }
                    else{

                        $stockquery = "update products set stocks = stocks - $quantity where id = $pid";
                          $stockres = mysqli_query($conn, $stockquery) or die(mysqli_error($conn));
                    }
                    // decrementing stocks of products
                     
                    
                
                
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


        if(isset($_GET['del_id'])){
            $sql1 = "DELETE FROM orderitems WHERE order_id = {$_GET['del_id']}";
            $sql2 = "DELETE FROM orders where order_id = {$_GET['del_id']}";
            $res1 = mysqli_query($conn, $sql1);
            $res2 = mysqli_query($conn, $sql2);
            $_SESSION['message'] = "Order deleted successfully";
            $_SESSION['type'] = "success";
            header("location: " . BASE_URL . "/admin/orders/index.php"); 
            exit();
        }
       

        


?>