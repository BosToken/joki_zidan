<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Edit Student</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="{{ asset('https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i') }}"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <x-sidebar></x-sidebar>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <x-navbar></x-navbar>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="row">
                    <div class="col-lg-12 d-none d-lg-block bg-login-image"></div>
                    <div class="col-lg-12">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Edit Student</h1>
                            </div>
                            <form class="user" action="{{ route('update-student', ['id' => $data->id]) }}"
                                method="post">
                                @csrf

                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="name"
                                        value={{ $data->name }} placeholder="Name" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="gender"
                                        value={{ $data->gender }} placeholder="Gender" required>
                                </div>
                                <div class="form-group">
                                    <input type="number" class="form-control form-control-user" name="nik"
                                        value={{ $data->nik }} placeholder="NIK" required>
                                </div>
                                <div class="form-group">
                                    <input type="number" class="form-control form-control-user" name="nisn"
                                        value={{ $data->nisn }} placeholder="NISN" required>
                                </div>
                                <div class="form-group">
                                    <input type="date" class="form-control form-control-user" name="date_of_birth"
                                        value={{ $data->date_of_birth }} placeholder="Birth" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="religion"
                                        value={{ $data->religion }} placeholder="Religion" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="address"
                                        value={{ $data->address }} placeholder="Address" required>
                                </div>
                                <button class="btn btn-primary btn-user btn-block" type="submit">
                                    Update
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('js/demo/datatables-demo.js') }}"></script>

</body>

</html>
