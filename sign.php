<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="images/main.ico" />
    <!-- font awesome cdn link  -->
    <script src="https://kit.fontawesome.com/d574317350.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/sign.css">
    <title>Pleng</title>
</head>

<body>
    <div class="container">
        <div class="backHome">
            <a href="enter.php"><i class="fa-solid fa-arrow-rotate-left"></i></a>
        </div>
        <input type="checkbox" id="btnCheck" />
        <label id="btnCheckSign" for="btnCheck" onclick="myBtn()" class="SignBtn"></label>
        <div class="container-flip-card">
            <div class="front">
                <div class="background-form-front">
                    <img class="bg-image-form-signin" src="images/music-background-dark-vinyl-wallpaper-thumb.jpg" alt="" />
                    <div class="signin-header-logo">
                        <img src="images/main.png" alt="" />
                        <a href="enter.php" class="logo">cassette</a>
                    </div>
                    <form class="signin-form" action="">
                        <h1>Sign IN</h1>
                        <div class="form-input">
                            <i class="fa-solid fa-user"></i>
                            <input type="text" class="input-sign" placeholder="Enter your username" autofocus />
                        </div>
                        <div class="form-input">
                            <i class="fa-solid fa-key"></i>
                            <input type="password" class="input-sign" placeholder="Enter your password" />
                        </div>
                        <button class="submit-form">Create account</button>
                    </form>
                </div>
            </div>
            <div class="back">
                <div class="background-form-back">
                    <img class="bg-image-form-signup" src="images/music-background-dark-vinyl-wallpaper-thumb.jpg" alt="" />
                    <div class="signup-header-logo">
                        <img src="images/main.png" alt="" />
                        <a href="enter.php" class="logo">cassette</a>
                    </div>
                    <form class="signup-form" action="">
                        <h1>Create your account</h1>
                        <div class="form-input">
                            <i class="fa-solid fa-user"></i>
                            <input type="text" class="input-sign" placeholder="Enter your username" autofocus />
                        </div>
                        <div class="form-input">
                            <i class="fa-solid fa-envelope"></i>
                            <input type="email" class="input-sign" placeholder="Enter your e-mail" />
                        </div>
                        <div class="form-input">
                            <i class="fa-solid fa-key"></i>
                            <input type="password" class="input-sign" placeholder="Enter your password" />
                        </div>
                        <div class="form-input">
                            <i class="fa-solid fa-key"></i>
                            <input type="password" class="input-sign" placeholder="Confirm password" />
                        </div>
                        <button class="submit-form">Create account</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</body>
</body>

<script>
function myBtn() {
    var element = document.getElementById("btnCheckSign");
    element.classList.toggle("SignIN");
}
</script>

</html>