<!-- General JS Scripts -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script> -->
<script src="<?= base_url('assets/admin/js/popper.js') ?>"></script>
<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->
<script src="<?= base_url('assets/admin/js/bootstrap4-3.min.js') ?>"></script>
<!-- <script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script> -->
<script src="<?= base_url('assets/admin/js/nicescroll.min.js') ?>"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script> -->
<script src="<?= base_url('assets/admin/js/moment.min.js') ?>"></script>
<script src="<?= base_url('assets/admin/js/stisla.js') ?>"></script>

<!-- JS Libraies -->
<!-- <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script> -->
<script src="<?= base_url('') ?>assets/admin/module/datatables/media/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url('') ?>assets/admin/module/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url('') ?>assets/admin/module/datatables.net-select-bs4/js/select.bootstrap4.min.js"></script>

<script src="<?= base_url('') ?>assets/admin/module/summernote/dist/summernote-bs4.js"></script>

<script src="<?= base_url('') ?>assets/admin/module/chocolat/dist/js/jquery.chocolat.min.js"></script>

<script src="<?= base_url('') ?>assets/admin/module/select2/dist/js/select2.full.min.js"></script>

<script src="<?= base_url('') ?>assets/admin/module/toastr/toastr.min.js"></script>

<script src="<?= base_url() ?>assets/admin/module/ckeditor/ckeditor.js"></script>

<!-- Template JS File -->
<script src="<?= base_url('assets/admin/js/scripts.js') ?>"></script>
<script src="<?= base_url('assets/admin/js/custom.js') ?>"></script>
<script src="<?= base_url('assets/admin/js/app.js') ?>"></script>

<!-- Page Specific JS File -->

<script>
    <?php if (isset($_SESSION['notif']) && $_SESSION['notif'] !== '') : ?>

        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })

        Toast.fire({
            icon: '<?php echo $_SESSION['notif']['status']; ?>',
            title: '<?php echo $_SESSION['notif']['title']; ?>'
        })
    <?php endif; ?>
</script>