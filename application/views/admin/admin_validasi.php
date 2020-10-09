         <!-- DataTales Example -->
         <section id="tabel" class="tabel">
         <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h4 align="center" class="m-0 font-weight-bold text-primary">Tabel Data Pemohon (Admin)</h4>
            </div>
            <div class="card-body">
            <a href="<?php echo base_url('permohonan/add_new#form') ?>" class="btn btn-success mb-2">Tambah Permohonan</a>
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama</th>
                      <th>NIP/NIK</th>
                      <th>Instansi</th>
                      <th>Alamat</th>
                      <th>Kontak</th>
                      <th>Tanggal</th>
                      <th>Jenis Permohonan</th>
                      <th>Keterangan</th>
                      <th>Opsi</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php 
                  $no = 1;
                  foreach($permohonan as $row):?>
                                    <tr>
                                        <td><?php echo $no; ?></td>
                                        <!-- jika ada buku di dalam database maka tampilkan -->
                                        <td><?php echo $row->nama_pemohon ?></td>
                                        <td><?php echo $row->nip_pemohon ?></td>
                                        <td><?php echo $row->instansi_pemohon ?></td>
                                        <td><?php echo $row->alamat_pemohon ?></td>
                                        <td><?php echo $row->kontak_pemohon ?></td>
                                        <td><?php echo $row->tanggal_permohonan ?></td>
                                        <td><?php echo $row->jenis_permohonan ?></td>
                                        <td><?php echo $row->keterangan_pemohon ?></td>
                                        <td>
                                          <form action="<?php echo base_url('index.php/permohonan/validasi');?>" name="validasi" method="post" accept-charset="utf-8">
                                            <input type="hidden" name="id_permohonan" class="form-control" value="<?php echo $row->id_permohonan ?>">
                                            <input type="hidden" name="keterangan_pemohon" class="form-control" value="Tervalidasi">
                                            <input type="submit" name="validasi" value="Validasi" class="btn btn-primary">
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