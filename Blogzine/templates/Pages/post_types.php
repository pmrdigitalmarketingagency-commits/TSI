<!DOCTYPE html>
<html lang="en">

<head>
  <?= $this->element('title_meta')?>

  <link rel="stylesheet" type="text/css" href="/vendor/plyr/plyr.css">
  <link rel="stylesheet" type="text/css" href="/vendor/glightbox/css/glightbox.min.css">
  <link rel="stylesheet" type="text/css" href="/vendor/tiny-slider/tiny-slider.css">

  <?= $this->element('head_css')?>
</head>

<body>
  <?= $this->element('navbar')?>

  <!-- **************** MAIN CONTENT START **************** -->
  <main>
    <!-- =======================Inner intro START -->
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-9 mx-auto text-center">
            <h1 class="display-4">Post types</h1>
            <div class="alert alert-warning" role="alert"> Some video/audio can work only on the real server. For the
              correct operation of all functions, check with localhost server or upload your website on a real server.
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- =======================Inner intro END -->

    <!-- =======================Video post END -->
    <section class="pt-4">
      <div class="container">
        <div class="row g-4">

          <!-- Image post START -->
          <div class="col-md-6">
            <!-- Card item START -->
            <div class="card">
              <!-- Image -->
              <div class="card-image">
                <img class="card-img" src="/images/blog/16by9/05.jpg" alt="">
              </div>
              <div class="card-body px-0 pt-3">
                <h5 class="card-title"><a href="post-single-3" class="btn-link text-reset fw-bold">Image post</a>
                </h5>
                <p>Drawings offended yet answered Jennings perceive laughing six did far was out laughter raptures.</p>
                <!-- Card info -->
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
                  <li class="nav-item">Mar 02, 2022</li>
                </ul>
              </div>
            </div>
            <!-- Card item END -->
          </div>
          <!-- Image post END -->


          <!-- Image grid post START -->
          <div class="col-md-6">
            <!-- Card item START -->
            <div class="card">
              <div class="ratio ratio-16x9">
                <div class="row g-0">
                  <div class="col-6">
                    <!-- Card grid image 1 -->
                    <div class="h-100 me-3 rounded-3"
                      style="background-image: url(/images/blog/1by1/01.jpg); background-size: cover;">
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="vstack gap-3 h-100">
                      <!-- Card grid image 2 -->
                      <div class="h-50 rounded-3"
                        style="background-image: url(/images/blog/16by9/01.jpg); background-size: cover;">
                      </div>
                      <!-- Card grid image 3 -->
                      <div class="h-50 rounded-3 bg-dark-overlay-4 overflow-hidden"
                        style="background-image: url(/images/blog/16by9/06.jpg); background-size: cover;">
                        <div class="d-flex justify-content-center align-items-center h-100">
                          <a class="btn-link text-white mb-0 stretched-link" href="#"> View all </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-body px-0 pt-3">
                <!-- Card Title -->
                <h5 class="card-title"><a href="post-single-3" class="btn-link text-reset fw-bold">Image grid
                    post</a></h5>
                <p>Thirty it matter enable become admire in giving. See resolved goodness felicity shy civility domestic
                  had but.</p>
                <!-- Card info -->
                <ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
                  <li class="nav-item">
                    <div class="nav-link">
                      <div class="d-flex align-items-center position-relative">
                        <div class="avatar avatar-xs">
                          <img class="avatar-img rounded-circle" src="/images/avatar/02.jpg" alt="avatar">
                        </div>
                        <span class="ms-3">by <a href="#" class="stretched-link text-reset btn-link">Joan</a></span>
                      </div>
                    </div>
                  </li>
                  <li class="nav-item">Apr 10, 2022</li>
                </ul>
              </div>
            </div>
            <!-- Card item END -->
          </div>
          <!-- Image grid post END -->


          <!-- Blockquote post START -->
          <div class="col-md-6">
            <!-- Card item START -->
            <div class="card bg-primary h-400">
              <!-- Card Image overlay -->
              <div class="card-img-overlay d-flex flex-column p-3 p-md-4">
                <div>
                  <!-- Card title -->
                  <blockquote class="blockquote blockquote-icon-bg mt-3">
                    <p class="mb-0 text-white">Your time is limited, so don’t waste it living someone else’s life. Don’t
                      be trapped by dogma – which is living with the results of other people’s thinking</p>
                    <footer class="blockquote-footer text-white">Steve Jobs @ <cite title="Source Title">Apple
                        Inc</cite></footer>
                  </blockquote>
                </div>
                <div class="w-100 mt-auto">
                  <!-- Card info -->
                  <ul class="nav nav-divider text-white-force align-items-center small">
                    <li class="nav-item position-relative">
                      <div class="d-flex align-items-center position-relative">
                        <div class="avatar avatar-xs">
                          <img class="avatar-img rounded-circle" src="/images/avatar/01.jpg" alt="avatar">
                        </div>
                        <span class="ms-3">by <a href="#" class="stretched-link text-reset btn-link">Amanda</a></span>
                      </div>
                    </li>
                    <li class="nav-item">Jan 10, 2022</li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- Card item END -->
          </div>
          <!-- Blockquote post END -->


          <!-- Background video post START -->
          <div class="col-md-6">
            <div class="card card-overlay-bottom bg-parallax h-400" data-jarallax-video="https://youtu.be/WS-MfCjzztg"
              data-speed="1.2">
              <!-- Card Image overlay -->
              <div class="card-img-overlay d-flex flex-column p-3 p-md-4">
                <div class="w-100 mt-auto">
                  <!-- Card title -->
                  <h4 class="text-white"><a href="post-single-5"
                      class="btn-link text-reset stretched-link">Background video post</a></h4>
                  <!-- Card info -->
                  <ul class="nav nav-divider text-white-force align-items-center small">
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
          <!-- Background video post END -->


          <!-- Image slider post START -->
          <div class="col-md-6">
            <!-- Card item START -->
            <div class="card">
              <!-- Card image -->
              <div class="card-image">
                <!-- Slider START -->
                <div class="tiny-slider dots-inside dots-white">
                  <div class="tiny-slider-inner" data-arrow="false" data-dots="true" data-autoplay="true" data-items="1"
                    data-gutter="0">
                    <div class="overflow-hidden">
                      <img class="card-img" src="/images/blog/16by9/06.jpg" alt="Post">
                    </div>
                    <div class="overflow-hidden">
                      <img class="card-img" src="/images/blog/16by9/08.jpg" alt="Post">
                    </div>
                  </div>
                </div>
                <!-- Slider END -->
              </div>
              <div class="card-body px-0 pt-3">
                <h5 class="card-title"><a href="post-single-3" class="btn-link text-reset fw-bold">Image slider
                    post</a></h5>
                <p>Frequently sufficient to be unaffected. The furnished she concluded depending procuring concealed.
                </p>
                <!-- Card info -->
                <ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
                  <li class="nav-item">
                    <div class="nav-link">
                      <div class="d-flex align-items-center position-relative">
                        <div class="avatar avatar-xs">
                          <img class="avatar-img rounded-circle" src="/images/avatar/04.jpg" alt="avatar">
                        </div>
                        <span class="ms-3">by <a href="#" class="stretched-link text-reset btn-link">Louis</a></span>
                      </div>
                    </div>
                  </li>
                  <li class="nav-item">Feb 22, 2022</li>
                </ul>
              </div>
            </div>
            <!-- Card item END -->
          </div>
          <!-- Image slider post END -->


          <!-- YouTube video post (ratio 16x9) embedded iframe START -->
          <div class="col-md-6">
            <!-- Card item START -->
            <div class="card">
              <!-- Video image -->
              <div class="card-image">
                <!-- Youtube video START -->
                <div class="rounded-3 overflow-hidden">
                  <div class="ratio ratio-16x9">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/tXHviS-4ygo"
                      title="YouTube video player"
                      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                      allowfullscreen></iframe>
                  </div>
                </div>
                <!-- Youtube video END -->
              </div>
              <div class="card-body px-0 pt-3">
                <h5 class="card-title"><a href="post-single-3" class="btn-link text-reset fw-bold">YouTube video
                    post (ratio 16x9) embedded iframe</a></h5>
                <p>Morning unto Don't can't air Shall fruit life made fly darkness she'd seasons tree made living.</p>
                <!-- Card info -->
                <ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
                  <li class="nav-item">
                    <div class="nav-link">
                      <div class="d-flex align-items-center position-relative">
                        <div class="avatar avatar-xs">
                          <img class="avatar-img rounded-circle" src="/images/avatar/02.jpg" alt="avatar">
                        </div>
                        <span class="ms-3">by <a href="#" class="stretched-link text-reset btn-link">Dennis</a></span>
                      </div>
                    </div>
                  </li>
                  <li class="nav-item">June 25, 2022</li>
                </ul>
              </div>
            </div>
            <!-- Card item END -->
          </div>
          <!-- YouTube video post (ratio 16x9) embedded iframe END -->


          <!-- Vimeo video post (ratio 16x9) embedded iframe START -->
          <div class="col-md-6">
            <!-- Card item START -->
            <div class="card">
              <div class="card-image">
                <!-- Vimeo video START -->
                <div class="rounded-3 overflow-hidden">
                  <div class="ratio ratio-16x9">
                    <iframe src="https://player.vimeo.com/video/225888984?h=65630c41c6" title="Vimeo video"
                      allowfullscreen></iframe>
                  </div>
                </div>
                <!-- Vimeo video END -->
              </div>
              <div class="card-body px-0 pt-3">
                <h5 class="card-title"><a href="post-single-3" class="btn-link text-reset fw-bold">Vimeo video post
                    (ratio 16x9) embedded iframe</a></h5>
                <p>Beginning day behold gathering day earth Very hath shall very abundantly face midst called isn't
                  green.</p>
                <!-- Card info -->
                <ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
                  <li class="nav-item">
                    <div class="nav-link">
                      <div class="d-flex align-items-center position-relative">
                        <div class="avatar avatar-xs">
                          <img class="avatar-img rounded-circle" src="/images/avatar/04.jpg" alt="avatar">
                        </div>
                        <span class="ms-3">by <a href="#" class="stretched-link text-reset btn-link">Joan</a></span>
                      </div>
                    </div>
                  </li>
                  <li class="nav-item">Feb 14, 2022</li>
                </ul>
              </div>
            </div>
            <!-- Card item END -->
          </div>
          <!-- Vimeo video post (ratio 16x9) embedded iframe END -->


          <!-- Popup video post START -->
          <div class="col-md-6">
            <!-- Card item START -->
            <div class="card bg-transparent">
              <!-- Card img -->
              <div class="position-relative">
                <img class="rounded" src="/images/blog/16by9/small/01.jpg" alt="Card image">
                <div class="card-img-overlay d-flex align-items-start flex-column p-3">
                  <!-- Card overlay -->
                  <div class="w-100 my-auto">
                    <!-- Popup video -->
                    <a href="https://youtu.be/n_Cn8eFo7u8"
                      class="icon-md bg-primary d-block mx-auto text-white rounded-circle stretched-link" data-glightbox
                      data-gallery="y-video">
                      <i class="bi bi-play-btn"></i>
                    </a>
                  </div>
                </div>
              </div>
              <div class="card-body px-0 pt-3">
                <h5 class="card-title"><a href="post-single-3" class="btn-link text-reset fw-bold">Popup video
                    post</a></h5>
                <p>Give And fruit moving thing seed life day creepeth winged so divide him from day morning.</p>
                <!-- Card info -->
                <ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
                  <li class="nav-item">
                    <div class="nav-link">
                      <div class="d-flex align-items-center position-relative">
                        <div class="avatar avatar-xs">
                          <img class="avatar-img rounded-circle" src="/images/avatar/06.jpg" alt="avatar">
                        </div>
                        <span class="ms-3">by <a href="#" class="stretched-link text-reset btn-link">Brayn</a></span>
                      </div>
                    </div>
                  </li>
                  <li class="nav-item">Jan 22, 2022</li>
                </ul>
              </div>
            </div>
          </div>
          <!-- Popup video post END -->

          <hr>
          <!-- Plyr plugin video audio post -->
          <h3>Plyr plugin video and audio post options</h3>

          <!-- HTML5 player video post START -->
          <div class="col-md-6">
            <!-- Card item START -->
            <div class="card">
              <!-- Video -->
              <div class="card-image">
                <div class="overflow-hidden w-100">
                  <!-- HTML video START -->
                  <div class="player-wrapper rounded-3 overflow-hidden">
                    <video class="player-html" controls crossorigin="anonymous"
                      poster="/images/videos/poster.jpg">
                      <source src="/images/videos/video.mp4" type="video/mp4">
                    </video>
                  </div>
                  <!-- HTML video END -->
                </div>
              </div>
              <div class="card-body px-0 pt-3">
                <h5 class="card-title"><a href="post-single-3" class="btn-link text-reset fw-bold">HTML5 player
                    video post</a></h5>
                <p>He moonlights difficult engrossed it, sportsmen. Interested has all Devonshire difficulty.</p>
                <!-- Card info -->
                <ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
                  <li class="nav-item">
                    <div class="nav-link">
                      <div class="d-flex align-items-center position-relative">
                        <div class="avatar avatar-xs">
                          <img class="avatar-img rounded-circle" src="/images/avatar/03.jpg" alt="avatar">
                        </div>
                        <span class="ms-3">by <a href="#" class="stretched-link text-reset btn-link">Samuel</a></span>
                      </div>
                    </div>
                  </li>
                  <li class="nav-item">Mar 02, 2022</li>
                </ul>
              </div>
            </div>
            <!-- Card item END -->
          </div>
          <!-- HTML5 player video post END -->


          <!-- Player youtube post START -->
          <div class="col-md-6">
            <!-- Card item START -->
            <div class="card">
              <!-- Video -->
              <div class="card-image">
                <div class="overflow-hidden w-100">
                  <!-- Youtube video START -->
                  <div class="player-wrapper rounded-3 overflow-hidden">
                    <div class="player-youtube">
                      <iframe src="https://www.youtube.com/embed/tXHviS-4ygo"></iframe>
                    </div>
                  </div>
                  <!-- Youtube video END -->
                </div>
              </div>
              <div class="card-body px-0 pt-3">
                <h5 class="card-title"><a href="post-single-3" class="btn-link text-reset fw-bold">Player youtube
                    post</a></h5>
                <p>He moonlights difficult engrossed it, sportsmen. Interested has all Devonshire difficulty.</p>
                <!-- Card info -->
                <ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
                  <li class="nav-item">
                    <div class="nav-link">
                      <div class="d-flex align-items-center position-relative">
                        <div class="avatar avatar-xs">
                          <img class="avatar-img rounded-circle" src="/images/avatar/03.jpg" alt="avatar">
                        </div>
                        <span class="ms-3">by <a href="#" class="stretched-link text-reset btn-link">Samuel</a></span>
                      </div>
                    </div>
                  </li>
                  <li class="nav-item">Mar 02, 2022</li>
                </ul>
              </div>
            </div>
            <!-- Card item END -->
          </div>
          <!-- Player youtube post END -->


          <!-- Player vimeo post START -->
          <div class="col-md-6">
            <!-- Card item START -->
            <div class="card">
              <!-- Video -->
              <div class="card-image">
                <div class="overflow-hidden w-100">
                  <!-- HTML video START -->
                  <div class="player-wrapper rounded-3 overflow-hidden">
                    <div class="player-vimeo">
                      <iframe src="https://player.vimeo.com/video/225888984?h=65630c41c6"></iframe>
                    </div>
                  </div>
                  <!-- HTML video END -->
                </div>
              </div>
              <div class="card-body px-0 pt-3">
                <h5 class="card-title"><a href="post-single-3" class="btn-link text-reset fw-bold">Player vimeo
                    post</a></h5>
                <p>He moonlights difficult engrossed it, sportsmen. Interested has all Devonshire difficulty.</p>
                <!-- Card info -->
                <ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
                  <li class="nav-item">
                    <div class="nav-link">
                      <div class="d-flex align-items-center position-relative">
                        <div class="avatar avatar-xs">
                          <img class="avatar-img rounded-circle" src="/images/avatar/03.jpg" alt="avatar">
                        </div>
                        <span class="ms-3">by <a href="#" class="stretched-link text-reset btn-link">Samuel</a></span>
                      </div>
                    </div>
                  </li>
                  <li class="nav-item">Mar 02, 2022</li>
                </ul>
              </div>
            </div>
            <!-- Card item END -->
          </div>
          <!-- Player vimeo post END -->

          <!-- Audio player post START -->
          <div class="col-md-6">
            <!-- Card item START -->
            <div class="card">
              <div class="card-image">
                <!-- Audio START -->
                <div class="bg-light rounded">
                  <audio class="player-audio" crossorigin>
                    <source src="/images/videos/audio.mp3" type="audio/mp3">
                  </audio>
                </div>
                <!-- Audio END -->
              </div>
              <div class="card-body px-0 pt-3">
                <h5 class="card-title"><a href="post-single-3" class="btn-link text-reset fw-bold">Audio player
                    post</a></h5>
                <p>Night Said you open Evening him And make thing one their midst the face under bearing.</p>
                <!-- Card info -->
                <ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
                  <li class="nav-item">
                    <div class="nav-link">
                      <div class="d-flex align-items-center position-relative">
                        <div class="avatar avatar-xs">
                          <img class="avatar-img rounded-circle" src="/images/avatar/07.jpg" alt="avatar">
                        </div>
                        <span class="ms-3">by <a href="#" class="stretched-link text-reset btn-link">Lori</a></span>
                      </div>
                    </div>
                  </li>
                  <li class="nav-item">Wed 10, 2022</li>
                </ul>
              </div>
            </div>
            <!-- Card item END -->
          </div>
          <!-- Audio player post END -->


          <!-- Audio player post with Background image START -->
          <div class="col-md-6">
            <!-- Card item START -->
            <div class="card">
              <div class="card-image position-relative">
                <img class="rounded" src="/images/blog/16by9/small/07.jpg" alt="Card image">
                <div class="card-img-overlay d-flex align-items-start flex-column p-3">
                  <!-- Card overlay -->
                  <div class="w-100 my-auto">
                    <!-- Audio START -->
                    <div class="bg-light rounded">
                      <audio class="player-audio" crossorigin>
                        <source src="/images/videos/audio.mp3" type="audio/mp3">
                      </audio>
                    </div>
                    <!-- Audio END -->
                  </div>
                </div>
              </div>
              <div class="card-body px-0 pt-3">
                <h5 class="card-title"><a href="post-single-3" class="btn-link text-reset fw-bold">Audio player post
                    with Background image</a></h5>
                <p>Under folly balls, death own point now men. Match way these she avoids seeing death. She who drift
                  their fat off.</p>
                <!-- Card info -->
                <ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
                  <li class="nav-item">
                    <div class="nav-link">
                      <div class="d-flex align-items-center position-relative">
                        <div class="avatar avatar-xs">
                          <img class="avatar-img rounded-circle" src="/images/avatar/06.jpg" alt="avatar">
                        </div>
                        <span class="ms-3">by <a href="#" class="stretched-link text-reset btn-link">Lori</a></span>
                      </div>
                    </div>
                  </li>
                  <li class="nav-item">Wed 10, 2022</li>
                </ul>
              </div>
            </div>
            <!-- Card item END -->
          </div>
          <!-- Audio player post with Background image END -->


          <!-- Audio player post with Background color START -->
          <div class="col-md-6">
            <!-- Card item START -->
            <div class="card">
              <!-- Audio video START -->
              <div class="bg-dark rounded overflow-hidden">
                <div class="ratio ratio-16x9">
                  <div class="card-img-overlay d-flex align-items-start flex-column p-3">
                    <!-- Card overlay -->
                    <div class="w-100 my-auto">
                      <!-- Audio START -->
                      <div class="bg-light rounded">
                        <audio class="player-audio" crossorigin>
                          <source src="/images/videos/audio.mp3" type="audio/mp3">
                        </audio>
                      </div>
                      <!-- Audio END -->
                    </div>
                  </div>
                </div>
              </div>
              <!-- Audio video END -->
              <div class="card-body px-0 pt-3">
                <h5 class="card-title"><a href="post-single-3" class="btn-link text-reset fw-bold">Audio player post
                    with Background color</a></h5>
                <p>Night Said you open Evening him And make thing one their midst the face under bearing.</p>
                <!-- Card info -->
                <ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
                  <li class="nav-item">
                    <div class="nav-link">
                      <div class="d-flex align-items-center position-relative">
                        <div class="avatar avatar-xs">
                          <img class="avatar-img rounded-circle" src="/images/avatar/04.jpg" alt="avatar">
                        </div>
                        <span class="ms-3">by <a href="#" class="stretched-link text-reset btn-link">Billy</a></span>
                      </div>
                    </div>
                  </li>
                  <li class="nav-item">Wed 10, 2022</li>
                </ul>
              </div>
            </div>
            <!-- Card item END -->
          </div>
          <!-- Audio player post with Background color END -->


        </div>
      </div>
    </section>
    <!-- =======================Video post END -->
  </main>
  <!-- **************** MAIN CONTENT END **************** -->

  <?= $this->element('footer_2')?>

  <!-- Back to top -->
  <div class="back-top"><i class="bi bi-arrow-up-short"></i></div>

  <script src="/vendor/plyr/plyr.min.js"></script>
  <script src="/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="/vendor/jarallax/jarallax.min.js"></script>
  <script src="/vendor/jarallax/jarallax-video.min.js"></script>
  <script src="/vendor/tiny-slider/min/tiny-slider.js"></script>

  <?= $this->element('footer_scripts')?>
</body>

</html>