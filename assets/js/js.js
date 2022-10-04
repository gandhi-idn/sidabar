function edit(){
    
    var id=$(this).attr('value');
    $.ajax({
        type : "GET",
        url : "<?php echo site_url('index.php/input/edit_barang');?>",
        dataType : "JSON",
        data : {id:id},
            success: function (data) {
                $.each(data, function (id_barang, nama_barang,no_inv,kode_alternatif,merk_barang,harga,spec) {
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


