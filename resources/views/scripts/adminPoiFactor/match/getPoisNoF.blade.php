<script type="text/javascript">
    $.ajax({
		url: "{{route('poiFactorDynamic.getPoisNoF')}}",
		type: 'GET',
		success: function(data){
			var ul = document.getElementById("listadoPois");
			ul.innerHTML = '';
			for(var i=0; i<data.length;i++){
				var li = document.createElement("li");
			    li.appendChild(document.createTextNode(data[i].nombre));
			    li.setAttribute("id", data[i].id_poi);
			    
			    $(li).on("click", function () {
				    $("#listadoPois li").removeClass('itemSeleccionado');
				    $(this).attr('class', 'itemSeleccionado');
				    document.getElementById("idpoi").value = $(this).attr('id');
				    document.getElementById("name").value = $(this).text();
				   	$.ajax({
						url: "{{route('poiFactorDynamic.getSPoiNoF')}}",
						type: 'GET',
						data: {
							id: $(this).attr('id'),
						},
						success: function(data){
							var factorOfSPoi = document.getElementById("factorOfSPoi");
							factorOfSPoi.innerHTML = '';
							factorOfSPoi.classList.remove('scrollFacPoih1');
							for(var i=0; i<data.length;i++){
								var div = document.createElement("div");
								div.classList.add('monoDiv');
								var h3 = document.createElement("h3");
								h3.innerHTML = (data[i]).nombre + " ("+(data[i]).formula+")";
								div.appendChild(h3);
								var select = document.createElement("select");
								select.name = "valor[]";
								select.required = "true";
								select.classList.add('select');
								var factorid = document.createElement("input");
								factorid.type = "hidden";
								factorid.name = "id[]";
								factorid.value = (data[i]).id_factor;
								factorid.required = "true";
								for(var j=(data[i]).valorMinimo; j<=(data[i]).valorMaximo; j++){
									var opt = document.createElement('option');
									opt.value = j;
									opt.innerHTML = j;
									select.appendChild(opt);
								}
								div.appendChild(select);
								div.appendChild(factorid);
								factorOfSPoi.appendChild(div);
							}
						}
					});
				});
				ul.appendChild(li);
			}
		}
	});
</script>