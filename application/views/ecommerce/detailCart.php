
	<div class="page-top-info">
		<div class="container">
			<h4>Your cart</h4>
			<div class="site-pagination">
				<a href="<?= base_url() ?>/ecommerce">Home</a> /
				<a href="">Your cart</a>
			</div>
		</div>
	</div>
	<!-- Page info end -->


	<!-- cart section end -->
	<section class="cart-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="cart-table">
						<h3>Your Cart</h3>
						<div class="cart-table-warp">
							<table>
							<thead>
								<tr>
									<th class="product-th">Nama Produk</th>
									<th class="quy-th">Jumlah</th>
									<th class="size-th">Harga</th>
									<th class="total-th">Sub-Total</th>
								</tr>
							</thead>
							<tbody>

								<?php foreach ($this->cart->contents() as $items) : ?>
								<tr>
									<td class="product-col">
										<!-- tempat gambar -->
										<div class="pc-title">
											<h4><?= $items['name']?></h4>
										</div>
									</td>
									<td class="quy-col">
										<div class="quantity">
					                        <div class="pro-qty">
												<input type="text" value="<?= $items['qty']?>">
											</div>
                    					</div>
									</td>
									<td class="size-col"><h4>Rp. <?= number_format($items['price'], 0, ',', '.'); ?></h4></td>
									<td class="total-col"><h4>Rp. <?= number_format($items['subtotal'], 0, ',', '.'); ?></h4></td>
								</tr>

								<?php endforeach; ?>
							</tbody>
						</table>
						</div>
						<div class="total-cost">
							<h6>Total <span>Rp. <?= number_format($this->cart->total(), 0, ',', '.'); ?></span></h6>
						</div>
					</div>
				</div>
				<div class="col-lg-4 card-right">
					<form class="promo-code-form">
						<input type="text" placeholder="Enter promo code">
						<button>Submit</button>
					</form>
					<a href="<?= base_url(); ?>keranjang/pembayaran" class="site-btn sb-dark">Pembayaran</a>
					<a href="<?= base_url(); ?>ecommerce" class="site-btn sb-dark">Lanjutkan Belanja</a>
					<a href="<?= base_url(); ?>keranjang/hapusKeranjang" class="site-btn">Hapus Keranjang</a>
				</div>
			</div>
		</div>
	</section>
	<!-- cart section end