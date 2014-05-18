<?php
include_once('my_db.php');

if($_POST['id'] !='' && $_POST['type'] !=''){
	if($_POST['type']=='like'){
		mysql_query('UPDATE posts SET likes=likes+1 WHERE id="'.$_POST['id'].'"');
		$num = mysql_fetch_array(mysql_query('SELECT likes FROM posts WHERE id="'.$_POST['id'].'"'));
		echo 'Like '.$num['likes'].'';
	}else if($_POST['type']=='dislike'){
		mysql_query('UPDATE posts SET dislikes=dislikes+1 WHERE id="'.$_POST['id'].'"');
		$num = mysql_fetch_array(mysql_query('SELECT dislikes FROM posts WHERE id="'.$_POST['id'].'"'));
		echo 'Dislike '.$num['dislikes'].'';
	}else{
		echo 'error';	
	}
}
?>