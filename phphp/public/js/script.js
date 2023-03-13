$(function() {

    $('.tombolTambahData').on('click', function() {
        $('#formModalLabel').html('Tambah Data Siswa');
        $('.modal-footer button[type=submit]').html('Tambah Data');
        $('#nama').val('');
        $('#no_hp').val('');
        $('#email').val('');
        $('#jurusan').val('');
        $('#id').val('');
    });


    $('.tampilModalUbah').on('click', function() {
        
        $('#formModalLabel').html('Ubah Data Siswa');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost/phphp/public/siswa/ubah');

        const id = $(this).data('id');
        
        $.ajax({
            url: 'http://localhost/phphp/public/siswa/getubah',
            data: {id : id},
            method: 'post',
            //dataType: 'json',
            success: function(data) {
                console.log(data);
               // $('#nama').val(data.nama);
                //$('#no_hp').val(data.no_hp);
                //$('#email').val(data.email);
                //$('#jurusan').val(data.jurusan);
                //$('#id').val(data.id);
            }
        });
        
    });

});