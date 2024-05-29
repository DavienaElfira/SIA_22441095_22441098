<div class="card mb-3">
    <div class="card-body">
        <form action="" method="post">
            <div class="row mb-3">
                <div class="col-md-4">
                    <label for="invoice" class="form-label">Invoice</label>
                    <input type="text" class="form-control" name="invoice">
                </div>
                <div class="col-md-4">
                    <label for="tanggal" class="form-label">Tanggal</label>
                    <input type="date" class="form-control" name="tanggal">
                </div>
                <div class="col-md-4">
                    <label for="barang" class="form-label">Barang</label>
                    <select name="barang" class="form-select">
                        <option value="1">Laptop Acer</option>
                        <option value="2">Komputer (PC)</option>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-4">
                    <label for="pelanggan" class="form-label">Pelanggan</label>
                    <select name="pelanggan" class="form-select">
                        <option value="1">PT Sejahtera</option>
                        <option value="2">CV Maju Bersama</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <label for="jumlah" class="form-label">Jumlah</label>
                    <input type="number" class="form-control" name="jumlah">
                </div>
                <div class="col-md-3">
                    <label for="harga" class="form-label">Harga</label>
                    <div class="input-group">
                        <span class="input-group-text">Rp.</span>
                        <input type="number" class="form-control" name="harga">
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="total" class="form-label">Total</label>
                    <div class="input-group">
                        <span class="input-group-text">Rp.</span>
                        <input type="number" class="form-control" name="total" disabled>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <label for="keterangan" class="form-label">Keterangan</label>
                    <textarea name="keterangan" class="form-control"></textarea>
                </div>
            </div>
            <hr class="text-secondary">
            <div class="text-end">
                <button type="reset" class="btn btn-secondary">Reset</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Data Penjualan</h3>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Invoice</th>
                        <th>Tanggal</th>
                        <th>Nama Barang</th>
                        <th>Pelanggan</th>
                        <th>Jumlah</th>
                        <th>Harga</th>
                        <th>Total</th>
                        <th>Keterangan</th>
                        <th><i class="bi bi-gear-fill"></i></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>PJ110324</td>
                        <td>11/03/2024</td>
                        <td>Laptop Acer</td>
                        <td>PT Sejahtera</td>
                        <td>3</td>
                        <td>Rp. 10.000.000,-</td>
                        <td>Rp. 30.000.000,-</td>
                        <td>Penjualan 3 unit laptop acer</td>
                        <td>
                            <a href="#editPenjualan" class="text-decoration-none" data-bs-toggle="modal"><i class="bi bi-pencil-square text-success"></i></a>
                            <a href="" class="text-decoration-none"><i class="bi bi-trash text-danger"></i></a>
                        </td>
                    </tr>
                    <!-- Data Penjualan lainnya -->
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="editPenjualan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <form action="" method="post">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Data Penjualan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Isi Form Edit Penjualan -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </div>
    </form>
</div>