<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="favicon.png">

  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap5" />

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;600;700&display=swap" rel="stylesheet">


  <link rel="stylesheet" href="fonts/icomoon/style.css">
  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

  <link rel="stylesheet" href="css/tiny-slider.css">
  <link rel="stylesheet" href="css/aos.css">
  <link rel="stylesheet" href="css/glightbox.min.css">
  <link rel="stylesheet" href="css/style.css">

  <link rel="stylesheet" href="css/flatpickr.min.css">

  <link rel="stylesheet" href="css/style1.css">
  <title>Travel Blog</title>
  <div class="user-info">
    Welcome, <span class="user-name">{{ Auth::user()->name }}</span> 
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: inline;">
        @csrf
        <button type="submit" class="btn btn-link">Logout</button>
    </form>
  </div> 
  <title>Travel Blog</title> 
</head>
<body>

  <div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
      <div class="site-mobile-menu-close">
        <span class="icofont-close js-menu-toggle"></span>
      </div>
    </div>
    <div class="site-mobile-menu-body"></div>
  </div>

  <nav class="site-nav">
    <div class="container">
      <div class="menu-bg-wrap">
        <div class="site-navigation">
          <div class="row g-0 align-items-center">
            <div class="col-2">
              <a href="{{ route('home') }}" class="logo m-0 float-start">Travel Blog<span class="text-primary">.</span></a>
            </div>
            <div class="col-8 text-center">
              <form action="#" class="search-form d-inline-block d-lg-none">
                <input type="text" class="form-control" placeholder="Search...">
                <span class="bi-search"></span>
              </form>

              <ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu mx-auto">
                <li class="has-children active">
                  <ul class="dropdown">
                    <li><a href="search-result.html">Search Result</a></li>
                    <li class="active"><a href="blog.html">Blog</a></li>
                    <li><a href="single.html">Blog Single</a></li>
                    <li><a href="category.html">Category</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="contact.html">Contact Us</a></li>
                    <li><a href="#">Menu One</a></li>
                    <li><a href="#">Menu Two</a></li>
                  </ul>
                </li>
              </ul>
            </div>
            <div class="col-2 text-end">
              <a href="#" class="burger ms-auto float-end site-menu-toggle js-menu-toggle d-inline-block d-lg-none light">
                <span></span>
              </a>
              <form action="#" class="search-form d-none d-lg-inline-block">
                <input type="text" class="form-control" placeholder="Search...">
                <span class="bi-search"></span>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </nav>

  <div class="hero overlay inner-page bg-primary py-5">
    <div class="container">
      <div class="row align-items-center justify-content-center text-center pt-20">
        <div class="col-lg-6">
          <h1 class="heading text-white mb-3" data-aos="fade-up">Blog</h1>
        </div>
      </div>
    </div>
  </div>

  <div class="section search-result-wrap">
    <div class="container">
      
      <div class="row posts-entry">
        <div class="col-lg-8">
          <div class="blog-entry d-flex blog-entry-search-item">
            <a href="{{ route('content') }}" class="img-link me-4">
              <img src="images/ダウンロード (1).jfif" alt="Image" class="img-fluid">
            </a>
            <div>
              <span class="date">Apr. 14th, 2022 &bullet; <a href="#">Business</a></span>
              <h2><a href="{{ route('content') }}">Sanur Bali Travel Guide: 23 Best Things To Do</a></h2>
              <p>One of the best places to see nature and animals in Thailand,which is not too far from Phuket</p>
              <p><a href="{{ route('content') }}" class="btn btn-sm btn-outline-primary">Read More</a></p>
            </div>
          </div>

          <div class="blog-entry d-flex blog-entry-search-item">
            <a href="{{ route('content') }}" class="img-link me-4">
              <img src="images/images (5).jfif" alt="Image" class="img-fluid">
            </a>
            <div>
              <span class="date">Apr. 14th, 2022 &bullet; <a href="#">Business</a></span>
              <h2><a href="{{ route('content') }}">Thought you loved Python? Wait until you meet Rust</a></h2>
              <p>Ternate is a small, cone-shaped volcanic island in the North Maluku province of Indonesia.</p>
              <p><a href="{{ route('content') }}" class="btn btn-sm btn-outline-primary">Read More</a></p>
            </div>
          </div>

          <div class="blog-entry d-flex blog-entry-search-item">
            <a href="{{ route('content') }}" class="img-link me-4">
              <img src="images/images (6).jfif" alt="Image" class="img-fluid">
            </a>
            <div>
              <span class="date">Apr. 14th, 2022 &bullet; <a href="#">Business</a></span>
              <h2><a href="{{ route('content') }}">Chefchaouen Day Trip: The Blue City Of Morocco</a></h2>
              <p>The blue city of Chefchaouen is one of Morocco’s most famous sights. </p>
              <p><a href="{{ route('content') }}" class="btn btn-sm btn-outline-primary">Read More</a></p>
            </div>
          </div>

          <div class="blog-entry d-flex blog-entry-search-item">
            <a href="{{ route('content') }}" class="img-link me-4">
              <img src="images/images (4).jfif" alt="Image" class="img-fluid">
            </a>
            <div>
              <span class="date">Apr. 14th, 2022 &bullet; <a href="#">Business</a></span>
              <h2><a href="{{ route('content') }}">11 Tips For Visiting Mount Rushmore National Memorial</a></h2>
              <p>It’s less crowded, less hot (in the summer), and the lighting is great for photos.</p>
              <p><a href="{{ route('content') }}" class="btn btn-sm btn-outline-primary">Read More</a></p>
            </div>
          </div>

          <div class="blog-entry d-flex blog-entry-search-item">
            <a href="{{ route('content') }}" class="img-link me-4">
              <img src="images/ダウンロード.jfif" alt="Image" class="img-fluid">
            </a>
            <div>
              <span class="date">Apr. 14th, 2022 &bullet; <a href="#">Business</a></span>
              <h2><a href="{{ route('content') }}">Misool Travel Guide For Raja Ampat, Indonesia</a></h2>
              <p>The island of Misool has some of the most amazing sights in the Raja Ampat archipelago</p>
              <p><a href="single.html" class="btn btn-sm btn-outline-primary">Read More</a></p>
            </div>
          </div>

          <div class="row text-start pt-5 border-top">
            <div class="col-md-12">
              <div class="custom-pagination">
                <span>1</span>
                <a href="#">2</a>
                <a href="#">3</a>
                <a href="#">4</a>
                <span>...</span>
                <a href="#">15</a>
              </div>
            </div>
          </div>

        </div>

        <div class="col-lg-4 sidebar">

          <!-- END sidebar-box -->
          <div class="sidebar-box">
            <h3 class="heading">Popular Posts</h3>
            <div class="post-entry-sidebar">
              <ul>
                <li>
                  <a href="">
                    <img src="images/img1.jfif" alt="Image placeholder" class="me-4 rounded">
                    <div class="text">
                      <h4>Fulidhoo Island Guide: Shark & Stingray Beach In Maldives</h4>
                      <div class="post-meta">
                        <span class="mr-2">March 15, 2018 </span>
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="">
                    <img src="images/img2.jfif" alt="Image placeholder" class="me-4 rounded">
                    <div class="text">
                      <h4>THow To Spend 1 Day In Yosemite National Park (Itinerary)</h4>
                      <div class="post-meta">
                        <span class="mr-2">March 15, 2018 </span>
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="">
                    <img src="images/img3.jfif" alt="Image placeholder" class="me-4 rounded">
                    <div class="text">
                      <h4>How To Visit Ciletuh Geopark: Waterfall Valley In West Java</h4>
                      <div class="post-meta">
                        <span class="mr-2">March 15, 2018 </span>
                      </div>
                    </div>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <!-- END sidebar-box -->

          <div class="sidebar-box">
            <h3 class="heading">Categories</h3>
            <ul class="categories">
              <li><a href="#">Food <span>(12)</span></a></li>
              <li><a href="#">Travel <span>(22)</span></a></li>
              <li><a href="#">Lifestyle <span>(37)</span></a></li>
              <li><a href="#">Business <span>(42)</span></a></li>
              <li><a href="#">Adventure <span>(14)</span></a></li>
            </ul>
          </div>
          <!-- END sidebar-box -->

          <div class="sidebar-box">
            <h3 class="heading">Tags</h3>
            <ul class="tags">
              <li><a href="#">Travel</a></li>
              <li><a href="#">Adventure</a></li>
              <li><a href="#">Food</a></li>
              <li><a href="#">Lifestyle</a></li>
              <li><a href="#">Business</a></li>
              <li><a href="#">Freelancing</a></li>
              <li><a href="#">Travel</a></li>
              <li><a href="#">Adventure</a></li>
              <li><a href="#">Food</a></li>
              <li><a href="#">Lifestyle</a></li>
              <li><a href="#">Business</a></li>
              <li><a href="#">Freelancing</a></li>
            </ul>
          </div>

        </div>
      </div>
    </div>
  </div>

  <footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 d-flex justify-content-between">  <div class="widget">  <h3 class="mb-4">About</h3>
                    <p>Subscribe to my newsletter for the latest blog posts, tips, & travel guides. Let's stay updated!</p>
                    <div class="widget">
                        <h3>Social</h3>
                        <ul class="list-unstyled social">
                            <li><a href="#"><span class="icon-instagram"></span></a></li>
                            <li><a href="#"><span class="icon-twitter"></span></a></li>
                            <li><a href="#"><span class="icon-facebook"></span></a></li>
                        </ul>
                    </div> </div> <div class="widget">  <h3 class="mb-4">Company</h3>
                    <ul class="list-unstyled float-start links">
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Vision</a></li>
                        <li><a href="#">Mission</a></li>
                        <li><a href="#">Terms</a></li>
                        <li><a href="#">Privacy</a></li>
                    </ul>
                    <ul class="list-unstyled float-start links">
                        <li><a href="#">Partners</a></li>
                        <li><a href="#">Business</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Creative</a></li>
                    </ul>
                </div> </div> </div> <div class="row mt-5">
            <div class="col-12 text-center">
                <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script>. All Rights Reserved</p>
            </div>
        </div> </div> 
      </footer> 

    <!-- Preloader -->
    <div id="overlayer"></div>
    <div class="loader">
      <div class="spinner-border text-primary" role="status">
        <span class="visually-hidden">Loading...</span>
      </div>
    </div>


    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/tiny-slider.js"></script>

    <script src="js/flatpickr.min.js"></script>


    <script src="js/aos.js"></script>
    <script src="js/glightbox.min.js"></script>
    <script src="js/counter.js"></script>
    <script src="js/custom.js"></script>

    
  </body>
  </html>
