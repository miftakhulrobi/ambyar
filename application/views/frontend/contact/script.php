<script>
    $(document).ready(function() {
        $('[name="name"]').keyup(function() {
            if (this.value.length < 5) {
                $('.name-danger').text('Minimal 5 karakter!');
                $('.name-success').text('');
            } else {
                $('.name-danger').text('');
                $('.name-success').text('Nice');
            }
        })
        $('[name="email"]').keyup(function() {
            if (this.value.length < 15) {
                $('.email-danger').text('Minimal 15 karakter!');
                $('.email-success').text('');
            } else {
                $('.email-danger').text('');
                $('.email-success').text('Nice');
            }
        })
        $('[name="phone"]').keyup(function() {
            if (this.value.length < 11) {
                $('.phone-danger').text('Minimal 11 angka!');
                $('.phone-success').text('');
            } else {
                $('.phone-danger').text('');
                $('.phone-success').text('Nice');
            }
        })

        $('.btn-send-message').click(function() {
            const name = $('[name="name"]').val();
            const email = $('[name="email"]').val();
            const phone = $('[name="phone"]').val();
            const message = $('[name="message"]').val();

            if (name == '' || email == '' || phone == '' || message == '') {
                toastr.error('Inputan harus di isi!');
            } else {
                $.ajax({
                    url: '<?= base_url('contact/store') ?>',
                    type: 'POST',
                    data: {
                        name: name,
                        email: email,
                        phone: phone,
                        message: message
                    },
                    dataType: 'json',
                    success: function() {
                        $('[name="name"]').val('');
                        $('[name="email"]').val('');
                        $('[name="phone"]').val('');
                        $('[name="message"]').val('');

                        toastr.success('Pesan Terkirim!');
                    }
                })
            }
        })
    })
</script>