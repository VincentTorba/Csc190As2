<?php
	include_once("db.php");

	function insertPost($author, $post)
	{
		$author = secure($author);
		$post   = secure($post);
		$q = "INSERT INTO tbl_posts(author, post) VALUES ('$author', '$post')";
		executeSQL($q);
	}	
	function getPosts()
	{
		$q = "SELECT * FROM tbl_posts";
		$arr = executeSQL($q);
		return $arr;
	}
?>
