<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Login</title>
</head>

<body>
    <div class="login_box">
        <div class="login_header">
            <header>Login</header>
        </div>
        <form action="config.php" method="post">
            <div class="input_box">

                <input type="text" name="user_name" class="input_field" placeholder="User Name" required>
            </div>
            <div class="input_box">
                <input type="password" name="password" class="input_field" placeholder="Password" required>
            </div>

            <div class="forgot">
                <section>
                    <input type="checkbox" id="check">
                    <label for="check">Remember</label>
                </section>

                <section>
                    <a href="#">Forgot password?</a>
                </section>
            </div>

            <div class="input_submit">
                <button class="submit_btn" id="submit"></button>
                <label for="submit">Sign In</label>
            </div>
            <div class="sign_up_link">
                <p>Don't have account? <a href="#">Sign Up</a></p>
            </div>

        </form>
    </div>
</body>

</html>