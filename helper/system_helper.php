<?php
// Redirect To Page
function redirect($page = false, $message = null, $message_type = NULL) {
	if(is_string($page)) {
		$location = $page;
	} else {
		$location = $_SERVER['SCRIPT_NAME'];
	}

	// Check For Message
	if($message != NULL) {
		// Set Message
		$_SESSION['message'] = $message;
	}

	// Check For Type
	if($message != NULL) {
		// Set Message Type
		$_SESSION['message_type'] = $message;
	}

	// Redirect
	header('Location: ' . $location);
	exit;
}

function displayMessage() {
	if(!empty($_SESSION['message'])) {
		// Assign Message Var
		$message = $_SESSION['message'];

		if(!empty($_SESSION['message_type'])) {
			// Assign  Type var
			$message_type = $_SESSION['message_type'];
			if($message_type == 'error') {
				echo '<div class="alert alert-danger">'. $message .'</div>';
			} else {
				echo '<div class="alert alert-success">'. $message .'</div>';
			}
		}
		// Unset Message
		unset($_SESSION['message']);
		unset($_SESSION['message_type']);
	} else {
		echo('');
	}
}