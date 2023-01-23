<?php
    include "../ALGO/codes.php";
    
    if(isset($_POST["filter_type"])){
        $db= new Database();
        $db->connect();

        $filter_type = $_POST["filter_type"];
        $data = $_POST["data"]; 
        $table_header = explode("%",$_POST["my_head"]);
        $table_columns = $_POST["my_columns"];
        $table_classes = explode("%",$_POST["my_classes"]);
        $chk = $_POST["chk"]=="true" ? true:false;
        $all_chk = $_POST["all_chk"]=="true" ? true:false;
        $sql ="";

        //switch case for filtration
        switch($filter_type){
            case "national":
                $sql = "Select $table_columns from hf_locations order by station_region desc";
                break;

            case "regional":
                $sql = "Select $table_columns from hf_locations where station_region=$data";
                break;

            case "provincial":
                $sql = "Select $table_columns from hf_locations where station_province=$data";
                break;

            case "status":
                $sql = "Select $table_columns from hf_locations where station_status=$data";
                break;

            case "open":
                $sql = "Select $table_columns from hf_locations where station_name like '%$data%'";
                break;
        }
       // echo $sql;
        loadtable($sql, $table_header, $chk, $all_chk, $table_classes);

    }
    else{
        echo "<script>window.location='../login.php';</script>";
    }

?>