<?php 

require ("connect.php");
  session_start();
  if(!isset($_SESSION))
	{
		header('location:login.php');
		exit;
	}
  $success="";
  $mail=$_SESSION['mail']; 
  $user = $_SESSION['user']; 
  $select = "Select * FROM students where students.email='$mail'"; 
  $result = mysqli_query($conn, $select);

  if (mysqli_num_rows($result) > 0) {
      // output data of each row
      while($row = mysqli_fetch_assoc($result)) {
        $subp=$row["Php"];
        $subm=$row["mysql"];
        $subh=$row["html"];
        $totalobtained=$subp + $subm + $subh;
        $percentage =($totalobtained / 300 )*100;
      }    
      if($subp == $subm && $subm == $subh && $subh == 0)
      	die("Contact Your class Teacher or kindly wait for Few hours");
      if($percentage>=60){
        $success="Congratulations! ".$user;
      }  
      else $success="Try Harder ,SMART WORK IS KEY TO SUCCESS"; 
    }

if (@$_POST['parent_submit']) {

	$to = @$_POST["parent_email"];
	$subject = "$user Marksheet";
	$msg = "Here is a copy of your $user Marksheet

"." HTML : $subh \n PHP : $subp \n MYSQL : $subm \n Total : $totalobtained \n Percentage : $percentage %";
	$from = "From: admin@yolosurvey.com";

	if (mail($to, $subject, $msg, $from)) {
		echo "<br><b>Mail Sent sucessfully</b> ";
	}
	else{
		echo "Mail couldnt be sent check email id or contact administrator";
	}
}

 ?>

 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marksheet</title>
    <style>td,h1,div{
    text-align: center;
    }</style>
</head>
<body>
    <h1>Welcome <?php  echo $user ?></h1>
    <table border="2" cellpadding="15"   style="width: 50%; border-collapse: collapse; margin:0 auto">
      <thead>
        <tr>
          <th>Name</th>
          <th>PHP</th>
          <th>MYSQL</th>
          <th>HTML</th>
          <th>Total Obtained</th>
          <th>Percentage</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><?php echo $user ?></td>
          <td><?php echo $subp ?></td>
          <td><?php echo $subm ?></td>
          <td><?php echo $subh ?></td>
          <td><?php echo $totalobtained ?></td>
          <td><?php echo $percentage ?></td>
        </tr>
      </tbody>
    </table>
    <h1 ><?php echo $success ?></h1>
    <div>
      <form action="student.php" method="POST">
      Enter Parents Email: <input type="email" name="parent_email">
      <input type="submit" name="parent_submit" value="Send Mail">
      </form>
    </div>
    <a style="position:absolute; top:1em ;right:1em;" href="logout.php"><button>Logout</button></a>
</body>
</html>

