<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CCE Trojan - Ignite Your Competitive Edge</title>
    <link href="https://fonts.googleapis.com/css2?family=Jersey+25&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css?v=<?php echo time(); ?>">
</head>

<body>
    <!-- Header -->
    <header>
        <div class="logo">CCE Trojan</div>
        <nav>
            <a href="#home" onclick="scrollToHome()">Home</a>
            <a href="#sports">Sports</a>
            <a href="#events">Events</a>
            <a href="#contact">Contact</a>
            <div class="auth-buttons">
                <a href="../backend/login.php" class="btn-login"
                    style="text-decoration: none; display: flex; align-items: center;">Login</a>
                <a href="../backend/register.php" class="btn-register"
                    style="text-decoration: none; display: flex; align-items: center;">Register</a>
            </div>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <h1>Ignite Your Competitive Edge Now!</h1>
        <p>Join our platform to access premium sports events and compete with the best athletes around the world. Don't
            miss out on your chance to become a champion.</p>
        <div class="hero-buttons">
            <a href="../backend/login.php" style="text-decoration: none;"><button class="btn-primary">Get
                    Started</button></a>
            <button class="btn-primary" style="background-color: #1a1a1a; color: #FFAA33;">Learn More</button>
        </div>
    </section>

    <!-- Featured Sports & Esports Combined Section -->
    <section class="featured-showcase" id="sports">
        <!-- Sports Content -->
        <div class="showcase-content">
            <h2 class="section-title">Featured Sports</h2>
            <div class="featured-container">
                <div class="carousel-container">
                    <button class="carousel-btn" onclick="prevSlide('sports')">&#10094;</button>
                    <div class="carousel-wrapper">
                        <div class="placeholder-box">
                            <div class="dots">
                                <div class="dot active"></div>
                                <div class="dot"></div>
                                <div class="dot"></div>
                                <div class="dot"></div>
                                <div class="dot"></div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-btn" onclick="nextSlide('sports')">&#10095;</button>
                </div>
                <div class="featured-text">
                    <h3 style="color: #FFAA33; margin-bottom: 1rem;">Discover Amazing Sports</h3>
                    <p>Explore a wide variety of sports competitions and events tailored to your interests. Whether
                        you're
                        into football, basketball, tennis, or any other sport, we have something for everyone.</p>
                    <p>Connect with athletes, join teams, and participate in tournaments that matter.</p>
                </div>
            </div>
        </div>

        <!-- Esports Content -->
        <div class="showcase-content">
            <h2 class="section-title">Featured Esports</h2>
            <div class="featured-container">
                <div class="featured-text">
                    <h3 style="color: #FFAA33; margin-bottom: 1rem;">Step Into the Digital Arena</h3>
                    <p>Experience the excitement of competitive esports with top players and exciting tournaments. From
                        MOBAs to FPS games, compete at the highest level.</p>
                    <p>Join our vibrant gaming community and showcase your skills to the world.</p>
                </div>
                <div class="carousel-container">
                    <button class="carousel-btn" onclick="prevSlide('esports')">&#10094;</button>
                    <div class="carousel-wrapper">
                        <div class="placeholder-box">
                            <div class="dots">
                                <div class="dot active"></div>
                                <div class="dot"></div>
                                <div class="dot"></div>
                                <div class="dot"></div>
                                <div class="dot"></div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-btn" onclick="nextSlide('esports')">&#10095;</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Decorative Divider -->
    <div class="decorative-divider">
        <div class="divider-shape" style="animation-delay: 0s;"></div>
        <div class="divider-shape" style="animation-delay: 0.5s;"></div>
        <div class="divider-shape" style="animation-delay: 1s;"></div>
    </div>

    <!-- More Events Section -->
    <section class="more-events" id="events">
        <h2 class="section-title">Much more events as well!</h2>
        <p>Explore our extensive collection of sports events happening nationwide. From local competitions to
            international tournaments, find the perfect event for you.</p>

        <div class="events-grid">
            <div class="event-card"></div>
            <div class="event-card"></div>
            <div class="event-card"></div>
            <div class="event-card"></div>
            <div class="event-card"></div>
            <div class="event-card"></div>
        </div>

        <!-- Ready to Compete Section -->
        <div class="ready-to-compete">
            <h2>Ready to Compete?</h2>
            <p>Join thousands of athletes already competing in our intramural leagues. Register now and start your
                journey!</p>
            <div class="ready-buttons">
                <a href="../backend/register.php" style="text-decoration: none;"><button
                        class="btn-register-today">Register
                        Today</button></a>
                <a href="../backend/login.php" style="text-decoration: none;"><button class="btn-login-account">Already
                        Have an
                        Account?</button></a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2026 CCE Trojan. All rights reserved.</p>
        <p>Contact: support@ccetrojan.com | Privacy Policy | Terms of Service</p>
    </footer>

    <!-- Login Modal -->
    <div id="loginModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeLoginModal()">&times;</span>
            <div class="success-message" id="loginSuccess">Login successful! Welcome back.</div>
            <h2>Login</h2>
            <form id="loginForm">
                <div class="form-group">
                    <label for="loginEmail">Email:</label>
                    <input type="email" id="loginEmail" placeholder="Enter your email" required>
                </div>
                <div class="form-group">
                    <label for="loginPassword">Password:</label>
                    <input type="password" id="loginPassword" placeholder="Enter your password" required>
                </div>
                <div class="form-group">
                    <label>
                        <input type="checkbox" style="width: auto; margin-right: 0.5rem;">
                        Remember me
                    </label>
                </div>
                <div class="modal-buttons">
                    <button type="submit" class="btn-submit">Login</button>
                    <button type="button" class="btn-cancel" onclick="closeLoginModal()">Cancel</button>
                </div>
                <div class="toggle-form">
                    Don't have an account? <a onclick="switchToRegister()">Register here</a>
                </div>
            </form>
        </div>
    </div>

    <!-- Register Modal -->
    <div id="registerModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeRegisterModal()">&times;</span>
            <div class="success-message" id="registerSuccess">Registration successful! Welcome aboard.</div>
            <h2>Register</h2>
            <form id="registerForm">
                <div class="form-group">
                    <label for="regName">Full Name:</label>
                    <input type="text" id="regName" placeholder="Enter your full name" required>
                </div>
                <div class="form-group">
                    <label for="regEmail">Email:</label>
                    <input type="email" id="regEmail" placeholder="Enter your email" required>
                </div>
                <div class="form-group">
                    <label for="regPhone">Phone (Optional):</label>
                    <input type="phone" id="regPhone" placeholder="Enter your phone number">
                </div>
                <div class="form-group">
                    <label for="regPassword">Password:</label>
                    <input type="password" id="regPassword" placeholder="Create a password" required>
                </div>
                <div class="form-group">
                    <label for="regConfirmPassword">Confirm Password:</label>
                    <input type="password" id="regConfirmPassword" placeholder="Confirm your password" required>
                </div>
                <div class="form-group">
                    <label>
                        <input type="checkbox" style="width: auto; margin-right: 0.5rem;" required>
                        I agree to the Terms of Service
                    </label>
                </div>
                <div class="modal-buttons">
                    <button type="submit" class="btn-submit">Register</button>
                    <button type="button" class="btn-cancel" onclick="closeRegisterModal()">Cancel</button>
                </div>
                <div class="toggle-form">
                    Already have an account? <a onclick="switchToLogin()">Login here</a>
                </div>
            </form>
        </div>
    </div>

    <script>
        // Carousel State
        const carouselState = {
            sports: 0,
            esports: 0
        };

        // Carousel Functions
        function nextSlide(type) {
            let container = null;
            if (type === 'sports') {
                container = document.querySelectorAll('.featured-showcase .showcase-content')[0];
            } else {
                container = document.querySelectorAll('.featured-showcase .showcase-content')[1];
            }
            const dots = container.querySelectorAll('.dot');
            carouselState[type] = (carouselState[type] + 1) % dots.length;
            updateCarousel(type, container);
        }

        function prevSlide(type) {
            let container = null;
            if (type === 'sports') {
                container = document.querySelectorAll('.featured-showcase .showcase-content')[0];
            } else {
                container = document.querySelectorAll('.featured-showcase .showcase-content')[1];
            }
            const dots = container.querySelectorAll('.dot');
            carouselState[type] = (carouselState[type] - 1 + dots.length) % dots.length;
            updateCarousel(type, container);
        }

        function updateCarousel(type, container) {
            const dots = container.querySelectorAll('.dot');
            dots.forEach((dot, index) => {
                dot.classList.toggle('active', index === carouselState[type]);
            });
        }

        // Scroll to Features
        function scrollToFeatures() {
            document.getElementById('sports').scrollIntoView({ behavior: 'smooth' });
        }

        // Scroll to Home
        function scrollToHome() {
            document.getElementById('home').scrollIntoView({ behavior: 'smooth' });
        }

        // Modal Functions
        function openLoginModal() {
            document.getElementById('loginModal').style.display = 'block';
            document.getElementById('registerModal').style.display = 'none';
        }

        function closeLoginModal() {
            document.getElementById('loginModal').style.display = 'none';
            document.getElementById('loginForm').reset();
            document.getElementById('loginSuccess').style.display = 'none';
        }

        function openRegisterModal() {
            document.getElementById('registerModal').style.display = 'block';
            document.getElementById('loginModal').style.display = 'none';
        }

        function closeRegisterModal() {
            document.getElementById('registerModal').style.display = 'none';
            document.getElementById('registerForm').reset();
            document.getElementById('registerSuccess').style.display = 'none';
        }

        function switchToRegister() {
            closeLoginModal();
            openRegisterModal();
        }

        function switchToLogin() {
            closeRegisterModal();
            openLoginModal();
        }

        // Close modal when clicking outside
        window.onclick = function (event) {
            let loginModal = document.getElementById('loginModal');
            let registerModal = document.getElementById('registerModal');

            if (event.target == loginModal) {
                closeLoginModal();
            }
            if (event.target == registerModal) {
                closeRegisterModal();
            }
        }

        // Handle Login Form Submission
        document.getElementById('loginForm').addEventListener('submit', function (e) {
            e.preventDefault();

            const email = document.getElementById('loginEmail').value;
            const password = document.getElementById('loginPassword').value;
            const rememberMe = document.querySelector('input[type="checkbox"]').checked;

            // Save credentials to localStorage
            const loginData = {
                email: email,
                password: password,
                timestamp: new Date().toISOString()
            };

            localStorage.setItem('lastLogin', JSON.stringify(loginData));

            if (rememberMe) {
                localStorage.setItem('rememberedEmail', email);
            }

            // Show success message
            document.getElementById('loginSuccess').style.display = 'block';

            // Log for debugging
            console.log('Login Data Saved:', loginData);
            console.log('All Stored Credentials:', JSON.parse(localStorage.getItem('lastLogin')));

            // Reset form
            setTimeout(() => {
                this.reset();
                closeLoginModal();
            }, 1500);
        });

        // Handle Register Form Submission
        document.getElementById('registerForm').addEventListener('submit', function (e) {
            e.preventDefault();

            const name = document.getElementById('regName').value;
            const email = document.getElementById('regEmail').value;
            const phone = document.getElementById('regPhone').value;
            const password = document.getElementById('regPassword').value;
            const confirmPassword = document.getElementById('regConfirmPassword').value;

            if (password !== confirmPassword) {
                alert('Passwords do not match!');
                return;
            }

            // Save credentials to localStorage
            const registerData = {
                name: name,
                email: email,
                phone: phone,
                password: password,
                timestamp: new Date().toISOString()
            };

            // Get existing registrations or create new array
            let allRegistrations = JSON.parse(localStorage.getItem('registrations')) || [];
            allRegistrations.push(registerData);

            localStorage.setItem('registrations', JSON.stringify(allRegistrations));
            localStorage.setItem('lastRegistration', JSON.stringify(registerData));

            // Show success message
            document.getElementById('registerSuccess').style.display = 'block';

            // Log for debugging
            console.log('Registration Data Saved:', registerData);
            console.log('All Registrations:', JSON.parse(localStorage.getItem('registrations')));

            // Reset form
            setTimeout(() => {
                this.reset();
                closeRegisterModal();
            }, 1500);
        });

        // Load remembered email on page load
        window.addEventListener('load', function () {
            const rememberedEmail = localStorage.getItem('rememberedEmail');
            if (rememberedEmail) {
                document.getElementById('loginEmail').value = rememberedEmail;
            }
        });
    </script>
</body>

</html>