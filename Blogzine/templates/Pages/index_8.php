<!DOCTYPE html>
<html lang="en">

<head>
  <?= $this->element('title_meta') ?>

  <link rel="stylesheet" type="text/css" href="/vendor/plyr/plyr.css">

  <?= $this->element('head_css') ?>
</head>

<body>

  <?= $this->element('navbar', ['ulClass' => 'mx-auto']) ?>

  <!-- =======================Main hero START -->
  <section class="py-0 py-md-5 overflow-hidden position-relative" style="background-image: url(/images/bg.png); background-position: center center; background-repeat: no-repeat;">
    <div class="container">
      <div class="row">
        <!-- Hero title -->
        <div class="col-lg-6 mx-auto text-center pt-5 position-relative">
          <h1 class="fw-bolder display-2">Tech. Product. Science.</h1>
          <p class="lead mb-0">The latest technology news and daily updates</p>
        </div>
      </div>
    </div>
    <!-- SVG decoration left -->
    <div class="position-absolute top-50 start-100 translate-middle opacity-1 d-none d-md-block">
      <svg viewBox="0 0 200 200" width="500px" height="500px" xmlns="http://www.w3.org/2000/svg">
        <path fill="#2163E8" d="M70.6,-22.1C78.7,2,63.7,34.5,38.8,52.3C13.9,70.2,-20.9,73.4,-37.9,59.4C-54.9,45.3,-54,14,-44.7,-11.7C-35.5,-37.5,-17.7,-57.7,6.8,-59.9C31.3,-62.1,62.5,-46.3,70.6,-22.1Z" transform="translate(100 100)" />
      </svg>
    </div>
  </section>
  <!-- =======================Main hero END -->

  <!-- **************** MAIN CONTENT START **************** -->
  <main>
    <!-- =======================Post hero START -->
    <section class="position-relative pb-0">
      <!-- SVG decoration right START -->
      <div class="position-absolute top-0 start-0 translate-middle opacity-1">
        <svg viewBox="0 0 200 200" width="500px" height="500px" xmlns="http://www.w3.org/2000/svg">
          <path fill="#d6293e" d="M70.6,-22.1C78.7,2,63.7,34.5,38.8,52.3C13.9,70.2,-20.9,73.4,-37.9,59.4C-54.9,45.3,-54,14,-44.7,-11.7C-35.5,-37.5,-17.7,-57.7,6.8,-59.9C31.3,-62.1,62.5,-46.3,70.6,-22.1Z" transform="translate(100 100)" />
        </svg>
      </div>
      <div class="container">
        <div class="row g-4 justify-content-between">
          <div class="col-lg-6">
            <!-- Card item START -->
            <div class="card">
              <!-- Card img -->
              <div class="position-relative">
                <img class="card-img" src="/images/blog/4by3/34.jpg" alt="Card image">
                <div class="card-img-overlay d-flex align-items-start flex-column p-3">
                  <div class="w-100 mt-auto">
                    <!-- Card category -->
                    <a href="#" class="badge text-bg-warning mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Technology</a>
                  </div>
                </div>
              </div>
              <!-- Card Info -->
              <div class="card-body px-0 pt-3">
                <h4 class="card-title"><a href="post-single" class="btn-link text-reset fw-bold">12 worst types of
                    business accounts you follow on Twitter</a></h4>
                <p class="card-text">He moonlights difficult engrossed it, sportsmen. Interested has all Devonshire
                  difficulty gay assistance joy.</p>
              </div>
            </div>
            <!-- Card item END -->
          </div>
          <div class="col-lg-6">
            <div class="ps-lg-5">
              <!-- Card item START -->
              <div class="card mb-4">
                <div class="row g-3">
                  <!-- Card img -->
                  <div class="col-4 col-sm-3">
                    <img class="rounded-3" src="/images/blog/1by1/13.jpg" alt="">
                  </div>
                  <div class="col-8">
                    <h5><a href="post-single-5" class="btn-link stretched-link text-reset fw-bold">Ten tell-tale
                        signs you need to get a new startup.</a></h5>
                    <!-- Card info -->
                    <ul class="nav nav-divider align-items-center small">
                      <li class="nav-item">
                        <div class="nav-link position-relative">
                          <span>by <a href="#" class="stretched-link text-reset btn-link">Samuel</a></span>
                        </div>
                      </li>
                      <!-- Card date -->
                      <li class="nav-item">Jan 22, 2022</li>
                    </ul>
                  </div>
                </div>
              </div>
              <!-- Card item END -->
              <!-- Card item START -->
              <div class="card mb-4">
                <div class="row g-3">
                  <!-- Card img -->
                  <div class="col-4 col-sm-3">
                    <img class="rounded-3" src="/images/blog/1by1/09.jpg" alt="">
                  </div>
                  <div class="col-8">
                    <h5><a href="post-single-5" class="btn-link stretched-link text-reset fw-bold">Best Pinterest
                        boards for learning about business</a></h5>
                    <!-- Card info -->
                    <ul class="nav nav-divider align-items-center small">
                      <li class="nav-item">
                        <div class="nav-link position-relative">
                          <span>by <a href="#" class="stretched-link text-reset btn-link">Dennis</a></span>
                        </div>
                      </li>
                      <!-- Card date -->
                      <li class="nav-item">Mar 07, 2022</li>
                    </ul>
                  </div>
                </div>
              </div>
              <!-- Card item END -->
              <!-- Card item START -->
              <div class="card mb-4">
                <div class="row g-3">
                  <!-- Card img -->
                  <div class="col-4 col-sm-3">
                    <img class="rounded-3" src="/images/blog/1by1/10.jpg" alt="">
                  </div>
                  <div class="col-8">
                    <h5><a href="post-single-5" class="btn-link stretched-link text-reset fw-bold">Around the web:
                        20 fabulous infographics about business</a></h5>
                    <!-- Card info -->
                    <ul class="nav nav-divider align-items-center small">
                      <li class="nav-item">
                        <div class="nav-link position-relative">
                          <span>by <a href="#" class="stretched-link text-reset btn-link">Bryan</a></span>
                        </div>
                      </li>
                      <!-- Card date -->
                      <li class="nav-item">Jun 17, 2022</li>
                    </ul>
                  </div>
                </div>
              </div>
              <!-- Card item END -->
              <!-- Card item START -->
              <div class="card">
                <div class="row g-3">
                  <!-- Card img -->
                  <div class="col-4 col-sm-3">
                    <img class="rounded-3" src="/images/blog/1by1/04.jpg" alt="">
                  </div>
                  <div class="col-8">
                    <h5><a href="post-single-5" class="btn-link stretched-link text-reset fw-bold">7 common mistakes
                        everyone makes while traveling</a></h5>
                    <!-- Card info -->
                    <ul class="nav nav-divider align-items-center small">
                      <li class="nav-item">
                        <div class="nav-link position-relative">
                          <span>by <a href="#" class="stretched-link text-reset btn-link">Jacq</a></span>
                        </div>
                      </li>
                      <!-- Card date -->
                      <li class="nav-item">Nov 11, 2022</li>
                    </ul>
                  </div>
                </div>
              </div>
              <!-- Card item END -->
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- =======================Post hero END -->

    <!-- =======================Today's top highlight START -->
    <section class="position-relative">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <!-- Title START -->
            <div class="mb-4 d-sm-flex justify-content-between align-items-center">
              <div>
                <h2 class="m-0">Today's top highlights</h2>
                <p class="mb-0">Latest breaking news, pictures, videos, and special reports</p>
              </div>
              <a href="#" class="text-body small"><u>View all post</u></a>
            </div>
          </div>
        </div>
        <div class="row filter-container overflow-hidden" data-isotope='{"layoutMode": "masonry"}'>
          <!-- Card item START -->
          <div class="col-sm-6 col-lg-4 grid-item">
            <div class="card mb-4">
              <!-- Card img -->
              <div class="position-relative">
                <img class="card-img" src="/images/blog/1by1/08.jpg" alt="Card image">
              </div>
              <div class="card-body px-0 pt-3">
                <!-- Card meta -->
                <ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
                  <li class="nav-item">
                    <div class="nav-link">
                      <div class="d-flex align-items-center position-relative">
                        <div class="avatar avatar-xs">
                          <img class="avatar-img rounded-circle" src="/images/avatar/01.jpg" alt="avatar">
                        </div>
                        <span class="ms-3">by <a href="#" class="stretched-link text-reset btn-link">Samuel</a></span>
                      </div>
                    </div>
                  </li>
                  <li class="nav-item">Jan 10, 2022</li>
                </ul>
                <!-- Card title -->
                <h4 class="card-title mt-2"><a href="post-single-6" class="btn-link text-reset stretched-link fw-bold">Skills that you can learn from business</a></h4>
              </div>
            </div>
          </div>
          <!-- Card item END -->
          <!-- Card item START -->
          <div class="col-sm-6 col-lg-4 grid-item">
            <div class="card mb-4">
              <!-- Card img -->
              <div class="position-relative">
                <img class="card-img" src="/images/blog/4by3/30.jpg" alt="Card image">
              </div>
              <div class="card-body px-0 pt-3">
                <!-- Card meta -->
                <ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
                  <li class="nav-item">
                    <div class="nav-link">
                      <div class="d-flex align-items-center position-relative">
                        <div class="avatar avatar-xs">
                          <img class="avatar-img rounded-circle" src="/images/avatar/02.jpg" alt="avatar">
                        </div>
                        <span class="ms-3">by <a href="#" class="stretched-link text-reset btn-link">Barrett</a></span>
                      </div>
                    </div>
                  </li>
                  <li class="nav-item">Feb 14, 2022</li>
                </ul>
                <!-- Card title -->
                <h4 class="card-title mt-2"><a href="post-single-6" class="btn-link text-reset stretched-link fw-bold">Initial problem of startups and their
                    solution</a></h4>
              </div>
            </div>
          </div>
          <!-- Card item END -->
          <!-- Card item START -->
          <div class="col-sm-6 col-lg-4 grid-item">
            <div class="card mb-4">
              <!-- Card img -->
              <div class="position-relative">
                <img class="card-img" src="/images/blog/1by1/09.jpg" alt="Card image">
              </div>
              <div class="card-body px-0 pt-3">
                <!-- Card meta -->
                <ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
                  <li class="nav-item">
                    <div class="nav-link">
                      <div class="d-flex align-items-center position-relative">
                        <div class="avatar avatar-xs">
                          <img class="avatar-img rounded-circle" src="/images/avatar/03.jpg" alt="avatar">
                        </div>
                        <span class="ms-3">by <a href="#" class="stretched-link text-reset btn-link">Bryan</a></span>
                      </div>
                    </div>
                  </li>
                  <li class="nav-item">Mar 05, 2022</li>
                </ul>
                <!-- Card title -->
                <h4 class="card-title mt-2"><a href="post-single-6" class="btn-link text-reset stretched-link fw-bold">10 tell-tale signs you need to get a new
                    business</a></h4>
              </div>
            </div>
          </div>
          <!-- Card item END -->
          <!-- Card item START -->
          <div class="col-sm-6 col-lg-4 grid-item">
            <div class="card mb-4">
              <!-- Card img -->
              <div class="position-relative overflow-hidden w-100">
                <!-- HTML video START -->
                <div class="player-wrapper rounded-3 overflow-hidden">
                  <div class="player-youtube">
                    <iframe src="https://www.youtube.com/embed/tXHviS-4ygo"></iframe>
                  </div>
                </div>
                <!-- HTML video END -->
              </div>
              <div class="card-body px-0 pt-3">
                <!-- Card meta -->
                <ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
                  <li class="nav-item">
                    <div class="nav-link">
                      <div class="d-flex align-items-center position-relative">
                        <div class="avatar avatar-xs">
                          <img class="avatar-img rounded-circle" src="/images/avatar/04.jpg" alt="avatar">
                        </div>
                        <span class="ms-3">by <a href="#" class="stretched-link text-reset btn-link">Vasquez</a></span>
                      </div>
                    </div>
                  </li>
                  <li class="nav-item">Apr 15, 2022</li>
                </ul>
                <!-- Card title -->
                <h4 class="card-title mt-2"><a href="post-single-6" class="btn-link text-reset fw-bold">This is why
                    this year will be the year of startups</a></h4>
              </div>
            </div>
          </div>
          <!-- Card item END -->
          <!-- Card item START -->
          <div class="col-sm-6 col-lg-4 grid-item">
            <div class="card mb-4">
              <!-- Card img -->
              <div class="position-relative">
                <img class="card-img" src="/images/blog/3by4/07.jpg" alt="Card image">
              </div>
              <div class="card-body px-0 pt-3">
                <!-- Card meta -->
                <ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
                  <li class="nav-item">
                    <div class="nav-link">
                      <div class="d-flex align-items-center position-relative">
                        <div class="avatar avatar-xs">
                          <img class="avatar-img rounded-circle" src="/images/avatar/05.jpg" alt="avatar">
                        </div>
                        <span class="ms-3">by <a href="#" class="stretched-link text-reset btn-link">Billy</a></span>
                      </div>
                    </div>
                  </li>
                  <li class="nav-item">Nov 03, 2022</li>
                </ul>
                <!-- Card title -->
                <h4 class="card-title mt-2"><a href="post-single-6" class="btn-link text-reset stretched-link fw-bold">The pros and cons of business agency</a></h4>
              </div>
            </div>
          </div>
          <!-- Card item END -->
          <!-- Card item START -->
          <div class="col-sm-6 col-lg-4 grid-item">
            <div class="card mb-4">
              <!-- Card img -->
              <div class="position-relative">
                <img class="card-img" src="/images/blog/3by4/09.jpg" alt="Card image">
              </div>
              <div class="card-body px-0 pt-3">
                <!-- Card meta -->
                <ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
                  <li class="nav-item">
                    <div class="nav-link">
                      <div class="d-flex align-items-center position-relative">
                        <div class="avatar avatar-xs">
                          <img class="avatar-img rounded-circle" src="/images/avatar/06.jpg" alt="avatar">
                        </div>
                        <span class="ms-3">by <a href="#" class="stretched-link text-reset btn-link">Jacqueline</a></span>
                      </div>
                    </div>
                  </li>
                  <li class="nav-item">Oct 18, 2022</li>
                </ul>
                <!-- Card title -->
                <h4 class="card-title mt-2"><a href="post-single-6" class="btn-link text-reset stretched-link fw-bold">5 reasons why you shouldn't startup</a></h4>
              </div>
            </div>
          </div>
          <!-- Card item END -->
          <!-- Card item START -->
          <div class="col-sm-6 col-lg-4 grid-item">
            <div class="card mb-4">
              <!-- Card img -->
              <div class="position-relative">
                <img class="card-img" src="/images/blog/1by1/10.jpg" alt="Card image">
              </div>
              <div class="card-body px-0 pt-3">
                <!-- Card meta -->
                <ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
                  <li class="nav-item">
                    <div class="nav-link">
                      <div class="d-flex align-items-center position-relative">
                        <div class="avatar avatar-xs">
                          <img class="avatar-img rounded-circle" src="/images/avatar/07.jpg" alt="avatar">
                        </div>
                        <span class="ms-3">by <a href="#" class="stretched-link text-reset btn-link">Miller</a></span>
                      </div>
                    </div>
                  </li>
                  <li class="nav-item">Feb 23, 2022</li>
                </ul>
                <!-- Card title -->
                <h4 class="card-title mt-2"><a href="post-single-6" class="btn-link text-reset stretched-link fw-bold">Five unbelievable facts about money.</a></h4>
              </div>
            </div>
          </div>
          <!-- Card item END -->
          <!-- Card item START -->
          <div class="col-sm-6 col-lg-4 grid-item">
            <div class="card mb-4">
              <!-- Card img -->
              <div class="position-relative">
                <img class="card-img" src="/images/blog/3by4/08.jpg" alt="Card image">
              </div>
              <div class="card-body px-0 pt-3">
                <!-- Card meta -->
                <ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
                  <li class="nav-item">
                    <div class="nav-link">
                      <div class="d-flex align-items-center position-relative">
                        <div class="avatar avatar-xs">
                          <img class="avatar-img rounded-circle" src="/images/avatar/08.jpg" alt="avatar">
                        </div>
                        <span class="ms-3">by <a href="#" class="stretched-link text-reset btn-link">Wallace</a></span>
                      </div>
                    </div>
                  </li>
                  <li class="nav-item">Wed 03, 2022</li>
                </ul>
                <!-- Card title -->
                <h4 class="card-title mt-2"><a href="post-single-6" class="btn-link text-reset stretched-link fw-bold">Around the web: 20 fabulous infographics about
                    business</a></h4>
              </div>
            </div>
          </div>
          <!-- Card item END -->
          <!-- Card item START -->
          <div class="col-sm-6 col-lg-4 grid-item">
            <div class="card mb-4">
              <!-- Card img -->
              <div class="position-relative">
                <img class="card-img" src="/images/blog/3by4/10.jpg" alt="Card image">
              </div>
              <div class="card-body px-0 pt-3">
                <!-- Card meta -->
                <ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
                  <li class="nav-item">
                    <div class="nav-link">
                      <div class="d-flex align-items-center position-relative">
                        <div class="avatar avatar-xs">
                          <img class="avatar-img rounded-circle" src="/images/avatar/09.jpg" alt="avatar">
                        </div>
                        <span class="ms-3">by <a href="#" class="stretched-link text-reset btn-link">Amanda</a></span>
                      </div>
                    </div>
                  </li>
                  <li class="nav-item">Tue 16, 2022</li>
                </ul>
                <!-- Card title -->
                <h4 class="card-title mt-2"><a href="post-single-6" class="btn-link text-reset stretched-link fw-bold">8 initial problem of startups and their
                    solution</a></h4>
              </div>
            </div>
          </div>
          <!-- Card item END -->
          <!-- Card item START -->
          <div class="col-sm-6 col-lg-4 grid-item">
            <div class="card mb-4">
              <!-- Card img -->
              <div class="position-relative">
                <img class="card-img" src="/images/blog/3by2/12.jpg" alt="Card image">
              </div>
              <div class="card-body px-0 pt-3">
                <!-- Card meta -->
                <ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
                  <li class="nav-item">
                    <div class="nav-link">
                      <div class="d-flex align-items-center position-relative">
                        <div class="avatar avatar-xs">
                          <img class="avatar-img rounded-circle" src="/images/avatar/10.jpg" alt="avatar">
                        </div>
                        <span class="ms-3">by <a href="#" class="stretched-link text-reset btn-link">Samuel</a></span>
                      </div>
                    </div>
                  </li>
                  <li class="nav-item">Apr 26, 2022</li>
                </ul>
                <!-- Card title -->
                <h4 class="card-title mt-2"><a href="post-single-6" class="btn-link text-reset stretched-link fw-bold">Business ideas that will boom in upcoming
                    years</a></h4>
              </div>
            </div>
          </div>
          <!-- Card item END -->
        </div>
        <button type="button" class="btn btn-primary-soft w-100">Load more post <i class="bi bi-arrow-down-circle ms-2 align-middle"></i></button>
      </div>
    </section>
    <!-- =======================Today's top highlight END -->

    <!-- =======================Ads START -->
    <section class="pt-0">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <a href="#" class="card-img-flash d-block">
              <img src="/images/adv-1.png" alt="adv">
            </a>
            <!-- Link text -->
            <div class="smaller text-end mt-2">ads via <a href="#" class="text-body"><u>Bootstrap</u></a></div>
          </div>
        </div>
      </div>
    </section>
    <!-- =======================Ads END -->

    <!-- ======================Last week top highlights START -->
    <section class="bg-dark">
      <div class="container">
        <div class="row">
          <!-- Main Post START -->
          <div class="col-lg-9 mx-auto">
            <!-- Top highlights START -->
            <div class="mb-4 text-center">
              <h2 class="text-white m-0">Last week top highlights</h2>
              <p class="text-white">Check last weeks top highlights, news, stories and headline news</p>
            </div>
          </div>
        </div>
        <div class="row g-4 pb-4">
          <!-- Card item START -->
          <div class="col-sm-6 col-lg-3">
            <div class="card card-overlay-bottom card-img-scale">
              <!-- Card Image -->
              <img class="card-img" src="/images/blog/3by4/07.jpg" alt="">
              <!-- Card Image overlay -->
              <div class="card-img-overlay d-flex flex-column p-3 p-sm-4">
                <div>
                  <!-- Card category -->
                  <a href="#" class="badge text-bg-warning"><i class="fas fa-circle me-2 small fw-bold"></i>Technology</a>
                </div>
                <div class="w-100 mt-auto">
                  <!-- Card title -->
                  <h4 class="text-white"><a href="post-single-2" class="btn-link text-reset stretched-link">Best
                      Pinterest boards for learning about business</a></h4>
                  <!-- Card info -->
                  <ul class="nav nav-divider text-white-force align-items-center d-none d-sm-inline-block small">
                    <li class="nav-item position-relative">
                      <div class="nav-link">by <a href="#" class="stretched-link text-reset btn-link">Bryan</a>
                      </div>
                    </li>
                    <li class="nav-item">Aug 18, 2022</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- Card item END -->
          <!-- Card item START -->
          <div class="col-sm-6 col-lg-3">
            <div class="card card-overlay-bottom card-img-scale">
              <!-- Card Image -->
              <img class="card-img" src="/images/blog/3by4/08.jpg" alt="">
              <!-- Card Image overlay -->
              <div class="card-img-overlay d-flex flex-column p-3 p-sm-4">
                <div>
                  <!-- Card category -->
                  <a href="#" class="badge text-bg-success mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Business</a>
                </div>
                <div class="w-100 mt-auto">
                  <!-- Card title -->
                  <h4 class="text-white"><a href="post-single-2" class="btn-link text-reset stretched-link">5
                      intermediate guide to business</a></h4>
                  <!-- Card info -->
                  <ul class="nav nav-divider text-white-force align-items-center d-none d-sm-inline-block small">
                    <li class="nav-item position-relative">
                      <div class="nav-link">by <a href="#" class="stretched-link text-reset btn-link">Joan</a>
                      </div>
                    </li>
                    <li class="nav-item">Jun 03, 2022</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- Card item END -->
          <!-- Card item START -->
          <div class="col-sm-6 col-lg-3">
            <div class="card card-overlay-bottom card-img-scale">
              <!-- Card Image -->
              <img class="card-img" src="/images/blog/3by4/09.jpg" alt="">
              <!-- Card Image overlay -->
              <div class="card-img-overlay d-flex flex-column p-3 p-sm-4">
                <div>
                  <!-- Card category -->
                  <a href="#" class="badge bg-dark mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Travel</a>
                </div>
                <div class="w-100 mt-auto">
                  <!-- Card title -->
                  <h4 class="text-white"><a href="post-single-2" class="btn-link text-reset stretched-link">5
                      investment doubts you should clarify</a></h4>
                  <!-- Card info -->
                  <ul class="nav nav-divider text-white-force align-items-center d-none d-sm-inline-block small">
                    <li class="nav-item position-relative">
                      <div class="nav-link">by <a href="#" class="stretched-link text-reset btn-link">Dennis</a>
                      </div>
                    </li>
                    <li class="nav-item">Jan 28, 2022</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- Card item END -->
          <!-- Card item START -->
          <div class="col-sm-6 col-lg-3">
            <div class="card card-overlay-bottom card-img-scale">
              <!-- Card Image -->
              <img class="card-img" src="/images/blog/3by4/10.jpg" alt="">
              <!-- Card Image overlay -->
              <div class="card-img-overlay d-flex flex-column p-3 p-sm-4">
                <div>
                  <!-- Card category -->
                  <a href="#" class="badge bg-primary mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Business</a>
                </div>
                <div class="w-100 mt-auto">
                  <!-- Card title -->
                  <h4 class="text-white"><a href="post-single-2" class="btn-link text-reset stretched-link">7 common
                      mistakes everyone makes while traveling</a></h4>
                  <!-- Card info -->
                  <ul class="nav nav-divider text-white-force align-items-center d-none d-sm-inline-block small">
                    <li class="nav-item position-relative">
                      <div class="nav-link">by <a href="#" class="stretched-link text-reset btn-link">Bryan</a>
                      </div>
                    </li>
                    <li class="nav-item">May 26, 2022</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- Card item END -->
        </div>
      </div>
    </section>
    <!-- ======================Last week top highlights START -->
  </main>
  <!-- **************** MAIN CONTENT END **************** -->

  <!-- =======================Footer START -->
  <footer class="pb-5">
    <div class="container">
      <div class="row pt-5">
        <div class="col-lg-7 mx-auto text-center">
          <!-- Logo -->
          <img class="light-mode-item mx-auto" src="/images/logo.svg" alt="logo">
          <img class="dark-mode-item mx-auto" src="/images/logo-light.svg" alt="logo">
          <p class="mt-3">The next-generation blog, news, and magazine theme for you to start sharing your stories
            today! This Bootstrap 5 based theme is ideal for all types of sites that deliver the news.</p>
          <!-- Links -->
          <ul class="nav text-center text-sm-end justify-content-center justify-content-center mt-3 mt-md-0">
            <li class="nav-item"><a class="nav-link" href="#">About</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Terms</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Privacy</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Career<span class="badge text-bg-danger ms-2">2
                  Job</span></a></li>
            <li class="nav-item"><a class="nav-link" href="#">Contact us</a></li>
            <li class="nav-item"><a class="nav-link pe-0" href="#">Cookies</a></li>
          </ul>
          <!-- Copyright -->
          <div class="mt-2">©2023 <a href="https://stackbros.in/" class="text-reset btn-link" target="_blank">StackBros</a>. All rights reserved </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- =======================Footer END -->

  <!-- Back to top -->
  <div class="back-top"><i class="bi bi-arrow-up-short"></i></div>

  <!-- Vendors -->
  <script src="/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="/vendor/plyr/plyr.min.js"></script>

  <?= $this->element('footer_scripts') ?>
</body>

</html>