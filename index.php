<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>

    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container">
        <header>
            <h2>Login</h2>
        </header>
        <form>
            <div class="wrapper">
                <input type="text" id="input" required>
                <label for="input">Username</label>
                <i class="fa fa-user" aria-hidden="true"></i>
            </div>

            <div class="wrapper">
                <input type="password" id="password" required>
                <label for="password">Password</label>
                <i class="fa fa-lock" aria-hidden="true"></i>
            </div>

            <div class="remeber_box">
                <div class="remember">
                    <input type="checkbox">Remember Me
                </div>
                <a href="#">Forgot Password ?</a>
            </div>

            <button>LogIn</button>

            <div class="signup">
                Don't have an account ? <a href="#">Sign up</a>
            </div>
        </form>
    </div>
</body>

</html>