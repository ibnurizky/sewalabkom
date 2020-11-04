<h1>Form Sewa Labkom 1</h1><br>

<?php
    $matkul = ["Pemrograman Web", "Pemrograman Mobile (Android)", "Pemrograman Java", "Pemrograman Delphi", "Multimedia & Animasi", "Desain Grafis", "Aplikasi Komputer", "Sistem Basis Data (MySQl)", "Jaringan Komputer"];
    $dosen = ["Adi Pratomo ST. M.Kom", "Ronny Mantala S.Kom MM.", "Ramadhani Noor Pratama M.Kom", "Evy Wulandari M.Kom", "Eko Sabar Prihatin S.Kom", "Agus Irawan S.Kom MM.", "Abdul Rozaq S.Kom M.Kom MM.", "Effan Najwaini ST. M.Cs"];
    $hari = ["Senin", "Selasa", "Rabu", "Kamis", "Jumat"];
    $jam = ["08.00 - 10.00", "11.00 - 13.00", "14.00 - 16.00", "16.00 - 18.00"];
?>

<div class="row">
    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
        <form action="index.php?page=proses_tambah" method="post">
            <div class="form-group">
                <label for="matkul">Matkul</label>
                <select name="matkul" id="matkul" class="form-control">
                    <option value="">Pilih Matkul</option>
                    <?php foreach ($matkul as $m) { ?>
                        <option value="<?= $m; ?>"><?= $m; ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <label for="matkul">Dosen</label>
                <select name="dosen" id="dosen" class="form-control">
                    <option value="">Pilih Dosen</option>
                    <?php foreach ($dosen as $d) { ?>
                        <option value="<?= $d; ?>"><?= $d; ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <label for="hari">Hari</label>
                <select name="hari" id="hari" class="form-control">
                    <option value="">Pilih Hari</option>
                    <?php foreach ($hari as $h) { ?>
                        <option value="<?= $h; ?>"><?= $h; ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <label for="tanggal">Tanggal</label>
                <input type="date" name="tanggal" id="tanggal" class="form-control">
            </div>
            <div class="form-group">
                <label for="jam">Jam</label>
                <select name="jam" id="jam" class="form-control">
                    <option value="">Pilih Jam</option>
                    <?php foreach ($jam as $j) { ?>
                        <option value="<?= $j; ?>"><?= $j; ?></option>
                    <?php } ?>
                </select>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</div>