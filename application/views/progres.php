<!doctype html>
<html class="fixed">

<head>

    <!-- Basic -->
    <meta charset="UTF-8">

    <title>Dashboard | JSOFT Themes | JSOFT-Admin</title>
    <meta name="keywords" content="HTML5 Admin Template" />
    <meta name="description" content="JSOFT Admin - Responsive HTML5 Template">
    <meta name="author" content="JSOFT.net">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <!-- Web Fonts  -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/font-awesome/css/font-awesome.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/magnific-popup/magnific-popup.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/bootstrap-datepicker/css/datepicker3.css" />

    <!-- Specific Page Vendor CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/jquery-ui/css/ui-lightness/jquery-ui-1.10.4.custom.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/morris/morris.css" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/stylesheets/theme.css" />

    <!-- Skin CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/stylesheets/skins/default.css" />

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/stylesheets/theme-custom.css">

    <!-- Head Libs -->
    <script src="<?php echo base_url(); ?>assets/vendor/modernizr/modernizr.js"></script>

</head>

<body>
    <section class="body">

        <!-- start: header -->
        <header class="header">
            <div class="logo-container">
                <a href="../" class="logo">
                    <img src="<?php echo base_url(); ?>assets/images/logo.png" height="35" alt="JSOFT Admin" />
                </a>
                <div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
                    <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
                </div>
            </div>

            <!-- start: search & user box -->
            <div class="header-right">

                <span class="separator"></span>

                <span class="separator"></span>

                <div id="userbox" class="userbox">
                    <a href="#" data-toggle="dropdown">
                        <figure class="profile-picture">
                            <img src="<?php echo base_url(); ?>assets/images/!logged-user.jpg" alt="Joseph Doe" class="img-circle" data-lock-picture="<?php echo base_url(); ?>assets/images/!logged-user.jpg" />
                        </figure>
                        <div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@JSOFT.com">
                            <span class="name"><?= $this->session->userdata('username'); ?></span>
                            <span class="role">administrator</span>
                        </div>

                        <i class="fa custom-caret"></i>
                    </a>

                    <div class="dropdown-menu">
                        <ul class="list-unstyled">
                            <li class="divider"></li>
                            <li>
                                <a role="menuitem" tabindex="-1" href="<?php echo base_url('index.php/main/logout'); ?>"><i class="fa fa-power-off"></i> Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- end: search & user box -->
        </header>
        <!-- end: header -->

        <div class="inner-wrapper">
            <!-- start: sidebar -->
            <aside id="sidebar-left" class="sidebar-left">

                <div class="sidebar-header">
                    <div class="sidebar-title">
                        Navigation
                    </div>
                    <div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
                        <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
                    </div>
                </div>

                <div class="nano">
                    <div class="nano-content">
                        <nav id="menu" class="nav-main" role="navigation">
                            <ul class="nav nav-main">
                                <li>
                                    <a href="<?= base_url('index.php/main/enter'); ?>">
                                        <i class="fa fa-home" aria-hidden="true"></i>
                                        <span>Dashboard</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= base_url('index.php/main/input_barang'); ?>">
                                        <i class="fa fa-database" aria-hidden="true"></i>
                                        <span>Input Barang</span>
                                    </a>
                                </li>
                                <li class="nav-active">
                                    <a href="#">
                                        <!-- <span class="pull-right label label-primary">182</span> -->
                                        <i class="fa fa-cog" aria-hidden="true"></i>
                                        <span>Progres</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= base_url('index.php/main/filter_laporan'); ?>">
                                        <i class="fa fa-copy" aria-hidden="true"></i>
                                        <span>Laporan</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>

                        <hr class="separator" />
                    </div>

                </div>

            </aside>
            <!-- end: sidebar -->

            <section role="main" class="content-body">
                <header class="page-header">
                    <h2>Progres Barang</h2>

                    <div class="right-wrapper pull-right">
                        <ol class="breadcrumbs">
                            <li>
                                <a href="#">
                                    <i class="fa fa-gear"></i>
                                </a>
                            </li>
                            <li><span>Progres Barang</span></li>
                        </ol>

                        <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
                    </div>
                </header>
                <div class="row">
                    <div class="text-center">
                        <h2>Progres Barang</h2>
                    </div>
                    <form method="post" action="<?= base_url('index.php/input/input_progres'); ?>">
                        <div class="row">
                            <div class="col-md-4">
                                <input type="hidden" name="id_progres" type="text" class="form-control">
                                <input type="hidden" name="id_barang_ed" type="text" class="form-control">
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
                                    <input type="date" name="tgl_masuk" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Simpan</label>
                                    <button type="submit" class="btn btn-primary form-control"><span class="glyphicon glyphicon-floppy-saved" aria-hidden="true"></span></button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <hr>
                    <div class="row">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist" id="myTab">
                            <li class="active"><a href="#previousIssue" role="tab" data-toggle="tab">Barang Baru masuk</a></li>
                            <li><a href="#currentIssue" role="tab" data-toggle="tab">Sedang Service</a></li>
                            <li><a href="#nextIssue" role="tab" data-toggle="tab">Sudah Selesai</a></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="previousIssue">
                                <br>
                                <table class="table table-bordered table-striped mb-none">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">nama barang</th>
                                            <th scope="col">merk barang</th>
                                            <th scope="col">Dari BO</th>
                                            <th scope="col">Tanggal Masuk Barang</th>
                                            <th scope="col">Keterangan BO</th>
                                            <th scope="col">Ketreangan Logistik</th>
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
                                                <td><?= $value['tgl_masuk_barang'] ?></td>
                                                <td><?= $value['keterangan_bo'] ?></td>
                                                <td><?= $value['keterangan_log'] ?></td>
                                                <td class="actions-hover actions-fade">
                                                    <a class="btn btn-xs btn-info" href="<?= base_url() ?>index.php/input/update_progres/<?= $value['id_prog'] ?>"><i class="fa fa-wrench" aria-hidden="true"></i></a>
                                                    <a class="btn btn-xs btn-warning" href="javascript:void(0)" onclick="edit_prog('<?= $value['id_prog'] ?>')"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                                    <a class="btn btn-xs btn-danger" href="javascript:void(0)" onclick="hapus_prog('<?= $value['id_prog'] ?>')"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane" id="currentIssue">
                                <br>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">nama barang</th>
                                            <th scope="col">merk barang</th>
                                            <th scope="col">Dari BO</th>
                                            <th scope="col">Tanggal Service</th>
                                            <th scope="col">Keterangan BO</th>
                                            <th scope="col">Ketreangan Logistik</th>
                                            <th scope="col">Tindakan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; ?>
                                        <?php foreach ($service->result_array() as $value) : ?>
                                            <tr>
                                                <td class="hidden"><?= $value['id_prog'] ?></td>
                                                <td><?= $i++ ?></td>
                                                <td><?= $value['nama_barang'] ?></td>
                                                <td><?= $value['merk_barang'] ?></td>
                                                <td><?= $value['nama_bo'] ?></td>
                                                <td><?= $value['tgl_service'] ?></td>
                                                <td><?= $value['keterangan_bo'] ?></td>
                                                <td><?= $value['keterangan_log'] ?></td>
                                                <td class="actions-hover actions-fade">
                                                    <a class="btn btn-xs btn-info" href="<?= base_url() ?>index.php/input/update_progres_2/<?= $value['id_prog'] ?>"><i class="fa fa-check" aria-hidden="true"></i></a>
                                                    <a class="btn btn-xs btn-danger" href="javascript:void(0)" onclick="hapus_prog('<?= $value['id_prog'] ?>')"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane" id="nextIssue">
                                <br>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">nama barang</th>
                                            <th scope="col">Dari BO</th>
                                            <th scope="col">Tanggal Masuk</th>
                                            <th scope="col">Keterangan BO</th>
                                            <th scope="col">Tanggal Selesai</th>
                                            <th scope="col">Ketreangan Final</th>
                                            <th scope="col">Tindakan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; ?>
                                        <?php foreach ($selesai->result_array() as $value) : ?>
                                            <tr>
                                                <td class="hidden"><?= $value['id_prog'] ?></td>
                                                <td><?= $i++ ?></td>
                                                <td><?= $value['nama_barang'] ?></td>
                                                <td><?= $value['nama_bo'] ?></td>
                                                <td><?= $value['tgl_masuk_barang'] ?></td>
                                                <td><?= $value['keterangan_bo'] ?></td>
                                                <td><?= $value['tgl_selesai'] ?></td>
                                                <td><?= $value['keterangan_final'] ?></td>
                                                <td class="actions-hover actions-fade">
                                                    <a class="btn btn-xs btn-danger" href="javascript:void(0)" onclick="hapus_prog('<?= $value['id_prog'] ?>')"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end: page -->
            </section>
        </div>

        <aside id=" sidebar-right" class="sidebar-right">
            <div class="nano">
                <div class="nano-content">
                    <a href="#" class="mobile-close visible-xs">
                        Collapse <i class="fa fa-chevron-right"></i>
                    </a>

                    <div class="sidebar-right-wrapper">

                        <div class="sidebar-widget widget-calendar">
                            <h6>Upcoming Tasks</h6>
                            <div data-plugin-datepicker data-plugin-skin="dark"></div>
                        </div>
                    </div>
                </div>
            </div>
        </aside>
    </section>

    <!-- Vendor -->
    <script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/nanoscroller/nanoscroller.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/magnific-popup/magnific-popup.js"></script>
    <script src="<?php echo base_url(); ?>/vendor/jquery-placeholder/jquery.placeholder.js"></script>

    <!-- Specific Page Vendor -->
    <script src="<?php echo base_url(); ?>assets/vendor/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/jquery-ui-touch-punch/jquery.ui.touch-punch.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/jquery-appear/jquery.appear.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/jquery-easypiechart/jquery.easypiechart.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/flot/jquery.flot.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/flot-tooltip/jquery.flot.tooltip.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/flot/jquery.flot.pie.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/flot/jquery.flot.categories.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/flot/jquery.flot.resize.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/jquery-sparkline/jquery.sparkline.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/raphael/raphael.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/morris/morris.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/gauge/gauge.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/snap-svg/snap.svg.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/liquid-meter/liquid.meter.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/jqvmap/jquery.vmap.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/jqvmap/data/jquery.vmap.sampledata.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/jqvmap/maps/jquery.vmap.world.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/jqvmap/maps/continents/jquery.vmap.africa.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/jqvmap/maps/continents/jquery.vmap.asia.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/jqvmap/maps/continents/jquery.vmap.australia.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/jqvmap/maps/continents/jquery.vmap.europe.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/jqvmap/maps/continents/jquery.vmap.north-america.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/jqvmap/maps/continents/jquery.vmap.south-america.js"></script>

    <!-- Theme Base, Components and Settings -->
    <script src="<?php echo base_url(); ?>assets/javascripts/theme.js"></script>

    <!-- Theme Custom -->
    <script src="<?php echo base_url(); ?>assets/javascripts/theme.custom.js"></script>

    <!-- Theme Initialization Files -->
    <script src="<?php echo base_url(); ?>assets/javascripts/theme.init.js"></script>


    <!-- Examples -->
    <script src="<?php echo base_url(); ?>assets/javascripts/dashboard/examples.dashboard.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('[name="id_barang"]').prop("disabled", false);
        })

        function edit_prog(id_prog) {
            $.ajax({
                type: "GET",
                url: "<?php echo site_url('index.php/main/edit_progres'); ?>/" + id_prog,
                dataType: "JSON",

                success: function(data) {
                    $.each(data, function(id_prog, id_barang, id_bo, keterangan_log, keterangan_bo, tgl_masuk_barang, tgl_masuk) {
                        $('[name="id_progres"]').val(data.id_prog);
                        $('[name="id_barang_ed"]').val(data.id_barang);
                        $('[name="id_barang"]').prop("disabled", true);
                        $('[name="id_bo"]').val(data.id_bo);
                        $('[name="keterangan_bo"]').val(data.keterangan_bo);
                        $('[name="keterangan_log"]').val(data.keterangan_log);
                        $('[name="tgl_masuk"]').val(data.tgl_masuk_barang);

                    })
                }

            })
        }

        function hapus_prog(id_prog) {
            var del = confirm("Yakin Hapus data progres barang ini??");
            if (del == true) {
                $.ajax({
                    type: "POST",
                    url: "<?php echo site_url('index.php/input/hapus_prog'); ?>/" + id_prog,
                    dataType: "JSON",

                    success: function(data) {
                        if (data.status) {
                            alert("Data Progres Barang Terhapus!!!");
                            location.reload();
                        } else {
                            alert("Ada yang salah, cek database Lokal!!");
                            location.reload();
                        }
                    }
                })
            }
        }
    </script>
</body>

</html>