<?php

class Berkas_Model{

    private $table = "user";
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function profile($data){

        date_default_timezone_set('Asia/Jakarta');

        $operators = ['+', '-', '*', '/'];
        $num1 = rand(1, 100);
        $num2 = rand(1, 100);
        $operator = $operators[array_rand($operators)];

        if ($operator == '/') {
            $num2 = rand(1, 10); 
            $num1 = $num2 * rand(1, 10); 
        }

        switch ($operator) {
            case '+':
                $result = $num1 + $num2;
                break;
            case '-':
                $result = $num1 - $num2;
                break;
            case '*':
                $result = $num1 * $num2;
                break;
            case '/':
                $result = $num1 / $num2;
                break;
        }

        // ==================================================

        $nameFile   = $_FILES['foto_siswa']['name'];
        $ukuran     = $_FILES['foto_siswa']['size'];
        $tmpName    = $_FILES['foto_siswa']['tmp_name'];

        $extensionVal = ['jpg', 'jpeg', 'png'];
        $extensionGambar = explode('.', $nameFile);
        $extensionGambar = strtolower(end($extensionGambar));

        if( $ukuran > 2500000 ){
            echo "<script>
                    alert('Ukuran Gambar Terlalu Besar !!!');
                  </script>";

            return false;
        };

        $namaFileBaru = uniqid();
        $namaFileBaru .= '.';
        $namaFileBaru .= $extensionGambar;

        $pindah = move_uploaded_file($tmpName, 'public/assets/img/profile/'. $namaFileBaru);

        if($pindah){
            $query = "INSERT INTO berkas VALUES (:id_berkas, :kk, :akta, :ijazah, :kip, :profile)";
            $this->db->query($query);
            
            $this->db->bind(':id_berkas', $result);
            $this->db->bind(':kk', '-');
            $this->db->bind(':akta', '-');
            $this->db->bind(':ijazah', '-');
            $this->db->bind(':kip', '-');
            $this->db->bind(':profile', $namaFileBaru);

            $this->db->execute();

            $inBer = $this->db->rowCount();

            if($inBer > 0){

                
            $email = $_POST['email'];

            $query = "SELECT * FROM person WHERE email='$email'";

            $this->db->query($query);
            $this->db->execute();

            $id_person = $this->db->single()['id_person'];
            
                // var_dump($id_person);
                // die();

                $queryP = "UPDATE person SET id_berkas='$result' WHERE id_person='$id_person'";
                $this->db->query($queryP);
                $this->db->execute();

                return $this->db->rowCount();

            }


        }

    }

