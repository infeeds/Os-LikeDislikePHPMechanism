# Infeeds Voting Mechanism Basics
Backend of Infeeds Voting Algorithm. It is a simple git to help understand how different scripts work in sync with each other to get wonderful results.

## Contents
Project includes `index.php` (main INDEX file for demo), `my_db.php` (for MySQL database connection), `increment.php` (the script called via AJAX to make changes in the DB) and `js/incremento.js` (contains a small jQuery function to request click actions response).

## Key File
#### incremento.js
```
function makeChange(id,type){
	$.post('increment.php', {id:id, type:type}, function(data){
			$('#'+id+'_'+type+'s').text($.trim(data));
		});
}
```

That's all is the main part of the project, a simple AJAX POST request to increment.PHP file and trimmed response inserted where needed. Here's an example how to implement this;
**For Likes:** 
```
<a href="javascript:;" onClick="makeChange('*unique_id*','like');">
	<span id="*unique_id*_likes">Like *likes_count*</span>
</a>
```
**For Dislikes:**
```
<a href="javascript:;" onClick="makeChange('*unique_id*','dislike');">
	<span id="*unique_id*_dislikes">Disike *dislikes_count*</span>
</a>
```
