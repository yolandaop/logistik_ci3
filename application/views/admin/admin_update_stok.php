         <!-- DataTales Example -->
         <section id="tabel" class="tabel">
         <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h4 align="center" class="m-0 font-weight-bold text-primary">Update Bantuan Masuk/Keluar</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                    <th>Id barang</th>
                    <th>Jenis</th>
                    <th>Satuan</th>
                    <th>Masuk</th>
                    <th>Keluar</th>
                    <th>Stok Saat ini</th>
                    <th>Perubahan Stok</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php 
                  $no = 1;
                  foreach($bantuanIO as $row):?>
                      <tr>
                            <!-- jika ada buku di dalam database maka tampilkan -->
                          <td><?php echo $no; ?></td>
                          <td><?= $row['jenis_barang'];?></td>
                          <td><?= $row['satuan'];?></td>
                          <td><?= $row['bantuan_masuk'];?></td>
                          <td><?= $row['bantuan_keluar'];?></td>
                          <td><?= $row['stok'];?></td>
                          <td>
                          <form action="<?php echo base_url('bantuanIO/aksi_update_stok_bantuan');?>" name="tambah bantuan" method="post" accept-charset="utf-8">
                
                            <input type="hidden" name="id_barang" class="form-control" value="<?php echo $row['id_barang']; ?>">
                            <input type="hidden" name="stok_asli" class="form-control" value="<?php echo $row['stok']; ?>">
                            <input type="hidden" name="masuk_asli" class="form-control" value="<?php echo $row['bantuan_masuk']; ?>">
                            <input type="hidden" name="keluar_asli" class="form-control" value="<?php echo $row['bantuan_keluar']; ?>">

                            <div class="form-group">
                            <input type="text" name="nilai" class="form-control" id="formGroupExampleInput" placeholder="Perubahan Stok">
                        
                            </div>   
                
                            <div class="form-group">
                            <input type="submit" name="Masuk" value="Masuk" class="btn btn-success">
                            <input type="submit" name="Keluar" value="Keluar" class="btn btn-warning">

                            </div>
                        
                        </form>
                          </td>
                      </tr>
                  <?php $no++; endforeach; ?>    
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          </div>
      <!-- End of Main Content -->
      </section><!-- End Services Section -->