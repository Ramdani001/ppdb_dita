 <style>
.card-overlay {
    position: absolute;
    top: 50%;
    left: 1px;
    transform: translateY(-50%);
    z-index: 1;
}

.card {
    background-color: rgba(255, 255, 255, 0.5); /* Warna dengan nuansa gelap */
    margin-top: 40%;
    height: 89px; /* Atur tinggi card sesuai keinginan Anda */
    width: 170%; /* Atur lebar card sesuai keinginan Anda */
    border-radius: 15px; /* Mengatur ujung card menjadi lebih melengkung */
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5); /* Menambahkan efek bayangan */
    text-align: left; 
}

.card-title {
    font-weight: bold; /* Membuat teks tulisan SMK menjadi tebal */
    margin-right: 10px; /* Memberikan jarak di kanan tulisan SMK */
}

.card-body {
    display: flex; /* Mengaktifkan flexbox */
    flex-direction: column; /* Mengatur tata letak menjadi kolom */
    overflow: auto; /* Menambahkan overflow untuk menampilkan scrollbar jika diperlukan */
}

.card-title {
    font-weight: bold; /* Membuat teks tulisan SMK menjadi tebal */
    margin-right: 10px; /* Memberikan jarak di kanan tulisan SMK */
}

.card-text {
    margin-right:0; /* Menghapus margin default pada paragraf */
}

 </style>
<section class="hero">
<div class="container hero-text">
    <!-- Konten header di sini -->
    <div class="card-overlay">
    <div class="card">
        <!-- Konten card di sini -->
        <div class="card-body">
            <h5 class="card-title">SMK PROFITA KOTA BANDUNG</h5>
        </div>
    </div>
</div>
</div>
</section>