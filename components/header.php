<header>
    <div class="logo">
        <h1 class="logo-text"><span>AAA</span>Gyms</h1>
    </div>
    <i class="fas fa-bars bar-logo"></i>
    <ul class="nav">
        <li><a href="<?php echo BASE_URL . '/index.php'?>">Home</a></li>
        <li><a href="#">Workout</a></li>
        <li><a href="#">Blogs</a></li>
        <li><a href="#">Products</a></li>
        <li><a href="<?php echo BASE_URL.'/modules/registeration/register.php'?>">Signup</a></li>
        <li><a href="<?php echo BASE_URL.'/modules/registeration/login.php'?>">Login</a></li>
        <li><a href="#">
                <i class="fa fa-user"></i>
                <?php if(isset($_SESSION['name'])){
                    echo $_SESSION['name'];
                } ?>
                <i class="fa fa-chevron-down" style="font-size: 9px;"></i></a>
            <ul>
                <li><a href="#">Dashboard</a></li>
                <li><a href="<?php echo BASE_URL.'/modules/registeration/logout.php'?>" class="logout">Logout</a></li>
            </ul>
        </li>
    </ul>
</header>