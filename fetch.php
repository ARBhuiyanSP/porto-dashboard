<?php
	include('connection/connect.php');
	if(isset($_POST['fetch'])){
		?>
		<table class="table table-bordered table-striped mb-0" id="datatable-default2">
			<thead>
				<th>Firstname</th>
				<th>Lastname</th>
				<th>Action</th>
			</thead>
			<tbody>
			<?php
				$query=$conn->query("select * from `inv_materialcategorysub`");
				while($row=$query->fetch_array()){
					?>
					<tr>
						<td><span id="first<?php echo $row['id']; ?>"><?php echo $row['category_id']; ?></span></td>
						<td><span id="last<?php echo $row['id']; ?>"><?php echo $row['category_description']; ?></span></td>
						<td>
							<a style="cursor:pointer;" class="btn btn-warning edit" data-id="<?php echo $row['id']; ?>"><span class="glyphicon glyphicon-edit"></span> Edit</a> || 
							<a style="cursor:pointer;" class="btn btn-danger delete" data-id="<?php echo $row['id']; ?>"><span class="glyphicon glyphicon-trash"></span> Delete</a>
						</td>
					</tr>
					<?php
				}
			
			?>
			</tbody>
		</table>
		<?php
	}
?>


