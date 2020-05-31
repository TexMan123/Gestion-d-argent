$(document).ready(function(){
	
	$('#alert').hide();

	
	$('#prix').keyup(function(){
		var somme=$('#sommeTitre').html(),
	    prix=$('#prix').val();
        if(parseInt(prix) > parseInt(somme)) {
        	console.log('ngeza');
			$('#alert').show();
		} else {
			console.log('kely');
			$('#alert').hide();
		}
    });
	
	
	
});