<?php include("../../path.php");
include(ROOT_PATH."/controllers/posts.php");

if (isset($_GET['id'])) {
    $post = selectOne('posts', ['id' => $_GET['id']]);
  }

  $comments = selectAll('comments', ['blog_id' => $post['id']]);
  $topics = selectTopics();
  $posts = getPublishedPosts();

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
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <?php include(ROOT_PATH."/components/header.php");?>
    <!-- Page Wrapper -->
    <div class="page-wrapper">

        <!-- Content -->
        <div class="content clearfix">

            <!-- Main Content Wrapper -->
            <div class="main-content-wrapper">
                <div class="main-content single">
                    <h1 class="post-title"><?php echo $post['title']; ?></h1>
                    <div class="blog-image-container">

                        <img src="<?php echo BASE_URL . '/assets/images/' . $post['image']; ?>" alt=""
                            class="blog-image">
                    </div>
                    <div class="post-content">
                        <?php echo html_entity_decode($post['body']); ?>
                    </div>

                </div>
            </div>
            <!-- // Main Content -->

            <!-- Sidebar -->
            <div class="sidebar single">

                <div class="section popular">
                    <h2 class="section-title">Popular</h2>
                    <?php foreach ($posts as $post) : ?>
                    <div class="post clearfix">
                        <img src="<?php echo BASE_URL . '/assets/images/' . $post['image']; ?>" alt="">
                        <a href="" class="title">
                            <h4><?php echo $post['title'] ?></h4>
                        </a>
                        <?php endforeach; ?>
                    </div>


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
            <!-- // Sidebar -->

        </div>
        <!-- // Content -->
        <!-- comment section -->
        <div class="comment-section-container">
            <h1>Comments</h1>
            <?php
            if(!isset($_SESSION['id'])){
                echo "<h3>Please login to comment</h3>";

            }else{
                echo "<h1>You can comment here</h1>";
                echo '<form action="main.php" method="post">
                <input type="hidden" name="blog_id" value='.$post['id'].'>
            <input type="hidden" name="user_id" value=' .$_SESSION['id']. '>
            <input type="hidden" name="username" value='.$_SESSION['name'].'>
            <input type="text" name="body" placeholder="Comment here" class="text-input">
            <input type="submit" name="createComment" class="btn" value="Comment">
            </form>';


            }
            ?>


            <div class="display-comments">

                <?php foreach($comments as $comment) : ?>
                <div class="comment-container">
                    <div class="comment-header">
                        <img src="../../assets/images/user.png" alt="user">
                        <h4><?php echo $comment['username']; ?></h4>

                        <p><?php echo date('F j, Y', strtotime($comment['created_at'])); ?></p>
                    </div>

                    <div class="comment-body">

                        <p><?php echo $comment['body']; ?></p>
                    </div>
                </div>




            </div>
            <?php endforeach; ?>
        </div>
    </div>

    </div>
    <!-- // Page Wrapper -->
    <?php include(ROOT_PATH."/components/footer.php");?>
</body>
<script src="../../assets/js/blog.js"></script>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>

</html>