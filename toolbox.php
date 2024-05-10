<!doctype html>
<html data-bs-theme="dark">

<head>
    <?php include 'views/Layout.php'; ?>
    <title>Localpride Web Dashboard: Toolbox</title>
</head>

<body>
    <?php include 'views/Navbar.php'; ?>
    <header id="hero" class="bg-body-tertiary py-5">
        <div class="container-fluid px-5">
            <div class="row gx-5 align-items-center justify-content-center">
                <div class="col-lg-8 col-xl-7 col-xxl-6">
                    <div class="my-5 text-center text-xl-start">
                        <h1 class="display-5 fw-bolder text-center">
                            Toolbox
                        </h1>
                        <p class="text-center">Discover the localpride tools.</p>
                    </div>
                </div>
            </div>
        </div>
    </header><br><br>


    <section class="container">
        <h2>Built-In</h2>
        <ul>
            <li><a href="http://localpride.pro/phpmyadmin">PHPMyAdmin</a></li>
            <li><a href="public/utils/phpinfo.php">PHPInfo</a></li>
        </ul>
        <h2>by Localpride</h2>
        <ul>
            <li><a href="">None</a></li>
        </ul>
    </section>

    <?php include 'views/Footer.php'; ?>
</body>

</html>
