<?php include 'inc/header.php'; ?>
<div class="container">
	<h3 class="heading">Create Job Listing</h3>
	<form method="POST" action="create.php">
		<div class="form-group">
			<label>Company</label>
			<input type="text" class="form-control" name="company">
		</div>
		<div class="form-group">
			<label>Category</label>
			<select name="category_id" class="form-control">
				<option value="0">Choose Category</option>
				<?php foreach($categories as $category): ?>
					<option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
				<?php endforeach;?>
			</select>
		</div>
		<div class="form-group">
			<label>Job Title</label>
			<input type="text" class="form-control" name="job_title">
		</div>
		<div class="form-group">
			<label>Description</label>
			<textarea name="description"></textarea>
		</div>
		<div class="form-group">
			<label>Salary</label>
			<input type="text" class="form-control" name="salary">
		</div>
		<div class="form-group">
			<label>Location</label>
			<input type="text" class="form-control" name="location">
		</div>
		<div class="form-group">
			<label>Contact User</label>
			<input type="text" class="form-control" name="contact_user">
		</div>
		<div class="form-group">
			<label>Contact Email</label>
			<input type="text" class="form-control" name="contact_email">
		</div>
		<div class="form-group">
			<input type="submit" name="submit" value="Post" class="btn btn-primary">
		</div>
	</form>
	<a href="index.php" class="btn">Go Back</a>
</div>
<?php include 'inc/footer.php'; ?>