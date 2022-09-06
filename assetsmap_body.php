<style>

		#type{
		font-weight:500;
		font-size:17px;	
		font-family: "Poppins", sans-serif;
		}
		#single{
			font-weight:700;
		}
		
	
		.imgform-img p{
			margin-left:10px;
			margin-bottom:10px;
		
			font-size:18px;
		}
		.imgform-img  select, select{
			font-size:18px;
		}
		
		.imgform-img,.imgform-img1{
			width:100%;
		padding:10px;
      border:1px solid #ddd;
      

		}
		
    .imgform-img #map{
      height:700px;
    }
		.imgform-img img{
			width:90%;
			margin:auto;
		}
		.form-container{
			width:60%;
		}
		.imgform-container{
			width:100%;
			margin:auto;
      border:none;
		}
		.sidebar{
			width:50%;
		padding:10px;
     
		display:inline-block;
		margin:auto;
		margin-top:0px;
		}
		.side{
			width:100%;
		padding:10px;
     
		display:inline-block;
		margin:auto;
		margin-top:0px;
			}
		
			.pannel{
				height:300px;
			}
			.pannel-input{
				margin:0px;
				margin:auto;
				font-size:11px;
				text-align:center;

			}
		@media (max-width:1467px){
			.side{
				display:inline-flex;
			}
			.imgform-container{
				display:block;
				
			}
			.block{
				display:block;
			}
			
			.sidebar{
				width:100%;
				display:inline-flex;
				
				
			}
			.marginleft{
				margin-left:10px;
			}
			
			.top{
				margin-top:10px;
			}
			.block{
				display:block;
			}
		}
		@media (max-width:820px){
			
			.imgform-img p, .imgform-img  select, input[type=text]{
			font-size:95%;
					}
			.imgform-img iframe{
			height:400;
			}
			.sidebar{
				display:block;
			}
			.marginleft{
				margin-left:0px;
				
			}
		
		}
		@media (max-width:600px){
			
			.imgform-img p, .imgform-img  select, input[type=text]{
			font-size:15px;
			}
		
		}
		
			.marginleft{
				margin-top:10px;
			}
			.radiusnone{
				border-radius:0px;
			}
			.pannel{
				
				border-top:solid 1px #ddd;
				height:300px;

			}
			.sidehead{
				width:100%;
				text-align:center;
				
			}
			#hide_show {
			border: 1px solid #ddd;
			background-color:white;
			padding: .5em;
			width:fit-content;

			position:absolute;
			transform: rotate(90deg);
			
			margin:auto;
			margin-top:25px;
			margin-left:-9px;
			z-index:2900;

					}
			#hide_show:hover{
				background-color:#ddd;
			}
				

