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
			
			display:inline-block;
			font-size:18px;
		}
		.imgform-img  select, select{
			font-size:18px;
		}
		
		.imgform-img{
			width:fit-content;
			margin:auto;
			margin-top:20px;
			padding-left:10px;
			padding-right:10px;

		}
		.imgform-img img{
			width:90%;
			margin:auto;
		}
		.form-container{
			width:60%;
		}
		.imgform-container{
			
			margin:auto;
		}
		/*table*/
		table tr th{
			text-transform:uppercase;
			font-weight:600;
			background-color:rgb(45, 44, 46);
			color:white;	
		}
		
		tr:nth-child(odd){
			background-color:rgb(232,232,232);
			color:black;
		}
		td, th{
			text-align:left;
			padding-left:10px;
			text-transform:capitalize;			
		}
		table{
			border-collapse: collapse;
			width:100%;
			margin-left:5px;
			margin-right:10px;
			border-style:none;
			font-size:16px;		
		
		}

		table #hf_table{
			width:fit-content;
			overflow: scroll;
			font-size:9px;
		}

		table tr td{
			padding-bottom:10px;
			padding-top:10px;
		}

		#hf_table tr th:nth-child(4),
		#hf_table tr th:nth-child(6),
		#hf_table tr th:nth-child(8),
		#hf_table tr th:nth-child(9),
		#hf_table tr th:nth-child(10),
		#hf_table tr th:nth-child(11),
		#hf_table tr th:nth-child(12),
		#hf_table tr th:nth-child(13),
		#hf_table tr th:nth-child(14),
		#hf_table tr th:nth-child(15),
		#hf_table tr th:nth-child(16){
			display:none;
		}
		#hf_table tr td:nth-child(4),
		#hf_table tr td:nth-child(6),
		#hf_table tr td:nth-child(8),
		#hf_table tr td:nth-child(9),
		#hf_table tr td:nth-child(10),
		#hf_table tr td:nth-child(11),
		#hf_table tr td:nth-child(12),
		#hf_table tr td:nth-child(13),
		#hf_table tr td:nth-child(14),
		#hf_table tr td:nth-child(15),
		#hf_table tr td:nth-child(16){
			display:none;
		}
		.pannel{
			
			margin:auto;
			margin-top:0px;
			margin-bottom:0px;
			text-align:center;
			border:solid 1px #ddd;
			padding:0px;
			background-color:white;
            justify-content: center;

            
		}
		.pannel h2{
			display:inline;
			padding-left:20px;
			padding-right:20px;
			font-size:18px;		
		
		}
		.lbl_wrap{
			margin:10px;
			font-size: 18px;
			transition: transform .2s; 
		}
		.lbl_wrap:hover{
			transform: scale(1.05); 
		}
		
		.pannel .lbl_wrap img{
			width:25px;
			margin-bottom:-6px;
		}
		.header2{
			font-size: 1.7rem;
			font-weight: 500;
			color: #444;
			margin-bottom: 1rem;
			margin-top: -1.2rem;
			text-align:center;
		}
		.align_center{
			margin:auto;
			
			width:fit-content;
			
			
		}
		.input_wrapper{
			
			width:fit-content;
			margin-top:5px;
		}

		.input_wrapper input, .input_wrapper textarea, .input_wrapper select{
			width:300px;
		}
		.input_wrapper .label{
			width:200px;
			margin-top:0px;
		}

		.input_wrapper .station_log{
			padding: 2px 2px;
			font-size: 18px;
		}
		.inner-wrapper{
			
			width:fit-content;
			margin:auto;
			
		}
		.btn{
			margin-bottom:15px;
		}
		/* #imgform{
			background-color:#cfc9c9;
		} */

		.pannel_con{
			-webkit-box-shadow: -2px 2px 26px -12px rgba(0,0,0,0.57);
			-moz-box-shadow: -2px 2px 26px -12px rgba(0,0,0,0.57);
			box-shadow: -2px 2px 26px -12px rgba(0,0,0,0.57);
			width:80%;
			margin:auto;
			border-radius:0 0 30px 30px;
            
        

		}
		
		@media (max-width:1267px){
			.imgform-container{
				display:block;
				
			}
			.align_center{
			margin:auto;
			
			width:fit-content;
			
			
		}
			
			
		}
		@media (max-width:820px){
			table{
			
				font-size:13px;
			}
			.imgform-img p, .imgform-img  select, input[type=text]{
			font-size:95%;
			}
		}
		@media (max-width:600px){
			table{
				
				font-size:9px;
			}
			.imgform-img p, .imgform-img  select, input[type=text]{
			font-size:15px;
			}
			.pannel h2{
			
			font-size:13px;		
			}
			.pannel h2 img{
				width:20px;
				margin-bottom:-4px;
			}
			.input_wrapper, .inner-wrapper{
				width:fit-content;
			}
			.input_wrapper{
				margin:auto;
				margin-top:10px;
			}
			.input_wrapper >*{
				display:block;
			}
			.input_wrapper input, .input_wrapper textarea, .input_wrapper select{
			width:200px;
			}
			th:nth-child(5),td:nth-child(5){
				display:none;
			}
		}
		@media(max-width:400px){
			th:nth-child(3),td:nth-child(3){
				display:none;
			}
			.pannel h2{
			display:block;	
			}
			.pannel h2#accounts{
			border-right:solid 1px white;
			margin-bottom:5px;
			
			}
			.pannel h2#pass_reset{
			border-top:solid 1px #ddd;
			
			}
			.input_wrapper, .inner-wrapper{
				width:fit-content;
			}
			.input_wrapper{
				margin:auto;
				margin-top:10px;
			}
		}

		@media(max-width:320px){
			th:nth-child(7),td:nth-child(7){
				display:none;
			}
		}
		@media(max-width:280px){
			th:nth-child(3),td:nth-child(3){
				display:none;
			}
		}
		input[type=submit]{
			width:200px;
			
		}
        
        .nav-panel {
        width: 100%;
        border-bottom: 2px solid navy;
        }

        .nav-panel ul {
        list-style-type: none;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 0;
        margin: 0;
        margin-top: 20px;
        }

        .nav-panel li {
        padding: 10px 20px;
        border-right: 1px solid navy;
        }

        .nav-panel li:last-child {
        border-right: none;
        }

        .nav-panel li a {
        color: navy;
        text-decoration: none;
        font-weight: bold;
        }

        .nav-panel li a:hover {
        color: white;
        background-color: navy;
        }

        .halfcol{
				width:100%;
				display:block;
				border:solid 1px #ddd;
				border-radius:10px;
				margin-top:5px;
				margin-bottom:10px;
		}

        .cols{
		display:inline-block;
		width:49.5%;
			
		border-radius:10px;
		border:solid 1px #ddd;
		margin-top:0px;
		margin-bottom:10px;
		}
		.cols1{
			float:left;
		}
		.cols2{
			
			float:right;
			padding:20px;
			padding-top:0px;
        }

        .label_show_card {
            color: white;
            display: inline-block;
            padding: 20px 80px;
            border-radius: 15px;
            background-color: navy;
            text-align: center;
            font-size: 16px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            cursor: pointer;
            width:90%;
            margin-top: 10px;
            box-shadow: -2px 2px 26px -12px rgba(220,120,0,.87);

        }

        .pannel_show_card{
			margin:auto;
			margin-top:0px;
			margin-bottom:0px;
			text-align:center;
			border:solid 1px #ddd;
			padding:10px 0px 10px 0px;
			background-color:white;
            padding-bottom: 10px;
            display: flex;
            overflow:auto;
            float:left;
            width: 50%;

        }

        .pannel_holder{
			width:auto;
			margin-top:5px;
            overflow: hidden;
            justify-content: center;
            
		}


        .pannel_holder .pannel_show_card{
			width:45%;
			margin:1%;
            padding:20px 50px;
            justify-content: center;
            box-shadow: -2px 2px 26px -12px rgba(0,0,0,0.57);  
		}

        #station_form_div {
            margin: 20px;
            width:100%;    
        }

