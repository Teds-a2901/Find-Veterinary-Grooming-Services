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
    <title>LOGIN&SIGN UP</title>
</head>
<body>
    <div class="container">
        <div class="f-container">
            <div class="login-signup">
                <!--LOGIN FORM-->
                <form action="includes/login.inc.php" method="post" class="login">
                    <h2 class="title">Login</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="uid" placeholder="Enter your Email/User Name">
                    </div>

                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="pwd1" placeholder="Password">
                    </div>
                    <input type="submit" value="Login" name="submit" class="btn solid">
                    <a href="adminslogin.php">Administrator Login</a>
                    <a href="Mainpage.php">Back to Mainpage</a>
                
                </form>


                <!--SIGN UP FORM-->
                <form action="includes/signup.inc.php" method="post" class="signup">
                    <h2 class="title">Sign Up</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="name" placeholder="Full Name">
                    </div>

                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="text" name="email" placeholder="Email">
                    </div>
                    
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="userid" placeholder="Username">
                    </div>

                    <div class="input-field">
                        <i class="fa-solid fa-phone"></i>
                        <input type="text" name="contact" placeholder="Contact Number">
                    </div>
                    
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="pwd" placeholder="Password">
                    </div>

                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="pwdrepeat" placeholder="Confirm your Password">
                    </div>
             
                    <input type="submit" value="Sign Up" name="submit1" class="btn solid">
                </form>
            </div>
        </div>
        <div class="p-container">
            <div class="panel l-panel">
                <div class="content">
                    <h3>Are you a Member?</h3>
                    <p>To access your account, please identify yourself by providing the information requested in the text fields, then click "Login". If you are not registered yet, click "Sing up".</p>
                    <button class="btn transparent" id="sign-up-btn">Sign Up</button>
                </div>
                <img src="img/undraw_welcome_cats_thqn.svg" class="image" alt="">
            </div>

            <div class="panel r-panel">
                <div class="content">
                    <h3>Are you one of Us?</h3>
                    <p>If you want to have a account to experince our web Application, Please fill out all the text field and become a new members.</p>
                    <button class="btn transparent" id="sign-in-btn">Login</button>
                </div>
                <img src="img/undraw_friends_r511.svg" class="image" alt="">
            </div>
        </div>
    </div>

    <?php
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyinput") {
                ?>
                     <div class="show">
                        <div class="show-content">
                            <i class="fa-solid fa-triangle-exclamation"></i>
                            <div class="message">
                                <span class="text text-1">Warning</span>
                                <span class="text text-2">Empty Field!</span>
                            </div>
                        </div>
                        <i class="fa-solid fa-xmark close"></i>
                        <div class="progress"></div>
                    </div>
                <?php
            }
            elseif ($_GET["error"] == "invaliduid") {
                ?>
                     <div class="show">
                        <div class="show-content">
                        <i class="fa-solid fa-triangle-exclamation"></i>
                            <div class="message">
                                <span class="text text-1">Warning</span>
                                <span class="text text-2">Choose proper username</span>
                            </div>
                        </div>
                        <i class="fa-solid fa-xmark close"></i>
                        <div class="progress"></div>
                    </div>
                <?php
            }
            elseif ($_GET["error"] == "invalidemail") {
                ?>
                    <div class="show">
                        <div class="show-content">
                            <i class="fa-solid fa-triangle-exclamation"></i>
                            <div class="message">
                                <span class="text text-1">Warning</span>
                                <span class="text text-2">Choose a Proper Email</span>
                            </div>
                        </div>
                        <i class="fa-solid fa-xmark close"></i>
                        <div class="progress"></div>
                    </div>
                <?php
            }
            elseif ($_GET["error"] == "passwordsdontmatch") {
                ?>
                     <div class="show">
                        <div class="show-content">
                        <i class="fa-solid fa-triangle-exclamation"></i>
                            <div class="message">
                                <span class="text text-1">Warning</span>
                                <span class="text text-2">Password Not Match</span>
                            </div>
                        </div>
                        <i class="fa-solid fa-xmark close"></i>
                        <div class="progress"></div>
                    </div>
                <?php
            }

            elseif ($_GET["error"] == "usernametaken") {
                ?>
                     <div class="show">
                        <div class="show-content">
                        <i class="fa-solid fa-triangle-exclamation"></i>
                            <div class="message">
                                <span class="text text-1">Warning</span>
                                <span class="text text-2">Username and Email has been taken</span>
                            </div>
                        </div>
                        <i class="fa-solid fa-xmark close"></i>
                        <div class="progress"></div>
                    </div>
                <?php
            }

            elseif ($_GET["error"] == "none") {
                ?>
                     <div class="show1">
                        <div class="show1-content">
                        <i class="fa-solid fa-check"></i>
                            <div class="message1">
                                <span class="text text-1">Success</span>
                                <span class="text text-2">You have successfully Sign up</span>
                            </div>
                        </div>
                        <i class="fa-solid fa-xmark close1"></i>
                        <div class="progress1"></div>
                    </div>
                <?php
            }

            elseif ($_GET["error"] == "wronglogin") {
                ?>
                     <div class="show2">
                        <div class="show2-content">
                        <i class="fa-solid fa-triangle-exclamation"></i>
                            <div class="message2">
                                <span class="text text-1">Warning</span>
                                <span class="text text-2">Incorrect! Username and Password</span>
                            </div>
                        </div>
                        <i class="fa-solid fa-xmark close2"></i>
                        <div class="progress2"></div>
                    </div>
                <?php
            }
        }
        ?>

    
    </div>
    <script src="js/danger.js"></script>
    <script src="js/warning.js"></script>
    <script src="js/sucess.js"></script>
    <script src="js/login&signup.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>
</html>