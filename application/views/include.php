<!--=== CSS ===-->

<!-- Bootstrap -->
<link href="<?php echo base_url('assets/template/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url('assets/custom/custom.css'); ?>" rel="stylesheet" type="text/css" />

<!-- jQuery UI -->
<!--<link href="plugins/jquery-ui/jquery-ui-1.10.2.custom.css" rel="stylesheet" type="text/css" />-->
<!--[if lt IE 9]>
<link rel="stylesheet" type="text/css" href="plugins/jquery-ui/jquery.ui.1.10.2.ie.css"/>
<![endif]-->

<!-- Theme -->
<link href="<?php echo base_url('assets/template/css/main.css'); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url('assets/template/css/plugins.css'); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url('assets/template/css/responsive.css'); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url('assets/template/css/icons.css'); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url('assets/template/plugins/animate/animate.css'); ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url('assets/template/plugins/toastr/toastr.min.css'); ?>" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="<?php  echo base_url('assets/template/css/fontawesome/font-awesome.min.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/template/css/fontawesome4/css/font-awesome.min.css'); ?>">
<!--<link rel="stylesheet" href="--><?php //echo base_url('assets/plugins/datetimepicker/css/bootstrap-datetimepicker.min.css'); ?><!--">-->

<link rel="stylesheet" href="<?php echo base_url('assets/plugins/bootstrap-toggle/css/bootstrap-toggle.min.css'); ?>">
<!--[if IE 7]>
<link rel="stylesheet" href="assets/css/fontawesome/font-awesome-ie7.min.css">
<![endif]-->

<!--[if IE 8]>
<link href="assets/css/ie8.css" rel="stylesheet" type="text/css" />
<![endif]-->
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>

<link rel="stylesheet" href="<?php echo base_url('assets/datepicter/css/bootstrap-datetimepicker.min.css'); ?>">

<!-- Check Box -->
<link rel="stylesheet" href="<?php echo base_url('assets/checkbox/checkbox.css'); ?>">

<link rel="stylesheet" href="<?php echo base_url('assets/summernote/summernote.css'); ?>">

