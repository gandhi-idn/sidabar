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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://cdn.jsdelivr.net/npm/html5shiv@3.7.3/dist/html5shiv.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/respond.js@1.4.2/dest/respond.min.js"></script>
    <![endif]-->
    <nav class="navbar navbar-default">
        <div class="container">
            <!DOCTYPE html>
            <html>
            <style>
                input[type=text],
                body {
                    height: 100vh;
                    background-image: url(https://i.ibb.co/T48r2Tn/Untitled.png);
                }

                [type=submit]:hover {
                    background-color: #45a049;
                }

                table {
                    color: black;
                    background: white;
                }

                table,
                th,
                td {
                    border: 1px solid;
                }

                h4 {
                    position: absolute;
                    top: 50%;
                    left: 50%;
                    transform: translate(-50%, -50%);
                    background-color: white;
                    border-radius: 10px;
                }
            </style>
            <ul class="nav nav-pills">
                <li role="presentation" class="enabled"><a href="<?= base_url('index.php/main/dashboard'); ?>">Dashboard</a></li>
                <li role="presentation" class="enabled"><a href="<?= base_url('index.php/main/filter_laporan'); ?>">Laporan</a></li>
                <li role="presentation" class="enabled"><a href="<?= base_url('index.php/main/login'); ?>">logout</a></li>
            </ul>
        </div>
    </nav>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="text-center">
                <h2>Filter Laporan</h2>
            </div>
            <div class="col">
                <div class="panel panel-success">
                    <div class="panel-body">
                        <div class="row-col">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist" id="myTab">
                                <li class="active"><a href="#previousIssue" role="tab" data-toggle="tab">Laporan barang Masuk</a></li>
                                <li><a href="#currentIssue" role="tab" data-toggle="tab">Laporan barang Keluar</a></li>
                                <li class="service"><a href="#service" role="tab" data-toggle="tab">Laporan barang service</a></li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="previousIssue">
                                    <br>
                                    <form method="post" action="">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="comment">Dari Tanggal:</label>
                                                    <input type="date" name="tgl_awal" class="form-control" rows="4" required>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="comment">Sampai Tanggal:</label>
                                                    <input type="date" name="tgl_akhir" class="form-control" rows="4" required>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="comment">Proses</label>
                                                <button type="submit" class="form-control btn btn-primary"><span class="glyphicon glyphicon-arrow-right"></span></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane" id="currentIssue">
                                    <br>
                                    <form method="post" action="">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="comment">Dari Tanggal:</label>
                                                    <input type="date" name="tgl_awal" class="form-control" rows="4" required>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="comment">Sampai Tanggal:</label>
                                                    <input type="date" name="tgl_akhir" class="form-control" rows="4" required>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="comment">Proses</label>
                                                <button type="submit" class="form-control btn btn-primary"><span class="glyphicon glyphicon-arrow-right"></span></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane service" id="service">
                                    <br>
                                    <form method="post" action="">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="comment">Tanggal Service :</label>
                                                    <input type="date" name="tgl_awal" class="form-control" rows="4" required>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="comment">Tanggal Selesai:</label>
                                                    <input type="date" name="tgl_akhir" class="form-control" rows="4" required>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="comment">Proses</label>
                                                <button type="submit" class="form-control btn btn-primary"><span class="glyphicon glyphicon-arrow-right"></span></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
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