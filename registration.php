<!DOCTYPE html>
<html>
<head>
	<title>Web Quest 5.0 Registration</title>
	<meta charset='UTF-8'>
	<link rel="shortcut icon" href="images/favicon.jpeg">

  <?php

if(isset($_POST["register"]))
{
  $playername=$_POST["login__playername"];
  $college=$_POST["login__collegename"];
  $mobile=$_POST["login__mobile"];
  $email=$_POST["login__email"];
  $username_player=$_POST["login__username"];
  $password_player=$_POST["login__password"];


  $servername="localhost";
  $username="root";
  $password="";
  $dbname="wq";

  $conn = new mysqli($servername, $username, $password, $dbname);
  if($conn->connect_error){
    die("Connection failed:".$conn->connect_error);
    echo "<script>alert('Connection failed with the database!');</script>";
  }
  $qins = "insert into players (PNAME,CNAME,MOBILE,EMAIL,UNAME,PASS) values ('".$playername."','".$college."',".$mobile.",'".$email."','".$username_player."','".$password_player."')";
  $result = $conn->query($qins);
  if($result){
    //header("location: regsuccess.php");
    echo"<script>window.location= 'regsuccess.php'</script>";
  }
  else{
    echo "<script>alert('Your have already registered')</script>";
  }
}
?>
	<style>
		
		.form--login input[type="submit"]
		{
			cursor: pointer;
		}
      <style>

  html {
    height: 100%;
  }

  body {
    min-height: 100%;
  }

  input {
    border: 0;
    color: inherit;
    font: inherit;
    margin: 0;
    outline: 0;
    padding: 0;
    -webkit-transition: background-color .3s;
    transition: background-color .3s;
  }

  .site__container {
    -webkit-box-flex: 1;
    -webkit-flex: 1;
    -ms-flex: 1;
    flex: 1;
    margin-top : -50px;
  }

  .form input[type="password"], .form input[type="text"], .form input[type="submit"] {
    width: 100%;

  }
  .form--login {
    color: #fff;
  }
  .form--answer
  {
    color:#fff;
  }

  .form--login input[type="text"],
  .form--login input[type="password"],
  .form--login input[type="tel"],
  .form--login input[type="email"],
  .form--login input[type="submit"] {
    border-radius: 0.25rem;
    padding: 1rem;
  }
  .form--login input[type="text"], .form--login input[type="password"] {
    background-color: #fbf7f5;
    border-bottom-left-radius: 0;
    border-top-left-radius: 0;
  }
  .form--login input[type="text"]:focus, .form--login input[type="text"]:hover, .form--login input[type="password"]:focus, .form--login input[type="password"]:hover {
    background-color: #f2a47d;
  }


  .form--login input[type="tel"], .form--login input[type="password"] {
    background-color: #fbf7f5;
    border-bottom-left-radius: 0;
    border-top-left-radius: 0;
  }
  .form--login input[type="tel"]:focus, .form--login input[type="tel"]:hover, .form--login input[type="password"]:focus, .form--login input[type="password"]:hover {
    background-color:#f2a47d;
  }


  .form--login input[type="email"], .form--login input[type="password"] {
    background-color:#fbf7f5;
    border-bottom-left-radius: 0;
    border-top-left-radius: 0;
  }
  .form--login input[type="email"]:focus, .form--login input[type="email"]:hover, .form--login input[type="password"]:focus, .form--login input[type="password"]:hover {
    background-color: #f2a47d;
  }

  .form--login input[type="submit"] {
    background-color: #ee672f;
    color: #eee;
    font-weight: bold;
    text-transform: uppercase;
    cursor: pointer;
  }
  .form--login input[type="submit"]:focus, .form--login input[type="submit"]:hover {
    background-color: #ff8000;
    cursor: pointer;
  }
  .form__field {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    margin-bottom: 1rem;
  }
  .form__input {
    -webkit-box-flex: 1;
    -webkit-flex: 1;
    -ms-flex: 1;
    flex: 1;
  }

  .align {
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -webkit-flex-direction: row;
    -ms-flex-direction: row;
    flex-direction: row;
  }
  .text--center {
    text-align: center;
  }

  .grid__container {
    margin: 0 auto;
    max-width: 20rem;
    width: 90%;
  }

    /* Basic CSS */
    * {
      margin: 0px;
      padding: 0px;
      position: relative;
    }

    body {
      /*font-family: 'Almendra', serif !important;*/
      color: #e3dedb; !important;
    }

    .wrapper {
      width: 500px;
      margin: 25px auto 100px auto;
    }

    .font-area {
      text-align: center;
      letter-spacing: 0.2em;
    }

    .quest-head {
      color: #f4a307;
      font-size: 4em;
      text-align: center;
      text-shadow: 1px 3px 3px #000;
    }

    .footLine {
      width: 100%;
      height: 2px;
      background: #d7b748;
      box-shadow: 0px 0px 5px #d7b748;
      display: block;
      margin: 10px 0px 10px 0px;
      box-shadow: 1px 1px 1px #000;
    }

    .slogan {
      font-size: 1.7em !important;
      text-shadow: 0px 0px 1px #d7b748;
      letter-spacing: -0.01em;
      text-shadow: 1px 3px 3px #000;
    }

    .center {
      width: 450px;
      top: 80px;
      left: 20px;
    }

    .bottom {
      width: 350px;
      bottom: 35px;
      left: 80px;
    }
    * {
      margin: 0px;
      padding: 0px;
      position: relative;
    }

    body {
      /*font-family: 'Almendra', serif !important;*/
      color: #e3dedb; !important;
    }

    .wrapper {
      width: 500px;
      margin: 25px auto 100px auto;
    }

    .font-area {
      text-align: center;
      letter-spacing: 0.2em;
    }

    .quest-head {
      font-size: 4em;
      text-align: center;
      text-shadow: 1px 3px 3px #000;
    }

    .footLine {
      width: 100%;
      height: 2px;
      background: #d7b748;
      box-shadow: 0px 0px 5px #d7b748;
      display: block;
      margin: 10px 0px 10px 0px;
      box-shadow: 1px 1px 1px #000;
    }

    .slogan {
      font-size: 1.7em !important;
      text-shadow: 0px 0px 1px #d7b748;
      letter-spacing: -0.01em;
      text-shadow: 1px 3px 3px #000;
    }

    .container {
      width: 500px;
      height: 180px;
    }

    html { 
      background: url('images/wqbg1.jpg') no-repeat center center fixed; 
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
      width: 100%;
      height: 100%;
    }