<style media="screen">
    .project-switcher {
        background-color : #0f1f4b;
    }
    .dropdown-menu li a:hover {
        background: #0f1f4b;
    }
    #ui-datepicker-div {
        z-index : 1041 !important;
    }
    #sidebar ul#nav ul.sub-menu li.current a {
        color: #ffffff;
        background: #083f8882;
    }
    #sidebar ul#nav ul.sub-menu li.current a i {
        color: #ffffff;
    }
    #sidebar ul#nav > li.current {
        background: #083f8894;
    }
    #sidebar ul#nav > li.current > a {
        border-right: 10px solid #b30011;
    }
    #sidebar ul#nav > li.current > a , #sidebar ul#nav > li.current > a > .fa {
        color: #ffffff;
        text-shadow : none;
    }
    #sidebar ul#nav li a:hover {
        background: #083f8814;
    }
    .theme-dark #content {
        background-color : #ffffff;
    }
    /*.dropdown-menu {*/
        /*min-width: 100%;*/
    /*}*/
    .left-margin {
        margin-left: 5px;
    }
    .right-margin,.margin-right {
        margin-right: 5px;
    }
    .td-center, .th-center , .tr-center {
        text-align: center;
    }
    .head-center th {
        text-align: center;
    }
    /* Untuk datatable */
    .filter-prodi {
        width: 250px;
        float: right;
        margin-right: 10px;
    }
    h3.heading-small {
        border-left: 15px solid #ff9800;
        padding-left: 10px;
        margin-bottom: 15px;
        font-weight: bold;
    }
    /* Add by Adhi 20180702 */
    .btn-convert { background-color: hsl(145, 62%, 68%) !important;
        background-repeat: repeat-x; filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#cdf3dd", endColorstr="#7adfa4");
        /*background-image: -khtml-gradient(linear, left top, left bottom, from(#cdf3dd), to(#7adfa4));*/
        background-image: -moz-linear-gradient(top, #cdf3dd, #7adfa4); background-image: -ms-linear-gradient(top, #cdf3dd, #7adfa4); background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #cdf3dd), color-stop(100%, #7adfa4)); background-image: -webkit-linear-gradient(top, #cdf3dd, #7adfa4); background-image: -o-linear-gradient(top, #cdf3dd, #7adfa4); background-image: linear-gradient(#cdf3dd, #7adfa4); border-color: #7adfa4 #7adfa4 hsl(145, 62%, 63%); color: #333 !important; text-shadow: 0 1px 1px rgba(255, 255, 255, 0.33); -webkit-font-smoothing: antialiased; }
    .ui-autocomplete {
        display: block;
        position: absolute;
        z-index: 1000;
        cursor: default;
        padding: 0;
        margin-top: 2px;
        list-style: none;
        background-color: #ffffff;
        border: 1px solid #ccc;
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        border-radius: 5px;
        -webkit-box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        -moz-box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        width: auto !important;
        min-width: 115px !important;
    }
    .ui-autocomplete > li {
        padding: 3px 10px;
    }
    .ui-autocomplete > li.ui-menu-item a {
        /*font-weight: bold;*/
        color:#333;
        text-decoration: none;
    }
    .ui-autocomplete > li.ui-menu-item:hover {
        background: #083f88;
        color: #FFFFFF;
    }
    .ui-autocomplete > li.ui-menu-item:hover a {
        color: #FFFFFF;
    }
    .ui-helper-hidden-accessible {
        display: block;
    }
   .table-responsive {
             min-height: .01%;
             overflow-x: auto;
  }
    .daterangepicker .ranges {
        width: 250px;
    }
    .daterangepicker .ranges .input-mini {
        width : 110px !important;
    }
    .toast-top-right {
        top: 50% !important;
        right: 50% !important;
        left: 50% !important;
        bottom: 50% !important;
    }
    .panel-primary>.panel-heading {
        border-radius: 0px;
    }
</style>

<!--=== JavaScript ===-->
<script type="text/javascript" src="<?php echo base_url('assets/template/js/libs/jquery-1.10.2.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/template/plugins/jquery-ui/jquery-ui-1.10.2.custom.min.js'); ?>"></script>

<script type="text/javascript" src="<?php echo base_url('assets/template/bootstrap/js/bootstrap.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/template/js/libs/lodash.compat.min.js'); ?>"></script>

<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
<script src="assets/js/libs/html5shiv.js"></script>
<![endif]-->

<!-- Smartphone Touch Events -->
<script type="text/javascript" src="<?php echo base_url('assets/template/'); ?>plugins/touchpunch/jquery.ui.touch-punch.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/template/'); ?>plugins/event.swipe/jquery.event.move.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/template/'); ?>plugins/event.swipe/jquery.event.swipe.js"></script>

<!-- General -->
<script type="text/javascript" src="<?php echo base_url('assets/template/');?>js/libs/breakpoints.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/template/'); ?>plugins/respond/respond.min.js"></script> <!-- Polyfill for min/max-width CSS3 Media Queries (only for IE8) -->
<script type="text/javascript" src="<?php echo base_url('assets/template/'); ?>plugins/cookie/jquery.cookie.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/template/'); ?>plugins/slimscroll/jquery.slimscroll.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/template/'); ?>plugins/slimscroll/jquery.slimscroll.horizontal.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/template/'); ?>plugins/toastr/toastr.min.js"></script>

<!-- Page specific plugins -->
<!-- Charts -->
<!--[if lt IE 9]>
<script type="text/javascript" src="plugins/flot/excanvas.min.js"></script>
<![endif]-->
<script type="text/javascript" src="<?php echo base_url('assets/template/'); ?>plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- <script type="text/javascript" src="<?php echo base_url('assets/template/'); ?>plugins/flot/jquery.flot.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/template/'); ?>plugins/flot/jquery.flot.tooltip.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/template/'); ?>plugins/flot/jquery.flot.resize.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/template/'); ?>plugins/flot/jquery.flot.time.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/template/'); ?>plugins/flot/jquery.flot.growraf.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/template/'); ?>plugins/easy-pie-chart/jquery.easy-pie-chart.min.js"></script> -->

