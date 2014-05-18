function makeChange(id,type){
	$.post('increment.php', {id:id, type:type}, function(data){
			$('#'+id+'_'+type+'s').text($.trim(data));
		});
}