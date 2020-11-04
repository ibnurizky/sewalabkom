<h1>Data Sewa</h1><br>
<h6>Sebelum sewa lab, mohon untuk lihat dulu jadwal yang ada di data sewa demi menghindari tabrakan jadwal. Gunakan form cari untuk mencari dengan cepat</h6><br>

<div class="row">
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
        <a href="index.php?page=tambah" class="btn btn-primary">Sewa Lab</a>
    </div>
    <div class="col-lg-8 col-md-4 col-sm-4 col-xs-4">
        <form action="index.php" method="get">
          <div class="input-group mb-5">
              <input type="text" class="form-control" name="cari">
              <div class="input-group-append">
                  <button class="btn btn-outline-secondary" type="submit">Cari</button>
              </div>
          </div>
        </form>
    </div>
</div>

<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Matkul</th>
      <th scope="col">Dosen</th>
      <th scope="col">Hari</th>
      <th scope="col">Tanggal</th>
      <th scope="col">Jam</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>

    <?php
        require_once 'koneksi.php';

        //form cari
        if (isset($_GET['cari'])) {
            $cari = $_GET['cari'];
            $data = mysqli_query($koneksi, "select * from sewa where hari like '%".$cari."%'");
        } else {
            $data = mysqli_query($koneksi, "select * from sewa order by tanggal desc");        
        }

        $i = 1;
        while($d = mysqli_fetch_array($data)) {
    ?>
    <tr>
      <td><?= $i++; ?></td>
      <td><?= $d['matkul']; ?></td>
      <td><?= $d['dosen']; ?></td>
      <td><?= $d['hari']; ?></td>
      <td><?= $d['tanggal']; ?></td>
      <td><?= $d['jam']; ?></td>
      <td>
          <a href="index.php?page=edit&id=<?= $d['id']; ?>" class="btn btn-success">Edit</a>
          <?php if ($_SESSION['user'] == "admin") { ?>
            <a href="index.php?page=hapus&id=<?= $d['id']; ?>" class="btn btn-danger">Hapus</a>
          <?php } ?>
      </td>
    </tr>
    <?php } ?>

  </tbody>
</table>