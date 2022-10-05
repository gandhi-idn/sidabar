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
                                <li class="nav-active">
                                    <a href="#">
                                        <i class="fa fa-database" aria-hidden="true"></i>
                                        <span>Input Barang</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= base_url('index.php/main/progres'); ?>">
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
                    <h2>Input Data Barang</h2>

                    <div class="right-wrapper pull-right">
                        <ol class="breadcrumbs">
                            <li>
                                <a href="=#">
                                    <i class="fa fa-database"></i>
                                </a>
                            </li>
                            <li><span>Input Data Barang</span></li>
                        </ol>

                        <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
                    </div>
                </header>
                <div class="row">
                    <div class="text-center">
                        <h2 class=" text-gray-900 mb-4">Data Barang</h2>
                    </div>
                    <div class="col">
                        <form class="user" method="POST" action="<?= base_url('index.php/input/input_barang'); ?>">
                            <div class="row">
                                <div class="col-md-4">
                                    <input type="hidden" class="form-control" name="id_barang" id="id_barang">
                                    <div class="form-group">
                                        <label>Nomor Inventaris</label>
                                        <input type="text" class="form-control" placeholder="no inv" name="no_inv" id="inv" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Kode Alternatif</label>
                                        <input type="text" class="form-control" placeholder="Kode Alternatif" name="kode" id="kode" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Merk Barang</label>
                                        <input type="text" class="form-control" placeholder="merk barang" name="merk_barang" id="merk" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Barang</label>
                                        <input type="text" class="form-control" placeholder="Nama Barang" name="nama_barang" id="nama" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Spec</label>
                                        <input type="text" class="form-control" placeholder="spec" name="spec" id="spec" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Harga</label>
                                        <input type="text" class="form-control" placeholder="harga" name="harga" id="harga" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">.</label>
                                        <button type="submit" class="btn btn-primary form-control">
                                            Simpan
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                            <section class="panel">
                                <header class="panel-heading">

                                </header>
                                <div class="panel-body">
                                    <table class="table table-bordered table-striped mb-none" id="datatable-default">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Nomor inv</th>
                                                <th scope="col">Kode Alternatif</th>
                                                <th scope="col">Nama Barang</th>
                                                <th scope="col">Merk Barang</th>
                                                <th scope="col">Harga</th>
                                                <th scope="col">Spec</th>
                                                <th scope="col">Tindakan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?PHP $i = 1; ?>
                                            <?php foreach ($table->result_array() as $row) : ?>
                                                <tr>
                                                    <td><?= $i++ ?></td>
                                                    <td><?= $row['no_inv'] ?></td>
                                                    <td><?= $row['kode_alternatif'] ?></td>
                                                    <td><?= $row['nama_barang'] ?></td>
                                                    <td><?= $row['merk_barang'] ?></td>
                                                    <td><?= $row['harga'] ?></td>
                                                    <td><?= $row['spec'] ?></td>
                                                    <td class="actions-hover actions-fade">
                                                        <a class="btn btn-sm btn-warning" href="javascript:void(0)" onclick="edit('<?= $row['id_barang'] ?>')" name="edit"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                                        <a class="btn btn-sm btn-danger" href="javascript:void(0)" onclick="hapus('<?= $row['id_barang'] ?>')"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </section>
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
        function edit(id_barang) {
            $.ajax({
                type: "GET",
                url: "<?php echo site_url('index.php/input/edit_barang'); ?>/" + id_barang,
                dataType: "JSON",

                success: function(data) {
                    $.each(data, function(id_barang, nama_barang, no_inv, kode_alternatif, merk_barang, harga, spec) {
                        $('[name="id_barang"]').val(data.id_barang);
                        $('[name="no_inv"]').val(data.no_inv);
                        $('[name="kode"]').val(data.kode_alternatif);
                        $('[name="nama_barang"]').val(data.nama_barang);
                        $('[name="merk_barang"]').val(data.merk_barang);
                        $('[name="harga"]').val(data.harga);
                        $('[name="spec"]').val(data.spec);
                    })
                }

            })
        }

        function hapus(id_barang) {
            var del = confirm("Yakin Hapus data barang ini??");
            if (del == true) {
                $.ajax({
                    type: "POST",
                    url: "<?php echo site_url('index.php/input/hapus_barang'); ?>/" + id_barang,
                    dataType: "JSON",

                    success: function(data) {
                        if (data.status) {
                            alert("Data Barang Terhapus!!!");
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