<html>
	<head>
	<style>

	*{
		margin: 0;
		padding: 0;
		font-family: Century Gothic;
	}

	body{
		background-image: url(15.jpg);
		height: 100vh;
		background-size: cover;
		background-position: center;
	}
		.reg{
		padding: 15px 25px; font-size: 24px; text-align: center; cursor: pointer; outline: none; color: #fff; background-color: #00802b; border:none; border-radius: 15px; box-shadow: 0 9px #999; font-size:20pt;}
	.reg:hover{
		background:color: #3e8e41;}
	.reg:active{
		background:color: #3e8e41;
		box-shadow: 0 5px #666;
		transform: translateY(4px);
	}
	.sub1{
		margin:20px; padding: 15px 25px; font-size: 24px; text-align: center; cursor: pointer; outline: none; color: #fff; background-color: #cc0000; border:none; border-radius: 15px; box-shadow: 0 9px #999; font-size:20pt;}
	.sub1:hover{
		background:color: #3e8e41;}
	.sub1:active{
		background:color: #3e8e41;
		box-shadow: 0 5px #666;
		transform: translateY(4px);
	}
	</style>
	<script>
	function passwordval(){
	var a=document.getElementById("pass").value;	
	var b=document.getElementById("repass").value;
	if(a!=b){
	document.getElementById("messages").innerHTML="**PASSWORDS ARE NOT MATCHING";
	return false;
	}
	}
	</script>
		<title>Doctor Registration</title>
		<form style="font-size:30pt;" onsubmit="return passwordval()" action="insertdoc.php" method="POST">
		<fieldset>
			<legend align="center"><b>DOCTOR REGISTRATION</b></legend>
			NAME*: <input type="text" name="name" placeholder="Enter your name" size="30" style="font-size:25pt; opacity:0.7;" required><br><br>
			USERNAME*: <input type="text" id="uname" name="uname" placeholder="Create your username" size="25" style="font-size:25pt; opacity:0.7;" required/><br><br>
			PASSWORD*: <input type="password" id="pass" name="pass" placeholder="Create your password" id="pass" size="25" value="" style="font-size:25pt; opacity:0.7;" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required/><br><br>
			RETYPE PASSWORD*: <input type="password" name="repass" placeholder="Retype your password" id="repass" value="" size="25" style="font-size:25pt; opacity:0.7;" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required><span id="messages" style="color:red;"></span><br><br>
			<font color="blue" size="4"><b><i><p>* Password must contain one small character</p><p>* One capital character</p><p>* one special character</p><p>* Atleast 8 characters</p></font></b></i> <br>
			DOC-ID*: <input type="text" name="docid" placeholder="Enter your DOC-ID" size="20" style="font-size:25pt; opacity:0.7;" required><br><br>
			<input class="reg" type="submit" name="reg" value="Register"> <input class="sub1" type="reset" value="Reset">
		</fieldset>
		</form>
	</head>
</html>
