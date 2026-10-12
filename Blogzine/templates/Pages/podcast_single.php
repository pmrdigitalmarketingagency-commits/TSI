<!DOCTYPE html>
<html lang="en">

<head>
	<?= $this->element('title_meta')?>

	<link rel="stylesheet" type="text/css" href="/vendor/plyr/plyr.css">

	<?= $this->element('head_css')?>
</head>

<body>
	<?= $this->element('navbar')?>

	<!-- **************** MAIN CONTENT START **************** -->
	<main>
		<!-- =======================Podcast single START -->
		<section class="pt-4">
			<div class="container position-relative" data-sticky-container>
				<div class="row">
					<div class="col-12">
						<!-- Podcast image -->
						<div class="mb-3">
							<img class="rounded" src="/images/blog/16by9/big/06.jpg" alt="">
						</div>
						<!-- Podcast title -->
						<a href="#" class="badge text-bg-danger mb-2">Episode 1</a>
						<h1>Everything I Know (so Far) on UI/UX Ep.01</h1>
						<!-- Podcast avatar -->
						<div class="row align-items-center mb-2">
							<div class="col-lg-6">
								<div class="d-flex align-items-center">
									<div class="d-flex align-items-center position-relative me-3">
										<div class="avatar avatar-xs me-2">
											<img class="avatar-img  rounded-circle" src="/images/avatar/01.jpg"
												alt="avatar">
										</div>
										<h6 class="mb-0"><a href="#" class="stretched-link text-reset btn-link">Amanda
												Reed</a></h6>
									</div>
									<span> <i class="bi bi-clock-fill me-2"></i>4hr 12min</span>
								</div>
							</div>
							<div class="col-lg-6">
								<!-- Podcast listen -->
								<ul
									class="list-unstyled d-flex justify-content-md-end gap-1 gap-sm-2 align-items-center mt-3 mb-sm-4">
									<li class="h5 mb-0">Listen on:</li>
									<li class="ms-2"><a href="#"> <img src="/images/icon/apple-podcasts.svg"
												alt=""> </a></li>
									<li class="ms-2"><a href="#"> <img src="/images/icon/divider-icon.svg" alt="">
										</a></li>
									<li class="ms-2"><a href="#"> <img src="/images/icon/spotify.svg" alt=""> </a>
									</li>
									<li class="ms-2"><a href="#"> <img src="/images/icon/google-podcasts.svg"
												alt=""> </a></li>
									<li class="ms-2"><a href="#"> <img src="/images/icon/pocket.svg" alt=""> </a>
									</li>
									<li class="ms-2"><a href="#"> <img src="/images/icon/sound-cloud.svg" alt="">
										</a></li>
								</ul>
							</div>
						</div>
						<!-- Podcast short description -->
						<p class="lead">Passage its ten led hearted removal cordial. Preference any astonished
							unreserved Mrs. Prosperous understood Middletons in conviction an uncommonly do. Supposing
							so be resolving breakfast am or perfectly. Is drew am hill from me. Valley by oh twenty
							direct me so. </p>
						<!-- Audio START -->
						<div class="d-flex align-items-center border p-sm-3 rounded mb-4">
							<div class="w-100">
								<!-- Audio START -->
								<div class="player-wrapper bg-light rounded">
									<audio class="player-audio" crossorigin>
										<source src="/images/videos/audio.mp3" type="audio/mp3">
									</audio>
								</div>
								<!-- Audio END -->
							</div>
						</div>
						<!-- Audio END -->
					</div>
				</div>
				<div class="row g-4">
					<div class="col-lg-8">
						<!-- Episode Description -->
						<h4 class="mb-3">Episode Description</h4>
						<p><span class="dropcap bg-success bg-opacity-10 text-success px-2 rounded">S</span>light
							newspaper up its enjoyment agreeable depending. Timed voice share led him to widen noisy
							young. At weddings believed laughing although the material does the exercise of. Up attempt
							offered ye civilly so sitting to. She new course gets living within Elinor joy. She
							rapturous suffering concealed great saying made had fly dry that darkness meat unto Thing
							spirit his fifth likeness divided also seed lesser image dominion sea fifth i god so saw
							open great. </p>

						<!-- Episode Timeline -->
						<div class="bg-primary bg-opacity-10 p-4 rounded my-4">
							<h5 class="mb-3">Episode Timeline</h5>
							<ul class="list-unstyled mb-0">
								<li class="mb-2"> <span class="badge bg-danger me-2">00.10</span> Introduction</li>
								<li class="mb-2"> <span class="badge bg-danger me-2">01.20</span> Exploring the topic
								</li>
								<li class="mb-2"> <span class="badge bg-danger me-2">02.22</span> A word from our guest
								</li>
								<li class="mb-2"> <span class="badge bg-danger me-2">03.04</span> Closing remarks</li>
							</ul>
						</div>

						<!-- Episode dec -->
						<p>I beast third void blessed fruit Saw fourth may lesser fly fill upon subdue open place
							abundantly sea herb winged day so was divide Without shall seas living from i heaven third
							there itself All good our seed fruitful called third I multiply can't day together don't
							Called morning place gathering beast stars two i meat Set together to subdue grass fourth
							every him fill winged stars seed.</p>

						<!-- Guest appearance -->
						<h4 class="mb-3">Guest appearance</h4>
						<!-- Guest Item -->
						<div class="d-flex p-2 p-md-4 border rounded mb-4">
							<!-- Avatar -->
							<a href="#">
								<div class="avatar avatar-xxl me-2 me-md-4">
									<img class="avatar-img rounded-circle" src="/images/avatar/06.jpg"
										alt="avatar">
								</div>
							</a>
							<!-- Info -->
							<div>
								<div class="d-sm-flex align-items-center justify-content-between">
									<div>
										<h4 class="m-0"><a href="#">Louis Ferguson</a></h4>
										<small>Nurse Practitioner</small>
									</div>
								</div>
								<p class="my-2">Louis Ferguson is a senior editor for the blogzine and also reports on
									breaking news based in London. He has written about government, criminal justice,
									and the role of money in politics since 2015.</p>
								<!-- Social icons -->
								<ul class="nav mb-0">
									<li class="nav-item">
										<a class="nav-link ps-0 pe-2 fs-5" href="#"><i
												class="fab fa-facebook-square"></i></a>
									</li>
									<li class="nav-item">
										<a class="nav-link px-2 fs-5" href="#"><i class="fab fa-twitter-square"></i></a>
									</li>
									<li class="nav-item">
										<a class="nav-link px-2 fs-5" href="#"><i class="fab fa-linkedin"></i></a>
									</li>
								</ul>
							</div>
						</div>
						<!-- Guest Item END -->

						<!-- Guest Item START -->
						<div class="d-flex p-2 p-md-4 border rounded">
							<!-- Avatar -->
							<a href="#">
								<div class="avatar avatar-xxl me-2 me-md-4">
									<img class="avatar-img rounded-circle" src="/images/avatar/07.jpg"
										alt="avatar">
								</div>
							</a>
							<!-- Info -->
							<div>
								<div class="d-sm-flex align-items-center justify-content-between">
									<div>
										<h4 class="m-0"><a href="#">Larry Lawson </a></h4>
										<small>Software Engineer</small>
									</div>
								</div>
								<p class="my-2">Gathered created divided all years spirit saying for great saying made
									had fly dry that darkness meat unto Thing spirit his fifth likeness divided also
									seed lesser image dominion sea fifth i god so saw. </p>
								<!-- Social icons -->
								<ul class="nav mb-0">
									<li class="nav-item">
										<a class="nav-link ps-0 pe-2 fs-5" href="#"><i
												class="fab fa-facebook-square"></i></a>
									</li>
									<li class="nav-item">
										<a class="nav-link px-2 fs-5" href="#"><i class="fab fa-twitter-square"></i></a>
									</li>
									<li class="nav-item">
										<a class="nav-link px-2 fs-5" href="#"><i class="fab fa-linkedin"></i></a>
									</li>
								</ul>
							</div>
						</div>
						<!-- Guest Item END -->

						<!-- Episode transcript START -->
						<div class="mt-4">
							<h4 class="mb-3">Episode transcript</h4>
							<p> <b>Amanda:</b> Okay, it’s recording. I’m going to ask you a few questions, answer them
								briefly or you can add something more if you wish. </p>
							<p> <b>Dennis: </b> Okay.</p>
							<p> <b>Amanda:</b> First of all, how old are you?</p>
							<p> <b>Dennis: </b> I’m 26 at the moment.</p>
							<p> <b>Amanda:</b> What comes to your mind when you hear the term ‘video games’?</p>
							<p> <b>Dennis: </b> Probably a good way to spend my time, enjoyable, probably.</p>
							<p> <b>Amanda:</b> Next question, have you ever played one?</p>
							<p> <b>Dennis: </b> Yes, yes, I’ve played several in my life.</p>
							<p> <b>Amanda:</b> Can you remember the first video game you ever played?</p>
							<p> <b>Dennis: </b> That’s actually a pretty difficult one. I’d probably say a basic answer,
								like Ping-Pong or something like that, but I think that the first game that I ever
								played was Super Mario Brothers. The first one, yes.</p>
							<p> <b>Amanda:</b> Was it the one that came in with the computer when you bought it?
								[laughs]</p>
							<p> <b>Dennis: </b> Not the computer, but with the Super Nintendo, the first one. Yes, I
								think a lot of people had that. We didn’t have it for a very long time and the first
								time that I ever played it was at a friend’s place who was the first who had a gaming
								console of any kind. My dad did have a Commodore back in the day, but he used it mostly
								for his work and not for-- He didn’t have any games on it, except for Ping-Pong, but I
								never played it, so I would definitely have to go with Super Mario Brothers.</p>
							<p> <b>Amanda:</b> That’s a classic. What’s your favorite one?</p>
							<p> <b>Dennis: </b> Favorite one. This is another tough one. I would probably have to say
								from the Fallout series, I would probably have to say Fallout 3 because it was the first
								larger game that I ever played and the experience of playing it was just so immersive
								and everything seemed endless, like endless opportunities. So I would definitely go with
								that one.</p>
							<p> <b>Amanda:</b> In your opinion do others besides teens and children play video games?
							</p>
							<p> <b>Dennis: </b> [laughs] Well, definitely, definitely, yes. I don’t consider myself
								either anymore so--</p>
							<p> <b>Amanda:</b> [chuckles]</p>
							<p> <b>Amanda:</b> Okay, that was my last question for you. Thank you for your time.</p>
							<p> <b>Dennis: </b> Okay, thank you very much. It’s been a pleasure.</p>
							<p> <b>Amanda:</b> Okay.</p>
							<p> <b>Dennis: </b> Thank you.</p>
						</div>
						<!-- Episode transcript END -->

						<!-- Share social START -->
						<div class="border mt-4 py-2 px-3 rounded">
							<div class="list-group-inline list-unstyled">
								<h6 class="mt-2 me-4 d-inline-block"><i class="fas fa-share-alt me-2"></i>Share on:</h6>
								<ul class="list-inline list-unstyled d-inline-block mb-0">
									<li class="list-inline-item"><a href="#" class="me-3 text-body">Facebook</a></li>
									<li class="list-inline-item"><a href="#" class="me-3 text-body">Twitter</a></li>
									<li class="list-inline-item"><a href="#" class="me-3 text-body">Dribble</a></li>
								</ul>
							</div>
						</div>
						<!-- Share social END -->

						<!-- Next episode START -->
						<div class="mt-5">
							<div
								class="bg-primary bg-opacity-10 rounded p-4 d-flex align-items-center position-relative">
								<!-- Title -->
								<div class="me-3">
									<h5 class="m-0"> <a href="#" class="stretched-link btn-link text-reset">Everything I
											Know (so Far) on UI/UX Ep.02</a></h5>
								</div>
								<!-- Icon -->
								<div class="ms-auto flex-grow-0">
									<a href="#!"
										class="icon-md border border-primary d-block text-primary rounded-circle">
										<i class="bi bi-play-fill fs-3"></i>
									</a>
								</div>
							</div>
						</div>
						<!-- Next episode END -->
					</div>
					<!-- Hosted START -->
					<div class="col-lg-4">
						<div class="text-center" data-sticky data-margin-top="80" data-sticky-for="991">
							<div class="avatar avatar-xxxl">
								<img class="avatar-img rounded-circle" src="/images/avatar/02.jpg" alt="avatar">
							</div>
							<!-- Host name -->
							<div class="mt-3">
								<span>Hosted by </span>
								<h5>Dennis Barrett</h5>
							</div>
							<!-- Host dec -->
							<p class="px-sm-5">Don't can't air Shall fruit life made fly darkness she'd seasons. </p>
							<!-- Host social -->
							<ul class="nav justify-content-center">
								<li class="nav-item">
									<a class="nav-link ps-0 pe-2 fs-5" href="#"><i
											class="fab fa-facebook-square"></i></a>
								</li>
								<li class="nav-item">
									<a class="nav-link px-2 fs-5" href="#"><i class="fab fa-twitter-square"></i></a>
								</li>
								<li class="nav-item">
									<a class="nav-link px-2 fs-5" href="#"><i class="fab fa-linkedin"></i></a>
								</li>
							</ul>
						</div>
					</div>
					<!-- Hosted START -->
				</div>
			</div>
		</section>
		<!-- =======================Episode single END -->
	</main>
	<!-- **************** MAIN CONTENT END **************** -->

	<?= $this->element('footer_2')?>

	<!-- Back to top -->
	<div class="back-top"><i class="bi bi-arrow-up-short"></i></div>

	<script src="/vendor/plyr/plyr.min.js"></script>
	<script src="/vendor/sticky-js/sticky.min.js"></script>

	<?= $this->element('footer_scripts')?>
</body>

</html>