<?php include("../../path.php");
include(ROOT_PATH."/controllers/posts.php");


$posts = array();
$postsTitle = 'Recent Posts';
$topics = selectTopics();

$posts = selectAll($table);

?>
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
                <?php foreach ($posts as $post):?>
                <div class="post">
                    <img src="<?php echo BASE_URL . '/assets/images/' . $post['image']; ?>" alt="" class="slider-image">
                    <div class="post-info">
                        <h3><a href="single.php"><?php echo $post['title']; ?></a></h3>
                        <i class="far fa-user"> <?php echo $post['author']; ?></i>
                        &nbsp;
                        <i class="far fa-calendar"><?php echo date('F j, Y', strtotime($post['created_at'])); ?></i>
                    </div>
                </div>
                <?php endforeach; ?>



            </div>

        </div>
        <!-- // Post Slider -->
        <!-- Content -->
        <div class="content clearfix">

            <!-- Main Content -->
            <div class="main-content">
                <h1 class="recent-post-title">Recent Posts</h1>
                <?php foreach ($posts as $post): ?>
                <div class="post clearfix">
                    <img src="<?php echo BASE_URL . '/assets/images/' . $post['image']; ?>" alt="" class="post-image">
                    <div class="post-preview">
                        <h2><?php echo $post['title']; ?></h2>
                        <i class="far fa-user"> <?php echo $post['author']; ?></i>
                        &nbsp;
                        <i class="far fa-calendar"><?php echo date('F j, Y', strtotime($post['created_at'])); ?></i>
                        <p class="preview-text">
                            <?php echo html_entity_decode(substr($post['body'], 0, 300) . '...'); ?>
                        </p>
                        <a href="single.php?id=<?php echo $post['id'];?>" class="btn read-more" name="read-btn">Read
                            More</a>
                    </div>
                </div>
                <?php endforeach; ?>


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
                        <?php foreach($topics as $topic):?>
                        <li><a href="#"><?php echo $topic['topic']?></a></li>
                        <?php endforeach; ?>
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