<?php
$conn = mysqli_connect('localhost', 'root', '', 'projectRent');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$err = "";
session_start();

if (isset($_POST['submitb'])) {
    $model = $_POST['model2'];
    echo $model;
    $_SESSION['model'] = $model;
    header("Location: BOOK.php");
}
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

    <h2 style="margin-left:110px">CHOOSE YOUR OPTIONS</h2>

    <form method="POST">
        <div class="rowdrop">
            <div class="cldrop">
                <label for="pickcity">PICK UP CITY</label>
                <br><br>
                <select name="pickupcity" id="pickucity">
                    <option value="Kottayam">Kottayam</option>
                    <option value="Kanjirappally">Kanjirappally</option>
                    <option value="Cochin">Cochin</option>
                    <option value="Thiruvananthapuram">Thiruvananthapuram</option>
                </select>
            </div>
            <div class="cldrop">
                <label for="pick_date_time">PICK UP DATE AND TIME</label>
                <br><br>
                <input type="datetime-local" id="pickdaytime" name="pickdaytime">
            </div>
            <div class="cldrop">
                <label for="drop_date_time">DROP OFF DATE AND TIME</label>
                <br>
                <br>
                <select name="dropcity" id="dropcity">
                    <option value="Kottayam">Kottayam</option>
                    <option value="Kanjirappally">Kanjirappally</option>
                    <option value="Cochin">Cochin</option>
                    <option value="Thiruvananthapuram">Thiruvananthapuram</option>
                </select>
            </div>
            <div class="cldrop">
                <label for="pick_date_time">PICK UP DATE AND TIME</label>
                <br>
                <br>
                <input type="datetime-local" id="pickdaytime" name="pickdaytime">
            </div>
        </div>
        <center><input type="SUBMIT" name="submit" value="SUBMIT" class="subm"></center>
    </form>

    <?php
    $type="HATCHBACK";
    if (isset($_POST['submit'])) :

        if (isset($_SESSION['uname'])) :

            $sql = "SELECT * FROM vehicles where type='$type'";
            $result0 = mysqli_query($conn, $sql);
            $result = mysqli_fetch_all($result0, MYSQLI_ASSOC);

    ?>
            <div class="rowve">

                <form method="POST">
                    <div class="clve">
                        <img src="<?php echo $result[0]['image']; ?>" class="vandi">
                        <label for="model" class="carmodel" name="model2"><?php echo $result[0]['model']; ?></label>
                        <input name="model2" value="<?php echo $result[0]['model'] ?>" class="hideinput">
                        <div id="sepline"></div>
                        <div class="inrow">
                            <div class="incl">
                                <img src="petrol_icon.png" class="fuelicon" name="fuelicon">
                                <label for="fuelicon" class="fuelabel"><?php echo $result[0]['fuel type']; ?></label>
                            </div>
                            <div class="incl">
                                <img src="seat_icon.png" class="seaticon">
                                <label for="capacity" class="fuelabel"><?php echo $result[0]['capacity']; ?></label>
                            </div>
                            <div class="incl">
                                <img src="automatic_icon.png" class="gearicon">
                                <label for="transmission" class="fuelabel"><?php echo $result[0]['transmission']; ?></label>
                            </div>
                        </div>
                        <div id="sepline"></div>
                        <br>
                        <div class="inrow2">
                            <div class="incl2">
                                <label for="rent" class="rentlabel"> INR <?php echo $result[0]['rent']; ?></label>
                                <label for="status" class="rentlabel" style="font-color:red"> <?php echo $result[0]['statusw']; ?></label>
                            </div>
                        </div><br>
                        <div class="button">
                            <?php
                            if ($result[0]['statusw'] == "AVAILABLE") : ?>
                                <center> <input type="submit" name='submitb' class="subm" value="BOOK NOW"></center>
                            <?php endif; ?>
                        </div>
                    </div>
                </form>


                <form method="POST">
                    <div class="clve">
                        <img src="<?php echo $result[1]['image']; ?>" class="vandi">
                        <label for="model" class="carmodel"><?php echo $result[1]['model']; ?></label>
                        <input name="model2" value="<?php echo $result[1]['model'] ?>" class="hideinput">
                        <div id="sepline"></div>
                        <div class="inrow">
                            <div class="incl">
                                <img src="petrol_icon.png" class="fuelicon" name="fuelicon">
                                <label for="fuelicon" class="fuelabel"><?php echo $result[1]['fuel type']; ?></label>
                            </div>
                            <div class="incl">
                                <img src="seat_icon.png" class="seaticon">
                                <label for="capacity" class="fuelabel"><?php echo $result[1]['capacity']; ?></label>
                            </div>
                            <div class="incl">
                                <img src="automatic_icon.png" class="gearicon">
                                <label for="transmission" class="fuelabel"><?php echo $result[1]['transmission']; ?></label>
                            </div>
                        </div>
                        <div id="sepline"></div>
                        <br>
                        <div class="inrow2">
                            <div class="incl2">
                                <label for="rent" class="rentlabel"> INR <?php echo $result[1]['rent']; ?></label>
                                <label for="status" class="rentlabel" style="font-color:red"> <?php echo $result[1]['statusw']; ?></label>
                            </div>
                        </div><br>
                        <div class="button">
                            <?php
                            if ($result[1]['statusw'] == "AVAILABLE") : ?>
                                <center> <input type="submit" name='submitb' class="subm" value="BOOK NOW"></center>
                            <?php endif; ?>
                        </div>
                    </div>
                </form>


                <form method="POST">
                    <div class="clve">
                        <img src="<?php echo $result[2]['image']; ?>" class="vandi">
                        <label for="model" class="carmodel"><?php echo $result[2]['model']; ?></label>
                        <input name="model2" value="<?php echo $result[2]['model'] ?>" class="hideinput">
                        <div id="sepline"></div>
                        <div class="inrow">
                            <div class="incl">
                                <img src="petrol_icon.png" class="fuelicon" name="fuelicon">
                                <label for="fuelicon" class="fuelabel"><?php echo $result[2]['fuel type']; ?></label>
                            </div>
                            <div class="incl">
                                <img src="seat_icon.png" class="seaticon">
                                <label for="capacity" class="fuelabel"><?php echo $result[2]['capacity']; ?></label>
                            </div>
                            <div class="incl">
                                <img src="automatic_icon.png" class="gearicon">
                                <label for="transmission" class="fuelabel"><?php echo $result[2]['transmission']; ?></label>
                            </div>
                        </div>
                        <div id="sepline"></div>
                        <br>
                        <div class="inrow2">
                            <div class="incl2">
                                <label for="rent" class="rentlabel"> INR <?php echo $result[2]['rent']; ?></label>
                                <label for="status" class="rentlabel" style="font-color:red"> <?php echo $result[2]['statusw']; ?></label>
                            </div>
                        </div><br>
                        <div class="button">
                            <?php
                            if ($result[2]['statusw'] == "AVAILABLE") : ?>
                                <center> <input type="submit" name='submitb' class="subm" value="BOOK NOW"></center>
                            <?php endif; ?>
                        </div>
                    </div>
                </form>



                <form method="POST">
                    <div class="clve">
                        <img src="<?php echo $result[3]['image']; ?>" class="vandi">
                        <label for="model" class="carmodel"><?php echo $result[3]['model']; ?></label>
                        <input name="model2" value="<?php echo $result[3]['model'] ?>" class="hideinput">
                        <div id="sepline"></div>
                        <div class="inrow">
                            <div class="incl">
                                <img src="petrol_icon.png" class="fuelicon" name="fuelicon">
                                <label for="fuelicon" class="fuelabel"><?php echo $result[3]['fuel type']; ?></label>
                            </div>
                            <div class="incl">
                                <img src="seat_icon.png" class="seaticon">
                                <label for="capacity" class="fuelabel"><?php echo $result[3]['capacity']; ?></label>
                            </div>
                            <div class="incl">
                                <img src="automatic_icon.png" class="gearicon">
                                <label for="transmission" class="fuelabel"><?php echo $result[3]['transmission']; ?></label>
                            </div>
                        </div>
                        <div id="sepline"></div>
                        <br>
                        <div class="inrow2">
                            <div class="incl2">
                                <label for="rent" class="rentlabel"> INR <?php echo $result[3]['rent']; ?></label>
                                <label for="status" class="rentlabel" style="font-color:red"> <?php echo $result[3]['statusw']; ?></label>
                            </div>
                        </div><br>
                        <div class="button">
                            <?php
                            if ($result[3]['statusw'] == "AVAILABLE") : ?>
                                <center> <input type="submit" name='submitb' class="subm" value="BOOK NOW"></center>
                            <?php endif; ?>
                        </div>
                    </div>
                </form>
            </div>

            <div class="rowve">
                <form method="POST">
                    <div class="clve">
                        <img src="<?php echo $result[4]['image']; ?>" class="vandi">
                        <label for="model" class="carmodel"><?php echo $result[4]['model']; ?></label>
                        <input name="model2" value="<?php echo $result[4]['model'] ?>" class="hideinput">
                        <div id="sepline"></div>
                        <div class="inrow">
                            <div class="incl">
                                <img src="petrol_icon.png" class="fuelicon" name="fuelicon">
                                <label for="fuelicon" class="fuelabel"><?php echo $result[4]['fuel type']; ?></label>
                            </div>
                            <div class="incl">
                                <img src="seat_icon.png" class="seaticon">
                                <label for="capacity" class="fuelabel"><?php echo $result[4]['capacity']; ?></label>
                            </div>
                            <div class="incl">
                                <img src="automatic_icon.png" class="gearicon">
                                <label for="transmission" class="fuelabel"><?php echo $result[4]['transmission']; ?></label>
                            </div>
                        </div>
                        <div id="sepline"></div>
                        <br>
                        <div class="inrow2">
                            <div class="incl2">
                                <label for="rent" class="rentlabel"> INR <?php echo $result[4]['rent']; ?></label>
                                <label for="status" class="rentlabel" style="font-color:red"> <?php echo $result[4]['statusw']; ?></label>
                            </div>
                        </div><br>
                        <div class="button">
                            <?php
                            if ($result[4]['statusw'] == "AVAILABLE") : ?>
                                <center> <input type="submit" name='submitb' class="subm" value="BOOK NOW"></center>
                            <?php endif; ?>
                        </div>
                </form>
            </div>




            <form method="POST">
                <div class="clve">
                    <img src="<?php echo $result[5]['image']; ?>" class="vandi">
                    <label for="model" class="carmodel"><?php echo $result[5]['model']; ?></label>
                    <input name="model2" value="<?php echo $result[5]['model'] ?>" class="hideinput">
                    <div id="sepline"></div>
                    <div class="inrow">
                        <div class="incl">
                            <img src="petrol_icon.png" class="fuelicon" name="fuelicon">
                            <label for="fuelicon" class="fuelabel"><?php echo $result[5]['fuel type']; ?></label>
                        </div>
                        <div class="incl">
                            <img src="seat_icon.png" class="seaticon">
                            <label for="capacity" class="fuelabel"><?php echo $result[5]['capacity']; ?></label>
                        </div>
                        <div class="incl">
                            <img src="automatic_icon.png" class="gearicon">
                            <label for="transmission" class="fuelabel"><?php echo $result[5]['transmission']; ?></label>
                        </div>
                    </div>
                    <div id="sepline"></div>
                    <br>
                    <div class="inrow2">
                        <div class="incl2">
                            <label for="rent" class="rentlabel"> INR <?php echo $result[5]['rent']; ?></label>
                            <label for="status" class="rentlabel" style="font-color:red"> <?php echo $result[5]['statusw']; ?></label>
                        </div>
                    </div><br>
                    <div class="button">
                        <?php
                        if ($result[5]['statusw'] == "AVAILABLE") : ?>
                            <center> <input type="submit" name='submitb' class="subm" value="BOOK NOW"></center>
                        <?php endif; ?>
                    </div>
            </form>
            </div>



            <form method="POST">
                <div class="clve">
                    <img src="<?php echo $result[6]['image']; ?>" class="vandi">
                    <label for="model" class="carmodel"><?php echo $result[6]['model']; ?></label>
                    <input name="model2" value="<?php echo $result[6]['model'] ?>" class="hideinput">
                    <div id="sepline"></div>
                    <div class="inrow">
                        <div class="incl">
                            <img src="petrol_icon.png" class="fuelicon" name="fuelicon">
                            <label for="fuelicon" class="fuelabel"><?php echo $result[6]['fuel type']; ?></label>
                        </div>
                        <div class="incl">
                            <img src="seat_icon.png" class="seaticon">
                            <label for="capacity" class="fuelabel"><?php echo $result[6]['capacity']; ?></label>
                        </div>
                        <div class="incl">
                            <img src="automatic_icon.png" class="gearicon">
                            <label for="transmission" class="fuelabel"><?php echo $result[6]['transmission']; ?></label>
                        </div>
                    </div>
                    <div id="sepline"></div>
                    <br>
                    <div class="inrow2">
                        <div class="incl2">
                            <label for="rent" class="rentlabel"> INR <?php echo $result[6]['rent']; ?></label>
                            <label for="status" class="rentlabel" style="font-color:red"> <?php echo $result[6]['statusw']; ?></label>
                        </div>
                    </div><br>
                    <div class="button">
                        <?php
                        if ($result[6]['statusw'] == "AVAILABLE") : ?>
                            <center> <input type="submit" name='submitb' class="subm" value="BOOK NOW"></center>
                        <?php endif; ?>
                    </div>
            </form>
            </div>

            <form method="POST">
                <div class="clve">
                    <img src="<?php echo $result[7]['image']; ?>" class="vandi">
                    <label for="model" class="carmodel"><?php echo $result[7]['model']; ?></label>
                    <input name="model2" value="<?php echo $result[7]['model'] ?>" class="hideinput">
                    <div id="sepline"></div>
                    <div class="inrow">
                        <div class="incl">
                            <img src="petrol_icon.png" class="fuelicon" name="fuelicon">
                            <label for="fuelicon" class="fuelabel"><?php echo $result[7]['fuel type']; ?></label>
                        </div>
                        <div class="incl">
                            <img src="seat_icon.png" class="seaticon">
                            <label for="capacity" class="fuelabel"><?php echo $result[7]['capacity']; ?></label>
                        </div>
                        <div class="incl">
                            <img src="automatic_icon.png" class="gearicon">
                            <label for="transmission" class="fuelabel"><?php echo $result[7]['transmission']; ?></label>
                        </div>
                    </div>
                    <div id="sepline"></div>
                    <br>
                    <div class="inrow2">
                        <div class="incl2">
                            <label for="rent" class="rentlabel"> INR <?php echo $result[7]['rent']; ?></label>
                            <label for="status" class="rentlabel" style="font-color:red"> <?php echo $result[7]['statusw']; ?></label>
                        </div>
                    </div><br>
                    <div class="button">
                        <?php
                        if ($result[7]['statusw'] == "AVAILABLE") : ?>
                            <center> <input type="submit" name='submitb' class="subm" value="BOOK NOW"></center>
                        <?php endif; ?>
                    </div>
                </div>

            </form>
            </div>

        <?php else : ?>

            <center>
                <h2>PLEASE LOGIN TO CONTINUE</h2>
            </center>
        <?php endif; ?>
    <?php endif; ?>


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