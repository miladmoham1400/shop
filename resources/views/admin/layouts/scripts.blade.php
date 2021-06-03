

<!-- jQuery 3 -->
<script src="/admin/assets/vendor_components/jquery-3.3.1/jquery-3.3.1.js"></script>

<!-- jQuery UI 1.11.4 -->
<script src="/admin/assets/vendor_components/jquery-ui/jquery-ui.js"></script>

<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>

<!-- popper -->
<script src="/admin/assets/vendor_components/popper/dist/popper.min.js"></script>

<!-- date-range-picker -->
<script src="/admin/assets/vendor_components/moment/min/moment.min.js"></script>
<script src="/admin/assets/vendor_components/bootstrap-daterangepicker/daterangepicker.js"></script>

<!-- Bootstrap 4.0-->
<script src="/admin/assets/vendor_components/bootstrap/dist/js/bootstrap.js"></script>

<!-- ChartJS -->
<script src="/admin/assets/vendor_components/chart.js-master/Chart.min.js"></script>

<!-- Slimscroll -->
<script src="/admin/assets/vendor_components/jquery-slimscroll/jquery.slimscroll.js"></script>

<!-- FastClick -->
<script src="/admin/assets/vendor_components/fastclick/lib/fastclick.js"></script>

<!-- Morris.js charts -->
<script src="/admin/assets/vendor_components/raphael/raphael.min.js"></script>
<script src="/admin/assets/vendor_components/morris.js/morris.min.js"></script>

<!-- This is data table -->
<script src="/admin/assets/vendor_components/datatable/datatables.min.js"></script>

<!-- Superieur Admin App -->
<script src="js/template.js"></script>

<!-- Superieur Admin dashboard demo (This is only for demo purposes) -->
<script src="js/pages/dashboard.js"></script>

<!-- Superieur Admin for demo purposes -->
<script src="js/demo.js"></script>



@yield('script')
