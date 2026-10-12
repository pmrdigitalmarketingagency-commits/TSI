<!-- =======================
Header START -->
<header class="navbar-light navbar-sticky header-static">
	<!-- Logo Nav START -->
	<nav class="navbar navbar-expand-lg">
		<div class="container<?= isset($divClass) ? $divClass : '' ?>">
			<!-- Logo START -->
			<a class="navbar-brand" href="index">
				<img class="navbar-brand-item light-mode-item" src="/images/logo.svg" alt="logo">
				<img class="navbar-brand-item dark-mode-item" src="/images/logo-light.svg" alt="logo">
			</a>
			<!-- Logo END -->

			<!-- Responsive navbar toggler -->
			<button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse"
				data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
				aria-label="Toggle navigation">
				<span class="text-body h6 d-none d-sm-inline-block">Menu</span>
				<span class="navbar-toggler-icon"></span>
			</button>

			<!-- Main navbar START -->
			<div class="collapse navbar-collapse" id="navbarCollapse">
				<?php if (isset($searchbar)): ?>
					<!-- Nav Search START -->
					<div class="nav mt-3 mt-lg-0 px-4 flex-nowrap align-items-center">
						<div class="nav-item w-100">
							<form class="rounded position-relative">
								<input class="form-control pe-5 bg-light" type="search" placeholder="Search the blog"
									aria-label="Search">
								<button
									class="btn bg-transparent border-0 px-2 py-0 position-absolute top-50 end-0 translate-middle-y"
									type="submit"><i class="bi bi-search fs-5"> </i></button>
							</form>
						</div>
					</div>
					<!-- Nav Search END -->
				<?php endif; ?>
				<ul class="navbar-nav navbar-nav-scroll <?= isset($ulClass) ? $ulClass : 'ms-auto' ?>">

					<!-- Nav item 1 Demos -->
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="homeMenu" data-bs-toggle="dropdown"
							aria-haspopup="true" aria-expanded="false">Home</a>
						<ul class="dropdown-menu" aria-labelledby="homeMenu">
							<li> <a class="dropdown-item" href="index">Home default</a></li>
							<li> <a class="dropdown-item" href="index-lazy">Home lazy load</a></li>
							<li> <a class="dropdown-item" href="index-2">Magazine classic</a></li>
							<li> <a class="dropdown-item" href="index-3">Magazine</a></li>
							<li> <a class="dropdown-item" href="index-4">Home cards</a></li>
							<li> <a class="dropdown-item" href="index-5">Blog classic</a></li>
							<li> <a class="dropdown-item" href="index-6">Blog Personal </a></li>
							<li> <a class="dropdown-item" href="index-7">Blog Vintage</a></li>
							<li> <a class="dropdown-item" href="index-8">Blog Tech</a></li>
							<li> <a class="dropdown-item" href="index-9">Blog Fashion</a></li>
							<li> <a class="dropdown-item" href="index-10">Blog Podcast</a></li>
							<li> <a class="dropdown-item" href="index-11">Home Shop </a></li>
						</ul>
					</li>

					<!-- Nav item 2 Pages -->
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="pagesMenu" data-bs-toggle="dropdown"
							aria-haspopup="true" aria-expanded="false">Pages</a>
						<ul class="dropdown-menu" aria-labelledby="pagesMenu">
							<li> <a class="dropdown-item" href="about-us">About</a></li>
							<li> <a class="dropdown-item" href="contact-us">Contact</a></li>
							<!-- Dropdown submenu -->
							<li class="dropdown-submenu dropend">
								<a class="dropdown-item dropdown-toggle" href="#">Shop</a>
								<ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">
									<li> <a class="dropdown-item" href="shop-grid">Shop grid</a> </li>
									<li> <a class="dropdown-item" href="shop-detail">Shop detail</a> </li>
									<li> <a class="dropdown-item" href="checkout">Checkout</a> </li>
									<li> <a class="dropdown-item" href="my-cart">Cart</a> </li>
									<li> <a class="dropdown-item" href="empty-cart">Empty Cart</a> </li>
								</ul>
							</li>
							<!-- Dropdown submenu -->
							<li class="dropdown-submenu dropend">
								<a class="dropdown-item dropdown-toggle" href="#">Other Archives</a>
								<ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">
									<li> <a class="dropdown-item" href="author">Author Page</a> </li>
									<li> <a class="dropdown-item" href="categories">Category page 1</a> </li>
									<li> <a class="dropdown-item" href="categories-2">Category page 2</a> </li>
									<li> <a class="dropdown-item" href="tag"># tag</a> </li>
									<li> <a class="dropdown-item" href="search-result">Search result</a> </li>
								</ul>
							</li>
							<li> <a class="dropdown-item" href="404">Error 404</a></li>
							<li> <a class="dropdown-item" href="signin">signin</a></li>
							<li> <a class="dropdown-item" href="signup">signup</a></li>
							<li> <a class="dropdown-item" href="offline">offline</a></li>
							<!-- Dropdown submenu levels -->
							<li class="dropdown-divider"></li>
							<li class="dropdown-submenu dropend">
								<a class="dropdown-item dropdown-toggle" href="#">Dropdown levels</a>
								<ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">
									<!-- dropdown submenu open right -->
									<li class="dropdown-submenu dropend">
										<a class="dropdown-item dropdown-toggle" href="#">Dropdown (end)</a>
										<ul class="dropdown-menu" data-bs-popper="none">
											<li> <a class="dropdown-item" href="#">Dropdown item</a> </li>
											<li> <a class="dropdown-item" href="#">Dropdown item</a> </li>
										</ul>
									</li>
									<li> <a class="dropdown-item" href="#">Dropdown item</a> </li>
									<!-- dropdown submenu open left -->
									<li class="dropdown-submenu dropstart">
										<a class="dropdown-item dropdown-toggle" href="#">Dropdown (start)</a>
										<ul class="dropdown-menu dropdown-menu-end" data-bs-popper="none">
											<li> <a class="dropdown-item" href="#">Dropdown item</a> </li>
											<li> <a class="dropdown-item" href="#">Dropdown item</a> </li>
										</ul>
									</li>
									<li> <a class="dropdown-item" href="#">Dropdown item</a> </li>
								</ul>
							</li>
							<li class="dropdown-divider"></li>
							<li>
								<a class="dropdown-item" href="index" target="_blank">
									<i class="text-warning fa-fw bi bi-life-preserver me-2"></i>Support
								</a>
							</li>

							<li class="dropdown-divider"></li>
							<li>
								<a class="dropdown-item" href="" target="_blank">
									<i class="text-info fa-fw bi bi-toggle-off me-2"></i>RTL demo
								</a>
							</li>
							<li>
								<a class="dropdown-item" href="" target="_blank">
									<i class="text-success fa-fw bi bi-cloud-download-fill me-2"></i>Buy blogzine!
								</a>
							</li>
						</ul>
					</li>

					<!-- Nav item 3 Post -->
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="postMenu" data-bs-toggle="dropdown"
							aria-haspopup="true" aria-expanded="false">Post</a>
						<ul class="dropdown-menu" aria-labelledby="postMenu">
							<!-- dropdown submenu -->
							<li class="dropdown-submenu dropend">
								<a class="dropdown-item dropdown-toggle" href="#">Post grid</a>
								<ul class="dropdown-menu dropdown-menu-start" data-bs-popper="none">
									<li> <a class="dropdown-item" href="post-grid">Post grid</a> </li>
									<li> <a class="dropdown-item" href="post-grid-4-col">Post grid 4 col</a> </li>
									<li> <a class="dropdown-item" href="post-grid-masonry">Post grid masonry</a>
									</li>
									<li> <a class="dropdown-item" href="post-grid-masonry-filter">Post grid masonry
											filter</a> </li>
									<li> <a class="dropdown-item" href="post-large-and-grid">Post mixed large than
											grid</a> </li>
								</ul>
							</li>
							<li> <a class="dropdown-item" href="post-list">Post list</a> </li>
							<li> <a class="dropdown-item" href="post-list-2">Post list 2</a> </li>
							<li> <a class="dropdown-item" href="post-cards">Post card</a> </li>
							<li> <a class="dropdown-item" href="post-overlay">Post Overlay</a> </li>
							<li> <a class="dropdown-item" href="post-types">Post types</a> </li>
							<li class="dropdown-divider"></li>
							<li> <a class="dropdown-item" href="post-single">Post single magazine</a> </li>
							<li> <a class="dropdown-item" href="post-single-2">Post single classic</a> </li>
							<li> <a class="dropdown-item" href="post-single-3">Post single minimal</a> </li>
							<li> <a class="dropdown-item" href="post-single-4">Post single card</a> </li>
							<li> <a class="dropdown-item" href="post-single-5">Post single review</a> </li>
							<li> <a class="dropdown-item" href="post-single-6">Post single video</a> </li>
							<li> <a class="dropdown-item" href="podcast-single">Podcast single</a> </li>
							<li class="dropdown-divider"></li>
							<li> <a class="dropdown-item" href="pagination-styles">Pagination styles</a> </li>
						</ul>
					</li>

					<!-- Nav item 4 Mega menu -->
					<li class="nav-item dropdown dropdown-fullwidth">
						<a class="nav-link dropdown-toggle" href="#" id="megaMenu" data-bs-toggle="dropdown"
							aria-haspopup="true" aria-expanded="false"> Lifestyle</a>
						<div class="dropdown-menu" aria-labelledby="megaMenu">
							<div class="container">
								<div class="row g-4 p-3 flex-fill">
									<!-- Card item START -->
									<div class="col-sm-6 col-lg-3">
										<div class="card bg-transparent">
											<!-- Card img -->
											<img class="card-img rounded" src="/images/blog/16by9/small/01.jpg"
												alt="Card image">
											<div class="card-body px-0 pt-3">
												<h6 class="card-title mb-0"><a href="#"
														class="btn-link text-reset fw-bold">7 common mistakes everyone
														makes while traveling</a></h6>
												<!-- Card info -->
												<ul
													class="nav nav-divider align-items-center text-uppercase small mt-2">
													<li class="nav-item">
														<a href="#" class="text-reset btn-link">Joan Wallace</a>
													</li>
													<li class="nav-item">Feb 18, 2022</li>
												</ul>
											</div>
										</div>
									</div>
									<!-- Card item END -->
									<!-- Card item START -->
									<div class="col-sm-6 col-lg-3">
										<div class="card bg-transparent">
											<!-- Card img -->
											<img class="card-img rounded" src="/images/blog/16by9/small/02.jpg"
												alt="Card image">
											<div class="card-body px-0 pt-3">
												<h6 class="card-title mb-0"><a href="#"
														class="btn-link text-reset fw-bold">12 worst types of business
														accounts you follow on Twitter</a></h6>
												<!-- Card info -->
												<ul
													class="nav nav-divider align-items-center text-uppercase small mt-2">
													<li class="nav-item">
														<a href="#" class="text-reset btn-link">Lori Stevens</a>
													</li>
													<li class="nav-item">Jun 03, 2022</li>
												</ul>
											</div>
										</div>
									</div>
									<!-- Card item END -->
									<!-- Card item START -->
									<div class="col-sm-6 col-lg-3">
										<div class="card bg-transparent">
											<!-- Card img -->
											<img class="card-img rounded" src="/images/blog/16by9/small/03.jpg"
												alt="Card image">
											<div class="card-body px-0 pt-3">
												<h6 class="card-title mb-0"><a href="#"
														class="btn-link text-reset fw-bold">Skills that you can learn
														from business</a></h6>
												<!-- Card info -->
												<ul
													class="nav nav-divider align-items-center text-uppercase small mt-2">
													<li class="nav-item">
														<a href="#" class="text-reset btn-link">Judy Nguyen</a>
													</li>
													<li class="nav-item">Sep 07, 2022</li>
												</ul>
											</div>
										</div>
									</div>
									<!-- Card item END -->
									<!-- Card item START -->
									<div class="col-sm-6 col-lg-3">
										<div class="bg-primary bg-opacity-10 p-4 text-center h-100 w-100 rounded">
											<span>The Blogzine</span>
											<h3>Premium Membership</h3>
											<p>Become a Member Today!</p>
											<a href="#" class="btn btn-warning">View pricing plans</a>
										</div>
									</div>
									<!-- Card item END -->
								</div> <!-- Row END -->
								<!-- Trending tags -->
								<div class="row px-3">
									<div class="col-12">
										<ul class="list-inline mt-3">
											<li class="list-inline-item">Trending tags:</li>
											<li class="list-inline-item"><a href="#"
													class="btn btn-sm btn-primary-soft">Travel</a></li>
											<li class="list-inline-item"><a href="#"
													class="btn btn-sm btn-warning-soft">Business</a></li>
											<li class="list-inline-item"><a href="#"
													class="btn btn-sm btn-success-soft">Tech</a></li>
											<li class="list-inline-item"><a href="#"
													class="btn btn-sm btn-danger-soft">Gadgets</a></li>
											<li class="list-inline-item"><a href="#"
													class="btn btn-sm btn-info-soft">Lifestyle</a></li>
											<li class="list-inline-item"><a href="#"
													class="btn btn-sm btn-primary-soft">Vaccine</a></li>
											<li class="list-inline-item"><a href="#"
													class="btn btn-sm btn-success-soft">Sports</a></li>
											<li class="list-inline-item"><a href="#"
													class="btn btn-sm btn-danger-soft">Covid-19</a></li>
											<li class="list-inline-item"><a href="#"
													class="btn btn-sm btn-info-soft">Politics</a></li>
										</ul>
									</div>
								</div> <!-- Row END -->
							</div>
						</div>
					</li>

					<!-- Nav item 5 link-->
					<li class="nav-item"> <a class="nav-link" href="dashboard">Dashboard</a></li>
				</ul>
			</div>
			<!-- Main navbar END -->

			<!-- Nav right START -->
			<div class="nav ms-sm-3 flex-nowrap align-items-center">
				<?php if (!isset($offcanvas)): ?>
					<!-- Dark mode options START -->
					<div class="nav-item dropdown <?= isset($ulClass) ? 'me-3' : 'ms-3' ?> ">
						<!-- Switch button -->
						<button class="modeswitch" id="bd-theme" type="button" aria-expanded="false"
							data-bs-toggle="dropdown" data-bs-display="static">
							<svg class="theme-icon-active">
								<use href="#"></use>
							</svg>
						</button>
						<!-- Dropdown items -->
						<ul class="dropdown-menu min-w-auto dropdown-menu-end" aria-labelledby="bd-theme">
							<li class="mb-1">
								<button type="button" class="dropdown-item d-flex align-items-center"
									data-bs-theme-value="light">
									<svg width="16" height="16" fill="currentColor"
										class="bi bi-brightness-high-fill fa-fw mode-switch me-1" viewBox="0 0 16 16">
										<path
											d="M12 8a4 4 0 1 1-8 0 4 4 0 0 1 8 0zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z" />
										<use href="#"></use>
									</svg>Light
								</button>
							</li>
							<li class="mb-1">
								<button type="button" class="dropdown-item d-flex align-items-center"
									data-bs-theme-value="dark">
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
								<button type="button" class="dropdown-item d-flex align-items-center active"
									data-bs-theme-value="auto">
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
				<?php endif; ?>
				<?php if (!isset($searchbar)): ?>
					<!-- Nav additional link -->
					<?php if (!isset($ulClass)): ?>
						<div class="nav-item dropdown dropdown-toggle-icon-none">
							<a class="nav-link dropdown-toggle" role="button" href="#" id="navAdditionalLink"
								data-bs-toggle="dropdown" aria-expanded="false">
								<i class="bi bi-three-dots fs-4"></i>
							</a>
							<ul class="dropdown-menu dropdown-menu-end min-w-auto shadow rounded text-end"
								aria-labelledby="navAdditionalLink">
								<li><a class="dropdown-item fw-normal" href="#">About</a></li>
								<li><a class="dropdown-item fw-normal" href="#">Newsletter</a></li>
								<li><a class="dropdown-item fw-normal" href="#">Author</a></li>
								<li><a class="dropdown-item fw-normal" href="#">#Tags</a></li>
								<li><a class="dropdown-item fw-normal" href="#">Contact</a></li>
								<li><a class="dropdown-item fw-normal" href="#"><span
											class="badge bg-danger me-2 align-middle">2 Job</span>Careers</a></li>
							</ul>
						</div>
					<?php endif; ?>
					<?php if (isset($fontsize)): ?>
						<div class="nav-item d-none d-md-block">
							<div class="btn-group mx-2" role="group" aria-label="font size changer">
								<input type="radio" class="btn-check" name="fntradio" id="font-sm">
								<label class="btn btn-xs btn-outline-primary mb-0" for="font-sm">A-</label>

								<input type="radio" class="btn-check" name="fntradio" id="font-default" checked>
								<label class="btn btn-xs btn-outline-primary mb-0" for="font-default">A</label>

								<input type="radio" class="btn-check" name="fntradio" id="font-lg">
								<label class="btn btn-xs btn-outline-primary mb-0" for="font-lg">A+</label>
							</div>
						</div>
					<?php else: ?>
						<!-- Nav Button -->
						<div class="nav-item d-none d-md-block">
							<a href="#" class="btn btn-sm btn-danger mb-0 mx-2">Subscribe!</a>
						</div>
					<?php endif; ?>
					<!-- Nav Search -->
					<div class="nav-item dropdown nav-search dropdown-toggle-icon-none">
						<a class="nav-link pe-0 dropdown-toggle" role="button" href="#" id="navSearch"
							data-bs-toggle="dropdown" aria-expanded="false">
							<i class="bi bi-search fs-4"> </i>
						</a>
						<div class="dropdown-menu dropdown-menu-end shadow rounded p-2" aria-labelledby="navSearch">
							<form class="input-group">
								<input class="form-control border-success" type="search" placeholder="Search"
									aria-label="Search">
								<button class="btn btn-success m-0" type="submit">Search</button>
							</form>
						</div>
					</div>
					<?php if (isset($offcanvas)): ?>
						<!-- Offcanvas menu toggler -->
						<div class="nav-item">
							<a class="nav-link p-0" data-bs-toggle="offcanvas" href="#offcanvasMenu" role="button"
								aria-controls="offcanvasMenu">
								<i class="bi bi-text-right rtl-flip fs-2" data-bs-target="#offcanvasMenu"> </i>
							</a>
						</div>
					<?php endif; ?>
				<?php endif; ?>
			</div>
			<!-- Nav right END -->
		</div>
	</nav>
	<!-- Logo Nav END -->
</header>
<!-- =======================
Header END -->