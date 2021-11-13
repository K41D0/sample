<?php
session_start();
include 'database/connection.php';
    if(isset($_POST['email']) || ($_POST['password']))
    {   
        function validate($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        $email = validate($_POST['email']);
        $password = validate($_POST['password']);

        if(empty($email) && empty($password))
        {
            header("location: index.php?error=Email and Password is required");
            exit();
        }
        else if(empty($email))
        {
            header("location: index.php?error=Email is required");
            exit();
        }
        else if(empty($password))
        {
            header("location: index.php?error=Password is required");
        }
        else
        {   
            $password = md5($password);
            $sql = mysqli_query($connection,"SELECT * FROM users WHERE email = '$email' AND password = '$password' LIMIT 1");
            
            if(mysqli_num_rows($sql)===1)
            {
                $row = mysqli_fetch_assoc($sql);
                if ($row['email'] === $email && $row['password'] === $password)
                {
                    $_SESSION['name'] = $row['firstname'];
                    $_SESSION['email'] = $row['email'];
                    $_SESSION['password'] = $row['password'];
                    $_SESSION['id'] = $row['id'];
                    $_SESSION['login_type'] = $row['login_type'];

                    if($_SESSION['login_type'] !=3 )
                    {
                        header('location: admin_panel/index.php?page=dashboard');
                        exit();
                    }
                    else
                    {
                        header('location: dashboard/index.php?page=dashboard');
                        exit();
                    }
                    
                }
                else
                {
                    header('location: index.php?error=Incorrect email or password.');
                    exit();
                }
            }
            else
            {
                header('location: index.php?error=Incorrect input.');
                exit();
            }
        }
    }
    else
    {
        header('location: index.php');
       
    }
?>