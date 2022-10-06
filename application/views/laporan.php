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
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="text-center">
                <h2><?= $judul; ?></h2>
                <h4>Dari tanggal <?= $tgl_awal; ?> sampai dengan <?= $tgl_akhir; ?></h4>
            </div>
            <ul class="nav nav-pills">
                <li role="presentation" class="enabled"><a href="<?= base_url('index.php/main/filter_laporan'); ?>">Kembali ke Filter</a></li>
                <li role="presentation" class="enabled"><a id="export" href="#">Export to Excel</a></li>
            </ul>
            <hr>
            <div class="col">
                <table id="mytable" class="table table-striped">
                    <thead>
                        <tr>
                            <?php foreach ($column as $row) : ?>
                                <th><?php echo $row; ?></th>
                            <?php endforeach; ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($table->result_array() as $row) : ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <?php foreach ($fields as $col) : ?>
                                    <td><?= $row[$col] ?></td>
                                <?php endforeach; ?>
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
    <script src="<?php echo base_url(); ?>assets/js/table2excel.js"></script>
    <script type="text/javascript">
        $('#export').click(function() {
            $("#mytable").table2excel();
        });
    </script>
</body>

</html>