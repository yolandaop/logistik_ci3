<section id="form" class="form">
<div class="card shadow mb-4">
<div class="card-header py-3">
    <h4 align="center" class="m-0 font-weight-bold text-primary">Form Permohonan Bantuan</h4>
</div>
<div class="card-body">
<form action="<?php echo base_url('index.php/permohonan/save');?>" name="permohonan_create" id="permohonan_create" method="post" accept-charset="utf-8">
 
          <div class="form-group">
            <label for="nama_pemohon">Nama</label>
            <input type="text" name="nama_pemohon" class="form-control" id="nama_pemohon" placeholder="Masukkan nama anda" oninvalid="InvalidMsg(this);" 
                   oninput="InvalidMsg(this);" required>
          </div> 

          <div class="form-group">
            <label for="nip_pemohon">NIP/NIK</label>
            <input type="text" name="nip_pemohon" class="form-control" id="nip_pemohon" placeholder="Masukkan NIP/NIK anda" oninvalid="InvalidMsg(this);" 
                   oninput="InvalidMsg(this);" required>
          </div>

          <div class="form-group">
            <label for="pekerjaan_pemohon">Pekerjaan/Jabatan</label>
            <input type="text" name="pekerjaan_pemohon" class="form-control" id="pekerjaan_pemohon" placeholder="Masukkan pekerjaan anda" oninvalid="InvalidMsg(this);" 
                   oninput="InvalidMsg(this);" required>
          </div>

          <div class="form-group">
            <label for="instansi_pemohon">Instansi</label>
            <input type="text" name="instansi_pemohon" class="form-control" id="isntansi_pemohon" placeholder="Masukkan instansi anda" oninvalid="InvalidMsg(this);" 
                   oninput="InvalidMsg(this);" required>
          </div>
 
          <div class="form-group">
            <label for="alamat_pemohon">Alamat</label>
            <input type="text" name="alamat_pemohon" class="form-control" id="alamat_pemohon" placeholder="Masukkan alamat anda" oninvalid="InvalidMsg(this);" 
                   oninput="InvalidMsg(this);" required>
          </div>   

          <div class="form-group">
            <label for="kontak_pemohon">Kontak/No HP</label>
            <input type="text" name="kontak_pemohon" class="form-control" id="kontak_pemohon" placeholder="Masukkan kontak anda" oninvalid="InvalidMsg(this);" 
                   oninput="InvalidMsg(this);" required>
          </div> 

          <div class="form-group">
            <label for="jenis_permohonan">Jenis Permohonan</label>
            <input type="text" name="jenis_permohonan" class="form-control" id="jenis_permohonan" placeholder="Masukkan jenis permohonan anda" oninvalid="InvalidMsg(this);" 
                   oninput="InvalidMsg(this);" required>
          </div> 

          <div class="form-group">
            <label for="catatan_pemohon">Catatan</label>
            <input type="text" name="catatan_pemohon" class="form-control" id="catatan_pemohon" placeholder="Masukkan catatan anda">
          </div> 
 
          <div class="form-group">
           <button type="submit" id="send_form" class="btn btn-primary">Submit</button>
          </div>
          
        </form>
        </div>
        </div>

        <script> 
        function InvalidMsg(textbox) { 
  
            if (textbox.value === '') { 
                textbox.setCustomValidity 
                      ('Mohon isi kolom berikut'); 
            } else { 
                textbox.setCustomValidity(''); 
            } 
  
            return true; 
        }
        </script> 