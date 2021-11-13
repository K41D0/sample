<?php
session_start();
if(isset($_SESSION['email']) && isset($_SESSION['password']))
{
	include '../database/connection.php';
    if(isset($_POST['Current_password']) || isset($_POST['New_password']) || isset($_POST['Confirm_password']))
    {   
        function validate($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        $current_pass  = validate($_POST['Current_password']);
        $new_pass  = validate($_POST['New_password']);  
        $confirm_pass  = validate($_POST['Confirm_password']);

        if($new_pass!=$confirm_pass)
        {
            header('location: ../dashboard/index.php?error=Password does not matched.'); 
            exit();
        }

        $current_pass= md5($current_pass);
        $new_pass= md5($new_pass);
        $id = $_SESSION['id'];

        $update_query = mysqli_query($connection,"UPDATE users SET password = '$new_pass' WHERE id = '$id' ");

        if($update_query == 1)
        {
            $_SESSION['status'] = "Password changed!";
            $_SESSION['icon'] = "success";
            header('location:../admin_panel/index.php?page=dashboard');
            exit();
        }
        else
        {
            $_SESSION['status'] = "Something went wrong.";
            $_SESSION['icon'] = "error";
            header('location:../admin_panel/index.php?page=dashboard');
            exit();
        }

    }
    else
    {
        header('location: ../dashboard/index.php'); 
        exit();
    }
}
else
{
	header('location: ../login.php');
	exit();
}
?>
