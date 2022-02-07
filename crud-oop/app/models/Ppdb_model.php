<?php

class Ppdb_model{
	private $conn;
	
	public function __construct(){
		$this->conn = mysqli_connect('localhost','root','','latihan_oop');
	}
	
	public function read($query){
		
		$result = mysqli_query($this->conn, $query);
		$rows = [];
		
		while($row = mysqli_fetch_assoc($result)){
			$rows[] = $row;
		}
		
		return $rows;
	}
	
	public function tambah_ppdb($data){
		
		$nama_lengkap = htmlspecialchars($data['nama_lengkap']);
        $tempat = htmlspecialchars($data['tempat']);
        $ttl = htmlspecialchars($data['ttl']);
        $warga_negara = htmlspecialchars($data['warga_negara']);
        $alamat = htmlspecialchars($data['alamat']);
        $email = htmlspecialchars($data['email']);
        $no_tlp = htmlspecialchars($data['no_tlp']);
        $asal_sekolah = htmlspecialchars($data['asal_sekolah']);
        $ayah = htmlspecialchars($data['nama_ayah']);
        $ibu = htmlspecialchars($data['nama_ibu']);
        $penghasilan_orang_tua = htmlspecialchars($data['penghasilan_orang_tua']);
        $foto = htmlspecialchars($data['gambar']);
		
		mysqli_query($this->conn, "INSERT INTO peserta_ppdb VALUES('','$nama_lengkap','$tempat','$ttl','$warga_negara', '$alamat', '$email', '$no_tlp', '$asal_sekolah', '$ayah', '$ibu', ' $penghasilan_orang_tua', '$foto' )");

        return mysqli_affected_rows($this->conn);
	}
    
    public function ubah_ppdb($data){
		
		$id = htmlspecialchars($data['id']);
		$nama_lengkap = htmlspecialchars($data['nama_lengkap']);
        $tempat = htmlspecialchars($data['tempat']);
        $ttl = htmlspecialchars($data['ttl']);
        $warga_negara = htmlspecialchars($data['warga_negara']);
        $alamat = htmlspecialchars($data['alamat']);
        $email = htmlspecialchars($data['email']);
        $no_tlp = htmlspecialchars($data['no_tlp']);
        $asal_sekolah = htmlspecialchars($data['asal_sekolah']);
        $ayah = htmlspecialchars($data['nama_ayah']);
        $ibu = htmlspecialchars($data['nama_ibu']);
        $penghasilan_orang_tua = htmlspecialchars($data['penghasilan_orang_tua']);
        $foto = htmlspecialchars($data['gambar']);
		
		$query = "UPDATE peserta_ppdb SET
        nama_lengkap = '$nama_lengkap',
        tempat = '$tempat',
        tanggal_lahir = '$ttl',
        warga_negara = '$warga_negara',
        alamat = '$alamat', 
        email = '$email', 
        no_tlp = '$no_tlp', 
        asal_sekolah = '$asal_sekolah', 
        ayah = '$ayah', 
        ibu = '$ibu', 
        penghasilan_orangtua = '$penghasilan_orang_tua', 
        foto = '$foto'
        
        WHERE id = $id
        ";

        mysqli_query($this->conn, $query);

        return mysqli_affected_rows($this->conn);
	}
    
    public function hapus_ppdb($id){
		
		mysqli_query($this->conn, "DELETE FROM peserta_ppdb WHERE id = $id");
		
		return mysqli_affected_rows($this->conn);
	}
	
}

?>