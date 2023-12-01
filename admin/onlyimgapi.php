<?php

//var_dump($_REQUEST);
//include('config.php');
extract($_REQUEST);
if(is_array($_FILES)) {
if(is_uploaded_file($_FILES['myimage']['tmp_name'])) {

$sourcePath = $_FILES['myimage']['tmp_name'];


	$folder = "update";
			
			if(is_dir($folder)==false)
			{
               mkdir($folder);		// Create directory if it does not exist
			}



$targetPath = uniqid().$_FILES['myimage']['name'];
$path=$folder.'/'.$targetPath;


if(move_uploaded_file($sourcePath,$path)) {
//echo "one";
//echo $path;
echo $targetPath;

}
else
{
	echo "Not uploaded because of error #".$_FILES["myimage"]["error"];
}
}
}

?>
