<?php
session_start();
if (isset($_SESSION['start']) && (time() - $_SESSION['start'] > 1800)) {
    session_unset(); 
    session_destroy(); 
   
}
$_SESSION['start'] = time();

if( basename($_SERVER["SCRIPT_FILENAME"], '.php')=="codes" && !(isset($_SESSION["auth"]))){
   header("Location:../login.php");
}

  

//Class for databce connection for dynamically reusing of codes
class Database{

    public $servername="localhost";
    public $username="lowe";
    public $pass="admin123";
    public $db="assets";
    public $con;

    function connect(){
        $this->con=mysqli_connect($this->servername,$this->username,$this->pass,$this->db);
        $mycon=$this->con;
        if(!$mycon){
                  
            die("Connection failed ".mysqli_connect_error());
        }
        else{
            return "Connection Sucessful!";
        }
    }

    function insert($query){
        $query=linig($query);
        if(mysqli_query($this->con,$query)){
                return "New record created!";
        }
        else{
            return "Error: ".$query."<br>".mysqli_error($this->con);
        }
    }

    function insert_no_linig($query){
        $query=$query;
        if(mysqli_query($this->con,$query)){
                return "New record created!";
        }
        else{
            return "Error: ".$query."<br>".mysqli_error($this->con);
        }
    }

    function insertmultiple($query){
        
        if(mysqli_multi_query($this->con,$query)){
                return "New records created!";
        }
        else{
            return "Error: ".$query."<br>".mysqli_error($this->con);
        }
    }

    function select($query){
        $query=linig($query);
        $result=mysqli_query($this->con,$query);
        //return $result."<br>";
        return $result;
    }

    function selectrows($query, $n){
        $query=linig($query);
        $data=array();
        
        $result=mysqli_query($this->con,$query);
        if(mysqli_num_rows($result)>0){
                if($n>0){
                    for($i=0;$i<$n;$i++){
                        $row=mysqli_fetch_assoc($result);
                        $data[]=$row;
                    }
                }
                else{
                    while($row=mysqli_fetch_assoc($result)){
                        $data[]=$row;
                    }
                }
                return $data;
        }
        else{
                return null;
            }     
    }

    function close(){
        mysqli_close($this->con);
        return "Closed!";
    }
}

//useful functions 
function isnull($var){
    if($var==""){
        return true;
    }
    else{
        return false;
    }
}

function linig($str){
    $rows=explode(" ",$str);
    $size=sizeof($rows);
    for($i=0;$i<$size;$i++){
      
        if($rows[$i]=="="){
            if($rows[$i-1]==$rows[$i+1]){
                $rows[$i-1]="";
                $rows[$i+1]="";
                $rows[$i]="";

            }
            if(strtolower($rows[$i-2])=="or"){
                $rows[$i-2]="";
            }
        }
            
         elseif(strpos($rows[$i],"=")>=1){
                $row=explode("=",$rows[$i]);
               
                if($row[0]==$row[1]){
                    $rows[$i]="";
                    if(strtolower($rows[$i-1])=="or"){
                        $rows[$i-1]="";
                    }
                }
            }
        }
    
    return str_replace(";","@@@@",trim(implode(" ",$rows)));

}

