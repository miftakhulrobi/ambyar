<script>
    $('.message-item').click(function() {
        const id = $(this).attr('notif_id');
        $.ajax({
            url: '<?= base_url('notificationmember/open/') ?>' + id,
            type: 'GET',
            dataType: 'json',
            success: function(data) {

            }
        })
    })
</script>