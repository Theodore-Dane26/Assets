<footer id="footer">
  <div class="wp">
        <div ><img src="images/1govph-seal-mono-footer.png" class="footer-img"></div>
        <div class="about-text"><p>Department of Information </p>
            <p>and Communications Technology</p><p> &copy; all rights reserved</p>
            <p style="color:rgb(228, 227, 227)">&nbsp </p>
            <p style="color:rgb(228, 227, 227)">&nbsp</p>
        </div>
        <div><img src="images/transparency-seal.png" class="footer-img"></div>
    </div>
    <input type="hidden" class="butwa">
    <input type="hidden" class="niyan" value=<?php echo"'".$_SESSION["officename"]."'";?>>
    </footer>
    <script>
       hide_header_panel();
         <?php echo"/*".encrypt("THIS IS A COMMENT-The function is_true_false evaluates true or 
         false if there is a result in a given query.
         the function calls a function eval() which evaluate the string value passed inside eval,
         the string value contains the function name of the next function to be executed
         (designed this way beause of asyncronous rule in ajax in which case all codes 
         outside the ajax are evaluated first, 
         hence when returng a value inside ajax, the value will always be null)
         if is_true_false is either true or false based on query result.
         This comment is ecnrypted")."*/";?>
        function is_true_false(str,eval_func_true,eval_func_false){
           $.post("AJAX/mycodes.php",
            {
            sql:        str,
            command:    "is_empty"  
            },
            function(data){
              //alert(str);
                if(data=="true"){
                   
                    eval(eval_func_true);
                }
                else{
                    eval(eval_func_false);
                }
               
            });
            
        }
        function attributes_input(category){


        }
        function sizeof(array){

            var c = 0;
            for(i in array) // in returns key, not object
                if(array[i] != undefined)
                    c++;

            return c;
        }

        function to_array(values,delimeter){
				return values.split(delimeter);

			}
        function call_php_code(command_func,data_val,eval_func_true,eval_func_false){
           
            $.post("AJAX/mycodes.php",
            {
                command:command_func,
                values:data_val

            },
            function(data){
                if(data!=""){  
                    alert(data);
                      if(eval_func_true.includes("|")){
                       
                        var elem = eval_func_true.split("|");
                        eval(elem[0]+"('"+elem[1]+"','"+data+"')");     
                      }   else{
                        eval(eval_func_true);
                
                      }  
                }else{
                    
                    eval(eval_func_false);
                }
              
            });
        }
        function check_url(url){
            if(url.includes("%3Cscript%3E")){
                reroute() 
            }
        }

        function reroute(){
            windows.location("logout.php");
        }
        function href_each(target){
           
            $.each($(target),function(){
                //alert("click");
                var value=$(this).text();
                $(this).html("<a href='"+value+"' target='_blank'>Attachment</a>");

            });
        }
        function remove_next_word(target){
            $.each($(target),function(){
                //alert("click");
                var value=$(this).text();
                var arr_val=to_array(value," ");
                $(this).html(arr_val[0]);

            });
        }
        function remove_first_word(target){
            $.each($(target),function(){
                //alert("click");
                var value=$(this).text();
                var arr_val=to_array(value," ");
                $(this).html(arr_val[1]);

            });
        }
        function str_replace(arr_keys,orig_string){
            //this function is to remove special characters such as / % ? 
            //& ^ $ @ < > in a field that is not appropriate or depending on how you define the jeys
            // they arr_keys is an array of string
            var str=orig_string;
          
            var size=sizeof(arr_keys);
            for(let i=0; i< size; i++){
                str=str.replace(arr_keys[i],"");
            }
            return str;
        }
        
        function global_load_table(str,headers,chkbox,allchk,classes,target,item,href,next_word){
            $.post("AJAX/loadtable.php", 
            {
                sql:str,
                hdr:headers,
                class:classes,
                check: chkbox,
                all:allchk
            },
            function(data){
                $(target).html(data);
                if(item!=""){
                    enrycpt_each(item);
			
                }
                if(href!=""){
                    href_each(href);	
                }
                if(next_word!=""){
                     if(next_word==".item_area"){
                        $(next_word).attr("disabled","disabled");
                        enrycpt_each(".item_area");
                       
                       
                    }
                    else{
                        remove_next_word(next_word);	
                    }
                }
                if(target==".affected"){
                    $(".item_area").removeAttr("disabled");
                }
            });
            
        }
        function load_next_paginate(){
           // console.log ($(".hd1").val());
            var arr_data=to_array($(".hd1").text(),"sunod");
            //console.log("From load next paginate cols: "+arr_data[0]);
            //alert("From load next paginate "+arr_data[0]);
            //console.log("From load next paginate table: "+arr_data[1]);
           // alert(arr_data[1]);
            var target=arr_data[5];
            $.post("AJAX/loadtable_paginate.php", 
            {
                cols:arr_data[0],
                start: $(".pag_opt").val(),
                hdr:arr_data[3],
                class:arr_data[4],
                check: 1,
                all:0,
                col:arr_data[2],
                table:arr_data[1]
            }, function(data){

                var arr_data=to_array(data,"sunod");
                    $(target).html(arr_data[0]); 
            });
        }

        function global_load_table_paginate(my_cols,headers,chkbox,allchk,classes,target,item,href,next_word,table_n,cold_id,my_start){//item is for the elemnt to be encrypted
            //console.log("from  global loadt table paginate cols: "+my_cols);
            //console.log("from  global loadt table paginate table: "+table_n);
            $.post("AJAX/loadtable_paginate.php", 
            {
                cols:my_cols,
                start: my_start,
                hdr:headers,
                class:classes,
                check: chkbox,
                all:allchk,
                col:cold_id,
                table:table_n
            }, 
            function(data){
                var arr_data=to_array(data,"sunod");
                $(target).html(arr_data[0]); 
               //console.log(arr_data);
                $(target).before(create_pagination(my_cols,table_n,cold_id,arr_data[1],headers,classes,target));
                
                if(item!=""){
                    enrycpt_each(item);
			
                }
                if(href!=""){
                    href_each(href);	
                }
                if(next_word!=""){
                     if(next_word==".item_area"){
                        $(next_word).attr("disabled","disabled");
                        enrycpt_each(".item_area");
                       
                       
                    }
                    else{
                        remove_next_word(next_word);	
                    }
                }
                if(target==".affected"){
                    $(".item_area").removeAttr("disabled");
                }
            });
            
        }
        
        function make_input_attributes(target,class_names,cat,disaster_id,add_this,target_add,etc){
		$.post("AJAX/load_disaster_attributes.php",
		{
			category:cat,
			disaster:disaster_id,
            myclass: class_names,
            etc_id:etc
		},
		function(data){
			//alert(data);
            if(add_this!=""){
                $(target_add).before(add_this);
            }
            if(data=="nullmmm new"){
                
                $(target).html("<div class='input_wrapper'><p >No paremeters yet. Please click add button.</p></div>");
            }else{
                var inputs=to_array(data,"mmm");
                $(target).html(inputs[0]);
               //alert(inputs[1].trim());
                if(inputs[1].trim()=="retrieved"){
                 // alert(inputs[4].trim());
                    $("#probability").val(inputs[2].trim());
                    $("#o_impact").val(inputs[3].trim());
                    $("#form").val(inputs[4].trim());
                    $("#current_etc").val(inputs[5].trim());
                    load_affected("#disaster_affected");
                   
                } 
                if(inputs[1].trim()=="new"){
                    
                    $("#form").val("0");
                    $("#probability").val("0");
                    $("#o_impact").val("0");
                    $("#current_etc").val(inputs[2].trim());
                   // alert(inputs[2].trim());
                   $("#disaster_affected").empty();
                    
                }
                if(  $("#form").val()!=
                "0"){
                    enable_affected();
                  
                   }else{
                    disable_affected()
                   }
            }
            loaddropdown(slect_log,disaster_id,"id","log","disaster",".impact_log",".impact_log option:nth-child(1)","New/Escalation");
            //this is the dropdown for impact log it's sql is encrypted 

        
		});

	 }
     
     function enable_affected(){
		$(".inputs2, .item_area").removeAttr("disabled");
	}
    function disable_affected(){
		$(".inputs2, .item_area").attr("disabled","disabled");
	}
     function loaddropdown(str,myid, mycol1,mycol2,myfrom,tofill,change_child,child_val){
        $.post("AJAX/dropdown_decrypt.php",
				{
				
					sql:str,
                    id:myid,
					col1:mycol1,
					col2:mycol2,
					from:myfrom
				},
				function(data){
					$(tofill).removeAttr("disabled");
					$(tofill).html(data);
                    if(change_child!=""){
                        $(change_child).text(child_val);
                        $(change_child).after("<option value='C'>Current</option>");
                        //alert($("#form").val());
		                $(tofill).val($("#form").val());
                        //alert($(".impact_log").val());
                        if($(".impact_log").val()=="0"){
                          
                          $(".item_area").attr("disabled","disabled");
                      }
                      
                    }
				}
			);
     }

     function FetchRegion(id,str,tofill,c1,c2,frm){
		if(id!=0 || id==""){
      $("#region, #province, #municipality, #barangay").css("border-bottom-color","#ddd");
				if(frm==""){
          $("#province").css("border-bottom-color","red");
					$("#municipality, #barangay").html("<option value=0>Select from Province</option>").attr("disabled","disabled").css("border-bottom-color","red");					

				}
				if(frm=="Region"){
          $("#municipality").css("border-bottom-color","red");
					$("#barangay").html("<option value=0>Select from Municipality</option>").attr("disabled","disabled").css("border-bottom-color","red");

				}
        if(frm=="Municipality"){
          $("#barangay").css("border-bottom-color","red");

        }
        
				$.post("AJAX/dropdown.php",
				{
				
					sql:str+""+id+" order by name",
					col1:c1,
					col2:c2,
					from:frm
				},
				function(data){
					$(tofill).removeAttr("disabled");
					$(tofill).html(data);
				}
			);

		}
		else{
			if(frm==""){
        $("#region").css("border-bottom-color","red");
					$("#province, #municipality, #barangay").html("<option value=0>Select from Region</option>").attr("disabled","disabled").css("border-bottom-color","red");
					

				}
				if(frm=="Region"){
				  $("#province").css("border-bottom-color","red");
					$("#municipality, #barangay").html("<option value=0>Select from Province</option>").attr("disabled","disabled").css("border-bottom-color","red");

				}

        if(frm=="Municipality"){
				  $("#municipality").css("border-bottom-color","red");
        $(" #barangay").html("<option value=0>Select from Municipality</option>").attr("disabled","disabled").css("border-bottom-color","red");

      }

        
		}
		
	}
    function disable_inactive(item,next_for,val_check){// this is a function which lets you select a value within the same row checks it if it satisfies the condition
        //then disables the radio button
		$.each($(item),function(){
			var status = $(this).parent();
            for(let i=0;i<next_for;i++){
                status=status.next();
            }
            status= status.text();
            
			//alert(status.trim());
			if(status.trim()==val_check  ){
				$(this).attr("disabled","disabled");
			}


		});

	}
   
        function global_load_table_radio(str,headers,chkbox,allchk,classes,target,item,href,next_word,funct){
            $.post("AJAX/loadtable_radio.php", 
            {
                sql:str,
                hdr:headers,
                class:classes,
                check: chkbox,
                all:allchk,
                func: funct
            },
            function(data){
                $(target).html(data);
                if(item!=""){
                    enrycpt_each(item);
                    if(item==".dst_item"){
                        disable_inactive(item,5,"deactivated");
                    }

			
                }
                if(href!=""){
                    href_each(href);	
                }
                if(next_word!=""){
                    if(next_word==".item_area"){
                        $(next_word).attr("disabled","disabled");
                    }
                    else{
                        remove_next_word(next_word);	
                    }
                  
                }
            });
        }
        function decrypt_one(source,target){
            $.post("AJAX/mycodes.php",
                   {
                    command:"decrypt",
                    values:source
                   },
                   function(data){
                  var arr_data=to_array(data,"%");
                    $(target).val(arr_data[0]);
                  
                    
                   });    
        }
        function decrypt_one_compare_retrieve(source,target,val,what_to){
            $.post("AJAX/mycodes.php",
                   {
                    command:"decrypt",
                    values:source
                   },
                   function(data){
                    //console.log(data);
                  var arr_data=to_array(data,"%");
                    if(val==arr_data[0]){
                        var size=sizeof(arr_data);
                        $(target).val(arr_data[size-1]);
                        if(what_to=='regions'){
                            $("#regions").val(source);
                            $("#regions").change();
                           // console.log($('#dict_offices option'));
                           

                        }
                        if(what_to=='offices'){
                            $("#dict_offices").val(source);
                            $("#dict_offices").change();
                        }
                       
                    }                
                 
                   });    
        }

        function enrycpt_each(target){

         $.each($(target),function(){
            var chk_obj=$(this);
      
                   $.post("AJAX/mycodes.php",
                   {
                    command:"encrypt",
                    values:$(chk_obj).val()
                   },
                   function(data){
                 
                    $(chk_obj).val(data);
                  
                    
                   });    
            }); 
        }
        function hide_header_panel(){
            var arr_data=to_array(window.location.href,"/");
            if(arr_data[4]!="home.php"){
                $(".home_filler").show();
                $(".ribbon_label").text("SHOW");
                $("#showcase").hide();
            }
                
           
        }
        function hide_show_partner(target1,target2,leght,speed){
				var l=$(window).width();
				
					if(l>1600){
						if($(target1).is(":hidden")){
							$(target2).show(speed);
							$(target1).show(speed);
						}
						else{
							$(target2).hide(speed);
							$(target1).hide(speed);
						}
					}
					else{
						$(target1).toggle(speed);
					}
			}
        function hide_show_ony(target,speed){
            $(target).toggle(speed);
        }
        function hide_show_execute(target,speed,execute){
            if(execute=="filler"){//the filler execute value is specific to the header pannel
                //'can still add a code here to be executed specific for an element
            if($(target).is(":hidden")){
                console.log("true");
                $(".home_filler").hide("fast");
                $(".ribbon_label").text("HIDE");
            }
            else{
                console.log("false");
                $(".home_filler").show("fast");
                $(".ribbon_label").text("SHOW");
            }
          }
          $(target).toggle(speed);
         
          
      }
        function slide(target){
          
			$(target).slideToggle("slow");
		}
        //used in risk_management_form.php
        function mini_pannel_slide(target,imganimate,imgtrue,imgfalse){
		
		$(target).slideToggle("slow",function(){
			if($(target).is(":hidden")){
                var image=$(imganimate);
                image.fadeOut("fast",function(){
                    $(imganimate).attr("src",imgtrue);
                    image.fadeIn("fast");
                });		
			}
			else{
                var image=$(imganimate);
                image.fadeOut("fast",function(){
                    $(imganimate).attr("src",imgfalse);
                    image.fadeIn("fast");
                });
			
				
			}
		});

	}
       
    function load_affected(target){
        $(target).empty();
		var headers="%Affected%Scale%Log%Impact%EPR%Status";
		var classes="all_affected%item_affected";
		$.post("AJAX/load_affected_areas.php",
		{
			disaster: $(".dst_item:checked").val(),
			etc: $("#current_etc").val(),
			header: headers,
			class:classes
		},
		function(data){
			$(target).html(data);
			enrycpt_each(".item_affected");
            remove_next_word("#disaster_affected td:nth-child(4)");
            remove_first_word("#disaster_affected td:nth-child(5)");
		});

	}
        function get_total_assets(office_val,arr_id,call_from){
			$.post("AJAX/get_assets_total.php",
			{
				office:office_val
			},
			function(data){
				var arr_data=to_array(data,"%");
				//alert(arr_id.lenght);
                var size=sizeof(arr_data);
                
                for(var key in arr_id){
                  
                    
                        $(arr_id[key]).text(arr_data[key]);
                 
                }
                if(call_from=="home"){
                    var receive=parseInt(arr_data[size-1]);
                    var plural="";
                    if(receive>1){
                        plural="s";
                    }
                    if(receive!=0){
                        Popup_modal_show("You have <b>"+receive+"</b> new item"+plural+" to be received. \
                        Please go to <a href='assets_mgt.php'>Assets management module</a> to receive these item"+plural+". Thank you.",600);
                        //$(".modal").css("display","block");
                    }
                }
				
			});
		}
        $(".close").click(function(){
			$(".modal").delay(100).fadeOut();
		}); 
        function Popup_modal_show(msg,speed){
            $(".modal").css("display","block");
            $(".modal").hide();
            $("#popmsg").html(msg);
            $(".modal").delay(speed).fadeIn();
        }
        function mytest(){
            alert("test");
        }

        function validate_date(input){
            var date = new Date($(input).val());
                //alert(date.getDate());
                if(isNaN(date.getDate())){
                    $(input).css({"border":"solid 1px red"}); 
                    return true;
                }
                else{
                    $(input).css({"border":"solid 1px rgb(118, 118, 118)"}); 
                    return false;
                }
        }
        function is_empty_class(myclass,empty_val){
            var isempty=false;
            $.each($(myclass),function(){
                if($(this).val().trim()==empty_val){
                    isempty=true;
                    $(this).css({"border":"solid 1px red"});

                }else{
                    $(this).css({"border":"solid 1px rgb(113, 113, 113)"});
                }
            });
            return isempty;
            
        }
        function clear_class_input(myclass,empty_val){
            $.each($(myclass),function(){                
                    $(this).css({"border":"solid 1px rgb(113, 113, 113)"}).val(empty_val);
            });          
            
        }
        function global_validate(target,value){
		if($(target).val().trim()==value){
			$(target).css({"border":"solid 1px red"}); 
			return true;
		}else{
			$(target).css({"border":"solid 1px rgb(113, 113, 113)"});
			return false;
		}
	}
        function Popup_modal_show2(msg,speed){// this pop-up modal will logout upon clicking close, 
            //this is only used for auto log-out message

            $(".modal2").css("display","block");
            $(".modal2").hide();
            $("#popmsg1").html(msg);
            $(".modal2").delay(speed).fadeIn();
            return true;
            
        }
        

        function create_pagination(my_cols,table,col_name,arr_ids, headers,classes,target){
            //console.log("From create Pagination table source: "+table);
            //console.log("From create Pagination table source: "+my_cols);
            $(".paginate").remove();
            var ids=to_array(arr_ids," ");
            var body="<div class='input_wrapper paginate'>\
                            <input type='button' value='<<' class='prev_paginate sub-bttn'> Page \
                            <select class='pag_opt'>";
                            var content_select="";
                            var size=sizeof(ids);
                            for(let i=0; i<size;i++){
                                content_select+="<option value="+ids[i]+">"+(i+1)+"</option>";
                            }
                            var body2="</select><p>of "+size+"\
                             <input type='button' value='>>' class='next_paginate sub-bttn'>\
                             <p  class='hd1' style='display:none;' >"+my_cols+" sunod "+table+" sunod "+col_name+" sunod "+headers+" sunod "+classes+" sunod "+target+"<p><div>";
                           return body+content_select+body2;

        }
        function loadtable_decrypt(str,headers,chkbox,allchk, target,chkbox_name,with_chkbox,elem_chk){
			//var elem="all%item_pass_res"
			$.post("AJAX/loadtable_decryptstr.php",{
				sql:str,
				hdr:headers,
				check:chkbox,	
				all:allchk,
				class:elem
			},function(data){
				if(data!=""){
					//alert(chkbox);
					$(target).html(data);
					if(with_chkbox==1){
					enrycpt_each(chkbox_name);		
				}
					
				}else{
					$(target).empty();
				}				
					
			}
			);
		}
       // console.log(generate_colors(7));
        function generate_colors(size){
            var arr_col=[];
            
            for(let i=0;i<size;i++){
                    var colorR=Math.floor((Math.random() *256));
                    var colorG=Math.floor((Math.random() *256));
                    var colorB=Math.floor((Math.random() *256));
                    var color="rgb("+colorR+","+colorG+","+colorB+")";
                    arr_col.push(color);

                
            }
            return arr_col;
        }
        function ajax(values){
            var params=to_array(values);
            $.post(params[0],{

            },
            function(data){

            });
        }
   
        function assign(target_elem,data){
            $(target_elem).val(data);
        }
        function assign_html(target_elem,data){
            $(target_elem).html(data);
        }
        function do_nothig(){
            //do nothing
        }
        function testing(){
            alert("testing");
        }
        function elem_hide(target){
           // alert(target);
            $(target).hide();
        }
        function elem_show(target){
            $(target).show();
        }
        function data_value(data){
            return data;
        }
        <?php 
        echo "
        function encypt1(str){
            return '".encrypt("SELECT official_id,fname,lname,`username`,`position`,auth_level,`status` FROM personnelogiinfo where `status`='active'")."';
            //alert(str);
        }
        function decypt1(str){
            return '".decrypt("SELECT official_id,fname,lname,`username`,`position`,auth_level,`status` FROM personnelogiinfo where `status`='active'")."';
            //alert(str);
        }
        function get_session_username(){
            return '".encrypt($_SESSION["uname"])."';
        }
        ";
        ?>
      $(document).on("click",".next_paginate",function(){
           var pag_opt=parseInt($(".pag_opt option:selected").text());
           var paginate_size=0
            $.each($(".pag_opt option"),function(){
                paginate_size++;
            });
            var next;
           if(pag_opt < paginate_size){
            next=$(".pag_opt option:selected").next().val();
           // alert(next);
           $(".pag_opt").val(next);
           load_next_paginate();
           }
          
      });

      $(document).on("click",".prev_paginate",function(){
           var pag_opt=parseInt($(".pag_opt option:selected").text());
           var paginate_size=0
            
            var prev;
           if(pag_opt > 1){
            prev=$(".pag_opt option:selected").prev().val();
           // alert(next);
           $(".pag_opt").val(prev);
           load_next_paginate();
          
           }
           
      });
      $(document).on("change",".pag_opt",function(){
          
           load_next_paginate();
          
           
           
      });
        
    </script>
    
