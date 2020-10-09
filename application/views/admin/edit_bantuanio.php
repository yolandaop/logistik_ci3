<section id="form" class="form">
<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h4 align="center" class="m-0 font-weight-bold text-primary">Edit Barang</h4>
            </div>
            <div class="card-body">
            <form action="<?php echo base_url('index.php/bantuanIO/update');?>" name="edit-user" id="edit-user" method="post" accept-charset="utf-8">
 
 <input type="hidden" name="id_barang" class="form-control" value="<?php echo $bantuanIO_t->id_barang ?>">

<div class="form-group">
  <label for="formGroupExampleInput">Jenis Barang</label>
  <input type="text" name="jenis_barang" class="form-control" id="formGroupExampleInput" placeholder="Jenis barang" value="<?php echo $bantuanIO_t->jenis_barang ?>" oninvalid="InvalidMsg(this);" 
                   oninput="InvalidMsg(this);" required>
   
</div> 

<div class="form-group">
  <label >satuan</label>
  <input type="text" name="satuan" class="form-control" placeholder="Satuan Barang" value="<?php echo $bantuanIO_t->satuan ?>" oninvalid="InvalidMsg(this);" 
                   oninput="InvalidMsg(this);" required>
   
</div>   

<div class="form-group">
  <label for="formGroupExampleInput">bantuan_masuk</label>
  <input type="text" name="bantuan_masuk" class="form-control" id="formGroupExampleInput" placeholder="Bantuan yang masuk" value="<?php echo $bantuanIO_t->bantuan_masuk ?>" oninvalid="InvalidMsg(this);" 
                   oninput="InvalidMsg(this);" required>
   
</div> 
<div class="form-group">
  <label for="formGroupExampleInput">bantuan_keluar</label>
  <input type="text" name="bantuan_keluar" class="form-control" id="formGroupExampleInput" placeholder="Bantuan yang keluar" value="<?php echo $bantuanIO_t->bantuan_keluar ?>" oninvalid="InvalidMsg(this);" 
                   oninput="InvalidMsg(this);" required>
   
</div> 
<div class="form-group">
  <label for="formGroupExampleInput">stok Barang</label>
  <input type="text" name="stok" class="form-control" id="formGroupExampleInput" placeholder="Stok" value="<?php echo $bantuanIO_t->stok ?>" oninvalid="InvalidMsg(this);" 
                   oninput="InvalidMsg(this);" required>
   
</div> 
<div class="form-group">
  <label for="formGroupExampleInput">asumsi_harga</label>
  <input type="text" name="asumsi_harga" class="form-control" id="formGroupExampleInput" placeholder="Asumsi harga" value="<?php echo $bantuanIO_t->asumsi_harga ?>" oninvalid="InvalidMsg(this);" 
                   oninput="InvalidMsg(this);" required>
   
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