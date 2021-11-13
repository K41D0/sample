<?php  
	include '../database/connection.php';
	session_start();
	if (isset($_POST['edit_employee']))
	{
		$id = $_POST['id'];
		$new_firstname = $_POST['update_firstname'];
		$new_lastname = $_POST['update_lastname'];
		$new_email = $_POST['update_email'];
		$new_pass = $_POST['update_password'];

		$update_query = mysqli_query($connection,"UPDATE users SET firstname = '$new_firstname', lastname = '$new_lastname', email='$new_email', password = '$new_pass' WHERE id = '$id' ");

		if($update_query)
		{
			$_SESSION['status'] = "Emplyoee successfully update!";
			$_SESSION['icon'] = "success";
			header('location:../admin_panel/index.php?page=employee_list');
		}
		else
		{
			$_SESSION['status'] = "Something went wrong.";
			$_SESSION['icon'] = "error";
			header('location:../admin_panel/index.php?page=employee_list');
		}

	}
	else
	{
		echo 'Something went wrong';
	}
?>