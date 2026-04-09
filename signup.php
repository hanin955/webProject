<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="register.css">
    <script src="signUp.js"></script>
</head>
<body>
    <div class="container">
      <div class="back-wrapper">
      <a href="index.html" class="back-btn">
        <i class="fa-solid fa-arrow-left"></i>
        <span>Back</span>
    </a>
</div>
        <h1 class="form-title">Sign Up</h1>
        <<form action="registre.php" method="post">
            <div class="input-group double">
                <div class="group">
                    <i class="fas fa-user"></i>
                    <label for="firstname">First Name <span class="star">*</span></label>
                    <input type="text" id="firstname" name="firstname" placeholder="First name" required>
                    
                </div>
                <div class="group">
                    <i class="fas fa-user"></i>
                    <label for="lastname">Last Name <span class="star">*</span></label>
                    <input type="text" id="lastname" name="lastname" placeholder="Last name" required>
                    
                </div>
            </div>
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
            <div class="btn-wrapper">
                <input type="submit" class="submit-btn" name="signUp" value="Sign Up">
            </div>
        </form>
        <p class="or">------------- OR -------------</p>
        <div class="social-icons">
            <i class="fa-brands fa-google"></i>
        </div>
        <div class="links">
            <p>Already have an account?</p>
            <button id="goToSignIn">Sign In</button>
        </div>
    </div>

    <script>
        document.getElementById("goToSignIn").addEventListener("click", function() {
            window.location.href = "signin.html";
        });
    </script>
</body>
</html>