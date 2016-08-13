##Like/Dislike Voting System
A small Open Source made with PHP and jQuery to give an overview of how Facebook, YouTube, Reddit, Infeeds and others voting system works.

##Contents
Project includes index.php (main index file for demo), my_db.php (MySQL database connection, you can use any SQL you like to), increment.php (the script called via AJAX to make changes in the DB) and js/incremento.js (contains a small jQuery function to request click actions response).

##What is incremento.js
```
function makeChange(id,type){
	$.post('increment.php', {id:id, type:type}, function(data){
			$('#'+id+'_'+type+'s').text($.trim(data));
		});
}
```
That's all is the main part of the project, a simple AJAX POST request to increment.PHP file and trimmed response inserted where needed. Here's how to implement this, for Likes: 
`<a href="javascript:;" onClick="makeChange('*unique_id*','like');"> <span id="*unique_id*_likes">Like *likes_count*</span> </a>` and for Dislikes: `<a href="javascript:;" onClick="makeChange('*unique_id*','dislike');"> <span id="*unique_id*_dislikes">Disike *dislikes_count*</span> </a>`
