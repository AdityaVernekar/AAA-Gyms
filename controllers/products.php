<?php
include(ROOT_PATH . "/components/database/db.php");
include(ROOT_PATH . "/helpers/validateProducts.php");

$table = "products";
$id="";
$name="";
$body="";
$price=0;
$stocks = 0;
$discount=0;
$errors = array();
$products = selectAll($table);

if (isset($_GET['delete_id'])) {
    // adminOnly();
    $count = delete($table, $_GET['delete_id']);
    $_SESSION['message'] = "Product deleted successfully";
    $_SESSION['type'] = "success";
    header("location: " . BASE_URL . "/admin/products/index.php"); 
    exit();
}

if(isset($_POST['add-product'])){
    $errors = validateProducts($_POST);
    if (!empty($_FILES['image']['name'])) {
        $image_name = time() . '_' . $_FILES['image']['name'];
        $destination = ROOT_PATH . "/assets/products/" . $image_name;

        $result = move_uploaded_file($_FILES['image']['tmp_name'], $destination);

        if ($result) {
           $_POST['image'] = $image_name;
        } else {
            array_push($errors, "Failed to upload image");
        }
    } else {
       array_push($errors, "Post image required");
    }
    if(count($errors)===0){
        unset($_POST['add-product']);
        $_POST['body'] = htmlentities($_POST['body']);
        // dd($_POST);
        $pro_id = create($table, $_POST);
        $_SESSION['message'] = "Product added successfully";
        $_SESSION['type'] = "success";
        header("location: " . BASE_URL . "/admin/products/index.php"); 
        exit(); 
    }
    else{
        $name=$_POST['name'];
        $body=$_POST['body'];
        $price=$_POST['price'];
        $stocks=$_POST['stocks'];
        $discount = $_POST['discount'];
    }

}

?>