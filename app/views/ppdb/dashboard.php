<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center z-2" style="background-color: #47AF22;">

  <div class="d-flex align-items-center justify-content-center">
    <a class="logo d-flex align-items-center ps-md-5">
      <div class="text-center">
          <span class="d-none d-lg-block">SMK PROFITA</span>
          <span class="d-none d-lg-block" style="font-size: 14px;">Bandung</span>
      </div>
    </a>
  </div><!-- End Logo -->


  <nav class="header-nav ms-auto">
    <ul class="d-flex align-items-center">

      <li class="nav-item d-block d-lg-none">
        <a class="nav-link nav-icon search-bar-toggle " href="#">
          <i class="bi bi-search"></i>
        </a>
      </li><!-- End Search Icon-->

      <li class="nav-item dropdown">

        <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
          <i class="bi bi-bell"></i>
          <span class="badge bg-primary badge-number">4</span>
        </a><!-- End Notification Icon -->

        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
          <li class="dropdown-header">
            You have 4 new notifications
            <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>

          <li class="notification-item">
            <i class="bi bi-exclamation-circle text-warning"></i>
            <div>
              <h4>Lorem Ipsum</h4>
              <p>Quae dolorem earum veritatis oditseno</p>
              <p>30 min. ago</p>
            </div>
          </li>

          <li>
            <hr class="dropdown-divider">
          </li>

          <li class="notification-item">
            <i class="bi bi-x-circle text-danger"></i>
            <div>
              <h4>Atque rerum nesciunt</h4>
              <p>Quae dolorem earum veritatis oditseno</p>
              <p>1 hr. ago</p>
            </div>
          </li>

          <li>
            <hr class="dropdown-divider">
          </li>

          <li class="notification-item">
            <i class="bi bi-check-circle text-success"></i>
            <div>
              <h4>Sit rerum fuga</h4>
              <p>Quae dolorem earum veritatis oditseno</p>
              <p>2 hrs. ago</p>
            </div>
          </li>

          <li>
            <hr class="dropdown-divider">
          </li>

          <li class="notification-item">
            <i class="bi bi-info-circle text-primary"></i>
            <div>
              <h4>Dicta reprehenderit</h4>
              <p>Quae dolorem earum veritatis oditseno</p>
              <p>4 hrs. ago</p>
            </div>
          </li>

          <li>
            <hr class="dropdown-divider">
          </li>
          <li class="dropdown-footer">
            <a href="#">Show all notifications</a>
          </li>

        </ul><!-- End Notification Dropdown Items -->

      </li><!-- End Notification Nav -->

      <li class="nav-item dropdown">

        <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
          <i class="bi bi-chat-left-text"></i>
          <span class="badge bg-secondary badge-number">3</span>
        </a><!-- End Messages Icon -->

        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
          <li class="dropdown-header">
            You have 3 new messages
            <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>

          <li class="message-item">
            <a href="#">
              <img src="assets/img/messages-1.jpg" alt="" class="rounded-circle">
              <div>
                <h4>Maria Hudson</h4>
                <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                <p>4 hrs. ago</p>
              </div>
            </a>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>

          <li class="message-item">
            <a href="#">
              <img src="assets/img/messages-2.jpg" alt="" class="rounded-circle">
              <div>
                <h4>Anna Nelson</h4>
                <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                <p>6 hrs. ago</p>
              </div>
            </a>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>

          <li class="message-item">
            <a href="#">
              <img src="assets/img/messages-3.jpg" alt="" class="rounded-circle">
              <div>
                <h4>David Muldon</h4>
                <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                <p>8 hrs. ago</p>
              </div>
            </a>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>

          <li class="dropdown-footer">
            <a href="#">Show all messages</a>
          </li>

        </ul><!-- End Messages Dropdown Items -->

      </li><!-- End Messages Nav -->

      <li class="nav-item dropdown pe-3">

        <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
          <img src="<?= BASEURL ?>public/assets/img/profile/contoh.jpeg" alt="Profile" class="rounded-circle">
          <span class="d-none d-md-block dropdown-toggle ps-2">Rizkan Ramdani</span>
        </a><!-- End Profile Iamge Icon -->

        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
          <li class="dropdown-header">
            <h6>Rizkan Ramdani</h6>
            <span>Profesor Teknologi</span>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>

          <li>
            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
              <i class="bi bi-person"></i>
              <span>My Profile</span>
            </a>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>

          <li>
            <a class="dropdown-item d-flex align-items-center" href="#">
              <i class="bi bi-box-arrow-right"></i>
              <span>Sign Out</span>
            </a>
          </li>

        </ul><!-- End Profile Dropdown Items -->
      </li><!-- End Profile Nav -->

    </ul>
  </nav>

