<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['acctnum']) && isset($_POST['name']) 
    && isset($_POST['address']) && isset($_POST['contact'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$acctnum = validate($_POST['acctnum']);
    $name = validate($_POST['name']);
    $address = validate($_POST['address']);
    $contact = validate($_POST['contact']);
    
    $user_data = 'acctnum'. $acctnum. '&name'. $name;


	if (empty($acctnum)) {
		header("Location: registration.php?error=Account number is required&$user_data");
	    exit();
	}
    else if(empty($name)){
        header("Location: registration.php?error=Name is required&$user_data");
	    exit();
	}
    else if(empty($address)) {
        header("Location: registration.php?error=Address is required&$user_data");
	    exit();
	}
    else if(empty($contact)) {
        header("Location: registration.php?error=Contact Number is required&$user_data");
	    exit();
	}
    else{
        //hashing password
		$sql = "SELECT * FROM users WHERE account='$acctnum'";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
            header("Location: registration.php?error=The account number is already used&$user_data");
	        exit();
        }else{
            $sql2 = "INSERT INTO users (account, address, name, contact) VALUES('$acctnum', '$address', '$name' , '$contact')";
            $result2 = mysqli_query($conn, $sql2);
            if ($result2){
                header("Location: registration.php?success=Registration completed successfully");
                exit();
            }else{
                    header("Location: registration.php?error=unknown error occured&$user_data");
                    exit();
            }
        }

	}
	
}else{
	header("Location: registration.php");
	exit();
}