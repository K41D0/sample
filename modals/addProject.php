<?php 
	session_start();
	if(isset($_SESSION['email']) && isset($_SESSION['password']))
	{
		include '../database/connection.php';
	    if(isset($_POST['add_project_name']) || ($_POST['project_description']) || isset($_POST['start_date']) || isset($_POST['due_date']))
	    {   
	        function validate($data)
	        {
	            $data = trim($data);
	            $data = stripslashes($data);
	            $data = htmlspecialchars($data);
	            return $data;
	        }
	        $project_name  = validate($_POST['add_project_name']);
	        $project_desc = validate($_POST['project_description']);
	        $start_date  = validate($_POST['start_date']);  
	        $due_date  = validate($_POST['due_date']);
	        $id = $_SESSION['id'];

	        $select_query = mysqli_query($connection,"SELECT * FROM project_list WHERE proj_name = '$project_name' ");

	         if(mysqli_num_rows($select_query)>0)
            {
            	$_SESSION['status'] = "Project name is already taken.";
            	$_SESSION['icon'] = "error";
                header("location: ../admin_panel/index.php?page=projects");
                exit();
            }
            else
            {
            	$insert_query = "INSERT INTO project_list(proj_name,proj_description,start_date,end_date) VALUES ('$project_name','$project_desc','$start_date','$due_date')" ;
               $result = mysqli_query($connection, $insert_query);
               if($result)
               {	
               	$_SESSION['status'] = "Project added!";
               	$_SESSION['icon'] = "success";
                    header("location: ../admin_panel/index.php?page=projects");
                    exit();
               }
               else
               {	
               	$_SESSION['status'] = "Something went wrong.";
               	$_SESSION['icon'] = "error";
                    header("location: ../admin_panel/index.php?page=projects");
                    exit();
               }
            }

	    }
	}
 ?>