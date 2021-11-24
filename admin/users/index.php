<?php include("../../path.php");
// include(ROOT_PATH . "../../controllers/posts.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AAAGyms: Add Blog Post</title>
    <link href="https://fonts.googleapis.com/css2?family=Ceviche+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Audiowide&family=Bungee&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/f8756ec070.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../assets/css/admin.css">
    <link rel="stylesheet" href="../../assets/css/navigation.css">
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
                <a href="create.php" class="btn btn-big">Add User</a>

            </div>
            <div class="content">
                <h2 class="page-title">Manage Users</h2>

                <!-- <?php include(ROOT_PATH . "/app/includes/messages.php"); ?> -->

                <table>
                    <thead>
                        <th>SN</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th colspan="2">Action</th>
                    </thead>
                    <tbody>
                        <!-- <?php foreach ($admin_users as $key => $user): ?> -->
                        <tr>
                            <td><?php echo $key + 1; ?></td>
                            <td><?php echo $user['username']; ?></td>
                            <td><?php echo $user['email']; ?></td>
                            <!-- <td><a href="edit.php?id=<?php echo $user['id']; ?>" class="edit">edit</a></td> -->
                            <td><a href="index.php?delete_id=<?php echo $user['id']; ?>" class="delete">delete</a></td>
                        </tr>
                        <!-- <?php endforeach; ?> -->
                    </tbody>
                </table>
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