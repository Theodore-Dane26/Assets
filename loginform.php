
	 <section id="imgform" style="width:100%;height:100%;margin:auto;opacity:0.95;
	 display:flex;background:fit-content;position:fixed;z-index:2;padding-bottom:150px;padding-top:150px;" >
      <div class="imgform-container container" style="width:fit-content;margin:auto;box-shadow:5px 5px 25px #3f4240;">
        

        <div class="form-container" style="width:300px;margin:auto;opacity:1" >
          <h2 id="loginheader">Login</h2>
		  
        
				<input type="text" placeholder="Username*" id="username"/>
				<input type="password" placeholder="Password*" id="password"/>
        <input type="password" placeholder="Repeat Password*" id="repassword"/>
				
				<input type='submit' Value='Submit' class="btn btn-primary"  style="color:white;font-weight:800;"  id="submitlogin">
			
        </div>
      </div>
    </section>
    <script src="JS/mine.js" >
    </script>
    <script>
      $(document).ready(function(){
          $("#repassword").hide();
              var isoklogin={
                "uname":false,
                "pass":false
              };
              var err_label=0;
              function validate_elem(id,val){
                  if($(id).val()==val){
                    $(id).css("border-bottom-color","red");
                    if(err_label<1){
                      $("#loginheader").after("<p  style='color:red' id='msgerrlogin'>Required Feild(s)* cannot be empty!</p>");
                      err_label++;
                     
                    }
                    return false;
                  }else{
                    $(id).css("border-bottom-color","#ddd");
                    return true;
                  }
              }

              function gologin(){
                if(isoklogin["uname"] && isoklogin["pass"]){
                  $("#msgerrlogin").remove();
                  err_label=0;
                  return true;
                }
                else{
                  return false;
                }
              }
              function login(){
                  var reroute=true;
                
                    isoklogin["uname"]=validate_elem("#username","");
                    isoklogin["pass"]=validate_elem("#password","");
                    if(gologin()){
                      $.post("AJAX/retrievelogin.php",
                      {
                        uname:$("#username").val(),
                        pass:$("#password").val()
                      }, 
                      function(data){
                        //alert(data);
                        if(data=="true"){
                         
                              window.location="home.php";
                            
                        }else if(data=="false"){
                            if(err_label<1){
                            $("#loginheader").after("<p style='color:red' id='msgerrlogin'>Login Failed!</p>");
                            err_label++;
                            reroute=false;
                           // alert("Login Failed!");
                          
                            }
                        }
                        else if(data=="change_pass"){
                            $("#username").val(session("uname"));
                            $("#repassword").show();
                        }
                        else if(data=="activation"){
                          $("#msgerrlogin").remove();
                          $("#loginheader").after("<p style='color:red' id='msgerrlogin'>Account needs to be activated first! Please contact the admnisitrator!</p>");
                           
                        }
                      });
                    }
                   /*  var delayInMilliseconds = 2000; //1 second
                        setTimeout(function() {
                          window.location="login.php";  
                            }, delayInMilliseconds);
                       */
              }

              $("#submitlogin").click(function(){
                login();
              });
              $("#password, #username").keypress(function(event){
                var keycode =(event.keyCode ? event.keyCode: event.which);
                if(keycode=='13'){
                  login();
                 
                }
              });

              $("#username").change(function(){
                isoklogin["uname"]=validate_elem("#username","");
                gologin();
              });

              $("#password").change(function(){
                isoklogin["pass"]=validate_elem("#password","");
                gologin();
              });

      });
    </script>