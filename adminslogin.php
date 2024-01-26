
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/warning.css">
    <link rel="stylesheet" href="css/success.css">
    <link rel="stylesheet" href="css/danger.css">
    <title>Document</title>
</head>
<body>
<div class="container">
        <div class="f-container">
            <div class="login-signup">
                <!--LOGIN FORM-->
                <form action="includes/adminlogin.inc.php" method="post" class="login">
                    <h2 class="title">Administrator Login</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="nameadmin" placeholder="Admin">
                    </div>

                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="adminpass" placeholder="Password">
                    </div>
                    <input type="submit" value="Login" name="submit2" class="btn solid">
                    <a href="loginAndSignup.php">Back to users login</a>
                </form>

                 <!--SIGN UP FORM-->
                 <form action="includes/adminsignup.inc.php" method="post" class="signup">
                    <h2 class="title">Sign Up</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="adminname" placeholder="Admin">
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="adminpwd" placeholder="Password">
                    </div>

                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="pwdrepeat" placeholder="Confirm your Password">
                    </div>
             
                    <input type="submit" value="Sign Up" name="submit3" class="btn solid">
                </form>

            </div>
        </div>
        <div class="p-container">
            <div class="panel l-panel">
                <div class="content">
                    <h3>Administrator</h3>
                    <p>Whatever you do, do it for the glory of GOD.</p>
                    <!--<button class="btn transparent" id="sign-up-btn">Admin</button>-->
                </div>
                <img src="img/orange.svg" class="image" alt="">
            </div>

            <div class="panel r-panel">
                <div class="content">
                    <h3>Are you one of Us?</h3>
                    <p>Whatever you do, do it for the glory of GOD.</p>
                    <button class="btn transparent" id="sign-in-btn">Login</button>
                </div>
                <img src="img/undraw_friends_r511.svg" class="image" alt="">
            </div>
        </div>
    </div>
    <script src="js/login&signup.js"></script>
</body>
</html>