<section id="form" class="form">
<div class="card shadow mb-4">
<div class="card-header py-3">
    <h4 align="center" class="m-0 font-weight-bold text-primary">Form Pemberi Bantuan</h4>
</div>
<div class="card-body">
<form action="<?php echo base_url('bantuan/save');?>" name="permohonan_create" id="permohonan_create" method="post" accept-charset="utf-8">
 
<div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan nama anda" oninvalid="InvalidMsg(this);" 
                   oninput="InvalidMsg(this);" required>
          </div> 
 
          <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Masukkan alamat anda" oninvalid="InvalidMsg(this);" 
                   oninput="InvalidMsg(this);" required>
          </div>   

          <div class="form-group">
            <label for="kontak">Kontak</label>
            <input type="text" name="kontak" class="form-control" id="kontak" placeholder="Masukkan kontak anda" oninvalid="InvalidMsg(this);" 
                   oninput="InvalidMsg(this);" required>
          </div> 
          <h2 align="center"> Bantuan </h2>
          <?php
            $list="";
            $list_stok="";
            $list_in="";
            $list_sat="";
            $list_id="";
            foreach($bantuanIO as $row){
                echo '<div class="form-group">
                <label for="' . $row['jenis_barang'] . '">' . $row['jenis_barang'] .' ('. $row['satuan'] .')'. '</label>
                <input type="number" name="' . $row['jenis_barang'] . '" class="form-control" id="' . $row['jenis_barang'] . '" placeholder="Masukkan jumlah bantuan anda" value="0" min="0" oninvalid="InvalidMsg(this);" 
                      oninput="InvalidMsg(this);" required>
                </div> ';

                $list = $list.$row['jenis_barang'].",";
                $list_stok = $list_stok.$row['stok'].",";
                $list_in = $list_in.$row['bantuan_masuk'].",";
                $list_sat = $list_sat.$row['satuan'].",";
                $list_id = $list_id.$row['id_barang'].",";
              }
              $list = substr($list, 0, -1);
              $list_stok = substr($list_stok, 0, -1);
              $list_in = substr($list_in, 0, -1);
              $list_sat = substr($list_sat, 0, -1);
              $list_id = substr($list_id, 0, -1);
              
          ?>

          <input type="hidden" name="list" class="form-control" value="<?php echo $list; ?>">
          <input type="hidden" name="list_stok" class="form-control" value="<?php echo $list_stok; ?>">
          <input type="hidden" name="list_in" class="form-control" value="<?php echo $list_in; ?>">
          <input type="hidden" name="list_sat" class="form-control" value="<?php echo $list_sat; ?>">
          <input type="hidden" name="list_id" class="form-control" value="<?php echo $list_id; ?>">

          <div class="form-group">
            <label for="catatan">Catatan</label>
            <input type="text" name="catatan" class="form-control" id="catatan" placeholder="Masukkan catatan anda">
          </div> 
 
          <div class="form-group">
           <button type="submit" id="send_form" class="btn btn-success">Submit</button>
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