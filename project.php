<?php
if (!empty($_GET['q'])) {
    switch ($_GET['q']) {
        case 'info':
            phpinfo();
            exit();
            break;
    }
}
?>
<!DOCTYPE html>
<html data-bs-theme="dark">

<head>
    <?php include 'views/Layout.php'; ?>
    <title>Localpride Web Dashboard: Project</title>
</head>

<body>
    <?php include 'views/Navbar.php'; ?>
    <header id="hero" class="bg-body-tertiary py-5">
        <div class="container-fluid px-5">
            <div class="row gx-5 align-items-center justify-content-center">
                <div class="col-lg-8 col-xl-7 col-xxl-6">
                    <div class="my-5 text-center text-xl-start">
                        <h1 class="display-5 fw-bolder text-center">
                            Your Project
                        </h1>
                        <p class="text-center">Document Root: <br> <?php print $_SERVER['DOCUMENT_ROOT']; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </header><br><br>
    <?php
  $dirList = glob('*', GLOB_ONLYDIR);
  if (!empty($dirList)) :  
  ?>
    <section class="container">
        <ul>
            <?php
        foreach ($dirList as $key => $value) :
          $link = 'http://localpride.pro/' . $value;
          $projectname = $value;
        ?>
            <li class="project-list"><a href="<?php echo $link; ?>" target="_blank"><?php echo $projectname; ?></a></li>
            <?php
        endforeach;
        ?>
        </ul>
    </section>
    <?php
  else :
  ?>
    <aside>
        <p class="alert">There are no directories, create your first project now</p>
        <div>
            <img src="https://i.imgur.com/3Sgu8XI.png" alt="Offline">
        </div>
    </aside>
    <?php
  endif;
  ?>

  <?php include 'views/Footer.php'; ?>
</body>

</html>
