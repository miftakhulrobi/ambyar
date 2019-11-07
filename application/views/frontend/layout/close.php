<script>
    $('.card-subject__imgOverlay').click(function() {
        const video_id = $(this).attr('video_id');
        window.location = '<?= base_url('file/videodetail/') ?>' + video_id;
    })
</script>
</body>

</html>