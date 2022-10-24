<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <!-- CSS only -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        
    <title>Edit Profile</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script>
          // Listener for page 
          $(document).ready(function(){
            
            // Checks whether an image is selected
            $("#myFile").change(function(){
                if($(this).val()){
                    $("#fileUpload").attr('disabled',false);
                }
            });
            
            // Goes back to User Profile page
            $("#backbutton").click(function(){
              window.location = "userprofile.php";
            });

            // [Button] Substitute for the input form
            $("#fileChoose").click(function(){
                $("#myFile").click();
            });        
          });  

        </script>
</head>

<style>

body{
    background-color:#f2f6fc;
    color:#69707a;
}

.file-upload {
    display: inline-flex;
    align-items: center;
    font-size: 15px;
}
.file-upload-input {
    display: none;
}
.file-choose-button {
   
    outline: none;
    background-color: #645f65;
    color: #fff;
    margin-right: 5px;
}
.file-upload-button {
    
    outline: none;
    background-color: #2d2c2e;
    color: #fff;
    margin-left: 5px;
}
.img-account-profile {
    height: 10rem;
}
.rounded-circle {
    border-radius: 50% !important;
}
.card {
    box-shadow: 0 0.15rem 1.75rem 0 rgb(33 40 50 / 15%);
}
.card .card-header {
    font-weight: 500;
}
.card-header:first-child {
    border-radius: 0.35rem 0.35rem 0 0;
}
.card-header {
    padding: 1rem 1.35rem;
    margin-bottom: 0;
    background-color: rgba(33, 40, 50, 0.03);
    border-bottom: 1px solid rgba(33, 40, 50, 0.125);
}
.form-control, .dataTable-input {
    display: block;
    width: 100%;
    padding: 0.875rem 1.125rem;
    font-size: 0.875rem;
    font-weight: 400;
    line-height: 1;
    color: #69707a;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #c5ccd6;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    border-radius: 0.35rem;
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

.nav-borders .nav-link.active {
    color: #0061f2;
    border-bottom-color: #0061f2;
}
.nav-borders .nav-link {
    color: #69707a;
    border-bottom-width: 0.125rem;
    border-bottom-style: solid;
    border-bottom-color: transparent;
    padding-top: 0.5rem;
    padding-bottom: 0.5rem;
    padding-left: 0;
    padding-right: 0;
    margin-left: 1rem;
    margin-right: 1rem;
}   
</style>

<body>
    <?php
        include "ALGO/codes.php";
        include "header.php";
    ?>

<?php 
        error_reporting(0);
    
        $msg = "";

        $db = new Database();
        
        // If upload button is clicked ...
        if (isset($_POST["#fileUpload"])) {
            
            $filename = $_FILES["uploadfile"]["name"];
            $tempname = $_FILES["uploadfile"]["tmp_name"];
            $folder = "./profile_images/" . $filename;
        
            $db = mysqli_connect("localhost", "lowe", "admin123", "assets");
        
            // Get all the submitted data from the form
            $sql = "INSERT INTO profile_image (filename) VALUES ('$filename')";
        
            // Execute query
            mysqli_query($db, $sql);
        
            // Now let's move the uploaded image into the folder: image
            if (move_uploaded_file($tempname, $folder)) {
                echo "<h3>  Image uploaded successfully!</h3>";
            } else {
                echo "<h3>  Failed to upload image!</h3>";
            }
        }
?>

    <div class="container-xl px-4 mt-4">
        <hr class="mt-0 mb-4">
        <div class="row">
            <div class="col-xl-4">
                <!-- Profile picture card-->
                <div class="card mb-4 mb-xl-0">
                    <div class="card-header">Profile Picture</div>
                    <div class="card-body text-center">
                        <!-- Profile picture image-->
                        <img class="img-account-profile rounded-circle mb-2" src="http://bootdey.com/img/Content/avatar/avatar1.png" alt="">
                        <!-- Profile picture help block-->
                        <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>
                        <!-- Buttons for choosing and uploading image-->
                        <div class="file-upload">
                            <input type="file" class="file-upload-input" id="myFile" name="uploadfile">
                            <button type="button" class="btn file-choose-button" id="fileChoose">Choose Image</button>
                            <button type="submit" class="btn file-upload-button" id="fileUpload" disabled>Upload</button>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="col-xl-8">
                <!-- Account details card-->
                <div class="card mb-4">
                    <div class="card-header">Account Details</div>
                    <div class="card-body">
                        <form>
                            <!-- Username form -->
                            <div class="mb-3">
                                <label class="small mb-1" for="inputUsername">Username</label>
                                <input class="form-control" id="inputUsername" type="text" value=<?php echo $_SESSION["uname"]?>>
                            </div>
                            <!-- Form Row-->
                            <div class="row gx-3 mb-3">
                                <!-- First name form -->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputFirstName">First name</label>
                                    <input class="form-control" id="inputFirstName" type="text" value=<?php echo $_SESSION["fname"]?>>
                                </div>
                                <!-- Last name form -->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputLastName">Last name</label>
                                    <input class="form-control" id="inputLastName" type="text" value=<?php echo $_SESSION["lname"]?>>
                                </div>
                            </div>
                            <!-- Position form -->
                            <div class="row gx-3 mb-3">
                                <!-- Position form -->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputOrgName">Position/Title</label>
                                    <input class="form-control" id="inputOrgName" type="text" value=<?php echo $_SESSION["position"]?>>
                                </div>
                                <!-- Location form -->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputLocation">Office Assignment</label>
                                    <input class="form-control" id="inputLocation" type="text" value=<?php echo $_SESSION["officename"]?>>
                                </div>
                            </div>
                            <!-- Email address form -->
                            <div class="mb-3">
                                <label class="small mb-1" for="inputEmailAddress">Email address</label>
                                <input class="form-control" id="inputEmailAddress" type="email" value=<?php echo $_SESSION["login_email"]?>>
                            </div>
                            <!-- Address form-->
                            <div class="mb-3">
                                <label class="small mb-1" for="inputEmailAddress">Address</label>
                                <input class="form-control" id="inputEmailAddress" type="email" value=<?php echo $_SESSION["user_address"]?>>
                            </div>
                            
                            <div class="row gx-3 mb-3">
                                <!-- Phone Number form -->
                                    <label class="small mb-1" for="inputPhone">Phone number</label>
                                    <input class="form-control" id="inputPhone" type="tel" value=<?php echo $_SESSION["user_mobile"]?>>
                            </div>
                            <!-- Save changes button-->
                            <button class="btn btn-primary" style="border: none" type="submit">Save changes</button>
                            <button class="btn btn-danger"  style="border: none" type="button" id="backbutton">Back</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

   
</body>


</html>