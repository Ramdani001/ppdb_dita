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
      <a class="nav-link collapsed" href="<?= BASEURL ?>ViewAdminController/">
        <i class="bi bi-person"></i>
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
      <a class="nav-link collapsed bg-primary text-light " href="<?= BASEURL ?>ViewAdminController/siswaDaftar">
        <i class="ri-graduation-cap-fill"></i>
        <span>Siswa Daftar</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link collapsed" href="<?= BASEURL ?>ViewAdminController/laporan">
        <i class="ri-folder-chart-fill"></i>
        <span>Laporan Pendaftaran</span>
      </a>
    </li>

  </ul>
</aside>
<!-- End Sidebar-->

<!-- Content -->
<main class="d-flex w-100 h-100 me-1 rounded shadow-lg p-3 card z-1" style="height: 87vh; margin-top: 5%; margin-left: 24%;">
   
   <!-- Grafik -->

    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Siswa Daftar</h5>

        <table class="table table-hover">
          <thead>
            <th class="text-center">#</th>
            <th class="text-center">Nama</th>
            <th class="text-center">Asal Sekolah</th>
            <th class="text-center">No.Telpon</th>
            <th class="text-center">Status</th>
            <th class="text-center">Aksi</th>
          </thead>
          <tbody>
            <?php foreach ($data["list_siswa"] as $key => $value) { ?>
              <tr>
                <td class="text-center">
                  <img style="width: 30px; height: 30px; border-radius: 100%;" src="<?= BASEURL ?>public/assets/img/profile/contoh.jpeg" alt="foto">
                </td>
                <td class="text-center"><?= $value["nama"] ?></td>
                <td class="text-center"><?= $value["nama"] ?></td>
                <td class="text-center"><?= $value["asal_sekolah"] ?></td>
                <td class="text-center"><?= $value["no_telp"] ?></td>
                <td class="text-center">
                  <button class="btn 
                  <?php
                      if($value["status"] == 0 ){
                        echo "btn-secondary";
                      }else if($value['status'] == 1){
                        echo "btn-success";
                      }else{
                        echo "btn-danger";
                      }
                    ?>
                  ">
                    <?php
                      if($value["status"] == 0 ){
                        echo "Menunggu";
                      }else if($value['status'] == 1){
                        echo "Diterima";
                      }else{
                        echo "Ditolak";
                      }
                    ?>
                  </button>
                </td>
                <td class="text-center">
                  <div class="d-flex gap-3 justify-content-center">
  
                    <button class="btn btn-primary text-light" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-siswa='<?= json_encode($value) ?>'>
                      <i class="ri-eye-line"></i>
                    </button>
  
                    <button class="btn btn-success text-light" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal" data-siswa='<?= json_encode($value) ?>'>
                      <i class="ri-file-edit-line"></i>
                    </button>
  
                    <button class="btn btn-danger text-light" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#deleteModal" data-siswa='<?= json_encode($value) ?>'>
                      <i class="ri-delete-bin-2-line"></i>
                    </button>
  
                  </div>
                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
       
      </div>
    </div>

   <!-- Grafik -->

</main>
<!-- Content -->
</div>

<!-- Modal Detail -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Detail Siswa</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
        <!-- Personal -->
         <div>
          <h5>
            <b>
              <u>Personal</u>
            </b>
          </h5>
         </div>
        <div style="display: flex; gap: 20px; justify-content: space-between; flex-wrap: wrap;">
          <!-- No Pendaftaran -->
          <div class="mb-3">
            <label for="det_pendaftaran" class="form-label">No Pendaftaran</label>
            <input type="text" class="form-control" id="det_pendaftaran" disabled>
          </div>
          <!-- Nama Lengkap -->
          <div class="mb-3">
            <label for="det_name" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control" id="det_name" disabled>
          </div>
          <!-- Asal Sekolah -->
          <div class="mb-3">
            <label for="det_asal_sekolah" class="form-label">Asal Sekolah</label>
            <input type="text" class="form-control" id="det_asal_sekolah" disabled>
          </div>
          <!-- NPSN Sekolah Asal -->
          <div class="mb-3">
            <label for="det_npsn_asal_sekolah" class="form-label">NPSN Asal Sekolah</label>
            <input type="text" class="form-control" id="det_npsn_asal_sekolah" disabled>
          </div>
          <!-- NISN -->
          <div class="mb-3">
            <label for="det_nisn" class="form-label">NISN</label>
            <input type="text" class="form-control" id="det_nisn" disabled>
          </div>
          <!-- NIK -->
          <div class="mb-3">
            <label for="det_nik" class="form-label">NIK</label>
            <input type="text" class="form-control" id="det_nik" disabled>
          </div>
          <!-- Kewarganegaraan -->
          <div class="mb-3">
            <label for="det_kewarganegaraan" class="form-label">Kewarganegaraan</label>
            <input type="text" class="form-control" id="det_kewarganegaraan" disabled>
          </div>
          <!-- Tempat Lahir -->
          <div class="mb-3">
            <label for="det_tmp_lahir" class="form-label">Tempat Lahir</label>
            <input type="text" class="form-control" id="det_tmp_lahir" disabled>
          </div>
          <!-- Tanggal Lahir -->
          <div class="mb-3">
            <label for="det_tgl_lahir" class="form-label">Tanggal Lahir</label>
            <input type="text" class="form-control" id="det_tgl_lahir" disabled>
          </div>
          <!-- Jenis Kelamin -->
          <div class="mb-3">
            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
            <input type="text" class="form-control" id="jenis_kelamin" disabled>
          </div>
          <!-- Anak Ke -->
          <div class="mb-3">
            <label for="det_anak_ke" class="form-label">Anak Ke</label>
            <input type="text" class="form-control" id="det_anak_ke" disabled>
          </div>
          <!-- Jumlah Saudara/i -->
          <div class="mb-3">
            <label for="det_jml_saudara" class="form-label">Jumlah Saudara/i</label>
            <input type="text" class="form-control" id="det_jml_saudara" disabled>
          </div>
          <!-- Agama -->
          <div class="mb-3">
            <label for="det_agama" class="form-label">Agama</label>
            <input type="text" class="form-control" id="det_agama" disabled>
          </div>
          <!-- Cita-cita -->
          <div class="mb-3">
            <label for="det_cita_cita" class="form-label">Cita-cita</label>
            <input type="text" class="form-control" id="det_cita_cita" disabled>
          </div>
          <!-- Hobi -->
          <div class="mb-3">
            <label for="det_hobi" class="form-label">Hobi</label>
            <input type="text" class="form-control" id="det_hobi" disabled>
          </div>
          <!-- Email -->
          <div class="mb-3">
            <label for="det_email" class="form-label">Email</label>
            <input type="text" class="form-control" id="det_email" disabled>
          </div>
          <!-- No. Handphone -->
          <div class="mb-3">
            <label for="det_phone" class="form-label">No. Handphone</label>
            <input type="text" class="form-control" id="det_phone" disabled>
          </div>
          <!-- Yang Membiayai Sekolah -->
          <div class="mb-3">
            <label for="det_biayai" class="form-label">Yang Membiayai Sekolah</label>
            <input type="text" class="form-control" id="det_biayai" disabled>
          </div>
          <!-- SD -->
          <div class="mb-3">
            <label for="det_sd" class="form-label">SD</label>
            <input type="text" class="form-control" id="det_sd" disabled>
          </div>
          <!-- Jurusan -->
          <div class="mb-3">
            <label for="det_jurusan" class="form-label">Jurusan</label>
            <input type="text" class="form-control" id="det_jurusan" disabled>
          </div>
          <!-- SMP -->
          <div class="mb-3">
            <label for="det_smp" class="form-label">SMP</label>
            <input type="text" class="form-control" id="det_smp" disabled>
          </div>
          <!-- No.KIP -->
          <div class="mb-3">
            <label for="det_no_kip" class="form-label">No.KIP</label>
            <input type="text" class="form-control" id="det_no_kip" disabled>
          </div>
          <!-- No.KK -->
          <div class="mb-3">
            <label for="det_no_kk" class="form-label">No.KK</label>
            <input type="text" class="form-control" id="det_no_kk" disabled>
          </div>
          <!-- Kepala Keluarga -->
          <div class="mb-3">
            <label for="det_kepala_keluarga" class="form-label">Kepala Keluarga</label>
            <input type="text" class="form-control" id="det_kepala_keluarga" disabled>
          </div>

          <!-- Bawah -->
        </div>
        
        <hr class="pt-1 pb-1">
        <h6>
          <b>
            <u>Berkas</u>
          </b>
        </h6>
        <div class="d-flex gap-4 justify-content-center flex-wrap">

          <!-- KK Berkas -->
          <div>
            <h6>
              <b>
                Kartu Keluarga
              </b>
            </h6>
            <div>
                <img src="" alt="" id="det_kk" style="width: 200px; height: 250px;">
            </div>
          </div>

          <!-- Akta Kelahiran Berkas -->
          <div>
            <h6>
              <b>
                Akta Kelahiran
              </b>
            </h6>
            <div >
              <img src="" alt="" id="det_akta" style="width: 200px; height: 250px;">
            </div>
          </div>

          <!-- Ijazah/SKL Berkas -->
          <div>
            <h6>
              <b>
                Ijazah/SKL
              </b>
            </h6>
            <div >
              <img src="" alt="" id="det_ijazah" style="width: 200px; height: 250px;">
            </div>
          </div>

          <!-- Kartu Indonesia Pintar Berkas -->
          <div>
            <h6>
              <b>
                Kartu Indonesia Pintar
              </b>
            </h6>
            <div>
              <img src="" alt="" id="det_kip" style="width: 200px; height: 250px;">
            </div>
          </div>

          
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal Detail -->

<input type="hidden" value="<?= BASEURL ?>" id="base_url">
<!-- Modal Edit -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="editModalLabel">Edit Siswa</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- NISN -->
        <div class="mb-3">
          <label for="edit_nisn" class="form-label">NISN</label>
          <input type="text" class="form-control" id="edit_nisn">
        </div>
        <!-- Nama Lengkap -->
        <div class="mb-3">
          <label for="edit_name" class="form-label">Nama Lengkap</label>
          <input type="text" class="form-control" id="edit_name">
        </div>
        <!-- Email -->
        <div class="mb-3">
          <label for="edit_email" class="form-label">Email address</label>
          <input type="text" class="form-control" id="edit_email">
        </div>
        <!-- No.Telp -->
        <div class="mb-3">
          <label for="edit_no" class="form-label">No.Telpon</label>
          <input type="text" class="form-control" id="edit_no">
        </div>

        <div class="d-flex gap-4 justify-content-center flex-wrap">

          <!-- KK Berkas -->
          <div>
            <h6>
              <b>
                Kartu Keluarga
              </b>
            </h6>
            <div>
              <img src="" alt="" id="edit_kk" style="width: 200px; height: 250px;">
            </div>
            <input type="file" class="form-control mt-2" style="width: 200px;" name="kk_update">
          </div>

          <!-- Akta Kelahiran Berkas -->
          <div>
            <h6>
              <b>
                Akta Kelahiran
              </b>
            </h6>
            <div>
            <img src="" alt="" id="edit_akta" style="width: 200px; height: 250px;">
            </div>
            <input type="file" class="form-control mt-2" style="width: 200px;" name="akta_update">
          </div>

          <!-- Ijazah/SKL Berkas -->
          <div>
            <h6>
              <b>
                Ijazah/SKL
              </b>
            </h6>
            <div>
            <img src="" alt="" id="edit_ijazah" style="width: 200px; height: 250px;">
            </div>
            <input type="file" class="form-control mt-2" style="width: 200px;" name="ijazah_update">
          </div>

          <!-- Kartu Indonesia Pintar Berkas -->
          <div>
            <h6>
              <b>
                Kartu Indonesia Pintar
              </b>
            </h6>
            <div>
            <img src="" alt="" id="edit_kip" style="width: 200px; height: 250px;">
            </div>
            <input type="file" class="form-control mt-2" style="width: 200px;" name="kip_update">
          </div>

          
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal Edit -->

<!-- Modal delete -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body text-center">
          <div class="card-title">Information!</div>
          
          <i class="ri-question-line fs-1 pt-2 text-warning"></i>
          <h4>
            Anda Yakin Ingin Menghapus Data Ini 
          </h4>
          
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-danger">Hapus</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal delete -->
<script>
  
  document.addEventListener('DOMContentLoaded', function () {
    const base_url = document.getElementById('base_url').value;

    const detailModal = document.getElementById('exampleModal');
    detailModal.addEventListener('show.bs.modal', function (event) {
        const button = event.relatedTarget;
        const siswa = JSON.parse(button.getAttribute('data-siswa'));

        console.log(siswa);

        document.getElementById('det_pendaftaran').value = siswa.no_pendaftaran;
        document.getElementById('det_name').value = siswa.nama;
        document.getElementById('det_asal_sekolah').value = siswa.asal_sekolah;
        document.getElementById('det_npsn_asal_sekolah').value = siswa.npsn_sekolah_asal;
        document.getElementById('det_nisn').value = siswa.nisn;
        document.getElementById('det_nik').value = siswa.nik;

        document.getElementById('det_kewarganegaraan').value = siswa.kewarganegaraan;
        document.getElementById('det_tmp_lahir').value = siswa.tempat_lhir;
        document.getElementById('det_tgl_lahir').value = siswa.tanggal_lahir;
        document.getElementById('jenis_kelamin').value = siswa.jk;
        document.getElementById('det_anak_ke').value = siswa.anak_ke;
        document.getElementById('det_jml_saudara').value = siswa.jml_saudara;
        document.getElementById('det_agama').value = siswa.agama;
        document.getElementById('det_cita_cita').value = siswa.cita_cita;
        document.getElementById('det_hobi').value = siswa.hobi;
        document.getElementById('det_email').value = siswa.email;
        document.getElementById('det_phone').value = siswa.no_telp;
        document.getElementById('det_biayai').value = siswa.biaya_sekolah;
        document.getElementById('det_sd').value = siswa.sd;
        document.getElementById('det_jurusan').value = siswa.jurusan;
        document.getElementById('det_smp').value = siswa.smp;
        document.getElementById('det_no_kip').value = siswa.kip;
        document.getElementById('det_no_kk').value = siswa.no_kk;
        document.getElementById('det_kepala_keluarga').value = siswa.kepala_keluarga;

        
        
        // Img
        document.getElementById('det_kk').src = base_url+"public/assets/img/kk/"+siswa.kk;
        document.getElementById('det_akta').src = base_url+"public/assets/img/akta/"+siswa.akta;
        document.getElementById('det_ijazah').src = base_url+"public/assets/img/ijazah/"+siswa.ijazah;
        document.getElementById('det_kip').src = base_url+"public/assets/img/kip/"+siswa.kip;


    });

    const editModal = document.getElementById('editModal');
    editModal.addEventListener('show.bs.modal', function (event) {
      const base_url = document.getElementById('base_url').value;
        const button = event.relatedTarget;
        const siswa = JSON.parse(button.getAttribute('data-siswa'));

        document.getElementById('edit_nisn').value = siswa.nisn;
        document.getElementById('edit_name').value = siswa.nama;
        document.getElementById('edit_email').value = siswa.email;
        document.getElementById('edit_no').value = siswa.no_telp;

        // Img
        document.getElementById('edit_kk').src = base_url+"public/assets/img/kk/"+siswa.kk;
        document.getElementById('edit_akta').src = base_url+"public/assets/img/akta/"+siswa.akta;
        document.getElementById('edit_ijazah').src = base_url+"public/assets/img/ijazah/"+siswa.ijazah;
        document.getElementById('edit_kip').src = base_url+"public/assets/img/kip/"+siswa.kip;
        
    });

  });

</script>