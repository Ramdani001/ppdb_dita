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
                <td class="text-center"><?= $value["asal_sekolah"] ?></td>
                <td class="text-center"><?= $value["no_telp"] ?></td>
                <td class="text-center">
                  <button class="btn btn-danger"><?= $value["status"] ?></button>
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
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Detail Siswa</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- NISN -->
        <div class="mb-3">
          <label for="det_nisn" class="form-label">NISN</label>
          <input type="text" class="form-control" id="det_nisn" disabled>
        </div>
        <!-- Nama Lengkap -->
        <div class="mb-3">
          <label for="det_name" class="form-label">Nama Lengkap</label>
          <input type="text" class="form-control" id="det_name" disabled>
        </div>
        <!-- Email -->
        <div class="mb-3">
          <label for="det_email" class="form-label">Email address</label>
          <input type="text" class="form-control" id="det_email" disabled>
        </div>
        <!-- No.Telp -->
        <div class="mb-3">
          <label for="det_no" class="form-label">No.Telpon</label>
          <input type="text" class="form-control" id="det_no" disabled>
        </div>

        <div class="d-flex gap-4 justify-content-center flex-wrap">

          <!-- KK Berkas -->
          <div>
            <h6>
              <b>
                Kartu Keluarga
              </b>
            </h6>
            <div id="det_kk" class="bg-primary" style="width: 200px; height: 250px;">

            </div>
          </div>

          <!-- Akta Kelahiran Berkas -->
          <div>
            <h6>
              <b>
                Akta Kelahiran
              </b>
            </h6>
            <div id="det_akta" class="bg-primary" style="width: 200px; height: 250px;">

            </div>
          </div>

          <!-- Ijazah/SKL Berkas -->
          <div>
            <h6>
              <b>
                Ijazah/SKL
              </b>
            </h6>
            <div id="det_akta" class="bg-primary" style="width: 200px; height: 250px;">

            </div>
          </div>

          <!-- Kartu Indonesia Pintar Berkas -->
          <div>
            <h6>
              <b>
                Kartu Indonesia Pintar
              </b>
            </h6>
            <div id="det_akta" class="bg-primary" style="width: 200px; height: 250px;">

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
            <div id="det_kk" class="bg-primary" style="width: 200px; height: 250px;">

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
            <div id="det_akta" class="bg-primary" style="width: 200px; height: 250px;">

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
            <div id="det_akta" class="bg-primary" style="width: 200px; height: 250px;" >

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
            <div id="det_akta" class="bg-primary" style="width: 200px; height: 250px;">

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

    const detailModal = document.getElementById('exampleModal');
    detailModal.addEventListener('show.bs.modal', function (event) {
        const button = event.relatedTarget;
        const siswa = JSON.parse(button.getAttribute('data-siswa'));

        document.getElementById('det_nisn').value = siswa.nisn;
        document.getElementById('det_name').value = siswa.nama;
        document.getElementById('det_email').value = siswa.email;
        document.getElementById('det_no').value = siswa.no_telp;
    });

    const editModal = document.getElementById('editModal');
    editModal.addEventListener('show.bs.modal', function (event) {
        const button = event.relatedTarget;
        const siswa = JSON.parse(button.getAttribute('data-siswa'));

        document.getElementById('edit_nisn').value = siswa.nisn;
        document.getElementById('edit_name').value = siswa.nama;
        document.getElementById('edit_email').value = siswa.email;
        document.getElementById('edit_no').value = siswa.no_telp;
    });

  });

</script>