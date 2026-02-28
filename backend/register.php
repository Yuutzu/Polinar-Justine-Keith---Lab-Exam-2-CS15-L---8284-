<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - CCE Trojan</title>
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

    <div class="auth-container flipped">
        <!-- Left Side - Decorative -->
        <div class="auth-left">
            <div class="decorative-content">
                <div class="decorative-logo">CCE</div>
                <div class="decorative-title">Join Us Today!</div>
                <div class="decorative-subtitle">Create your account to start competing with the best athletes</div>
                <div class="decorative-shapes">
                    <div class="shape"></div>
                    <div class="shape"></div>
                    <div class="shape"></div>
                </div>
            </div>
        </div>

        <!-- Right Side - Register Form -->
        <div class="auth-right">
            <div class="form-container">
                <div class="form-header">
                    <h2>Create Your Account</h2>
                </div>
                <form id="registerForm">
                    <div class="form-group">
                        <label for="name">Full Name:</label>
                        <input type="text" id="name" name="name" placeholder="Enter your full name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email Address:</label>
                        <input type="email" id="email" name="email" placeholder="Enter your email" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone Number (Optional):</label>
                        <input type="tel" id="phone" name="phone" placeholder="Enter your phone number">
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" id="password" name="password" placeholder="Create a password" required>
                    </div>
                    <div class="form-group">
                        <label for="confirmPassword">Confirm Password:</label>
                        <input type="password" id="confirmPassword" name="confirmPassword"
                            placeholder="Confirm your password" required>
                    </div>
                    <div class="form-group">
                        <label>
                            <input type="checkbox" id="terms" required style="margin-right: 0.5rem;"> I agree to the
                            Terms of Service
                        </label>
                    </div>
                    <button type="submit" class="submit-btn">Create Account</button>
                </form>
                <div class="toggle-auth">
                    Already have an account? <a href="login.php">Login here</a>
                </div>
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

            // Save to localStorage
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