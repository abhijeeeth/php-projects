<?php
session_start();
?>


<html>

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
    </div>


    <center>
        <br><br><br>
        <div class="row31">
            <div class="column31">
                <a href="mailto:support@evmwheels.com">
                    <img src="mail.png" class="icon">
                    <h3>Mail Us</h3>
                    <p>support@evmwheels.com</p>
                </a>
            </div>

            <div class="column31">
                <a href="tel:+918330859255">
                    <img src="call.png" class="icon">
                    <h3>Call Us</h3>
                    <p>+91 833 085 9255</p>
                </a>
            </div>
        </div>
        <br><br>
        <div class="row31">
            <div class="column32">
            <h1> CONTACT US </h1>
                <form method="post">
                    <input type="text" placeholder="name" class="trn2" name="fname"><br><br>
                    <input type="email" placeholder="email" class="trn2" name="email"><br><br>
                    <input type="text" placeholder="phone number" class="trn2" name="noo"><br><br>
                    <textarea name="msg" class="trn22" placeholder="message" id="" cols="30" rows="10"></textarea><br><br>
                    <input type="submit" value="send message" class="btn" name="send">
                </form>
            </div>
        </div>
    </center>


    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

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