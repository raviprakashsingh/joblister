<?php include 'inc/header.php'; ?>
<div class="container">
	<div class="jumbotron">
		<h1>Find A Job</h1>
		<form method="GET" action="index.php">
			<select name="category" class="form-control">
				<option value="0">Choose Category</option>
				<?php foreach($categories as $category): ?>
					<option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
				<?php endforeach;?>
			</select>
			<br>
			<input type="submit" value="FIND">
		</form>
		<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea, possimus, fugiat. Ad saepe repellat voluptates commodi porro laborum omnis, natus maiores ipsum et nisi sit quod sint culpa assumenda laudantium!</p>
		<a href="#">Sign up today</a> -->
	</div>
	<h3 class="heading"><?php echo $title; ?></h3>
	<hr>
	<?php foreach($jobs as $job): ?>
	<div class="row">
			<h3><?php echo $job->job_title; ?></h3>
			<p><?php echo $job->description; ?></p>
			<a href="job.php?id=<?php echo $job->id; ?>">View</a>
	</div>
	<?php endforeach; ?>

</div>
<?php include 'inc/footer.php'; ?>