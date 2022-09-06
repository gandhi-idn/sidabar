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
                <li role="presentation" class="enabled"><a href="<?= base_url('index.php/main/dashboard'); ?>">Dashboard</a></li>
                <li role="presentation" class="enabled"><a href="<?= base_url('index.php/main/login'); ?>">logout</a></li>
            </ul>
        </div>
    </nav>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Progres Barang</h1>
            </div>
            <hr>
            <form method="post" action="<?= base_url('index.php/input/input_progres'); ?>">
                <div class="row">
                    <div class="col-md-4">
                        <label>Pilih Barang</label>
                        <select name="id_barang" class="form-control" required>
                            <option></option>
                            <?php foreach ($barang->result_array() as $row) : ?>
                                <option value="<?= $row['id_barang'] ?>"><?= $row['nama_barang'] ?></option>
                            <?php endforeach; ?>
                        </select>
                        <label>Asal Barang</label>
                        <select name="id_bo" class="form-control" required>
                            <option></option>
                            <?php foreach ($bo->result_array() as $row) : ?>
                                <option value="<?= $row['id_bo'] ?>"><?= $row['nama_bo'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="comment">Keterangan BO:</label>
                            <textarea name="keterangan_bo" class="form-control" rows="4" required></textarea>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="comment">Keterangan Logistik:</label>
                            <textarea name="keterangan_log" class="form-control" rows="4" required></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Tanggal Masuk:</label>
                            <input name="tgl_masuk" type="date" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="sel1">Status</label>
                        <select name="id_status" class="form-control" disabled>
                            <option></option>
                            <?php foreach ($status->result_array() as $row) : ?>
                                <option value="<?= $row['id_status'] ?>"><?= $row['status'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Simpan</label>
                            <button type="submit" class="btn btn-primary form-control"><span class="glyphicon glyphicon-floppy-saved" aria-hidden="true"></span></button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <br>
        <hr>
        <div class="row">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">nama barang</th>
                        <th scope="col">merk barang</th>
                        <th scope="col">Dari BO</th>
                        <th scope="col">Status</th>
                        <th scope="col">Tindakan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($prog->result_array() as $value) : ?>
                        <tr>
                            <td class="hidden"><?= $value['id_prog'] ?></td>
                            <td><?= $i++ ?></td>
                            <td><?= $value['nama_barang'] ?></td>
                            <td><?= $value['merk_barang'] ?></td>
                            <td><?= $value['nama_bo'] ?></td>
                            <td><?= $value['status'] ?></td>
                            <td>

                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>