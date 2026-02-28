<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - CCE Trojan</title>
    <link href="https://fonts.googleapis.com/css2?family=Jersey+25&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="../css/auth.css">
</head>

<body>
    <div class="auth-wrapper register-layout">
        <!-- Left Side - Register Form -->
        <div class="auth-right-side">
            <div class="form-wrapper">
                <div class="form-header">
                    <div class="form-logo">CCE</div>
                </div>

                <h2 class="auth-form-title">Create an account</h2>

                <form id="registerForm" class="auth-form">
                    <div class="form-group-modern">
                        <input type="text" id="name" name="name" placeholder="Full name" required>
                    </div>

                    <div class="form-group-modern">
                        <input type="email" id="email" name="email" placeholder="Email" required>
                    </div>

                    <div class="form-group-modern">
                        <input type="password" id="password" name="password" placeholder="Password" required>
                    </div>

                    <div class="form-group-modern">
                        <input type="password" id="confirmPassword" name="confirmPassword"
                            placeholder="Confirm Password" required>
                    </div>

                    <div class="terms-checkbox">
                        <input type="checkbox" id="terms" required>
                        <label for="terms">I agree to the Terms of Service</label>
                    </div>

                    <button type="submit" class="btn-continue">Submit</button>
                </form>

                <div class="social-buttons-premium">
                    <button class="social-btn-premium apple-btn" onclick="alert('Apple signup not implemented')">
                        <i class="fab fa-apple"></i> Apple
                    </button>
                    <button class="social-btn-premium google-btn" onclick="alert('Google signup not implemented')">
                        <i class="fab fa-google"></i> Google
                    </button>
                </div>

                <div class="auth-footer-premium">
                    Have any account? <a href="login.php">Sign in</a>
                </div>
            </div>
        </div>

        <!-- Right Side - Decorative with Gradient -->
        <div class="auth-left-side">
            <div class="gradient-bg"></div>
            <div class="shapes-container">
                <div class="shape shape-1"></div>
                <div class="shape shape-2"></div>
                <div class="shape shape-3"></div>
            </div>
            <div class="decorative-content-left">
                <div class="logo-text">CCE</div>
                <div class="logo-subtext">TROJAN</div>
                <h2 class="auth-title">Welcome Page</h2>
                <p class="auth-subtitle">Join the community today</p>
                <p class="website-url">www.ccetrojan.com</p>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('registerForm').addEventListener('submit', function (e) {
            e.preventDefault();

            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const phone = document.getElementById('phone').value;
            const password = document.getElementById('password').value;
            const confirmPassword = document.getElementById('confirmPassword').value;

            if (password !== confirmPassword) {
                alert('Passwords do not match!');
                return;
            }

            const registerData = {
                name: name,
                email: email,
                phone: phone,
                password: password,
                timestamp: new Date().toISOString()
            };

            let allRegistrations = JSON.parse(localStorage.getItem('registrations')) || [];
            allRegistrations.push(registerData);

            localStorage.setItem('registrations', JSON.stringify(allRegistrations));
            localStorage.setItem('lastRegistration', JSON.stringify(registerData));

            alert('Registration successful! Redirecting...');
            window.location.href = '../landing/landing.php';
        });
    </script>
</body>

</html>