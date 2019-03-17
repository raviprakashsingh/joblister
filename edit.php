<?php include_once 'config/init.php'; ?>

<?php
$job = new Job;

$job_id = isset($_GET['id']) ? $_GET['id'] : null;

if(isset($_POST['submit'])) {
	$data = array();
	$data['job_title'] = $_POST['job_title'];
	$data['category_id'] = $_POST['category_id'];
	$data['description'] = $_POST['description'];
	$data['company'] = $_POST['company'];
	$data['location'] = $_POST['location'];
	$data['salary'] = $_POST['salary'];
	$data['contact_user'] = $_POST['contact_user'];
	$data['contact_email'] = $_POST['contact_email'];

	if($job->update($job_id, $data)) {
		redirect('index.php', 'Your job has been updated', 'success');
	} else {
		redirect('index.php', 'Something went wrong', 'error');
	}
}

$template = new Template('templates/job-edit.php');	
$template->categories = $job->getAllCategories();
$template->job = $job->getJob($job_id);

echo $template;