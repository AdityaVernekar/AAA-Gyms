<header>
    <div class="logo">
        <h1 class="logo-text"><span>AAA</span>Gyms</h1>
    </div>
    <i class="fas fa-bars bar-logo"></i>
    <ul class="nav">
        <li><a href="<?php echo BASE_URL . '/index.php'?>">Home</a></li>

        <li><a href="<?php echo BASE_URL.'/modules/workout/workout.php' ?>">Workout</a></li>
        <li><a href="<?php echo BASE_URL.'/modules/Blogs/main.php'?>">Blogs</a></li>
        <li><a href="<?php echo BASE_URL.'/modules/Products/main.php'?>">Products</a></li>


        <?php if(isset($_SESSION['name'])): ?>
        <li><a href="#">
                <i class="fa fa-user"></i>
                <?php echo $_SESSION['name']; ?>
                <i class="fa fa-chevron-down" style="font-size: 9px;"></i></a>
            <ul>

                <?php if(($_SESSION['admin'])==1): ?>
                <li><a href="<?php echo BASE_URL . '/admin/dashboard.php'?>">Dashboard </a></li>
                <?php endif; ?>
                <li><a href="<?php echo BASE_URL.'/modules/registeration/logout.php'?>" class="logout">Logout</a></li>
            </ul>
        </li>
        <?php else: ?>
        <li><a href="<?php echo BASE_URL.'/modules/registeration/register.php'?>">Signup</a></li>
        <li><a href="<?php echo BASE_URL.'/modules/registeration/login.php'?>">Login</a></li>
        <?php endif; ?>
    </ul>
</header>