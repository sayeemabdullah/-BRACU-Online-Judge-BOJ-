<?php
	include 'connection.php';
    putenv("PATH=C:\Program Files\Java\jdk1.8.0_221\bin");
	$CC="javac";
	$out="java Main";
	$code=$_POST["code"];
	$problem_id=$_POST["problemid"];
	$sqll = "SELECT test_case from archive where question_id = '" . $problem_id . "'";
	$resultt = mysqli_query($connection, $sqll);
	$roww = mysqli_fetch_assoc($resultt);
	$input = $roww['test_case'];
	//$input="SELECT test_case from archive where question_id = '" . $problem_id . "'";
	//$solution="Select testcase_output from archive where problem_id = '" . $problem_id . "'";
	/*
	$result = mysql_query("Select testcase_output from archive where problem_id = '" . $problem_id . "'"); 
	$row = mysql_fetch_array($result); 
	$solution = $row[0]; 
	*/
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
	echo "$solution";
	echo "<br>";
	//$result = mysql_query($sql, $connection);
	//$solution = $connection->get_var("Select testcase_output from archive where problem_id = '" . $problem_id . "'");
	//$solution = mysql_fetch_assoc($result);
	//$solution = mysql_result(mysql_query("Select testcase_output from archive where problem_id = '" . $problem_id . "'"), 0);
	//$solution = $mysqli->query("Select testcase_output from archive where problem_id = '" . $problem_id . "'")->fetch_object()->testcase_output;
	//$solution = mysql_fetch_object($connection, $sql);
	$filename_code="Main.java";
	$filename_in="input.txt";
	$filename_error="error.txt";
	$runtime_file="runtime.txt";
	$executable="*.class";
	$command=$CC." ".$filename_code;	
	$command_error=$command." 2>".$filename_error;
	$runtime_error_command=$out." 2>".$runtime_file;

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
			shell_exec($runtime_error_command);
			$runtime_error=file_get_contents($runtime_file);
			$output=shell_exec($out);
		}
		else
		{
			shell_exec($runtime_error_command);
			$runtime_error=file_get_contents($runtime_file);
			$out=$out." < ".$filename_in;
			$output=shell_exec($out);
		}
		//echo "<pre>$runtime_error</pre>";
		//echo "<pre>$output</pre>";
		echo "$output";
		//echo "$solution";
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
		//echo "<pre>$output</pre>";
		echo "$output";
		//echo "$solution";
		  //echo "<textarea id='div' class=\"form-control\" name=\"output\" rows=\"10\" cols=\"50\">$output</textarea><br><br>";
	}
	else
	{
		echo "<pre>$error</pre>";
	}
	/*
	if($output == $solution){
		echo "Congrats!! Correct Answer."
	}
	else{
		echo "Wrong Answer!! Please Try Again."
	}*/
	exec("del $filename_code");
	exec("del *.txt");
	exec("del $executable");
?>
