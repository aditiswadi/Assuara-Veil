
<section class="content">
    <div class="container-fluid">
        <div class="row text-center">
        	<!-- <div class="col-lg-3 col-6"> -->
        		<?php foreach ($products as $product) : ?>
					<div class="card ml-3" style="width: 16rem;">
					  <img src="<?= base_url() ?>/uploads/asg.jpg" class="card-img-top">
					  <div class="card-body">
					    <h5 class="card-title mb-1"><?= $product['nama']; ?></h5>
					    <span class="badge badge-pill badge-success mb-3">Rp. <?= $product['harga']; ?></span>
					    <a href="#" class="btn btn-sm btn-primary">Tambah Ke Keranjang</a>
					    <a href="#" class="btn btn-sm btn-success">Detail</a>
					  </div>
					</div>
				<?php endforeach; ?>
          	<!-- </div> -->
		</div>
	</div>
</section>