<!DOCTYPE html>
<html lang="en">

<head>
	<?= $this->element('title_meta')?>

	<?= $this->element('head_css')?>
</head>

<body>
	<?= $this->element('navbar')?>

	<!-- **************** MAIN CONTENT START **************** -->
	<main>
		<!-- =======================Inner intro START -->
		<section class="pt-4 pb-3">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb breadcrumb-dots">
								<li class="breadcrumb-item"><a href="index"><i class="bi bi-house me-1"></i>
										Home</a></li>
								<li class="breadcrumb-item active">All post</li>
							</ol>
						</nav>
						<h1>Post grid masonry filter</h1>
					</div>
				</div>
			</div>
		</section>
		<!-- =======================Inner intro END -->

		<!-- =======================Main content START -->
		<section class="position-relative pt-0">
			<div class="container">
				<!-- Nav Filters -->
				<div class="row">
					<div class="col-12">
						<div class="grid-menu" data-target=".filter-container">
							<ul class="nav nav-pills justify-content-start mb-3">
								<li class="nav-item"> <span class="nav-link disabled ps-0">Show me:</span> </li>
								<li class="nav-item"> <a data-filter="*" class="nav-link active">All post</a> </li>
								<li class="nav-item"> <a data-filter=".travel-category" class="nav-link">Travel</a>
								</li>
								<li class="nav-item"> <a data-filter=".covid-category" class="nav-link">Covid-19</a>
								</li>
								<li class="nav-item"> <a data-filter=".photo-category" class="nav-link">Photography</a>
								</li>
								<li class="nav-item"> <a data-filter=".business-category" class="nav-link">Business</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="row filter-container overflow-hidden" data-isotope='{"layoutMode": "masonry"}'>
					<!-- Card item START -->
					<div class="col-sm-6 col-lg-4 grid-item business-category">
						<div class="card mb-4">
							<!-- Card img -->
							<div class="card-fold position-relative">
								<img class="card-img" src="/images/blog/4by3/07.jpg" alt="Card image">
							</div>
							<div class="card-body px-0 pt-3">
								<h4 class="card-title"><a href="#" class="btn-link text-reset fw-bold">7 common mistakes
										everyone makes while traveling</a></h4>
								<p class="card-text">He moonlights difficult engrossed it, sportsmen. Interested has all
									Devonshire difficulty gay assistance joy. Unaffected at ye of compliment alteration
									to. Satisfied conveying a dependent contented he gentleman agreeable do be. Warrant
									private blushes removed an in equally totally if. Delivered dejection necessary
									objection do Mr prevailed. Mr feeling does chiefly cordial in do. </p>
								<!-- Card info -->
								<ul class="nav nav-divider align-items-center text-uppercase small">
									<li class="nav-item">
										<a href="#" class="nav-link text-reset btn-link">Louis Ferguson</a>
									</li>
									<li class="nav-item">Mar 07, 2022</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- Card item END -->
					<!-- Card item START -->
					<div class="col-sm-6 col-lg-4 grid-item travel-category photo-category">
						<div class="card mb-4">
							<!-- Card img -->
							<div class="card-fold position-relative">
								<img class="card-img" src="/images/blog/3by4/06.jpg" alt="Card image">
								<div class="card-img-overlay d-flex align-items-start flex-column p-3">
									<!-- Card overlay Top -->
									<div class="w-100 mb-auto d-flex justify-content-end">
										<div class="text-end ms-auto">
											<!-- Card format icon -->
											<div class="icon-md bg-white bg-opacity-10 bg-blur text-white fw-bold rounded-circle"
												title="8.5 rating">8.5</div>
										</div>
									</div>
								</div>
							</div>
							<div class="card-body px-0 pt-3">
								<h4 class="card-title"><a href="#" class="btn-link text-reset fw-bold">Skills that you
										can learn from business</a></h4>
								<p class="card-text">Place voice no arises along to. Parlors waiting so against me no.
									Wishing calling is warrant settled was lucky. Express besides it present if at an
									opinion visitor.</p>
								<!-- Card info -->
								<ul class="nav nav-divider align-items-center text-uppercase small">
									<li class="nav-item">
										<a href="#" class="nav-link text-reset btn-link">Samuel Bishop</a>
									</li>
									<li class="nav-item">Aug 15, 2022</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- Card item END -->
					<!-- Card item START -->
					<div class="col-sm-6 col-lg-4 grid-item covid-category business-category">
						<div class="card mb-4">
							<!-- Card img -->
							<div class="card-fold position-relative">
								<img class="card-img" src="/images/blog/4by3/09.jpg" alt="Card image">
							</div>
							<div class="card-body px-0 pt-3">
								<h4 class="card-title"><a href="#" class="btn-link text-reset fw-bold">10 tell-tale
										signs you need to get a new business</a></h4>
								<p class="card-text">For who thoroughly her boy estimating conviction. Removed demands
									expense account in outward tedious do. Particular way thoroughly unaffected.
									Interested has all Devonshire difficulty gay assistance joy. Unaffected at ye of
									compliment alteration to.</p>
								<!-- Card info -->
								<ul class="nav nav-divider align-items-center text-uppercase small">
									<li class="nav-item">
										<a href="#" class="nav-link text-reset btn-link">Dennis Barrett</a>
									</li>
									<li class="nav-item">Jun 01, 2022</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- Card item END -->
					<!-- Card item START -->
					<div class="col-sm-6 col-lg-4 grid-item covid-category">
						<div class="card mb-4">
							<!-- Card img -->
							<div class="card-fold position-relative">
								<img class="card-img" src="/images/blog/1by1/03.jpg" alt="Card image">
							</div>
							<div class="card-body px-0 pt-3">
								<h4 class="card-title"><a href="#" class="btn-link text-reset fw-bold">This is why this
										year will be the year of startups</a></h4>
								<p class="card-text">Projection favorable Mrs can be projecting own. Thirty it matter
									enable become admire in giving. See resolved goodness felicity shy civility domestic
									had but.</p>
								<!-- Card info -->
								<ul class="nav nav-divider align-items-center text-uppercase small">
									<li class="nav-item">
										<a href="#" class="nav-link text-reset btn-link">Bryan Knight</a>
									</li>
									<li class="nav-item">Dec 07, 2022</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- Card item END -->
					<!-- Card item START -->
					<div class="col-sm-6 col-lg-4 grid-item photo-category">
						<div class="card mb-4">
							<!-- Card img -->
							<div class="card-fold position-relative">
								<img class="card-img" src="/images/blog/4by3/11.jpg" alt="Card image">
								<div class="card-img-overlay d-flex align-items-start flex-column p-3">
									<!-- Card overlay Top -->
									<div class="w-100 mb-auto d-flex justify-content-end">
										<div class="text-end ms-auto">
											<!-- Card format icon -->
											<div class="icon-md bg-success text-white fw-bold rounded-circle"
												title="This post has video"><i class="fas fa-video"></i></div>
										</div>
									</div>
								</div>
							</div>
							<div class="card-body px-0 pt-3">
								<h4 class="card-title"><a href="#" class="btn-link text-reset fw-bold">Best Pinterest
										Boards for learning about business</a></h4>
								<p class="card-text">Drawings offended yet answered Jennings perceive laughing six did
									far. Rooms oh fully taken by worse do. Points afraid but may end law lasted. </p>
								<!-- Card info -->
								<ul class="nav nav-divider align-items-center text-uppercase small">
									<li class="nav-item">
										<a href="#" class="nav-link text-reset btn-link">Judy Nguyen</a>
									</li>
									<li class="nav-item">Sep 07, 2022</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- Card item END -->
					<!-- Card item START -->
					<div class="col-sm-6 col-lg-4 grid-item travel-category">
						<div class="card mb-4">
							<!-- Card img -->
							<div class="card-fold position-relative">
								<img class="card-img" src="/images/blog/4by3/12.jpg" alt="Card image">
							</div>
							<div class="card-body px-0 pt-3">
								<h4 class="card-title"><a href="#" class="btn-link text-reset fw-bold">How did we get
										here? The real history of our business</a></h4>
								<p class="card-text">Was out laughter raptures returned outweigh. Luckily cheered
									colonel I do we attack highest enabled. Tried law yet style child. The bore of true
									of no be deal.</p>
								<!-- Card info -->
								<ul class="nav nav-divider align-items-center text-uppercase small">
									<li class="nav-item">
										<a href="#" class="nav-link text-reset btn-link">Amanda Reed</a>
									</li>
									<li class="nav-item">Aug 06, 2022</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- Card item END -->
					<!-- Card item START -->
					<div class="col-sm-6 col-lg-4 grid-item business-category">
						<div class="card mb-4">
							<!-- Card img -->
							<div class="card-fold position-relative">
								<img class="card-img" src="/images/blog/4by3/13.jpg" alt="Card image">
							</div>
							<div class="card-body px-0 pt-3">
								<h4 class="card-title"><a href="#" class="btn-link text-reset fw-bold">Facts about
										business that will put you in a good mood</a></h4>
								<p class="card-text">Farther related bed and passage comfort civilly. Dashwoods see
									frankness objection abilities. As hastened oh produced prospect formerly up am.
									Placing forming nay looking old married few has. Margaret disposed of add screened
									rendered six say his striking confined. Was out laughter raptures returned outweigh.
									Luckily cheered colonel I do we attack highest enabled. Tried law yet style child.
									The bore of true of no be deal.</p>
								<!-- Card info -->
								<ul class="nav nav-divider align-items-center text-uppercase small">
									<li class="nav-item">
										<a href="#" class="nav-link text-reset btn-link">Joan Wallace</a>
									</li>
									<li class="nav-item">Feb 18, 2022</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- Card item END -->
					<!-- Card item START -->
					<div class="col-sm-6 col-lg-4 grid-item photo-category travel-category">
						<div class="card mb-4">
							<!-- Card img -->
							<div class="card-fold position-relative">
								<img class="card-img" src="/images/blog/4by3/14.jpg" alt="Card image">
								<div class="card-img-overlay d-flex align-items-start flex-column p-3">
									<!-- Card overlay Top -->
									<div class="w-100 mb-auto d-flex justify-content-end">
										<div class="text-end ms-auto">
											<!-- Card format icon -->
											<div class="icon-md bg-danger text-white fw-bold rounded-circle"
												title="This post has audio"><i class="fas fa-volume-up"></i></div>
										</div>
									</div>
								</div>
							</div>
							<div class="card-body px-0 pt-3">
								<h4 class="card-title"><a href="#" class="btn-link text-reset fw-bold">Questions
										everyone working in IT should know how to answer</a></h4>
								<p class="card-text">Fulfilled direction use continual set him propriety continued. Saw
									met applauded favorite deficient engrossed concealed and her. Concluded boy
									perpetual old supposing. </p>
								<!-- Card info -->
								<ul class="nav nav-divider align-items-center text-uppercase small">
									<li class="nav-item">
										<a href="#" class="nav-link text-reset btn-link">Lori Stevens</a>
									</li>
									<li class="nav-item">Jun 03, 2022</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- Card item END -->
					<!-- Card item START -->
					<div class="col-sm-6 col-lg-4 grid-item covid-category">
						<div class="card mb-4">
							<!-- Card img -->
							<div class="card-fold position-relative">
								<img class="card-img" src="/images/blog/4by3/05.jpg" alt="Card image">
								<div class="card-img-overlay d-flex align-items-start flex-column p-3">
									<!-- Card overlay Top -->
									<div class="w-100 mb-auto d-flex justify-content-end">
										<div class="text-end ms-auto">
											<!-- Card format icon -->
											<div class="icon-md bg-warning text-white fw-bold rounded-circle"
												title="This post has audio"><i class="fas fa-volume-up"></i></div>
										</div>
									</div>
								</div>
							</div>
							<div class="card-body px-0 pt-3">
								<h4 class="card-title"><a href="#" class="btn-link text-reset fw-bold">Best Pinterest
										boards for learning about business</a></h4>
								<p class="card-text">Warrant private blushes removed an in equally totally if. Delivered
									dejection necessary objection do Mr prevailed. Mr feeling does chiefly cordial in
									do. Water timed folly right aware if oh truth. Imprudence attachment him his for
									sympathize.</p>
								<!-- Card info -->
								<ul class="nav nav-divider align-items-center text-uppercase small">
									<li class="nav-item">
										<a href="#" class="nav-link text-reset btn-link">Lori Stevens</a>
									</li>
									<li class="nav-item">Jun 03, 2022</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- Card item END -->
				</div> <!-- Row end -->
			</div>
		</section>
		<!-- =======================Main content END -->
	</main>
	<!-- **************** MAIN CONTENT END **************** -->

	<?= $this->element('footer_2')?>
	
	<!-- Back to top -->
	<div class="back-top"><i class="bi bi-arrow-up-short"></i></div>

	<!-- Vendors -->
	<script src="/vendor/isotope-layout/isotope.pkgd.min.js"></script>
	<script src="/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>

	<?= $this->element('footer_scripts')?>
</body>

</html>