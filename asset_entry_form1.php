<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
	<style>
	
		/*From and img container */
		#assetsub,.mainhead{
			font-size: 2.7rem;
			font-weight: 500;
			color: #444;
			
			
		}
		.mainhead{
			text-align:center;
		}
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
			display:inline-block;
			font-size:14px;
		}
		.imgform-img  select, .imgform-img  select options {
			font-size:14px;
		}
		
		.imgform-img{
			width:100%;
			margin-top:20px;
			padding-left:10px;
			padding-right:10px;
			

		}
		.imgform-img h2#assetsub{
			text-align:center;
		}
		
		.imgform-img img{
			width:90%;
			margin:auto;
			height:300px;
		}
		.form-container{
			width:60%;
		}
		.imgform-container{
			width:90%;
			margin:auto;
		}
		/*Media Queries */
		@media (max-width:1267px){
			.imgform-container{
				display:block;
				
			}
			.imgform-img{
				padding-top:40px;
			}
		}
		@media (max-width:820px){
			
			.imgform-img p, .imgform-img  select, input[type=text]{
			font-size:95%;
			}
			
		}
		@media (max-width:600px){
			
			.imgform-img p, .imgform-img  select, input[type=text]{
			font-size:15px;
			}
			.imgform-img img{
			
			height:200px;
			}
			
		}
		
		/**Accordion styles */
		.imgform-img .ac-container{
        width: 100%;
        display:block;
		text-align:center;
		margin:auto;		
		box-shadow:0px 0px 7px #3f4240;
	
      }
	  .imgform-img .ac-container div{
		  display:block;
		  margin:auto;		 
	  }
	  .imgform-img .ac-container label{
        width:100%;
		position:relative;
		z-index: 0;		
		margin-bottom:10px;
      }	
	  .imgform-img .ac-container article{
		  padding-left:30px;
	  }
	  .imgform-img .ac-container label:hover{
       
		font-weight:700;
		
      }
	  .imgform-img section.ac-container div:nth-child(odd){
			background-color:	rgb(120,120,120);
			color:white;
		}
		/* .imgform-img section.ac-container div:nth-child(even) {
			background-color:	rgb(245, 243, 240);
		
			
		} */
		.imgform-img section.ac-container div:nth-child(even) article {
			border-top:solid 1px rgb(217, 216, 215);
			
		}
		.ac-container input:checked ~ article.sizeauto{
       
		height:auto;
		display:inline-block;
		padding-bottom:15px;
		padding-top:8;
		
		}
		article.sizeauto > * {
			display:inline-block;
			overflow:hidden;
		}	
	.set{
		margin-top:10px;
		margin-left:5px;
	}

	/* css for buttons in img container +- sub items
	accordion */
	#add-item, #minus-item {
	display:inline-block;
	position: relative;
	width: 35px;
	height: 35px;
	background: #fff;
	cursor: pointer;
	border: 2px solid rgb(45, 44, 46);
	transition: 0.2s ease;

	}
	
	#add-item:after,   #minus-item:after {
	content: '';
	position: absolute;
	transform: translate(-50%, -50%);
	height: 4px;
	width: 50%;
	background:  rgb(45, 44, 46);
	top: 50%;
	left: 50%;
	}

	#add-item:before  {
	content: '';
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
	background:  rgb(45, 44, 46);
	height: 50%;
	width: 4px;
	}
	#add-item:before:hover,
	#add-item:after:hover,
	#minus-item:after:hover,
	{
	background: white;
	transition: 0.2s;
	}

	#add-item:hover, #minus-item:hover {
	background-color:  #666666;
	transition: 0.2s;
	}
	.ac-container article p{
		margin:0;
		padding:0;
	
	}
	.divide2{
		border-top: 1px solid #d9d9d9;
		box-shadow:1px 1px 10px #b3b3b3;
	}
	#others::placeholder{
		color:blue;
	}
	#serial::placeholder, #ime::placeholder{
		font-size:18px;
	}
	
