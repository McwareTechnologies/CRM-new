<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Mcware Technologies</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta content="A premium admin dashboard template by mannatthemes" name="description">
    <meta content="Mannatthemes" name="author"><!-- App favicon -->
 <!--   <link rel="shortcut icon" href="assets/images/logo.jpg">-->
    <!-- App css -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="assets/css/metismenu.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">
</head>

<body class="account-body">
    <!-- Log In page -->
    <div class="row vh-100">
       
        <div class="col-lg-12 p-0 d-flex justify-content-center" >
            <div class="accountbg d-flex align-items-center">
                <div class="account-title text-white text-center"><img src="" alt=""
                        class="thumb-lg">
                    <h4 class="mt-3">Welcome To Mcware Technologies</h4>
                    <div class="border w-25 mx-auto border-primary"></div>
                    <h1 class="">Let's Get Started</h1>
                    <a href="register.php" class="text-primary" ><i class="fas fa-user-plus" style="color:white;font-size:24px">   Sign up</i></a>
                   <br/>  <a href="#" class="text-primary" data-toggle="modal" data-animation="bounce" data-target=".bs-example-modal-lg"><i class="fas fa-sign-in-alt" style="color:white;font-size:26px">   Sign in</i></a>
                </div>
            </div>
        </div>
    </div><!-- End Log In page -->
    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						
						<div class="modal-body">
						<div class="card mb-0 shadow-none">
                <div class="card-body">
                    <div class="px-3">
                        	<div>
							
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
						</div>
                        <div class="media"><a href="index.html" class="logo logo-admin"><img
                                    src="assets/images/logo.jpg" height="55" alt="logo" class="my-3"></a>
                            <div class="media-body ml-3 align-self-center">
                                <h4 class="mt-0 mb-1">Login on Mcware Technologies</h4>
                                <p class="text-muted mb-0">Sign in to continue to Mcware Technologies.</p>
                            </div>
                        </div>
                        <form action="login.php" method="POST" class="form-horizontal my-4">
                            <div class="form-group"><label for="username">Username</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend"><span class="input-group-text" id="basic-addon1"><i
                                                class="mdi mdi-account-outline font-16"></i></span></div><input
                                        type="text" class="form-control" id="username" name="username" placeholder="Enter username">
                                </div>
                            </div>
                            <div class="form-group"><label for="userpassword">Password</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend"><span class="input-group-text" id="basic-addon2"><i
                                                class="mdi mdi-key font-16"></i></span></div><input type="password"
                                        class="form-control" id="userpassword" name="userpassword" placeholder="Enter password">
                                </div>
                            </div>
                            <!--<div class="form-group row mt-4">
                                <div class="col-sm-6">
                                    <div class="custom-control custom-checkbox"><input type="checkbox"
                                            class="custom-control-input" id="customControlInline"> <label
                                            class="custom-control-label" for="customControlInline">Remember me</label>
                                    </div>
                                </div>
                                <div class="col-sm-6 text-right"><a href="pages-recoverpw-2.html"
                                        class="text-muted font-13"><i class="mdi mdi-lock"></i> Forgot your
                                        password?</a></div>
                            </div>-->
                            <div class="form-group mb-0 row">
                                <div class="col-12 mt-2"><button
                                        class="btn btn-primary btn-block waves-effect waves-light" type="submit">Log In
                                        <i class="fas fa-sign-in-alt ml-1"></i></button></div>
                            </div>
                        </form>
                    </div>
                    <!--<div class="account-social text-center">
                        <h6 class="my-4">Or Login With</h6>
                        <ul class="list-inline mb-4">
                            <li class="list-inline-item"><a href="#" class=""><i
                                        class="fab fa-facebook-f facebook"></i></a></li>
                            <li class="list-inline-item"><a href="#" class=""><i class="fab fa-twitter twitter"></i></a>
                            </li>
                            <li class="list-inline-item"><a href="#" class=""><i class="fab fa-google google"></i></a>
                            </li>
                        </ul>
                    </div>-->
                    <div class="m-3 text-center bg-light p-3 text-primary">
                        <h5 class="">Don't have an account ?</h5>
                        <p class="font-13">Join <span>Mcware Technologies</span> Now</p><a href="register.php"
                            class="btn btn-primary btn-round waves-effect waves-light">Register</a>
                    </div>
                </div>
            </div>
						</div>
					</div>
				</div>
			</div>
    <!-- jQuery  -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/metisMenu.min.js"></script>
    <script src="assets/js/waves.min.js"></script>
    <script src="assets/js/jquery.slimscroll.min.js"></script><!-- App js -->
    <script src="assets/js/app.js"></script>
</body>

</html>