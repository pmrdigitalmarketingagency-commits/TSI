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
		<section>
			<div class="container">
				<div class="row">
					<div class="col-lg-8 mx-auto text-center">
						<h1 class="display-6">Pagination styles</h1>
						<p>Examples for showing pagination to indicate a series of related content exists across
							multiple pages.</p>
					</div>
				</div>
			</div>
		</section>
		<!-- =======================Inner intro END -->

		<!-- =======================Pagination START -->
		<section>
			<div class="container">
				<div class="row">
					<div class="col-12">
						<h3 class="text-center mb-5">Default pagination</h3>
					</div>
					<div class="col-12">
						<h5 class="text-center">Pagination sm</h5>
						<nav class="mb-5" aria-label="navigation">
							<ul class="pagination pagination-sm d-inline-block d-md-flex justify-content-center">
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
						<h5 class="text-center">Pagination default</h5>
						<nav class="mb-5" aria-label="navigation">
							<ul class="pagination d-inline-block d-md-flex justify-content-center">
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
						<h5 class="text-center">Pagination lg</h5>
						<nav class="mb-5" aria-label="navigation">
							<ul class="pagination pagination-lg d-inline-block d-md-flex justify-content-center">
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
					</div>
				</div>
			</div>
		</section>
		<!-- =======================Pagination END -->

		<hr class="m-0">

		<!-- =======================Bordered pagination START -->
		<section>
			<div class="container">
				<div class="row">
					<div class="col-12">
						<h3 class="text-center mb-5">Bordered pagination</h3>
					</div>
					<div class="col-12">
						<nav class="mb-4 d-flex justify-content-center" aria-label="navigation">
							<ul class="pagination pagination-bordered ">
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
					</div>
				</div>
			</div>
		</section>
		<!-- =======================Bordered Pagination END -->

		<hr class="m-0">

		<!-- Jump pagination START -->
		<section>
			<div class="container">
				<div class="row">
					<div class="col-12">
						<h3 class="text-center mb-5">Jump pagination</h3>
					</div>
					<nav class="mb-5 d-lg-flex justify-content-between" aria-label="navigation">
						<!-- Pagination 1 2 3  -->
						<ul class="pagination pagination-bordered justify-content-center d-inline-block d-lg-flex">
							<li class="page-item">
								<a class="page-link" href="#">First</a>
							</li>
							<li class="page-item"><a class="page-link" href="#">1</a></li>
							<li class="page-item active"><a class="page-link" href="#">2</a></li>
							<li class="page-item disabled"><a class="page-link" href="#">..</a></li>
							<li class="page-item"><a class="page-link" href="#">22</a></li>
							<li class="page-item"><a class="page-link" href="#">23</a></li>
							<li class="page-item">
								<a class="page-link" href="#">Last</a>
							</li>
						</ul>
						<!-- Pagination jump -->
						<ul class="pagination pagination-bordered justify-content-center d-none d-lg-flex">
							<li class="page-item disabled">
								<span class="page-link">Total 25 pages</span>
							</li>
							<li class="page-item disabled">
								<span class="page-link">|</span>
							</li>
							<li class="page-item disabled">
								<span class="page-link">Go to page:</span>
							</li>
							<li class="page-item">
								<input class="form-control h-100 icon-lg fs-6" type="text" placeholder="12">
							</li>
							<li class="page-item active">
								<a class="page-link" href="#">Jump <i class="bi bi-arrow-90deg-right ms-2"></i></a>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</section>
		<!-- Jump pagination END -->

		<hr class="m-0">

		<!-- =======================Full width pagination START -->
		<section>
			<div class="container">
				<div class="row">
					<div class="col-12">
						<h3 class="text-center">Full width pagination</h3>
					</div>
					<nav class="my-5" aria-label="navigation">
						<ul class="pagination pagination-bordered d-flex justify-content-between">
							<li>
								<ul class="list-unstyled">
									<li class="page-item">
										<a class="page-link" href="#">First</a>
									</li>
								</ul>
							</li>
							<li>
								<ul class="list-unstyled">
									<li class="page-item"><a class="page-link" href="#">1</a></li>
									<li class="page-item active"><a class="page-link" href="#">2</a></li>
									<li class="page-item disabled"><a class="page-link" href="#">..</a></li>
									<li class="page-item"><a class="page-link" href="#">22</a></li>
									<li class="page-item"><a class="page-link" href="#">23</a></li>
								</ul>
							</li>
							<li>
								<ul class="list-unstyled">
									<li class="page-item">
										<a class="page-link" href="#">Last</a>
									</li>
								</ul>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</section>
		<!-- =======================Full-width pagination END -->

		<hr class="m-0">

		<!-- Newer Older Pagination START -->
		<section>
			<div class="container">
				<div class="row">
					<div class="col-12">
						<h3 class="text-center">Newer Older Pagination</h3>
					</div>
					<nav class="mt-5" aria-label="navigation">
						<ul class="pagination d-flex justify-content-between">
							<li class="page-item flex-fill text-center">
								<a href="#" class="page-link"> <i class="fas fa-long-arrow-alt-left me-2 rtl-flip"></i>
									Older</a>
							</li>
							<li class="page-item flex-fill text-center">
								<a href="#" class="page-link">Newer <i
										class="fas fa-long-arrow-alt-right ms-2 rtl-flip"></i></a>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</section>
		<!-- Newer Older Pagination END -->

		<hr class="m-0">
		
		<!-- =======================Button pagination START -->
		<section>
			<div class="container">
				<div class="row">
					<div class="col-12">
						<h3 class="text-center">Load more button Pagination</h3>
					</div>
					<div class="col-12 text-center mt-5">
						<button type="button" class="btn btn-primary-soft">Load more post <i
								class="bi bi-arrow-down-circle align-middle ms-2"></i></button>
					</div>
					<div class="col-12 text-center mt-3">
						<button type="button" class="btn btn-primary-soft w-100">Load more post <i
								class="bi bi-arrow-down-circle ms-2 align-middle"></i></button>
					</div>
				</div>
			</div>
		</section>
		<!-- =======================Button pagination END -->
	</main>
	<!-- **************** MAIN CONTENT END **************** -->

	<?= $this->element('footer_2')?>

	<!-- Back to top -->
	<div class="back-top"><i class="bi bi-arrow-up-short"></i></div>

	<?= $this->element('footer_scripts')?>
</body>

</html>