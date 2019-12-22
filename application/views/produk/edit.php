<!-- <div class="container-fluid">
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
</div> -->

<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Ubah Data Produk
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id_produk" value="<?= $products['id_produk']; ?>">
                        
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control" id="nama" value="<?= $products['nama']; ?>">
                            <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                        </div>

                         <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            <input type="text" name="deskripsi" class="form-control" id="deskripsi" value="<?= $products['deskripsi']; ?>">
                            <small class="form-text text-danger"><?= form_error('deskripsi'); ?></small>
                        </div>

                         <div class="form-group">
                            <label for="kategori">Kategori</label>
                            <input type="text" name="kategori" class="form-control" id="kategori" value="<?= $products['kategori']; ?>">
                            <small class="form-text text-danger"><?= form_error('kategori'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <input type="text" name="harga" class="form-control" id="harga" value="<?= $products['harga']; ?>">
                            <small class="form-text text-danger"><?= form_error('harga'); ?></small>
                        </div>

                         <div class="form-group">
                            <label for="stok">Stok</label>
                            <input type="text" name="stok" class="form-control" id="stok" value="<?= $products['stok']; ?>">
                            <small class="form-text text-danger"><?= form_error('stok'); ?></small>
                        </div>

                        <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>