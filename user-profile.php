<?php
    include('include/connection.php');
    $conn = new dbConnection;

    if(isset($_POST['save'])){
        $name = $_POST['name'];
        $date = $_POST['date'];
        $id = $_POST['rotary_id'];
        $email = $_POST['email'];
        $phone_number = $_POST['phone_number'];
        $whatsapp = $_POST['whatsapp'];
        $blood = $_POST['blood'];
        $position = $_POST['position'];
        $business = $_POST['business'];
        $address = $_POST['address'];

        $photo = $_FILES['photo']['name'];
        
        $query = "INSERT INTO profile (photo,name,birth_day,rotary_id,email,phone_number,whatsapp_number,blood_group,position,business,address) VALUES ('$photo','$name','$date','$id','$email','$phone_number','$whatsapp','$blood','$position','$business','$address')";
        $sql = $conn->query($query)->execute();
        if($sql['status']){
            $query1 = "SELECT * FROM profile ORDER BY id DESC LIMIT 1";
            $sql1 = $conn->query($query1)->execute();
            if($sql1['status']){
                $result1 = $sql1['body'];
                $profileTable = $result1->fetch_assoc();

                $received_id = $profileTable['id'];
                
                $resumetype = pathinfo($photo,PATHINFO_EXTENSION);
                $resumename = "upload/".$received_id.".".$resumetype ;
                $allowTypes = array('jpg','JPG','png','PNG','jpeg','JPEG','gif','GIF','pdf','PDF');
                if(in_array($resumetype, $allowTypes)){
                    if(move_uploaded_file($_FILES["photo"]["tmp_name"], $resumename)){
                        $query2 = "UPDATE profile SET photo = '$resumename' WHERE id = '$received_id'";
                        $sql2 = $conn->query($query2)->execute();
                        if($sql2['status']){
                            header("location: user_profile.php?id=$received_id");
                        }
                    // } else{
                    //     echo "not move";
                    //     echo $query1;
                    }
                // } else {
                //     echo $query1 ;
                    
                }
            // } else {
            //     echo $query1;
            }

        // } else {
        //     echo $query;
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Rotary - User Register </title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link rel="stylesheet" type="text/css" href="plugins/dropify/dropify.min.css">
    <link href="assets/css/users/account-setting.css" rel="stylesheet" type="text/css" />
    <!--  END CUSTOM STYLE FILE  -->
</head>
<body class="sidebar-noneoverflow">
    
    <!--  BEGIN NAVBAR  -->
    <?php include('include/header.php')?>
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="cs-overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN SIDEBAR  -->
        <?php include('include/sidebar.php')?>
        <!--  END SIDEBAR  -->

        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">                
                    
                <div class="account-settings-container layout-top-spacing">
                
                    <div class="account-content">
                        <div class="scrollspy-example" data-spy="scroll" data-target="#account-settings-scroll" data-offset="-100">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                                    <form id="general-info" method="POST" class="section general-info" enctype="multipart/form-data">
                                        <div class="info">
                                            <h6 class="">Register</h6>
                                            <div class="row">
                                                <div class="col-lg-11 mx-auto">
                                                    <div class="row">
                                                        <div class="col-xl-12 col-lg-12 col-md-8 mt-md-0 mt-4">
                                                            <div class="form">
                                                                <div class="row">
                                                                    <div class="col-sm-6">
                                                                        <div class="form-group">
                                                                            <label for="fullName">Full Name</label>
                                                                            <input type="text" class="form-control mb-4" name="name" id="fullname" placeholder="Full Name" required value="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <label class="dob-input">Profile image</label>
                                                                        <input type="file" id="input-file" name="photo" class="form-control mb-4"  required  >
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                        <label class="dob-input">Date of Birth</label>
                                                                        <input type="date" name="date" class="form-control mb-4" id="date" placeholder="Date Of Birth" required value="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="country">ID </label>
                                                                            <input type="text" name="rotary_id" class="form-control mb-4" id="id" placeholder="ID" required value="" >
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="email">Email</label>
                                                                            <input type="email" name="email" class="form-control mb-4" id="email" placeholder="Write your email here" required value="">
                                                                        </div>
                                                                    </div>                                    
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="phone">Phone Number</label>
                                                                            <input type="text" name="phone_number" class="form-control mb-4" id="no" placeholder="Write your phone number here" required value="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="phone">WhatsApp Number</label>
                                                                            <input type="text" name="whatsapp" class="form-control mb-4" id="wno" placeholder="Write your WhatsApp number here" required value="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="location">Blood Group</label>
                                                                            <input type="text" name="blood" class="form-control mb-4" id="location" placeholder="Blood Group" required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="country">Position</label>
                                                                            <input type="text" name="position" class="form-control mb-4" id="id" placeholder="Position" required value="" >
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="website1">Business</label>
                                                                            <input type="text" name="business" class="form-control mb-4" id="business" placeholder="Write your Business Name here" required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label for="address">Address</label>
                                                                            <textarea class="form-control" name="address" id="address" placeholder="Address" rows="3"></textarea>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-10"></div>
                                                                    <div class="col-md-2">
                                                                        <div class="form-group">
                                                                        <div class="blockui-growl-message">
                                                                            <i class="flaticon-double-check"></i>&nbsp; Settings Saved Successfully
                                                                        </div>
                                                                            <input type="submit" id="multiple-messages" name="save" class="btn btn-primary">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- <div class="account-settings-footer">
                                
                                <div class="as-footer-container">

                                    <button id="multiple-reset" class="btn btn-warning">Reset All</button>
                                    <div class="blockui-growl-message">
                                        <i class="flaticon-double-check"></i>&nbsp; Settings Saved Successfully
                                    </div>
                                    <button id="multiple-messages" name="submit" class="btn btn-primary">Save Changes</button>

                                </div>

                            </div> -->
                        </div>

                    </div>
                </div>
        <!--  END CONTENT AREA  -->

            </div>
    <!-- END MAIN CONTAINER -->

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/app.js"></script>
    
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="assets/js/custom.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!--  BEGIN CUSTOM SCRIPTS FILE  -->

    <script src="plugins/dropify/dropify.min.js"></script>
    <script src="plugins/blockui/jquery.blockUI.min.js"></script>
    <!-- <script src="plugins/tagInput/tags-input.js"></script> -->
    <script src="assets/js/users/account-settings.js"></script>
    <!--  END CUSTOM SCRIPTS FILE  -->
</body>
</html>