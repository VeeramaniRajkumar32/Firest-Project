<?php
include('include/dbconn.php');

	$id = $_REQUEST['id'];
	if(isset($_POST['add'])){
		$jobtype = $_POST['jobtype'];
		$jobcategory = $_POST['jobcategory'];
		$location = $_POST['location'];
		$vacancies = $_POST['vacancies'];
		$des = $_POST['des'];
		$skill = $_POST['skill'];    

		$sql = "INSERT INTO company_new_job(jobtype,jabcategory,loacation,vacencies,description,skill) VALUES ('$jobtype','$jobcategory','$location','$vacancies','$des','$skill')";
		if($conn->query($sql) === TRUE){
		echo "<h1>successfully</h1>";
		header("Location: company.php");
		} else{
		echo "<h1>failed</h1>";
		} 
	} else {
			// echo "no submit";
	} 
	
	$sql6 = "SELECT * FROM companyreg Where id= '$id'"; 
	$result6 = $conn->query($sql6);
	$row6 = $result6->fetch_assoc();
	

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<title>Dashboard-Company New Jab</title>
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
	<?php //  include('include/header.php') ?>

<header id="header" class="header fixed-top d-flex align-items-center">

	<div class="d-flex align-items-center justify-content-between">
	<a href="index.html" class="logo d-flex align-items-center">
		<img src="assets/img/logo.png" alt="">
		<span class="d-none d-lg-block">NiceAdmin</span>
	</a>
	<i class="bi bi-list toggle-sidebar-btn"></i>
	</div><!-- End Logo -->

	<div class="search-bar">
	<form class="search-form d-flex align-items-center" method="POST" action="#">
		<input type="text" name="query" placeholder="Search" title="Enter search keyword">
		<button type="submit" title="Search"><i class="bi bi-search"></i></button>
	</form>
	</div><!-- End Search Bar -->

	<nav class="header-nav ms-auto">
	<ul class="d-flex align-items-center">

		<li class="nav-item d-block d-lg-none">
		<a class="nav-link nav-icon search-bar-toggle " href="#">
			<i class="bi bi-search"></i>
		</a>
		</li><!-- End Search Icon-->

		<li class="nav-item dropdown">

		<a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
			<i class="bi bi-bell"></i>
			<span class="badge bg-primary badge-number">4</span>
		</a><!-- End Notification Icon -->

		<ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
			<li class="dropdown-header">
			You have 4 new notifications
			<a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
			</li>
			<li>
			<hr class="dropdown-divider">
			</li>

			<li class="notification-item">
			<i class="bi bi-exclamation-circle text-warning"></i>
			<div>
				<h4>Lorem Ipsum</h4>
				<p>Quae dolorem earum veritatis oditseno</p>
				<p>30 min. ago</p>
			</div>
			</li>

			<li>
			<hr class="dropdown-divider">
			</li>

			<li class="notification-item">
			<i class="bi bi-x-circle text-danger"></i>
			<div>
				<h4>Atque rerum nesciunt</h4>
				<p>Quae dolorem earum veritatis oditseno</p>
				<p>1 hr. ago</p>
			</div>
			</li>

			<li>
			<hr class="dropdown-divider">
			</li>

			<li class="notification-item">
			<i class="bi bi-check-circle text-success"></i>
			<div>
				<h4>Sit rerum fuga</h4>
				<p>Quae dolorem earum veritatis oditseno</p>
				<p>2 hrs. ago</p>
			</div>
			</li>

			<li>
			<hr class="dropdown-divider">
			</li>

			<li class="notification-item">
			<i class="bi bi-info-circle text-primary"></i>
			<div>
				<h4>Dicta reprehenderit</h4>
				<p>Quae dolorem earum veritatis oditseno</p>
				<p>4 hrs. ago</p>
			</div>
			</li>

			<li>
			<hr class="dropdown-divider">
			</li>
			<li class="dropdown-footer">
			<a href="#">Show all notifications</a>
			</li>

		</ul><!-- End Notification Dropdown Items -->

		</li><!-- End Notification Nav -->

		<li class="nav-item dropdown">

		<a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
			<i class="bi bi-chat-left-text"></i>
			<span class="badge bg-success badge-number">3</span>
		</a><!-- End Messages Icon -->

		<ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
			<li class="dropdown-header">
			You have 3 new messages
			<a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
			</li>
			<li>
			<hr class="dropdown-divider">
			</li>

			<li class="message-item">
			<a href="#">
				<img src="assets/img/messages-1.jpg" alt="" class="rounded-circle">
				<div>
				<h4>Maria Hudson</h4>
				<p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
				<p>4 hrs. ago</p>
				</div>
			</a>
			</li>
			<li>
			<hr class="dropdown-divider">
			</li>

			<li class="message-item">
			<a href="#">
				<img src="assets/img/messages-2.jpg" alt="" class="rounded-circle">
				<div>
				<h4>Anna Nelson</h4>
				<p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
				<p>6 hrs. ago</p>
				</div>
			</a>
			</li>
			<li>
			<hr class="dropdown-divider">
			</li>
				
			<li class="message-item">
			<a href="#">
				<img src="" alt="" class="rounded-circle">
				<div>
				<h4></h4>
				<p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
				<p>8 hrs. ago</p>
				</div>
			</a>
			</li>
			<li>
			<hr class="dropdown-divider">
			</li>

			<li class="dropdown-footer">
			<a href="#">Show all messages</a>
			</li>

		</ul><!-- End Messages Dropdown Items -->

		</li><!-- End Messages Nav -->

		<li class="nav-item dropdown pe-3">

		<a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
			<img src="<?php echo $row6['logo']; ?>" alt="Profile" class="rounded-circle">
			<span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $row6['name']; ?></span>
		</a><!-- End Profile Iamge Icon -->

		<ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
			<li class="dropdown-header">
			<h6><?php echo $row6['name']; ?></h6>
			<!-- <span>Web Designer</span> -->
			</li>
			<li>
			<hr class="dropdown-divider">
			</li>

			<li>
			<a class="dropdown-item d-flex align-items-center" href="company-profile.php?id=<?php echo $row6['id']; ?>">
				<i class="bi bi-person"></i>
				<span>My Profile</span>
			</a>
			</li>
			<li>
			<hr class="dropdown-divider">
			</li>

			<li>
			<a class="dropdown-item d-flex align-items-center" href="company-profile.php?id=<?php echo $row6['id']; ?>">
				<i class="bi bi-gear"></i>
				<span>Account Settings</span>
			</a>
			</li>
			<li>
			<hr class="dropdown-divider">
			</li>

			<li>
			<a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
				<i class="bi bi-question-circle"></i>
				<span>Need Help?</span>
			</a>
			</li>
			<li>
			<hr class="dropdown-divider">
			</li>

			<li>
			<a class="dropdown-item d-flex align-items-center" <?php // unset($_SESSION['email']);?> href="seeker_login.php">
				<i class="bi bi-box-arrow-right"></i>
				<span>Sign Out</span>
			</a>
			</li>

		</ul><!-- End Profile Dropdown Items -->
		</li><!-- End Profile Nav -->

	</ul>
	</nav><!-- End Icons Navigation -->

