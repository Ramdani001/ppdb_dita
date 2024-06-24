<?php
  $person = $data['person'];
  $berkas = $data['berkas'];

  $kk = "";
  if($berkas){
    
    if($berkas['kk']){
      $kk = $berkas['kk'];
    }
    
    if($berkas['akta']){
      $akta = $berkas['akta'];
    }
    
    if($berkas['ijazah']){
      $ijazah = $berkas['ijazah'];
    }
    
    if($berkas['kip']){
      $kip = $berkas['kip'];
    }

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
      </li>
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
    <h3 class="text-decoration-underline">
        UPLOAD BERKAS
    </h3>  
    <form action="<?= BASEURL ?>PPDBController/updateBerkas/<?= $person['id_person'] ?>" enctype="multipart/form-data" method="POST">

      <input type="hidden" name="id_person" id="id_person" value="<?= $person['id_person'] ?>">
        <div class="mb-3" style="display: grid; gap: 5px; justify-items: center;"> 
              <label for="kkFile" class="form-label">Kartu Keluarga</label>

              <img src="<?= BASEURL ?>public/assets/img/kk/<?= $kk ?>" alt="" style="width: 200px;">

              <input class="form-control" type="file" id="kkFile" name="kkFile">
          </div>

          <div class="mb-3" style="display: grid; gap: 5px; justify-items: center;">
              <label for="aktaFile" class="form-label">Akta Keluarga</label>

              <img src="<?= BASEURL ?>public/assets/img/akta/<?= $akta ?>" alt="" style="width: 200px;">

              <input class="form-control" type="file" name="aktaFile" id="aktaFile">
          </div>

          <div class="mb-3" style="display: grid; gap: 5px; justify-items: center;">
              <label for="ijazahFile" class="form-label">Ijazah/SKL</label>

              <img src="<?= BASEURL ?>public/assets/img/ijazah/<?= $ijazah ?>" alt="" style="width: 200px;">

              <input class="form-control" type="file" name="ijazahFile" id="ijazahFile">
          </div>

          <div class="mb-3" style="display: grid; gap: 5px; justify-items: center;">
              <label for="kipFile" class="form-label">Kartu Indonesia Pintar</label>

              <img src="<?= BASEURL ?>public/assets/img/kip/<?= $kip ?>" alt="" style="width: 200px;">

              <input class="form-control" type="file" id="kipFile" name="kipFile">
              <label for="kipFile" class="form-label">
                  <span style="font-size: 10px;">
                      <i>**Upload jika memilikinya</i>
                  </span>
              </label>
          </div>

          <div class="d-flex justify-content-end" style="">
              <button class="btn btn-primary w-25" type="submit">Submit</button>
          </div>
    </form>
</main>
<!-- Content -->
</div>