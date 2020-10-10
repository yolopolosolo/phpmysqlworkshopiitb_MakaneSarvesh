<?php 
require ("connect.php");
$success=null; 
$error=null;
$name=(isset($_POST['name']) ? $_POST['name'] : null );
$email=(isset($_POST['email']) ? $_POST['email'] : null );
$password=(isset($_POST['password']) ? $_POST['password'] : null );
$password2=(isset($_POST['password2']) ? $_POST['password2'] : null );

if(isset($_POST['submit'])){
	if(!empty($name && $password && $email && $password2)){

        $compare = "SELECT * FROM students";//where email='$email'
        $result = mysqli_query($conn, $compare);
        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                $stored_email=$row["email"];
                if($stored_email === $email){
                    die ("User already exists");
                    // mysqli_close($conn);
                }               
            }                          
        }
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) { 
                if($password === $password2){
                    $password=md5($password);
                 $sql=mysqli_query($conn,"INSERT into students (name,password,email) VALUES('$name','$password','$email')");
                    if ($sql) {
                    	echo "<script type='text/javascript'>alert('New user Added');
                                window.location='StudentLogin.php';
                                </script>";
                    }
                }
                else
                {
                	$error = "Password do Not Match try again";
                }
            }
            else{
            	echo "Check emailid";
            }
    }              
}
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

</head>
<body>
    <h1 style="text-align: center;">Registration Form</h1>
        <form action="" method="post">
        Username :<input type="text" name="name" required>
        <br>
        Email :<input type="email" name="email"  required>
        <br>
        Password :<input type="password" name="password"  required>
        <br>
        ConfirmPassword :<input type="password" name="password2"  required>
        <br><br>
        <input type="submit" name="submit" value="Register" >
        </form>
      	
      	<h3 style="text-align: center;"><?php echo $error; ?></h3>
            
</body>
</html>