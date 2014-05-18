<?php
/* find more easy tutorials about PHP and Javacript at #CODEmgks
https://www.infeeds.com/topic/CODEmgks */

include_once('my_db.php');

/* creating like/dislike mechanism with PHP, MySQL and jQuery */
mysql_query('CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `likes` int(11) NOT NULL,
  `dislikes` int(11) NOT NULL,
  `comments` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Like/Dislike Posts (Infeeds Notes at @mgksCODE)</title>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="js/incremento.js"></script>
</title>
</head>
<body>
<h2 align="left"><a href="https://www.infeeds.com/topic/CODEmgks?on=notes">Go to Tutorials</a></h2>
<h2 align="right"><a href="https://www.infeeds.com/topic/CODEmgks">more codes at #CODEmgks</a></h2>
<?php
$sql = mysql_query('SELECT * FROM posts');
while($row = mysql_fetch_array($sql)){
echo '<div>
<h3>'.$row['title'].'</h3>
<p>'.$row['body'].'</p>
<a href="javascript:;" onClick="makeChange(\''.$row['id'].'\',\'like\');"><span id="'.$row['id'].'_likes">Like '.$row['likes'].'</span></a><br>
<a href="javascript:;" onClick="makeChange(\''.$row['id'].'\',\'dislike\');"><span id="'.$row['id'].'_dislikes">Dislike '.$row['dislikes'].'</span></a>
</div>';
}
?>
<br>
</body>
</html>