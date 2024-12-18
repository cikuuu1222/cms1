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

 <form action="<?= base_url('admin/konfigurasi/update') ?>" method="post">
  <div class="modal-content mt-3">
    <!-- Modal Header -->
    <div class="modal-header bg-primary text-white">
      <h5 class="modal-title" id="modalCenterTitle">Konfigurasi</h5>
    </div>

    <!-- Modal Body -->
    <div class="modal-body">
      <div class="mb-3">
        <label for="judul" class="form-label">Judul Website</label>
        <input type="text" class="form-control" id="judul" name="judul" value="<?= $konfig->judul_website; ?>" />
      </div>
      <div class="mb-3">
        <label for="profil_website" class="form-label">Profil</label>
        <textarea id="profil_website" name="profil_website" class="form-control" rows="4"><?= $konfig->profil_website; ?></textarea>
      </div>
      <div class="mb-3">
        <label for="instagram" class="form-label">Instagram</label>
        <input type="text" class="form-control" id="instagram" name="instagram" value="<?= $konfig->instagram; ?>" />
      </div>
      <div class="mb-3">
        <label for="facebook" class="form-label">Facebook</label>
        <input type="text" class="form-control" id="facebook" name="facebook" value="<?= $konfig->facebook; ?>" />
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" value="<?= $konfig->email; ?>" />
      </div>
      <div class="mb-3">
        <label for="alamat" class="form-label">Alamat</label>
        <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $konfig->alamat; ?>" />
      </div>
      <div class="mb-3">
        <label for="no_wa" class="form-label">WhatsApp</label>
        <input type="text" class="form-control" id="no_wa" name="no_wa" value="<?= $konfig->no_wa; ?>" />
      </div>
    </div>

    <!-- Modal Footer -->
    <div class="modal-footer">
      <button type="submit" class="btn btn-primary">Simpan</button>
    </div>
  </div>
</form>
