<!-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"> -->
<h4 class="card-title mt-3">KONFIGURASI</h4>
        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
    </div>
<div id="ngilang" class="mt-2">
    <?php echo $this->session->flashdata('alert', true) ?>
</div>

<div class="container mt-2">
    <div class="row">
    <div class="col col-12">
        <div class="card">
            <form action="<?= site_url('admin/konfigurasi/edit') ?>" method="post">
                <div class="modal-header">
                    <h4 class="modal-title">DATA KONFIGURASI</h4>
                </div>
                <div class="modal-body m-2 ">

                    <div class="row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Judul Website</label>
                        <!-- <div class="col-12"> -->
                        <input name="judul" type="text" class="form-control" value="<?= $konfig->judul_website; ?>">
                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Profile</label>
                        <!-- <div class="col-12"> -->
                        <textarea name="profil_website" class="form-control" value="<?= $konfig->profil_website; ?>"></textarea>
                    </div>

                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Instagram</label>
                        <!-- <div class="col-12"> -->
                        <input name="instagram" type="text" class="form-control" value="<?= $konfig->instagram; ?>">
                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Facebook</label>
                        <!-- <div class="col-12"> -->
                        <input name="facebook" type="text" class="form-control" value="<?= $konfig->facebook; ?>">
                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Email</label>
                        <!-- <div class="col-12"> -->
                        <input name="email" type="email" class="form-control" value="<?= $konfig->email; ?>">
                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Whatsapp</label>
                        <!-- <div class="col-12"> -->
                        <input name="no_wa" type="text" class="form-control" value="<?= $konfig->no_wa; ?>">
                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Alamat</label>
                        <!-- <div class="col-12"> -->
                        <input name="alamat" type="text" class="form-control" value="<?= $konfig->alamat; ?>">
                    </div>


                    <button type="submit" class="btn btn-primary">Tambahkan Kategori</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>