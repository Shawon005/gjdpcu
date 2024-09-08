@if(session('auth')!='true'){
  @php
     header('location:../admin');
     exit();
  @endphp}
@endif  
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- Favicon icon -->
        <link rel="icon" type="image/png" sizes="16x16" href="{{asset('')}}assets/images/favicon.ico">
        <title>{{ env('APP_NAME') }}</title>
        <!-- Bootstrap Core CSS -->
        <link href="{{asset('')}}assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="{{asset('')}}assets/plugins/perfect-scrollbar/dist/css/perfect-scrollbar.min.css" rel="stylesheet">
        <!-- This page CSS -->
        <!-- chartist CSS -->
        <link href="{{asset('')}}assets/plugins/chartist-js/dist/chartist.min.css" rel="stylesheet">
        <link href="{{asset('')}}assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
        <!--c3 CSS -->
        <link href="{{asset('')}}assets/plugins/c3-master/c3.min.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="{{asset('')}}assets/css/style.css" rel="stylesheet">
        <!-- Dashboard 1 Page CSS -->
        <link href="{{asset('')}}assets/css/pages/dashboard2.css" rel="stylesheet">
        <link href="{{asset('')}}assets/css/pages/floating-label.css" rel="stylesheet">
        <!-- You can change the theme colors from here -->
        <link href="{{asset('')}}assets/css/colors/default-dark.css" id="theme" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="{{asset('')}}assets/plugins/html5-editor/bootstrap-wysihtml5.css" />
        <link href="{{asset('')}}assets/plugins/switchery/dist/switchery.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="{{asset('')}}assets/plugins/dropify/dist/css/dropify.min.css">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    </head>


    <body class="fix-header fix-sidebar card-no-border">
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div class="preloader">
            <div class="loader">
                <div class="loader__figure"></div>
                <p class="loader__label">Studio All In</p>
            </div>
        </div>
        <div id="main-wrapper">
            @include('Admin.partial.header')
            @include('Admin.partial.slider')
            <div class="page-wrapper">
                @yield('content')  
                <footer class="footer"> © 2023 <b>Studio All In</b> </footer>
            </div>
        </div>
        <script src="{{asset('')}}assets/plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap popper Core JavaScript -->
        <script src="{{asset('')}}assets/plugins/bootstrap/js/popper.min.js"></script>
        <script src="{{asset('')}}assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <!-- slimscrollbar scrollbar JavaScript -->
        <script src="{{asset('')}}assets/js/perfect-scrollbar.jquery.min.js"></script>
        <!--Wave Effects -->
        <script src="{{asset('')}}assets/js/waves.js"></script>
        <!--Menu sidebar -->
        <script src="{{asset('')}}assets/js/sidebarmenu.js"></script>
        <!--Custom JavaScript -->
        <script src="{{asset('')}}assets/js/custom.min.js"></script>
        <!-- ============================================================== -->
        <!-- This page plugins -->
        <!-- ============================================================== -->

    <script src="{{asset('')}}assets/js/perfect-scrollbar.jquery.min.js"></script>    <!--Wave Effects -->

    <!--Menu sidebar -->

    <!--stickey kit -->
    <script src="{{asset('')}}assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="{{asset('')}}assets/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!--Custom JavaScript -->
        <script src="{{asset('')}}assets/plugins/chartist-js/dist/chartist.min.js"></script>
        <script src="{{asset('')}}assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
        <!--c3 JavaScript -->
        <script src="{{asset('')}}assets/plugins/d3/d3.min.js"></script>
        <script src="{{asset('')}}assets/plugins/c3-master/c3.min.js"></script>
        <!-- Chart JS -->
        <script src="{{asset('')}}assets/js/dashboard2.js"></script>
        <!-- ============================================================== -->
        <!-- Style switcher -->
        <!-- ============================================================== -->
        <script src="{{asset('')}}assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
        <script src="{{asset('')}}assets/plugins/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="{{asset('')}}assets/plugins/tinymce/tinymce.min.js"></script>
        <script src="{{asset('')}}assets/plugins/tinymce/themes/modern/theme.min.js"></script>
        <script src="{{asset('')}}assets/plugins/switchery/dist/switchery.min.js"></script>
        <script src="{{asset('')}}assets/plugins/dropify/dist/js/dropify.min.js"></script>
        <!-- start - This is for export functionality only -->

        @yield('js')
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script>
    $(function() {
    $('#myTable').DataTable();
    $(document).ready(function() {
    var table = $('#example').DataTable({
    "columnDefs": [{
    "visible": false,
    "targets": 2
    }],
    "order": [
    [2, 'asc']
    ],
    "displayLength": 25,
    "drawCallback": function(settings) {
    var api = this.api();
    var rows = api.rows({
    page: 'current'
    }).nodes();
    var last = null;
    api.column(2, {
    page: 'current'
    }).data().each(function(group, i) {
    if (last !== group) {
    $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
    last = group;
    }
    });
    }
    });
    // Order by the grouping
    $('#example tbody').on('click', 'tr.group', function() {
    var currentOrder = table.order()[0];
    if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
    table.order([2, 'desc']).draw();
    } else {
    table.order([2, 'asc']).draw();
    }
    });
    });
    });
    $('#example23').DataTable({
    dom: 'Bfrtip',
    buttons: [
    'copy', 'csv', 'excel', 'pdf', 'print'
    ]
    });
    $('.buttons-copy, .buttons-csv, .buttons-print, .buttons-pdf, .buttons-excel').addClass('btn btn-primary mr-1');
</script>
<!-- ============================================================== -->
<!-- Style switcher -->
<!-- ============================================================== -->
<script src="../assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>

    <script>
        $(document).ready(function () {

            if ($("#mymce").length > 0) {
                tinymce.init({
                    selector: "textarea#mymce",
                    theme: "modern",
                    height: 300,
                    plugins: [
                        "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                        "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                        "save table contextmenu directionality emoticons template paste textcolor"
                    ],
                    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",

                });
            }
            var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
            $('.js-switch').each(function() {
            new Switchery($(this)[0], $(this).data());
        });
        $('.dropify').dropify();

        // Translated
        $('.dropify-fr').dropify({
            messages: {
                default: 'Glissez-déposez un fichier ici ou cliquez',
                replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                remove: 'Supprimer',
                error: 'Désolé, le fichier trop volumineux'
            }
        });
        });
    </script>
    </body>

</html>    