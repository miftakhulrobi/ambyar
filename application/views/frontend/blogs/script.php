<script src="<?= base_url('frontend') ?>/js/ckeditor.js"></script>
<script>
    ClassicEditor
        .create(document.querySelector('#content'))
        .catch(error => {
            console.error(error);
        });

    let getblog = function() {
        $.ajax({
            url: '<?= base_url('blogs/getblog') ?>',
            type: 'GET',
            dataType: 'json',
            success: function(data) {
                let postblog = '';
                for (let i = 0; i < data.length; i++) {
                    postblog += `<article class="row blog_item">
                                <div class="col-md-3">
                                    <div class="blog_info text-right">
                                        <div class="post_tag">
                                            <a class="active" href="#">${data[i].categoriename},</a>
                                        </div>
                                        <ul class="blog_meta list">
                                            <li>
                                                <a href="#">${data[i].name}
                                                    <i class="lnr lnr-user"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">${data[i].created_at}
                                                    <i class="lnr lnr-calendar-full"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">${data[i].view} Views
                                                    <i class="lnr lnr-eye"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">${data[i].like} Likes
                                                    <i class="lnr lnr-thumbs-up"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="blog_post">
                                        <img src="<?= base_url('admin') ?>/assets/files/blog/${data[i].thumbnail}" alt="">
                                        <div class="blog_details">
                                            <a href="single-blog.html">
                                                <h2>${data[i].title}</h2>
                                            </a>
                                            <p>${data[i].content}</p>
                                            <a class="button button-blog" href="<?= base_url('blogs/singleblog/') ?>${data[i].blog_id}">Lihat Postingan</a>
                                        </div>
                                    </div>
                                </div>
                            </article>`;
                }
                $('#target').html(postblog);
            }
        })
    }

    getblog();

    $('#form-post-blog').submit(function(e) {
        e.preventDefault();

        $.ajax({
            url: '<?= base_url('blogs/store') ?>',
            type: 'POST',
            data: new FormData(this),
            processData: false,
            contentType: false,
            cache: false,
            async: false,
            success: function(data) {
                $('[name="title"]').val('');
                $('[name="content"]').val('');
                $('[name="thumbnail"]').val('');

                getblog();
                getcategorie();
                toastr.success("Konten anda berhasil di posting!");

            }
        })
    })

    let postpopuler = function() {
        $.ajax({
            url: '<?= base_url('blogs/postpopuler') ?>',
            type: 'GET',
            dataType: 'json',
            success: function(data) {
                let postblog = '';
                for (let i = 0; i < data.length; i++) {
                    postblog += `<div class="media post_item">
                                    <img width="50" src="<?= base_url('admin') ?>/assets/files/blog/${data[i].thumbnail}" alt="post">
                                    <div class="media-body">
                                        <a href="single-blog.html">
                                            <h3>${data[i].title}</h3>
                                        </a>
                                        <p>${data[i].created_at}</p>
                                    </div>
                                </div>`;
                }
                $('#target2').html(postblog);
            }
        })
    }
    postpopuler();

    let getcategorie = function() {
        $.ajax({
            url: '<?= base_url('blogs/getcategorie') ?>',
            type: 'GET',
            dataType: 'json',
            success: function(data) {
                let datacategorie = '';
                for (let i = 0; i < data.length; i++) {
                    datacategorie += `<li>
                                            <a href="#" class="d-flex justify-content-between">
                                                <p>${data[i].categoriename}</p>
                                                <p>${data[i].cblog}</p>
                                            </a>
                                        </li>`;
                }
                $('#target3').html(datacategorie);
            }
        })
    }
    getcategorie();

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