<h4 class="card-title mt-3">SARAN</h4>
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
                    <h4 class="card-title">DAFTAR SARAN</h4>
                    <!-- <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a> -->

                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <a class="btn btn-danger" class="fonticon-wrap icon-shadow icon-shadow-primary" onclick="return confirm('Apakah anda yakin untuk menghapus konten ini??')" href=" <?= site_url('admin/saran/hapussemua/' . $aa['id_saran']) ?>"><i class="la la-eraser">Hapus</i></a>
                        </ul>
                    </div>
                </div>
                <div class="card-content collapse show">

                    <div class="table-responsive">
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($saran as $aa) { ?>
                                    <tr>
                                        <th scope="row"><?= $no++; ?></th>
                                        <td><?= $aa['nama'] ?></td>
                                        <td><?= $aa['email'] ?></td>
                                        <td><?= $aa['tanggal'] ?></td>

                                        <td>
                                            <a class=" btn btn-success" class="fonticon-wrap icon-shadow icon-shadow-primary" type="button" class="btn btn-primary mt-1" data-toggle="modal" data-target="#basickontenmodal<?= $aa['id_saran']; ?>"> <i class="la la-edit">Lihat Saran</i>
                                            </a>
                                            <a class="btn btn-danger" class="fonticon-wrap icon-shadow icon-shadow-primary" onclick="return confirm('Apakah anda yakin untuk menghapus konten ini??')" href=" <?= site_url('admin/saran/hapus/' . $aa['id_saran']) ?>"><i class="la la-eraser">Hapus</i></a>

                                            <!-- Modal -->
                                            <div class="modal fade" id="basickontenmodal<?= $aa['id_saran']; ?>" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <form action="<?= site_url('admin/konten/update') ?>" method="post" enctype="multipart/form-data">
                                                            <div class="modal-body">

                                                                <div class="row mb-3">
                                                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Saran</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" class="form-control" value="<?= $aa['isi'] ?>" placeholder="Judul" required>
                                                                    </div>
                                                                </div>

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