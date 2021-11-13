<!DOCTYPE html>
<html lang="en">
<title>Sign up | NEU</title>
<head>
    <?php include 'dashboard/header.php';?>
</head>
<body id="body">
	<div class="login-container">
		<h1 class="text-center">Create an account</h1>
    <form action="signup_check.php" method="POST">

    	<div>
        <?php if(isset($_GET['error'])){ ?> 
            <div class="alert alert-danger" role="alert">
                <?php echo $_GET['error'];?>
            </div>
        <?php }?>
        <?php if(isset($_GET['success'])){ ?> 
            <div class="alert alert-success" role="alert">
                <?php echo $_GET['success'];?>
                <a href="login.php">Click here to Login</a>
            </div>
        <?php }?>
        </div>
<!--------------------------------------------------------------->
            <div class="form-floating col-auto mb-3">
                <input type="firstname" name="firstname" class="form-control" id="floatingInput" placeholder="First name">
                <label for="floatingFirstname" class="fw-normal pl-5">First name</label>
            </div>
            <div class="form-floating col-auto mb-3">
                <input type="lastname" name="lastname" class="form-control" id="floatingInput" placeholder="Last name">
                <label for="floatingLastname" class="fw-normal lastname">Last name</label>
            </div>           
    		<div class="form-floating mb-3">
    			<input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
    			<label for="floatingInput" class="fw-normal">Email address</label>
    		</div>
    	   	<div class="form-floating mb-3">
    			<input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
    			<label for="floatingPassword" class="fw-normal">Password</label>
    		</div>
            <div class="form-floating mb-3">
                <input type="password" name="confirm-password" class="form-control" id="floatingPassword" placeholder="confirm-password">
                <label for="floatingPassword" class="fw-normal">Confirm password</label>
            </div>
            <div id="User_type">
                <label>Select user type: </label>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="toggle" id="Radio1" value="option1">
                  <label class="form-check-label" for="inlineRadio1">Admin</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="toggle" id="Radio2" value="option2">
                  <label class="form-check-label" for="inlineRadio2">Student</label>
                </div>
            </div>
    		<div class="row mt-3">
                <div class="col-5">
                    <a href="index.php" class="text-decoration-none">Already have an account?</a>
                </div>
    			<div class="col-sm">
    			    <button type="submit" id="signup" class="btn btn-primary float-end">Create <i class="fas fa-sign-in-alt"></i> </button>
    			</div>
    		</div>
    	</div>
    </form>
</body>
</html>