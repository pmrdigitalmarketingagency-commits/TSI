<!-- =======================
Header START -->
<header class="navbar-light navbar-sticky header-static">
	<!-- Logo Nav START -->
	<nav class="navbar navbar-expand-xl">
		<div class="container">
			<!-- Logo START -->
			<a class="navbar-brand" href="index">
				<img class="navbar-brand-item light-mode-item" src="/images/logo.svg" alt="logo">			
				<img class="navbar-brand-item dark-mode-item" src="/images/logo-light.svg" alt="logo">			
			</a>
			<!-- Logo END -->

			<!-- Responsive navbar toggler -->
			<button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
				<span class="text-body h6 d-none d-sm-inline-block">Menu</span>
				<span class="navbar-toggler-icon"></span>
			</button>

			<!-- Main navbar START -->
			<div class="collapse navbar-collapse" id="navbarCollapse">
				<!-- Nav Search START -->
				<div class="nav mt-3 mt-lg-0 px-4 flex-nowrap align-items-center">
					<div class="nav-item w-100">
						<form class="rounded position-relative">
							<input class="form-control pe-5 bg-light" type="search" placeholder="Search the products" aria-label="Search">
							<button class="btn bg-transparent border-0 px-2 py-0 position-absolute top-50 end-0 translate-middle-y" type="submit"><i class="bi bi-search fs-5"> </i></button>
						</form>
					</div>
				</div>
				<!-- Nav Search END -->
				<ul class="navbar-nav navbar-nav-scroll ms-auto">
					
					<!-- Nav item 1 Demos -->
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="homeMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Home</a>
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

					<!-- Nav item 2 shop all -->
					<li class="nav-item"> <a class="nav-link" href="shop-grid">Shop all</a></li>

					<!-- Nav item 3 pages -->
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="pagesMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
						<ul class="dropdown-menu" aria-labelledby="pagesMenu">
							<li> <a class="dropdown-item" href="shop-detail">Shop detail</a> </li>
							<li> <a class="dropdown-item" href="checkout">Checkout</a> </li>
							<li> <a class="dropdown-item" href="my-cart">Cart</a> </li>
							<li> <a class="dropdown-item" href="empty-cart">Empty Cart</a> </li>
						</ul>
					</li>

					<!-- Nav item 4 link-->
					<li class="nav-item"> <a class="nav-link" href="contact-us">Contact</a></li>
				</ul>
			</div>
			<!-- Main navbar END -->

			<div class="nav flex-nowrap align-items-center ms-3 ms-lg-4">
				<!-- Dark mode options START -->
				<div class="nav-item dropdown">
					<!-- Switch button -->
					<button class="modeswitch" id="bd-theme" type="button" aria-expanded="false" data-bs-toggle="dropdown" data-bs-display="static">
						<svg class="theme-icon-active"><use href="#"></use></svg>
					</button>
					<!-- Dropdown items -->
					<ul class="dropdown-menu min-w-auto dropdown-menu-end" aria-labelledby="bd-theme">
						<li class="mb-1">
							<button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light">
								<svg width="16" height="16" fill="currentColor" class="bi bi-brightness-high-fill fa-fw mode-switch me-1" viewBox="0 0 16 16">
									<path d="M12 8a4 4 0 1 1-8 0 4 4 0 0 1 8 0zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
									<use href="#"></use>
								</svg>Light
							</button>
						</li>
						<li class="mb-1">
							<button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-moon-stars-fill fa-fw mode-switch me-1" viewBox="0 0 16 16">
									<path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/>
									<path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
									<use href="#"></use>
								</svg>Dark
							</button>
						</li>
						<li>
							<button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-half fa-fw mode-switch me-1" viewBox="0 0 16 16">
									<path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
									<use href="#"></use>
								</svg>Auto
							</button>
						</li>
					</ul>
				</div>
				<!-- Dark mode options END -->
				<!-- Offcanvas menu toggler -->
				<div class="nav-item position-relative ms-3">
					<a class="btn btn-light btn-round mb-0" data-bs-toggle="offcanvas" href="#offcanvasMenu" role="button" aria-controls="offcanvasMenu">
							<i class="bi bi-cart3 fa-fw" data-bs-target="#offcanvasMenu"></i>
					</a>
					<span class="position-absolute top-0 start-100 translate-middle badge smaller rounded-circle bg-dark mt-xl-2 ms-n1">2 
						<span class="visually-hidden">unread messages</span>
					</span>
				</div>
			</div>
		</div>
	</nav>
	<!-- Logo Nav END -->
</header>
<!-- =======================
Header END -->