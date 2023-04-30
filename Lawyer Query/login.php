<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
    <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/512/6811/6811805.png">
        <link rel="shortcut icon" href="https://lh3.googleusercontent.com/a/ALm5wu0PS_DdwCE3MHHLvqXx675BkSbKtRYJHnXsY9PP=s288-p-rw-no">
        <link rel="stylesheet" href="login.css"/>
        <title>Lawyers Query/Login</title>
    <script>

    </script>

</head>

<body>
    <form method="post">
        <section> 
            <div class="container">
                <div class="title">Lawyers Query Login</div>
                <center>
                    <div class="content">
                        <div class="user-details">

                                <div class="input-box">
                                    <span class="details">USER NAME</span>
                                    <input type="text" placeholder="Enter your name" id="t1" name="uname">
                                </div>

                        </div>
                        <div class="user-details">

                                <div class="input-box">
                                    <span class="details">PASSWORD</span>
                                    <input type="password" placeholder="Enter your username" id="t4" name="pwd">
                                </div>

                        </div>
                    </div>
                    <div class="button" onclick="details()">
                        <input type="submit" name='save' value="Login">
                    </div>
            </div>
        </section>
    </form>
</body>
</html>
<?php
$conn =mysqli_connect('localhost','root','','Lawyers_Query');
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$err = "";
session_start();
if(isset($_SESSION['auth'])) 
{
    header("Location: home1.php");
    return;
}
if (isset($_POST['save'])) 
{
        $uname = filter_var($_POST['uname']);
        $password = filter_var($_POST['pwd'],FILTER_SANITIZE_SPECIAL_CHARS);

        $query = "SELECT * FROM registration WHERE uname='$uname' AND pwd='$password'";
        $find_user = mysqli_query($conn,$query);
        $result = mysqli_fetch_all($find_user,MYSQLI_ASSOC);
        if(count($result) > 0) 
        {
                $_SESSION['auth'] = "true";
                $_SESSION['uname'] = $result[0]['uname'];
                header("Location: home1.php");         
        } 
        else 
       
        {
            ?>
            <script>
              if(window.confirm('User name or password incorrect'))
              {
                window.location.href='login.php';
              };
            </script>
            <?php
        }
}
?>

