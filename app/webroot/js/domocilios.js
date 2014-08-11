$(document).ready(function() {
$.getJSON( "/dataset/getJson", function( data ) {
  var items = [],
  	  datas= [];
    $.each( data[0].Indicadores[0].Dados, function( key, val ) {
  	items.push(val[0]);
  	datas.push(val[1]);
    
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
	
		var ctx = document.getElementById("canvas").getContext("2d");
		window.myBar = new Chart(ctx).Bar(barChartData, {
			responsive : true
		});

});
});
