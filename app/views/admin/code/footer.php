<<<<<<< HEAD
<<<<<<< HEAD
    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    
=======
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
=======
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
>>>>>>> parent of 2529033 (Perbaikan User FE)

>>>>>>> parent of 2529033 (Perbaikan User FE)
    <!-- Vendor JS Files -->
    <script src="public/assets/admin/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="public/assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="public/assets/admin/vendor/chart.js/chart.umd.js"></script>
    <script src="public/assets/admin/vendor/echarts/echarts.min.js"></script>
    <script src="public/assets/admin/vendor/quill/quill.js"></script>
    <script src="public/assets/admin/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="public/assets/admin/vendor/tinymce/tinymce.min.js"></script>
    <script src="public/assets/admin/vendor/php-email-form/validate.js"></script>

    <!-- Datables --> 
    <script src="https://cdn.datatables.net/2.1.4/js/dataTables.js"></script>
    <!-- <script src="/DataTables/datatables.js"></script> -->
    <!-- Template Main JS File -->
    <script src="public/assets/admin/js/main.js"></script>
    
    <!-- My Script --> 
    <script src="public/assets/scriptPPDB.js"></script>

     <script>

        $(document).ready(function() {
            fetch(`http://localhost/ditappdb/ViewAdminController/getAll`)
                    .then(response => {
                        if (!response.ok) {
                            throw new Error('Network response was not ok');
                        }
                        return response.json();
                    })
                    .then(data => {
                        console.log('Fetched data:', data);

                        const tableBody = document.getElementById('tableBody');
                    tableBody.innerHTML = ''; // Clear any existing rows

                    data.forEach((item, index) => {
                        const row = document.createElement('tr');

                            // Construct the row HTML
                            row.innerHTML = `
                                <td class="text-center">${index + 1}</td>
                                <td class="text-center">
                                    <div class="position-absolute ${item.jenis_daftar === 'Reguler' ? 'd-none' : ''}" 
                                        style="background-color: green; font-size: 10px; padding: 5px; color: white; border-radius: 5px; margin-top: -10px; margin-left: -5px; transform: rotate(-20deg);">
                                        Pindahan
                                    </div>
                                    <img style="width: 30px; height: 30px; border-radius: 100%;" 
                                        src="${item.profile ? 'public/assets/img/profile/' + item.profile : 'public/assets/img/default.png'}" 
                                        alt="foto">
                                </td>
                                <td class="text-center">${item.nama}</td>
                                <td class="text-center">${item.asal_sekolah}</td>
                                <td class="text-center">${item.no_telp}</td>
                                <td class="text-center">
                                    <button class="btn ${item.st === 0 ? 'btn-secondary' : item.st === 1 ? 'btn-success' : 'btn-danger'}">
                                        ${item.st === 0 ? 'Menunggu' : item.st === 1 ? 'Diterima' : 'Ditolak'}
                                    </button>
                                </td>
                                <td class="text-center">
                                    <div class="d-flex gap-3 justify-content-center">
                                        <button class="btn btn-primary text-light" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" data-siswa='${JSON.stringify(item)}'>
                                            <i class="ri-eye-line"></i>
                                        </button>
                                        <button class="btn btn-success text-light" type="button" data-bs-toggle="modal" data-bs-target="#editModal" data-siswa='${JSON.stringify(item)}'>
                                            <i class="ri-file-edit-line"></i>
                                        </button>
                                        <a class="btn btn-secondary text-light" type="button" target="_blank" href="${'ViewAdminController/PrintSiswa/' + item.id_siswa}">
                                            <i class="bi bi-printer"></i>
                                        </a>
                                    </div>
                                </td>
                            `;

                            // Append the row to the table body
                            tableBody.appendChild(row);
                        });
                    })
                    .catch(error => {
                        console.error('There was a problem with the fetch operation:', error);
                    });
                });

        document.getElementById('search').addEventListener('keydown', function(event) {
            let val = document.getElementById('search').value;

            let sendData = "";

            if(!val){
                fetch(`http://localhost/ppdb_dita/ViewAdminController/getAll`)
                    .then(response => {
                        if (!response.ok) {
                            throw new Error('Network response was not ok');
                        }
                        return response.json();
                    })
                    .then(data => {
                        console.log('Fetched data:', data);

                        const tableBody = document.getElementById('tableBody');
                    tableBody.innerHTML = ''; // Clear any existing rows

                    data.forEach((item, index) => {
                        const row = document.createElement('tr');

                            // Construct the row HTML
                            row.innerHTML = `
                                <td class="text-center">${index + 1}</td>
                                <td class="text-center">
                                    <div class="position-absolute ${item.jenis_daftar === 'Reguler' ? 'd-none' : ''}" 
                                        style="background-color: green; font-size: 10px; padding: 5px; color: white; border-radius: 5px; margin-top: -10px; margin-left: -5px; transform: rotate(-20deg);">
                                        Pindahan
                                    </div>
                                    <img style="width: 30px; height: 30px; border-radius: 100%;" 
                                        src="${item.profile ? 'public/assets/img/profile/' + item.profile : 'public/assets/img/default.png'}" 
                                        alt="foto">
                                </td>
                                <td class="text-center">${item.nama}</td>
                                <td class="text-center">${item.asal_sekolah}</td>
                                <td class="text-center">${item.no_telp}</td>
                                <td class="text-center">
                                    <button class="btn ${item.st === 0 ? 'btn-secondary' : item.st === 1 ? 'btn-success' : 'btn-danger'}">
                                        ${item.st === 0 ? 'Menunggu' : item.st === 1 ? 'Diterima' : 'Ditolak'}
                                    </button>
                                </td>
                                <td class="text-center">
                                    <div class="d-flex gap-3 justify-content-center">
                                        <button class="btn btn-primary text-light" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" data-siswa='${JSON.stringify(item)}'>
                                            <i class="ri-eye-line"></i>
                                        </button>
                                        <button class="btn btn-success text-light" type="button" data-bs-toggle="modal" data-bs-target="#editModal" data-siswa='${JSON.stringify(item)}'>
                                            <i class="ri-file-edit-line"></i>
                                        </button>
                                        <a class="btn btn-secondary text-light" type="button" target="_blank" href="${'ViewAdminController/PrintSiswa/' + item.id_siswa}">
                                            <i class="bi bi-printer"></i>
                                        </a>
                                    </div>
                                </td>
                            `;

                            // Append the row to the table body
                            tableBody.appendChild(row);
                        });
                    })
                    .catch(error => {
                        console.error('There was a problem with the fetch operation:', error);
                    });
            }


            if(!isNaN(parseInt(event.key)) || event.key == "Enter" ){
                
                if (val === "") {
                    
                    sendData += event.key;
                } else{
                    
                    sendData += val + event.key;
                }

                console.log(sendData);
                fetch(`http://localhost/ppdb_dita/ViewAdminController/jsonSiswa/${parseInt(sendData)}`)
                    .then(response => {
                        if (!response.ok) {
                            throw new Error('Network response was not ok');
                        }
                        return response.json();
                    })
                    .then(data => {
                        console.log('Fetched data:', data);

                        const tableBody = document.getElementById('tableBody');
                    tableBody.innerHTML = ''; // Clear any existing rows

                    data.forEach((item, index) => {
                        const row = document.createElement('tr');

                            // Construct the row HTML
                            row.innerHTML = `
                                <td class="text-center">${index + 1}</td>
                                <td class="text-center">
                                    <div class="position-absolute ${item.jenis_daftar === 'Reguler' ? 'd-none' : ''}" 
                                        style="background-color: green; font-size: 10px; padding: 5px; color: white; border-radius: 5px; margin-top: -10px; margin-left: -5px; transform: rotate(-20deg);">
                                        Pindahan
                                    </div>
                                    <img style="width: 30px; height: 30px; border-radius: 100%;" 
                                        src="${item.profile ? 'public/assets/img/profile/' + item.profile : 'public/assets/img/default.png'}" 
                                        alt="foto">
                                </td>
                                <td class="text-center">${item.nama}</td>
                                <td class="text-center">${item.asal_sekolah}</td>
                                <td class="text-center">${item.no_telp}</td>
                                <td class="text-center">
                                    <button class="btn ${item.st === 0 ? 'btn-secondary' : item.st === 1 ? 'btn-success' : 'btn-danger'}">
                                        ${item.st === 0 ? 'Menunggu' : item.st === 1 ? 'Diterima' : 'Ditolak'}
                                    </button>
                                </td>
                                <td class="text-center">
                                    <div class="d-flex gap-3 justify-content-center">
                                        <button class="btn btn-primary text-light" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" data-siswa='${JSON.stringify(item)}'>
                                            <i class="ri-eye-line"></i>
                                        </button>
                                        <button class="btn btn-success text-light" type="button" data-bs-toggle="modal" data-bs-target="#editModal" data-siswa='${JSON.stringify(item)}'>
                                            <i class="ri-file-edit-line"></i>
                                        </button>
                                        <a class="btn btn-secondary text-light" type="button" target="_blank" href="${'ViewAdminController/PrintSiswa/' + item.id_siswa}">
                                            <i class="bi bi-printer"></i>
                                        </a>
                                    </div>
                                </td>
                            `;

                            // Append the row to the table body
                            tableBody.appendChild(row);
                        });
                    })
                    .catch(error => {
                        console.error('There was a problem with the fetch operation:', error);
                    });

                // console.log('Key pressed:', parseInt(sendData));
            }else if(event.key == "Backspace"){
                sendData = document.getElementById('search').value;
                console.log(sendData);
                fetch(`http://localhost/ppdb_dita/ViewAdminController/jsonSiswa/${sendData}`)
                    .then(response => {
                        if (!response.ok) {
                            throw new Error('Network response was not ok');
                        }
                        return response.json();
                    })
                    .then(data => {
                        console.log('Fetched data:', data);
                    })
                    .catch(error => {
                        console.error('There was a problem with the fetch operation:', error);
                    });

            }else if( !isNaN(parseInt(event.key)) || event.key != "Enter" || event.key != "Alt" || event.key != "Ctrl" || event.key != "Backspace" ) {
                alert("Hanya Masukan Angka!");
                // document.getElementById('search').value = "";
            }

            // document.getElementById('output').textContent = 'Key pressed: ' + sendData;
        });

        let status_siswa = document.getElementById("status_siswa_df");

        if(status_siswa){
            if(status_siswa.value == 1){
            document.addEventListener("DOMContentLoaded", function(e) {
                alert("Selamat Anda telah di terima, untuk melanjutkan PENDAFTARAN diharapkan untuk datang ke SMK Profita Bandung dengan membawa surat lolos seleksi administrasi yang ada di feature pesan");
            });
        }else if(status_siswa.value == 2){
            document.addEventListener("DOMContentLoaded", function(e) {
                alert("Mohon maaf anda tidak bisa melanjutkan proses pendaftaran dikarenakan anda Tidak Lolos Dalam Tahap Seleksi Administrasi");
            });
        }
        }

     </script>
    
    <script>
    function changeSiswa(e){
<<<<<<< HEAD
<<<<<<< HEAD
        let kond = document.getElementById('jenis_daftar').value;
        let kond_db = document.getElementById('local_jenis_daftar').value;
        // console.log(kond);
        if(e == 2){

            if(!kond_db){
                document.getElementById('btn_reguler').classList.remove('btn-primary');
                document.getElementById('btn_reguler').classList.add('btn-secondary');

                document.getElementById('btn_pindah').classList.remove('btn-secondary');
                document.getElementById('btn_pindah').classList.add('btn-primary');
                
                document.getElementById('al_awal').classList.remove('d-none');
                document.getElementById('al_pindah').classList.remove('d-none');

                document.getElementById('jenis_daftar').value = "Pindahan";
            }else{
                alert("Tidak Bisa Merubah Jenis pendaftaran, jika ingin merubah harap hubungi Admin Kami Pindahan");
            }
            
        }else{
            if(!kond_db){
                document.getElementById('jenis_daftar').value = "Reguler";

                document.getElementById('btn_reguler').classList.add('btn-primary');
                document.getElementById('btn_reguler').classList.remove('btn-secondary');
                document.getElementById('btn_pindah').classList.add('btn-secondary');
                document.getElementById('btn_pindah').classList.remove('btn-primary');

                document.getElementById('al_awal').classList.add('d-none');
                document.getElementById('al_pindah').classList.add('d-none');

                document.getElementById('jenis_daftar').value = "Reguler";

            }else{
                alert("Tidak Bisa Merubah Jenis pendaftaran, jika ingin merubah harap hubungi Admin Kami Reguler");
            }
=======
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

=======
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

>>>>>>> parent of 2529033 (Perbaikan User FE)
            document.getElementById('al_awal').classList.add('d-none');
            document.getElementById('al_pindah').classList.add('d-none');
            
            sessionStorage.setItem('siswa', 'Reguler');
<<<<<<< HEAD
>>>>>>> parent of 2529033 (Perbaikan User FE)
=======
>>>>>>> parent of 2529033 (Perbaikan User FE)
        }
        
    }

    document.addEventListener("DOMContentLoaded", function(e) {
        // let kond = sessionStorage.getItem('siswa');
        let kond_db = document.getElementById('local_jenis_daftar').value;
        let awal = document.getElementById('al_awal');
        let pindah = document.getElementById('al_pindah');

        if(kond_db == "Pindahan"){
            awal.classList.remove('d-none');
            pindah.classList.remove('d-none');

            document.getElementById('btn_reguler').classList.remove('btn-primary');
            document.getElementById('btn_reguler').classList.add('btn-secondary');

            document.getElementById('btn_pindah').classList.remove('btn-secondary');
            document.getElementById('btn_pindah').classList.add('btn-primary');

        }else{
            document.getElementById('al_awal').classList.add('d-none');
            document.getElementById('al_pindah').classList.add('d-none');

            document.getElementById('btn_reguler').classList.add('btn-primary');
            document.getElementById('btn_reguler').classList.remove('btn-secondary');

            document.getElementById('btn_pindah').classList.add('btn-secondary');
            document.getElementById('btn_pindah').classList.remove('btn-primary');

        }

    });

    </script>
</body>
</html>

