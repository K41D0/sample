<?php
include 'database/connection.php';
    if(isset($_POST['firstname']) || isset($_POST['lastname']) || isset($_POST['email']) || isset($_POST['password']) || isset($_POST['confirm-password']))
    {   
        function validate($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        $firstname  = validate($_POST['firstname']);
        $lastname = validate($_POST['lastname']);
        $email = validate($_POST['email']);
        $password = validate($_POST['password']);
        $confirm_password = validate($_POST['confirm-password']);
        $log_type= validate($_POST['toggle']);
        if($log_type==='option1')
        {
            $log_type=1;
        }
        else
        {
            $log_type=3;
        }
        $user_data = '&firstname='. $firstname. '&lastname='. $lastname;

        if(empty($firstname) && empty($lastname) && empty($email) && empty($password) && empty($confirm_password))
        {
            header("location: signup.php?error=All field is required&user_data");
            exit();
        }
        else if(empty($firstname))
        {
            header("location: signup.php?error=First name is required&user_data");
            exit();
        }
        else if(empty($lastname))
        {
            header("location: signup.php?error=Last name is required&user_data");
            exit();
        }
        else if(empty($email))
        {
            header("location: signup.php?error=Email is required&user_data");
            exit();
        }
        else if(empty($password))
        {
            header("location: signup.php?error=Password is required&user_data");
        }
        else if(empty($confirm_password))
        {
            header("location: signup.php?error=Confirm Password is required&user_data");
        }
        else if ($password !== $confirm_password)
        {
            header("location: signup.php?error= Password does not match");
        }
        else
        {    
            $password = md5($password);
        
            $select_query = mysqli_query($connection,"SELECT * FROM users WHERE email = '$email' ");
         
            if(mysqli_num_rows($select_query)>0)
            {
                header("location: signup.php?error=Email is already taken. Try another");
                exit();
            }
            else
            {
               $insert_query = "INSERT INTO users(firstname,lastname,email,password,login_type) VALUES ('$firstname','$lastname','$email','$password','$log_type')" ;
               $result = mysqli_query($connection, $insert_query);
               if($result)
               {
                    header("location: signup.php?success=Successfuly created!");
                    exit();
               }
               else
               {
                    header("location: signup.php?error=Account could not create.&$user_data");
                    exit();
               }
            }
        }
    }
    else
    {
        header('location: signup.php');
       
    }
?>