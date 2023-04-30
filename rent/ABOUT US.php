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
    <br><br><br><br><br><br>
    <div class="row">
        <div class="column21">
            <img class="aboutcar" src="CAR about.png">
        </div>
        <!-- <div class="column21"></div> -->
        <div class="column21">
            <p style="font-size: 14px">EVM Wheels is a self-driving car service from EVM Group. EVM Group is one of the most established networks of diverse companies. Right from our humble beginning through the hard work of over six decades, EVM has dared to dream big and dominate various business sectors while keeping with our primacies to maintain a customer-focused, value-based business capable of rising up to new challenges.<br _ngcontent-xgt-c72=""> EVM Wheels follows the same core values &amp; principles built by the EVM group, that in a nutshell, amounts to the reiteration that customer satisfaction is our top-most priority and that we would bend over backwards to ensure it. EVM Wheels strives to offer an hassle free self-driving experience to its customers. Customers can drive safe &amp; tension free with us as we offer a wide range of cars that covers everyone’s need, budget friendly pricing, be it daily, weekly or monthly, 24x7 roadside assistance in case of emergencies and fully insured vehicles so that you can drive without worries. We also care about your convince, as we offer pickup &amp; drop facilities on from all major airports as well as locations convenient to you. Whether renting a car for your dream vacation or for business enterprise, Wheels got you covered. Wheels has a wide range of vehicles available to meet every car rental need. Take your pick &amp; go drive.</p>
        </div>
    </div>

    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

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