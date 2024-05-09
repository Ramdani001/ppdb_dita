<section class="bg-light p-5" style="width: 100%; height: 100%; padding-top: 100px;">
    <h1 class="mt-5 text-center pb-5">Sarana & Prasarana</h1>

    <div class="d-flex flex-wrap justify-content-between gap-4">
        <!-- Card -->
        <div class="card" style="width: 18rem; cursor: pointer;" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <img src="<?= BASEURL ?>public/assets/img/guru/guru1.jpg" class="card-img-top" alt="guru">
            <input type="text" name="idGur" id="igGur">
            <div class="card-body text-center">
                <div class="card-tittle text-center">
                    Adelia Vida Paramesti, S.pd.
                </div>
                <div class="card-text text-secondary">Nip : xxxxxxxxxxxxxxxx</div>
                <div class="card-text text-secondary">Tahun Masuk : 2020</div>
            </div>
        </div>
        <!-- Card -->
        <div class="card" style="width: 18rem; cursor: pointer;" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <img src="<?= BASEURL ?>public/assets/img/guru/guru2.jpg" class="card-img-top" alt="guru">
            <div class="card-body text-center">
                <div class="card-tittle text-center">
                    Adelia Vida Paramesti, S.pd.
                </div>
                <div class="card-text text-secondary">Nip : xxxxxxxxxxxxxxxx</div>
                <div class="card-text text-secondary">Tahun Masuk : 2020</div>
            </div>
        </div>
        <!-- Card -->
        <div class="card" style="width: 18rem; cursor: pointer;" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <img src="<?= BASEURL ?>public/assets/img/guru/guru3.jpg" class="card-img-top" alt="guru">
            <div class="card-body text-center">
                <div class="card-tittle text-center">
                    Adelia Vida Paramesti, S.pd.
                </div>
                <div class="card-text text-secondary">Nip : xxxxxxxxxxxxxxxx</div>
                <div class="card-text text-secondary">Tahun Masuk : 2020</div>
            </div>
        </div>
        <!-- Card -->
        <div class="card" style="width: 18rem; cursor: pointer;" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <img src="<?= BASEURL ?>public/assets/img/guru/guru4.jpg" class="card-img-top" alt="guru">
                <div class="card-body text-center">
                    <div class="card-tittle text-center">
                        Adelia Vida Paramesti, S.pd.
                    </div>
                    <div class="card-text text-secondary">Nip : xxxxxxxxxxxxxxxx</div>
                    <div class="card-text text-secondary">Tahun Masuk : 2020</div>
                </div>
            </div>
        </div>

<!-- ================================================ -->
    </div>

    <!-- Pagination -->
    <div class="pt-5">
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item"><a class="page-link text-dark" href="#">Previous</a></li>
                <li class="page-item"><a class="page-link text-dark" href="#">1</a></li>
                <li class="page-item"><a class="page-link text-dark" href="#">2</a></li>
                <li class="page-item"><a class="page-link text-dark" href="#">3</a></li>
                <li class="page-item"><a class="page-link text-dark" href="#">Next</a></li>
            </ul>
        </nav>
    </div>
    <!-- Pagination -->
</section>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Nama Guru</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img src="<?= BASEURL ?>public/assets/img/guru/guru3.jpg" class="card-img-top" alt="guru">
        <div>
            <!-- Nama -->
            <div>
                <label style="width: 120px;">Nama Lengkap </label>
                <label style="width: 5px;">:</label>
                <label style="width: 50%;">Ade Susanto</label>
            </div>
            <!-- Mulai Mengajar -->
            <div>
                <label style="width: 120px;">Mulai Mengajar </label>
                <label style="width: 5px;">:</label>
                <label style="width: 50%;">1800 - Sekarang</label>
            </div>
            <!-- Nip -->
            <div>
                <label style="width: 120px;">Nip </label>
                <label style="width: 5px;">:</label>
                <label style="width: 50%;">xxxxxxxxxxxx</label>
            </div>
            <!-- Keterangan -->
            <div>
                <label style="width: 120px;">
                    <u>
                        Keterangan
                    </u>
                </label>
            </div>
            <div>
                <p style="width: 100%;">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum iusto consequuntur corporis cupiditate repudiandae modi voluptate accusantium omnis voluptates tempore ipsam error quisquam labore, excepturi explicabo eius quae laudantium nulla praesentium odio nostrum, molestias nobis. Quisquam, dicta? Reprehenderit amet vero perspiciatis enim molestias cum rerum! Voluptas, autem exercitationem suscipit sed aliquid est officiis. Nihil odit quas nobis doloremque iure ipsa unde, corporis, at autem voluptates earum aliquam veritatis id quaerat non excepturi laborum quo
                </p>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>