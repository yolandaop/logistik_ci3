<!DOCTYPE html>
<html>
<head>
  <title>Buat Permohonan</title>
</head>
<body>
 <div class="container">
    <br>
    <div class="card-header py-3">
    <h1 align="center" class="car">Form Permohonan Bantuan</h1>
    </div>
    <span class="d-none alert alert-success mb-3" id="res_message"></span>
    <div class="card-body py-3">
    <div class="row">
      <div class="col-md-9">
        <form action="./saveBantuan" name="permohonan_create" id="permohonan_create" method="post" accept-charset="utf-8">
 
          <div class="form-group">
            <label for="nama_pemohon">Nama</label>
            <input type="text" name="nama_pemohon" class="form-control" id="nama_pemohon" placeholder="Masukkan nama anda" pattern="[A-Za-z]+" maxlength="50" required>
          </div> 

          <div class="form-group">
            <label for="nip_pemohon">NIP</label>
            <input type="number" min="0" pattern="[1,9]" name="nip_pemohon" class="form-control" id="nip_pemohon" placeholder="Masukkan NIP anda" required>
          </div>

          <div class="form-group">
            <label for="pekerjaan_pemohon">Pekerjaan/Jabatan</label>
            <input type="text" name="pekerjaan_pemohon" class="form-control" id="pekerjaan_pemohon" placeholder="Masukkan pekerjaan anda" required>
          </div>

          <div class="form-group">
            <label for="instansi_pemohon">Instansi</label>
            <input type="text" name="instansi_pemohon" class="form-control" id="isntansi_pemohon" placeholder="Masukkan instansi " required>
          </div>
 
          <div class="form-group">
            <label for="alamat_pemohon">Alamat</label>
            <input type="text" name="alamat_pemohon" class="form-control" id="alamat_pemohon" placeholder="Masukkan alamat anda" required>
          </div>   

          <div class="form-group">
            <label for="kontak_pemohon">Kontak/No HP</label>
            <input type="text" name="kontak_pemohon" class="form-control" id="kontak_pemohon" placeholder="Masukkan Nomor HP atau telepon rumah anda" required>
          </div> 

          <div class="form-group">
            <label for="jenis_permohonan">Jenis Permohonan</label>
            <input type="text" name="jenis_permohonan" class="form-control" id="jenis_permohonan" placeholder="Masukkan jenis permohonan anda" required>
          </div> 

          <div class="form-group">
            <label for="catatan_pemohon">Catatan</label>
            <input type="text" name="catatan_pemohon" class="form-control" id="catatan_pemohon" placeholder="Masukkan catatan anda">
          </div> 
 
          <div class="form-group">
           <button type="submit" id="send_form" class="btn btn-success">Submit</button>
           <a href="<?php echo base_url('home/pemohon_bantuan');?>" class="btn btn-primary">Kembali</a>
          </div>
        </form>
      </div>
    </div>      
    </div>
</div>
</body>
</html>