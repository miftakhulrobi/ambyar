<script src="<?= base_url('admin') ?>/assets/js/plugin/sweetalert/sweetalert.min.js"></script>
<script>
    let getmusic = function() {
        $.ajax({
            url: '<?= base_url('musicmember/getmusic') ?>',
            type: 'GET',
            dataType: 'json',
            success: function(data) {
                let datamusic = '';
                for (let i = 0; i < data.length; i++) {
                    datamusic += '<tr class="data-music">' +
                        '<td>' +
                        '<audio src="<?= base_url('admin') ?>/assets/files/music/' + data[i].audio + '" controls>' + '</audio>' +
                        '<br>' +
                        data[i].audio +
                        '</td>' +
                        '<td>' + data[i].created_at + '</td>' +
                        '<td>' +
                        '<a onclick="destroy(' + data[i].music_id + ')" class="btn btn-success btn-sm hapus">Hapus</a>' +
                        '</td>' +
                        '</tr>';
                }
                $('#target').html(datamusic);
            }
        })
    }
    getmusic();

    $('#form-store-music').submit(function(e) {
        e.preventDefault();

        $.ajax({
            url: '<?= base_url('musicmember/store') ?>',
            type: 'POST',
            data: new FormData(this),
            processData: false,
            contentType: false,
            cache: false,
            async: false,
            success: function(data) {
                getmusic();
                $('[name="audio"]').val('');
                $('#create').modal('hide');
                toastr.success("Berhasil mengupload audio!");
            }
        })
    })

    function destroy(id) {
        swal({
            title: 'Anda Yakin?',
            text: "Menghapus data ini!",
            type: 'warning',
            buttons: {
                cancel: {
                    visible: true,
                    text: 'Batal!',
                    className: 'btn btn-danger'
                },
                confirm: {
                    text: 'Lanjut!',
                    className: 'btn btn-success'
                }
            }
        }).then((willDelete) => {
            if (willDelete) {
                $.ajax({
                    url: "<?= base_url('musicmember/destroy/') ?>" + id,
                    type: 'GET',
                    dataType: 'json',
                    success: function(data) {
                        getmusic();
                        swal("Data berhasil di hapus!", {
                            icon: "success",
                            buttons: {
                                confirm: {
                                    className: 'btn btn-success'
                                }
                            }
                        });
                    }
                })
            } else {
                swal("Batal menghapus data!", {
                    buttons: {
                        confirm: {
                            className: 'btn btn-success'
                        }
                    }
                });
            }
        });
    }
</script>