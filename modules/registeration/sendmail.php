<?php include("../../path.php");
include(ROOT_PATH."/controllers/users.php");?>
<!DOCTYPE html>

<html lang="en">

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

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Enter OtP</label>
                    <input type="number" class="form-control" name="otp" value="" id="exampleInputPassword1">
                </div>
                <button type="submit" class="btn btn-primary" name="otp-btn">Submit</button>
            </div>
        </form>
    </div>
</body>
<!-- JavaScript Bundle with Popper -->

</script>

</html>