<script type="text/javascript" src="<?php echo base_url('assets/template/'); ?>plugins/daterangepicker/moment.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/moment-range/'); ?>moment-range.js"></script>
<!--<script type="text/javascript" src="--><?php //echo base_url('assets/template/'); ?><!--plugins/daterangepicker/moment_id.js"></script>-->
<script type="text/javascript" src="<?php echo base_url('assets/template/'); ?>plugins/daterangepicker/daterangepicker.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/template/'); ?>plugins/blockui/jquery.blockUI.min.js"></script>

<script type="text/javascript" src="<?php echo base_url('assets/template/'); ?>plugins/fullcalendar/fullcalendar.min.js"></script>

<!-- Noty -->
<!--<script type="text/javascript" src="--><?php //echo base_url('assets/template/'); ?><!--plugins/noty/jquery.noty.js"></script>-->
<!--<script type="text/javascript" src="--><?php //echo base_url('assets/template/'); ?><!--plugins/noty/layouts/top.js"></script>-->
<!--<script type="text/javascript" src="--><?php //echo base_url('assets/template/'); ?><!--plugins/noty/themes/default.js"></script>-->

<!-- DataTables -->
<!-- DataTables -->

<!--<script type="text/javascript" src="--><?php //echo base_url('assets/template/'); ?><!--plugins/datatables/jquery.dataTables.min.js"></script>-->
<script type="text/javascript" src="<?php echo base_url('assets/template/'); ?>plugins/datatables/tes/jquery.dataTables.js"></script>
<!--<script type="text/javascript" src="--><?php //echo base_url('assets/template/'); ?><!--plugins/datatables/tes/dataTables.bootstrap.min.js"></script>-->
<script type="text/javascript" src="<?php echo base_url('assets/template/'); ?>plugins/datatables/tabletools/TableTools.min.js"></script> <!-- optional -->
<script type="text/javascript" src="<?php echo base_url('assets/template/'); ?>plugins/datatables/colvis/ColVis.min.js"></script> <!-- optional -->
<script type="text/javascript" src="<?php echo base_url('assets/template/'); ?>plugins/datatables/DT_bootstrap.js"></script>
<!--<script type="text/javascript" src="--><?php //echo base_url('assets/template/'); ?><!--plugins/datatables/dataTables.rowReorder.js"></script>-->

<!-- Plugin DataTbales -->
<script type="text/javascript" src="<?php echo base_url('assets/datatables/dataTables.rowsGroup.js'); ?>"></script>

<!-- Forms -->
<script type="text/javascript" src="<?php echo base_url('assets/template/'); ?>plugins/uniform/jquery.uniform.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/template/'); ?>plugins/select2/select2.min.js"></script>

<!-- Select 2 -->
<!--<link href="--><?php //echo base_url('assets/select2/css/select2.css'); ?><!--" rel="stylesheet" />-->
<!--<link href="--><?php //echo base_url('assets/select2/select2-bootstrap.min.css'); ?><!--" rel="stylesheet" />-->
<!--<style>-->
<!--    .select2-container--bootstrap .select2-results__group{-->
<!--        background: #efefef;-->
<!--    }-->
<!--    .select2-container--bootstrap .select2-selection {-->
<!--        border-radius: 0px;-->
<!--        -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);-->
<!--        box-shadow: inset 0 1px 1px rgba(0,0,0,.075);-->
<!---->
<!--    }-->
<!--    .select2-dropdown--below , .select2-container--bootstrap {-->
<!--        min-width: 300px;-->
<!--    }-->
<!--</style>-->
<!--<script  type="text/javascript" charset="UTF-8" src="--><?php //echo base_url('assets/select2/js/select2.js') ?><!--"></script>-->
<!--<script>$.fn.select2.defaults.set( "theme", "bootstrap" );</script>-->

<!-- Pickers -->
<script type="text/javascript" src="<?php echo base_url('assets/template/'); ?>plugins/pickadate/picker.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/template/'); ?>plugins/pickadate/picker.date.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/template/'); ?>plugins/pickadate/picker.time.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/template/'); ?>plugins/bootstrap-colorpicker/bootstrap-colorpicker.min.js"></script>

<!-- App -->
<script type="text/javascript" src="<?php echo base_url('assets/template/');?>js/app.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/template/');?>js/plugins.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/template/');?>js/plugins.form-components.js"></script>

<!-- Dual Box -->
<script type="text/javascript" src="<?php echo base_url('assets/template/');?>plugins/duallistbox/jquery.duallistbox.min.js"></script>


