<?php
    session_start();
	
	$type1 = $_POST['type1']; 
	$type2 = $_POST['type2']; 
	$type3 = $_POST['type3']; 
	$type4 = $_POST['type4'];  
	
	
	if ($type1 == "boolean") {
		$result += 25;
	}
	
	if ($type2 == "resource") {
		$result += 25;
	}
	
	if ($type3 == "այո") {
		$result += 25;
	}
		
	if ($type4 = 'GOOGLE') {
        $result += 25;
        
    }
    
    $result = $_POST['result'];
    $_SESSION['result'] = $result;

	echo "<center>Դուք անցաք թեստը <strong>$_SESSION['result']%</strong></center>";
?>