<?php

session_start();
    if(isset($_POST['submit'])){
    
        if((isset($_POST['search']) && $_POST['search'] != '')){
            // User Input
           $search = $_POST['search'];
            $errorMsg = checkSearch($search);
        }
    }
    
function checkSearch($search){

$xss =  "<>"

	//check xss
	if (str_contains($verify[0], $search) || str_contains($verify[1], $search)){
		//reset form input
		$_POST = array();
		header("location: index.php");
		// die();

	}
	else if (){
		
	}

	else{
	$_SESSION['search'] = $search;
	header("location: main.php");
	}
}

?>

<!DOCTYPE html>
<html>
<head>
<title>Pract Test</title>
<link rel="stylesheet" href="style.css">
</head>

<body>
	
	<div class="container">
		<h1>PHP Pract Test</h1>
		<?php 
			if(isset($errorMsg))
			{
				echo "<div class='error-msg'>";
				echo $errorMsg;
				echo "</div>";
				unset($errorMsg);
			}
		?>
		<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
			<div class="field-container">
				<label>Search</label>
				<input type="text" name="search" required placeholder="Enter Search term">
			</div>
			<div class="field-container">
				<button type="submit" name="submit">Submit</button>
			</div>
			
		</form>
	</div>
</body>
</html>