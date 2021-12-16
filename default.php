<?php
include("path.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/navigation.css">
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Ceviche+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Audiowide&family=Bungee&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/f8756ec070.js" crossorigin="anonymous"></script>
    <title>Unaythorised access</title>
    <style>
    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        /* height: 100vh; */
        flex-direction: column;
        position: relative;
        right: 100px;
        top: 100px;
    }
    </style>
</head>

<body>
    <?php include(ROOT_PATH . "/components/header.php")?>
    <div class="container">
        <h1>You are not authorised to access this page</h1>
        <a href="<?php echo BASE_URL ."/modules/registeration/register.php" ?>">Head Toward Registeration</a>
        <h1>OR</h1>
        <h1>Please <a href="<?php echo BASE_URL ."/modules/registeration/login.php" ?>">Login</a> to continue</h1>
    </div>
</body>

</html>