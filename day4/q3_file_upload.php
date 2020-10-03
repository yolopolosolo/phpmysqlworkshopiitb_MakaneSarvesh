<form action="q3_file_upload.php" method="POST" enctype="multipart/form-data">

	<p>
		Welcome <br> Upload Your File
	</p>
	<input type="File" name="fil">
	<input type="submit" name="submit" value="Upload">
</form>

<?php 

if (@$_POST['submit']) {
	
	echo "<b>File name : </b>".$_FILES['fil']['name'];
	echo "<br><b>Size Of File: </b>".$_FILES['fil']['size']."Bytes";
	echo "<br><b>Type of File: </b>".$_FILES['fil']['type'];
}
 ?>

