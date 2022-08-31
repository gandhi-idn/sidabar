<div class="container"> 
  <head>  
      <title>Webslesson | <?php echo $title; ?></title>  
      <link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />  
  </head> 
    <div class="text-center">
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
                                <h1 class="h4 text-gray-900 mb-4">Progres</h1>
                            </div>
                            <form class="user" methot="POST" action="<?= base_url('')?>">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id=""
                                        placeholder="id barang" name="id barang" value="<?= set_value('fullname')?>">
                                        <?= form_error('id barang', '<small class="tex-danger pl-3">', '</small>')?>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id=""
                                        placeholder="id bo" name="id bo" value="<?= set_value('fullname')?>">
                                        <?= form_error('id bo', '<small class="tex-danger pl-3">', '</small>')?>
                                </div>
                                <div class="form-group">
                                    <input type="date" class="form-control form-control-user" id=""
                                        placeholder="tgl masuk barang" name="tgl masuk barang" value="<?= set_value('fullname')?>">
                                        <?= form_error('tgl masuk barang', '<small class="tex-danger pl-3">', '</small>')?>
                                </div>
                                <div class="form-group">
                                    <input type="date" class="form-control form-control-user" id=""
                                        placeholder="tgl servis" name="tgl servis" value="<?= set_value('fullname')?>">
                                        <?= form_error('tgl servis', '<small class="tex-danger pl-3">', '</small>')?>
                                </div>
                                <div class="form-group">
                                    <input type="date" class="form-control form-control-user" id=""
                                        placeholder="tgl selesai" name="tgl_selesai" value="<?= set_value('fullname')?>">
                                        <?= form_error('tgl selesai', '<small class="tex-danger pl-3">', '</small>')?>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id=""
                                        placeholder="id status" name="id_status" value="<?= set_value('fullname')?>">
                                        <?= form_error('id status', '<small class="tex-danger pl-3">', '</small>')?>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Simpan
                                </button>
                                <hr>
                            </form>



<table class="table">
  <table class="table table-bordered table-dark">
  <thead>
    <tr>
      <th scope="col">id prog</th>
      <th scope="col">id barang</th>
      <th scope="col">id bo</th>
      <th scope="col">tgl masuk barang</th>
      <th scope="col">tgl servis</th>
      <th scope="col">tgl selesai</th>
      <th scope="col">id status</th>
    </tr>
      <tr>
      <th scope="row">1</th>
      <td>1</td>
      <td>1345</td>
      <td>09/08/2017</td>
      <td>09/08/2017</td>
      <td>09/08/2017</td>
      <td>rusak</td>
    </tr>
  </thead>
</table>
                            <button>
                                <a class="text-center" class="small" href="<?= base_url('index.php/main/Dashboard'); ?>">Dashboard</a>
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