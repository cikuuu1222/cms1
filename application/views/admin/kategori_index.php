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
 <div class="col-lg-12 col-md-12 mt-3">
        <div class="mb-4 md-10">
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCenter">
            Tambah kategori
          </button>

          <!-- Modal -->
          <div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-md" role="document">
              <form action="<?= base_url('admin/kategori/simpan')?>" method="post">
              <div class="modal-content">
                <<div class="modal-header bg-primary text-white">
                  <h5 class="modal-title" id="modalCenterTitle">Tambah Kategori</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div class="row">
                    <div class="col mb-6">
                      <label class="form-label">Nama Kategori</label>
                      <input type="text" class="form-control" placeholder="Nama" name="nama_kategori" required />
                    </div>
                  </div>
                </div>
                <div class="modal-footer" >
                  <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
              </form>
              </div>
            </div>
          </div>
        </div>
      </div>

<div class="card">
  <h5 class="card-header">Kategori Kontent</h5>
  <div class="table-responsive text-nowrap">
    <table class="table">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama Kategori Konten</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-0">
        <?php $no=1; foreach ($kategori as $aa) {?>
        <tr>
            <td><?= $no;?></td>
            <td><?= $aa['nama_kategori']?></td>
            <td>
                  <a class="btn btn-sm btn-danger m-2"
                      onClick="return confirm('Apakah anda yakin ingin menghapus data ini??')"
                        href="<?= base_url('admin/kategori/delete_data/'.$aa['id_kategori']) ;?>">
                        <span class="tf-icons bx bx-trash">Hapus</span>
                  </a>
                  <button type="button" class="btn btn-sm btn-info m-2" data-bs-toggle="modal" data-bs-target="#edit<?= $aa['id_kategori']?>">
                    <span class="tf-icons bx bx-edit">Edit</span>
                  </button>
                  <div class="modal fade" id="edit<?= $aa['id_kategori']?>" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-md" role="document">
              <form action="<?= base_url('admin/kategori/update')?>" method="post">
              <input type="hidden" name="id_kategori" value="<?= $aa['id_kategori']?>">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="modalCenterTitle">Perbarui Kategori</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div class="row">
                    <div class="col mb-6">
                      <label class="form-label">Nama Kategori Konten</label>
                      <input type="text" class="form-control" value="<?= $aa['nama_kategori']?>" name="nama_kategori" />
                    </div>
                  </div>
                <div class="modal-footer" >
                  <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Simpan</button>
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