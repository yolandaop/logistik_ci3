<section id="form" class="form">
<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h4 align="center" class="m-0 font-weight-bold text-primary">Edit Distribusi</h4>
            </div>
            <div class="card-body">
            <form action="logistik/distribusi/update" name="edit-distribusi" id="edit-distribusi" method="post" accept-charset="utf-8">
 
 <input type="hidden" name="id_distribusi" class="form-control" id="id_distribusi" value="<?= $distribusi->id_distribusi;?>">

 <div class="form-group">
   <label for="id_permohonan">Id Permohonan</label>
    <select name="id_permohonan" class="form-control" id="id_permohonan">
                <?php
                    foreach($permohonan as $row){
                    echo "<option value=";
                    echo $row['id_permohonan'];
                    echo ">";
                    echo ($row['id_permohonan']." - ".$row['nama_pemohon']);
                    echo "</option>";
                    }
                ?>
    </select>
 </div> 

 <div class="form-group">
   <label for="jumlah_paket">Jumlah Paket</label>
   <input type="text" name="jumlah_paket" class="form-control" id="jumlah_paket" placeholder="Masukkan jumlah paket anda" value="<?= $distribusi->jumlah_paket;?>" oninvalid="InvalidMsg(this);" 
                   oninput="InvalidMsg(this);" required>
 </div>   

 <div class="form-group">
   <label for="jenis_distribusi">Jenis distribusi</label>
   <input type="text" name="jenis_distribusi" class="form-control" id="jenis_distribusi" placeholder="Masukkan jenis distribusi anda" value="<?= $distribusi->jenis_distribusi;?>" oninvalid="InvalidMsg(this);" 
                   oninput="InvalidMsg(this);" required>
 </div>

 <div class="form-group">
   <label for="keterangan_distribusi">Keterangan</label>
   <input type="text" name="keterangan_distribusi" class="form-control" id="keterangan_distribusi" placeholder="Masukkan keterangan anda" value="<?= $distribusi->keterangan_distribusi;?>">
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