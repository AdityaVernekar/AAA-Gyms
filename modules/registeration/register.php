<?php include('../../path.php');
include(ROOT_PATH."/controllers/users.php");?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up- AAA-Gyms</title>
    <link rel="stylesheet" href="../../assets/css/navigation.css">
    <link rel="stylesheet" href="../../assets/css/registeration.css">
    <script src="https://kit.fontawesome.com/f8756ec070.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php include(ROOT_PATH."/components/header.php");?>
    <div class="auth-content">
        <form action="register.php" method="post">
            <h1 class="form-title">Sign Up to <span>AAA</span>-Gyms</h1>
            <?php

if(count($errors)>0):?>
            <div class="msg error">
                <?php foreach($errors as $error):?>
                <li><?php echo $error;?></li>
                <?php endforeach; ?>
            </div>
            <?php endif;?>
            <div>
                <label>Username</label>
                <input type="text" name="name" id="name" value="<?php echo $name;?>" class="text-input">
            </div>
            <div>
                <label>Email</label>
                <input type="email" name="email" id="email" value="<?php echo $email;?>" class="text-input">
            </div>
            <div class="dob">
                <label>Add Your Date of Birth </label>
                <input type="date" name="dob" id="dob" class="text-input">
            </div>
            <div class="numberinputs">
                <label>Phone Number</label>
                <input type="number" maxlength="10" name="phone" id="ph_no" class="text-input">
            </div>
            <div class="numberinputs">

                <br>
                Height(in cms):
                <input type="number" maxlength="3" name="height" id="height" class="text-input"
                    style="margin-bottom: 10px;">
                Weight(in kgs):
                <input type="number" maxlength="3" name="weight" id="weight" class="text-input">
            </div>
            <div>
                <label>Password</label>
                <input type="password" name="password" id="password" value="<?php echo $password;?>" class="text-input">
            </div>
            <div>
                <label>Confirm Password</label>
                <input type="password" name="cpassword" id="cpassword" value="<?php echo $cpassword;?>"
                    class="text-input">
            </div>
            <div>
                <button type="submit" name="register-btn" class="btn reg-button">Sign Up</button>
            </div>
            <p>Or <a href="<?php echo BASE_URL.'/registeration/login.php'?>">Log in</a></p>
        </form>
    </div>

    <?php include(ROOT_PATH."/components/footer.php");?>
</body>
<script src="assets/js/script.js"></script>

</html>