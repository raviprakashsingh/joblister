<?php
class Job {
	private $db;

	public function __construct() {
		$this->db = new Database;
	}

	public function getAllJobs() {
		$this->db->query("SELECT jobs.*, categories.name AS cname FROM jobs INNER JOIN categories ON jobs.category_id = categories.id ORDER BY post_date DESC");

		// Assign Result Set
		$result = $this->db->resultSet();

		return $result;
	}

	public function getAllCategories() {
		$this->db->query("SELECT * FROM categories");

		// Assign Result Set
		$result = $this->db->resultSet();

		return $result;
	}

	public function getJobsByCategory($category) {
		$this->db->query("SELECT jobs.*, categories.name AS cname FROM jobs INNER JOIN categories ON jobs.category_id = categories.id where jobs.category_id = $category ORDER BY post_date DESC");

		// Assign Result Set
		$result = $this->db->resultSet();

		return $result;
	}

	public function getCategory($category_id) {
		$this->db->query("SELECT * FROM categories where id = :category_id");

		$this->db->bind(':category_id', $category_id);

		// Assign Row
		$row = $this->db->single();

		return $row;
	}

	public function getJob($job_id) {
		$this->db->query("SELECT * FROM jobs where id = :job_id");

		$this->db->bind(':job_id', $job_id);

		// Assign Row
		$row = $this->db->single();

		return $row;
	}

	//create job
	public function create($data) {
		// Insert Query
		$this->db->query("INSERT INTO jobs (category_id,company,job_title,description,salary,location,contact_user,contact_email) VALUES (:category_id,:company,:job_title,:description,:salary,:location,:contact_user,:contact_email)");

		// Bind Data
		$this->db->bind(':category_id',$data['category_id']);
		$this->db->bind(':company',$data['company']);
		$this->db->bind(':job_title',$data['job_title']);
		$this->db->bind(':description',$data['description']);
		$this->db->bind(':salary',$data['salary']);
		$this->db->bind(':location',$data['location']);
		$this->db->bind(':contact_user',$data['contact_user']);
		$this->db->bind(':contact_email',$data['contact_email']);

		// Execute
		if($this->db->execute()) {
			return true;
		} else {
			return false;
		}
	}

	// Update Job
	public function update($id,$data) {
		// Insert Query
		$this->db->query("UPDATE jobs 
			SET 
			category_id = :category_id, 
			company = :company, 
			job_title = :job_title,
			description = :description,
			salary = :salary,
			location = :location,
			contact_user = :contact_user,
			contact_email = :contact_email 
			WHERE id = $id");

		// Bind Data
		$this->db->bind(':category_id',$data['category_id']);
		$this->db->bind(':company',$data['company']);
		$this->db->bind(':job_title',$data['job_title']);
		$this->db->bind(':description',$data['description']);
		$this->db->bind(':salary',$data['salary']);
		$this->db->bind(':location',$data['location']);
		$this->db->bind(':contact_user',$data['contact_user']);
		$this->db->bind(':contact_email',$data['contact_email']);

		// Execute
		if($this->db->execute()) {
			return true;
		} else {
			return false;
		}
	}

	// Delete job
	public function delete($id) {
		// Insert Query
		$this->db->query("DELETE FROM jobs where id = $id");

		// Execute
		if($this->db->execute()) {
			return true;
		} else {
			return false;
		}
	}
}
	