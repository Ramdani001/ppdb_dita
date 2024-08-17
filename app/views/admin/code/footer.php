    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?= BASEURL ?>public/assets/admin/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="<?= BASEURL ?>public/assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= BASEURL ?>public/assets/admin/vendor/chart.js/chart.umd.js"></script>
    <script src="<?= BASEURL ?>public/assets/admin/vendor/echarts/echarts.min.js"></script>
    <script src="<?= BASEURL ?>public/assets/admin/vendor/quill/quill.js"></script>
    <script src="<?= BASEURL ?>public/assets/admin/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="<?= BASEURL ?>public/assets/admin/vendor/tinymce/tinymce.min.js"></script>
    <script src="<?= BASEURL ?>public/assets/admin/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="<?= BASEURL ?>public/assets/admin/js/main.js"></script>
    
    <!-- My Script --> 
    <script src="<?= BASEURL ?>public/assets/scriptPPDB.js"></script>

     <script> 

        let status_siswa = document.getElementById("status_siswa_df").value;

        if(status_siswa == 1){
            document.addEventListener("DOMContentLoaded", function(e) {
                alert("Selamat Anda telah di terima, untuk melanjutkan PENDAFTARAN diharapkan untuk datang ke SMK Profita Bandung dengan membawa surat lolos seleksi administrasi yang ada di feature pesan");
            });
        }else if(status_siswa == 2){
            document.addEventListener("DOMContentLoaded", function(e) {
                alert("Mohon maaf anda tidak bisa melanjutkan proses pendaftaran dikarenakan anda Tidak Lolos Dalam Tahap Seleksi Administrasi");
            });
        }

     </script>
    
    <script>
    function changeSiswa(e){
        if(e == 2){

            document.getElementById('btn_reguler').classList.remove('btn-primary');
            document.getElementById('btn_reguler').classList.add('btn-secondary');

            document.getElementById('btn_pindah').classList.remove('btn-secondary');
            document.getElementById('btn_pindah').classList.add('btn-primary');
            
            document.getElementById('al_awal').classList.remove('d-none');
            document.getElementById('al_pindah').classList.remove('d-none');
            
            sessionStorage.setItem('siswa', 'Pindahan');
            
        }else{
            document.getElementById('btn_reguler').classList.add('btn-primary');
            document.getElementById('btn_reguler').classList.remove('btn-secondary');
            document.getElementById('btn_pindah').classList.add('btn-secondary');
            document.getElementById('btn_pindah').classList.remove('btn-primary');

            document.getElementById('al_awal').classList.add('d-none');
            document.getElementById('al_pindah').classList.add('d-none');
            
            sessionStorage.setItem('siswa', 'Reguler');
        }
        
    }

    document.addEventListener("DOMContentLoaded", function(e) {
        let kond = sessionStorage.getItem('siswa');

        let awal = document.getElementById('al_awal');
        let pindah = document.getElementById('al_pindah');

        console.log(kond.value);

        if(kond == "Pindahan"){
            awal.classList.remove('d-none');
            pindah.classList.remove('d-none');

            document.getElementById('btn_reguler').classList.remove('btn-primary');
            document.getElementById('btn_reguler').classList.add('btn-secondary');

            document.getElementById('btn_pindah').classList.remove('btn-secondary');
            document.getElementById('btn_pindah').classList.add('btn-primary');

        }else{
            document.getElementById('btn_reguler').classList.add('btn-primary');
            document.getElementById('btn_reguler').classList.remove('btn-secondary');
            document.getElementById('btn_pindah').classList.add('btn-secondary');
            document.getElementById('btn_pindah').classList.remove('btn-primary');

        }

    });

    </script>
</body>
</html>

