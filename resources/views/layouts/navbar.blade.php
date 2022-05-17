<div class="navbar-bg" style="background-color:  #7d8f71"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto" method="GET" action="/cari">
          @csrf
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
          <div class="col-auto">
            <select onchange="yesnoCheck(this);" class="form-control form-select" type="dropdown ">
              <option value="lokasi">Lokasi</option>
              <option value="tanggal">Tanggal</option>
              <option value="jam">Jam</option>
              <option value="suhu">Suhu</option>
            </select>
          </div>
          <div class="col">
            <div class="form-group">
                <input name="lokasi" id="iflokasi" class="form-control" type="search" placeholder="Cari Lokasi" aria-label="Search">
                <button class="btn" id="iflokasiBtn" btn-outline-succes my-2 my-sm-0 type="submit"><i class="fas fa-search"></i></button>
            </div>
            <div class="form-group">
              <input name="tanggal" id="iftgl" class="form-control" type="date" placeholder="Cari Tanggal" style="display: none;">
              <button class="btn" id="iftglBtn" style="display: none;"><i class="fas fa-search "></i></button>
            </div>
            <div class="form-group">
              <input name="jam" id="ifjam" class="form-control" type="time" placeholder="Cari Jam" style="display: none;">
              <button class="btn" id="ifjamBtn" style="display: none;"><i class="fas fa-search "></i>
              </button>
            </div>
            <div class="form-group">
              <input name="suhu" id="ifsuhu" class="form-control" type="number" placeholder="Cari Suhu" style="display: none;">
              <button class="btn" id="ifsuhuBtn" btn-outline-succes my-2 my-sm-0 type="submit" style="display: none;"><i class="fas fa-search"></i></button>
          </div>
          </div>
        </form>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown"s\><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="../assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block">
              @if (!empty(auth()->user()->nama))
              Hi, {{ auth()->user()->nama }}
              @else
              Hi, Guest
              @endif
            </div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <div class="dropdown-title">Logged in 5 min ago</div>
              <a href="/login" class="dropdown-item has-icon">
                <i class="far fa-user"></i> Login
              </a>
              <div class="dropdown-divider"></div>
              <a href="/logout" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>

      <script>
        function yesnoCheck(that)
        {
          if (that.value == "tanggal")
          {
            document.getElementById("iftgl").style.display = "block";
            document.getElementById("iftglBtn").style.display = "block";

            document.getElementById("iflokasi").style.display = "none";
            document.getElementById("iflokasiBtn").style.display = "none";

            document.getElementById("ifjam").style.display = "none";
            document.getElementById("ifjamBtn").style.display = "none";

            document.getElementById("ifsuhu").style.display = "none";
            document.getElementById("ifsuhuBtn").style.display = "none";

          } else if (that.value == "jam")
          {
            document.getElementById("iftgl").style.display = "none";
            document.getElementById("iftglBtn").style.display = "none";

            document.getElementById("iflokasi").style.display = "none";
            document.getElementById("iflokasiBtn").style.display = "none";

            document.getElementById("ifjam").style.display = "block";
            document.getElementById("ifjamBtn").style.display = "block";

            document.getElementById("ifsuhu").style.display = "none";
            document.getElementById("ifsuhuBtn").style.display = "none";

          } else if (that.value == "suhu")
          {
            document.getElementById("iftgl").style.display = "none";
            document.getElementById("iftglBtn").style.display = "none";

            document.getElementById("iflokasi").style.display = "none";
            document.getElementById("iflokasiBtn").style.display = "none";

            document.getElementById("ifjam").style.display = "none";
            document.getElementById("ifjamBtn").style.display = "none";

            document.getElementById("ifsuhu").style.display = "block";
            document.getElementById("ifsuhuBtn").style.display = "block";
          } else
          {
            document.getElementById("iftgl").style.display = "none";
            document.getElementById("iftglBtn").style.display = "none";

            document.getElementById("iflokasi").style.display = "block";
            document.getElementById("iflokasiBtn").style.display = "block";

            document.getElementById("ifjam").style.display = "none";
            document.getElementById("ifjamBtn").style.display = "none";

            document.getElementById("ifsuhu").style.display = "none";
            document.getElementById("ifsuhuBtn").style.display = "none";
          }
        }
      </script>