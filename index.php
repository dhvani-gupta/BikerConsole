<!DOCTYPE html>
<html lang="en" and dir = "ltr">
    <head>
        <meta charset="utf-8">
        <title> BikerConsole </title>
        <link rel = "stylesheet" href = "style1.css">
    </head>
    <body>
    <div class = "Login-page">
          <div class = "form">
        <form class = "register-form" action = "login.php" method = "POST">
            <?php if(issat($_GET['error'])){ ?>
                <p class = "error"> <?php echo $_GET('error'); ?></p>
           <?php } ?>

          <!-- <label> Username </label>
           <input type="text" name = "" placeholder="Enter Username" >
           <label> Password </label> 
           <input type="password" name = "" placeholder="Enter Password" >
           <label> Login </label> 
           <input type="Submit" name = "" value="Login"> -->
           
                <h1>
                    Register
                </h1>
                <input type="text" name = "" placeholder="Enter Username" id = "Username">
                <input type="password" name = "" placeholder="Enter Password" id = "Password">
                <input type="email" name = "" placeholder="Enter Email" id = "Email">
                <input type="Submit" name = "" value="Create">
                <!--<button>CREATE</button>-->
                <p class="message">Already Registered?<a href="#" >Login</a></p>
                </form>
                <form class = "login-form">
                    <h1>
                        Login
                    </h1>
                    <input type="text" name = "" placeholder="Enter Username" id = "Username">
                    <input type="password" name = "" placeholder="Enter Password" id = "Password">
                    <input type="Submit" name = "" value="Login">
                    <p class="message"> New User?<a href="#" >Register</a></p>
                </form>
          </div>  
        </div>
      <script src = "https://code.jquery.com/jquery-3.6.1.min.js">

      </script>
      <script>
        $('.message a').click(function(){
        $('form').animate({height: "toggle", opacity:"toggle" },"slow");
        })

      </script>
        </form>
    </body>
</html> 