</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>

<?PHP //THERE ARE TWO MODULES IN THIS VIEW 1 IN EACH DIV ELEM, ACCOUNT ACTIVATION AND PASSWORD RESET ?>
<div class="nav-panel">
  <ul>
    <?php
        $pages = array("HF Daily Log Form" => "hf_daily.php", "HF Stations Data Entry" => "hf_entry.php");
        foreach ($pages as $page => $url) {
            echo "<li><a href='$url'>$page</a></li>";
        }
    ?>
  </ul>
</div>

<br>
<section id="station_entry_form">
    <div class="pannel_con">
        <div class="pannel">
            <p class="lbl_wrap" id="accounts" onclick="slide('#station_form_div')"><img src="images\compass4.png"><u>H</u>F Analytics Per DAY</p>
                <div class="pannel_holder" id = "station_form_div">
                    
                    <div class="pannel_show_card">
                        <div>
                            <p class="label"><label >HF Station Today's Log Counts:</label></p>
                            <p class="label_show_card"><label ><span style="font-size: 40px;">19</span> ENTRIES</label></p>
                        </div>
                    </div>
                      
                    <div class="pannel_show_card">
                        <div>
						<!-- <button onclick="getTotalCount()">Get Total Count</button> -->
                            <p class="label"><label >Recorded HF Station Counts:</label></p>
                            <p class="label_show_card"><label ><span style="font-size: 40px;" id="span_counter_total">21</span> ENTRIES</label></p>
                        </div>
                    </div>
                    <br>
                    <div class="pannel_show_card">
                        <div>
                            <p class="label"><label >HF Station Today's Log Counts:WEATHER</label></p>
                            <canvas id="myChart" style="width:100%;max-width:700px"></canvas>
                        </div>
                    </div>
                      
                    <div class="pannel_show_card">
                        <div>
                            <p class="label"><label >Operational HF Station Counts:STATUS</label></p>
                            <canvas id="myChart2" style="width:100%;max-width:700px"></canvas>
                        </div>
                    </div>
                </div>
 	    </div>      
    </div>
