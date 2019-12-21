<div class="container-fluid">
	<h3><i class="fas fa-edit">EDIT DATA PRODUK</i></h3>
	<?php foreach($products as $product) : ?>
		<form method="post" action="<?= base_url()  ?>/produk/update">
			<div class="for-group">
				<label>Nama</label>
				<input type="text" name="nama" class="form-contrl" value="<?= $product->nama ?>">

				<input type="hidden" name="id" class="form-contrl" value="<?= $product->id_produk ?>">
			</div>

			<div class="for-group">
				<label>Deskripsi</label>
				<input type="text" name="deskripsi" class="form-contrl" value="<?= $product->deskripsi ?>">
			</div>

			<div class="for-group">
				<label>Kategori</label>
				<input type="text" name="kategori" class="form-contrl" value="<?= $product->kategori ?>">
			</div>

			<div class="for-group">
				<label>Harga</label>
				<input type="text" name="harga" class="form-contrl" value="<?= $product->harga ?>">
			</div>

			<div class="for-group">
				<label>Stok</label>
				<input type="text" name="stok" class="form-contrl" value="<?= $product->stok ?>">
			</div>

			<button type="submit" class="btn btn-primary">
				Simpan
			</button>
		</form>
	<?php endforeach; ?>
</div>