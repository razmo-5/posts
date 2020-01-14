

<?php  foreach($posts as $post ):?>

	<h2> <?= $post['title'];?> </h2>
	<h2> <?= $post['content'];?> </h2>
	<img    width="300px"  src="../uploaded_image/<?= $post['image'];?>">
	
	<hr>

<?php endforeach;?>





