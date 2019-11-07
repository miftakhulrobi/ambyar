<!-- <div class="login-footer-left">
    <p>2019 Copyright by <a href="" target="_blank" class="text-salmon"><b>Miftakhul Robi</b></a></p>
</div> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
    const success = '<?= $this->session->flashdata('success ') ?>';
    const error = '<?= $this->session->flashdata('error ') ?>';
    if (success) {
        toastr.success("<?= $this->session->flashdata('success ') ?>")
    }
    if (error) {
        toastr.error("<?= $this->session->flashdata('error ') ?>")
    }
</script>
</body>