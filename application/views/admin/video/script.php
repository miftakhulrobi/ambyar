<script src="<?= base_url('admin') ?>/assets/js/plugin/datatables/datatables.min.js"></script>
<script src="<?= base_url('admin') ?>/assets/js/plugin/sweetalert/sweetalert.min.js"></script>
<script>
    $(document).ready(function() {
        $('#basic-datatables').DataTable({});

        $('.hapus').click(function(e) {
            const id = $(this).attr('video_id');
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
                    window.location = "<?= base_url('video/destroy/') ?>" + id;
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
    })
</script>