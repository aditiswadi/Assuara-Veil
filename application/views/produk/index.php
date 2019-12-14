<div class="container-fluid">
	<button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah-produk"><i class="fas fa-plus"></i>Tambah Produk</button>

	<table class="table">
	  <thead>
	    <tr>
	      <th scope="col">No</th>
	      <th scope="col">Nama</th>
	      <th scope="col">kategori</th>
	      <th scope="col">Harga</th>
	      <th scope="col">stok</th>
	      <th colspan="3">Aksi</th>
	      <!-- <th scope="col">#</th> -->
	    </tr>
	  </thead>
	  <tbody>
	  	<?php $no=1; ?>
	  	<?php foreach ($products as $product) : ?>
	  	  <td><?= $no++ ?></td>
	  	  <td><?= $product['nama'] ?></td>
	  	  <td><?= $product['kategori'] ?></td>
	  	  <td><?= $product['harga'] ?></td>
	  	  <td><?= $product['stok'] ?></td>
	      <td>
	      	<a href="" class="btn badge-success btn-sm"><i class="fas fa-search-plus"></i></a>
            <a href="" class="btn badge-primary btn-sm"><i class="fas fa-edit"></i></a>
            <a href="" class="btn badge-danger btn-sm"><i class="fas fa-trash"></i></a>
	      </td>
	      <!-- <td><?= $product['gambar'] ?></td> -->
	    </tr>
		<?php endforeach; ?>
	  </tbody>
	</table>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah-produk" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Tambah Data Produk</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url() ?>/admin/produk/create" method="post" enctype="multipart/form-data">
        	<div class="form-group">
        		<label>Nama</label>
        		<input type="text" name="nama" class="form-control">
        	</div>
        	<div class="form-group">
        		<label>Deskripsi</label>
        		<input type="text" name="deskripsi" class="form-control">
        	</div>
        	<div class="form-group">
        		<label>Kategori</label>
        		<input type="text" name="kategori" class="form-control">
        	</div>
        	<div class="form-group">
        		<label>Harga</label>
        		<input type="text" name="harga" class="form-control">
        	</div>
        	<div class="form-group">
        		<label>Stok</label>
        		<input type="text" name="stok" class="form-control">
        	</div>
        	<div class="form-group">
        		<label>Gambar</label><br>
        		<input type="file" name="gambar" class="form-control">
        	</div>
        
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
		        <button type="submit" class="btn btn-primary">Simpan</button>
		      </div>
		    </form>
    </div>
  </div>
</div>




<!-- <section class="content">
    <div class="container">
        <div class="row">
        	<?php foreach ($products as $product) : ?>
        	<div class="col-m2">
				<div class="card ml-3" style="width: 16rem;">
					 <img src="<?= base_url() ?>/uploads/asg.jpg" class="card-img-top">
					 <div class="card-body">
					   <h2 class="card-title mb-1"><?= $product['nama']; ?></h2>
					 </div>
				</div>
          	</div>	
          	<?php endforeach; ?>
		</div>
	</div>
</section> -->