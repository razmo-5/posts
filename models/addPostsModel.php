

<?php

include_once  '../config/db.php';

if ($_POST['btn']) {


function  uploadFile($image){
	$image_name = $image['name'];
	$tmp = $image['tmp_name'];
	move_uploaded_file($tmp, '../uploaded_image/'.$image_name );
	return  $image_name;

}

function addPosts($title,$content,$image_name){

	global $conn;

	$sql = "INSERT INTO posts1 (title, content,image)
	VALUES (:title,:content,:image)";
	$stmt =  $conn->prepare($sql);
	$stmt->bindParam(':title', $title);
	$stmt->bindParam(':content', $content);
	$stmt->bindParam(':image', $image_name );

	$stmt->execute();



}


function getPosts(){
	global $conn;

	$stmt = $conn->prepare("SELECT * FROM posts1");
	$stmt->execute();
	$posts = $stmt->fetchAll();

	return $posts;


}





}




?>








