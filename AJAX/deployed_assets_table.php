<?php
    include "../ALGO/codes.php";
    
    if(isset($_POST["office"])){
       
        $office=decrypt($_POST["office"]);
        $headers=explode("%",$_POST["headers"]);
        $class=$_POST["class"];
        $arr_data=explode("%",$office);//office_id and  officename in an array
        $mydb = new Database();
        $mydb->connect();
        $sql="SELECT  GROUP_CONCAT( `category` order by `category` SEPARATOR ', ') as category  ,
        GROUP_CONCAT( `serial` SEPARATOR ', ') as  `serial`,
       
       
         (Select barangay.name from barangay where id=i.brgy_id) as barangay,
       (Select municipality.name from municipality where municipality.id=i.muni_id) as municipality,
        (Select province.name from province where province.id=i.prov_id) as province,
       
        count(*) as `count` FROM deployed_assets_loc i where id=". $arr_data[0]." group by  brgy_id order by province asc";
       $data=$mydb->selectrows($sql,0);
     
       if($data!=null){

        echo "<table class='".$class."'><tr>";
            foreach($headers as $content){
            echo "<th>".$content;
            }
            foreach($data as $row){
                echo "<tr><td>".str_replace(";",";<br>",summarize_list($row["category"], $row["serial"],intval($row["count"])));
                echo"<td>".$row["province"].", ".$row["municipality"].", ".$row["barangay"]."<td>".$row["count"];
            }
            echo "</table>";
       }
       else{
        echo "<p style='font-size:30px;'>NO DATA AVAIALABLE</p>";
       }
      

    }
    else{
        echo "<script>window.location='../login.php';</script>";
    }

?>  