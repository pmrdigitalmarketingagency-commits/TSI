<!DOCTYPE html>
<html lang="en">

<head>
	<?= $this->element('title_meta')?>

	<link rel="stylesheet" type="text/css" href="/vendor/tiny-slider/tiny-slider.css">
	<link rel="stylesheet" type="text/css" href="/vendor/glightbox/css/glightbox.min.css">

	<?= $this->element('head_css')?>
</head>

<body>
	<?= $this->element('navbar')?>

	<!-- **************** MAIN CONTENT START **************** -->
	<main>
		<!-- =======================Main hero START -->
		<section>
			<div class="container">
				<div class="row g-4 align-items-center justify-content-between pb-lg-5">
					<div class="col-lg-6 mt-0 position-relative">
						<!-- Hero image -->
						<img class="rounded" src="/images/blog/1by1/12.jpg" alt="">
						<!-- Hero info -->
						<div class="mt-lg-n5 d-none d-sm-block">
							<div class="col-4 position-absolute bottom-0 end-0 me-4 mb-3 mb-lg-0 me-lg-n5">
								<div class="bg-body rounded shadow text-center px-3 py-4">
									<i class="bi bi-mic fs-1 h6"></i>
									<p class="mb-0">We air new episodes every Monday</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-5">
						<!-- Hero title -->
						<p><span class="badge bg-primary me-1">NEW</span> All new season with entrepreneurs!</p>
						<h1 class="display-3">The Podcast With Bryan Knight</h1>
						<p>Interviews with top thinkers, founders, and artists since 2012. 10M+ downloads.</p>
						<!-- Listen on -->
						<ul class="list-unstyled d-flex gap-1 gap-sm-2 align-items-center mt-4">
							<li class="h5 mb-0">Listen on:</li>
							<li class="ms-2"><a href="#"> <img src="/images/icon/apple-podcasts.svg" alt=""> </a>
							</li>
							<li class="ms-2"><a href="#"> <img src="/images/icon/divider-icon.svg" alt=""> </a>
							</li>
							<li class="ms-2"><a href="#"> <img src="/images/icon/spotify.svg" alt=""> </a></li>
							<li class="ms-2"><a href="#"> <img src="/images/icon/google-podcasts.svg" alt=""> </a>
							</li>
							<li class="ms-2"><a href="#"> <img src="/images/icon/pocket.svg" alt=""> </a></li>
							<li class="ms-2"><a href="#"> <img src="/images/icon/sound-cloud.svg" alt=""> </a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<!-- =======================Main hero END -->

		<!-- =======================Recent Episodes START -->
		<section class="pt-0 pt-lg-5">
			<div class="container">
				<div class="row">
					<div class="col-lg-8">
						<!-- Title -->
						<h2 class="mb-4">Recent Episodes</h2>
						<!-- Episodes Item START -->
						<div class="card border rounded-3 p-3 mb-4">
							<div class="row g-4">
								<!-- Image -->
								<div class="col-md-5">
									<div class="position-relative">
										<img class="rounded-3" src="/images/blog/4by3/31.jpg" alt="Card image">
									</div>
								</div>
								<div class="col-md-7">
									<div class="d-flex justify-content-between mb-2">
										<!-- Episode -->
										<a href="podcast-single" class="badge text-bg-danger mb-2">Episode 1</a>
										<span> <i class="bi bi-clock-fill"></i> 4hr 12min</span>
									</div>
									<!-- Title -->
									<h4 class="card-title">
										<a href="podcast-single" class="btn-link text-reset">Everything I Know (so
											Far) on UI/UX Ep.01</a>
									</h4>
									<!-- Author info -->
									<div class="d-flex align-items-center position-relative">
										<div class="avatar avatar-xs me-2">
											<img class="avatar-img  rounded-circle" src="/images/avatar/01.jpg"
												alt="avatar">
										</div>
										<h6 class="mb-0"><a href="#" class="stretched-link text-reset btn-link">Billy
												Vasquez</a></h6>
									</div>
									<!-- Play Episode -->
									<div class="d-xl-flex align-items-center justify-content-between mt-4">
										<a class="btn btn-sm btn-primary" href="podcast-single">Play Episode</a>
										<ul class="list-unstyled d-flex gap-2 align-items-center">
											<li class="h6 mb-0">Listen on:</li>
											<li><a href="#"> <img class="h-20"
														src="/images/icon/apple-podcasts.svg" alt=""> </a></li>
											<li><a href="#"> <img class="h-20" src="/images/icon/divider-icon.svg"
														alt=""> </a></li>
											<li><a href="#"> <img class="h-20" src="/images/icon/spotify.svg"
														alt=""> </a></li>
											<li><a href="#"> <img class="h-20" src="/images/icon/pocket.svg"
														alt=""> </a></li>
											<li><a href="#"> <img class="h-20" src="/images/icon/sound-cloud.svg"
														alt=""> </a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<!-- Episodes Item END -->

						<!-- Episodes Item START -->
						<div class="card border rounded-3 p-3 mb-4">
							<div class="row g-4">
								<!-- Image -->
								<div class="col-md-5">
									<div class="position-relative">
										<img class="rounded-3" src="/images/blog/4by3/32.jpg" alt="Card image">
									</div>
								</div>
								<div class="col-md-7">
									<div class="d-flex justify-content-between mb-2">
										<!-- Episode -->
										<a href="podcast-single" class="badge text-bg-danger mb-2">Episode 2</a>
										<span> <i class="bi bi-clock-fill"></i> 5hr 05min</span>
									</div>
									<!-- Title -->
									<h4 class="card-title">
										<a href="podcast-single" class="btn-link text-reset">Design Problems
											Animation Can Answer Ep.02</a>
									</h4>
									<!-- Author info -->
									<div class="d-flex align-items-center position-relative">
										<div class="avatar avatar-xs me-2">
											<img class="avatar-img  rounded-circle" src="/images/avatar/02.jpg"
												alt="avatar">
										</div>
										<h6 class="mb-0"><a href="#" class="stretched-link text-reset btn-link">Bryan
												Knight</a></h6>
									</div>
									<!-- Play Episode -->
									<div class="d-xl-flex align-items-center justify-content-between mt-4">
										<a class="btn btn-sm btn-primary" href="podcast-single">Play Episode</a>
										<ul class="list-unstyled d-flex gap-2 align-items-center">
											<li class="h6 mb-0">Listen on:</li>
											<li><a href="#"> <img class="h-20"
														src="/images/icon/apple-podcasts.svg" alt=""> </a></li>
											<li><a href="#"> <img class="h-20" src="/images/icon/spotify.svg"
														alt=""> </a></li>
											<li><a href="#"> <img class="h-20" src="/images/icon/sound-cloud.svg"
														alt=""> </a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<!-- Episodes Item END -->

						<!-- Episodes Item START -->
						<div class="card border rounded-3 p-3 mb-4">
							<div class="row g-4">
								<!-- Image -->
								<div class="col-md-5">
									<div class="position-relative">
										<img class="rounded-3" src="/images/blog/4by3/33.jpg" alt="Card image">
									</div>
								</div>
								<div class="col-md-7">
									<div class="d-flex justify-content-between mb-2">
										<!-- Episode -->
										<a href="podcast-single" class="badge text-bg-danger mb-2">Episode 3</a>
										<span> <i class="bi bi-clock-fill"></i> 2hr 22min</span>
									</div>
									<!-- Title -->
									<h4 class="card-title">
										<a href="podcast-single" class="btn-link text-reset">Your Only Challenge Is
											to Focus Ep.03</a>
									</h4>
									<!-- Author info -->
									<div class="d-flex align-items-center position-relative">
										<div class="avatar avatar-xs me-2">
											<img class="avatar-img  rounded-circle" src="/images/avatar/03.jpg"
												alt="avatar">
										</div>
										<h6 class="mb-0"><a href="#" class="stretched-link text-reset btn-link">Amanda
												Reed</a></h6>
									</div>
									<!-- Play Episode -->
									<div class="d-xl-flex align-items-center justify-content-between mt-4">
										<a class="btn btn-sm btn-primary" href="podcast-single">Play Episode</a>
										<ul class="list-unstyled d-flex gap-2 align-items-center">
											<li class="h6 mb-0">Listen on:</li>
											<li><a href="#"> <img class="h-20"
														src="/images/icon/apple-podcasts.svg" alt=""> </a></li>
											<li><a href="#"> <img class="h-20" src="/images/icon/divider-icon.svg"
														alt=""> </a></li>
											<li><a href="#"> <img class="h-20" src="/images/icon/spotify.svg"
														alt=""> </a></li>
											<li><a href="#"> <img class="h-20"
														src="/images/icon/google-podcasts.svg" alt=""> </a></li>
											<li><a href="#"> <img class="h-20" src="/images/icon/sound-cloud.svg"
														alt=""> </a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Episodes Item END -->

					<!-- Sidebar START -->
					<div class="col-lg-4">
						<!-- Card START -->
						<div class="card card-overlay-bottom h-400"
							style="background-image:url(/images/blog/1by1/11.jpg); background-position: center left; background-size: cover;">
							<!-- Card featured -->
							<span class="card-featured" title="Featured post"><i class="fas fa-star"></i></span>
							<!-- Card Image overlay -->
							<div class="card-img-overlay d-flex flex-column p-3 p-sm-5">
								<!-- Card play button -->
								<div class="position-absolute top-50 start-50 translate-middle pb-5">
									<!-- Popup video -->
									<a href="https://youtu.be/n_Cn8eFo7u8"
										class="icon-lg bg-primary d-block text-white rounded-circle" data-glightbox
										data-gallery="y-video">
										<i class="bi bi-play-btn"></i>
									</a>
								</div>
								<!-- Card overlay Bottom  -->
								<div class="w-100 mt-auto">
									<div class="col text-center">
										<!-- Card title -->
										<h3 class="text-white"><a href="post-single"
												class="btn-link text-reset fw-normal">Never underestimate the influence
												of social media</a></h3>
									</div>
								</div>
							</div>
						</div>
						<!-- Card END -->

						<!-- Trending podcast START -->
						<div class="mt-4">
							<h5 class="mb-3">Trending podcast</h5>
							<!-- Recent post item -->
							<div class="card mb-3">
								<div class="d-flex">
									<div>
										<!-- Popup podcast -->
										<a href="podcast-single"
											class="icon-md border border-primary d-block text-primary rounded-circle">
											<i class="bi bi-play-fill fs-3"></i>
										</a>
									</div>
									<div class="ms-3">
										<!-- Info -->
										<h6><a href="podcast-single"
												class="btn-link stretched-link text-reset fw-bold">The pros and cons of
												business agency</a></h6>
										<div class="small mt-1">May 17, 2022</div>
									</div>
								</div>
							</div>
							<!-- Recent post item -->
							<div class="card mb-3">
								<div class="d-flex">
									<div>
										<!-- Popup podcast -->
										<a href="podcast-single"
											class="icon-md border border-primary d-block text-primary rounded-circle">
											<i class="bi bi-play-fill fs-3"></i>
										</a>
									</div>
									<div class="ms-3">
										<!-- Info -->
										<h6><a href="podcast-single"
												class="btn-link stretched-link text-reset fw-bold">5 reasons why you
												shouldn't startup</a></h6>
										<div class="small mt-1">Apr 04, 2022</div>
									</div>
								</div>
							</div>
							<!-- Recent post item -->
							<div class="card mb-3">
								<div class="d-flex">
									<div>
										<!-- Popup podcast -->
										<a href="podcast-single"
											class="icon-md border border-primary d-block text-primary rounded-circle">
											<i class="bi bi-play-fill fs-3"></i>
										</a>
									</div>
									<div class="ms-3">
										<!-- Info -->
										<h6><a href="podcast-single"
												class="btn-link stretched-link text-reset fw-bold">Ten questions you
												should answer truthfully.</a></h6>
										<div class="small mt-1">Jun 30, 2022</div>
									</div>
								</div>
							</div>
							<!-- Recent post item -->
							<div class="card mb-3">
								<div class="d-flex">
									<div>
										<!-- Popup podcast -->
										<a href="podcast-single"
											class="icon-md border border-primary d-block text-primary rounded-circle">
											<i class="bi bi-play-fill fs-3"></i>
										</a>
									</div>
									<div class="ms-3">
										<!-- Info -->
										<h6><a href="podcast-single"
												class="btn-link stretched-link text-reset fw-bold">Five unbelievable
												facts about money.</a></h6>
										<div class="small mt-1">Nov 29, 2022</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Trending podcast END -->

						<!-- Podcast social START -->
						<div class="row mt-4 mt-lg-0 g-2">
							<!-- Facebook -->
							<div class="col-6 col-sm-3">
								<a href="#" class="bg-facebook rounded text-center text-white-force p-3 d-block">
									<i class="fab fa-facebook-square fs-5 mb-2"></i>
									<h6 class="m-0">1.5K</h6>
									<span class="small">Fans</span>
								</a>
							</div>
							<!-- Instagram -->
							<div class="col-6 col-sm-3">
								<a href="#"
									class="bg-instagram-gradient rounded text-center text-white-force p-3 d-block">
									<i class="fab fa-instagram fs-5 mb-2"></i>
									<h6 class="m-0">1.8M</h6>
									<span class="small">Followers</span>
								</a>
							</div>
							<!-- Youtube -->
							<div class="col-6 col-sm-3">
								<a href="#" class="bg-youtube rounded text-center text-white-force p-3 d-block">
									<i class="fab fa-youtube-square fs-5 mb-2"></i>
									<h6 class="m-0">22K</h6>
									<span class="small">Subs</span>
								</a>
							</div>
							<!-- Twitter -->
							<div class="col-6 col-sm-3">
								<a href="#" class="bg-twitter rounded text-center text-white-force p-3 d-block">
									<i class="fab fa-twitter-square fs-5 mb-2"></i>
									<h6 class="m-0">5K</h6>
									<span class="small">Followers</span>
								</a>
							</div>
						</div>
						<!-- Podcast social END -->
					</div>
					<!-- Sidebar END -->
				</div>
			</div>
		</section>
		<!-- =======================Featured video END -->

		<!-- =======================Featured Guests START -->
		<section class="bg-light">
			<div class="container">
				<div class="row g-0">
					<div class="col-12 ">
						<!-- Title -->
						<div class="mb-4">
							<h2>Featured Guests</h2>
						</div>
						<!-- Slider -->
						<div class="tiny-slider arrow-hover arrow-dark arrow-blur arrow-round">
							<div class="tiny-slider-inner" data-autoplay="false" data-hoverpause="true" data-gutter="24"
								data-arrow="true" data-dots="false" data-items-xl="6" data-items-lg="4"
								data-items-md="3" data-items-sm="2" data-items-xs="2">
								<!-- Guest item -->
								<div>
									<div class="card bg-transparent">
										<img class="card-img" src="/images/avatar/01.jpg" alt="card image">
										<div class="card-body ps-0">
											<h5 class="mb-0">Judy Nguyen</h5>
											<small>Office Assistant</small>
										</div>
									</div>
								</div>
								<!-- Guest item -->
								<div>
									<div class="card bg-transparent">
										<img class="card-img" src="/images/avatar/02.jpg" alt="card image">
										<div class="card-body ps-0">
											<h5 class="mb-0">Bryan Knight</h5>
											<small>Sales Manager</small>
										</div>
									</div>
								</div>
								<!-- Guest item -->
								<div>
									<div class="card bg-transparent">
										<img class="card-img" src="/images/avatar/03.jpg" alt="card image">
										<div class="card-body ps-0">
											<h5 class="mb-0">Amanda Reed</h5>
											<small>Software Engineer</small>
										</div>
									</div>
								</div>
								<!-- Guest item -->
								<div>
									<div class="card bg-transparent">
										<img class="card-img" src="/images/avatar/04.jpg" alt="card image">
										<div class="card-body ps-0">
											<h5 class="mb-0">Larry Lawson</h5>
											<small>Nurse Practitioner</small>
										</div>
									</div>
								</div>
								<!-- Guest item -->
								<div>
									<div class="card bg-transparent">
										<img class="card-img" src="/images/avatar/05.jpg" alt="card image">
										<div class="card-body ps-0">
											<h5 class="mb-0">Lori Stevens</h5>
											<small>Marketing Manager</small>
										</div>
									</div>
								</div>
								<!-- Guest item -->
								<div>
									<div class="card bg-transparent">
										<img class="card-img" src="/images/avatar/06.jpg" alt="card image">
										<div class="card-body ps-0">
											<h5 class="mb-0"> Carolyn Ortiz </h5>
											<small>Executive Assistant</small>
										</div>
									</div>
								</div>
								<!-- Guest item -->
								<div>
									<div class="card bg-transparent">
										<img class="card-img" src="/images/avatar/07.jpg" alt="card image">
										<div class="card-body ps-0">
											<h5 class="mb-0">Billy Vasquez</h5>
											<small>Actor</small>
										</div>
									</div>
								</div>
							</div>
						</div> <!-- Slider END -->
					</div>
				</div>
			</div>
		</section>
		<!-- =======================Featured Guests END -->

		<!-- =======================Featured shows START -->
		<section class="bg-dark">
			<div class="container">
				<div class="row g-4">
					<div class="col-md-12">
						<!-- Title -->
						<div class="d-sm-flex justify-content-between align-items-center">
							<h2 class="m-sm-0 text-white">Featured episodes</h2>
							<a href="#" class="btn btn-sm bg-youtube"><i
									class="bi bi-youtube me-2 align-middle"></i>Subscribe us on YouTube</a>
						</div>
					</div>

					<!-- Card big START -->
					<div class="col-12">
						<div class="card card-overlay-bottom h-400"
							style="background-image:url(/images/blog/16by9/10.jpg); background-position: center left; background-size: cover;">
							<!-- Card Image overlay -->
							<div class="card-img-overlay d-flex flex-column p-3 p-sm-5">
								<!-- Card play button -->
								<div class="position-absolute top-50 start-50 translate-middle pb-5">
									<!-- Popup video -->
									<a href="https://youtu.be/n_Cn8eFo7u8"
										class="icon-lg bg-primary d-block text-white rounded-circle" data-glightbox
										data-gallery="y-video">
										<i class="bi bi-play-btn"></i>
									</a>
								</div>
								<!-- Card overlay Bottom  -->
								<div class="w-100 mt-auto">
									<div class="col text-center">
										<!-- Card category -->
										<a href="#" class="badge text-bg-warning mb-2"><i
												class="fas fa-circle me-2 small fw-bold"></i>Business</a>
										<!-- Card title -->
										<h2 class="text-white"><a href="podcast-single"
												class="btn-link text-reset fw-normal">Never underestimate the influence
												of social media</a></h2>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Card big END -->

					<!-- Card small START -->
					<div class="col-sm-6 col-lg-3">
						<!-- Card item START -->
						<div class="card bg-transparent overflow-hidden">
							<!-- Card img -->
							<div class="position-relative rounded-3 overflow-hidden">
								<img class="card-img" src="/images/blog/16by9/small/05.jpg" alt="Card image">
								<div class="card-img-overlay d-flex align-items-start flex-column p-3">
									<!-- Card overlay -->
									<div class="w-100 my-auto">
										<!-- Popup video -->
										<a href="https://youtu.be/n_Cn8eFo7u8"
											class="icon-md bg-primary d-block mx-auto text-white rounded-circle"
											data-glightbox data-gallery="y-video">
											<i class="bi bi-play-btn"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="card-body px-0 pt-3">
							<h5 class="card-title"><a href="podcast-single" class="btn-link text-white fw-bold">Bad
									habits that people in the industry need to quit</a></h5>
							<!-- Card info -->
							<ul
								class="nav nav-divider align-items-center d-none d-sm-inline-block text-white-force small opacity-6">
								<li class="nav-item">
									<div class="nav-link">
										by <a href="#" class="text-reset btn-link">Bryan</a>
									</div>
								</li>
								<li class="nav-item">Jun 17, 2022</li>
							</ul>
						</div>
						<!-- Card item END -->
					</div>

					<div class="col-sm-6 col-lg-3">
						<!-- Card item START -->
						<div class="card bg-transparent overflow-hidden">
							<!-- Card img -->
							<div class="position-relative rounded-3 overflow-hidden">
								<img class="card-img" src="/images/blog/16by9/small/06.jpg" alt="Card image">
								<div class="card-img-overlay d-flex align-items-start flex-column p-3">
									<!-- Card overlay -->
									<div class="w-100 my-auto">
										<!-- Popup video -->
										<a href="https://youtu.be/n_Cn8eFo7u8"
											class="icon-md bg-primary d-block mx-auto text-white rounded-circle"
											data-glightbox data-gallery="y-video">
											<i class="bi bi-play-btn"></i>
										</a>
									</div>
								</div>
							</div>
							<div class="card-body px-0 pt-3">
								<h5 class="card-title"><a href="podcast-single"
										class="btn-link text-white fw-bold">12 worst types of business accounts you
										follow on Twitter</a></h5>
								<!-- Card info -->
								<ul
									class="nav nav-divider align-items-center d-none d-sm-inline-block text-white-force small opacity-6">
									<li class="nav-item">
										<div class="nav-link">
											by <a href="#" class="text-reset btn-link">Samuel</a>
										</div>
									</li>
									<li class="nav-item">Jan 22, 2022</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- Card item END -->

					<div class="col-sm-6 col-lg-3">
						<!-- Card item START -->
						<div class="card bg-transparent overflow-hidden">
							<!-- Card img -->
							<div class="position-relative rounded-3 overflow-hidden">
								<img class="card-img" src="/images/blog/16by9/small/07.jpg" alt="Card image">
								<div class="card-img-overlay d-flex align-items-start flex-column p-3">
									<!-- Card overlay -->
									<div class="w-100 my-auto">
										<!-- Popup video -->
										<a href="https://youtu.be/n_Cn8eFo7u8"
											class="icon-md bg-primary d-block mx-auto text-white rounded-circle"
											data-glightbox data-gallery="y-video">
											<i class="bi bi-play-btn"></i>
										</a>
									</div>
								</div>
							</div>
							<div class="card-body px-0 pt-3">
								<h5 class="card-title"><a href="podcast-single"
										class="btn-link text-white fw-bold">Best Twitter accounts for learning about
										investment</a></h5>
								<!-- Card info -->
								<ul
									class="nav nav-divider align-items-center d-none d-sm-inline-block text-white-force small opacity-6">
									<li class="nav-item">
										<div class="nav-link">
											by <a href="#" class="text-reset btn-link">Joan</a>
										</div>
									</li>
									<li class="nav-item">Mar 24, 2022</li>
								</ul>
							</div>
						</div>
						<!-- Card item END -->
					</div>

					<div class="col-sm-6 col-lg-3">
						<!-- Card item START -->
						<div class="card bg-transparent overflow-hidden">
							<!-- Card img -->
							<div class="position-relative rounded-3 overflow-hidden">
								<img class="card-img" src="/images/blog/16by9/small/08.jpg" alt="Card image">
								<div class="card-img-overlay d-flex align-items-start flex-column p-3">
									<!-- Card overlay -->
									<div class="w-100 my-auto">
										<!-- Popup video -->
										<a href="https://youtu.be/n_Cn8eFo7u8"
											class="icon-md bg-primary d-block mx-auto text-white rounded-circle"
											data-glightbox data-gallery="y-video">
											<i class="bi bi-play-btn"></i>
										</a>
									</div>
								</div>
							</div>
							<div class="card-body px-0 pt-3">
								<h5 class="card-title"><a href="podcast-single"
										class="btn-link text-white fw-bold">Ten questions you should answer
										truthfully</a></h5>
								<!-- Card info -->
								<ul
									class="nav nav-divider align-items-center d-none d-sm-inline-block text-white-force small opacity-6">
									<li class="nav-item">
										<div class="nav-link">
											by <a href="#" class="text-reset btn-link">Judy</a>
										</div>
									</li>
									<li class="nav-item">Spe 07, 2022</li>
								</ul>
							</div>
						</div>
						<!-- Card item END -->
					</div>
					<!-- Card small START -->
				</div>
			</div>
		</section>
		<!-- =======================Featured shows END -->

		<!-- =======================Ads START -->
		<section>
			<div class="container">
				<div class="row">
					<div class="col-lg-8 mx-auto">
						<a href="#" class="card-img-flash d-block">
							<img src="/images/adv-1.png" alt="adv">
						</a>
						<div class="smaller text-end mt-2">ads via <a href="#" class="text-body"><u>Bootstrap</u></a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- =======================Ads START -->
	</main>
	<!-- **************** MAIN CONTENT END **************** -->

	<?= $this->element('footer_2')?>

	<!-- Back to top -->
	<div class="back-top"><i class="bi bi-arrow-up-short"></i></div>

	<!-- Vendors -->
	<script src="/vendor/tiny-slider/min/tiny-slider.js"></script>
	<script src="/vendor/glightbox/js/glightbox.min.js"></script>

	<?= $this->element('footer_scripts')?>
</body>

</html>