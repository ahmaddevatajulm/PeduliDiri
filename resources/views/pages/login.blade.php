<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Peduli Diri &mdash; Login</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="../node_modules/bootstrap-social/bootstrap-social.css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/components.css">
</head>

<body style="background-color: #7e8d74">
    <div id="app">
        <section class="section">
                        <div class="container mt-5">
                            <div class="row">
                              <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                                <div class="card justify-content-md-center " style="background-color: #f1f1f1">
                        @if (session()->has('loginBerhasil'))
                            <div class="alert alert-success alert-dismissible show fade">
                                <div class="alert-body">
                                    <button type="button" class"close" data-dismiss="alert" data-dismiss="alert" aria-label="close">
                                        {{-- <span>&times;</span> --}}
                                        <i class="materials-icon">close</i>
                                    </button>
                                    Login Berhasil!
                                </div>
                                {{ session('loginBerhasil') }}
                            </div>
                        @endif

                        @if (session('logoutSuccess'))
                        <div class="alert alert-success alert-dismissible show fade">
                            <div class="alert-body">
                                <button class="close" data-dismiss="alert">
                                    <span>&times;</span>
                                </button>
                                Logout Berhasil!
                            </div>
                        </div>
                        @endif
                                <div class="card justify-content-md-center" style="background-color: #f1f1f1">
                                <div class="card-header justify-content-center" ><h3>Login</h3></div>
                                <div class="card-body justify-content-md-center">
                        <form method="POST" action="/postlogin" class="needs-validation" novalidate="">
                            @csrf

                            <div class="form-group">
                                {{-- <label for="email">NIK</label> --}}
                                <input id="email" type="text" maxlength="16" placeholder="NIK" class="form-control" name="email" tabindex="1" required
                                    autofocus>
                                <input id="password" type="hidden" class="form-control" name="password" required>
                                <div class="invalid-feedback">
                                    Please fill in your NIK
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="d-block">
                                    {{-- <label for="nama" class="control-label">Nama Lengkap</label> --}}
                                </div>
                                <input id="nama" type="text" placeholder="Nama Lengkap" class="form-control" name="nama" tabindex="2" required>
                                <div class="invalid-feedback">
                                    Please fill in your full name
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4" style="background-color: #c5c5c5">
                                  Login
                                </button>
                              </div>
                        </form>
                                </div>
                                </div>
                                
                    </div>
                </div>
            </div>
            <div class=" text-light mt-3 text-center">
                Don't have an account? <a href="/register">Register</a>
              </div>
            </div>
        </section>
    </div>
    <script>
        window.onload = function() {
            var src = document.getElementById("email"),
                dst = document.getElementById("password");
            src.addEventListener('input', function() {
                dst.value = src.value;
            });
        }
    </script>

    <!-- General JS Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="../assets/js/stisla.js"></script>

    <!-- JS Libraies -->

    <!-- Template JS File -->
    <script src="../assets/js/scripts.js"></script>
    <script src="../assets/js/custom.js"></script>

    <!-- Page Specific JS File -->
    @if (session('loginFailed'))
        <div class="modal fade" id="loginFailedModal" tabindex="-1" role="dialog"
            aria-labelledby="loginFailedModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="loginFailedModalLongTitle">Login Gagal</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        NIK atau Nama Lengkap yang anda masukan salah!
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <script>
            $(document).ready(function() {
                $("#loginFailedModal").modal();
            });
        </script>
    @endif

    @if (session('registerSuccess'))
    <div class="modal fade" id="registerSuccessModal" tabindex="-1" role="dialog"
        aria-labelledby="registerSuccessModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="registerSuccessModalLongTitle">Register Berhasil</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Anda telah berhasil untuk register, silahkan login untuk melanjutkan ke halaman utama.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $("#registerSuccessModal").modal();
        });
    </script>
@endif

</body>

</html>