</style>
	</style>
	<script>
  function preventBack(){window.history.forward();}
  setTimeout("preventBack()", 0);
  window.onunload=function(){null};
</script>

</head>
<body>
<div class="wrapper">
  <h1 class="quest-head">Web Quest 5.0</h1>
    <div class="font-area">
     <span class="footLine"></span>
     <p class="slogan">"Seek and ye shall find"</p>
   </div>
 </div>
 <div class="site__container">
  <div class="grid__container">
    <form action="" method="post" class="form form--login" autocomplete="on">
      <div class="form__field">

        <input name="login__playername" id="login__playername" type="text" class="form__input" placeholder="Name" required>
      </div>
      <div class="form__field">

        <input name="login__collegename" id="login__collegename" type="text" class="form__input" placeholder="College" required>
      </div>
      <div class="form__field">

        <input name="login__mobile" id="login__mobile" type="tel" class="form__input" maxlength="10" placeholder="Mobile" required>
      </div>
      <div class="form__field">

        <input name="login__email" id="login__email" type="email" class="form__input" placeholder="Email" required>
      </div>
      <div class="form__field">

        <input name="login__username" id="login__username" type="text" class="form__input" placeholder="Username" required>
      </div>
      <div class="form__field">

        <input name="login__password" id="login__password" type="password" class="form__input" placeholder="Password" required>
      </div>
      <div class="form__field">
       <input name="register" id="register" type="submit" value="Register">
     </div>
   </form>
 </div>
</div>	

</body>
</html>
