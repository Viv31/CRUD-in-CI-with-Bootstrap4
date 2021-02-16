<?php require_once('header/header.php'); ?>
<div class="container-fluid" id="dashboard_container">
<div class="container">
			<div class="row">
				<div class="col-md-6 p-5 mt-5 mx-auto">
					<h4 class="text-center bg-dark text-white">Update User</h4>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 mx-auto" id="myInsertForm">
					<form action="<?php echo base_url().'index.php/CrudController/EditUser/'.$userDataForUpdate['id'];?>" method="POST">
						<div class="form-group">
							<label>Full Name:</label>
							<input type="text" name="full_name" id="full_name" class="form-control" placeholder="Enter Full Name" value="<?php echo set_value('full_name',$userDataForUpdate['full_name']); ?>">
							<?php echo form_error('full_name'); ?>
							
						</div>
						<div class="form-group">
							<label>Email:</label>
							<input type="text" name="email" id="email" class="form-control" placeholder="Enter email" value="<?php echo set_value('email',$userDataForUpdate['email']); ?>">
							<?php echo form_error('email'); ?>
							
						</div>
						<div class="form-group">
							<label>Contact Number:</label>
							<input type="text" name="contact_no" id="contact_no" class="form-control" placeholder="Enter Contact Number" value="<?php echo set_value('contact_no',$userDataForUpdate['contact_no']); ?>">
							<?php echo form_error('contact_no'); ?>

						</div>
						<input type="submit" id="Update" class="btn btn-primary" value="Update">
						
					</form>
				</div>
			</div>
</div>
</div>	