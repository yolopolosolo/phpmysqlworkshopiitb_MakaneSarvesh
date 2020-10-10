<?php

require ("connect.php");
$error=null;

$email= @$_POST['email'];
$password= @$_POST['pwd'];
if(isset($_POST['sub'])){
 
    if(!empty($email && $password)){
        $password=md5(@$_POST['pwd']);

        
        $select = "SELECT * FROM students where email='$email' and password='$password'"; 
        $result = mysqli_query($conn, $select);
       
        if (mysqli_num_rows($result) > 0) {
            
            while($row = mysqli_fetch_assoc($result)) {
                $name=$row['name'];      
                $mail=$row['email'];        
                session_start();
                $_SESSION['user'] = $name;
                $_SESSION['mail'] = $mail;
                echo "<script type='text/javascript'>
                                window.location='student.php';
                                </script>";
            }       
        }
        else $error = "Your <b>Email id</b> or <b>Password</b> is invalid";                          
    }
 
}    
        // mysqli_close($conn);    
?>

<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	
	<div class="Body">
		<h1>Student Login</h1>
		<form method="POST">
			<label for="email">Email:</label>
			<input type="Email" name="email" required>
			<label for="pwd">Password:</label>
			<input type="Password" name="pwd" required>
			<br><br>
			<input type="submit" name="sub" value="Login">
		</form>
	</div>

	<h5 >Didnt register yet ?<a href="StudentRegister.php"> Click here</a></h5>

	 <h3 style="text-align: center; color: red;"><?php echo $error; ?></h3>
</body>
</html>



