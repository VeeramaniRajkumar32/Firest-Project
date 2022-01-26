<?php include('include/dbconn.php');

 if(isset($_POST['submit'])){
    $cname = $_POST['cname'];
    $cemail = $_POST['cemail'];
    $cnumber = $_POST['cnumber'];
    $logo = $_POST['logo'];
    $caddress = $_POST['caddress'];
    $desc = $_POST['desc'];    
    $password = $_POST['password'];
    
    $sql = "INSERT INTO companyreg(name,email,number,logo,address,description,password,status,twitter,facebook,instagram,linkedin) VALUES ('$cname','$cemail','$cnumber','$logo','$caddress','$desc','$password','0',' ',' ',' ',' ')";
    if($conn->query($sql) === TRUE){
      // echo "<h1>successfully</h1>";
      $sql = "SELECT * FROM companyreg ORDER BY id DESC LIMIT 1";
      $result = $conn->query($sql);
      $row = $result->fetch_assoc();
      $id = $row['id'];
       header("Location: company-profile.php?id=$id");
    } else{
      //echo "<h1>failed</h1>";
       echo $sql;
    } 
  // } else {
    // echo $sql;
  } 
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Company - Registeration </title>
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

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <img src="assets/img/logo.png" alt="">
                  <span class="d-none d-lg-block">NiceAdmin</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
                    <p class="text-center small">Enter your company details to create account</p>
                  </div>

                  <form class="row g-3 " method="POST">
                    <div class="col-12">
                      <label for="yourName" class="form-label">Company Name</label>
                      <input type="text" name="cname" class="form-control" id="yourName" required>
                      <div class="invalid-feedback">Please, enter your name!</div>
                    </div>

                    <div class="col-12">
                      <label for="yourEmail" class="form-label">Email</label>
                      <input type="email" name="cemail" class="form-control" id="yourEmail" required>
                      <div class="invalid-feedback">Please enter a valid Email adddress!</div>
                    </div>

                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Phone Number</label>
                      <div class="input-group has-validation">
                        <!-- <span class="input-group-text" id="inputGroupPrepend">@</span> -->
                        <input type="text" name="cnumber" class="form-control" id="yourUsername" required>
                        <div class="invalid-feedback">Please enter a Number!</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourName" class="form-label">Company Logo</label>
                      <input type="text" name="logo" class="form-control" id="yourName" required>
                      <div class="invalid-feedback">Please, enter your Company Logo</div>
                    </div>

                    <div class="col-12">
                      <label for="yourName" class="form-label">Company Adddress</label>
                      <input type="text" name="caddress" class="form-control" id="yourName" required>
                      <div class="invalid-feedback">Please, enter your Company Adddress</div>
                    </div>

                    <div class="col-12">
                      <label for="yourName" class="form-label">Description</label>
                      <input type="text" name="desc" class="form-control" id="yourName" required>
                      <div class="invalid-feedback">Please, enter your Description</div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="yourPassword" required>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>

                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" required>
                        <label class="form-check-label" for="acceptTerms">I agree and accept the <a href="#">terms and conditions</a></label>
                        <div class="invalid-feedback">You must agree before submitting.</div>
                      </div>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit" name="submit" >Create Account</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Already have an account? <a href="pages-login.php">Log in</a></p>
                    </div>
                  </form>

                </div>
              </div>

              <!-- <div class="credits">
                All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
                <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
              </div> 

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <!-- <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a> -->

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
  <!-- <script src="assets/js/main.js"></script> 

</body>

</html>