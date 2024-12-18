<div id="ngilang">
      <?= $this->session->flashdata('alert')?>
 </div>

 <style>
  /* Tambahkan border, padding, dan sedikit shadow agar input terlihat lebih jelas */
  .form-control {
    border: 2px solid #ced4da; /* Warna border lebih tegas */
    padding: 10px; /* Memberi ruang dalam input */
    border-radius: 5px; /* Membuat sudut lebih lembut */
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Memberi sedikit bayangan */
  }

  /* Fokus pada input */
  .form-control:focus {
    border-color: #007bff; /* Warna biru saat fokus */
    box-shadow: 0 0 6px rgba(0, 123, 255, 0.25); /* Efek glow saat fokus */
  }

  /* Tambahkan margin pada label */
  .form-label {
    font-weight: bold; /* Teks label lebih tegas */
    margin-bottom: 5px;
  }

  /* Tambahkan margin pada seluruh form */
  .form-container {
    padding: 20px;
    background-color: #f9f9f9; /* Warna latar belakang form */
    border: 1px solid #ddd; /* Border di luar form */
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Memberikan efek shadow pada form */
  }
</style>
 <!-- Vertically Centered Modal -->
 <div class="col-lg-12 col-md-12">
  <div class="mb-4 mt-3">
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCenter">
      Tambah Konten
    </button>

    <!-- Modal -->
    <div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <form action="<?= base_url('admin/konten/simpan') ?>" method="post" enctype="multipart/form-data">
      <div class="modal-content">
        <!-- Header -->
        <div class="modal-header bg-primary text-white">
          <h5 class="modal-title" id="modalCenterTitle">Tambah Konten</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <!-- Body -->
        <div class="modal-body">
          <!-- Judul -->
          <div class="mb-3">
            <label class="form-label fw-bold">Judul</label>
            <input 
              type="text" 
              class="form-control shadow-sm" 
              placeholder="Masukkan judul konten" 
              name="judul" 
              required />
          </div>

          <!-- Kategori -->
          <div class="mb-3">
            <label class="form-label fw-bold">Kategori</label>
            <select 
              name="id_kategori" 
              class="form-select shadow-sm">
              <?php foreach ($kategori as $aa) { ?>
                <option value="<?= $aa['id_kategori'] ?>">
                  <?= $aa['nama_kategori'] ?>
                </option>
              <?php } ?>
            </select>
          </div>

          <!-- Keterangan -->
          <div class="mb-3">
            <label class="form-label fw-bold">Keterangan</label>
            <textarea 
              name="keterangan" 
              class="form-control shadow-sm" 
              rows="4" 
              placeholder="Tambahkan deskripsi konten"></textarea>
          </div>

          <!-- Harga -->
          <div class="mb-3">
            <label class="form-label fw-bold">Harga</label>
            <input 
              type="number" 
              name="Harga" 
              class="form-control shadow-sm" 
              placeholder="Masukkan harga" 
              required />
          </div>

          <!-- Foto -->
          <div class="mb-3">
            <label class="form-label fw-bold">Foto</label>
            <input 
              type="file" 
              name="foto" 
              class="form-control shadow-sm" 
              accept="image/png, image/jpeg" />
            <small class="text-muted">Hanya file gambar (PNG/JPEG) yang diperbolehkan.</small>
          </div>
        </div>

        <!-- Footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
            Tutup
          </button>
          <button type="submit" class="btn btn-primary">
            Simpan
          </button>
        </div>
      </div>
    </form>
  </div>
</div>



<div class="card">
  <h5 class="card-header">Kategori Kontent</h5>
  <div class="table-responsive text-nowrap">
    <table class="table">
      <thead>
        <tr>
          <th>No</th>
          <th>Judul</th>
          <th>Kategori Konten</th>
          <th>Tanggal</th>
          <th>Kreator</th>
          <th>Harga</th>
          <th>Foto</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
        <?php $no=1; foreach($konten as $aa) {?>
        <tr>
            <td><?= $no;?></td>
            <td><?= $aa['judul']?></td>
            <td><?= $aa['nama_kategori']?></td>
            <td><?= $aa['tanggal']?></td>
            <td><?= $aa['username']?></td>
            <td><?= $aa['Harga']?></td>
            <td>
               <a href="<?=base_url('assets/upload/konten/') . $aa['foto']?>" target="_blank">
              <span class="tf-icons bx bx-search"></span> Lihat Foto
               </a>
            </td>
           
            <td>
            <a class="btn btn-danger action-btn m-2"
                onClick="return confirm('Apakah anda yakin ingin menghapus data ini??')"
                href="<?= base_url('admin/konten/delete_data/') .$aa['id_konten']?>">
              <span class="tf-icons bx bx-trash">Hapus</span>
            </a>
          <button type="button" class="btn btn-primary action-btn mb-1 m-2" data-bs-toggle="modal" data-bs-target="#konten<?= $no;?>">
            <span class="tf-icons bx bx-edit">Edit</span>
          </button>

          <!-- Modal -->
          <div class="modal fade" id="konten<?= $no;?>" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <form action="<?= base_url('admin/konten/update')?>" method="post" enctype="multipart/form-data">
      <div class="modal-content">
        <input type="hidden" name="nama_foto" value="<?= $aa['foto']?>">
        
        <!-- Modal Header -->
        <div class="modal-header">
          <h5 class="modal-title" id="modalCenterTitle"><?= $aa['judul']?></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        
        <!-- Modal Body -->
        <div class="modal-body">
          <div class="mb-3">
            <label class="form-label">Judul</label>
            <input type="text" class="form-control" value="<?= $aa['judul']?>" name="judul" />
          </div>
          
          <div class="mb-3">
            <label class="form-label">Kategori</label>
            <select name="id_kategori" class="form-control">
              <?php foreach ($kategori as $uu) { ?>
                <option
                  <?php if($uu['id_kategori'] == $aa['id_kategori']) {echo "selected";} ?>
                  value="<?= $uu['id_kategori'] ?>">
                  <?= $uu['nama_kategori'] ?>
                </option>
              <?php } ?>
            </select>
          </div>

          <div class="mb-3">
            <label class="form-label">Keterangan</label>
            <textarea name="keterangan" class="form-control"><?= $aa['keterangan']?></textarea>
          </div>

          <div class="mb-3">
                <label class="form-label">Harga</label>
                <input name="Harga" class="form-control" placeholder="Harga" required/>
              </div>
          
          <div class="mb-3">
            <label class="form-label">Foto</label>
            <input type="file" name="foto" class="form-control" accept="image/png, image/jpeg" />
          </div>
        </div>
        
        <!-- Modal Footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </div>
    </form>
  </div>
</div>

            </td>
         
            
          </tr>
          <?php $no++;} ?>
        </tbody>
        
    </table>
  </div>
</div>