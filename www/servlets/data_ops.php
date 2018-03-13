<?php
	include_once("common.php");

	$op = $_POST["Op"];
	if($op == getPost()){
		$arr = getPost();
		$s = json.encode($arr);
        return $s;
	}else{
		echo "nok for post: author: $author, post: $post";
	}
	
?>
