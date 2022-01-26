<?php 
	include('include/dbconn.php');
	
	if(isset($_POST['save'])){
		$name = $_POST['name'];
    $image = $_POST['image'];

    $photo = $_FILES['image']['name'];

		$sql = "INSERT INTO category(categoryname,categoryimage) VALUES ('$name','$image')";
		if($conn->query($sql) === TRUE){

		$sql2 = "SELECT * FROM category ORDER BY id DESC LIMIT 1";
        $result = $conn->query($sql2);
        $row = $result->fetch_assoc();

        $received_id = $row['id'];

        $resumetype = pathinfo($photo,PATHINFO_EXTENSION);
        $resumename = "images/".$received_id.".".$resumetype ;
        $allowTypes = array('jpg','JPG','png','PNG','jpeg','JPEG','gif','GIF','pdf','PDF');
        if(in_array($resumetype, $allowTypes)){
            if(move_uploaded_file($_FILES["image"]["tmp_name"], $resumename)){
				$sql3 = "UPDATE category SET categoryimage = '$resumename' WHERE id = '$received_id'"; 
				$conn->query($sql3);
                //echo 'success';
				//echo $sql;
            } else{
                echo "not move";
            }
        } else {
            echo "no upload";
            echo $received_id;
            echo $resumetype;
            echo $resumename ;
        }
		} else{
            echo "failed";
		}
	} 
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Add-category</title>
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
      <h1>Category</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
          <li class="breadcrumb-item active">Category</li>
        </ol> 
      </nav> 
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <!-- <div class="row"> -->
            <form class=" g-3 " method="post" enctype="multipart/form-data">
                <!-- Left side columns -->
                <div class="col-xxl-12 col-md-12 col-lg-12">
                    <div class="row">
                        <div class="col-md-3 ">
                        <label class="col-form-label">Category Name </label>
                            <input class="input-group-text" type="text" name="name" >
                        </div>
                        <div class="col-md-3 ">
                        <label class="col-form-label">Category image </label>
                            <input class="input-group-text" type="file" name="image" >
                        </div>
                        <!-- <div class="col-md-4">
                            
                        </div> -->
                        <div class="col-md-3 ">
                            
                        </div>
                        <div class="col-md-3 mt-4">
                            <button class="btn btn-success p-2"  name="save">Add</button>
                        </div>
                     </div>
                </div>
				<div class="card col-lg-12">
						<table class="table datatable" >
							<thead>
								<tr>
									<th scope="col" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">S.NO</th>
                  					<th scope="col" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Category Name</th>
									<th scope="col" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Category Image</th>
									<th scope="col" class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Action</th>
								</tr>
							</thead>
							<tbody>
									<?php 
									$sql1 = "SELECT * FROM category";
									$result = $conn->query($sql1);
									$i=1;
									while($row=$result->fetch_assoc()){
										$category_id = $row['category'];

										// $sql2 = "SELECT * FROM categores WHERE id='$category_id'";
										// $result2 = $conn->query($sql2);
										// $row1=$result2->fetch_assoc()
									?>
									<tr>
										<td><?php echo $i++; ?></td>
										<td><?php echo $row['categoryname']; ?></td>  
										<!-- <td><?php echo $row['product_name']; ?></td> -->
										<td><img src="<?php $src=$row['categoryimage']; echo $src; ?> " width="75px" height="75px"></td>
										<td>
											<a href="edit_category.php?id=<?php echo $row['id'] ?>">
											<button type="button" class="btn btn-success">
												Edit
											</button>
											</a> 
											<a href="delete_category.php?id=<?php echo $row['id'] ?>">
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