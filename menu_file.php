<?php
	if(isset($_POST['sb']))
	{
		
		if($_POST['fidi']=="d")
		{
			echo " File name : ".$_FILES["file"]["name"]."<br>";
			echo " File Type :  ". $_FILES["file"]["type"];
		}
		elseif($_POST['fidi']=="e")
		{
			if(unlink($_FILES["file"]["name"]))
				echo "File deleted : ";
			else
				echo"Error while deleting";
		}
		
	}
?>
