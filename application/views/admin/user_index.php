<!-- Button trigger modal -->

<button type="button" class="btn btn-primary mt-1" data-toggle="modal" data-target="#exampleModal">
    Tambah Data User
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Masukkan Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= site_url('admin/user/simpan') ?>" method="post">
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-10">
                            <input type="text" name="username" class="form-control" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input name="nama" type="text" class="form-control" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input name="password" type="text" class="form-control" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Level</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="level" id="">
                                <option value="Admin">Admin</option>
                                <option value="User">User</option>
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </form>
            </div>
        </div>
    </div>
</div>

<h4 class="card-title mt-3">DATA PENGGUNA</h4>
<a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
</div>


<div id="ngilang" class="mt-2">
    <?php echo $this->session->flashdata('alert', true) ?>
</div>
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Data</h4>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
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
                                    <th scope="col">Userame</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">level</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($user as $aa) { ?>
                                    <tr>
                                        <th scope="row"><?= $no++; ?></th>
                                        <td><?= $aa['username'] ?></td>
                                        <td><?= $aa['nama'] ?></td>
                                        <td><?= $aa['level'] ?></td>
                                        <td>
                                            <a class="btn btn-success " class="fonticon-wrap icon-shadow icon-shadow-primary" type="button" data-toggle="modal" data-target="#editModal<?= $aa['id_user'] ?>">
                                                <i class="la la-edit">Edit</i>
                                            </a>
                                            <a class="btn  btn-danger" class="fonticon-wrap icon-shadow icon-shadow-primary" onclick="return confirm('Apakah anda yakin untuk menghapus User ini??')" href=" <?= site_url('admin/user/hapus/' . $aa['id_user']) ?>">
                                            <i class="la la-eraser">Hapus</i>
                                        </a>
                                            <!-- Modal -->
                                            <div class="modal fade" id="editModal<?= $aa['id_user'] ?>" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Perbarui User</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="<?= site_url('admin/user/edit') ?>" method="post">
                                                                <input type="hidden" name="id_user" value="<?= $aa['id_user'] ?>">
                                                                <div class="row mb-3">
                                                                    <label for="inputEmail3" class="col-sm-3 col-form-label">Username</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" name="username" class="form-control" value="<?= $aa['username'] ?>" readonly>
                                                                    </div>
                                                                </div>
                                                                <div class="row mb-3">
                                                                    <label for="inputPassword3" class="col-sm-3 col-form-label">Nama</label>
                                                                    <div class="col-sm-10">
                                                                        <input name="nama" type="text" class="form-control" value="<?= $aa['username'] ?>">
                                                                    </div>
                                                                </div>

                                                                <button type="submit" class="btn btn-primary">Perbarui</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
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