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

  <div class="site-cover site-cover-sm same-height overlay single-page" style="background-image: url('images/hero_1.jpg');">
    <div class="container">
      <div class="row same-height justify-content-center">
        <div class="col-md-6">
          <div class="post-entry text-center">
            <h1 class="mb-4">Maya Bay In Thailand:The Beach Is Open!</h1>
            <div class="post-meta align-items-center text-center">
              <figure class="author-figure mb-0 me-3 d-inline-block"><img src="images/person_1.jpg" alt="Image" class="img-fluid"></figure>
              <span class="d-inline-block mt-1">Nguyen Tuan Dung</span>
              <span>&nbsp;-&nbsp; February 20, 2024</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="section">
    <div class="container">

      <div class="row blog-entries element-animate">

        <div class="col-md-12 col-lg-8 main-content">

          <div class="post-content-body">
            <p>Paisu Pok Lake is a beautiful blue lake in Banggai, Indonesia that was still a hidden gem until very recently, although pictures of this amazing lake are going viral all over social media now so it seems the word is officially out.</p>
            <p>We visited Paisupok recently and it’s just as nice as it looks in the photos. It’s not very hard to get to there if you’re already traveling in Sulawesi, which you should, because Sulawesi is a huge island with so many wonderful things to see and do.</p>
            <p>This travel guide will explain how to get to Paisu Pok Lake in Banggai, and everything else you need to know before you go!</p>
            <div class="row my-4">
              <div class="col-md-12 mb-4">
                <img src="images/hero_1.jpg" alt="Image placeholder" class="img-fluid rounded">
              </div>
              <div class="col-md-6 mb-4">
                <img src="images/DJI_0790_450n.jpg" alt="Image placeholder" class="img-fluid rounded">
              </div>
              <div class="col-md-6 mb-4">
                <img src="images/hero_2.jpg" alt="Image placeholder" class="img-fluid rounded">
              </div>
            </div>
            <p>Paisu Pok Lake is located on Peleng island, which is part of the Banggai Islands Regency in Central Sulawesi, Indonesia.</p>
            <p>To get there, the first step is getting to Luwuk. There are daily, non-stop flights to the Luwuk airport (LUW) from Makassar in South Sulawesi. If you’re coming from Bali, Jakarta, or somewhere else in Indonesia, then you’ll have to transit in Makassar on the way to Luwuk. You can shop for flights on Skyscanner.</p>
            <p>Porro amet accusantium libero fugit totam, deserunt ipsa, dolorem, vero expedita illo similique saepe nisi deleniti. Cumque, laboriosam, porro! Facilis voluptatem sequi nulla quidem, provident eius quos pariatur maxime sapiente illo nostrum quibusdam aliquid fugiat! Earum quod fuga id officia.</p>
            <p>Once you arrive in Luwuk, there are taxi drivers waiting to take you to town and the drive is only about 20 minutes. We paid 50k Rupiah for the airport transfer.</p>

            <p>From Luwuk town, you can take the public ferry from Luwuk People’s Port (‘Pelabuhan Rakyat’) over to Leme Leme on Peleng island. It departs every day at 2 PM and the journey takes 2 hours, although it usually leaves an hour late (Indonesian rubber time).</p>
          </div>


          <div class="pt-5">
            <p>Categories:  <a href="#">Food</a>, <a href="#">Travel</a>  Tags: <a href="#">#manila</a>, <a href="#">#asia</a></p>
          </div>


          <div class="pt-5 comment-wrap">
            <h3 class="mb-5 heading">4 Comments</h3>
            <ul class="comment-list">
              <li class="comment">
                <div class="vcard">
                  <img src="images/person_1.jpg" alt="Image placeholder">
                </div>
                <div class="comment-body">
                  <h3>Banh Trung Ran</h3>
                  <div class="meta">January 29, 2024 at 2:21pm</div>
                  <p>Great Place. So beautifull!! </p>
                  <p><a href="#" class="reply rounded">Reply</a></p>
                </div>
              </li>

              <li class="comment">
                <div class="vcard">
                  <img src="images/person_2.jpg" alt="Image placeholder">
                </div>
                <div class="comment-body">
                  <h3>Thit kho tau</h3>
                  <div class="meta">January 29, 2024 at 2:21pm</div>
                  <p>If you want more privacy, you can rent a small room for two people which has bunk beds and a fan. This costs an extra 50k Rupiah per room.</p>
                  <p><a href="#" class="reply rounded">Reply</a></p>
                </div>

                <ul class="children">
                  <li class="comment">
                    <div class="vcard">
                      <img src="images/person_3.jpg" alt="Image placeholder">
                    </div>
                    <div class="comment-body">
                      <h3>Khoai Tay Chien</h3>
                      <div class="meta">January 29, 2024 at 2:21pm</div>
                      <p>This is a small lake and it’s very beautiful, so there’s a danger of it becoming overdeveloped. I hope the locals and visitors will be serious about conservation.</p>
                      <p><a href="#" class="reply rounded">Reply</a></p>
                    </div>
                  </li>
                </ul>
              </li>

              <li class="comment">
                <div class="vcard">
                  <img src="images/person_1.jpg" alt="Image placeholder">
                </div>
                <div class="comment-body">
                  <h3>Bun Rieu Cua</h3>
                  <div class="meta">January 29, 2024 at 2:21pm</div>
                  <p>If you feel the same way and speak a little bit of Bahasa, you might also want to encourage the locals to conserve this place. </p>
                  <p><a href="#" class="reply rounded">Reply</a></p>
                </div>
              </li>
            </ul>
            <!-- END comment-list -->

            <div class="comment-form-wrap pt-5">
                <h3 class="mb-5">Leave a comment</h3>
                @can('comment')
                    <form action="#" class="p-5 bg-light">
                        <div class="form-group">
                            <label for="name">Name *</label>
                            <input type="text" class="form-control" id="name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email *</label>
                            <input type="email" class="form-control" id="email">
                        </div>
                        <div class="form-group">
                            <label for="website">Website</label>
                            <input type="url" class="form-control" id="website">
                        </div>
            
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Post Comment" class="btn btn-primary">
                        </div>
                    </form>
                @else
                    <p>You do not have permission to comment.</p>
                @endcan
                </div>
            </div>
        </div>    
        <!-- END main-content -->

        <div class="col-md-12 col-lg-4 sidebar">
            <div class="sidebar-box search-form-wrap">
              <form action="#" class="sidebar-search-form">
                <span class="bi-search"></span>
                <input type="text" class="form-control" id="s" placeholder="Type a keyword and hit enter">
              </form>
            </div>
         <!-- END sidebar-box -->
            <div class="sidebar-box">
                <div class="bio text-center">
                <img src="images/person_1.jpg" alt="Image Placeholder" class="img-fluid mb-3">
                <div class="bio-body">
                    <h2>Nguyen Tuan Dung</h2>
                    <p class="mb-4">Hey there! I'm Dung, an Vietnamese who's been traveling the world full time for 9 years now. Please tag along!</p>
                    <p><a href="#" class="btn btn-primary btn-sm rounded px-2 py-2">My profile</a></p>
                    <p class="social">
                    <a href="#" class="p-2"><span class="fa fa-facebook"></span></a>
                    <a href="#" class="p-2"><span class="fa fa-twitter"></span></a>
                    <a href="#" class="p-2"><span class="fa fa-instagram"></span></a>
                    <a href="#" class="p-2"><span class="fa fa-youtube-play"></span></a>
                    </p>
                </div>
                </div>
            </div>
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
          <!-- END sidebar -->
  
        </div>
      </div>
    </section>
  
  
    <!-- Start posts-entry -->
    <section class="section posts-entry posts-entry-sm bg-light">
      <div class="container">
        <div class="row mb-4">
          <div class="col-12 text-uppercase text-black">More Blog Posts</div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-3">
            <div class="blog-entry">
              <a href="#" class="img-link">
                <img src="images/img_1_horizontal.jpg" alt="Image" class="img-fluid">
              </a>
              <span class="date">Apr. 14th, 2024</span>
              <h2><a href="#">10 Best Things To Do At Machu Picchu In Peru</a></h2>
              <p>When you arrive at the entrance to Machu Picchu, the first order of business is to see the iconic viewpoint at the Guardian’s House!</p>
              <p><a href="#" class="read-more">Continue Reading</a></p>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="blog-entry">
              <a href="#" class="img-link">
                <img src="images/img_2_horizontal.jpg" alt="Image" class="img-fluid">
              </a>
              <span class="date">Apr. 14th, 2022</span>
              <h2><a href="#">How To Visit The Pyramids Of Giza & Sphinx In Egypt</a></h2>
              <p>What kind of bucket list doesn’t include the Great Pyramids of Giza in Egypt? Believe it or not, the Giza pyramids are fairly easy to visit on a day trip from Cairo, the capital of Egypt.</p>
              <p><a href="#" class="read-more">Continue Reading</a></p>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="blog-entry">
              <a href="#" class="img-link">
                <img src="images/img_3_horizontal.jpg" alt="Image" class="img-fluid">
              </a>
              <span class="date">Apr. 14th, 2023</span>
              <h2><a href="#">Komodo Islands Travel Guide For Indonesia</a></h2>
              <p>Komodo National Park is UNESCO designated, with dozens of exotic islands, white and pink sand beaches, coral reefs for diving, and it’s the only place in the world where you can see Komodo dragons up close in the wild and get your picture taken with them!</p>
              <p><a href="#" class="read-more">Continue Reading</a></p>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="blog-entry">
              <a href="#" class="img-link">
                <img src="images/img_4_horizontal.jpg" alt="Image" class="img-fluid">
              </a>
              <span class="date">Apr. 14th, 2022</span>
              <h2><a href="#">Iguazu Falls Travel Guide For Argentina & Brazil (+Map)</a></h2>
              <p>Iguazu Falls is located on the border of Argentina and Brazil, in the continent of South America.</p>
              <p><a href="#" class="read-more">Continue Reading</a></p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End posts-entry -->

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
    <script src="js/navbar.js"></script>
    <script src="js/counter.js"></script>
    <script src="js/custom.js"></script>

    
  </body>
  </html>