<!-- Form Validation -->
<script type="text/javascript" src="<?php echo base_url('assets/template/');?>plugins/validation/jquery.validate.min.js"></script>

<!-- IMG Fitter -->
<script type="text/javascript" src="<?php echo base_url('assets/');?>plugins/img-fitter/jquery.imgFitter.js"></script>



<!-- Demo JS -->
<script type="text/javascript" src="<?php echo base_url('assets/template/');?>js/custom.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/template/');?>js/demo/pages_calendar.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/template/');?>js/demo/form_components.js"></script>
<!-- <script type="text/javascript" src="<?php echo base_url('assets/template/');?>js/demo/charts/chart_filled_blue.js"></script> -->
<!-- <script type="text/javascript" src="<?php echo base_url('assets/template/');?>js/demo/charts/chart_simple.js"></script> -->

<!-- JWT Encode -->
<script type="text/javascript" src="<?php echo base_url('assets/plugins/');?>jwt/encode/hmac-sha256.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/plugins/');?>jwt/encode/enc-base64-min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/plugins/');?>jwt/encode/jwt.encode.js"></script>

<!-- JWT Decode -->
<script type="text/javascript" src="<?php echo base_url('assets/plugins/');?>jwt/decode/build/jwt-decode.min.js"></script>

<!-- <script type="text/javascript" src="<?php echo base_url('assets/plugins/datetimepicker/js/bootstrap-datetimepicker.min.js');?>"></script> -->

<script type="text/javascript" src="<?php echo base_url('assets/inputmask/jquery.inputmask.bundle.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/datepicter/js/bootstrap-datetimepicker.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/plugins/bootstrap-toggle/js/bootstrap-toggle.min.js');?>"></script>

<!-- Countdown -->
<script type="text/javascript" src="<?php echo base_url('assets/'); ?>countdown/jquery.countdown.min.js"></script>

<!-- BootBox -->
<script type="text/javascript" src="<?php echo base_url('assets/'); ?>bootbox/bootbox.min.js"></script>

<script type="text/javascript" src="<?php echo base_url('assets/summernote/summernote.js'); ?>"></script>

<script type="text/javascript" src="<?php echo base_url();?>assets/custom/jquery.maskMoney.js"></script>

<!-- Jquery Excel -->
<script type="text/javascript" src="<?php echo base_url();?>assets/jquerytable2excel/jquery.table2excel.js"></script>
<!--<script type="text/javascript" src="--><?php //echo base_url();?><!--assets/jquerytable2excel/table2excel.js"></script>-->
<script type="text/javascript">
	window.base_url_js = "<?php echo base_url(); ?>";
	toastr.options = {
	        "closeButton": true,
	        "debug": false,
	        "newestOnTop": true,
	        "progressBar": false,
	        "positionClass": "toast-top-right",
	        "preventDuplicates": true,
	        "onclick": null,
	        "showDuration": "300",
	        "hideDuration": "1000",
	        "timeOut": "5000",
	        "extendedTimeOut": "1000",
	        "showEasing": "swing",
	        "hideEasing": "linear",
	        "showMethod": "fadeIn",
	        "hideMethod": "fadeOut"
	    };
	function loading_button2(selector) {
        selector.html('<i class="fa fa-refresh fa-spin fa-fw right-margin"></i> Loading...');
        selector.prop('disabled',true);
    }
    function end_loading_button2(selector,html='Save'){
        selector.prop('disabled',false).html(html);
    }

    function Validation_email(string,theName)
    {
       var result = {status:1, messages:""};
       var regexx =  /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
       if (!string.match(regexx)) {
           result = {status : 0,messages: theName + " an invalid email address! "};
       }
       return result;
    }

    function Validation_leastCharacter(leastNumber,string,theName) {
        var result = {status:1, messages:""};
        var stringLenght =  string.length;
        if (stringLenght < leastNumber) {
            result = {status : 0,messages: theName + " at least " + leastNumber + " character"};
        }
        return result;
    }
    function Validation_required(string,theName)
    {
        var result = {status:1, messages:""};
        if (string == "" || string == null) {
            result = {status : 0,messages: theName + " is required! "};
        }
        return result;
    }
</script>