<?php

	$languageID=$_POST["language"];
        error_reporting(0);


	if($_FILES["file"]["name"]!="")
	{
		include "submitcompilers/make.php";
	}
	else
	{
		switch($languageID)
			{
				case "c":
				{
					include("submitcompilers/c.php");
					break;
				}
				case "cpp":
				{
					include("submitcompilers/cpp.php");
					break;
				}

				case "cpp11":
				{
					include("submitcompilers/cpp11.php");
					break;
				}
				case "java":
				{	
					include("submitcompilers/java.php");
					break;
				}
			}
	}
?>


