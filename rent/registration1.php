<?php
// Create connection
$conn =mysqli_connect('localhost','root','','projectRent');

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['save']))
{
  
$txtName = $_POST['fname'];
$txtUser = $_POST['uname'];
$txtEmail = $_POST['email'];
$txtPhone = $_POST['phone'];
$txtpwd = $_POST['pwd'];
// Check connection

$sql = "INSERT INTO registration ( fname, uname , email, phone, pwd) VALUES ('$txtName','$txtUser', '$txtEmail', '$txtPhone', '$txtpwd')";
if(mysqli_query($conn,$sql)==true)
{
header("location:login.php");
}
else{
  echo '<script>alert("user already exists")</script>';
}
}
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="shortcut icon" href="logo111.png">
    <link rel="stylesheet" href="registration.css ?v=<?php echo time();?>">


   </head>
<body>  
  <script >
function validateName() {
	var letters = /^[A-Za-z ]*$/;
	var fname = document.getElementById("t1").value;
	
	if ((!letters.test(fname) || fname.length <= 2) && fname.length>0) {
		document.getElementById("nc").innerHTML = "Name should only contain alphanumeric and be at least 3 characters long";
        return false;
	} else {
		document.getElementById("nc").innerHTML = "";
        return true;
	}
}


function validateUname() {
	var letters =/^[A-Za-z ]*$/;
	var uname = document.getElementById("t2").value;
	if ((!letters.test(uname) || uname.length <= 2) && uname.length>0) {
		document.getElementById("uc").innerHTML = "Username should only contain alphanumeric and be at least 3 characters long";
        return false;
	} else {
		document.getElementById("uc").innerHTML = "";
        return true;
	}
}



function validateEmail() {
	var email_exp =/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	var email = document.getElementById("t3").value;
	if (!email_exp.test(email)||!(email.length >0)) 
	{
		document.getElementById("em").innerHTML = "Invalid Email";
        return false;
	} else {
		document.getElementById("em").innerHTML = "";
        return true;
	}
}

function validatePhone() {
	var ph_exp =/^\d{10}$/;
	var phone = document.getElementById("t4").value;
	if (!ph_exp.test(phone)||!(phone.length >0) && phone.length<=9 ){
		document.getElementById("ph").innerHTML = "Please enter values between 0-9 and Length should be 10 digits";
        return false;
	} else {
		document.getElementById("ph").innerHTML = "";
        return true;
	}
}

function validatePwd() {
	var pwd_exp =/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-])/;
	var pwd = document.getElementById("t5").value;
	if (!pwd_exp.test(pwd) || ((pwd.lenght<=12)&&(pwd.lenght>5))){
		document.getElementById("pw").innerHTML = "password contains only Upper case, Lower case, Special character and Numeric letter minimum 5 and maximum 12 letters ";
        return false;
	} else {
		document.getElementById("pw").innerHTML = "";
        return true;
	}
}


function validateCpwd() {
	var cpwd = document.getElementById("t6").value;
  var pwd = document.getElementById("t5").value;
	if (pwd!==cpwd) {
		document.getElementById("cpw").innerHTML = "Password not Matched";
        return false;
	} else {
		document.getElementById("cpw").innerHTML = "";
        return true;
	}
}

function checkall()
{
  if(validateUname()&&validatePwd()&&validatePhone()&&validateName()&&validateEmail()&&validateCpwd())
  return true;

  return false;
}

// function disp_alert()
// {
  // if (window.confirm("REGISTRATION SUCCESSFUL!!!!!!   PLEASE LOGIN TO CONTINUE")){ window.open = 'login.php'};
// }

function clear_fun() {
	document.getElementById("t1").value = "";
	document.getElementById("t2").value = "";
	document.getElementById("t3").value = "";
	document.getElementById("t4").value = "";
	document.getElementById("t5").value = "";
	document.getElementById("t6").value = "";
}</script>
  <form method="post" onsubmit="return checkall()">
  <section>
  <div class="container">
    <div class="title">Registration</div>
    <div class="content">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" placeholder="Enter your Name" name="fname" id="t1" onkeyup="validateName()" required>
            <span id="nc"></span>
          </div>

          <div class="input-box">
            <span class="details">Username</span>
            <input type="text" placeholder="Enter your Username" name="uname" id="t2" onkeyup="validateUname()" required>
            <span id="uc"></span>
          </div>
          </div>


          <div class="user-details">
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" placeholder="Enter your Email" name="email" id="t3" onkeyup="validateEmail()" required>
            <span id="em"></span>
          </div>

          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" placeholder="Enter your Phone Number" name="phone" id="t4" onkeyup="validatePhone()" required>
            <span id="ph"></span>
          </div>
          </div>


          <div class="user-details">
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" placeholder="Enter your Password" name="pwd" id="t5" onkeyup="validatePwd()" required>
            <span id="pw"></span>
          </div>

          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="password" placeholder="Confirm your password" name="cpwd" id="t6" onkeyup="validateCpwd()" required>
            <span id="cpw"></span>
          </div>
        </div>
        <div class="button">
          <input type="submit" id="sb" name='save' value="Register">
        </div>
    </div>
  </div>
</section>
</form>

</body>
</html>

