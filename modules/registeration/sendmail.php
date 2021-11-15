<?php include("../../path.php");
include(ROOT_PATH."/controllers/users.php");?>
<!DOCTYPE html>

<html lang="en">
<?php

    if($email_sent){
        $_SESSION['message']="email sent successfully";
        $_SESSION['type']="success";
    }
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Ceviche+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Audiowide&family=Bungee&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/f8756ec070.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../../assets/css/registeration.css">
    <link rel="stylesheet" href="../../assets/css/navigation.css">
    <title>Check Email For Otp</title>
</head>

<body>
    <?php include(ROOT_PATH."/components/header.php");?>
    <div class="container my-3">
        <form action="sendmail.php" method="post">
            <div class="auth-content">
                <div class="otp-content" style="border: 2px solid orangered;padding: 67px;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;">
                    <?php include(ROOT_PATH ."/helpers/formErrors.php");?>
                    <h3>Enter OTP sent to your email</h3>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Enter OTP</label>
                        <input type="text" class="form-control" name="otp" value="" id="exampleInputPassword1">
                    </div>
                    <button type="submit" class="btn otp-button" name="otp-btn">Submit</button>
                </div>
            </div>
        </form>
    </div>
    <?php include(ROOT_PATH."/components/footer.php");?>
</body>
<!-- JavaScript Bundle with Popper -->



</html>