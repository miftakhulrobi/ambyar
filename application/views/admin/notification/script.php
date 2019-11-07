<script src="<?= base_url('admin') ?>/assets/js/plugin/sweetalert/sweetalert.min.js"></script>
<script>
    $('.message-item').click(function() {
        const id = $(this).attr('notif_id');
        $.ajax({
            url: '<?= base_url('notification/show/') ?>' + id,
            type: 'GET',
            dataType: 'json',
            success: function(data) {
                $('.message-name').text(data.name);
                $('.message-email').text(data.email);
                $('.message-phone').text(data.created_at);
            }
        })
    })

    $('.delete-all-message').click(function(e) {
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
                window.location = "<?= base_url('message/destroyall') ?>";
                swal("Data berhasil di hapus!", {
                    icon: "success",
                    buttons: {
                        confirm: {
                            className: 'btn btn-success'
                        }
                    }
                });
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
    })
</script>