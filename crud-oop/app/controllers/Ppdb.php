<?php 

	class Ppdb extends Controller{
		public function index(){
			$data['judul' ]= "Index - PPDB PAGE";
			$data['p_ppdb' ]= $this->model('Ppdb_model')->read("SELECT * FROM peserta_ppdb");
		
			$this->view('templates/header',$data);
			$this->view('ppdb/index',$data);
			$this->view('templates/footer',$data);
		}
		
		public function tambahdata(){
			$data['judul' ]= "Tambah Data - PPDB PAGE";
			
			$this->view('templates/header',$data);
			$this->view('ppdb/tambah-data',$data);
			$this->view('templates/footer',$data);
		}	
		
		public function pro_tambahdata(){
			if($this->model('Ppdb_model')->tambah_ppdb($_POST) > 0){
				echo "
                    <script>
                        alert('Data telah berhasil di tambahkan!');
						document.location.href = 'index';
                    </script>
               		 ";
			}else{
			  echo "
                    <script>
                        alert('Data telah gagal di tambahkan!');
                    </script>
               	   ";
			}
		}
		
		
		public function ubahdata($id){
			$data['judul' ]= "Update Data - PPDB PAGE";
			
			$data['p_ppdb']= $this->model('Ppdb_model')->read("SELECT * FROM peserta_ppdb WHERE id = $id");
			
			$this->view('templates/header',$data);
			$this->view('ppdb/ubah-data',$data);
			$this->view('templates/footer',$data);
		}	
		
		public function pro_ubahdata(){
			if($this->model('Ppdb_model')->ubah_ppdb($_POST) > 0){
				echo "
                    <script>
                        alert('Data telah berhasil di ubah!');
						document.location.href = 'index';
                    </script>
               		 ";
			}else{
			  echo "
                    <script>
                        alert('Data telah gagal di ubah!');
                    </script>
               	   ";
			}
		}
		
		
		public function pro_hapusdata($id){
			if($this->model('Ppdb_model')->hapus_ppdb($id) > 0){
				echo "
                    <script>
                        alert('Data telah berhasil di hapus!');
                    </script>
               		 ";
				
			}else{
			  echo "
                    <script>
                        alert('Data telah gagal di hapus!');
                    </script>
               	   ";
			}
		}
	}

?>