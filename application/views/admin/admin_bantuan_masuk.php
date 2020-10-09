         <!-- DataTales Example -->
         <section id="tabel" class="tabel">
         <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h4 align="center" class="m-0 font-weight-bold text-primary">Tabel Bantuan Masuk (Admin)</h4>
            </div>
            <div class="card-body">
            <a href="<?php echo base_url('bantuan/add_new#form') ?>" class="btn btn-success mb-2">Tambah Bantuan</a>
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama</th>
                      <th>Alamat</th>
                      <th>Kontak</th>
                      <th>Tanggal</th>
                      <th>Jenis Bantuan</th>
                      <th>Opsi</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php 
                  $no = 1;
                  foreach($bantuan as $row):?>
                                    <tr>
                                        <td><?php echo $no; ?></td>
                                        <!-- jika ada buku di dalam database maka tampilkan -->
                                        <td><?php echo $row->nama?></td>
                                        <td><?php echo $row->alamat?></td>
                                        <td><?php echo $row->kontak?></td>
                                        <td><?php echo $row->tanggal?></td>
                                        <td><?php echo $row->jenis_bantuan?></td>
                                        <td>
                                          <a href="<?php echo base_url();?>/index.php/bantuan/edit/<?= $row->id_bantuan?>#form" class="btn btn-success">Edit</a>
                                          <a href="<?php echo base_url();?>/index.php/bantuan/delete/<?= $row->id_bantuan?>" class="btn btn-danger">Delete</a>
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