<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css">

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
                <li role="presentation" class="enabled"><a href="<?= base_url('index.php/main/filter_laporan'); ?>">Laporan</a></li>
                <li role="presentation" class="enabled"><a href="<?= base_url('index.php/main/login'); ?>">logout</a></li>
            </ul>
        </div>
    </nav>
</head>

<body>
    <div class="container">
        <div class="row-col jumbotron">
            <!DOCTYPE html>
            <html>
            <style>
                body {
                    height: 100vh;
                    background-image: url(https://i.ibb.co/T48r2Tn/Untitled.png);

                }
            </style>
            <div class="text-center">
                <h2 class=" text-gray-900 mb-4">Data Barang</h2>
            </div>
            <div class="col">
                <form class="user" method="POST" action="<?= base_url('index.php/input/input_barang'); ?>">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Nomor Inventaris</label>
                                <input type="text" class="form-control" placeholder="no inv" name="no_inv" id="inv" required>
                            </div>
                            <div class="form-group">
                                <label>Nama Barang</label>
                                <input type="text" class="form-control" placeholder="nama barang" name="nama_barang" id="nama" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Merk Barang</label>
                                <input type="text" class="form-control" placeholder="merk barang" name="merk_barang" id="merk" required>
                            </div>
                            <div class="form-group">
                                <label>Harga</label>
                                <input type="text" class="form-control" placeholder="harga" name="harga" id="harga" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Spec</label>
                                <input type="text" class="form-control" placeholder="spec" name="spec" id="spec" required>
                            </div>
                            <label>.</label>
                            <button type="submit" class="btn btn-primary form-control">
                                Simpan
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <br>
            <div class="row">
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
                        </thead>
                        <tbody>
                            <?PHP $i = 1; ?>
                            <?php foreach ($table->result_array() as $row) : ?>
                                <tr>
                                    <td class="hidden"><?= $row['id_barang'] ?></td>
                                    <td><?= $i++ ?></td>
                                    <td id="t_inv"><?= $row['no_inv'] ?></td>
                                    <td id="t_nama"><?= $row['nama_barang'] ?></td>
                                    <td id="t_merk"><?= $row['merk_barang'] ?></td>
                                    <td id="t_harga"><?= $row['harga'] ?></td>
                                    <td id="t_spec"><?= $row['spec'] ?></td>
                                    <td>
                                        <a class="btn btn-warning btn-user btn-block" id="edit" href="#">Edit</a>
                                        <a class="btn btn-danger btn-user btn-block" href="#">Hapus<a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>