	<!-- Hero section -->
	<section class="hero-section">
		<div class="hero-slider owl-carousel">
			<div class="hs-item set-bg" data-setbg="<?= base_url() ?>/uploads/asg.jpg">
				<div class="container">
					<div class="row">
						<div class="col-xl-6 col-lg-7 text-white">
							<span></span>
							<h2>Assuara</h2>
							<p>Solution of Technology</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Hero section end -->

	<!-- Product filter section -->
	<section class="product-filter-section">
		<div class="container">
			<div class="section-title mt-5">
				<h2>TOP SELLING PRODUCTS</h2>
			</div>
			<div class="row">
				<?php foreach($products as $product) : ?>
				<div class="col-lg-3 col-sm-6">
					<div class="product-item">
						<div class="pi-pic">
							<a href="<?= base_url(); ?>ecommerce/detail/<?= $product['id_produk']; ?>"><img src="<?= base_url(); ?>/uploads/<?= $product['gambar'] ?>" alt=""></a>
							<div class="pi-links">
								<a href="<?= base_url(); ?>auth/index/" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
								<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
							</div>
						</div>
						<div class="pi-text">
							<h6>Rp. <?= number_format($product['harga'], 0, ',', '.'); ?></h6>
							<a href="<?= base_url(); ?>ecommerce/detail/<?= $product['id_produk']; ?>"><p><?= $product['nama'];  ?></p></a>
						</div>
					</div>
				</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>
	<!-- Product filter section end -->