<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Diskuscuy</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body class="login-body">
    <div class="container-fluid h-100">
        <div class="row h-100 justify-content-center align-items-center">
            <!-- Form Column -->
            <div class="col-md-6 d-flex align-items-center justify-content-center">
                <div class="login-form">
                    <h2 class="login-heading">Join for discuss</h2>
                    <p class="login-subheading">Saatnya kita diskusikan apa yang memang harus didiskusikan</p>
                    <form action="login-process.php" method="post">
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control login-input" id="username" name="username"
                                placeholder="Enter your username or email" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control login-input" id="password" name="password"
                                placeholder="Enter your password" required>
                        </div>
                        <button type="submit" class="btn btn-primary-login login-button">Sign In</button>
                        <div class="separator">OR</div>
                        <p class="account-setup">Dont have account, <a href="register.php" class="signup-link">lets
                                create</a></p>
                    </form>
                </div>
            </div>

            <!-- Image Column -->
            <div class="col-md-6 login-bg"></div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>