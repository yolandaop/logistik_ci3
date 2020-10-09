<section id="form" class="form">
<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h4 align="center" class="m-0 font-weight-bold text-primary">Edit Permohonan</h4>
            </div>
            <div class="card-body">
            <form action="/logistik/index.php/permohonan/update" name="edit-permohonan" id="edit-permohonan" method="post" accept-charset="utf-8">
 
 <input type="hidden" name="id_permohonan" class="form-control" id="id_permohonan" value="<?= $permohonan->id_permohonan;?>">

 <div class="form-group">
   <label for="nama_pemohon">Nama</label>
   <input type="text" name="nama_pemohon" class="form-control" id="nama_pemohon" placeholder="Masukkan nama anda" value="<?= $permohonan->nama_pemohon;?>" oninvalid="InvalidMsg(this);" 
                   oninput="InvalidMsg(this);" required>
 </div>

 <div class="form-group">
   <label for="nip_pemohon">NIP</label>
   <input type="text" name="nip_pemohon" class="form-control" id="nip_pemohon" placeholder="Masukkan NIP anda" value="<?= $permohonan->nip_pemohon;?>" oninvalid="InvalidMsg(this);" 
                   oninput="InvalidMsg(this);" required>
 </div>

 <div class="form-group">
   <label for="pekerjaan_pemohon">Pekerjaan/Jabatan</label>
   <input type="text" name="pekerjaan_pemohon" class="form-control" id="pekerjaan_pemohon" placeholder="Masukkan pekerjaan anda" value="<?= $permohonan->pekerjaan_pemohon;?>" oninvalid="InvalidMsg(this);" 
                   oninput="InvalidMsg(this);" required>
 </div>

 <div class="form-group">
   <label for="instansi_pemohon">Instansi</label>
   <input type="text" name="instansi_pemohon" class="form-control" id="isntansi_pemohon" placeholder="Masukkan instansi anda" value="<?= $permohonan->instansi_pemohon;?>" oninvalid="InvalidMsg(this);" 
                   oninput="InvalidMsg(this);" required>
 </div>

 <div class="form-group">
   <label for="alamat_pemohon">Alamat</label>
   <input type="text" name="alamat_pemohon" class="form-control" id="alamat_pemohon" placeholder="Masukkan alamat anda" value="<?= $permohonan->alamat_pemohon;?>" oninvalid="InvalidMsg(this);" 
                   oninput="InvalidMsg(this);" required>
 </div>   

 <div class="form-group">
   <label for="kontak_pemohon">Kontak</label>
   <input type="text" name="kontak_pemohon" class="form-control" id="kontak_pemohon" placeholder="Masukkan kontak anda" value="<?= $permohonan->kontak_pemohon;?>" oninvalid="InvalidMsg(this);" 
                   oninput="InvalidMsg(this);" required>
 </div>

 <div class="form-group">
   <label for="jenis_permohonan">Jenis Permohonan</label>
   <input type="text" name="jenis_permohonan" class="form-control" id="jenis_permohonan" placeholder="Masukkan jenis permohonan anda" value="<?= $permohonan->jenis_permohonan;?>" oninvalid="InvalidMsg(this);" 
                   oninput="InvalidMsg(this);" required>
 </div>

 <div class="form-group">
   <label for="keterangan_pemohon">Keterangan Pemohon</label>
   <input type="text" name="keterangan_pemohon" class="form-control" id="keterangan_permohonan" placeholder="Masukkan keterangan pemohon" value="<?= $permohonan->keterangan_pemohon;?>" oninvalid="InvalidMsg(this);" 
                   oninput="InvalidMsg(this);" required>
 </div>

 <div class="form-group">
   <label for="catatan_pemohon">Catatan</label>
   <input type="text" name="catatan_pemohon" class="form-control" id="catatan_pemohon" placeholder="Masukkan catatan anda" value="<?= $permohonan->catatan_pemohon;?>">
 </div>

 <div class="form-group">
  <button type="submit" id="send_form" class="btn btn-success">Submit</button>
 </div>
 
</form>
        </div>
            </div>
          </div>
          </div>
      <!-- End of Main Content -->
      </section><!-- End Services Section -->

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