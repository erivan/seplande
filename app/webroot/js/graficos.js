$(document).ready(function() {
	//Homem
	$( "#btnHomem" ).click(function() {
	  $( "#homem" ).show(); 
	  $( "#inicio" ).hide();
	  $( "#mulher" ).hide();
	  $( "#total" ).hide();

		$.getJSON( "/dataset/getJsonMan", function( data ) {
		  var items = [],
		  	  datas= [];
		    $.each( data[0].Indicadores[0].Dados, function( key, val ) {
		    	if (val[0] > 2004) {
		    		items.push(val[0]);
		  			datas.push(val[1]);
		    	};
		  	
		    
		  });

			var barChartData = {
				labels : items,
				datasets : [
					{
						fillColor : "rgba(151,187,205,0.5)",//cor da barra
						strokeColor : "rgba(151,187,205,0.8)",//cor da borda
						highlightFill: "rgba(220,220,220,0.75)",//cor do on houver
						highlightStroke: "rgba(151,187,205,1)",//cor borda do on houver
						data : datas
					}		
				]

			}
			
				var ctx = document.getElementById("homemCanvas").getContext("2d");
				window.myBar = new Chart(ctx).Bar(barChartData, {
					responsive : true
				});

		});
	});
	//Mulher
	$( "#btnMulher" ).click(function() {
	  $( "#homem" ).hide(); 
	  $( "#mulher" ).show();
	  $( "#inicio" ).hide();
	  $( "#total" ).hide();

		$.getJSON( "/dataset/getJsonFem", function( data ) {
		  var items = [],
		  	  datas= [];
		  	  
		    $.each( data.Municipio.Indicador.Dado, function( key, val ) {

		    	if (val.Ano > 2004) {		    		
		    		items.push(val.Ano);
		  			datas.push(val.Valor);
		    	};	  	
		  });

			var barChartData = {
				labels : items,
				datasets : [
					{
						fillColor : "rgba(151,187,205,0.5)",//cor da barra
						strokeColor : "rgba(151,187,205,0.8)",//cor da borda
						highlightFill: "rgba(220,220,220,0.75)",//cor do on houver
						highlightStroke: "rgba(151,187,205,1)",//cor borda do on houver
						data : datas
					}		
				]

			}
			
				var ctx = document.getElementById("mulherCanvas").getContext("2d");
				window.myBar = new Chart(ctx).Bar(barChartData, {
					responsive : true
				});

		});
	});	
	//total

	$( "#btnTotal" ).click(function() {
	  $( "#homem" ).hide(); 
	  $( "#mulher" ).hide();
	  $( "#inicio" ).hide();
	  $( "#total" ).show();

		$.getJSON( "/dataset/getJsonTotal", function( data ) {
		  var items = [],
		  	  datas= [];
		    $.each( data[0].Indicadores[0].Dados, function( key, val ) {
		    	if (val[0] > 2004) {
		    		items.push(val[0]);
		  			datas.push(val[1]);
		    	};
		  	
		    
		  });

			var barChartData = {
				labels : items,
				datasets : [
					{
						fillColor : "rgba(151,187,205,0.5)",//cor da barra
						strokeColor : "rgba(151,187,205,0.8)",//cor da borda
						highlightFill: "rgba(220,220,220,0.75)",//cor do on houver
						highlightStroke: "rgba(151,187,205,1)",//cor borda do on houver
						data : datas
					}		
				]

			}			
				var ctx = document.getElementById("totalCanvas").getContext("2d");
				window.myBar = new Chart(ctx).Bar(barChartData, {
					responsive : true
				});

		});
	});	
	$('#close').click(function() {		
	  $( "#homem").hide(); 
	  $( "#mulher").hide();
	  $( "#inicio").show();
	  $( "#total" ).hide();	
	});	
});
