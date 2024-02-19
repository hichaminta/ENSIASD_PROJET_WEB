<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>{{ $title }}</title>
    <!-- Custom fonts for this template -->
    <link href="/assets/Etudiant/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="/assets/Etudiant/css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="/assets/Home/images/uiz.png" type="image/vnd.microsoft.icon">

    <link href="/assets/Etudiant/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="/assets/Etudiant/css/iconcolor.csss" rel="stylesheet">
    <link href="/assets/Etudiant/table/style.css" rel="stylesheet">
</head>

<body id="page-top">
    <div id="wrapper">
        @include('Espace_etudiant.partial.slide')
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                @include('Espace_etudiant.partial.navbar')
                <div class="container-fluid">



                                {{ $slot }}

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            @include('Espace_etudiant.partial.footer')


        </div>
        <!-- End of Content Wrapper -->

    </div>

    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    @include('Espace_etudiant.partial.verfictionlougout')

    <!-- Bootstrap core JavaScript-->
    <script src="/assets/Etudiant/vendor/jquery/jquery.min.js"></script>
    <script src="/assets/Etudiant/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="/assets/Etudiant/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="/assets/Etudiant/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="/assets/Etudiant/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="/assets/Etudiant/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="/assets/Etudiant/js/demo/datatables-demo.js"></script>
    <script src="/assets/Etudiant/table/script.js"></script>
</body>

</html>
