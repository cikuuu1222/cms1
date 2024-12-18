<!-- Examples -->
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

<div class="col-xl-12 mt-3">
  <div class="card">
    <form action="<?= base_url('admin/caraousel/simpan') ?>" method="post" enctype="multipart/form-data">
      <!-- Header -->
      <h5 class="card-header">File Input</h5>
      
      <!-- Form Body -->
      <div class="card-body">
        <!-- Judul Foto -->
        <div class="mb-3">
          <label for="judul" class="form-label">Judul</label>
          <input type="text" id="judul" class="form-control" placeholder="Judul Foto" name="judul" required />
        </div>

        <!-- Upload Foto -->
        <div class="mb-3">
          <label for="formFile" class="form-label">Pilih Foto Dengan Ukuran (1:3)</label>
          <input class="form-control" type="file" id="formFile" name="foto" required />
        </div>
      </div>

      <!-- Footer -->
      <div class="card-footer d-flex justify-content-end gap-2">
        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
    </form>
  </div>
</div>

<?php foreach($caraousel as $aa){?>
<div class="row mb-7 g-6">
  <div class="col-md-6 mb-3 mt-3">
    <div class="card h-100 mt-7">
      <img class="card-img-top" src="<?=base_url('assets/upload/caraousel/') . $aa['foto']?>" />
      <div class="card-body">
        <h5 class="card-title"><?= $aa['judul']?></h5>
        <a class="btn btn-danger action-btn m-2"
                onClick="return confirm('Apakah anda yakin ingin menghapus data ini??')"
                href="<?= base_url('admin/caraousel/delete_data/') .$aa['foto']?>">
              <span class="tf-icons bx bx-trash">Hapus</span>
            </a>
      </div>
    </div>
  </div>
</div>
<?php } ?>
<!-- Examples -->