</header>
<!-- End Header -->


<div class="d-flex justify-content-center">
<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">
  <ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
      <a class="nav-link collapsed" href="<?= BASEURL ?>viewAdminController/user">
        <i class="bi bi-person"></i>
        <span>Formulir</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link collapsed" href="users-profile.html">
        <i class="bi bi-person"></i>
        <span>Upload Berkas</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link collapsed" href="pages-faq.html">
        <i class="bi bi-question-circle"></i>
        <span>Cetak Kartu</span>
      </a>
    </li>

  </ul>
</aside>
<!-- End Sidebar-->
<!-- Content -->
<main class="d-flex w-100 h-100 me-1 rounded shadow-lg p-3 card z-1" style="height: 87vh; margin-top: 5%; margin-left: 24%;">
    <div class="card-title w-100" style="border-bottom: 1px solid gray;">
      Formulir Pendaftaran Siswa Baru
    </div>
    <div class="header border p-2 d-flex">
      <!-- Btn Data Diri -->
      <div id="dataDiri" class="pe-3 d-flex">
        <button class="btn btn-primary">
          <i class="ri-account-box-fill"></i>
          Data Diri
        </button>
      </div>
      <div class="me-3">
        <i class="ri-arrow-right-double-fill text-secondary fs-3"></i>
      </div>

      <!-- Btn Alamat -->
      <div id="alamat" class="pe-3 d-flex">
        <button class="btn btn-secondary" disabled>
          <i class="ri-home-8-fill"></i>
          Alamat
        </button>
      </div>
      <div class="me-3">
        <i class="ri-arrow-right-double-fill text-secondary fs-3"></i>
      </div>

      <!-- Btn Data Orang Tua -->
      <div id="orangtua" class="pe-3 d-flex">
        <button class="btn btn-secondary" disabled> <i class="ri-parent-fill"></i> Data Orang Tua</button>
      </div>
      <div class="me-3">
        <i class="ri-arrow-right-double-fill text-secondary fs-3"></i>
      </div>

      <!-- Btn Foto -->
      <div id="dataDiri" class="pe-3 d-flex">
        <button class="btn btn-secondary" disabled>
          <i class="ri-image-2-fill"></i>  
          Foto
        </button>
      </div>
      
    </div>

    
    <!-- form data diri -->
    <form action="#" class=" w-100 p-3 border d-flex flex-wrap" style="background-color: #f9f8f8;">
    <table class="w-100">
      <tr>
        <td>
          <!-- No Daftar -->
          <div class="row g-3 align-items-center m-2">
          <div class="col-6">
            <label for="inputPassword6" class="col-form-label">No. Pendaftaran</label>
          </div>
          <div class="col-6">
            <input type="Text" id="no_pendaftaran" name="no_pendaftaran" class="form-control" aria-describedby="passwordHelpInline">
          </div>
        </div>
        </td>
        <td>
          <!-- No Daftar -->
          <div class="row g-3 align-items-center m-2">
            <div class="col-6">
              <label for="inputPassword6" class="col-form-label">Asal Sekolah</label>
            </div>
            <div class="col-6">
              <input type="Text" id="asal_sekolah" name="asal_sekolah" class="form-control" aria-describedby="passwordHelpInline">
            </div>
          </div>
        </td>
      </tr>
      <tr>
        <td>
          <!-- No Daftar -->
          <div class="row g-3 align-items-center m-2">
            <div class="col-6">
              <label for="npsn_sekolah" class="col-form-label">NPSN Sekolah Asal</label>
            </div>
            <div class="col-6">
              <input type="Text" id="npsn_sekolah" name="npsn_sekolah" class="form-control" aria-describedby="passwordHelpInline">
            </div>
          </div>
        </td>
        <td>
            <!-- No Daftar -->
            <div class="row g-3 align-items-center m-2">
              <div class="col-6">
                <label for="nisn" class="col-form-label">NISN</label>
              </div>
              <div class="col-6">
                <input type="Text" id="nisn" name="nisn" class="form-control" aria-describedby="passwordHelpInline">
              </div>
            </div>
        </td>
      </tr>
      <tr>
        <td>
          <!-- NIK -->
          <div class="row g-3 align-items-center m-2">
            <div class="col-6">
              <label for="nik" class="col-form-label">NIK</label>
            </div>
            <div class="col-6">
              <input type="Text" id="nik" name="nik" class="form-control" aria-describedby="passwordHelpInline">
            </div>
          </div>
        </td>
        <td>
          <!-- kewarganegaraan -->
          <div class="row g-3 align-items-center m-2">
            <div class="col-6">
              <label for="kewarganegaraan" class="col-form-label">Kewarganegaraan</label>
            </div>
            <div class="col-6">
              <input type="Text" id="kewarganegaraan" name="kewarganegaraan" class="form-control" aria-describedby="passwordHelpInline">
            </div>
          </div>
        </td>
      </tr>
      <tr>
        <td>
          <!-- Nama Lengkap -->
          <div class="row g-3 align-items-center m-2">
            <div class="col-6">
              <label for="nama_lengkap" class="col-form-label">Nama Lengkap</label>
            </div>
            <div class="col-6">
              <input type="Text" id="nama_lengkap" name="nama_lengkap" class="form-control" aria-describedby="passwordHelpInline">
            </div>
          </div>
        </td>
        <td>
          <!-- Nama Lengkap -->
          <div class="row g-3 align-items-center m-2">
            <div class="col-6">
              <label for="tempat" class="col-form-label">Tempat</label>
            </div>
            <div class="col-6">
              <input type="Text" id="tempat" name="tempat" class="form-control" aria-describedby="passwordHelpInline">
            </div>
          </div>
        </td>
      </tr>
      <tr>
        <td>
          <!-- Tanggal Lahir -->
          <div class="row g-3 align-items-center m-2">
            <div class="col-6">
              <label for="tanggal_lahir" class="col-form-label">Tanggal Lahir</label>
            </div>
            <div class="col-6">
              <input type="Text" id="tanggal_lahir" name="tanggal_lahir" class="form-control" aria-describedby="passwordHelpInline">
            </div>
          </div>
        </td>
        <td>
          <!-- Jenis Kelamin -->
          <div class="row g-3 align-items-center m-2">
            <div class="col-6">
              <label for="jenis_kelamin" class="col-form-label">Jenis Kelamin</label>
            </div>
            <div class="col-6">
              <input type="Text" id="jenis_kelamin" name="jenis_kelamin" class="form-control" aria-describedby="passwordHelpInline">
            </div>
          </div>
        </td>
      </tr>
      <tr>
        <td>
          <!-- Anak Ke -->
          <div class="row g-3 align-items-center m-2">
            <div class="col-6">
              <label for="anak_ke" class="col-form-label">Anak Ke</label>
            </div>
            <div class="col-6">
              <input type="Text" id="anak_ke" name="anak_ke" class="form-control" aria-describedby="passwordHelpInline">
            </div>
          </div>
        </td>
        <td>
            <!-- Jumlah Saudara -->
            <div class="row g-3 align-items-center m-2">
              <div class="col-6">
                <label for="jml_saudara" class="col-form-label">Jumlah Saudara/i</label>
              </div>
              <div class="col-6">
                <input type="Text" id="jml_saudara" name="jml_saudara" class="form-control" aria-describedby="passwordHelpInline">
              </div>
            </div>
        </td>
      </tr>
      <tr>
        <td>
            <!-- Agama -->
            <div class="row g-3 align-items-center m-2">
              <div class="col-6">
                <label for="agama" class="col-form-label">Agama</label>
              </div>
              <div class="col-6">
                <input type="Text" id="agama" name="agama" class="form-control" aria-describedby="passwordHelpInline">
              </div>
            </div>
        </td>
        <td>
          <!-- Cita-Cita -->
          <div class="row g-3 align-items-center m-2">
            <div class="col-6">
              <label for="cita_cita" class="col-form-label">Cita-Cita</label>
            </div>
            <div class="col-6">
              <input type="Text" id="cita_cita" name="cita_cita" class="form-control" aria-describedby="passwordHelpInline">
            </div>
          </div>
        </td>
      </tr>
      <tr>
        <td>
          <!-- Hobi -->
          <div class="row g-3 align-items-center m-2">
            <div class="col-6">
              <label for="hobi" class="col-form-label">Hobi</label>
            </div>
            <div class="col-6">
              <input type="Text" id="hobi" name="hobi" class="form-control" aria-describedby="passwordHelpInline">
            </div>
          </div>
        </td>
        <td>
          <!-- Email -->
          <div class="row g-3 align-items-center m-2">
            <div class="col-6">
              <label for="email" class="col-form-label">Email</label>
            </div>
            <div class="col-6">
              <input type="Text" id="email" name="email" class="form-control" aria-describedby="passwordHelpInline">
            </div>
          </div>
        </td>
      </tr>
      <tr>
         <td>
           <!-- No.Handphone -->
           <div class="row g-3 align-items-center m-2">
            <div class="col-6">
              <label for="no_telp" class="col-form-label">No. Handphone</label>
            </div>
            <div class="col-6">
              <input type="Text" id="no_telp" name="no_telp" class="form-control" aria-describedby="passwordHelpInline">
            </div>
          </div>
         </td>
         <td>
               <!-- Yang Membiayai Sekolah -->
              <div class="row g-3 align-items-center m-2">
                <div class="col-6">
                  <label for="biaya_sekolah" class="col-form-label">Yang Membiayai Sekolah</label>
                </div>
                <div class="col-6">
                  <input type="Text" id="biaya_sekolah" name="biaya_sekolah" class="form-control" aria-describedby="passwordHelpInline">
                </div>
              </div>
         </td>
      </tr>
      <tr>
        <td>
          <!-- Yang Membiayai Sekolah -->
          <div class="row g-3 align-items-center m-2">
            <div class="col-6">
              <label for="biaya_sekolah" class="col-form-label">Yang Membiayai Sekolah</label>
            </div>
            <div class="col-6">
              <input type="Text" id="biaya_sekolah" name="biaya_sekolah" class="form-control" aria-describedby="passwordHelpInline">
            </div>
          </div>
        </td>
        <td>
            <!-- PAUD -->
            <div class="row g-3 align-items-center m-2">
              <div class="col-6">
                <label for="paud" class="col-form-label">PAUD</label>
              </div>
              <div class="col-6">
                <input type="Text" id="paud" name="paud" class="form-control" aria-describedby="passwordHelpInline">
              </div>
            </div>
        </td>
      </tr>
      <tr>
        <td>