</header>
	<!-- End Header -->

	<!-- ======= Sidebar ======= -->
	<?php include('include/sidebar.php') ?>
	<!-- End Sidebar-->

	<main id="main" class="main">

		<div class="pagetitle">
			<h1>Dashboard</h1>
			<nav>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item active">New Job</li>
				</ol>
			</nav>
		</div><!-- End Page Title -->

		<section class="section dashboard">
			<div class="row">
				<!-- Left side columns -->
				<div class="col-lg-8">
					<form method="POST">
							<div class="row">
								<div class="col-xxl-8 col-xl-12 card info-card revenue-card">
									<div class="row">
											<div class="col-xxl-4 col-xl-4 col-md-4">
													<label class="col-form-label">Job Name : </label>
											</div>
											<div class="col-xxl-8 col-xl-8 col-md-8 pt-2">
													<input class="form-control" type="text" name="jobtype" >
											</div>
											<div class="col-xxl-8 col-xl-8 col-md-8 mt-4">
											<!-- <label class="col-form-label">Select job Category</label> -->
											<select class="form-select" aria-label="Default select example " name="jobcategory">
													<option selected>Select job Category</option>

													<?php $sql2 = "SELECT * FROM jobcategory";
													$result2 = $conn->query($sql2);
													while ($row2 = $result2->fetch_assoc()) {
													?>
													<option value="<?php echo $row2['id']; ?>"><?php echo $row2['jcategory']; ?></option>
													<?php } ?>
											</select>
											</div> 
											<div class=" col-xxl-4 col-xl-4 col-md-4 mt-4"> 
											<a href="category1.php"><button class="btn btn-primary">Add Category</button></a>
											</div>
											<div class=" col-xxl-6 col-xl-6 col-md-6 mt-4">
													<input class="form-control" type="text" name="location" placeholder="Location" >
											</div>
											<div class=" col-xxl-6 col-xl-6 col-md-6 mt-4">
													<select class="form-select" aria-label="Default select example" name="salarytype">
																	<option selected>Salary Type</option>
																	<option value="0">0 - 10,000</option>
																	<option value="1">10,000 - 25,0000</option>
																	<option value="2">25,000 - 50,000</option>
																	<option value="3">50,000 - 1,00,000</option>
																	<option value="3">1,00,000 above</option>
													</select>
											</div>
											<div class=" col-xxl-6 col-xl-6 col-md-6 mt-4">
													<input class="form-control" type="text" name="vacancies" placeholder="vacancies" >
											</div>
											<div class=" col-xxl-6 col-xl-6 col-md-6 mt-4">
													<input class="form-control" type="text" name="des" placeholder="Description" >
											</div>
											<div class=" col-xxl-9 col-xl-9 col-md-9 mt-4">
													<input class="form-control" type="text" name="skill" placeholder="Skills" >
											</div>
											<div class=" col-xxl-3 col-xl-3 col-md-3 mt-4">
													<button class="btn btn-primary p-" name="add">Add</button>
											</div>
									</div>
								</div>
							</div>
					</form>
				</div>
				
				
				<div class="col-lg-4">
					<div class="card info-card revenue-card">
						<h6 class="pagetitle p-3">Job List </h6>
						<div class="activity">
							<?php
							$sql4 = "SELECT * FROM applies  ";
							$result4 = $conn->query($sql4);
							$row4 = $result4->fetch_assoc();
							$jobid = $row4['jobid'];
							$seekerid = $row4['seekerid'];
							?>
							<!-- <div class="card-body pb-0">
							<a href=" "> <h4 class=""><?php echo $i++ .". "; echo $row4['jobtype']; ?> <span></span></h4> </a>
							</div>-->
						</div>
						<div class="activity">
							<?php
							$sql5 = "SELECT jobid,COUNT(DISTINCT id) AS counter FROM applies GROUP BY jobid;";
							$result5 = $conn->query($sql5);

							$i=1;
							while($row5 = $result5->fetch_assoc()){
								$job = $row5['jobid'];
								$sql7 = "SELECT * FROM company_new_job WHERE id = '$job'"; 
								$result7 = $conn->query($sql7);
								$row7 = $result7->fetch_assoc();
								?>
							<div class="card-body pb-0">
								 <h4 class=""><?php echo $row7['jobtype'] ; ?> <a href="jobdetails.php?id=<?php echo $id."&jobid=".$job."&seekerid=".$seekerid ?>"><span><?php echo "(". $row5['counter']. ")" ?></span> </a></h4>
							</div>
							<?php
							}
							?>
							
							<?php  ?>
						</div>
					</div>
				</div>		
			</div>
		</section>

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
	<script src="assets/js/main.js"></script>

</body>

</html>


