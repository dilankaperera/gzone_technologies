<!-- header -->
<?php include_once('../Templates/header.php'); ?>

<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Gzone Technologies</title>

	<link rel="stylesheet" type="text/css" href="../styles/style.css" media="all"/>
	<link href="../css/font-awesome.css" rel="stylesheet">

</head>

<body>

<!-- content -->
<div class="main_content">
	<h3 style="text-align :center;">become an <b>Agent</b> of <b>Gzone Technologies</b> & earn profit,</h3>
	 <p style="text-align :center;">learn more</p>
    <form class = "register-form" action = "includes/agentval.php" method="POST">
	<div class="reg">
		<div class="container">
			<h2 class="heading_reg">Agent Registration</h2>
			<div class="reg_form_grid">
				<ul>
					<li><label for="fname"> <b> First Name <span class="req">*</span></b> </label></li>
			    <li><input type="text" size="50" id="fname" name="fname"  required autocomplete="off"></li>
					<br>
					<li><label for="lname"> <b> Last Name <span class="req">*</span></b> </label></li>
					<li><input type="text" size="50" id="lname" name="lname"  required autocomplete="off"></li>
					<br>
					<li><label for="email"> <b>E-mail</b><span class="req">*</span></label></li>
			    <li><input type="varchar" size="50" id="email" name="email"  required autocomplete="off"></li>
					<br>
					<li><label for="pnumber"> <b>Phone number</b><span class="req">*</span></label></li>
					<li><input type="varchar" size="50" id="pnumber" name="pnumber" required autocomplete="off"></li>
					<br>
					<li><label for="bussname"> <b>Bussiness Name</b><span class="req">*</span></label></li>
					<li><input type="varchar" size="50" id="bussname" name="bussname" required autocomplete="off"></li>
					<br>
					<li><label for="nic"> <b>NIC No.</b></label><span class="req">*</span></li>
					<li><input type="varchar" size="50" id="nic" name="nic" required autocomplete="off"></li>
					<br>
					<li><label for="lic"> <b>License No.</b></label></li>
					<li><input type="varchar" size="50" id="lic" name="lic"></li>
					<br>
					<li><label for="pwd"> <b>Password </b> <span class="req">*</span></label></li>
			    <li><input type="password" size="50" id="pwd" name="pwd"  required autocomplete="off"></li>
					<br>
					<li><label for="repwd"> <b> Re-enter Password </b> <span class="req">*</span></label></li>
			    <li><input type="password" size="50" id="repwd" name="repwd"  required autocomplete="off"></li>
				</ul>
				<br>

				<form method="get" action="../index.php">

				<input type="submit" name = "register" value="Request For Register">
					<!-- <button>Register</button> -->

				</form>


				<br>
				Already have an account?  <a href="../login.php"> Sign in </a>
			</div>
		</div>
	</div>
    </form>>
</div>

<!-- footer -->



</body>
</html>

<?php


include_once('../Templates/footer.php');
 ?>