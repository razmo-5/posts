
<?php




// model
include_once '../models/addPostsModel.php';


$upload_file = uploadFile($_FILES['image']);

addPosts($_POST['title'],$_POST['content'], $upload_file);

$posts =  getPosts();


// view
include_once '../views/showPostsView.php';


?>

