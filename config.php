<?php
function LerClass($class_name)
{
	$filename="Class".DIRECTORY_SEPARATOR."$class_name.php";
	if(file_exists($filename)===true)
	{
		Echo "<STRONG>$filename</STRONG> é um arquivo existente em sua bibliteca.<BR><HR>";
		require_once($filename);
	}
};
spl_autoload_register("Lerclass");
?>