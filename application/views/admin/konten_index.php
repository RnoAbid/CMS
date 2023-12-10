<!-- Button trigger modal -->


<button type="button" class="btn btn-primary mt-1" data-toggle="modal" data-target="#exampleModal">
    Tambah Konten
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Masukkan Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= site_url('admin/konten/simpan') ?>" method="post" enctype="multipart/form-data">

                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Judul</label>
                        <div class="col-sm-10">
                            <input name="judul" type="text" class="form-control" placeholder="Judul" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Kategori</label>
                        <div class="col-sm-10">
                            <select name="id_kategori" class="form-control">
                                <?php foreach ($kategori as $aa) { ?>
                                    <option value="<?= $aa['id_kategori'] ?>"> <?= $aa['nama_kategori'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Keterangan</label>
                        <div class="col-sm-10">
                            <textarea name="keterangan" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Foto</label>
                        <div class="col-sm-10">
                            <input type="file" name="foto" class="form-control" accept="image/png,image/jpeg,image/jpeg">
                        </div>
                    </div>


                    <button type="submit" class="btn btn-primary">Tambahkan Konten</button>
                </form>
            </div>
        </div>
    </div>
</div>

<h4 class="card-title mt-3">DAFTAR KONTEN</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
</div>


<div id="ngilang" class="">
    <?php echo $this->session->flashdata('alert', true) ?>
</div>
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Data</h4>
                    <!-- <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a> -->

                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                            <!-- <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li> -->
                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                            <!-- <li><a data-action="close"><i class="ft-x"></i></a></li> -->
                        </ul>
                    </div>
                </div>
                <div class="card-content collapse show">

                    <div class="table-responsive">
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Judul</th>
                                    <th scope="col">Kategori Konten</th>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Kreator</th>
                                    <th scope="col">Foto</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($konten as $aa) { ?>
                                    <tr>
                                        <th scope="row"><?= $no++; ?></th>
                                        <td><?= $aa['judul'] ?></td>
                                        <td><?= $aa['nama_kategori'] ?></td>
                                        <td><?= $aa['tanggal'] ?></td>
                                        <td><?= $aa['nama'] ?></td>
                                        <td>
                                            <a href="<?= base_url('assets/upload/konten/' . $aa['foto']) ?>" target="_blank">
                                                <i class="ficon ft-search"></i>Lihat Foto
                                            </a>
                                        </td>
                                        <td>
                                            <a class=" btn btn-success" class="fonticon-wrap icon-shadow icon-shadow-primary" type="button" class="btn btn-primary mt-1" data-toggle="modal" data-target="#basickontenmodal<?= $aa['id_konten']; ?>"> <i class="la la-edit">Edit</i>
                                            </a>
                                            <a class="btn btn-danger" class="fonticon-wrap icon-shadow icon-shadow-primary" onclick="return confirm('Apakah anda yakin untuk menghapus konten ini??')" href=" <?= site_url('admin/konten/hapus/' . $aa['foto']) ?>"><i class="la la-eraser">Hapus</i></a>

                                            <!-- Modal -->
                                            <div class="modal fade" id="basickontenmodal<?= $aa['id_konten']; ?>" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="editkonten"><?= $aa['judul'] ?></h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <form action="<?= site_url('admin/konten/update') ?>" method="post" enctype="multipart/form-data" >
                                                        <input type="hidden" name='id_konten' value="<?= $aa['id_konten']; ?>">
                                                            <div class="modal-body">
                                                                <input type="hidden" name="nama_foto" value="<?= $aa['foto'] ?>">

                                                                <div class="row mb-3">
                                                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Judul</label>
                                                                    <div class="col-sm-10">
                                                                        <input name="judul" type="text" class="form-control" value="<?= $aa['judul'] ?>" placeholder="Judul" required>
                                                                    </div>
                                                                </div>
                                                                <div class="row mb-3">
                                                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Kategori</label>
                                                                    <div class="col-sm-10">
                                                                        <select name="id_kategori" class="form-control">
                                                                            <?php foreach ($kategori as $uu) { ?>
                                                                                <?php if ($uu['id_kategori'] == $aa['id_kategori']) {
                                                                                    echo "selected";
                                                                                } ?>
                                                                                <option value="<?= $uu['id_kategori'] ?>"> <?= $uu['nama_kategori'] ?></option>
                                                                            <?php } ?>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="row mb-3">
                                                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Keterangan</label>
                                                                    <div class="col-sm-10">
                                                                        <textarea name="keterangan" class="form-control"><?= $aa['keterangan'] ?></textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="row mb-3">
                                                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Foto</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="file" name="foto" class="form-control" accept="image/png,image/jpeg">
                                                                    </div>
                                                                </div>


                                                                <button type="submit" class="btn btn-primary">Perbarui Konten</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                    </div>
                    </tr>
                <?php } ?>
                </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>


</div>
</div>