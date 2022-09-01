<div class="container">

    <head>
        <title>LOG-IT</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


    </head>
    <ul class="nav nav-pills">
        <li role="presentation" class="enabled"><a href="<?= base_url('index.php/main/progres'); ?>">Progres</a></li>
        <li role="presentation" class="enabled"><a href="<?= base_url('index.php/main/login'); ?>">logout</a></li>
    </ul>
    <div class="text-center">
        <div>
        </div>
    </div>

    <div class="container">
        <!-- Outer Row -->

        <div class="row justify-content-center">
            <div class="col">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col">
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
                                            <tr>
                                                <td>

                                                </td>
                                                <form class="user" method="POST" action="<?= base_url('index.php/input/input_barang'); ?>">
                                                    <td>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control form-control-user" id="" placeholder="no inv" name="no_inv" required>
                                                            <?= form_error('no inv', '<small class="tex-danger pl-3">', '</small>') ?>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control form-control-user" id="" placeholder="nama barang" name="nama_barang" required>
                                                            <?= form_error('nama barang', '<small class="tex-danger pl-3">', '</small>') ?>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control form-control-user" id="" placeholder="merk barang" name="merk_barang" required>
                                                            <?= form_error('merk barang', '<small class="tex-danger pl-3">', '</small>') ?>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control form-control-user" id="" placeholder="harga" name="harga" required>
                                                            <?= form_error('harga', '<small class="tex-danger pl-3">', '</small>') ?>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control form-control-user" id="" placeholder="spec" name="spec" required>
                                                            <?= form_error('spec', '<small class="tex-danger pl-3">', '</small>') ?>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                                            Simpan
                                                        </button>
                                                    </td>
                                                </form>
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
                                                        <div class="btn-group">
                                                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                Action <span class="caret"></span>
                                                            </button>
                                                            <ul class="dropdown-menu">
                                                                <li><a href="#">Action</a></li>
                                                                <li><a href="#">Another action</a></li>
                                                                <li><a href="#">Something else here</a></li>
                                                                <li role="separator" class="divider"></li>
                                                                <li><a href="#">Separated link</a></li>
                                                            </ul>
                                                        </div>
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
<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>