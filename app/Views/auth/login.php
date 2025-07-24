<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Wekada Analytics Dashboard</title>
    <meta name="description" content="Wekada Analytics Dashboard">
    <meta name="keywords" content="Wekada, Analytics, Dashboard, Delivery, Logistics">
    <link rel="icon" href="<?= base_url('images/logo.png') ?>" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .gradient-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 50%, #f093fb 100%);
        }
        .glass-effect {
            backdrop-filter: blur(10px);
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        .input-focus:focus {
            box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.1);
        }
        .btn-gradient {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        .btn-gradient:hover {
            background: linear-gradient(135deg, #5a67d8 0%, #6b46c1 100%);
        }
        .floating-animation {
            animation: float 6s ease-in-out infinite;
        }
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }
        .pulse-glow {
            animation: pulse-glow 2s ease-in-out infinite alternate;
        }
        @keyframes pulse-glow {
            from { box-shadow: 0 0 20px rgba(99, 102, 241, 0.3); }
            to { box-shadow: 0 0 30px rgba(99, 102, 241, 0.6); }
        }
    </style>
</head>
<body class="min-h-screen gradient-bg flex items-center justify-center p-4">
    <!-- Background decorative elements -->
    <div class="fixed inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-10 left-10 w-32 h-32 bg-white opacity-5 rounded-full floating-animation"></div>
        <div class="absolute top-1/4 right-20 w-24 h-24 bg-white opacity-5 rounded-full floating-animation" style="animation-delay: -2s;"></div>
        <div class="absolute bottom-1/4 left-20 w-40 h-40 bg-white opacity-5 rounded-full floating-animation" style="animation-delay: -4s;"></div>
        <div class="absolute bottom-10 right-10 w-20 h-20 bg-white opacity-5 rounded-full floating-animation" style="animation-delay: -1s;"></div>
    </div>

    <!-- Main Login Container -->
    <div class="w-full max-w-md">
        <!-- Logo and Brand Section -->
        <div class="text-center mb-8">
            <div class="inline-flex items-center justify-center w-20 h-20 bg-white bg-opacity-20 rounded-full mb-6 pulse-glow">
                <img src="<?= base_url('images/logo.png') ?>" alt="Wekada Logo" class="w-10 h-10">
            </div>
            <h1 class="text-3xl font-bold text-white mb-2">Wekada Analytics</h1>
            <p class="text-white text-opacity-80">Sign in to your dashboard</p>
        </div>

        <!-- Login Form -->
        <div class="glass-effect rounded-2xl p-8 shadow-2xl">
            <form id="loginForm" class="space-y-6">
                <!-- Email Field -->
                <div>
                    <label for="email" class="block text-sm font-medium text-white mb-2">
                        <i class="fas fa-envelope mr-2"></i>Email Address
                    </label>
                    <div class="relative">
                        <input 
                            type="email" 
                            id="email" 
                            name="email" 
                            required
                            class="w-full px-4 py-3 bg-white bg-opacity-10 border border-white border-opacity-20 rounded-xl text-white placeholder-white placeholder-opacity-60 focus:outline-none focus:border-white focus:bg-opacity-20 input-focus transition-all duration-300"
                            placeholder="Enter your email"
                        >
                        <div class="absolute inset-y-0 right-0 pr-3 flex items-center">
                            <i class="fas fa-envelope text-white text-opacity-60"></i>
                        </div>
                    </div>
                    <div id="email-error" class="hidden text-red-300 text-sm mt-1"></div>
                </div>

                <!-- Password Field -->
                <div>
                    <label for="password" class="block text-sm font-medium text-white mb-2">
                        <i class="fas fa-lock mr-2"></i>Password
                    </label>
                    <div class="relative">
                        <input 
                            type="password" 
                            id="password" 
                            name="password" 
                            required
                            class="w-full px-4 py-3 bg-white bg-opacity-10 border border-white border-opacity-20 rounded-xl text-white placeholder-white placeholder-opacity-60 focus:outline-none focus:border-white focus:bg-opacity-20 input-focus transition-all duration-300"
                            placeholder="Enter your password"
                        >
                        <div class="absolute inset-y-0 right-0 pr-3 flex items-center">
                            <button type="button" id="togglePassword" class="text-white text-opacity-60 hover:text-opacity-100 transition-colors">
                                <i class="fas fa-eye" id="eyeIcon"></i>
                            </button>
                        </div>
                    </div>
                    <div id="password-error" class="hidden text-red-300 text-sm mt-1"></div>
                </div>

                <!-- Remember Me & Forgot Password -->
                <div class="flex items-center justify-between">
                    <label class="flex items-center">
                        <input type="checkbox" id="remember" name="remember" class="w-4 h-4 text-indigo-600 bg-white bg-opacity-10 border-white border-opacity-20 rounded focus:ring-indigo-500 focus:ring-2">
                        <span class="ml-2 text-sm text-white text-opacity-80">Remember me</span>
                    </label>
                    <a href="#" class="text-sm text-white text-opacity-80 hover:text-white transition-colors">
                        Forgot password?
                    </a>
                </div>

                <!-- Login Button -->
                <button 
                    type="submit" 
                    id="loginBtn"
                    class="w-full btn-gradient text-white font-semibold py-3 px-4 rounded-xl hover:shadow-lg transform hover:-translate-y-0.5 transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-transparent"
                >
                    <span id="loginBtnText">
                        <i class="fas fa-sign-in-alt mr-2"></i>Sign In
                    </span>
                    <span id="loginBtnLoading" class="hidden">
                        <i class="fas fa-spinner fa-spin mr-2"></i>Signing In...
                    </span>
                </button>

                <!-- Error Message -->
                <div id="loginError" class="hidden bg-red-500 bg-opacity-20 border border-red-400 text-red-200 px-4 py-3 rounded-xl text-sm"></div>

                <!-- Success Message -->
                <div id="loginSuccess" class="hidden bg-green-500 bg-opacity-20 border border-green-400 text-green-200 px-4 py-3 rounded-xl text-sm"></div>
            </form>

            <!-- Sign Up Link -->
            <div class="text-center mt-6">
                <p class="text-white text-opacity-80">
                    Don't have an account? 
                    <a href="#" class="text-white font-semibold hover:underline transition-colors">Sign up</a>
                </p>
            </div>
        </div>

        <!-- Footer -->
        <div class="text-center mt-8">
            <p class="text-white text-opacity-60 text-sm">
                © 2024 Wekada Analytics. All rights reserved.
            </p>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const loginForm = document.getElementById('loginForm');
            const emailInput = document.getElementById('email');
            const passwordInput = document.getElementById('password');
            const togglePassword = document.getElementById('togglePassword');
            const eyeIcon = document.getElementById('eyeIcon');
            const loginBtn = document.getElementById('loginBtn');
            const loginBtnText = document.getElementById('loginBtnText');
            const loginBtnLoading = document.getElementById('loginBtnLoading');
            const loginError = document.getElementById('loginError');
            const loginSuccess = document.getElementById('loginSuccess');
            const emailError = document.getElementById('email-error');
            const passwordError = document.getElementById('password-error');

            // Toggle password visibility
            togglePassword.addEventListener('click', function() {
                const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
                passwordInput.setAttribute('type', type);
                eyeIcon.classList.toggle('fa-eye');
                eyeIcon.classList.toggle('fa-eye-slash');
            });

            // Real-time validation
            emailInput.addEventListener('input', function() {
                validateEmail();
            });

            passwordInput.addEventListener('input', function() {
                validatePassword();
            });

            function validateEmail() {
                const email = emailInput.value.trim();
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                
                if (!email) {
                    showFieldError(emailError, 'Email is required');
                    return false;
                } else if (!emailRegex.test(email)) {
                    showFieldError(emailError, 'Please enter a valid email address');
                    return false;
                } else {
                    hideFieldError(emailError);
                    return true;
                }
            }

            function validatePassword() {
                const password = passwordInput.value;
                
                if (!password) {
                    showFieldError(passwordError, 'Password is required');
                    return false;
                } else if (password.length < 6) {
                    showFieldError(passwordError, 'Password must be at least 6 characters');
                    return false;
                } else {
                    hideFieldError(passwordError);
                    return true;
                }
            }

            function showFieldError(element, message) {
                element.textContent = message;
                element.classList.remove('hidden');
            }

            function hideFieldError(element) {
                element.classList.add('hidden');
            }

            function showError(message) {
                loginError.textContent = message;
                loginError.classList.remove('hidden');
                loginSuccess.classList.add('hidden');
            }

            function showSuccess(message) {
                loginSuccess.textContent = message;
                loginSuccess.classList.remove('hidden');
                loginError.classList.add('hidden');
            }

            function setLoading(loading) {
                if (loading) {
                    loginBtn.disabled = true;
                    loginBtnText.classList.add('hidden');
                    loginBtnLoading.classList.remove('hidden');
                } else {
                    loginBtn.disabled = false;
                    loginBtnText.classList.remove('hidden');
                    loginBtnLoading.classList.add('hidden');
                }
            }

            // Form submission
            loginForm.addEventListener('submit', function(e) {
                e.preventDefault();
                
                // Clear previous messages
                loginError.classList.add('hidden');
                loginSuccess.classList.add('hidden');
                
                // Validate form
                const isEmailValid = validateEmail();
                const isPasswordValid = validatePassword();
                
                if (!isEmailValid || !isPasswordValid) {
                    return;
                }

                // Show loading state
                setLoading(true);

                // Simulate API call
                setTimeout(() => {
                    const email = emailInput.value.trim();
                    const password = passwordInput.value;
                    
                    // Demo validation (replace with actual API call)
                    if (email === 'admin@wekada.com' && password === 'password123') {
                        showSuccess('Login successful! Redirecting to dashboard...');
                        
                        // Redirect to dashboard after 2 seconds
                        setTimeout(() => {
                            window.location.href = '/dashboard';
                        }, 2000);
                    } else {
                        showError('Invalid email or password. Please try again.');
                        setLoading(false);
                    }
                }, 1500);
            });

            // Add some interactive effects
            const inputs = document.querySelectorAll('input[type="email"], input[type="password"]');
            inputs.forEach(input => {
                input.addEventListener('focus', function() {
                    this.parentElement.classList.add('ring-2', 'ring-white', 'ring-opacity-50');
                });
                
                input.addEventListener('blur', function() {
                    this.parentElement.classList.remove('ring-2', 'ring-white', 'ring-opacity-50');
                });
            });

            // Demo credentials hint (remove in production)
            console.log('Demo credentials: admin@wekada.com / password123');
        });
    </script>
</body>
</html> 