         <!-- DataTales Example -->
         <section id="tabel" class="tabel">
         <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h4 align="center" class="m-0 font-weight-bold text-primary">Tabel Rekap Bantuan Masuk/Keluar (Admin)</h4>
            </div>
            <div class="card-body">
            <a href="<?php echo base_url('bantuanIO/tambah_jenis#form') ?>" class="btn btn-success mb-2">Tambah Jenis Bantuan</a>
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Jenis Bantuan</th>
                      <th>Satuan</th>
                      <th>Barang Masuk</th>
                      <th>Barang Keluar</th>
                      <th>Stok</th>
                      <th>Asumsi Harga</th>
                      <th>Opsi</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php 
                  $no = 1;
                  foreach($bantuanIO as $row):?>
                      <tr>
                          <td><?php echo $no; ?></td>
                          <!-- jika ada buku di dalam database maka tampilkan -->
                          <td><?php echo $row->jenis_barang ?></td>
                          <td><?php echo $row->satuan ?></td>
                          <td><?php echo $row->bantuan_masuk ?></td>
                          <td><?php echo $row->bantuan_keluar ?></td>
                          <td><?php echo $row->stok ?></td>
                          <td><?php echo $row->asumsi_harga." / ".$row->satuan ?></td>
                          <td>
                            <a href="<?php echo base_url('index.php/bantuanIO/edit/'.$row->id_barang);?>#form" class="btn btn-success">Edit</a>
                            <a href="<?php echo base_url('index.php/bantuanIO/delete/'.$row->id_barang);?>" class="btn btn-danger">Delete</a>
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