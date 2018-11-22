<?php include("../include/header.php"); ?>

<h1>Missing Classmates</h1>
<br />

<?php
	// Declare the file name
	$fileName = "missing.txt";
	
	// Open the text file
	$file = fopen($fileName, "r");
	
	// While the pointer is not at the end of the file
	while (!feof($file))
	{
		// Get the current row
		$fileRow = fgets($file, 4096);
		
		// Replace all of the commas in the file with a space
		$newRow = str_replace(",", " ", $fileRow);
		
		// Output the new string and break
		echo $newRow;
		echo "<br />";
	}
	
	//Close the file
	fclose($file);
?>

<br />

<?php include("../include/footer.php"); ?>