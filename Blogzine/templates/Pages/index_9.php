<!DOCTYPE html>
<html lang="en">

<head>
  <?= $this->element('title_meta')?>

  <?= $this->element('head_css')?>
</head>

<body>
  <?= $this->element('index_offcanvas')?>

  <?= $this->element('navbar', ['divClass' => '-fluid px-sm-5', 'ulClass' => 'mx-auto' , 'offcanvas' => true ]) ?>

  <!-- **************** MAIN CONTENT START **************** -->
  <main>
    <!-- =======================Main hero START -->
    <section class="py-2 h-400 overflow-hidden position-relative"
      style="background-image: url(/images/blog/16by9/big/04.jpg); background-position: center center;">
      <div class="container-fluid h-100 p-0">
        <div class="row align-items-center h-100 text-center">
          <div class="col-12">
            <!-- Hero title -->
            <h1 class="text-white display-1">Fashion Journal</h1>
          </div>
        </div>
        <!-- Rounded circle text START -->
        <div class="rotating-text-badge d-none d-lg-block text-uppercase">
          <!-- SVG START -->
          <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
            y="0px" width="300px" height="300px" viewBox="0 0 300 300" enable-background="new 0 0 300 300"
            xml:space="preserve">
            <defs>
              <path id="circlePath" d="M 150, 150 m -60, 0 a 60,60 0 0,1 120,0 a 60,60 0 0,1 -120,0 " />
            </defs>
            <circle cx="150" cy="100" r="75" fill="none" />
            <g>
              <use xlink:href="#circlePath" fill="none" />
              <text fill="#fff">
                <textPath xlink:href="#circlePath">Fashion * Fashion * Fashion *</textPath>
              </text>
            </g>
          </svg>
          <!-- SVG START -->
        </div>
        <!-- Rounded circle text END -->
      </div>
    </section>
    <!-- =======================Main hero END -->

    <!-- =======================Latest articles START -->
    <section class="py-5">
      <div class="container-fluid px-sm-5">
        <div class="row">
          <!-- Title -->
          <div class="mb-4 text-center">
            <h2 class="h1 m-0">Latest articles</h2>
          </div>
        </div>
        <div class="row g-3 g-sm-5">
          <div class="col-sm-6 col-lg-4">
            <!-- Card item START -->
            <div class="card">
              <!-- Card img -->
              <div class="position-relative">
                <img class="card-img rounded-0" src="/images/blog/4by3/17.jpg" alt="Card image">
                <div class="card-img-overlay d-flex align-items-start flex-column p-3">
                  <!-- Card overlay bottom -->
                  <div class="w-100 mt-auto">
                    <a href="#" class="badge bg-dark mb-2">Sports</a>
                  </div>
                </div>
              </div>
              <div class="card-body px-0 pt-3">
                <h2 class="card-title"><a href="post-single-6"
                    class="btn-link text-reset fw-bold stretched-link">Skills that you can learn from business</a></h2>
                <p>Seasons you sixth made shall him upon he very give you'll fowl Life open over had can't lights made
                  wherein beginning subdue called isn't.</p>
                <!-- Card info -->
                <ul class="nav nav-divider align-items-center">
                  <li class="nav-item">Aug 15, 2022</li>
                </ul>
              </div>
            </div>
          </div>
          <!-- Card item END -->
          <!-- Card item START -->
          <div class="col-sm-6 col-lg-4">
            <div class="card">
              <!-- Card img -->
              <div class="position-relative">
                <img class="card-img rounded-0" src="/images/blog/4by3/18.jpg" alt="Card image">
                <div class="card-img-overlay d-flex align-items-start flex-column p-3">
                  <!-- Card overlay bottom -->
                  <div class="w-100 mt-auto">
                    <a href="#" class="badge bg-dark mb-2">Marketing</a>
                  </div>
                </div>
              </div>
              <div class="card-body px-0 pt-3">
                <h2 class="card-title"><a href="post-single-6" class="btn-link text-reset fw-bold stretched-link">10
                    tell-tale signs you need to get a new business</a></h2>
                <!-- Card info -->
                <p>Moved night own was said Likeness evening Dominion i our Great blessed and hath life him meat days
                  also created abundantly seas.</p>
                <!-- Card info -->
                <ul class="nav nav-divider align-items-center">
                  <li class="nav-item">Jan 10, 2022</li>
                </ul>
              </div>
            </div>
            <!-- Card item END -->
          </div>
          <div class="col-sm-6 col-lg-4">
            <!-- Card item START -->
            <div class="card">
              <!-- Card img -->
              <div class="position-relative">
                <img class="card-img rounded-0" src="/images/blog/4by3/19.jpg" alt="Card image">
                <div class="card-img-overlay d-flex align-items-start flex-column p-3">
                  <!-- Card overlay Top -->
                  <div class="w-100 mb-auto d-flex justify-content-end">
                    <div class="text-end ms-auto">
                      <!-- Card format icon -->
                      <div class="icon-md bg-white bg-opacity-25 bg-blur text-white rounded-circle"
                        title="This post has images"><i class="fas fa-image"></i></div>
                    </div>
                  </div>
                  <!-- Card overlay bottom -->
                  <div class="w-100 mt-auto">
                    <a href="#" class="badge bg-dark mb-2">Photography</a>
                  </div>
                </div>
              </div>
              <div class="card-body px-0 pt-3">
                <h2 class="card-title"><a href="post-single-6"
                    class="btn-link text-reset fw-bold stretched-link">This is why this year will be the year of
                    startups</a></h2>
                <!-- Card info -->
                <p>One is replenish bearing rule wherein sixth may Shall is had seasons you sixth made shall him upon he
                  very give you'll fowl Life open.</p>
                <!-- Card info -->
                <ul class="nav nav-divider align-items-center">
                  <li class="nav-item">Feb 20, 2022</li>
                </ul>
              </div>
            </div>
            <!-- Card item END -->
          </div>
          <div class="col-sm-6">
            <!-- Card item START -->
            <div class="card">
              <!-- Card img -->
              <div class="position-relative">
                <img class="card-img rounded-0" src="/images/blog/4by3/20.jpg" alt="Card image">
                <div class="card-img-overlay d-flex align-items-start flex-column p-3">
                  <!-- Card overlay Top -->
                  <div class="w-100 mb-auto d-flex justify-content-end">
                    <div class="text-end ms-auto">
                      <!-- Card format icon -->
                      <div class="icon-md bg-white bg-opacity-25 bg-blur text-white rounded-circle"
                        title="This post has images"><i class="fas fa-image"></i></div>
                    </div>
                  </div>
                  <!-- Card overlay bottom -->
                  <div class="w-100 mt-auto">
                    <a href="#" class="badge bg-dark mb-2">Lifestyle</a>
                  </div>
                </div>
              </div>
              <div class="card-body px-0 pt-3">
                <h2 class="card-title"><a href="post-single-6" class="btn-link text-reset fw-bold stretched-link">7
                    common mistakes everyone makes while traveling</a></h2>
                <!-- Card info -->
                <p>Great saying made had fly dry that darkness meat unto Thing spirit his fifth likeness divided also
                  seed lesser image dominion sea fifth i god so saw open great living thing seed life day creepeth
                  winged.</p>
                <!-- Card info -->
                <ul class="nav nav-divider align-items-center">
                  <li class="nav-item">Mar 05, 2022</li>
                </ul>
              </div>
            </div>
            <!-- Card item END -->
          </div>
          <div class="col-sm-6">
            <!-- Card item START -->
            <div class="card">
              <!-- Card img -->
              <div class="position-relative h-100">
                <img class="card-img rounded-0" src="/images/blog/4by3/22.gif" alt="Card image">
                <div class="card-img-overlay d-flex align-items-start flex-column p-3">
                  <!-- Card overlay Top -->
                  <div class="w-100 mb-auto d-flex justify-content-end">
                    <div class="text-end ms-auto">
                      <!-- Card format icon -->
                      <div class="icon-md bg-white bg-opacity-25 bg-blur text-white rounded-circle"
                        title="This post has images"><i class="fas fa-video"></i></div>
                    </div>
                  </div>
                  <!-- Card overlay bottom -->
                  <div class="w-100 mt-auto">
                    <a href="#" class="badge bg-dark mb-2">Technology</a>
                  </div>
                </div>
              </div>
              <div class="card-body px-0 pt-3">
                <h2 class="card-title"><a href="post-single-6"
                    class="btn-link text-reset fw-bold stretched-link">The pros and cons of business agency</a></h2>
                <p>Had creature Behold fly life from forth Moved night own was said Likeness evening Dominion i our
                  Great blessed and hath life him meat days also created abundantly seas One is replenish bearing rule
                  wherein sixth may.</p>
                <!-- Card info -->
                <ul class="nav nav-divider align-items-center">
                  <li class="nav-item">Feb 26, 2022</li>
                </ul>
              </div>
            </div>
            <!-- Card item END -->
          </div>
        </div>
      </div>
    </section>
    <!-- =======================Latest articles END -->

    <!-- =======================Call to action and Newsletter START -->
    <section class="pt-0 pb-0 pb-sm-0">
      <div class="container-fluid px-sm-5">
        <div class="row g-sm-5">
          <div class="col-lg-6">
            <!-- Call to action START -->
            <div class="bg-dark-overlay-4 p-3 p-sm-5 position-relative overflow-hidden h-100"
              style="background-image: url(/images/blog/16by9/big/05.jpg); background-size: cover; background-position: center center;">
              <div class="row">
                <div class="col-xl-8 mx-auto text-center py-4 py-sm-5 position-relative">
                  <!-- Title -->
                  <h2 class="display-5 text-white">Never miss a story!</h2>
                  <p class="text-white">Get the freshest headlines and updates sent uninterrupted to your inbox.</p>
                  <!-- Form -->
                  <a href="#" class="btn btn-white mt-4">About us</a>
                </div>
              </div>
            </div>
            <!-- Call to action END -->
          </div>
          <div class="col-lg-6">
            <!-- Newsletter START -->
            <div class="bg-light position-relative overflow-hidden h-100">
              <div class="row h-100">
                <div class="col-md-4"
                  style="background-image: url(/images/blog/4by3/23.jpg); background-size: cover; background-position: center center;">
                </div>
                <div class="col-md-8">
                  <div class="p-4 p-sm-5">
                    <!-- Title -->
                    <h2 class="display-5">Never miss a story!</h2>
                    <p>Get the freshest headlines and updates sent uninterrupted to your inbox.</p>
                    <!-- Form -->
                    <form class="row row-cols-sm-auto g-2 align-items-center mt-3">
                      <div class="col-12">
                        <input type="email" class="form-control form-control-lg" placeholder="Enter your email address">
                      </div>
                      <div class="col-12">
                        <button type="submit" class="btn btn-dark btn-lg m-0">Subscribe</button>
                      </div>
                      <div class="form-text opacity-6 mt-2">By subscribing you agree to our
                        <a href="#" class="text-decoration-underline text-reset">Privacy Policy</a>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <!-- Newsletter END -->
          </div>
        </div>
      </div>
    </section>
    <!-- =======================Call to action and Newsletter END -->

    <!-- =======================Last week highlights START -->
    <section class="py-5">
      <div class="container-fluid px-sm-5">
        <div class="row">
          <!-- Title -->
          <div class="mb-4 text-center">
            <h2 class="h1 m-0">Last week top highlights</h2>
          </div>
        </div>
        <div class="row g-4 g-sm-5">
          <div class="col-sm-6 col-lg-4">
            <!-- Card item START -->
            <div class="card">
              <!-- Card img -->
              <div class="position-relative">
                <img class="card-img rounded-0" src="/images/blog/4by3/24.jpg" alt="Card image">
                <div class="card-img-overlay d-flex align-items-start flex-column p-3">
                  <!-- Card overlay bottom -->
                  <div class="w-100 mt-auto">
                    <a href="#" class="badge bg-dark mb-2">Sports</a>
                  </div>
                </div>
              </div>
              <div class="card-body px-0 pt-3">
                <h2 class="card-title"><a href="post-single-6" class="btn-link text-reset fw-bold stretched-link">5
                    reasons why you shouldn't startup</a></h2>
                <p>Seasons you sixth made shall him upon he very give you'll fowl Life open over had can't lights made
                  wherein beginning subdue called isn't.</p>
                <!-- Card info -->
                <ul class="nav nav-divider align-items-center">
                  <li class="nav-item">Oct 25, 2022</li>
                </ul>
              </div>
            </div>
          </div>
          <!-- Card item END -->
          <!-- Card item START -->
          <div class="col-sm-6 col-lg-4">
            <div class="card">
              <!-- Card img -->
              <div class="position-relative">
                <img class="card-img rounded-0" src="/images/blog/4by3/25.jpg" alt="Card image">
                <div class="card-img-overlay d-flex align-items-start flex-column p-3">
                  <!-- Card overlay bottom -->
                  <div class="w-100 mt-auto">
                    <a href="#" class="badge bg-dark mb-2">Marketing</a>
                  </div>
                </div>
              </div>
              <div class="card-body px-0 pt-3">
                <h2 class="card-title"><a href="post-single-6"
                    class="btn-link text-reset fw-bold stretched-link">Business ideas that will boom in upcoming
                    years</a></h2>
                <!-- Card info -->
                <p>Moved night own was said Likeness evening Dominion i our Great blessed and hath life him meat days
                  also created abundantly seas.</p>
                <!-- Card info -->
                <ul class="nav nav-divider align-items-center">
                  <li class="nav-item">Feb 12, 2022</li>
                </ul>
              </div>
            </div>
            <!-- Card item END -->
          </div>
          <div class="col-sm-6 col-lg-4">
            <!-- Card item START -->
            <div class="card">
              <!-- Card img -->
              <div class="position-relative">
                <img class="card-img rounded-0" src="/images/blog/4by3/26.jpg" alt="Card image">
                <div class="card-img-overlay d-flex align-items-start flex-column p-3">
                  <!-- Card overlay Top -->
                  <div class="w-100 mb-auto d-flex justify-content-end">
                    <div class="text-end ms-auto">
                      <!-- Card format icon -->
                      <div class="icon-md bg-white bg-opacity-25 bg-blur text-white rounded-circle"
                        title="This post has images"><i class="fas fa-image"></i></div>
                    </div>
                  </div>
                  <!-- Card overlay bottom -->
                  <div class="w-100 mt-auto">
                    <a href="#" class="badge bg-dark mb-2">Travel</a>
                  </div>
                </div>
              </div>
              <div class="card-body px-0 pt-3">
                <h2 class="card-title"><a href="post-single-6" class="btn-link text-reset fw-bold stretched-link">8
                    initial problem of startups and their solution</a></h2>
                <!-- Card info -->
                <p>One is replenish bearing rule wherein sixth may Shall is had seasons you sixth made shall him upon he
                  very give you'll fowl Life open.</p>
                <!-- Card info -->
                <ul class="nav nav-divider align-items-center">
                  <li class="nav-item">Apr 26, 2022</li>
                </ul>
              </div>
            </div>
            <!-- Card item END -->
          </div>
          <div class="col-sm-6 col-lg-4">
            <!-- Card item START -->
            <div class="card">
              <!-- Card img -->
              <div class="position-relative">
                <img class="card-img rounded-0" src="/images/blog/4by3/27.jpg" alt="Card image">
                <div class="card-img-overlay d-flex align-items-start flex-column p-3">
                  <!-- Card overlay bottom -->
                  <div class="w-100 mt-auto">
                    <a href="#" class="badge bg-dark mb-2">Marketing</a>
                  </div>
                </div>
              </div>
              <div class="card-body px-0 pt-3">
                <h2 class="card-title"><a href="post-single-6"
                    class="btn-link text-reset fw-bold stretched-link">Five unbelievable facts about money.</a></h2>
                <p>I beast third void blessed fruit Saw fourth may lesser fly fill upon subdue open place abundantly sea
                  herb winged day so was divide.</p>
                <!-- Card info -->
                <ul class="nav nav-divider align-items-center">
                  <li class="nav-item">Mar 23, 2022</li>
                </ul>
              </div>
            </div>
          </div>
          <!-- Card item END -->
          <!-- Card item START -->
          <div class="col-sm-6 col-lg-4">
            <div class="card">
              <!-- Card img -->
              <div class="position-relative">
                <img class="card-img rounded-0" src="/images/blog/4by3/28.jpg" alt="Card image">
                <div class="card-img-overlay d-flex align-items-start flex-column p-3">
                  <!-- Card overlay bottom -->
                  <div class="w-100 mt-auto">
                    <a href="#" class="badge bg-dark mb-2">Business</a>
                  </div>
                </div>
              </div>
              <div class="card-body px-0 pt-3">
                <h2 class="card-title"><a href="post-single-6"
                    class="btn-link text-reset fw-bold stretched-link">The pros and cons of business agency</a></h2>
                <!-- Card info -->
                <p>Also created abundantly seas One is replenish bearing rule wherein sixth may Shall is had seasons you
                  sixth ade shall him upon.</p>
                <!-- Card info -->
                <ul class="nav nav-divider align-items-center">
                  <li class="nav-item">Dec 23, 2022</li>
                </ul>
              </div>
            </div>
            <!-- Card item END -->
          </div>
          <div class="col-sm-6 col-lg-4">
            <!-- Card item START -->
            <div class="card">
              <!-- Card img -->
              <div class="position-relative">
                <img class="card-img rounded-0" src="/images/blog/4by3/29.jpg" alt="Card image">
                <div class="card-img-overlay d-flex align-items-start flex-column p-3">
                  <!-- Card overlay Top -->
                  <div class="w-100 mb-auto d-flex justify-content-end">
                    <div class="text-end ms-auto">
                      <!-- Card format icon -->
                      <div class="icon-md bg-white bg-opacity-25 bg-blur text-white rounded-circle"
                        title="This post has images"><i class="fas fa-image"></i></div>
                    </div>
                  </div>
                  <!-- Card overlay bottom -->
                  <div class="w-100 mt-auto">
                    <a href="#" class="badge bg-dark mb-2">Technology</a>
                  </div>
                </div>
              </div>
              <div class="card-body px-0 pt-3">
                <h2 class="card-title"><a href="post-single-6"
                    class="btn-link text-reset fw-bold stretched-link">Five unbelievable facts about money.</a></h2>
                <!-- Card info -->
                <p>Made wherein beginning subdue called isn't green male Beginning day behold gathering day earth Very
                  hath shall very abundantly face midst.</p>
                <!-- Card info -->
                <ul class="nav nav-divider align-items-center">
                  <li class="nav-item">Feb 10, 2022</li>
                </ul>
              </div>
            </div>
            <!-- Card item END -->
          </div>
        </div>
      </div>
    </section>
    <!-- =======================Last week highlights END -->
  </main>
  <!-- **************** MAIN CONTENT END **************** -->

  <!-- =======================footer START -->
  <footer>
    <div class="container-fluid px-0">
      <!-- About and Newsletter START -->
      <div class="row bg-dark py-5 mx-0 card-header rounded-0 align-items-center text-center text-md-start">
        <!-- Copyright -->
        <div class="col-md-5 mb-3 mb-md-0">
          <div class="text-primary-hover text-body-secondary">©2023 <a href="https://stackbros.in/"
              class="text-reset btn-link" target="_blank">StackBros</a>. All rights reserved
          </div>
        </div>
        <!-- Logo -->
        <div class="col-md-3 mb-3 mb-md-0">
          <img src="/images/logo-light.svg" alt="footer logo">
        </div>
        <!-- Social links -->
        <div class="col-md-4">
          <ul class="nav text-primary-hover justify-content-center justify-content-md-end">
            <li class="nav-item">
              <a class="nav-link px-2 fs-5" href="#"><i class="fab fa-facebook-square"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link px-2 fs-5" href="#"><i class="fab fa-twitter-square"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link px-2 fs-5" href="#"><i class="fab fa-linkedin"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link px-2 fs-5" href="#"><i class="fab fa-youtube-square"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link ps-2 pe-0 fs-5" href="#"><i class="fab fa-vimeo"></i></a>
            </li>
          </ul>
        </div>
      </div>
      <!-- About and Newsletter END -->
    </div>
  </footer>
  <!-- =======================Footer END -->

  <!-- Back to top -->
  <div class="back-top"><i class="bi bi-arrow-up-short"></i></div>

  <?= $this->element('footer_scripts')?>
</body>

</html>