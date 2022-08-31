<div class="container"> 
  <head>  
      <title>Webslesson | <?php echo $title; ?></title>  
      <link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />  
  </head> 
    <div class="text-center">
          <h1> Anda Berhasil Login</h1>
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
                            <form class="user" methot="POST" action="<?= base_url('')?>">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id=""
                                        placeholder="no inv" name="no_inv" value="<?= set_value('fullname')?>">
                                        <?= form_error('no inv', '<small class="tex-danger pl-3">', '</small>')?>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id=""
                                        placeholder="nama barang" name="nama_barang" value="<?= set_value('fullname')?>">
                                        <?= form_error('nama barang', '<small class="tex-danger pl-3">', '</small>')?>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id=""
                                        placeholder="merk barang" name="merk_barang" value="<?= set_value('fullname')?>">
                                        <?= form_error('merk barang', '<small class="tex-danger pl-3">', '</small>')?>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id=""
                                        placeholder="harga" name="harga" value="<?= set_value('fullname')?>">
                                        <?= form_error('harga', '<small class="tex-danger pl-3">', '</small>')?>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id=""
                                        placeholder="spec" name="spec" value="<?= set_value('fullname')?>">
                                        <?= form_error('spec', '<small class="tex-danger pl-3">', '</small>')?>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Simpan
                                </button>
                                <hr>
                            </form>

                            <table class="table">
  <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">id barang</th>
      <th scope="col">no inv</th>
      <th scope="col">nama barang</th>
      <th scope="col">merk barang</th>
      <th scope="col">harga</th>
      <th scope="col">spec</th>
    </tr>
      <tr>
      <th scope="row">1</th>
      <td>123</td>
      <td>ssd</td>
      <td>abc</td>
      <td>500.000</td>
      <td>4</td>
    </tr>
  </thead>
</table>

                            <button>
                                <a class="text-center" class="small" href="<?= base_url('index.php/main/login'); ?>">longut </a>
                            </button> 
                            <button class="text-center">
                                <a class="text-center" class="small" href="<?= base_url('index.php/main/progres'); ?>"> Progres</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            </div>            
       </div>
    </div>
</div>
</div>