function removepecialchars($str){
    $str=str_replace("'","",$str);
    $str=str_replace("`","",$str);
    $str=str_replace(";","",$str);
    $str=str_replace("=","",$str);
    $str=str_replace("%","",$str);
    $str=str_replace("/","",$str);    
    $str=str_replace("~","",$str);    
    $str=str_replace("||","",$str); 
    $str=str_replace("|","",$str); 
    $str=str_replace("&","",$str); 
    $str=str_replace("&&","",$str); 
    $str=str_replace("==","",$str); 
    $str=str_replace("=","",$str); 
    $str=str_replace("^^","",$str); 
    $str=str_replace("^","",$str); 
    return trim($str);
}
function region_to_letter($val){
    $code="";
    switch($val){
        case 1:
            $code="A";
        break;
        case 2:
            $code="B";
        break;
        case 3:
            $code="C";
        break;
        case 4:
            $code="E";
        break;
        case 5:
            $code="F";
        break;
        case 6:
            $code="G";
        break;
        case 7:
            $code="H";
        break;
        case 8:
            $code="I";
        break;
        case 9:
            $code="J";
        break;
        case 10:
            $code="K";
        break;
        case 11:
            $code="L";
        break;
        case 12:
            $code="M";
        break;
        case 13:
            $code="D";
        break;
        case 14:
            $code="N";
        break;
        case 15:
            $code="O";
        break;
        case 16:
            $code="P";
        break;
        case 17:
            $code="Q";
        break;
       
        default:
            $code="AB";
        break;
    }
    return $code;
}
function region_decode($val){
    $code="";
    switch($val){
        case "A":
            $code=1;
        break;
        case "B":
            $code=2;
        break;
        case "C":
            $code=3;
        break;
        case "E":
            $code=4;
        break;
        case "F":
            $code=5;
        break;
        case "G":
            $code=6;
        break;
        case "H":
            $code=7;
        break;
        case "I":
            $code=8;
        break;
        case "J":
            $code=9;
        break;
        case "K":
            $code=10;
        break;
        case "L":
            $code=11;
        break;
        case "M":
            $code=12;
        break;
        case "D":
            $code=13;
        break;
        case "N":
            $code=14;
        break;
        case "O":
            $code=15;
        break;
        case "P":
            $code=16;
        break;
        case "Q":
            $code=17;
        break;
       
        default:
            $code=0;
        break;
    }
    return $code;
}
function get_string_at($str,$at){
    $word=explode("-",$str);
    $result="";
    $size=sizeof($word);
    if($size<=$at){
        $result=$word[$size-1];
    }else{
        $result=$word[$at];
    }
    return $result;
}
function officecode(){
    $regid= $_SESSION["region_id"];
    
    return region_to_letter($regid);

}
function abreviate($str,$num_char){
    $word= explode(" ",$str);
    $size=sizeof($word);
    $abreviate="";
    if($size>1){
        if($size>=$num_char){
            for($i=0;$i<$num_char;$i++){
                $chars=str_split($word[$i]);
                $abreviate=$abreviate.$chars[0];
            }
        }
        else{
            for($i=0;$i<$size;$i++){
                $chars=str_split($word[$i]);
                $abreviate=$abreviate.$chars[0];
            }
        }
        
       
    }
    else{
        $chars=str_split($word[0]);
        $n=sizeof($chars);
        if($n>=$num_char){
            for($i=0;$i<$num_char;$i++){
                $abreviate=$abreviate.$chars[$i];
            }
        }else{
            $abreviate=$chars[0];
        }
       
      
    }
    return strtoupper($abreviate);
}
function shorten($txt){
    $arr=explode(" ",$txt);
    $size=sizeof($arr);
    $str="";
    if($size>1){
        $str=$arr[0]." ".$arr[1];
    }
    else{
        $str=$txt;
    }
    return $str;
}
function replace($chars,$orig){
    $elems=explode("%",$chars);
    $val=$orig;
    foreach($elems as $elem){
        $val=str_replace($elem,$elem." ",$val);
    }
    return $val;
}
//loading values into dropdown <select><option>
function loadlist($str, $col, $header,$label){
    $db= new Database();
    $db->connect();
    $data=$db->selectrows($str,0);
    
    if($data!=null){
        echo "<li id='".$header."' style='list-style-type: none; font-weight: bold;'><p>".$label."</p></li>";
        $keys=",%.%:%/%\%-%_%)%(";
        foreach($data as $row){
           echo "<li> ".replace($keys,shorten($row[$col[0]]))."<br>
           (".replace($keys,shorten($row[$col[1]]))."):&nbsp".replace($keys,shorten($row[$col[2]]))."</li>";
        }
    
    }
}
function total($str, $col){
    $db= new Database();
    $db->connect();
    $data=$db->selectrows($str,0);
    
    if($data!=null){
        foreach($data as $row){
          echo "<p style=' width:100%;margin: auto; text-align:center;'>Total: ".$row[$col]."</p>";
        }
    
    }
    else{
        echo "No items as of yet";
    }
}
function loadtable($str,$headers,$chkbox,$all,$class){//paramerters are as follows:
    //$str id thhe sql command, 
    //$headers(array): are the header that shows on the table column head 
    //$chkbox is a boolean to add checkboxes at the begiining of each row
      //$all is a  boolean variable if true will add check all at the very first table header cell
    //the class is an array: 
    //1st elem is the class header of checkbox for check all and the second elem 
    //is the class name for each checkbox in the table rows
   $db =new Database();
    $db->connect();
    $data=$db->selectrows($str,0);
    if($data!=null){
        echo "<tr>";
        $chk=$chkbox;
        foreach($headers as $header){
            if($header==" "){
                echo"<th>";
                if($all){
                    echo"<input type='checkbox' 
                    class='".$class[0]."' >";
                }
               
            }
            else{
                echo "<th>".$header;
            } 
            echo"</th>";
        } 
        echo "</tr>";
        $j=1;
        foreach($data as $elem){
           $i=0;
          
            echo "<tr id='".$j."'>";
            $size=sizeof($elem);
           
            foreach($elem as $e){
                
                if($chkbox){
                    if($i==0){
                        echo"<td><input type='checkbox' 
                        class='".$class[1]."'  value='".$e."' ></td>";    
                    }
                    $chkbox=false; 
                }
                else{
                    if($e=='activation'){
                        $e="For ".$e;
                    }
                       
                    if($i==$size-1){
                        echo"<td class='last'>".$e."</td>";
                    }else{
                        echo"<td>".$e."</td>";
                    }
                }
                $i++;          
            }
            $chkbox=$chk;
            $j++;
            echo "</tr>";
        }
    }
}
function office_combobox(){
	echo "<select id='office' name='office' >";
							
         $str="SELECT id,office_name FROM office";
         loadropdown($str,"id","office_name","Offices");//function for loading values into the dropdown accepts sql command and name of columns 
							
	echo"</select>";
}
function loadropdown1($str,$col1,$col2){//the second  dropdown has others 
    
    $db = new Database();
    $db->connect();

    $data=$db->selectrows($str,0);
   
    if($data!=null){
        echo"<option value=0>Select from Options Below</option>";
        foreach($data as $d){
            echo "<option value='".$d[$col1]."'>".$d[$col2]."</option>";
        }
    }
    else{
        echo"<option value='0'>Select below</option>";
    }
    echo"<option value='others'>Others</option>";
    
}
function loadropdown($str,$col1,$col2,$from){
    
    $db = new Database();
    $db->connect();
    $data=$db->selectrows($str,0);
   
    if($data!=null){
        echo"<option value=0>Select from Options Below</option>";
        foreach($data as $d){
            echo "<option value='".$d[$col1]."'>".$d[$col2]."</option>";
        }
    }
    else{
        echo"<option value='0'>Select from ".$from."</option>";
    }
}
function loadintodb(){
    require_once "PHPExcel/Classes/PHPExcel.php";
    $tmpfname = "RESOURCES/geo_map.xlsx";
    $excelReader = PHPExcel_IOFactory::createReaderForFile($tmpfname);
    $excelObj = $excelReader->load($tmpfname);
    $worksheet = $excelObj->getSheet(0);
    $lastRow = (int)$worksheet->getHighestRow();
    $lastCol=$worksheet->getHighestColumn();
    
     $excel_arr=$worksheet->toArray(null,true,true,false);//parameters are as follows what data should be returend if there are no data in sheet, weather to evaluate formulas in sheets, weaher the data will have decimal, weather the index will be excalty same with the sheets if value is true the index should be row[1]['A] is the first element else row[0][0]
    //echo $excel_arr[0][0];
    //$cast_lastrow=(int)$lastRow;
    //echo "<br>".$lastCol;
    $db=new Database();
    $db->connect();
   $num=1;
   $reg="";
   $prov="";
   $muni="";
   $brgy="";
   $regid=1;
   $provid=1;
   $munid=1;
   $brgyid=1;
   $queries=array();
   
  //echo $lastRow."<br>";
    for ($row = 1; $row < 42059; $row++) {
        
        /*012801001 -0- 01 -2- REGION I (ILOCOS REGION) -4- 28 -6- ILOCOS NORTE -7- PH012801000 -8- 01 -11- 
        ADAMS -12- PH012801001 -13- 001 -14 Adams (Pob.) -15 18.453399 -16 0 -17-*/
      
        $data=array("geocode"=>$excel_arr[$row][0],"regcode"=>$excel_arr[$row][2],"regname"=>$excel_arr[$row][4],
                    "provcode"=>$excel_arr[$row][6],"provname"=>$excel_arr[$row][7],"municode"=>$excel_arr[$row][11],
                    "muniname"=>$excel_arr[$row][12],"brgycode"=>$excel_arr[$row][14],"brgyname"=>$excel_arr[$row][15],
                     "lat"=>$excel_arr[$row][16],"long"=>$excel_arr[$row][17]);
        /*echo $excel_arr[$row][0]." -0- ".$excel_arr[$row][2]." -2- ".
        $excel_arr[$row][4]." -4- ".$excel_arr[$row][6]." -6- ".
        $excel_arr[$row][7]." -7- ".$excel_arr[$row][8]." -8- ".
        $excel_arr[$row][11]." -11- ".$excel_arr[$row][12]." -12- ".
        $excel_arr[$row][13]." -13- ".        $excel_arr[$row][14]." -14- ".$excel_arr[$row][15]." -15- ".
        $excel_arr[$row][16]." -16- ".$excel_arr[$row][17]." -17-<br>";*/
        if($reg!=$data["regcode"]){
            $query="insert into region (id,reg_code,name,geocode)
            values (".$regid.",'".$data["regcode"]."','".$data["regname"]."','".$data["regcode"]."0000000')";
             //echo "<br><br>".$num." ".$query."<br>";
             array_push($queries,$query);
             $reg=$data["regcode"];
               $db->insert($query);
              $regid++;
              $num++;
            
        }
       if($prov!=$data["provcode"]){
        $query="insert into province (id,reg_id,prov_code,name, geocode)
        values (".$provid.",".($regid-1).",'".$data["provcode"]."',
        '".$data["provname"]."','".$data["regcode"].$data["provcode"]."00000')";
         //echo $num." ".$query."<br>";
         $prov=$data["provcode"];
       $db->insert($query);
       array_push($queries,$query);
        $provid++;
        $num++;
       }
       if($muni!=$data["municode"]){
       $query="insert into municipality (id,province_id, muni_code, name, geocode)
       values (".$munid.",".($provid-1).",'".$data["municode"]."',
       '".$data["muniname"]."','".$data["regcode"].$data["provcode"].$data["municode"]."000')";
        //echo $num." ".$query."<br>";
        $muni=$data["municode"];
         $db->insert($query);
         array_push($queries,$query);
       $munid++;
       $num++;
       }
        $query="insert into barangay (id,muni_id,brgy_code, name, `long`,lat,geocode)
        values (".$brgyid.",".($munid-1).",'".$data["brgycode"]."',
        '".$data["brgyname"]."','".$data["long"]."','".$data["lat"]."','"
        .$data["regcode"].$data["provcode"].$data["municode"].
        $data["brgycode"]."')";
        // echo $num." ".$query."<br>";
         array_push($queries,$query);
      $db->insert($query);
       $brgyid++;

        $brgy=$data["brgycode"];  
        $num++;
    }
    echo $queries[43807]." ".$num;
  $db->close();
}


function generate_password($len){
    $pass="";
    $aplhabet="abcdefghijklmnopqrstuvwxyz";
    
    $chars="1234567890$@#*1234567890".$aplhabet.strtoupper($aplhabet);
    $char=str_split($chars);
    $size=sizeof($char);
    for($i=0;$i<$len;$i++){
        $pass.=$char[rand(0,$size-1)];
    }
    return $pass;
}
function test(){
    $mydb = new Database();
    $mydb->connect();
    $id="1";
   $str="select max(id) as id from officials";
        $data=$mydb->selectrows($str,0);
        if($data!=-null){
            $id=$data[0]["id"];
        }
    return $id;
}

define("encryption_method", "AES-128-CBC");
define("key", "nO2T0fp6D@*P_yd6cmVUw$0oC");
function encrypt($data) {
    $key = key;
    $plaintext = $data;
    $ivlen = openssl_cipher_iv_length($cipher = encryption_method);
    $iv = openssl_random_pseudo_bytes($ivlen);
    $ciphertext_raw = openssl_encrypt($plaintext, $cipher, $key, $options = OPENSSL_RAW_DATA, $iv);
    $hmac = hash_hmac('sha256', $ciphertext_raw, $key, $as_binary = true);
    $ciphertext = base64_encode($iv . $hmac . $ciphertext_raw);
    return $ciphertext;
}
function decrypt($data) {
    $key = key;
    $c = base64_decode($data);
    $ivlen = openssl_cipher_iv_length($cipher = encryption_method);
    $iv = substr($c, 0, $ivlen);
    $hmac = substr($c, $ivlen, $sha2len = 32);
    $ciphertext_raw = substr($c, $ivlen + $sha2len);
    $original_plaintext = openssl_decrypt($ciphertext_raw, $cipher, $key, $options = OPENSSL_RAW_DATA, $iv);
    $calcmac = hash_hmac('sha256', $ciphertext_raw, $key, $as_binary = true);
    if (hash_equals($hmac, $calcmac))
    {
        return $original_plaintext;
    }
}
function reroute($level,$destination){//$level is for the access level, 2nd paramenter is for the destination of reroute if $_SESSION["auth_level"]<=$elvel 
   
    if(intval($_SESSION["auth_level"])<=$level){
        header("Location:".$destination);
      }
}
//echo decrypt('BoPCtJfdU04pA8CJODx8CK0aWduQiB8yJhilU/qmRVPpz1YijJ9inJoTimg9RcFgyNi3ofENxqryejKTz8CvoQ==');
//$db=new Database();
//echo test();
//echo $db->connect();
 //$str="Select * from log``in whe'''re BINARY password='admin123' or 1=1";
//echo abreviate("ACCESS POINT",2); 

//JS API
function get_session($name){
    if(isset($_SESSION[$name]))
    {
        return $_SESSION[$name];
    }
    else{
        return "false";
    }
}
?>