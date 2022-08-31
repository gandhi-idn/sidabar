<div class="container">

    <head>
        <title>Webslesson | <?php echo $title; ?></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    </head>
    <ul class="nav nav-pills">
        <li role="presentation" class="enabled"><a href="#">Dashboard</a></li>
        <li role="presentation" class="enabled"><a href="<?= base_url('index.php/main/progres'); ?>">Progres</a></li>
    </ul>
    <div class="text-center">
        <div>
        </div>
    </div>

    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Data Barang</h1>
                                    </div>
                                    <form class="user" method="POST" action="<?= base_url('index.php/input/input_barang'); ?>">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="" placeholder="no inv" name="no_inv" required>
                                            <?= form_error('no inv', '<small class="tex-danger pl-3">', '</small>') ?>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="" placeholder="nama barang" name="nama_barang" required>
                                            <?= form_error('nama barang', '<small class="tex-danger pl-3">', '</small>') ?>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="" placeholder="merk barang" name="merk_barang" required>
                                            <?= form_error('merk barang', '<small class="tex-danger pl-3">', '</small>') ?>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="" placeholder="harga" name="harga" required>
                                            <?= form_error('harga', '<small class="tex-danger pl-3">', '</small>') ?>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="" placeholder="spec" name="spec" required>
                                            <?= form_error('spec', '<small class="tex-danger pl-3">', '</small>') ?>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Simpan
                                        </button>
                                        <hr>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Data Barang</h1>
                                    </div>
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">id barang</th>
                                                <th scope="col">no inv</th>
                                                <th scope="col">nama barang</th>
                                                <th scope="col">merk barang</th>
                                                <th scope="col">harga</th>
                                                <th scope="col">spec</th>
                                                <th scope="col">Tindakan</th>
                                            </tr>
                                            <?php foreach ($table->result_array() as $row) : ?>
                                                <tr>
                                                    <td><?= $row['id_barang'] ?></td>
                                                    <td><?= $row['no_inv'] ?></td>
                                                    <td><?= $row['nama_barang'] ?></td>
                                                    <td><?= $row['merk_barang'] ?></td>
                                                    <td><?= $row['harga'] ?></td>
                                                    <td><?= $row['spec'] ?></td>
                                                    <td>
                                                        <button type="button" class="btn button-default"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>Edit</button>
                                                        <button type="button" class="btn button-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span>Hapus</button>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>