<?php
include 'connection.php'; 
session_start();
if(isset($_SESSION['name'])==null)
{
echo"<script>window.location.href='login.php';</script>";
}
?>
<?php
include 'leftnav.php';


?>
 <div class="page-content">
  <div class="card">
<div class="card-body">


<?php
$id=$_GET['edituserid'];
  //echo $id;
  $sql=mysqli_query($connect,"select user.*,user.id as userid ,role.rolename,role.id as roleid from user left join role on user.Role=role.id where user.id='$id'");
 
  $rowuser=mysqli_fetch_array($sql);
  
 
?>
<form action="updateuser.php" method="post" class="">
								<input  type="hidden" name="regaction" value="add">
								<input type="hidden" name="userid" value="<?php echo $_GET['edituserid'];?>">
								<div class="row">
										<div class="col-md-4">
											<div class="form-group">
												<label for="username">Name</label>
												<input type="text" class="form-control" name="username" id="username" required="" value="<?php echo $rowuser["Name"];?>">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label for="useremail">Email address</label>
												<input type="email" class="form-control" name="useremail" id="useremail" required="" value="<?php echo $rowuser["Email"];?>">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label for="subject">Mobile No.</label>
												<input type="text" class="form-control" name="mobile" id="subject" required="" value="<?php echo $rowuser["Mobile"];?>">
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
                                        placeholder="Enter password" value="<?php echo $rowuser["Password"];?>">
                                </div>
                            </div>
</div>
										<div class="col-md-4">
											<div class="form-group">
												<label for="username">Role</label>
											<select class="form-control" name="role" id="role">
											  <option value="<?php echo $rowuser["roleid"];?>"><?php echo $rowuser["rolename"];?></option>  
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
												<textarea class="form-control" rows="" name="address" id="address"><?php echo $rowuser["Address"];?></textarea>
											</div>
										</div>
									</div>
								
									<div class="row">
									    <div class="col-sm-12 text-right">
									        <button type="submit" name="submit" class="btn btn-primary px-5 py-2"
									        
									        
									        >Submit</button>
									
										
											
										</div>
									</div>
								
								</form>



	
    </div>
</div>		





	<footer class="footer text-center text-sm-left">&copy; 2019 Frogetor <span class="text-muted d-none d-sm-inline-block float-right">Crafted with <i class="mdi mdi-heart text-danger"></i> by Mannatthemes</span>
				</footer>
            </div>

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
           










