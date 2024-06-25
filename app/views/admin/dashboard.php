<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center z-2" style="background-color: white;">

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
      </li>

      <li class="nav-item dropdown pe-3">

        <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
          <img src="<?= BASEURL ?>public/assets/img/profile/contoh.jpeg" alt="Profile" class="rounded-circle">
          <span class="d-none d-md-block dropdown-toggle ps-2"><?= $data['auth']['nama'] ?></span>
        </a><!-- End Profile Iamge Icon -->

        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
          <li class="dropdown-header">
            <h6><?= $data['auth']['nama'] ?></h6>
            <span><?= $data['auth']['email'] ?></span>
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
      <a class="nav-link bg-primary text-light collapsed" href="#">
        <i class="bi bi-person text-light"></i>
        <span>Dashboard</span>
      </a>
    </li>

    <li class="nav-heading">Pages</li>

    <li class="nav-item">
      <a class="nav-link collapsed" href="<?= BASEURL ?>ViewAdminController/user">
        <i class="bi bi-person"></i>
        <span>User</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link collapsed" href="<?= BASEURL ?>ViewAdminController/siswaDaftar">
        <i class="bi bi-question-circle"></i>
        <span>Siswa Daftar</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link collapsed" href="<?= BASEURL ?>ViewAdminController/laporan">
        <i class="bi bi-question-circle"></i>
        <span>Laporan Pendaftaran</span>
      </a>
    </li>

  </ul>
</aside>
<!-- End Sidebar-->
<!-- Content -->
<main class="d-flex w-100 h-100 me-1 rounded shadow-lg p-3 card z-1" style="height: 87vh; margin-top: 5%; margin-left: 24%;">
   <section class="d-flex justify-content-evenly">
      <!-- Siswa Daftar -->
      <div class="card info-card sales-card w-25 d-flex justify-content-center">
        <div class="card-body">
          <h5 class="card-title text-center">Siswa Daftar</h5>
          <div class="d-flex align-items-center justify-content-center">
            <div class="card-icon text-center rounded-circle d-flex align-items-center justify-content-center">
            <i class="ri-team-line"></i>
            </div>
            <div class="ps-3 text-center">
              <h2>145</h2>
            </div>
          </div>
        </div>
      </div>
      <!-- End Siswa Daftar -->
      <!-- Verifikasi Data -->
      <div class="card info-card sales-card w-25">
        <div class="card-body">
          <h5 class="card-title text-center">Verifikasi Data</h5>
          <div class="d-flex align-items-center justify-content-center">
            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
              <i class="ri-file-user-line"></i>
            </div>
            <div class="ps-3">
              <h2>2</h2>
            </div>
          </div>
        </div>
      </div>
      <!-- End Verifikasi Data -->
      <!-- Verifikasi Data -->
      <div class="card info-card sales-card w-25">
        <div class="card-body">
          <h5 class="card-title text-center">User Active</h5>
          <div class="d-flex align-items-center justify-content-center">
            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
            <i class="ri-id-card-fill"></i>
            </div>
            <div class="ps-3">
              <h2>78</h2>
            </div>
          </div>
        </div>
      </div>
      <!-- End Verifikasi Data -->
   </section>

   <!-- Grafik -->

    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Jurusan Yang Diminati</h5>

        <!-- Pie Chart -->
        <canvas id="pieChart" style="max-height: 400px;"></canvas>
        <script>
          document.addEventListener("DOMContentLoaded", () => {
            new Chart(document.querySelector('#pieChart'), {
              type: 'pie',
              data: {
                labels: [
                  'RPL',
                  'TKJ',
                  'TTT'
                ],
                datasets: [{
                  label: 'My First Dataset',
                  data: [300, 50, 100],
                  backgroundColor: [
                    'rgb(255, 99, 132)',
                    'rgb(54, 162, 235)',
                    'rgb(255, 205, 86)'
                  ],
                  hoverOffset: 4
                }]
              }
            });
          });
        </script>
        <!-- End Pie CHart -->

      </div>
    </div>

   <!-- Grafik -->

</main>
<!-- Content -->
</div>