<!doctype html>
<html data-bs-theme="dark">

<head>
    <?php include 'views/Layout.php'; ?>
    <title>Localpride Web Dashboard</title>
</head>

<body>
    <?php include 'views/Navbar.php'; ?>
    <header id="hero" class="bg-body-tertiary py-5 my-5">
        <div class="container-fluid px-5">
            <div class="row gx-5 align-items-center justify-content-center">
                <div class="col-lg-8 col-xl-7 col-xxl-6">
                    <div class="text-center">
                    </div>
                    <div class="my-5 text-center text-xl-start">
                        <h3 class="badge bg-primary bi bi-newspaper"> News</h3>
                        <marquee class="shadow" direction="left">Localpride NEXT is here! A new awesome feature will
                            come✨</marquee>
                        <h1 class="display-5 fw-bolder text-center">
                            Welcome to Localpride Dashboard!
                        </h1>
                        <!--<a href="/" class="typewrite text-decoration-none text-white" data-period="1000"
                            data-type='[ "lorem ipsum", "dolor sit", "amet" ]'>
                            <span class="wrap"></span>
                        </a>-->
                        <div class="d-flex gap-2 justify-content-center">
                            <a class="btn btn-primary bi bi-book px-4" href="https://localpride.vercel.app">
                                Documentation</a>
                            <a class="btn btn-primary bi bi-bookmark px-4"
                                href="https://localpride.vercel.app/template"> Template Store</a>
                            <a class="btn btn-primary bi bi-wrench px-4" href="https://localpride.vercel.app/tools">
                                Tools Store</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header><br><br>


    <section class="container">
        <h2>What's Next ?<h2>
                <ul>
                    <li>Install package from dashboard</li>
                    <li>Create a new project</li>
                    <li>Read documentation and join our discord community</li>
                </ul>
    </section>

    <?php include 'views/Footer.php'; ?>
</body>

</html>
