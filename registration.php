<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<title>Agma Form</title>
	<!--<link rel="stylesheet" type="text/css" href="style.css">-->
	<style>
body {
	background-image: linear-gradient(to bottom right,#046900, rgb(249, 253, 4));
	display: flex;
	padding-left:5%;
	padding-top:30px;
	justify-content: center;
	align-items: center;
	height: 100vh;
	flex-direction: column;
}

*{
	font-family: sans-serif;
	box-sizing: border-box;
}

.form {
	display: relative;
	width: 400px;
	height: 600px;
	border: 1px solid #6e6a6a;
	box-shadow: 0px 10px 50px #550;
	padding: 5px 30px;
	background: #ffffff42;
	border-radius: 15px;
}
h2 {
	text-align: center;
	margin-bottom: 2px;
	font-weight:800;
	font-size:35px;
}

input {
	display: block;
	border: 3px #686464;
	width: 100%;
	height: 35px;
	padding: 5px;
	margin: 3px auto;
	border-radius: 5px;
	background: #ffffffbd;
}
label {
	color: #625f5f;
	font-size: 18px;
	padding: 12px;
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
   text-align: center;
   color: #A94442;
   padding: 2px;
	width: 80%;
	border-radius: 5px;
	margin: 5px auto;
}
.success {
	background: #d4edda;
	text-align: center;
	color: #40754c;
	padding: 2px;
	width: 80%;
	border-radius: 5px;
	margin: 5px auto;
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


/*use keyframes*/
@-webkit-keyframes spin{
    100%{-webkit-transform: rotate(360deg);}
}
@-moz-keyframes spin{
    100%{-webkit-transform: rotate(360deg);}
}
@keyframes spin{
    100%{-webkit-transform: rotate(360deg);}
}

/*Responsive start here*/
/*Media Queries*/

.form .logo{
	top: 10px;
	position: relative;
    width: 100px;
    height: 100px;
}
.form .logo .rotate_1{
	position: absolute;
	top: 10px;
	align-items: center;
    width: 100px;
    height: 100px;
    -webkit-transition: -webkit-transform 1s;
}
.form .logo .rotate_2{
	position: absolute;
  	top: 10px;
	align-items: center;
    width: 100px;
    height: 100px;
    -webkit-animation: spin 15s linear infinite; 
    -moz-animation: spin 15s linear infinite;
    animation: spin 15s linear infinite;
}

@media(max-width:820px){
    .form .logo .rotate_1{
        display: inline-block;
        margin: -30px 0 -86px 0;
        width: 90px;
        height: 90px;
    }
    .from .logo .rotate_2{
        display: inline-block;
        margin: -30px 0 -94px 0;
        width: 90px;
        height: 90px;
	}
	h2{
		text-align: center;
		margin-bottom: 5px;
		font-weight:800;
		font-size:35px;
	}
	label {
	font-size: 18px;
	padding: 10px;
	font-weight: 600;
}
}
	
@media(max-width:768px){
    .form .logo .rotate_1{
        display: inline-block;
        margin: -30px 0 -74px 0;
        width: 90px;
        height: 90px;
    }
    .form .logo .rotate_2{
        display: inline-block;
        margin: -30px 0 100px 0;
        width: 90px;
        height: 90px;
	}
	.form .logo{
	top: 30px;
	position: relative;
    width: 80px;
    height: 80px;
	}
	h2{
		text-align: center;
		margin-bottom: 5px;
		font-weight:800;
		font-size:32px;
	}
}



@media(max-width:720px){
    .form .logo .rotate_1{
        display: inline-block;
        margin: -30px 0 -74px 0;
        width: 90px;
        height: 90px;
    }
    .form .logo .rotate_2{
        display: inline-block;
        margin: -30px 0 100px 0;
        width: 90px;
        height: 90px;
	}
	.form .logo{
	top: 30px;
	position: relative;
    width: 80px;
    height: 80px;
	}
	h2{
		text-align: center;
		margin-bottom: 5px;
		font-weight:800;
		font-size:32px;
	}
}

@media(max-width:620px){
    .form .logo .rotate_1{
        display: inline-block;
        margin: -10px 0 -113px 0;
        width: 110px;
        height: 110px;
    }
    .form .logo .rotate_2{
        display: inline-block;
        margin: -20px 0 -95px 0;
        width: 110px;
        height: 110px;
	}
	
}

@media(max-width:540px){
    .form .logo .rotate_1{
        display: inline-block;
        margin: -30px 0 -74px 0;
        width: 90px;
        height: 90px;
    }
    .form .logo .rotate_2{
        display: inline-block;
        margin: -30px 0 100px 0;
        width: 90px;
        height: 90px;
	}
	.form .logo{
	top: 30px;
	position: relative;
    width: 80px;
    height: 80px;
	}
	h2{
		text-align: center;
		margin-bottom: 5px;
		font-weight:800;
		font-size:32px;
	}
}


@media(max-width:320px){
    .form .logo .rotate_1{
        display: inline-block;
        margin: -30px 0 -74px 0;
        width: 90px;
        height: 90px;
    }
    .form .logo .rotate_2{
        display: inline-block;
        margin: -30px 0 100px 0;
        width: 90px;
        height: 90px;
	}
	.form .logo{
	top: 30px;
	position: relative;
    width: 80px;
    height: 80px;
	}
	h2{
		text-align: center;
		margin-bottom: 5px;
		font-weight:800;
		font-size:32px;
	}
}

	</style>
</head>
<body>
<form action="registration-check.php" method="post">
		<div class="form">
	 	<div class="logo">
            <img class="rotate_1" src="Eleco new logo.png">
            <img class="rotate_2" src="Eleco new logo 1975.png">
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
		</div>
	</form>
     
</body>
</html>