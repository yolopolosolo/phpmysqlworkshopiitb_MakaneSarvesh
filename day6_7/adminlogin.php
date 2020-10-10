
<?php
//for security reason admin must enter the url manually so students cant find adminlogin 
require ("connect.php");
$error="";

$aname=@$_POST['name'];
$password=@$_POST['password'];

if(@$_POST['submit']){
 
    if(!empty($aname && $password)){
      
        $select = "SELECT * FROM admin where name='$aname' and pass='$password'"; 
        $result = mysqli_query($conn, $select);
       
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                $name=$row['name'];              
                session_start();
                $_SESSION['user'] = $name;
                header("location: admin.php");
            }       
        }
        else $error = "Your Login Name or Password is invalid";                          
    }
    else  $error="Input Values";
}  

 ?>

 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin_Login</title>
</head>
<body>
    <h1 style="text-align: center;">Admin Login </h1>
        <form action="" method="post" style="text-align: center;">
        Username :<input type="text" name="name">
        <br>
        Password :<input type="password" name="password" >
        <br><br>
        <input type="submit" name="submit" value="Login">
        </form>
      <h3 style="text-align: center;"><?php echo $error; ?></h3>  
            
</body>
</html>