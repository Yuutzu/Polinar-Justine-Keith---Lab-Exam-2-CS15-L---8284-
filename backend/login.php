<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - CCE Trojan</title>
    <link href="https://fonts.googleapis.com/css2?family=Jersey+25&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/auth.css">
</head>

<body>
    <!-- Header -->
    <header>
        <div class="logo"><a href="../index.php" style="color: #d4af37; text-decoration: none;">CCE Trojan</a></div>
        <nav>
            <a href="../landing/landing.php">Home</a>
            <div class="auth-buttons">
                <a href="../landing/landing.php" class="btn-login"
                    style="text-decoration: none; display: flex; align-items: center;">Back</a>
            </div>
        </nav>
    </header>

    <div class="auth-container">
        <!-- Left Side - Decorative -->
        <div class="auth-left">
            <div class="decorative-content">
                <div class="decorative-logo">CCE</div>
                <div class="decorative-title">Welcome Back!</div>
                <div class="decorative-subtitle">Sign in to your account to continue with CCE Trojan</div>
                <div class="decorative-shapes">
                    <div class="shape"></div>
                    <div class="shape"></div>
                    <div class="shape"></div>
                </div>
            </div>
        </div>

        <!-- Right Side - Login Form -->
        <div class="auth-right">
            <div class="form-container">
                <div class="form-header">
                    <h2>Login to Your Account</h2>
                </div>
                <form id="loginForm">
                    <div class="form-group">
                        <label for="email">Email Address:</label>
                        <input type="email" id="email" name="email" placeholder="Enter your email" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" id="password" name="password" placeholder="Enter your password" required>
                    </div>
                    <div class="form-group" style="display: flex; justify-content: space-between; align-items: center;">
                        <label style="margin-bottom: 0;">
                            <input type="checkbox" id="remember" style="margin-right: 0.5rem;"> Remember me
                        </label>
                        <a href="#forgot" style="color: #FFAA33; text-decoration: none; font-size: 0.9rem;">Forgot
                            password?</a>
                    </div>
                    <button type="submit" class="submit-btn">Sign In</button>
                </form>
                <div class="toggle-auth">
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
            const remember = document.getElementById('remember').checked;

            // Save to localStorage
            const loginData = {
                email: email,
                password: password,
                timestamp: new Date().toISOString()
            };

            localStorage.setItem('lastLogin', JSON.stringify(loginData));

            if (remember) {
                localStorage.setItem('rememberedEmail', email);
            }

            alert('Login successful! Redirecting...');
            window.location.href = '../landing/landing.php';
        });

        // Load remembered email
        window.addEventListener('load', function () {
            const remembered = localStorage.getItem('rememberedEmail');
            if (remembered) {
                document.getElementById('email').value = remembered;
                document.getElementById('remember').checked = true;
            }
        });
    </script>
</body>

</html>