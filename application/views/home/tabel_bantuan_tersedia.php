         <!-- DataTales Example -->
         <section id="tabel" class="tabel">
         <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h4 align="center" class="m-0 font-weight-bold text-primary">Tabel Rekap Bantuan Masuk/Keluar</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Jenis Bantuan</th>
                      <th>Satuan</th>
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