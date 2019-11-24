<?php
    include 'connection.php';
    putenv("PATH=C:\Program Files (x86)\CodeBlocks\MinGW\bin");
	$CC="gcc";
	$out="a.exe";
	$code=$_POST["code"];
	$problem_id=$_POST["problemid"];
	$sqll = "SELECT test_case from archive where question_id = '" . $problem_id . "'";
	$resultt = mysqli_query($connection, $sqll);
	$roww = mysqli_fetch_assoc($resultt);
	$input = $roww['test_case'];
	echo "$problem_id";
	echo "<br>";
	echo "$code";
	echo "<br>";
	echo "$input";
	echo "<br>";
	$sql = "SELECT testcase_output from archive where question_id = '" . $problem_id . "'";
	$result = mysqli_query($connection, $sql);
	$row = mysqli_fetch_assoc($result);
	$solution = $row['testcase_output'];
	echo "<pre>$solution</pre>";
	echo "<br>";
	$filename_code="main.c";
	$filename_in="input.txt";
	$filename_error="error.txt";
	$executable="a.exe";
	$command=$CC." -lm ".$filename_code;	
	$command_error=$command." 2>".$filename_error;

	//if(trim($code)=="")
	//die("The code area is empty");
	
	$file_code=fopen($filename_code,"w+");
	fwrite($file_code,$code);
	fclose($file_code);
	$file_in=fopen($filename_in,"w+");
	fwrite($file_in,$input);
	fclose($file_in);
	exec("cacls  $executable /g everyone:f"); 
	exec("cacls  $filename_error /g everyone:f");	

	shell_exec($command_error);
	$error=file_get_contents($filename_error);

	if(trim($error)=="")
	{
		if(trim($input)=="")
		{
			$output=shell_exec($out);
		}
		else
		{
			$out=$out." < ".$filename_in;
			$output=shell_exec($out);
		}
		echo "<pre>$output</pre>";
		//echo "$output";
        //echo "<textarea id='div' class=\"form-control\" name=\"output\" rows=\"10\" cols=\"50\">$output</textarea><br><br>";
	}
	else if(!strpos($error,"error"))
	{
		//echo "<pre>$error</pre>";
		if(trim($input)=="")
		{
			$output=shell_exec($out);
		}
		else
		{
			$out=$out." < ".$filename_in;
			$output=shell_exec($out);
		}
		echo "<pre>$output</pre>";
		//echo "$output";
                //echo "<textarea id='div' class=\"form-control\" name=\"output\" rows=\"10\" cols=\"50\">$output</textarea><br><br>";
	}
	else
	{
		echo "<pre>$error</pre>";
	}
	echo "<br>";
	if($output == $solution){
		$q = "UPDATE `user` SET `solved` = (solved + 1) WHERE `email`= '".$_SESSION["login_user"]."'";
		$query = mysqli_query($connection,$q);
		echo "Congrats!! Correct Answer.";
	}
	else{
		echo "Wrong Answer!! Please Try Again.";
	}
	exec("del $filename_code");
	exec("del *.o");
	exec("del *.txt");
	exec("del $executable");
?>
