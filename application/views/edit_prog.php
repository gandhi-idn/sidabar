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
                    body{
                    background-image: url(https://i.ibb.co/T48r2Tn/Untitled.png);
                    }
                    h4{
                        background-color: white;
                        border-radius: 10px;
                        }
                    input{
                        background-color: white;
                    }
                </style>
            <ul class="nav nav-pills">
                <li role="presentation" class="enabled"><a href="<?= base_url('index.php/main/progres'); ?>">Kembali ke Progres</a></li>
            </ul>
        </div>
    </nav>
</head>

<body>
    <div class="container">
        <div class="row-col jumbotron">                               
            <div class="text-center">
                <h2 class="text-gray-900 mb-4">Progres Barang Keluar</h2>
            </div>
            <hr>
            <form method="post" action="<?= base_url('index.php/input/input_progres'); ?>">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <?php foreach ($progres->result_array() as $value) : ?>
                                <input name="id_prog" type="hidden" class="form-control" value="<?= $value['id_prog'] ?>">
                            <?php endforeach; ?>
                            <label>Status Final:</label>
                            <?php foreach ($status->result_array() as $value) : ?>
                                <input name="status" type="text" class="form-control" value="<?= $value['status'] ?>" disabled>
                            <?php endforeach; ?>
                        </div>
                        <div class="form-group">
                            <label>Tanggal Final:</label>
                            <input name="tgl_masuk" type="date" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="comment">Keterangan Final IT:</label>
                            <textarea name="keterangan_final" class="form-control" rows="5" required></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
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
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>