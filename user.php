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


/*if($_POST) 
{ 
	$query=mysqli_query($connect, "INSERT INTO `lead`(`lead_ID`, `Name`, `mobile`, `email`, `address`, `leadstatus`) VALUES ('".$_POST[ "lead_id"]. "','".$_POST[ "leadname"]. "','".$_POST[ "mobile"]. "','".$_POST[ "lead_email"]. "','".$_POST[ "lead_address"]. "','".$_POST[ "lead_status"]. "')"); 
} */
?>



<div class="page-content">
	<div class="card">
		<div class="card-body">
			<h4 class="mt-0 header-title">User</h4>
			<div class="float-right text-center">
				<!--<p class="text-muted">Large modal</p>-->
				<!-- Large modal -->
				<!--<button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-animation="bounce" data-target=".bs-example-modal-lg">Create</button>-->
			</div>
			<table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
				<thead>
					<tr>
						
						<th>Name</th>
						<th>Mobile No.</th>
						<th>Email</th>
						<th>Role</th>
						<th>Address</th>
						<th>Action</th>
					</tr>
					<!--------------------------------------------------->
					<?php include 'connection.php'; 
					//Fetch from Database// 
					$sqlselect="SELECT user.*,user.id,role.rolename from user left join role on user.Role=role.id " ; 
					$res=mysqli_query($connect,$sqlselect); 
					$rows=mysqli_fetch_array($res); 
					$trow=mysqli_num_rows($res); 
					if($trow>0)
						{ 
							do
							{ 
					?>
					<tr>
						
						<td>
							<?php echo $rows['Name'];?>
						</td>
						<td>
							<?php echo $rows['Mobile'];?>
						</td>
						<td>
							<?php echo $rows['Email'];?>
						</td>
						<td>
							<?php echo $rows['rolename'];?>
						</td>
						<td>
							<?php echo $rows['Address'];?>
						</td>
						
						<td>
							<?php echo $rows['action'];?>
							<a href='edituser.php?edituserid=<?php echo $rows['id'];?>'>
								<button type="button" class="btn btn-outline-secondary btn-sm"><i class="far fa-edit"></i>
								</button>
							</a>
							<a href='deleteuser.php?id=<?php echo $rows['id'];?>'>
								<button type="button" class="btn btn-outline-secondary btn-sm"><i class="far fa-trash-alt"></i>
								</button>
							</a>
						</td>
					</tr>
					<?php }while($rows=mysqli_fetch_array($res));}?>
					<!---------------------------------------------------------->
				</thead>
			</table>
			<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title mt-0" id="myLargeModalLabel">New Leads</h5>
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
						</div>
						<div class="modal-body">
							<form action="addsales.php" method="post">
								<div class="form-group">
								
									<div class="row">
										<label>Lead ID &nbsp; &nbsp;&nbsp; &nbsp;</label>
											<?php
			include 'connection.php';
$n=1;
$lead_id="LEAD";
$lead_id = $lead_id. sprintf("%04d", $n);
 $lead_id;
  
  
  
   $sql1="SELECT lead_ID FROM lead ORDER BY lead_ID";
   $result1=mysqli_query($connect,$sql1);
  while($row1=mysqli_fetch_array($result1)){
    $lead_ID=$row1["lead_ID"];
   
  }?>
										<div class="col-md-4">
											<input class="form-control" type="text" name="lead_id" id="lead_id" value="<?php  
if(!empty($lead_ID)){
	$lead_ID = explode('LEAD',$lead_ID)[1]+1;
	//echo $Student_no;
	
	//echo $customer_code += 1;
	$new_index = str_pad($lead_ID, 4, "0", STR_PAD_LEFT);
	echo	$Customer_code = "LEAD".$new_index;
}
else
{
	 echo $lead_id;
} 



				  ?>" required value="">
										</div>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										<label>Name&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;</label>
										<div class="col-md-4">
											<input class="form-control" type="text" name="leadname" id="leadname" value="">
										</div>
									</div>
									<br>
									<br>
									<div class="row">
										<label>Mobile No.</label>
										<div class="col-md-4">
											<input class="form-control" type="" id="mobile" name="mobile" value="">
										</div>
										<label>&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;Email&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;</label>
										<div class="col-md-4">
											<input class="form-control" type="email" name="lead_email" id="lead_email" value="">
										</div>
									</div>
									<br>
									<br>
									<div class="row">
										<label>Address&nbsp; &nbsp;&nbsp;</label>
										<div class="col-md-4">
											<textarea rows="6" cols="30" id="lead_address" name="lead_address"></textarea>
										</div>
										<label>&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;Lead Status</label>
										<div class="col-md-4">
											<select class="form-control" name="lead_status" id="lead_status">
												<option>Open-not Contacted</option>
												<option>Working-Contacted</option>
												<option>Closed-Converted</option>
												<option>Closed-not Converted</option>
											</select>
										</div>
									</div>&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
									<div class="row">
										<div class="col-sm-12 text-right">
											<button type="submit" class="btn btn-primary px-5 py-2">Submit</button>
										</div>
									</div>
									<!--<button type="submit"  name="create" class="btn btn-primary" value="Save">Save </button>
				<button type="cancel"  name="cancel" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
									<!-- <label>Lead ID</label>-->
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!--  <div id="custom-modal" class="modal-demo">
                                         	 <div class="modal-content">
                                               <div class="modal-header">
                                         	

										<button type="button" class="close" onclick="Custombox.modal.close();"><span>&times;</span><span class="sr-only">Close</span>
										</button>
										<h4 class="custom-modal-title">Animation Modal title</h4>
										<div class="custom-modal-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</div>
									</div>
                                      </div>

                                  </div>--></div>
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