<script>
    // LIke
    let getcountlike = function() {
        $.ajax({
            url: '<?= base_url('blogs/getcountlike/' . $blog->blog_id) ?>',
            type: 'GET',
            dataType: 'json',
            success: function(data) {
                $('.count-like-blog').text(data.like);
            }
        })
    }
    getcountlike();

    let getlikeblog = function() {
        $.ajax({
            url: '<?= base_url('blogs/getlikeblog/' . $blog->blog_id) ?>',
            type: "POST",
            dataType: 'json',
            success: function(data) {
                if (data) {
                    $('.btn-like-this-blog').css('display', 'none');
                    $('.btn-unlike-this-blog').css('display', 'inline');
                } else {
                    $('.btn-like-this-blog').css('display', 'inline');
                    $('.btn-unlike-this-blog').css('display', 'none');
                }
            }
        })
    }
    getlikeblog();

    $('.btn-like-this-blog').click(function(e) {
        e.preventDefault();
        const id = $(this).attr('blog_id');
        $.ajax({
            url: '<?= base_url('blogs/likethisblog') ?>',
            type: 'POST',
            data: {
                id: id
            },
            dataType: 'json',
            success: function() {
                getlikeblog();
                getcountlike();
                toastr.success("Saya menyukai ini!");
            }
        })
    })

    $('.btn-unlike-this-blog').click(function(e) {
        e.preventDefault();
        const id = $(this).attr('blog_id');
        $.ajax({
            url: '<?= base_url('blogs/unlikethisblog') ?>',
            type: 'POST',
            data: {
                id: id
            },
            dataType: 'json',
            success: function() {
                getlikeblog();
                getcountlike();
                toastr.success("Saya batal menyukai ini!");
            }
        })
    })
</script>