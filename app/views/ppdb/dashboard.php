<!-- Mengambil nama -->
<?php
  $person = $data['person'];
  $siswa = $data['siswa'];
  $parent = $data['parent'];
?>
<!-- =========== -->

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
          <span class="d-none d-md-block dropdown-toggle ps-2"><?= $person['nama'] ?></span>
        </a><!-- End Profile Iamge Icon -->

        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
          <li class="dropdown-header">
            <h6><?= $person['nama'] ?></h6>
            <span> <?php echo ($person['tipe'] == 3) ? 'Siswa' : 'Administrator'; ?> </span>
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
    <div class="card-title w-100" style="border-bottom: 1px solid gray;">
      Formulir Pendaftaran Siswa Baru
    </div>
    <div class="header border p-2 d-flex">
      <!-- Btn Data Diri -->
      <div class="pe-3 d-flex">
        <button id="sub_dataDiri" class="btn btn-primary" disabled>
          <i class="ri-account-box-fill"></i>
          Data Diri
        </button>
      </div>
      <div class="me-3">
        <i class="ri-arrow-right-double-fill text-secondary fs-3"></i>
      </div>

      <!-- Btn Alamat -->
      <div class="pe-3 d-flex">
        <button id="sub_alamat" class="btn btn-secondary" disabled>
          <i class="ri-home-8-fill"></i>
          Alamat
        </button>
      </div>
      <div class="me-3">
        <i class="ri-arrow-right-double-fill text-secondary fs-3"></i>
      </div>

      <!-- Btn Data Orang Tua -->
      <div class="pe-3 d-flex">
        <button id="sub_orangtua" class="btn btn-secondary" disabled> <i class="ri-parent-fill"></i> Data Orang Tua</button>
      </div>
      <div class="me-3">
        <i class="ri-arrow-right-double-fill text-secondary fs-3"></i>
      </div>

      <!-- Btn Foto -->
      <div class="pe-3 d-flex">
        <button id="sub_fotoUpload" class="btn btn-secondary" disabled>
          <i class="ri-image-2-fill"></i>  
          Foto
        </button>
      </div>
      
    </div>

  <form action="<?= BASEURL ?>PPDBController/insertFormulir/<?= $person['id_person'] ?>" method="post" enctype="multipart/form-data">
    <!-- form data diri -->
 
    <input type="hidden" value="<?= $person['id_person'] ?>" name="id_person" id="id_person">

    <div id="form-diri">
      <div class=" w-100 p-3 border d-flex flex-wrap" style="background-color: #f9f8f8;">
        <table class="w-100">
          <tr>
            <td>
              <!-- No Daftar -->
              <div class="row g-3 align-items-center m-2">
              <div class="col-6">
                <label for="inputPassword6" class="col-form-label">No. Pendaftaran</label>
              </div>
              <div class="col-6">
                <input type="Text" id="no_pendaftaran" name="no_pendaftaran" class="form-control" 
                  value="<?php
                            if($siswa['no_pendaftaran']){
                              echo $siswa['no_pendaftaran'];
                            }
                          ?>"
                  required>
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
                  <input type="Text" id="asal_sekolah" name="asal_sekolah" class="form-control" value="<?= $siswa['asal_sekolah'] ?>" required>
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
                  <input type="Text" id="npsn_sekolah" name="npsn_sekolah" class="form-control" value="<?= $siswa['npsn_sekolah_asal']?>"  required>
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
                    <input type="Text" id="nisn" name="nisn" class="form-control" value="<?= $siswa['nisn'] ?>" required>
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
                  <input type="Text" id="nik" name="nik" class="form-control" value="<?= $siswa['nik'] ?>" required>
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
                  <input type="Text" id="kewarganegaraan" name="kewarganegaraan" class="form-control" value="<?= $person['kewarganegaraan'] ?>" required>
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
                  <input type="Text" id="nama_lengkap" name="nama_lengkap" class="form-control" value="<?= $person['nama'] ?>" required>
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
                  <input type="Text" id="tempat" name="tempat" class="form-control" value="<?= $person['tempat_lhir'] ?>" required>
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
                  <input type="date" id="tanggal_lahir" name="tanggal_lahir" class="form-control"  required>
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
                  <input type="Text" id="jenis_kelamin" name="jenis_kelamin" class="form-control" value="<?= $person['jk'] ?>" required>
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
                  <input type="Text" id="anak_ke" name="anak_ke" class="form-control" value="<?= $siswa['anak_ke'] ?>" required>
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
                    <input type="Text" id="jml_saudara" name="jml_saudara" class="form-control" value="<?= $siswa['jml_saudara'] ?>" required>
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
                    <input type="Text" id="agama" name="agama" class="form-control" value="<?= $person['agama'] ?>" required>
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
                  <input type="Text" id="cita_cita" name="cita_cita" class="form-control" value="<?= $siswa['cita_cita'] ?>" required>
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
                  <input type="Text" id="hobi" name="hobi" class="form-control" value="<?= $siswa['hobi'] ?>" required>
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
                  <input type="Text" id="email" name="email" class="form-control" value="<?= $person['email'] ?>">
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
                  <input type="Text" id="no_telp" name="no_telp" class="form-control" value="<?= $person['no_telp'] ?>" required>
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
                      <input type="Text" id="biaya_sekolah" name="biaya_sekolah" class="form-control" value="<?= $siswa['biaya_sekolah'] ?>" required>
                    </div>
                  </div>
            </td>
          </tr>
          <tr>
            <td>
                <!-- PAUD -->
                <div class="row g-3 align-items-center m-2">
                  <div class="col-6">
                    <label for="paud" class="col-form-label">SD</label>
                  </div>
                  <div class="col-6">
                    <input type="Text" id="paud" name="paud" class="form-control" value="<?= $siswa['sd'] ?>" required>
                  </div>
                </div>
            </td>
          </tr>
          <tr>
            <td>
              <!-- TK -->
              <div class="row g-3 align-items-center m-2">
                <div class="col-6">
                  <label for="tk" class="col-form-label">SMP</label>
                </div>
                <div class="col-6">
                  <input type="Text" id="tk" name="tk" class="form-control" value="<?= $siswa['smp'] ?>" required>
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
                  <input type="Text" id="kip" name="kip" class="form-control" value="<?= $siswa['kip'] ?>" required>
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
                  <input type="Text" id="no_kk" name="no_kk" class="form-control" value="<?= $siswa['no_kk'] ?>" required>
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
                <input type="Text" id="kepala_keluarga" name="kepala_keluarga" class="form-control"  required value="<?= $siswa['kepala_keluarga'] ?>">
              </div>
            </div>
          </td>
          </tr>
        </table>
        <div class="d-flex justify-content-end w-100 mt-3">
          <button type="button" class="btn btn-primary" style="width: 20%;" onclick="nextPage(1)">Next</button>
        </div>
        </div>
      <hr>
      <span class="text-secondary mb-2" style="padding-bottom: 10px;">*Harap isi data dengan Sebenar-benarnya</span>
    </div>
    <!-- form data diri -->

    <!-- form Data alamat --> 
    <div id="form-alamat" class="d-none">
      <div action="#"  class="w-100 p-3 border d-flex flex-wrap" style="background-color: #f9f8f8;">
        <table class="w-100">
          <tr>
            <td>
              <!-- NIK -->
              <div class="row g-3 align-items-center m-2">
                <div class="col-6">
                  <label for="nik" class="col-form-label">Status Tempat Tinggal</label>
                </div>
                <div class="col-6">
                  <select class="form-select" name="status_rumah" id="status_rumah">
                    <option value="Tinggal dengan Orangtua">Tinggal dengan Orangtua</option>
                    <option value="Tinggal dengan saudara">Tinggal dengan saudara</option>
                    <option value="Tinggal Sendiri">Tinggal Sendiri</option>
                  </select>
                </div>
              </div>
            </td>
            <td>
              <!-- kewarganegaraan -->
              <div class="row g-3 align-items-center m-2">
                <div class="col-6">
                  <label for="alamat" class="col-form-label">Alamat</label>
                </div>
                <div class="col-6">
                  <input type="Text" id="alamat" name="alamat" class="form-control" value="<?= $person['alamat'] ?>" required>
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <!-- Nama Lengkap -->
              <div class="row g-3 align-items-center m-2">
                <div class="col-6">
                  <label for="nama_lengkap" class="col-form-label">RT/RW</label>
                </div>
                <div class="col-6 d-flex gap-3">
                  <input type="number" id="rt" name="rt" class="form-control" value="<?= $person['rt'] ?>" required>
                  <input type="number" id="rw" name="rw" class="form-control" value="<?= $person['rw'] ?>" required>
                </div>
              </div>
            </td>
            <td>
              <!-- Nama Lengkap -->
              <div class="row g-3 align-items-center m-2">
                <div class="col-6">
                  <label for="desa" class="col-form-label">Desa</label>
                </div>
                <div class="col-6">
                  <input type="Text" id="desa" name="desa" class="form-control" value="<?= $person['desa'] ?>" required>
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <!-- Tanggal Lahir -->
              <div class="row g-3 align-items-center m-2">
                <div class="col-6">
                  <label for="tanggal_lahir" class="col-form-label">Kecamatan</label>
                </div>
                <div class="col-6">
                  <input type="Text" id="kecamatan" name="kecamatan" class="form-control" value="<?= $person['kecamatan'] ?>" required>
                </div>
              </div>
            </td>
            <td>
              <!-- Jenis Kelamin -->
              <div class="row g-3 align-items-center m-2">
                <div class="col-6">
                  <label for="kab_kota" class="col-form-label">Kabupaten/Kota</label>
                </div>
                <div class="col-6">
                  <input type="Text" id="kab_kota" name="kab_kota" class="form-control" value="<?= $person['kab_kota'] ?>" required>
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <!-- Anak Ke -->
              <div class="row g-3 align-items-center m-2">
                <div class="col-6">
                  <label for="provinsi" class="col-form-label">Provinsi</label>
                </div>
                <div class="col-6">
                  <input type="Text" id="provinsi" name="provinsi" class="form-control" value="<?= $person['provinsi'] ?>" required>
                </div>
              </div>
            </td>
            <td>
                <!-- Jumlah Saudara -->
                <div class="row g-3 align-items-center m-2">
                  <div class="col-6">
                    <label for="kode_pos" class="col-form-label">Kode Pos</label>
                  </div>
                  <div class="col-6">
                    <input type="number" id="kode_pos" name="kode_pos" class="form-control" value="<?= $person['kode_pos'] ?>" required>
                  </div>
                </div>
            </td>
          </tr>
          <tr>
            <td>
                <!-- Agama -->
                <div class="row g-3 align-items-center m-2">
                  <div class="col-6">
                    <label for="transportasi" class="col-form-label">Transportasi</label>
                  </div>
                  <div class="col-6">
                    <input type="Text" id="transportasi" name="transportasi" class="form-control"  required value="<?= $siswa['transportasi'] ?>">
                  </div>
                </div>
            </td>
            <td>
              <!-- Cita-Cita -->
              <div class="row g-3 align-items-center m-2">
                <div class="col-6">
                  <label for="jarak_kesekolah" class="col-form-label">Jarak Ke Sekolah</label>
                </div>
                <div class="col-6">
                  <input type="Text" id="jarak_kesekolah" name="jarak_kesekolah" class="form-control" value="<?= $siswa['jarak_sekolah'] ?>" required>
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <!-- Hobi -->
              <div class="row g-3 align-items-center m-2">
                <div class="col-6">
                  <label for="waktu_tempuh" class="col-form-label">Waktu Tempuh</label>
                </div>
                <div class="col-6">
                  <input type="Text" id="waktu_tempuh" name="waktu_tempuh" class="form-control" value="<?= $siswa['waktu_tempuh'] ?>" required>
                </div>
              </div>
            </td>
           
          </tr>
        </table>
        <div class="d-flex justify-content-end w-100 mt-3">
          <button type="button" class="btn btn-secondary me-3" style="width: 20%;" onclick="nextPage(11)">Back</button>
          <button type="button" class="btn btn-primary" style="width: 20%;" onclick="nextPage(2)">Next</button>
        </div>
        </div>
      <hr>
      <span class="text-secondary mb-2" style="padding-bottom: 10px;">*Harap isi data dengan Sebenar-benarnya</span>
    </div>
    <!-- form Data alamat -->
    <!-- form Data orangtuan -->
    <div id="form-orangtua" class="d-none">
      <div class="w-100 p-3 border d-flex flex-wrap" style="background-color: #f9f8f8;">
        <table class="w-100">
          <tr>
            <td>
              <!-- Status Ayah -->
              <div class="row g-3 align-items-center m-2">
                <div class="col-6">
                  <label for="nik" class="col-form-label">Status Ayah</label>
                </div>
                <div class="col-6">
                  <select class="form-select" name="status_ayah" id="status_ayah">
                    <option value="Hidup">Masih Hidup</option>
                    <option value="Hidup">Meninggal</option>
                  </select>
                </div>
              </div>
            </td>
            <td>
              <!-- NIK Ayah -->
              <div class="row g-3 align-items-center m-2">
                <div class="col-6">
                  <label for="nik_ayah" class="col-form-label">NIK Ayah</label>
                </div>
                <div class="col-6">
                  <input type="Text" id="nik_ayah" name="nik_ayah" class="form-control" value="<?= $parent['nik_ayah'] ?>" required>
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <!-- Status Ayah -->
              <div class="row g-3 align-items-center m-2">
                <div class="col-6">
                  <label for="nik" class="col-form-label">Nama Ayah</label>
                </div>
                <div class="col-6">
                <input type="Text" id="nama_ayah" name="nama_ayah" class="form-control" value="<?= $parent['nama_ayah'] ?>" required>
                </div>
              </div>
            </td>
            <td>
              <!-- Tempat Lahir -->
              <div class="row g-3 align-items-center m-2">
                <div class="col-6">
                  <label for="lhr_ayah" class="col-form-label">Tempat Lahir</label>
                </div>
                <div class="col-6">
                  <input type="Text" id="lhr_ayah" name="lhr_ayah" class="form-control" value="<?= $parent['lhir_ayah'] ?>" required>
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <!-- Pendidikan Ayah -->
              <div class="row g-3 align-items-center m-2">
                <div class="col-6">
                  <label for="nik" class="col-form-label">Pendidikan Ayah</label>
                </div>
                <div class="col-6">
                  <input type="Text" id="pendidikan_ayah" name="pendidikan_ayah" class="form-control" value="<?= $parent['pendidikan_ayah'] ?>" required>
                </div>
              </div>
            </td>
            <td>
              <!-- Pekerjaan -->
              <div class="row g-3 align-items-center m-2">
                <div class="col-6">
                  <label for="pekerjaan_ayah" class="col-form-label">Pekerjaan</label>
                </div>
                <div class="col-6">
                  <input type="Text" id="pekerjaan_ayah" name="pekerjaan_ayah" class="form-control" value="<?= $parent['pekerjaan_ayah'] ?>" required>
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <!-- penghasilan Ayah -->
              <div class="row g-3 align-items-center m-2">
                <div class="col-6">
                  <label for="penghasilan_ayah" class="col-form-label">Penghasilan Ayah</label>
                </div>
                <div class="col-6">
                   <select class="form-select" name="penghasilan_ayah" id="penghasilan_ayah" value="<?= $parent['penghasilan_ayah'] ?>">
                    <option value="1.000.000 - 2.000.000">1.000.000 - 2.000.000</option>
                    <option value="2.000.000 - 4.000.000">2.000.000 - 4.000.000</option>
                    <option value="4.000.000 - 6.000.000">4.000.000 - 6.000.000</option>
                    <option value="6.000.000 - 10.000.000">6.000.000 - 10.000.000</option>
                  </select>
                </div>
              </div>
            </td>
            <td>
              <!-- Status Ibu -->
              <div class="row g-3 align-items-center m-2">
                <div class="col-6">
                  <label for="status_ibu" class="col-form-label">Status Ibu</label>
                </div>
                <div class="col-6">
                  <select class="form-select" name="status_ibu" id="status_ibu" value="<?= $parent['status_ibu'] ?>">
                    <option value="Masih Hidup">Masih Hidup</option>
                    <option value="Meninggal">Meninggal</option>
                  </select>
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <!-- NIK IBU -->
              <div class="row g-3 align-items-center m-2">
                <div class="col-6">
                  <label for="nik_ibu" class="col-form-label">NIK Ibu</label>
                </div>
                <div class="col-6">
                  <input type="Text" id="nik_ibu" name="nik_ibu" class="form-control" value="<?= $parent['nik_ibu'] ?>" required>
                </div>
              </div>
            </td>
            <td>
              <!-- nama Ibu -->
              <div class="row g-3 align-items-center m-2">
                <div class="col-6">
                  <label for="nama_ibu" class="col-form-label">Nama Ibu</label>
                </div>
                <div class="col-6">
                  <input type="Text" id="nama_ibu" name="nama_ibu" class="form-control" value="<?= $parent['nama_ibu'] ?>" required>
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <!-- Tempat Lahir IBU -->
              <div class="row g-3 align-items-center m-2">
                <div class="col-6">
                  <label for="lhr_ibu" class="col-form-label">Tempat Lahir</label>
                </div>
                <div class="col-6">
                  <input type="Text" id="lhr_ibu" name="lhr_ibu" class="form-control" value="<?= $parent['lhir_ibu'] ?>" required>
                </div>
              </div>
            </td>
            <td>
              <!-- Tgl Lhir Ibu -->
              <div class="row g-3 align-items-center m-2">
                <div class="col-6">
                  <label for="nama_ibu" class="col-form-label">Tanggal Lahir</label>
                </div>
                <div class="col-6">
                  <input type="date" id="tgl_lhir_ibu" name="tgl_lhir_ibu" class="form-control" value="<?= $parent['tgl_lhr_ibu'] ?>" required>
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <!-- No Hp Ibu -->
              <div class="row g-3 align-items-center m-2">
                <div class="col-6">
                  <label for="no_ibu" class="col-form-label">No. HP Ibu</label>
                </div>
                <div class="col-6">
                  <input type="text" id="no_ibu" name="no_ibu" class="form-control" value="<?= $parent['no_ibu'] ?>" required>
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td>
              <!-- Pendidikan Ibu -->
              <div class="row g-3 align-items-center m-2">
                <div class="col-6">
                  <label for="pendidikan_ibu" class="col-form-label">Pendidikan Ibu</label>
                </div>
                <div class="col-6">
                   <select class="form-select" name="pendidikan_ibu" id="pendidikan_ibu" value="<?= $parent['pendidikan_ibu'] ?>">
                    <option value="SD">SD</option>
                    <option value="SMP">SMP</option>
                    <option value="SMA/K">SMA/K</option>
                    <option value="D1">D1</option>
                    <option value="D2">D2</option>
                    <option value="D3">D3</option>
                    <option value="D4">D4</option>
                    <option value="S1">S1</option>
                    <option value="S2">S2</option>
                    <option value="S3">S3</option>
                  </select>
                </div>
              </div>
            </td>
            <td>  
              <!-- Penghasilan Ibu -->
              <div class="row g-3 align-items-center m-2">
                <div class="col-6">
                  <label for="penghasilan_ibu" class="col-form-label">Penghasilan Ibu</label>
                </div>
                <div class="col-6">
                  <select class="form-select" name="penghasilan_ibu" id="pendidikan_ibu" value="<?= $parent['penghasilan_ibu'] ?>">
                  <option value="1.000.000 - 2.000.000">1.000.000 - 2.000.000</option>
                    <option value="2.000.000 - 4.000.000">2.000.000 - 4.000.000</option>
                    <option value="4.000.000 - 6.000.000">4.000.000 - 6.000.000</option>
                    <option value="6.000.000 - 10.000.000">6.000.000 - 10.000.000</option>
                  </select>
                </div>
              </div>
            </td>
          </tr>
        </table>
        <div class="d-flex justify-content-end w-100 mt-3">
          <button type="button" class="btn btn-secondary me-3" style="width: 20%;" onclick="nextPage(21)">Back</button>
          <button type="button" class="btn btn-primary" style="width: 20%;" onclick="nextPage(3)">Next</button>
        </div>
      </div>
      <hr>
      <span class="text-secondary mb-2" style="padding-bottom: 10px;">*Harap isi data dengan Sebenar-benarnya</span>
    </div>
    <!-- form Data orangtua -->
    <!-- form Data foto -->
    <div id="form-foto" class="d-none">
      <div class="w-100 p-3 border d-flex flex-wrap" style="background-color: #f9f8f8;">
        <table class="w-100">
          <tr>
            <td>
              <!-- NIK -->
              <div class="row g-3 align-items-center m-2">
                  <input type="file" class="form-control" id="foto_siswa" name="foto_siswa">
                </div>
              </div>
            </td> 
          </tr>
        </table>
        <div class="d-flex justify-content-end w-100 mt-3">
          <button type="button" class="btn btn-secondary me-3" style="width: 20%;" onclick="nextPage(31)">Back</button>
          <button type="submit" class="btn btn-primary" style="width: 20%;">Simpan</button>
        </div>
      </div>
    </div>
    <!-- form Data foto -->
    </form>
  </div>
</main>
<!-- Content -->
</div>