</style>
	<section id="imgform">
    <div class="imgform-container"  >
		<!-- this section is for  sub items--> 
	  	<div class="imgform-img"  >

			  <h2 id='assetsub'>
			  <div  id="minus-item" class='set'></div> 
				  Sub-Inventory Items
			  <div  id="add-item" class='set'></div></h2>
			
	 	 	<img src="images/asset.jpg" alt="" id="img"/>
			<section class='ac-container' >
				
				<div id='subitem1'>
					
					<input id='ac-6' name='accordion-6' type='checkbox' >
					<label for='ac-6' class='acc-label'>Sub-item1</label>
					<article class='sizeauto' >							
						<input type='text' placeholder='Item Name*' id='asset1' class='subset' />
						<p>Status:*
							<select id='status1' class='subset' >
								<option value=''>Select from below</option>
								<option value='Available1'>Intact</option>
								<option value='Damaged1'>Damaged</option>
							</select>
						</p>
						<input type='text' placeholder='Category*' id="cat1" class='subset' />							
						<input type='text' placeholder='Brand*' id='brand1' class='subset'/>
						<input type='text' placeholder='Model' id='model1'/>
						<input type='text' placeholder='Provider' id='prov1'/>
						<input type='text' placeholder='Fund source'  id='fs1' />
						<input type='text' placeholder='Donor' id='donor1' />
						
					
						
						
						<textarea
							cols='25'
							rows='2'
							placeholder='Serial*'
							id='serial1'
							class='subset'
						></textarea>
						<textarea
							cols='25'
							rows='2'
							placeholder='IMEI'
							id='ime1'
						></textarea>
						<textarea
							cols='25'
							rows='2'
							placeholder='Descreption/Remarks'
							id='remarks1'
						></textarea>
						
					</article>
					
				</div>
				
				
			</section>
			<input type="submit" value="Save" id='save-items' class='set sub-bttn'/>
			<input type="submit" value="Clear" id='clear-sub' class='set sub-bttn'/>
			<br><br>
		
	</div >
		<!-- is for asset inventory--> 
		<div class="form-container">
			<h2 id='assetheader'>Assets Data Entry</h2>
			
			<label for="type"  id='single'>Type of Entry:*</label>
						<select id="type" name="type">
						<option value='single'>Single Item</option>
						<option value="set">1 inventory Set</option>			
						</select>
				<input type='hidden' value='0' id='new_asset'>
				<p class="wrap"><label for="quantity">Quantity:*</label>
				<input type="number"  id="quantity" min="1" value=1 placeholder="Quantity" /></p>
				<input type="text" placeholder="Assets Name*" id="aname" />

				
					<label for="type">Category:*</label>
					<select id="category" name="category" >
						<?php
							$str="SELECT distinct category FROM assets";
							loadropdown1($str,"category","category");//function for loading values into the dropdown accepts sql command and name of columns 
							?>
						
					</select>
					<input type="text" placeholder="ENTER NEW CATEGORY HERE" id="others"/>
						
					<input type="text" class='single' placeholder="Brand*" id="brand"/>
					<input type="text" class='single' placeholder="Provider" id="provider"/>
					<input type="text" class='single' placeholder="Fund source" id="fundsource"/>
					<input type="text" class='single' placeholder="Donor" id="donor"/>
				
					<input type="text" class='single' placeholder="Model" id="model"/>
					<textarea
						class='single'
						cols="30"
						rows="6"
							placeholder="SERIAL:
								For multiple input, place / in between each serial"
						id="serial"
					></textarea>
					<textarea
						class='single'
						cols="30"
						rows="6"
							placeholder="IMEI:
								For multiple input, place / in between each IMEI if there are any"
						id="ime"
					></textarea>
					
					
					<label for="status" >Status:*</label>
					<select id="status" >
						<option value=0>Select from options below</option>
						<option value='Available'>Available</option>
						<option value='Deployed'>Deployed</option>
						<option value='Damaged'>Damaged</option>
					</select>

					<label for="office">Office owner:*</label>
						<select id="office" name="office" >
							<?php
							$str="SELECT id,office_name FROM office";
							loadropdown($str,"id","office_name","Offices");//function for loading values into the dropdown accepts sql command and name of columns 
							?>
						</select>
						
					<label for="remarks">Remarks:</label>	
					<textarea
						cols="30"
						rows="6"
						placeholder="Descreption/Remarks"
						id="remarks"
					></textarea>
					<input type='submit' Value='Submit' class="btn btn-primary " style="color:white;font-weight:800;" id="submitasset">
					<input type='submit' Value='Clear' class="btn btn-primary " style="color:white;font-weight:800;" id="submitclear">
			</div>
		</div>
    </section>
	<script>
		//GLOBAL ASSOCIATIVE ARRAY VARIABLES FOR  VALIDATION
		$(document).ready(function(){
			windsize();
			var acid=6;
			var elemid=1;
			$(".set").hide();
			$(".imgform-img .ac-container, #assetsub").css("display","none");
			var isok={
				"aname":false,
				"category":false,
				"brand":false,
				"status":false,
				"office":false,
				"others":false,
				"serial":false
			};
			$("#others").hide();
		
		var err_label=0;//COUNTER FOR THE ERROR MESSAGE IF CLICKED MORE THAN ONCE, IT WILL NOT 
			//ADD ANY MORE MESSAGE IF THE FORM IS ALREADY IN ERROR STATE UNLESS CLEARED
		function validate_elem(id,value,key){//COMMON FUNCTION FOR VALIDATION OF ELEMENT PAREAMETERS
			//ARE ID FOR THE ID OF THE ELEMENT EX #aname value if the null value for an element 
			//0 for combo box or select element and "" or empty string for input texts
			//LAST PARAMETER IS THE KEY TO BE USED IN ASSOCIATIVE ARRAR THSI IS SAME ID WITH THE ELEMENT BEING PASSED
				if($(id).val()==value){
					$(id).css("border-bottom-color","red");
					isok[key]=false;
					if(err_label<1){
						$("#assetheader").after("<p style='color:red' id='msgasset'>Required Feild(s)* cannot be empty!</p>");
						$("#msgaddasset").remove();
						err_label++;
					}
					
				}
				else{
					$(id).css("border-bottom-color","#ddd");
					isok[key]=true;
				
				}
				
			}
		function goasset(){//COMMON FUNCTION TO CHECK IF ALL FEILDS ARE NOT EMPTY
			
			if(isok["aname"] && isok["category"] && isok["brand"] && isok["status"] && isok["office"] && isok["others"] && isok["serial"]){
				err_label=0;
				$("#msgasset").remove();
				
				return true;
			}
			else{
				return false;
			}
		}
		function count(array){

			var c = 0;
			for(i in array) // in returns key, not object
				if(array[i] != undefined)
					c++;

			return c;
		}

		function clearassetform(){// COMMON FUNCTION FOR CLEARING THE FORM AFTER SUCCESSFUL ENTRY
			$("#remarks, #aname,#brand, #provider, #fundsource, #donor, #model, #serial, #ime").val("");
			$("#category, #status, #office").val(0);
		
			err_label=0;
				for(var key in isok){
					isok[key]=false;
				}
				$("#others").hide();
			
			}
			$("#submitclear").click(function(){
				clearassetform();
				$("#aname,#category,#brand,#status,#office,#serial").css("border-bottom-color","#ddd");
				$("#msgasset").remove();
				$("#errserial").remove();
				
			});
			function validate_serials(id,lbl,errmsg){
				var serials=$(id).val().split("/");
				var size=count(serials);
				if(size==$("#quantity").val()){
					$(errmsg).remove();
					$(id).css("border-bottom-color","#ddd");
					return true;	
					
				}
				else{
					$(id).css("border-bottom-color","red");
					$(errmsg).remove();
					$("#assetheader").after("<p color='red' id='"+errmsg+"' style='color:red'>"+lbl+" and quantity does not match!</p>");
					
					return false;
				}
			}

			$("#submitasset").click(function(){//EVENT WHEN THE BUTTON SUBMIT IF CLICKED JQUERY USES
				// CSS ID SELECTOR CAN ALSO USE ELEMENT OR CLASS SLECTOR
				
			
				
				var cat="";
				if($("#category").val()=='others'){//conditions for checking if others in catgory is selected
					//then will toggle category key in isok array true as others input is not empty else default to false
					//cat variable wil take the value of thers input
						validate_elem("#others",'',"others");	//this needs to validate since others input is a free form
						if(isok["others"]){ isok["category"]=true;}//if this is not true then deafult value as declared when form loads is false
						cat=$("#others").val();
					}
						
				if($("#category").val()!='others' && $("#category").val()!='0'){
					//check if selected is not others and not 0 as well then 
					//whihc means category drop down is not empty assigning catgory key and others key in isok array
					//as true as bith of keys are bwing check in goassets function
					isok["category"]=true;//this wasn't been validated using a validate_elem function as this not a free form 
						isok["others"]=true;
					cat=$("#category").val()
					}
					if($("#category").val()=='0'){
						validate_elem("#category",'0',"category");
					}
				
				if($("#type").val()=="single")	{
					validate_elem("#aname","","aname");//the structure of validate_elem here unlike other val;idations
					//in other jquery form it doesn't return a value instead uses the isok array with keys corresponding to the names
					//of the input holding a boolean value if input is not empty then the value of its 
					//corresponding key in isok array is set to true
					//once all required fields are filled in and goassets validation returns true if all keys in isok is true
					//then the form is reset including all keys in isok array are all set to false for another round of input
					validate_elem("#brand","","brand");
					validate_elem("#status",0,"status");
					validate_elem("#office",0,"office");
					validate_elem("#serial",0,"serial");
					if(!validate_serials("#serial","Serials","#errserial")){
					isok["serial"]=false;
					}
					var goime=false;
					if($("#ime").val()!=""){
						if(validate_serials("#ime","IMEI's","#errime")){
							goime=true;
						}
					}
					else{
						goime=true;
					}
					if(goasset() && goime){// TESTING IF ALL FIELDS ARE CLEARED
						//EXECUTE CLEAR FORM AFTER SUCCESSFUL ENTRY 
						$.post("AJAX/insertasset.php",
						{
							aname: 		$("#aname").val(),
							category:	cat,
							brand:		$("#brand").val(),
							model:		$("#model").val(),
							serial:		$("#serial").val(),
							ime:		$("#ime").val(),
							fundsource:	$("#fundsource").val(),
							donor:		$("#donor").val(),
							provider:	$("#provider").val(),
							status:		$("#status").val(),
							remarks:	$("#remarks").val(),
							office:		$("#office").val(),
							type:		"single"
						},
							function(data){
								$("#msgaddasset").remove();//the command for adding thisa message 
								// that a new asset has been successfully saved is in AJAX/insertasset
								//it removes the previously added msgaddasset to avoid piling up of messages
								// in the header
								$("#new_asset").remove();// this is a hidden input filed to identy that there is one submitted
								$("#assetheader").after(data);
							}
						);
						clearassetform();
					}
				}	
				if($("#type").val()=="set")	{
					validate_elem("#aname","","aname");
					validate_elem("#office",0,"office")

					if(isok["aname"] && isok["office"]){
						alert($("#new_asset").val());
						if($("#new_asset").val()=='0'){

							
							$.post("AJAX/insertasset.php",
								{
									aname: 		$("#aname").val(),
									category:	cat,
									brand:		"",
									model:		"",
									serial:		"",
									ime:		"",
									fundsource:	"",
									donor:		"",
									provider:	"",
									status:		$("#status").val(),
									remarks:	$("#remarks").val(),
									office:		$("#office").val(),
									type:		"set"
								},
								function(data){
									$("#msgaddasset").remove();
									$("#new_asset").remove();
									$("#sub_msg_success").remove();
									$("#err_4sub").remove();
									$("#assetheader").after(data);
								}
							);
						}
						else{
							$("#err_open").remove();
							$("#assetheader").after("<p id='err_open' style='color:red;'>Sub-aset entry is still open, you must enter sub-inventory firts!</p>")
						}
					}
				}
			});

			//EVENT FUNCTION FOR EACH ELEMENT ON CHANGE OF ELEMENT VALUE EXECUTE VALIDATE DATA ABD CHECK IF ALL FIELDS 
			//ARE CLREARED
			$("#type").change(function(){
				$("#err_4sub").remove();
				$("#new_asset").val("0");
				$("#msgaddasset").remove();
				clearassetform();
				clear_sub();
				if($(this).val()=="set"){
					$(".single, #img").css("display","none");
					$(".imgform-img .ac-container, #assetsub").css("display","block");
					$(".set").show();
				}
				else{
					$(".single, #img").css("display","block");
					$(".imgform-img .ac-container, #assetsub").css("display","none");
					$(".set").hide();
				}
				windsize();//window size detection function is called when the page loads fucntion definition is below
			});
			$("#aname").change(function(){
				validate_elem("#aname","","aname");
				goasset();
			});
			
			$("#category").change(function(){
				validate_elem("#category",0,"category");
				goasset();
				if($(this).val()=="others"){
					$("#others").show();
				}
				else{
					$("#others").hide();
				}
			});

			
			$("#others").change(function(){
				validate_elem("#others",0,"others");
				goasset();
			});

			$("#brand").change(function(){
				validate_elem("#brand","","brand");
				goasset();
			});
			$("#status").change(function(){
				validate_elem("#status",0,"status");
				goasset();
			});
			$("#office").change(function(){
				validate_elem("#office",0,"office");
				goasset();
			});
			$("#serial").change(function(){
				validate_elem("#serial",0,"serial");
				validate_serials("#serial","Serials","#errserial")
				goasset();
			});

			$("#quantity").change(function(){
				validate_serials("#serial","Serials","#errserial")
				goasset();
			});
			
			var allsub ={
				asset:"#asset",
				cat:"#cat",
				brand:"#brand",
				prov:"#prov",
				funds:"#fs",
				donor:"#donor",
				model:"#model",
				serial:"#serial",
				ime:"#ime",
				status:"#status",
				remarks:"#remarks"
				};
			//Funtion for sub item validation
			//this is another function for sub-item validation it returns a value so no need to use keys in here
			// this was coded this way to avoid recoding the whole form :D
			//as coding structures improves, future jquery will be moved in one file just like the php to allow code reuse	
			function validate_sub_item(id,null_val,lbl,target)	{
				if($(id).val()==null_val){
					$("#"+lbl).remove();
					$("#sub_msg_success").remove();
					$(target).after("<p id='"+lbl+"' style='color:red;'>Required* fields cannot be empty</p>");
					$(id).css("border-color","red");
					return false;
				}
				else{
					$(id).css("border","solid 1px rgb(120, 120, 120)");
					return true;
				}
			}
			function validateallsub(){
				var subitems ={
				asset:"#asset",
				cat:"#cat",
				brand:"#brand",
				serial:"#serial",
				status:"#status"
				};
				var sub_ok=false;
				var okok=true;
				for(let i=1; i<=elemid;i++){
					for(var item in subitems){
						if(validate_sub_item(subitems[item]+i+"","","errsub","#assetsub")){
							sub_ok=true;
						}
						else{
							okok=false;
						}
					}
				}
				sub_ok=okok;
				return sub_ok;
			}
			//Event for saving all sub-items
			$("#save-items").click(function(){
				if(validateallsub()){
					$("#errsub").remove();
					if($("#new_asset").val()!='0'){
						for(let i=1; i<=elemid; i++){
							$.post("AJAX/insert_sub_item.php",
								{
									asset_id:	$("#new_asset").val(),
									asset:		$("#asset"+i).val(),
									cat:		$("#cat"+i).val(),
									brand: 		$("#brand"+i).val(),
									provider: 	$("#prov"+i).val(),
									fundsource:	$("#fs"+i).val(),
									donor:		$("#donor"+i).val(),
									model:		$("#model"+i).val(),
									serial:		$("#serial"+i).val(),
									ime:		$("#ime"+i).val(),
									status:		$("#status"+i).val(),
									remarks:	$("#remarks"+i).val()
								},
								function(data){
									$("#sub_msg_success").remove();
									$("#assetsub").after("<p id='sub_msg_success'>"+data+"</p>");

							});
						}
						$("#new_asset").val("0");
						clear_sub();
						clearassetform();
					}
					else{
						$("#err_4sub").remove();
						$("#assetheader").after("<p id='err_4sub' style='color:red;'>You must fill-up and save the Inventory set form first!</p>");
					}
				}
			});
			//clearing all sub-items
			function clear_sub(){
				$(".subset").css("border","solid 1px rgb(120, 120, 120)");
				$("#errsub").remove();
				for(let i=1;i<=elemid;i++){
					for(var key in allsub){
						$(allsub[key]+i+"").val("");
					}
				}
			}
			$("#clear-sub").click(function(){
				clear_sub();
			});
			
			$("#fs1").change(function(){
				for(let i=2;i<=elemid;i++){
					$("#fs"+i).val($(this).val());
					$("#donor"+i).val($(this).val());
				}
				$("#donor1").val($(this).val());
			});
			$("#donor1").change(function(){
				for(let i=2;i<=elemid;i++){
					$("#donor"+i).val($(this).val());
				}
			});
			//events for addign and deleting sub item
			$("#add-item").click(function(){
				acid++; 
				elemid++;
				var forms="<input type='text' placeholder='Item Name*' id='asset"+elemid+"' class='subset' />\
				<p>Status:*<select id='status"+elemid+"' class='subset'>\
				<option value=''>Select from below</option>\
				<option value='Available'>Intact</option>\
				<option value='Damaged'>Damaged</option>\
				</select></p>\
				<input type='text' placeholder='Category*' id='cat"+elemid+"' class='subset' />\
				<input type='text'  placeholder='Brand*' id='brand"+elemid+"'class='subset' />\
				<input type='text' placeholder='Model' id='model"+elemid+"'/>\
				<input type='text'  placeholder='Provider' id='prov"+elemid+"' ng-bind='prov'/>\
				<input type='text'  placeholder='Fund source' id='fs"+elemid+"' ng-bind='fs'/>\
				<input type='text'  placeholder='Donor' id='donor"+elemid+"' ng-bind='donor'/>\
				<textarea cols='25' rows='2'placeholder='Serial*' id='serial"+elemid+"' class='subset'></textarea>\
				<textarea cols='25' rows='2'placeholder='IMEI' id='ime"+elemid+"'></textarea>\
				<textarea cols='25' rows='2'placeholder='Descreption/Remarks'id='remarks"+elemid+"'></textarea>";
				var elem="<div id='subitem"+elemid+"'><input id='ac-"+acid+"' name='accordion-"+acid+"' type='checkbox' ><label for='ac-"+acid+"' class='acc-label'>Sub-item"+elemid+"</label><article class='sizeauto'>"+forms+"</article></div>";
				$("#subitem"+(elemid-1)+"").last().after(elem);
				
				if($("#fs1").val()!=""){$("#fs"+elemid).val($("#fs1").val());}
				if($("#donor1").val()!=""){$("#donor"+elemid).val($("#donor1").val());}
			});
			$("#minus-item").click(function(){
				if(elemid>1){
					$("#subitem"+elemid+"").remove();
					elemid--;
					acid--;
				}
			});
			//decteting window size to re align the labels once window is below 1267pixels using media query in css
			// it will autmatically move the form for Inventory Set below Sub-inventory items
			// the main label for this form 'Assets Data Entry' is moved to the very top if teh section form forms
			function windsize(){
				var l=$(window).width();
				if(l<1267){
					$(".mainhead").remove();
					$(".divide2").remove();
					$("#assetsub").before("<h2 class='mainhead'>Assets Data Entry</h2>");
					$(".mainhead").after(" <hr class='divide2' style='margin-bottom:15px;'>");
					$("#clear-sub").after(" <hr class='divide2' style='margin-top:15px'>");
						if($("#type").val()=="single"){
							$("#assetheader").text("");
						}
						if($("#type").val()=="set"){
							$("#assetheader").text("Inventory Set Form");
						}
				}else{
					$(".mainhead").remove();
					$(".divide2").remove();
					$("#assetheader").text("Assets Data Entry");
				}
			}
			$(window).resize(function(){// this is the even for windows resize calling the function 
				windsize();
				
			});
		});
	</script>
