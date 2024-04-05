<style>
.section .kotak {
  display: flex; /* Mengaktifkan Flexbox */
  align-items: center; /* Menyelaraskan item secara vertikal */
  justify-content: space-between; /* Menyebar item secara merata */
  padding: 20px; /* Memberikan ruang di dalam kotak */
  gap: 20px; /* Menambahkan jarak antara elemen flex */
}

.kotak > .foto, .kotak > .teks-profil {
    text-align: justify; /* Menjadikan teks rata kiri dan kanan */
    text-justify: inter-word; /* Memperbaiki pemisahan kata */
    width: 100%; /* Membuat foto mengisi kontainer .foto */
  height: 537px; /* Menjaga aspek rasio foto */
  max-width: 100%; /* Memastikan foto tidak melebihi kotak .foto */
  margin-bottom: 3%;
  margin-right: 1%;
}

.kotak .foto img {
  width: 100%; /* Membuat foto mengisi kontainer .foto */
  height: 537px; /* Menjaga aspek rasio foto */
  max-width: 100%; /* Memastikan foto tidak melebihi kotak .foto */
  margin-bottom: 3%;
  margin-top: 1%;
  margin-left: 1%;
}

.kotak .teks-profil {
  /* Tambahkan gaya khusus untuk teks jika diperlukan */
}
.button-on {
  background-color: blue;
  color: white;
  border: none;
  padding: 10px 20px;
  cursor: pointer;
  border-radius: 5px;
}

.button-off {
  background-color: transparent;
  color: black;
  border: 1px solid blue;
  padding: 10px 20px;
  cursor: pointer;
  border-radius: 5px;
}

.button-on:focus, .button-off:focus {
  outline: none;
}

.content {
  margin-top: 20px;
}

.button-container {
  display: flex;
}

</style>

<section class="section">
  <div class="kotak">
    <div class="foto">
      <!-- Tempatkan foto di sini -->
      <img src="assets/img/BG.png" alt="Profil" style="border-radius: 15px;">
    </div>
    <div class="teks-profil">
      <!-- Tempatkan teks profil di sini -->
      <div class="button-container">
        <button id="profilButton" class="button-on" onclick="toggleProfile()">Profil</button>
        <button id="deskripsiButton" class="button-off" onclick="toggleDescription()">Deskripsi</button>
      </div>
      <div id="profil" class="content">
        <p class="teks teks-deskripsi" style="margin-top: 6%;">lipsum.app - lorem ipsum generator for web. Dummy Image. 
        Simply put image dimensions (width & height) after our URL. Optionally, specify colors after the image dimensions. 
        Colors must be</p>
      </div>
      <div id="deskripsi" class="content" style="display: none;">
        <p class="teks teks-deskripsi" style="margin-top: 6%;">In publishing and graphic design, Lorem ipsum is a placeholder text 
        commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. 
        Lorem ipsum may be used as a placeholder before the final copy is available. It is also used to temporarily replace 
        text in a process called greeking, which allows designers to consider the form of a webpage or publicati</p>
      </div>
    </div>
  </div>
</section>

<script>
function toggleProfile() {
  document.getElementById("profil").style.display = "block";
  document.getElementById("deskripsi").style.display = "none";
  document.getElementById("profilButton").classList.add("button-on");
  document.getElementById("deskripsiButton").classList.remove("button-on");
}

function toggleDescription() {
  document.getElementById("profil").style.display = "none";
  document.getElementById("deskripsi").style.display = "block";
  document.getElementById("profilButton").classList.remove("button-on");
  document.getElementById("deskripsiButton").classList.add("button-on");
}
</script>