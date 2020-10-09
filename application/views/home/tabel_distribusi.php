         <!-- DataTales Example -->
         <section id="tabel" class="tabel">
         <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h4 align="center" class="m-0 font-weight-bold text-primary">Tabel Distribusi Bantuan</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama</th>
                      <th>NIP/NIK</th>
                      <th>Alamat</th>
                      <th>Kontak</th>
                      <th>Tanggal Permohonan</th>
                      <th>Jumlah Paket</th>
                      <th>Jenis Distribusi</th>
                    </tr>
                  </thead>
                  <?php 
                  $no = 1; foreach($distribusi as $row):?>
                  <tbody>
                    <tr>
                      <td><?php echo $no; ?></td>
                      <td><?php echo $row->nama_pemohon ?></td>
                      <td><?php echo $row->nip_pemohon ?></td>
                      <td><?php echo $row->alamat_pemohon ?></td>
                      <td><?php echo $row->kontak_pemohon ?></td>
                      <td><?php echo $row->tanggal_permohonan ?></td>
                      <td><?php echo $row->jumlah_paket ?></td>
                      <td><?php echo $row->jenis_distribusi ?></td>
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