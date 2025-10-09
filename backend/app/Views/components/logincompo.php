<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login/Signup - Epic Quest Games</title>
  <link rel="stylesheet" href="assets/css/styleforlogin.css">
</head>
<body>
  <div class="login-container">
    <div class="login-card">
      <!-- Back button -->
      <div class="back-home">
        <a href="<?= base_url('/') ?>" class="back-btn">←</a>
      </div>

      <!-- Login Form -->
      <div class="form-wrapper" id="loginFormContainer">
        <div class="login-header">
          <h2>Sign In</h2>
          <p>Enter your credentials</p>
        </div>
        
        <form class="login-form" id="loginForm" novalidate>
          <div class="form-group">
            <div class="input-wrapper">
              <input type="email" id="email" name="email" required autocomplete="email">
              <label for="email">Email Address</label>
            </div>
            <span class="error-message" id="emailError"></span>
          </div>

          <div class="form-group">
            <div class="input-wrapper password-wrapper">
              <input type="password" id="password" name="password" required autocomplete="current-password">
              <label for="password">Password</label>
              <button type="button" class="password-toggle" id="passwordToggle" aria-label="Toggle password visibility">
                <span class="eye-icon"></span>
              </button>
            </div>
            <span class="error-message" id="passwordError"></span>
          </div>

          <div class="form-options">
            <label class="remember-wrapper">
              <input type="checkbox" id="remember" name="remember">
              <span class="checkbox-label">
                <span class="checkmark"></span>
                Remember me
              </span>
            </label>
            <a href="#" class="forgot-password">Forgot password?</a>
          </div>

          <button type="submit" class="login-btn">
            <span class="btn-text">Sign In</span>
            <span class="btn-loader"></span>
          </button>
        </form>

        <div class="signup-link">
          <p>Don't have an account? <a href="#" id="switchToSignup">Create one</a></p>
        </div>
      </div>

      <!-- Signup Form -->
      <div class="form-wrapper hidden" id="signupFormContainer">
        <div class="login-header">
          <h2>Sign Up</h2>
          <p>Create your account</p>
        </div>

        <form class="login-form" id="signupForm" novalidate>
          <div class="form-group">
            <div class="input-wrapper">
              <input type="text" id="fullname" name="fullname" required>
              <label for="fullname">Full Name</label>
            </div>
          </div>

          <div class="form-group">
            <div class="input-wrapper">
              <input type="email" id="signupEmail" name="signupEmail" required autocomplete="email">
              <label for="signupEmail">Email Address</label>
            </div>
          </div>

          <div class="form-group">
            <div class="input-wrapper password-wrapper">
              <input type="password" id="signupPassword" name="signupPassword" required autocomplete="new-password">
              <label for="signupPassword">Password</label>
            </div>
          </div>

          <div class="form-group">
            <div class="input-wrapper password-wrapper">
              <input type="password" id="confirmPassword" name="confirmPassword" required autocomplete="new-password">
              <label for="confirmPassword">Confirm Password</label>
            </div>
          </div>

          <button type="submit" class="login-btn">
            <span class="btn-text">Sign Up</span>
            <span class="btn-loader"></span>
          </button>
        </form>

        <div class="signup-link">
          <p>Already have an account? <a href="#" id="switchToLogin">Sign In</a></p>
        </div>
      </div>
    </div>
  </div>

  <script>
    const loginFormContainer = document.getElementById('loginFormContainer');
    const signupFormContainer = document.getElementById('signupFormContainer');
    const switchToSignup = document.getElementById('switchToSignup');
    const switchToLogin = document.getElementById('switchToLogin');

    switchToSignup.addEventListener('click', (e) => {
      e.preventDefault();
      loginFormContainer.classList.add('hidden');
      signupFormContainer.classList.remove('hidden');
    });

    switchToLogin.addEventListener('click', (e) => {
      e.preventDefault();
      signupFormContainer.classList.add('hidden');
      loginFormContainer.classList.remove('hidden');
    });
  </script>

  <style>
    .hidden { display: none; }
    .back-home {
      text-align: left;
      margin-bottom: 15px;
    }
    .back-btn {
      display: inline-block;
      background-color: #e63946;
      color: white;
      padding: 6px 14px;
      border-radius: 6px;
      text-decoration: none;
      font-size: 18px;
      font-weight: bold;
      transition: background 0.3s ease, transform 0.2s ease;
    }
    .back-btn:hover {
      background-color: #c62828;
      transform: translateX(-3px);
    }
  </style>
  <script src="assets/js/scriptforlogin.js"></script>