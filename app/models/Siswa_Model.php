<?php

class Siswa_Model{

    private $table = "siswa";
    private $db;

    public function __construct(){
        $this->db = new Database;
    }
    
    public function getAll(){
        $this->db->query('SELECT * FROM '. $this->table .' s INNER JOIN person p ON s.id_person = p.id_person RIGHT JOIN berkas k ON p.id_berkas = k.id_berkas RIGHT JOIN parents z ON z.id_siswa = s.id_siswa');
        return $this->db->resultSet();
    }

    public function insert(){
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

        $id_person    = $_POST['id_person'];

        $created_at = date('Y-m-d H:i:s');
        $sql = "SELECT * FROM person WHERE id_person = :id_person";
        $this->db->query($sql);
        $this->db->bind(':id_person', $id_person);
        $id_person = $this->db->single()['id_person'];
        
        $sqlS = "SELECT * FROM siswa WHERE id_person=:id_person";
        $this->db->query($sqlS);
        $this->db->bind(':id_person', $id_person);
        $id_siswa = $this->db->single();

        if(!$id_siswa){ 
            $query = "INSERT INTO siswa VALUES (:result, :id_person, :no_pendaftaran, :asal_sekolah, :npsn_sekolah_asal,:nisn, :nik, :biaya_sekolah, :sd, :smp, :kip, :cita_cita, :hobi, :anak_ke, :transportasi, :jarak_sekolah, :waktu_tempuh, :jml_saudara, :no_kk, :kepala_keluarga, :status, :jurusan, ':id_m', :created_at, :created_at)";
    
            $this->db->query($query);

            $this->db->bind(':result', $result);
            $this->db->bind(':id_person', $_POST['id_person']);
            $this->db->bind(':no_pendaftaran', $result);
            $this->db->bind(':asal_sekolah', $_POST['asal_sekolah']);
            $this->db->bind(':npsn_sekolah_asal', '');
            $this->db->bind(':nisn', $_POST['nisn']);
            $this->db->bind(':nik', '');
            $this->db->bind(':nisn', $_POST['nisn']); 
            $this->db->bind(':biaya_sekolah', ''); 
            $this->db->bind(':sd', '');
            $this->db->bind(':smp', '');
            $this->db->bind(':kip', $_POST['kip']);
            $this->db->bind(':cita_cita', $_POST['cita_cita']);
            $this->db->bind(':hobi', $_POST['hobi']);
            $this->db->bind(':anak_ke', $_POST['anak_ke']);
            $this->db->bind(':transportasi', $_POST['transportasi']);
            $this->db->bind(':jarak_sekolah', $_POST['jarak_kesekolah']);
            $this->db->bind(':waktu_tempuh', $_POST['waktu_tempuh']);
            $this->db->bind(':jml_saudara', $_POST['jml_saudara']);
            $this->db->bind(':no_kk', '');
            $this->db->bind(':kepala_keluarga', '');
            $this->db->bind(':status', 0);
            $this->db->bind(':jurusan', $_POST['jurusan']);
            $this->db->bnd(':id_m', 0);
            $this->db->bind(':created_at', $created_at);
            
        }else{
            $id_person                 = $_POST['id_person'];
            $no_pendaftaran            = $result;
            $asal_sekolah              = $_POST['asal_sekolah'];
            $npsn_sekolah_asal         = '';
            $nisn                      = $_POST['nisn'];
            $nik                       = '';
            $nisn                      = $_POST['nisn'];
            $biaya_sekolah             = '';
            $sd                        = ''; 
            $smp                       = '';
            $kip                       = $_POST['kip'];
            $cita_cita                 = $_POST['cita_cita'];
            $hobi                      = $_POST['hobi'];
            $anak_ke                   = $_POST['anak_ke'];
            $transportasi              = $_POST['transportasi'];
            $jarak_sekolah             = $_POST['jarak_kesekolah'];
            $waktu_tempuh              = $_POST['waktu_tempuh'];
            $jml_saudara               = $_POST['jml_saudara'];
            $no_kk                     = '';
            $kepala_keluarga           = '';
            $jurusan                   = $_POST['jurusan'];

            $query = "UPDATE siswa SET no_pendaftaran='$no_pendaftaran', asal_sekolah='$asal_sekolah', npsn_sekolah_asal='$npsn_sekolah_asal',nisn='$nisn', nik='$nik', biaya_sekolah='$biaya_sekolah', sd='$sd', smp='$smp', kip='$kip', cita_cita='$cita_cita', hobi='$hobi', anak_ke='$anak_ke', transportasi='$transportasi', jarak_sekolah='$jarak_sekolah', waktu_tempuh='$waktu_tempuh', jml_saudara='$jml_saudara',  no_kk='$no_kk', kepala_keluarga='$kepala_keluarga', jurusan='$jurusan', updated_at='$created_at'";

            $this->db->query($query);
        }
 
        $this->db->execute();
        return $this->db->rowCount();
        
    }
 
    public function editStatus(){

        $id_siswa = $_POST['det_id_siswa'];
        $stat = $_POST['edit_stat_siswa'];

        $sqlS = "UPDATE siswa SET status='$stat',  WHERE id_siswa=:id_siswa";
        $this->db->query($sqlS); 
        $this->db->bind(':id_siswa', $id_siswa);
        $id_siswa = $this->db->single();
 
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function getData(){
        $query = "SELECT COUNT(*) as total_rows FROM siswa WHERE status = 0";
        $this->db->query($query);
        $result = $this->db->single(); // Menggunakan single() karena kita hanya mengharapkan satu baris hasil
        return $result['total_rows']; // Mengembalikan jumlah baris dengan status 0

    }

}
