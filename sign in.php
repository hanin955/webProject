<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="register.css">
</head>
<body>
    <div class="container">
        <div class="back-wrapper">
            <a href="index.html" class="back-btn">
                <i class="fa-solid fa-arrow-left"></i>
                <span>Back</span>
            </a>
        </div>
        <h1 class="form-title">Sign In</h1>
        <form action="registre.php" method="post">
            <div class="input-group">
                <i class="fa-solid fa-envelope"></i>
                <label for="email">Email <span class="star">*</span></label>
                <input type="email" name="email" id="email" required placeholder="Email">
            </div>
            <div class="input-group">
                <i class="fa-solid fa-lock"></i>
                <label for="password">Password <span class="star">*</span></label>
                <input type="password" name="password" id="password" required placeholder="Password">
            </div>
            <p class="forget-password">
                <a href="#">Forgot Password?</a>
            </p>
            <div class="btn-wrapper">
                <input type="submit" class="submit-btn" name="signIn" value="Sign In">
            </div>
        </form>
        <p class="or">------------- OR -------------</p>
        <div class="social-icons">
            <i class="fa-brands fa-google"></i>
        </div>
        <div class="links">
            <p>Don't have an account?</p>
            <button id="goToSignUp">Sign Up</button>
        </div>
    </div>

    <script>
        document.getElementById("goToSignUp").addEventListener("click", function() {
            window.location.href = "signup.html";
        });
    </script>
</body>
</html>