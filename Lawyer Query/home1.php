<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/512/6811/6811805.png">
    <link rel="stylesheet" href="home.css" />
    <link href="https://fonts.googleapis.com/css2?family=Bungee+Spice&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Lawyers Query</title>

<body>

    <div class="navbar">
        <div class="logo">
            <img src="https://cdn-icons-png.flaticon.com/512/6811/6811805.png"
                alt="Lawyers Query" height="70px" width="70px" srcset="">
        </div>
        <div class="tl"><b>Lawyers Query</b></div>

        <a href="home1.php">Home</a>
        <a href="About.html">About Us</a>
        <a href="Contact.html">Contact</a>
    <?php if(isset($_SESSION['auth'])): ?>
        <a href=""><?php echo $_SESSION['uname']?></a>
        <a href="logout.php">Logout</a>
    <?php else: ?>
        <a href="registration1.php">Registration</a>
        <a href="login.php">Login</a>
    <?php endif; ?>  
   


    </div>
    <div class="section">


        <div class="section1">
            <center>
                <div class="t1"><b>Free Legal Advice Online<br>
                        From Top Rated Lawyers</b></div><br>
                <div class="t2">Choose from over 10,000 lawyers across 700+ cities in India</div>
                <br>
                <button type="button" class="b1" onclick="window.location.href='product.html'">TALK TO A LAWYER</button>&nbsp;&nbsp;&nbsp;&nbsp;
                <button type="button" class="b2" onclick="window.location.href='Contact.html'">ASK A FREE QUESTION</button>
            </center>
        </div>



        <div class="homepage">
            <center>
                <div class="t3"><b>Top-rated lawyers in India</b></div>
            </center><br><br>

            <div class="rowf">
                <div class="column">
                    <img src="https://images.pexels.com/photos/4427614/pexels-photo-4427614.jpeg?auto=compress&cs=tinysrgb&w=1600"
                        width=300px height=200px alt="">


                    <div class="text">
                        <div class="text-big" style=" color: #16bbf1;">Advocate Ravi Jadhav</div><br><br>

                        <span class="dl">Location:Swej Farm, Sodala, Jaipur<br>
                            Experience:21 years</span>
                    </div>
                </div>
                <div class="column" id="c">
                    <img src="https://th.bing.com/th/id/OIP.D0XiLd2g08kcty0yOhS5twHaE9?w=266&h=180&c=7&r=0&o=5&pid=1.7"
                        width=300px height=200px>

                    <div class="text">
                        <div class="text-big" style=" color: #16bbf1;">Advocate Ananth K S</div><br><br>

                        <span class="d">Location:Koregaon Park, Pune<br>
                            Experience:14 years</span>
                    </div>
                </div>
                <div class="column" id="c">
                    <img src="https://images.pexels.com/photos/8428088/pexels-photo-8428088.jpeg?auto=compress&cs=tinysrgb&w=1600"
                        width=300px height=200px>

                    <div class="text">
                        <div class="text-big" style=" color: #16bbf1;">Advocate Ananth K S</div><br><br>
                        <span class="d">Location:Koregaon Park, Pune<br>
                            Experience:14 years</span>
                    </div>
                </div>
            </div>
            <div class="rowb">
                <div class="columnb">
                    <button type="button" class="b3" onclick="window.location.href='booking.php';" style="border: 1px solid #00bfff; color: #00bfff;">Book Appointment</button>
                </div>
                <div class="columnb">
                    <button type="button" class="b3" onclick="window.location.href='booking.php';" style="border: 1px solid #00bfff; color: #00bfff;">Book Appointment</button>
                </div>
                <div class="columnb">
                    <button type="button" class="b3" onclick="window.location.href='booking.php';" style="border: 1px solid #00bfff; color: #00bfff;">Book Appointment</button>
                </div>
            </div>

            <div class="row">
                <div class="column" id="c">
                    <img src="https://images.pexels.com/photos/8428053/pexels-photo-8428053.jpeg?auto=compress&cs=tinysrgb&w=1600"
                        width=300px height=200px alt="">
                    </a>

                    <div class="text">
                        <div class="text-big" style=" color: #16bbf1;">Advocate Vivek Sharma</div><br><br>

                        <span class="d">Location:Govindpuram, Ghaziabad<br>
                            Experience:6 years</span>


                    </div>
                </div>
                <div class="column" id="c">
                    <img src="https://images.pexels.com/photos/7841788/pexels-photo-7841788.jpeg?auto=compress&cs=tinysrgb&w=1600"
                        width=300px height=200px>

                    <div class="text">
                        <div class="text-big" style=" color: #16bbf1;">Advocate Vikash Shangari</div><br><br>

                        <span class="d">Location:City Civil Court, Jamshedpur<br>
                            Experience:14 years</span>

                    </div>
                </div>
                <div class="column" id="c">
                    <img src="https://images.pexels.com/photos/8112114/pexels-photo-8112114.jpeg?auto=compress&cs=tinysrgb&w=1600"
                        width=300px height=200px>

                    <div class="text">
                        <div class="text-big" style=" color: #16bbf1;">Advocate Manish G Varma</div><br><br>

                        <span class="d">Location:Fort, Mumbai<br>
                            Experience:14 years</span>
                    </div>
                </div>
            </div>
            <div class="rowb">
                <div class="columnb">
                    <button type="button" class="b3" onclick="window.location.href='booking.php';" style="border: 1px solid #00bfff; color: #00bfff;">Book Appointment</button>
                </div>
                <div class="columnb">
                    <button type="button" class="b3" onclick="window.location.href='booking.php';" style="border: 1px solid #00bfff; color: #00bfff;">Book Appointment</button>
                </div>
                <div class="columnb">
                    <button type="button" class="b3" onclick="window.location.href='booking.php';" style="border: 1px solid #00bfff; color: #00bfff;">Book Appointment</button>
                </div>
            </div>
            <div class="rows">
                <button type="button"  onclick="window.location.href='product.html';"class="b4">View All Lawyers</button>
            </div><br>
        </div>



        <div class="section2">
            <center>
                <div class="title" style="font-size:50px; color: black; padding-top:60px;"><b>Popular Law Guides</b></div>
            </center>
            <div class="section21">
                <div class="section211">
                    <span class="text-big" style="color:black ;"> <b>DO'S & DON'TS IN CASE OF A CHEQUEBOUNCE</b></span><br><br>
                    <span class="d" style="color:#7a7777 ;">Divorce by Mutual Consent or Mutual Divorce is when both
                        husband and wife mutually agree that they cannot live together anymore and that the best
                        solution beingDivorce, they would present a Mutual Divorce petition jointly before the honorable
                        court, without putting forth any allegations against each other.</span>
                </div>

                <div class="section212">
                    <span class="text-big" style="color:black ;"><b>DIVORCE BY MUTUAL CONSENT IN INDIA</b></span><br><br>
                    <span class="d" style="color:#7a7777  ;">When a cheque is returned by the bank unpaid, it is said to be
                        dishonored or bounced. Cheque bounce could occur due to several reasons such as insufficiency of
                        funds, etc. When the cheque is bounced for the first time, the bank issues a ‘cheque return
                        memo’ along with reasons for non-payment.</span>
                </div>
            </div>
        </div>



        <div class="section3">
            <center>
                <div  class="title" style="font-size:50px; color: black; padding-top:60px;;"><b>We are in News</b></div>
            </center>
            <div class="rowm">
                <img src="https://smallesttheatreintheworld.co.uk/images/content/the_hindu_logo.jpg"
                    style="margin-top:50px ; margin-left:100px;" width="400px" height="50px">
                <img src="https://tma-live.s3.ap-south-1.amazonaws.com/medias/55e986da8ead0e42788b4b14/1571313215251/1_logo.PNG"
                    style="margin-top:60px ; margin-left:50px;" width="400px" height="50px">
                <img src="https://logonoid.com/images/ndtv-logo.png" style="margin-top:50px ;margin-left:50px;"
                    width="200px" height="60px">
                <img src="https://logodix.com/logo/1113851.jpg" style="margin-top:50px ; margin-left:50px;"
                    width="400px" height="60px">
            </div>
        </div>
        <div class="section4">
            <center>
                <div class="title" style="font-size:50px; color: black; padding-top:60px; margin-bottom:50px;"><b>Client Testimonials</b></div>
            </center>
            <center>
            <div class="rowm">
            <img alt="1"
					src="https://cdn-icons-png.flaticon.com/512/4140/4140048.png" hight=80px width=80px/><br><br>
                <p class="f" style="color:#7a7777 ;">"Hiring a lawyer in Pune while sitting here in Delhi was an absolute cakewalk-all thanks to the the extremely dedicated team of Lawyers Query who have been <br>
                    helping me fight my divorce case in Pune. It has already been a highly satisfying experience."<br><br><br>

                    <b style="color:black;">- RAHUL A</b></p>
            </div>
        </center>
        </div>



        <div class="section5">
            <center>
                <div class="title" style="font-size:50px; color: black; padding-top:60px;"><b>75,000 People Choose Lawyers Query Every Day</b></div>
            </center>
            <div class="section51">
                <div class="section511">
                <center><img alt="1"
					src="https://cdn-icons-png.flaticon.com/512/4784/4784614.png" hight=80px width=80px/></center><br><br>
                    <center><span class="text-big" style="color:black ;"><b>10,000+ VERIFIED LAWYERS</b></span><br><br></center>
                    <center><span class="d" style="color:  #7a7777;">India's biggest lawyer network in 700+ cities across every area of law.</span></center>
                </div>

                <div class="section511">
                <center><img alt="1"
					src="https://cdn-icons-png.flaticon.com/512/1862/1862982.png" hight=80px width=80px/></center><br><br>
                    <center> <span class="text-big" style="color:black ;"><b>20,00,000 MONTHLY VISITORS</b></span><br><br></center>
                    <center><span class="d" style="color:  #7a7777;">More than 75,000 people visit Lawyers Quer every day for legal help.</span></center>
                </div>
                
                <div class="section511">
                <center><img alt="1"
					src="https://cdn-icons-png.flaticon.com/512/4689/4689198.png" hight=80px width=80px/></center><br><br>
                   <center> <span class="text-big" style="color:black ;"><b>5,00,000 SATISFIED CLIENTS</b></span><br><br></center>
                    <center><span class="d" style="color:  #7a7777;">Get immediate advice & help from relevant lawyers in your city.</span></center>
                </div>
            </div>
        </div>




    <div class="section6">
        <div class="services">
		<div class="s-heading">
			<h1>Services</h1>
			<p>We Provide The Best In Class Servies For Our clients</p>
		</div>

		<div class="s-box-container">
			<div class="s-box">
				<div class="bar"></div>
				<img alt="1"
					src="https://cdn-icons-png.flaticon.com/512/5332/5332797.png" />
				<h1>Law Support</h1>
				<p>Provide appropriate law consultation from top rated lawyers</p>
			</div>
			<div class="s-box">
				<div class="bar"></div>
				<img alt="2"
					src="https://cdn-icons-png.flaticon.com/512/2783/2783228.png"/>
				<h1> Privacy</h1>
				<p>secure way of information hiding</p>
			</div>
			<div class="s-box">
				<div class="bar"></div>
				<img alt="3" src="https://cdn-icons-png.flaticon.com/128/610/610413.png" />
				<h1>Client Support</h1>
				<p>A Dedicated support team 24*7 is always ready to provide best support to our client .</p>
			</div>

			<div class="s-box">
				<div class="bar"></div>
				<img alt="2" src="https://cdn-icons-png.flaticon.com/128/4689/4689249.png" />
				<h1>Client Satisfaction</h1>
				<p>Client Satisfaction is our first priority and we are best at it. We make sure our client is satisfied
					with our services.</p>
			</div>
		</div>
	</div>
    </div>


        <div class="section7">
            <footer>
                <div class="footer-content">
                    <h3>Lawyers Query</h3><br><br>
                    <div class="f2" style="color:#bdbdbd;">he information provided on LawyersQuery.com is provided AS IS, subject to Terms Of Use & Privacy Policy. It is solely available at your request for informational purposes only,should not be interpreted as soliciting or advertisement. 
                    <br>In cases where the user has any legal issues, he/she in all cases must seek independent legal advice. Advocate ratings displayed on LawyersQuery.com are based on user feedback. They are not recommendations to engage or consult any lawyer. 
                    <br>LawRato does not guarantee accuracy, adequacy or completeness of any information and is not responsible for any errors or omissions, or for results obtained from the use of such information. </div>
                    <ul class="socials">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                    </ul>
                </div>
                <div class="footer-bottom">
                    <p>copyright &copy;2021 <a href="#">Lawyers Query</a> </p>
                    <div class="footer-menu">
                        <ul class="f-menu">
                            <li><a href="home1.php">Home</a></li>
                            <li><a href="About.html">About</a></li>
                            <li><a href="Contact.html">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </footer>
        </div>
    </div>
</body>

</html>