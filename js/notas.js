$.post( baseurl+"cNotas/getNotas",
		function(data){
			alert(data);
			var datos = JSON.parse(data);
			$.each(datos,function(i,item){
				var indice = i+1;
				$('#tablaNotas').append(
					'<tr>'+
						'<td>'+indice+'</td>'+
						'<td>'+item.Alumno+'</td>'+
						'<td><input type="text" value="'+item.a+'"></td>'+
						'<td><input type="text" value="'+item.b+'"></td>'+
						'<td><input type="text" value="'+item.c+'"></td>'+
						'<td>'+item.d+'</td>'+
					'<tr>'		
				);
			});
		});
