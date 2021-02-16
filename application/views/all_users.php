<?php require_once('header/header.php'); ?>
<div class="container-fluid" id="dashboard_container">	
		<div class="container">
			<div class="row">
				<div class="col-md-4 mx-auto">
					<h3 class="text-white text-center bg-dark mb-3 mt-4">All Users</h3>
				</div>
			</div>
				<a href="<?php echo base_url().'index.php/CrudController/AddUsers' ?>" class="btn btn-primary mb-2">Add Users</a>
			<div class="row">
				<table class="table table-dark table-hover ">
    <thead>
      <tr>
        <th>Sno<?php $sno='1'; ?></th>
        <th>Full Name</th>
        <th>Contact no.</th>
        <th>Email</th>
        <th>Created At</th>
        
        <th>Action</th>
      </tr>
    </thead>
   
     <tbody>
     	<?php if(!empty($all_usersData)){foreach($all_usersData as $udata){?>
      <tr>
        <td><?php echo $sno++;?></td>
        <td><?php echo $udata['full_name']; ?></td>
        <td><?php echo $udata['email'];?></td>
        <td><?php echo $udata['contact_no'];?></td>
        <td><?php echo $udata['created_at'];?></td>
         
        <td>
        	<a href="<?php echo base_url().'index.php/CrudController/EditUser/'.$udata['id']; ?>"><button class="btn btn-info">Edit</button></a>
        </td>
        	<td>
            <a onclick = "return confirm('Do You Really want to delete this ?');" href="<?php echo base_url().'index.php/CrudController/DeleteUser/'.$udata['id']; ?>" class="btn btn-danger trash" id="delete_doctor" >Delete</a>
        </td>
      </tr>
  <?php }}else{
  	?>
	<tr>
      	<td colspan="4">Records Not Found</td>
      </tr>
  	<?php } ?>
    
    </tbody>
  </table>
				</div>
			</div>
		</div>
<?php require_once('footer/footer.php'); ?>