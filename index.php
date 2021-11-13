<?php 
    session_start();

    if(isset($_SESSION['id']))
    {
        if($_SESSION['login_type']!=3)
        {
            header('location: admin_panel/index.php?page=dashboard');
        }
        else
        {
            header('location: dashboard/index.php?page=dashboard');
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<title>Login | NEU</title>
<head>
    <?php include 'dashboard/header.php';?>
</head>
<body id="body">
	<div class="login-container">
		<h1 class="text-center">Login</h1>
    <form action="login.php" method="POST">
    	<?php if(isset($_GET['error'])){ ?> 
        	<div class="alert alert-danger" role="alert">
                <?php echo $_GET['error'];?>
            </div> 
    	<?php }?>
    	<div>
    		<div class="form-floating mb-3">
    			<input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
    			<label for="floatingInput" class="fw-normal">Email address</label>
    		</div>
    	   	<div class="form-floating mb-3">
    			<input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
    			<label for="floatingPassword" class="fw-normal">Password</label>
    		</div>
    		<div class="row mt-3">
    			<div class="col-4">
    				<a href="signup.php" class="text-decoration-none">Create an account?</a>
    			</div>
    			<div class="col-sm">
    			    <button type="submit" id="sign-in" class="btn btn-primary float-end">Sign in <i class="fas fa-sign-in-alt"></i> </button>
    			</div>
    		</div>
    	</div>
    </form>
</body>
</html>