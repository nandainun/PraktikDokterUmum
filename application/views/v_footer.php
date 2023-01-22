<!-- Footer -->
<footer class="content-footer footer bg-footer-theme">
    <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
        <div class="mb-2 mb-md-0">
            ©2022
            , by
            <a href="https://themeselection.com" target="_blank" class="footer-link fw-bolder">Nanda Ilhami</a>
        </div>
    </div>
</footer>
<!-- / Footer -->


<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->
<script src="<?= base_url(); ?>assets/vendor/libs/jquery/jquery.js"></script>
<script src="<?= base_url(); ?>assets/vendor/libs/popper/popper.js"></script>
<script src="<?= base_url(); ?>assets/vendor/js/bootstrap.js"></script>
<script src="<?= base_url(); ?>assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

<script src="<?= base_url(); ?>assets/vendor/js/menu.js"></script>
<!-- endbuild -->

<!-- Vendors JS -->
<script src="<?= base_url(); ?>assets/vendor/libs/apex-charts/apexcharts.js"></script>

<!-- Main JS -->
<script src="<?= base_url(); ?>assets/js/main.js"></script>

<!-- 3rd JS -->
<script src="<?= base_url(); ?>assets/js/dashboards-analytics.js"></script>

<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<!-- Include library Bootstrap Datepicker -->
<script src="<?= base_url(); ?>assets/libraries/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<!-- Include File JS Custom (untuk fungsi Datepicker) -->
<script type="text/javascript">
    $(document).ready(function() {
        $('.js-example-basic-single').select2();
    });
</script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#datatables').DataTable();
    });
</script>


<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>