<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://cdn.jsdelivr.net/npm/html5shiv@3.7.3/dist/html5shiv.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/respond.js@1.4.2/dest/respond.min.js"></script>
    <![endif]-->
    <nav class="navbar navbar-default">
        <div class="container">
            <ul class="nav nav-pills">
                <li role="presentation" class="enabled"><a href="<?= base_url('index.php/main/progres'); ?>">Progres</a></li>
                <li role="presentation" class="enabled"><a href="<?= base_url('index.php/main/login'); ?>">logout</a></li>
            </ul>
        </div>
    </nav>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Data Barang</h1>
            </div>
            <div class="col">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
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
                    </thead>
                    <tbody>
                        <?PHP $i = 1; ?>
                        <?php foreach ($table->result_array() as $row) : ?>
                            <tr>
                                <td class="hidden"><?= $row['id_barang'] ?></td>
                                <td><?= $i++ ?></td>
                                <td><?= $row['no_inv'] ?></td>
                                <td><?= $row['nama_barang'] ?></td>
                                <td><?= $row['merk_barang'] ?></td>
                                <td><?= $row['harga'] ?></td>
                                <td><?= $row['spec'] ?></td>
                                <td>
                                    <a class="btn btn-warning btn-user btn-block" href="#">Edit</a>
                                    <a class="btn btn-danger btn-user btn-block" href="#">Hapus<a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>