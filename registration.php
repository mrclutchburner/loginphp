<!DOCTYPE html>
<html>
<head>
	<title>Agma Form</title>
	<!--<link rel="stylesheet" type="text/css" href="style.css">-->
	<style>
body {
	background-image: linear-gradient(to bottom right,#046900, rgb(249, 253, 4));
	display: flex;
	padding-left:5%;
	padding-top:30px;
	justify-content: left;
	align-items: left;
	height: 100vh;
	flex-direction: column;
}

*{
	font-family: sans-serif;
	box-sizing: border-box;
}

form {
	float:center;
	align-items:center;
	width: 400px;
	border: 1px solid #6e6a6a;
	box-shadow: 0px 10px 50px #550;
	padding: 10px 30px;
	background: #ffffff42;
	border-radius: 15px;
}
img{
    width: 130px;
    height: 130px;
    text-align: center;
    display: block;
    justify-content: center;
    align-items: center;
    margin: 5px auto;
  }
h2 {
	text-align: center;
	margin-bottom: 5px;
	font-weight:800;
	font-size:35px;
}

input {
	display: block;
	border: 3px #686464;
	width: 95%;
	padding: 5px;
	margin: 5px auto;
	border-radius: 5px;
	background: #ffffffbd;
}
label {
	color: #625f5f;
	font-size: 18px;
	padding: 10px;
	font-weight: 600;
}

button {
	float: right;
	background: #046900;
	font-weight:500;
	padding: 10px 15px;
	color: #ffffff;
	border-radius: 5px;
	margin-right: 10px;
	border: 2px solid rgb(250, 205, 4);
}
button:hover{
	color: #046900;
	background: #ffffff;
	font-weight:500;
	border: 2px solid #046900;
}
.error {
   background: #F2DEDE;
   color: #A94442;
   padding: 10px;
   width: 95%;
   border-radius: 5px;
   margin: 20px auto;
}
.success {
	background: #d4edda;
	color: #40754c;
	padding: 10px;
	width: 95%;
	border-radius: 5px;
	margin: 20px auto;
 }

h1 {
	text-align: center;
	color: #fff;
}

a {
    float: left;
    padding: 10px 15px;
    color: #444;
    border-radius: 5px;
    margin-right: 10px;
    border: none;
    text-decoration: none;
}
a.ca {
    float: left;
    padding: 10px 15px;
    color: #444;
    border-radius: 5px;
    margin-right: 10px;
    border: none;
    text-decoration: none;
}
a.ca:hover {
    text-decoration: underline;
    color: #555;
}
	</style>
</head>
<body>
     <form action="registration-check.php" method="post">
	 	<div className="logo">
            <img src="logo.png" alt="Logo"/>
        </div>
     	<h2>Register</h2>
		
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

		<?php if (isset($_GET['success'])) { ?>
     		<p class="success"><?php echo $_GET['success']; ?></p>
     	<?php } ?>

		<label>MCO Name</label>
		<?php if (isset($_GET['name'])) { ?>
			 <input type="text" 
			 		name="name"
					placeholder="Name e.g (Juan G. Dela Cruz)"
					value="<?php echo $_GET['name']; ?>"><br>
     	<?php }else{ ?>
			<input type="text"
				   name="name"
				   placeholder="Name e.g (Juan G. Dela Cruz)"><br>
		<?php }?>

		<label>Account No.</label>
		<?php if (isset($_GET['acctnum'])) { ?>
			 <input type="text" 
			 		name="acctnum"
					placeholder="Account No. e.g (00-000-0000)"
					value="<?php echo $_GET['acctnum']; ?>"><br>
     	<?php }else{ ?>
			<input type="text"
				   name="acctnum"
				   placeholder="Account No. e.g (00-000-0000)"><br>
		<?php }?>

		<label>Address</label>
		<?php if (isset($_GET['address'])) { ?>
			 <input type="text" 
			 		name="address"
					placeholder="Address e.g (Brgy. Cau-ayan Pototan, Iloilo)"
					value="<?php echo $_GET['address']; ?>"><br>
     	<?php }else{ ?>
			<input type="text"
				   name="address"
				   placeholder="Address e.g (Brgy. Cau-ayan Pototan, Iloilo)"><br>
		<?php }?>

		<label>Contact No.</label>
		<?php if (isset($_GET['contact'])) { ?>
			 <input type="text" 
			 		name="contact"
					placeholder="Contact No. e.g (09123456789)"
					value="<?php echo $_GET['Conatct']; ?>"><br>
     	<?php }else{ ?>
			<input type="text"
				   name="contact"
				   placeholder="Contact e.g (09123456789)"><br>
		<?php }?>
	
     	<button type="submit">Register</button>
     </form>
</body>
</html>