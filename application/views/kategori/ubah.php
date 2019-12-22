<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Ubah Data Kategori
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id_kategori" value="<?= $kategori['id_kategori']; ?>">
                        
                        <div class="form-group">
                            <label for="kategori">KATEGORI</label>
                            <input type="text" name="kategori" class="form-control" id="kategori" value="<?= $kategori['nama_kategori']; ?>">
                            <small class="form-text text-danger"><?= form_error('nama_kategori'); ?></small>
                        </div>
            
                        <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>