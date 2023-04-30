<?php
$conn = mysqli_connect('localhost', 'root', '', 'projectRent');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$err = "";
session_start();

$model = $_SESSION['model'];

if (isset($_POST['submit'])) {
    $trnid = $_POST['trnid'];
    $statusw="BOOKED";
    $query = "UPDATE vehicles set trnid='$trnid', statusw='$statusw' WHERE model='$model'";
    if(mysqli_query($conn,$query))
    {
        echo "<script>alert('BOOKED SUCCESSFULLY')</script>";
        echo '<script>window.location.href="HOME.php"</script>';
    }
}
?>

<head>
    <title>
        EVM WHEELS
    </title>
    <link rel="stylesheet" href="COMMON.css ?v=<?php echo time(); ?>">
</head>

<body>
    <img src="logo111.png" class="logo">
    <div class="nav-bar">
        <ul class="nav">
            <li class="navv"><a href="HOME.php">HOME</a></li>
            <li class="navv"><a href="ABOUT US.php">ABOUT US</a></li>
            <li class="navv"><a href="CONTACT.php">CONTACT</a></li>

        </ul>
        <?php
        if (isset($_SESSION['uname'])) :
        ?>
            <button class="login" onclick="window.location.href='logout.php';">LOGOUT</button>
            <button class="reg"><?php echo $_SESSION['uname'] ?></button>
        <?php else : ?>

            <button class="login" onclick="window.location.href='login.php';">LOGIN</button>
            <button class="reg" onclick="window.location.href='registration1.php';">REGISTER</button>

        <?php endif; ?>

    </div><br><br><br>
    <form method="post">
        <center>
            <h1> PAYMENT </h1>
            <h3>Scan the QR code and do the payment and enter the transaction id below</h3>
            <br><br><br><br>
        <img src="qr.jpg" class="qr">
        <br><br><br><br>
        <div class="input-box">
            <span class="details">TRANSACTION ID  </span>
            <input type="text" placeholder="Enter your Transaction id" id="t1" name="trnid" class="trn">
        </div>
        <div class="button" onclick="details()">
            <input type="submit" name="submit" value="SUBMIT">
        </div>
        </center>
    </form>



        <br><br><br><br><br><br>
    <footer class="footer" style="background-color: black;">
        <div class="container">
            <div class="roww">
                <div class="cl12">
                    <div class="logoft"><img src="Logo_White.png" alt="logo"></div>
                    <p style="color: white;">evmwheels.com follows the same core values &amp; principles built by the EVM group. Customer satisfaction is our top-most priority.</p>
                </div>
                <div class="cl12">
                    <br><br><br>
                    <center>
                        <h3 style="color: #ffc107;">About</h3>
                        <ul class="list">
                            <li><a style="color: white;" href="HOME.php"> Home </a></li>
                            <li><a style="color: white;" href="ABOUT US.php"> About </a></li>
                            <li><a style="color: white;" href="login.php"> Sign In </a></li>
                        </ul>
                    </center>
                </div>
                <div class="cl12">
                    <br><br><br>
                    <center>
                        <h3 style="color: #ffc107;">Contact Us</h3>
                        <ul class="ftcontact">
                            <li>
                                <label style="color: white; font-size: 12px;">Email:</label> <a style="color: white; font-size: 12px;" href="mailto:support@evmwheels.com"> support@evmwheels.com </a>
                            </li>
                            <li>
                                <label style="color: white; font-size: 12px;">Phone:</label> <a style="color: white; font-size: 12px;" href="tel:+918330859255" style="color: white;"> 91 833 085 9255 </a>
                            </li>
                        </ul>
                    </center>
                </div>
            </div>
            <div class="line"></div>
            <div class="copyright-area">
                <p style="color: white;">Copyright @2022 EVM Group</p>
            </div>
        </div>
        </div>
    </footer>
</body>

</html>