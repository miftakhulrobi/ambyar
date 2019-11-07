<script>
    $(document).ready(function() {
        $('.col-md-8').css('opacity', 0);

        $('.btn-edit-profile').click(function() {
            $('.col-md-8').css('opacity', 1);
            $('.col-md-12').addClass('col-md-4');
            $('.col-md-12').removeClass('col-md-12');
        })
    })
</script>