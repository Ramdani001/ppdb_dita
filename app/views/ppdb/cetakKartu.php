<?php
  $person = $data['person'];
  $siswa = $data['siswa'];
  $berkas = $data['berkas'];

  $foto_profile = "";
  if($berkas){
    $foto_profile = $berkas['profile'];
  }

?>
<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center z-2" style="background-color: #6dc146;">

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

      <li class="nav-item dropdown pe-3">

        <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
        <?php
          if($berkas){
            echo '
              <img src="'.BASEURL.'public/assets/img/profile/'.$berkas['profile'].'" alt="Profile" class="rounded-circle">
            ';
          }else{
            echo '<img src="'.BASEURL.'public/assets/img/default.png" alt="Profile" class="rounded-circle">';
          }
        ?>
          <span class="d-none d-md-block dropdown-toggle ps-2">Rizkan Ramdani</span>
        </a><!-- End Profile Iamge Icon -->

        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
          <li class="dropdown-header">
            <h6>Rizkan Ramdani</h6>
            <span><?php echo ($person['tipe'] == 3) ? 'Siswa' : 'Administrator'; ?></span>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>

          <li>
            <a class="dropdown-item d-flex align-items-center" href="<?= BASEURL ?>LoginController/logout">
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
      <a class="nav-link collapsed" href="<?= BASEURL ?>PPDBController/index/<?= $person['id_person'] ?>">
        <i class="bi bi-person"></i>
        <span>Formulir</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link collapsed" href="<?= BASEURL ?>PPDBController/berkas/<?= $person['id_person'] ?>">
        <i class="bi bi-person"></i>
        <span>Upload Berkas</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link collapsed" href="<?= BASEURL ?>PPDBController/cetakKartu/<?= $person['id_person'] ?>">
        <i class="bi bi-question-circle"></i>
        <span>Cetak Kartu</span>
      </a>
    </li>

  </ul>
</aside>
<!-- End Sidebar-->
<!-- Content -->
<main class="d-flex w-100 h-100 me-1 rounded shadow-lg p-3 card z-1" style="height: 87vh; margin-top: 5%; margin-left: 24%;">
   <form action="#" method="post">
    <div class="card p-3">
        <div class="card-header">
            CETAK KARTU PENDAFTARAN
        </div>
        <div class="card-body p-3 gap-4 d-flex justfiy-content-around align-items-center">
            <div class="left">
                <img src="<?= BASEURL ?>public/assets/img/profile/<?= $foto_profile ?>" alt="" style="width: 150px; border-radius: 10px;">
            </div>
            <div class="right p-3 w-100 mt-4">
                <div class="d-flex justify-content-center w-100 mb-3">
                  <span class="w-50">
                    <b>No. Pendaftaran</b>
                  </span>
                  <input type="text" class="form-control" style="background-color: #EDEDED;" value="<?php
                            if($siswa){
                              echo $siswa['no_pendaftaran'];
                            }else{
                              echo "";
                            }
                          ?>" readonly>
                </div>
                <div class="d-flex justify-content-center w-100 mb-3">
                  <span class="w-50">
                    <b>Nama Lengkap</b>
                  </span>
                  <input type="text" class="form-control" style="background-color: #EDEDED;" value="<?php
                            if($person){
                              echo $person['nama'];
                            }else{
                              echo "";
                            }
                          ?>" readonly>
                </div>
                <div class="d-flex justify-content-center w-100 mb-3">
                  <span class="w-50">
                    <b>NISN</b>
                  </span>
                  <input type="text" class="form-control" style="background-color: #EDEDED;" value="<?php
                            if($siswa){
                              echo $siswa['nisn'];
                            }else{
                              echo "";
                            }
                          ?>" readonly>
                </div>
                <div class="d-flex justify-content-center w-100 mb-3">
                  <span class="w-50">
                    <b>Tempat dan Tanggal Lahir</b>
                  </span>
                  <input type="text" class="form-control" style="background-color: #EDEDED;" value="<?php

                            $tanggal_lahir = $person['tanggal_lahir']; // Pastikan $person['tanggal_lahir'] berisi tanggal dalam format yang dikenali PHP
                            $tanggal_format = date('d-m-Y', strtotime($tanggal_lahir));

                            if($person){
                              echo $person['tempat_lhir'].', '.$tanggal_format;
                            }else{
                              echo "";
                            }
                          ?>" readonly>
                </div>
            </div>
          </div>
          <div class="d-flex justify-content-center">
            <button class="btn text-light" style="background-color: #8F0DA4;">
              <i class="ri-chat-download-line"></i>
              Download Formulir Pendaftaran</button>
          </div>
    </div>
   </form>
</main>
<!-- Content -->
</div>