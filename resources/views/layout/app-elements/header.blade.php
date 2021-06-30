
 <nav class="navbar absolute transparent inverse-text navbar-hover-opacity nav-uppercase navbar-expand-lg">
      <div class="container flex-row justify-content-center">
        <div class="navbar-brand"><a href="{{route('index')}}"><img src="#" srcset="style/images/logo.png 1x, style/images/logo@2x.png 2x" class="logo-dark" alt="" /><img src="#" srcset="style/images/logo-light.png 1x, style/images/logo-light@2x.png 2x" class="logo-light" alt="" /></a></div>
        <div class="navbar-other ml-auto order-lg-3">
          <ul class="navbar-nav flex-row align-items-center" data-sm-skip="true">
            <li class="nav-item">
              <div class="navbar-hamburger d-lg-none d-xl-none ml-auto"><button class="hamburger animate plain" data-toggle="offcanvas-nav"><span></span></button></div>
            </li>
            <li class="dropdown search-dropdown position-static nav-item">
              <a href="#" role="button" class="collapse-toggle" data-toggle="collapse" data-target=".search-dropdown-menu" aria-haspopup="true" aria-expanded="false"><i class="jam jam-search"></i></a>
              <div class="dropdown-menu search-dropdown-menu w-100 collapse">
                <div class="form-wrapper">
                  <form class="inverse-text">
                    <input type="text" class="form-control" placeholder="Search something">
                  </form>
                  <!-- /.search-form -->
                  <i class="dropdown-close jam jam-close"></i>
                </div>
                <!-- /.form-wrapper -->
              </div>
            </li>
            <li class="nav-item"><button class="plain" data-toggle="offcanvas-info"><i class="jam jam-info"></i></button></li>
          </ul>
          <!-- /.navbar-nav -->
        </div>
        <!-- /.navbar-other -->
        <div class="navbar-collapse offcanvas-nav">
          <div class="offcanvas-header d-lg-none d-xl-none">
            <a href="index.html"><img src="#" srcset="style/images/logo-light.png 1x, style/images/logo-light@2x.png 2x" alt="" /></a>
            <button class="plain offcanvas-close offcanvas-nav-close"><i class="jam jam-close"></i></button>
          </div>
          <ul class="navbar-nav mx-auto">
            <li class="nav-item"><a class="nav-link" href="{{route('index')}}">Home</a>
            </li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle">Services</a>
              <ul class="dropdown-menu">
              <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="{{route('photography')}}">Product Photography</a></li>
              <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="{{route('ppc')}}">Amazon PPC Management</a></li>
              <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="{{route('optimization')}}">Listing Optimization</a></li>
              <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="{{route('ebc')}}">A + Content/EBC</a></li>
              <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="{{route('videography')}}">Product Videography</a></li>
              <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="{{route('account_management')}}">Amazon Account Management</a></li>
              <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="{{route('package_design')}}">Product Packaging</a></li>
              <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="{{route('rendering')}}">3D Rendering</a></li>
              <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="{{route('ranking')}}">Amazon Keyword Ranking</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="{{route('portfolio')}}">Portfolio</a></li>
            <li class="nav-item"><a class="nav-link" href="{{route('aboutus')}}">About Us</a></li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="{{route('contact')}}">Contact Us</a></li>
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="{{route('blog')}}">Blog</a></li>
          </ul>
          <!-- /.navbar-nav -->
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container -->
    </nav>