<!-- TK -->
<div class="row g-3 align-items-center m-2">
      <div class="col-6">
        <label for="tk" class="col-form-label">TK</label>
      </div>
      <div class="col-6">
        <input type="Text" id="tk" name="tk" class="form-control" aria-describedby="passwordHelpInline">
      </div>
    </div>
        </td>
        <td>
<!-- No.Kip -->
<div class="row g-3 align-items-center m-2">
      <div class="col-6">
        <label for="kip" class="col-form-label">No.KIP</label>
      </div>
      <div class="col-6">
        <input type="Text" id="kip" name="kip" class="form-control" aria-describedby="passwordHelpInline">
      </div>
    </div>
        </td>
      </tr>
      <tr>
        <td>
          <!-- No.KK -->
    <div class="row g-3 align-items-center m-2">
      <div class="col-6">
        <label for="kk" class="col-form-label">No.KK</label>
      </div>
      <div class="col-6">
        <input type="Text" id="kk" name="kk" class="form-control" aria-describedby="passwordHelpInline">
      </div>
    </div>
        </td>
        <td>
<!-- Kepala Keluarga -->
<div class="row g-3 align-items-center m-2">
      <div class="col-6">
        <label for="kepala_keluarga" class="col-form-label">Kepala Keluarga</label>
      </div>
      <div class="col-6">
        <input type="Text" id="kepala_keluarga" name="kepala_keluarga" class="form-control" aria-describedby="passwordHelpInline">
      </div>
     </div>
        </td>
      </tr>
    </table>
    </form>
    <hr>
    <span class="text-secondary mb-2" style="padding-bottom: 10px;">*Harap isi data dengan Sebenar-benarnya</span>
    <!-- form data diri -->
  </div>
</main>
<!-- Content -->
</div>