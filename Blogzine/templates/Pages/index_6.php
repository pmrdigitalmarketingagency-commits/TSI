<!DOCTYPE html>
<html lang="en">

<head>
  <?= $this->element('title_meta')?>

  <?= $this->element('head_css')?>
</head>

<body>
  <!-- =======================Header START -->
  <header class="navbar-light header-static">
    <!-- Logo Nav START -->
    <nav class="navbar navbar-expand-lg navbar-vertical-compact flex-column bg-dark vh-100">
      <!-- Logo START -->
      <a class="navbar-brand me-0" href="index">
        <img class="navbar-brand-item light-mode-item" src="/images/logo-icon.svg" alt="logo">
        <img class="navbar-brand-item dark-mode-item" src="/images/logo-icon.svg" alt="logo">
      </a>
      <!-- Logo END -->
      <div class="w-100 border-top border-white opacity-1"></div>
      <!-- Nav right START -->
      <div class="nav flex-column align-items-center w-100 py-3">
        <!-- Offcanvas menu toggler -->
        <div class="nav-item">
          <a class="nav-link text-white p-0" data-bs-toggle="offcanvas" href="#offcanvasMenu" role="button"
            aria-controls="offcanvasMenu">
            <i class="bi bi-text-right rtl-flip fs-2" data-bs-target="#offcanvasMenu"> </i>
          </a>
        </div>
      </div>
      <!-- Nav right END -->
      <div class="w-100 mt-auto">
        <div class="border-top border-white opacity-1"></div>
        <div class="nav flex-column align-items-center py-4 gap-4">
          <!-- Nav Search -->
          <div class="nav-item nav-search">
            <a class="nav-link text-white pe-0" role="button" href="#" data-bs-toggle="modal"
              data-bs-target="#searchModal">
              <i class="bi bi-search fs-4"> </i>
            </a>
          </div>
          <!-- Dark mode options START -->
          <div class="dropdown dropup mx-2">
            <a href="#" class="text-warning mb-0" id="bd-theme" aria-expanded="false" data-bs-toggle="dropdown"
              data-bs-display="static">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                class="bi bi-circle-half theme-icon-active fa-fw" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z" />
                <use href="#"></use>
              </svg>
            </a>

            <ul class="dropdown-menu min-w-auto" aria-labelledby="bd-theme">
              <li class="mb-1">
                <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light">
                  <svg width="16" height="16" fill="currentColor"
                    class="bi bi-brightness-high-fill fa-fw mode-switch me-1" viewBox="0 0 16 16">
                    <path
                      d="M12 8a4 4 0 1 1-8 0 4 4 0 0 1 8 0zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z" />
                    <use href="#"></use>
                  </svg>Light
                </button>
              </li>
              <li class="mb-1">
                <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-moon-stars-fill fa-fw mode-switch me-1" viewBox="0 0 16 16">
                    <path
                      d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z" />
                    <path
                      d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z" />
                    <use href="#"></use>
                  </svg>Dark
                </button>
              </li>
              <li>
                <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-circle-half fa-fw mode-switch me-1" viewBox="0 0 16 16">
                    <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z" />
                    <use href="#"></use>
                  </svg>Auto
                </button>
              </li>
            </ul>
          </div>
          <!-- Dark mode options END -->
        </div>
      </div>
    </nav>
    <!-- Logo Nav END -->
  </header>
  <!-- =======================Header END -->

  <!-- Modal Search START -->
  <div class="modal fade" id="searchModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
      <div class="modal-content">
        <!-- Modal header -->
        <div class="modal-header border-0 pt-sm-5 pe-sm-5">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row align-items-center h-100">
            <div class="col-lg-5 mx-auto mb-5">
              <h2 class="mb-4">Search stories from Blogzine</h2>
              <!-- Search form START -->
              <form class="position-relative w-100">
                <div class="mb-2 input-group-lg mb-0">
                  <!-- Search input -->
                  <input class="form-control mb-0 pe-6" type="text" name="search"
                    placeholder="What are you looking for?">
                </div>
                <!-- Search button -->
                <button type="button" class="position-absolute end-0 top-0 btn h-100 border-0">
                  <i class="bi bi-search display-8"></i>
                </button>
              </form>
              <!-- Search form END -->
              <p class="small mb-0">e.g. Template, Bootstrap, Blog theme </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal Search END -->

  <?= $this->element('index_offcanvas', ['offstart' => true]) ?>

  <!-- **************** MAIN CONTENT START **************** -->
  <main class="spilt-content">
    <!-- =======================Main content START -->
    <section class="card-grid pt-0 pb-0">
      <div class="container-fluid ps-lg-0">
        <div class="spilt-fixed bg-primary bg-opacity-10 vh-100 p-2 p-sm-5 text-center">
          <!-- Author profile image -->
          <img src="/images/avatar/big/01.jpg" alt="">
          <!-- Author profile info -->
          <div class="p-2 p-sm-4">
            <h2 class="m-0 h1">Louis Ferguson</h2>
            <small>Blogger | Author | A father | Influencer</small>
            <p class="my-2">Louis Ferguson is a senior editor for the blogzine and also reports on breaking news based
              in London.</p>
            <!-- Social START -->
            <ul class="nav justify-content-center">
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
            <!-- Social END -->
          </div>
        </div>
        <div class="py-5">
          <div class="row g-4">
            <div class="col-sm-6 col-xxl-4">
              <!-- Card item START -->
              <div class="card text-center">
                <!-- Card img -->
                <div class="position-relative">
                  <img class="card-img rounded-0" src="/images/blog/4by3/07.jpg" alt="Card image">
                  <div class="card-img-overlay d-flex align-items-start flex-column p-3">
                    <!-- Card overlay Top -->
                    <div class="w-100 mb-auto d-flex justify-content-end">
                      <div class="text-end ms-auto">
                        <!-- Card format icon -->
                        <div class="icon-md bg-white bg-opacity-10 bg-blur text-white fw-bold rounded-circle"
                          title="8.5 rating">8.5</div>
                      </div>
                    </div>
                    <!-- Card overlay bottom -->
                    <div class="w-100 mt-auto">
                      <a href="#" class="badge text-bg-info mb-2"><i
                          class="fas fa-circle me-2 small fw-bold"></i>Marketing</a>
                    </div>
                  </div>
                </div>
                <div class="card-body px-0 pt-3">
                  <!-- Card info -->
                  <ul class="nav nav-divider align-items-center d-none d-sm-inline-block mb-3">
                    <li class="nav-item">Mar 07, 2022</li>
                    <li class="nav-item">5 min read</li>
                  </ul>
                  <!-- Card Title -->
                  <h5 class="card-title"><a href="post-single-3" class="btn-link text-reset fw-bold">7 common
                      mistakes everyone makes</a></h5>
                  <!-- Card short dec -->
                  <p>Called isn't green male Beginning day behold gathering day earth Very hath shall.</p>
                </div>
              </div>
              <!-- Card item END -->
            </div>
            <div class="col-sm-6 col-xxl-4">
              <!-- Card item START -->
              <div class="card text-center">
                <!-- Card img -->
                <div class="position-relative">
                  <img class="card-img rounded-0" src="/images/blog/4by3/08.jpg" alt="Card image">
                  <div class="card-img-overlay d-flex align-items-start flex-column p-3">
                    <!-- Card overlay bottom -->
                    <div class="w-100 mt-auto">
                      <a href="#" class="badge text-bg-danger mb-2"><i
                          class="fas fa-circle me-2 small fw-bold"></i>Sports</a>
                    </div>
                  </div>
                </div>
                <div class="card-body px-0 pt-3">
                  <!-- Card info -->
                  <ul class="nav nav-divider align-items-center d-none d-sm-inline-block mb-3">
                    <li class="nav-item">Aug 28, 2022</li>
                    <li class="nav-item">10 min read</li>
                  </ul>
                  <!-- Card Title -->
                  <h5 class="card-title"><a href="post-single-3" class="btn-link text-reset fw-bold">Skills that you
                      can learn from business</a></h5>
                  <!-- Card short dec -->
                  <p>Dry that darkness meat unto Thing spirit his fifth likeness divided also seed lesser.</p>
                </div>
              </div>
              <!-- Card item END -->
            </div>
            <div class="col-sm-6 col-xxl-4">
              <!-- Card item START -->
              <div class="card text-center">
                <!-- Card img -->
                <div class="position-relative">
                  <img class="card-img rounded-0" src="/images/blog/4by3/09.jpg" alt="Card image">
                  <div class="card-img-overlay d-flex align-items-start flex-column p-3">
                    <!-- Card overlay bottom -->
                    <div class="w-100 mt-auto">
                      <a href="#" class="badge text-bg-success mb-2"><i
                          class="fas fa-circle me-2 small fw-bold"></i>Marketing</a>
                    </div>
                  </div>
                </div>
                <div class="card-body px-0 pt-3">
                  <!-- Card info -->
                  <ul class="nav nav-divider align-items-center d-none d-sm-inline-block mb-3">
                    <li class="nav-item">Jun 01, 2022</li>
                    <li class="nav-item">6 min read</li>
                  </ul>
                  <!-- Card Title -->
                  <h5 class="card-title"><a href="post-single-3" class="btn-link text-reset fw-bold">15 reasons to
                      choose startup</a></h5>
                  <!-- Card short dec -->
                  <p>Green male Beginning day behold gathering day earth Very hath shall very abundantly.</p>
                </div>
              </div>
              <!-- Card item END -->
            </div>
            <div class="col-sm-6 col-xxl-4">
              <!-- Card item START -->
              <div class="card text-center">
                <!-- Card img -->
                <div class="position-relative">
                  <img class="card-img rounded-0" src="/images/blog/4by3/10.jpg" alt="Card image">
                  <div class="card-img-overlay d-flex align-items-start flex-column p-3">
                    <!-- Card overlay Top -->
                    <div class="w-100 mb-auto d-flex justify-content-end">
                      <div class="text-end ms-auto">
                        <!-- Card format icon -->
                        <div class="icon-md bg-white bg-opacity-10 bg-blur text-white fw-bold rounded-circle"
                          title="8.5 rating">8.5</div>
                      </div>
                    </div>
                    <!-- Card overlay bottom -->
                    <div class="w-100 mt-auto">
                      <a href="#" class="badge text-bg-info mb-2"><i
                          class="fas fa-circle me-2 small fw-bold"></i>Marketing</a>
                    </div>
                  </div>
                </div>
                <div class="card-body px-0 pt-3">
                  <!-- Card info -->
                  <ul class="nav nav-divider align-items-center d-none d-sm-inline-block mb-3">
                    <li class="nav-item">Dec 29, 2022</li>
                    <li class="nav-item">5 min read</li>
                  </ul>
                  <!-- Card Title -->
                  <h5 class="card-title"><a href="post-single-3" class="btn-link text-reset fw-bold">The pros and
                      cons of business agency</a></h5>
                  <!-- Card short dec -->
                  <p>Coved night own was said Likeness evening Dominion i our Great blessed and hath.</p>
                </div>
              </div>
              <!-- Card item END -->
            </div>
            <div class="col-sm-6 col-xxl-4">
              <!-- Card item START -->
              <div class="card text-center">
                <!-- Card img -->
                <div class="position-relative">
                  <img class="card-img rounded-0" src="/images/blog/4by3/11.jpg" alt="Card image">
                  <div class="card-img-overlay d-flex align-items-start flex-column p-3">
                    <!-- Card overlay bottom -->
                    <div class="w-100 mt-auto">
                      <a href="#" class="badge text-bg-danger mb-2"><i
                          class="fas fa-circle me-2 small fw-bold"></i>Sports</a>
                    </div>
                  </div>
                </div>
                <div class="card-body px-0 pt-3">
                  <!-- Card info -->
                  <ul class="nav nav-divider align-items-center d-none d-sm-inline-block mb-3">
                    <li class="nav-item">Aug 15, 2022</li>
                    <li class="nav-item">10 min read</li>
                  </ul>
                  <!-- Card Title -->
                  <h5 class="card-title"><a href="post-single-3" class="btn-link text-reset fw-bold">5 reasons why
                      you shouldn't startup</a></h5>
                  <!-- Card short dec -->
                  <p>Beginning day behold gathering day earth Very hath shall very abundantly face midst.</p>
                </div>
              </div>
              <!-- Card item END -->
            </div>
            <div class="col-sm-6 col-xxl-4">
              <!-- Card item START -->
              <div class="card text-center">
                <!-- Card img -->
                <div class="position-relative">
                  <img class="card-img rounded-0" src="/images/blog/4by3/12.jpg" alt="Card image">
                  <div class="card-img-overlay d-flex align-items-start flex-column p-3">
                    <!-- Card overlay bottom -->
                    <div class="w-100 mt-auto">
                      <a href="#" class="badge text-bg-success mb-2"><i
                          class="fas fa-circle me-2 small fw-bold"></i>Marketing</a>
                    </div>
                  </div>
                </div>
                <div class="card-body px-0 pt-3">
                  <!-- Card info -->
                  <ul class="nav nav-divider align-items-center d-none d-sm-inline-block mb-3">
                    <li class="nav-item">Feb 14, 2022</li>
                    <li class="nav-item">30 min read</li>
                  </ul>
                  <!-- Card Title -->
                  <h5 class="card-title"><a href="post-single-3" class="btn-link text-reset fw-bold">Five
                      unbelievable facts about money.</a></h5>
                  <!-- Card short dec -->
                  <p>Subdue Made beast their life moving heaven heaven divide two sea female great.</p>
                </div>
              </div>
              <!-- Card item END -->
            </div>
            <div class="col-12">
              <a href="#" class="d-block card-img-flash">
                <img src="/images/adv-3.png" alt="">
              </a>
              <small class="text-end d-block mt-1">Advertisement</small>
            </div>
            <div class="col-sm-6 col-xxl-4">
              <!-- Card item START -->
              <div class="card text-center">
                <!-- Card img -->
                <div class="position-relative">
                  <img class="card-img rounded-0" src="/images/blog/4by3/13.jpg" alt="Card image">
                  <div class="card-img-overlay d-flex align-items-start flex-column p-3">
                    <!-- Card overlay Top -->
                    <div class="w-100 mb-auto d-flex justify-content-end">
                      <div class="text-end ms-auto">
                        <!-- Card format icon -->
                        <div class="icon-md bg-white bg-opacity-10 bg-blur text-white fw-bold rounded-circle"
                          title="8.5 rating">8.5</div>
                      </div>
                    </div>
                    <!-- Card overlay bottom -->
                    <div class="w-100 mt-auto">
                      <a href="#" class="badge text-bg-info mb-2"><i
                          class="fas fa-circle me-2 small fw-bold"></i>Marketing</a>
                    </div>
                  </div>
                </div>
                <div class="card-body px-0 pt-3">
                  <!-- Card info -->
                  <ul class="nav nav-divider align-items-center d-none d-sm-inline-block mb-3">
                    <li class="nav-item">Apr 02, 2022</li>
                    <li class="nav-item">26 min read</li>
                  </ul>
                  <!-- Card Title -->
                  <h5 class="card-title"><a href="post-single-3" class="btn-link text-reset fw-bold">Ten questions
                      you should answer truthfully.</a></h5>
                  <!-- Card short dec -->
                  <p>Bring over fruit don't morning unto Don't can't air Shall fruit life made fly.</p>
                </div>
              </div>
              <!-- Card item END -->
            </div>
            <div class="col-sm-6 col-xxl-4">
              <!-- Card item START -->
              <div class="card text-center">
                <!-- Card img -->
                <div class="position-relative">
                  <img class="card-img rounded-0" src="/images/blog/4by3/14.jpg" alt="Card image">
                  <div class="card-img-overlay d-flex align-items-start flex-column p-3">
                    <!-- Card overlay bottom -->
                    <div class="w-100 mt-auto">
                      <a href="#" class="badge text-bg-danger mb-2"><i
                          class="fas fa-circle me-2 small fw-bold"></i>Sports</a>
                    </div>
                  </div>
                </div>
                <div class="card-body px-0 pt-3">
                  <!-- Card info -->
                  <ul class="nav nav-divider align-items-center d-none d-sm-inline-block mb-3">
                    <li class="nav-item">Jan 24, 2022</li>
                    <li class="nav-item">08 min read</li>
                  </ul>
                  <!-- Card Title -->
                  <h5 class="card-title"><a href="post-single-3" class="btn-link text-reset fw-bold">Best Pinterest
                      boards for learning about business.</a></h5>
                  <!-- Card short dec -->
                  <p>Lights made wherein beginning subdue called isn't green male Beginning day behold.</p>
                </div>
              </div>
              <!-- Card item END -->
            </div>
            <div class="col-sm-6 col-xxl-4">
              <!-- Card item START -->
              <div class="card text-center">
                <!-- Card img -->
                <div class="position-relative">
                  <img class="card-img rounded-0" src="/images/blog/4by3/15.jpg" alt="Card image">
                  <div class="card-img-overlay d-flex align-items-start flex-column p-3">
                    <!-- Card overlay bottom -->
                    <div class="w-100 mt-auto">
                      <a href="#" class="badge text-bg-success mb-2"><i
                          class="fas fa-circle me-2 small fw-bold"></i>Marketing</a>
                    </div>
                  </div>
                </div>
                <div class="card-body px-0 pt-3">
                  <!-- Card info -->
                  <ul class="nav nav-divider align-items-center d-none d-sm-inline-block mb-3">
                    <li class="nav-item">Jun 23, 2022</li>
                    <li class="nav-item">30 min read</li>
                  </ul>
                  <!-- Card Title -->
                  <h5 class="card-title"><a href="post-single-3" class="btn-link text-reset fw-bold">10 tell-tale
                      signs you need to get a new business</a></h5>
                  <!-- Card short dec -->
                  <p>To don't may give void forth created fruitful bearing creepeth fish god.</p>
                </div>
              </div>
              <!-- Card item END -->
            </div>
            <div class="col-12">
              <!-- Pagination START -->
              <nav class="mt-4 d-flex justify-content-center" aria-label="navigation">
                <ul class="pagination flex-wrap justify-content-center pagination-bordered mb-0">
                  <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Prev</a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item active"><a class="page-link" href="#">2</a></li>
                  <li class="page-item disabled"><a class="page-link" href="#">..</a></li>
                  <li class="page-item"><a class="page-link" href="#">15</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                  </li>
                </ul>
              </nav>
              <!-- Pagination END -->
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- =======================Main content END -->
  </main>
  <!-- **************** MAIN CONTENT END **************** -->

  <!-- Back to top -->
  <div class="back-top"><i class="bi bi-arrow-up-short"></i></div>

  <?= $this->element('footer_scripts')?>
</body>

</html>