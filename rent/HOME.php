<?php
session_start();
?>

<html>

<head>
    <title>
        EVM WHEELS
    </title>
    <link rel="stylesheet" href="Homecss.css ?v=<?php echo time(); ?>">
</head>

<body>
    <header>
        <div class="bg">
            <img src="logo111.png" class="logo">
            <div class="nav-bar">
                <ul class="nav">
                    <li class="navv"><a href="#home">HOME</a></li>
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

            <br><br><br>
            <br>
            <br>
            <h1 class="hd1">RENT YOUR FAVOURITE VEHICLE AT AN <span style="color:#FBFF00">AFFORDABLE RATE</span></h1>
            <p class="par"> Rent the best Cars</p>
            <br><br><br><br>





            <div class="row">
                <div class="column">
                    <a href="sedanlist.php">
                        <img class="imgcol" src="sedan1.png" width=250px height=250px></a>
                    <center>
                        <h2 class="bk1">BOOK A SEDAN</h2>
                    </center>
                </div>

                <div class="column">
                    <a href="Hatchbacklist.php">
                        <img class="imgcol" src="hatchback1.png" width=250px height=250px></a>
                    <center>
                        <h2 class="bk1">BOOK A HATCHBACK</h2>
                    </center>
                </div>
                <div class="column">
                    <a href="Suvlist.php">
                        <img class="imgcol" src="suv1.png" width=250px height=250px></a>
                    <center>
                        <h2 class="bk1">BOOK AN SUV</h2>
                    </center>
                </div>
            </div>


        </div>
    </header>






    <div class="container">
        <div class="section-title">
        <div class="text12">
            <h2>
            <br><br><br><center><b>How it Works?</b></center><br><br><br>
            </h2>
        </div>
        </div>
        <div class="row1">
            <div class="column1">
                <CENTER>
                    <div class=" clm12"><img src="work1.png"></div>
                    <p><b>Step 1</b><br><b>Search &amp; Book a Vehicle with us</b></p>
                    <p>Use our website or apps to search &amp; book a vehicle that suits your budget &amp; needs</p>
                </CENTER>
            </div>
            <div class="column1">
                <CENTER>
                    <div class="column12"><img src="work2.png"></div>
                    <p><b>Step 2<br>Pick Up your Vehicle</b></p>
                    <p>Ride from home or from any of our conveniently located sites around your city. We even offer pickup &amp; drop off at airports too.</p>
                </CENTER>
            </div>
            <div class="column1">
                <CENTER>
                    <div class="column12"><img src="work3.png"></div>
                    <p><b>Step 3<br>Drive your Vehicle</b></p>
                    <p>Explore where ever you want to with your loved ones.</p>
                </CENTER>
            </div>
            <div class="column1">
                <CENTER>
                    <div class="column12"><img src="work4.png"></div>
                    <p><b>Step 4<br>Return your Vehicle</b></p>
                    <p>Get the vehicle back to your preferred return location, and we will take it from there</p>
                </CENTER>
            </div>
        </div>
    </div>

    <div class="text12">
    <center>
        <br><br><h2>Why EVM Wheels ?</h2>
        <p>We are a self-drive vehicle rental agency, with offices all over Kerala. EVM Group was founded in 1952. Today, we are dealers for 16 automotive brands with showrooms from Trivandrum to Calicut. EVM Wheels follows the same core values & principles built by the EVM group. Customer satisfaction is our top-most priority.</p>
    </center><br><br>
    </div><br><br><br><br>




    <div class="rw1">
        <div class="clm1">
            <CENTER>
                <div class="clm12"><img src="choose1.png"></div>
                <h3><b>Flexible Prices</b></h3>
                <p style="font-size: 14px;">Book hourly, daily, weekly or monthly. We have got you covered.</p>
            </CENTER>
        </div>

        <div class="clm1">
            <CENTER>
                <div class="clm12"><img src="choose2.png"></div>
                <h3><b>No Hidden Charges</b></h3>
                <p style="font-size: 14px;">Our prices include taxes &amp; insurance. We have no hidden charges.</p>
            </CENTER>
        </div>

        <div class="clm1">
            <CENTER>
                <div class="clm12"><img src="choose3.png"></div>
                <h3><b>Low Security Deposit</b></h3>
                <p style="font-size: 14px;">Now book a vehicle paying minimum security <br>deposit.</p>
            </CENTER>
        </div>
    </div>
    <div class="rw1">
        <div class="clm1">
            <CENTER>
                <div class="clm12"><img src="choose4.png"></div>
                <h3><b>Speedy Refund</b></h3>
                <p style="font-size: 14px;">As we are able to do it within 5 days <br>only.</p>
            </CENTER>
        </div>

        <div class="clm1">
            <CENTER>
                <div class="clm12"><img src="choose5.png"></div>
                <h3><b>Go Anywhere</b></h3>
                <p style="font-size: 14px;">All your bookings include damage insurance. So you can enjoy your ride without worries.</p>
            </CENTER>
        </div>

        <div class="clm1">
            <CENTER>
                <div class="clm12"><img src="choose6.png"></div>
                <h3><b>24x7 Roadside Assistance</b></h3>
                <p style="font-size: 14px;">We offer round the clock roadside assistance. Help is always near to you.</p>
            </CENTER>
            <br><br>
        </div>
    </div>
    </div>





    <footer class="footer" style="background-color: black;">
        <div class="container">
            <div class="roww">
                <div class="cl12">
                        <div class="logoft"><img src="Logo_White.png" alt="logo"></div>
                        <p style="color: white;">evmwheels.com follows the same core values &amp; principles built by the EVM group. Customer satisfaction is our top-most priority.</p>
                </div>
                <div class="cl12">
                        <br><br><br><center><h3 style="color: #ffc107;">About</h3>
                        <ul class="list">
                            <li><a style="color: white;" href="HOME.php"> Home </a></li>
                            <li><a style="color: white;" href="ABOUT US.php"> About </a></li>
                            <li><a style="color: white;" href="login.php"> Sign In </a></li>
                        </ul>
                        </center>
                    </div>               
                <div class="cl12">
                <br><br><br><center><h3 style="color: #ffc107;">Contact Us</h3>
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