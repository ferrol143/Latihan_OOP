
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">PHP-MVC</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="<?=BASEURL;?>">Home</a>
        <a class="nav-link active" href="">PPDB</a>

      </div>
    </div>
  </div>
</nav>


<div class = "container">
	<h1 class = "text-center mt-5 mb-5">Data PPDB</h1>
	<a href = "<?= BASEURL; ?>ppdb/tambahdata" class = "btn btn-primary" style = "width: 200px;">Tambah data</a>
	<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Foto</th>
      <th scope="col">Nama Lengkap</th>
      <th scope="col">Tanggal Lahir</th>
      <th scope="col">Warga Negara</th>
      <th scope="col">Alamat</th>
      <th scope="col">Email</th>
      <th scope="col">Nomor Telepon</th>
      <th scope="col">Asal Sekolah</th>
      <th scope="col">Ayah</th>
      <th scope="col">Ibu</th>
      <th scope="col">Penghasilan Orang Tua</th>
    </tr>
  </thead>
  <tbody>
  <?php $i = 1;	?>
  <?php foreach($data['p_ppdb'] as $p) :?>
    <tr>
      <th scope="row"><?= $i++ ?></th>
        <td><img src = "<?= BASEURL . '/img/' . $p['foto']?>" width = "300"></img></td>
        <td><?= $p['nama_lengkap'] ?></td>
        <td><?= $p['tanggal_lahir'] ?></td>
        <td><?= $p['warga_negara'] ?></td>
        <td><?= $p['alamat'] ?></td>
        <td><?= $p['email'] ?></td>
        <td><?= $p['no_tlp'] ?></td>
        <td><?= $p['asal_sekolah'] ?></td>
        <td><?= $p['ayah'] ?></td>
        <td><?= $p['ibu'] ?></td>
        <td><?= $p['penghasilan_orangtua'] ?></td>
        <td>
		  <a href = "<?= BASEURL . 'ppdb/ubahdata/' . $p['id'] ?>"class = "btn btn-primary mb-1">Ubah</a>
		  <a href = "<?= BASEURL . 'ppdb/pro_hapusdata/' . $p['id'] ?>" class = "btn btn-danger" onclick = "return('yakin?')">Hapus</a>
		</td>
    </tr>
    <?php endforeach ?>
  </tbody>
</table>
	
	
</div>

    