</style>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/leaflet.js"></script>
	<!-- <script sr="https://cdn.maptiler.com/maptiler-geocoder/v1.1.0/maptiler-geocoder.js"></script> -->
   
 <section id="imgform"><div class="imgform-container ">

      <div class="imgform-container ">
	 <!--  <p id="hide_show" class="top">Hide</p> -->
	  	<div class="sidebar">
		 
				<div class="imgform-img radiusnone top pannel_con" >
					<h3 onclick="test('#panel1','pannel')" class="sidehead">DICT OFFICES</h3>
						<p id="panel1" class="pannel">
							<select id="dict_offices" class="pannel-input">
								<?php 
									$cols1=array("id","lat","long");
									$str="SELECT * FROM offices_latlong";
									loadropdown_encrypt($str,$cols1,"office_name","below");

								?>
							</select>	
						</p>
				</div>
				
				<div class="imgform-img radiusnone marginleft pannel_con">
					<h3  onclick="test('#panel2','pannel')" class="sidehead">Lorem ipsum</h3>
						<p id="panel2" class="pannel">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit,
						 sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
						 Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
						  nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
						  reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
						   pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
						    culpa qui officia deserunt mollit anim id est laborum.
						</p>
				</div>
				<div class="imgform-img radiusnone marginleft pannel_con">
					<h3  onclick="test('#panel3','pannel')" class="sidehead">Lorem ipsum</h3>
						<p id="panel3" class="pannel">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit,
						 sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
						 Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
						  nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
						  reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
						   pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
						    culpa qui officia deserunt mollit anim id est laborum.
						</p>
				</div>
			</div>
    
        <div class="imgform-img" style='border:none;'>
              <div class="imgform-img " id="map">
              <p>Assets map</p>
               
              </div>
        </div>

       		
      </div>
    </section>

    <script>
		
		function test(target,from){//this function if for hiding and showing the contecnt of the pannel 
			var l=$(window).width();
			if(from=="pannel"){//
				if(l<=1467 && l>820){
			
					$(".pannel").slideToggle("slow");
				}else{
					$(target).slideToggle("slow");
				}
			}
			if(from=="iframe"){
				$(target).slideToggle("slow");
			}
			
			
		}
		/* function get_loc(place){
			var geocoder= new maptiler.Geocoder({
				input: place,
				key: "wDVBx6Hikcs1TqkSLwqF"
			});
			geocoder.on('select',function(item){
				alert("Selected ", item);
			});
		}
		get_loc("manila"); */

      $(document).ready(function(){
		var map = L.map('map');
		var marker;
		loadmap("13.1433%123.751998%6");
		function change_map(info){
			//alert(info);
			var arr_info=to_array(info,"%");
			var lat=Number(arr_info[0]);
			var long=Number(arr_info[1]);
			var focus=Number(arr_info[2]);
			
		
    		map.setView(new L.LatLng(lat,long), focus );
			if (marker != undefined) {
              map.removeLayer(marker);
       			 }
			 	marker= L.marker([lat, long]).addTo(map);
				marker.bindPopup(" <b>"+arr_info[3]+"</b>").openPopup();
				
			//var map = new L.map('map').setView([lat, long],focus);
		}	
		function loadmap(info){
			var arr_info=to_array(info,"%");
			var lat=parseFloat(arr_info[0]);
			var long=parseFloat(arr_info[1]);
			var focus=Number(arr_info[2]);
			
			map.setView([lat, long],focus);
				L.tileLayer('https://api.maptiler.com/maps/streets/{z}/{x}/{y}.png?key=wDVBx6Hikcs1TqkSLwqF',{
					tileSize: 512,
					zoomOffset: -1,
					minZoom: 1,
					crossOrigin: true
				}).addTo(map);

				/*     var pinicon =L.icon({
						iconUrl:"vsatavailablemarker.png",
						iconSize: [38,50],
						iconAnchor:[14.6515,121.0588600],
					
					});*/

					

					const myCustomColour = '#D8700F'; 

				 const markerHtmlStyles = `
				background-color: ${myCustomColour};
				width: 1.5rem;
				height: 1.5rem;
				display: block;
				left: -1.5rem;
				top: -1.5rem;
				position: relative;
				border-radius: 3rem 3rem 0;
				transform: rotate(45deg);
				border: 1px solid #FFFFFF`;

				const myicon = L.divIcon({
				className: "my-custom-pin",
				iconAnchor: [-10, 2],
				labelAnchor: [0, 2],
				popupAnchor: [0, -20],
				html: `<span style="${markerHtmlStyles}" />`
				}); 
				// var marker= L.marker([14.6515, 121.0493],{icon:myicon }).addTo(map);
				//marker.bindPopup(" <b>QC CIRCLE</b><br>Pres. Quezon Memorial Circle").openPopup();
				

				//var marker1= L.marker([14.6527491, 121.0588600],{icon:myicon }).addTo(map);
				
				//marker.valueOf()._icon.style.backgroundColor = 'green';
				
				//marker1.bindPopup(" <b>DICT CENTRAL OFFICE</b><br> C.P Garcia Ave., Diliman, Q.C").openPopup(); 
				/* var circle= L.circle([14.6515, 121.0493],
				{
					color: 'red',
					fillcolor:'red',
					fillopacity: 1,
					radius:3000
				}).addTo(map);
				circle.bindPopup(" <b>QC CIRCLE BOMBING INCIDENT</b><br>100 Casualties, 30 person dead, 70 person wounded").openPopup(); */
		}
		var hidden=false;
		$("#hide_show").click(function(){
			if(hidden){
				$(".sidebar").show(400);
				$("#hide_show").text("Hide");
				hidden=false;
			}else{
				$(".sidebar").hide(400);
				
				$("#hide_show").text("Show");
				hidden=true;
			}
			
		});
		$(window).resize(function(){
			var l=$(window).width();
			if(l<=1467 && l>820){
				$(".pannel").css("display","none");
			}
			if(l>1467){
				$(".pannel").css("display","block");
			}
		});
		$("#dict_offices").change(function(){
			//alert($("#dict_offices").val());
			if($(this).val()!=0){
				
			
				$.post("AJAX/mycodes.php",
				{
					command:"decrypt",
					values:$("#dict_offices").val()
				},
				function(data){
					//alert(data);
					var arrval=to_array(data,"%");
					//alert(data);
					change_map(arrval[1]+"%"+arrval[2]+"%10%"+arrval[3]);


				});
			}
			else{
				change_map("14.654%121.065002%6%DICT CENTRAL");
			}
		});
      });
    </script>