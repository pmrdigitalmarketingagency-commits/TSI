<!DOCTYPE html>
<html lang="en">

<head>
	<?= $this->element('title_meta')?>

	<?= $this->element('head_css')?>
</head>

<body>
	<?= $this->element('shop_offcanvas')?>

	<?= $this->element('shop_navbar')?>

	<!-- **************** MAIN CONTENT START **************** -->
	<main>
		<!-- =======================Main START -->
		<section>
			<div class="container">
				<div class="row">
					<div class="col-12 text-center">
						<!-- Image -->
						<img src="/images/icon/empty-cart.svg" class="h-200 h-md-300 mb-3" alt="">
						<!-- Subtitle -->
						<h2>Your cart is currently empty</h2>
						<!-- info -->
						<p class="mb-0">I think the below button is important. Hit this button and you will find a lot
							of interesting products on our "Shop" page</p>
						<!-- Button -->
						<a href="shop-grid" class="btn btn-primary mt-4 mb-0">Back to Shop</a>
					</div>
				</div>
			</div>
		</section>
		<!-- =======================Main END -->
	</main>
	<!-- **************** MAIN CONTENT END **************** -->

	<?= $this->element('footer')?>

	<!-- Back to top -->
	<div class="back-top"><i class="bi bi-arrow-up-short"></i></div>

	<?= $this->element('footer_scripts')?>
</body>

</html>