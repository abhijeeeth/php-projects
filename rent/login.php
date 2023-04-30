<?php
$conn =mysqli_connect('localhost','root','','projectRent');

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$err = "";
session_start();
if(isset($_SESSION['auth'])) {
    header("Location: Home.php");
    return;
}
if (isset($_POST['submit'])) {
        $email = $_POST['email'];
        $password = $_POST['pass'];

        $query = "SELECT * FROM registration WHERE email='$email' AND pwd='$password'";
        $find_user = mysqli_query($conn,$query);
        $result = mysqli_fetch_all($find_user,MYSQLI_ASSOC);
        if(count($result) > 0) {
            $_SESSION['auth'] = "true";
            $_SESSION['uname'] = $result[0]['uname'];
            $_SESSION['email'] = $result[0]['email'];
			echo "<script>alert(20)</script>";
            header("Location:Home.php");
        } else {
            $err = "Email or password incorrect";
        }
}
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <link rel="shortcut icon" href="logo111.png">
        <link rel="stylesheet" href="login.css ?v=<?php echo time();?>">
    <script>

    </script>

</head>

<body>
    <form method="post">
        <section>

            <div class="container">
                <div class="title">LOGIN</div>
                <center>
                    <div class="content">
                        <div class="user-details">
                            <center>
                                <div class="input-box">
                                    <span class="details">EMAIL</span>
                                    <input type="text" placeholder="Enter your emailid" id="t1" name="email">
                                </div>
                            </center>
                        </div>
                        <div class="user-details">
                            <center>
                                <div class="input-box">
                                    <span class="details">PASSWORD</span>
                                    <input type="password" placeholder="Enter your password" id="t4" name="pass">
                                </div>
                            </center>
                        </div>
                    </div>
                    <div class="button" onclick="details()">
                        <input type="submit" class="bttn" name='submit' value="Login">
                    </div>
                    <p class="txt2"><?php echo $err ?></p>
						<div class="text-center p-t-136">
							<a class="txt3" href="registration1.php">
								Create your Account
								<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
							</a>
						</div>
                </center>
            </div>
        </section>
    </form>
</body>

</html>