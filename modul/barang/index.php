<div class="card mb-3">
    <div class="card-body">
<<<<<<< HEAD
        <from action="" method="post">
            <div class="row">
                <div class="mb-3 col-md-6">
                    <label for="nama_barang" class="form-label">Nama Barang</label>
                    <input type="text" class="form-control" name="nama_barang">
</div>
        <div class="mb-3 col-md-6">
            <label for="harga_beli" class="form-label">Harga Beli</label>
                <input type="number" class="form-control" name="harga_beli">
</div>
</row>
            <div class="row">
                <div class="mb-3 col-md-6">
                    <label for="harga_jual" class="form-label">Harga Jual</label>
                    <input type="number" class="form-control" name="harga_jual">
</div>
        <div class="mb-3 col-md-6">
            <label for="stok" class="form-label">Stok</label>
                <input type="number" class="form-control" name="stok">
    </div>
</div>
<hr>
<div class="row">
<div class="col text-end">
    <button class="btn btn-secondary" type="reset">Reset</button>
    <button class="btn btn-primary" type="submit">Simpan</button>
</div>
</div>
</form>
</div>
</div>
=======
        <form action="" method="post">
            <div class="row">
                <div class="mb-3 col-md-6">
                    <label for="nama_barang" class="form-label">Nama barang</label>
                    <input type="text" class="form-control" name="nama_barang">
                </div>
                <div class="mb-3 col-md-6">
                    <label for="harga_beli" class="form-label">Harga beli</label>
                    <input type="number" class="form-control" name="harga_beli">
                </div>
            </div>
            <div class="row">
                <div class="mb-3 col-md-6">
                    <label for="harga_jual" class="form-label">Harga jual</label>
                    <input type="number" class="form-control" name="harga_jual">
                </div>
                <div class="mb-3 col-md-6">
                    <label for="stok" class="form-label">Stok</label>
                    <input type="number" class="form-control" name="stok">
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col text-end">
                    <button class="btn btn-secondary" type="reset">Reset</button>
                    <button class="btn btn-primary" type="submit">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>

>>>>>>> 3685a77bdaceeae07c47d1c192b3fb7df21e961c
<div class="card">
    <div class="card-header">
        <h3>Data Barang</h3>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Barang</th>
                        <th>Harga beli</th>
                        <th>Harga jual</th>
                        <th>Stok</th>
<<<<<<< HEAD
                        <th><i class="bi bi-gear-fill"></i></th>
=======
                        <th>Action</th>
>>>>>>> 3685a77bdaceeae07c47d1c192b3fb7df21e961c
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Laptop ASUS</td>
                        <td>Rp. 10.000.000</td>
                        <td>Rp. 12.000.000</td>
                        <td>5</td>
                        <td>
<<<<<<< HEAD
                            <a href="#editBarang" class="text-decoration-none" data-bs-toggle="modal">
                                <i class="bi bi-pencil-square text-success"></i>
                            </a>
                            <a href="" class="text-decoration-none">
                                <i class="bi bi-trash text-danger"></i>
                            </a>
                        </td>
                    </tr>
                    <!-- Modal -->
                    <div class="modal fade" id="editBarang" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Edit Barang</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label class="form-label" for="nama_barang">Barang</label>
                                        <input type="text" class="form-control" name="nama_barang" value="Laptop ASUS">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="harga_beli">Harga beli</label>
                                        <input type="number" class="form-control" name="harga_beli" value="10000000">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="harga_jual">Harga jual</label>
                                        <input type="number" class="form-control" name="harga_jual" value="12000000">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="stok">Stok</label>
                                        <input type="number" class="form-control" name="stok" value="5">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Simpan</button>
                                </div>
                            </div>
                        </div>
                    </div>
=======
                            <a href="#editBarang" class="btn btn-success" data-bs-toggle="modal"><i class="bi bi-pencil-square"></i> Edit</a>
                            <a href="#" class="btn btn-danger"><i class="bi bi-trash"></i> Delete</a>
                        </td>
                    </tr>
>>>>>>> 3685a77bdaceeae07c47d1c192b3fb7df21e961c
                    <tr>
                        <td>2</td>
                        <td>Monitor Samsung</td>
                        <td>Rp. 5.000.000</td>
                        <td>Rp. 6.000.000</td>
                        <td>10</td>
                        <td>
<<<<<<< HEAD
                            <a href="#editBarang" class="text-decoration-none" data-bs-toggle="modal">
                                <i class="bi bi-pencil-square text-success"></i>
                            </a>
                            <a href="" class="text-decoration-none">
                                <i class="bi bi-trash text-danger"></i>
                            </a>
=======
                            <a href="#editBarang" class="btn btn-success" data-bs-toggle="modal"><i class="bi bi-pencil-square"></i> Edit</a>
                            <a href="#" class="btn btn-danger"><i class="bi bi-trash"></i> Delete</a>
>>>>>>> 3685a77bdaceeae07c47d1c192b3fb7df21e961c
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
<<<<<<< HEAD
</div>
=======
</div>

<!-- Edit Modal -->
<div class="modal fade" id="editBarang" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <form action="" method="post">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Data Barang</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="edit_nama_barang" class="form-label">Nama Barang</label>
                        <input type="text" class="form-control" id="edit_nama_barang" name="edit_nama_barang">
                    </div>
                    <div class="mb-3">
                        <label for="edit_harga_beli" class="form-label">Harga Beli</label>
                        <input type="number" class="form-control" id="edit_harga_beli" name="edit_harga_beli">
                    </div>
                    <div class="mb-3">
                        <label for="edit_harga_jual" class="form-label">Harga Jual</label>
                        <input type="number" class="form-control" id="edit_harga_jual" name="edit_harga_jual">
                    </div>
                    <div class="mb-3">
                        <label for="edit_stok" class="form-label">Stok</label>
                        <input type="number" class="form-control" id="edit_stok" name="edit_stok">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </form>
</div>
>>>>>>> 3685a77bdaceeae07c47d1c192b3fb7df21e961c