    public function allBerkas($data){

        // var_dump($_FILES);
        // die();

        $id_person = $_POST['id_person'];

        $query = "SELECT * FROM person WHERE id_person='$id_person'";
        $this->db->query($query);
        $this->db->execute();

        $id_berkas = $this->db->single()['id_berkas'];

        // ============== KK =====================
        if(!empty($_FILES['kkFile']['name'])){

            $kkFile_nameFile   = $_FILES['kkFile']['name'];
            $kkFile_ukuran     = $_FILES['kkFile']['size'];
            $kkFile_tmpName    = $_FILES['kkFile']['tmp_name'];

            $kkFile_extensionVal = ['jpg', 'jpeg', 'png'];
            $kkFile_extensionGambar = explode('.', $kkFile_nameFile);
            $kkFile_extensionGambar = strtolower(end($kkFile_extensionGambar));

            if( $kkFile_ukuran > 2500000 ){
                echo "<script>
                        alert('Ukuran Gambar Terlalu Besar !!!');
                    </script>";

                return false;
            };

            $kkFile_namaFileBaru = uniqid();
            $kkFile_namaFileBaru .= '.';
            $kkFile_namaFileBaru .= $kkFile_extensionGambar;

            $kkFile_pindah = move_uploaded_file($kkFile_tmpName, 'public/assets/img/kk/'. $kkFile_namaFileBaru);

            $query = "UPDATE berkas SET kk='$kkFile_namaFileBaru' WHERE id_berkas='$id_berkas'";
            $this->db->query($query);

            $this->db->execute();
        }
        // ============== KK =====================

        // ============== Akta =====================
        if(!empty($_FILES['aktaFile']['name'])){
            $aktaFile_nameFile   = $_FILES['aktaFile']['name'];
            $aktaFile_ukuran     = $_FILES['aktaFile']['size'];
            $aktaFile_tmpName    = $_FILES['aktaFile']['tmp_name'];

            $aktaFile_extensionVal = ['jpg', 'jpeg', 'png'];
            $aktaFile_extensionGambar = explode('.', $aktaFile_nameFile);
            $aktaFile_extensionGambar = strtolower(end($aktaFile_extensionGambar));

            if( $aktaFile_ukuran > 2500000 ){
                echo "<script>
                        alert('Ukuran Gambar Terlalu Besar !!!');
                    </script>";

                return false;
            };

            $aktaFile_namaFileBaru = uniqid();
            $aktaFile_namaFileBaru .= '.';
            $aktaFile_namaFileBaru .= $aktaFile_extensionGambar;

            $aktaFile_pindah = move_uploaded_file($aktaFile_tmpName, 'public/assets/img/akta/'. $aktaFile_namaFileBaru);

            $query = "UPDATE berkas SET akta='$aktaFile_namaFileBaru' WHERE id_berkas='$id_berkas'";
            $this->db->query($query);

            $this->db->execute();

        }
        // ============== Akta =====================

        // ============== Ijazah =====================
        if(!empty($_FILES['ijazahFile']['name'])){

            $ijazahFile_nameFile   = $_FILES['ijazahFile']['name'];
            $ijazahFile_ukuran     = $_FILES['ijazahFile']['size'];
            $ijazahFile_tmpName    = $_FILES['ijazahFile']['tmp_name'];

            $ijazahFile_extensionVal = ['jpg', 'jpeg', 'png'];
            $ijazahFile_extensionGambar = explode('.', $ijazahFile_nameFile);
            $ijazahFile_extensionGambar = strtolower(end($ijazahFile_extensionGambar));

            if( $ijazahFile_ukuran > 2500000 ){
                echo "<script>
                        alert('Ukuran Gambar Terlalu Besar !!!');
                    </script>";

                return false;
            };

            $ijazahFile_namaFileBaru = uniqid();
            $ijazahFile_namaFileBaru .= '.';
            $ijazahFile_namaFileBaru .= $ijazahFile_extensionGambar;

            $ijazahFile_pindah = move_uploaded_file($ijazahFile_tmpName, 'public/assets/img/ijazah/'. $ijazahFile_namaFileBaru);

            $query = "UPDATE berkas SET ijazah='$ijazahFile_namaFileBaru' WHERE id_berkas='$id_berkas'";
            $this->db->query($query);

            $this->db->execute();

            $inBer = $this->db->rowCount();
        }
        // ============== Ijazah =====================

        // ============== Kip =====================
        if(!empty($_FILES['kipFile']['name'])){
            $kipFile_nameFile   = $_FILES['kipFile']['name'];
            $kipFile_ukuran     = $_FILES['kipFile']['size'];
            $kipFile_tmpName    = $_FILES['kipFile']['tmp_name'];

            $kipFile_extensionVal = ['jpg', 'jpeg', 'png'];
            $kipFile_extensionGambar = explode('.', $kipFile_nameFile);
            $kipFile_extensionGambar = strtolower(end($kipFile_extensionGambar));

            if( $kipFile_ukuran > 2500000 ){
                echo "<script>
                        alert('Ukuran Gambar Terlalu Besar !!!');
                    </script>";

                return false;
            };

            $kipFile_namaFileBaru = uniqid();
            $kipFile_namaFileBaru .= '.';
            $kipFile_namaFileBaru .= $kipFile_extensionGambar;

            $kipFile_pindah = move_uploaded_file($kipFile_tmpName, 'public/assets/img/ijazah/'. $kipFile_namaFileBaru);

            $query = "UPDATE berkas SET ijazah='$kipFile_namaFileBaru' WHERE id_berkas='$id_berkas'";
            $this->db->query($query);

            $this->db->execute();

        }
        // ============== Kip =====================
        return $this->db->rowCount();
    }

}