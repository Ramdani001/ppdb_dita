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

}