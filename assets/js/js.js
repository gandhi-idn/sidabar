function edit(id_barang) {
    $.ajax({
        url: "<?php echo base_url()?>/index.php/input/edit_barang/" + id_barang,
        method:"POST",
        dataType: "JSON",
        contentType: "application/json",
        success: function (query) 
        {                            
            alert(query.nama_barang);                        
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('ERROR!!');
        }
    })
}