<br>
    <div class="pannel_con">
                <div class="pannel" onclick="slide('#station_table_div')" >
                    <p class="lbl_wrap" id="accounts"><img src="images\compass4.png">H<u>F</u> Station Today's Logs</p>
                </div>
            
            <div class="imgform-container " id="station_table_div">
                <div class="imgform-img">
                <div class="inner-wrapper">
                    <input type="text" id="search_station_logged" Placeholder="Search HF Station" style="font-size: 18px;margin-right:10px;margin-left:5px;">
                    <select id="filter_type_selection">
                        <?php 
                        $today =date("Y-m-d");				
                        $str="SELECT distinct weather FROM hf_daily where log_date='$today'";
                        loadropdown($str,"weather","weather","weather");
                        ?>
                    </select>
                    
                    <table class="disasters" id="hf_daily_log_table" style="margin-bottom:5px;margin-top:10px;">
                        <?php
                        $classes=array("all","item");
                        $sql="select hf_log_id, station_name, station_assignee, log_date, log_time, weather, signal_status from hf_daily_log where log_date=CURRENT_DATE order by log_time desc";
                        $headers=array("tik","Station Name","Station Assignee","Date","Time","Weather","Signal Status");
                        loadtable($sql,$headers,true,false,$classes);
                        ?>
                    </table>
                    </div>
                </div>
            </div>
        </div>
 <!-- </section> -->
<br>

 </section>
 

 <script>

