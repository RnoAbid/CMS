</div>
<div class="container mt-1">
    <h4 class="card-title mt-2">GALERI</h4>
    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
    <div class="row">
        <div class="card col-12">
            <form action="<?= site_url('admin/galeri/simpan') ?>" method="post" enctype="multipart/form-data">
                <div class="modal-header">
                    <h4 class="modal-title">DATA GALERI</h4>
                </div>
                <div class="modal-body m-2">

                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Judul</label>
                        <div class="col-sm-10">
                            <input name="judul" type="text" class="form-control" placeholder="Judul" required>
                        </div>
                    </div>
                    <div>
                        <div class="row mb-3">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Foto</label>
                            <div class="col-sm-10">
                                <input type="file" name="foto" class="form-control" accept="image/png,image/jpeg,image/jpeg">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary mt-2">Tambahkan Galeri</button>
                    </div>
            </form>
        </div>
    </div>
</div>






<div id="ngilang" class="">
    <?php echo $this->session->flashdata('alert', true) ?>
</div>

<?php foreach ($galeri as $aa) { ?>
    <div class="card">
        <img class="card-img-top" src="<?= base_url('assets/upload/galeri/' . $aa['foto']) ?>">
        <div class="card-body">
            <h5 class="card-title"><?= $aa['judul'] ?></h5>
            <a class="btn btn-danger" class="fonticon-wrap icon-shadow icon-shadow-primary" onclick="return confirm('Apakah anda yakin untuk menghapus Foto ini??')" href=" <?= site_url('admin/galeri/hapus/' . $aa['foto']) ?>">
                <i class="la la-eraser">Hapus</i>
            </a>

        </div>
    </div>
<?php } ?>