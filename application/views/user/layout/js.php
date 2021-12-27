<!-- Vendor JS Files -->
<script src="<?= base_url('assets/vendor/purecounter/purecounter.js') ?>"></script>
<script src="<?= base_url('assets/vendor/aos/aos.js') ?>"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script> -->
<script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<script src="<?= base_url('assets/vendor/glightbox/js/glightbox.min.js') ?>"></script>
<script src="<?= base_url('assets/vendor/isotope-layout/isotope.pkgd.min.js') ?>"></script>
<script src="<?= base_url('assets/vendor/swiper/swiper-bundle.min.js') ?>"></script>
<script src="<?= base_url('assets/vendor/php-email-form/validate.js') ?>"></script>

<script src="<?= base_url('') ?>assets/vendor/izitoast/dist/js/iziToast.min.js"></script>


<!-- Template Main JS File -->
<script src="<?= base_url('assets/js/main.js') ?>"></script>

<script>
    $("#regis-submit").click(function() {
        iziToast.success({
            title: 'Success!',
            message: 'Silahkan cek email anda untuk mengetahui informasi lebih lengkap',
            position: 'topRight'
        });

        $('#regis-member').modal('hide');
    });
</script>