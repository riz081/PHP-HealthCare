<?php



function query($query) {
		global $conn;
		$result = mysqli_query($conn, $query);
		$rows = [];
		while( $row = mysqli_fetch_assoc($result) ) {
			$rows[] = $row;
		}

		return $rows;
	}

	// COVID
function act_covid($data) {

	global $conn;

	$nama_pasien = $_POST["nama_pasien"];
    $tanggal_cvd = $_POST["tanggal_cvd"];
    $Q1 = $_POST["Q1"];
    $Q2 = $_POST["Q2"];
    $Q3 = $_POST["Q3"];
    $Q4 = $_POST["Q4"];
	$Q5 = $_POST["Q5"];
    $Q6 = $_POST["Q6"];
    $Q7 = $_POST["Q7"];
    $Q8 = $_POST["Q8"];
	$Q9 = $_POST["Q9"];
    $Q10 = $_POST["Q10"];

    $jml_salah = $Q1 + $Q2 + $Q3 + $Q4 + $Q5 + $Q6 + $Q7 + $Q8 + $Q9 + $Q10;

    if ($jml_salah == 10) {
			$hasil = "Negatif Covid 19";
		} else if ($jml_salah == 9) {
			$hasil = "Negatif Covid 19";
		} else if ($jml_salah == 8) {
			$hasil = "Gejala Covid 19 Ringan";
		} else if ($jml_salah == 7) {
			$hasil = "Gejala Covid 19 Ringan";
		} else if ($jml_salah == 6) {
			$hasil = "Gejala Covid 19 Berat";
		} else if ($jml_salah == 5) {
			$hasil = "Gejala Covid 19 Berat";
		} else if ($jml_salah == 4) {
			$hasil = "Terpapar Covid 19";
		} else if ($jml_salah == 3) {
			$hasil = "Terpapar Covid 19";
		} else {
			$hasil = "Terpapar Covid 19";
		}

    $query = "INSERT INTO covid
                VALUES
                ('', '$nama_pasien', '$tanggal_cvd', '$Q1', '$Q2', '$Q3', '$Q4', '$Q5', '$Q6', '$Q7', '$Q8', '$Q9', '$Q10' , '$jml_salah', '$hasil')
            ";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

// DEMAM

function act_demam($data) {

	global $conn;

	$nama_pasien = $_POST["nama_pasien"];
    $tanggal_dbd = $_POST["tanggal_dbd"];
    $Q1 = $_POST["Q1"];
    $Q2 = $_POST["Q2"];
    $Q3 = $_POST["Q3"];
    $Q4 = $_POST["Q4"];
    $Q5 = $_POST["Q5"];
	$Q6 = $_POST["Q6"];
    $Q7 = $_POST["Q7"];
    $Q8 = $_POST["Q8"];
    $Q9 = $_POST["Q9"];
    $Q10 = $_POST["Q10"];
	


    $jml_salah = $Q1 + $Q2 + $Q3 + $Q4 + $Q5 + $Q6 + $Q7 + $Q8 + $Q9 + $Q10;

    if ($jml_salah == 10 && $jml_salah == 9) {
			$hasil = "Tidak mengalami demam berdarah";
		} else if ($jml_salah == 8 && $jml_salah == 7 ) {
			$hasil = "Gejala ringan";
		}else if ($jml_salah == 6 && $jml_salah == 5 ) {
			$hasil = "Gejala ringan";
		} 
		 else if ($jml_salah == 4 && $jml_salah == 3) {
			$hasil = "Gejala demam berdarah";
		} else {
			$hasil = "Mengalami demam berdarah";
		} 

    $query = "INSERT INTO demam
                VALUES
                ('', '$nama_pasien', '$tanggal_dbd', '$Q1', '$Q2', '$Q3', '$Q4', '$Q5', '$Q6', '$Q7', '$Q8', '$Q9', '$Q10', '$jml_salah', '$hasil')
            ";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

// DIABETES

function act_diabetes($data) {

	global $conn;

	$nama_pasien = $_POST["nama_pasien"];
    $tanggal_gd = $_POST["tanggal_gd"];
    $Q1 = $_POST["Q1"];
    $Q2 = $_POST["Q2"];
    $Q3 = $_POST["Q3"];
    $Q4 = $_POST["Q4"];
    $Q4 = $_POST["Q5"];
    $Q6 = $_POST["Q6"];
    $Q7 = $_POST["Q7"];
    $Q8 = $_POST["Q8"];
    $Q9 = $_POST["Q9"];
    $Q10 = $_POST["Q10"];


    $jml_salah = $Q1 + $Q2 + $Q3 + $Q4 + $Q5 + $Q6 + $Q7 + $Q8 + $Q9 + $Q10;

	if ($jml_salah > 8 && $jml_salah <= 10) {
			$hasil = "Gejala diabetes ringan";
		} else if ($jml_salah > 5 && $jml_salah <= 8) {
			$hasil = "Gejala diabetes sedang";
		} else if ($jml_salah > 3 && $jml_salah <= 5) {
			$hasil = "Gejala diabetes berat";
		} else if ($jml_salah >= 0 && $jml_salah <= 3) {
			$hasil = "Diabetes";
		}    

    $query = "INSERT INTO diabetes
                VALUES
                ('', '$nama_pasien', '$tanggal_gd', '$Q1', '$Q2', '$Q3', '$Q4', '$Q5', '$Q6', '$Q7', '$Q8', '$Q9', '$Q10', '$jml_salah', '$hasil')
            ";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

// HARIAN
function act_harian($data) {

	global $conn;

	$nama_pasien = $_POST["nama_pasien"];
    $tanggal = $_POST["tanggal"];
    $karbo = $_POST["karbo"];
    $protein = $_POST["protein"];
    $sayur = $_POST["sayur"];
    $buah = $_POST["buah"];

    $vitamin = $_POST["vitamin"];
    $gula = $_POST["gula"];
    $garam = $_POST["garam"];
    $lainnya = $_POST["lainnya"];
    $aktivitas = $_POST["aktivitas"];
    $jenis_aktivitas = $_POST["jenis_aktivitas"];

    $durasi = $_POST["durasi"];
    $obat = $_POST["obat"];
    $nama_obat = $_POST["nama_obat"];
    $intensitas = $_POST["intensitas"];
    $keluhan = $_POST["keluhan"];
    $mandi = $_POST["mandi"];

    $potong_kuku = $_POST["potong_kuku"];
    $gosok_gigi = $_POST["gosok_gigi"];
    $memakai_sabun = $_POST["memakai_sabun"];
    $kerapian = $_POST["kerapian"];
    $merokok = $_POST["merokok"];
    $jml_rokok = $_POST["jml_rokok"];


    $query = "INSERT INTO kontrol_harian
                VALUES
                ('', '$nama_pasien', '$tanggal', '$karbo', '$protein', '$sayur', '$buah', '$vitamin', '$gula', '$garam', '$lainnya', '$aktivitas', '$jenis_aktivitas', '$durasi', '$obat', '$nama_obat', '$intensitas', '$keluhan', '$mandi', '$potong_kuku', '$gosok_gigi', '$memakai_sabun', '$kerapian', '$merokok', '$jml_rokok')
            ";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}


// PEKANAN
function act_pekanan($data) {

	global $conn;

	$nama_pasien = $_POST["nama_pasien"];
    $tanggal = $_POST["tanggal"];
    $td = $_POST["td"];
    $tb = $_POST["tb"];
    $bb = $_POST["bb"];
    $imt = $_POST["imt"];

    $lp = $_POST["lp"];
    $gula_darah = $_POST["gula_darah"];
    $kolestrol = $_POST["kolestrol"];
    $edukasi = $_POST["edukasi"];
    $catatan = $_POST["catatan"];

    


    $query = "INSERT INTO kontrol_pekanan
                VALUES
                ('', '$nama_pasien', '$tanggal', '$td', '$lp', '$bb', '$tb', '$imt', '$gula_darah', '$kolestrol', '$edukasi', '$catatan')
            ";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

// JADWAL
function act_jadwal($data) {

	global $conn;

	$nama_pasien = $_POST["nama_pasien"];
    $tanggal = $_POST["tanggal"];
    $hari = $_POST["hari"];
    $jam = $_POST["jam"];
        
    $query = "INSERT INTO jadwal
                VALUES
                ('', '$nama_pasien', '$tanggal', '$hari', '$jam')
            ";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}


class Pasien {

	private $mysqli;


	function __construct($conn) {
		$this->mysqli = $conn;
	}

	public function tampil($id = null) {
		$db = $this->mysqli->conn;
		$sql = "SELECT * FROM tb_pasien";
		if($id != null) {
			$sql .= " WHERE id_pasien = $id";
		}
		$query = $db->query($sql) or die ($db->error);
		return $query;
	}

	public function tambah($nama_lengkap, $alamat, $usia, $jenis_kelamin, $status, $agama, $no_hp, $foto) 
	{
		$db = $this->mysqli->conn;
		$db->query("INSERT INTO tb_pasien() VALUES ('', '$nama_lengkap', '$alamat', '$usia', '$jenis_kelamin', '$status', '$agama', '$no_hp', '$foto')") or die ($db->error);
	}

	public function edit($id, $nama_lengkap, $alamat, $usia, $jenis_kelamin, $status, $agama, $no_hp, $foto) 
	{
		$db = $this->mysqli->conn;
		$db->query("UPDATE tb_pasien SET

			nama_lengkap = '$nama_lengkap',
			alamat = '$alamat',
			usia = '$usia',
			jenis_kelamin = '$jenis_kelamin',
			status = '$status',
			agama = '$agama',
			no_hp = '$no_hp',
			foto = '$foto'

			WHERE id_pasien = $id
			


		") or die ($db->error);
	}

	public function delete($id) {
		$db = $this->mysqli->conn;
		$db->query("DELETE FROM tb_pasien WHERE id_pasien = $id") or die ($db->error);
	}

	function __destruct() {
		$db = $this->mysqli->conn;
		$db->close();
	}

	public function view($id, $nama_lengkap, $alamat, $usia, $jenis_kelamin, $status, $agama, $no_hp, $foto) 
	{
		$db = $this->mysqli->conn;
		$db->query("SELECT * FROM tb_pasien") or die ($db->error);
	}


	// COVID
	public function tampil_covid($id = null) {
		$db = $this->mysqli->conn;
		$sql = "SELECT * FROM covid";
		if($id != null) {
			$sql .= " WHERE id = $id";
		}
		$query = $db->query($sql) or die ($db->error);
		return $query;
	}

	// DEMAM
	public function tampil_demam($id = null) {
		$db = $this->mysqli->conn;
		$sql = "SELECT * FROM demam";
		if($id != null) {
			$sql .= " WHERE id = $id";
		}
		$query = $db->query($sql) or die ($db->error);
		return $query;
	}	

	// DIABETES
	public function tampil_diabetes($id = null) {
		$db = $this->mysqli->conn;
		$sql = "SELECT * FROM diabetes";
		if($id != null) {
			$sql .= " WHERE id = $id";
		}
		$query = $db->query($sql) or die ($db->error);
		return $query;
	}

	// HARIAN
	public function tampil_harian($id = null) {
		$db = $this->mysqli->conn;
		$sql = "SELECT * FROM kontrol_harian";
		if($id != null) {
			$sql .= " WHERE id = $id";
		}
		$query = $db->query($sql) or die ($db->error);
		return $query;
	}

	// PEKANAN
	public function tampil_pekanan($id = null) {
		$db = $this->mysqli->conn;
		$sql = "SELECT * FROM kontrol_pekanan";
		if($id != null) {
			$sql .= " WHERE id = $id";
		}
		$query = $db->query($sql) or die ($db->error);
		return $query;
	}

	// JADWAL
	public function tampil_jadwal($id = null) {
		$db = $this->mysqli->conn;
		$sql = "SELECT * FROM jadwal";
		if($id != null) {
			$sql .= " WHERE id = $id";
		}
		$query = $db->query($sql) or die ($db->error);
		return $query;
	}

	public function delete_agenda($id) {
		$db = $this->mysqli->conn;
		$db->query("DELETE FROM jadwal WHERE id = $id") or die ($db->error);
	}

}

?>