// function getTotalCount() {
//                     $.post("AJAX/counter_hf_data.php", {
//                         filter_type: "count_total",
//                         my_columns: "hf_id"
//                     }, function(data) {
//                         $("#span_counter_total").html(data);
//                     });
//                 }
	
        var xValues = ["Sunny", "Cloudy", "Rainy"];
		var yValues = [10, 3, 6];
		var barColors = ["orange", "lightblue","navy"];

		new Chart("myChart", {
		type: "bar",
		data: {
			labels: xValues,
			datasets: [{
			backgroundColor: barColors,
			data: yValues
			}]
		},
		options: {
			legend: {display: false},
			title: {
			display: true,
			text: "Expected Representation of reported HF Station by Weather"
			}
		}
		});

        var x1Values = ["Operational", "Under Repair", "Non-Operational"];
		var y1Values = [12, 6, 3];
		var bar1Colors = ["green", "blue","red"];

		new Chart("myChart2", {
		type: "bar",
		data: {
			labels: x1Values,
			datasets: [{
			backgroundColor: bar1Colors,
			data: y1Values
			}]
		},
		options: {
			legend: {display: false},
			title: {
			display: true,
			text: "Expected Representation of reported HF Station by Status"
			}
		}
		});

    function slide(target){
		$(target).slideToggle("slow");
		}

    $(document).ready(function(){

		//decrypt
		//filter-- for each checkbox
		//then encrypt ulit
	// $("#station_name_label").css("visibility","hidden");
	// $("#station_name").css("visibility","hidden");

	//(target,columns,filter,mydata)
	//load_hf_daily_table("#hf_daily_log_table","all%item_log","%Station Name%Station Assignee%Date%Time%Weather%Signal Status%","hf_log_id, station_name, station_assignee, log_date, log_time, weather, signal_status",'true','false',"default","");								
	//var total_hf_recorded = counter_hf_data("#span_counter_total","hf_id","count_total","")
	var stn_cd;
	var stn_cd_grp;
	$("#search_provincial").css("display","none");
	$("#search_region").css("display","none");
	$("#group_log_div").css("display","none");
	$("#submit_all").css("display","none");
	$("#log_option").val("Single");
		var hf_collected="";
		var edit=false;
		var item_id="";
	enrycpt_each(".item");
	href_each(".disasters td:nth-child(11)");
	remove_next_word(".disasters td:nth-child(10)");	
		var alt=false;

    //kung tama ako, ito ay para sa shortcut key
	$(document).keyup(function(e) {
		if(e.key === "Alt"){
		alt=false;
		}
	});

	$(window).keyup(function(e) {
		if(e.key === "Alt"){
		alt=false;
		}
	});

	$(document).keydown(function(e) {
		//alert("key");
		if(e.key === "Alt"){
		alt=true;
		}
		if(alt){
			if(e.key === "H" || e.key === "h" ){
				$("#station_entry_form").slideToggle("slow");
			}
			if(e.key === "i" || e.key === "I" ){
				$("#incident_log").slideToggle("slow");
			}
		}
	});

	$("#get_Timestamp").click(function(){
		var now = new Date(Date.now());

		var hours = now.getHours();
			hours = hours <=9 ? '0' + hours : hours;

		var minutes = now.getMinutes();
			minutes = minutes <= 9 ? '0' + minutes : minutes;

		var months =(now.getMonth()+1);
			months = months <= 9 ? '0' + months : months;

		var dates =now.getDate();
			dates = dates <= 9 ? '0' + dates : dates;

		var formatted = hours + ":" + minutes;
		//var str_date = (now.getMonth()+1) + "/" + now.getDate()+ "/" + now.getFullYear();
		var str_date = now.getFullYear() + "-" + months + "-" + dates;

		// alert(formatted);
		// alert(str_date);
		//  $("#get_time").val($(formatted).text());	
		//  $("#get_date").val(str_date());
		
		$("#get_time").val((formatted));
		$("#get_date").val((str_date));
	});

	$("#get_Sunny").click(function(){
		this.style='background-color:green;font-weight:800;';
		$("#get_Cloudy").css('background-color','rgb(45, 44, 46)','font-weight','800');
		$("#get_Rainy").css('background-color','rgb(45, 44, 46)','font-weight','800');
	});

	$("#get_Cloudy").click(function(){
		this.style='background-color:green;font-weight:800;';
		$("#get_Sunny").css('background-color','rgb(45, 44, 46)','font-weight','800');
		$("#get_Rainy").css('background-color','rgb(45, 44, 46)','font-weight','800');
	});

	$("#get_Rainy").click(function(){
		this.style='background-color:green;font-weight:800;';
		$("#get_Cloudy").css('background-color','rgb(45, 44, 46)','font-weight','800');
		$("#get_Sunny").css('background-color','rgb(45, 44, 46)','font-weight','800');
	});

	$("#get_Sunny").dblclick(function(){
		this.style='background-color:rgb(45, 44, 46);font-weight:800;';
	});

	$("#get_Cloudy").dblclick(function(){
		this.style='background-color:rgb(45, 44, 46);font-weight:800;';
	});
	
	$("#get_Rainy").dblclick(function(){
		this.style='background-color:rgb(45, 44, 46);font-weight:800;';
	});


	//current task
	$("#station_name").keyup(function(){
	//alert($("#station_name").val());		
		var hidden_gem;
		hidden_gem = $("#list_station").find("option[value='" + $(this).val() + "']").attr("name");
		//alert(hidden_gem);
		stn_cd=hidden_gem;

	});	
	

	//add mulitple HF ID under reg/prov
	$("#submit_all").click(function(){
		$.each($(".item:checked"),function(){
			hf_collected+=$(this).val() + " % ";
     		//alert($(this).text());
		});
		stn_cd_grp = hf_collected.trim();
		//alert(stn_cd_grp);
		// const array_hf_collected= hf_collected.split("  ");
		// alert(array_hf_collected);
		// const myArray = text.split(" ");
		// let word = myArray[1];
		// $.each($(".item:checked").parent().siblings(),function(){
		// alert($(this).text());
		//alert($("checkbox.item").text());

		$("#err_lbl").remove();
		$("div#weather_div").css({'border':'none'});
		$("select#signal_value").css({'border':'none'});

		var weather_stat="";
			
				let btn1_value = document.getElementById("get_Sunny").style.backgroundColor;
				let btn2_value = document.getElementById("get_Cloudy").style.backgroundColor;
				let btn3_value = document.getElementById("get_Rainy").style.backgroundColor;
				// alert(btn1_value);
				// alert(btn2_value);
				// alert(btn3_value);

				if(btn1_value=="green") {
					// alert("Sunny");
					weather_stat="Sunny";
					//alert(weather_status);
				}else if(btn2_value=="green"){
					// alert("Cloudy");
					weather_stat="Cloudy";
					//alert(weather_status);
				}else if(btn3_value=="green"){
					// alert("Rainy");
					weather_stat="Rainy";
					//alert(weather_status);
				}else{
					//alert("PILI KA Weather");
					weather_stat="none";
					$("div#weather_div").css({'border':'2px solid red','padding':'1em'});
				}

		var signal_val = $("select#signal_value").val();
		var no_weather = "";	

		var select_input = is_empty_class("input.station_multi","");
		var select_select = is_empty_class("select#signal_value","0");
		var select_weather = no_weather == weather_stat ? true:false;
		//condition ? exprIfTrue : exprIfFalse

		// alert(select_input);
		// alert(select_select);
		// alert(select_weather);

		if(select_input==false && select_select==false  && select_weather==false) {
			//alert("May value");
			$("#err_lbl").remove();
			 //alert($("select#signal_value").val());
			// alert($("input.station_log").val());
			$.post("AJAX/add_hf_log_multi.php", 
			{
					station_name_grp: 	stn_cd_grp, //all selected checkboxes--
					station_assignee: 	"REGION Entry",
					get_date: 			$("#get_date").val(),
					get_time:			$("#get_time").val(),
					weather_status:		weather_stat,
					signal_status:		signal_val				
			},
				function(data){
						//alert(data);	
						if(data=="New records created!"){
							Popup_modal_show("<h4>SYSTEM NOTIFICATION!</h4><br><b> Multiple New record has been created!</b>",600);
							load_hf_daily_table("#hf_daily_log_table","all%item_log","%Station Name%Station Assignee%Date%Time%Weather%Signal Status%","hf_log_id, station_name, station_assignee, log_date, log_time, weather, signal_status",'true','false',"default","");								
							$("#clear").click();
						}else{
							alert("All fields are required to be filled with input.");
							}
			});		
	
		
		}else{
			//alert("Empty");
			$("#err_lbl").remove();
			$(".top").before("<p  style='color \
			:red;text-align:center' id='err_lbl'>Required fields cannot be empty!</p>");
			$("select#signal_value").css({'border':'1px solid red'});
		}

	});

	$("#submit").click(function(){
		//pag save ng log sa DB heheheh
		//alert($("#get_date").val());
		$("#err_lbl").remove();

		$("div#weather_div").css({'border':'none'});
		$("select#signal_value").css({'border':'none'});
		var weather_stat="";
			
				let btn1_value = document.getElementById("get_Sunny").style.backgroundColor;
				let btn2_value = document.getElementById("get_Cloudy").style.backgroundColor;
				let btn3_value = document.getElementById("get_Rainy").style.backgroundColor;
				// alert(btn1_value);
				// alert(btn2_value);
				// alert(btn3_value);

				if(btn1_value=="green") {
					// alert("Sunny");
					weather_stat="Sunny";
					//alert(weather_status);
				}else if(btn2_value=="green"){
					// alert("Cloudy");
					weather_stat="Cloudy";
					//alert(weather_status);
				}else if(btn3_value=="green"){
					// alert("Rainy");
					weather_stat="Rainy";
					//alert(weather_status);
				}else{
					//alert("PILI KA Weather");
					weather_stat="none";
					$("div#weather_div").css({'border':'2px solid red','padding':'1em'});
				}
		

		
		var signal_val = $("select#signal_value").val();
		var no_weather = "";

		var select_input = is_empty_class("input.station_log","");
		var select_select = is_empty_class("select#signal_value","0");
		
		var select_weather = no_weather == weather_stat ? true:false;
		//condition ? exprIfTrue : exprIfFalse

		// alert(select_input);
		// alert(select_select);
		// alert(select_weather);

		if(select_input==false && select_select==false  && select_weather==false) {
			//alert("May value");
			$("#err_lbl").remove();
			 //alert($("select#signal_value").val());
			// alert($("input.station_log").val());
			$.post("AJAX/add_hf_log.php", 
			
			{
					station_name: 		stn_cd,
					station_assignee: 	$("#station_assignee").val(),
					get_date: 			$("#get_date").val(),
					get_time:			$("#get_time").val(),
					weather_status:		weather_stat,
					signal_status:		signal_val				
			},
				function(data){
						alert(data);
						if(data=="New record created!"){
							Popup_modal_show("<h4>SYSTEM NOTIFICATION!</h4><br><b>New record has been created!</b>",600);
							load_hf_daily_table("#hf_daily_log_table","all%item_log","%Station Name%Station Assignee%Date%Time%Weather%Signal Status%","hf_log_id, station_name, station_assignee, log_date, log_time, weather, signal_status",'true','false',"default","");								
							$("#clear").click();
						}else{
							alert("All fields are required to be filled with input.");
							}
			});		
	
		
		}else{
			//alert("Empty");s
			$("#err_lbl").remove();
			$(".top").before("<p  style='color \
			:red;text-align:center' id='err_lbl'>Required fields cannot be empty!</p>");
			$("select#signal_value").css({'border':'1px solid red'});

		}

	});

	$("#clear").click(function(){
		// $("select#signal_value").prop()
			$("#station_name").val("");
			$("#station_assignee").val("");
			$("#get_date").val("");
			$("#get_time").val("");
			$("#get_Sunny").dblclick();
			$("#get_Rainy").dblclick();
			$("#get_Cloudy").dblclick();
			$("#signal_value").val("0");

	});


	$("#log_option").change(function(){

		//alert($("#log_option").val());
		if($("#log_option").val() =="Single"){
			//$("#single_log_div").css("display","block");
			$("#group_log_div").css("display","none");	
			//$("#station_name").css("display","block");
			$("#label_log_option").text("Single Station Log");
			$("#station_name_label").css("visibility","visible");
			$("#station_name").css("visibility","visible");
			$("#station_assignee").css("visibility","visible");
			$("#station_assignee_label").css("visibility","visible");
			$("#submit_all").css("display","none");
			$("#submit").css("display","inline");

		}else if(($("#log_option").val() =="Group")){
			//$("#group_log_div").css("display","block");
			//$("#single_log_div").css("display","none");
			//$("#station_name").css("display","none");	
			$("#group_log_div").css("display","block");
			$("#label_log_option").text("Group Station Log");
			$("#station_name_label").css("visibility","hidden");
			$("#station_name").css("visibility","hidden");
			//station_assignee na elements
			$("#station_assignee").css("visibility","hidden");
			$("#station_assignee_label").css("visibility","hidden");
			$("#submit_all").css("display","inline");
			$("#submit").css("display","none");


			// $("#station_name_label").css("visibility","hidden");
			// $("#station_name").css("visibility","hidden");
		}

	});
	
		$("#search_region").change(function(){
			load_hf_table("#hf_table","all%item","%Station Name%Station_Code%Region_Code%Region%Prov_Code%Province%Muni_Code%Municipality%Brgy.Code%Barangay%Status%Lat%Long%desc","hf_id, station_name, station_code, station_region, region, station_province, province, station_municipality, municipality, station_barangay, barangay, station_status, station_lat, station_long, station_desc",'true','true',"regional",$(this).val());
		});

		$("#search_provincial").change(function(){
			load_hf_table("#hf_table","all%item","%Station Name%Station_Code%Region_Code%Region%Prov_Code%Province%Muni_Code%Municipality%Brgy.Code%Barangay%Status%Lat%Long%desc","hf_id, station_name, station_code, station_region, region, station_province, province, station_municipality, municipality, station_barangay, barangay, station_status, station_lat, station_long, station_desc",'true','true',"provincial",$(this).val());
		});

		$("#search_scope").change(function(){
			if($(this).val()=="national"){
				$("#search_region").css("display","none");
				$("#search_provincial").css("display","none");
				//load_hf_table("#hf_table","all%item","%Station Name%Station_Code%Region_Code%Region%Prov_Code%Province%Muni_Code%Municipality%Brgy.Code%Barangay%Status%Lat%Long%desc","hf_id, station_name, station_code, station_region, region, station_province, province, station_municipality, municipality, station_barangay, barangay, station_status, station_lat, station_long, station_desc",'true','false',"national","");
			}else if($(this).val()=="regional"){
				$("#search_region").css("display","inline");
				$("#search_provincial").css("display","none");	
				
			}else if($(this).val()=="provincial"){
				$("#search_region").css("display","inline");
				$("#search_provincial").css("display","inline");
				
			}

			//load_hf_table("#hf_table","all%item","%Station Name%Station_Code%Region_Code%Region%Prov_Code%Province%Muni_Code%Municipality%Brgy.Code%Barangay%Status%Lat%Long%desc","hf_id, station_name, station_code, station_region, region, station_province, province, station_municipality, municipality, station_barangay, barangay, station_status, station_lat, station_long, station_desc",'true','false',"regional",$(this).val());
		});

		
		$("#search_station").keyup(function(){
			load_hf_table("#hf_table","all%item","%Station Name%Station_Code%Region_Code%Region%Prov_Code%Province%Muni_Code%Municipality%Brgy.Code%Barangay%Status%Lat%Long%desc","hf_id, station_name, station_code, station_region, region, station_province, province, station_municipality, municipality, station_barangay, barangay, station_status, station_lat, station_long, station_desc",'true','true',"open",$(this).val());
		});

		//for HF daily log table na ito 
		$("#search_station_logged").keyup(function(){
			load_hf_daily_table("#hf_daily_log_table","all%item_log","%Station Name%Station Assignee%Date%Time%Weather%Signal Status%","hf_log_id, station_name,station_assignee, log_date, log_time, weather, signal_status",'true','false',"open",$(this).val());
		
		});

		$("#filter_type_selection").change(function(){
			load_hf_daily_table("#hf_daily_log_table","all%item_log","%Station Name%Station Assignee%Date%Time%Weather%Signal Status%","hf_log_id, station_name, station_assignee, log_date, log_time, weather, signal_status",'true','false',"weather",$(this).val());
		
		});

	

		// $(".item").click(function(){

		// 	var numberOfChecked = $('input:checkbox:checked').length;
		// 	var totalCheckboxes = $('input:checkbox').length;
		// 	var numberNotChecked = totalCheckboxes - numberOfChecked;
		// 	//alert(numberOfChecked);



		// });

		function load_hf_table(target,classes,header,columns,with_checkbox,with_header_chk,filter,mydata){
					$.post("AJAX/load_hf_table.php",
					{
						filter_type: filter,
						data:mydata,
						my_head:header,
						my_classes:classes,
						my_columns:columns,
						chk: with_checkbox,
						all_chk: with_header_chk

					},
					function(data){
						$(target).html(data);
						//var arr_class=to_array(classes,"%");
						enrycpt_each(".item");
					});
				}

		function load_hf_daily_table(target,classes,header,columns,with_checkbox,with_header_chk,filter,mydata){
					$.post("AJAX/load_hf_daily_table.php",
					{
						filter_type: filter,
						data:mydata,
						my_head:header,
						my_classes:classes,
						my_columns:columns,
						chk: with_checkbox,
						all_chk: with_header_chk

					},
					function(data){
						//alert(data);
						$(target).html(data);
						enrycpt_each(".item_log");
					});
				}

	

				

				// function counter_hf_data(target,columns,filter,mydata){
				// 	$.post("AJAX/counter_hf_data.php",
				// 	{
				// 		filter_type: filter,
				// 		data:mydata,
				// 		my_columns:columns
				// 	},
				// 	function(data){
				// 		//alert(data);
				// 		$(target).html(data);
				// 		//enrycpt_each(".item_log");
				// 	});
				// }



});
</script>
