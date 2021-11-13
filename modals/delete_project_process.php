<?php 
	include '../database/connection.php';
	session_start();
	if(isset($_POST['delete_project']))
	{
		#from delete_project_modal.php | input box | 
		$id = $_POST['proj_id'];

		$delete_query = mysqli_query($connection, "DELETE FROM project_list WHERE proj_id ='$id'");

		if($delete_query)
		{
			$_SESSION['status'] = "Project successfully deleted!";
			$_SESSION['icon'] = "success";
			header('location:../admin_panel/index.php?page=projects');
		}
		else
		{
			$_SESSION['status'] = "Something went wrong.";
			$_SESSION['icon'] = "error";
			header('location:../admin_panel/index.php?page=projects');
		}

	}
?>