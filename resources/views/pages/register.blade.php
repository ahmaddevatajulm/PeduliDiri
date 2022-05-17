
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Register</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

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
            <div class="login-brand">
              {{-- <img src="../assets/img/stisla-fill.svg" alt="logo" width="100" class="shadow-light rounded-circle"> --}}
              
            </div>

            <div class="card justify-content-md-center" style="background-color: #f1f1f1">
              <img src="../assets/img/avatar/avatar-1.png" alt="logo" width="100" class="rounded-circle " style="align-self: center">
              {{-- <div class="card-header"style="background-color: #f1f1f1" ><h4 >Register</h4></div> --}}
              <div class="card-header justify-content-center" ><h3>Register</h3></div>
              

              <div class="card-body">
                <form method="POST" action="/simpanuser">
                    {{ csrf_field() }}
                  <div class="form-group">
                    <label for="email">NIK</label>
                    <input id="email" type="text" maxlength="16" class="form-control" name="nik" tabindex="1" required autofocus>
                    <div class="invalid-feedback">
                      NIK harus diisi
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="d-block">
                    	<label for="nama" class="control-label">Nama Lengkap</label>
                      <div class="float-right">
                      </div>
                    </div>
                    <input id="nama" type="text"  class="form-control" name="nama" tabindex="2" required pattern="[A-Za-z\s]{1,30}" title="Data harus menggunakan huruf">
                    <div class="invalid-feedback">
                      Nama lengkap harus diisi
                    </div>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4" style="background-color: #c5c5c5">
                      Register
                    </button>
                  </div>
          </div>
        </div>
        <div class=" text-light mt-3 text-center">
          Do you have an account? <a href="/login">Login</a>
        </div>
      </div>
    </section>
  </div>

  <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="../assets/js/stisla.js"></script>

  <!-- JS Libraies -->

  <!-- Template JS File -->
  <script src="../assets/js/scripts.js"></script>
  <script src="../assets/js/custom.js"></script>
    <!-- Register Failed Modal -->
    @if (session('registerFailed'))
        <div class="modal fade" id="registerFailedModal" tabindex="-1" role="dialog"
            aria-labelledby="registerFailedModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="registerFailedModalLongTitle">Register Gagal</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        • NIK yang digunakan sudah terdaftar<br>
                        • NIK minimal harus memiliki 16 digit<br>
                        • Pastikan yang anda masukkan adalah angka
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <script>
            $(document).ready(function() {
                $("#registerFailedModal").modal();
            });
        </script>
    @endif

    

  <!-- Page Specific JS File -->
</body>
</html>
