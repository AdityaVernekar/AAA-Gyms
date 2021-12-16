<?php

include(ROOT_PATH . "/components/database/db.php");
// include(ROOT_PATH . "/helpers/middleware.php");
include(ROOT_PATH . "/helpers/validatePosts.php");
$table = 'posts';

// $topics = selectAll('topics');
$posts = selectAll($table);
// dd($posts);
$popularPosts = selectLimited($table,["published"=>1],4);
$topicsel = false;
$search=false;
$errors = array();
$id = "";
$title = "";
$body = "";
$topic = "";
$published = "";

$author="";

if (isset($_GET['id'])) {
    $post = selectOne($table, ['id' => $_GET['id']]);

    $id = $post['id'];
    $title = $post['title'];
    $body = $post['body'];
    $topic = $post['topic'];
    $author = $post['author'];
    $published = $post['published'];
   
    
    
}
if(isset($_GET['topic'])){
    $selectedTopic = $_GET['topic'];
    
    $topicsel=true;

}
if(isset($_POST['search-term'])){
    $searchTerm = $_POST['search-term'];
    // dd($searchTerm);
   $search=true;

}
if(isset($_POST['read-btn'])){
    // dd($_POST);
    $one = 1;

    $stockquery = "update posts set viewcount = viewcount + $one where id = ".$_GET['id']."";
    $stockres = mysqli_query($conn, $stockquery) or die(mysqli_error($conn));
}
if (isset($_GET['delete_id'])) {
    // adminOnly();
    $count = delete($table, $_GET['delete_id']);
    $_SESSION['message'] = "Post deleted successfully";
    $_SESSION['type'] = "success";
    header("location: " . BASE_URL . "/admin/posts/index.php"); 
    exit();
}

if (isset($_GET['published']) && isset($_GET['p_id'])) {
    // adminOnly();
    $published = $_GET['published'];
    $p_id = $_GET['p_id'];
    $count = update($table, $p_id, ['published' => $published]);
    $_SESSION['message'] = "Post published state changed!";
    $_SESSION['type'] = "success";
    header("location: " . BASE_URL . "/admin/posts/index.php"); 
    exit();
}
if (isset($_POST['add-post'])) {
    // adminOnly();
    $errors = validatePost($_POST);

    if (!empty($_FILES['image']['name'])) {
        $image_name = time() . '_' . $_FILES['image']['name'];
        $destination = ROOT_PATH . "/assets/images/" . $image_name;

        $result = move_uploaded_file($_FILES['image']['tmp_name'], $destination);

        if ($result) {
           $_POST['image'] = $image_name;
        } else {
            array_push($errors, "Failed to upload image");
        }
    } else {
       array_push($errors, "Post image required");
    }
    if (count($errors) == 0) {
        unset($_POST['add-post']);
        $_POST['user_id'] = $_SESSION['id'];

        $_POST['published'] = isset($_POST['published']) ? 1 : 0;
        $_POST['body'] = htmlentities($_POST['body']);
    
        $post_id = create($table, $_POST);
        $_SESSION['message'] = "Post created successfully";
        $_SESSION['type'] = "success";
        header("location: " . BASE_URL . "/admin/posts/index.php"); 
        exit();    
    } else {
        $title = $_POST['title'];
        $author = $_POST['author'];
        $body = $_POST['body'];
        $topic = $_POST['topic'];
        $published = isset($_POST['published']) ? 1 : 0;
    }
    // dd($_POST);
    // dd($_FILES['image']);
}
if(isset($_POST['createComment'])){

    unset($_POST['createComment']);
   
    // dd($_POST);
    
     if(isset($_POST['username'])){

         $comment = create('comments', $_POST);
         $_SESSION['message'] = "Comment added successfully";
         $_SESSION['type'] = "success";
     }
    
  
    
    
}

if(isset($_GET['delid'])){
    function delCom($id){
        global $conn;
        $sql = "DELETE FROM comments WHERE id = $id";
        $result = mysqli_query($conn, $sql);
        if($result){
            header("location:".BASE_URL."/modules/Blogs/single.php?id=".$_GET['id']);
        }
        
    
    }
    delCom($_GET['delid']);

}
function searchPosts($term)
{
    $match = '%' . $term . '%';
    global $conn;
    $sql = "SELECT  p.* FROM posts AS p WHERE p.published=? AND p.title LIKE ? OR p.body LIKE ?";


    $stmt = executeQuery($sql, ['published' => 1, 'title' => $match, 'body' => $match]);
    $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    return $records;
}
?>