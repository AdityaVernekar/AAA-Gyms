<?php include('../path.php');?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login- AAA-Gyms</title>
    <link rel="stylesheet" href="../assets/css/navigation.css">
    <link rel="stylesheet" href="../assets/css/registeration.css">
    <script src="https://kit.fontawesome.com/f8756ec070.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php include(ROOT_PATH."/components/header.php");?>
    <div class="auth-content">
        <form action="login.php" method="post">
            <h1 class="form-title">Sign Up to <span>AAA</span>-Gyms</h1>
            <?php include(ROOT_PATH ."/helpers/formErrors.php");?>
            <div>
                <label>Username</label>
                <input type="text" name="username" id="" class="text-input">
            </div>
            <div>
                <label>Email</label>
                <input type="email" name="email" id="" class="text-input">
            </div>
            <div>
                <label>Password</label>
                <input type="password" name="password" id="" class="text-input">
            </div>
            <div>
                <label>Confirm Password</label>
                <input type="password" name="password" id="" class="text-input">
            </div>
            <div>
                <button type="submit" name="login-btn" class="btn">Login</button>
            </div>
            <p>Or <a href="<?php echo BASE_URL.'/registeration/login.php'?>">Log in</a></p>
        </form>
    </div>

    <?php include(ROOT_PATH."/components/footer.php");?>
</body>
<script src="assets/js/script.js"></script>

</html>