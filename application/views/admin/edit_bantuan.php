<section id="form" class="form">
<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Edit Bantuan Masuk</h6>
            </div>
            <div class="card-body">
<form action="logistik/bantuan/update" name="edit-bantuan" id="edit-bantuan" method="post" accept-charset="utf-8">
 
          <input type="hidden" name="id_bantuan" class="form-control" id="id_bantuan" value="<?= $bantuan->id_bantuan;?>">
 
          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan nama anda" value="<?= $bantuan->nama;?>" oninvalid="InvalidMsg(this);" 
                   oninput="InvalidMsg(this);" required>
          </div> 
 
          <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Masukkan alamat anda" value="<?= $bantuan->alamat;?>" oninvalid="InvalidMsg(this);" 
                   oninput="InvalidMsg(this);" required>
          </div>   

          <div class="form-group">
            <label for="kontak">Kontak</label>
            <input type="text" name="kontak" class="form-control" id="kontak" placeholder="Masukkan kontak anda" value="<?= $bantuan->kontak;?>" oninvalid="InvalidMsg(this);" 
                   oninput="InvalidMsg(this);" required>
          </div>

          <div class="form-group">
            <label for="jenis_bantuan">Jenis Bantuan</label>
            <input type="text" name="jenis_bantuan" class="form-control" id="jenis_bantuan" placeholder="Masukkan jenis bantuan anda" value="<?= $bantuan->jenis_bantuan;?>" oninvalid="InvalidMsg(this);" 
                   oninput="InvalidMsg(this);" required>
          </div>

          <div class="form-group">
            <label for="catatan">Catatan</label>
            <input type="text" name="catatan" class="form-control" id="catatan" placeholder="Masukkan catatan anda" value="<?= $bantuan->catatan;?>">
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