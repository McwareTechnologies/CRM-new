<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>McWare Technologies</title>
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta content="A premium admin dashboard template by themesbrand" name="description">
	<meta content="Mannatthemes" name="author">
	<!-- App favicon -->
<!--	<link rel="shortcut icon" href="assets/images/logo.jpg">-->
	<link href="assets/plugins/jvectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet">
	<!-- App css -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/icons.css" rel="stylesheet" type="text/css">
	<link href="assets/css/metismenu.min.css" rel="stylesheet" type="text/css">
	<link href="assets/css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
	<!-- Top Bar Start -->
	<div class="topbar">
		<!-- Navbar -->
		<nav class="navbar-custom">
			<!-- LOGO -->
			
			<div class="topbar-left" style="margin-top:20px;">
				<h4 class="mt-0 mb-1" style="color:blue;">McWare Technologies</h4>
							
		
			</div>
			<ul class="list-unstyled topbar-nav float-right mb-0">
				
			
			</ul>
			<ul class="list-unstyled topbar-nav mb-0">
			
				<li class="hide-phone app-search">
					<form role="search" class="">
						<input type="text" placeholder="Search..." class="form-control"> <a href="#"><i class="fas fa-search"></i></a>
					</form>
				</li>
			</ul>
		</nav>
		<!-- end navbar-->
	</div>
	<!-- Top Bar End -->
	<div class="page-wrapper-img">
		<div class="page-wrapper-img-inner">
			<div class="sidebar-user media">
				<img src="assets/images/users/user.jpg" alt="user" class="rounded-circle img-thumbnail mb-1"> <span class="online-icon"><i class="mdi mdi-record text-success"></i></span>
				<div class="media-body">
					<!--<h5 class="text-light">Mr. Michael Hill</h5>-->
					<ul class="list-unstyled list-inline mb-0 mt-2">
						<li class="list-inline-item"><a href="javascript: void(0);" class=""><i class="mdi mdi-account text-light"></i></a>
						</li>
						<li class="list-inline-item"><a href="javascript: void(0);" class=""><i class="mdi mdi-settings text-light"></i></a>
						</li>
						
					</ul>
				</div>
			</div>
			<!-- Page-Title -->
			<div class="row">
				<div class="col-sm-12">
					<div class="page-title-box">
						<div class="float-right align-item-center mt-2">
							<!--<button class="btn btn-info px-4 align-self-center report-btn">Creat Report</button>-->
						</div>
						<!--<h4 class="page-title mb-2"><i class="mdi mdi-monitor mr-2"></i>Dashboard</h4>-->
						<div class="">
							<!--<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="javascript:void(0);">Frogetor</a>
								</li>
								<li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard</a>
								</li>
								<li class="breadcrumb-item active">Dashboard 1</li>
							</ol>-->
						</div>
					</div>
				</div>
			</div>
			<!-- end page title end breadcrumb -->
		</div>
	</div>
<?php

include 'connection.php';
?>




<div class="page-content">
					<div class="card">
							<div class="card-body">
								<h4 class="mt-0 header-title">Registration</h4>
							
								<form action="addregistration.php" method="post" class="">
								<input  type="hidden" name="regaction" value="add">
								<div class="row">
										<div class="col-md-4">
											<div class="form-group">
												<label for="username">Name</label>
												
												<input type="text" class="form-control" name="username" id="username" required="">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label for="useremail">Email address</label>
												<input type="email" class="form-control" name="useremail" id="useremail" required="">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label for="subject">Mobile No.</label>
												<input type="text" class="form-control" name="subject" id="subject" required="">
											</div>
										</div>
									</div>
					
					



									<div class="row">
						
									<div class="col-md-4">
									<div class="form-group"><label for="userpassword">Password</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend"><span class="input-group-text" id="basic-addon3"><i
                                                class="mdi mdi-lock-outline font-16"></i></span></div><input
                                        type="password" class="form-control" id="userpassword" name="userpassword"
                                        placeholder="Enter password">
                                </div>
                            </div>
</div>
										<div class="col-md-4">
											<div class="form-group">
												<label for="username">Role</label>
											<select class="form-control" name="role" id="role">
											<?php
                            
                    $query1=mysqli_query($connect,"select * from role");
                    while($rows=mysqli_fetch_array($query1))
                    {?>

                       <option value="<?php echo $rows["id"];?>"><?php echo $rows["rolename"];?></option>
                    <?php
                }
                ?>
                     
											
										</select>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label for="message">Address</label>
												<textarea class="form-control" rows="" name="address" id="address"></textarea>
											</div>
										</div>
									</div>
									<div class="row">
									    <div class="col-sm-12 text-right">
									        <button type="submit" name="submit" class="btn btn-primary px-5 py-2"
									        
									        
									        >Submit</button>
										<a href="index.php">Back to Login</a>
										
											
										</div>
									</div>
								</form>
							</div>
							<!--end card-body-->
						</div>




				<!-- container -->
				<footer class="footer text-center text-sm-left">&copy; 2019 Frogetor <span class="text-muted d-none d-sm-inline-block float-right">Crafted with <i class="mdi mdi-heart text-danger"></i> by Mannatthemes</span>
				</footer>
            </div>
            <!-- end page content -->
	
	<!-- end page-wrapper -->
	<!-- jQuery  -->
            <script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/bootstrap.bundle.min.js"></script>
	<script src="assets/js/metisMenu.min.js"></script>
	<script src="assets/js/waves.min.js"></script>
	<script src="assets/js/jquery.slimscroll.min.js"></script>
	<script src="assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
	<script src="assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
	<script src="assets/plugins/moment/moment.js"></script>
	<script src="assets/plugins/apexcharts/apexcharts.min.js"></script>
	<script src="../../../apexcharts.com/samples/assets/irregular-data-series.js"></script>
	<script src="../../../apexcharts.com/samples/assets/series1000.js"></script>
	<script src="../../../apexcharts.com/samples/assets/ohlc.js"></script>
	<script src="assets/pages/jquery.dashboard.init.js"></script>
	<!-- App js -->
	<script src="assets/js/app.js"></script>
           

