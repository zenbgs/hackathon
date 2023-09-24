<?php
// Error Warning
echo validation_errors('<div class="alert alert-warning">', '</div>');

//attribut
$attribut = '';
//form open
echo form_open(base_url('index.php/admin/kependudukan/edit/'.$penduduk->id),$attribut);

?>

<div class="row">
<div class="col-md-12">
    <div class="form-group">
        <label for="status" class="form-control-label">Tanggal Lapor</label>
        <input type="date" id="tglLapor" class="form-control" value="<?= $penduduk->tgl_lapor ?>" name="tanggal_lapor" required>
    </div>

    <h2>Data Diri :</h2>
    <hr>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label>NIK</label>
                <input type="number" name="nik" class="form-control" placeholder="NIK" value="<?= $penduduk->nik ?>" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label>Nama Lengkap</label>
                <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" value="<?= $penduduk->nama ?>" required>
            </div>
        </div>
    </div>
    
	<div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label>Nomor KK Sebelumnya</label>
                <input type="text" name="no_kk_sebelum" class="form-control" placeholder="Nomor KK Sebelumnya" value="<?= $penduduk->no_kk_sebelum ?>">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label>Pilih Hubungan Keluarga</label>
                <select name="hub_keluarga" class="form-control" required>
                    <option value="<?= $penduduk->hub_keluarga ?>" selected><?= $penduduk->hub_keluarga ?></option>
                    <option value="Kepala Keluarga">Kepala Keluarga</option>
                    <option value="Suami">Suami</option>
                    <option value="Istri">Istri</option>
                    <option value="Anak">Anak</option>
                    <option value="Cucu">Cucu</option>
                    <option value="Menantu">Menantu</option>
                    <option value="Orang Tua">Orang Tua</option>
                    <option value="Mertua">Mertua</option>
                    <option value="Lainnya">Lainnya</option>
                </select>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label>Jenis Kelamin</label>
                <select name="jenis_kelamin" class="form-control" required>
                    <option value="<?= $penduduk->jenis_kelamin ?>" selected><?= $penduduk->jenis_kelamin ?></option>
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8">
            <div class="form-group">
                <label>Pilih Agama</label>
                <select name="agama" class="form-control" required>
                    <option value="<?= $penduduk->agama ?>"><?= $penduduk->agama ?></option>
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Katholik">Katholik</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Budha">Budha</option>
                    <option value="Khonghucu">Khonghucu</option>
                    <option value="Khonghucu">Lainnya</option>
                </select>
            </div>
        </div>
        <div class="col-md-8">
            <div class="form-group">
                <label>Pilih Status Penduduk</label>
                <select name="status_penduduk" class="form-control" required>
                    <option value="<?= $penduduk->status_penduduk ?>"><?= $penduduk->status_penduduk ?></option>
                    <option value="Tetap">Tetap</option>
                    <option value="Tidak Tetap">Tidak Tetap</option>
                </select>
            </div>
        </div>
    </div>
  
    <h2>Data Kelahiran :</h2>
    <hr>

    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label>Nomor Akta Kelahiran</label>
                <input type="number" name="akta_kelahiran" class="form-control" placeholder="Nomor Akta Kelahiran" value="<?= $penduduk->akta_kelahiran ?>">
            </div>
        </div>
        <div class="col-md-8">
            <div class="form-group">
                <label>Tempat Lahir</label>
                <input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir" value="<?= $penduduk->tempat_lahir ?>" required>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label for="tanggal_lahir" class="form-control-label">Tanggal Lahir</label>
                <input type="date" id="tanggal_lahir" value="<?= $penduduk->tgl_lahir ?>" class="form-control" name="tanggal_lahir" required>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="waktu_kelahiran" class="form-control-label">Waktu Kelahiran</label>
                <input type="time" id="waktu_kelahiran" value="<?= $penduduk->waktu_kelahiran ?>" class="form-control" name="waktu_kelahiran" required>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label>Tempat Dilahirkan</label>
                <select name="tempat_dilahirkan" class="form-control">
                    <option value="<?= $penduduk->tempat_dilahirkan ?>" selected><?= $penduduk->tempat_dilahirkan ?></option>
                    <option value="RS/RB">RS/RB</option>
                    <option value="Puskesmas">Puskesmas</option>
                    <option value="Polindes">Polindes</option>
                    <option value="Rumah">Rumah</option>
                    <option value="Lainnya">Lainnya</option>
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label>Jenis Kelahiran</label>
                <select name="jenis_kelahiran" class="form-control">
                    <option value="<?= $penduduk->jenis_kelahiran ?>" selected><?= $penduduk->jenis_kelahiran ?></option>
                    <option value="Tunggal">Tunggal</option>
                    <option value="Kembar 2">Kembar 2</option>
                    <option value="Kembar 3">Kembar 3</option>
                    <option value="Kembar 4">Kembar 4</option>
                </select>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="anak_ke" class="form-control-label">Anak ke (isi dengan angka)</label>
                <input type="number" value="<?= $penduduk->anak_ke ?>" id="anak_ke" class="form-control" name="anak_ke" placeholder="Anak Ke-">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label>Pilih Penolong Kelahiran</label>
                <select name="penolong_kelahiran" class="form-control">
                    <option value="<?= $penduduk->penolong_kelahiran ?>" selected><?= $penduduk->penolong_kelahiran ?></option>
                    <option value="Dokter">Dokter</option>
                    <option value="Bidan Perawat">Bidan Perawat</option>
                    <option value="Dukun">Dukun</option>
                    <option value="Lainnya">Lainnya</option>
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label for="berat_lahir" class="form-control-label">Berat Lahir (Gram)</label>
                <input type="number" id="berat_lahir" value="<?= $penduduk->berat_lahir ?>" class="form-control" name="berat_lahir" placeholder="Berat Lahir">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="panjang_lahir" class="form-control-label">Panjang Lahir (cm)</label>
                <input type="number" id="panjang_lahir" value="<?= $penduduk->panjang_lahir ?>" class="form-control" name="panjang_lahir" placeholder="Panjang Lahir">
            </div>
        </div>
    </div>

    <h2>Pendidikan dan Pekerjaan :</h2>
    <hr>

    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label>Pilih Pendidikan (Dalam KK)</label>
                <select name="pendidikan_kk" class="form-control" required>
                    <option value="<?= $penduduk->pendidikan_kk ?>" selected><?= $penduduk->pendidikan_kk ?></option>
                    <option value="Tidak/Belum Sekolah">Tidak/Belum Sekolah</option>
                    <option value="Belum Tamat SD/Sederajat">Belum Tamat SD/Sederajat</option>
                    <option value="Tamat SD/Sederajat">Tamat SD/Sederajat</option>
                    <option value="SLTP/Sederajat">SLTP/Sederajat</option>
                    <option value="SLTA/Sederajat">SLTA/Sederajat</option>
                    <option value="Diploma I/II">Diploma I/II</option>
                    <option value="Akademi/Diploma III/S. Muda">Akademi/Diploma III/S. Muda</option>
                    <option value="Diploma IV/Strata I">Diploma IV/Strata I</option>
                    <option value="Strata II">Strata II</option>
                    <option value="Strata III">Strata III</option>
                </select>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label>Pendidikan Sedang Ditempuh</label>
                <select name="menempuh_pendidikan" class="form-control">
                    <option value="<?= $penduduk->pendidikan_sedang_ditempuh ?>" selected><?= $penduduk->pendidikan_sedang_ditempuh ?></option>
                        <option value="BELUM MASUK TK/KELOMPOK BERMAIN">BELUM MASUK TK/KELOMPOK BERMAIN</option>
                        <option value="SEDANG TK/KELOMPOK BERMAIN">SEDANG TK/KELOMPOK BERMAIN</option>
                        <option value="TIDAK PERNAH SEKOLAH">TIDAK PERNAH SEKOLAH</option>
                        <option value="SEDANG SD/SEDERAJAT">SEDANG SD/SEDERAJAT</option>
                        <option value="TIDAK TAMAT SD/SEDERAJAT">TIDAK TAMAT SD/SEDERAJAT</option>
                        <option value="SEDANG SLTP/SEDERAJAT">SEDANG SLTP/SEDERAJAT</option>
                        <option value="SEDANG SLTA/SEDERAJAT">SEDANG SLTA/SEDERAJAT</option>
                        <option value="SEDANG  D-1/SEDERAJAT">SEDANG  D-1/SEDERAJAT</option>
                        <option value="SEDANG D-2/SEDERAJAT">SEDANG D-2/SEDERAJAT</option>
                        <option value="SEDANG D-3/SEDERAJAT">SEDANG D-3/SEDERAJAT</option>
                        <option value="SEDANG  S-1/SEDERAJAT">SEDANG  S-1/SEDERAJAT</option>
                        <option value="SEDANG S-2/SEDERAJAT">SEDANG S-2/SEDERAJAT</option>
                        <option value="SEDANG S-3/SEDERAJAT">SEDANG S-3/SEDERAJAT</option>
                        <option value="SEDANG SLB A/SEDERAJAT">SEDANG SLB A/SEDERAJAT</option>
                        <option value="SEDANG SLB B/SEDERAJAT">SEDANG SLB B/SEDERAJAT</option>
                        <option value="SEDANG SLB C/SEDERAJAT">SEDANG SLB C/SEDERAJAT</option>
                        <option value="TIDAK DAPAT MEMBACA DAN MENULIS HURUF LATIN/ARAB">TIDAK DAPAT MEMBACA DAN MENULIS HURUF LATIN/ARAB</option>
                        <option value="TIDAK SEDANG SEKOLAH">TIDAK SEDANG SEKOLAH</option>
                </select>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label>Pekerjaan</label>
                <input type="text" name="pekerjaan" class="form-control" placeholder="Pekerjaan" value="<?= $penduduk->pekerjaan ?>" required>
            </div>
        </div>
    </div>

    <h2>Data Kewarganegaraan :</h2>
    <hr>

    <div class="form-group">
        <label>Suku/Etnis</label>
        <input type="text" name="suku" class="form-control" placeholder="Suku/Etnis" value="<?= $penduduk->suku ?>">
    </div>

    <div class="form-group">
        <label>Pilih Warga Negara</label>
        <select name="warga_negara" class="form-control" required>
            <option value="<?= $penduduk->warga_negara ?>" selected><?= $penduduk->warga_negara ?></option>
            <option value="WNI">WNI</option>
            <option value="WNA">WNA</option>
            <option value="DUA KEWARGANEGARAAN">DUA KEWARGANEGARAAN</option>
        </select>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="nomor_paspor" class="form-control-label">Nomor Paspor</label>
                <input type="number" id="nomor_paspor" value="<?= $penduduk->no_paspor ?>" class="form-control" name="nomor_paspor" placeholder="Nomor Paspor">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="tgl_berakhir_paspor" class="form-control-label">Tanggal Berakhir Paspor</label>
                <input type="date" id="tgl_berakhir_paspor" value="<?= $penduduk->tgl_berakhir_paspor ?>" class="form-control" name="tgl_berakhir_paspor">
            </div>
        </div>
    </div>

    <h2>Data Orang Tua : </h2>
    <hr>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="nik_ayah" class="form-control-label">NIK Ayah</label>
                <input type="number" id="nik_ayah" value="<?= $penduduk->nik_ayah ?>" class="form-control" name="nik_ayah" placeholder="Nomor NIK Ayah">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="nama_ayah" class="form-control-label">Nama Ayah</label>
                <input type="text" id="nama_ayah" class="form-control" value="<?= $penduduk->nama_ayah ?>" name="nama_ayah" required>
            </div>
        </div>
    </div>  

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="nik_ibu" class="form-control-label">NIK Ibu</label>
                <input type="number" id="nik_ibu" class="form-control" value="<?= $penduduk->nik_ibu ?>" name="nik_ibu" placeholder="Nomor NIK Ibu">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="nama_ibu" class="form-control-label">Nama Ibu</label>
                <input type="text" id="nama_ibu" class="form-control" value="<?= $penduduk->nama_ibu ?>" name="nama_ibu" required>
            </div>
        </div>
    </div>  

    <h2>Alamat :</h2>
    <hr>

    <div class="row">
        <div class="col-md-3">
            <div class="form-group">
                <label for="dusun" class="form-control-label">Dusun</label>
                <input type="text" id="dusun" class="form-control" value="<?= $penduduk->dusun ?>" name="dusun" required>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="rw" class="form-control-label">RW</label>
                <input type="number" id="rw" class="form-control" name="rw" value="<?= $penduduk->rw ?>" required>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="rt" class="form-control-label">RT</label>
                <input type="number" id="rt" class="form-control" value="<?= $penduduk->rt ?>" name="rt" required>
            </div>
        </div>
    </div>

    <div class="form-group">
        <label for="alamat_sebelumnya" class="form-control-label">Alamat Sebelumnya</label>
        <input type="text" id="alamat_sebelumnya" value="<?= $penduduk->alamat_sebelumnya ?>" class="form-control" name="alamat_sebelumnya">
    </div>
    
    <div class="form-group">
        <label for="alamat_sekarang" class="form-control-label">Alamat Sekarang</label>
        <input type="text" id="alamat_sekarang" value="<?= $penduduk->alamat_sekarang ?>" class="form-control" name="alamat_sekarang">
    </div>

    <div class="row">
        <div class="col-md-3">
            <div class="form-group">
                <label for="no_telp" class="form-control-label">Nomor Telepon</label>
                <input type="number" id="no_telp" value="<?= $penduduk->no_telp ?>" class="form-control" name="no_telp">
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="email" class="form-control-label">Email</label>
                <input type="email" id="email" value="<?= $penduduk->email ?>" class="form-control" name="email">
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="telegram" class="form-control-label">Telegram</label>
                <input type="text" id="telegram" value="<?= $penduduk->telegram ?>" class="form-control" name="telegram">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-3">
            <label>Pilih Cara Hubungi</label>
            <select name="cara_hubungi" class="form-control" required>
                <option value="<?= $penduduk->cara_hubungi ?>" selected><?= $penduduk->cara_hubungi ?></option>
                <option value="Email">Email</option>
                <option value="Telegram">Telegram</option>
            </select>
        </div>
    </div>

    <div class="form-group" style="margin-top: 25px;">
		<input type="submit" name="submit" class="btn btn-success btn-lg" value="Simpan">
		<input type="reset" name="reset" class="btn btn-default btn-lg" value="Reset">
	</div>

   

</div>

</div>
<?php
//Form close
echo form_close();
?>
