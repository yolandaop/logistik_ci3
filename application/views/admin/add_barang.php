<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> 
 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>  
 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script>
</head>

<section id="form" class="form">
<div class="card shadow mb-4">
<div class="card-header py-3">
<br>
<?= \Config\Services::validation()->listErrors(); ?>
 
    <span class="d-none alert alert-success mb-3" id="res_message"></span>
    <h4 align="center" class="m-0 font-weight-bold text-primary">Form Tambah Jenis Barang</h4>
</div>
<div class="card-body">
<form action="<?php echo base_url('bantuanIO/simpan_jenis');?>" name="tambah_jenis" id="tambah_jenis" method="post" accept-charset="utf-8">
 
          <div class="form-group">
            <label for="formGroupExampleInput">Nama Barang</label>
            <input type="text" name="jenis_barang" class="form-control" id="formGroupExampleInput" placeholder="Jenis barang baru" oninvalid="InvalidMsg(this);" 
                   oninput="InvalidMsg(this);" required>
             
          </div> 
 
          <div class="form-group">
            <label for="formGroupExampleInput">Satuan</label>
            <input type="text" name="satuan" class="form-control" id="formGroupExampleInput" placeholder="Satuan Komoditas" oninvalid="InvalidMsg2(this);" 
                   oninput="InvalidMsg2(this);" required>
             
          </div>  
          <div class="form-group">
            <label for="formGroupExampleInput">Asumsi Harga</label>
            <input type="text" name="asumsi_harga" class="form-control" id="formGroupExampleInput" placeholder="Harga Asumsi" oninvalid="InvalidMsg3(this);" 
                   oninput="InvalidMsg3(this);" required>
             
          </div>   
          
          <input name="stok" type="hidden" value="0">
          <input name="bantuan_masuk" type="hidden" value="0">
          <input name="bantuan_keluar" type="hidden" value="0">

          <div class="form-group">
           <button type="submit" id="send_form" class="btn btn-primary">Submit</button>
          </div>
          
        </form>

</div>
</div>
</div>

<script> 
        function InvalidMsg(textbox) { 
  
            if (textbox.value === '') { 
                textbox.setCustomValidity 
                      ('Masukan Nama Barang'); 
            } else { 
                textbox.setCustomValidity(''); 
            } 
  
            return true; 
        } 
        function InvalidMsg2(textbox) { 
  
          if (textbox.value === '') { 
              textbox.setCustomValidity 
                    ('Masukan Satuan Barang'); 
          } else { 
              textbox.setCustomValidity(''); 
          } 

          return true; 
        } 
        function InvalidMsg3(textbox) { 
  
          if (textbox.value === '') { 
              textbox.setCustomValidity 
                    ('Masukan Asumsi Harga'); 
          } else { 
              textbox.setCustomValidity(''); 
          } 

          return true; 
        } 
    </script> 



