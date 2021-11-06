$(document).ready(function(){
	$('#msj-add-name').hide();

	console.log('jQuery is Working!');

	$('#form-save').submit(function(event) {
		event.preventDefault();
		let name = $('#input-save').val();
		$.post('php/save.php', { name }, function(response) {
			console.log(response);
			$('#msj-add-name').text(response)
			$('#msj-add-name').show(1500)
			$('#msj-add-name').hide(600)
		});
	});

			
	
	$('#input-search').keyup(function(event) {
		let search = $('#input-search').val();
		$.ajax({
			url: 'php/search.php',
			type: 'POST', 
			data: { search },
			success: function(response){
  				let names = JSON.parse(response);
  				template = '';
  				names.forEach(name =>{
  					template += `
  						<li>${name.id}.- ${name.name}</li>
  					`
  				})
  				$('#msj-result').show(800);
  				$('#msj-result').html(template)
			}
		})
	});
});