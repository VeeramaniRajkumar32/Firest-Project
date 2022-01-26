<?php 
	include('include/dbconn.php');
	
	if(isset($_POST['save'])){
	$salary = $_POST['salary'];

		$sql = "INSERT INTO salary(salary) VALUES ('$salary')";
		if($conn->query($sql) === TRUE){

		 } else{
        //     echo "failed";
		}
	} 
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Add Salary</title>
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
          <li class="breadcrumb-item active">Add Salary</li>
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
                        <label class="col-form-label">Salary </label>
                            <input class="input-group-text" type="text" name="salary" >
                        </div>
                    
                        <div class="col-xxl-6 col-md-6 mt-5">
                            <button class="btn btn-success"  name="save">Add</button>
                        </div>
                     </div>
                </div>
				<div class="card col-lg-12">
						<table class="table datatable" >
							<thead>
								<tr>
									<th scope="col" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">S.NO</th>
                  					<th scope="col" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Salary</th>
									<th scope="col" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Action</th>
								</tr>
							</thead>
							<tbody>
									<?php 
									$sql1 = "SELECT * FROM salary";
									$result = $conn->query($sql1);
									$i=1;
									while($row=$result->fetch_assoc()){
										$category_id = $row['salary'];

										// $sql2 = "SELECT * FROM categores WHERE id='$category_id'";
										// $result2 = $conn->query($sql2);
										// $row1=$result2->fetch_assoc()
									?>
									<tr>
										<td><?php echo $i++; ?></td>
										<td><?php echo $row['salary']; ?></td>  
										<!-- <td><?php echo $row['product_name']; ?></td> -->
										<td>
											<a href="edit_salary.php?id=<?php echo $row['id'] ?>">
											<button type="button" class="btn btn-success">
												Edit
											</button>
											</a> 
											<a href="delete_salary.php?id=<?php echo $row['id'] ?>">
											<button type="button" class="btn btn-danger">
												Delete
											</button>	
											</a>
											</td>

										<?php   
										}
                  						?>
									</tr>
							</tbody>
						</table>
            </form>
        <!-- </div> -->
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <!-- <div class="copyright">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
       All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
    <!-- </div>  -->

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