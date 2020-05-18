<?php 
//koneksi ke database pake mysqli (improved latest mySQL)
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

function query($query){
	global $conn;
	$result = mysqli_query($conn, $query); //INGAT!!! PARAMETER $QUERY HANYA BOLEH DILAKUKAN SKALI QUERY SAJA
	if (!$result) { //sekedar cek semisal tidak dihasilkan result atau error, maka akan ada notif error dari mysqli
		echo mysqli_error($conn);
	}
	$rows = []; //kita tampung di array yang lebih besar, coba kalo dihapus baris ini akan ERROR jika hasil pencarian tidak ada
	while ($row=mysqli_fetch_assoc($result) ) { //wajib! dimana hasil mysqli_query di fetch/diambil SATU PERSATU tiap record dari $result selama masih ada data kosong
		$rows[]=$row; //var $row hanya dikenal di fungsi ini, meskipun sudah ada var $row di index.php, tapi mereka beda. COBA kalo $row dibuat global
	}
	return $rows; //tanpa memberi tanda [], $rows ini bentuknya ARRAY DIMENSI 2
}

function tambah($data)
{
	global $conn;
	//cek apakah data yang diterima berupa tag html? maka akan diolah dengan 'htmlspecialchars' agar data yang masuk hanya berupa string, BUKAN SYNTAX. jadi semisal data yang diterima berupa SYNTAX HTML maka TIDAK dijalankan, tetapi dikonversi jadi string
	$nrp=htmlspecialchars($data["nrp"]);
	$nama=htmlspecialchars($data["nama"]);
	$email=htmlspecialchars($data["email"]);
	$jurusan=htmlspecialchars($data["jurusan"]);
	$alamat=htmlspecialchars($data["alamat"]);
	$birthday=htmlspecialchars($data["birthday"]);
	$gender=htmlspecialchars($data["gender"]);

	//upload gambar
	$gambar = upload(); //jika fungsi berjalan benar maka gambar akan diupload ke penyimpanan temp dalam XAMPP, dan akan memberi return value berupa nama file gambar tsb
	if(!$gambar){ //if $gambar == false
		return false; //jika tidak berisi apa2 atau dalam artian fungsi upload gagal, maka nilai kembali fungsi tambah ini bernilai FALSE atau NULL (gaada apa2)
	}

//line bawah ini untuk menyederhanakan agar di dalam syntax SQL nantinya tidak ada redundansi tanda kutip
	$query = "INSERT INTO mahasiswa(id, nama, nrp, email, jurusan, alamat, birthday, gender, gambar) VALUES ('', '$nama', '$nrp', '$email', '$jurusan', '$alamat', '$birthday', '$gender', '$gambar')"; 
	//urutan harus SAMA dan jumlahe juga. GAPAKE PETIK AKAN GAGAL, DAN JUGA KALO PETIKNYA 2 GABISA. COBA CEK YANG SQL UPDATE!
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn); //lalu cek apakah koneksi data pada database berhasil?
	//jika berhasil maka menghasilkan nilai balik berupa jumlah baris yang affected, jika gagal nilai baliknya jadi -1
}

function hapus($id)
{
	global $conn;
	mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");
	return mysqli_affected_rows($conn);
}

function ubah($data, $username, $user)
{
	global $conn;
	//cek apakah data yang diterima berupa tag html? maka akan diolah dengan 'htmlspecialchars' agar data yang masuk hanya berupa string, BUKAN SYNTAX. jadi semisal data yang diterima berupa SYNTAX HTML maka TIDAK dijalankan, tetapi dikonversi jadi string
	$id=$data["id"];
	$nama=htmlspecialchars($data["nama"]);
	// $nrp=htmlspecialchars($data["nrp"]);
	$email=htmlspecialchars($data["email"]);
	// $jurusan=htmlspecialchars($data["jurusan"]);
	$alamat=htmlspecialchars($data["alamat"]);
	$gender=htmlspecialchars($data["gender"]);
	$gambarLama=htmlspecialchars($data["gambarLama"]); //yg ini gausa special chars gaapa

	//cek apakah user pilih gambar baru atau engga
	if($_FILES['gambar']['error'] === 4){ //jika errornya 4 maka user ga nginputkan gambar
		$gambar = $gambarLama;
	} else{ //misal jika error == 0 berarti sudah upload gambar
		$gambar = upload($username, $gambarLama, $user);
		if($gambar === false){
			
			return false;
		}
	}
	if ($user == 'dosen') {
		$start_work = htmlspecialchars($data["start_work"]);
		$query = "UPDATE dosen SET  
					nama = '$nama',
					email = '$email',
					alamat = '$alamat',
					start_work = '$start_work',
					gender = '$gender',
					gambar = '$gambar'
				  WHERE id = $id
					"; 
	} elseif ($user == 'mahasiswa') {
		$birthday=htmlspecialchars($data["birthday"]);
		$query = "UPDATE mahasiswa SET  
					nama = '$nama',
					email = '$email',
					alamat = '$alamat',
					birthday = '$birthday',
					gender = '$gender',
					gambar = '$gambar'
				  WHERE id = $id
					"; 
	}
	//nrp dan field setelahe diberi kutip 1 karena nrp berbentuk string, sedangkan id TIDAK. KALO GAPAKE KUTIP NRP NYA TERNYATA BISA (karena masih diangap string berbentuk int ) SEDANGKAN KALO DI FIELD LAIN GAPAKE KUTIP MAKA GABISA
				//  dan KALO PAKE KUTIP 2 GABISA Karena dianggap string biasa

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn); //lalu cek apakah koneksi data pada database berhasil?
	//jika berhasil maka menghasilkan nilai balik berupa jumlah baris yang affected, jika gagal nilai baliknya jadi -1
}

