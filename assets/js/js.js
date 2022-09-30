$("#edit").on('click', function () {
    var id = $(this).val();
    console.log(id);
$.ajax({
            url : "<?php echo site_url('index.php/input/edit_barang')?>/" + id,
            type: "POST",
            dataType: "JSON",
            success: function(query)
            {
                let data = query;
                $('#inv').text(data.no_inv);
                $('#nama').text(data.nama_barang);
                $('#merk').text(data.merk_barang);
                $('#harga').text(data.harga_barang);
                $('#spec').text(data.spec);
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Mengambil data bermasalah!!');
            }
        });
    
})

