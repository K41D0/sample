<?php 
	include '../database/connection.php';
	session_start();
	if(isset($_POST['delete_employee']))
	{
		#from delete_project_modal.php | input box | 
		$id = $_POST['id'];

		$delete_query = mysqli_query($connection, "DELETE FROM users WHERE id ='$id'");

		if($delete_query)
		{
			$_SESSION['status'] = "Account successfully deleted!";
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
?>