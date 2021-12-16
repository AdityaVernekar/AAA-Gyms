<?php include("../../path.php");
include(ROOT_PATH . "/controllers/products.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AAAGyms: Add Products</title>
    <link href="https://fonts.googleapis.com/css2?family=Ceviche+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Audiowide&family=Bungee&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/f8756ec070.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../assets/css/navigation.css">
    <link rel="stylesheet" href="../../assets/css/admin.css">
    <!-- <link rel="stylesheet" href="../../assets/css/registeration.css"> -->
</head>

<body>
    <?php include(ROOT_PATH . "/components/adminHeader.php");?>
    <!-- Admin Page Wrapper -->
    <div class="admin-wrapper">

        <?php include(ROOT_PATH . "/components/adminSidebar.php"); ?>


        <!-- Admin Content -->
        <div class="admin-content">
            <div class="button-group">

                <a href="index.php" class="btn btn-big">Manage Products</a>
            </div>


            <div class="content">

                <h2 class="page-title">Add Products</h2>

                <?php include(ROOT_PATH . '/helpers/formErrors.php'); ?>

                <form action="create.php" method="post" enctype="multipart/form-data">
                    <div>
                        <label>Name</label>
                        <input type="text" name="name" class="text-input">
                    </div>
                    <div>
                        <label>Body</label>
                        <textarea name="body" id="body" rows="10"></textarea>
                    </div>
                    <div>
                        <label>Image</label>
                        <input type="file" name="image" class="text-input">
                    </div>
                    <div>
                        <label>Price ₹</label>

                        <input type="number" name="price" class="text-input">
                    </div>
                    <div>
                        <label>Total Stock</label>
                        <input type="number" name="stocks" class="text-input">
                    </div>
                    <div>
                        <label>Discount ₹</label>
                        <input type="number" name="discount" class="text-input">
                    </div>
                    <div>
                        <label for="category">Choose a Category:</label>

                        <select name="category" id="category">
                            <option value="Equipments">Equipments</option>
                            <option value="Protein and Supplements">Protein and Supplements</option>
                            <option value="Clothes">Clothes</option>
                            <option value="Gym Accessories">Gym Accessories</option>
                        </select>
                    </div>
                    <div>
                        <button type="submit" name="add-product" class="btn btn-big">Add</button>
                    </div>
                </form>

            </div>

        </div>
        <!-- // Admin Content -->

    </div>
    <!-- // Page Wrapper -->
</body>
<!-- JQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Ckeditor -->
<script src="https://cdn.ckeditor.com/ckeditor5/12.2.0/classic/ckeditor.js"></script>
<!-- Custom Script -->
<script src="../../assets/js/blog.js"></script>

</html>