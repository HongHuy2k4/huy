<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/component.css">
    <link rel="stylesheet" href="../../assets/css/main.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <header class="header">
        <a href="../../../index.php" class="logo">
        <img src="https://cdn.logo.com/hotlink-ok/logo-social.png" alt="LOGO">
        </a>

        <h1>Sign In</h1>
        <div class="clear-header"></div>
    </header>

    <main>
        <div class="wrapper">
            <div class="wrapper-content">
                <h1>Sign in</h1>
                <form action="">
                    <input type="text" name="username" id="username" placeholder="Username/Email">
                    <input type="text" name="password" id="password" placeholder="password">
                    <button type="submit">Đăng nhập</button>
                </form>
                <div class="link">
                    <a href="#">Forgot password</a>
                    <a href="#">Log In with Phone Number</a>
                </div>

                <hr> <span>OR</span> <hr>
                <button class="btn-icon">
                    <img class="img-icon img-icon-gg" src="../../assets/img/icon_gg.png" alt="icon google">
                    google
                </button>
                <button class="btn-icon">
                    <img class="img-icon img-icon-fb" src="../../assets/img/icon_fb.png" alt="icon facebook">
                    facebook
                </button>

                <div class="btn-signup">No account? <a href="#">Sign Up</a></div>
            </div>
        </div>
    </main>

    <!-- <?php include("../components/footer.php"); ?> -->
    <script src="../../assets/script/main.js"></script>
</body>
</html>