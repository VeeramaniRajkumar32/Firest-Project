<?php
    include('include/dbconn.php'); 

    $id = $_REQUEST['id'];        
       
    $sql = "SELECT * FROM salary WHERE id='$id'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
 
    if(isset($_POST['save'])){ 
        $name = $_POST['name'];
        // $image = $_POST['image'];

        // $imageurl = $_FILES['image']['name'];

        // $resumetype = Pathinfo($imageurl,PATHINFO_EXTENSION);
        // $resumename = "images/".$id.".".$resumetype;
        // $allowTypes = array('jpg','JPG','png','PNG','jpeg','JPEG','gif','GIF','pdf','PDF');
        // if(in_array($resumetype, $allowTypes))
        // {
        //     if(move_uploaded_file($_FILES["image"]["tmp_name"], $resumename))
        //     {
              $sql1="UPDATE salary SET salary = '$name' WHERE `id` = '$id'";
              if($conn->query($sql1) === TRUE){
                  header("Location: salary.php");
              } else{
                echo $sql1;
              }
        //     }else{
        //         echo  "file do not move";
        //     }
        // }else{
        //     echo  $resumename;
        // }
        
    } 
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Edit-salary</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.2.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
<?php include('include/header.php') ?>
  <!-- End Header -->

  <!-- ======= Sidebar ======= -->
<?php include('include/sidebar.php') ?>
  <!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Salary</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
          <li class="breadcrumb-item active">Salary</li>
          <li class="breadcrumb-item active">Edit salary</li>
        </ol> 
      </nav> 
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <!-- <div class="row"> -->
            <form class="row g-3 " method="post" enctype="multipart/form-data">
                <!-- Left side columns -->
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-xxl-6 col-md-6">
                        <label class="col-form-label">Salary</label>
                            <input class="input-group-text" type="text" name="name" value="<?php echo $row['salary'];?>" >
                        </div>
                       
                        <div class="col-xxl-6 col-md-6 mt-4">
                            <button class="btn btn-success"  name="save">Add</button>
                        </div>
                     </div>
                </div>
            </form>
        <!-- </div> -->
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <!-- <footer id="footer" class="footer"> -->
    

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>