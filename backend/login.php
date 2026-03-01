<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - CCE Trojan</title>
    <link href="https://fonts.googleapis.com/css2?family=Jersey+25&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="../css/auth.css?v=<?php echo time(); ?>">
</head>

<body>
    <a href="../landing/landing.php" class="home-btn" title="Back to Home">
        <i class="fas fa-arrow-left"></i>
    </a>
    <div class="auth-wrapper">
        <!-- Left Side - Decorative with Gradient -->
        <div class="auth-left-side">
            <div class="gradient-bg"></div>
            <div class="shapes-container">
                <div class="shape shape-1"></div>
                <div class="shape shape-2"></div>
                <div class="shape shape-3"></div>
                <div class="shape shape-4"></div>
                <div class="shape shape-5"></div>
                <div class="shape shape-6"></div>
                <div class="shape shape-7"></div>
                <div class="shape shape-8"></div>
            </div>
            <div class="decorative-content-left">
                <div class="logo-text">CCE</div>
                <div class="logo-subtext">TROJAN</div>
                <h2 class="auth-title">Welcome Page</h2>
                <p class="auth-subtitle">Sign in to continue access</p>
                <p class="website-url">www.ccetrojan.com</p>
            </div>
        </div>

        <!-- Right Side - Login Form -->
        <div class="auth-right-side">
            <div class="form-wrapper">
                <h2 class="auth-form-title">Sign In</h2>

                <form id="loginForm" class="auth-form">
                    <div class="form-group-modern">
                        <input type="email" id="email" name="email" placeholder="Email Address" required>
                        <div class="input-line"></div>
                    </div>

                    <div class="form-group-modern">
                        <input type="password" id="password" name="password" placeholder="Password" required>
                        <div class="input-line"></div>
                    </div>

                    <button type="submit" class="btn-continue">LOGIN</button>
                </form>

                <div class="or-divider">OR</div>

                <div class="social-buttons-premium">
                    <button class="social-btn-premium google-btn" onclick="alert('Google login not implemented')">
                        <i class="fab fa-google"></i> Google
                    </button>
                </div>

                <div class="auth-footer">
                    Don't have an account? <a href="register.php">Register here</a>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('loginForm').addEventListener('submit', function (e) {
            e.preventDefault();

            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;

            const loginData = {
                email: email,
                password: password,
                timestamp: new Date().toISOString()
            };

            localStorage.setItem('lastLogin', JSON.stringify(loginData));
            alert('Login successful! Redirecting...');
            window.location.href = '../landing/landing.php';
        });
    </script>
</body>

</html>