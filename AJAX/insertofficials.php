<?php

    include "../ALGO/codes.php";
    
    if(isset($_POST["fname"])){
        $mydb = new Database();
        $mydb->connect();
        $fname=removepecialchars($_POST["fname"]);
        $lname=removepecialchars($_POST["lname"]);
        $mname=removepecialchars($_POST["mname"]);
        $position=removepecialchars($_POST["position"]);
        $office=removepecialchars($_POST["office"]);
        $contact=removepecialchars($_POST["contact"]);
        $email=removepecialchars($_POST["email"]);
        $gender=removepecialchars($_POST["gender"]);
        $auth_level=removepecialchars($_POST["auth_level"]);
        $id="1";
        $str="select max(id) as id from officials";
        $data=$mydb->selectrows($str,0);
        if($data!=-null){
            $id=$data[0]["id"];
            $id++;
        }

        $today=date("Y-m-d H:m:s");
        $str="insert into officials (id,office_id,fname,mname,lname,position,contact,email,date_added,gender)
        values(".$id.",".$office.",'".$fname."','".$mname."','".$lname."','".$position."','".$contact."','".$email."','".$today."','".$gender."')";
        $username=strtolower($fname.$lname);
   
       $msg= $mydb->insert($str);
       $str="insert into login (official_id, username,  `password`,`status`) values(".$id.",'". $username."','".encrypt(generate_password(8))."','activation')";
       $msg2= $mydb->insert_no_linig($str);
      echo $msg." ".$msg2;
    }
    else{
        echo "<script>window.location='../login.php';</script>";
    }

?>