$.post( baseurl+"cCiudad/getCiudades",
		{
			isActive: 1
		},
		function(data){
			var datos = JSON.parse(data);
			$.each(datos,function(i,item){
				$('#comboCiudad').append('<option value="'+item.idCiudad+'">'+item.nombreCiudad+'</option>')
			});
		});

$('#comboCiudad').change(function(){
	$('#comboCiudad option:selected').each(function(){
		var id = $('#comboCiudad').val();
	});
});

/*$('#botonGetPersonas').click(function(){
$.post(baseurl+"cPersona/getPersonas",
		function(data){
			alert(data);
		});
});*/


$('#botonGetPersonas').click(function(){
	$('#tablaPersonas tbody').html(
			'<tr>'+
			'<th style="width: 10px">#</th>'+
			'<th>Nombre</th>'+
			'<th>Apellido Paterno</th>'+
			'<th>Apellido Materno</th>'+
			'<th>Cédula</th>'+
			'<th>Ciudad</th>'+
			'</tr>'    
		);
	$.post(baseurl+"cPersona/getPersonas",
		function(data){
			var personas = JSON.parse(data);
			$.each(personas, function(i,item){
				var indice = i+1;
				$('#tablaPersonas').append(
					'<tr>'+
						'<td>'+indice+'</td>'+
						'<td>'+item.nombre+'</td>'+
						'<td>'+item.appaterno+'</td>'+
						'<td>'+item.apmaterno+'</td>'+
						'<td>'+item.dni+'</td>'+
						'<td>'+item.nombreCiudad+'</td>'+
					'<tr>'		
				);
			});
	});
});