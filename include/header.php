<header id="site-header" class="fixed-top">
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark stroke">
      <h1>
        <a class="navbar-brand" href="index.php">
          <span class="fa fa-diamond"></span>Study Course <span class="logo">Journey to success</span></a>
      </h1>

      <!-- if logo is image enable this   
        <a class="navbar-brand" href="#index.html">
            <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
        </a> -->
      <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
        data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
        <span class="navbar-toggler-icon fa icon-close fa-times"></span>
        </span>
      </button>

      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mx-lg-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item @@about__active">
            <a class="nav-link" href="about.php">About</a>
          </li>
          <li class="nav-item @@courses__active">
            <a class="nav-link" href="courses.php">Courses</a>
          </li>
          <li class="nav-item @@contact__active">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>
        </ul>

        <!--/search-right-->
        <div class="search-right">
          <a href="#search" title="search"><span class="fa fa-search" aria-hidden="true"></span></a>
          <!-- search popup -->
          <div id="search" class="pop-overlay">
            <div class="popup">
              <form action="error.php" method="GET" class="search-box">
                <input type="search" placeholder="Search" name="search" required="required" autofocus="">
                <button type="submit" class="btn"><span class="fa fa-search" aria-hidden="true"></span></button>
              </form>

            </div>
            <a class="close" href="#close">×</a>
          </div>
          <!-- /search popup -->
        </div>
        <div class="top-quote mr-lg-2 text-center">
          <a href="form_pendaftaran.php" class="btn login mr-2"><span class="fa fa-user"></span>Daftar</a>
        </div>
      </div>
      <!-- toggle switch for light and dark theme -->
      <div class="mobile-position">
        <nav class="navigation">
          <div class="theme-switch-wrapper">
            <label class="theme-switch" for="checkbox">
              <input type="checkbox" id="checkbox">
              <div class="mode-container py-1">
                <i class="gg-sun"></i>
                <i class="gg-moon"></i>
              </div>
            </label>
          </div>
        </nav>
      </div>
      <!-- //toggle switch for light and dark theme -->
    </nav>
  </div>
</header>