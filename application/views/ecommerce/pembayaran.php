<!-- Page info -->
	<div class="page-top-info">
		<div class="container">
			<h4>Your cart</h4>
			<div class="site-pagination">
				<a href="">Home</a> /
				<a href="">Your cart</a>
			</div>
		</div>
	</div>
	<!-- Page info end -->


	<!-- checkout section  -->
	<section class="checkout-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 order-2 order-lg-1">
					<form class="checkout-form" method="post" action="<?= base_url() ?>keranjang/prosesPesanan">
						<div class="cf-title">Informasi Alamat</div>
						<div class="row address-inputs">
							<div class="col-md-12">
								<input type="text" placeholder="Nama Lengkap" class="form-control">
								<input type="text" placeholder="Kecamatan" class="form-control">
								<input type="text" placeholder="Kabupaten/Kota" class="form-control">
								<input type="text" placeholder="Alamat Lengkap" class="form-control">
							</div>
							<div class="col-md-6">
								<input type="text" placeholder="Kode Pos" class="form-control">
							</div>
							<div class="col-md-6">
								<input type="text" placeholder="No. Telepon" class="form-control">
							</div>
						</div>
						<div class="cf-title">Informasi Pengiriman</div>
						<!-- <div class="form-group">
							<div class="col-6">
								<h4>Pilih Jasa Pengiriman</h4>
							</div>
							<div class="col-6">
								<select>
									<option>JNE</option>
									<option>JNT</option>
									<option>TIKI</option>
									<option>GRAB</option>
									<option>GOJEK</option>
								</select>
							</div>
						</div> -->
						<div class="row shipping-btns">
							<div class="col-6">
								<h4>Pilih Jasa Pengiriman</h4>
							</div>
							<div class="col-6">
								<div class="cf-radio-btns">
									<div class="cfr-item">
										<input type="radio" name="shipping" id="ship-1">
										<label for="ship-1">JNE</label>
									</div>
								</div>
							</div>
							<div class="col-6"></div>
							<div class="col-6">
								<div class="cf-radio-btns">
									<div class="cfr-item">
										<input type="radio" name="shipping" id="ship-2">
										<label for="ship-2">J&T</label>
									</div>
								</div>
							</div>
						</div>
						<div class="cf-title">Informasi Pembayaran</div>
						<!-- ul class="payment-list">
							<li>Paypal<a href="#"><img src="<?= base_url() ?>/assets/ecommerce/img/paypal.png" alt=""></a></li>
							<li>Credit / Debit card<a href="#"><img src="<?= base_url() ?>/assets/ecommerce/img/mastercart.png" alt=""></a></li>
						</ul> -->
						<div class="row shipping-btns">
							<div class="col-6">
								<h4>Pilih Bank</h4>
							</div>
							<div class="col-6">
								<div class="cf-radio-btns">
									<div class="cfr-item">
										<input type="radio" name="payment-1" id="payment-1">
										<label for="ship-1">BCA - XXXXXXXXX</label>
									</div>
								</div>
							</div>
							<div class="col-6"></div>
							<div class="col-6">
								<div class="cf-radio-btns">
									<div class="cfr-item">
										<input type="radio" name="payment-2" id="payment-2">
										<label for="ship-2">MANDIRI - XXXXXXXXX</label>
									</div>
								</div>
							</div>
						</div>
						<button type="submit" class="site-btn submit-order-btn">Bayar</button>
					</form>
				</div>
				<div class="col-lg-4 order-1 order-lg-2">
					<div class="checkout-cart">
						<h3>KERANJANG</h3>
						<div class="btn - btn-success">
							<?php 
								$grand_total = 0;
								if ($keranjang = $this->cart->contents()) {
									foreach ($keranjang as $item){
										$grand_total = $grand_total + $item['subtotal'];
									}
									echo "Total Belanja Anda : Rp. " . number_format($grand_total, 0, ',', '.');

									
								} else {
									echo "Keranjang Belanja Anda Masih Kosong";
								}
							 ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	