function ubah_admin($data, $username, $user)
{
	global $conn;
	//cek apakah data yang diterima berupa tag html? maka akan diolah dengan 'htmlspecialchars' agar data yang masuk hanya berupa string, BUKAN SYNTAX. jadi semisal data yang diterima berupa SYNTAX HTML maka TIDAK dijalankan, tetapi dikonversi jadi string
	$id=$data["id"];
	$nama=htmlspecialchars($data["nama"]);
	$email=htmlspecialchars($data["email"]);
	$prodi=htmlspecialchars($data["prodi"]);
	$alamat=htmlspecialchars($data["alamat"]);
	$gender=htmlspecialchars($data["gender"]);

	if ($user == 'dosen') {
		$start_work = htmlspecialchars($data["start_work"]);
		$nip = htmlspecialchars($data["nip"]);
		$query = "UPDATE dosen SET  
					nama = '$nama',
					kelas_id = '$prodi',
					nip = '$nip',
					email = '$email',
					alamat = '$alamat',
					start_work = '$start_work',
					gender = '$gender'
				  WHERE id = $id
					"; 
	} elseif ($user == 'mahasiswa') {
		$birthday=htmlspecialchars($data["birthday"]);
		$nrp = htmlspecialchars($data["nrp"]);
		$query = "UPDATE mahasiswa SET  
					nama = '$nama',
					kelas_id = '$prodi',
					nrp = '$nrp',
					email = '$email',
					alamat = '$alamat',
					birthday = '$birthday',
					gender = '$gender'
				  WHERE id = $id
					"; 
	}
	//nrp dan field setelahe diberi kutip 1 karena nrp berbentuk string, sedangkan id TIDAK. KALO GAPAKE KUTIP NRP NYA TERNYATA BISA (karena masih diangap string berbentuk int ) SEDANGKAN KALO DI FIELD LAIN GAPAKE KUTIP MAKA GABISA
				//  dan KALO PAKE KUTIP 2 GABISA Karena dianggap string biasa

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn); //lalu cek apakah koneksi data pada database berhasil?
	//jika berhasil maka menghasilkan nilai balik berupa jumlah baris yang affected, jika gagal nilai baliknya jadi -1
}

function upload($Uniq_name, $file_lama, $user){
	if($file_lama !== NULL && $user == 'dosen') 
		unlink('img/' . $file_lama);
	elseif($file_lama !== NULL && $user == 'mahasiswa') //KENAPA KALO HANYA GANTI GAMBAR, STELAH SELESAI GA MENGARAH KE INDEXMHS?
		unlink('img/' . $file_lama);
	//$_FILES BERISIKAN array multidimensi dengan isi dalam index['gambar'] (nama index sesuai dengan name yg ada pada input type='file' dalam tambah.php ataupun ubah.php) yang berisikan: nama file, tipe file, tempat penyimpanan sementara ketika gambar di upload, isi error, dan maksimal size gambar. LIAT VIDEO UPLOAD di menit ke-12an buat liat ISI dari multidimension array dalam $_FILES apa sajaa
	$namaFile = $_FILES['gambar']['name'];
	$ukuranFile = $_FILES['gambar']['size'];
	$error = $_FILES['gambar']['error'];
	$tmpName = $_FILES['gambar']['tmp_name'];

	/* nilai2 error:
	0=>'There is no error, the file uploaded with success',
	    1=>'The uploaded file exceeds the upload max filesize allowed.',
	    2=>'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form',
	    3=>'The uploaded file was only partially uploaded',
	    4=>'No file was uploaded',
	    6=>'Missing a temporary folder'*/

	/*if($error === 4){ //4 berarti gaada gambar yang diupload. COBA CARI NILAI ERROR YANG LAIN!
		echo "<script>
				alert('Yang Anda belum memilih gambar!');
			</script>";
		return false;//jika user ga mengupload gambar, maka return string langsung keluar fungsi
	}*/

	//cek apakah yg diupload BENAR2 GAMBAR??
	$ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
	$ekstensiGambar = explode('.', $namaFile);
	$ekstensiGambar = strtolower(end($ekstensiGambar));//end untuk mengambil isi array index trakhir (ambil ekstensi). lalu UBAH JADI LOWERCASE untuk antisipasi. Kemudian dibawah ini cek apakah yg di upload bukan ekstensi gambar??
	if(!in_array($ekstensiGambar, $ekstensiGambarValid)){ //in_array untuk ngecek ada nggak sebuah string dalam suatu array
		//var_dump($ekstensiGambar); die;
		echo "<script>
				alert('Yang anda upload bukan gambar!');
			</script>";
		return false; //jika ekstensiGambar gaada dalam array ekstensi yg valid tsb, maka return false dan langsung keluar fungsi
	}
	//cek jika ukuran file gambar terlalu besar
	if($ukuranFile > 1000000){ //1juta Byte
		echo "<script>
				alert('Ukuran gambar terlalu besar!');
			</script>";
		return false; //jika size gambar melebihi batas, maka return false dan langsung keluar fungsi
	} 
	//jika lolos ketiga decision di atas, gambar dipindah ke tujuan dari tempat penyimpanan sementara, dengan namaFile yang baru
	$namaFileBaru = 'profile_' . $Uniq_name; //membuat string random untuk menamai file gambar dengan nama baru nantinya
	$namaFileBaru .= '.' . $ekstensiGambar;

	move_uploaded_file($tmpName, 'img/' . $namaFileBaru); //jadi nama filenya sama dg nama file asli yg di upload, tapi letaknya dlm folder yg sama dg penyimpanan functions.php ini, yaitu di dalam folder phpdasar lalu ke dalam folder img
	return $namaFileBaru;
}

