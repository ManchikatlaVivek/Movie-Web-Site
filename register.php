<!doctype html>
<html>
<head>
<style >

body{
	background:url("images/reg.jpg");
}
#for{
	text-align:center;

	
}
#header{

    color:white;
    text-align:center;
    padding:20px;
    font-size: 5em;
}

.form1
{
	text-align: center;

}



</style>
</head>
<body>
<div id="header">Sign Up</div>
		<form action="signUpPage.php" method="post">
			<div id="for">
				<p  class="form1"><input type="text" size="40"  name="username" placeholder="username"  autofocus required> </p>
				<p class="form1"><input type="password" size="40" name="pass" placeholder="password" required> </p>
				<p class="form1"><input type="password" size="40" name="repass" placeholder="Re-enter password" required> </p>
				<p class="form1"><input type ="email" size="40" name="email" placeholder="Email" required> </p>
				<p class="form1"><input type="text" size="40" name="phone" placeholder="Phone Number" pattern="[0-9]{10}" required> </p>
				<p class="form1"><input type="date"  max="2015-11-12" name="bday"></p>
				<p class="form1"><select name="gender"  placeholder="select" required>
				  <option value="M">Male</option>
				  <option value="F">Female</option>
				</select></p>
				
				 <p class="form1"><input type="submit" value="signup">	</p>
				</div>
		</form>
</body>
</html>