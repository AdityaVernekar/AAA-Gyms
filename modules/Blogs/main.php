<?php include("../../path.php");
include(ROOT_PATH."/components/database/db.php");?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        AAA-Gyms- Blogs
    </title>

    <link rel="stylesheet" href="../../assets/css/navigation.css">
    <link rel="stylesheet" href="../../assets/css/registeration.css">
    <link rel="stylesheet" href="../../assets/css/blog.css">
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Ceviche+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Audiowide&family=Bungee&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/f8756ec070.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php include(ROOT_PATH."/components/header.php");?>
    <div class="page-wrapper">
        <!-- Post Slider -->
        <div class="post-slider">
            <h1 class="slider-title">Trending Posts</h1>
            <i class="fas fa-chevron-left prev"></i>
            <i class="fas fa-chevron-right next"></i>

            <div class="post-wrapper">

                <div class="post">
                    <img src="../../assets/images/bg1.jpg" alt="" class="slider-image">
                    <div class="post-info">
                        <h4><a href="single.php">One day your life will flash before your eyes</a></h4>
                        <i class="far fa-user"> Author</i>
                        &nbsp;
                        <i class="far fa-calendar"> Mar 8, 2019</i>
                    </div>
                </div>

                <div class="post">
                    <img src="../../assets/images/bg1.jpg" alt="" class="slider-image">
                    <div class="post-info">
                        <h4><a href="single.php">One day your life will flash before your eyes</a></h4>
                        <i class="far fa-user"> Author</i>
                        &nbsp;
                        <i class="far fa-calendar"> Mar 8, 2019</i>
                    </div>
                </div>

                <div class="post">
                    <img src="../../assets/images/bg1.jpg" alt="" class="slider-image">
                    <div class="post-info">
                        <h4><a href="single.php">One day your life will flash before your eyes</a></h4>
                        <i class="far fa-user"> Author</i>
                        &nbsp;
                        <i class="far fa-calendar"> Mar 8, 2019</i>
                    </div>
                </div>

                <div class="post">
                    <img src="../../assets/images/bg1.jpg" alt="" class="slider-image">
                    <div class="post-info">
                        <h4><a href="single.php">One day your life will flash before your eyes</a></h4>
                        <i class="far fa-user"> Author</i>
                        &nbsp;
                        <i class="far fa-calendar"> Mar 8, 2019</i>
                    </div>
                </div>

                <div class="post">
                    <img src="../../assets/images/bg1.jpg" alt="" class="slider-image">
                    <div class="post-info">
                        <h4><a href="single.php">One day your life will flash before your eyes</a></h4>
                        <i class="far fa-user"> Author</i>
                        &nbsp;
                        <i class="far fa-calendar"> Mar 8, 2019</i>
                    </div>
                </div>


            </div>

        </div>
        <!-- // Post Slider -->
        <!-- Content -->
        <div class="content clearfix">

            <!-- Main Content -->
            <div class="main-content">
                <h1 class="recent-post-title">Recent Posts</h1>

                <div class="post clearfix">
                    <img src="../../assets/images/main1.jpg" alt="" class="post-image">
                    <div class="post-preview">
                        <h2><a href="single.hmtl">The strongest and sweetest songs yet remain to be sung</a></h2>
                        <i class="far fa-user"> Author</i>
                        &nbsp;
                        <i class="far fa-calendar"> Mar 11, 2019</i>
                        <p class="preview-text">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                            Exercitationem optio possimus a inventore maxime laborum.
                        </p>
                        <a href="single.php" class="btn read-more">Read More</a>
                    </div>
                </div>

                <div class="post clearfix">
                    <img src="../../assets/images/main1.jpg" alt="" class="post-image">
                    <div class="post-preview">
                        <h2><a href="single.hmtl">The strongest and sweetest songs yet remain to be sung</a></h2>
                        <i class="far fa-user"> Author</i>
                        &nbsp;
                        <i class="far fa-calendar"> Mar 11, 2019</i>
                        <p class="preview-text">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                            Exercitationem optio possimus a inventore maxime laborum.
                        </p>
                        <a href="single.php" class="btn read-more">Read More</a>
                    </div>
                </div>
                <div class="post clearfix">
                    <img src="../../assets/images/main1.jpg" alt="" class="post-image">
                    <div class="post-preview">
                        <h2><a href="single.hmtl">The strongest and sweetest songs yet remain to be sung</a></h2>
                        <i class="far fa-user"> Author</i>
                        &nbsp;
                        <i class="far fa-calendar"> Mar 11, 2019</i>
                        <p class="preview-text">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                            Exercitationem optio possimus a inventore maxime laborum.
                        </p>
                        <a href="single.php" class="btn read-more">Read More</a>
                    </div>
                </div>
                <div class="post clearfix">
                    <img src="../../assets/images/main1.jpg" alt="" class="post-image">
                    <div class="post-preview">
                        <h2><a href="single.hmtl">The strongest and sweetest songs yet remain to be sung</a></h2>
                        <i class="far fa-user"> Author</i>
                        &nbsp;
                        <i class="far fa-calendar"> Mar 11, 2019</i>
                        <p class="preview-text">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                            Exercitationem optio possimus a inventore maxime laborum.
                        </p>
                        <a href="single.php" class="btn read-more">Read More</a>
                    </div>
                </div>

            </div>
            <!-- // Main Content -->

            <div class="sidebar">

                <div class="section search">
                    <h2 class="section-title">Search</h2>
                    <form action="index.html" method="post">
                        <input type="text" name="search-term" class="text-input" placeholder="Search...">
                    </form>
                </div>


                <div class="section topics">
                    <h2 class="section-title">Topics</h2>
                    <ul>
                        <li><a href="#">Poems</a></li>
                        <li><a href="#">Quotes</a></li>
                        <li><a href="#">Fiction</a></li>
                        <li><a href="#">Biography</a></li>
                        <li><a href="#">Motivation</a></li>
                        <li><a href="#">Inspiration</a></li>
                        <li><a href="#">Life Lessons</a></li>
                    </ul>
                </div>

            </div>

        </div>
        <!-- // Content -->
    </div>

    <?php include(ROOT_PATH."/components/footer.php");?>

</body>
<!-- JQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Slick Carousel -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>


<script src="../../assets/js/blog.js"></script>

</html>