function uploadFile($task_id){
	global $file_lama;
	if($file_lama !== NULL)
		unlink($file_lama);
	//$_FILES BERISIKAN array multidimensi dengan isi dalam index['fileame'] (nama index sesuai dengan name yg ada pada input type='file' dalam assign_mhs.php yang berisikan: nama file, tipe file, tempat penyimpanan sementara ketika file di upload, isi error, dan maksimal size gambar. LIAT VIDEO UPLOAD di menit ke-12an buat liat ISI dari multidimension array dalam $_FILES apa sajaa
	$namaFile = $_FILES['filename']['name'];
	$ukuranFile = $_FILES['filename']['size'];
	$error = $_FILES['filename']['error'];
	$tmpName = $_FILES['filename']['tmp_name'];
	if($error === 4){ //4 berarti gaada gambar yang diupload. COBA CARI NILAI ERROR YANG LAIN!
		
		return "no file";//jika user ga mengupload gambar, maka return false dan langsung keluar fungsi
	}
	//cek apakah yg diupload BENAR2 GAMBAR??
	$ekstensiFileValid = ['doc', 'docx', 'pdf'];
	$ekstensiFile = explode('.', $namaFile);
	$ekstensiFile = strtolower(end($ekstensiFile));//end untuk mengambil isi array index trakhir (ambil ekstensi). lalu UBAH JADI LOWERCASE untuk antisipasi. Kemudian dibawah ini cek apakah yg di upload bukan ekstensi File??
	if(!in_array($ekstensiFile, $ekstensiFileValid)){ //in_array untuk ngecek ada nggak sebuah string dalam suatu array
		//var_dump($ekstensiFile); die;
		echo "<script>
				alert('Yang anda upload bukan File!');
			</script>";
		return false; //jika ekstensiFile gaada dalam array ekstensi yg valid tsb, maka return false dan langsung keluar fungsi
	}
	//cek jika ukuran file File terlalu besar
	if($ukuranFile > 1000000){ //satuan byte. KENAPA KOK GA JALAN???
		echo "<script>
				alert('Ukuran File terlalu besar!');
			</script>";
		return false; //jika size File melebihi batas, maka return false dan langsung keluar fungsi
	} 
	//jika lolos ketiga decision di atas, File dipindah ke tujuan dari tempat penyimpanan sementara, dengan namaFile yang baru
	$namaFileBaru = 'task_ke-' . $task_id; //membuat string random untuk menamai file File dengan nama baru nantinya
	$namaFileBaru .= '.' . $ekstensiFile;

	move_uploaded_file($tmpName, 'file/' . $namaFileBaru); //jadi nama filenya sama dg nama file asli yg di upload, tapi letaknya dlm folder yg sama dg penyimpanan functions.php ini, yaitu di dalam folder phpdasar lalu ke dalam folder img
	return $namaFileBaru;
}

function registrasi($data){
	global $conn;

	$username = strtolower(stripslashes($data["username"])); //stripslashes agar pada database, tanda slash, misal '\' tidak dituliskan.
	// strtolower karena username tidak key sensitive, maka di database dimasukkan lowercase nya
	$password = mysqli_real_escape_string($conn, $data["password"]);
	$password2 = mysqli_real_escape_string($conn, $data["password2"]);

	//ENKRIPSI PASSWD
	$password = password_hash($password, PASSWORD_DEFAULT); //parameternya (passwrd, algoritma); algoritma tsb dibuat default, menggunakan bcrypt algorythm

	//tambahkan user baru ke dalam database
	mysqli_query($conn, "UPDATE user SET 
				password = '$password' 
				WHERE username = '$username'"
	);

	return mysqli_affected_rows($conn); //hasil ini di return berupa jumlah rows affected (haruse ya 1)
}
?>
