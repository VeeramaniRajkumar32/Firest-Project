<?php
include('include/dbconn.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard-Admin</title>
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
  <?php include('include/admin/header.php') ?>
  <!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <?php include('include/admin/sidebar.php') ?>
  <!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
		<div class="row">
			<!-- Left side columns -->
			<div class="col-lg-8">
			<div class="row">
				<!-- Sales Card -->
				<div class="col-xxl-8 col-xl-12 card info-card revenue-card">
					<div class="row">
						<div class="col-xxl-8 col-xl-8 col-md-8">
						<label class="col-form-label">Select job Category</label>
						<select class="form-select" aria-label="Default select example" name="category">

							<?php $sql2 = "SELECT DISTINCT jcategory FROM jobcategory";
							$result2 = $conn->query($sql2);
							while ($row2 = $result2->fetch_assoc()) {
							?>
							<option value="<?php echo $row2['id']; ?>"><?php echo $row2['jcategory']; ?></option>
							<?php } ?>
						</select>
						</div> 
						<div class=" col-xxl-4 col-xl-4 col-md-4 mt-4"> 
						<a href="category1.php" ><button class="btn btn-primary m-2">Add Category</button></a>
						</div>
					</div>
				</div>

				<!-- Customers Card -->
				<div class="col-xxl-4 col-xl-12 card info-card revenue-card p-3">
					<div class=" row  col-12 pt-2">
						<div class="input-group has-validation">
							<input type="text" name="location" class="form-control" placeholder="Job Location" required>
						</div> 
						<div class="row p-3">
							<div class="col-4">
								<label class="col-form-label">Job Type :</label>
							</div>	
							<div class="form-check col-4 mt-2">
								<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1"checked>
								<label class="form-check-label" for="flexRadioDefault1">
									Full Time
								</label>
							</div>
							<div class="form-check col-4 mt-2">
								<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" >
								<label class="form-check-label" for="flexRadioDefault2">
									Part Time
								</label>
							</div>	
						</div>
						<div class="col-4">
							<label class="col-form-label">Job Salary :</label>
							</div>
						<div class="col-8">
							<select class="form-select" aria-label="Default select example">
								<option selected>0 - 10,000</option>
								<option value="1">10,000 - 25,0000</option>
								<option value="2">25,000 - 50,000</option>
								<option value="3">50,000 - 1,00,000</option>
								<option value="3">1,00,000 above</option>
							</select>
						</div>
						<div class="col-4 p-3">
							<label class="col-form-label">Skills :</label>
							</div>
						<div class="col-8 p-3">
							<input  type="text" class="form-control" name="skills" placeholder="Enter Your Skills">
						</div>
					</div>
					<div class="col-6">
					
					</div>
				</div>
				<!-- End Customers Card -->
				<!-- <h3>JOBS</h3> -->
				<?php
				// $sql = "SELECT * FROM company_new_job";
				// $result = $conn->query($sql);
				// while($row=$result->fetch_assoc()){
				?>
				<!-- jobs -->
				<!-- <div class="col-6">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title"><?php echo $row['jobtype']; ?></h5>
							<div class="activity">
								<div class="row">
									<div class="col-6">
									<p><b>location :</b> <?php echo $row['loacation']; ?> </p>
									</div>
									<div class="col-6">
									<p><b>vacencies : </b> <?php echo $row['vacencies']; ?> </p>
									<?php echo $row['']; ?> 
									</div>
									<div class="col-12">
									<p><b>description :</b> <?php echo $row['description']; ?> </p>
									</div>
									<div class="col-12">
									<p> <b>Skills : </b> <?php echo $row['skill']; ?> </p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div> -->
				<?php // }?><!-- End Recent Sales -->

				<!-- <h3>JOBS</h3> -->
				<?php
				$sql = "SELECT * FROM company_new_job";
				$result = $conn->query($sql);
				while($row=$result->fetch_assoc()){
				?>
				<!-- Recent Sales -->
				<!-- <div class="col-6">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title"><?php echo $row['jobtype']; ?></h5>
							<div class="activity">
								<div class="row">
									<div class="col-6">
									<p><b>location :</b> <?php echo $row['loacation']; ?> </p>
									</div>
									<div class="col-6">
									<p><b>vacencies : </b> <?php echo $row['vacencies']; ?> </p>
									<?php echo $row['']; ?> 
									</div>
									<div class="col-12">
									<p><b>description :</b> <?php echo $row['description']; ?> </p>
									</div>
									<div class="col-12">
									<p> <b>Skills : </b> <?php echo $row['skill']; ?> </p>
									</div>
									
								</div>
							</div>
						</div>
					</div>
				</div> -->
				<?php }?>
				
				<!-- Top Selling -->
				<!-- <div class="col-12">
				<div class="card top-selling">
				</div>
				</div> -->
				<!-- End Top Selling -->
			</div>
			</div>
			<!-- End Left side columns -->
			<div class="card col-lg-12">
						<h3>Job Seeker Table</h3>
						<table class="table datatable" >
							<thead>
								<tr>
									<th scope="col" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">S.NO</th>
                  					<th scope="col" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Name</th>
									<th scope="col" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Email</th>
									<th scope="col" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Number</th>
									<th scope="col" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Exprience</th>
									<th scope="col" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Address</th>		
									
								</tr>
							</thead>
							<tbody>
									<?php 
									$sql1 = "SELECT * FROM jobseeker";
									$result = $conn->query($sql1);
									$i=1;
									while($row=$result->fetch_assoc()){
										$category_id = $row['id'];

										// $sql2 = "SELECT * FROM categores WHERE id='$category_id'";
										// $result2 = $conn->query($sql2);
										// $row1=$result2->fetch_assoc()
									?>
									<tr>
										<td><?php echo $i++; ?></td>
										<td><?php echo $row['name']; ?></td>  
										<td><?php echo $row['email']; ?></td>
										<td><?php echo $row['number']; ?></td>
										<td><?php echo $row['experience']; ?></td>
										<td><?php echo $row['address']; ?></td>
										<!-- <td>
											<a href="edit_skills.php?id=<?php echo $row['id'] ?>">
											<button type="button" class="btn btn-success">
												Edit
											</button>
											</a> 
											<a href="delete_skills.php?id=<?php echo $row['id'] ?>">
											<button type="button" class="btn btn-danger">
												Delete
											</button>	
											</a>
											</td> -->

										<?php   
										}
                  						?>
									</tr>
							</tbody>
						</table>
				</div>
				<div class="card col-lg-12">
						<h3>Company Table</h3>
						<table class="table datatable" >
							<thead>
								<tr>
									<th scope="col" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">S.NO</th>
                  					<th scope="col" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Company Name</th>
									<th scope="col" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Email</th>
									<th scope="col" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Company Number</th>
									<th scope="col" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Logo</th>
									<th scope="col" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Address</th>
									<th scope="col" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Status</th>		
								</tr>
							</thead>
							<tbody>
									<?php 
									$sql1 = "SELECT * FROM companyreg";
									$result = $conn->query($sql1);
									$i=1;
									while($row=$result->fetch_assoc()){
										$category_id = $row['id'];

										// $sql2 = "SELECT * FROM categores WHERE id='$category_id'";
										// $result2 = $conn->query($sql2);
										// $row1=$result2->fetch_assoc()
									?>
									<tr>
										<td><?php echo $i++; ?></td>
										<td><?php echo $row['name']; ?></td>  
										<td><?php echo $row['email']; ?></td>
										<td><?php echo $row['number']; ?></td>
										<td><img src="<?php echo $row['logo'];  ?>" height="75px" width="74"></td>
										<td><?php echo $row['address']; ?></td>
										<td>
											<a href="status.php?id=<?php echo $row['id'] ?>">
											<!-- <button type="button" class="btn btn-success">
												Active
											</button> -->
											<input type="button" value="Active" class="btn btn-success">
											</a> 
											<a href="deactive.php?id=<?php echo $row['id']; ?>">
											<input type="button" value="Deactive" class="btn btn-danger">
											<!-- <button type="button" class="btn btn-danger">
												Deactive
											</button>	 -->
											</a>
											</td>

										<?php   
										}
                  						?>
									</tr>
							</tbody>
						</table>
				</div>
			<!-- Right side columns -->
			<div class="col-lg-4">
				<!-- Recent Activity -->
				<!-- <div class="card">
					<div class="filter">
					
					</div>

					<div class="card-body">
					<h5 class="card-title">Recent Activity <span>| Today</span></h5>

					<div class="activity">

					</div>

					</div>
				</div> -->
				<!-- End Recent Activity -->

				<!-- Budget Report -->
				<!-- <div class="card">
					<div class="filter">
					<a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
					<ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
						<li class="dropdown-header text-start">
						<h6>Filter</h6>
						</li>

						<li><a class="dropdown-item" href="#">Today</a></li>
						<li><a class="dropdown-item" href="#">This Month</a></li>
						<li><a class="dropdown-item" href="#">This Year</a></li>
					</ul>
					</div>

					<div class="card-body pb-0">
					<h5 class="card-title">Budget Report <span>| This Month</span></h5>
					</div> 
				</div> -->
				<!-- End Budget Report -->

				<!-- Website Traffic -->
				<!-- <div class="card">
					<div class="filter">
					<a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
					<ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
						<li class="dropdown-header text-start">
						<h6>Filter</h6>
						</li>

						<li><a class="dropdown-item" href="#">Today</a></li>
						<li><a class="dropdown-item" href="#">This Month</a></li>
						<li><a class="dropdown-item" href="#">This Year</a></li>
					</ul>
					</div>

					<div class="card-body pb-0">
					<h5 class="card-title">Website Traffic <span>| Today</span></h5>
					</div>
				</div> -->
				<!-- End Website Traffic -->
			</div>
		</div>	
	</section >
          <!-- News & Updates Traffic -->
          
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
