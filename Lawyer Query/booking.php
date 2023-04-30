<?php
session_start();
if(!$_SESSION['auth']){
  header('location:registration1.php');
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/512/6811/6811805.png">
    <link rel="stylesheet" href="booking.css"/>
    <title>Lawyers Query/Booking</title>
   </head>
<body>
  <form method="post">
  <section>
  <div class="navbar">
        <div class="logo">
            <img src="https://cdn-icons-png.flaticon.com/512/6811/6811805.png"
                alt="Lawyers Query" height="70px" width="70px" srcset="">
        </div>
        <div class="tl"><b>Lawyers Query</b></div>
        <a href="home1.php">Home</a>
        <a href="registration1.php">Registration</a>
        <a href="login.php">Login</a>
    </div> 
  <div class="container">
    <div class="title">BOOKING</div>
    <div class="content">
        <div class="user-details">


        <div class="input-box">
            <span class="details">LAWYER</span>
            <select name="lname">
            <option> Select lawyer</option>
            <?php
// Create connection
$conn =mysqli_connect('localhost','root','','lawyers_query');

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$lw="select * from lawyer";
$result=mysqli_query($conn,$lw);
while($row=mysqli_fetch_array($result)){
?>
<option value="<?php echo $row['id'];?>"><?php echo $row['name'];?></option>
<?php } ?>
</select>



            <span id="nc"></span>
          </div>

          <div class="input-box">
            <span class="details">Client</span>
            <input type="text" placeholder="Client Name" name="cname" id="t2" onkeyup="validateCname()" required>
            <span id="uc"></span>
          </div>
        </div>

          <div class="user-details">
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" placeholder="Email" name="email" id="t3" onkeyup="validateEmail()" required>
            <span id="em"></span>
          </div>

          <div class="input-box">
            <span class="details">Location</span>
            <select name="loc">
            <option> Select location</option>
            <?php
// Create connection
$conn =mysqli_connect('localhost','root','','lawyers_query');

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$lc="select * from lawyer";
$result=mysqli_query($conn,$lc);
while($row=mysqli_fetch_array($result)){
?>
<option value="<?php echo $row['id'];?>"><?php echo $row['loc'];?></option>
<?php } ?>
</select>
          </div>
        </div>

        <div class="user-details">
          <div class="input-box">
            <span class="details">Date</span>
            <input type="date" name="date" id="t5"  required>
          </div>

          <div class="input-box">
            <span class="details">Time</span>
            <input type="time"  name="time" id="t6"  required>
          </div>
        </div>

        <div class="button">
          <input type="submit" id="sb" name='save' value="Book">
        </div>
    </div>
  </div>
</section>
</form>
</body>
</html>
<?php
// Create connection
$conn =mysqli_connect('localhost','root','','lawyers_query');

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$lw="select * from lawyer";
$result=mysqli_query($conn,$lw);
if(isset($_POST['save']))
{
$txtlname = $_POST['lname'];
$txtcname = $_POST['cname'];
$txtEmail = $_POST['email'];
$txtloc = $_POST['loc'];
$txtdate = $_POST['date'];
$txttime = $_POST['time'];
// Check connection

$sql = "INSERT INTO booking ( lname, cname , email, loc, date,time) VALUES ('$txtlname','$txtcname', '$txtEmail', '$txtloc', '$txtdate','$txttime')";

if($conn->query($sql) === TRUE){
	?>
	<script>
		if(window.confirm('Booked succsesfully'))
		{
			window.location.href='home1.php';
		};
  </script>
	<?php
}
else{
	?>
	<script>
		if(window.confirm('Oops!!!!!  failed '))
		{
			window.location.href='booking.php';
		};
  </script>
	<?php
}
}

mysqli_close($conn);
?>