<?php include 'inc/header.php'; ?>
<div class="container">
	<h3 class="heading"><?php echo $job->job_title; ?> (<?php echo $job->location; ?>)</h3>
	<small>Posted By: <?php echo $job->contact_user; ?> on <?php echo $job->post_date; ?></small>
	<hr>
	<p><?php echo $job->description; ?></p>
	<ul class="list-group">
		<li class="list-group-item"><strong>Company: </strong><?php echo $job->company; ?></li>
		<li class="list-group-item"><strong>Salary: </strong><?php echo $job->salary; ?></li>
		<li class="list-group-item"><strong>Contact Email: </strong><?php echo $job->contact_email; ?></li>
	</ul>
	<a href="index.php">Go Back</a>
	<br>
	<br>
	<a href="edit.php?id=<?php echo $job->id?>" class="btn btn-primary">Edit</a>
	<form class="inline-form" action="job.php" method="post">
		<input type="hidden" name="del_id" value="<?php echo $job->id?>">
		<input type="submit" value="Delete" class="btn btn-danger">
	</form>
</div>
<?php include 'inc/footer.php'; ?>