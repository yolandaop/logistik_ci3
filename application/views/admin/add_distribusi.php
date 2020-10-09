<section id="form" class="form">
<div class="card shadow mb-4">
<div class="card-header py-3">
    <h4 align="center" class="m-0 font-weight-bold text-primary">Form Rencana Distribusi</h4>
</div>
<div class="card-body">
<form action="<?php echo base_url('distribusi/save');?>" name="distribusi_create" id="distribusi_create" method="post" accept-charset="utf-8">

          <div class="form-group">
            <label for="id_permohonan">Id permohonan</label>
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
            <input type="number" name="jumlah_paket" class="form-control" id="jumlah_paket" placeholder="Masukkan jumlah paket anda" value="0" min="0" oninvalid="InvalidMsg(this);" 
                   oninput="InvalidMsg(this);" required>
          </div> 

          <h2 align="center"> Bantuan </h2>
          <?php
            $list="";
            $list_stok="";
            $list_out="";
            $list_sat="";
            $list_id="";
            foreach($bantuanIO as $row){
                echo '
                <div class="form-group">
                <label for="' . $row['jenis_barang'] . '">' . $row['jenis_barang'] .' ('. $row['satuan'] .')'. '</label>
                <input type="number" name="' . $row['jenis_barang'] . '" class="form-control" id="' . $row['jenis_barang'] . '" placeholder="Masukkan jumlah bantuan anda" value="0" min="0" oninvalid="InvalidMsg(this);" 
                      oninput="InvalidMsg(this);" required>
                </div> ';

                $list = $list.$row['jenis_barang'].",";
                $list_stok = $list_stok.$row['stok'].",";
                $list_out = $list_out.$row['bantuan_keluar'].",";
                $list_sat = $list_sat.$row['satuan'].",";
                $list_id = $list_id.$row['id_barang'].",";
              }
              $list = substr($list, 0, -1);
              $list_stok = substr($list_stok, 0, -1);
              $list_out = substr($list_out, 0, -1);
              $list_sat = substr($list_sat, 0, -1);
              $list_id = substr($list_id, 0, -1);
              
          ?>

          <input type="hidden" name="list" class="form-control" value="<?php echo $list; ?>">
          <input type="hidden" name="list_stok" class="form-control" value="<?php echo $list_stok; ?>">
          <input type="hidden" name="list_out" class="form-control" value="<?php echo $list_out; ?>">
          <input type="hidden" name="list_sat" class="form-control" value="<?php echo $list_sat; ?>">
          <input type="hidden" name="list_id" class="form-control" value="<?php echo $list_id; ?>">


          <div class="form-group">
            <label for="keterangan_distribusi">Keterangan</label>
            <input type="text" name="keterangan_distribusi" class="form-control" id="keterangan_distribusi" placeholder="Masukkan keterangan anda">
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